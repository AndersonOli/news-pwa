<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>News</title>
        <link rel="stylesheet" href="assets/css/estilo.css">
        <link rel="manifest" href="manifest.json">
        <script src="assets/js/jquery.js"></script>

        <script>
            if ('serviceWorker' in navigator) {
                window.addEventListener('load', function() {
                    navigator.serviceWorker.register('/teste/sw.js').then(function(registration) {
                        // Registration was successful
                        console.log('ServiceWorker registration successful with scope: ', registration.scope);
                    }, function(err) {
                        // registration failed :(
                        console.log('ServiceWorker registration failed: ', err);
                    });
                });
            }
        </script>
    </head>
    <body>
        <header class="header-top">
            <h1>News</h1>
        </header>

        <div class="content-noticias"></div>

        <footer class="footer">
            News, all rights reserved
        </footer>
        <script src="assets/js/news.js"></script>
    </body>
</html>