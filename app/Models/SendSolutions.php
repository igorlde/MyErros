<?php

namespace App\Models;

use App\Enums\Programing_language;
use Illuminate\Database\Eloquent\Model;

class SendSolutions extends Model
{
    protected $fillable = [
        'erro', 'problem_id', 'user_id', 'code_solution', 'explanation'
    ];
    protected $casts = ['language' => Programing_language::class];

    public function problem(){
        return $this->hasOne(Problem::class);
    }
}