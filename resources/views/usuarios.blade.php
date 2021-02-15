@extends('principal')


@section('content')

<!-- Libreria de las alertas -->
<script src= "{{ URL::asset('https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js') }}"></script>
<link rel="stylesheet" href="{{ URL::asset('https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css') }}">

<button type="button" class=" btn-info float-right"   data-toggle="modal" data-target="#modal_agregar_usuarios"  style="margin-right: 10px; margin-bottom: 10px;">
      <span> Agregar Usuarios</span>
  </button>



<!-- INICIO DEL TABLA USUARIOS -->
<table class="table table-striped table-secondary table-bordered border-primary ">
        <thead class= "table-dark">
        <tr>
            <th scope="col">Código</th>
            <th scope="col">Nombre</th>
            <th scope="col">Sucursal</th>     
            <th scope="col">Editar</th>            
         </thead>
         <tbody>
        
            <tr> 

                  <td>12344</td>
                  <td>karina sevilla</td>
                  <td>paraiso cigar</td>
                 

                  <td style="padding:0px; text-align:center;    vertical-align: inherit;" >
                  <a data-toggle="modal" data-target="#modal_editar_usuario" >
                  <svg xmlns="http://www.w3.org/2000/svg" width=25 height="25" fill="black" class="bi bi-pencil-square" viewBox="0 0 16 16">
                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                  </svg>
                  </a>

                  <a data-toggle="modal" data-target="#modal_eliminar_usuario" >
                  <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="black" class="bi bi-x-square" viewBox="0 0 16 16">
                    <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                  </svg>
                  </a>



                  <a data-toggle="modal" data-target="#modal_cambiar_contrasenia" >
                  <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="black" class="bi bi-key" viewBox="0 0 16 16">
                  <path d="M0 8a4 4 0 0 1 7.465-2H14a.5.5 0 0 1 .354.146l1.5 1.5a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0L13 9.207l-.646.647a.5.5 0 0 1-.708 0L11 9.207l-.646.647a.5.5 0 0 1-.708 0L9 9.207l-.646.647A.5.5 0 0 1 8 10h-.535A4 4 0 0 1 0 8zm4-3a3 3 0 1 0 2.712 4.285A.5.5 0 0 1 7.163 9h.63l.853-.854a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.793-.793-1-1h-6.63a.5.5 0 0 1-.451-.285A3 3 0 0 0 4 5z"/>
                  <path d="M4 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                </svg>
                </a>
                  
            </td>
            
             </tr>
           
          <tbody>
    </table>
<!-- FIN DEL TABLA USUARIOS -->






<!-- INICIO DEL MODAL AGREGAR USUARIO -->
<form>

<div class="modal fade" role="dialog" id="modal_agregar_usuarios" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" style="opacity:.9;background:#212529;width=800px;">
  <div class="modal-dialog modal-dialog-centered modal-lg"  style="opacity:.9;background:#212529;width=80%">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Agregar Usuarios</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close" ></button>
      </div>
     
      <div class="modal-body">
          <div class="card-body">  
            

      <div class="row">
        <div class="mb-3 col">
        <label for="nombre_completo" class="form-label">Nombre Completo</label>
        <input class="form-control" id="nombre_completo" placeholder="Ingresa el nombre completo" required minLength="5" maxLength="50">        
        </div>

        <div class="mb-3 col">
        <label for="correo_electronico" class="form-label">Correo Electrónico</label>
        <input type="mail"class="form-control" id="correo_electronico" placeholder="Ingresa el corro electronico" required >        
        </div>
      </div>

      <div class="row">
        <div class="mb-3 col">
        <label for="txt_figuraytipo" class="form-label">Código</label>
        <input class="form-control" type= "number" id="txt_figuraytipo" name="id_figura" placeholder="Ingresa código de empleado" minLength="1" maxLength="10" required>
        </div>

        <div class="mb-3 col">
        <label for="txt_sucursales" class="form-label">Sucursal</label>
        <select class="form-control"   id="txt_sucursales"  name="id_sucursal" placeholder="Selecciona la sucursal"  required>
       
        @foreach($sucursales as $sucursal)
        <option value =  "{{$sucursal-> id_planta}}" >{{$sucursal-> nombre_planta}}</option>
        @endforeach                           
        </select> 
        </div>
      </div>


      <div class="row">
        <div class="mb-3 col">
        <label for="contrasenia" class="form-label">Contraseña</label>
        <input type="password" name="password" class="form-control" id="contrasenia" placeholder="Ingresa contraseña" required minLength="5" maxLength="50">        
        <button class="btn btn-primary" type="button" onclick="mostrarContrasena()">
      
      <span class=" glyphicon eye-fill"></span>
</button>
      </div>

        

        <div class="mb-3 col">
        <label for="confirmacion_contrasenia" class="form-label">Confirmación contraseña</label>
        <input type="password" name="password" class="form-control" id="confirmacion_contrasenia" placeholder="Confirma tu contraseña" required minLength="5" maxLength="50">        
        </div>
      </div>                  
</div>
</div>

<div class="modal-footer" >
        <button style=" background: #b39f64; color: #ecedf1;" type="button" class=" btn-info-claro " data-dismiss="modal" >
            <span>Cancelar</span>
            @csrf
        </button>
        <button  class=" btn-info " onclick="v_agregarusuario()" >
            <span>Guardar</span>
        </button>

        
      </div>
    </div>
  </div>
</div>

</form>
<!-- FIN DEL MODAL AGREGAR MOLDE-->

<script>
  function mostrarContrasena(){
      var tipo = document.getElementById("contrasenia");
      if(tipo.type == "password"){
          tipo.type = "text";
      }else{
          tipo.type = "password";
      }
  }
</script>

 <script type="text/javascript">



    function v_agregarusuario(){ 
        var v_contrasenia = document.getElementById('contrasenia').value;
        var v_confirmacion_contrasenia = document.getElementById('confirmacion_contrasenia').value;
        
if(confirmacion_contrasenia != v_contrasenia){
  toastr.error( 'Las contraseñas no coinciden ','ERROR',{"progressBar": true,"closeButton": false });
    event.preventDefault();
}else{
  toastr.success( 'El usuario se registró correctamente','BIEN',{"progressBar": true,"closeButton": false} );
    theForm.addEventListener('submit', function (event) {
    });
}

        }

  </script>


<!-- INICIO MODAL CAMBIAR CONTRASENIA -->
<div class="modal fade" id="modal_cambiar_contrasenia" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" style="opacity:.9;background:#212529;">
  <div class="modal-dialog modal-dialog-centered" >
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Cambio de contasenia de (codigo, empleado)</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="row">
        <div class="mb-3 col">
        <label for="contrasenia" class="form-label">Contraseña</label>
        <input class="form-control" id="contrasenia" placeholder="Ingresa contraseña" required minLength="5" maxLength="50">        
        </div>

        <div class="mb-3 col">
        <label for="confirmacion_contrasenia" class="form-label">Confirmación contraseña</label>
        <input class="form-control" id="confirmacion_contrasenia" placeholder="Confirma tu contraseña" required minLength="5" maxLength="50">        
        </div>
      </div>
      </div>
      <div class="modal-footer" >
        <button style=" background: #b39f64; color: #ecedf1;" type="button" class=" btn-info-claro " data-dismiss="modal" >
            <span>Cancelar</span>
        </button>
        <button type="button" class=" btn-info ">
            <span>Cambiar</span>
        </button>
      </div>
    </div>
  </div>
</div>
<!-- FIN MODAL CAMBIAR CONTRASENIA -->




<!-- INICIO MODAL ELIMINAR USUARIO -->
<div class="modal fade" id="modal_eliminar_usuario" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" style="opacity:.9;background:#212529;">
  <div class="modal-dialog modal-dialog-centered" >
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Eliminar Usuario</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      ¿Estás seguro que quieres eliminar al usuario (nombre del usuario)?
      </div>
      <div class="modal-footer" >
        <button style=" background: #b39f64; color: #ecedf1;" type="button" class=" btn-info-claro " data-dismiss="modal" >
            <span>Cancelar</span>
        </button>
        <button type="button" class=" btn-info ">
            <span>Eliminar</span>
        </button>
      </div>
    </div>
  </div>
</div>
<!-- FIN MODAL ELIMINAR USUARIO  -->

<!-- INICIO DEL MODAL AGREGAR USUARIO -->
<form>

<div class="modal fade" role="dialog" id="modal_editar_usuario" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" style="opacity:.9;background:#212529;width=800px;">
  <div class="modal-dialog modal-dialog-centered modal-lg"  style="opacity:.9;background:#212529;width=80%">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Editar Usuario</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close" ></button>
      </div>
     
      <div class="modal-body">
          <div class="card-body">  
            

      <div class="row">
        <div class="mb-3 col">
        <label for="nombre_completo" class="form-label">Nombre Completo</label>
        <input class="form-control" id="nombre_completo" placeholder="Ingresa el nombre completo" required minLength="5" maxLength="50">        
        </div>
      </div>

      <div class="row">
        <div class="mb-3 col">
        <label for="txt_figuraytipo" class="form-label">Código</label>
        <input class="form-control" type= "number" id="txt_figuraytipo" name="id_figura" placeholder="Ingresa código de empleado" minLength="1" maxLength="10" required>
        </div>

        <div class="mb-3 col">
        <label for="txt_sucursales" class="form-label">Sucursal</label>
        <select class="form-control"   id="txt_sucursales"  name="id_sucursal" placeholder="Selecciona la sucursal"  required>
       
        @foreach($sucursales as $sucursal)
        <option value =  "{{$sucursal-> id_planta}}" >{{$sucursal-> nombre_planta}}</option>
        @endforeach                           
        </select> 
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






@endsection