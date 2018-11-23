<!DOCTYPE html>
<html>

    <head>
        <title>AlertSys demo</title>
        <style>
            .alert{
                display:inline-block;
                padding:18px;
            }
            .alert-default{
                background-color:#ccc;
                color:#1f1f1f !important;
            }
            .alert-info{
                background-color:#3498db;
                color:#fff !important;
            }
        </style>
    </head>

    <body>

        <main>

            <?php
            // Import AlertSys
            require('alert.sys.php');

            // Create an alert (title, message, class);
            $alert::make('', 'My message', 'alert-info');

            // Display alert
            $alert::show();
            ?>

        </main>

    </body>

</html>