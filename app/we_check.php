<?php
/**
 * Created by PhpStorm.
 * User: wilsonwg
 * Date: 1/3/15
 * Time: 11:52 PM
 */

namespace app;
use Illuminate\Database\Eloquent\Model as Eloquent;


class we_check extends Eloquent
{
    protected $table = "we_checks";
    protected $fillable = array('room_no', 'inspector_id', 'light', 'lcd', 'tv', 'fridges', 'faucet', 'basin', 'shower', 'toilet', 'notes', 'case_status');

}