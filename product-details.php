<?php
    $page_slug =  "product-details";
    include_once 'doc-head.php';
    include_once 'main-header.php';
?>

<div class="clearfix header_clear"></div>


<div class="container-fluid" id="productDetailHero">


    <div class="contentWrapper text-white">
        <div class="row">
            <div class="col-8">
                <span class="pd-breadcrum"> HOME  /  THREAD  /  VISCOSE - CANDLE BURAQ </span>
                <div class="pd_name">
                    Filament Viscose
                </div>
            </div>
            <div class="col-4">
                <div class="pd_price fa-pull-right">
                    $2.60 – $6.00
                </div>
            </div>
        </div>
    </div>
</div>

<div class="contentWrapper">

    <div class="row mt-5">

        <div class="col-lg-3 col-md-4">
            <div class="svgConeWrapper">

            <?php include_once 'images/cones-svg/nocolor.svg'?>
            </div>


            <div class="pdSideTicketWrapper">

                <div class="ticketItem">
                        <div class="ticketInner leftItem">
                            <div class="pdColorBall" data-bgcolor="#f0a527" style="background-color: rgb(240, 165, 39);">
                            </div>
                        </div>
                        <div class="ticketInner rightItem">
                            <span class="t-xs font-weight-bold dtr">01-000006-3341 Solid Pink</span>
                            <span class="t-xxs dtr">Yardage: <span class="t-xs font-weight-bold">500</span> </span>
                            <span class="t-xxs dtr">Ticket : <span class="t-xs font-weight-bold"> 100 </span> </span>

                            <div class="mt-2 ticketSmallQuantity">
                                <span>Quantity</span>
                                    <span class="customInputWrapper">
                                <i class="fas fa-minus fa-sm"></i>
                                    <span class="qtyDigit">5</span>
                                <i class="fas fa-plus fa-sm"></i>
                                </span>
                            </div>

                        </div>

                    <div class="text-center">

                        <a href="#" class="pdTicketAddtoCart">Add to cart</a>

                    </div>

                </div>

            </div>


        </div>
        <div class="col-ld-3 col-md-8">

            <div id="gravityProductOveralWrapper">


                <div class="row no-gutters">

                    <div class="col-7">

                        <div class="d-flex justify-content-between groupItems">
                            <label>Yardage</label>
                            <input type="text" class="form-control">
                            <input type="text" class="form-control">

                        </div>



                        <div class="d-flex justify-content-between groupItems">
                            <label>Ticket</label>
                            <input type="text" class="form-control">
                            <input type="text" class="form-control">
                            <input type="text" class="form-control">
                        </div>

                        <div class="d-flex justify-content-between groupItems">
                            <label class="align-self-center">Quantity</label>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text no-bg">
                                        <i class="fas fa-minus"></i>
                                    </span>
                                </div>
                                <input type="tel" class="form-control qtyCustomInput text-center" value="15">
                                <div class="input-group-append">
                                    <span class="input-group-text no-bg">
                                        <i class="fas fa-plus"></i>
                                    </span>
                                </div>
                            </div>

                        </div>



                    </div>

                    <div class="col-5">
                        <div class="gravityPriceWrapper text-right">
                            <span class="pdGravityPrice">Price</span>
                            <div><span class="gdcurrency">USD</span>&nbsp;<span class="gdamount">2.45</span></div>
                        </div>

                        <div class="text-right" style="margin-top: 30px">
                            <a href="#" class="gravityAddtoCart">Add to cart</a>
                        </div>

                        <div class="gdnote">
                            <span> <span class="c-brand-pink">Note:</span> Only Available in 10 days delivery</span>
                        </div>




                    </div>

                </div>



            </div>




            <form action="#" method="post" class="" style="margin-top: 40px">

                <div class="form-group has-search">
                    <span class="fal fa-search form-control-feedback"></span>
                    <input type="text" class="form-control" placeholder="Search for Color Shades">
                </div>

            </form>

            <div class="clearfix"></div>

            <div class="pdColorWrapper">
                <?php

                $productItemColor = array(
                    '#dccdb1', '#e8d7a2', '#efc88e', '#e3b776', '#e7b163', '#f4b45d', '#f0b25f', '#d79359', '#c88547',
                    '#f0b25f', '#f0a527', '#f0a527', '#f1b72a', '#d79e23', '#d79e23', '#e78c22', '#d1821e', '#fd7322',
                    '#ec8635', '#e76f2b', '#e76f2b', '#df612b', '#e36a3c', '#df7c1f','#e6582b','#d1411b','#b65230',
                    '#d5a696','#e6bfb3','#edc7b0','#e2bc9f','#ecaa87','#ed9f88','#d96863','#e49397','#dd747f',
                    '#742a4e','#9b3678','#a03252','#bc362f','#b73026','#a92e32','#a92e32','#b73026', '#981e2b',
                    '#852231','#6d2b2e','#5b5882','#5d232b','#5f2b33','#4b2a2c','#e7bbc0','#e8a9b1','#e7bbc0',

                    '#742a4e','#9b3678','#a03252','#bc362f','#b73026','#a92e32','#a92e32','#b73026', '#981e2b',
                    '#852231','#6d2b2e','#5b5882','#5d232b','#5f2b33','#4b2a2c','#e7bbc0','#e8a9b1','#e7bbc0'

                );

                for($i=0; $i< sizeof($productItemColor); $i++) :?>

                <div class="pdItem <?php  if($i > 53) echo 'disabled'; ?>">
                    <div class="pdColorBall <?php echo ($i == 9) ? 'has-discount': ''?>" data-bgColor="<?= $productItemColor[$i]?>">
                        <span class="discountPlaceholder">20% OFF</span>
                    </div>

                    <div class="pdListDetails">01-000006-3341 Solid Pink</div>
                </div>

                <?php endfor;?>

                <div class="overlaySemiTransReveal">

                </div>

                    <div class="pdOveralyAddMoreWrapper btn addMoreBtn">Load More</div>

            </div>

        </div>
    </div>
</div>

<div class="contentWrapper">
    <div class="row">
        <div class="col-6">
            <h4 class="pdSectionHeading">Product Details</h4>
            <p class="pdSectionDetails">Candle Buraq is made from Viscose Filament Yarn. Viscose Emboridery Threads are the most widely used emboirdery threads in the world, known for their luxurious feel, vivid colours, brilliant sheen and superior flexibility.</p>
            <p class="pdSectionDetails">Made from the finest raw materials and engineered to perfection Candle Buraq can run at highest machines speeds, boosting productivity and reducing down-time.</p>
            <p class="pdSectionDetails">Candle Buraq is available in plethora of colours with overall excellent fastness properties.</p>
            <p class="pdSectionDetails">Certified under Oekotex Standard 100, Candle Buraq is safe from harmful substances.</p>
        </div>

        <div class="col-6">
            <div class="d-flex justify-content-between">
                <h4 class="pdSectionHeading">Application</h4>
                <a href="#" class="sowThreads">Sow & Threads</a>
            </div>


            <div class="appChipWrapper">

                <div>
                    <img src="images/product-details/vectors/pattern.svg" alt="">
                    <span>Decorative Fabrics</span>
                </div>

                <div>
                    <img src="images/product-details/vectors/fabric.svg" alt="">
                    <span>Decorative Seams</span>
                </div>

                <div>
                    <img src="images/product-details/vectors/lion.svg" alt="">
                    <span>Monograms, Uniforms</span>
                </div>

                <div>
                    <img src="images/product-details/vectors/christmas.svg" alt="">
                    <span>Appliques</span>
                </div>

                <div>
                    <img src="images/product-details/vectors/shirt.svg" alt="">
                    <span>Sportswear and Athletic Wear</span>
                </div>


            </div>



        </div>
    </div>
</div>



<div class="contentWrapper">

    <div class="row">

        <div class="col-12">
            <h4 class="pdSectionHeading">More of Our Products</h4>
        </div>

    </div>

</div>

<div class="productDetail_BottomWhiteBackWhiteOverlay"></div>

<div class="contentWrapper position-relative">



        <div class="row owl-carousel owl-theme" id="our-products">

            <div class="item">
                <div class="product_itemBox">
                    <div class="top-half">
                        <img src="images/products_new/VISCOSE_RAYON_EMBROIDERY_THREAD _min.jpg" class="productImage">
                    </div>

                    <div class="bottom-half bg-orange-gradient">


                        <div class="categtory">Embroidery</div>
                        <div class="product_name">Viscose Rayon</div>
                        <div class="product_details">
                            <p class="addReadMore showlesscontent">Candle Buraq Viscose Embroidery Thread is made from the finest raw materials. Wi<span class="SecSec">th its softness, lustre and flexibility, buraq is an ideal choice for beautiful embroidery.
								The superior construction and finish allows for exquisite machine performance and optimum stitch quality.
								Available in different thicknesses.</span><span class="readMore" title="Click to Show More"> ... Read More</span><span class="readLess" title="Click to Show Less"> Read Less</span></p>


                        </div>


                    </div>
                </div>
            </div>

            <div class="item">
                <div class="product_itemBox">
                    <div class="top-half">
                        <img src="images/products_new/POLYESTER_EMBROIDERY_THREAD.jpg" class="productImage">
                    </div>

                    <div class="bottom-half bg-yellow-gradient">


                        <div class="categtory">Embroidery</div>
                        <div class="product_name">Polyester</div>
                        <div class="product_details">
                            <p class="addReadMore showlesscontent">Candle Hadid is a polyester embroidery thread engineered to achieve excellent lu<span class="SecSec">stre. Hadid has excellent sheen, strength and abrasion resistance.
								Characterized by superior chemical resistance, color, bleach and light fastness, this thread is suitable for embroidery in commercial and industrial applications.
								It offers a superior break-free performance on high speed embroidery machines.</span><span class="readMore" title="Click to Show More"> ... Read More</span><span class="readLess" title="Click to Show Less"> Read Less</span></p>

                        </div>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="product_itemBox">
                    <div class="top-half">
                        <img src="images/products_new/Metallic_yarn_min.jpg" class="productImage">
                    </div>

                    <div class="bottom-half bg-brown-gradient">


                        <div class="categtory">Embroidery</div>
                        <div class="product_name">Mettalic</div>
                        <div class="product_details">
                            <p class="addReadMore showlesscontent">Candle Najm is a composite thread made up of metallised polyester film wrapped a<span class="SecSec">round the core yarn. The metallic finish makes it perfect for decorative emboridery on luxurious fabrics and garments.
								The thread is especially designed to work at high-speed industrial embroidery machines without any problems.</span><span class="readMore" title="Click to Show More"> ... Read More</span><span class="readLess" title="Click to Show Less"> Read Less</span></p>

                        </div>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="product_itemBox">
                    <div class="top-half">
                        <img src="images/products_new/Sequins_min.jpg" class="productImage">
                    </div>

                    <div class="bottom-half bg-green-gradient">
                        <div class="categtory">Embroidery</div>
                        <div class="product_name">Sequins</div>
                        <div class="product_details">
                            <p class="addReadMore showlesscontent">Sequins are perfect to add that extra bit of sparkle to the embroidery.
                                <span class="SecSec">	Candle sequin is made on precise machines to make sure the sequins run trouble-free on high-speed machines.
								Available in a variety of shapes, sizes, textures and effects to give you the look that you require.</span><span class="readMore" title="Click to Show More"> ... Read More</span><span class="readLess" title="Click to Show Less"> Read Less</span></p>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    <div class="actionConrolls pdSliderControls freeze">
        <a href="#" class="actionItem pdOwl previous"></a>
        <a href="#" class="actionItem pdOwl next"></a>
    </div>

    </div>




</div>





<?php
include_once 'footer.php';
include_once 'doc-footer.php';
?>
