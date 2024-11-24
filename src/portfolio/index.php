<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Portifolio</title>
</head>
<body>

    <?php
        
      $meu_nome = "Vinicius";
      $titulo = "Portfólio de ".$meu_nome;
      $subtitulo = "Seja bem-vindo ao meu Portfólio!";
      $year = 2024;
    ?>

    <?php
    $projeto = "Portfólio";
    $descricao  = "Meu primeiro portfólio em PHP e HTML";
    $dataProjeto = "2024-11-23";
    $finalizado = false;
    ?>

    <h1> 
        <?=$titulo; ?>
    </h1>
    <p>
        <?=$subtitulo; ?>
    </p>
    <p>
        <?=$year; ?>
    </p>

    <hr>

    <h2><?=$projeto; ?></h2>
    <p><?=$descricao; ?></p>
    <div>

        <div><?=$dataProjeto;?></div>
        
        <div> Projeto:
            <?php
            
            if($finalizado) {
                echo "Finalizado ✅"; 
            } else {
                echo "Não finalizado 🔴";
            }

            ?>
        </div>

    </div>
    


</body>
</html>