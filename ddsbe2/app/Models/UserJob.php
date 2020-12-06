<?php
 namespace App\Models;

 use Illuminate\Database\Eloquent\Model;
 
 class UserJob extends Model{
    protected $table = 'tbluserjob2';
    // column sa table
    protected $fillable = [
        'job_ID2','job_Name2'
    ];

    public $timestamps = false;
    protected $primaryKey = 'job_ID2';
 }
