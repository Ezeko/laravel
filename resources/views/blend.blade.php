<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../sass/page.css">
    <!--link that displays icon in title-->
    <link rel="shortcut icon" href="https://res.cloudinary.com/ezeko/image/upload/v1566502038/images/31517324_l4rbyl.jpg" 
        type="image/x-icon">
    <!--Google fonts link for lato font family-->
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <!--Font awesome 5 link-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
        crossorigin="anonymous">
    <!--bootstrap link-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
        crossorigin="anonymous">
    <title>@yield('title')</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <style>
        body{
            font-family: Nunito;
            background: gainsboro;
            margin-left: 25%;
            margin-right: 25%;
            margin-top: 5%;
            margin-bottom: 5%;
        }
        button{
            background: greenyellow;
            text-align: center;
            margin-top: 2%;
        }
        input{
            width: 80%;
            margin-bottom: 2%;
        }
        textarea{
            width: 60%;
            height: 100px;
            margin-right: 40%;
        }
        form{
            border-bottom: black 22px;
            border-bottom: 
        }
    </style>
</head>
    <body>
        @yield('contents')
     

    </body>
</html>

