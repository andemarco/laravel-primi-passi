<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/app.css">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <title>Php Dischi</title>
</head>

<body>
    <div class="container">
        <header>
          <a href="{{asset('/')}}"><img src="http://pluspng.com/img-png/spotify-logo-png-open-2000.png" alt=""></a>
        </header>
        <main>
          <div class="cds-container">
            @yield('main')
          </div>
        </main>
      </div>
</body>

</html>
