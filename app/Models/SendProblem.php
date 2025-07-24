<?php

namespace App\Models;

use App\Enums\Programing_language;
use Illuminate\Database\Eloquent\Model;

class SendProblem extends Model
{
    protected $fillable = ['problem', 'description', 'code_user'];
    protected $casts = ['language'=> Programing_language::class];
    
}
