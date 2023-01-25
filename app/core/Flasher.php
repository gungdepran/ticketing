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
            echo '<div class="card shadow border-bottom-danger mb-4 bg-danger">
                    <div class="card-body">
                        <p class="m-0 text-white">'.$_SESSION['flash']['msg'].'</p>
                    </div>
                </div>';


            unset($_SESSION['flash']);
        }
    }
}