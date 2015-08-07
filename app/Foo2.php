<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Foo2 extends Model
{

    use SoftDeletes;

    protected $table = "foo";
    protected $guarded = [];
    public $timestamps = false;
}
