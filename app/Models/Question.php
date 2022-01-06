<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $fillable = ['question_name','exam_id','user_id',
        'answer_one',
        'answer_two',
        'answer_three',
        'answer_correct',
];
}
