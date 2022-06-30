<?php
function includeHeader($page)
{
  include("partials/header.php");
}
includeHeader('bg-confirmation')
?>

<main class="confirmation">
  <h1><b>Votre participation</b><br>a bien été prise en compte</h1>
  <img class="img-fluid d-none d-sm-block" src="assets/imgs/confirmation.png" alt="">
  <img class="img-fluid d-sm-none" src="assets/imgs/original.png" alt="">
</main>

<?php include 'partials/footer.php'; ?>