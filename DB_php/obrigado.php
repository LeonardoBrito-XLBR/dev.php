<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Obrigado! Cadastro Concluído</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        // REPETIÇÃO da configuração de cor customizada para o estilo "dourado"
        // ESSENCIAL para que as classes 'gold', 'dark-bg' e 'dark-card' funcionem
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'gold': '#fdab13',    // Dourado puro (sem o 'ff' no final para CSS)
                        'dark-bg': '#0e0e0e', // Fundo preto
                        'dark-card': '#141414', // Card do formulário (slate-800)
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-dark-bg min-h-screen flex items-center justify-center p-4">

    <div class="w-full max-w-md bg-dark-card text-white p-10 rounded-xl shadow-2xl border border-gold/30 text-center">
        
        <div class="mb-6">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 mx-auto text-gold" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
        </div>

        <h1 class="text-4xl font-extrabold mb-3">
            <span class="text-gold">Sucesso!</span>
        </h1>
        <h2 class="text-xl font-semibold text-gray-200 mb-8">
            Cadastro de Funcionário Concluído!
        </h2>

        <p class="text-gray-400 mb-10">
            Os dados do novo colaborador foram salvos com segurança no sistema. Obrigado por manter os registros atualizados.
        </p>

        <a href="index.php" 
           class="inline-flex items-center justify-center py-3 px-6 border border-transparent rounded-lg shadow-md text-lg font-semibold text-dark-card bg-gold hover:bg-yellow-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gold transition duration-150 ease-in-out">
            Voltar ao Formulário
        </a>

        <p class="mt-4 text-sm">
            <a href="lista_funcionarios.php" class="text-gold/80 hover:text-gold transition duration-150">
                Ver Lista de Funcionários
            </a>
        </p>
    </div>
</body>
</html>