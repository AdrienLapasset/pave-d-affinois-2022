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
       <img src="assets/imgs/etape-1.png" alt="">
    </div>
</main>

<?php include 'partials/footer.php'; ?>