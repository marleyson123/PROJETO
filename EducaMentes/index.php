<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
    <style>
        body {
            font-family: sans-serif;
            margin: 0;
            height: 100vh;
            background-color: #257180; /* Cor de fundo */
            display: flex;
            justify-content: center;
            align-items: center;
        }

        div {
            background-color: rgba(0, 0, 0, 0.70); /* Fundo do formulário */
            padding: 30px;
            border-radius: 50px;
            color: white;
            width: 280px;
            text-align: center;
            border: 1px solid black;
        }

        h1 {
            font-size: 30px;
            margin-bottom: 20px;
            text-align: center; /* Centraliza o título "Login" */
        }

        form {
            text-align: left; /* Alinha o formulário à esquerda */
        }

        input {
            padding: 10px;
            border: none;
            outline: none;
            font-size: 14px;
            border-radius: 50px;
            width: 92%;
            margin-bottom: 10px; /* Espaçamento entre os campos */
        }

        .inputSubmit {
            background-color: #257180; /* Cor do botão */
            border: none;
            padding: 10px;
            border-radius: 5px;
            width: 40%;
            color: white;
            font-size: 15px;
            cursor: pointer;
            display: block; /* Torna o botão um elemento de bloco */
            margin: 20px auto; /* Centraliza o botão */
        }

        label {
            font-weight: bold;
            font-size: 16px;
            color: white;
            display: block;
            margin-bottom: 8px;
        }

        select {
            width: 100%;
            padding: 8px;
            font-size: 14px;
            border: 2px solid #ccc;
            border-radius: 50px;
            background-color: #f9f9f9;
            margin-top: 10px;
            transition: border-color 0.3s ease;
        }

        select:focus {
            border-color: #4CAF50; /* Cor verde quando focado */
        }
    </style>
</head>
<body>

<div>
    <form action="../EducaMentes/control/loginControl.php" method="POST">
        <h1>Login</h1> <!-- Centralizado -->
        
        
        <label for="email">Email:</label> <!-- Alinhado à esquerda -->
        <input type="text" name="email" placeholder="Email" required>
        <br><br>
        <label for="senha">Senha:</label> <!-- Alinhado à esquerda -->
        <input type="password" name="senha" placeholder="Senha" required>
        
        <input class="inputSubmit" type="submit" name="submit" value="Enviar">
    </form>       
</div>

</body>
</html>

