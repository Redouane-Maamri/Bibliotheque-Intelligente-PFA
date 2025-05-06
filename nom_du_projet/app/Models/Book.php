<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable=['image','title','price','categorie','reviews','description','NombrePages'];
}
