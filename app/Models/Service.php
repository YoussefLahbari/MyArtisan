<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    public function Categorie()
    {
        return $this->belongsto(Categorie::class);
    }
    public function Location()
    {
        return $this->belongsto(Location::class, 'Location_ID', 'LocationID');
    }
    public function Artisan()
    {
        return $this->Belongsto(Service::class, 'Artisan_ID', 'ArtisanID');
    }
}
