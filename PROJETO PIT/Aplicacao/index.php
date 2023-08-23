<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME - LOOKING FOR INK</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background: #0e0e0e;
            text-align: center;
            color: white;
        }
        .box{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: #1e1e1e;
            padding: 30px;
            border-radius: 10px;
        }
        a{
            text-decoration: none;
            background: #f04e3c;
            color: white;
            border-radius: 10px;
            padding: 10px;
            transition: 0.5s;
        }
        a:hover{
            background-color: #fff;
            color: #f04e3c;
        }
        h3{
            padding-bottom: 25px;
        }
        .titulo{
            display: inline-block;
        }
        #red{
            display: inline-block;
            padding-left: 8px;
            color: #f04e3c;
        }
    </style>
</head>
<body>
    <h1 class="titulo">Looking For<h1 id="red">Ink</h1></h1>
    <div class="box">
        <h3> Cadastre-se ou faça login para acessar a plataforma</h3>
        <a href="login.php">Login</a>
        <a href="cadastro.php">Cadastre-se</a>
    </div>
</body>
</html>