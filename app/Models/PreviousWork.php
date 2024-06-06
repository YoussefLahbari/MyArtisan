<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PreviousWork extends Model
{
    use HasFactory;
    protected $fillable = ['artisan_id', 'image_url'];

    public function artisan()
    {
        return $this->belongsTo(Artisan::class);
    }
}
