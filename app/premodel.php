<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class premodel extends Model
{
    protected $table='predata';
    //we are adding our attributes field here.....
    protected $fillable=[
        'firstname','lastname','fathername','mothername','emailfm','gender','homephone','phone','address','state','religion'
    ];
}
