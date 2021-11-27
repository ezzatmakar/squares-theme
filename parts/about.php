<section id="about-mosaics" class=" py-7">
    <div class="container">

        <div class="title-page text-center py-3">
            <h2 class="tit-bg-01">About mosaic </h2>
        </div>

        <ul class="nav nav-pills mb-3" role="tablist">

            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="about-01-tab" data-bs-toggle="pill" data-bs-target="#about-01"
                    type="button" role="tab" aria-controls="about-01" aria-selected="true">What is Mosaic</button>
            </li>

            <li class="nav-item" role="presentation">
                <button class="nav-link" id="about-02-tab" data-bs-toggle="pill" data-bs-target="#about-02"
                    type="button" role="tab" aria-controls="about-02" aria-selected="false">Crystal Glass
                    Mosaic</button>
            </li>

            <li class="nav-item" role="presentation">
                <button class="nav-link" id="about-03-tab" data-bs-toggle="pill" data-bs-target="#about-03"
                    type="button" role="tab" aria-controls="about-03" aria-selected="false">Product Features</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="about-04-tab" data-bs-toggle="pill" data-bs-target="#about-04"
                    type="button" role="tab" aria-controls="about-04" aria-selected="false">Testing &
                    certification</button>
            </li>

        </ul>

        <div class="tab-content">

            <?php
            $what_is_mosaic = get_field('what_is_mosaic');
            if( $what_is_mosaic ){ ?>
            <div class="tab-pane fade show active" id="about-01" role="tabpanel" aria-labelledby="about-01-tab">
                <div class="row">
                    <div class="col-lg-8">
                        <p class="left-page"><?php echo $what_is_mosaic['description']; ?></p>
                    </div>
                    <div class="col-lg-3 mt-4 z-2">
                        <div class="img-bg-left" style="background-image: url(<?php echo $what_is_mosaic['image']; ?>)">
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>

            <?php
            $crystal_glass_mosaic = get_field('crystal_glass_mosaic');
            if( $crystal_glass_mosaic ){ ?>
            <div class="tab-pane fade show " id="about-02" role="tabpanel" aria-labelledby="about-02-tab">
                <div class="row">
                    <div class="col-lg-8">
                        <p class="left-page"><?php echo $crystal_glass_mosaic['description']; ?></p>
                    </div>
                    <div class="col-lg-3 mt-4 z-2">
                        <div class="img-bg-left"
                            style="background-image: url(<?php echo $crystal_glass_mosaic['image']; ?>)">
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>

            <?php
            $product_features = get_field('product_features');
            if( $product_features ){ ?>
            <div class="tab-pane fade show " id="about-03" role="tabpanel" aria-labelledby="about-03-tab">
                <div class="row">
                    <div class="col-lg-8">
                        <p class="left-page"><?php echo $product_features['description']; ?></p>
                    </div>
                    <div class="col-lg-3 mt-4 z-2">
                        <div class="img-bg-left"
                            style="background-image: url(<?php echo $product_features['image']; ?>)">
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>

            <?php
            $testing_certification = get_field('testing_certification');
            if( $testing_certification ){ ?>
            <div class="tab-pane fade show " id="about-04" role="tabpanel" aria-labelledby="about-04-tab">
                <div class="row">
                    <div class="col-lg-8">
                        <p class="left-page"><?php echo $testing_certification['description']; ?></p>
                    </div>
                    <div class="col-lg-3 mt-4 z-2">
                        <div class="img-bg-left"
                            style="background-image: url(<?php echo $testing_certification['image']; ?>)">
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>

    </div>
</section>