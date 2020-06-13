<?php include_once 'doc-head.php'; ?>

<div class="container-fluid bg-white">
    <div class="row">

        <!-- quick order sidebar -->

        <?php

        $activeItem = 1;

        include_once 'partials/quickorder_nav.php' ?>
        <!-- quick side bar ends -->

        <div class="col offset-3 clear-col-15-pad" id="main">

            <div class="quickHeaderWrapper post-cl-pad-pusher bg-tab-grey">

                <div class="quickTabHeader d-flex justify-content-between bd-highlight">
                    <div class="">
                        <h4 class="qt-mainTabHeading">Make Item List</h4>
                    </div>

                    <div class="">
                        <i class="fal fa-times fa-2x "></i>
                    </div>
                </div>

                <p class="">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                    invidunt ut labore et dolore magna aliquyam erat, sed.</p>


            </div><!-- quickHeaderWrapper -->


            <section class="quickOrderItemGrid__wrapper bg-white post-cl-pad-pusher">


                <table class="table table-borderless">
                    <thead class="">
                    <tr>
                        <th scope="col" class="qt_th">Color Code</th>
                        <th scope="col" class="qt_th" style="width: 160px">Yardage</th>
                        <th scope="col" class="qt_th" style="width: 160px">Ticket</th>
                        <th scope="col" class="qt_th" style="width: 160px">Quantity</th>
                        <th scope="col" class="qt_th text-center" style="width: 110px">Price</th>
                        <th scope="col">&nbsp;</th>
                    </tr>
                    </thead>
                    <tbody>

                    <tr>
                        <th scope="row">
                            <div class="inputWrapper colorPicker">
                                <input type="text" placeholder="Select Color Code" name="colorCode" class="form-control"
                                       value="Product Name 3315 Sea Blue 1">
                                <span class="colorBall" data-bgColor="#4bb3ff"></span>
                            </div>

                        </th>

                        <td>
                            <select name="yardage" id="" name="yardage" class="form-control">
                                <option value="">Select</option>
                                <option value="">1000</option>
                                <option value="">2000</option>
                                <option value="" selected>3000</option>
                                <option value="">4000</option>
                                <option value="">5000</option>
                            </select>
                        </td>
                        <td>
                            <select name="Tickets" id="" name="yardage" class="form-control">
                                <option value="">Select</option>
                                <option value="" selected>100</option>
                                <option value="">200</option>
                                <option value="">300</option>
                                <option value="">400</option>
                                <option value="">500</option>
                                <option value="">600</option>
                            </select>
                        </td>
                        <td>

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

                        </td>
                        <td class="text-center">
                            <span class="vam">$ 1236</span>
                        </td>
                        <td class="text-left"><a href="#" class="vam fas fa-trash c-gray-lt trashAnchor"></a></td>

                    </tr>


                    <tr>
                        <th scope="row">

                            <div class="inputWrapper colorPicker">
                                <input type="text" placeholder="Select Color Code" name="colorCode" class="form-control"
                                       value="Product Name 3315 Sea Red 1">
                                <span class="colorBall" data-bgColor="#ff4b4b"></span>
                            </div>

                        </th>

                        <td>
                            <select name="yardage" id="" name="yardage" class="form-control">
                                <option value="">Select</option>
                                <option value="">1000</option>
                                <option value="">2000</option>
                                <option value="" selected>3000</option>
                                <option value="">4000</option>
                                <option value="">5000</option>
                            </select>
                        </td>
                        <td>
                            <select name="Tickets" id="" name="yardage" class="form-control">
                                <option value="">Select</option>
                                <option value="">100</option>
                                <option value="">200</option>
                                <option value="">300</option>
                                <option value="" selected>400</option>
                                <option value="">500</option>
                                <option value="">600</option>
                            </select>
                        </td>
                        <td>

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

                        </td>
                        <td class="text-center">
                            <span class="vam">$ 1236</span>
                        </td>
                        <td class="text-left"><a href="#" class="vam fas fa-trash c-gray-lt trashAnchor"></a></td>

                    </tr>


                    <tr>
                        <th scope="row">

                            <div class="inputWrapper colorPicker">

                                <input type="text" placeholder="Select Color Code" name="colorCode" class="form-control" value="">

                            </div>

                        </th>

                        <td>
                            <select name="yardage" id="" name="yardage" class="form-control">
                                <option value="">Select</option>
                                <option value="">1000</option>
                                <option value="">2000</option>
                                <option value="">3000</option>
                                <option value="">4000</option>
                                <option value="">5000</option>
                            </select>
                        </td>
                        <td>
                            <select name="Tickets" id="" name="yardage" class="form-control">
                                <option value="">Select</option>
                                <option value="">100</option>
                                <option value="">200</option>
                                <option value="">300</option>
                                <option value="">400</option>
                                <option value="">500</option>
                                <option value="">600</option>
                            </select>
                        </td>
                        <td>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text no-bg">
                                        <i class="fas fa-minus"></i>
                                    </span>
                                </div>
                                <input type="tel" class="form-control qtyCustomInput text-center" value="1">
                                <div class="input-group-append">
                                    <span class="input-group-text no-bg">
                                        <i class="fas fa-plus"></i>
                                    </span>
                                </div>
                            </div>

                        </td>
                        <td class="text-center">
                            <span class="vam">$ 1236</span>
                        </td>
                        <td class="text-left"><a href="#" class="vam fas fa-trash c-gray-lt trashAnchor"></a></td>

                    </tr>

                    <tr>
                        <td colspan="3">
                            <button class="btn addMoreBtn"><i class="fas fa-plus"></i> Add More</button>
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

                            <div class="col-4">

                                <div class="d-flex quickOrderMeta mt-30p">
                                    <div class="flex-48p-base text-right qk_order_metaLightBottom">VAT:</div>
                                    <div class="flex-48p-base text-left  qk_order_metaLightBottom ml-5p">USD 15.67</div>
                                </div>

                                <div class="d-flex quickOrderMeta">
                                    <div class="flex-48p-base text-right t-20px">Total Price:</div>
                                    <div class="flex-48p-base text-left t-20px ml-5p font-weight-bold">USD 645</div>
                                </div>

                            </div>
                            <div class="col-4">
                                <img class="" src="images/quick-order/discount/discount.png" srcset="images/quick-order/discount/discount@2x.png 2x, images/quick-order/discount/discount@3x.png 3x" class="Group-529">
                            </div>
                            <div class="col-4">

                                <div class="actionConrolls d-flex justify-content-end">
                                    <a href="/quick-order-2.php" class="actionItem next orange "></a>
                                </div>

                            </div>

                        </div>

                        </div>



                    </div>





                </div>



            </section>

        </div>
    </div>
</div>

<?php include_once 'doc-footer.php'; ?>

