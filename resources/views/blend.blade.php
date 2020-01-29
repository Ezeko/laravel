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
            margin-left: 45%;
        }
        input{
            width: 60%;
            margin-bottom: 2%;
        }
        textarea{
            width: 60%;
            height: 100px;
           
        }
       #form{
            border-bottom: thick 22px;
            text-align: center;
        }
        .post{
            text-align: center;
            
            
        }
        #pos{
            height: 170px;
            width:100%;
            box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
            margin-bottom: 2%;
            padding: 5%;
            background: white;
        }
        h1{
            font-size: 200%;
        }
        a{
            text-decoration-line: none;
            text-decoration-style: none;
        }
        input[name="post"]{
            height: 150px;
            font-display: auto;
            font-stretch: auto;
        }
        input[name="like"]{
            width: auto;
            margin-left: 33%;
           background-color: white;
           border: 0;
    
        }
        input[name="like"]:visited{
            border: 0;
        }
        .like{
            display: flex;
            text-align: center;
            margin-left: 45%;
        }
    </style>
</head>
    <body>
        @yield('contents')
     

    </body>
</html>

