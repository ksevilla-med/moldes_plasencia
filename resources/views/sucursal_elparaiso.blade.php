@extends('principal')


@section('content')

<!-- Libreria de las alertas -->
<script src= "{{ URL::asset('https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js') }}"></script>
<link rel="stylesheet" href="{{ URL::asset('https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css') }}">



<button type="button" class=" btn-info float-right"   data-toggle="modal" data-target="#modal_agregar_moldes" >
      <span> Agregar moldes</span>
  </button>



  <button type="button" class=" btn-info float-right"  data-toggle="modal" data-target="#modal_agregar_vitola" style="margin-right: 10px">
      <span> Agregar vitola</span>
  </button>

  <button type="button" class=" btn-info float-right"  data-toggle="modal" data-target="#modal_agregar_figuraytipo" style="margin-right: 10px">
      <span> Agregar figura y tipo</span>
  </button>


  <form action=  "{{Route('imprimirdatosparaiso',1)}}" method= "POST">
  @csrf
  <button type="submit" class=" btn-info float-right"  style="margin-right: 10px">
      <span> Imprimir Reporte</span>
  </button>
  </form>  




  






<!-- INICIO DEL MODAL NUEVO MOLDE -->

<form action =  "{{Route('insertar_moldes',1)}}" method= "POST" id="Form_Moldes">

<div class="modal fade" id="modal_agregar_moldes" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" style="opacity:.9;background:#212529;width=800px;">
  <div class="modal-dialog modal-dialog-centered modal-lg"  style="opacity:.9;background:#212529;width=80%">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Agregar Moldes</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close" ></button>
      </div>
     
      <div class="modal-body">
          <div class="card-body">  
            

              <div class="row">

                  <div class="mb-3 col">
                    <label for="txt_figuraytipo" class="form-label">Figura y tipo</label>
                      <input class="form-control" type= "text"list="prediccionfiguraytipo" id="txt_figuraytipo" name="id_figura" placeholder="Ingresa figura y tipo">
                        <datalist id="prediccionfiguraytipo" >                
                      
                        @foreach($figuras as $figura)
                        <option value =  "{{$figura-> nombre_figura}}" >
                        @endforeach
                        
                        </datalist> 
                  </div>

                  <div class="mb-3 col">
                    <label for="txt_vitola" class="form-label">Vitola</label>
                        <input class="form-control"  type= "text" list="prediccionvitola" id="txt_vitola"  name="id_vitola" placeholder="Ingresa la vitola">
                          <datalist id="prediccionvitola" class= "row">
                            @foreach($vitolas as $vitola)
                              <option value =  "{{$vitola-> nombre_vitola}}" >
                            @endforeach
                           
                          </datalist> 
                  </div>

                  <div class="mb-3 col">
                  <label for="txt_total" class="form-label">Total</label>
                  <input class="form-control" id="txt_total" placeholder="Cantidad" name ="total"required type="number" min="1" max="999999" minLength="1" maxLength="6">        
                  </div>
            
              </div> 




              <div class="row">

                  <div class="mb-3 col">
                  <label for="txt_buenos" class="form-label">Buenos</label>
                  <input class="form-control" id="txt_buenos"  name="bueno"placeholder="Cantidad" type="number">        
                  </div>
                  <div class="mb-3 col">            
                  <label for="txt_irregulares" class="form-label">Irregulares</label>
                  <input class="form-control" id="txt_irregulares" name="irregulares" placeholder="Cantidad" type="number">  
                  </div>
                  <div class="mb-3 col">
                  <label for="txt_malos" class="form-label">Malos</label>
                  <input class="form-control" id="txt_malos" name="malos"placeholder="Cantidad" type="number">  
                  </div>

              </div>


              <div class="row">

                  <div class="mb-3 col">
                  <label for="txt_salon" class="form-label">Salon</label>
                  <input class="form-control" id="txt_salon"  name="salon"placeholder="Cantidad" type="number">        
                  </div>
                  <div class="mb-3 col">            
                  <label for="txt_bodega" class="form-label">Bodega</label>
                  <input class="form-control" id="txt_bodega" name="bodega" placeholder="Cantidad" type="number">  
                  </div>
                  <div class="mb-3 col">
                  <label for="txt_reparacion" class="form-label">Reparación</label>
                  <input class="form-control" id="txt_reparacion" name="reparacion" placeholder="Cantidad" type="number">  
                  <input name = "id_planta"  value ='1' hidden />
                  </div>

              </div>
          
           
             
        </div>
      </div>
    
      <div class="modal-footer" >
        <button style=" background: #b39f64; color: #ecedf1;" type="button" class=" btn-info-claro " data-dismiss="modal" >
            <span>Cancelar</span>
            @csrf
        </button>
        <button  class=" btn-info " onclick="validar()" >
            <span>Guardar</span>
        </button>

        
      </div>
    </div>
  </div>
</div>

</form>
<!-- FIN DEL MODAL NUEVO MOLDE -->





<!-- INICIO MODAL VITOLA -->
<div class="modal fade" id="modal_agregar_vitola" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" style="opacity:.9;background:#212529;">
  <div class="modal-dialog modal-dialog-centered" >
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Agregar Vitola</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="mb-3 col">            
      <label for="txt_vitola" class="form-label">Vitola</label>
      <input class="form-control" id="txt_vitola" type="text" name="vitola" placeholder="Cantidad" maxLength="30">  
      </div>
      </div>
      <div class="modal-footer" >
        <button style=" background: #b39f64; color: #ecedf1;" type="button" class=" btn-info-claro " data-dismiss="modal" >
            <span>Cancelar</span>
        </button>
        <button type="button" class=" btn-info ">
            <span>Guardar</span>
        </button>
      </div>
    </div>
  </div>
</div>
<!-- FIN MODAL VITOLA -->



<!-- INICIO MODAL FIGURA Y TIPO -->
<div class="modal fade" id="modal_agregar_figuraytipo" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" style="opacity:.9;background:#212529;">
  <div class="modal-dialog modal-dialog-centered" >
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Agregar Vitola</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="mb-3 col">            
      <label for="txt_figuraytipo" class="form-label">Figura y tipo</label>
      <input class="form-control" id="txt_figuraytipo" type="text" name="figuraytipo" placeholder="Cantidad" maxLength="30">  
      </div>
      </div>
      <div class="modal-footer" >
        <button style=" background: #b39f64; color: #ecedf1;" type="button" class=" btn-info-claro " data-dismiss="modal" >
            <span>Cancelar</span>
        </button>
        <button type="button" class=" btn-info ">
            <span>Guardar</span>
        </button>
      </div>
    </div>
  </div>
</div>
<!-- FIN MODAL FIGURA Y TIPO -->








<!-- INICIO DEL MODAL EDITAR MOLDE -->

<form >

<div class="modal fade" id="modal_editar_moldes" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" style="opacity:.9;background:#212529;width=800px;">
  <div class="modal-dialog modal-dialog-centered modal-xl"  style="opacity:.9;background:#212529;width=80%">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel" >Editar Moldes (figura y vitola)</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close" ></button>
      </div>
     
      <div class="modal-body">
          <div class="card-body">            

           




              <div class="row">

              <div class="mb-3 col">
                  <label for="txt_total" class="form-label">Total</label>
                  <input class="form-control" id="txt_total" placeholder="Cantidad" name ="total"required type="number" min="1" max="999999" minLength="1" maxLength="6">        
                  </div>

                  <div class="mb-3 col">
                  <label for="txt_buenos" class="form-label">Buenos</label>
                  <input class="form-control" id="txt_buenos"  name="bueno"placeholder="Cantidad" type="number">        
                  </div>
                  <div class="mb-3 col">            
                  <label for="txt_irregulares" class="form-label">Irregulares</label>
                  <input class="form-control" id="txt_irregulares" name="irregulares" placeholder="Cantidad" type="number">  
                  </div>
                  <div class="mb-3 col">
                  <label for="txt_malos" class="form-label">Malos</label>
                  <input class="form-control" id="txt_malos" name="malos"placeholder="Cantidad" type="number">  
                  </div>

                  <div class="mb-3 col">
                  <label for="txt_salon" class="form-label">Salon</label>
                  <input class="form-control" id="txt_salon"  name="salon"placeholder="Cantidad" type="number">        
                  </div>
                  <div class="mb-3 col">            
                  <label for="txt_bodega" class="form-label">Bodega</label>
                  <input class="form-control" id="txt_bodega" name="bodega" placeholder="Cantidad" type="number">  
                  </div>
                  <div class="mb-3 col">
                  <label for="txt_reparacion" class="form-label">Reparación</label>
                  <input class="form-control" id="txt_reparacion" name="reparacion" placeholder="Cantidad" type="number">  
               
                  </div>

              </div>


          
           
             
        </div>
      </div>
    
      <div class="modal-footer" >
        <button style=" background: #b39f64; color: #ecedf1;" type="button" class=" btn-info-claro " data-dismiss="modal" >
            <span>Cancelar</span>
            @csrf
        </button>
        <button  class=" btn-info " onclick="validar()" >
            <span>Guardar</span>
        </button>

        
      </div>
    </div>
  </div>
</div>

</form>
<!-- FIN DEL MODAL EDITAR MOLDE -->














<!-- INICIO DEL TABLA MOLDE -->
    <table class="table table-striped table-secondary table-bordered border-primary ">
        <thead class= "table-dark">
        <tr>
            <th scope="col">Planta</th>
            <th scope="col">Vitola</th>
            <th scope="col">Figura y tipo</th>
            <th scope="col">Buenos</th>
            <th scope="col">Irregulares</th>
            <th scope="col">Malos</th>
            <th scope="col">Bodega</th>
            <th scope="col">Reparación</th>
            <th scope="col">Salón</th>
            <th scope="col">Total</th>
            <th scope="col">Editar</th>
            
         </thead>
         <tbody>
            @foreach($moldes as $molde)
            <tr> 
                  <td> {{$molde->nombre_planta}}</td> 
                  <td>{{$molde->vitola}}</td>
                  <td>{{$molde->nombre_figura}}</td>
                  <td>{{$molde->bueno}}</td>
                  <td>{{$molde->irregulares}}</td>
                  <td>{{$molde->malos}}</td>
                  <td>{{$molde->bodega}}</td>
                  <td>{{$molde->reparacion}}</td>
                  <td>{{$molde->salon}}</td>
                  <td>{{$molde->total}}</td>

                  <td style="padding:0px; text-align:center;    vertical-align: inherit;" >
                  <a data-toggle="modal" data-target="#modal_editar_moldes" >
                  <svg xmlns="http://www.w3.org/2000/svg" width=25 height="25" fill="black" class="bi bi-pencil-square" viewBox="0 0 16 16">
                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                  </svg>
                  </a>
                  
                  
                  </td>
            
                 
             </tr>
            @endforeach

            <tr>
            <td>Total</td>
            <td></td>
            <td></td>
            
             
            <td>
                <?php
                $suma_b=0;
                foreach ($moldes as $molde)
                 {
                  $suma_b+=$molde->bueno;
                }
                
                ?>   {{$suma_b}}
            </td>
            <td>
              <?php
               $suma_i=0;
                foreach ($moldes as $molde)
                 {
                  $suma_i+=$molde->irregulares;
                }
                ?>   {{$suma_i}}</td>
            <td>
            <?php
             $suma_m=0;
                foreach ($moldes as $molde)
                 {
                  $suma_m+=$molde->malos;
                }
                ?>   {{$suma_m}}
            </td>
            <td>
            <?php
            $suma_bo=0;
                foreach ($moldes as $molde)
                 {
                  $suma_bo+=$molde->bodega;
                }
                ?>   {{$suma_bo}}
            </td>
            <td>
            <?php
            $suma_r=0;
                foreach ($moldes as $molde)
                 {
                  $suma_r+=$molde->reparacion;
                }
                ?>   {{$suma_r}}
            </td>
            <td>
            <?php
            $suma_s=0;
                foreach ($moldes as $molde)
                 {
                  $suma_s+=$molde->salon;
                }
                ?>   {{$suma_s}}
            </td>
            <td>
            <?php
            $suma_total=0;
                foreach ($moldes as $molde)
                 {
                  $suma_total+=$molde->total;
                }
                ?>   {{$suma_total}}
            </td>
            </tr>
          <tbody>
    </table>
<!-- FIN DEL TABLA MOLDE -->







    
    <!-- INICIO VALIDACION  DE MODAL,INGRESAR MOLDES -->
    <script type="text/javascript">
    function validar(){ 
        var v_buenos = document.getElementById('txt_buenos').value;
        var v_irregulares = document.getElementById('txt_irregulares').value;
        var v_malos = document.getElementById('txt_malos').value;
        var v_bodega = document.getElementById('txt_bodega').value;
        var v_reparacion = document.getElementById('txt_reparacion').value;
        var v_salon = document.getElementById('txt_salon').value;
        var v_total = document.getElementById('txt_total').value; 
        var theForm = document.forms['Form_Moldes'];
       
        if(v_buenos==""){ v_buenos = "0";}
       if(v_irregulares==""){ v_irregulares = "0";}
       if(v_malos==""){ v_malos = "0";}
       if(v_bodega==""){ v_bodega = "0";}
       if(v_reparacion==""){ v_reparacion = "0";}
       if(v_salon==""){ v_salon = "0";}


  if( parseInt(v_total) == (parseInt(v_buenos)+parseInt(v_irregulares)+parseInt(v_malos))&&          
  parseInt(v_total) == (parseInt(v_bodega)+parseInt(v_reparacion)+parseInt(v_salon))){          
  toastr.success( 'Tus datos se guardaron correctamente','BIEN',{"progressBar": true,"closeButton": false,"preventDuplicates": true
    , "preventOpenDuplicates": true} );
    theForm.addEventListener('submit', function (event) {
    });
  
  }else  if(v_total == "" || parseInt(v_total) > 999999 ||  parseInt(v_total) < 1  ) {
    toastr.error( 'El total de ser mayor o igual a 1, o menor que 1000000','ERROR',{"progressBar": true,"closeButton": false, "preventDuplicates": true
    , "preventOpenDuplicates": true });
    event.preventDefault();
  }  else  if(parseInt(v_total) != (parseInt(v_buenos)+parseInt(v_irregulares)+parseInt(v_malos))&& 
parseInt(v_total) == (parseInt(v_bodega)+parseInt(v_reparacion)+parseInt(v_salon)) ){
toastr.error( 'Tus datos de estado coinciden con el total','ERROR',{"progressBar": true,"closeButton": false,"preventDuplicates": true
    , "preventOpenDuplicates": true} );
event.preventDefault();
}else if(parseInt(v_total) == (parseInt(v_buenos)+parseInt(v_irregulares)+parseInt(v_malos))&& 
parseInt(v_total) != (parseInt(v_bodega)+parseInt(v_reparacion)+parseInt(v_salon)) ){
toastr.error( 'Tus datos de ubicación coinciden con el total','ERROR',{"progressBar": true,"closeButton": false,"preventDuplicates": true
    , "preventOpenDuplicates": true} );
event.preventDefault();
}else if(parseInt(v_total) != (parseInt(v_buenos)+parseInt(v_irregulares)+parseInt(v_malos))&& 
parseInt(v_total) != (parseInt(v_bodega)+parseInt(v_reparacion)+parseInt(v_salon)) ) {        
toastr.error( 'Tus datos no coinciden con el total','ERROR',{"progressBar": true,"closeButton": false,"preventDuplicates": true
    , "preventOpenDuplicates": true} );     
event.preventDefault();
}
}
 </script>
    <!-- FIN VALIDACION  DE MODAL,INGRESAR MOLDES -->   




@endsection