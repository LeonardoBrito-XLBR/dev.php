<?php
// Inclui o arquivo de conexão MySQLi. Assume que ele cria a variável $conexao.
include 'conexao.php';

// ----------------------------------------------------------------------
// 1. LÓGICA PHP PARA CONSULTA AO BANCO DE DADOS (USANDO MySQLi)
// ----------------------------------------------------------------------

// Array para armazenar os dados dos jogos
$jogos = [];
$erro_db = null;

// Verifica se a conexão falhou (caso o include 'conexao.php' não tenha um die())
if ($conexao->connect_error) {
    $erro_db = "ERRO FATAL: Falha na conexão com o DB: " . $conexao->connect_error;
} else {
    // Define a consulta SQL
    $sql = "SELECT * FROM jogos";

    // Executa a consulta
    $resultado = $conexao->query($sql);

    if ($resultado === false) {
        // Se houver erro na execução da query
        $erro_db = "ERRO SQL: " . $conexao->error;
    } elseif ($resultado->num_rows > 0) {
        // Se a consulta retornar linhas
        // Usa fetch_assoc() dentro de um loop para pegar cada linha
        while ($linha = $resultado->fetch_assoc()) {
            $jogos[] = $linha;
        }
        // Libera o resultado
        $resultado->free();
    }
}

// Fecha a conexão ao final do script
$conexao->close();

// ----------------------------------------------------------------------
// 2. LAYOUT HTML RETRO DARK PARA EXIBIR OS RESULTADOS
// ----------------------------------------------------------------------
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Jogos | DB SCAN (MySQLi)</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        // Configuração de cores customizadas para o tema Retro Dark
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'retro-bg-dark': '#1e293b',
                        'retro-panel': '#0f172a',
                        'retro-border': '#64748b',
                        'retro-pink': '#ec4899',
                        'retro-blue': '#3b82f6',
                        'retro-teal': '#14b8a6',
                        'retro-text-light': '#f8fafc',
                    },
                    boxShadow: {
                        'retro-button': '4px 4px 0px 0px #1f2937',
                        'retro-glow-blue': '0 0 15px rgba(59, 130, 246, 0.7)',
                        'retro-glow-pink': '0 0 15px rgba(236, 72, 153, 0.7)',
                    },
                }
            }
        }
    </script>
    <style>
        body {
            font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
        }
    </style>
</head>
<body class="bg-retro-bg-dark text-retro-text-light min-h-screen p-8">

    <div class="w-full max-w-6xl mx-auto mt-6 bg-retro-panel border-4 border-retro-border rounded-none shadow-retro-button relative">

        <header class="bg-retro-blue text-retro-text-light p-3 border-b-4 border-retro-border flex justify-between items-center">
            <h2 class="text-xl font-bold uppercase tracking-widest">
                :: LISTAGEM DE JOGOS CADASTRADOS (DB SCAN - MySQLi)
            </h2>
            <div class="space-x-2">
                <span class="inline-block h-4 w-4 bg-retro-pink border-2 border-retro-border shadow-retro-glow-pink"></span>
                <span class="inline-block h-4 w-4 bg-retro-teal border-2 border-retro-border shadow-retro-glow-blue"></span>
            </div>
        </header>

        <div class="p-6 md:p-8 overflow-x-auto">
            
            <p class="text-sm text-retro-teal mb-4 font-bold">
                <span class="text-retro-pink">//</span> STATUS DA CONSULTA: 
                <?php if ($erro_db): ?>
                    <span class="text-red-500"><?= htmlspecialchars($erro_db) ?></span>
                <?php elseif (empty($jogos)): ?>
                    <span class="text-yellow-500">NENHUM REGISTRO ENCONTRADO.</span>
                <?php else: ?>
                    <span class="text-green-400">DADOS RECUPERADOS COM SUCESSO (<?= count($jogos) ?> ITENS)</span>
                <?php endif; ?>
            </p>

            <?php if (!empty($jogos)): ?>
                
                <div class="text-xs lg:text-sm text-retro-text-light">
                    
                    <table class="w-full border-collapse border border-retro-border min-w-[700px]">
                        
                        <thead>
                            <tr class="bg-gray-700 text-retro-pink uppercase border-b-4 border-retro-border">
                                <th class="p-2 border-r border-retro-border text-left w-1/12">ID</th>
                                <th class="p-2 border-r border-retro-border text-left w-3/12">NOME DO JOGO</th>
                                <th class="p-2 border-r border-retro-border text-left w-3/12">PRODUTORA</th>
                                <th class="p-2 border-r border-retro-border text-left w-2/12">CONSOLE</th>
                                <th class="p-2 border-r border-retro-border text-left w-1/12">ANO</th>
                                <th class="p-2 text-right w-2/12">PREÇO</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            <?php foreach ($jogos as $jogo): ?>
                                <tr class="border-t border-retro-border hover:bg-gray-800 transition duration-150">
                                    <td class="p-2 border-r border-retro-border text-retro-blue"><?= htmlspecialchars($jogo['idGame']) ?></td>
                                    <td class="p-2 border-r border-retro-border"><?= htmlspecialchars($jogo['nome']) ?></td>
                                    <td class="p-2 border-r border-retro-border text-gray-400"><?= htmlspecialchars($jogo['produtora']) ?></td>
                                    <td class="p-2 border-r border-retro-border text-retro-teal"><?= htmlspecialchars($jogo['console']) ?></td>
                                    <td class="p-2 border-r border-retro-border"><?= htmlspecialchars($jogo['ano_publicacao']) ?></td>
                                    <td class="p-2 text-right text-retro-pink">C <?= number_format((float)$jogo['preco'], 2, ',', '.') ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            
            <?php endif; ?>
            
            <a href="index.php"
                class="mt-6 inline-block py-2 px-4 text-sm font-bold uppercase tracking-wider text-retro-text-light bg-gray-600 border-4 border-retro-border 
                       shadow-retro-button hover:bg-gray-700 active:shadow-none active:translate-x-1 active:translate-y-1 transition duration-150 ease-in-out">
                [ NOVO REGISTRO ]
            </a>

        </div>

        <footer class="bg-gray-700 text-gray-400 text-xs p-2 border-t-4 border-retro-border flex justify-between">
            <span>SQL STATUS: ONLINE.</span>
            <span class="text-retro-blue font-bold">DB SCAN COMPLETE</span>
        </footer>

    </div>

</body>
</html>