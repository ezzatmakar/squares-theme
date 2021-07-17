<section id="squares-mosaics" class="py-7">
    <div class="container">

        <div class="title-page text-center">
            <h2>Squares mosaic</h2>
            <!-- <h5>Lorem ipsum dolor sit amet</h5> -->
        </div>

        <ul class="nav nav-pills mb-3" role="tablist">

            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="squares-mosaic-01-tab" data-bs-toggle="pill"
                    data-bs-target="#squares-mosaic-01" type="button" role="tab" aria-controls="squares-mosaic-01"
                    aria-selected="true">About us</button>
            </li>

            <li class="nav-item" role="presentation">
                <button class="nav-link" id="squares-mosaic-02-tab" data-bs-toggle="pill"
                    data-bs-target="#squares-mosaic-02" type="button" role="tab" aria-controls="squares-mosaic-02"
                    aria-selected="false">Our mission</button>
            </li>

            <li class="nav-item" role="presentation">
                <button class="nav-link" id="squares-mosaic-03-tab" data-bs-toggle="pill"
                    data-bs-target="#squares-mosaic-03" type="button" role="tab" aria-controls="squares-mosaic-03"
                    aria-selected="false">Our vision</button>
            </li>

            <li class="nav-item" role="presentation">
                <button class="nav-link" id="squares-mosaic-04-tab" data-bs-toggle="pill"
                    data-bs-target="#squares-mosaic-04" type="button" role="tab" aria-controls="squares-mosaic-04"
                    aria-selected="false">Our policy</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="squares-mosaic-05-tab" data-bs-toggle="pill"
                    data-bs-target="#squares-mosaic-05" type="button" role="tab" aria-controls="squares-mosaic-05"
                    aria-selected="false">Our Process</button>
            </li>

            <li class="nav-item" role="presentation">
                <button class="nav-link" id="squares-mosaic-06-tab" data-bs-toggle="pill"
                    data-bs-target="#squares-mosaic-06" type="button" role="tab" aria-controls="squares-mosaic-06"
                    aria-selected="false">Our team</button>
            </li>

        </ul>

        <div class="tab-content" id="pills-tabContent">
            <?php
            $about_us = get_field('about_us');
            if( $about_us ){ ?>
            <div class="tab-pane fade show active" id="squares-mosaic-01" role="tabpanel"
                aria-labelledby="squares-mosaic-01-tab">
                <div class="row">
                    <div class="col-lg-4 my-4 z-2">
                        <div class="img-bg-right" style="background-image: url(<?php echo $about_us['image']; ?>)">
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <p class="right-page"><?php echo $about_us['description']; ?></p>
                    </div>
                </div>
            </div>
            <?php }?>
            <?php
            $our_mission = get_field('our_mission');
            if( $our_mission ){ ?>
            <div class="tab-pane fade" id="squares-mosaic-02" role="tabpanel" aria-labelledby="squares-mosaic-02-tab">
                <div class="row">
                    <div class="col-lg-4 my-4 z-2">
                        <div class="img-bg-right" style="background-image: url(<?php echo $our_mission['image']; ?>)">
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <p class="right-page"><?php echo $our_mission['description']; ?></p>
                    </div>
                </div>
            </div>
            <?php }?>
            <?php
            $our_vision = get_field('our_vision');
            if( $our_vision ){ ?>
            <div class="tab-pane fade" id="squares-mosaic-03" role="tabpanel" aria-labelledby="squares-mosaic-03-tab">
                <div class="row">
                    <div class="col-lg-4 my-4 z-2">
                        <div class="img-bg-right" style="background-image: url(<?php echo $our_vision['image']; ?>)">
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <p class="right-page"><?php echo $our_vision['description']; ?></p>
                    </div>
                </div>
            </div>
            <?php }?>
            <?php
            $our_policy = get_field('our_policy');
            if( $our_policy ){ ?>
            <div class="tab-pane fade" id="squares-mosaic-04" role="tabpanel" aria-labelledby="squares-mosaic-04-tab">
                <div class="row">
                    <div class="col-lg-4 my-4 z-2">
                        <div class="img-bg-right" style="background-image: url(<?php echo $our_policy['image']; ?>)">
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <p class="right-page"><?php echo $our_policy['description']; ?></p>
                    </div>
                </div>
            </div>
            <?php }?>
            <?php
            $our_process = get_field('our_process');
            if( $our_process ){ ?>
            <div class="tab-pane fade" id="squares-mosaic-05" role="tabpanel" aria-labelledby="squares-mosaic-05-tab">
                <div class="row">
                    <div class="col-lg-4 my-4 z-2">
                        <div class="img-bg-right" style="background-image: url(<?php echo $our_process['image']; ?>)">
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <p class="right-page"><?php echo $our_process['description']; ?></p>
                    </div>
                </div>
            </div>
            <?php }?>
            <?php
            $our_team = get_field('our_team');
            if( $our_team ){ ?>
            <div class="tab-pane fade" id="squares-mosaic-06" role="tabpanel" aria-labelledby="squares-mosaic-06-tab">
                <div class="row">
                    <div class="col-lg-4 my-4 z-2">
                        <div class="img-bg-right" style="background-image: url(<?php echo $our_team['image']; ?>)">
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <p class="right-page"><?php echo $our_team['description']; ?></p>
                    </div>
                </div>
            </div>
            <?php }?>
        </div>

    </div>
</section>