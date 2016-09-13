<?php
/**
 * Created by PhpStorm.
 * User: wilsonwg
 * Date: 1/3/15
 * Time: 11:52 PM
 */

namespace app;
use Illuminate\Database\Eloquent\Model as Eloquent;


class Note extends Eloquent {
    protected $table = "notes";
    protected $fillable = array('room_no','inspector_id', 'worker_id','closer_id', 'work_id' ,'notes','case_status');
}

?>