<?php

namespace App\Models;

use App\Enums\Programing_language;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Problem extends Model
{
     use HasFactory;
    protected $fillable = ['code', 'erro', 'description', 'language'];//this field unique to codes solve
    protected $casts = ['language' => Programing_language::class];//enums of laguage for programing.
    
    public function user(){
        return $this->belongsTo(User::class);
    }
    
    public function solution(){
        return $this->hasMany(SendSolutions::class);
    }
}
