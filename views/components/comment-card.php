<div class="column comment-card  is-4 is-12-mobile">
                <figure class="image">
                    <img src=<?=$data[$i]["image"]; ?>
                        alt="">
                </figure>
                <div class=" p-2 comment-card-text">
                    <p class="mb-3 is-flex is-flex-direction-row is-align-items-center"><img src="../assets/img/page-img/avatar.png" alt="" class="image is-64x64 ">Anonyme</p>
                    <p><?php
                    if(strlen($data[$i]["comment"] >= 150))
                    echo substr($data[$i]["comment"],0,150). " ...";
                    ?>
                    </p>
                </div>
            </div>