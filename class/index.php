<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">

    
    <title>crud</title>
</head>
<body>
  <h1>Cadastro</h1>
    <?php
    include("classconexao.php");
    $conexao = new classconexao();
    $conexao->conectaDB();
    ?>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Cadastro paciente</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=novo">Novo usuario</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=listar">Listar usuario</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class ="container">
  <div class="row">
    <div class="col mt-5">
    <?php
    include("config.php");
    switch(@$_REQUEST["page"]){
      case"novo":
        include("novo-usuario.php");
      break;
      case"listar":
        include("listar-usuario.php");
      break;
      case "salvar":
        include("salvar-usuario.php");
      break;
      case "editar":
        include("editar-usuario.php");
      break;
      default:
      print"<h1>Bem vindos</h1>";
    }
    ?>
    </div>
  </div>
</div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>

</html>