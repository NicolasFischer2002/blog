<?php

function redireciona(string $url)
{

        // redirecionar

        header("location: $url");
        die();

}

?>