<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artisan extends Model
{
    use HasFactory;
    protected $table = 'Users';


    protected $fillable = [
        'UserID',
        'UserName',
        'Email',
        'Password',
        'UserType',
        'created_at',
        'updated_at',
    ];

    public function User()
    {
        return $this->belongsTo(User::class, 'UserID', 'id');
    }
    public function Service()
    {
        return $this->HasMany(Service::class, 'Artisan_ID', 'ArtisanID');
    }


}
