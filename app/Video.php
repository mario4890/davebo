<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Video extends Model
{
    public function idSelect($id) {
        $sql = DB::select("SELECT * FROM videos WHERE id = $id");
        return $sql;
    }
}
