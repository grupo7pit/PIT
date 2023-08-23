<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN - LOOKING FOR INK</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background:  #0e0e0e;
        }
        div{
            background-color: #1e1e1e;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            padding: 80px;
            border-radius: 15px;
            color: #fff;
        }
        input{
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
        }
        .inputSubmit{
            background-color: #f04e3c;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 15px;
            transition: 0.5s;
            
        }
        .inputSubmit:hover{
            background-color: #fff;
            color: #f04e3c;
            cursor: pointer;
        }
        .btnvoltar{
            background-color: #f04e3c;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 15px;
            transition: 0.5s;
            text-decoration: none;
        }
        .btnvoltar:hover{
            background-color: #fff;
            color: #f04e3c;
        }
    </style>
</head>
<body>
    <a class="btnvoltar" href="index.php">Voltar</a>
    <div>
        <h1>Login</h1>
        <form action="testLogin.php" method="POST">
            <input type="text" name="email" placeholder="Email">
            <br><br>
            <input type="password" name="senha" placeholder="Senha">
            <br><br>
            <input class="inputSubmit" type="submit" name="submit" value="Enviar">
        </form>
    </div>
</body>
</html>