<?php
$host = "localhost";
$usuario = "root";
$senha ="";
$database ="Sistema";

$conn = mysqli_connect($host, $usuario, $senha, $database);
if(!$conn){
die(mysqli_connect_error()."<br<h1>Falha na connexao</h1>>");
}else{

}
?>