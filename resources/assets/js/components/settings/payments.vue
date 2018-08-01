<template>
    <div class="tab-pane active" id="payment" role="tabpanel">
        <div class="row">
            <div class="col-lg-12">
                <div class="col-lg-1">
                </div>
                <div class="col-lg-10 paymentbox" style="background:white;height:150px;">
                    <div style="text-align:left; font-size: 24px;font-weight:bolder;float:left;margin-top:30px;">
                        Balance Due<br>
                        <span style="text-align:left; font-size: 18px;font-weight:normal;display:block;margin-top:20px;">
                            Your Balance due is $0.00
                        </span>
                    </div>
                    <div class="paynowbox" style="float:right;margin-top:30px;margin-right: 9px;">
                        <button class="bg-secondary btn-paynow" style="padding:10px 50px;border:none;">Pay Now</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-12" style="margin-top:30px;">
                <div class="col-lg-1">
                </div>
                <div class="col-lg-10 billingbox" style="background:white;height:170px;">
                    <div style="text-align:left; font-size: 24px;font-weight:bolder;margin-top:30px;">
                        Billing Methods<br>
                    </div>
                    <div class="addbillingbox" style="position:absolute;top:10px;right:24px;margin-top:10px;">
                        <button class="btn-addbilling" style="background:#43a047;color:white;padding:10px 50px;border:none;">Add Billing Method</button>
                    </div>
                    <div style="text-align:left; font-size: 12px;font-weight:normal;display:block;margin-top:39px;border-top: 1px solid #f3f3f3;border-bottom: 1px solid #f3f3f3; padding: 16px 5px;">
                        <div class="paypalbox" style="margin-left:20px;"><b>Paypal</b> info@yamiyami.de (Primary)</div>
                        <div class="btn-paypal-box" style="position:absolute;bottom:17px;right:24px;"><button class="btn-paypal"></button></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
