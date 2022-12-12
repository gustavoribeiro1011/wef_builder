<?php

//Resgatando os valores do post
$link = $_POST['link']; //Ex. www.brscrip.com/form1
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$bagagem = $_POST['bagagem'];
$tipo_viagem = $_POST['tipo_viagem'];
$tipo_passagem = $_POST['tipo_passagem'];
$adultos = $_POST['adultos'];
$criancas_1 = $_POST['criancas_1'];
$criancas_2 = $_POST['criancas_2'];
$data_ida = $_POST['data_ida'];
$data_volta = $_POST['data_volta'];
$origem = $_POST['origem'];
$destino = $_POST['destino'];

$whitelist = array(
  '127.0.0.1',
  '::1'
);

if (!in_array($_SERVER['REMOTE_ADDR'], $whitelist)) {
  // Definindo a conexão com o BD (Hostinger)
  $dbname = "u904669542_wefadmin";
  $username = "u904669542_wefadmin";
  $password = "g@8RxDyy";
  $servername = "localhost";
} else {
  // Definindo a conexão com o BD (Local)
  $dbname = "u904669542_wefadmin";
  $username = "root";
  $password = "usbw";
  $servername = "localhost";
}

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$sql = "
INSERT INTO forms (
nome,
email,
telefone,
bagagem,
tipo_viagem,
tipo_passagem,
adultos,
criancas_1,
criancas_2,
link,
data_ida,
data_volta,
origem,
destino,
created
) VALUES 
(
  '$nome',
  '$email',
  '$telefone',
  '$bagagem',
  '$tipo_viagem',
  '$tipo_passagem',
  '$adultos',
  '$criancas_1',
  '$criancas_2',
  '$link',
  '$data_ida',
  '$data_volta',
  '$origem',
  '$destino',
   date_sub(now(), INTERVAL 3 HOUR))
 ";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
