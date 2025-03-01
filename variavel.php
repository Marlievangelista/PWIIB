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
  <H1></h1>
  </p>
  <h2> Estrutura  de decisão é composta por um teste booleano.</h2>
    esse teste verifica uma condição se verdadeiro  faça alguma ou se falso outra.
    <pre>
      $numero=2:
      if($numero ==1)

      {
        echo" aqui significa $numero igual a 1";
      }else{
        echo "Aqui significa $numero diferente de 1";
      }
      <pre>
        
        <?php
         $numero=2;
         if($numero ==1)
   
         {
           echo " Aqui significa $numero igual a 1";
         }else
         {

           echo "Aqui significa $numero diferente de 1";
           
         }
         ?>
         </p>
         <H2>
           ESTRUTURA DE DECISÃO ENCADEADA </h2>
           São varios testes um segudo do outro ate algum teste verdadeiro ser encontrado.
           Caso não encontrar nenhum positivo o else é executado.
           Ao encontrar um teste positivo todos os subsequnentes  não serão executados 
            <pre>
              $nome = "Fernando" ;
              if($nome =="joão") {

              }else if($nome =="maria");{

              }else if($nome =="Fernando");{
                

              }

              else if($nome=="pedro");{

              }else
              echo "nenhum nome é igual ao conteudo  da variavel";
            }
          </pre>

          <he>Varios teste em um 1 if<h2>
            Em uma estrutura de decisão unica  eu consigo realizar dois ou mais testes.
            Nesse caso eu preciso utilizar os  conectivos AND ou OR (E OU OU).
            <h3> Conectivo E (AND)</h3>
            No exemplo abaixo eu necessito que todas as condiçoes  resultem em verdadeiro.
            <pre>
              <?php
              $numero2 = 35;
              //   true     e  true
              if($numero2 > 10 && $numero2 < 50){
                echo "$numero2 esta entre 10 e 50";
              } 
                //False        TRUE
                if($numero2 > 36 && $numero2 < 50 && $numero2 == 35)
                {
                  // Esse codigo não sera executado
                }else{
                  echo "numero 2 não esta entre 36 e 50 ";
                }
            
                ?>
              </pre>
                <h3>Conectivo OU (or) </h3>
                <p>
                O conectivo ou teste todas as condiçoes e executa o codigo se  apenas uma das comdiçoes for verdadeiro.Caso  for verdadeiro o else é executado .

              
                  

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
              Em PHP, constantes são valores fixos que não podem ser alterados durante a execução do programa. Elas são declaradas com a palavra-chave define() 
              ou usando a palavra-chave const (para constantes definidas em classes ou escopos específicos).

      A principal diferença entre constantes e variáveis é que, enquanto as variáveis podem ter seu valor alterado, as constantes
       mantêm o mesmo valor durante todo o script. Constantes podem ser usadas em qualquer lugar do código e não precisam do símbolo de cifrão ($).

     <br />
      Exemplo de declaração de constante:
</p>

    <pre>
      $telefone ="1498576397";
      if($telefone ==" 1498767864 || $telefone =="1697685673")
      {
        ECHO "Aqui um dois telefones é igual a variavel";
      }
    </pre>
    Quando temos varias condiçoes apenas uma é necessario ao usar o conectivo OI representado  
    por dois PIPE (Tecla que fica do lado do Z)||
    </P>

    <h2>Exercicios</h2>
    <p>
      Crie uma  variavel idade preencha com um valor e 
      escreva na tela se ela  pode ou não entrar em um evento
      considerando as seguintes regras:
      <ul>
        <li>Menor e 18 anos: Não pode entrar.</li>
        <li> Maior ou igual a 18 anos e menor que 60: Pode  entrar.</li>
        <li> Maior ou igual a 60: Entraria gratuita.</li>
        <ul>
    </p>
    </div>
      <
 
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


