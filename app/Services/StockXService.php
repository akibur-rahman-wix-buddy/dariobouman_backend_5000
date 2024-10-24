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



    public function createProductIngestionJob($apiKey, $accessToken)
    {
        $productData = [
            'category' => 'sneakers', // Product category
            'productTitle' => 'Air Jordan 4 Retro', // Unique product title
            'brand' => 'Nike', // Brand of the product
            'productImages' => [
                'https://example.com/image1.jpg', // Public-facing image URL
                'https://example.com/image2.jpg',
            ],
            'variants' => [
                'size-10', // Variants available for sale
                'size-11',
                'size-12',
            ],
            'retailPrice' => '190.00', // Retail price of the product
            'releaseDate' => '2024-11-01', // Release date of the product
            'countryOfOrigin' => 'US', // ISO Alpha 2 format country code
            'partnerProductId' => '12345', // External ID for partners
            'tags' => [
                'basketball', // Tags associated with the product
                'limited edition',
            ],
            'colorway' => 'White/Black/Red', // Colorway description
            'gtin' => '1234567890123', // Global Trade Item Number
            'gender' => 'unisex', // Target gender for the product
            'styleCode' => 'AQ3835-100', // Style code for the product
            'productDescription' => 'Its a test For my project', // Product description
            'dimensions' => '10"x4"x6"', // Dimensions of the product
            'weight' => '1.2 lbs', // Weight of the product
            'material' => 'Leather, Rubber', // Materials used in the product
            'productURL' => 'https://example.com/air-jordan-4-retro' // Official product URL
        ];


        $response = Http::withHeaders([
            'x-api-key' => $apiKey,
            'Authorization' => 'Bearer ' . $accessToken,
            'Content-Type' => 'application/json',
        ])->post('https://api.stockx.com/v2/catalog/ingestion', [
                    'items' => [
                        $productData
                    ]
                ]);

        if ($response->successful()) {
            return $response->json();
        }

        throw new Exception('Failed to create product ingestion job: ' . $response->body());
    }
}