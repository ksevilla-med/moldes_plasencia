@extends('principal')


@section('content')


<div class=" col imagenprincipalpadre" style=" text-align:center;">



     <div class="col" >

        <div class="row" style="padding:10px;"  >
            <div class="card" style="width: 100%;">
                <img src="plasencianegro.png" class="card-img-top" alt="Sucursal El Paraíso"  style=" height:10rem;">
                    <div class="card-body">

                   
                    <form action=  "{{Route('id_planta',1)}}" method= "POST">
                    @csrf
                         <button type="submit"  class="btn-info" style="width:100%;" >Sucursal El Paraíso</button> 
                    
                     </form>     
                     </div>
            </div>
        </div>
        

        <div class="row"  style="padding:10px;" >
            <div class="card" style="width: 100%;">
                <img src="plasencianegro.png" class="card-img-top" alt="Sucursal Morocelí" style=" height:10rem;">
                    <div class="card-body">
                         <button type="button"  class="btn-info" style="width:100%;" onclick="location.href = '/sucursal_moroceli'">Sucursal Morocelí</button> 
                    </div>
            </div>
        </div>      

    </div>









    <div class="col" >

        <div class="row" style="padding:10px;"  >
            <div class="card" style="width: 100%;">
                <img src="plasencianegro.png" class="card-img-top" alt="Sucursal San Marcos" style=" height:10rem;">
                    <div class="card-body">
                         <button type="button"  class="btn-info" style="width:100%;" onclick="location.href = '/sucursal_sanmarcos'"> Sucursal San Marcos</button> 
                    </div>
            </div>
        </div>

        <div class="row" style="padding:10px;"  >
            <div class="card" style="width: 100%;">
                <img src="plasencianegro.png" class="card-img-top" alt="Otras Empresas" style=" height:10rem;">
                    <div class="card-body">
                        <button type="button"  class="btn-info" style="width:100%;" onclick="location.href = '/otras_empresas'">Otras Empresas</button> 
                    </div>
            </div>
        </div>

    </div>




    <div class="col" >

    <div class="row" style="padding:10px;"  >
        <div class="card" style="width: 100%;">
            <img src="plasencianegro.png" class="card-img-top" alt="Sucursal Gualiqueme" style=" height:10rem;">
                <div class="card-body">
                    <button type="button"  class="btn-info" style="width:100%;" onclick="location.href = '/sucursal_gualiqueme'">Sucursal Gualiqueme</button> 
                </div>
        </div>
    </div>

    <div class="row" style="padding:10px;"  >
        <div class="card" style="width: 100%;">
            <img src="plasencianegro.png" class="card-img-top" alt="Total Sucursales" style=" height:10rem;">
                <div class="card-body">
                    <button type="button"  class="btn-info" style="width:100%;" onclick="location.href = '/sucursales_total'">Total Sucursales</button> 
                </div>
        </div>
    </div>

</div>




</div>


@endsection