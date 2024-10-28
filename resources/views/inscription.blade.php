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
            padding: 50px;
            align-items: center;
            width: 70%;
            max-width: 40%;
            min-width: fit-content;
            height: 80%;
            margin: 30px auto;
            /* Ajout de marges en haut et en bas */
            flex-grow: 1;
            position: relative;
            z-index: 2;
            /* Contenu au-dessus du filtre */

        }

        .upload-container {
            align-items: center;
            text-align: center;
        }

        .upload-button {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            background-color: #c1c2d6;
            color: white;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            position: relative;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
            font-size: 14px;
            transition: background-color 0.3s;
        }

        .profile-circle {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            /* Arrondir l'image */
            background-color: #d1d1d1;
            /* Couleur de fond par défaut */
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto;
            /* Centrer le cercle */
            border: 2px solid #007bff;
            /* Bordure autour du cercle */
        }

        .upload-container {
            text-align: center;
            /* Centrer le contenu */
            margin-top: 50px;
            /* Écarter du haut */
        }

        #cadre {
            color: white;
            text-align: left;
        }

        #login-h2 {
            color: white;
            text-align: center;
            text-decoration: solid;
            font-weight: 600;
        }

        .form-control {
            border-radius: 10px;
        }

        .form-check-label {
            color: white
        }

        .btn {
            background-color: #f0ad4e;
            border: none;
            border-radius: 20px;
        }

        .btn:hover {
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
            font-size: 60px;
            margin-top: 60px;
            color: #cfbd97;
            text-align: center;
        }

        .deux {
            display: flex;
            justify-content: space-between;
        }

        main {
            position: relative;
            overflow: hidden;
            background-image: url('../../assets/BG 1.png');
            /* Remplacez par le chemin de votre image */
            background-size: cover;
            /* L'image s'ajuste pour être entièrement visible */
            background-repeat: no-repeat;
            /* Empêche la répétition de l'image */
            background-position: center;
            /* Centre l'image dans le conteneur */
            height: auto;
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

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div>
            <h1 class="msg-login">Bienvenu(e), Inscris-toi!</h1>
        </div>

        <div class="login-container text-center">
            <div id="cadre">
                <h2 id="login-h2">Créer un compte</h2>
                <form method="POST" action="{{ route('inscription.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="name">Nom complet*</label>
                        <input type="text" name="name" class="form-control" id="name"
                            placeholder="Enter your name" required>
                    </div>
                    <div class="deux">
                        <div class="form-group">
                            <label for="username">Nom d'utilisateur*</label>
                            <input type="text" name="username" class="form-control" id="username"
                                placeholder="Enter your username" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password*</label>
                            <input type="password" name="password" class="form-control" id="password"
                                placeholder="Enter your password" required>
                        </div>
                    </div>
                    <div class="deux">
                        <div class="form-group">
                            <label for="tel">Tel*</label>
                            <input type="tel" name="tel" class="form-control" id="tel"
                                placeholder="Enter your phone number" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email*</label>
                            <input type="mail" name="email" class="form-control" id="email"
                                placeholder="Enter your email adress" required>
                        </div>
                    </div>
                    <div class="deux">
                        <div class="form-group">
                            <label for="town">Ville*</label>
                            <input type="text" name="town" class="form-control" id="town"
                                placeholder="Enter your town" required>
                        </div>
                        <div class="form-group">
                            <label for="adress">Adresse complete*</label>
                            <input type="text" name="adress" class="form-control" id="adress"
                                placeholder="Enter your adress" required>
                        </div>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="rememberMe" class="form-check-input" id="rememberMe">
                        <label class="form-check-label" for="rememberMe">J'accepte de reçevoir les notifications
                            concernant les promotions et évènements.</label>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">S'inscrire</button>
                    <p id="message" style="color: red;"></p>
                    <p style="color:white;">Vous avez déjà un compte? <a href="http://127.0.0.1:8000/connexion"
                            style="color: #4D47C3;">Se connecter</a></p>
                </form>


            </div>
        </div>
    </main>

    <footer>
        <div id="terms">
            <div>
                <p>Company</p>
                <a href="#">About Us</a>
                <a href="#">Team</a>

            </div>
            <div>
                <p>Contact</p>
                <a href="#">Help & Support</a>
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
    <script>
        document.getElementById('loginForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Empêche l'envoi du formulaire

            const passwordInput = document.getElementById('password');
            const password = passwordInput.value;
            const messageElement = document.getElementById('message');

            // Vérification des conditions (au moins une majuscule et un chiffre)
            const hasUpperCase = /[A-Z]/.test(password);
            const hasDigit = /\d/.test(password);

            if (hasUpperCase && hasDigit) {
                alert('Login form submitted!');
                // Vous pouvez soumettre le formulaire ici si nécessaire
                // this.submit(); // Décommentez pour soumettre le formulaire
            } else {
                messageElement.textContent = 'Le mot de passe doit contenir au moins une majuscule et un chiffre.';
                messageElement.style.color = 'red';
            }
        });
        document.getElementById('loginForm').addEventListener('submit', function(event) {
            event.preventDefault();

        });

        document.getElementById('profileCircle').addEventListener('click', function() {
            document.getElementById('photo').click(); // Simuler le clic sur l'input de fichier
        });

        document.getElementById('photo').addEventListener('change', function(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const img = document.getElementById('profileImage');
                    img.src = e.target.result;
                    img.style.display = 'block'; // Afficher l'image
                    document.getElementById('uploadPrompt').style.display = 'none'; // Cacher le texte
                };
                reader.readAsDataURL(file);
            }
        });

        document.getElementById('uploadButton').addEventListener('click', function() {
            document.getElementById('photo').click(); // Ouvrir le sélecteur de fichiers
        });
    </script>
</body>

</html>
