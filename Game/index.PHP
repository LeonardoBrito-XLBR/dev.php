<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Jogos | Retro Moderno Dark</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        // Configuração de cores customizadas para o tema Retro Dark (Vaporwave/Synthwave)
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'retro-bg-dark': '#1e293b',   // Fundo Escuro (Quase preto, mas com toque azulado)
                        'retro-panel': '#0f172a',     // Fundo do Painel (Mais escuro que o BG)
                        'retro-border': '#64748b',    // Cinza da Borda (Medio para alto contraste)
                        'retro-pink': '#ec4899',      // Rosa Choque (Destaque 1)
                        'retro-blue': '#3b82f6',      // Azul Elétrico (Destaque 2)
                        'retro-teal': '#14b8a6',      // Verde Água (Cor de Header)
                        'retro-text-light': '#f8fafc', // Texto Claro
                    },
                    boxShadow: {
                        // Sombra de "sistema operacional" antigo
                        'retro-inset': 'inset 2px 2px 0px 0px #1f2937', // Sombra mais escura (interna)
                        'retro-button': '4px 4px 0px 0px #1f2937',      // Sombra externa (escura)
                        'retro-glow': '0 0 10px rgba(59, 130, 246, 0.5)', // Efeito neon
                    },
                }
            }
        }
    </script>
    <style>
        /* Estilo para simular borda pixelada/grossa ao focar com cor neon */
        .input-retro-focus:focus {
            outline: 3px solid #ec4899; /* Borda grossa Rosa Choque */
            outline-offset: -3px; /* Borda interna */
            border-color: #ec4899;
            box-shadow: 0 0 10px rgba(236, 72, 153, 0.7); /* Adiciona um brilho sutil */
        }

        /* Fonte monoespaçada para o look terminal */
        body {
            font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
        }
    </style>
</head>
<body class="bg-retro-bg-dark text-retro-text-light min-h-screen flex items-center justify-center p-8">

    <div class="w-full max-w-3xl bg-retro-panel border-4 border-retro-border rounded-none shadow-retro-button transition duration-300">

        <header class="bg-retro-teal text-retro-text-light p-3 border-b-4 border-retro-border flex justify-between items-center">
            <h1 class="text-xl font-bold uppercase tracking-widest">
                :: SISTEMA DE CADASTRO DE GAME (DARK MODE)
            </h1>
            <div class="space-x-2">
                <span class="inline-block h-4 w-4 bg-retro-pink border-2 border-retro-border shadow-retro-glow"></span>
                <span class="inline-block h-4 w-4 bg-retro-blue border-2 border-retro-border shadow-retro-glow"></span>
            </div>
        </header>

        <div class="p-8">
            <p class="text-sm text-gray-400 mb-6">
                <span class="text-retro-pink font-extrabold">//</span> Insira os dados nos campos abaixo. Campos com '<span class="text-red-400">*</span>' são obrigatórios.
            </p>

            <form action="inserir.php" method="post" class="space-y-6">

                <div>
                    <label for="nome" class="block text-sm font-bold text-retro-text-light mb-2">Nome do Jogo <span class="text-red-400">*</span></label>
                    <input type="text" id="nome" name="nome" required
                           class="w-full p-3 bg-retro-bg-dark text-retro-text-light border-4 border-retro-border placeholder-gray-500
                                  shadow-retro-inset input-retro-focus transition duration-150">
                </div>

                <div>
                    <label for="produtora" class="block text-sm font-bold text-retro-text-light mb-2">Empresa Produtora <span class="text-red-400">*</span></label>
                    <input type="text" id="produtora" name="produtora" required
                           class="w-full p-3 bg-retro-bg-dark text-retro-text-light border-4 border-retro-border placeholder-gray-500
                                  shadow-retro-inset input-retro-focus transition duration-150">
                </div>

                <div>
                    <label for="console" class="block text-sm font-bold text-retro-text-light mb-2">Console <span class="text-red-400">*</span></label>
                    <div class="relative">
                        <select id="console" name="console" required
                                class="w-full p-3 bg-retro-bg-dark text-retro-text-light border-4 border-retro-border 
                                       shadow-retro-inset input-retro-focus appearance-none transition duration-150">
                            <option value="" disabled selected>-- SELECIONE A PLATAFORMA --</option>
                            <option value="Xbox" class="bg-retro-bg-dark">Xbox / Xbox SerieX </option>
                            <option value="Nintendo" class="bg-retro-bg-dark">Nintendo</option>
                            <option value="PS" class="bg-retro-bg-dark">PlayStation / N64</option>
                            <option value="Pc" class="bg-retro-bg-dark">PC (DOS/Windows)</option>
                            <option value="Plataforma Generica" class="bg-retro-bg-dark">Plataforma Atual</option>
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-retro-pink">
                            <span class="text-xl">▼</span>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    
                    <div>
                        <label for="preco" class="block text-sm font-bold text-retro-text-light mb-2">Preço (Créditos)</label>
                        <input type="number" step="0.01" id="preco" name="preco" required
                               class="w-full p-3 bg-retro-bg-dark text-retro-text-light border-4 border-retro-border placeholder-gray-500
                                      shadow-retro-inset input-retro-focus transition duration-150"
                               placeholder="19.99">
                    </div>

                    <div>
                        <label for="ano" class="block text-sm font-bold text-retro-text-light mb-2">Ano Lançamento <span class="text-red-400">*</span></label>
                        <input type="number" id="ano" name="ano" required min="1980" max="2099"
                               class="w-full p-3 bg-retro-bg-dark text-retro-text-light border-4 border-retro-border placeholder-gray-500
                                      shadow-retro-inset input-retro-focus transition duration-150"
                               placeholder="1989">
                    </div>
                </div>

                <button type="submit"
                        class="w-full py-3 mt-8 text-lg font-bold uppercase tracking-wider text-retro-text-light bg-retro-blue border-4 border-retro-border 
                               shadow-retro-button hover:bg-retro-blue/80 hover:shadow-retro-glow
                               active:shadow-none active:translate-x-1 active:translate-y-1 transition duration-150 ease-in-out">
                    [ INICIAR GRAVAÇÃO ]
                </button>

            </form>
        </div>

        <footer class="bg-gray-700 text-gray-400 text-xs p-2 border-t-4 border-retro-border flex justify-between">
            <span>TERMINAL CONSOLE: READY. C:/></span>
            <span class="text-retro-pink font-bold">GAME REGISTRY VAPORWAVE OK</span>
        </footer>

    </div>

</body>
</html>