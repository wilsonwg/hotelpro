<?php
/**
 * Created by PhpStorm.
 * User: wilsonwg
 * Date: 1/3/15
 * Time: 11:52 PM
 */

namespace app;
use Illuminate\Database\Eloquent\Model as Eloquent;


class problem extends Eloquent
{
    protected $table = "problems";
    protected $fillable = array('category', 'title', 'reporter', 'location', 'problem', 'closer', 'answer', 'case_status');

}