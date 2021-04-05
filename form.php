  
<!doctype html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Formulaire</title>
    </head>
    <body>
        <form method="post" action="./thanks.php">
            <fieldset>
                <label>Nom : <input type="text" placeholder="nom" name="nom" id="nom"></label></br>
                <label>Prénom : <input type="text" placeholder="prénom" name="prenom" id="prenom"></label></br>
                <label>Email: <input type="email" placeholer="email" name="email" id="email"></label><br/>
                <label>Téléphone: <input type="tel" placeholer="telephone" name="tel" id="tel"></label><br/>
                <label> Sujet : <select name="sujet" id="sujet">
                        <option> L'oeuf ou la poule </option>
                        <option> Sabordage </option>
                        <option> Y'a plus d'eau chez JC </option>
                        <option> Arthur </option></label> <br/>
                <label>Message: <textarea placeholder="Ton message" name="message" id="message"></textarea></label><br/>
                <input type="submit">
            </fieldset>
        </form>

    </body>
</html>

<?php