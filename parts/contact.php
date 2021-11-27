<section id="contact" class="pt-7 pb-5">
    <div class="container">
        <div class="row">

            <div class="col-lg-6">
                <div class="tex-vir-cen">
                    <div class="title-page">
                        <h2 class="tit-bg-02">Contacts</h2>
                    </div>
                    <div class="contact">
                        <?php 
                        $phone_numbers = get_field('phone_numbers');
                        if($phone_numbers){
                            foreach($phone_numbers as $number){ ?>
                        <a href="tel:<?php echo $number['phone_number']?>"><?php echo $number['phone_number']?></a>
                        <?php }
                        }
                        ?>
                    </div>
                    <p><?php echo get_field('description'); ?></p>
                    <div class=" address">
                        <p><?php echo get_field('address'); ?></p>
                    </div>
                    <div class="email">
                        <a href="mailto:<?php echo get_field('e-mail'); ?>"><?php echo get_field('e-mail'); ?></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <?php echo get_field('map_loction'); ?>
            </div>

        </div>
    </div>
</section>