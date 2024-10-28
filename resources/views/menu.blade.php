<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Restaurant</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="menu.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&display=swap" rel="stylesheet">
    <style>
        /* Style pour le fond des plats et leurs descriptions */
        .card-body {
            background-color: #cfbd97;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s;
        }

        .card-body:hover {
            transform: scale(1.05);
        }

        /* Classe pour la bordure verte */
        .border-success {
            border: 2px solid green !important;
        }

        /* Style pour le titre du menu */
        .menu-title,
        h2,
        h3 {
            font-family: 'Dancing Script', cursive;
            font-size: 4rem;
            text-align: center;
            margin-top: 100px;
            /* Ajustez cet espace si nécessaire */
            margin-bottom: 10px;
            /* Réduit l'espace entre le titre et le suivant */
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .menu-title img {
            margin-left: 10px;
            /* Espace entre le texte et l'image */
            height: 80px;
            /* Ajustez la taille de l'image selon vos besoins */
        }

        /* Style pour les boutons */
        .btn-primary {
            background-color: #007bff;
            border: none;
            transition: background-color 0.3s, transform 0.2s;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            transform: translateY(-2px);
        }

        nav {
            background-color: #333;
        }

        /* Espacement et alignement */
        .navbar-nav .nav-link {
            margin-right: 15px;
        }

        .card-img-top {
            border-radius: 8px 8px 0 0;
            background-color: #e0e0e0;
            /* Assurez-vous que toutes les images ont le même fond gris */
            object-fit: cover;
            height: 200px;
            /* Ajustez la hauteur selon vos besoins */
        }

        /* Footer styling */
        footer {
            background-color: #000000;
            color: #fff;
            padding: 20px 0;
        }

        footer p {
            margin: 0;
        }
    </style>
</head>

<body>
    <!-- Barre de navigation -->
    <header class="bg-black text-black p-1">
        <nav class="navbar navbar-expand-lg navbar-dark bg-black">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="assets/Zeduc.jpg" alt="Logo" height="70" class="d-inline-block align-top">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto text">
                        <li class="nav-item"><a class="nav-link" href="http://127.0.0.1:8000/">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://127.0.0.1:8000/panier" id="cart-icon">
                                <img id="icon_panier" src="assets/pani.jpeg" alt="Panier" height="30">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Titre du menu avec icône -->
    <div class="menu-title">
        <i class="fas fa-utensils"></i> Menu
        <img src="{{ asset('assets/menu.png') }}" alt="Icone Menu">
    </div>

    <!-- Section menu -->
    <section class="container mt-5">
        <h2 class="text-center text-dark">Nos Plats</h2>
        <div class="row">
            @if (isset($plats) && $plats->isNotEmpty())
                @foreach ($plats as $plat)
                    <div class="col-md-4">
                        <div class="card shadow-sm mb-4">
                            <img src="{{ asset($plat->image) }}" class="card-img-top" alt="{{ $plat->nom_menu }}">
                            <div class="card-body text-center">
                                <h5 class="card-title">{{ $plat->nom_menu }}</h5>
                                <p class="card-text"><strong>{{ $plat->prix }} FCFA</strong></p>
                                <p>{{ $plat->description_menu }}</p>
                                <button class="btn btn-primary btn-block add-to-cart" data-name="{{ $plat->nom_menu }}"
                                    data-price="{{ $plat->prix }}" data-image="{{ $plat->image }}">Ajouter au
                                    panier</button>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <p class="text-center">Aucun plat disponible pour le moment.</p>
            @endif
        </div>

        <!-- Section boissons -->
        <h3 class="text-center mt-5">Nos Boissons</h3>
        <div class="row">
            @if (isset($boissons) && $boissons->isNotEmpty())
                @foreach ($boissons as $boisson)
                    <div class="col-md-3">
                        <div class="card shadow-sm mb-4">
                            <img src="{{ asset($boisson->image) }}" class="card-img-top"
                                alt="{{ $boisson->nom_menu }}">
                            <div class="card-body text-center">
                                <h5 class="card-title">{{ $boisson->nom_menu }}</h5>
                                <p class="card-text"><strong>{{ $boisson->prix }} FCFA</strong></p>
                                <button class="btn btn-primary btn-block add-to-cart"
                                    data-name="{{ $boisson->nom_menu }}" data-price="{{ $boisson->prix }}"
                                    data-image="{{ $boisson->image }}">Ajouter au panier</button>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <p class="text-center">Aucune boisson disponible pour le moment.</p>
            @endif
        </div>
    </section>


    <!-- Footer -->
    <footer class="bg-dark text-white text-center p-3 mt-5">
        <div class="container">
            <p>&copy; 2024 | banish</p>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script>
        // Vérifie si le panier existe déjà dans le localStorage, sinon le crée vide
        let cart = JSON.parse(localStorage.getItem('cart')) || [];

        // JavaScript pour ajouter au panier et ajouter une bordure verte
        document.querySelectorAll('.add-to-cart').forEach(button => {
            button.addEventListener('click', function() {
                // Ajouter au panier
                let itemName = this.getAttribute('data-name');
                let itemPrice = parseInt(this.getAttribute('data-price'));
                let itemImage = this.getAttribute('data-image');

                // Rechercher si l'article est déjà dans le panier
                let existingItem = cart.find(item => item.name === itemName);
                if (existingItem) {
                    existingItem.qty += 1; // Augmenter la quantité si l'article existe
                } else {
                    // Ajouter un nouvel article avec l'image
                    cart.push({
                        name: itemName,
                        price: itemPrice,
                        qty: 1,
                        image: itemImage
                    });
                }

                // Sauvegarder dans le localStorage
                localStorage.setItem('cart', JSON.stringify(cart));

                // Ajouter une bordure verte au conteneur du plat
                this.closest('.card').classList.add('border-success');

                alert(`${itemName} a été ajouté au panier.`);
            });
        });

        // Fonction pour afficher le panier lors du clic sur l'icône panier
        document.getElementById('cart-icon').addEventListener('click', function() {
            window.location.href = "panier.html"; // Rediriger vers la page du panier
        });
        // Charger les éléments du menu depuis le localStorage
        let menuItems = JSON.parse(localStorage.getItem('menuItems')) || [];

        // Fonction pour afficher les éléments du menu
        function displayMenuItems() {
            const menuContainer = document.querySelector('.row');
            menuContainer.innerHTML = ''; // Clear existing items
            menuItems.forEach(item => {
                const menuItem = document.createElement('div');
                menuItem.className = 'col-md-4';
                menuItem.innerHTML = `
            <div class="card shadow-sm mb-4">
                <img src="${item.image}" class="card-img-top" alt="${item.name}">
                <div class="card-body text-center">
                    <h5 class="card-title">${item.name}</h5>
                    <p>${item.description}</p> <!-- Affichage de la description -->
                    <p class="card-text"><strong>${item.price} FCFA</strong></p>
                    <button class="btn btn-primary btn-block add-to-cart" data-name="${item.name}" data-price="${item.price}" data-image="${item.image}">Ajouter au panier</button>
                </div>
            </div>
        `;
                menuContainer.appendChild(menuItem);
            });

            // Attacher les événements après l'ajout des éléments
            attachAddToCartEvents();
        }

        // Fonction pour attacher les événements "Ajouter au panier"
        function attachAddToCartEvents() {
            document.querySelectorAll('.add-to-cart').forEach(button => {
                button.addEventListener('click', function() {
                    // Ajouter au panier
                    let itemName = this.getAttribute('data-name');
                    let itemPrice = parseInt(this.getAttribute('data-price'));
                    let itemImage = this.getAttribute('data-image');

                    // Rechercher si l'article est déjà dans le panier
                    let existingItem = cart.find(item => item.name === itemName);
                    if (existingItem) {
                        existingItem.qty += 1; // Augmenter la quantité si l'article existe
                    } else {
                        // Ajouter un nouvel article avec l'image
                        cart.push({
                            name: itemName,
                            price: itemPrice,
                            qty: 1,
                            image: itemImage
                        });
                    }

                    // Sauvegarder dans le localStorage
                    localStorage.setItem('cart', JSON.stringify(cart));

                    // Ajouter une bordure verte au conteneur du plat
                    this.closest('.card').classList.add('border-success');

                    alert(`${itemName} a été ajouté au panier.`);
                });
            });
        }

        // Afficher les éléments du menu au chargement de la page
        displayMenuItems();
    </script>
</body>

</html>
