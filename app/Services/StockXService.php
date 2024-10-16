<?php

namespace App\Services;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use League\OAuth2\Client\Provider\GenericProvider;

class StockXService
{
    private $clientId, $clientSecret, $redirectUri;
    private $urlAuthorize, $urlAccessToken, $urlResourceOwnerDetails, $scopes;

    protected $provider;


    public function __construct(
        $clientId,
        $clientSecret,
        $redirectUri,
        $urlAuthorize = 'https://accounts.stockx.com/authorize',
        $urlAccessToken = 'https://accounts.stockx.com/oauth/token',
        $urlResourceOwnerDetails = '',
        $scopes = 'offline_access openid'
    ) {
        $this->clientId = $clientId;
        $this->clientSecret = $clientSecret;
        $this->redirectUri = $redirectUri;
        $this->urlAuthorize = $urlAuthorize;
        $this->urlAccessToken = $urlAccessToken;
        $this->urlResourceOwnerDetails = $urlResourceOwnerDetails;
        $this->scopes = $scopes;


        $this->provider = new GenericProvider([
            'clientId' => $this->clientId,
            'clientSecret' => $this->clientSecret,
            'redirectUri' => $this->redirectUri,
            'urlAuthorize' => $this->urlAuthorize,
            'urlAccessToken' => $this->urlAccessToken,
            'urlResourceOwnerDetails' => $this->urlResourceOwnerDetails, // This is not needed for basic token retrieval
            'scopes' => $this->scopes,
        ]);
    }




    /**
     * Redirects the user to the StockX authorization URL to initiate the OAuth2 flow.
     * 
     * @return \Illuminate\Http\RedirectResponse
     */
    public function redirectToProvider()
    {
        // Generate the authorization URL
        $authorizationUrl = $this->provider->getAuthorizationUrl([
            'audience' => 'gateway.stockx.com',
            'scope' => 'offline_access openid'
        ]);

        // Store the state in the session to validate it later
        session(['oauth2state' => $this->provider->getState()]);

        // Redirect the user to the authorization URL
        return redirect()->away($authorizationUrl);
    }



    /**
     * Handles the OAuth2 callback from StockX and exchanges the authorization code for an access token.
     * 
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function handleCallback(Request $request)
    {
        // Check for errors or state mismatch
        if (!$request->has('code') || $request->input('state') !== session('oauth2state')) {
            return redirect('/')->withErrors('Invalid state or code');
        }

        try {
            // Get an access token using the authorization code grant
            $accessToken = $this->provider->getAccessToken('authorization_code', [
                'code' => $request->input('code')
            ]);



            // Store the access token in the .env file
            $this->setEnvironmentValue('STOCKX_TOKEN', $accessToken->getToken());

            // Store the access token in the session or database
            // session(['stockx_token' => $accessToken->getToken()]);

            // Redirect to fetch product list
            return redirect()->route('fetch.product.list');
        } catch (Exception $e) {
            return redirect('/')->withErrors('Failed to get access token: ' . $e->getMessage());
        }
    }


    /**
     * Sets or updates a value in the .env file.
     * 
     * This function searches for a specified key in the .env file and updates its value. If the key does not
     * exist, it appends a new line with the key and its value to the end of the .env file. It is used to dynamically
     * modify environment variables at runtime.
     * 
     * @param string $key   The environment variable key to set or update.
     * @param string $value The value to set for the specified key.
     * 
     * @return void
     */
    function setEnvironmentValue($key, $value)
    {
        $path = base_path('.env');

        if (file_exists($path)) {
            $envFile = file_get_contents($path);
            $keyPattern = '/^' . preg_quote($key) . '=.*/m';

            // Check if the key exists
            if (preg_match($keyPattern, $envFile)) {
                // Replace the key's value
                $envFile = preg_replace($keyPattern, $key . '=' . $value, $envFile);
            } else {
                // If key does not exist, add it
                $envFile .= PHP_EOL . $key . '=' . $value;
            }

            file_put_contents($path, $envFile);
        }
    }
}