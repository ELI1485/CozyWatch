<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CozyWatch | Your Cinematic Universe</title>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;800&display=swap" rel="stylesheet">
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- FontAwesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        body {
            font-family: 'Outfit', sans-serif;
            background-color: #0f172a;
            color: #f8fafc;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        
        /* Custom Premium Colors */
        :root {
            --bs-primary: #ff3366;
            --bs-primary-rgb: 255, 51, 102;
        }

        .btn-primary {
            background-color: var(--bs-primary);
            border-color: var(--bs-primary);
        }

        .btn-primary:hover {
            background-color: #e62e5c;
            border-color: #e62e5c;
            box-shadow: 0 4px 15px rgba(255, 51, 102, 0.4);
        }
        
        .text-brand {
            color: var(--bs-primary);
        }

        /* Glassmorphism */
        .glass-navbar {
            background: rgba(30, 41, 59, 0.8) !important;
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .glass-card {
            background: rgba(30, 41, 59, 0.6);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 1rem;
        }

        .form-control {
            background-color: rgba(15, 23, 42, 0.6);
            border: 1px solid rgba(255, 255, 255, 0.2);
            color: white;
        }

        .form-control:focus {
            background-color: rgba(15, 23, 42, 0.8);
            border-color: var(--bs-primary);
            box-shadow: 0 0 0 0.25rem rgba(255, 51, 102, 0.25);
            color: white;
        }

        /* Movie Card specific styling */
        .movie-card {
            transition: all 0.3s ease;
            cursor: pointer;
            border: 1px solid rgba(255, 255, 255, 0.1);
            overflow: hidden;
            border-radius: 1rem;
            position: relative;
        }

        .movie-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.5), 0 0 15px rgba(255, 51, 102, 0.3);
            border-color: rgba(255, 51, 102, 0.5);
        }
    </style>
</head>
<body>

    <!-- Beautiful Navbar -->
    <nav class="navbar glass-navbar sticky-top py-3">
        <div class="container">
            <a class="navbar-brand fw-bold text-white fs-3" href="{{ route('films.index') }}">
                <i class="fa-solid fa-clapperboard text-brand me-2"></i>
                Cozy<span class="text-brand">Watch</span>
            </a>
            <span class="navbar-text text-light opacity-75">
                Laravel Mini-Project 
            </span>
        </div>
    </nav>

    <!-- Main Content Area -->
    <main class="flex-grow-1 py-5">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="glass-navbar py-4 mt-auto text-center text-secondary">
        <div class="container">
            <p class="mb-0">Built with <i class="fa-solid fa-heart text-brand mx-1"></i> Jihane , Maroua , Hanane & Fatimazahra</p>
        </div>
    </footer>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
