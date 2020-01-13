<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>World</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            *{
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }
            body{
                font-family: 'Nunito', sans-serif;
            }
            #header{
                display: flex;
                align-items: center;
                justify-content: space-between;
                height: 50px;
                width: 100%;
                background-color: #1b3c59;
                padding: 0 20px;
            }
            #right-side li{
                display: inline-block;
                margin: 0 20px;
                color: #fff;
                cursor: pointer;
            }
            footer{
                background-color: #1b3c59;
                width: 100%;
                padding: 30px 150px;
                display: flex;
                flex-wrap: wrap;
            }
            .list{
                display: flex;
                flex-wrap: wrap;
                padding-left: 50px;
            }
            .list ul{
                padding: 0 25px;
                list-style-type: none;
            }
            main{
                width: 100%;
                height: 510px;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }
            main p{
                font-size: 4em;
            }
        </style>
    </head>
    <body>
        @include('partials.header')
        @yield('content')
        @include('partials.footer')
    </body>
</html>
