<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Categories</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-100 text-gray-800">
    <!-- Navbar -->
    <nav class="bg-gray-800 text-white">
        <div class="container mx-auto flex justify-between items-center p-4">
            <h1 class="text-lg font-bold">
                <a href="{{ route('welcome') }}" class="hover:text-gray-300">Perpus App</a>
            </h1>
            <ul class="flex space-x-4">
                @auth
                    <li>
                        <a href="{{ route('books.index') }}" class="hover:text-gray-300">Books</a>
                    </li>
                    <li>
                        <a href="{{ route('categories.index') }}" class="hover:text-gray-300">Categories</a>
                    </li>
                @endauth
                @auth
                    <li>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="hover:text-gray-300">Logout</button>
                        </form>
                    </li>
                @else
                    <li>
                        <a href="{{ route('login') }}" class="hover:text-gray-300">Login</a>
                    </li>
                @endauth
                <li>
                    <a href="{{ route('cart.index') }}" class="hover:text-gray-300">Cart</a>
                </li>
            </ul>
            </ul>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mx-auto py-8">
        @yield('content')
    </div>
</body>
</html>