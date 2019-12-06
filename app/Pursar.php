<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pursar extends Model
{
    private $api_key;
    private $api_secret;
    private $amount;
    private $description;
    private $invoice_id;

    private $pursar_url = 'http://pursar.lehone.net';

    public function __construct($api_key, $api_secret)
    {
        $this->api_key = $api_key;
        $this->api_secret = $api_secret;
    }

    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    public function setInvoiceId($invoice_id)
    {
        $this->invoice_id = $invoice_id;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function createInvoice()
    {
        $params = [
            'amount'      => $this->amount,
            'api_key'     => $this->api_key,
            'api_secret'  => $this->api_secret,
            'description' => $this->description,
            'invoice_id'  => $this->invoice_id
        ];

        $ch = curl_init($this->pursar_url . '/api/merchant/web/create_invoice');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $params);

        $response = curl_exec($ch);
        curl_close($ch);

        return json_decode($response);
    }

    public function checkInvoiceStatus($id)
    {
        $params = [
            'api_key'    => $this->api_key,
            'api_secret' => $this->api_secret,
        ];

        $ch = curl_init($this->pursar_url . '/api/merchant/invoice/' . $id);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $params);

        $response = curl_exec($ch);
        curl_close($ch);

        $response = json_decode($response);
        if ($response->success == '00') {
            return $response;
        } else {
            $invoice = $response->invoice;
            return ['success' => '01', 'status' => $invoice->status];
        }
    }

    public function getInvoice($id) {
        $params = [
            'api_key'    => $this->api_key,
            'api_secret' => $this->api_secret,
        ];

        $ch = curl_init($this->pursar_url . '/api/merchant/invoice/' . $id);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $params);

        $response = curl_exec($ch);
        curl_close($ch);

        return json_decode($response);
    }

}
