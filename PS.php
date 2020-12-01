<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PS Galoá</title>
</head>
<body>
    <form action="" method="post">
        <p><textarea name="mensagem" id="" cols="50" rows="10" placeholder="Escreva o texto"></textarea><p>
        <p><input type="submit" name="enviar"></p>
    </form>
    <?php
        function limitarTexto($texto){
            //pegar o tamanho maximo do array e verificar com o tamanho que eu quero ,sendo assim no foreach na ultima(ou ultimas)palavras adicionar um br
            $text = explode(" ", $texto);//usando a função explode para colocar o texto dentro de uma variavel
            $vlrArray = count($text);//percorrendo o array e verificando a quatidade do mesmo
            $limitePorLinha = 10;//limite de palavras por linha passado pelo usuario 
            $limite = $limitePorLinha;
            if($vlrArray <= $limitePorLinha){//se valor de array for menor ou igual ao limite por linha
                echo $texto;
            }else{
                foreach ($text as $key => $value){
                    echo "$value".' ';
                    if($key == $limite){//se a posição do array for igual ao limite 
                        echo "<br />\n";
                        $limite = $limite + $limitePorLinha;//somar a quatidade de palavras por linha para determinar o proximo limite
                    }
                }
            }         
        }
            if(isset($_POST['enviar']))://execução do botão
                echo(limitarTexto($_POST['mensagem']));
            endif;
    ?>
</body>
</html>