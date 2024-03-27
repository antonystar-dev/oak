<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Oak Tecnologia</title>
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

  <div class="menu">
    <a href="?page=novo" class="itemMenu">Novo</a>

    <a href="?page=listar" class="itemMenu">Listar</a>
  </div>
  <div class="informativo">
      
      <p>Olá equipe da OAK, estou muito feliz em participar do processo seletivo.</p>
      <p> Vocês podem me conhecer um pouquinho mais visitando meu portfólio em: <a href="https://antonystar.com/" class="link" target="_blank">antonystar.com</a> e meu Github em: <a href="https://github.com/antonystar-dev" class="link" target="_blank">Antonystar-dev</a></p>
      <p>Esse projeto está funcionando em: <a href="http://dev.antonystar.com/oak/" class="link" target="_blank">ServidorAS</a> (a disponibilidade pode variar um pouco, já que optei em manter no meu servidor local).
      </p>
      <p>Podem acompanhar o histórico de desenvolvimento desse CRUD em <a href="https://github.com/antonystar-dev/oak" class="link" target="_blank">Antonystar-dev/oak</a>.</p>

    </div>
  <div class="div-viewport">
    
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