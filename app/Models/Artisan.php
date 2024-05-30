<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artisan extends Model
{
    use HasFactory;

    protected $fillable = [
        'Skills',
        'Experience',
        'Description', 
        'ProfileImg', 
        'Rating', 
        'user_id'
    ];

    public function User()
    {
        return $this->belongsTo(User::class);
    }
    public function Service()
    {
        return $this->HasMany(Service::class);
    }

    public function previousWorks()
    {
        return $this->hasMany(PreviousWork::class);
    }

}
