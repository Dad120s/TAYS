<html>
<head>
    <title>TAYS</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #000;
        }
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #000;
            padding: 10px 20px;
        }
        .navbar .logo {
            color: white;
            font-size: 24px;
            font-weight: bold;
        }
        .navbar .search-auth {
            display: flex;
            align-items: center;
        }
        .navbar .auth-buttons {
            display: flex;
            align-items: center;
            margin-right: 10px;
        }
        .navbar .auth-buttons button {
            background-color: white;
            border: none;
            border-radius: 20px;
            padding: 5px 15px;
            margin-left: 10px;
            cursor: pointer;
            font-size: 14px;
        }
        .navbar .auth-buttons button:hover {
            background-color: #ddd;
        }
        .navbar .divider {
            width: 1px;
            height: 30px;
            background-color: white;
            margin: 0 10px;
        }
        .navbar .search-bar {
            display: flex;
            align-items: center;
        }
        .navbar .search-bar input[type="text"] {
            padding: 5px;
            border-radius: 20px;
            border: none;
            width: 200px;
            font-size: 14px;
        }
        .navbar .search-bar button {
            background-color: white;
            border: none;
            border-radius: 20px;
            padding: 5px 15px;
            margin-left: 10px;
            cursor: pointer;
            font-size: 14px;
        }
        .navbar .search-bar button:hover {
            background-color: #ddd;
        }
        .menu-bar {
            display: flex;
            justify-content: flex-start;
            align-items: center;
            background-color: #000;
            padding: 10px 0 10px 10px; /* Adjust padding to move the menu items to the left */
        }
        .menu-bar .nav-links a {
            background-color: white;
            color: black;
            text-decoration: none;
            margin: 0 10px; /* Adjust margin to move the menu items closer to each other */
            font-size: 16px;
            padding: 5px 20px;
            border-radius: 20px;
            width: 150px; /* Set a fixed width for all menu items */
            text-align: center; /* Center the text within the menu items */
        }
        .content {
            background-color: white;
            height: 400px;
            width: 100%;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <div class="logo">TAYS</div>
        <div class="search-auth">
            <div class="auth-buttons">
            <button class="botao-login" onclick="window.location.href='/code/login/login.php';">Login</button>
            <button class="botao-cadastro" onclick="window.location.href='/code/cadastro/cadastro-interface.php';">Cadastrar</button>
            </div>
            <div class="divider"></div>
            <div class="search-bar">
                <input type="text" placeholder="Pesquisar...">
                <button>Buscar</button>
            </div>
        </div>
    </div>
    <div class="menu-bar">
        <div class="nav-links">
            <a href="/code/html/posts.html">Posts</a>
            <a href="#">Notícias</a>
            <a href="#">Vídeos</a>
            <a href="#">Influenciadores</a>
            <a href="#">Sobre nós</a>
        </div>
    </div>
    <div class="content"></div>
</body>
</html>