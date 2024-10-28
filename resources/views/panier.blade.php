<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panier</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="panier.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&display=swap" rel="stylesheet">
    <style>
        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            /* pour que l'en-tête reste au-dessus du contenu */
            background-color: #000;
            /* ou toute autre couleur */
        }

        body {
            padding-top: 100px;
            font-family: Arial, sans-serif;
        }

        table {
            width: 100%;
            margin-bottom: 50px;
            border-collapse: collapse;
        }

        table th,
        table td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #cfbd97;
        }

        h1 {
            text-align: center;
            margin: 20px 0;
        }

        .payment-section {
            display: flex;
            justify-content: space-between;
            padding: 20px;
        }

        .payment-method,
        .cart-subtotal {
            background-color: #cfbd97;
            padding: 20px;
            border-radius: 10px;
            width: 45%;
        }

        .payment-method h2,
        .cart-subtotal h2 {
            text-align: center;
        }

        .payment-method select,
        .payment-method input {
            display: block;
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #cfbd97;
            border-radius: 5px;
        }

        .btn-payment {
            background-color: #000;
            color: black;
            padding: 10px;
            width: 100%;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn-payment:hover {
            background-color: #000;
        }

        .cart-subtotal p {
            font-size: 18px;
            margin: 10px 0;
        }

        footer {
            text-align: center;
            padding: 20px;
            background-color: #000;
            color: white;
        }

        footer a {
            color: white;
            text-decoration: none;
        }
    </style>
    <style>
        /* Style pour le header */
        header {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Style pour les sections */
        section {
            margin-top: 30px;
        }

        /* Style pour les tables */
        .table {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Style pour les boutons */
        .btn-dark {
            background-color: #333;
            border: none;
            transition: background-color 0.3s, transform 0.2s;
        }

        .btn-dark:hover {
            background-color: #555;
            transform: translateY(-2px);
        }

        /* Style pour les cartes de paiement et de sous-total */
        .payment-method,
        .cart-subtotal {
            background-color: #cfbd97;
            /* Utilisation de la couleur cfbd97 */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Style pour le footer */
        footer {
            background-color: #333;
            color: #fff;
            padding: 20px 0;
        }

        footer a {
            color: #fff;
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
        }

        /* Style pour les grands titres */
        h2,
        h4 {
            font-family: 'Dancing Script', cursive;
        }
    </style>
</head>

<body>
    <!-- Header Section -->
    <header class="bg-black text-white p-1">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="logo">
                <img src="assets/Zeduc.jpg" alt="logo" class="img-fluid rounded-circle" width="50">
            </div>
            <nav class="navbar navbar-expand-lg navbar-dark bg-black">
                <div class="container">
                    <a class="navbar-brand" href="#">
                        <img src="assets/Zeduc.jpg" alt="Logo" height="50">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ml-auto text-white">
                            <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">About</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <!-- Panier Section -->
    <section class="container mt-5">
        <h2 class="text-center">Panier</h2>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>Product</th>
                        <th>Product Name</th>
                        <th>Unit Price (FCFA)</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="cart-items">
                </tbody>
            </table>
        </div>
    </section>

    <!-- Payment Section -->
    <section class="container d-flex justify-content-between mt-5">
        <div class="payment-method bg-tan p-3 rounded">
            <h4 class="text-center">Mode De Paiement</h4>
            <form>
                <div class="mb-3">
                    <select class="form-select" aria-label="Mode de paiement">
                        <option selected>Choisissez votre moyen de paiement</option>
                        <option value="1">Carte Bancaire</option>
                        <option value="2">Orange Money</option>
                        <option value="3">MTN Mobile Money</option>
                    </select>
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" placeholder="Card number">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" placeholder="CVC/Date">
                </div>
                <button class="btn btn-dark w-100">Utilisez vos points de fidelite</button>
            </form>
        </div>
        <div class="cart-subtotal bg-tan p-3 rounded">
            <h4 class="text-center">CART SUBTOTAL</h4>
            <p>Prix: <span id="subtotal">0</span></p>
            <p>Livraison: <span id="livraison">500</span></p>
            <p>Réduction: <span id="reduction">1000</span></p>
            <p>Total: <span id="total-final">0</span></p>
            <button class="btn btn-dark w-100">Procéder au Paiement</button>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white mt-5 p-4 text-center">
        <div class="row">
            <div class="col">
                <h5>Company</h5>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-white">About us</a></li>
                    <li><a href="#" class="text-white">Team</a></li>
                    <li><a href="#" class="text-white">Careers</a></li>
                </ul>
            </div>
            <div class="col">
                <h5>Contact</h5>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-white">Help & Support</a></li>
                    <li><a href="#" class="text-white">Partner with us</a></li>
                </ul>
            </div>
            <div class="col">
                <h5>Legal</h5>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-white">Terms & Conditions</a></li>
                    <li><a href="#" class="text-white">Refund & Cancellation</a></li>
                </ul>
            </div>
        </div>
        <div class="mt-4">
            <p>© Zeduc Sp@ce, 2024</p>
        </div>
    </footer>

    <!-- Bootstrap JS and Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/panier.js"></script>
</body>

</html>
