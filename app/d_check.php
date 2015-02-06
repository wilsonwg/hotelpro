<?php
/**
 * Created by PhpStorm.
 * User: wilsonwg
 * Date: 1/3/15
 * Time: 11:52 PM
 */

namespace app;
use Illuminate\Database\Eloquent\Model as Eloquent;


class d_check extends Eloquent
{
    protected $table = "d_checks";
    protected $fillable = array('inspector_id', 'room_no', 'room_door', 'room_no_card', 'hair', 'room_items', 'bed', 'bed_underside', 'bedside_cabinet', 'trash_bin', 'desk', 'cabinet', 'freezers', 'cup', 'kettle', 'chair', 'room_windows', 'wallpaper', 'floor_spots', 'bathroom_windows', 'bathroom_table', 'bathroom_wall', 'bathroom_silicone', 'notes', 'case_status');

}