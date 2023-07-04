<?php require_once 'head.php'?>
<link rel="stylesheet" href="assets/form.css">
<?php require_once 'header.php' ?>

<!-- Attention ici c'est la partie de page du formulaire -->
<main>
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
            <input type="text" name="nom" id="nom" required placeholder="Vos Noms et Prénoms">
            <label for="nom"></label>
        </div>
        <div>
            <input type="email" name="mail" id="mail" required placeholder="Mail">
            <label for="mail"></label>
        </div>
        <div>
            <input type="text" name="sujet" id="sujet" placeholder="Le sujet ">
            <label for="sujet"></label>
        </div>
        <div>
            <textarea id="msg" name="msg" rows="10" cols="30" placeholder="Votre message ici" required></textarea>
            <label for="msg"></label>
        </div>
        <div>
            <input type="checkbox" name="check1" id="check1">
            <label for="check1">Veuillez valider les conditions générales</label>
        </div>
        <div>
            <input type="checkbox" name="check2" id="check2">
            <label for="check2">En validant ce formulaire, vous acceptez d'être contacté</label>
        </div>
        <div class="soumettre">
            <button class="btnForm" type="submit">ENVOYER</button>
        </div>
    </form>
<script>
    function verifWidth(){
        if(window.innerWidth >= 1024 && window.location.href.endsWith("form.php")){
    function bubble(){
        const section = document.querySelector('.sectionForm')
        const createEl = document.createElement('span')
        var size = Math.random() * 60;

        createEl.style.width = 20 + size + 'px'; /* Largeur de chaque bulle = 20 + un chiffre aleatoire entre 0 et 1 multiplié par 60 , le tout en px */
        createEl.style.height = 20 + size + 'px';/* hauteur de chaque bulle = 20 + un chiffre aleatoire entre 0 et 1 multiplié par 60 , le tout en px */
        createEl.style.left = Math.random() * section.offsetWidth + "px"; /* chaque bulle a une position aleatoire par rapport a la gauche, (innerwidth remplacé par offsetWidht , Cela assure que les bulles sont créées aléatoirement à l'intérieur de la largeur de la section plutôt que la largeur totale de la fenêtre du navigateur.) */ 
        section.appendChild(createEl);

        setTimeout(() => { /* fonction qui permet d'ajouter un delais avant l'execution d'une fonction */
            createEl.remove() /* surpprime les bulles  */ 
        },4000) /* au bout de 4s (4000ms) */ 
    }

    setInterval(bubble,50) /* fonction qui permet de repeter indefiniment une fonction avec un delais entre chaque repetition */
}
}
verifWidth();
</script>
</section>

        </main>
<?php
    require_once 'footer.php';
?>