<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;
    protected $fillable = [
        'developer_id',
        'name',
        'description',
        'homapage',
        'cover',
        'status',
    ];
    public function comment(){
        return $this->hasMany(Comment::class);
    }
    public function gameasset(){
        return $this->hasMany(Gameasset::class);
    }
    public function user(){
        return $this->belongsTo(User::class,'developer_id');
    }
}
