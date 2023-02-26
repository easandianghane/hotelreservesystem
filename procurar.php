<?php
include('protect.php');
?>
<!DOCTYPE html>
<html>

<head>
    <title>Hotel Universitario - Reservas</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="slylesheet" href="./bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="./css/page-inicial.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300.400.700">


</head>

<body>
    <!--Head-->
    <div class="row header">
        <div class="content">
            <div class="header-logo">
                <h1>
                    <a href="./page-inicial.php">Hotel <span>Universitario</span></a>
                </h1>
            </div>
            <div class="header-menu">
                <p><?php echo $_SESSION['nome'];  ?><a href="logout.php"><i class="material-icons" style="font-size:18px">logout</i></a></p>

                <ul>
                <li><a href="http://localhost/Sistema/quartos.php">Quartos</a></li>
                    <li><a href="http://localhost/Sistema/pacotes.php">pacotes</a></li>
                    <li><a href="#">Termos e Condicoes</a></li>
                    <li><a href="mailto:eddylikeedson@gmail.com?&subject=Reserva%20no%20hotel%20universitario">Contato</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="row pacotes">
        <h1 style="margin-bottom: 10px; margin: 50px 50px 0;">Pacotes</h1>
        <div class="row quartos">
            <div class="col" style="margin-bottom: 10px; margin: 50px 50px 0; color: black;">
                <a href="http://localhost/Sistema/lua-de-mel.php">
                    <div class="cover">
                        <img src="img/OIP (2).jpg" alt="Lua de mel" />
                    </div>
                </a>
                <h4 style=" text-align: center;">LUA DE MEL (3 Noites)</h4>
                <p>O quarto esta equipado com TV LCD,
                    varios canais Moçambicanos e Estrangeiros;
                    Secador de Cabelo, Balança, WiFi ultrarrápido,
                    e conforto ímpar e Champanhe</p>
                <h6> <span style="color: #2c3e50;">TARIFA: </span> a partir de MZN 8.400,00/noite</h6>
                <div class="d-grid gap-2 col-6 mx-auto">
                    <a href="http://localhost/Sistema/lua-de-mel.php"><button class="btn btn-warning" type="button">RESERVE JÁ!</button></a>
                </div>
            </div>
            <div class="col" style="margin-bottom: 10px; margin: 50px 50px 0;  color: black;">
                <a href="#">
                    <div class="cover">
                        <img src="img/OIP (3).jpg" alt="Buffet" />
                    </div>
                </a>
                <h4 style=" text-align: center;">ACESSO AO BUFFET(2 Noites)</h4>
                <p>Reserva 1 quarto por duas noites e tenha acesso ao Buffet gratis na primeira noite de estadia no hotel;<br>
                    Valido apenas para clientes singulares
                </p>
                <h6> <span style="color: #2c3e50;">TARIFA: </span> a partir de MZN 6.200,00/noite</h6>
                <div class="d-grid gap-2 col-6 mx-auto">
                    <button class="btn btn-warning" type="button">RESERVE JÁ!</button>
                </div>
            </div>
            <div class="col" style="margin-bottom: 10px; margin: 50px 50px 0px; color: black;">
                <a href="#">
                    <div class="cover">
                        <img src="img/0001_450.jpg" alt="Quarto 2 camas" />
                    </div>
                </a>
                <h4 style=" text-align: center;">QUARTO TWIN (4 Noites)</h4>
                <p>O quarto esta equipado com TV LCD,
                    varios canais Moçambicanos e Estrangeiros;
                    Secador de Cabelo, Balança, WiFi ultrarrápido,
                    e conforto ímpar</p>
                <h6> <span style="color: #2c3e50;">TARIFA: </span> a partir de MZN 7.400,00/noite</h6>
                <div class="d-grid gap-2 col-6 mx-auto">
                    <button class="btn btn-warning" type="button">RESERVE JÁ!</button>
                </div>
            </div>
        </div>
    </div>
    <div class="row quartos" style="background-color:#2c3e50 ; padding: 40px 0;">
        <h1 style="margin-bottom: 10px; margin: 50px 50px 0;">Quartos</h1>
        <div class="row quartos" style="background-color:#2c3e50 ;">
            <div class="col" style="margin-bottom: 10px; margin: 50px 50px 0;">
                <a href="#">
                    <div class="cover">
                        <img src="img/OIP (1).jpg" alt="Quarto Casal" />
                    </div>
                </a>
                <h2 style=" text-align: center;">QUARTO DUPLO COM VARANDA</h2>
                <p>O quarto esta equipado com TV LCD,
                    varios canais Moçambicanos e Estrangeiros;
                    Secador de Cabelo, Ar condicionado, WiFi ultrarrápido,
                    e conforto ímpar</p>
                <h6> <span style="color:black;">TARIFA: </span> a partir de MZN 4.200,00/noite</h6>
                <div class="d-grid gap-2 col-6 mx-auto">
                    <button class="btn btn-warning" type="button">RESERVE JÁ!</button>
                </div>
            </div>
            <div class="col" style="margin-bottom: 10px; margin: 50px 50px 0;">
                <a href="#">
                    <div class="cover">
                        <img src="img/OIP.jpg" alt="Quarto 2 camas" />
                    </div>
                </a>
                <h2 style=" text-align: center;">QUARTO TWIN COM VARANDA</h2>
                <p>O quarto esta equipado com TV LCD,
                    varios canais Moçambicanos e Estrangeiros;
                    Secador de Cabelo, Ar condicionado, WiFi ultrarrápido,
                    e conforto ímpar</p>
                <h6> <span style="color:black;">TARIFA: </span> a partir de MZN 6.000,00/noite</h6>
                <div class="d-grid gap-2 col-6 mx-auto">
                    <button class="btn btn-warning" type="button">RESERVE JÁ!</button>
                </div>
            </div>
            <div class="col" style="margin-bottom: 10px; margin: 50px 50px 0;">
                <a href="#">
                    <div class="cover">
                        <img src="img/0001_450.jpg" alt="Quarto 2 camas" />
                    </div>
                </a>
                <h2 style=" text-align: center;">QUARTO TWIN STANDARD</h2> <br>
                <p>O quarto esta equipado com TV LCD,
                    varios canais Moçambicanos e Estrangeiros;
                    Secador de Cabelo, Ar condicionado, WiFi ultrarrápido,
                    e conforto ímpar</p>
                <h6 style="padding: 7px;"> <span style="color:black;">TARIFA: </span> a partir de MZN 5.900,00/noite</h6>
                <div class="d-grid gap-2 col-6 mx-auto">
                    <button class="btn btn-warning" type="button">RESERVE JÁ!</button>
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
                <li><a href="mailto:eddylikeedson@gmail.com?&subject=Reserva%20no%20hotel%20universitario">Contato</a></li>
            </ul>
        </div>
    </div>

</body>

</html>