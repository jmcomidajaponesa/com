<?php
require 'conect.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plataforma JM</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
    
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <style>
        .table-hover tbody tr:hover {
            background-color: #f1f1f1;
        }
        thead {
            background-color: cadetblue;
            color: white;
            text-align: center;
        }
        tbody {
            background-color: #e6ffff;
            text-align: center;
        }
        .container {
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <!-- Topbar Start -->
    <div class="container-fluid">
        <div class="row bg-secondary py-2 px-xl-5">
            <div class="col-lg-6 d-none d-lg-block">
                <div class="d-inline-flex align-items-center">
                    <a class="text-dark" href="">FAQs</a>
                    <span class="text-muted px-2">|</span>
                    <a class="text-dark" href="">Ayuda</a>
                    <span class="text-muted px-2">|</span>
                    <a class="text-dark" href="">Soporte</a>
                </div>
            </div>
        </div>
        <div class="row align-items-center py-3 px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a href="" class="text-decoration-none">
                    <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">JM</span>Comida Japonesa</h1>
                </a>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

      <div class="container-fluid">
        <div class="row border-top px-xl-5">
                <a  style="height: 80px; margin-top: -1px; padding: 0 30px;" href="login.php">
                    <button type="submit" class="btn btn-lg btn-block btn-primary font-weight-bold my-3 py-3">Salir</button>
                </a>
                
        
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                    <a href="" class="text-decoration-none d-block d-lg-none">
                        <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">JM</span>Delivery</h1>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                     
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav ml-auto py-0">
                            <a href="login.html" class="nav-item nav-link">Login</a>
                            <a href="registro.html" class="nav-item nav-link">Registro</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>

    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 160px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Plataforma Administración</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="cons.php">Contacto</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0"><a href="check.php">Datos Compra</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0"><a href="new.php">Newsletter</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0"><a href="reg.php">Registro</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0"><a href="ventas.php">VENTAS</a></p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->
    
    
    <div class="text-center mb-4">
        <h2 class="section-title px-5"><span class="px-2">Tabla Checkout</span></h2>
    </div>

    <!-- Table Start -->
    <div class="container">
        <table class="table table-hover" id="dev-table">
            <thead>
                <tr>
                    <th>NAME</th>
                    <th>LASTNAME</th>
                    <th>EMAIL</th>
                    <th>PHONE</th>
                    <th>ADDRESS</th>
                    <th>COUNTRY</th>
                    <th>CITY</th>
                    <th>STATE</th>
                    <th>CP</th>
                    <th>DELETE</th>

                </tr>
            </thead>
            <tbody>
                <?php
                $consult = "SELECT * FROM checkout1";
                $result = mysqli_query($conect, $consult);
                while($fila = mysqli_fetch_array($result)){
                ?>
                <tr id="row-<?php echo $fila['ID_che']; ?>">
                    <td><?php echo $fila['nombre']; ?></td>
                    <td><?php echo $fila['apellido']; ?></td>
                    <td><?php echo $fila['email']; ?></td>
                    <td><?php echo $fila['telefono']; ?></td>
                    <td><?php echo $fila['direccion']; ?></td>
                    <td><?php echo $fila['pais']; ?></td>
                    <td><?php echo $fila['ciudad']; ?></td>
                    <td><?php echo $fila['estado']; ?></td>
                    <td><?php echo $fila['cp']; ?></td>
                    
                    <td>
                        <a href="delete_row.php?name=<?php echo $fila['nombre']; ?>" class="btn btn-sm btn-primary delete-btn">
                            <i class="fa fa-times" ></i>
                        </a>
                    </td>

                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <!-- Table End -->

   <!-- Footer Start -->
    <div class="container-fluid bg-secondary text-dark mt-5 pt-5">
        <div class="row px-xl-5 pt-5">
            <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
                <a href="" class="text-decoration-none">
                    <h1 class="mb-4 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border border-white px-3 mr-1">JM</span>COMIDA JAPONESA</h1>
                </a>
                <p>Venga y disfrute de un agradable momento en JM - Comida Japonesa.
                <br>
                Visítanos en Guanajuato 400, Alameda, Celaya Gto.</p>
                <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>Celaya, GTO</p>
                <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>jm-japones@outlook.com</p>
                <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i>+52 461 678 4590</p>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-md-4 mb-5">
                        <h5 class="font-weight-bold text-dark mb-4">Quick Links</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-dark mb-2" href="index.html"><i class="fa fa-angle-right mr-2"></i>Inicio</a>
                            <a class="text-dark mb-2" href="shop.html"><i class="fa fa-angle-right mr-2"></i>Tienda</a>
                            <a class="text-dark mb-2" href="detail.html"><i class="fa fa-angle-right mr-2"></i>Nosotros</a>
                            <a class="text-dark mb-2" href="cart.html"><i class="fa fa-angle-right mr-2"></i>Carrito de Compra</a>
                            <a class="text-dark mb-2" href="checkout.html"><i class="fa fa-angle-right mr-2"></i>Checkout</a>
                            <a class="text-dark" href="contact.html"><i class="fa fa-angle-right mr-2"></i>Contacto</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row border-top border-light mx-xl-5 py-4">
                <div class="col-md-6 px-xl-0">
                    <p class="mb-md-0 text-center text-md-left text-dark">
                        &copy; <a class="text-dark font-weight-semi-bold" href="#">JM Delivery</a>. All Rights Reserved. Designed
                        by
                        <a class="text-dark font-weight-semi-bold" href="https://htmlcodex.com">BlueFlame Source</a>
                    </p>
                </div>
                <div class="col-md-6 px-xl-0 text-center text-md-right">
                    <img class="img-fluid" src="img/payments.png" alt="">
                </div>
            </div>
        </div>
    </div>
        <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
    
