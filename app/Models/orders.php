<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Meals;
class orders extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'phone',
        'data',
        'time',
        'meal_id',
        'qty',
        'address',
        'status'
    ];

    public function order_user(){
        return $this->belongsTo(User::class);
    }
    public function order_meal(){
        return $this->belongsTo(Meals::class);
    }
}
