<section id="products" class="py-7">
    <div class="container">

        <div class="title-page text-center">
            <h2 class="tit-bg-01">All Applications</h2>
        </div>

        <ul class="nav nav-pills mb-4" role="tablist">

            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="all-products-tab" data-bs-toggle="pill"
                    data-bs-target="#all-products" type="button" role="tab" aria-controls="all-products"
                    aria-selected="true">All Applications</button>
            </li>
            <?php 
            $all_products = get_field('product');
            if($all_products){
                foreach($all_products as $in => $product){
                    ?>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="product-<?php echo $in?>-tab" data-bs-toggle="pill"
                    data-bs-target="#product-<?php echo $in?>" type="button" role="tab"
                    aria-controls="product-<?php echo $in?>"
                    aria-selected="false"><?php echo $product['title'];?></button>
            </li>

            <?php
                }
            }
            
            ?>


        </ul>

        <div class="tab-content">

            <div class="tab-pane fade show active" id="all-products" role="tabpanel" aria-labelledby="all-products-tab">
                <div class="row">
                    <?php 
            $all_products = get_field('product');
            if($all_products){
                foreach($all_products as $in =>$product){
                    ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="product-item">
                            <a href="#product-<?php echo $in; ?>">
                                <div class="img-bg-products mb-3"
                                    style="background-image: url(<?php echo $product['product_image'];?>)"></div>
                                <h4><?php echo $product['title'];?></h4>
                                <p><?php echo $product['sub_title'];?></p>
                            </a>
                        </div>
                    </div>
                    <?php
                    }
                }
                
                ?>


                </div>
            </div>
            <?php 
            $all_products = get_field('product');
            if($all_products){
                foreach($all_products as $in => $product){
                    ?>
            <div class="tab-pane fade" id="product-<?php echo $in;?>" role="tabpanel"
                aria-labelledby="product-<?php echo $in;?>-tab">
                <div class="row">
                    <div class="col-lg-8">
                        <p class="left-page"><?php echo $product['description'];?></p>
                    </div>
                    <div class="col-lg-4 mt-4 z-2">
                        <div class="img-bg-left" style="background-image: url(<?php echo $product['product_image'];?>)">
                        </div>
                    </div>
                </div>
            </div>
            <?php
                }
            }
            
            ?>



        </div>

    </div>
</section>