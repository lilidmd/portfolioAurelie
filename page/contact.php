<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="menu.css" type="text/css" rel="stylesheet" />
    <link href="style.css" rel="stylesheet" type="text/css">



</head>

<body>

    <header>
        <?php
        include "menu.php";
        ?>


    </header>

    <main>
        <div class="view_port">
            <div class="polling_message">

            </div>
            <div class="cylon_eye"></div>
        </div></br></br>
        <span class="contactus">
            <h1>contact us</h1>
            <!-- <img src="image/dmdlili.png" />-->

            <form id="form1" name="form1" method="post" action="" class="contact">
                <div><label for="frm1_nom">NOM : </label><input name="nom" type="text" id="frm1_nom" size="50" /></div>
                <div><label for="frm1_prenom">PRENOM : </label><input name="prenom" type="text" id="frm1_prenom" size="50" rows="5"></div>
                <div><label for="frm1_email">E-MAIL : </label><input name="email" type="email" id="frm1_email" size="50" rows="5"></div>
                <div><label for="frm1_message">COMMENTAIRES : </label><textarea name="message" id="frm1_message" cols="40" rows="5"></textarea></div>
                <div><input type="submit" id="frm1_submit" value="Envoyer votre message" /></div>
        </span>
        </form>
    </main>

</body>

</html>