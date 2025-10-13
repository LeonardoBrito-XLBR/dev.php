<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jogo Gravado! | Retro Moderno Dark</title>
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
                        'retro-green-success': '#4ade80', // Verde vibrante para sucesso
                    },
                    boxShadow: {
                        // Sombra de "sistema operacional" antigo
                        'retro-inset': 'inset 2px 2px 0px 0px #1f2937',
                        'retro-button': '4px 4px 0px 0px #1f2937',
                        'retro-glow-blue': '0 0 15px rgba(59, 130, 246, 0.7)', // Brilho azul
                        'retro-glow-pink': '0 0 15px rgba(236, 72, 153, 0.7)', // Brilho rosa
                        'retro-glow-green': '0 0 20px rgba(74, 222, 128, 0.9)', // Brilho verde sucesso
                    },
                }
            }
        }
    </script>
    <style>
        /* Fonte monoespaçada para o look terminal */
        body {
            font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
        }

        /* Animação de entrada sutil para o conteúdo */
        @keyframes fadeInScale {
            from { opacity: 0; transform: scale(0.9); }
            to { opacity: 1; transform: scale(1); }
        }
        .animate-fadeInScale {
            animation: fadeInScale 0.5s ease-out forwards;
        }

        /* Efeito de "scanline" suave (opcional, para um toque extra retro) */
        .scanlines::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to bottom, transparent 50%, rgba(0, 0, 0, 0.1) 50%);
            background-size: 100% 2px; /* Altura de cada linha de scanline */
            pointer-events: none;
            z-index: 10;
            opacity: 0.2;
        }
    </style>
</head>
<body class="bg-retro-bg-dark text-retro-text-light min-h-screen flex items-center justify-center p-8 relative overflow-hidden">
    <div class="w-full max-w-xl bg-retro-panel border-4 border-retro-border rounded-none shadow-retro-button transition duration-300 relative z-20">

        <header class="bg-retro-teal text-retro-text-light p-3 border-b-4 border-retro-border flex justify-between items-center">
            <h1 class="text-xl font-bold uppercase tracking-widest">
                :: STATUS DE REGISTRO
            </h1>
            <div class="space-x-2">
                <span class="inline-block h-4 w-4 bg-retro-pink border-2 border-retro-border shadow-retro-glow-pink"></span>
                <span class="inline-block h-4 w-4 bg-retro-blue border-2 border-retro-border shadow-retro-glow-blue"></span>
            </div>
        </header>

        <div class="p-8 text-center animate-fadeInScale">
            
            <div class="mb-8">
                <svg class="w-28 h-28 mx-auto text-retro-green-success mb-4 drop-shadow-lg" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M22 10a2 2 0 00-2-2h-6V4a2 2 0 00-2-2H4a2 2 0 00-2 2v16a2 2 0 002 2h16a2 2 0 002-2V10zm-4-2v2h2.518L18 8zM6 4h6v4H6V4zm14 16H4V12h16v8zM9 14h6v2H9v-2z"></path>
                </svg>
                <h2 class="text-5xl font-extrabold text-retro-green-success uppercase tracking-widest leading-tight mb-2 shadow-retro-glow-green">
                    REGISTRO <br> GRAVADO\!
                </h2>
                <p class="text-lg text-gray-300">
                    Seu novo jogo foi salvo com sucesso na Base de Dados.
                </p>
                <p class="text-sm text-gray-400 mt-2">
                    <span class="text-retro-blue font-bold">//</span> PRONTO PARA SER JOGADO.
                </p>
            </div>

            <div class="space-y-4">
                <a href="index.php"
                   class="inline-block py-3 px-6 text-lg font-bold uppercase tracking-wider text-retro-text-light bg-retro-blue border-4 border-retro-border 
                          shadow-retro-button hover:bg-retro-blue/80 hover:shadow-retro-glow-blue
                          active:shadow-none active:translate-x-1 active:translate-y-1 transition duration-150 ease-in-out">
                    [ CADASTRAR OUTRO JOGO ]
                </a>
                <a href="#"
                   class="block py-2 text-md font-bold uppercase tracking-wider text-gray-400 hover:text-retro-pink transition duration-150">
                    RETORNAR AO MENU PRINCIPAL
                </a>
            </div>

        </div>

        <footer class="bg-gray-700 text-gray-400 text-xs p-2 border-t-4 border-retro-border flex justify-between">
            <span>DATA SAVE STATUS: OK.</span>
            <span class="text-retro-green-success font-bold">OPERATION COMPLETE</span>
        </footer>

    </div>

</body>
</html>