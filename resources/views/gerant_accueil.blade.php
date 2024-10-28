<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page gérant</title>
    <!-- Lien vers la feuille de style CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Lien vers Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Lien vers la police Dancing Script -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
    <style>
        .background {
            position: relative;
            height: 100vh;
            /* Prend toute la hauteur de la fenêtre */
            background-image: url('../../../assets/PageGerant.png');
            /* Remplacez par le chemin de votre image */
            background-size: cover;
            background-position: center;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            /* Filtre noir avec transparence */
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        .left-panel {
            width: 50%;
            /* Ajustez la largeur selon vos besoins */
            float: left;
            /* Positionne à gauche */
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

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        .welcome-text {
            font-family: 'Dancing Script', cursive;
            font-size: 5vw;
        }

        body {
            display: flex;
            flex-direction: column;
            height: 100vh;
            /* Utiliser toute la hauteur de la fenêtre */
        }

        .sidebar {
            background-color: #cfbd97;
            /* Couleur de fond */
            border-radius: 20px;
            padding: 20px;
            flex: 0 0 250px;
            /* Largeur fixe pour la sidebar */
        }

        .content {
            flex: 1;
            /* Prendre le reste de l'espace */
            display: flex;
            justify-content: center;
            /* Centrer le contenu */
            align-items: center;
            /* Centrer verticalement */

        }

        .btn {

            color: #cfbd97;
        }

        .btn-group-vertical {
            width: 100%;
            /* Prendre toute la largeur */

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
        <img id="logo" src="../../../assets/logoZeduc.png" alt="Logo">
        <div class="nav-links">
            <a href="#">HOME</a>
        </div>
    </header>

    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-6 background left-panel">
                    <div class="overlay">
                        <p class="welcome-text">Bienvenu, <br> cher Gerant!</p>
                    </div>
                </div>
                <div style="background-color: rgba(0,0,0,0.5);"
                    class="col-12 col-md-6 d-flex flex-column justify-content-center">
                    <div style="display: flex; flex-direction: column;align-items: center;" class="content">
                        <h1 style="font-weight: bold; font-family: dancing script, cursive;">Bienvenue sur votre tableau
                            de bord !</h1>
                        <h2 style="color: white; text-align: center; font-size: 17px;">En tant que gérant, utilisez
                            votre espace pour mener des actions concernant la gestion des comptes employés, la
                            supervision des reclamations et des commandes, les statistiques du restaurant. </h2>
                    </div>
                    <div class="sidebar">
                        <h2 style="font-family: dancing script,cursive;" class="text-center">Que souhaitez-vous faire
                            aujourd"hui ?</h2>
                        <div class="btn-group-vertical">
                            <a href="#" class="btn btn-dark mb-3">Gestion compte employés</a>
                            <a href="#" class="btn btn-dark mb-3">Suivi Reclamations</a>
                            <a href="#" class="btn btn-dark mb-3">Statistiques</a>
                            <a href="#" class="btn btn-dark mb-3">Suivi Commandes</a>
                            <a href="#" class="btn btn-dark mb-3">Se déconnecter</a>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </main>
    <footer>
        <p>&copy; 2024 Zeduc Sp@ce. Tous droits réservés.</p>
    </footer>

    <!-- Lien vers jQuery (requis pour Bootstrap JS) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <!-- Lien vers Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Lien vers le fichier JavaScript personnalisé -->
    <script src="script.js" defer></script>
</body>

</html>
