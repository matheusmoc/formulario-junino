<?php



if( $_POST["nome"]) {

    echo 'Bem-vindo, '.$_POST['nome'];
    echo '<br>';
    echo 'AGUARDE 5 SEGUNDOS PARA SER REDIRECIONADO PARA O PROXIMO PASSO<br>'; // print João da Silva
    header('refresh:3;../form-candy/get-candy.html');

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
     
    $nome = $_POST["nome"];

    $sql = "INSERT INTO register(nome) VALUES ('$nome')";
    if (mysqli_query($conn, $sql)) {
          echo "New record created successfully";
    } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
