<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <title>Php Dischi</title>
</head>

<body>
    <div class="container">
        <header>
            <img src="http://pluspng.com/img-png/spotify-logo-png-open-2000.png" alt="">
        </header>

        <div class="cds-container">
            <div class="cd">
                <img src="https://images-na.ssl-images-amazon.com/images/I/51sBr4IWDwL.jpg" />

                <h3> {{$data[0]['title']}} </h3>
                <small>Bon Jovi</small>
                <strong>1988</strong>
            </div>
        </div>
    </div>
</body>

</html>
