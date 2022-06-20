<?php

if( $_GET["doce"] ) {


    echo 'CADASTRANDO PRODUTO, POR FAVOR AGUARDE...<br>'; // print João da Silva
    header('refresh:3;../list.php');
    
    $servername = "localhost";
    $database = "festa_junina";
    $username = "root";
    $password = "";
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);
    // Check connection
    if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
    }
     
    echo "Connected successfully";

    $doce = $_GET["doce"];

    $sql = "INSERT INTO register(doce) VALUES ('$doce', '$nome')";
    if (mysqli_query($conn, $sql)) {
          echo "New record created successfully";
    } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
  

?>