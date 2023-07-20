<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Web de Quebrada</title>

  <link rel="shortcut icon" href="img/logos/favicon-01.svg" type="image/x-icon" />

  <!-- animações -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="css/reset.css" />
  <!--AOS.animate-->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
  <!---css+reset-->
  <link rel="stylesheet" href="css/estilo.css" />
  <link rel="stylesheet" href="css/aos.css">
  <!--responsivo-->
  <link rel="stylesheet" href="css/responsivo.css" />
  <link rel="shortcut icon" href="img/favicu.svg" type="image/x-icon">
</head>

<body id="dark">
  <!-----------Topo---------->
<?php require_once('conteudophp/topo.php'); ?>

  <main>
    <!-----------servico começo---------->
    <?php require_once('conteudophp/servico-banner.php'); ?>
    <!-----------meu serv começo---------->
    <?php require_once('conteudophp/meu-serv.php'); ?>

    <!-----------sobre começo---------->
    <?php require_once('conteudophp/sobre.php'); ?>

    <!-----------portifolio começo---------->
    <?php require_once('conteudophp/portifolio.php'); ?>

    <!-----------avaloação dos clientes---------->
    <?php require_once('conteudophp/avaliacao.php'); ?>

    <!-----------modal de volta ao topo--------->
    <a role="link" href="#" id="myLink" title="Voltar para o topo">
      <img class="seta-topo" src="img/seta-topo.svg" alt="seta apontando para cima">
    </a>
    <!-----------modal de volta ao topo--------->
  </main>
<footer>
<?php require_once('conteudophp/rodape.php'); ?>

</footer>

  <!-----------rodape fim--------->

  <!-----------Aqui começamos os javascript--------->

  <!--pasta js-->
  <script src="./script/aos.js"></script>
  <script src="./script/animacoes.js"></script>

  <!--------------------->
     <!--btn dark mode-->
  <!--------------------->
</body>
<script>
  const btn = document.querySelector('.btn');
  const dark = document.querySelector('body');
  btn.onclick = function () {
    this.classList.toggle('active');
    dark.classList.toggle('active');
  }
</script>


</html>