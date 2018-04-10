<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $table = "hotel";
    public $timestamps = false;
    protected $fillable = [
    'name',
    'phone',
    'fax',
    'email',
    'npwp'];    
}
