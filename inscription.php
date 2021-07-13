
<!doctype html>

<html lang="fr">

    <head>
        <meta charset="utf-8">
        <title>Life Unity - Inscription</title>
        <link rel="stylesheet" href="inscription.css">
        <meta name="Life Unity" content="Inscription">

        <style>
            input
            {
                width: 100%;
                text-align: center;
                color: #8FC5C6;
                border: none;
                border-bottom: #00BABF;
                outline: none;
                height: 35px;
                border-width: 50%;
                font-size: 18px;
            }

            .save
            {
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 18px;
                margin: 8px 0;
                cursor: pointer;
                border-radius: 100px;
                width: 150%;
                padding: 13px 19px;
                border: 1px solid #ccc;
                box-sizing: border-box;
                border-color :#00BABF;
                background-color: #00BABF;
                color: rgb(255, 254, 254);
            }

            .save:hover 
            {
                background-color: #058f94;
            }
        </style>

    </head>

    <body>

        <div class="logo">
            <div class="bannierelogoI">
                <img src="Logo_texte.png" alt="Logo">
            </div>
        </div>

        <div class="titreI">
            <h1>Créer votre<br> compte</h1>
        </div>

        <div class="subI">
            <form action="formulaire.php" method="post">
                <div class="nameI">
                    <label for="name"></label>
                    <input type="text" name="nomprenom" placeholder="Nom & Prénom" required>
                    
                </div>

                <div class="mailI">
                    <label for="email"></label>
                     <input type="text" name="email" placeholder="Adresse email" required>
                    
                </div>

                <div class="mdpI">
                    <label for="passeword"></label>
                    <input type="password" name="mdp" placeholder="Mot de passe"
                        minlength="8" required>
                </div>

                <div class="cityI">
                    <label for="ville"></label>
                    <input type="text" name="ville" placeholder="Ville" required>
                </div>

                <div class="schoolI">
                    <label for="université"></label>
                    <input type="text" name="ecole" placeholder="Ecole / Université" required>
                </div>

                
                <input type='submit' value='inscription'>
                
            </form>
        </div>
        <?php include ("footer.php");?>
    </body>