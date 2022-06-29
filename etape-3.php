<?php
function includeHeader($page)
{
  include("partials/header.php");
}
includeHeader('etapes')
?>

<main class="etapes">
    <div class="container">
    <h1><b>Grattez</b><br class="d-none d-lg-block"> pour <b>tenter de remporter</b><br class="d-none d-lg-block"> votre panier <b>quitoque&nbsp;!</b></h1>
       <aside>Si vous découvrez un panier Quitoque, c’est gagné !</aside>
       <img src="assets/imgs/etape-3.png" alt="" class="img-fluid">
       <div class="c-block mt-2">
        <h2>Merci de votre participation</h2>
        <p>N’hésitez pas à retenter votre chance<br> avec une nouvelle preuve d’achat !</p>
      </div>
      <a href="confirmation.php" class="c-btn">Suivant</a>
    </div>
</main>

<?php include 'partials/footer.php'; ?>