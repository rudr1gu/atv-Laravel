<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        h2{
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

    <a href="{{ route('conta.create')}}">Cadastrar</a><br>

    <h2>Listar as Contas</h2>

    <a href="{{ route('conta.show')}}">Visualizar</a><br>
    <a href="{{ route('conta.edit')}}">Editar</a><br>
    {{--<a href="{{ route('conta.destroy')}}">Apagar</a><br>--}}

</body>

</html>
