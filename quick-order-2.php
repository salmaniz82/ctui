<?php include_once 'doc-head.php'; ?>

<div class="container-fluid bg-white">
    <div class="row">

        <!-- quick order sidebar -->

        <?php

        $activeItem = 2;

        include_once 'partials/quickorder_nav.php' ?>
        <!-- quick side bar ends -->

        <div class="col offset-3 clear-col-15-pad" id="main">

            <div class="content__pad__wrapper">

            <div class="quickHeaderWrapper post-cl-pad-pusher bg-tab-grey">

                <div class="quickTabHeader d-flex justify-content-between bd-highlight">
                    <div class="">
                        <h4 class="qt-mainTabHeading">Delivery Information</h4>
                    </div>

                    <div class="p-2">
                        <i class="fal fa-times fa-2x"></i>
                    </div>
                </div>

                <p class="">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                    invidunt ut labore et dolore magna aliquyam erat, sed.</p>

            </div><!-- quickHeaderWrapper -->


            <section class="quickOrderItemGrid__wrapper bg-white post-cl-pad-pusher">

                <h4 class="deliveryCardMainheader">Delivery Duration</h4>

                <div class="deliveryCard">

                    <div>
                        <div class="qo_deliverPrice">USD 49.99</div>
                        <div class="qo_duration">Over-Night Delivery</div>
                        <div class="qo_details">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod.</div>
                    </div>
                    <div>
                        <div class="qo_deliverPrice">USD 25</div>
                        <div class="qo_duration">Express Delivery</div>
                        <div class="qo_details">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod.</div>
                    </div>


                    <div>
                        <div class="qo_deliverPrice">Free</div>
                        <div class="qo_duration">10 days delivery</div>
                        <div class="qo_details">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod.</div>
                    </div>

                </div>

                <p class="qo_note"> <span class="c-brand-pink">Note: </span>Few items in your order are only available for 10 Days Delivery. If you select over-night or express delivery, your order will be split into 2 orders.</p>


            </section>



            <section class="bg-white post-cl-pad-pusher qo_shippingAddress">
               <h4 class="deliveryCardMainheader">Shipping Address</h4>
                <div class="shippingCards">

                    <div class="shippingAddress">
                        <div>Cecilia Chapman</div>
                        <div>711-2880 Nulla St.</div>
                        <div>Mankato Mississippi 96522.</div>
                    </div>
                    <div class="shippingAddress">
                        <div>Cecilia Chapman</div>
                        <div>711-2880 Nulla St.</div>
                        <div>Mankato Mississippi 96522.</div>
                    </div>
                    <div style="opacity: 0; visibility: hidden">&nbsp;</div>
                </div>
            </section>


            <section class="bg-white post-cl-pad-pusher qo_shippingAddress">
                <h4 class="deliveryCardMainheader">Payment Method</h4>
                <div class="qoPaymentCards">

                    <div>
                        <div class="cashOnDeliveryHeading">Cash on delivery</div>
                        <div class="qo_details">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod.</div>
                    </div>
                    
                    <div>
                        <div>
                            <img src="images/icons/sim.svg" alt="" class="cardSim">
                        </div>

                        <div class="cardDigitWrapper"><span class="cardDigit Encryped">****</span> <span class="cardDigit Encryped">****</span> <span class="cardDigit Encryped">****</span> <span class="cardDigit plain">0000</span></div>


                        <div class="cardMeta d-flex justify-content-between">
                            <div class="holderName">JOHN SMITH</div>
                            <div class="expiry">
                                <span class="validThroghText">VALID<br>THRU</span>
                                <span class="expireDAte">12/22</span>

                            </div>
                        </div>

                    </div>


                    <div>
                        <div>
                            <img src="images/icons/sim.svg" alt="" class="cardSim">
                        </div>

                        <div class="cardDigitWrapper"><span class="cardDigit Encryped">****</span> <span class="cardDigit Encryped">****</span> <span class="cardDigit Encryped">****</span> <span class="cardDigit plain">0000</span></div>

                        <div class="cardMeta d-flex justify-content-between">
                            <div class="holderName">JOHN SMITH</div>
                            <div class="expiry">
                                <span class="validThroghText">VALID<br>THRU</span>
                                <span class="expireDAte">12/22</span>
                            </div>
                        </div>
                    </div>

                </div>
            </section>

            <div class="clearfix">&nbsp;</div>


            <section class="">

                <div class="">

                    <div class="pad-lr-20 pad-b-20p">

                        <div class="w-100 divider-top-gray">


                            <div class="row no-gutters">

                                <div class="col-8">
                                    <button type="button" class="btn lightCustom mt-30p">Add More Item</button>
                                    <img class="mt-30p" src="images/quick-order/free-express-shipping.svg" alt="">
                                </div>

                                <div class="col-4">
                                    <div class="actionConrolls d-flex justify-content-end">
                                        <a href="/quick-order-3.php" class="actionItem next orange"></a>
                                    </div>
                                </div>

                            </div>

                        </div>



                    </div>





                </div>



            </section>
            </div><!-- content__pad__wrapper -->
        </div>
    </div>
</div>

<?php include_once 'doc-footer.php'; ?>
