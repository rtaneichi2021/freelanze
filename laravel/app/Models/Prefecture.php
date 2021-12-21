<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Prefecture extends Model
{
    protected $table = 'prefectures';

    protected $fillable = 'name';

    public static function getPrefectures()
    {
        return self::orderBy('id', 'asc')->get();
    }
}
