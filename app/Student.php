<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    // field pada table db yang bisa di isi bisa menggunkan
    // fillabel
    protected $fillable = ['nama', 'nim', 'email', 'jurusan'];
}
