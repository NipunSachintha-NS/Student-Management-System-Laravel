<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Batch extends Model
{
    protected $table = 'batches';
    protected $primarykey = 'id';
    protected $fillable = ['name','start_date','course_id'];
    use HasFactory;
}
