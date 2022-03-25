<!DOCTYPE html>
<html lang="en">

<head>
    
    <title>Crud ejemplo @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" crossorigin="anonymous"></script>
    
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"></script>

    <style>
        .footer{
            position: fixed;
            left: 0;
            bottom: 0;
            width:100%;
            background-color: #9C2780;
            color: white;
            text-align: center;

        }
    </style>
</head>

<body>
    @section('sidebar')
    @show

    <div class="container">
        @yield('content')

    </div>
    
</body>
</html>