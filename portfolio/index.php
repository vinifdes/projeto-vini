<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Portfólio</title>
</head>
<body>

    <?php
        
      $meu_nome = "Vinicius";
      $titulo = "Portfólio de ".$meu_nome;
      $subtitulo = "Seja bem-vindo ao meu Portfólio!";
      $year = 2018;
    ?>

    <?php
    $projetoo = "Portfólio";
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
<?php


    $projetos = [
                    [
                        'Título' => 'Portfólio',
                        'Descrição' => 'Resumo sobre mim',
                        'Objetivo' => 'Apresentar habilidades',
                        'Finalizado' => true,
                        'dataProjeto' => '2024-11-27'
                    ],
                     [
                        'Título' => 'Trabalho',
                        'Descrição' => 'Resumo sobre mim2',
                        'Objetivo' => 'Apresentar habilidades2',
                        'Finalizado' => false,
                        'dataProjeto' => '2024-11-272'
                     ],
                     [
                        'Título' => 'Bee',
                        'Descrição' => 'Resumo sobre mim',
                        'Objetivo' => 'Apresentar habilidades',
                        'Finalizado' => true,
                        'dataProjeto' => '2024-11-27'
                    ],
                     [
                        'Título' => 'Oitava',
                        'Descrição' => 'Resumo sobre mim2',
                        'Objetivo' => 'Apresentar habilidades2',
                        'Finalizado' => false,
                        'dataProjeto' => '2024-11-272'
                     ]                
                ];


                function projetosFinalizados($projetos) {
                    $finalizado = [];

                    foreach ($projetos as $projeto) {
                        if ($projeto['Finalizado']) {
                            $finalizado [] = $projeto;
                        }
                    }
                    return $finalizado;
                }

                function verificarStatus($projeto) {

                    if($projeto['Finalizado']) {
                        return "Finalizado ✅"; 
                    } else {
                        return "Não finalizado 🔴";
                    }
            
                    } 

    foreach(projetosFinalizados($projetos) as $projeto) { ?>


        <div
        <?php
        if ((2024 - $year) > 4) { ?>
            style="background-color: black;"
        <?  }; ?>
        >
    
        <h2><?=$projeto['Título']; ?></h2>
        <p><?=$projeto['Descrição']; ?></p>
        <p><?=$projeto['Objetivo']; ?></p>
    
            <div><?=$projeto['dataProjeto'];?></div>
            
            <div> Projeto:
                <?php
                echo verificarStatus($projeto);
                ?>
            </div>
    
        </div>

    <? };?>



    

        


</body>
</html>