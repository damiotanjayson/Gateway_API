<?php
 namespace App\Models;

 use Illuminate\Database\Eloquent\Model;
 
 class UserJob extends Model{
    protected $table = 'tbluserjob';
    // column sa table
    protected $fillable = [
        'job_ID','job_Name'
    ];

    public $timestamps = false;
    protected $primaryKey = 'job_ID';
 }
