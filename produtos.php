<?php

include 'conexao.php';

$buscar_produto = "SELECT id, nomeProduto, descricao, preco FROM produto";
$quiery_produto = mysqli_query($connx, $buscar_produto);

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Main tec</title>
    <style>
    #main{
      background-color: #2c2c2c;
    }
    .navbarone {
      background-color: #2c2c2c;/*cor do fundo*/
      padding: 1rem;/*preenchimento do tamanho da font (1rem) */
      position: sticky;/*mantem a posicao do nav fixo na pagina*/
      top: 0;/*altura totalmente em cima da pagina*/
      box-shadow: 10px 0px 10px #2c2c2c;/*sombra*/
      z-index: 99;/*PARA SOBREPOSICAO | EIXOS X, Y e Z, sendo que Z é profundidade, dando aspecto em 3D*/
    }
    .navbartwo {
      background-color: #2c2c2c;/*cor do fundo*/
      padding: 1rem;/*preenchimento do tamanho da font (1rem) */
      position: sticky;/*mantem a posicao do nav fixo na pagina*/
      top: 0;/*altura totalmente em cima da pagina*/
      box-shadow: 10px 0px 10px #2c2c2c;/*sombra*/
      z-index: 99;/*PARA SOBREPOSICAO | EIXOS X, Y e Z, sendo que Z é profundidade, dando aspecto em 3D*/
    }
    .carroceu{
      top: 0;/*altura totalmente em cima da pagina*/
      box-shadow: 10px 0px 10px #2c2c2c;/*sombra*/
      z-index: 98;/*PARA SOBREPOSICAO | EIXOS X, Y e Z, sendo que Z é profundidade, dando aspecto em 3D*/
    }
    .margin{
      margin-top: 80px;        
    }
    .margincard{
      margin-bottom: 50px;
    }
    #priv{
      color: rgb(214, 214, 214);
    }
    .divmar{
    margin-top: 40px;
    margin-bottom: 100px;
    margin-left: 50px;      
    }
    .smallinput {
      width: 50px;
      height: 5px;
    }
    .butone{
      margin-left: 90px;
    }
    .inp{
      margin-right: 50px;
      margin-left: 50px;
    }
    .but{
      margin-left: 50px;
    }
    .lab{
      margin-right: 15px;
    }
    @media (max-width: 768px){
      #divlab{
        margin-bottom: 20px;
        
      }
      #bcadcli{
        margin-left: 145px;        
      }
      #table{
        margin-left: 20px;        
      }
      #pesq{
        margin-right: 15px;
      }      
    }
    section{
      height: 100vh;
    }
    .botoes{
      margin-top: 20px;
      margin-left: 590px;
    }
    #save{
      margin-left: 20px;
    }
    </style>
  </head>
  <body>
    <header>
      <nav class="navbarone navbar-expand-lg bg-body-tertiary ">
        <div class="container-fluid row">
          <a href="index.php" class="text-center">
            <img src="img/logo.png" alt="Logo">
          </a>
        </div>
      </nav>    
      <nav class="navbartwo navbar-expand-lg bg-body-tertiary shadow row">
        <div class="container-fluid text-center">
          <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 text-center" style="margin:auto;"> <!-- Adicionado estilo inline -->
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="clientes.php">Clientes</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="produtos.php">Produtos</a>
              </li>
            </ul>
          </div>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </nav>
    </header>
    <main>        
      <section>
        <div class="row justify-content-center align-items-center divmar">
          <form action="/processar" method="POST" class="col-md-6">
            <div class="input-group" id="divlab">
              <label for="nome" class="form-label lab">Produto:</label>
              <input type="text" id="nome" class="form-control inp" name="Pesquisar">                      
              <button type="submit" id="pesq" class="btn btn-primary but rounded-start" onclick="exibirMensagem()">Pesquisar</button>
            </div>
          </form>
          <div class="col-md-6 " id="bcadcli">
              <a href="cadastraProduto.php" class="btn btn-success" >Cadastrar produto</a>                    
          </div>
        </div>
        <div class="row justify-content-around">
          <div  class="col-md-9">
            <table id="table" class="table table-striped">
              <thead>
                <tr>
                  <th class="col-md-1">Id</th>
                  <th class="col-md-3">Nome do produto</th>
                  <th class="col-md-4">Descrição do produto</th>
                  <th class="col-md-2">Preço do produto</th>
                  <th class="col-md-4">Interações</th>                    
                </tr>
              </thead>
              <tbody>
              <?php
                  //WHILE == REPETE - faça enquanto tiver
                  while($receber_produto = mysqli_fetch_array($quiery_produto))
                  {
                    $id = $receber_produto['id'];
                    $nomeProduto = $receber_produto['nomeProduto'];
                    $descricao = $receber_produto['descricao'];
                    $preco = $receber_produto['preco'];
                  ?>
                  <tr class="table-active col-2">
                    <td scope="row"><?php echo $id?></td>
                    <td scope="row"><?php echo $nomeProduto?></td>
                    <td colspan="1"><?php echo $descricao?></td>
                    <td><?php echo $preco?></td>                    
                    <td colspan="1">
                      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#n<?php echo $receber_produto['id']; ?>">
                        Editar
                      </button>
                    </td>                    
                    <!-- Modal -->
                    <div class="modal fade" id="n<?php echo $receber_produto['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div class="modal-header">                        
                            <h4 class="modal-title">Editando cadastro <?php echo $receber_produto['id']; ?></h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>                        
                          </div>                        
                          <div class="modal-body">
                            <form action="updateProduto.php" method="POST">                            
                              <input type="hidden"   name="id"     value="<?php echo $receber_produto['id']; ?>">
                              Nome do produto:      <input type="text"   class="form-control" name="nomeProduto"    value="<?php echo $receber_produto['nomeProduto']; ?>" minlength="3" maxlength="30" required>
                              Descricao:            <input type="text"   class="form-control" name="descricao"      value="<?php echo $receber_produto['descricao']; ?>" minlength="10">
                              Preco:                <input type="text"   class="form-control" name="preco"          value="<?php echo $receber_produto['preco']; ?>" minlength="10" maxlength="15" onkeyup="formatarPrecoInput(this)">
                              <div class="botoes">
                                  <button type="button" class="btn btn-danger"  data-bs-dismiss="modal">Fechar</button>    
                                  <input type="submit"  class="btn btn-success" id="save"              value="Salvar" >
                                </div>
                              
                            </form>
                          </div>
                          <div class="modal-footer">                            
                          </div>
                        </div>
                      </div>
                    </div>
                    <td>
                      <form action="deleteProduto.php" method="POST">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <input type="submit" id="excloi" value="Excluir" class="btn btn-danger">
                      </form>                      
                    </td>                      
                  </tr>
                  <?php };?>
              </tbody>
            </table>
          </div>
        </div>
      </section>
    </main>
    <footer class="mt-5 navbarone">
        <div class="container d-flex justify-content-around">
            <p id="priv">Criado por Alisson Lavoratti da Conceição, 2023.</p>
            <a href="">Privacidade</a><a href="Termos"></a>
            <a href="">Termos de uso</a><a href="Termos"></a>
            <p class="float-right"><a href="#">Voltar ao topo</a></p>
        </div>
    </footer>    
    <script>
        function exibirMensagem() {
          alert("Produto não localizado");
          history.back();
        }
        function formatarPrecoInput(input) {
    var valor = input.value.replace(/\D/g, ''); // Remove caracteres não numéricos
    var numero = parseInt(valor, 10); // Converte para número

    if (!isNaN(numero)) {
        var precoFormatado = (numero / 100).toLocaleString('pt-BR', {
            style: 'currency',
            currency: 'BRL'
        });

        input.value = precoFormatado;
    } else {
        input.value = ''; // Valor inválido, limpa o campo
    }
}
      function voltarPagina() {
        window.history.back(); // Esta função volta para a página anterior
      }
    </script>    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>