<?php
 namespace App\Models;

 use Illuminate\Database\Eloquent\Model;
 
 class User extends Model{
    protected $table = 'user1';
    // column sa table
    protected $fillable = [
        'username', 'password','job_ID'
    ];

    public $timestamps = false;
    protected $primaryKey = 'id';
    protected $hidden = ['password'];
 }
