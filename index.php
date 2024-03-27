<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Oak Tecnologia</title>
  <!--Bootstrap -->
  <link href="css/style.css" rel="stylesheet">
</head>

<body>
  
      <div class="menu">
            <a href="?page=novo" class="itemMenu">Novo</a>
        
            <a href="?page=listar" class="itemMenu">Listar</a>
</div>
<div class="div-viewport">
       <div class="informativo">
        <h1>Informativos</h1>
        Olá OAK, estou muito feliz em participar do processo seletivo, voces podem me conhecer mais um pouquinho visitando meu portifolio em:
          Esse projeto está funcionando em: (a disponibilidade pode variar um pouco, ja que meu servidor é local)
          Podem acompanhar do historico de desenvolvimento desse crud em ------

</div> 
  <div>
   
        <?php
        include("config.php");
        switch (@$_REQUEST["page"]) {
          case "novo":
            include("novo-produto.php");
            break;
          case "listar":
            include("lista-produto.php");
            break;
            case "salvar":
            include("salvar-produto.php");
            case "editar":
              include("editar-produto.php");
              break;
          default:
          include("lista-produto.php");

        }
        ?>
      </div>
      </div>
</body>

</html>