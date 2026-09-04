<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Client;

class Order extends Model
{
    protected $fillable = ['total', 'status', 'user_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
