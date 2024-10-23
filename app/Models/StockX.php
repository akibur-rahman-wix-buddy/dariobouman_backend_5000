<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class StockX extends Model
{
    use HasFactory;
    protected $guarded = [];


    /**
     * Get the associated User model for this instance.
     *
     * This method defines a many-to-one relationship with the User model,
     * allowing access to the User that owns this record.
     *
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}
