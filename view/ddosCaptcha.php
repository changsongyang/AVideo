<?php

function captcha($largura,$altura,$tamanho_fonte,$quantidade_letras){
    $imagem = imagecreate($largura,$altura); // define a largura e a altura da imagem
    $fonte = "../objects/monof55.ttf"; //voce deve ter essa ou outra fonte de sua preferencia em sua pasta
    $preto  = imagecolorallocate($imagem,0,0,0); // define a cor preta
    $branco = imagecolorallocate($imagem,255,255,255); // define a cor branca

    $palavra = substr(str_shuffle("AaBbCcDdEeFfGgHhIiJjKkLlMmNnPpQqRrSsTtUuVvYyXxWwZz23456789"),0,($quantidade_letras));
    $_SESSION["palavra"] = $palavra; // atribui para a sessao a palavra gerada
    for($i = 1; $i <= $quantidade_letras; $i++){
        imagettftext($imagem,$tamanho_fonte,rand(-25,25),($tamanho_fonte*$i),
        ($tamanho_fonte + 10),$branco,$fonte,substr($palavra,($i-1),1));
        // atribui as letras a imagem
    }
    imagejpeg($imagem); // gera a imagem
    imagedestroy($imagem); // limpa a imagem da memoria
}
function percentloadavg(){
    $cpu_count = 1;
    if(is_file('/proc/cpuinfo')) {
        $cpuinfo = file_get_contents('/proc/cpuinfo');
        preg_match_all('/^processor/m', $cpuinfo, $matches);
        $cpu_count = count($matches[0]);
    }

    $sys_getloadavg = sys_getloadavg();
    $sys_getloadavg[0] = $sys_getloadavg[0] / $cpu_count;
    $sys_getloadavg[1] = $sys_getloadavg[1] / $cpu_count;
    $sys_getloadavg[2] = $sys_getloadavg[2] / $cpu_count;

    return $sys_getloadavg;
}

if(percentloadavg()<0.5){
return ;
}

session_start(); // inicial a sessao
if(!empty($_SESSION['captcha_validated'])){
session_write_close();
return ;
}
if(!empty($_GET['captcha'])){
   header("Content-type: image/jpeg"); // define o tipo do arquivo


    $largura = 250; // recebe a largura
    $altura = 50; // recebe a altura
    $tamanho_fonte = 16; // recebe o tamanho da fonte
    $quantidade_letras = 6; // recebe a quantidade de letras que o captcha terá
    captcha($largura,$altura,$tamanho_fonte,$quantidade_letras);
    // executa a funcao captcha passando os parametros recebidos
    exit;
}else if(!empty($_GET['validate'])){
    if ($_POST["palavra"] == $_SESSION["palavra"]){
        $_SESSION['captcha_validated'];
    }else{
        echo "<h1>Wrong captcha</h1>";
        echo "<a href='/'>Return</a>";
    }
    exit;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Captcha</title>
    <link href="view/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>    
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="view/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <body class="">
       <div class=""container>
<img src="?captcha=1">
<form action="?validate=1" name="form" method="post">
   <input type="text" name="text"  />
   <input type="submit" value="Validate Captcha" />
</form>
       </div>
        <script>
            $(document).ready(function () {



            });
        </script>
    </body>
</html>
<?php
exit;
?>

