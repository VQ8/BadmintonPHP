<aside id="colorlib-hero">
    <div class="flexslider">
        <ul class="slides">
        <li style="background-image: url('webroot/image/slider/image.jpg');">
            <div class="overlay"></div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6 offset-sm-3 text-center slider-text">
                        <div class="slider-text-inner">
                            <div class="desc">
                                <h1 class="head-1">Best sales</h1>
                                <h2 class="head-2">Hot</h2>
                                <h2 class="head-3">Collection</h2>
                                <p class="category"><span>New trending badmiton</span></p>
                                <p><a href="#" class="btn btn-primary">Bộ sưu tập</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li style="background-image: url(webroot/image/slider/image-1.jpg);">
            <div class="overlay"></div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6 offset-sm-3 text-center slider-text">
                        <div class="slider-text-inner">
                            <div class="desc">
                                <h1 class="head-1">Lining</h1>
                                <h2 class="head-2">Sale</h2>
                                <h2 class="head-3"><strong class="font-weight-bold">50%</strong> Off</h2>
                                <p class="category"><span>Big sale mizuno</span></p>
                                <p><a href="#" class="btn btn-primary">Shop Collection</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li style="background-image: url(webroot/image/slider/image-2.jpg);"> 
            <div class="overlay"></div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6 offset-sm-3 text-center slider-text">
                        <div class="slider-text-inner">
                            <div class="desc">
                                <h1 class="head-1">New</h1>
                                <h2 class="head-2">Arrival</h2>
                                <h2 class="head-3">up to <strong class="font-weight-bold">30%</strong> off</h2>
                                <p class="category"><span>Modern badminton racket</span></p>
                                <p><a href="#" class="btn btn-primary">Shop Collection</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        </ul>
    </div>
</aside>
<div class="colorlib-intro">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2 class="intro">Uy tín tao tạo nên thương hiệu: Bán ra những sản phẩm chất lượng, phù hợp với mức giá ...</h2>
            </div>
        </div>
    </div>
</div>


<div class="colorlib-product">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 offset-sm-2 text-center colorlib-heading">
                <h2>Best Sellers</h2>
            </div>
        </div>
        <div class="row row-pb-md"> 
        <?php
            $prodcts=productAll();
            while ($row=(mysqli_fetch_array($prodcts))) { $price_sale=price_sale($row['MaSP'],$row['DonGia']);?>
            <div class="col-lg-3 mb-4 ">
                <div class="product-entry border">
                    <a href="?view=product-detail&id=<?php echo $row['MaSP'] ?>" class="prod-img">
                        <img src="webroot/image/sanpham/<?php echo $row['AnhNen']; ?>" style="height:69%"  class="img-fluid" alt="Free html5 bootstrap 4 template">
                    </a>
                    <div class="desc">
                        <h2><a href="#"><?php echo $row['TenSP']; ?></a></h2> 
                        <span class="price"><?php echo number_format($price_sale,0).'₫'; ?></span>
                        <?php if(number_format($row['DonGia']) !== number_format($price_sale)){ ?>
                        <span class="price-old"><?php echo  number_format($row['DonGia'], 0 ).' '.' ₫' ; ?></span> <?php } ?>
                    </div>
                </div>
            </div> 
            <?php }?>      
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <p><a href="?view=products" class="btn btn-primary btn-lg">Shop All Products</a></p>
            </div>
        </div>
    </div>
</div>


<div class="colorlib-partner">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 offset-sm-2 text-center colorlib-heading colorlib-heading-sm">
                <h2>ĐỐI TÁC TIN CẬY</h2>
            </div>
        </div>
        <div class="row">
            <div class="col partner-col text-center"> 
                <img src="webroot/image/brand/Yonex.png" class="img-fluid" alt="Free html4 bootstrap 4 template">
            </div>
            <div class="col partner-col text-center">
                <img src="webroot/image/brand/Lining.png" class="img-fluid" alt="Free html4 bootstrap 4 template">
            </div>
            <div class="col partner-col text-center">
                <img src="webroot/image/brand/victor.png" class="img-fluid" alt="Free html4 bootstrap 4 template">
            </div>
            <div class="col partner-col text-center">
                <img src="webroot/image/brand/mizuno.png" class="img-fluid" alt="Free html4 bootstrap 4 template">
            </div>
            <div class="col partner-col text-center">
                <img src="webroot/image/brand/Flypower.png" class="img-fluid" alt="Free html4 bootstrap 4 template">
            </div>
        </div>
    </div>
</div>
