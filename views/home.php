<?php include "components/head.php" ?>
<?php include "components/navbar.php" ?>
<main class="container is-fluid px-0 is-clipped">
    <!-- Hero columns -->
    <div class="my-hero columns mr-0" id="my-hero">

        <!-- Hero polygon  -->
        <div class="hero-bottom">

        </div>
        <!-- Hero texte -->
        <div class="hero-text columns is-centered is-flex is-align-items-center is-justify-content-center">

            <div class="column  is-6 ">
                <p class="title is-size-7-mobile ml-6 has-text-white">Starfield Digital Premium Edition<br>+Accès
                    Anticipé</p>
            </div>

        </div>

    </div>

    <!-- Tendances -->
    <div class="container is-max-widescreen px-5 my-5">
        <div class="columns pr-1 is-flex is-justify-content-space-between">


            <div class="column has-text-centered has-text-white  is-narrow">
                <p class="has-text-weight-bold">Tendances</p>
            </div>
            <div class="column has-text-centered is-narrow">
                <button class="button is-rounded has-background-white-ter" onclick="window.location.href='product-list.php'">Tout voir</button>
            </div>
        </div>

        <!-- Tendance Container -->

        <div
            class="columns  tendancy-container is-align-content-flex-start is-flex-wrap-wrap is-flex-desktop is-flex-direction-row is-justify-content-space-evenly is-clipped ">
            <?php
            loadTendency($data);
          

        ?>
        </div>

    </div>

    <!-- End of Tendancy -->

    <!-- TrustPilot  -->
    <div class="container trust is-fluid has-background-black">
        <div class="columns is-flex  is-flex-direction-row is-justify-content-center ">
            <!-- Download -->
            <div class="column is-flex  is-flex-direction-column  is-2 is-hidden-touch ">
                <div class="columns is-align-items-center">

                    <div class="column is-1 mr-3 pl-1">
                        <i class="bi bi-cloud-download is-size-3 orange-text"></i>
                    </div>
                    <div class="column pr-1">
                        <p class="title  is-size-5 has-text-left has-text-white">Ultra rapide</p>
                        <p class="subtitle   is-size-6 has-text-white">Téléchargement instantané</p>
                    </div>
                </div>
            </div>
            <!-- Fiable et sur -->
            <div class="column is-flex  is-flex-direction-column  is-2 is-hidden-touch ">
                <div class="columns is-align-items-center">

                    <div class="column is-1 mr-3 pl-1">
                        <i class="bi bi-shield-check is-size-3 orange-text"></i>
                    </div>
                    <div class="column pr-1">
                        <p class="title is-size-5 has-text-left has-text-white">Fiable et sûr</p>
                        <p class="subtitle  is-size-6 has-text-white">Plus de 10,000 jeux</p>
                    </div>
                </div>
            </div>
            <!-- Service client -->
            <div class="column is-flex  is-flex-direction-column  is-2 is-hidden-touch">
                <div class="columns is-align-items-center">

                    <div class="column is-1 mr-3 pl-1">
                        <i class="bi bi-chat-dots is-size-3  orange-text"></i>
                    </div>
                    <div class="column pr-1 ">
                        <p class="title is-size-5 has-text-left has-text-white">Service client</p>
                        <p class="subtitle is-size-6 has-text-white">Conseillers disponibles 24/7</p>
                    </div>
                </div>
            </div>
            <!-- Trust -->
            <div
                class="column is-flex has-text-centered has-text-white is-size-5 mt-3 is-justify-content-center  is-flex-direction-column  is-3  is-full-touch ">

                <p class="has-text-weight-bold"> <i class="bi bi-star-fill has-text-primary"></i>Trustpilot <i
                        class="bi bi-star-fill ml-1 has-text-white has-background-primary p-1"></i> <i
                        class="bi bi-star-fill has-text-white has-background-primary p-1"></i> <i
                        class="bi bi-star-fill has-text-white has-background-primary p-1"></i> <i
                        class="bi bi-star-fill has-text-white has-background-primary p-1"></i> <i
                        class="bi bi-star-fill has-text-white has-background-primary p-1"></i></p>
                <a class="is-size-6 has-text-white ml-3">Noté 4.8 sur 5, basé sur 585,689 avis</a>


            </div>


        </div>
    </div>
    <!--  -->
    <div class="container is-max-widescreen px-5 my-5">
        <div class="columns pr-1 is-flex is-justify-content-space-between">


            <div class="column has-text-centered has-text-white  is-narrow">
                <p class="has-text-weight-bold">Meilleures ventes</p>
            </div>
            <div class="column has-text-centered is-narrow">
                <button class="button is-rounded has-background-white-ter">Tout voir</button>
            </div>
        </div>

        <!-- Best Seller -->

        <div
            class="columns  tendancy-container is-align-content-flex-start is-flex-wrap-wrap is-flex-desktop is-flex-direction-row is-justify-content-space-evenly is-clipped ">

            <?php 
                loadBestSell($data);
            ?>



        </div>

    </div>
    <!-- Game presenting -->
    <div class="container present is-fluid p-0 my-5">
        <img src="../assets/img/page-img/street-fond.jpg" alt="" class="">
        <div class="present-bottom">

        </div>

        <div class="present-text columns is-centered is-flex is-align-items-center is-justify-content-center">

            <div class="column  is-6 ">
               <a href="../controllers/controller-product-page.php"> <p class="is-size-3 is-size-5-mobile ml-6 has-text-white">Street Fighter 6<br> <span
                        class="is-size-2 is-size-4-mobile">39.63€</span></p></a>
            </div>

        </div>
    </div>
    <!-- Test des joueurs -->
    <div class="container is-max-widescreen px-5 my-5">
        <div class="columns pr-1 is-flex is-justify-content-space-between">
            <div class="column has-text-centered has-text-white is-narrow">
                <p class="has-text-weight-bold title has-text-white">Tests des joueurs</p>
            </div>
        </div>
        <div class="columns is-flex is-align-items-stretch is-multiline">
            <?php
            loadComment($data)
            ?>



        </div>
    </div>
    <!-- Newwsletter -->
    <div class="container my-5 is-fluid  newsletter">
        <div class="columns pr-1 is-flex is-justify-content-space-between">


            <div class="column has-text-centered  ">
                <p class="is-size-2 orange-text mb-5"><i class="bi bi-envelope-paper"></i></p>
                <p class="title has-text-weight-bold has-text-white is-size-5">Ne ratez plus aucune offre et promo !</p>
                <p class="subtitle is-size-6 has-text-grey">Et soyez le premier à recevoir nos offres privées,
                    newsletters et promos
                    de la semaine</p>
                <button class="custom-button1 is-borderless is-size-6 mb-5 p-4">Inscrivez-vous !</button>
            </div>

        </div>
    </div>

</main>
<?php include "components/footer.php" ?>