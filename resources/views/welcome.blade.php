<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Celke</title>
        <style>
           *{
                margin: auto;
                padding: 0;
                box-sizing: border-box;
            }

            body{
                font-family: Arial, sans-serif;
                background-color: #f0f0f0;
                color: #333;
            }

            h1{
                text-align: center;
                margin-top: 20px;
           }

            a{
                display: block;
                width: 200px;
                margin: 20px auto;
                padding: 10px;
                text-align: center;
                background-color: #333;
                color: #fff;
                text-decoration: none;
                border-radius: 5px;
            }

            a:hover{
                background-color: #444;
            }

            

        </style>
        
    </head>
    <body>

        <h1>Projeto Laravel</h1>

        <a href="{{ route('conta.index') }}">Listar as Contas</a>
        
    </body>
</html>
