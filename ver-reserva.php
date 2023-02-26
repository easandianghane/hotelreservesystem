<?php
include('protect.php');
include_once("config.php");

$id = $_SESSION['id'];
$x = mysqli_query($conn, "SELECT * FROM reserva WHERE id = '$id'");
$y = mysqli_fetch_assoc($x);

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="slylesheet" href="./bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <title>Ver Reserva</title>
</head>

<body id="corpologin">
    <div class="card" id="telalogin">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">chegada</th>
                        <th scope="col">Nr Noites</th>
                        <th scope="col">Nr Hospedes</th>
                        <th scope="col">Quarto</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td><?php echo $y['id']?></td>
                        <td><?php echo $y['chegada']?></td>
                        <td><?php echo $y['nrNoites']?></td>
                        <td><?php echo $y['hospedes']?></td>
                        <td><?php echo $y['quarto']?></td>
                    </tr>
                </tbody>
            </table>
            <div class="d-grid gap-2 d-md-block">
            <a href="http://localhost/Sistema/page-inicial.php"><button type="submit" class="btn btn-primary btn-lg" style="margin:50px;">Pagina inicial </button></a>
        </div>
        </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>