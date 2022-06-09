<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Rentall</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/1ab94d0eba.js" crossorigin="anonymous"></script>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Bootstrap-ecommerce -->
    <link href="bootstrap5-ecommerce/css/bootstrap.css?v=3.0" rel="stylesheet" type="text/css" />
    <link href="bootstrap5-ecommerce/css/ui.css?v=3.0" rel="stylesheet" type="text/css" />
    <link href="bootstrap5-ecommerce/css/responsive.css?v=3.0" rel="stylesheet" />

    <!-- Font awesome 5 -->

    <script defer src="assets/js/bootstrap.bundle.min.js?v=3" type="text/javascript"></script>
    <script defer src="assets/js/script.js?v=3" type="text/javascript"></script>



    <!-- CSS Rentall -->
    {{-- <link rel="stylesheet" href="{{ asset('/css/app.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('/css/app-rentall.css') }}">

</head>

<body>
    @yield('navbar')

    @yield('content')

    @yield('footer')
</body>

</html>
