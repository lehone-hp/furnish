<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UnifiedPay extends Model
{
    private $api_key;
    private $api_secret;

    private $pursar_url = 'http://localhost/unified-pay/public';
    // /api/payment/initialize/
    private $pursar_ip = '127.0.0.1';//'45.56.74.240';

    /**
     * Pursar constructor.
     * @param $api_key
     * @param $api_secret
     */
    public function __construct($api_key, $api_secret)
    {
        $this->api_key = $api_key;
        $this->api_secret = $api_secret;
    }

    /**
     * @param $amount
     * @param $currency
     * @param $lang
     * @param $success_url
     * @param $failure_url
     * @param $invoice_id
     * @param $invoice_details
     */
    public function pay($amount,
                        $currency,
                        $lang,
                        $success_url,
                        $failure_url,
                        $invoice_id)
    {

        $params = [
            'amount'     => $amount,
            'currency'   => $currency,
            'invoiceId'  => $invoice_id,
            'invoiceDetails' => '[]',
            'language'   => $lang,
            'successURL' => $success_url,
            'failureURL' => $failure_url,
            'apiKey'     => $this->api_key
        ];

        $ch = curl_init($this->pursar_url . '/api/payment/initialize/'.$this->api_key);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $params);

        $response = curl_exec($ch);
        curl_close($ch);

        return json_decode($response);
    }

    /**
     * @return bool
     */
    public function checkSuccess()
    {
        return $this->validateRequest();
    }

    /**
     * @return bool
     */
    public function checkFailure()
    {
        return $this->validateRequest();
    }

    /**
     * @param $invoiceId
     * @return mixed
     */
    public function checkStatus($transactionId)
    {
        $params = [
            'apiKey'     => $this->api_key
        ];

        $ch = curl_init($this->pursar_url . '/api/payment/status/'.$transactionId);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $params);

        $response = curl_exec($ch);
        curl_close($ch);

        return json_decode($response);
    }


    /*===========================================================
      Helper Functions
      ============================================================*/

    /**
     * @return bool
     */
    private function validateRequest()
    {
        $ret_api_secret = null;

        if (!isset($_POST['invoiceId'])) {
            dump($_POST['invoiceId']);
            return false;
        }

        if (isset($_POST['apiSecret'])) {
            $ret_api_secret = $_POST['apiSecret'];
        } else {
            return false;
        }

        if ($this->api_secret != $ret_api_secret) {
            return false;
        }

        if (isset($_SERVER['HTTP_REFERER'])) {
            $urlParts = parse_url($_SERVER['HTTP_REFERER']);
            $ip = gethostbyname($urlParts['host']);

            if ($this->pursar_ip != $ip) {
                return false;
            }
        }

        return true;
    }
}
