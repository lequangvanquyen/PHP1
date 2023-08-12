<div class="page-banner-section section bg-gray">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="page-banner text-center">
                    <h1>Shopping Cart</h1>
                    <ul class="page-breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li>Cart</li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</div>
<!--Cart section start-->
<div class="cart-section section pt-30 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50  pb-70 pb-lg-50 pb-md-40 pb-sm-30 pb-xs-20">
    <div class="container">
        <div class="row">

            <div class="col-12">
                <!-- Cart Table -->
                <div class="cart-table table-responsive mb-30">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="pro-thumbnail">Image</th>
                                <th class="pro-title">Product</th>
                                <th class="pro-price">Price</th>
                                <th class="pro-quantity">Quantity</th>
                                <th class="pro-subtotal">Total</th>
                                <th class="pro-remove">Remove</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (isset($_SESSION['giohang']) && is_array($_SESSION['giohang'])) {
                                $i = 0;
                                foreach ($_SESSION['giohang'] as $item) {
                                    extract($item);
                                    $tt = $price * $soluong;
                                    $linkdel = "index.php?page=delcart&ind=" . $i;
                                    echo '<tr>
                                                   <td class="pro-thumbnail"><a href="#"><img
                                                               src="view/layout/assets/images/product/' . $img . '" alt="Product"></a></td>
                                                   <td class="pro-title"><a href="#">' . $name . '</a></td>
                                                   <td class="pro-price"><span>$' . $price . '</span></td>
                                                   <td class="pro-quantity">
                                                      <div class="pro-qty"><input type="number" value="' . $soluong . '"></div>
                                                   </td>
                                                   <td class="pro-subtotal"><span>$' . $tt . '</span></td>
                                                   <td class="pro-remove"><a href="' . $linkdel . '"><i class="fa fa-trash-o"></i></a></td>
                                             </tr>';
                                    $i++;
                                }
                            }

                            ?>

                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="4" class="text-right">
                                    <h4 style="line-height: 45px;">Tổng:</h4>
                                </td>
                                <td class="text-center">
                                    <h4 style="line-height: 45px;">$200.000</h4>
                                </td>
                                <td class="text-center">
                                    <div class="cart-summary-button">
                                        <a style="color: #fff;" class="btn" href="index.php?page=checkout">Checkout</a>
                                    </div>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>


            </div>

        </div>
    </div>
</div>
<!--Cart section end-->