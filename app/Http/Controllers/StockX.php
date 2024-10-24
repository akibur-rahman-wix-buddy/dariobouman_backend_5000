<?php

namespace App\Http\Controllers;

use App\Services\StockXService;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;


/**
 * Controller for handling StockX OAuth2 authentication.
 */
class StockX extends Controller
{

    protected $stockXService, $user;

    public function __construct()
    {
        $this->user = Auth::user();
        $credentials = $this->user->stockX;
        $this->stockXService = new StockXService($credentials->client_id, $credentials->client_secret);
    }

    public function redirectToProvider()
    {
        // Generate the authorization URL and store the state
        $authorizationUrl = $this->stockXService->getAuthorizationUrl();
        // Store the state in the session to validate it later
        session(['oauth2state' => $this->stockXService->provider->getState()]);
        Log::info('redirecttoProvider: ' . $authorizationUrl);

        return redirect()->away($authorizationUrl);
    }

    public function handleCallback(Request $request)
    {
        Log::info('handlecallback');
        // Validate the OAuth state
        if (!$request->has('code') || $request->input('state') !== session('oauth2state')) {
            Log::error('Invalid state or code');
            return redirect('/')->withErrors('Invalid state or code');
        }

        try {
            // Exchange the authorization code for an access token
            $accessToken = $this->stockXService->getAccessToken($request->input('code'));
            Log::info('exchangeAccessToken: ' . $accessToken);

            $this->user->stockX()->update([
                'token' => $accessToken->getToken(),
            ]);

            return redirect()->route('stockx.create.product');
        } catch (Exception $e) {
            Log::error('handleCallback Error: '. $e->getMessage());
            return redirect('/')->withErrors('Failed to get access token: ' . $e->getMessage());
        }
    }

    public function fetchProductList()
    {
        $stockXCredentials = $this->user->stockX;
        $apiKey = $stockXCredentials->api_key;
        $accessToken = $stockXCredentials->token;

        if (!$accessToken) {
            return redirect()->route('auth.stockx')->withErrors('Access token not found. Please authenticate again.');
        }

        try {
            // Fetch the product list
            $products = $this->stockXService->fetchProductList($apiKey,$accessToken);
            return response()->json($products);
        } catch (Exception $e) {
            return redirect()->route('auth.stockx')->withErrors($e->getMessage());
        }
    }

    public function showProduct($id)
    {
        $stockXCredentials = $this->user->stockX;
        $apiKey = $stockXCredentials->api_key;
        $accessToken = $stockXCredentials->token;

        if (!$accessToken) {
            return redirect()->route('auth.stockx')->withErrors('Access token not found. Please authenticate again.');
        }

        try {
            // Fetch product details
            $product = $this->stockXService->getProduct($id, $apiKey,$accessToken);
            return response()->json($product);
        } catch (Exception $e) {
            return redirect()->route('auth.stockx')->withErrors($e->getMessage());
        }
    }

    public function allVariant($id)
    {
        $stockXCredentials = $this->user->stockX;
        $apiKey = $stockXCredentials->api_key;
        $accessToken = $stockXCredentials->token;

        if (!$accessToken) {
            return redirect()->route('auth.stockx')->withErrors('Access token not found. Please authenticate again.');
        }

        try {
            // Fetch product variants
            $variants = $this->stockXService->getProductVariants($id, $apiKey,$accessToken);
            return response()->json($variants);
        } catch (Exception $e) {
            return redirect()->route('auth.stockx')->withErrors($e->getMessage());
        }
    }


    public function createProduct(){
        $stockXCredentials = $this->user->stockX;
        $apiKey = $stockXCredentials->api_key;
        $accessToken = $stockXCredentials->token;

        if (!$accessToken) {
            return redirect()->route('auth.stockx')->withErrors('Access token not found. Please authenticate again.');
        }

        try {
            // Fetch product variants
            $variants = $this->stockXService->createProductIngestionJob($apiKey,$accessToken);
            return response()->json($variants);
        } catch (Exception $e) {
            Log::error("Product Creation Error: " . $e->getMessage());
            return redirect()->route('auth.stockx')->withErrors($e->getMessage());
        }
    }

}
