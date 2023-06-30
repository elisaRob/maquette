<!-- Attention ici c'est la partie de page du formulaire -->
<?php require_once 'head.php'?>
<link rel="stylesheet" href="assets/style.css">
<?php require_once 'header.php' ?>

<section class="section-form">
    <div id="text-form">
        <h2>Ne sois pas timide</h2>
        <p class="form"><b><br>N'hésites pas à nous contacter.<b><br><br> 
        <b>Nous sommes toujours ouvert à la discussion ou autres remarques.
        N'oublie pas tu peux nous suivre sur les réseaux.<b></p>
    </div>
    <form action="reponse.php" method="POST">
    <h2>Formulaire de contact</h2> 
        <div>
            <!-- <label for="nom" class="titreInput">Nom :</label> -->
            <input type="text"  name="nom" required placeholder= "Vos Noms et Prénoms">
        </div>
        <!-- <div>
            <label for="prenom"class="titreInput">Prénom :</label>
            <input type="text" name="prenom"required>
        </div> -->
        <div>
            <!-- <label for="mail"class="titreInput">e-mail :</label> -->
            <input type="email" name="mail" required placeholder= "Mail">
        </div>
        <div>
            <!-- <label for="sujet"class="titreInput">Sujet :</label> -->
            <input type="text" name="sujet" placeholder= "Le sujet ">
        </div>
        <div>
            <!-- <label for="msg"class="titreInput">Message :</label> -->
            <textarea id="msg" name="message" rows="8" cols="30" placeholder= "Votre message ici"required></textarea>
        </div>
        <div>
            
                <input type="checkbox" name="check" id="">
                <label for="check">Veuillez valider les conditions générales</label>
            </div>
            <div>
                <input type="checkbox" name="check" id="">
                <label for="check">En validant ce formulaire, vous acceptez d'être contacté</label>
            </div>
            <div class="soumettre">
                <button class="btnForm" type="submit">Soumettre</button>
            </div>
        </form>
        <h2 class="formTitle">Formulaire de contact <br> <br> <br> </h2>
    <!-- </div> -->
</section>
<?php
    require_once 'footer.php';
?>