<?php

class Flasher {
    public static function setFlash($msg)
    {
        $_SESSION['flash'] = [
            'msg' => $msg,
        ];
    }

    public static function flash()
    {
        if(isset($_SESSION['flash']))
        {
            echo $_SESSION['flash']['msg'];

            unset($_SESSION['flash']);
        }
    }
}