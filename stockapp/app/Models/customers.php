<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customers extends Model
{
    use HasFactory;
    protected $table='sign_up';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = ['name','email','password'];
}
