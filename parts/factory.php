<section id="factory" class=" py-7">
    <div class="container">

        <div class="title-page text-center py-3">
            <h2 class="tit-bg-01">Our Factory</h2>
            <p class="left-page"><?php echo get_field('our_factory_main_description'); ?></p>
        </div>

        <ul class="nav nav-pills mb-3" role="tablist">

            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="factory-01-tab" data-bs-toggle="pill" data-bs-target="#factory-01"
                    type="button" role="tab" aria-controls="factory-01" aria-selected="true">What is Mosaic</button>
            </li>

            <li class="nav-item" role="presentation">
                <button class="nav-link" id="factory-02-tab" data-bs-toggle="pill" data-bs-target="#factory-02"
                    type="button" role="tab" aria-controls="factory-02" aria-selected="false">Crystal Glass
                    Mosaic</button>
            </li>



        </ul>

        <div class="tab-content">


            <div class="tab-pane fade show active" id="factory-01" role="tabpanel" aria-labelledby="factory-01-tab">
                <div class="row">
                    <div class="col-lg-8">
                        <p class="left-page"><?php echo get_field('production_line_description'); ?></p>
                    </div>
                    <div class="col-lg-3 mt-4 z-2">
                        <div class="img-bg-left"
                            style="background-image: url(<?php echo get_field('production_line_image'); ?>)">
                        </div>
                    </div>
                </div>
            </div>


            <div class="tab-pane fade show " id="factory-02" role="tabpanel" aria-labelledby="factory-02-tab">
                <div class="row">
                    <div class="col-lg-8">
                        <p class="left-page"><?php echo get_field('colors_lab_description'); ?></p>
                    </div>
                    <div class="col-lg-3 mt-4 z-2">
                        <div class="img-bg-left"
                            style="background-image: url(<?php echo get_field('colors_lab_image'); ?>)">
                        </div>
                    </div>
                </div>
            </div>



        </div>

    </div>
</section>