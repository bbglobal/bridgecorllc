<?php

// app/Services/MailchimpService.php

namespace App\Services;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;

class MailchimpService
{
    protected $client;
    protected $apiKey;
    protected $listId;

    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => 'https://us18.api.mailchimp.com/3.0/',
            'auth' => ['apikey', '439689f6e36138090811c1c466db0f5e-us18']
        ]);

        $this->listId = '133ac0d1ba';
    }

    public function subscribe($email)
    {
        try {
            $response = $this->client->post("lists/{$this->listId}/members", [
                'json' => [
                    'email_address' => $email,
                    'status' => 'subscribed'
                ]
            ]);
            return $response->getStatusCode(); // Returns HTTP status code
        } catch (ClientException $e) {
            $response = $e->getResponse();
            $statusCode = $response->getStatusCode();
            $body = json_decode($response->getBody()->getContents(), true);

            // Handle specific error cases
            if ($statusCode === 400 && isset($body['title'])) {
                if ($body['title'] === 'Member Exists') {
                    return 'already_subscribed';
                } elseif ($body['title'] === 'Invalid Resource') {
                    return 'invalid_email';
                }
            }

            // For other errors, return the status code
            return $statusCode;
        }
    }
}
