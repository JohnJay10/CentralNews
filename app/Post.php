<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

use Spatie\Image\Manipulations;
use Spatie\MediaLibrary\MediaCollections\Models\Media;





class Post extends Model implements HasMedia
{
    use SoftDeletes;
    use HasMediaTrait;

    protected $fillable = [
        'title',
        'preview',
        'status',
        'body',
        'view_count',
        'user_id',
        'category_id'

    ];
    protected $appends = ['url'];

    public function setTitleAttribute($value)
    {
        $this->attributes['title']  = $value;
        $this->attributes['slug']   = str_slug($value);
    }

    public function clearMediaCollection(string $collectionName = 'default'): HasMedia
    {
        // TODO: Implement clearMediaCollection() method.
    }

   

    public function getUrlAttribute()
    {
        $hasMedia = $this->getMedia('feature_image')->first();
        return  $hasMedia != null ?
            $hasMedia->getUrl() : "";

    }

    
    
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
