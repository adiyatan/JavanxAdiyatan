<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

class Thanksgiving extends Model
{
    use HasFactory;
    protected $table = 'thanksgiving';
    protected $primaryKey = 'id';

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->id = (string) Uuid::uuid4();
        });
    }
}
