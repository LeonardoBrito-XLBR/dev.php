<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Custo - Tema Escuro</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'dark-bg': '#1e293b',
                        'dark-card': '#334155',
                        'text-light': '#f1f5f9',
                        'accent-neon': '#f97316',
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-dark-bg text-text-light flex items-center justify-center min-h-screen p-4">

    <div class="bg-dark-card p-8 sm:p-10 rounded-2xl shadow-2xl shadow-black/50 max-w-sm w-full transition-all duration-300 border-t-8 border-accent-neon">

        <h1 class="text-3xl font-bold text-text-light text-center mb-10 tracking-widest uppercase">
            CÁLCULO DE ROTA
        </h1>

        <form method="post" class="space-y-7">
            
            <div>
                <label for="distancia" class="block text-sm font-semibold text-text-light mb-1">
                    <span class="text-accent-neon mr-1">1.</span> DISTÂNCIA TOTAL (KM)
                </label>
                <input 
                    type="text" 
                    id="distancia" 
                    name="distancia"
                    placeholder="Ex: 450 km"
                    class="w-full px-4 py-3 border border-gray-600 rounded-lg bg-gray-700 placeholder-gray-500 focus:outline-none focus:ring-4 focus:ring-accent-neon/30 focus:border-accent-neon transition duration-300 text-text-light"
                    inputmode="numeric" 
                >
            </div>

            <div>
                <label for="consumo" class="block text-sm font-semibold text-text-light mb-1">
                    <span class="text-accent-neon mr-1">2.</span> MÉDIA DO VEÍCULO (KM/L)
                </label>
                <input 
                    type="text" 
                    id="consumo" 
                    name="consumo"
                    placeholder="Ex: 15.5 km/l"
                    class="w-full px-4 py-3 border border-gray-600 rounded-lg bg-gray-700 placeholder-gray-500 focus:outline-none focus:ring-4 focus:ring-accent-neon/30 focus:border-accent-neon transition duration-300 text-text-light"
                    inputmode="decimal"
                >
            </div>

            <div>
                <label for="preco" class="block text-sm font-semibold text-text-light mb-1">
                    <span class="text-accent-neon mr-1">3.</span> PREÇO POR LITRO (R$)
                </label>
                <input 
                    type="text" 
                    id="preco" 
                    name="preco"
                    placeholder="Ex: R$ 5.30"
                    class="w-full px-4 py-3 border border-gray-600 rounded-lg bg-gray-700 placeholder-gray-500 focus:outline-none focus:ring-4 focus:ring-accent-neon/30 focus:border-accent-neon transition duration-300 text-text-light"
                    inputmode="decimal"
                >
            </div>

            <button 
                type="submit" 
                class="w-full bg-accent-neon hover:bg-orange-700 text-dark-bg font-extrabold py-3.5 rounded-lg shadow-xl shadow-accent-neon/40 hover:shadow-2xl transition duration-300 ease-in-out transform hover:scale-[1.01] mt-8 tracking-widest uppercase"
            >
                VER CUSTO FINAL
            </button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == 'POST') {
            // Verificando se todos os campos foram preenchidos corretamente
            if (isset($_POST['distancia']) && isset($_POST['consumo']) && isset($_POST['preco'])) {
                
                // Obtendo os valores do formulário
                $distancia = $_POST['distancia'];
                $consumo = $_POST['consumo'];
                $preco = $_POST['preco'];

                // Sanitarizando as entradas para evitar caracteres não numéricos
                $distancia = floatval(preg_replace('/[^\d.]/', '', $distancia));
                $consumo = floatval(preg_replace('/[^\d.]/', '', $consumo));
                $preco = floatval(preg_replace('/[^\d.]/', '', $preco));

                // Verificando se os valores são válidos
                if ($distancia > 0 && $consumo > 0 && $preco > 0) {
                    // Calculando o gasto
                    $gasto = ($distancia / $consumo) * $preco;
                    echo "<div class='mt-8 text-center bg-gray-800 p-4 rounded-lg border border-accent-neon'>";
                    echo "<p class='text-lg font-semibold'>Gasto total estimado:</p>";
                    echo "<p class='text-2xl font-bold text-accent-neon'>R$ " . number_format($gasto, 2, ',', '.') . "</p>";
                    echo "</div>";
                } else {
                    echo "<div class='mt-8 text-center text-red-500 font-semibold'>Por favor, insira valores válidos.</div>";
                }
            }
        }
        ?>

    </div>

</body>
</html>
