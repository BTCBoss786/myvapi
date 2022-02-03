<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Seller extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'foreign_id',
        'name',
        'location',
        'validity'
    ];

    public function segment() {
        return $this->belongsTo(Segment::class);
    }

    public function offers() {
        return $this->hasMany(Offer::class);
    }
}
