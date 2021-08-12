 <section id="gallery" class="py-7">
     <div class="container">

         <div class="title-page text-center">
             <h2><?php echo get_field('section_title');?></h2>
         </div>

         <div class="row">

             <div class="col-lg-4" id="lightgallery-01">
                 <a href="<?php echo get_field('first_section_main_image');?>">
                     <div class="process-item">
                         <div class="img-bg-process mb-3"
                             style="background-image: url(<?php echo get_field('first_section_main_image');?>)">
                         </div>
                         <div class="process-item-desc">
                             <div class="process-item-desc-bot">
                                 <h5><?php echo get_field('first_section_title');?></h5>
                                 <p><?php echo get_field('first_section_description');?></p>
                             </div>
                         </div>
                     </div>
                     <img src="<?php echo get_field('first_section_main_image');?>" class="d-none" alt="" />
                 </a>
                 <?php 
                $first_slider = get_field('first_section_slides');
                foreach($first_slider as $slid_image){

            
                ?>
                 <a href="<?php echo $slid_image['slide_image']?>"><img src="<?php echo $slid_image['slide_image']?>"
                         class="d-none" alt="" /></a>

                 <?php } ?>
             </div>

             <div class="col-lg-4" id="lightgallery-02">
                 <a href="<?php echo get_field('second_section_main_image');?>">
                     <div class="process-item">
                         <div class="img-bg-process mb-3"
                             style="background-image: url(<?php echo get_field('second_section_main_image');?>)">
                         </div>
                         <div class="process-item-desc">
                             <div class="process-item-desc-bot">
                                 <h5><?php echo get_field('second_section_title');?></h5>
                                 <p><?php echo get_field('second_section_description');?></p>
                             </div>
                         </div>
                     </div>
                     <img src="<?php echo get_field('second_section_main_image');?>" class="d-none" alt="" />
                 </a>
                 <?php 
            $second_slider = get_field('second_section_slides');
            foreach($second_slider as $slid_image){

        
            ?>
                 <a href="<?php echo $slid_image['slide_image']?>"><img src="<?php echo $slid_image['slide_image']?>"
                         class="d-none" alt="" /></a>

                 <?php } ?>
             </div>

             <div class="col-lg-4" id="lightgallery-03">
                 <a href="<?php echo get_field('third_section_main_image');?>">
                     <div class="process-item">
                         <div class="img-bg-process mb-3"
                             style="background-image: url(<?php echo get_field('third_section_main_image');?>)">
                         </div>
                         <div class="process-item-desc">
                             <div class="process-item-desc-bot">
                                 <h5><?php echo get_field('third_section_title');?></h5>
                                 <p><?php echo get_field('third_section_description');?></p>
                             </div>
                         </div>
                     </div>
                     <img src="<?php echo get_field('third_section_main_image');?>" class="d-none" alt="" />
                 </a>
                 <?php 
            $third_slider = get_field('third_section_slides');
            foreach($third_slider as $slid_image){

        
            ?>
                 <a href="<?php echo $slid_image['slide_image']?>"><img src="<?php echo $slid_image['slide_image']?>"
                         class="d-none" alt="" /></a>

                 <?php } ?>
             </div>


         </div>

     </div>
 </section>