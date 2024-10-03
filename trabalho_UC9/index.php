<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Modelos de Carros</title>
</head>
<body>
    <div class="menu">
        <h1>MODELOS DE CARROS </h1>
  

    </div>
    <div class="container" id="carros"></div>

    <script>
        fetch('api.php')
            .then(response => response.json())
            .then(data => {
                const container = document.getElementById('carros');
                data.forEach(carro => {
                    const card = document.createElement('div');
                    card.className = 'card';
                    card.innerHTML = `
                        <img src="${carro.imagem}" alt="${carro.nome}">
                        <h3>${carro.nome}</h3>
                        <p>Marca: ${carro.marca}</p>
                        <p>Ano: ${carro.ano}</p>
                    `;
                    container.appendChild(card);
                });
            });
    </script>
</body>
</html>
