<?php 

error_reporting(0);

$palavra = filter_input(INPUT_POST, 'textarea', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

if(isset($_POST['submit'])){

    if(!empty($palavra)){

        function DE_codificar($palavra){
            $mensagem = $palavra;
            $mensagem_codificada = base64_decode($mensagem);
            return $mensagem_codificada;
        }
    }

    else{
        echo 
        "
            <script>
                alert('Preencha os campos!')
                window.location.href = '../scripts/codificar-page.php';
            </script>
        ";
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="/style/basex64.css">
    <title>De-Codificação</title>
</head>
<body>
    <main>
        <section>
            <div class="texto">
                <h1>PÁGINA DE DE-CODIFICAÇÃO DE BASE X64</h1>
            </div>
            <div class="form-centro">
                <form action="" method="post">
                    <div class="textarea">
                        <textarea name="textarea" id="textarea" cols="30" rows="10"></textarea>
                    </div>

                    <div class="botao">
                        <input type="submit" name="submit" value="DE-Codificar">
                        <input type="reset" value="Limpar">
                    </div>

                    <div class="link">
                        <button><a href="../../index.html">Voltar Para Inicio</a></button>
                    </div> 
                </form>
                
                <div class="resposta">
                    <input class="resultado" type="text" value="<?= DE_codificar($palavra) ?>">
                    <div>
                        <button class="copiar"><i class="material-icons">content_copy</i></button>
                    </div>
                </div>
            </div>
        </section> 
    </main>
    <script src="../js/index.js"></script>               
</body>
</html>