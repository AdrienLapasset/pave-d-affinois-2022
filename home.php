<?php include("partials/header.php"); ?>

<main class="home">
    <div class="container">
        <div class="c-block">
            <h1><b>Remplissez vite</b> le formulaire ci-dessous <br>pour <b>tenter votre chance !</b></h1>
            <form action="">
                <div class="row">
                    <div class="col-lg-6">
                        <select class="select-number" name="" id="" required>
                            <option value="1">Civilité*</option>
                            <option value="2">Mme</option>
                            <option value="3">M.</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <input type="text" placeholder="Nom*" required>
                    </div>
                    <div class="col-lg-6">
                        <input type="text" placeholder="Prénom*" required>
                    </div>
                    <div class="col-lg-6">
                        <input type="text" placeholder="Adresse mail*" required>
                    </div>
                    <div class="col-lg-6">
                        <input type="text" placeholder="Numéro de téléphone*" required>
                    </div>
                    <div class="row">
                        <div class="col">
                            <input type="text" placeholder="Adresse postale*" required>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <input type="text" placeholder="Code postal*" required>
                    </div>
                    <div class="col-lg-6">
                        <input type="text" placeholder="Ville*" required>
                    </div>
                    <div class="col-lg-6">
                        <input type="file" id="file">
                        <label for="file" class="input">
                            <img class="me-2" src="assets/icons/photo.png" alt="">
                            Photo du ticket de caisse*
                        </label>
                    </div>
                    <div class="col-lg-6">
                        <input type="file" id="file">
                        <label for="file" class="input">
                            <img class="me-2" src="assets/icons/photo.png" alt="">
                            Photo du produit*
                        </label>
                    </div>
                    <div class="my-4">
                      <div class="checkbox-container">
                        <input type="checkbox" id="data" class="me-2">
                        <label for="data">
                          J’accepte que mes données personnelles** soient utilisées dans le cadre du jeu*
                        </label>
                      </div>
                      <div class="checkbox-container">
                        <input type="checkbox" id="data" class="me-2">
                        <label for="data">
                        J’ai lu et j’accepte le règlement du jeu*
                        </label>
                      </div>
                    </div>
                    <p class="info">
                      ** Vos données sont collectées par la société Fromagerie Guilloteau pour la participation au jeu concours et la remise des lots. Le nom des gagnants ainsi que leur lieu d’habitation pourront également être utilisés dans des campagnes publicitaires liées au jeu. Vous disposez de droits sur vos données. Plus d’informations sur la gestion de vos données disponibles sur le règlement du jeu-concours disponible ici pavedaufinois.com
                    </p>
                </div>
                <button type="submit" class="c-btn">Valider</button>
            </form>
        </div>
    </div>
</main>

<?php include 'partials/footer.php'; ?>