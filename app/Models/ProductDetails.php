<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductDetails extends Model
{
    public function product() : BelongsTo
    {
        return $this->BelongsTo(Product::class);
    }
}
