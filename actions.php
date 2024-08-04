<?php
    if(isset($_POST['cep'])) {
        $cep = $_POST['cep'];
        $url ='https://viacep.com.br/ws/' . $cep . '/json/';
        $response = file_get_contents($url);
        $endereco = json_decode($response, true);
        
        if (isset($endereco['erro']) && $endereco['erro'] === true) {
            $endereco = null;
            echo "CEP não encontrado!";
        } else {
            require_once('endereco.php');
        }
        sleep(1);
    }
?>
