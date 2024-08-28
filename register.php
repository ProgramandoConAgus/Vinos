<?php
session_start();

$numero_recibido=$_GET['numero'];



?>



<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Fruitables - Vegetable Website Template</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Raleway:wght@600;800&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
    
    
        <!-- Navbar start -->
        <div class="container-fluid fixed-top px-0">
            <div class="topbar bg-primary d-none d-lg-block">
                <div class="d-flex justify-content-between">
                    <div class="top-info ps-2">
                        <small class="me-3">
                            <i class="fas fa-map-marker-alt me-2 text-secondary"></i>
                            <a href="#" class="text-white">123 Street, New York</a>
                        </small>
                        <small class="me-3">
                            <i class="fas fa-envelope me-2 text-secondary"></i>
                            <a href="#" class="text-white">Email@Example.com</a>
                        </small>
                    </div>
                    <div class="top-link pe-2">
                        <a href="#" class="text-white"><small class="text-white mx-2">Privacy Policy</small>/</a>
                        <a href="#" class="text-white"><small class="text-white mx-2">Terms of Use</small>/</a>
                        <a href="#" class="text-white"><small class="text-white ms-2">Sales and Refunds</small></a>
                    </div>
                </div>
            </div>
            <nav class="navbar navbar-light bg-white navbar-expand-xl">
                    <a href="index.php" class="navbar-brand"><h1 class="text-primary display-6" >Buscador de Vinos</h1></a>
                    <div class="collapse navbar-collapse bg-white" id="navbarCollapse">
                        <div class="navbar-nav mx-auto">
                            <a href="index.php" class="nav-item nav-link active" >Home</a>
                            <a href="shop.html" class="nav-item nav-link" >Shop</a>
                            <a href="shop-detail.html" class="nav-item nav-link" >Shop Detail</a>
                            <a href="register.php" class="nav-item nav-link">Soy bodega</a>
                        </div>
                        <div class="d-flex m-3 me-0">
                            <a href="#" class="position-relative me-4 my-auto">
                                <i class="fa fa-shopping-bag fa-2x"></i>
                                <span class="position-absolute bg-secondary rounded-circle d-flex align-items-center justify-content-center text-dark px-1" style="top: -5px; left: 15px; height: 20px; min-width: 20px;">3</span>
                            </a>
                            <a href="#" class="my-2">
                                <i class="fas fa-user fa-2x"></i>
                            </a>
                        </div>
                    </div>
                </nav>
        </div>

        
        <!-- Navbar End -->

        <!-- Single Page Header start -->
        <div class="container-fluid page-header py-5">
            <?php
            if($numero_recibido==2){
            ?>
            <h1 class="text-center text-white display-6">Registro</h1>
            <?php
            }else{
            ?>
            <h1 class="text-center text-white display-6">Inicio de Sesion</h1>
            <?php
            }
            ?>
        </div>
        <br>
        <div class="container ">
			<!--begin::Card body-->
            <div class="container">		
                <!-- Single Page Header End -->                            
                <ul class="nav d-flex justify-content-center align-items-center">
                    <!--begin::Nav item-->
                    <li class="nav-item my-3">
                        <button class="register"><a class="btn text-uppercase" href="register.php?numero=1">Iniciar Sesion</a></button>
                    </li>
                    <!--end::Nav item-->
                    <!--begin::Nav item-->
                    <li class="nav-item my-3">
                        <button class="register"><a class="btn text-uppercase" href="register.php?numero=2">Registrarse</a></button>
                    </li>
                    <!--end::Nav item-->
                </ul>
            </div>
        </div>
        <?php
            if($numero_recibido==2){
        ?>
        <!-- Checkout Page Start -->
        <div class="container-fluid">
            <div class="container ">
                <form action="register_validacion.php" method="post">
                    <div class="row g-5">
                        <div class="col">         
                            <div class="form-item">  
                                <label class="form-label my-3">Nombre Bodega<sup>*</sup></label>
                                <input type="text" class="form-control"name="nombre_bodega" placeholder="Name">
                            </div>
                            <div class="form-item">
                                <label class="form-label my-3">Contraseña<sup>*</sup></label>
                                <input type="password" placeholder="Password" name="password" class="form-control" required>
                            </div>
                            <div class="form-item">
                                <label class="form-label my-3">Confirmar Contraseña<sup>*</sup></label>
                                <input type="password" placeholder="Confirm Password" name="confirm_password" class="form-control" required>
                            </div>
                            <div class="form-item">
                                <label class="form-label my-3">Pais<sup>*</sup></label>
                                <input type="text" class="form-control" placeholder="Country" name="pais">
                            </div>
                            <div class="form-item">
                                <label class="form-label my-3">Codigo Postal/zip<sup>*</sup></label>
                                <input type="text" class="form-control" placeholder="X0000" name="postal">
                            </div>
                            
                        </div>
                        <div class="col"> 
                            <div class="form-item">
                                <label class="form-label my-3">Ciudad<sup>*</sup></label>
                                <input type="text" class="form-control" placeholder="City" name="ciudad">
                            </div>
                            <div class="form-item">
                                <label class="form-label my-3">Calle <sup>*</sup></label>
                                <input type="text" class="form-control" placeholder="Nombre de la Calle" name="calle">
                            </div>
                            <div class="form-item">
                                <label class="form-label my-3">Numero <sup>*</sup></label>
                                <input type="text" class="form-control" placeholder="Numero de calle" name="calle_num">
                            </div>
                            <div class="form-item">
                                <label class="form-label my-3">Direccion de Email<sup>*</sup></label>
                                <input type="email" class="form-control" placeholder="your@email.com" name="email">
                            </div>
                            <div class="form-item">
                                <label class="form-label my-3">Numero de Telefono<sup>*</sup></label>
                                <input type="tel" id="telefono" class="form-control" name="telefono" placeholder="123-456-7890" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required>
                            </div>
                        </div>
                          
                            <div class="row g-4 text-center align-items-center justify-content-center pt-4">
                                <button type="submit" class="btn border-secondary py-3 px-4 text-uppercase w-100 text-primary">Registrarse</button>
                            </div>
                    
                    </div>
                </form>
            </div>
        </div>
        <!-- Checkout Page End -->
        <?php
            }
            else{
        ?>
        <!-- Checkout Page Start -->
        <div class="container-fluid">
            <div class="container">

                <form action="inicio_sesion.php" method="post">
                    <div class="row g-5">
                        <div class="col">         
                            <div class="form-item">  
                                <label class="form-label my-3">Nombre Bodega<sup>*</sup></label>
                                <input type="text" class="form-control" name="nombre_bodega" placeholder="Name">
                            </div>
                            <div class="form-item">
                                <label class="form-label my-3">Direccion de Email<sup>*</sup></label>
                                <input type="email" class="form-control" name="email" placeholder="your@email.com">
                            </div>
                            <div class="form-item">
                                <label class="form-label my-3">Contraseña<sup>*</sup></label>
                                <input type="password" placeholder="Password" name="password" class="form-control" required>
                            </div>
                        </div>
                        <div class="row g-4 text-center align-items-center justify-content-center pt-4">
                            <button type="submit" class="btn border-secondary py-3 px-4 text-uppercase w-100 text-primary">Registrarse</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- Checkout Page End -->
         <?php
            }
         ?>


        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5">
            <div class="container py-5">
                <div class="pb-4 mb-4" style="border-bottom: 1px solid rgba(226, 175, 24, 0.5) ;">
                    <div class="row g-4">
                        <div class="col-lg-3">
                            <a href="#">
                                <h1 class="text-primary mb-0">Fruitables</h1>
                                <p class="text-secondary mb-0">Fresh products</p>
                            </a>
                        </div>
                        <div class="col-lg-6">
                            <div class="position-relative mx-auto">
                                <input class="form-control border-0 w-100 py-3 px-4 rounded-pill" type="number" placeholder="Your Email">
                                <button type="submit" class="btn btn-primary border-0 border-secondary py-3 px-4 position-absolute rounded-pill text-white" style="top: 0; right: 0;">Subscribe Now</button>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="d-flex justify-content-end pt-3">
                                <a class="btn  btn-outline-secondary me-2 btn-md-square rounded-circle" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-secondary me-2 btn-md-square rounded-circle" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-secondary me-2 btn-md-square rounded-circle" href=""><i class="fab fa-youtube"></i></a>
                                <a class="btn btn-outline-secondary btn-md-square rounded-circle" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-item">
                            <h4 class="text-light mb-3">Why People Like us!</h4>
                            <p class="mb-4">typesetting, remaining essentially unchanged. It was 
                                popularised in the 1960s with the like Aldus PageMaker including of Lorem Ipsum.</p>
                            <a href="" class="btn border-secondary py-2 px-4 rounded-pill text-primary">Read More</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="d-flex flex-column text-start footer-item">
                            <h4 class="text-light mb-3">Shop Info</h4>
                            <a class="btn-link" href="">About Us</a>
                            <a class="btn-link" href="">Contact Us</a>
                            <a class="btn-link" href="">Privacy Policy</a>
                            <a class="btn-link" href="">Terms & Condition</a>
                            <a class="btn-link" href="">Return Policy</a>
                            <a class="btn-link" href="">FAQs & Help</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="d-flex flex-column text-start footer-item">
                            <h4 class="text-light mb-3">Account</h4>
                            <a class="btn-link" href="">My Account</a>
                            <a class="btn-link" href="">Shop details</a>
                            <a class="btn-link" href="">Shopping Cart</a>
                            <a class="btn-link" href="">Wishlist</a>
                            <a class="btn-link" href="">Order History</a>
                            <a class="btn-link" href="">International Orders</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-item">
                            <h4 class="text-light mb-3">Contact</h4>
                            <p>Address: 1429 Netus Rd, NY 48247</p>
                            <p>Email: Example@gmail.com</p>
                            <p>Phone: +0123 4567 8910</p>
                            <p>Payment Accepted</p>
                            <img src="img/payment.png" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->

        <!-- Copyright Start -->
        <div class="container-fluid copyright bg-dark py-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        <span class="text-light"><a href="#"><i class="fas fa-copyright text-light me-2"></i>Your Site Name</a>, All right reserved.</span>
                    </div>
                    <div class="col-md-6 my-auto text-center text-md-end text-white">
                        <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                        <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                        <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                        Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a> Distributed By <a class="border-bottom" href="https://themewagon.com">ThemeWagon</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->



        <!-- Back to Top -->
        <a href="#" class="btn btn-primary border-3 border-primary rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>   

                            <?php
								if($_SESSION['notificacion']!=null){
							?>
							<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  							<div class="modal-dialog">
    							<div class="modal-content">
      							<div class="modal-header">
        							<h1 class="modal-title fs-5" id="staticBackdropLabel">Registro</h1>
        							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      							</div>
      							<div class="modal-body">
								  	<?=$_SESSION['notificacion']?>
      							</div>
    							</div>
  							</div>
							</div>
							<script>
        						document.addEventListener('DOMContentLoaded', function() {
            						var myModal = new bootstrap.Modal(document.getElementById('staticBackdrop'));
            						myModal.show();
        						});
    							</script>
							<?php
								}
							?>
        
    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    </body>

</html>



<?php
$_SESSION['notificacion']=null
?>