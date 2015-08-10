<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = "articles";

    protected $fillable = ['title', 'body', 'published_at'];

    public function setPublishedAtAttribute($data)
    {
        $this->attributes['published_at'] = \Carbon\Carbon::createFromFormat('Y-m-d', $data);
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
