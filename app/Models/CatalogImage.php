<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CatalogImage extends Model
{
    use HasFactory;
    protected $guarded = [];


    
    /**
     * Define a many-to-one relationship with the Catalog model.
     * This method retrieves the catalog associated with the current model.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function catalog(): BelongsTo
    {
        return $this->belongsTo(Catalog::class);
    }
}
