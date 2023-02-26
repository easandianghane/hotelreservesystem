<?php
include('protect.php');
include('config.php');
$checkin = $conn->real_escape_string($_POST['checkin']);
$quant_noites = 3;
$hospedes = 2;
$cliente = $_SESSION['id'];
$quarto = "Lua de Mel (3 Noites)";
$sql_code = "INSERT INTO reserva (chegada, nrNoites, hospedes, cliente, quarto) VALUES ('$checkin', '$quant_noites', '$hospedes','$cliente','$quarto');";
$sql_query = $conn->query($sql_code) or die("Falha na execução do código SQL: " . $conn->error);
$mensagem = "Reserva Efectuada com Sucesso!"
?>
<!DOCTYPE html>
<html>

<head>
    <title>Pacotes - Lua de Mel</title>
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
        <br>
        <h1 style="margin-bottom: 10px; margin: 100px 50px 0;"></h1>
        <div class="row quartos">
            <div class="col" style=" margin: 50px 20px 0;">
                <div class="cover">
                    <img src="img/OIP (2).jpg" alt="Lua de mel" style="width: 75%;" />
                </div>
            </div>
            <div class="col" style="margin-bottom: 100px; margin: 150px 50px 0;  color: black;">
                <h4 style=" text-align: center;">LUA DE MEL (3 Noites)</h4>
                <p>O quarto esta equipado com TV LCD,
                    varios canais Moçambicanos e Estrangeiros;
                    Secador de Cabelo, Balança, WiFi ultrarrápido,
                    e conforto ímpar e Champanhe</p>
                <h6> <span style="color: #2c3e50;">TARIFA: </span> a partir de MZN 8.400,00/noite</h6>
                <form action="" method="POST">
                    <label for="checkin">Chegada:</label>
                    <input type="date" id="checkin" name="checkin">
                    <button type="submit" class="btn btn-success btn-sm" style="margin: 10px 70px;">RESERVAR</button>
                </form>
                <div class="alert alert-danger" role="alert">
                    Reserva para 2 pessoas por 3 Noites!
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