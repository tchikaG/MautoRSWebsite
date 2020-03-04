<!DOCTYPE html>
<html>
<?php
include 'head.php';
include 'menu.php';
?>

<body>
    <div class="login-dark" style="height: 1200px;width: 1911px;">
        <div class="row .payment-dialog-row">
            <div class="col-12 col-md-4 offset-md-2" style="height: 442px;margin-top: 262px;">
                <div class="card credit-card-box" style="height: 557px;">
                    <div class="card-header">
                        <h3><span class="panel-title-text">Payment</span></h3>
                    </div>
                    <div class="card-body" style="height: 642px;">


                        <script src="https://pay.sandbox.datatrans.com/upp/payment/js/datatrans-2.0.0.js"></script>
                        <form id="paymentForm"
                              data-merchant-id="1100004624"
                              data-amount="1000"
                              data-currency="CHF"
                              data-refno="123456789"
                              data-sign="30916165706580013"
                              data-paymentmethod="APL,VIS,ECA,MAU,PFC,TWI">
                            <button class="btn btn-success btn-block btn-lg" id="paymentButton">Pay</button>
                        </form>
                        
                        <script type="text/javascript">
                            document.getElementById("paymentButton").onclick = function () {
                                Datatrans.startPayment({'form': '#paymentForm'});
                            }; 
                        </script>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
include 'footer.php';
include 'script.php';
?>
</body>

</html>