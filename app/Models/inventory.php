<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class inventory extends Model
{
    use HasFactory;
    protected $fillable = [
        'item_type',
        'item_description',
        'item_defect',
        'item_amount',
        'item_image',
    ];
}
