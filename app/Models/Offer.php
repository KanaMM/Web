<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;

    protected $table = 'offers';

    protected $fillable = [
        'description',
        'project_id',
        'status_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}
