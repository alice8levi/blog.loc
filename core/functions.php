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
            $data[$k] = trim($v) ;
        }
    }
    return $data;
}

function old($fieldname)
{
   // return isset($_POST[$fieldname]) ?htmlspecialchars($_POST[$fieldname])  : '';
    return isset($_POST[$fieldname]) ? h($_POST[$fieldname]) : '';
}

function h($str)
{
    return htmlspecialchars($str, ENT_QUOTES);
}

function getAlerts()
{
    if (!empty($_SESSION['success'])) {
        require_once COMPONENTS . '/alert-success.php';
        unset($_SESSION['success']);
    }
    if (!empty($_SESSION['error'])) {
        require_once COMPONENTS . '/alert-error.php';
        unset($_SESSION['error']);
    }
}


function redirect($url = '')
{
    if ($url) {
        $redirect = $url;
    } else {
        //HTTP_REFERER  Адрес страницы, с которой браузер пользователя перешёл на текущую страницу.
        $redirect = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : PATH;
    }
    header("Location: {$redirect}");
    die;
}

