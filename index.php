<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selección de productos</title>
    <link rel="stylesheet" href="estilo.css">
    <script src="script.js"></script>
</head>
<body>
    <h1>Bienvenido a la recomendación de productos</h1>

    <form action="enviar.php" method="POST">

        <select name="producto">
            <option value="zucaritas">Zucaritas</option>
            <option value="doritos">Doritos</option>
            <option value="axion">Axion</option>
            <option value="ace">Ace</option>
            <option value="fabuloso">Fabuloso</option>
            <option value="savile">Savile</option>
            <option value="papel">Papel</option>
            <option value="chips">Chips</option>
            <option value="yogurth">Yogurth</option>
            <option value="polvorones">Polvorones</option>
            <option value="pinguinos">Pingüinos</option>
        </select>

    <input type="submit">
    </form>
</body>
</html>