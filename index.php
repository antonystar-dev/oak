<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Oak Tecnologia</title>
  <!--Bootstrap -->
  <link href="bootstrap-5.3.2-dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  
      <div class="menu">
            <a href="index.php">Home</a>
       
            <a href="?page=novo">Novo produto</a>
        
            <a href="?page=listar">Listar produto</a>
</div>
       <div>
        <h1>Informativos</h1>
        Olá OAK, estou muito feliz em participar do processo seletivo, voces podem me conhecer mais um pouquinho visitando meu portifolio em:
          Esse projeto está funcionando em: (a disponibilidade pode variar um pouco, ja que meu servidor é local)

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
          default:
          include("lista-produto.php");

        }
        ?>
      </div>
   
</body>

</html>