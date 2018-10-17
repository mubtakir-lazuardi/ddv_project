<?php 

$servername = "localhost";
$username = "root";
$password = "123";
$dbname = "scrape_db2";

// create connection
$connect = new mysqli($servername, $username, $password, $dbname);

$query = "SELECT link FROM link";
$link = mysqli_query($connect, $query);
$count_link = mysqli_num_rows($link);

$query = "SELECT idKeyword FROM keyword";
$key = mysqli_query($connect, $query);
$count_key = mysqli_num_rows($key);

$query = "SELECT email FROM email";
$mail = mysqli_query($connect, $query);
$count_mail = mysqli_num_rows($mail);

$query = "SELECT idKategori FROM kategori";
$kategori = mysqli_query($connect, $query);
$count_kategori = mysqli_num_rows($kategori);




// check connection 
if($connect->connect_error) { 
  die("Connection Failed : " . $connect->connect_error);
} else {
  // echo "Successfully Connected";
}