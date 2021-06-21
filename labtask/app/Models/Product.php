<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';
    protected $primaryKey = 'name';
    public $timestamps = false;
    public $incrementing = false;

    //const CREATED_AT = 'create_time';
    //const UPDATED_AT = 'update_time';
}
