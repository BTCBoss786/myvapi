<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;

    protected $fillable = [
        'seller_id',
        'name',
        'image',
        'type',
        'detail',
        'start_date',
        'end_date'
    ];

    public function seller() {
        return $this->belongsTo(Seller::class);
    }

    public function sellerSegment() {
        return $this->hasOneThrough(Segment::class, Seller::class);
    }
}
