<div class="kenne-element-carousel product-slider slider-nav" data-slick-options='{
        "slidesToShow": 4,
        "slidesToScroll": 1,
        "infinite": false,
        "arrows": true,
        "dots": false,
        "spaceBetween": 30,
        "appendArrows": ".product-arrow"
        }' data-slick-responsive='[
        {"breakpoint":992, "settings": {
        "slidesToShow": 3
        }},
        {"breakpoint":768, "settings": {
        "slidesToShow": 2
        }},
        {"breakpoint":575, "settings": {
        "slidesToShow": 1
        }}
    ]'>



<?php
$product=new Product();
$result=$product->get_all();

while($row=$result->fetch_object()){



    ?>
 <div class="product-item">
        <div class="single-product">
            <div class="product-img">
                <a href="single-product.php?id=<?php echo $row->product_id?>">
                    <img class="primary-img" src="admin/<?php echo $row->product_image?>" alt="Kenne's Product Image">
                    <img class="secondary-img" src="admin/<?php echo $row->product_image?>" alt="Kenne's Product Image">
                </a>
                <span class="sticker-2">Hot</span>
                <div class="add-actions">
                    <ul>
                        <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="right" title="Quick View"><i
                            class="ion-ios-search"></i></a>
                        </li>
                        <li><a href="wishlist.php" data-bs-toggle="tooltip" data-placement="right" title="Add To Wishlist"><i class="ion-ios-heart-outline"></i></a>
                        </li>
                        <li><a href="compare.php" data-bs-toggle="tooltip" data-placement="right" title="Add To Compare"><i class="ion-ios-reload"></i></a>
                        </li>
                        <li><a href="cart.php" data-bs-toggle="tooltip" data-placement="right" title="Add To cart"><i class="ion-bag"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="product-content">
                <div class="product-desc_info">
                    <h3 class="product-name"><a href="single-product.php"><?php echo $row->product_title ?></a></h3>
                    <div class="price-box">
                        <span class="new-price">$46.91</span>
                        <span class="old-price">$50.99</span>
                    </div>
                    <div class="rating-box">
                        <ul>
                            <li><i class="ion-ios-star"></i></li>
                            <li><i class="ion-ios-star"></i></li>
                            <li><i class="ion-ios-star"></i></li>
                            <li class="silver-color"><i class="ion-ios-star-half"></i></li>
                            <li class="silver-color"><i class="ion-ios-star-outline"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php
}


?>

    <div class="product-item">
        <div class="single-product">
            <div class="product-img">
                <a href="single-product.php">
                    <img class="primary-img" src="assets/images/product/1-1.jpg" alt="Kenne's Product Image">
                    <img class="secondary-img" src="assets/images/product/1-2.jpg" alt="Kenne's Product Image">
                </a>
                <span class="sticker-2">Hot</span>
                <div class="add-actions">
                    <ul>
                        <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="right" title="Quick View"><i
                            class="ion-ios-search"></i></a>
                        </li>
                        <li><a href="wishlist.php" data-bs-toggle="tooltip" data-placement="right" title="Add To Wishlist"><i class="ion-ios-heart-outline"></i></a>
                        </li>
                        <li><a href="compare.php" data-bs-toggle="tooltip" data-placement="right" title="Add To Compare"><i class="ion-ios-reload"></i></a>
                        </li>
                        <li><a href="cart.php" data-bs-toggle="tooltip" data-placement="right" title="Add To cart"><i class="ion-bag"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="product-content">
                <div class="product-desc_info">
                    <h3 class="product-name"><a href="single-product.php">Quibusdam ratione</a></h3>
                    <div class="price-box">
                        <span class="new-price">$46.91</span>
                        <span class="old-price">$50.99</span>
                    </div>
                    <div class="rating-box">
                        <ul>
                            <li><i class="ion-ios-star"></i></li>
                            <li><i class="ion-ios-star"></i></li>
                            <li><i class="ion-ios-star"></i></li>
                            <li class="silver-color"><i class="ion-ios-star-half"></i></li>
                            <li class="silver-color"><i class="ion-ios-star-outline"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="product-item">
        <div class="single-product">
            <div class="product-img">
                <a href="single-product.php">
                    <img class="primary-img" src="assets/images/product/2-1.jpg" alt="Kenne's Product Image">
                    <img class="secondary-img" src="assets/images/product/2-2.jpg" alt="Kenne's Product Image">
                </a>
                <span class="sticker">Bestseller</span>
                <div class="add-actions">
                    <ul>
                        <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="right" title="Quick View"><i
                            class="ion-ios-search"></i></a>
                        </li>
                        <li><a href="wishlist.php" data-bs-toggle="tooltip" data-placement="right" title="Add To Wishlist"><i class="ion-ios-heart-outline"></i></a>
                        </li>
                        <li><a href="compare.php" data-bs-toggle="tooltip" data-placement="right" title="Add To Compare"><i class="ion-ios-reload"></i></a>
                        </li>
                        <li><a href="cart.php" data-bs-toggle="tooltip" data-placement="right" title="Add To cart"><i class="ion-bag"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="product-content">
                <div class="product-desc_info">
                    <h3 class="product-name"><a href="single-product.php">Nulla laboriosam</a></h3>
                    <div class="price-box">
                        <span class="new-price">$80.00</span>
                        <span class="old-price">$85,00</span>
                    </div>
                    <div class="rating-box">
                        <ul>
                            <li><i class="ion-ios-star"></i></li>
                            <li><i class="ion-ios-star"></i></li>
                            <li><i class="ion-ios-star"></i></li>
                            <li><i class="ion-ios-star"></i></li>
                            <li><i class="ion-ios-star"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
  

</div>