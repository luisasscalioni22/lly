<?php

function db_connect()
{
    $PDO = new PDO('mysql:host=' . DB_HOST .  ';dbname=' . DB_NAME . ';charset=utf8', DB_USER, DB_PASS);

    return $PDO;
}

function dateConvert($date)
{

    if ( ! strstr( $date, '/') )
    {
        $dataCorrigida = implode('/', array_reverse(explode('-', $date)));

    }
    else
    {
        $dataCorrigida = implode('-', array_reverse(explode('/',$date)));

    }

    return $dataCorrigida;

}

function calculateAge($birthdate)
{
    $now = new DateTime() ;
    $diff = $now->diff(new DateTime($birthdate));

    return $diff->y;
}
?>