<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/app.css">
    <title>Spotify</title>
</head>
<body>
    <!-- <div class="card">
        <div class="lines">
            <img id="logo0" src="logo0.png" alt="">
            <img id="logo1" src="logo1.png" alt="">
            <a href="https://drive.google.com/file/d/1ZqJE7jM188r0d8Nu4tGbFEGrNpHXQcB9/view?usp=sharing">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                DESCARGAR
            </a>
        </div>
    </div> -->




    <div id="toggle">
        <i class="indicator"></i>
    </div>


    <div class="container">
        <div class="image">
            <img id="logo0" src="img/logo0.png" alt="">
            <img id="logo1" src="img/logo1.png" alt="">
            <a href="img/Spotify.apk">
                DESCARGAR
            </a>
        </div>
    </div>
    <div id="footer">
        <span>Laferrere - Bs. As. - Argentina</span>
        <img src="img/lafe1.png" alt="">
    </div>

    <script>
        const body = document.querySelector('body');
        const toggle = document.getElementById('toggle');
        toggle.onclick = function(){
            toggle.classList.toggle('active')
            body.classList.toggle('active')
        }
    </script>
</body>
</html>