<?php

namespace App\Listeners;

use App\Events\LogInEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;

class StockXAuthO2
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(LogInEvent $event): void
    {
        Log::info($event->info);
    }
}
