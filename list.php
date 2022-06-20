<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  <title>Document</title>
</head>

<body>
  <form class="form-group" action="./submit.php" method="post">
    <div class="d-flex justify-content-center">
      <div class="align-items-center">
        <div class="card" style="width: 50rem; margin-top: 40%">
          <div class="card-body">
            <h5 class="card-title mb-3">
              Lista dos alunos cadastrados e os doces que iram levar:
            </h5>

            <!-- <ol class="list-group list-group-numbered">


                <li
                  class="list-group-item d-flex justify-content-between align-items-start"
                >
                  <div class="ms-2 me-auto">
                    <div class="fw-bold">Subheading</div>
                    Content for list item
                  </div>
                  <span class="badge bg-primary rounded-pill">0</span>
                </li>

              </ol> -->

            <?php
            //iniciando a conexão com o banco de dados 
            $cx = mysqli_connect("localhost", "root", "");

            //selecionando o banco de dados 
            $db = mysqli_select_db($cx, "festa_junina");

            //criando a query de consulta à tabela criada 
            $sql = mysqli_query($cx, "SELECT * FROM register") or die(mysqli_error($cx) //caso haja um erro na consulta 
            );

            //pecorrendo os registros da consulta. 
            while ($aux = mysqli_fetch_assoc($sql)) {
              echo "-----------------------------------------<br />";
              echo "Nome:" . $aux["nome"] . "<br />";
              echo "Doce:" . $aux["doce"] . "<br />";
            }

            ?>


          </div>
        </div>
      </div>
    </div>
  </form>
</body>

</html>