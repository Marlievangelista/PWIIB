<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto PWII B</title>
    <link href="bootstrap.min.css" rel="stylesheet" />
    <link href="estilo.css" rel="stylesheet" />
</head>
<body>
<nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      
     <img src="/pwiib/imagens/bootstrap-logo.svg" alt="Bootstrap" width="50" height="25" />
      Projeto PW 2 Turma B
  </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
       
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            php
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="variavel.php">Variável</a></li>
            <li><a class="dropdown-item" href="if.php">If</a></li>
            <li><a class="dropdown-item" href="while.php">While</a></li>
            <li><a class="dropdown-item" href="for.php">For</a></li>
            <li><a class="dropdown-item" href="switch.php">Switch</a></li>
            <li><a class="dropdown-item" href="array.php">Array/Vetor</a></li>
          </ul>
        </li>
       
      </ul>
     
    </div>
  </div>
</nav>
   <div class="container">
      <div class="row">
      <div class="col-4 offset-4">
<ol class="list-group">
   <li class="list-group-item">
      

      <br />

   <form action="Exercicios.php" method="get">
         <div class="input-group mb-3">
               <span class="input-group-text">Digite seu login</span>
               <input type="text" class="form-control" name="Digite seu login" >
         </div>
         <div class="input-group mb-3">
               <span class="input-group-text">Digite sua senha</span>
               <input type="number" class="form-control" name="Digite sua Senha "  >
         </div>
         <?php
            if(isset($_GET["idade"]) && empty($_GET["idade"]) )
            {
               echo "<div class='alert alert-danger'>";
               echo "   O campo idade não pode estar vazio";
               echo "</div>";
            }
         ?>
         <button type="submit" class="btn btn-primary">
         <style>


.button {background-color: #FF8C00;} 

</style>
</head>
<body>

<div class="jumbotron text-center">
  <h2>My First Bootstrap Page</h2>
  <p>Some Bootstrap buttons:</p>
  
  <button class="btn btn-success">Success</button>
</div>


</body>
</html> 
         <p>
          
         </button>
   </form>
   <br />
   </div>
   <?php 
      if(isset($_GET["nome"]) && isset($_GET["idade"]) )
      {
   ?>      
        <div class="alert alert-success">
            Nome e idade: 
         <?php 
            echo $_GET["nome"];
          ?>
            <br/>
          <?php
            echo $_GET["idade"]; 
         ?>
   </div>
     
   <?php
      }
   ?>
  
</li>
</body>
</html>