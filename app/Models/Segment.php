<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Segment extends Model
{
    use HasFactory, SoftDeletes;
    public $timestamps = false;

    protected $fillable = [
        'name',
        'icon'
    ];

    public function sellers() {
        return $this->hasMany(Seller::class);
    }

    public function offers() {
        return $this->hasManyThrough(Offer::class, Seller::class);
    }
}
