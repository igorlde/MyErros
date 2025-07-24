<?php

namespace App\Models;

use App\Enums\Languages;
use Illuminate\Database\Eloquent\Model;

class ProblemTranslation extends Model
{
    protected $fillable = [
        'problem_id',
        'language',
        'erro',
        'description',
    ];//fields of migrates
    protected $casts = ['language' => Languages::class];//fields of enums Languages speak.

    public function problem(){
        return $this->belongsTo(Problem::class);
        //one translation have a problem
    }
}
