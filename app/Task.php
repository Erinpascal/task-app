<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['name', 'description', 'task_date','user_id','status_id'];

    /**
     * @return object
     */
    public function User(){
        return $this->belongsTo('App\User','user_id');
    }




    /**
     * @return object
     */
    public function empStatus(){
        return $this->belongsTo('App\Status','status_id');
    }



}
