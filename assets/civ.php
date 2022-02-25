<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/inscription.css">
    <title>Document</title>
</head>
<body>
    <div class="video">  <video src="./video/CIVILIZATION VI - E3 2016 Walkthrough.mp4" muted autoplay loop></video>
    <div class="inscription"><h1 align="center">Inscription</h1>
        <p align="center">Serveur privé Civilisation</p>
        <form action="/inscription"methode="post">
        <br>
        <br>
        <label for="username" align="center">Pseudo:</label>
        <input type="text" id="pseudo" name="pseudo" placeholder="pseudo" required>
        <br>
        <br>
        <br>
        <label for="email">Entrez votre e-mail:</label>
        <input type="email" id="email" name="email" placeholder="jenjacque@gromail.com" required>
        <br>
        <br>
        <br>
        <div>
        <label for="civilisation">Votre civilisation:</label>
        <select name="civilisation" id="civilisation" required>
        <option value="france" >France</option>
        <option value="allemagne" >Allemagne</option>
        <option value="grande-bretagne" >Grande bretagne</option>
        <option value="italie" >Italie</option>
        <option value="Japon" >Japon</option>
        <option value="chine" >Chine</option>
        <option value="turquie" >Turquie</option>
        <option value="usa" >Usa</option>
        <option value="canada" >Canada</option>
        <option value="russie" >Russie</option>
        </select>
            <button type="submit">Envoyer mon inscription</button>
        </form>
        </div>
        </div>
        
 </div>
</video></body>
</html>