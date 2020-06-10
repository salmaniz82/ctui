<?php include_once 'doc-head.php'; ?>

<div class="container-fluid bg-white">
    <div class="row">
        <div class="col-3 px-1 bg-orange-vertical-gradient position-fixed" id="sticky-sidebar" style="height: 100vh">
            <h3 class="qt-sideHeading_main text-center text-white t-lg">Quick Order</h3>


            <ul class="qto__nav">

                <li class="active"><a href="#">
                        <span class="itemIndex">1</span>
                        <span class="itemTitle">Item List</span>
                        <span class="itemDesc">
                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr.
                        </span>
                    </a></li>

                <li><a href="#">
                        <span class="itemIndex">2</span>
                        <span class="itemTitle">Item List</span>
                        <span class="itemDesc">
                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr.
                        </span>
                    </a></li>


                <li><a href="#">
                        <span class="itemIndex">3</span>
                        <span class="itemTitle">Item List</span>
                        <span class="itemDesc">
                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr.
                        </span>
                    </a></li>

            </ul>


        </div>
        <div class="col offset-3 clear-col-15-pad" id="main">

            <div class="quickHeaderWrapper post-cl-pad-pusher bg-tab-grey">

                <div class="quickTabHeader d-flex justify-content-between bd-highlight mb-3">
                    <div class="p-2 ">
                        <h4 class="qt-mainTabHeading">Make Item List</h4>
                    </div>

                    <div class="p-2">
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
                        <th scope="row" >
                            <div class="inputWrapper colorPicker">
                                <input type="text" placeholder="Select Color Code" name="colorCode" class="form-control" value="Product Name 3315 Sea Blue 1">
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
                                <input type="text" placeholder="Select Color Code" name="colorCode" class="form-control" value="Product Name 3315 Sea Red 1">
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
                        <td colspan="6">
                            <button class="btn addMoreBtn"> <i class="fas fa-plus"></i>  Add More </button>
                        </td>
                    </tr>

                    </tbody>
                </table>

            </section>


        </div>
    </div>
</div>

<?php include_once 'doc-footer.php'; ?>
