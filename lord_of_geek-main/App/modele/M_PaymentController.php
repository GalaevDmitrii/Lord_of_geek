<?php
class PaymentController
{
    public function handlePaymentSelection($payment)
    {
        switch ($payment) {
            case 'cb':
                include('v_cb.php');
                break;
            case 'paypal':
                include('v_paypal.php');
                break;
        }
    }
}
