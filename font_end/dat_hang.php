
<!--== End Header Section ==-->

<!--== Start Page Breadcrumb ==-->
<div class="page-breadcrumb-wrap">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-breadcrumb">
                    <ul class="nav">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="shop.html">Shop</a></li>
                        <li><a href="shop.html" class="active">Checkout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--== End Page Breadcrumb ==-->

<!--== Page Content Wrapper Start ==-->
<div id="page-content-wrapper">
    <div class="container">
        <!--== Checkout Page Content Area ==-->
        <div class="row">
            <div class="col-12">
                <!-- Checkout Login Coupon Accordion Start -->
                <!-- Checkout Login Coupon Accordion End -->
            </div>
        </div>

        <form action="index.php?act=bill_confirm" method="post">
                

          <div class="row">
            <!-- Checkout Billing Details -->
            <div class="col-lg-6">
                <div class="checkout-billing-details-wrap">
                    <h2>Billing Details</h2>
                    <div class="billing-form-wrap">
                        <form action="#">
                            <?php 
                                 if (isset($_SESSION['user'])) {
                                    $name_tk = $_SESSION['user']['name_tk'];
                                    $email_tk = $_SESSION['user']['email_tk'];
                                    $address_tk = $_SESSION['user']['address_tk'];
                                    $tel_tk = $_SESSION['user']['tel_tk'];
                                 }else{
                                    $name_tk = "";
                                    $email_tk = "";
                                    $address_tk = "";
                                    $tel_tk = "";
                                 }
                            ?>
                            <div class="row" style="width: 204%;">
                                <div class="col-md-6">
                                    <div class="single-input-item">
                                        <label for="f_name" class="required">T??n : </label>
                                        <input type="text" name="name_tk" value="<?php echo $name_tk?>" id="f_name" placeholder="First Name" >
                                    </div>
                                </div>
                            </div>

                            <div class="single-input-item">
                                <label for="email" class="required">Email : </label>
                                <input type="email" name="email_tk" value="<?php echo $email_tk?>" id="email" placeholder="Email Address"/>
                            </div>

                            <div class="single-input-item">
                                <label for="com-name">?????a ch???</label>
                                <input type="text" name="address_tk" value="<?php echo $address_tk?>" id="com-name" placeholder="personal address"/>
                            </div>
                            <div class="single-input-item">
                                <label for="street-address" class="required">s??? ??i???n tho???i</label>
                                <input type="text" name="tel_tk" value="<?php echo $tel_tk?>" id="street-address" placeholder="Phone"/>
                            </div>

                            <div class="single-input-item">
                                <label for="ordernote">ghi ch??</label>
                                <textarea name="ordernote" id="ordernote" cols="30" rows="3"
                                          placeholder="Notes"></textarea>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Order Summary Details -->
            <div class="col-lg-6 mt-5 mt-lg-0">
                <div class="order-summary-details">
                    <h2>Your Order Summary</h2>
                    <div class="order-summary-content">
                        <!-- Order Summary Table -->
                        <div class="order-summary-table table-responsive text-center">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>S???n ph???m</th>
                                    <th>Gi?? ti???n</th>
                                </tr>
                                </thead>

                                <?php
                                  $tongtien = 0;
                                  foreach ($_SESSION['mua_cart'] as $cart) {
                                        $ttien = $cart[3] * $cart[4];
                                        $tongtien += $ttien;
                                       echo '
                                       <tbody>
                                
                                       <tr>
                                           <td>'.$cart[1].' <strong> x 1</strong></td>
                                           <td>$'.number_format($cart[3]).'</td>
                                       </tr>
                                       </tbody>
                                        ';
                                    }
                                    echo '
                                    <tfoot>
                                     <tr>
                                    <td>T???ng ti???n</td>
                                    <td><strong>$'.number_format($tongtien).'</strong></td>
                                    </tr>
                                    </tfoot>
                                    ';
                                ?>
                            </table>
                        </div>

                        <!-- Order Payment Method -->
                        <div class="order-payment-method">
                            <div class="single-payment-method show">
                                <div class="payment-method-name">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="cashon" value="1" name="paymentmethod" value="cash"
                                               class="custom-control-input" checked/>
                                        <label class="custom-control-label" for="cashon">Thanh to??n khi giao h??ng</label>
                                    </div>
                                </div>
                                <div class="payment-method-details" data-method="cash">
                                    <p>Thanh to??n b???ng ti???n m???t khi giao h??ng.</p>
                                </div>
                            </div>

                            <div class="single-payment-method">
                                <div class="payment-method-name">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="directbank" value="2" name="paymentmethod" value="bank"
                                               class="custom-control-input"/>
                                        <label class="custom-control-label" for="directbank">Chuy???n kho???n ng??n h??ng</label>
                                    </div>
                                </div>
                            </div>
                            <div class="summary-footer-area">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="check" id="terms" required/>
                                    <label class="custom-control-label" id="hello" for="terms">T??i ???? ?????c v?? ?????ng ?? v???i
                                        <a
                                                href="index.html">c??c ??i???u kho???n v?? ??i???u ki???n c???a trang web.</a></label>
                                </div>
                                
                                <input type="submit" class="btn" value="?????t h??ng" name="dong_y_dat_hang">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </form>
        <!--== Checkout Page Content End ==-->
    </div>
</div>
<!--== Page Content Wrapper End ==-->
<script>
    function confirmDesactiv()
{
   if (document.getElementById("terms").checked) {
    alert("?????t h??ng th??nh c??ng");
   }
}
</script>