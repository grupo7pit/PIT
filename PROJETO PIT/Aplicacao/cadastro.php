<?php

    if(isset($_POST['submit']))
    {
        // print_r('Nome: ' . $_POST['nome']);
        // print_r('<br>');
        // print_r('Email: ' . $_POST['email']);
        // print_r('<br>');
        // print_r('Telefone: ' . $_POST['telefone']);
        // print_r('<br>');
        // print_r('Sexo: ' . $_POST['genero']);
        // print_r('<br>');
        // print_r('Data de nascimento: ' . $_POST['data_nascimento']);
        // print_r('<br>');
        // print_r('Cidade: ' . $_POST['cidade']);
        // print_r('<br>');
        // print_r('Estado: ' . $_POST['estado']);
        // print_r('<br>');
        // print_r('Endereço: ' . $_POST['endereco']);

        include_once('config.php');

        $tipodeconta = $_POST['tipo'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $telefone = $_POST['telefone'];
        $sexo = $_POST['genero'];
        $data_nasc = $_POST['data_nascimento'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $endereco = $_POST['endereco'];
        $descricao = $_POST['descricao'];
        $contatos = $_POST['contatos'];
        $avaliacao = $_POST['nota'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(tipodeconta,nome,senha,email,telefone,sexo,data_nasc,cidade,estado,endereco,descricao,contatos,avaliacao) 
        VALUES ('$tipodeconta','$nome','$senha','$email','$telefone','$sexo','$data_nasc','$cidade','$estado','$endereco','$descricao','$contatos','$avaliacao')");

        header('Location: login.php');
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CADASTRO - LOOKING FOR INK</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background: #0e0e0e;
        }
        .box{
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: #1e1e1e;
            padding: 15px;
            border-radius: 15px;
            width: 20%;
        }
        fieldset{
            border: 3px solid #f04e3c;
        }
        legend{
            border: 1px solid #f04e3c;
            padding: 10px;
            text-align: center;
            background-color: #f04e3c;
            border-radius: 8px;
        }
        .inputBox{
            position: relative;
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }
        .labelInput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }
        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~ .labelInput{
            top: -20px;
            font-size: 12px;
            color: #f04e3c;
        }
        #data_nascimento{
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
        }
        #submit{
            background: #f04e3c;
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
            transition: 0.5s;
        }
        #submit:hover{
            background-color: #fff;
            color: #f04e3c;
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
    <div class="box">
        <form action="cadastro.php" method="POST">
            <fieldset>
                <legend><b>Cadastro</b></legend>
                <br>
                <p>Tipo de Conta:</p>
                <input type="radio" id="tatuador" name="tipo" value="tatuador" required>
                <label for="tatuador">Tatuador</label>
                <input type="radio" id="usuario" name="tipo" value="usuario" required>
                <label for="usuario">Usuário</label>
                <input type="hidden" id="admin" name="tipo" value="admin" required>
                <br><br><br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput">Senha</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" maxlength="15" onkeyup="handlePhone(event)" required>
                    <script> 
                    const handlePhone = (event) => {
                    let input = event.target
                    input.value = phoneMask(input.value)
                    }

                    const phoneMask = (value) => {
                    if (!value) return ""
                    value = value.replace(/\D/g,'')
                    value = value.replace(/(\d{2})(\d)/,"($1) $2")
                    value = value.replace(/(\d)(\d{4})$/,"$1-$2")
                    return value
                    }
                    </script>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>
                <p>Sexo:</p>
                <input type="radio" id="feminino" name="genero" value="feminino" required>
                <label for="feminino">Feminino</label>
                <input type="radio" id="masculino" name="genero" value="masculino" required>
                <label for="masculino">Masculino</label>
                <input type="radio" id="outro" name="genero" value="outro" required>
                <label for="outro">Outro</label>
                <br><br>
                <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                <input type="date" name="data_nascimento" id="data_nascimento" required>
                <br><br><br>
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <label for="cidade" class="labelInput">Cidade</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="estado" id="estado" class="inputUser" required>
                    <label for="estado" class="labelInput">Estado</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label for="endereco" class="labelInput">Endereço</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="hidden" name="descricao" id="descricao" class="inputUser">
                    <label for="descricao" class="labelInput"></label>
                </div>
                <div class="inputBox">
                    <input type="hidden" name="contatos" id="contatos" class="inputUser">
                    <label for="contatos" class="labelInput"></label>
                </div>
                <p></p>
                <input type="hidden" id="1" name="nota" value="1">
                <label for="1"></label>
                <input type="hidden" id="2" name="nota" value="2">
                <label for="2"></label>
                <input type="hidden" id="3" name="nota" value="3">
                <label for="3"></label>
                <input type="hidden" id="4" name="nota" value="4">
                <label for="4"></label>
                <input type="hidden" id="5" name="nota" value="5">
                <label for="5"></label>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>