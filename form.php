<?php require_once 'head.php'?>
<link rel="stylesheet" href="assets/form.css">
<?php require_once 'header.php' ?>

<!-- Attention ici c'est la partie de page du formulaire -->
<section class="sectionForm">
    <div id="text-form">
        <h2>Ne sois pas timide</h2>
        <p class="form">N'hésites pas à nous contacter.<br>
            Nous sommes toujours ouvert à la discussion ou autres remarques.<br>
            N'oublie pas tu peux nous suivre sur les réseaux.</p>
    </div>
    <form action="reponse.php" method="POST">
        <h2>Formulaire de contact</h2>
        <div>
            <input type="text" name="nom" required placeholder="Vos Noms et Prénoms">
        </div>
        <div>
            <input type="email" name="mail" required placeholder="Mail">
        </div>
        <div>
            <input type="text" name="sujet" placeholder="Le sujet ">
        </div>
        <div>
            <textarea id="msg" name="message" rows="10" cols="30" placeholder="Votre message ici" required></textarea>
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
            <button class="btnForm" type="submit">ENVOYER</button>
        </div>
    </form>
<script>
    function bubble(){
        const section = document.querySelector('section')
        const createEl = document.createElement('span')
        var size = Math.random() * 60;
        createEl.style.width = 20 + size + 'px'; /* Largeur de chaque bulle = 20 + un chiffre aleatoire entre 0 et 1 multiplié par 60 , le tout en px */
        createEl.style.height = 20 + size + 'px';/* hauteur de chaque bulle = 20 + un chiffre aleatoire entre 0 et 1 multiplié par 60 , le tout en px */
        createEl.style.left = Math.random() * innerWidth + "px"; /* chaque bulle a une position aleatoire par rapport a la gauche, (innerwidth renvoie la largeur d'affichage de la fenetre de navigation) */
        section.appendChild(createEl);
        setTimeout(() => { /* fonction qui permet d'ajouter un delais avant l'execution d'une fonction */
            createEl.remove() /* surpprime les bulles  */
        },4000) /* au bout de 4s (4000ms) */
    }
    setInterval(bubble,50) /* fonction qui permet de repeter indefiniment une fonction avec un delais entre chaque repetition */
</script>
</section>

        </main>
<?php
    require_once 'footer.php';
?>