<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <script src="script.js" defer></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&display=swap" rel="stylesheet">
    <title>Aide</title>
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
            text-align: center;
        }

        .help-section {
            background: rgba(255, 255, 255, 0.6);
            /* Fond blanc */
            border-radius: 8px;
            /* Coins arrondis */
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            /* Ombre légère */
            padding: 20px;
            /* Espacement interne */
        }

        .accordion-button {
            background-color: black;
            /* Couleur du bouton */
            color: white;
            /* Couleur du texte du bouton */
        }

        .accordion-button:not(.collapsed) {
            background-color: gray;
            /* Couleur du bouton quand il est ouvert */
        }

        .list-group-item {
            background-color: #e9ecef;
            /* Fond des éléments de liste */
        }

        .question-section {
            background-image: url('../../assets/questionzone.png');
            /*URL de notre image */
            background-size: cover;
            background-position: center;
            padding: 20px;
            border-radius: 10px;
            color: white;
            max-width: 400px;
            height: 300px;
            margin: auto;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.5);
            align-items: center;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            color: black;
        }

        input,
        textarea {
            width: 70%;
            height: 130px;
            padding: 10px;
            border-radius: 5px;
            color: white;
            border: none;
            background-color: rgba(0, 0, 0, 0.5);
        }

        button {
            background-color: black;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 30%;
        }

        button:hover {
            background-color: #0056b3;
        }

        #questions-display {
            margin-top: 20px;
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

        .back {
            background-color: black;
            color: #cfbd97;
            border: none;
            border-radius: 10px;
            width: 10%;
        }
    </style>
</head>

<body>
    <section>
        <header class="header">
            <img id="logo" src="../../assets/logoZeduc.png" alt="Logo">
            <div class="nav-links">
                <a href="http://127.0.0.1:8000/">HOME</a>
            </div>
        </header>
    </section>
    <section>
        <div class="container help-section mt-5">
            <h1 style="text-align: center; font-size: 40px; font-weight: bold; font-family: Dancing script, cursive;"
                class="text-center mb-4">Aide</h1>
            <p class="text-center">Bienvenue dans notre <span style="font-weight: bold;">section d'aide</span>. Voici
                quelques questions fréquemment posées :</p>

            <div class="accordion" id="faqAccordion">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Question 1: Comment créer un compte ?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Pour créer un compte, cliquez sur "S'inscrire" sur la page d'accueil et suivez les
                            instructions. Entrez les informations telles qu'elles vous sont demandées. Si vous avez déjà
                            un compte et que vous entrez tout de même les informations similaires à celui-ci vous serez
                            signalé(e) de l'existence de votre compte et l'opération d'inscription ne pourra se faire.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Question 2: Comment réinitialiser mon mot de passe ?
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Cliquez sur "Forgot Password?" sur la page de connexion et vous recevrez par mail les
                            instructions envoyées par email.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Question 3: Comment se connecter à son compte?
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Pour se connecter à son compte, cliquez sur "Log in" ou "Se connecter" qui sont des boutons
                            se trouvant sur la page d'accueil et la page d'inscription. Entrez les informations telles
                            qu'elles vous sont demandées. Puis validez vos informations et vous aurez accès à votre
                            compte.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Question 4: Comment fonctionnent les points de fidélité ?
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            <span style="font-weight: bold;"> Les points de fidélité</span> sont des bonus qui vous sont
                            accordés pour plusieurs actions que vous effectuerez envers le restaurant ou sur le site du
                            restaurant.<BR>-Lorsqu'un compte client utilise votre code de parrainage, soit lorsque vous
                            acquérissez des filleuls ou filleules, et qu'il passe sa première commande, vous gagnez un
                            point de fidélité s'il dépense 1000FCFA et ainsi de suite. <br>-Lorsque vous jouez et gagnez
                            à des jeux. <br>-Lorsque vous COMMANDEZ. Et oui! ZEDUC SP@CE est généreux. 1000FCFA dépensé
                            correspond à un point de fidélité acquis et à partir de 15 points de fidélité, vous pouvez
                            avoir un bon de 1000FCFA de reduction sur une commande.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFive">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Question 5: Qui sont les parrains et comment fonctionne le parrainage?
                        </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Un parrain est tout simplement un compte client dont le code de parrainage est utilisé par
                            un ou plusieurs autres comptes clients outre que lui. En fait, avoir un filleul ou une
                            filleule prouve à ZEDUC qu'un parrain fait la publicité du restaurant à son entourage d'où
                            le gain de points de fidélité à la première commande d'un filleul ou d'une filleule. En fait
                            ce qui se passe est que si X est un client de ZEDUC et qu'il parle du restaurant à son ami
                            Y, X doit tout simplement lui dire de préciser son code de parrainage lors de sa première
                            commande pour préciser qu'il(Y) a été invité par X. Ainsi, X devient parrain/marraine de Y
                            et suite à cela, X gagne des points de fidélité rien qu'à la première commande de Y.
                            <br>Ainsi, on ne peut qu'avoir un seul parrain ou une seule marraine, mais plusieurs
                            filleuls/filleules.
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section>
        <div>
            <h1 style=" font-size: 50px; font-family: dancing script,cursive;" class="titre-section">Une question ?
                Ajoute la !</h1>
        </div>
        <div>
            <div class="question-section">
                <h2 style="color: black; font-family: Dancing Script, cursive;"">Feel free!</h2>
                <form id="question-form">
                    <div class="form-group">
                        <label for="question">Question :</label>
                        <textarea id="question" rows="4" required></textarea>
                    </div>
                    <button type="submit">Envoyer</button>
                </form>
                <div id="questions-display"></div>
            </div>
        </div>
    </section>
    <section>
        <div>
            <a href=""><button class="back">Retourner</button></a>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const form = document.getElementById("question-form");
            const questionsDisplay = document.getElementById("questions-display");

            form.addEventListener("submit", (event) => {
                event.preventDefault(); // Empêche le rechargement de la page

                // Récupère la valeur de la question
                const questionInput = document.getElementById("question");
                const questionText = questionInput.value.trim();

                if (questionText) {
                    // Réinitialise le champ de texte
                    questionInput.value = "";
                }
            });
        });
    </script>
</body>

</html>
