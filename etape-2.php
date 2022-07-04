<?php
function includeHeader($page)
{
  include("partials/header.php");
}
includeHeader('bg-etapes')
?>

<main class="etapes">
  <div class="container">
    <h1><b>Grattez</b><br class="d-none d-lg-block"> pour <b>tenter de remporter</b><br class="d-none d-lg-block"> votre
      panier <b>quitoque&nbsp;!</b></h1>
    <aside>Si vous découvrez un panier Quitoque, c’est gagné !</aside>
    <img src="assets/imgs/etape-2.png" alt="" class="img-fluid">
    <div class="c-block mt-2">
      <h2>Vous remportez votre panier Quitoque</h2>
      <p>Un e-mail de confirmation de réception de votre dossier va vous être envoyé dans quelques instants. Nous
        reviendrons vers vous dès que vos preuves d’achats aurons été vérifiées et définitivement validées.
        Pensez à regarder dans vos courriers indésirables !</p>
    </div>
    <a href="confirmation.php" class="c-btn">Suivant</a>
  </div>
  <img class="img-produits img-fluid" src="assets/imgs/etape.png" alt="">
</main>

<?php include 'partials/footer.php'; ?>