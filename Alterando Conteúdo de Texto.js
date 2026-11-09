<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exemplo OneCompiler</title>
</head>
<body>

    
    <p id="texto">Texto original</p>
    <button id="meuBotao">Alterar Texto</button>

    
    <script>
        
        const paragrafo = document.getElementById('texto');
        const botao = document.getElementById('meuBotao');


        botao.addEventListener('click', function() {
            
            paragrafo.textContent = 'O texto foi alterado com sucesso!';
        });
    </script>

</body>
</html>
