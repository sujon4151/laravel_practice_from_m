<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model 
{
        protected $fillable = [

        'name', 'dept', 'email',

    ];

   

    // protected $hidden = [

    //     'password', 'remember_token',

    // ];


    public function getAll()

    {

        return static::all();

    }


    public function findUser($id)

    {

        return static::find($id);

    }


    public function deleteUser($id)

    {

        return static::find($id)->delete();

    }
}
