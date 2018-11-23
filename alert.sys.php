<?php

// AlertSys (v1) by Sid van Vliet
// https://github.com/sidvanvliet

class Alert

{

    public static function make($title = "", $message = "", $type = "default")
    {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        $_SESSION['as-alert']   = true;
        $_SESSION['as-title']   = $title;
        $_SESSION['as-class']   = $type;
        $_SESSION['as-message'] = $message;
    }

    public static function show()
    {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        if(isset($_SESSION['as-alert']))
        {
            ?>
                <div class="alert <?= isset($_SESSION['as-class']) == true ? $_SESSION['as-class'] : "alert-default" ?>">
                    <?php

                    if(isset($_SESSION['as-title']))

                    {
                        if(!strlen($_SESSION['as-title']) < 1)
                        {
                            print('<b>' . $_SESSION['as-title'] . '</b>&nbsp;&nbsp;');
                        }
                    }

                    print($_SESSION['as-message']);

                    ?>
                </div>
            <?php
        }

        self::destroy();
    }

    public static function destroy()
    {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        unset($_SESSION['as-alert']);
        unset($_SESSION['as-title']);
        unset($_SESSION['as-class']);
        unset($_SESSION['as-message']);
    }

}

$alert = new Alert;