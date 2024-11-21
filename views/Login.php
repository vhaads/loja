<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja de Produtos</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Edu+AU+VIC+WA+NT+Pre:wght@400..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>

<body class="bg-gradient-to-r from-indigo-500 via-indigo-600 to-indigo-700 text-black flex items-center justify-center min-h-screen">
    <div class="w-[1024px] h-[480px] bg-white/10 backdrop-blur-sm border border-black/30 rounded-lg shadow-lg p-6 mt-8">
        <div class="flex items-center justify-center w-full mb-4 gap-2">
            <img width="48" height="48" src="https://img.icons8.com/ios/48/ffffff/login-rounded-right--v1.png" alt="login-rounded-right--v1"/>
            <h1 class="font-bold text-white text-2xl text-center">Login</>
        </div>
        <form method="POST" action="/loja-produtos-php/controllers/usuarioController.php" class="space-y-4">
            <div>
                <label for="email" class="block text-white">E-mail</label>
                <input type="email" id="email" name="email" class="w-full p-2 border border-black/30 rounded-lg shadow-lg outline-none" placeholder="Seu e-mail">
            </div>
            <div>
                <label for="password" class="block text-white">Senha</label>
                <input type="password" id="password" name="password" class="w-full p-2 border border-black/30 rounded-lg shadow-lg outline-none" placeholder="Sua senha">
            </div>
            <input type="hidden" name="acao" value="login">
            <div class="flex justify-between items-center">
                <button type="submit" class="bg-blue-500 text-white px-6 py-2 rounded-lg hover:bg-blue-600">Entrar</button>
                <a href="/loja-produtos-php/views/CadastrarUsuario.php" class="text-blue-200 hover:underline">Cadastrar-se</a>
            </div>
        </form>
    </div>
</body>

</html>