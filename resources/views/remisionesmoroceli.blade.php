@extends('principal')


@section('content')
          
<!-- Libreria de las alertas -->
<script src= "{{ URL::asset('https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js') }}"></script>
<link rel="stylesheet" href="{{ URL::asset('https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css') }}">

<!-- INICIO DEL TABLA REMISIONES PARAISO -->


  <nav class="navbar navbar-expand-lg navbar-light bg2" >
  <div class="container-fluid">   
    <div class="collapse navbar-collapse" id="navbarNav">

                


                    <ul class="navbar-nav nav ">
                    <li class="nav-item active">
                    <a style="background:#b38d1d;" class="nav-link  mr-sm-2 download"  onclick="enviadas()" id="a_enviadas"  >Enviadas</a>
                    </li>
                    <li class="nav-item">
                    <a style="background:#b39f64;" class="nav-link mr-sm-2  download" onclick="recibidas()" id="a_recibidas" >Recibidas</a>
                    </li>  
                    <li class="nav-item">
                    <a style="background:#b39f64;" class="nav-link download" data-toggle="modal" data-target="#modal_enviarmoldes_paraiso"  >Enviar Moldes</a>
                  </li>   
                    </ul>
    
    </div>
  </div>
</nav>

<script type="text/javascript">    

      function enviadas(){  
      var tablaenviadas = document.getElementById("tablaenviadas"); 
      var tablarecibidas = document.getElementById("tablarecibidas"); 
      var a_enviadas = document.getElementById("a_enviadas"); 
      var a_recibidas = document.getElementById("a_recibidas"); 
     
      tablaenviadas.style.display = 'inline-table'; 
      tablarecibidas.style.display = 'none'; 
      a_enviadas.style.background = '#b38d1d'; 
      a_recibidas.style.background = '#b39f64';       
      }


      function recibidas(){  
      var tablaenviadas = document.getElementById("tablaenviadas"); 
      var tablarecibidas = document.getElementById("tablarecibidas"); 
      var a_enviadas = document.getElementById("a_enviadas"); 
      var a_recibidas = document.getElementById("a_recibidas");        
      tablaenviadas.style.display = 'none'; 
      tablarecibidas.style.display = 'inline-table';  
      a_enviadas.style.background = '#b39f64'; 
      a_recibidas.style.background = '#b38d1d';        
      }    
 </script>

<table class="table table-striped table-secondary table-bordered border-primary " id="tablaenviadas">
        <thead class= "table-dark">
        <tr>
            <th scope="col">Fecha</th>
            <th scope="col">Para</th>
            <th scope="col">Tipo de molde</th>   
            <th scope="col">Estado</th>   
            <th scope="col">Cantidad</th>            
         </thead>
         <tbody>
        
         @foreach($remisionesenviadas as $remision)
            <tr> 
                <td>{{$remision->fecha}}</td>
                <td>{{$remision->nombre_fabrica}}</td>
                <td>{{$remision->estado_moldes}}</td>
                <td>{{$remision->tipo_moldes}}</td>
                <td>{{$remision->cantidad}}</td>
              
            </tr>

            @endforeach 
             
           
          <tbody>
    </table>
<!-- FIN DEL TABLA REMISIONES PARAISO -->




<table class="table table-striped table-secondary table-bordered border-primary " id="tablarecibidas" style="display:none;">
        <thead class= "table-dark">
        <tr>
            <th scope="col">Fecha</th>
            <th scope="col">Para</th>
            <th scope="col">Tipo de molde</th>   
            <th scope="col">Estado</th>   
            <th scope="col">Cantidad</th>    
            <th scope="col">Chequear</th>    
            </tr>        
         </thead>
         <tbody>
        
         @foreach($remisionesrecibidas as $remision)
         <tr> 
                <td>{{$remision->fecha}}</td>
                <td>{{$remision->nombre_fabrica}}</td>
                <td>{{$remision->estado_moldes}}</td>
                <td>{{$remision->tipo_moldes}}</td>
                <td>{{$remision->cantidad}}</td>
                <td>{{$remision->chequear}}</td>
              
            </tr>

            @endforeach 

             
           
          <tbody>
    </table>
<!-- FIN DEL TABLA REMISIONES PARAISO -->










<!-- INICIO DEL MODAL ENVIAR MOLDES -->
<form action=  "{{Route('insertarremisiones_sanMarcos',3)}}" method= "POST" id ="FormRemisiones" name="FormRemisiones">
@csrf
<div class="modal fade" role="dialog" id="modal_enviarmoldes_paraiso" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" style="opacity:.9;background:#212529;width=800px;">
  <div class="modal-dialog modal-dialog-centered modal-xl"  style="opacity:.9;background:#212529;width=80%">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Enviar moldes</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close" ></button>
      </div>
     
      <div class="modal-body">
          <div class="card-body">  
            

    

                            <div class="row">
                                
                       
                                <div class="mb-3 col">
                                
                                <input name="id_planta"  id="id_planta" value="2" style="display:none">
                                <input name="chequear"  id="chequear" value="0" style="display:none">
                                <label for="txt_sucursales" class="form-label">Para</label>
                                <select class="form-control"   id="txt_sucursales"  name="txt_sucursales" onchange="showDiv('hidden_div', this)" placeholder="Selecciona la sucursal" required >
                            
                             
                                <option value =  "El Paraiso" >El Paraíso</option>
                                <option value =  "San Marcos" >San Marcos</option>
                                <option value =  "Gualiqueme" >Gualiqueme</option>
                                <option value =  "5" >Otra Fabrica</option>                      
                                </select> 
                                </div>
                               
                             

                                <div style="display:none;" class="mb-3 col" id="hidden_div">
                                <label for="txt_otra_fabrica" class="form-label">Otra empresa</label>
                                <input   class="form-control" type= "text" id="txt_otra_fabrica" name="txt_otra_fabrica" placeholder="Ingresa el nombre" minLength="1" maxLength="10" >
                                </div>

                                <div class="mb-3 col">
                                <label for="txt_estado" class="form-label">Estado</label>
                                <select class="form-control"   id="txt_estado"  name="txt_estado" placeholder="Selecciona la sucursal"  required>
                                <option value =  "Buenos" >Buenos</option>
                                <option value =  "Irregulares" >Irregulares</option>                   
                                </select> 
                                </div>

                                <div class="mb-3 col">
                                <label for="id_tipo" class="form-label">Tipo moldes</label>
                                <select class="form-control"   id="id_tipo"  name="id_tipo" placeholder="Selecciona la sucursal"  required>
                                @foreach($moldes as $molde)
                                <option value =  "{{$molde-> fivi}}" >{{$molde-> fivi}}</option>
                                @endforeach                     
                                </select> 
                                </div>


                         

                                <div class="mb-3 col">
                                <label for="txt_cantidad" class="form-label">Cantidad</label>
                                <input class="form-control" type= "number" id="txt_cantidad" name="txt_cantidad" placeholder="Ingresa la cantidad" minLength="1" maxLength="10" required>
                                </div>


                            </div>

</div>
</div>

<div class="modal-footer" >
        <button style=" background: #b39f64; color: #ecedf1;" type="button" class=" btn-info-claro " data-dismiss="modal" >
            <span>Cancelar</span>
        </button>
        <button  class=" btn-info " onclick="agregarremision()" >
            <span>Guardar</span>
        </button>

        
      </div>
    </div>
  </div>
</div>

</form>


<script>
  function showDiv(divId, element){
   document.getElementById(divId).style.display = element.value == 5 ? 'block'  : 'none' ;   
   document.getElementById(divId).value = element.value == 5 ? '1' : '2' ;
}
</script>


<script>

function agregarremision(){  
  var empresa = document.getElementById('txt_otra_fabrica').value ;
  var select = document.getElementById('txt_sucursales').value ;
  console.info(select);

 if( empresa =="" && select == "5"){
            toastr.error( 'Ingresa el nombre de la empresa','ERROR',{"progressBar": true,"closeButton": false,"preventDuplicates": true
            , "preventOpenDuplicates": true} );
            event.preventDefault();
            }else{
              theForm.addEventListener('submit', function (event) { });
            }
}
</script>



<!-- FIN DEL MODAL AGREGAR MOLDE-->

@endsection