<?php
function includeHeader($page)
{
  include("partials/header.php");
}
includeHeader('etapes')
?>

<main class="etapes">
    <div class="container">
        <h1><b>Grattez</b><br> pour <b>tenter de remporter</b><br> votre panier <b>quitoque !</b></h1>
       <aside>Si vous découvrez un panier Quitoque, c’est gagné !</aside>
       <img src="assets/imgs/etape-3.png" alt="">
       <div class="c-block mt-2">
        <h2>Merci de votre participation</h2>
        <p>N’hésitez pas à retenter votre chance<br> avec une nouvelle preuve d’achat !</p>
      </div>
      <button class="c-btn">Suivant</button>
    </div>
</main>

<?php include 'partials/footer.php'; ?>