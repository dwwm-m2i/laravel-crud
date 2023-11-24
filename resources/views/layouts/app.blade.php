<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel CRUD</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;700&display=swap">
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
</head>
<body class="font-[Inter] bg-gray-200">
    <div class="bg-gray-800 shadow">
        <div class="max-w-6xl mx-auto px-3 py-8">
            <nav class="text-gray-100 space-x-4">
                <a href="/" class="text-lg">Accueil</a>
                <a href="/jeux" class="text-lg">Jeux</a>
            </nav>
        </div>
    </div>

    <div class="max-w-6xl mx-auto px-3 py-8">
        @yield('content')
    </div>
</body>
</html>
