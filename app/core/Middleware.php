<?php

class Middleware {
    public static function onlyAdmin()
    {
        if ($_SESSION['user']['level']=='petugas')
        {
            header('location: ' . BASE_URL . '/petugas');
            exit;
        }
    }
}