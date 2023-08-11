<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Items2 extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'items2';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name', 'price', 'description', 'image'
    ];
}
