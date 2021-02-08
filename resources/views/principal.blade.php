
<title>Placensia inventario móvil</title>
<link rel="shortcat icon" href="favicon.ico"> 
   
<html lang="es">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">


    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Font Awesome JS -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</head>

<body>
<div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header" style="text-align:center;" href="/">
            <img src="plasenciablanco.png" style="width: 150px;height:112px;" >
</div>

            <ul class="list-unstyled components">
                
              
                <li>
                    <a href="/moldesprincipal">Moldes</a>
                </li>
                <li>
                    <a href="#">Proximamente...</a>
                </li>
                <li>
                    <a href="#">Proximamente...</a>
                </li>
            </ul>
            <div  style="text-align:center">

            </div>
            <div  style="position: fixed; bottom: 0px; width:250px;">
            <ul class="list-unstyled CTAs ">
                <li>
                    <a data-toggle="modal" data-target="#modal_acercade" class="download">Acerca de</a>
                </li>
                <li>
                    <a href="/ayuda" class="download" style="background:#b38d1d;">Ayuda</a>
                </li>
            </ul>
            </div>
         
        </nav>

        <!-- Page Content  -->
        <div id="content" >
       

            <nav class="navbar navbar-expand-lg navbar-light bg2">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class=" btn-info ">
                        <i class="fas fa-align-left"></i>
                        <span>Menú</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">

                        
                            <li class="nav-item">
                                <a class="nav-link" onclick="javascript:window.history.back();" autofocus >
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
                                             <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
                                     </svg>
                                </a>
                            </li>


                            <li class="nav-item active">
                                <a class="nav-link" href="/">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
                                          <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z"/>
                                    </svg>
                                </a>
                            </li>


                            <li class="nav-item">
                            <a  class="nav-link"  data-toggle="modal" data-target="#modal_cerrarsesion">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-power" viewBox="0 0 16 16">
                                     <path d="M7.5 1v7h1V1h-1z"/>   <path d="M3 8.812a4.999 4.999 0 0 1 2.578-4.375l-.485-.874A6 6 0 1 0 11 3.616l-.501.865A5 5 0 1 1 3 8.812z"/>
                                </svg>
                            </a>                            
                                
                            </li>                       
                          
                        </ul>
                    </div>
                </div>
            </nav>

        





        



<!-- Modal cerrar sesion -->
<div class="modal fade" id="modal_cerrarsesion" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" style="opacity:.9;background:#212529;">
  <div class="modal-dialog modal-dialog-centered" >
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Cerrar Sesión</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      ¿Estás seguro que quieres salir de la aplicación?
      </div>
      <div class="modal-footer" >
        <button style=" background: #b39f64; color: #ecedf1;" type="button" class=" btn-info-claro " data-dismiss="modal" >
            <span>Cancelar</span>
        </button>
        <button type="button" class=" btn-info ">
            <span>Cerrar</span>
        </button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Acerca De -->

<div class="modal fade" id="modal_acercade" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" style="opacity:.9;background:#212529;">
  <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" >
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Acerca De</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      El Estado del Arte/Estado de la técnica, hace referencia al estado último del conocimiento
sobre la investigación y el desarrollo (I+D), es decir que es el límite de conocimiento
generado sobre un tema o problema de investigación científica y/o tecnológica,
estableciendo hasta donde ha avanzado el mismo, cual es la frontera en un tiempo y espacio
determinado.
En el inicio del proceso de construcción y/o descubrimiento de conocimientos científicos
mediante la investigación, sin duda alguna, los profesores se preguntan ¿El estado del
arte/técnica, es una de esas ocurrencias de la gestión de la investigación (Gestores), para
complicar el trabajo de los investigadores en la formulación de sus protocolos de I+D? ¿Es
el afán de hacer más burocrático el acceso al financiamiento, especialmente si este, tiene
como fuente el presupuesto universitario? De igual manera, los investigadores con escasa
experiencia en investigación tienen la percepción que el estado del arte/técnica es lo mismo
que Marco Teórico y como tal lo tratan. En aras de contribuir a un mejor discernimiento e
internalización y la adecuada utilización de estos elementos fundamentales de todo
proyecto de investigación científica y/o tecnológica hemos preparado una síntesis sobre el
tema.
      </div>
      <div class="modal-footer" >
        <button style=" background: #b39f64; color: #ecedf1;" type="button" class=" btn-info-claro " data-dismiss="modal" >
            <span>Entendido</span>
        </button>      
      </div>
    </div>
  </div>
</div>







<!-- Modal Agregar Moldes -->

<div class="modal fade  " id="modal_agregar_moldes" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" style="opacity:.9;background:#212529;width=800px;">
  <div class="modal-dialog modal-dialog-centered modal-lg"  style="opacity:.9;background:#212529;width=80%">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Agregar Moldes</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">



    <div class="card-body">  
        <form>


        <div class="row">

            <div class="mb-3 col">
            <label for="txt_figuraytipo" class="form-label">Figura y tipo</label>
                <input class="form-control" list="prediccionfiguraytipo" id="txt_figuraytipo" placeholder="Ingresa figura y tipo">
                <!-- <datalist id="prediccionfiguraytipo">
                <option value="Cabeza normal">
                <option value="Torpedo">
                <option value="Figurado">
                <option value="Piramide">
                <option value="Cabeza normalplatico">
                <option value="Cabeza normal plástico">
                <option value="Torpedo Habano">
                <option value="Short Story">
                <option value="Misiles">
                <option value="Punta lápiz">
                <option value="Cabeza normal M">
                <option value="Bering">
                </datalist> -->
            </div>

            <div class="mb-3 col">
            <label for="txt_vitola" class="form-label">Vitola</label>
                <input class="form-control" list="prediccionvitola" id="txt_vitola" placeholder="Ingresa la vitola">
                <!-- <datalist id="prediccionvitola">
                <option value="70x7-1/2">
                <option value="68x7-1/4">
                <option value="62x8">
                <option value="60x7-1/2">
                <option value="60x7-1/4">
                <option value="60x7">
                <option value="60x6-1/2">
                <option value="60x6-3/4">
                <option value="58x7-1/2">
                <option value="58x7-3/4">
                <option value="56x5">
                <option value="54x9-1/2">
                <option value="54x9">
                <option value="54x8">
                <option value="54x7-1/4">
                <option value="54x7-1/2">
                <option value="54x6-1/2">
                <option value="54x36x7-1/4">
                <option value="54x36x7">
                <option value="54x36x5-1/2">
                <option value="54x6">
                <option value="52x9">
                <option value="52x8">
                <option value="52x7-1/2">
                <option value="52x7">
                <option value="52x6">
                <option value="52x6-1/2">
                <option value="52x6-1/4">
                <option value="52x7-1/2">
                <option value="50x8-1/2">
                <option value="50x8-3/4">
                <option value="50x8">
                <option value="50x7-1/2">
                <option value="50x7-1/4">
                <option value="50x7">
                <option value="50x6-1/2">
                <option value="50x6-1/4">
                <option value="49x7-1/2">
                <option value="49x46x4-1/2">
                <option value="48x8-1/4">
                <option value="48x8">
                <option value="48x7-1/2">
                <option value="48x7-1/4">
                <option value="48x7">
                <option value="48x6">
                <option value="48x5-1/2">
                <option value="46x7-1/2">
                <option value="46x6">
                <option value="46x5-1/2">
                <option value="45x5-1/4">
                <option value="44x7-1/2">
                <option value="45x5-1/4">
                <option value="44x5">
                <option value="43x7-1/4">
                <option value="43x6-1/4">
                <option value="42x7-1/2">
                <option value="40x6-1/2">
                <option value="39x5-1/2">
                <option value="38x7-1/4">
                <option value="38x5">
                <option value="36x7-1/2">
                <option value="36x7-1/4">
                <option value="36x7-1/2">
                <option value="31x5">
                <option value="30x5">
                <option value="28x5">
                <option value="26x5">
                <option value="22x6-1/4">
                <option value="22x4">
                <option value="20x4">
                </datalist> -->
            </div>

            <div class="mb-3 col">
            <label for="txt_total" class="form-label">Total</label>
            <input class="form-control" id="txt_total" placeholder="Cantidad">        
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
        <button type="button" class=" btn-info ">
            <span>Guardar</span>
        </button>
      </div>
    </div>
  </div>
</div>



























            @yield('content')


    </div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
</body>
</html>
