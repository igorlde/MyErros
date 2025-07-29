<?php

namespace App\Models;

use App\Enums\Programing_language;
use Illuminate\Database\Eloquent\Model;

class utility extends Model
{
    protected $fillable = [
        'erro', 'print_code', 'code', 'explanation'
    ];
    protected $casts = ['language' => Programing_language::class];

    public function user(){
        return $this->belongsTo(User::class);//A utiity code belongs to a user
    }
}
