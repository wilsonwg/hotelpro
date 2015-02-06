<?php
/**
 * Created by PhpStorm.
 * User: wilsonwg
 * Date: 1/3/15
 * Time: 11:52 PM
 */

namespace app;
use Illuminate\Database\Eloquent\Model as Eloquent;


class complain extends Eloquent
{
    protected $table = "complains";
    protected $fillable = array('reporter', 'title', 'location', 'problem', 'closer', 'answer', 'case_status');

}