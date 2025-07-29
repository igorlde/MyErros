<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Enums\Programing_language;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Utility extends Model
{
    use HasFactory;
    protected $table = 'utility_codes';
    protected $fillable = [
        'erro', 'print_code', 'code', 'explanation'
    ];
    protected $casts = ['language' => Programing_language::class];

    public function user(){
        return $this->belongsTo(User::class);//A utiity code belongs to a user
    }
}

