<!-- INICIO DEL TABLA MOLDE -->



<table class="table table-striped table-secondary table-bordered border-primary ">
        <thead class= "table-dark">
        <tr>
            <th scope="col">Vitola</th>
            <th scope="col">Figura y tipo</th>
            <th scope="col">Buenos</th>
            <th scope="col">Irregulares</th>
            <th scope="col">Malos</th>
            <th scope="col">Bodega</th>
            <th scope="col">Reparacion</th>
            <th scope="col">Salon</th>
            <th scope="col">Total</th>
            
         </thead>
         <tbody>
            @foreach($moldes as $molde)
            <tr> 
                  <td>{{$molde->vitola}}</td>
                  <td>{{$molde->nombre_figura}}</td>
                  <td>{{$molde->bueno}}</td>
                  <td>{{$molde->irregulares}}</td>
                  <td>{{$molde->malos}}</td>
                  <td>{{$molde->bodega}}</td>
                  <td>{{$molde->reparacion}}</td>
                  <td>{{$molde->salon}}</td>
                  <td>{{$molde->total}}</td>
               
            
                 
             </tr>
            @endforeach
          <tbody>
    </table>
<!-- FIN DEL TABLA MOLDE -->