<?php
require_once 'header.php';
?>
<section class="main fondFormulaire">   
    <form action="reponse.php" method="POST">
        <div>
            <label for="nom" class="titreInput">Nom :</label>
            <input type="text"  name="nom" required>
        </div>
        <div>
            <label for="prenom"class="titreInput">Prénom :</label>
            <input type="text" name="prenom"required>
        </div>
        <div>
            <label for="mail"class="titreInput">e-mail :</label>
            <input type="email" name="mail" required>
        </div>
        <div>
            <label for="sujet"class="titreInput">Sujet :</label>
            <input type="text" name="sujet">
        </div>
        <div>
            <label for="msg"class="titreInput">Message :</label>
            <textarea id="msg" name="message" rows="10" cols="30" placeholder= "Votre message ici"required></textarea>
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
            <button type="submit">Soumettre</button>
        </div>
    </form>
</section>
<?php
    require_once 'footer.php';
?>