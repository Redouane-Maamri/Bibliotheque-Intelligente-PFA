<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    protected $fillable=['name','email','message'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
