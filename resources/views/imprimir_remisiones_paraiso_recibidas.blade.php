
<title>Reporte Inventario remisiones Paraiso <?php echo($fecha);?></title>

 


<div class="row" style="width: 100%;margin:10px; text-align:center;">
  <h4 style="margin:10px;font-style:oblique;"> Remisiones Paraiso Cigar, Tabacos de Oriente </h4>
</div>



<div style="text-size:20px;margin-bottom:5px;">Fecha:  <?php echo($fecha);?></div>
     
<div class="row">
<div class="col">

 
    
<table class="table table-striped table-secondary table-bordered border-primary " id="tablaenviadas">
                <thead class="table-dark"> 
                    <tr>
                        <th style='text-align: center;' scope="col">Fecha</th>
                        <th style='text-align: center;' scope="col">De</th>
                        <th style='text-align: center;' scope="col">Estado</th>
                        <th style='text-align: center;' scope="col">Tipo de molde</th>
                        <th style='text-align: center;' scope="col">Cantidad</th>
                     <tr>
                </thead>
                
                <tbody>

                   

                @foreach($moldes as $molde)

                    <tr>

                        <td>{{$molde->fecha}}</td>
                        <td>{{$molde->nombre_planta}}</td>
                        <td>{{$molde->estado_moldes}}</td>
                        <td>{{$molde->tipo_moldes}}</td>
                        <td>{{$molde->cantidad}}</td>
                        

                    </tr>

                   
                    @endforeach


                <tbody>
            </table>


            <!-- FIN DEL TABLA REMISIONES PARAISO -->

 </div>    
</div>
