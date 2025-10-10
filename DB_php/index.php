<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro de Funcionário</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        // Configuração de cor customizada para o estilo "dourado"
        tailwind.config = {
          theme: {
            extend: {
              colors: {
                'gold': '#fdab13ff', // Dourado puro
                'dark-bg': '#0e0e0eff', // Fundo preto
                'dark-card': '#141414ff', // Card do formulário (slate-800)
              }
            }
          }
        }
    </script>
    <style>
        /* Estilos adicionais para o foco do input, garantindo o brilho dourado */
        .input-gold-focus:focus {
           'gold': '#fdab13ff', // Dourado puro
                'dark-bg': '#0e0e0eff', // Fundo preto
                'dark-card': '#141414ff', // Card do formulário (slate-800)
              }
        
              
    </style>
</head>

<body class="bg-dark-bg min-h-screen flex items-center justify-center p-4">

    <div class="w-full max-w-md bg-dark-card text-white p-8 rounded-xl shadow-2xl border border-gold/20">

        <h2 class="text-3xl font-bold mb-8 text-white text-center">
            <span class="text-gold">Registro</span> de Colaborador
        </h2>

        <form action="inserir.php" method="POST" class="space-y-6">

            <div>
                <label for="nome" class="block text-sm font-medium text-gray-300 mb-1">
                    Nome Completo
                </label>
                <input 
                    type="text" 
                    id="nome" 
                    name="nome" 
                    placeholder="Nome e Sobrenome do Funcionário"
                    class="w-full px-4 py-3 bg-slate-900 border border-gray-700 rounded-lg text-white placeholder-gray-500 transition duration-300 input-gold-focus focus:ring-1 focus:ring-gold"
                    required
                >
            </div>

            <div>
                <label for="funcao" class="block text-sm font-medium text-gray-300 mb-1">
                    Função / Posição
                </label>
                <input 
                    type="text" 
                    id="funcao" 
                    name="funcao" 
                    placeholder="Ex: Desenvolvedor Sênior"
                    class="w-full px-4 py-3 bg-slate-900 border border-gray-700 rounded-lg text-white placeholder-gray-500 transition duration-300 input-gold-focus focus:ring-1 focus:ring-gold"
                    required
                >
            </div>

            <div>
                <label for="salario" class="block text-sm font-medium text-gray-300 mb-1">
                    Salário (R$)
                </label>
                <input 
                    type="number" 
                    id="salario" 
                    name="salario" 
                    placeholder="Ex: 5500.00"
                    step="0.01"
                    min="0"
                    class="w-full px-4 py-3 bg-slate-900 border border-gray-700 rounded-lg text-white placeholder-gray-500 transition duration-300 input-gold-focus focus:ring-1 focus:ring-gold"
                    required
                >
            </div>

            <button 
                type="submit"
                class="w-full flex justify-center py-3 px-4 border border-transparent rounded-lg shadow-sm text-lg font-semibold text-dark-card bg-gold hover:bg-yellow-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gold transition duration-150 ease-in-out mt-8"
            >
                Salvar Dados do Funcionário
            </button>
            
        </form>

    </div>
</body>
</html>