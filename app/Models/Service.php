<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = ['Title','Description','Price','categorie_id','location_id','artisan_id'];
    use HasFactory;
    public function categorie()
    {
        return $this->belongsto(Categorie::class);
    }
    public function location()
    {
        return $this->belongsto(Location::class, 'location_id', 'id');
    }
    public function artisan()
    {
        return $this->Belongsto(Artisan::class, 'artisan_id', 'id');
    }
}
