<?php
//Requisição de banco de dados
require_once __DIR__ . "/connection.php";

$buscar_cadastro = "SELECT * FROM tb_cliente";
$query_cadastro = mysqli_query($connx, $buscar_cadastro);


?>

<!doctype html>
<html lang="pt-BR">

<head>
  <title>Cadastro de clientes</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <header>
    <!-- place navbar here -->
    <div class="container">
        <div class="table-responsive">
            <table class="table table-light">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Email</th>
                        <th scope="col">Telefone</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                      //mysqli_fetch_array pega a variável $quero_cadastro, que recebe a conexão e busca o cadastro.
                      while($receber_cadastro = mysqli_fetch_array($query_cadastro)) 
                            {
                                $id = $receber_cadastro['id'];
                                $name = $receber_cadastro['name'];
                                $email = $receber_cadastro['email'];
                                $phone = $receber_cadastro['phone'];
                        ?>
                    <tr class="table table-light">
                        <td scope="row"><?php echo $id; ?></td>  
                        <td> <?php echo $name;?> </td>
                        <td> <?php echo $email;?> </td>
                        <td> <?php echo $phone;?> </td>
                    </tr>

                    <?php   }; ?> <!-- Fechamento do While -->
                    
                    <tr> 
                        <form action="registration.php" method="POST"> 
                        <td></td>    
                        <td><input type="text" name="name"></td>
                        <td><input type="email" name="email"></td>
                        <td><input type="text" name="phone"></td>
                        <td><input type="submit" value="cadastro"></td>
                    </tr>
                       
                      </form>
                   

                </tbody>
            </table>
        </div>
    </div>
    
  </header>
  <main>

  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>