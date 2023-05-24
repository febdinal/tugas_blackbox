<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Crud extends Model
{
    use HasFactory;

    protected $table = 'product';

    protected $fillable = [
        'name', 'qty', 'description', 'created_at'
    ];

    protected $casts = [ 'created_at' => 'datetime'];

    public $timestamps = false;
}
