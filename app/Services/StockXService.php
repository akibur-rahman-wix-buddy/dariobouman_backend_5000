<?php

namespace App\Services;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use League\OAuth2\Client\Provider\GenericProvider;

class StockXService
{

    public $provider;

    public function __construct($clientId, $clientSecret)
    {
        $this->provider = new GenericProvider([
            'clientId' => $clientId,
            'clientSecret' => $clientSecret,
            'redirectUri' => 'https://5kdariobouman.test/auth/stockx/callback',
            'urlAuthorize' => 'https://accounts.stockx.com/authorize',
            'urlAccessToken' => 'https://accounts.stockx.com/oauth/token',
            'urlResourceOwnerDetails' => '', // This is not needed for basic token retrieval
            'scopes' => 'offline_access openid',
        ]);
    }



    public function getAuthorizationUrl()
    {
        // Generate the authorization URL dynamically
        return $this->provider->getAuthorizationUrl([
            'audience' => 'gateway.stockx.com',
            'scope' => config('services.stockx.scopes')
        ]);
    }

    public function getAccessToken($code)
    {
        // Get access token using the authorization code
        return $this->provider->getAccessToken('authorization_code', [
            'code' => $code
        ]);
    }

    public function fetchProductList($apiKey, $accessToken, $page = 1, $pageSize = 100)
    {
        $response = Http::withHeaders([
            'x-api-key' => $apiKey,
            'Authorization' => 'Bearer ' . $accessToken,
        ])->get('https://api.stockx.com/v2/selling/listings', [
                    'pageNumber' => $page,
                    'pageSize' => $pageSize,
                    'listingStatuses' => 'ACTIVE',
                    'inventoryTypes' => 'STANDARD',
                ]);

        if ($response->successful()) {
            return $response->json();
        }

        throw new Exception('Failed to fetch product list: ' . $response->body());
    }

    public function getProduct($id, $apiKey, $accessToken)
    {
        $response = Http::withHeaders([
            'x-api-key' => $apiKey,
            'Authorization' => 'Bearer ' . $accessToken,
        ])->get("https://api.stockx.com/v2/catalog/products/{$id}");

        if ($response->successful()) {
            return $response->json();
        }

        throw new Exception('Failed to fetch product: ' . $response->body());
    }

    public function getProductVariants($id, $apiKey, $accessToken)
    {
        $response = Http::withHeaders([
            'x-api-key' => $apiKey,
            'Authorization' => 'Bearer ' . $accessToken,
        ])->get("https://api.stockx.com/v2/catalog/products/{$id}/market-data");

        if ($response->successful()) {
            return $response->json();
        }

        throw new Exception('Failed to fetch product variants: ' . $response->body());
    }
}