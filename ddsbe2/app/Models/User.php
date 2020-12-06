<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model{
    protected $table = 'user2';
    // column sa table
    protected $fillable = [
        'username', 'password', 'job_ID2'
    ];

    public $timestamps = false;
    protected $primaryKey = 'id';
    protected $hidden = ['password'];
}
