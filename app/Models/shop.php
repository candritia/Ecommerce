<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\layout;
class shop extends Model
{
    use HasFactory;
    protected $table = "layouts";
    protected $primaryKey = "id";
    protected $guarded = [''];
    protected $keyType = "string";

    // public $timestamps = false;
}
