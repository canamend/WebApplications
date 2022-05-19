<?php
    require_once 'Model.php';
    session_start();
    
    if(isset($_GET['Session'])!=0){
        $Session = $_GET['Session'];
        //var_dump($Session);
        $SesionCompleta = consultaUsuarioId($Session);
        $_SESSION['data']=$SesionCompleta;
        $nombre = $_SESSION['data']['nombre'];
        //var_dump($_SESSION['data']['nombre']);
    }else{
        echo "Sesion no iniciada <br>";
        session_destroy();
    }
    //die();
?>
<html lang="EN">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta content="Admin Dashboard" name="description" />
        <meta content="ThemeDesign" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- Sweet Alert -->
        <link href="assets/plugins/sweetalert2/sweetalert2.css" rel="stylesheet" type="text/css">

        <!-- DataTables -->
        <link href="assets/plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/datatables/fixedHeader.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/datatables/scroller.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        

        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">
    </head>    
    <body>
        
        <div class="container">
            <div class="col-lg-12">
                <div class="container">
                    <h1>
                        <button class='btn btn-primary float-right' onclick="CerrarSesion()">
                            Cerrar Sesión
                        </button>
                    </h1>
                 </div>
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="false">
                            <span class="d-block d-sm-none"><i class="fa fa-home"></i></span>
                            <span class="d-none d-sm-block"><i class="fa fa-home"></i> Inicio</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="true">
                            <span class="d-block d-sm-none"><i class="fa fa-user"></i></span>
                            <span class="d-none d-sm-block"><i class="fa fa-user"></i>Explorar Rutas</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="message-tab" data-toggle="tab" href="#message" role="tab" aria-controls="message" aria-selected="false">
                            <span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
                            <span class="d-none d-sm-block"><i class="far fa-envelope"></i> Eliminar Rutas</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="setting-tab" data-toggle="tab" href="#setting" role="tab" aria-controls="setting" aria-selected="false">
                            <span class="d-block d-sm-none"><i class="fa fa-cog"></i></span>
                            <span class="d-none d-sm-block"><i class="fa fa-cog"></i> Generar Reportes  </span>
                        </a>
                    </li>
                </ul>
                <div class="tab-content bg-light">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <!--Datos de quienes somos y a donde vamos-->
                        <h2>Modo Administrador</h2>
                        <h2>Bienvenido de vuelta: <?php echo "$nombre"; ?></h2>
                        <div id="about" class="container-fluid bg-success p-2 text-dark bg-opacity-10">
                            <div class="row">
                              <div class="col-sm-8">
                                <h4>Te ofrecemos paquetes de Tours en Puebla en distintos puntos de interés, recomendando transporte y más.</h4><br>
                                <p>Ya sea que vienes de vacaciones a Puebla y buscas conocer los lugares más emblemáticos o estas planeando ese viaje tan anhelado, Guia turistica Puebla pone a tu alcance las mejores agencias de viaje. Las hemos organizado acorde a los servicios que pueden ofrecerte. Cada una de ellas cuentan con paquetes, planes, promociones y descuentos que se ajustan a tu presupuesto. Recuerda que es muy importante siempre tener una agencia de viaje que te ayude en la planificación de tu itinerario, comúnmente cuentan con tarifas más accesibles y pueden darte las mejores recomendaciones y tips para que tu viaje sea placentero y seguro.</p>
                              </div>
                              <div class="col-sm-4">
                                <span class="glyphicon glyphicon-signal logo"></span>
                              </div>
                            </div>
                          </div>
                          
                          <div class="container-fluid  ">
                            <div class="row">
                              <div class="col-sm-4">
                                <span class="glyphicon glyphicon-globe logo slideanim"></span>
                              </div>
                              <div class="col-sm-8">
                                <h2>Nuestros valores</h2><br>
                                <h4><strong>MISIÓN:</strong> Ofrecer un servicio personalizado de calidad y confiabilidad, a través de la buena atención de nuestro personal debidamente capacitado, diseñando viajes únicos, a precios accesibles, logrando superar las expectativas de nuestros clientes.</h4><br>
                                <p><strong>VISIÓN:</strong> Llegar ser una Agencia de Viajes reconocida en nuestra región, por la confianza y seguridad que le ofrecemos a nuestros clientes,  presentando innovadores servicios y asegurando una actividad turística estable, promoviendo un ambiente de buenas relaciones y obteniendo la mayor satisfacción de nuestros clientes.</p>
                              </div>
                            </div>
                          </div>
                          
                          <!-- Container (Services Section) -->
                          <div id="services" class="container-fluid text-center">
                            <h2>VALORES</h2>
                            <h4>Ofrecemos</h4>
                            <br>
                            <div class="row slideanim">
                              <div class="col-sm-4">
                                <span class="glyphicon glyphicon-off logo-small"></span>
                                <h4>Innovación e inspiración</h4>
                              </div>
                              <div class="col-sm-4">
                                <span class="glyphicon glyphicon-heart logo-small"></span>
                                <h4>Pasión y compromiso</h4>
                              </div>
                              <div class="col-sm-4">
                                <span class="glyphicon glyphicon-lock logo-small"></span>
                                <h4>Confiabilidad</h4>
                              </div>
                            </div>
                            <br><br>
                            <div class="row slideanim">
                              <div class="col-sm-4">
                                <span class="glyphicon glyphicon-leaf logo-small"></span>
                                <h4>Integridad y respeto</h4>
                              </div>
                              <div class="col-sm-4">
                                <span class="glyphicon glyphicon-certificate logo-small"></span>
                                <h4>Diversión y trabajo en equipo</h4>
                              </div>
                              <div class="col-sm-4">
                                <span class="glyphicon glyphicon-wrench logo-small"></span>
                                <h4 style="color:#303030;">Calidad y excelencia en el servicio</h4>
                              </div>
                            </div>
                          </div>
                          
                          
                          
                          <!-- Container (Contact Section) -->
                          <div id="contact" class="container-fluid bg-grey">
                            <h2 class="text-center">CONTACT</h2>
                            <div class="row">
                              <div class="col-sm-5">
                                <p>Ponte en contacto y te respondremos en las primeras 24 hrs.</p>
                                <p><span class="glyphicon glyphicon-map-marker"></span> Puebla, PUE. MX.</p>
                                <p><span class="glyphicon glyphicon-phone"></span> +52 2222222222</p>
                                <p><span class="glyphicon glyphicon-envelope"></span> correo@buap.com</p>
                              </div>
                            </div>
                          </div>
                          
                          <!-- Image of location/map -->
                          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d60342.21007484706!2d-98.20800195!3d19.04666535!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2smx!4v1652884635380!5m2!1ses!2smx" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                          
                          <footer class="container-fluid text-center">
                            <a href="#myPage" title="To Top">
                              <span class="glyphicon glyphicon-chevron-up"></span>
                            </a>
                          </footer>
                          
                          <script>
                          $(document).ready(function(){
                            // Add smooth scrolling to all links in navbar + footer link
                            $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
                              // Make sure this.hash has a value before overriding default behavior
                              if (this.hash !== "") {
                                // Prevent default anchor click behavior
                                event.preventDefault();
                          
                                // Store hash
                                var hash = this.hash;
                          
                                // Using jQuery's animate() method to add smooth page scroll
                                // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
                                $('html, body').animate({
                                  scrollTop: $(hash).offset().top
                                }, 900, function(){
                             
                                  // Add hash (#) to URL when done scrolling (default click behavior)
                                  window.location.hash = hash;
                                });
                              } // End if
                            });
                            
                            $(window).scroll(function() {
                              $(".slideanim").each(function(){
                                var pos = $(this).offset().top;
                          
                                var winTop = $(window).scrollTop();
                                  if (pos < winTop + 600) {
                                    $(this).addClass("slide");
                                  }
                              });
                            });
                          })
                          </script>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <!--Rutas Registradas-->
                        <div class="container bg-success p-2 text-dark bg-opacity-10">
                            <h3>Verificar Rutas</h3>
                            <form method="POST" id="formulario-rutas" name="formulario-rutas">
                                <button type="submit" class="btn btn-primary">Verificar Rutas</button>
                            </form>
                            <div class="container">
                                <table id="datatableRutas" class="table table-striped table-bordered dt-responsive" style="border-collapse: collapse; width: 100%;">
                                    <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Infomacion</th>
                                        <th>Acciones</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="message" role="tabpanel" aria-labelledby="message-tab">
                        <!--Rutas Registradas-->
                        <div class="container bg-success p-2 text-dark bg-opacity-10">
                            <h3>Verificar Rutas</h3>
                            <form method="POST" id="formulario-Eliminar-rutas" name="formulario-Eliminar-rutas">
                                <button type="submit" class="btn btn-primary">Actualizar Rutas</button>
                            </form>
                            <div class="container">
                                <table id="datatableRutasEliminar" class="table table-striped table-bordered dt-responsive" style="border-collapse: collapse; width: 100%;">
                                    <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Infomacion</th>
                                        <th>Acciones</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="setting" role="tabpanel" aria-labelledby="setting-tab">
                        <!--Inisiar Sesion-->
                        <!--<h4>Solo unos pasos más</h4> -->
                        <div class="main container bg-success p-2 text-dark bg-opacity-10">
                            <h4>Reporte Total:</h4>
                            <div class="container">
                                <h5>Usuarios Registrados:</h5>
                                <h5>Rutas Totales Registradas:</h5>
                                <h5>Puntos Totales Registrados:</h5>
                                <h5>Numero de Comentarios:</h5>
                            </div>
                        </div>
                    </div>
                </div>
        </div>

        <div class="col-lg-3 col-md-6 m-t-30">

                 <!--  Modal content for the above example -->
                <div class="modal fade bs-example-modal-lg" id="MyModal1" name="MyModal1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title m-0" id="myLargeModalLabel">Puntos Registrados</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <div class="modal-body">
                                <div class="container">
                                    <table id="datatablePuntos" class="table table-striped table-bordered dt-responsive" style="border-collapse: collapse; width: 100%;">
                                        <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Descripción</th>
                                            <th>Opciones</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->

                 <!--  Modal content for the above example -->
                 <div class="modal fade bs-example-modal-lg" id="MyModalComentariosRuta" name="MyModalComentariosRuta" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title m-0" id="MyModalComentariosRutas">Comentarios de la Ruta</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <div class="modal-body">
                                <div class="main container bg-success p-2 text-dark bg-opacity-10">
                                    <form method="POST" id="formularioComentarioRuta" name="formularioComentarioRuta" autocomplete="off">
                                        <h4>Nuevo Comentario</h4>
                                        <div class="row mt-2">
                                            <div class="col-lg-12 col-md-12 col-sm-12 m-t-10"  visibility: hidden>
                                                <label for="idRuta">idRuta:</label><br>
                                                <input type="text"  class="form-control" name="idRuta" id="idRuta" required value="<?php echo $Session; ?>">
                                            </div>
        
                                            <div class="col-lg-12 col-md-12 col-sm-12 m-t-10">
                                                <div class="form-group">
                                                    <label for="ComentariodRuta">Danos tu opinion:</label>
                                                    <textarea class="form-control" id="ComentariodRuta" name="ComentariodRuta" rows="3" required></textarea>
                                                </div>
                                            </div>
        
                                            <div class="col-lg-12 mt-2">
                                            <button type="submit" class="btn btn-primary">Comentar</button>
                                            </div>
        
                                        </div>
                                    </form>
                                </div>

                                <div class="container">
                                    <table id="datatableComentariosRuta" class="table table-striped table-bordered dt-responsive" style="border-collapse: collapse; width: 100%;">
                                        <thead>
                                        <tr>
                                            <th>Comentarios</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->

                <!--  Modal content for the above example -->
                <div class="modal fade bs-example-modal-lg" id="MyModalComentariosPunto" name="MyModalComentariosPunto" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title m-0" id="MyModalComentariosPuntos">Comentarios del Punto</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <div class="modal-body">
                                <div class="main container bg-success p-2 text-dark bg-opacity-10">
                                    <form method="POST" id="formularioComentarioPunto" name="formularioComentarioPunto" autocomplete="off">
                                        <h4>Nuevo Comentario</h4>
                                        <div class="row mt-2">
                                            <div class="col-lg-12 col-md-12 col-sm-12 m-t-10"  visibility: hidden>
                                                <label for="idPunto">idPunto:</label><br>
                                                <input type="text"  class="form-control" name="idPunto" id="idPunto" required value="<?php echo $Session; ?>">
                                            </div>
        
                                            <div class="col-lg-12 col-md-12 col-sm-12 m-t-10">
                                                <div class="form-group">
                                                    <label for="ComentarioPunto">Danos tu opinion:</label>
                                                    <textarea class="form-control" id="ComentarioPunto" name="ComentarioPunto" rows="3" required></textarea>
                                                </div>
                                            </div>
        
                                            <div class="col-lg-12 mt-2">
                                            <button type="submit" class="btn btn-primary">Comentar</button>
                                            </div>
        
                                        </div>
                                    </form>
                                </div>
                                <div class="container">
                                    <table id="datatableComentariosPunto" class="table table-striped table-bordered dt-responsive" style="border-collapse: collapse; width: 100%;">
                                        <thead>
                                        <tr>
                                            <th>Comentarios</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
            </div>
        
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/modernizr.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>

        <script src="assets/js/app.js"></script>
        <script type="text/javascript" src="GestionRutas.js"></script>

        <!-- Sweet-Alert  -->
        <script src="assets/plugins/sweetalert2/sweetalert2.min.js"></script>
        <script src="assets/pages/sweet-alert.init.js"></script>

        <!-- Required datatable js-->
        <script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
        

        <!-- Datatable init js -->
        <script src="assets/pages/datatables.init.js"></script>
        <script src="assets/pages/datatables-sample.init.js"></script>
        
        
    </body>
    <footer>

    </footer>
</html>
