<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style2.css" rel="stylesheet" type="text/css">

    <link href="lightbox.min.css" rel="stylesheet" type="text/css">
    <title>Document</title>
</head>

<body>
    <header>
   <?php
include "menu.php";
?>     
    </header>


    



                <h1>Galerie travaux</h1></br></br>

                
    <div class="galerie">

<figure id="photo1">
    <a href="image/banniere.jpg" data-lightbox="galerie" data-title="Mont des Arts">
        <img src="image/banniere.jpg" alt="Mont des Arts" width="480" />
    </a>
    <figcaption>Mont des Arts</figcaption>
</figure>


<figure id="photo2">

    <a href="image/projetprefo.png" data-lightbox="galerie" data-title="Atomium">
        <img src="image/projetprefo.png" alt="Atomium" width="480" />
    </a>
    <figcaption>Atomium</figcaption>
</figure>

</div>
                
</body>
</html>