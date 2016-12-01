<?php namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Tasks extends Model {


    //
    protected $table = 'tasks';
    protected $fillable = ['name', 'status', 'created_at'];
}
