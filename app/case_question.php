<?php
/**
 * Created by PhpStorm.
 * User: wilsonwg
 * Date: 1/3/15
 * Time: 11:52 PM
 */

namespace app;
use Illuminate\Database\Eloquent\Model as Eloquent;


class case_question extends Eloquent {
    protected $table = "case_question";
    protected $fillable = array('id','room_check_type');
}