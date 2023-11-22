<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Client extends Model
{
    use HasFactory;
  protected $guarded = [];
  protected $attributes = [
    'status' => 0
  ];
    public function scopeStatus($query)
    {
            return $query->where('status', 1)->get();
     
    }
    public function entreprise()
    {
        // return $this->belongsTo('App\Entreprise');
        return $this->belongsTo(Entreprise::class);
    }
    public function getStatusAttribute($attribute){

        return $this->getStatusOptions()[$attribute];
    }
    public function getStatusOptions(){
        return [
            '0' => 'Inactif',
            '1' => 'Actif',
            '2' => 'En attente'
        ];
    }
}
