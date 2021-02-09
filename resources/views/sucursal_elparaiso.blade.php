@extends('principal')


@section('content')

<!-- Libreria de las alertas -->
<script src= "{{ URL::asset('https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js') }}"></script>
<link rel="stylesheet" href="{{ URL::asset('https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css') }}">



<button type="button" class=" btn-info "  data-toggle="modal" data-target="#modal_agregar_moldes" data-bs-whatever="Sucursal El Paraiso">
     <span> Agregar moldes</span>
</button>


<!--consulta insertar -->



<!-- INICIO DEL MODAL NUEVO MOLDE -->




<form action =  "{{Route('insertar_moldes',1)}}" method= "POST">

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
                  <input class="form-control" id="txt_total" placeholder="Cantidad" required type="number" min="1" max="999999" minLength="1" maxLength="6">        
                  </div>
            
              </div> 




              <div class="row">

                  <div class="mb-3 col">
                  <label for="txt_buenos" class="form-label">Buenos</label>
                  <input class="form-control" id="txt_buenos" type="text" name="bueno"placeholder="Cantidad" type="number">        
                  </div>
                  <div class="mb-3 col">            
                  <label for="txt_irregulares" class="form-label">Irregulares</label>
                  <input class="form-control" id="txt_irregulares" type="text"name="irregulares" placeholder="Cantidad" type="number">  
                  </div>
                  <div class="mb-3 col">
                  <label for="txt_malos" class="form-label">Malos</label>
                  <input class="form-control" id="txt_malos"  type="text" name="malos"placeholder="Cantidad" type="number">  
                  </div>

              </div>


              <div class="row">

                  <div class="mb-3 col">
                  <label for="txt_salon" class="form-label">Salon</label>
                  <input class="form-control" id="txt_salon" type="text" name="salon"placeholder="Cantidad" type="number">        
                  </div>
                  <div class="mb-3 col">            
                  <label for="txt_bodega" class="form-label">Bodega</label>
                  <input class="form-control" id="txt_bodega"type="text" name="bodega" placeholder="Cantidad" type="number">  
                  </div>
                  <div class="mb-3 col">
                  <label for="txt_reparacion" class="form-label">Reparación</label>
                  <input class="form-control" id="txt_reparacion" type="text" name="reparacion" placeholder="Cantidad" type="number">  
                  <input name="id_planta" value= "1">  
                  </div>

              </div>
          
           
             
        </div>
      </div>
    
      <div class="modal-footer" >
        <button style=" background: #b39f64; color: #ecedf1;" type="button" class=" btn-info-claro " data-dismiss="modal" >
            <span>Cancelar</span>
            @csrf
        </button>
        <button type="submit" class=" btn-info " onclick="validar()" >
            <span>Guardar</span>
        </button>

        
      </div>
    </div>
  </div>
</div>

</form>
<!-- FIN DEL MODAL NUEVO MOLDE -->











<!-- INICIO DEL TABLA MOLDE -->
<h1>Inventario de moldes El Paraíso</h1>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Planta</th>
            <th scope="col">Vitola</th>
            <th scope="col">Figura y tipo</th>
            <th scope="col">Buenos</th>
            <th scope="col">Irregulares</th>
            <th scope="col">Malos</th>
            <th scope="col">Bodega</th>
            <th scope="col">Reparacion</th>
            <th scope="col">Salon</th>
         </thead>
         <tbody>
            @foreach($moldes as $molde)
            <tr> 
                  <th scope="row">{{$molde->nombre_planta}}</td> 
                  <td>{{$molde->vitola}}</td>
                  <td>{{$molde->nombre_figura}}</td>
                  <td>{{$molde->bueno}}</td>
                  <td>{{$molde->irregulares}}</td>
                  <td>{{$molde->malos}}</td>
                  <td>{{$molde->bodega}}</td>
                  <td>{{$molde->reparacion}}</td>
                  <td>{{$molde->salon}}</td>
            
                   </td>
             </tr>
            @endforeach
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
       
        if(v_buenos==""){ v_buenos = "0";}
       if(v_irregulares==""){ v_irregulares = "0";}
       if(v_malos==""){ v_malos = "0";}
       if(v_bodega==""){ v_bodega = "0";}
       if(v_reparacion==""){ v_reparacion = "0";}
       if(v_salon==""){ v_salon = "0";}

       if(v_total == "" || parseInt(v_total) > 999999 ||  parseInt(v_total) < 1   ){

toastr.error( 'El total de ser mayor o igual a 1, o menor que 1000000','ERROR',{"progressBar": true,"closeButton": false} );



}else if( parseInt(v_total) === (parseInt(v_buenos)+parseInt(v_irregulares)+parseInt(v_malos))&&          
parseInt(v_total) === (parseInt(v_bodega)+parseInt(v_reparacion)+parseInt(v_salon))){              

toastr.success( 'Tus datos se guardaron correctamente','BIEN',{"progressBar": true,"closeButton": false} );

}else if(parseInt(v_total) != (parseInt(v_buenos)+parseInt(v_irregulares)+parseInt(v_malos))&& 
 parseInt(v_total) === (parseInt(v_bodega)+parseInt(v_reparacion)+parseInt(v_salon)) ){

toastr.error( 'Tus datos de estado coinciden con el total','ERROR',{"progressBar": true,"closeButton": false} );

}else if(parseInt(v_total) === (parseInt(v_buenos)+parseInt(v_irregulares)+parseInt(v_malos))&& 
parseInt(v_total) != (parseInt(v_bodega)+parseInt(v_reparacion)+parseInt(v_salon)) ){

toastr.error( 'Tus datos de ubicación coinciden con el total','ERROR',{"progressBar": true,"closeButton": false} );

}else {        
toastr.error( 'Tus datos no coinciden con el total','ERROR',{"progressBar": true,"closeButton": false} );     
}
                 
    }
    </script>
    <!-- FIN VALIDACION  DE MODAL,INGRESAR MOLDES -->   




@endsection