<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./assets/css/includes.css" rel="stylesheet">
    <title>Connexion</title>
</head>
<?php include('assets/includes/navbar.php'); ?>
<body>

    <div class="container">

        <div class="titreconnexion">
            <h1>Connexion</h1>
        </div>


        <form>
            <div class="connexion">


                <div class="connexiongauche">
                   <div class="infoco"> Login : </div>
                   <div class="infoco password"> Password : </div>
                </div>


                <div class="connexiondroite">
                    <input type="text" placeholder="Votre login">
                    <input type="password" placeholder="Votre Password">
                </div>



                <input type="submit" value="Connexion" class="submitboutonco">

            </div>
        </form>






    </div>
    <?php include('assets/includes/footer.php'); ?>
</body>

</html>