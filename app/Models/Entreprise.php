<?php

namespace App\Models;

use App\Client;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Entreprise extends Model
{
    use HasFactory;

    protected $guarded = [];
    public function clients()
    {
        return $this->hasMany('Client');
    }
}
