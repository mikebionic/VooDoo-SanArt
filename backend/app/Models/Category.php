<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use TCG\Voyager\Traits\Translatable;

class Category extends Model
{
    use HasFactory;
    use Translatable;

    const IMAGE_DEFAULT_PATH = 'default.png';
    const IMAGE_DIR = 'categories';

    protected $translatable = ['title', 'description'];

    protected $fillable = ['title', 'parent_id', 'description', 'order'];

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('ordered', function (Builder $query) {
            $query->orderBy('order', 'desc');
        });

        static::addGlobalScope('enabled', function (Builder $query) {
            $query->where('enabled', true);
        });
    }

    public function getImagePathAttribute()
    {
        $image = $this->attributes['image'];
        if (!$image) return self::IMAGE_DEFAULT_PATH;
        if (!Str::startsWith($image, 'storage')) {
            if (!Str::startsWith($image, self::IMAGE_DIR)) {
                $image = 'storage/' . self::IMAGE_DIR . '/' . $image;
            }
            else {
                $image = 'storage/'. $image;
            }
        }
        return $image;
    }

    public function parent()
    {
        return $this->belongsTo(self::class, 'parent_id', 'id');
    }

    public function parentId()
    {
        return $this->parent();
    }

    public function children()
    {
        return $this->hasMany(self::class, 'parent_id', 'id');
    }

    public function isEmpty(): bool
    {
        return $this->products()->count() < 1;
    }

    public function products()
    {
        return $this->hasMany(Product::class)
            ->orWhereIn('category_id', $this->children()->get(['id'])->pluck('id')->toArray());
    }

    public function scopeParents($query)
    {
        $query->where('parent_id', null);
    }

    public function scopeAll(Builder $query)
    {
        $query->withoutGlobalScopes();
        return $query;
    }
}
