<?php

namespace App\Models;

use App\Enums\Programing_language;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Problem extends Model
{
     use HasFactory;
    protected $fillable = ['code'];//this field unique to codes solve
    protected $casts = ['language' => Programing_language::class];//enums of laguage for programing.

    public function translation(){
        return $this->hasMany(ProblemTranslation::class);
    }
    
    public function translati($language){
        return $this->translation()->where('language', $language)->first();
    }
    
    public function solution(){
        return $this->hasMany(SendSolutions::class);
    }
}
