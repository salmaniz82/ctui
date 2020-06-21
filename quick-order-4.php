<?php
    $page_slug =  "quick-order-4";
    include_once 'doc-head.php';
    include_once 'main-header.php';
?>



    <div class="container-fluid header_clear bg-white">

        <div class="contentWrapper">

            <div class="row">

                <div class="col-lg-8 col-md-8 col-sm-12">
                    <?php include_once 'partials/quick_stage_two_inner.php'?>
                </div>

                <div class="col-3">

                    <div id="falyoutCardHolder">

                        <h4 style="margin-left: 20px">Your Cart</h4>


                        <table class="table table-borderless t-xs qcCartDetails">

                            <thead>
                            <tr>
                                <th scope="col">&nbsp;</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Price</th>
                                <th scope="col" style="width: 20px">&nbsp;</th>

                            </tr>
                            </thead>

                            <tbody>
                            <tr class="divider-bottom-gray">
                                <td scope="row">
                                    <span class="qc_color_cube" data-bgcolor="#af7cff"></span>
                                    <div><strong>01-000022-3315 Sea Pink 1</strong></div>
                                    <span>yargade: <strong>5000</strong></span>
                                    <span>Ticket: <strong>100</strong></span>
                                </td>
                                <td><i class="fal fa-minus-circle"></i> <span class="qcQty">5</span> <i class="fal fa-plus-circle"></i></td>
                                <td>$ 2.45</td>
                                <td><a href="#" class="fas fa-trash fa-sm c-gray-lt trashAnchor"></a></td>
                            </tr>

                            <tr class="divider-bottom-gray">
                                <td scope="row">
                                    <span class="qc_color_cube" data-bgcolor="#b65230"></span>
                                    <div><strong>01-000022-3315 Sea Pink 1</strong></div>
                                    <span>yargade: <strong>5000</strong></span>
                                    <span>Ticket: <strong>100</strong></span>
                                </td>
                                <td><i class="fal fa-minus-circle"></i> <span class="qcQty">5</span> <i class="fal fa-plus-circle"></i></td>
                                <td>$ 2.45</td>
                                <td><a href="#" class="fas fa-trash fa-sm c-gray-lt trashAnchor"></a></td>
                            </tr>

                            <tr class="divider-bottom-gray">
                                <td scope="row">
                                    <span class="qc_color_cube" data-bgcolor="#efc88e"></span>
                                    <div><strong>01-000022-3315 Sea Pink 1</strong></div>
                                    <span>yargade: <strong>5000</strong></span>
                                    <span>Ticket: <strong>100</strong></span>
                                </td>
                                <td><i class="fal fa-minus-circle"></i> <span class="qcQty">5</span> <i class="fal fa-plus-circle"></i></td>
                                <td>$ 2.45</td>
                                <td><a href="#" class="fas fa-trash fa-sm c-gray-lt trashAnchor"></a></td>
                            </tr>

                            <tr class="divider-bottom-gray">
                                <td scope="row">
                                    <span class="qc_color_cube" data-bgcolor="#981e2b"></span>
                                    <div><strong>01-000022-3315 Sea Pink 1</strong></div>
                                    <span>yargade: <strong>5000</strong></span>
                                    <span>Ticket: <strong>100</strong></span>
                                </td>
                                <td><i class="fal fa-minus-circle"></i> <span class="qcQty">5</span> <i class="fal fa-plus-circle"></i></td>
                                <td>$ 2.45</td>
                                <td><a href="#" class="fas fa-trash fa-sm c-gray-lt trashAnchor"></a></td>
                            </tr>


                            <tr>
                                <td colspan="4">

                                    <div class="text-white text-center t-md totalSummary">Items Total: USD 1987</div>

                                </td>
                            </tr>

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>


        </div>

    </div>



<?php
    include_once 'footer.php';
    include_once 'doc-footer.php';
?>

