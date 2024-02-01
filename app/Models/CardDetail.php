<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CardDetail extends Model
{
    use HasFactory;

    protected $table = 'card_details';

    protected $fillable = [
        'name',
        'idThanksGiving',
        'description',
        'isMentor',
        'isLeader',
        'isTeam',
        'image',
    ];

    public function thanksgiving()
    {
        return $this->belongsTo(Thanksgiving::class, 'idThanksGiving', 'id');
    }
}
