<?php

namespace App\Http\Controllers\Web\Frontend\Setting;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class StockXController extends Controller
{
    protected $user;
    public function __construct()
    {
        $this->user = Auth::user();
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        $compact = [
            'stockX' => $this->user->stockX,
        ];
        // dd($compact);
        return view('frontend.layouts.setting.stockX.edit', $compact);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $validateData = $request->validate([
            'api_key' => 'required|string',
            'client_id' => 'required|string',
            'client_secret' => 'required|string',
        ]);

        try {
            $this->user->stockX()->update($validateData);
            return redirect()->back()->with('t-success', 'StockX Credentials Updated');
        } catch (Exception $e) {
            Log::error('StockX Credentials Update Fail: ' . $e->getMessage());
            return redirect()->back()->with('t-error', 'Something went wrong...!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
