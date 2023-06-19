<?php include "components/head.php" ?>
<?php include "components/navbar.php" ?>

<main class="">
    <div class="container is-fluid my-hero generic px-0 is-clipped" id="my-hero">
        <!-- Hero texte -->
        <div class="hero-text columns is-centered is-flex is-align-items-center is-justify-content-center">

            <div class="column has-text-centered is-6 ">
                <p class="title is-size-7-mobile ml-6 has-text-white"></i>
                </p>
            </div>

        </div>
        <div class="hero-bottom">

        </div>
    </div>



    <div class="container is-max-widescreen px-5 mt-5">

        <div
            class="columns  tendancy-container is-align-content-flex-start is-flex-wrap-wrap is-flex-desktop is-flex-direction-row is-justify-content-space-evenly is-clipped ">

            <?php
                loadAll($data);
            ?>

        </div>
    </div>
</main>


<?php include "components/footer.php" ?>