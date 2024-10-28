<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&display=swap" rel="stylesheet">
    <script src="script.js"></script>
    <title>À Propos</title>
    <style>
        body {
            background-color: #cfbd97;
            /* Couleur de fond claire */
            font-family: Arial, sans-serif;
        }

        h1 {
            color: #343a40;
            /* Couleur du texte des titres */
        }

        h2 {
            color: #495057;
            /* Couleur du texte des sous-titres */
        }

        .about-section {
            background: rgba(255, 255, 255, 0.5);
            /* Fond blanc */
            border-radius: 8px;
            /* Coins arrondis */
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            /* Ombre légère */
            padding: 20px;
            /* Espacement interne */
        }

        .accordion-button {
            background-color: #007bff;
            /* Couleur du bouton */
            color: white;
            /* Couleur du texte du bouton */
        }

        .accordion-button:not(.collapsed) {
            background-color: #0056b3;
            /* Couleur du bouton quand il est ouvert */
        }

        .list-group-item {
            background-color: white;
            /* Fond des éléments de liste */
            border-radius: 5px;
            margin-left: 0px;
        }

        .carousel-section {
            position: relative;
            max-width: 600px;
            /* Largeur maximale */
            max-height: 400px;
            margin: auto;
            /* Centrage */
            overflow: hidden;
            /* Masquer les images qui débordent */
        }

        .carousel-images {
            display: flex;
            /* Alignement horizontal des images */
            transition: transform 0.5s ease;
            /* Transition pour le changement d'image */
        }

        .carousel-image {
            min-width: 100%;
            /* Chaque image occupe la totalité de la largeur */
        }

        .carousel-button {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background-color: rgba(255, 255, 255, 0.7);
            border: none;
            cursor: pointer;
            padding: 10px;
        }

        .prev {
            left: 10px;
        }

        .next {
            right: 10px;
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

        .nav-links a:hover {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            text-decoration: none;
            font-weight: 600;
        }

        .background {
            position: relative;
            height: 100vh;
            background-image: url('../../../assets/PageGerant.png');
            background-size: cover;
            background-position: center;
        }

        footer {
            background-color: black;
            text-align: center;
            color: white;
            margin-bottom: 0;
            height: 60px;
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
        <div class="container about-section mt-5">
            <h1 style="text-align: center; font-family: dancing script,cursive;" class="text-center mb-4">À Propos de
                Nous</h1>
            <section class="carousel-section">
                <div class="carousel">
                    <div class="carousel-images">
                        <img src="../../assets/restau.jpg" alt="Image 1" class="carousel-image active">
                        <img src="../../assets/logoZeduc.png" alt="Image 2" class="carousel-image">
                        <img src="../../assets/DG.png" alt="Image 3" class="carousel-image">
                    </div>
                    <button class="carousel-button prev" id="prev">❮</button>
                    <button class="carousel-button next" id="next">❯</button>
                </div>
            </section>

            <p class="text-center">Notre objectif principal est de chaque jour, fournir les meilleurs plats camerounais
                aux habitants du village de Yansoki . Voici un peu de notre histoire :</p>

            <div class="row mt-4">
                <div class="col-md-6">
                    <h2>Notre Histoire</h2>
                    <p>Zeduc Sp@ce a été fondé en 2022 par un alumni camerounais d'Ucac-Icam et sa famille, désireux de
                        partager les richesses culinaires de leur pays avec les étudiants de l'institut et également les
                        habitants du village yansoki des environs. Le restaurant a rapidement gagné en popularité grâce
                        à ses plats authentiques, son ambiance conviviale et son engagement envers la communauté
                        étudiante.</p>
                </div>
                <div class="col-md-6">
                    <h2>Notre Équipe</h2>
                    <p>Notre chef, un fier alumni de l'UCAC-ICAM, a construit sa passion pour la cuisine avec dévouement
                        et talent. Bien qu'il soit actuellement à l'étranger, il reste au cœur de notre restaurant.
                        Grâce à son expertise et à sa vision, il pilote notre équipe avec passion, même à distance. Il
                        nous inspire tous les jours par sa créativité et son engagement à offrir une cuisine authentique
                        et savoureuse.

                        Ici, au restaurant, sa famille a pris les rênes, veillant à ce que chaque détail soit à la
                        hauteur de ses attentes. Chacun d'entre nous contribue à faire vivre son rêve culinaire. Nous
                        travaillons main dans la main, soutenus par des liens solides, partageant la même passion pour
                        la cuisine camerounaise et le désir de créer une expérience inoubliable pour nos clients.

                        Cette dynamique familiale nous permet d'apporter chaleur et convivialité à chaque service. Nous
                        croyons fermement que la cuisine est un acte d'amour, et cela se reflète dans notre travail
                        quotidien. Que vous soyez un habitué ou un nouveau visiteur, vous êtes toujours accueilli comme
                        un membre de notre famille.

                        Nous vous invitons à savourer non seulement nos plats, mais aussi l’esprit de camaraderie et
                        d’harmonie qui nous unit. Merci de faire partie de notre aventure culinaire !</p>
                </div>
            </div>

            <h2 class="mt-4">Nos Valeurs</h2>
            <ul class="list-group">
                <li class="list-group-item">La tradition <br>La tradition est l'une de nos valeurs fondamentales. Chaque
                    plat que nous servons est préparé avec soin, en respectant des recettes transmises de génération en
                    génération. Nous croyons fermement que la cuisine est une histoire, un héritage que nous avons la
                    responsabilité de préserver et de partager.</li>
                <li class="list-group-item">L'authenticité <br>L'authenticité est également essentielle pour nous. Nous
                    utilisons des ingrédients locaux et de saison pour garantir que chaque bouchée vous transporte au
                    cœur du Cameroun. Notre objectif est de vous faire découvrir des saveurs riches et variées, tout en
                    soutenant les producteurs locaux.</li>
                <li class="list-group-item">L'hospitalité<br>Nous plaçons aussi un point d'honneur sur l’hospitalité.
                    Dans la culture camerounaise, accueillir un invité est un acte sacré. C'est pourquoi chaque membre
                    de notre équipe est formé non seulement à servir des plats délicieux, mais aussi à créer une
                    ambiance chaleureuse et conviviale. Nous voulons que chacun de nos clients se sente comme un membre
                    de notre famille.</li>
                <li class="list-group-item">Notre équipe unique <br>En parlant de famille, j’aimerais aussi souligner
                    l'importance de notre équipe. Ici, nous ne sommes pas seulement collègues ; nous formons une
                    véritable famille. Chacun de nous apporte ses talents uniques et sa passion pour la cuisine. Nous
                    travaillons ensemble, main dans la main, pour garantir une expérience mémorable à chacun de nos
                    clients. L'entraide, le respect et la bonne humeur sont les piliers de notre collaboration.</li>
            </ul>
            <h3>En conclusion, notre restaurant est bien plus qu’un simple lieu de restauration. C’est un espace où la
                tradition, l’authenticité et l’hospitalité se rencontrent, le tout porté par une équipe soudée et
                passionnée. Nous vous remercions de faire partie de cette aventure avec nous et espérons vous voir
                bientôt pour partager ensemble un moment de convivialité autour d'un bon repas camerounais.</h3>
        </div>
    </main>
    <footer>
        <p>&copy; 2024 Zeduc Sp@ce. Tous droits réservés.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const images = document.querySelectorAll(".carousel-image");
            const carouselImages = document.querySelector(".carousel-images");
            let currentIndex = 0;

            function showImage(index) {
                const offset = -index * 100; // Calcule le décalage basé sur l'index actuel
                carouselImages.style.transform = `translateX(${offset}%)`; // Applique le décalage
            }

            function nextImage() {
                currentIndex = (currentIndex + 1) % images.length;
                showImage(currentIndex);
            }

            document.getElementById("next").addEventListener("click", nextImage);
            document.getElementById("prev").addEventListener("click", () => {
                currentIndex = (currentIndex - 1 + images.length) % images.length;
                showImage(currentIndex);
            });

            // Affiche la première image
            showImage(currentIndex);

            // Défilement automatique
            setInterval(nextImage, 3000); // Change d'image toutes les 3 secondes
        });
    </script>
</body>

</html>
