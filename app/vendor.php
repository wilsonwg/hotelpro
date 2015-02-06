<?php
/**
 * Created by PhpStorm.
 * User: wilsonwg
 * Date: 1/3/15
 * Time: 11:52 PM
 */

namespace app;
use Illuminate\Database\Eloquent\Model as Eloquent;


class vendor extends Eloquent
{
    protected $table = "vendors";
    protected $fillable = array('name', 'company', 'phone_no', 'notes','address','keywords');

}