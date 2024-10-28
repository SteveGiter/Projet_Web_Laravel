<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenue Employé</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #f4f4f9;
            font-family: Arial, sans-serif;
        }

        .sidebar {
            background-color: #cfbd97;
            padding: 20px;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            width: 250px;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
        }

        .sidebar .profile-image-section {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 20px;
        }

        .sidebar .profile-image-section img {
            border: 5px solid #fff;
            width: 100px;
            height: 100px;
            border-radius: 50%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .sidebar .profile-image-section h3 {
            margin-top: 10px;
            font-family: 'Dancing Script', cursive;
            color: #333;
        }

        .sidebar .btn {
            background-color: #fff;
            border: 2px solid #ddd;
            border-radius: 25px;
            /* Coins arrondis */
            transition: background-color 0.3s, transform 0.2s, box-shadow 0.3s;
            width: 100%;
            margin-bottom: 10px;
            font-weight: bold;
            padding: 10px;
            /* Ajout de padding pour agrandir le bouton */
            font-size: 1.1rem;
            /* Taille de police légèrement augmentée */
        }

        .sidebar .btn:hover {
            background-color: #e0e0e0;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            /* Ombre au survol */
        }

        .content {
            margin-left: 270px;
            /* Espace pour la barre latérale */
            padding: 20px;
        }

        .card-title {
            font-family: 'Dancing Script', cursive;
            font-size: 2.5rem;
            color: #333;
            margin-bottom: 30px;
        }

        .welcome-message {
            font-size: 1.2rem;
            color: #555;
        }

        .footer {
            position: fixed;
            bottom: 10px;
            left: 0;
            right: 0;
            text-align: center;
            color: #777;
        }

        /* Styles pour le profil */
        .profile-card {
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s;
            position: relative;
            margin-top: 20px;
            /* Espace au-dessus du profil */
        }

        .profile-image-section {
            background-color: #cfbd97;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .profile-image-section img {
            border: 5px solid #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 150px;
            height: 150px;
        }

        .profile-image-section h3 {
            font-family: 'Dancing Script', cursive;
            color: #333;
            margin-top: 15px;
        }

        .card-body h4 {
            font-family: 'Dancing Script', cursive;
            color: #333;
            margin-bottom: 15px;
        }

        .list-group-item {
            border: none;
            padding: 10px 0;
        }

        .social-icons a {
            margin-right: 10px;
            transition: transform 0.3s;
        }

        .social-icons a:hover {
            transform: scale(1.1);
        }

        .action-buttons {
            position: absolute;
            top: 10px;
            right: 10px;
        }

        .action-buttons .btn {
            margin-left: 5px;
            transition: background-color 0.3s, transform 0.2s;
        }

        .action-buttons .btn:hover {
            transform: translateY(-2px);
        }
    </style>
</head>

<body>
    <div class="sidebar">
        <div class="profile-image-section">
            <img src="assets/admin.jpeg" alt="Profile Picture">
            <h3>Tessa Axel</h3>
        </div>
        <button class="btn" onclick="window.location.href='profil.html'">Profil</button>
        <button class="btn" onclick="window.location.href='menuemploy.html'">Update Menu</button>
        <button class="btn" onclick="window.location.href='statistique.html'">Statistiques</button>
        <button class="btn" onclick="window.location.href='commandes.html'">Commandes</button>
        <button class="btn" onclick="window.location.href='reclamation.html'">Réclamations</button>
        <button class="btn btn-danger" onclick="window.close();">Fermer</button> <!-- Bouton Fermer -->
    </div>

    <div class="content">
        <h2 class="card-title">Bienvenue, Tessa Axel</h2>
        <p class="welcome-message">Vous êtes connecté en tant qu'employé. Utilisez le menu à gauche pour naviguer.</p>

        <!-- Profil affiché par défaut -->
        <div class="container my-5">
            <div class="card profile-card">
                <div class="action-buttons">
                    <button class="btn btn-outline-secondary" onclick="window.history.back();">Retour</button>
                    <button class="btn btn-outline-danger" onclick="window.close();">Fermer</button>
                </div>
                <div class="row g-0">
                    <div class="col-md-4 profile-image-section">
                        <img src="assets/admin.jpeg" alt="Profile Picture" class="img-fluid rounded-circle">
                        <h3 class="mt-3">Tessa Axel</h3>
                        <p>Employee</p>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h4>Personal Information</h4>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Email: childofGod@example.com</li>
                                <li class="list-group-item">Phone: +237 600 000 000</li>
                                <li class="list-group-item">Address: Yansoki, Douala</li>
                            </ul>

                            <h4 class="mt-4">Preferences</h4>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Language: English</li>
                            </ul>

                            <h4 class="mt-4">Activity</h4>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Last login: October 20, 2024</li>
                                <li class="list-group-item">Events attended: 5</li>
                            </ul>

                            <div class="social-icons mt-4">
                                <a href="#" class="btn btn-outline-primary"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" class="btn btn-outline-info"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="btn btn-outline-danger"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer">
        <p>&copy; 2024 Mon Miam Miam. Tous droits réservés.</p>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.11/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>

</html>
