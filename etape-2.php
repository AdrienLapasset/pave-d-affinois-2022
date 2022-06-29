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
       <img src="assets/imgs/etape-2.png" alt="">
       <div class="c-block mt-2">
        <h2>Vous remportez votre panier Quitoque</h2>
        <p>Un e-mail de confirmation de réception de votre dossier va vous être envoyé dans quelques instants. Nous reviendrons vers vous dès que vos preuves d’achats aurons été vérifiées et définitivement validées.
Pensez à regarder dans vos courriers indésirables !</p>
      </div>
      <button class="c-btn">Suivant</button>
    </div>
</main>

<?php include 'partials/footer.php'; ?>