<?php include "components/head.php" ?>
<?php include "components/navbar.php" ?>

<main class="">
    <div class="container is-fluid my-hero street-back px-0 " id="my-hero">
        <!-- Hero texte -->
        <div class="hero-text columns is-centered is-flex is-align-items-center is-justify-content-center">



        </div>
        <div class="hero-bottom">

        </div>




    </div>
    <div class="container product  px-0 ">






        <div
            class="columns  tendancy-container is-align-content-flex-start  is-flex-desktop is-flex-direction-row is-justify-content-space-evenly is-clipped ">

            <!-- Card Container -->
            <div class="column is-flex is-align-items-center  is-5  m-1 my-card-container">
                <div class="my-card is-flex is-flex-direction-column is-align-items-center">
                    <figure class="image ">
                        <img src=<?=$data[1]["image"]; ?>
                        alt="">
                        <video preload="metadata" loop muted onmouseover="this.play()" onmouseout="this.pause()"
                            type="video/webm" src=<?=$data[1]["video"] ?>> </video>

                    </figure>



                </div>
            </div>

            <div
                class="column is-5  is-fluid is-flex is-flex-direction-column is-justify-content-center">

                <div class="columns  is-flex is-flex-direction-row is-flex-wrap-wrap is-justify-content-space-evenly">

                    <div
                        class="column round-border custom-color  is-12 is-flex-wrap-wrap  has-text-centered is-fluid is-flex is-flex-direction-column is-justify-content-center has-text-white">

                        <p class="has-text-centered is-size-3">
                            <?=$data[1]["title"] ?>
                        </p>
                        <p class="has-text-centered"> <span class="orange-text"> -
                                <?= $data[1]["promo"] ?>%
                            </span>
                            <span class="is-size-2">
                                <?=$data[1]["price"] ?>&euro;
                            </span>
                        </p>
                    </div>
                    <div class="column round-border orange-fond has-text-centered mt-3 is-2"><i
                            class="bi bi-cart4 is-size-4  has-text-white"></i></div>
                    <div class="column orange-fond has-text-centered mt-3 round-border has-text-white is-7 "><p>Achetez maintenant</p></div>
                </div>



            </div>


        </div>
    </div>

    <div class="container is-max-widescreen px-5 mt-5">
        <div class="columns pr-1 is-flex is-justify-content-space-between">
            <div class="column has-text-centered has-text-white is-narrow">
                <p class="has-text-weight-bold title has-text-white">À propos du jeu</p>
            </div>
        </div>

        <div class="columns">

            <div class="column has-text-white  mb-5">
                <p><?=$data[1]["about"] ?></p>
            </div>
        </div>
    </div>
</main>


<?php include "components/footer.php" ?>