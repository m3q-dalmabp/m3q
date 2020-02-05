<?php
    if( $_GET["email"] || $_GET["form_id"] || $_GET["key"]) {

        if ($_GET["key"] !== "sK!RkF26bx9MkeRqcNkE@4aDV!BRi!") {
            header('HTTP/1.0 401 Unauthorized');
            echo 'Unauthorized';
            exit();
        }

        $ch = curl_init();
        if ($_GET["email"]) {
            curl_setopt($ch, CURLOPT_URL,"https://api.typeform.com/forms/".$_GET["form_id"]."/responses?query=".$_GET["email"]);
        } else {
            curl_setopt($ch, CURLOPT_URL,"https://api.typeform.com/forms/".$_GET["form_id"]);
        }
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, ["authorization: bearer 9fAkEMopTf1VvZvCKUPpUnPpzNeZpVM7b8xt4xXpeoVu"]);
        $server_output = curl_exec($ch);
        curl_close($ch);

        header('Content-type: application/json');
        echo $server_output;
        exit();
    }
?>
