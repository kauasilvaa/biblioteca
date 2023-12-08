<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel Administrativo</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f8f8;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        h1 {
            color: #333;
            margin-top: 50px;
        }

        nav {
            margin-top: 20px;
        }

        .menu-superior {
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: #004AAD;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .menu-superior a {
            text-decoration: none;
            color: #fff;
            font-size: 18px;
            margin: 10px 0;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .menu-superior a:hover {
            background-color: black;
        }
    </style>
</head>

<body>
    <h1>Painel Administrativo</h1>
    <nav class="menu-superior">
        <a href="cadastrodelivro.php">Cadastro de Livros</a><br>
        <a href="listarusuario.php">Listar Usuários</a><br>
        <a href="listarreserva.php">Listar Reservas</a><br>
        <a href="reserva.php">Emprestar</a><br>
        <a href="../pdf.php">PDF</a><br>
        <a href="login.php">Voltar</a><br>

    </nav>
</body>

</html>