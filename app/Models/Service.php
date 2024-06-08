<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = ['Title','Description','Price','categorie_id','location_id','artisan_id'];
    use HasFactory;
    public function Categorie()
    {
        return $this->belongsto(Categorie::class);
    }
    public function Location()
    {
        return $this->belongsto(Location::class);
    }
    public function Artisan()
    {
        return $this->Belongsto(Service::class);
    }
}
