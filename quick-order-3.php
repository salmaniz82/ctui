<?php include_once 'doc-head.php'; ?>

<div class="container-fluid bg-white">
    <div class="row">

        <!-- quick order sidebar -->

        <?php

        $activeItem = 3;

        include_once 'partials/quickorder_nav.php' ?>
        <!-- quick side bar ends -->

        <div class="col offset-3 clear-col-15-pad" id="main">

            <div class="content__pad__wrapper">

            <div class="quickHeaderWrapper post-cl-pad-pusher bg-tab-grey">

                <div class="quickTabHeader d-flex justify-content-between bd-highlight">
                    <div class="">
                        <h4 class="qt-mainTabHeading">Review Your Order</h4>
                    </div>

                    <div class="p-2">
                        <i class="fal fa-times fa-2x "></i>
                    </div>
                </div>

                <p class="">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                    invidunt ut labore et dolore magna aliquyam erat, sed.</p>

            </div><!-- quickHeaderWrapper -->


            <section class="quickOrderItemGrid__wrapper bg-white post-cl-pad-pusher">

                <h4 class="deliveryCardMainheader">Delivery Duration</h4>


                <div class="quickOrderSummary">

                    <div>
                        <div class="qo_deliverPrice">USD 49.99</div>
                        <div class="qo_duration">Over-Night Delivery</div>
                        <div class="qo_details">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod.</div>
                    </div>

                    <div class="shippingAddress">
                        <div>Cecilia Chapman</div>
                        <div>711-2880 Nulla St.</div>
                        <div>Mankato Mississippi 96522.</div>
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



                <section class="bg-white post-cl-pad-pusher" id="ordered_items">

                    <h4 class="deliveryCardMainheader">Ordered Items</h4>

                    <table class="table table-borderless">
                        <thead class="">
                        <tr>
                            <th scope="col" class="qt_th">

                                color


                            </th>
                            <th scope="col" class="qt_th" style="width: 160px">Yardage</th>
                            <th scope="col" class="qt_th" style="width: 160px">Ticket</th>
                            <th scope="col" class="qt_th" style="width: 160px">Quantity</th>
                            <th scope="col" class="qt_th text-center" style="width: 110px; text-align: left !important">Price</th>
                            <th scope="col">&nbsp;</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php


                        $orderItemsDetails = array(

                                array('id'=> 1, 'name'=> '01-000022-3315 Sea Pink 1', 'color'=> '#af7cff', 'yardage'=> '5000', 'ticket'=> 100, 'quantity'=> 5),
                                array('id'=> 2, 'name'=> '01-000022-3315 Sea Pink 1', 'color'=> '#7c86ff', 'yardage'=> '5000', 'ticket'=> 100, 'quantity'=> 5),
                                array('id'=> 3, 'name'=> '01-000022-3315 Sea Pink 1', 'color'=> '#1ee89a', 'yardage'=> '5000', 'ticket'=> 100, 'quantity'=> 5),
                                array('id'=> 4, 'name'=> '01-000022-3315 Sea Pink 1', 'color'=> '#4de81e', 'yardage'=> '5000', 'ticket'=> 100, 'quantity'=> 5),
                                array('id'=> 5, 'name'=> '01-000022-3315 Sea Pink 1', 'color'=> '#c9e81e', 'yardage'=> '5000', 'ticket'=> 100, 'quantity'=> 5),
                                array('id'=> 6, 'name'=> '01-000022-3315 Sea Pink 1', 'color'=> '#e81e6c', 'yardage'=> '5000', 'ticket'=> 100, 'quantity'=> 5),
                                array('id'=> 7, 'name'=> '01-000022-3315 Sea Pink 1', 'color'=> '#1ea2e8', 'yardage'=> '5000', 'ticket'=> 100, 'quantity'=> 5),
                                array('id'=> 8, 'name'=> '01-000022-3315 Sea Pink 1', 'color'=> '#831ee8', 'yardage'=> '5000', 'ticket'=> 100, 'quantity'=> 5),
                                array('id'=> 9, 'name'=> '01-000022-3315 Sea Pink 1', 'color'=> '#a2e81e', 'yardage'=> '5000', 'ticket'=> 100, 'quantity'=> 5),
                                array('id'=> 9, 'name'=> '01-000022-3315 Sea Pink 1', 'color'=> '#e81e3d', 'yardage'=> '5000', 'ticket'=> 100, 'quantity'=> 5)

                        );

                        ?>


                        <?php foreach ($orderItemsDetails as $key => $item) :?>
                        <tr>
                            <td scope="row">

                                <div class="itemInfoWrap">
                                    <span class="colorBallItemInfo" data-bgColor="<?=$item['color']?>"></span>
                                    <span class="itemName"><?=$item['name']?></span>
                                    <?php if($item['id'] == 8) :?>

                                    <p class="alertNote danger">This shade is not available in selected delivery option</p>

                                    <?php endif ?>

                                </div>

                            </td>

                            <td>
                                5000
                            </td>
                            <td>
                                100
                            </td>
                            <td>

                                <i class="fal fa-minus-circle fa-1-2x"></i>
                                <span class="qo_itemInfoQuantity">5</span>
                                <i class="fal fa-plus-circle fa-1-2x"></i>

                            </td>
                            <td class="text-left" >
                                <span class="vam">$ 1236</span>
                            </td>
                            <td class="text-left"><a href="#" class="vam fas fa-trash c-gray-lt trashAnchor"></a></td>
                        </tr>

                        <?php endforeach;?>

                        <tr class="divider-top-gray">
                            <td colspan="6" class=""></td>
                        </tr>

                        <tr>
                            <td colspan="4" class="text-right qoBottomOrderSummary">

                                <div class="qo_orderSummary_ItemCost">Item Cost</div>
                                <div class="qo_orderSummary_deliveryCost">Delivery Cost</div>
                                <div class="qo_orderSummary_discount">Discount</div>
                                <div class="qo_orderSummary_taxes">Taxes</div>
                                <div class="qo_orderSummary_total">Total</div>

                            </td>
                            <td colspan="2" class="text-left qoBottomOrderSummary">

                                <div class="qo_orderSummary_ItemCost">USD 1907</div>
                                <div class="qo_orderSummary_deliveryCost">USD 80</div>
                                <div class="qo_orderSummary_discount"><a href="#">Have a Coupon?</a></div>
                                <div class="qo_orderSummary_taxes">USD 0.0</div>
                                <div class="qo_orderSummary_total">USD 1987</div>

                            </td>
                        </tr>

                        </tbody>
                    </table>

                </section>








            <div class="clearfix">&nbsp;</div>


            <section class="">

                <div class="">

                    <div class="pad-lr-20 pad-b-20p">

                        <div class="w-100 divider-top-gray">


                            <div class="row no-gutters">

                                <div class="col-6">
                                    <button type="button" class="btn lightCustom mt-30p">Back</button>

                                </div>

                                <div class="col-6">
                                    <div class="actionConrolls d-flex justify-content-end">
                                        <span class="next__arrowText">Next</span>
                                        <a href="#" class="actionItem next orange "></a>
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
