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
       <a href="etape-2.php">
         <img src="assets/imgs/etape-1.png" alt="" class="img-fluid mb-5">
       </a>
    </div>
</main>

<?php include 'partials/footer.php'; ?>