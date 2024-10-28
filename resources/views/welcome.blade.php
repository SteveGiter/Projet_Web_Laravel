<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil-ZeducSp@ce</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            overflow-x: hidden;
        }

        /* Rendre la navbar sticky et lui ajouter une ombre */
        .navbar {
            position: sticky;
            top: 0;
            z-index: 1000;
            /* Pour qu'elle reste au-dessus du contenu */
            background-color: black;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
            /* Ombre pour spécifier */
        }

        .navbar-nav .nav-link {
            position: relative;
            padding: 10px 15px;
            color: #cfbd97;
        }

        .navbar-nav .nav-link.active {

            color: #cfbd97;
        }

        /* Style du lien actif avec barre sous le lien */
        .navbar-nav .nav-link.active::after {
            color: #cfbd97;
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 100%;
            height: 3px;
            background-color: #cfbd97;
        }

        .logo {
            height: 65px;
            width: 70px;
        }

        .hero-section {
            position: relative;
            background-color: #cfbd97;
            color: white;
            padding: 150px 0;
            text-align: center;
            z-index: 1;
        }

        /* Formes courbées avec images en arrière-plan */
        .background-shapes {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            overflow: hidden;
        }

        .background-shapes .shape {
            position: absolute;
            border-radius: 50%;
            box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.15);
            background-size: cover;
            background-position: center;
            opacity: 0.7;
            /* Transparence légèrement réduite pour mieux voir les images */
        }

        /* Image dans la forme orange avec une taille plus grande */
        .shape.orange {
            width: 700px;
            height: 700px;
            background-image: url('../../assets/rotidepoulet.png');
            top: -200px;
            /* Plus de distance par rapport au texte */
            right: -350px;
            /* Position ajustée */
        }

        /* Image dans la forme verte avec une taille plus grande */
        .shape.green {
            width: 500px;
            height: 500px;
            background-image: url('../../assets/food.png');
            bottom: -150px;
            /* Position ajustée pour que la forme soit plus basse */
            left: -250px;
        }

        .hero-section h1 {
            font-size: 48px;
            font-weight: bold;
            position: relative;
        }

        .hero-section p {
            margin: 20px 0;
            font-size: 18px;
            position: relative;
        }

        .hero-section .btn {
            margin: 10px;
            padding: 15px 30px;
            font-size: 18px;
            position: relative;
        }

        .dish-section {
            background-color: rgba(255, 255, 255, 0.333);
            padding: 50px 0;
        }

        .dish-card {
            border-radius: 15px;
            overflow: hidden;
            background-color: #cfbd97;
            padding: 20px;
        }

        .dish-card img {
            width: 100%;
            height: 230px;
            border-radius: 15px;
        }

        .btn-primary {
            background-color: #cfbd97;
            color: black;
            transition: 0.3s;
        }

        .btn-primary:hover {
            background-color: #cfbd97;
            color: black;
            border: 2px solid white;
        }

        .btn-order {
            background-color: #FFA400;
            border: none;
            color: white;
            transition: 0.5s;
        }

        .btn-order:hover {
            background-color: #ffffff;
            border: none;
            color: black;
        }

        .btn-reservation {
            background-color: black;
            border: none;
            color: white;
            transition: 0.5s;
        }

        .btn-reservation:hover {
            background-color: black;
            border: 2px solid white;
            color: white;
        }

        /* Sections avec un padding pour que les ancres fonctionnent bien */
        section {
            padding: 100px 0;
        }

        .plat-populaire {
            text-align: center;
            font-family: "Dancing Script", cursive;
            font-weight: 800;
            opacity: 0;
            transform: translateY(50px);
            transition: opacity 0.6s ease-out, transform 0.6s ease-out;

        }

        .plat-populaire.visible {
            opacity: 1;
            transform: translateY(0);
            font-size: 60px;
        }

        .dish-card {
            text-align: center;
            font-family: "Dancing Script", cursive;
            font-weight: bold;
            opacity: 0;
            transform: translateY(50px);
            transition: opacity 0.6s ease-out, transform 0.6s ease-out;

        }

        .dish-card.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .footer {
            background-color: black;
            color: white;
            font-size: 12px;
            padding: 20px 0;
            text-align: center;
            font-family: Arial, Helvetica, sans-serif
        }

        #terms {
            display: flex;
            justify-content: space-between;

        }

        .footer a {
            color: white;
            text-decoration: none;
            margin: 0px;
            display: flex;
        }

        .contactus {
            background: fixed;
            background-color: black;
            color: #cfbd97;
            border-radius: 20px;

        }
    </style>
</head>

<body>

    <!-- Navbar sticky avec ombre -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img class="logo" src="../../assets/logoZeduc.png"
                    alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="http://127.0.0.1:8000/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#menu">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://127.0.0.1:8000/connexion">Order online</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://127.0.0.1:8000/aboutUs">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact us</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-primary" href="http://127.0.0.1:8000/connexion">Log in</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero-section">
        <div class="container">
            <h1 style=" font-family:Dancing Script, cursive; color: black; font-size:80px; font-weight: bolder;">Zeduc
                Sp@ce</h1>
            <p style="font-size: 20px;">Bienvenu(e) sur la plateforme du meilleur restaurant de tout Yansoki! <br>Toi et
                moi savons que tu mérites <span
                    style="font-family:Dancing Script, cursive; color: brown; font-size: x-large; font-weight: 700;">un
                    bon Miam-Miam</span> , <br>fais toi plez!</p>
            <a href="http://127.0.0.1:8000/connexion" id="order" class="btn btn-order">Order now</a>
            <a href="http://127.0.0.1:8000/inscription" class="btn btn-reservation">Sign up</a>
        </div>

        <!-- Formes courbées avec images en arrière-plan -->
        <div class="background-shapes">
            <div class="shape orange"></div>
            <div class="shape green"></div>
        </div>
    </section>

    <!-- Plats populaires Section -->
    <section id="platp" class="dish-section">
        <div style="display: flex; margin-left: 15%;">
            <h1 class="titre-section"><img class="icons" style="width: 10%; height: 60%; margin-bottom:30px; "
                    src="../../assets/flame.png" alt=""> Nos plats les plus populaires</h1>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="dish-card">
                        <img src="../../assets/eru.png" alt="Plat de Eru">
                        <h5 class="text-center mt-3">Eru</h5>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="dish-card">
                        <img src="../../assets/PouletPane.png" alt="Plat de poulet pané">
                        <h5 class="text-center mt-3">Poulet pané</h5>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="dish-card">
                        <img src="../../assets/DG.png" alt="Plat de Poulet DG">
                        <h5 class="text-center mt-3">Poulet DG</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="menu">
        <div style="display: flex; margin-left: 25%;">
            <h1 class="titre-section"><img style="width: 10%; height: 70%; margin-bottom: 30px;" class="icons"
                    src="../../assets/dishicon.png" alt=""> Le menu du jour</h1>
        </div>
        <div>
            <!-- Pour le carousel du menu du jour -->
        </div>
    </section>
    <section>
        <div style="display: flex; margin-left: 25%;">
            <h1 class="titre-section"><img style="width: 10%; height: 70%; margin-bottom: 25px;" class="icons"
                    src="../../assets/gameicon.png" alt=""> Nos jeux</h1>
        </div>
        <div>
            <!-- Pour le carousel des jeux -->
        </div>
    </section>
    <section>
        <div style="display: flex; margin-left: 25%;">
            <h1 class="titre-section"><img style="width: 10%; height: 80%; margin-bottom: 35px;" class="icons"
                    src="../../assets/eventsicon.png" alt=""> Nos évènements</h1>
        </div>
        <div>
            <!-- Pour le carousel des évènements -->
        </div>
    </section>
    <section>
        <div style="display: flex; margin-left: 25%;">
            <h1 class="titre-section"><img style="width: 10%; height: 80%; margin-bottom: 30px;" class="icons"
                    src="../../assets/promotionicon.png" alt="">Nos Promos</h1>
        </div>
        <div class="text-center">
            <img style="width: 10%; height: 80%; margin-top: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5); "
                src="../../assets/calendaricon.png" alt="">
        </div>
    </section>
    <section>
        <div>
            <h1 class="titre-section">Reclamations</h1>
        </div>
        <div>
            <div class="comment-section">
                <h2 style="color: black; font-family: Dancing Script, cursive;"">Feel free!</h2>
                <form id="comment-form">
                    <div class="form-group">
                        <label for="name">Objet :</label>
                        <input type="text" id="objet" required>
                    </div>
                    <div class="form-group">
                        <label for="comment">Commentaire :</label>
                        <textarea id="comment" rows="4" required></textarea>
                    </div>
                    <button type="submit">Envoyer</button>
                </form>
                <div id="comments-display"></div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="dish-section">
        <div id="contact" class="container text-center">
            <h2>Contact us</h2>
            <p class="contactus">Feel free to contact us anytime at +237 6 90143649/ +237 6 51931263</p>
        </div>
    </section>
    <section class="footer">
        <div id="terms">
            <div>
                <p>Company</p>
                <a href="http://127.0.0.1:8000/aboutUs">About Us</a>
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

    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Ajouter un événement de défilement pour gérer l'apparence dynamique des liens actifs
        window.addEventListener('scroll', function() {
            const sections = document.querySelectorAll('section');
            const navLinks = document.querySelectorAll('.nav-link');
            let currentSection = '';

            sections.forEach(section => {
                const sectionTop = section.offsetTop - 50;
                if (pageYOffset >= sectionTop) {
                    currentSection = section.getAttribute('id');
                }
            });

            navLinks.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href').substring(1) === currentSection) {
                    link.classList.add('active');
                }
            });
        });

        function isInViewport(element) {
            const rect = element.getBoundingClientRect();
            return (
                rect.top >= 0 &&
                rect.left >= 0 &&
                rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                rect.right <= (window.innerWidth || document.documentElement.clientWidth)
            );
        }

        // Fonction pour ajouter la classe visible aux éléments
        function checkVisibility() {
            const elements = document.querySelectorAll('.plat-populaire');
            elements.forEach(element => {
                if (isInViewport(element)) {
                    element.classList.add('visible');
                }
            });
            const elementss = document.querySelectorAll('.dish-card');
            elementss.forEach(Element => {
                if (isInViewport(Element)) {
                    Element.classList.add('visible');
                }
            });
        }

        // Écouter l'événement de défilement et d'initialisation de la page
        window.addEventListener('scroll', checkVisibility);
        window.addEventListener('load', checkVisibility);
    </script>
</body>

</html>
