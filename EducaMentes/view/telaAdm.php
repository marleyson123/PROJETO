
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SISTEMA | VM</title>
    <style>
        /* Estilo da barra de navegação */
        body{
            font-family: sans-serif;
            background-color:#F5F5DC;
        }
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-color: #333;
            color: white;
            font-size: 24px;
            border-radius: 10px 10px 0 0;
            height: 55px;
            position: fixed; /* Fixa a barra de navegação */
            top: 0; /* Fixa no topo da página */
            left: 0; /* Alinha à esquerda */
            width: 98%; /* Largura total da tela */
           
            
        }
        .navbar h3{
            color:coral;
            font-family:'Times New Roman', Times, serif;

        }
        .navbar span{
            color:cornflowerblue;
        }


        .logout-button {
            background-color: #ff4510;
            color: white;
            padding: 7px 16px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            text-decoration: none;
            font-size: 19px;
           
        }

        .logout-button:hover {
            background-color:#c70039;
        }

        /* Estilo da guia lateral */
        .sidebar {
            position: fixed;
            top: 75px; /* Espaço da barra de navegação */
            width: 220px;
            height: calc(100% - 60px);
            background-color: #444;
            color: white;
            padding: 20px;
            margin-left: -8px;
            
        }

        .sidebar h3 {
            margin-bottom: 10px;
            margin-top: 8px;
        }

        .sidebar-btn {
            display: block;
            margin: 10px 0;
            color: white;
            text-decoration: none;
            border: white;
            margin-bottom: 20px;
            background-color: #4682B4;
            padding: 9px;
            border-radius: 10px;
            
        }

        .sidebar-btn:hover {
            background-color: #555;
            padding: 7px;
            border-radius: 4px;
        }
        .form-section {
            display: none; /* Oculta todas as seções por padrão */
            margin-left: 220px; /* Move o conteúdo principal para a direita da sidebar */
            padding: 20px;
        }

        /* Exibe a seção ativa */
        .form-section.active {
            display: block;
        }
        .form-content {
            max-width: 400px;  /* Largura máxima do formulário */
            margin: 0 auto;    /* Centraliza horizontalmente */
            padding: 20px;     /* Espaço interno */
            background-color: #4682B4;  /* Cor de fundo azul */
            color: white;      /* Cor do texto */
            border-radius: 10px; /* Bordas arredondadas */
            margin-top: 5%;
        }

        .form-content h2 {
            text-align: center; /* Centraliza o título */
        }

        .form-content label {
            display: block;     /* Faz o label ocupar toda a linha */
            margin-bottom: 5px; /* Espaço abaixo do label */
        }

        .form-content input[type="text"],
        .form-content input[type="email"],
        .form-content input[type="password"],
        .form-content input[type="submit"] {
            width: 90%;       /* Largura total do campo */
            padding: 10px;     /* Espaço interno */
            margin-bottom: 15px; /* Espaço abaixo do campo */
            border: none;      /* Sem borda */
            border-radius: 5px; /* Bordas arredondadas */
        }

        .form-content input[type="submit"] {
            background-color: #ff4500; /* Cor do botão */
            color: white; /* Cor do texto do botão */
            cursor: pointer; /* Muda o cursor para pointer */
        }

        .form-content input[type="submit"]:hover {
            background-color: #c70039; /* Cor do botão ao passar o mouse */
        }

        .container {
            max-width: 800px; /* Largura máxima do contêiner */
            margin: 20px auto; /* Centraliza o contêiner horizontalmente */
            padding: 20px; /* Espaçamento interno */
            background-color: #f9f9f9; /* Cor de fundo do contêiner */
            border-radius: 8px; /* Bordas arredondadas */
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); /* Sombra leve para destaque */
            margin-left: 45%;
            
        }
        h2 {
            color:white; /* Cor do título */
            margin-bottom: 15px; /* Espaçamento abaixo do título */
            font-size: 24px; /* Tamanho da fonte */
        }

        table {
            width: 95%; /* Tabela ocupa 100% da largura */
            border-collapse: collapse; /* Remover espaçamento entre células */
            margin-left: 5%;
            margin-top: 8%;
            border: 1px solid #333; /* Adiciona uma borda para visualização */
            border-radius: 5px; /* Borda arredondada */
            overflow: hidden; /* Esconde partes que extrapolam o border-radius */
            background-color:#666 ;
            
            
        }

        th, td {
            border: 1px solid #ddd; /* Borda leve */
            padding: 12px; /* Espaçamento interno nas células */
            text-align: left; /* Alinhamento à esquerda */
            background-color:whitesmoke;
            
        }

        th {
            background-color: #4CAF50; /* Cor de fundo dos cabeçalhos */
            color: white; /* Cor do texto dos cabeçalhos */
        }
        .btn_exclir{
            padding: 8px 8px; /* Espaçamento interno */
            border: none; /* Sem borda */
            border-radius: 5px; /* Bordas arredondadas */
            font-size: 13px; /* Tamanho da fonte */
            cursor: pointer; /* Cursor pointer ao passar o mouse */
            transition: background-color 0.3s; /* Transição suave para a cor de fundo */
            color:white;
            background-color: #c70039;
            font-weight: bold;
        }
        .btn_alterar{
            padding: 8px 8px; /* Espaçamento interno */
            border: none; /* Sem borda */
            border-radius: 5px; /* Bordas arredondadas */
            font-size: 13px; /* Tamanho da fonte */
            cursor: pointer; /* Cursor pointer ao passar o mouse */
            transition: background-color 0.3s; /* Transição suave para a cor de fundo */
            color:white;
            background-color:darkcyan;
            font-weight: bold;
        }
    
    





        
        

        
    </style>
</head>

<body>
    <!-- Barra de navegação -->
    <nav class="navbar">
        <div class="system-name">
            <h3>Educa<span>Mentes</span></h3>
        </div>
        <a href="logout.php" class="logout-button">Sair</a>
    </nav>

    <!-- Guia lateral -->
    <div class="sidebar">
        
    <div class="menu-container">
        <h3 class="menu-text">Menu</h3>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="btn_menu" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5m-3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2m0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2m0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2"/>
            </svg>
    </div>
    <hr>
        <br>
        <a href="#" class="sidebar-btn" onclick="showSection('perfil')">Meu Perfil</a>
        <a href="#" class="sidebar-btn" onclick="showSection('gerencia')">Gerenciar Prefis</a>
        <a href="#" class="sidebar-btn" onclick="showSection('alunoForm')">Cadastrar Alunos</a>
        <a href="#" class="sidebar-btn" onclick="showSection('responsavelForm')">Cadastrar Responsável</a>
        <a href="#" class="sidebar-btn" onclick="showSection('professorForm')">Cadastrar Professor</a>
        <a href="#" class="sidebar-btn" onclick="showSection('criarTurmas')">Criar Turmas</a>
        
        
    </div>
    
    <div class="form-section">
        <!-- Formulário de Cadastro -->
        <div class="form-content">
        <h2>Cadastro de Aluno</h2>
        <form action="../control/alunoControl.php" method="POST">
            <label for="nome-aluno">Nome:</label>
            <input type="text" id="nome-aluno" name="nome" placeholder="Nome do Aluno" required>
            <br><br>
            <label for="matricula-aluno">Matrícula:</label>
            <input type="text" id="matricula-aluno" name="matricula" placeholder="Matrícula" required>
            <br><br>
            <input type="submit" value="Cadastrar Aluno">

        </form>
    </div>
</div>



        <div id="responsavelForm" class="form-section">
            <div class="form-content">
            <h2>Cadastro de Responsável</h2>
            <form action="../control/usuarioControl.php" method="POST">
                <input type="hidden" name="perfil" value="responsavel">
                <label for="nome-responsavel">Nome:</label>
                <input type="text" id="nome-responsavel" name="nome" placeholder="Nome do Responsável" required>
                <br><br>
                <label for="email-responsavel">Email:</label>
                <input type="email" id="email-responsavel" name="email" placeholder="Email" required>
                <br><br>
                <label for="cpf-responsavel">CPF:</label>
                <input type="text" id="cpf-responsavel" name="cpf" placeholder="CPF" required>
                <br><br>
                <label for="senha-responsavel">Senha:</label>
                <input type="password" id="senha-responsavel" name="senha" placeholder="Senha" required>
                <br><br>
                <input type="submit" value="Cadastrar Responsável">
            </form>
            </div>
        </div>

        <div id="professorForm" class="form-section">
        <div class="form-content">
            <h2>Cadastro de Professor</h2>
            <form action="../control/usuarioControl.php" method="POST">
                <input type="hidden" name="perfil" value="professor">
                <label for="nome-professor">Nome:</label>
                <input type="text" id="nome-professor" name="nome" placeholder="Nome do Professor" required>
                <br><br>
                <label for="email-professor">Email:</label>
                <input type="email" id="email-professor" name="email" placeholder="Email" required>
                <br><br>
                <label for="cpf-professor">CPF:</label>
                <input type="text" id="cpf-professor" name="cpf" placeholder="CPF" required>
                <br><br>
                <label for="senha-professor">Senha:</label>
                <input type="password" id="senha-professor" name="senha" placeholder="Senha" required>
                <br><br>
                <input type="submit" value="Cadastrar Professor">
            </form>
         </div>
        </div>
        <?php
                require_once'../control/listarUsuarioControl.php';              
            ?>
    
    <div id="gerencia" class="form-section"> 
        
        <table>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>CPF</th>
                <th>Perfil</th>
                <th colspan="2">Operações</th>

            </tr>
            <?php foreach ($todosUsuarios as $t): ?>
                <tr>
                    <td><?php echo $t['id_usuario']; ?></td>
                    <td><?php echo $t['nome']; ?></td>
                    <td><?php echo $t['email']; ?></td>
                    <td><?php echo $t['cpf']; ?></td>
                    <td><?php echo $t['perfil']; ?></td>
                    <td>
                    <a href="../control/excluirUsuarioControl.php?id=<?php echo $t['id_usuario']; ?>">

                        <button class="btn_exclir" >Excluir</button>

                    </a>
                    </td>
                    <td>
                    <a href="../control/alterarUsuarioControl.php?id=<?php echo $t['id_usuario']; ?>">
                   

                        <button class="btn_alterar" >Alterar</button>

                    </a> 
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>




        <div id="perfil" class="form-section">
    <div class="form-content">
        <h2>Perfil do Administrador</h2>
        <form action="../control/alterarPerfilControl.php" method="POST">
            <input type="hidden" name="id_usuario" value="<?php echo $admin['id_usuario']; ?>"> <!-- Supondo que você tenha a ID do usuário -->
            
            <label for="nome-admin">Nome:</label>
            <input type="text" id="nome-admin" name="nome" value="<?php echo $admin['nome']; ?>" required>
            <br><br>
            
            <label for="email-admin">Email:</label>
            <input type="email" id="email-admin" name="email" value="<?php echo $admin['email']; ?>" required>
            <br><br>
            
            <label for="cpf-admin">CPF:</label>
            <input type="text" id="cpf-admin" name="cpf" value="<?php echo $admin['cpf']; ?>" required>
            <br><br>
            
            <input type="submit" value="Alterar Informações">
        </form>
    </div>
</div>

    

    <!-- Script para alternar entre seções -->
    <script>
        function showSection(sectionId) {
            // Oculta todas as seções
            document.querySelectorAll('.form-section').forEach(section => {
                section.classList.remove('active');
            });

            // Exibe a seção selecionada
            document.getElementById(sectionId).classList.add('active');
        }
    </script>
</body>
</html>
