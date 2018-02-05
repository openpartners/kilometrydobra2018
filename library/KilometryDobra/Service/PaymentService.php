<?php
namespace KilometryDobra\Service;

use GuzzleHttp\Client;

Class PaymentService extends AbstractService {

    public function verifyPaypalIPN($data = [])
    {
        $this->client = new Client(['http_errors' => false]);

        $this->response = $this->client->request('POST', PAYPAL_GATE, ['form_params' => ['cmd' => '_notify-validate'] + $data]);
        $response = $this->response->getBody()->getContents();

        if ($response === 'VERIFIED') {
            return true;
        }

        return false;
    }

}
