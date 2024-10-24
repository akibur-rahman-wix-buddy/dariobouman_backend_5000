<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Tag extends Model
{
    use HasFactory;
    protected $guarded = [];


    
    /**
     * Define a many-to-many relationship with the Catalog model.
     * This method allows the current model to be associated with multiple catalogs.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function catelogs(): BelongsToMany
    {
        return $this->belongsToMany(Catalog::class);
    }
}
