<?php
/**
 * Created by PhpStorm.
 * User: wilsonwg
 * Date: 1/3/15
 * Time: 11:52 PM
 */

namespace app;
use Illuminate\Database\Eloquent\Model as Eloquent;


class question extends Eloquent {
    protected $table = 'questions';
    protected $fillable = array('id','name', 'description', 'in_d', 'in_q');

    public function d_case(){

        return $this->belongsToMany('d_case');

    }

}