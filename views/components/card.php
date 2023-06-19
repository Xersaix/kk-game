            <!-- Card Container -->
            <div class="column is-flex is-align-items-center  is-3  m-1 my-card-container">
                <div class="my-card is-flex is-flex-direction-column is-align-items-center">
                    <figure class="image ">
                        <img src=<?=$data[$i]["image"]; ?>
                            alt="">
                                         <video preload="metadata" loop muted  onmouseover="this.play()" onmouseout="this.pause()"  type="video/webm"
                        src=<?=$data[$i]["video"] ?>> </video>
                        <div class="promo p-1 is-flex is-align-items-center is-justify-content-center has-text-weight-bold has-text-centered">
                            <p>-<?=$data[$i]["promo"] ?>%</p>
                        </div>    
                    </figure>


                    <div
                        class="container is-fluid is-flex is-flex-direction-row is-justify-content-space-between has-text-white px-0">
                        <p><?=$data[$i]["title"] ?></p>
                        <p><?=$data[$i]["price"] ?>&euro;</p>
                    </div>
                </div>
            </div>