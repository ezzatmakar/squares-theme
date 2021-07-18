<section id="services" class="py-7">
    <div class="container">

        <div class="title-page text-center">
            <h2>Our Services</h2>
            <!-- <h5>Lorem ipsum dolor sit amet</h5> -->
        </div>

        <ul class="nav nav-pills mb-3" role="tablist">

            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="services-01-tab" data-bs-toggle="pill" data-bs-target="#services-01"
                    type="button" role="tab" aria-controls="services-01" aria-selected="true">We Design</button>
            </li>

            <li class="nav-item" role="presentation">
                <button class="nav-link" id="services-02-tab" data-bs-toggle="pill" data-bs-target="#services-02"
                    type="button" role="tab" aria-controls="services-02" aria-selected="false">Tile creator</button>
            </li>

            <li class="nav-item" role="presentation">
                <button class="nav-link" id="services-03-tab" data-bs-toggle="pill" data-bs-target="#services-03"
                    type="button" role="tab" aria-controls="services-03" aria-selected="false">We Manufacture</button>
            </li>

            <li class="nav-item" role="presentation">
                <button class="nav-link" id="services-04-tab" data-bs-toggle="pill" data-bs-target="#services-04"
                    type="button" role="tab" aria-controls="services-04" aria-selected="false">We Supply</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="services-05-tab" data-bs-toggle="pill" data-bs-target="#services-05"
                    type="button" role="tab" aria-controls="services-05" aria-selected="false">We install</button>
            </li>

        </ul>

        <div class="tab-content" id="pills-tabContent">
            <?php
            $we_design = get_field('we_design');
            if( $we_design ){ ?>
            <div class="tab-pane fade show active" id="services-01" role="tabpanel" aria-labelledby="services-01-tab">
                <div class="row">
                    <div class="col-lg-4 my-4 z-2">
                        <div class="img-bg-right" style="background-image: url(<?php echo $we_design['image']; ?>)">
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <p class="right-page"><?php echo $we_design['description']; ?></p>
                    </div>
                </div>
            </div>
            <?php }?>
            <?php
            $tile_creator = get_field('tile_creator');
            if( $tile_creator ){ ?>
            <div class="tab-pane fade" id="services-02" role="tabpanel" aria-labelledby="services-02-tab">
                <div class="row">
                    <div class="col-lg-4 my-4 z-2">
                        <div class="img-bg-right" style="background-image: url(<?php echo $tile_creator['image']; ?>)">
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <p class="right-page"><?php echo $tile_creator['description']; ?></p>
                    </div>
                </div>
            </div>
            <?php }?>
            <?php
            $we_manufacture = get_field('we_manufacture');
            if( $we_manufacture ){ ?>
            <div class="tab-pane fade" id="services-03" role="tabpanel" aria-labelledby="services-03-tab">
                <div class="row">
                    <div class="col-lg-4 my-4 z-2">
                        <div class="img-bg-right"
                            style="background-image: url(<?php echo $we_manufacture['image']; ?>)">
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <p class="right-page"><?php echo $we_manufacture['description']; ?></p>
                    </div>
                </div>
            </div>
            <?php }?>
            <?php
            $we_supply = get_field('we_supply');
            if( $we_supply ){ ?>
            <div class="tab-pane fade" id="services-04" role="tabpanel" aria-labelledby="services-04-tab">
                <div class="row">
                    <div class="col-lg-4 my-4 z-2">
                        <div class="img-bg-right" style="background-image: url(<?php echo $we_supply['image']; ?>)">
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <p class="right-page"><?php echo $we_supply['description']; ?></p>
                    </div>
                </div>
            </div>
            <?php }?>
            <?php
            $we_install = get_field('we_install');
            if( $we_install ){ ?>
            <div class="tab-pane fade" id="services-05" role="tabpanel" aria-labelledby="services-05-tab">
                <div class="row">
                    <div class="col-lg-4 my-4 z-2">
                        <div class="img-bg-right" style="background-image: url(<?php echo $we_install['image']; ?>)">
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <p class="right-page"><?php echo $we_install['description']; ?></p>
                    </div>
                </div>
            </div>
            <?php }?>

        </div>

    </div>
</section>