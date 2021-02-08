@extends('principal')


@section('content')

<button type="button" class=" btn-info "  data-toggle="modal" data-target="#modal_agregar_moldes" data-bs-whatever="Sucursal El Paraiso">
     <span> Agregar moldes</span>
</button>


<!-- Modal Agregar Moldes -->
<div class="modal fade" id="modal_agregar_moldes" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" style="opacity:.9;background:#212529;width=800px;">
  <div class="modal-dialog modal-dialog-centered"  style="opacity:.9;background:#212529;width=80%">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Agregar Moldes</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close" ></button>
      </div>
      <div class="modal-body">



    <div class="card-body">  
        <form>


        <div class="row">

            <div class="mb-3 col">
            <label for="txt_figuraytipo" class="form-label">Figura y tipo</label>
                <input class="form-control" list="prediccionfiguraytipo" id="txt_figuraytipo" placeholder="Ingresa figura y tipo">
                <datalist id="prediccionfiguraytipo">
                
                @foreach($figuras as $figura)
                <option value =  "{{ $figura-> nombre_figura}} " >

                @endforeach
                </datalist> 
            </div>

            <div class="mb-3 col">
            <label for="txt_vitola" class="form-label">Vitola</label>
                <input class="form-control" list="prediccionvitola" id="txt_vitola" placeholder="Ingresa la vitola">
                <datalist id="prediccionvitola" class= "row">

                @foreach($vitolas as $vitola)
                <option value =  "{{ $vitola-> nombre_vitola}} " >

                @endforeach
                </datalist> 
            </div>
       
        </div> 




        <div class="row">

            <div class="mb-3 col">
            <label for="txt_buenos" class="form-label">Buenos</label>
            <input class="form-control" id="txt_buenos" placeholder="Cantidad">        
            </div>

            <div class="mb-3 col">            
            <label for="txt_irregulares" class="form-label">Irregulares</label>
            <input class="form-control" id="txt_irregulares" placeholder="Cantidad">  
            </div>

            <div class="mb-3 col">
            <label for="txt_malos" class="form-label">Malos</label>
            <input class="form-control" id="txt_malos" placeholder="Cantidad">  
            </div>

        </div>


        <div class="row">

            <div class="mb-3 col">
            <label for="txt_salon" class="form-label">Salon</label>
            <input class="form-control" id="txt_salon" placeholder="Cantidad">        
            </div>

            <div class="mb-3 col">            
            <label for="txt_irregulares" class="form-label">Bodega</label>
            <input class="form-control" id="txt_irregulares" placeholder="Cantidad">  
            </div>

            <div class="mb-3 col">
            <label for="txt_malos" class="form-label">Reparación</label>
            <input class="form-control" id="txt_malos" placeholder="Cantidad">  
            </div>

        </div>




    
    </form>    
  </div>





      </div>
      <div class="modal-footer" >
        <button style=" background: #b39f64; color: #ecedf1;" type="button" class=" btn-info-claro " data-dismiss="modal" >
            <span>Cancelar</span>
        </button>
        <button type="button" class=" btn-info " onclick=confirmar();>
            <span>Guardar</span>
        </button>
      </div>
    </div>
  </div>
</div>





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

    <script type="text/javascript">

function confirmar(){ 
        $('#reparacion').focusout(function() {
 var x = $(this).val();
 alert(x);
 console.log("hola");
});
}

</script>

@endsection