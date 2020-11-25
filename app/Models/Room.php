<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    public const OPEN = 1;
    public const CLOSED = 0;

    protected $fillable = ['name', 'status'];


    public function sdps()
    {
        return $this->hasMany('App\Models\Sdp', 'room_id', 'id');
    }
}
