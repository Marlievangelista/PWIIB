<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROJETO PWIIB </title>
    <link href="bootstrap.min.css" rel="stylesheet" >
   
 
<nav class="navbar navbar-expand-lg  bg-primary " data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Projeto pwiiB</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#"></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            PHP
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="variavel.php">variavel</a></li>
            <li><a class="dropdown-item" href="#">if</a></li>
            <li><a class="dropdown-item" href="#">while</li>
            <li><a class="dropdown-item" href="#">For</a></li>
            <li><a class="dropdown-item" href="#">Switch</a></li>
            <li><a class="dropdown-item" href="#">Array/Vetor</a></li>  
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true"></a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<div class="container">
<h1>variavel</h1>
<h3>declaraçao de variaveis</h3>
<p>
  A declaração de variáveis em PHP é feita utilizando o símbolo de cifrão ($) antes do nome da variável. O nome da variável deve começar com uma letra ou um underscore (_), seguido por letras, números ou underscores. As variáveis em PHP são dinâmicas, ou seja, não é necessário declarar o tipo da variável antes de usá-la. O valor da variável pode ser alterado ao longo da execução do código.
  </p>
  <pre>
      $nome = "João";  // variável do tipo string
      $idade = 25;     // variável do tipo inteiro
      $altura = 1.75;   // variável do tipo float
  </pre>
 

?>
</div> <!-- Fecha contaneir bootstrap -->
<?php
      
      $nome = "Fernando";
      $idade = 34;
      $peso = 79.500;
      $altura = 1.77;
      $isProf = true;
  
      $namorada = false;
      $salario = 5000.50;
  
      echo "<h1>$salario</h1>";
  
         $numeroTenis = "39";
  
         echo "$idade +  $peso";
      
  
    ?>
        <h1>Constantes</h1>
<p>
              Em PHP, constantes são valores fixos que não podem ser alterados durante a execução do programa. Elas são declaradas com a palavra-chave define() ou usando a palavra-chave const (para constantes definidas em classes ou escopos específicos).

      A principal diferença entre constantes e variáveis é que, enquanto as variáveis podem ter seu valor alterado, as constantes mantêm o mesmo valor durante todo o script. Constantes podem ser usadas em qualquer lugar do código e não precisam do símbolo de cifrão ($).

     <br />
      Exemplo de declaração de constante:
</p>

    <pre>
 
     define("PI", 3.14);  // Usando define()
     echo PI;  // Imprime 3.14

     const URL = "https://www.exemplo.com";  // Usando const
     echo URL;  // Imprime https://www.exemplo.com

    </pre>
<?php
  define("PI",3.14);
  echo PI;
  echo "<br>";

  const coordenador = "Faberson";
  echo "<br>";
  echo coordenador;

?>
<h1>Exercícios</h1>

<ol>
  <li>Crie 3 variaveis, atribua valor e some os valores.  Imprima na tela </li>
     $Carlos= 23
     $Dia=40
     $Ano=15
     echo "Carlos+"Dia"+"Ano";<br>
     <?php
     $Carlos=23;
     $Dia=40;
     $Ano=15;
     echo $Carlos+$Dia+$Ano;
     ?>


  <li>Crie 2 variaveis, atribua valor e multiplique os valores. Imprima na tela</li>
  $bala=20;
  $Valor=2;
  echo$bala*$Valor;
 <?php
  $bala=20;
  $Valor=2;
  echo$bala*$Valor;
  ?>
  <li>Crie 3 variáveis, uma para descrição de produto e outras duas para quantidade em estoque e valor de venda, 
    imprima na tela as informações cocatenadas.
    <?php
    $Produto="Vestido";
    $Quantidade= 50;
    $Estoque=30;
    $ValorVenda=25.00;
    
    ?>
  </li>
  <li>
    Crie uma variável boleana, atribua true ou false e imprima na tela
  </li>
  
</ol>



      </div> <!-- Fecha container bootstrap -->
   <script src="bootstrap.bundle.min.js"></script>
</body>
</html>


