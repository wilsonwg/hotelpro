<?php
/**
 * Created by PhpStorm.
 * User: wilsonwg
 * Date: 1/3/15
 * Time: 11:52 PM
 */

namespace app;
use Illuminate\Database\Eloquent\Model as Eloquent;


class rental extends Eloquent
{
    protected $table = "rentals";
    protected $fillable = array('reporter', 'item', 'original_location', 'new_location','quantity', 'closer', 'case_status');

}