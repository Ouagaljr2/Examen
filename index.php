<!doctype html>
<html>
<head>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
    <div>
        <form action="form.php" method="post" >

            <div>
                <label for="username">Nom d'utilisateur</label>
                <input type="text" id="username" name="username" placeholder="Votre nom">
            </div>

            <div>
                <label for="content"></label>
                <textarea name="content" id="content"> votre commentaire</textarea>
            </div>

            <button type= "submit" > Valider </button>
        </form>

        <button id="voir"> Lire les commentaire </button>
        <div id="comments"></div>
    </div>


    <script src="script.js"></script>

</body>
</html>