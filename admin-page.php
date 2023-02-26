<?php
include('protect.php');
?>
<!DOCTYPE html>
<html>

<head>
    <title>Amin - Hotel Universitario</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="slylesheet" href="./bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="./css/page-inicial.css">
    <link rel="stylesheet" href="./css/page-inicial.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>

<body>
    <!--Head-->
    <div class="row header">
        <div class="content">
            <div class="header-logo">
                <h1>
                    <a href="./admin-page.php">Hotel <span>Universitario</span></a>
                </h1>
            </div>
            <div class="header-menu">
                <p><?php echo $_SESSION['email'];  ?><a href="logout.php"><i class="material-icons" style="font-size:18px">logout</i></a></p>
                <a href="mailto:eddylikeedson@gmail.com"><i class="fa fa-email"></i></a>
            </div>
        </div>
    </div>
    <div class="row pacotes">
        <div class="row quartos">
            <div class="col" style="margin-bottom: 10px; margin: 50px 50px 0; color: black;">

                <div class="cover">
                    <img src="img/OIP (2).jpg" alt="Lua de mel" />
                </div>
                <h4 style=" text-align: center; padding: 10px;">Pacotes</h4>
                <div class="d-grid gap-2 col-6 mx-auto">
                    <button class="btn btn-primary" type="button">Gerir</button>
                </div>
            </div>
            <div class="col" style="margin-bottom: 10px; margin: 50px 50px 0;  color: black;">
                
                    <div class="cover">
                        <img src="img/R.png" alt="Usuarios" style="padding: 100px;"/>
                    </div>
                
                <h4 style=" text-align: center;">Usuarios</h4>
                <div class="d-grid gap-2 col-6 mx-auto">
                    <button class="btn btn-primary" type="button">Gerir</button>
                </div>
            </div>
            <div class="col" style="margin-bottom: 10px; margin: 50px 50px 0; color: black;">
                
                    <div class="cover">
                        <img src="img/0001_450.jpg" alt="Quarto 2 camas" />
                    </div>
                    <h4 style=" text-align: center; padding: 10px 0;">Quartos</h4>
                <div class="d-grid gap-2 col-6 mx-auto">
                    <button class="btn btn-primary" type="button">Gerir</button>
                </div>
            </div>
        </div>
    </div>
    <div class="row rodape">
        <div class="content">
            <span>Copyright © 2021 by ea.sandianghane</span>
            <ul>
                <li><a href="./page-inicial.php">Home</a></li>
                <li><a href="#">Quartos</a></li>
                <li><a href="#">Pacotes</a></li>
                <li><a href="mailto:eddylikeedson@gmail.com">Contato</a></li>
            </ul>
        </div>
    </div>

</body>

</html>