<section id="index">
    <div class="header-spacer"></div>
    <div id="indexcarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <?php 
                $rows = get_field('slider', 'option');
                if( $rows ) {
                    foreach($rows as $in => $image){
                    ?>
            <button type="button" data-bs-target="#indexcarousel" data-bs-slide-to="<?php echo $in;?>"
                class="<?php echo $in == 0 ? 'active' : ''; ?>" aria-current="true"
                aria-label="Slide <?php echo $in;?>"></button>
            <?php }} ?>
        </div>
        <div class="carousel-inner">
            <?php 
                $rows = get_field('slider', 'option');
                if( $rows ) {
                    foreach($rows as $index => $image){
                    ?>

            <div class="carousel-item <?php echo $index == 0 ? 'active' : ''; ?>">
                <img src="<?php echo $image['slide_image'] ?>" class="d-block w-100" alt="" />
                <div class="carousel-caption d-none d-md-block">
                    <h5><?php echo $image['title'] ?></h5>
                    <p><?php echo $image['image_description'] ?></p>
                </div>
            </div>
            <?php }
                }?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#indexcarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#indexcarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>