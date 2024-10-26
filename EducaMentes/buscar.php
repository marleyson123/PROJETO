<div class="search-section">
                <input type="text" id="searchInput" placeholder="Buscar aluno..." onkeyup="filterTable()">
            </div>




            table {
            width: 90%; /* Tabela ocupa 100% da largura */
            border-collapse: collapse; /* Remover espaçamento entre células */
            margin-left: 8%;
            margin-top: 8%;
            border: 2px solid #333; /* Adiciona uma borda para visualização */
            border-radius: 5px; /* Borda arredondada */
            overflow: hidden; /* Esconde partes que extrapolam o border-radius */
            
        }

        th, td {
            border: 1px solid #ddd; /* Borda leve */
            padding: 12px; /* Espaçamento interno nas células */
            text-align: left; /* Alinhamento à esquerda */
            background-color:white;
            
        }

        th {
            background-color: #4CAF50; /* Cor de fundo dos cabeçalhos */
            color: white; /* Cor do texto dos cabeçalhos */
        }
    