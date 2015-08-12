<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \Laravelrus\LocalizedCarbon\Traits\LocalizedEloquentTrait;

class Article extends Model
{
    use LocalizedEloquentTrait;

    protected $table = "articles";
    protected $fillable = ['title', 'body', 'published_at'];
    protected $dates = ['published_at'];

    public function setPublishedAtAttribute($data)
    {
        $this->attributes['published_at'] = \Carbon\Carbon::createFromFormat('Y-m-d', $data);
    }

    public function getPublishedAtAttribute($data)
    {
        return \LocalizedCarbon::instance(\Carbon\Carbon::parse($data));
    }

    public function scopePublished($query)
    {
        $query->where('published_at', '<=', \Carbon\Carbon::now());
    }

    // scopeAllWomens
    public function scopeUnPublished($query)
    {
        $query->where('published_at', '>=', \Carbon\Carbon::now());
    }
}
