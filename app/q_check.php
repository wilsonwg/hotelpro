<?php
/**
 * Created by PhpStorm.
 * User: wilsonwg
 * Date: 1/3/15
 * Time: 11:52 PM
 */

namespace app;
use Illuminate\Database\Eloquent\Model as Eloquent;


class q_check extends Eloquent
{
    protected $table = "q_checks";
    protected $fillable = array('inspector_id', 'room_no', 'hair', 'room_items', 'bed', 'desk', 'cabinet', 'fridges', 'cup', 'chair', 'bathroom_windows', 'notes', 'case_status');

}