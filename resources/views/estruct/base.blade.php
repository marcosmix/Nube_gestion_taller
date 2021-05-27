<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <link rel="stylesheet" type="text/css" href="css/setup.css">
    <link rel="stylesheet" type="text/css" href="css/global.css">
</head>   
<body class="body_app">
    

    @include('estruct.navbar')
    
    <div class="content">
        @yield('content')
    </div>


</body>
    
  
    
</html>
