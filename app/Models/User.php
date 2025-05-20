<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use SebastianBergmann\CodeCoverage\Report\Html\CustomCssFile;

class user extends Model
{
    protected $fillable = ['email', 'otp'];
    public function profile(): HasOne
    {
        return $this->hasOne(CustomerProfile::class);
    }

}
