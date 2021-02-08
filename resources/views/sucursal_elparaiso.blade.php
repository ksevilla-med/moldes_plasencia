@extends('principal')


@section('content')

<button type="button" class=" btn-info "  data-toggle="modal" data-target="#modal_agregar_moldes" data-bs-whatever="Sucursal El Paraiso">
     <span> Agregar moldes</span>
</button>





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


@endsection