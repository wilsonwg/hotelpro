<?php
/**
 * Created by PhpStorm.
 * User: wilsonwg
 * Date: 1/3/15
 * Time: 11:52 PM
 */

namespace app;
use Illuminate\Database\Eloquent\Model as Eloquent;


class ToDo extends Eloquent
{
    protected $table = "todos";
    protected $fillable = array('reporter', 'description', 'closer', 'case_status');

}