<?php
    session_start();
    ob_start(); // Serve para limpar buff de saídas para evitar erros de redirecionamentos
    include_once 'conexao.php';
    $SendCad = filter_input(INPUT_POST, 'SendCad', FILTER_SANITIZE_STRING);
    if($SendCad){
        include_once 'conexao.php';
        $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
        //var_dump($dados);
        $dados['senha'] = password_hash($dados['senha'], PASSWORD_DEFAULT);

        $result_usuario = "INSERT INTO usuarios (nome, email, usuario, senha) VALUES (
                        '" .$dados['nome']. "',
                        '" .$dados['email']. "',
                        '" .$dados['usuario']. "',
                        '" .$dados['senha']. "'
                        )";
        $resultado_usuario = mysqli_query($conn, $result_usuario);
        if(mysqli_insert_id($conn)){
            $_SESSION['msgcad'] = "Usuario cadastrado com sucesso";
            header("Location: login.php");
        }else{
            $_SESSION['msg'] = "Erro: Usuario não foi cadastrado em nosso sistema";
            header("Location: Cadastrar.php");
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cadastro.css">
    <link rel="stylesheet" href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css'>
    <title>Cadastrar</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body{
            background: #fff;
        }

        .flex-container{
            display: flex;
            flex-direction: column;

        }

        .header{
            display: flex;
            flex-direction: column;
            background: #ddd;
            position: fixed;
            width: 100%;
            height: 100%; 
            top: 0;
            padding: 20px;
            overflow: scroll;
        }

        .title{
            text-align: center;
            font-size: 23px;
            font-family: 'Century Gothic', sans-serif;
            margin-bottom: 30px;
            font-weight: 600;
            border-bottom: 1px solid gray;
            padding-bottom: 10px;
            color: gray;
        }

        .form{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        input::placeholder{
            text-align: center;
            color: #fff;
        }

        .label{text-align: left;font-size: 18px;
            font-family: 'Century Gothic', sans-serif;
            font-weight: 600; color: gray;}
        .input-text{ width: 300px; margin-bottom: 10px; background: #ddd; border-bottom: 1px solid gray; border-top: transparent; border-left: transparent; border-right: transparent; height: 40px;}
        .input-btn{width: 300px;margin-bottom: 30px; border: none; border-radius: 5px; padding: 10px; font-size: 18px; font-family: 'Century Gothic', sans-serif;font-weight: 600; color: white; background: #ccc;}
        .input-btn:hover{
            transition: 2s; color: #ccc; background: white;
        }
        .plog{display: flex; justify-content: center; align-items: center; font-size: 18px; font-family: 'Century Gothic', sans-serif;font-weight: 600; color: #fff;}
        .plog:hover{color: darkgray; text-decoration: underline; cursor: pointer;}
        .dica{display: flex; justify-content: center; align-items: center; font-size: 18px; font-family: 'Century Gothic', sans-serif;font-weight: 600; color: #fff; text-align: center;}
        .dica:hover{color: darkgray; text-decoration: underline; cursor: pointer;}
        .btn {display: flex; justify-content: center; align-items: center; width: 300px;margin-bottom: 30px; padding: 10px; font-size: 18px; font-family: 'Century Gothic', sans-serif;font-weight: 600; color: white; text-decoration: none;}
        .btn:hover{color: darkgray; text-decoration: underline; cursor: pointer;}
    </style>
</head>
<body>
    
    <?php
        if(isset($_SESSION['msg'])){ // Verifica se existe a variavel global (result_usuario)
            echo $_SESSION['msg']; // Imprime o valor que há na variavel global
            unset($_SESSION['msg']); //destroi a msg que foi imprimida na página
        }
    ?>
    <br>
    <div class="flex-container">
        <div class="header">
            <h2 class="title">Área de Cadastro</h2>
            <form method="post" action="" class="form">
                <label class="label">Nome:</label>
                <input type="text" name="nome" placeholder="Digite seu Nome Completo" class="input-text">
                <br><br>
                <label class="label">E-mail:</label>
                <input type="email" name="email" placeholder="Digite seu E-mail" class="input-text">
                <br><br>
                <label class="label">Usuário:</label>
                <input type="text" name="usuario" placeholder="Digite nome de Usuário" class="input-text">
                <br><br>
                <label class="label">Senha:</label>
                <input type="password" name="senha" placeholder="Digite sua Senha" class="input-text">
                <br><br>
                <input type="submit" name="SendCad" value="Salvar" class="input-btn">
                <br><br>
                <p class="plog">Já possui uma conta? Clique abaixo para se Logar.</p>
                <div class="dica"><p>Solicitamos aos usuários que ao cadastrar-se na plataforma, 
                anote seus dados em um documento seguro, afim de realizar o login. 
                Assim será mais fácil acessar seu Painel Administrativo. Obrigado!</p></div>
                <p><a href="login.php" class="btn">Logar</a></p>
            </form>
            <br>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" 
        integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" 
        crossorigin="anonymous">
    </script>
</body>
</html>