<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Account</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&display=swap" rel="stylesheet">
    <style>
        body {

            display: flex;
            flex-direction: column;
            /* min-height: 100vh; */
            font-family: Arial, sans-serif;
        }

        .header {
            background-color: black;
            text-align: center;
            display: flex;
            justify-content: space-between;
        }

        #logo {
            max-width: 100%;
            /* L'image ne dépassera pas la largeur de son conteneur */
            max-height: 70px;
            /* La hauteur maximale sera de 300 pixels */
            height: auto;
            /* La hauteur s'ajustera automatiquement */
        }

        .header h1 {
            font-size: 24px;
            margin: 0;
            color: #f0ad4e;
            /* Couleur dorée */
        }

        .nav-links {
            margin-top: 22px;
            margin-right: 30px;
            font-size: 13px;
        }

        .nav-links a {
            color: #cfbd97;
            margin: 0 15px;
            text-decoration: none;
            font-weight: 600;
        }

        .login-container {
            /* Couleur de fond jaune */
            background-color: rgba(207, 189, 151, 0.6);
            padding: 50px;
            align-items: center;
            border-radius: 20px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.5);
            width: 70%;
            max-width: 40%;
            min-width: fit-content;
            height: 80%;
            margin: 80px auto;
            /* Ajout de marges en haut et en bas */
            flex-grow: 1;
            position: relative;
            z-index: 2;
            /* Contenu au-dessus du filtre */

        }


        #cadre {
            color: black;
            text-align: left;
        }

        #login-h2 {
            color: black;
            text-align: center;
        }

        .form-control {
            border-radius: 10px;
        }

        .form-check-label {
            color: #2A435D
        }

        .btn-primary {
            background-color: #f0ad4e;
            border: none;
            border-radius: 10px;
        }

        .btn-primary:hover {
            background-color: #ec971f;
        }

        footer {
            background-color: black;
            color: white;
            font-size: 12px;
            padding: 20px 0;
            text-align: center;
            font-family: Verdana, Geneva, Tahoma, sans-serif;

        }

        #terms {
            display: flex;
            justify-content: space-between;

        }

        footer a {
            color: white;
            text-decoration: none;
            margin: 0px;
            display: flex;
        }

        .subscribe {
            margin-top: 15px;
        }

        .msg-login {
            position: relative;
            z-index: 2;
            font-family: "Dancing Script", cursive;
            font-size: 72px;
            margin-top: 140px;
            color: #cfbd97;
            text-align: center;
        }

        main {
            display: flex;
            position: relative;
            background-image: url('../../assets/BG 1.png');
            /* Remplacez par le chemin de votre image */
            background-size: fit;
            /* L'image s'ajuste pour être entièrement visible */
            background-repeat: no-repeat;
            /* Empêche la répétition de l'image */
            background-position: center;
            /* Centre l'image dans le conteneur */
            height: 100vh;
            /* Prend toute la hauteur de la fenêtre */
            margin: 0;
            /* Supprime les marges par défaut */
        }

        main::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.5);
            /* Couleur noire avec 50% d'opacité */
            z-index: 1;
            /* Assure que le filtre est au-dessus de l'image */
        }

        .deux {
            display: flex;
        }
    </style>

</head>

<body>

    <header class="header">
        <img id="logo" src="../../assets/logoZeduc.png" alt="Logo">
        <div class="nav-links">
            <a href="http://127.0.0.1:8000/">HOME</a>
        </div>
    </header>
    <main>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="deux">
            <div>
                <h1 class="msg-login">Bon Retour,<br> cher miam-miameur!</h1>
            </div>
            <div class="login-container text-center">
                <div id="cadre">
                    <h2 id="login-h2">Login</h2>
                    <form id="loginForm" method="POST" action="{{ route('login.submit') }}">
                        @csrf
                        <div class="form-group">
                            <label for="username">Username*</label>
                            <input type="text" class="form-control" id="username" name="username"
                                placeholder="Enter your username" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password*</label>
                            <input type="password" class="form-control" id="password" name="password"
                                placeholder="Enter your password" required>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Log In</button>
                    </form>

                </div>
            </div>
        </div>
    </main>

    <footer>
        <div id="terms">
            <div>
                <p>Company</p>
                <a href="http://127.0.0.1:8000/aboutUs">About Us</a>
                <a href="#">Team</a>

            </div>
            <div>
                <p>Contact</p>
                <a href="http://127.0.0.1:8000/help">Help & Support</a>
                <a href="#">Partner with us</a>
                <a href="#">Ride with us</a>
            </div>
            <div>
                <p>Legal</p>
                <a href="#">Terms & Conditions</a>
                <a href="#">Refund & Cancellation</a>
                <a href="#">Privacy Policy</a>
                <a href="#">Cookie Policy</a>
            </div>
        </div>
        <p>&copy; 2024 Zeduc Sp@ce. All Rights Reserved.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    {{-- <script>
        document.getElementById('loginForm').addEventListener('submit', function(event) {
            event.preventDefault();
            alert('Login form submitted!');
        });
    </script> --}}
</body>

</html>
