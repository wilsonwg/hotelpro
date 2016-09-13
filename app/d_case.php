<?php
/**
 * Created by PhpStorm.
 * User: wilsonwg
 * Date: 1/3/15
 * Time: 11:52 PM
 */

namespace app;
use Illuminate\Database\Eloquent\Model as Eloquent;


class d_case extends Eloquent {

    //Chose the primary table
    protected $table = "d_cases";
    protected $fillable = array('type_id','room_no','inspector_id');
//    protected $primaryKey = "type_id";

//    public function questions()
//    {
                                  //the final related table, pivotal table, related keys on the pivotal tables
//        return $this->belongsToMany('App\question','case_question','type_id', 'question_id');
//    }

//    public function questions()
//    {
//        return $this->hasManyThrough('App\question', 'case_question', 'type_id', 'question_id');
//      }





}