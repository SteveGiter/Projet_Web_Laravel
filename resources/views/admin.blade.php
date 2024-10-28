<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administration ZEDUC SPACE</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Global styles */
        header {

            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            margin-bottom: 100px;
        }

        body {
            margin-top: 200px;
            background-color: #e2e2e2;
            /* Couleur grise de fond */
            font-family: 'Arial', sans-serif;
        }

        /* Navbar */
        .navbar {
            background-color: #020202;
            /* Couleur de fond foncée pour le menu */
        }

        .navbar-brand img {
            max-width: 50px;
        }

        .navbar-nav .nav-link {
            color: #fff;
            font-weight: bold;
        }

        .navbar-nav .nav-link:hover {
            color: #ffc107;
            /* Couleur de survol pour les liens du menu */
        }

        .navbar-nav .nav-link {
            color: #cfbd97;
            /* Couleur des liens */
        }

        .navbar-nav .nav-link:hover {
            color: #b19b74;
            /* Couleur au survol */
        }

        /* Sidebar */
        .list-group-item {
            background-color: #f5f5f5;
            border: none;
            color: #141414;
            font-size: 16px;
            padding: 15px;
        }

        .list-group-item:hover {
            background-color: #d2b48c;
            /* Beige clair au survol */
            color: #fff;
        }

        .list-group-item.text-danger {
            color: #100f0f;
        }

        .list-group-item-action {
            text-align: center;
        }

        .content-section {
            display: none;
        }

        .d-block {
            display: block;
        }

        /* Card sections */
        .card {
            background-color: #ffffff;
            border: none;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background-color: #f0e6d2;
            /* Couleur beige clair de l'en-tête */
            font-weight: bold;
            color: #3a3a3a;
            border-bottom: none;
        }

        .card-body {
            background-color: #ffffff;
        }

        /* Profile image */
        .rounded-circle {
            border: 5px solid #d2b48c;
            /* Bordure beige autour de l'image de profil */
        }

        /* Form controls */
        .form-control {
            border-radius: 0;
            border: 1px solid #d2b48c;
            /* Couleur beige des bordures des champs */
        }

        .form-control:focus {
            border-color: #ffc107;
            /* Couleur dorée au focus */
            box-shadow: none;
        }

        .btn-outline-secondary {
            background-color: #d2b48c;
            color: #fff;
            border-color: #d2b48c;
        }

        .btn-outline-secondary:hover {
            background-color: #ffc107;
            border-color: #ffc107;
        }

        /* Enregistrer button */
        .btn-primary {
            background-color: #050505;
            /* Couleur noire du bouton Enregistrer */
            border: none;
        }

        .btn-primary:hover {
            background-color: #ffc107;
        }

        /* Footer */
        footer {
            background-color: #050505;
            color: #ffffff;
        }

        footer a {
            color: #ffffff;
            text-decoration: none;
        }

        footer a:hover {
            color: #ffc107;
            /* Couleur dorée au survol */
        }

        /* Footer section titles */
        footer h5 {
            font-weight: bold;
            color: #ffffff;
        }

        footer p {
            margin: 0;
            color: #ffffff;
        }

        /* Copyright section */
        footer .text-center p {
            font-size: 14px;
            color: #ffffff;
            margin-top: 15px;
        }

        .active {
            background-color: #ffc107;
            /* Couleur de fond du bouton actif */
            color: white;
            /* Couleur du texte pour le bouton actif */
        }

        .content-section {
            display: none;
            /* Cacher toutes les sections par défaut */
        }

        .d-block {
            display: block;
            /* Afficher la section active */
        }

        /* Responsive design */
        @media (max-width: 767px) {

            .col-md-3,
            .col-md-9 {
                width: 100%;
                display: block;
                margin: 0;
            }
        }

        /* Ajuster la taille de l'en-tête */
        header {
            padding: 10px 0;
            /* Réduire le padding vertical */
            background-color: black;
            /* Garder la couleur de fond */
        }

        /* Ajuster la taille du logo */
        header .navbar-brand img {
            width: 60px;
            /* Réduire la largeur du logo */
        }

        /* Réduire les marges des liens de navigation */
        header .nav-link {
            font-size: 0.9rem;
            /* Diminuer la taille du texte des liens */
            margin-right: 10px;
            /* Réduire l'espacement entre les liens */
        }

        /* Si nécessaire, ajustez la hauteur de la barre de navigation sur mobile */
        .navbar-toggler {
            padding: 5px;
            /* Réduire la taille du bouton mobile */
        }

        /* Ajuster la taille de l'en-tête */
        header {
            padding: 10px 0;
            /* Réduire le padding vertical */
            background-color: black;
            /* Garder la couleur de fond */
        }

        /* Ajuster la taille du logo */
        header .navbar-brand img {
            width: 60px;
            /* Réduire la largeur du logo */
        }

        /* Réduire les marges des liens de navigation */
        header .nav-link {
            font-size: 0.9rem;
            /* Diminuer la taille du texte des liens */
            margin-right: 10px;
            /* Réduire l'espacement entre les liens */
        }

        /* Si nécessaire, ajustez la hauteur de la barre de navigation sur mobile */
        .navbar-toggler {
            padding: 5px;
            /* Réduire la taille du bouton mobile */
        }
    </style>

</head>

<body>

    <header class="py-3 mb-4">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="#">
                    <img src="assets/Zeduc.jpg" alt="logo" width="100">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="http://127.0.0.1:8000/#home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://127.0.0.1:8000/menu">Menu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://127.0.0.1:8000/#contact">Contact</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>


    <!-- Main content section -->
    <main class="bg-dark text-white" style="padding-top: 0px;">
        <div class="container">

            <!-- Ajoutez d'autres contenus ici -->
        </div>
    </main>

    <!-- Main content -->
    <div class="container">
        <div class="row">

            <!-- Sidebar -->
            <div class="col-md-3">
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action"
                        onclick="showSection('menuSection', this)">Gestion du Menu</a>
                    <a href="#" class="list-group-item list-group-item-action"
                        onclick="showSection('employeeSection', this)">Gestion des Employés</a>
                    <a href="#" class="list-group-item list-group-item-action"
                        onclick="showSection('promoSection', this)">Promotions/Événements</a>
                    <a href="#" class="list-group-item list-group-item-action"
                        onclick="showSection('statsSection', this)">Statistiques</a>
                    <a href="#" class="list-group-item list-group-item-action"
                        onclick="showSection('complaintsSection', this)">Suivi des Réclamations</a>
                    <a href="#" class="list-group-item list-group-item-action"
                        onclick="showSection('settingsSection', this)">Paramètres</a>
                    <a href="http://127.0.0.1:8000/"
                        class="list-group-item list-group-item-action text-danger">Déconnexion</a>
                </div>
            </div>

            <!-- Dynamic Sections -->
            <div class="col-md-9">


                <!-- Gestion du Menu Section -->
                <div id="menuSection" class="content-section">
                    <h3>Gestion du Menu</h3>
                    <div id="menuCardsContainer" class="row">
                        <!-- Les cartes des menus ajoutés apparaîtront ici -->
                    </div>

                    <form id="menuForm">
                        @csrf
                        <div class="mb-3">
                            <label for="menuCategory" class="form-label">Catégorie</label>
                            <select id="menuCategory" name="categorie" class="form-control" required>
                                <option value="" disabled selected>Choisissez une catégorie</option>
                                <option value="boisson">Boisson</option>
                                <option value="plat">Plat</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="menuItemTitle" class="form-label">Nom de l'élément</label>
                            <input type="text" class="form-control" id="menuItemTitle" name="nom_menu"
                                placeholder="Nom du plat/boisson" required>
                        </div>
                        <div class="mb-3">
                            <label for="menuItemPrice" class="form-label">Prix</label>
                            <input type="number" class="form-control" id="menuItemPrice" name="prix"
                                placeholder="Prix en FCFA" required>
                        </div>
                        <div class="mb-3">
                            <label for="menuItemDescription" class="form-label">Description</label>
                            <textarea class="form-control" id="menuItemDescription" name="description_menu"
                                placeholder="Description du plat/boisson"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="menuItemImage" class="form-label">Image</label>
                            <input type="file" class="form-control" id="menuItemImage" name="image"
                                accept="image/*">
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Ajouter</button>
                    </form>
                </div>
                <!-- Gestion des Employés Section -->
                <div id="employeeSection" class="content-section">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h4>Ajouter un nouvel employé</h4>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('inscription.store') }}">
                                @csrf

                                <div class="mb-3">
                                    <label for="employeeName" class="form-label">Nom complet</label>
                                    <input type="text" class="form-control" name="name" required>
                                </div>

                                <div class="mb-3">
                                    <label for="employeeUsername" class="form-label">Nom d'utilisateur</label>
                                    <input type="text" class="form-control" name="username" required>
                                </div>

                                <div class="mb-3">
                                    <label for="employeeRole" class="form-label">Rôle</label>
                                    <select class="form-control" name="role" required>
                                        <option value="" disabled selected>Choisissez un rôle</option>
                                        <option value="employe">Employé</option>
                                        <option value="gerant">Gérant</option>
                                        <option value="administrateur">Administrateur</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="employeeEmail" class="form-label">Email</label>
                                    <input type="email" class="form-control" name="email" required>
                                </div>

                                <div class="mb-3">
                                    <label for="employeePhone" class="form-label">Téléphone</label>
                                    <input type="tel" class="form-control" name="tel" required>
                                </div>

                                <div class="mb-3">
                                    <label for="employeeTown" class="form-label">Ville</label>
                                    <input type="text" class="form-control" name="town" required>
                                </div>

                                <div class="mb-3">
                                    <label for="employeeAddress" class="form-label">Adresse</label>
                                    <input type="text" class="form-control" name="adress" required>
                                    <!-- Corrigé ici -->
                                </div>

                                <div class="mb-3">
                                    <label for="employeePassword" class="form-label">Mot de passe</label>
                                    <input type="password" class="form-control" name="password" required>
                                    <!-- Changé en type "password" pour la sécurité -->
                                </div>

                                <button type="submit" class="btn btn-primary btn-block">Ajouter</button>
                            </form>

                        </div>
                    </div>

                    <div id="addedEmployees" class="row"></div>
                </div>


                <!-- Promotions/Événements Section -->
                <div id="promoSection" class="content-section">
                    <div class="container promo-container mt-5">
                        <h2>Créer une nouvelle promotion</h2>
                        <form id="promoForm">
                            @csrf
                            <div class="mb-3">
                                <label for="promoTitle" class="form-label">Titre de la promotion</label>
                                <input type="text" class="form-control" id="promoTitle" name="titre"
                                    placeholder="Ex: 30% de réduction" required>
                            </div>
                            <div class="mb-3">
                                <label for="promoDate" class="form-label">Date</label>
                                <input type="date" class="form-control" id="promoDate" name="dates" required>
                            </div>

                            <div class="mb-3">
                                <label for="promoDescription" class="form-label">Description de la promotion</label>
                                <textarea class="form-control" id="promoDescription" name="description" rows="3"
                                    placeholder="Ex: 30% de réduction sur la note totale."></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="PromoImage" class="form-label">Image</label>
                                <input type="file" class="form-control" id="PromoImage" name="image"
                                    accept="image/*">
                            </div>
                            <button type="submit" class="btn btn-warning btn-sm">Ajouter la promotion</button>
                        </form>
                    </div>
                </div>



                <!-- Statistiques Section -->
                <div id="statsSection" class="content-section">
                    <div class="container mt-5">
                        <h2 class="text-center mb-5">Statistiques Administratives</h2>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <div class="stat-title">Total des Ventes</div>
                                        <div class="stat-value">3,500,000 FCFA</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <div class="stat-title">Total des Commandes</div>
                                        <div class="stat-value">1,200</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <div class="stat-title">Utilisateurs de Fidélité</div>
                                        <div class="stat-value">350</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-md-4">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <div class="stat-title">Utilisateurs de Parrainage</div>
                                        <div class="stat-value">120</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <div class="stat-title">Revenus de Fidélité</div>
                                        <div class="stat-value">500,000 FCFA</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <div class="stat-title">Revenus de Parrainage</div>
                                        <div class="stat-value">200,000 FCFA</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="settings-section mt-5">
                            <h3 class="text-center">Détails des Ventes et Commandes</h3>
                            <table class="table table-bordered mt-3">
                                <thead class="table-light">
                                    <tr>
                                        <th>Date</th>
                                        <th>Nombre de Commandes</th>
                                        <th>Total des Ventes</th>
                                        <th>Utilisateurs de Fidélité</th>
                                        <th>Utilisateurs de Parrainage</th>
                                    </tr>
                                    <tr>
                                        <th>01/10/2024</th>
                                        <th>50</th>
                                        <th>100,000 FCFA</th>
                                        <th>15</th>
                                        <th>5</th>
                                    </tr>
                                    <tr>
                                        <td>02/10/2024</td>
                                        <td>60</td>
                                        <td>120,000 FCFA</td>
                                        <td>20</td>
                                        <td>8</td>
                                    </tr>
                                    <tr>
                                        <td>03/10/2024</td>
                                        <td>55</td>
                                        <td>110,000 FCFA</td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>04/10/2024</td>
                                        <td>70</td>
                                        <td>150,000 FCFA</td>
                                        <td>25</td>
                                        <td>7</td>
                                    </tr>
                                    <tr>
                                        <td>05/10/2024</td>
                                        <td>65</td>
                                        <td>130,000 FCFA</td>
                                        <td>18</td>
                                        <td>6</td>
                                    </tr>
                                    </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Suivi des Réclamations Section -->
                <div class="container">
                    <h3>Suivi des Réclamations</h3>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nom de l'Étudiant</th>
                                <th>Type de Réclamation</th>
                                <th>Détails</th>
                                <th>Date de Soumission</th>
                                <th>Statut</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($complaints as $complaint)
                                <tr>
                                    <td>{{ $complaint->id }}</td>
                                    <td>{{ $complaint->student_name }}</td>
                                    <td>{{ $complaint->type }}</td>
                                    <td>{{ $complaint->details }}</td>
                                    <td>{{ $complaint->created_at->format('d/m/Y') }}</td>
                                    <td>{{ $complaint->status }}</td>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <script></script>
                <!-- Paramètres Section -->
                <div id="settingsSection" class="content-section">
                    <div class="container mt-5">
                        <h2>Paramètres</h2>
                        <div class="card">
                            <div class="card-body">
                                <form id="settingsForm">
                                    <div class="mb-3">
                                        <label for="discountRate" class="form-label">Taux de réduction (en %)</label>
                                        <input type="number" class="form-control" id="discountRate"
                                            placeholder="Ex: 20" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="notificationEmail" class="form-label">Email de
                                            notification</label>
                                        <input type="email" class="form-control" id="notificationEmail"
                                            placeholder="Ex: admin@zeducspace.com" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="orderLimit" class="form-label">Limite quotidienne de
                                            commandes</label>
                                        <input type="number" class="form-control" id="orderLimit"
                                            placeholder="Ex: 100" required>
                                    </div>
                                    <button type="button" class="btn btn-warning btn-sm"
                                        onclick="saveSettings()">Sauvegarder les paramètres</button>
                                    <div class="settings-section">
                                        <h3 class="settings-title">Heures d'Ouverture</h3>
                                        <form id="openingHoursForm">
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <label for="openingTime" class="form-label">Heure
                                                        d'ouverture</label>
                                                    <input type="time" class="form-control" id="openingTime">
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="closingTime" class="form-label">Heure de
                                                        fermeture</label>
                                                    <input type="time" class="form-control" id="closingTime">
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-warning btn-sm">Mettre à jour les
                                                horaires</button>
                                        </form>
                                    </div>
                                    <div class="settings-section">
                                        <h3 class="settings-title">Politique du Restaurant</h3>
                                        <form id="policyForm">
                                            <div class="mb-3">
                                                <label for="policyText" class="form-label">Description de la
                                                    Politique</label>
                                                <textarea id="policyText" class="form-control" rows="4"
                                                    placeholder="Entrez la politique du restaurant ici..."></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-warning btn-sm">Mettre à jour la
                                                politique</button>
                                        </form>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="text-white mt-5 py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5>Company</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="footer-links">About Us</a></li>
                        <li><a href="#" class="footer-links">Team</a></li>
                        <li><a href="#" class="footer-links">Careers</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>Contact</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="footer-links">Help & Support</a></li>
                        <li><a href="#" class="footer-links">Partner with Us</a></li>
                        <li><a href="#" class="footer-links">Ride with Us</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>Legal</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="footer-links">Terms & Conditions</a></li>
                        <li><a href="#" class="footer-links">Privacy Policy</a></li>
                        <li><a href="#" class="footer-links">Cookie Policy</a></li>
                    </ul>
                </div>
            </div>
            <div class="text-center mt-3">
                <p>&copy; 2024 ZEDUC@SPACE. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function showSection(sectionId, element) {
            // Cacher toutes les sections
            document.querySelectorAll('.content-section').forEach(section => {
                section.classList.remove('d-block');
            });
            // Afficher la section sélectionnée
            document.getElementById(sectionId).classList.add('d-block');

            // Réinitialiser les styles des boutons
            document.querySelectorAll('.list-group-item').forEach(item => {
                item.classList.remove('active');
            });
            // Maintenir la couleur sur le bouton cliqué
            element.classList.add('active');
        }

        function addMenuItem() {
            const title = document.getElementById('menuItemTitle').value;
            const price = document.getElementById('menuItemPrice').value;
            const image = document.getElementById('menuItemImage').value;
            const category = document.getElementById('menuCategory').value;

            const menuItemsContainer = document.getElementById('addedMenuItems');
            const menuCard = document.createElement('div');
            menuCard.className = 'col-md-4 menu-card';
            menuCard.innerHTML = `
          <div class="card text-center">
              <img src="${image}" class="card-img-top" alt="${title}">
              <div class="card-body">
                  <h5 class="card-title">${title}</h5>
                  <p class="card-text">Catégorie: ${category}</p>
                  <p class="card-text">Prix: ${price} FCFA</p>
              </div>
          </div>
      `;
            menuItemsContainer.appendChild(menuCard);

            // Réinitialiser le formulaire
            document.getElementById('menuForm').reset();
        }

        function addEmployee() {
            const name = document.getElementById('employeeName').value;
            const role = document.getElementById('employeeRole').value;
            const email = document.getElementById('employeeEmail').value;
            const phone = document.getElementById('employeePhone').value;

            const employeesContainer = document.getElementById('addedEmployees');
            const employeeCard = document.createElement('div');
            employeeCard.className = 'col-md-4 employee-card';
            employeeCard.innerHTML = `
          <div class="card text-center">
              <div class="card-body">
                  <h5 class="card-title">${name}</h5>
                  <p class="card-text">${role}</p>
                  <p><strong>Email:</strong> ${email}</p>
                  <p><strong>Téléphone:</strong> ${phone}</p>
              </div>
          </div>
      `;
            employeesContainer.appendChild(employeeCard);

            // Réinitialiser le formulaire
            document.getElementById('addEmployeeForm').reset();
        }

        function addComplaint() {
            const title = document.getElementById('complaintTitle').value;
            const description = document.getElementById('complaintDescription').value;

            const complaintsList = document.getElementById('complaintsList');
            const complaintItem = document.createElement('li');
            complaintItem.className = 'list-group-item';
            complaintItem.textContent = `${title}: ${description}`;
            complaintsList.appendChild(complaintItem);

            // Réinitialiser le formulaire
            document.getElementById('complaintForm').reset();
        }

        // Afficher la section d'accueil par défaut
        document.addEventListener('DOMContentLoaded', () => {
            showSection('homeSection', document.querySelector('.list-group-item'));
        });

        function showSection(sectionId, element) {
            // Cacher toutes les sections
            document.querySelectorAll('.content-section').forEach(section => {
                section.classList.remove('d-block');
            });
            // Afficher la section sélectionnée
            document.getElementById(sectionId).classList.add('d-block');

            // Réinitialiser les styles des boutons
            document.querySelectorAll('.list-group-item').forEach(item => {
                item.classList.remove('active');
            });
            // Maintenir la couleur sur le bouton cliqué
            element.classList.add('active');
        }

        function addMenuItem() {
            // Logique pour ajouter un élément de menu ici
        }

        function addEmployee() {
            // Logique pour ajouter un employé ici
        }

        function addPromotion() {
            // Logique pour ajouter une promotion ici
        }

        function addComplaint() {
            // Logique pour ajouter une réclamation ici
        }

        function saveSettings() {
            // Logique pour sauvegarder les paramètres ici
        }

        // Afficher la section d'accueil par défaut
        document.addEventListener('DOMContentLoaded', () => {
            showSection('homeSection', document.querySelector('.list-group-item'));
        });
        // Exemple de données de réclamations (à remplacer par des données dynamiques)
        const complaints = [{
                id: 1,
                studentName: 'NGASSA Yvan',
                type: 'Retard de livraison',
                details: 'Retard de livraison de ma commande.',
                date: '2024-10-01',
                status: 'En attente'
            },
            {
                id: 2,
                studentName: 'JOSSY Steven',
                type: 'Excès de piment',
                details: 'Trop de piment dans mon plat de poulet pané.',
                date: '2024-10-02',
                status: 'Résolu'
            }
        ];

        // Fonction pour afficher les réclamations
        function displayComplaints() {
            const tableBody = document.getElementById('complaintsTableBody');
            tableBody.innerHTML = ''; // Réinitialiser le contenu

            complaints.forEach(complaint => {
                const row = document.createElement('tr');
                row.innerHTML = `
          <td>${complaint.id}</td>
          <td>${complaint.studentName}</td>
          <td>${complaint.type}</td>
          <td>${complaint.details}</td>
          <td>${complaint.date}</td>
          <td>${complaint.status}</td>
          <td>
              <button class="btn btn-warning btn-sm"" onclick="viewComplaint(${complaint.id})">Voir</button>
              <button class="btn btn-warning btn-sm" onclick="resolveComplaint(${complaint.id})">Traiter</button>
              <button class="btn btn-warning btn-sm" onclick="deleteComplaint(${complaint.id})">Supprimer</button>
          </td>
      `;
                tableBody.appendChild(row);
            });
        }

        // Fonction pour voir les détails d'une réclamation
        function viewComplaint(id) {
            alert(`Voir les détails de la réclamation ID: ${id}`);
            // Logique pour afficher les détails
        }

        // Fonction pour traiter une réclamation
        function resolveComplaint(id) {
            alert(`Traiter la réclamation ID: ${id}`);
            // Logique pour marquer la réclamation comme résolue
        }

        // Fonction pour supprimer une réclamation
        function deleteComplaint(id) {
            const index = complaints.findIndex(c => c.id === id);
            if (index !== -1) {
                complaints.splice(index, 1);
                displayComplaints(); // Rafraîchir l'affichage
                alert(`Réclamation ID: ${id} supprimée.`);
            }
        }

        // Afficher les réclamations au chargement de la page
        displayComplaints();
    </script>


</body>

</html>
