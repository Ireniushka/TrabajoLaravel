<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class task_done extends Model
{
    protected $table = 'tack_dones';

    protected $fillable = [
        'student_id', 'task_id', 'mark', 'deleted',
    ];
}
