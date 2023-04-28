<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
</head>

<body>
    <div>
        <ul class="p-2 mb-0 " style="background-color:black; font-family: 'Roboto'">
            <ul class="nav d-flex mx-auto align-items-center" style="padding-top:10px;padding-bottom: 15px">
                <div class="d-flex align-items-center" style="padding-left: 200px">
                    <a class="d-flex justify-content-center text-light"
                        style="font-size: 40px;padding-left:10px; font-weight: bolder; text-decoration: none" href="home">
                        Oculux
                    </a>
                </div>
                <div class="d-flex position-absolute end-0 align-items-center text-light" style="margin-right: 200px;">
                    <li class="nav-item">
                        <a class="nav-link active" href="about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="explore">Marketplace</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="storelocation">Store Location</a>
                    </li>
                </div>
            </ul>
    </div>
    @yield('content')
</body>

<div class="d-flex justify-content-between align-items-center text-light p-4" style="background-color: black">
    <h5 style="padding-top: 25px">Visit Our Office<br>Jl. General Sudirman No.1, Cikokol<br>Kec. Tangerang,
        Tangerang
        City, Banten,
        15117<br>+62 812 8193 01<br>luxurioculux@mail.co.id</h5>
    <ul style="padding-top: 25px">
        <a style="padding: 5px" href="www.youtube.com"><img
                src="https://www.freepnglogos.com/uploads/youtube-play-red-logo-png-transparent-background-6.png"
                style="width:50px;height:40px;"></a>
        <a style="padding: 5px" href="www.facebook.com"><img
                src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/51/Facebook_f_logo_%282019%29.svg/2048px-Facebook_f_logo_%282019%29.svg.png"
                style="width:45px;height:45px;"></a>
        <a style="padding: 5px" href="www.instagram.com"><img
                src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e7/Instagram_logo_2016.svg/2048px-Instagram_logo_2016.svg.png"
                style="width:45px;height:45px;"></a>
    </ul>
</div>
</body>
<footer>
    <div style="background-color: black">
<p class="text-light d-flex justify-content-center">© 2022-2023</p>
<p class="text-light d-flex justify-content-center">Oculux Hypestore Indonesia</p>
</div>
</footer>

</html>
