<?php

function dump($data)
{
    echo "<pre>";
       var_dump($data);
    echo "</pre>";
}

function dd($data)
{
    dump($data);
    die;
}

function abort($code = 404) {
    http_response_code($code);
    require VIEWS . "/errors/{$code}.tmpl.php";
    die;
}

function loadReqData($fillable = [])
{
    $data = [];
    foreach ($_POST as $k => $v) {
        if (in_array($k, $fillable)) {
            $data[$k] = $v;
        }
    }
    return $data;
}