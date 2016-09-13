<?php
/**
 * Created by PhpStorm.
 * User: wilsonwg
 * Date: 1/3/15
 * Time: 11:52 PM
 */

namespace app;
use Illuminate\Database\Eloquent\Model as Eloquent;


class freezer extends Eloquent
{
    protected $table = "freezers";
    protected $fillable = array('reporter', 'room_no', 'guest_name', 'freezer','item', 'closer', 'case_status');

}