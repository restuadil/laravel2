<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie App Landing Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <style>
        .hero {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 90vh;
            margin: auto 100px;
        }

        .hero-image {
            width: 300px
        }

        .hero-content {
            flex: 0 0 50%;
            padding: 0 20px;
            text-align: center
        }

        .hero-content h2 {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .hero-content i {
            margin-left: 10px;
            color: gold
        }

        .hero-content button {
            margin-right: 10px;
            border-radius: 10px;
        }

        .hero-content p {
            font-size: 16px;
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="movieapp">Movie App</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/movieapp/product">Product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/login">Sign In</a>
                </li>
            </ul>
        </div>
    </nav>


    <div>
        @yield('app')
    </div>

    <footer class="navbar navbar-expand-lg navbar-light bg-light flex justify-content-around">
        <div>
            <a class="navbar-brand" href="movieapp">Movie App</a>
        </div>

        <div>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/movieapp/product">Product</a>
                </li>
            </ul>
        </div>

        <div>
            <i class="bi bi-instagram mx-2"></i>
            <i class="bi bi-facebook mx-2"></i>
            <i class="bi bi-twitter mx-2"></i>
            <i class="bi bi-linkedin mx-2"></i>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>

</html>
