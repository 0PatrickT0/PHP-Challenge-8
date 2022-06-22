<html>

<head>
    <title>Page1</title>
    <meta charset="UTF-8">
    <style>
        form {
            /* Uniquement centrer le formulaire sur la page */
            margin: 0 auto;
            width: 400px;
            /* Encadré pour voir les limites du formulaire */
            padding: 1em;
            border: 1px solid #CCC;
            border-radius: 1em;
        }

        form div+div {
            margin-top: 1em;
        }

        label {
            /* Pour être sûrs que toutes les étiquettes ont même taille et sont correctement alignées */
            display: inline-block;
            width: 90px;
            text-align: right;
        }

        input,
        textarea {
            /* Pour s'assurer que tous les champs texte ont la même police.
     Par défaut, les textarea ont une police monospace */
            font: 1em sans-serif;

            /* Pour que tous les champs texte aient la même dimension */
            width: 300px;
            box-sizing: border-box;

            /* Pour harmoniser le look & feel des bordures des champs texte */
            border: 1px solid #999;
        }

        input:focus,
        textarea:focus {
            /* Pour souligner légèrement les éléments actifs */
            border-color: #000;
        }

        textarea {
            /* Pour aligner les champs texte multi‑ligne avec leur étiquette */
            vertical-align: top;

            /* Pour donner assez de place pour écrire du texte */
            height: 5em;
        }

        .button {
            /* Pour placer le bouton à la même position que les champs texte */
            padding-left: 90px;
            /* même taille que les étiquettes */
        }

        button {
            /* Cette marge supplémentaire représente grosso modo le même espace que celui
     entre les étiquettes et les champs texte */
            margin-left: .5em;
        }
    </style>
</head>

<body>
    <form action="thanks.php" method="post">
        <div>
            <label for="lastname">Nom :</label>
            <input type="text" id="lastname" name="user_lastname">
        </div>
        <div>
            <label for="surname">Prenom :</label>
            <input type="text" id="surname" name="user_surname">
        </div>
        <div>
            <label for="mail">E-mail:</label>
            <input type="email" id="mail" name="user_mail">
        </div>
        <div>
            <label for="phone">Téléphone:</label>
            <input type="phone" id="phone" name="user_phone">
        </div>
        <div>
            <label for="subject">Objet:</label>
            <select id="subject" name="user_subject" required>
                <option value="Subject 1">Objet 1</option>
                <option value="Subject 2">Objet 2</option>
                <option value="Subject 3">Objet 3</option>
                <option value="Subject 4">Objet 4</option>
                <option value="Subject 5">Objet 5</option>
            </select>
        </div>
        <div>
            <label for="msg">Message :</label>
            <textarea id="msg" name="user_message"></textarea>
        </div>
        <div class="button">
            <button type="submit" name="submit">Envoyer le message</button>
        </div>
    </form>
</body>

</html>