<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model {

    protected $table = "notes";
    protected $fillable = array('room_no','inspector_id', 'worker_id','closer_id', 'work_id' ,'notes','case_status');

}
