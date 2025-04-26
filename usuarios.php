<?php
    include "cabecalho.php"; 
    include "conexao.php";
    //Inclui o arquivo da classe Repository do usuario

    require_once "UsuarioRepository.php";
    //Crio um objeto do tipo UsuarioRepository chamado repo
    //E recebe a conexão como parametro 

    $repo = new UsuarioRepository($conexao);
    // Chamei o metodo BuscarTodos para  puxar
    // todos ususarios do banco dd dados

    $usuarios = $repo->buscarTodos();
    //foreach serve para ler  todos os usurios 
    // vindos  do banco em formato de array chave  valor 

    
   
    <div class="row">
       <div class="col-12">
           <div class="card">
               <div class="card-header">
                    <b>Lista de usuarios</b>
               </div>
              <div class="card-body">
                <div class="row">
                <div class="row">

                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Login</th>
                                <th>Ativo</th>
                                <th></th>
                            </tr>    
                        </thead>
                        <tbody>
                            <?php
                              foreach ($usuarios as $item) {
                                echo "<tr>
                                <th>$item[Id]</th>
                                <th>$item[Login]</th>
                                <th>$item[Ativo]</th>
                                <th></th>
                                </tr>";
                              }

                                 "<h1>Login: " . $item['LOGIN'] .
                                    "   Id: " . $item['ID'] .
                                    "   Ativo: " . $item['ATIVO'] . 
                                    "</h1><br>";
                        
                            ?>
                        </tbody>
                          </table>
                        </div>
                    <div class="col-4">
                        <a class="btn btn-success">
                            Novo Usuario
                        </a>
                    </div>
                    <div  class="col-4">
                        <input name="busca" class="form-control"/>
                    </div>
                    <div  class=" col-4">
                        <button type="submit" class="btn btn-primary">
                            Pesquisar
                        </button>
                    </div>
                </div>
                </div>

                 


                  <div class="row">
                      texto de exemplo
                </div>
            </div>
        </div>
    </div>
</div>

   <?php



    include "rodape.php"; 
?>