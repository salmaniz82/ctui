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

                        <h4>Your Cart</h4>


                        <table class="table table-borderless t-xs">

                            <thead>
                            <tr>
                                <th scope="col">&nbsp;</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Price</th>
                                <th scope="col" style="width: 20px">&nbsp;</th>

                            </tr>
                            </thead>

                            <tbody>
                            <tr>
                                <td scope="row">
                                    <span>color</span>
                                    <div>01-000022-3315 Sea Pink 1</div>
                                    <span>yargade: <strong>5000</strong></span>
                                    <span>Ticket: <strong>100</strong></span>
                                </td>
                                <td>- 5 +</td>
                                <td>$ 2.45</td>
                                <td><a href="#" class="fas fa-trash fa-xs c-gray-lt trashAnchor"></a></td>
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

