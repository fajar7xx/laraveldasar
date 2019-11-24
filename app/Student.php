<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    //
    // field pada table db yang bisa di isi bisa menggunkan
    // fillabel
    use SoftDeletes;
    protected $fillable = ['nama', 'nim', 'email', 'jurusan'];
}
