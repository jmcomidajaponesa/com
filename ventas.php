<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: login.html");
    exit();
}

require 'conect.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plataforma JM</title>
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
            <a style="height: 80px; margin-top: -1px; padding: 0 30px;" href="login.php">
                <button type="button" class="btn btn-lg btn-block btn-primary font-weight-bold my-3 py-3">Salir</button>
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
                            <a href="login.php" class="nav-item nav-link">Login</a>
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
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Ventas</h1>
        </div>
    </div>
    <!-- Page Header End -->
      
    <div class="text-center mb-4">
        <h2 class="section-title px-5"><span class="px-2">Venta Actual</span></h2>
    </div>
    
    <form action="consultv.php" method="post">

    <div class="form-control">
        <select class="form-control" name="name_regis" tabindex="2" required autofocus>
            <option value="0">Selecciona nombre del cliente:</option>
            <?php
            $consulta = "SELECT * FROM registro";
            $ejecutar = mysqli_query($conect, $consulta) or die(mysqli_error($conect));
            foreach ($ejecutar as $opciones): ?>
                <option value="<?php echo $opciones['usuario']; ?>"><?php echo $opciones['usuario']; ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    
    <div class="form-control">
        <select class="form-control" name="email_regis" tabindex="2" required autofocus>
            <option value="0">Selecciona dirección del cliente:</option>
            <?php
            foreach ($ejecutar as $opciones): ?>
                <option value="<?php echo $opciones['correo']; ?>"><?php echo $opciones['correo']; ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    
    <div class="form-control">
        <select class="form-control" name="tel_regis" tabindex="2" required autofocus>
            <option value="0">Selecciona teléfono del cliente:</option>
            <?php
            foreach ($ejecutar as $opciones): ?>
                <option value="<?php echo $opciones['celular']; ?>"><?php echo $opciones['celular']; ?></option>
            <?php endforeach; ?>
        </select>

    </div>
        <form action="consultv.php"  id="request" class="main_form">
        <p class="help-block text-danger"></p>

        <div>
            <button class="btn btn-primary py-2 px-4" href="consultv.php"name="boton_venta" type="submit" value="Guardar">Guardar</button>
        </div> 
    
    
        </form>
        <div>
            <button class="btn btn-primary py-2 px-4" class="miboton" type="reset" value="Limpiar" onclick="reload(0.5);">Limpiar</button>
        </div>
    </form>
    
    
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
            </div>
        </div>
    </div>
    <!-- Footer End -->
    
    <script>
        function reload(segs) {
            setTimeout(function() {
            location.reload();
            }, parseInt(segs) * 1);
        }
    </script>
    
</body>
</html>