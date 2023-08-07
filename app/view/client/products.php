<div class="main-banner" id="top">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="left-content">
                    <div class="thumb">
                        <div class="inner-content">
                            <h4>We Are Hexashop</h4>
                            <span>Awesome, clean &amp; creative php5 Template</span>
                            <div class="main-border-button">
                                <a href="#">Purchase Now!</a>
                            </div>
                        </div>
                        <img src="<?php echo _IMG_BASE_PATH; ?>left-banner-image.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="right-content">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="right-first-image">
                                <div class="thumb">
                                    <div class="inner-content">
                                        <h4>Women</h4>
                                        <span>Best Clothes For Women</span>
                                    </div>
                                    <div class="hover-content">
                                        <div class="inner">
                                            <h4>Women</h4>
                                            <p>Lorem ipsum dolor sit amet, conservisii ctetur adipiscing elit incid.</p>
                                            <div class="main-border-button">
                                                <a href="#">Discover More</a>
                                            </div>
                                        </div>
                                    </div>
                                    <img src="<?php echo _IMG_BASE_PATH; ?>baner-right-image-01.jpg">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="right-first-image">
                                <div class="thumb">
                                    <div class="inner-content">
                                        <h4>Men</h4>
                                        <span>Best Clothes For Men</span>
                                    </div>
                                    <div class="hover-content">
                                        <div class="inner">
                                            <h4>Men</h4>
                                            <p>Lorem ipsum dolor sit amet, conservisii ctetur adipiscing elit incid.</p>
                                            <div class="main-border-button">
                                                <a href="#">Discover More</a>
                                            </div>
                                        </div>
                                    </div>
                                    <img src="<?php echo _IMG_BASE_PATH; ?>baner-right-image-02.jpg">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="right-first-image">
                                <div class="thumb">
                                    <div class="inner-content">
                                        <h4>Kids</h4>
                                        <span>Best Clothes For Kids</span>
                                    </div>
                                    <div class="hover-content">
                                        <div class="inner">
                                            <h4>Kids</h4>
                                            <p>Lorem ipsum dolor sit amet, conservisii ctetur adipiscing elit incid.</p>
                                            <div class="main-border-button">
                                                <a href="#">Discover More</a>
                                            </div>
                                        </div>
                                    </div>
                                    <img src="<?php echo _IMG_BASE_PATH; ?>baner-right-image-03.jpg">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="right-first-image">
                                <div class="thumb">
                                    <div class="inner-content">
                                        <h4>Accessories</h4>
                                        <span>Best Trend Accessories</span>
                                    </div>
                                    <div class="hover-content">
                                        <div class="inner">
                                            <h4>Accessories</h4>
                                            <p>Lorem ipsum dolor sit amet, conservisii ctetur adipiscing elit incid.</p>
                                            <div class="main-border-button">
                                                <a href="#">Discover More</a>
                                            </div>
                                        </div>
                                    </div>
                                    <img src="<?php echo _IMG_BASE_PATH; ?>baner-right-image-04.jpg">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ***** Products Area Starts ***** -->
<section class="section" id="products">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2>Our Latest Products</h2>
                    <span>Check out all of our products.</span>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <?php
            $isProduct;
            foreach ($productsList as $keyarr => $blockItem) {
                if ($keyarr == 'product_men') {
                    $isProduct = 'productmen';
                } else if ($keyarr == 'product_women') {
                    $isProduct = 'productwomen';
                } else if ($keyarr == 'product_children') {
                    $isProduct = 'productkids';
                } else {
                    // Xử lý trường hợp nếu keyarr không phải là 'product_men', 'product_women' hoặc 'product_children'
                    // Ví dụ: nếu có thêm loại sản phẩm khác, bạn có thể thêm xử lý ở đây
                    $isProduct = 'unknown';
                }

                foreach($blockItem as $key => $item) {
                    extract($item);
                    echo '
                            <div class="col-lg-4">
                                <div class="item">
                                    <div class="thumb">
                                        <div class="hover-content">
                                            <ul>
                                                <li><a href="single-product.php"><i class="fa fa-eye"></i></a></li>
                                                <li><a href="single-product.php"><i class="fa fa-star"></i></a></li>
                                                <li><a href="'._WEB_ROOT.'/index.php/product/'.$isProduct.'/'.$id.'"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                        <img src="' . $imgUrl . '" alt="">
                                    </div>
                                    <div class="down-content">
                                        <h4>' . $name . '</h4>
                                        <span>$' . $price . '</span>
                                        <ul class="stars">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            ';
                }
            }

            ?>
        </div>
    </div>
</section>