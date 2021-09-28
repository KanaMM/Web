<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $table = 'projects';

    protected $fillable = [
        'title',
        'deleted_at',
        'created_at',
        'updated_at',
    ];

    public function offers()
    {
        return $this->hasMany(Offer::class);
    }
}
