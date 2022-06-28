<?php
function includeHeader($page)
{
  include("partials/head.php");
}
includeHeader('connexion')
?>

<?php include("partials/header-compte.php"); ?>

<main class="connexion content-center">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <h1 class="c-title">Se connecter</h1>
        <form class="c-form" action="">
          <div class="input-container">
            <input type="email" placeholder="Indiquez votre mail">
            <svg class="input-icon" stroke="#A0A3BD" width="26" height="18" viewBox="0 0 26 18" fill="none"
              xmlns="http://www.w3.org/2000/svg">
              <path
                d="M22.992 0.974121H3.09448C1.93773 0.974121 1 1.86955 1 2.97412V14.9741C1 16.0787 1.93773 16.9741 3.09448 16.9741H22.992C24.1487 16.9741 25.0865 16.0787 25.0865 14.9741V2.97412C25.0865 1.86955 24.1487 0.974121 22.992 0.974121Z"
                stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
              <path d="M24.4695 1.55615L13.0431 10.4742L1.6167 1.55615" stroke-width="1.6" stroke-linecap="round"
                stroke-linejoin="round" />
            </svg>
          </div>
          <div class="input-container">
            <input type="password" placeholder="Mot de passe*">
          </div>
          <a class="hypertext">Mot de passe oublié ?</a>
        </form>
      </div>
    </div>
  </div>
  <img class="d-lg-none w-100" src="assets/imgs/bg-login-mobile.jpg" alt="">
</main>

<?php include 'partials/footer.php'; ?>