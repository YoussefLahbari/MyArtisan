<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;
    protected $fillable = ['Name','Adress','CodePostal'];
    public function Service()
    {
        return $this->belongsto(Service::class);
    }
}
