<?php

namespace App\Services;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
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


            $user = Auth::user();
            $user->update(['token' => $accessToken->getToken()]);


            // Store the access token in the .env file
            // $this->setEnvironmentValue('STOCKX_TOKEN', $accessToken->getToken());

            // Redirect to fetch product list
            Log::info('StockX Tocken: ', $accessToken->getToken());
        } catch (Exception $e) {
            return redirect('/')->withErrors('Failed to get access token: ' . $e->getMessage());
        }
    }
}