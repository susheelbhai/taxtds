<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    use HasFactory;
    protected $guarded = [];
    public $timestamps = false;
    public function salutation()
    {
        return $this->belongsTo(Salutation::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function bannerImg()
    {
        return $this->hasMany(BusinessBannerImage::class);
    }
}
