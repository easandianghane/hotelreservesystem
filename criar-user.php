<?php
include('config.php');
if (isset($_POST['email']) || isset($_POST['senha']) || isset($_POST['nome'])) {
    if (strlen($_POST['email']) == 0) {
        echo "Preencha seu e-mail";
    } else if (strlen($_POST['senha']) == 0) {
        echo "Preencha sua senha";
    } else if (strlen($_POST['nome']) == 0) {
        echo "Preencha seu nome";
    } else {
        $nome = $conn->real_escape_string($_POST['nome']);
        $email = $conn->real_escape_string($_POST['email']);
        $senha = $conn->real_escape_string($_POST['senha']);
        //$nome = $_POST['nome'];
        //$email = $_POST['email'];
        //$senha = $_POST['senha'];        
        $sql_code = "INSERT INTO usuario (nome, email, senha) VALUES ('$nome', '$email', '$senha');";
        $sql_query = $conn->query($sql_code) or die("Falha na execução do código SQL: " . $conn->error);
        $sql_code = "SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha'";
        $sql_query = $conn->query($sql_code) or die("Falha na execução do código SQL: " . $conn->error);
        $quantidade = $sql_query->num_rows;
        $usuario = $sql_query->fetch_assoc();
        if (!isset($_SESSION)) {
            session_start();
        }
        $_SESSION['id'] = $usuario['id'];
        $_SESSION['nome'] = $usuario['nome'];
        $_SESSION['email'] = $usuario['email'];
        $_SESSION['reserva'] = $usuario['reserva'];
        header("Location: page-inicial.php");
    }
}
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
    <title>Criar conta</title>
</head>

<body id="corpologin">
    <div class="card" id="telalogin">
        <!--<img src="./img/hotel.jpg" class="card-img-top" alt="">-->
        <div class="card-body">
            <form action="" method="POST">
                <div id="logotitle" style="text-align: center;">
                    <h3>Criar Conta</h3>
                </div>
                <div class="mb-3" style="text-align: center;">
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Nome Completo*" name="nome">
                </div>
                <div class="mb-3" style="text-align: center;">
                    <input type="email" placeholder="Email*" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                </div>
                <div class="mb-3" style="text-align: center;">
                    <input type="password" placeholder="Senha*" class="form-control" id="exampleInputPassword1" name="senha">
                </div>
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-success" style="text-align: center;">CRIAR CONTA</button>
                </div>
                <div id="criar-conta" class="form-text">Ja tem uma conta? <a href="./index.php"> Entrar</a></div>
            </form>
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