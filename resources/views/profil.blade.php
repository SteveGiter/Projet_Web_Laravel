<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Utilisateur</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet"> <!-- Custom styles -->
    <style>
        /* Global styles */
        body {
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
            max-width: 120px;
        }

        .navbar-nav .nav-link {
            color: #fff;
            font-weight: bold;
        }

        .navbar-nav .nav-link:hover {
            color: #ffc107;
            /* Couleur de survol pour les liens du menu */
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
            color: #dc3545;
        }

        .list-group-item-action {
            text-align: center;
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
            background-color: #3a3a3a;
            /* Couleur noire du bouton Enregistrer */
            border: none;
        }

        .btn-primary:hover {
            background-color: #ffc107;
        }

        /* Footer */
        body {
            height: 100%;
            /* S'assure que le corps de la page prend toute la hauteur */
            margin: 0;
            /* Supprime les marges par défaut */
        }

        body {
            display: flex;
            flex-direction: column;
            /* Aligne le contenu en colonne */
        }

        .container {
            flex: 1;
            /* Permet au conteneur de s'étendre pour occuper l'espace disponible */
        }

        footer {
            background-color: #000;
            /* Couleur de fond du footer */
            color: white;
            /* Couleur du texte */
            width: 100%;
            /* Assure que le footer prend toute la largeur */
            padding: 20px 0;
            /* Ajuste le padding si nécessaire */
        }

        footer {
            background-color: #020202;
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
    </style>
</head>

<body>

    </head>

    <body>
        <!-- Header section -->
        <header>
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="#"><img src="zeduc space.png" alt="Logo" width="80"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Menu</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                    </ul>
                </div>
            </nav>
        </header>
    </body>

    <!-- Main content -->
    <div class="container">
        <div class="row">

            <!-- Sidebar -->
            <div class="col-md-3">
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action"
                        onclick="showSection('profileSection')">Profil</a>
                    <a href="#" class="list-group-item list-group-item-action"
                        onclick="showSection('reclamationSection')">Réclamation</a>
                    <a href="#" class="list-group-item list-group-item-action"
                        onclick="showSection('historiqueSection')">Historique des commandes</a>
                    <a href="#" class="list-group-item list-group-item-action"
                        onclick="showSection('parrainageSection')">Parrainage</a>
                    <a href="#" class="list-group-item list-group-item-action"
                        onclick="showSection('aideSection')">Aide</a> <!-- New Help Link -->
                    <a href="#" class="list-group-item list-group-item-action text-danger">Logout</a>
                </div>
            </div>

            <!-- Profile Info and Sections -->
            <div class="col-md-9">

                <!-- Profil Section -->
                <div id="profileSection" class="content-section">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h4 class="mb-0">Information de Profil</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4 text-center">
                                    <img src="profile.png" class="rounded-circle mb-3" alt="Profile Image"
                                        width="120">
                                    <h5>Tessa Axel</h5>
                                    <p class="text-muted">Étudiant</p>
                                </div>
                                <div class="col-md-8">
                                    <form>
                                        <div class="row mb-3">
                                            <label class="col-sm-4 col-form-label">Nom Complet</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" value="TESSA Axel">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-4 col-form-label">Âge</label>
                                            <div class="col-sm-8">
                                                <input type="number" class="form-control" value="14">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-4 col-form-label">Solde de parrainage</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" value="7000F">
                                                <button class="btn btn-outline-secondary mt-2"
                                                    type="button">Refresh</button>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-4 col-form-label">Téléphone</label>
                                            <div class="col-sm-8">
                                                <input type="tel" class="form-control" value="+237700000000">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-4 col-form-label">Email</label>
                                            <div class="col-sm-8">
                                                <input type="email" class="form-control" value="ralph@test.com">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-4 col-form-label">Pays</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" value="BanzoBaile">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-4 col-form-label">Ville</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" value="Douala">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-4 col-form-label">Adresse complète</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" value="Yansoki, Douala">
                                            </div>
                                        </div>
                                        <div class="text-end">
                                            <button type="submit" class="btn btn-primary">Enregistrer</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Réclamation Section -->
                <div id="reclamationSection" class="content-section" style="display:none;">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h4 class="mb-0">Réclamation</h4>
                        </div>
                        <div class="card-body">
                            <!-- Reclamation Content -->
                            <div class="reclamation-item">
                                <div class="d-flex">
                                    <img src="user.webp" alt="User Image" width="50">
                                    <div class="ms-3">
                                        <h6>Prix trop élevés</h6>
                                        <p>Je trouve que les prix sont un peu trop élevés.</p>
                                    </div>
                                </div>
                                <hr>
                            </div>
                            <div class="reclamation-item">
                                <div class="d-flex">
                                    <img src="user.webp" alt="User Image" width="50">
                                    <div class="ms-3">
                                        <h6>Service lent</h6>
                                        <p>Le service était vraiment trop lent.</p>
                                    </div>
                                </div>
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Historique des commandes Section -->
                <div id="historiqueSection" class="content-section" style="display:none;">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h4 class="mb-0">Historique des commandes</h4>
                        </div>
                        <div class="card-body">
                            <!-- Historique Content -->
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Product Name</th>
                                        <th>Unit Price (FCFA)</th>
                                        <th>Quantity</th>
                                        <th>Total</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><img src="banana.jpeg" alt="Banane Maison" width="50"></td>
                                        <td>Banane Malaxée</td>
                                        <td>2500</td>
                                        <td>1</td>
                                        <td>2500</td>
                                        <td>11/10/2024</td>
                                    </tr>
                                    <tr>
                                        <td><img src="poulet.jpeg" alt="Rôti de Poulet" width="50"></td>
                                        <td>Rôti de Poulet</td>
                                        <td>3000</td>
                                        <td>2</td>
                                        <td>6000</td>
                                        <td>13/11/2024</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Parrainage Section -->
                <div class="parrainage-section">
                    <div id="parrainageSection" class="content-section" style="display:none;">
                        <h3>Programme de Fidélité et Parrainage</h3>

                        <div class="card mb-4">
                            <div class="card-header">
                                <h4>Points de Fidélité</h4>
                            </div>
                            <div class="card-body">
                                <p>Vous avez actuellement <strong id="loyaltyPoints">150</strong> points de fidélité.
                                </p>
                                <p>Utilisez vos points pour bénéficier de remises sur vos prochaines commandes.</p>
                            </div>
                        </div>

                        <div class="card mb-4">
                            <div class="card-header">
                                <h4>Votre Code de Parrainage</h4>
                            </div>
                            <div class="card-body">
                                <p>Votre code de parrainage unique est : <strong id="referralCode">ABC123</strong></p>
                                <p>Partagez ce code avec d'autres étudiants. Chaque fois qu'ils l'utilisent pour
                                    commander, vous accumulez des points de fidélité supplémentaires.</p>
                                <button class="btn btn-primary" onclick="copyReferralCode()">Copier le Code</button>
                            </div>
                        </div>

                        <div class="card mb-4">
                            <div class="card-header">
                                <h4>Comment ça marche ?</h4>
                            </div>
                            <div class="card-body">
                                <ol>
                                    <li>Partagez votre code de parrainage avec vos amis.</li>
                                    <li>Lorsqu'un ami utilise votre code pour passer une commande, vous accumulez des
                                        points de fidélité.</li>
                                    <li>Utilisez vos points pour obtenir des remises sur vos futures commandes.</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Aide Section -->
                <div id="aideSection" class="content-section" style="display:none;">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h4 class="mb-0">Aide</h4>
                        </div>
                        <div class="card-body">
                            <h5>Bienvenue dans la section d'aide</h5>
                            <h6>1. Comment réinitialiser mon mot de passe?</h6>
                            <p>Pour réinitialiser votre mot de passe, allez sur la page de connexion et cliquez sur "Mot
                                de passe oublié?". Suivez les instructions qui vous seront envoyées par email.</p>

                            <h6>2. Comment contacter le support client?</h6>
                            <p>Vous pouvez contacter notre support client via le formulaire de contact sur notre site ou
                                par email à support@zeducspace.com.</p>

                            <h6>3. Où puis-je trouver mes commandes passées?</h6>
                            <p>Vous pouvez consulter l'historique de vos commandes dans la section "Historique des
                                commandes" de votre profil.</p>

                            <h6>4.Quels sont vos horaires d'ouverture ? </h6>
                            <p> Nous sommes ouverts du lundi au dimanche, de 11h00 à 22h00. </p>

                            <h6>5.Puis-je réserver une table en ligne ? </h6>
                            <p> Oui, vous pouvez réserver une table en ligne en utilisant notre système de réservation
                                sur la page d'accueil. </p>

                            <h6>6.Proposez-vous des plats à emporter ? </h6>
                            <p> Oui, tous nos plats sont disponibles à emporter. Vous pouvez passer votre commande par
                                téléphone ou directement sur notre site </p>
                        </div>
                        <h2>Contact</h2>
                        <div class="contact">
                            <p>Si vous avez d'autres questions, vous pouvez nous contacter par :</p>
                            <p>Email : <a href="mailto:info@restaurantxyz.com">info@restaurantzeduc@space.com</a></p>
                            <p>Téléphone : <a href="tel:+33123456789">+237 654 987 321</a></p>
                            <p>Adresse : Rue Joss Yansoki, Douala, Cameroun</p>

                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer class="text-white py-4"
            style="background-color: #000; width: 100%; position: relative; bottom: 0; left: 0;">
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

        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

        <!-- Custom JavaScript for switching sections -->
        <script>
            function showSection(sectionId) {
                // Hide all sections
                document.querySelectorAll('.content-section').forEach(function(section) {
                    section.style.display = 'none';
                });
                // Show the clicked section
                document.getElementById(sectionId).style.display = 'block';
            }
            // Fonction pour copier le code de parrainage dans le presse-papiers
            function copyReferralCode() {
                const code = document.getElementById('referralCode').innerText;
                navigator.clipboard.writeText(code).then(() => {
                    alert('Code de parrainage copié dans le presse-papiers : ' + code);
                }).catch(err => {
                    console.error('Erreur lors de la copie : ', err);
                });
            }
        </script>

</body>

</html>
