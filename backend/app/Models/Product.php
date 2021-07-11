<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use TCG\Voyager\Traits\Translatable;

class Product extends Model
{
    use HasFactory;
    use Translatable;

    protected $translatable = ['title', 'description'];

    protected $fillable = ['title', 'description', 'image', 'status', 'quantity', 'category_id', 'price'];

    const STATUS_ACTIVE = 'active';
    const STATUS_DISABLED = 'disabled';

    const IMAGE_DIR = 'products';
    const IMAGE_DEFAULT_PATH = 'default.jpg';

    public static $statuses = [
        self::STATUS_ACTIVE,
        self::STATUS_DISABLED,
    ];


    protected static function boot()
    {
        parent::boot();
        static::addGlobalScope('enabled', function (Builder $query) {
            $query->where('enabled', true);
        });
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function categoryId()
    {
        return $this->category();
    }

    public function location()
    {
        return $this->belongsTo(Location::class, 'location_id');
    }

    public function locationId()
    {
        return $this->location();
    }

    public function priceFormatted(): string
    {
        return $this->price;
    }

    public function priceText(): string
    {
        return $this->priceFormatted() . ' TMT';
    }

    public function phoneNumber()
    {
        $phone = optional($this->user)->phone;
        if ($phone) {
            $phone = '+993'.$phone;
        }
        return $phone;
    }

    public function getCoverPathAttribute()
    {
        $image = @json_decode($this->images)[0];
        $image = $this->getImagePath($image);
        if (!$image) $image = self::IMAGE_DEFAULT_PATH;
        return $image;
    }

    public function getGalleryAttribute()
    {
        $images = @json_decode($this->images);
        $imagePaths = [];
        if (is_iterable($images))
            foreach ($images as $key => $image) {
                $path = $this->getImagePath($image);
                if ($path)
                    $imagePaths[] = $path;
            }
        return $imagePaths;
    }

    public function getImagePath(string $image = null)
    {
        if (!$image) $image = self::IMAGE_DEFAULT_PATH;
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

    public function related(int $limit = 4)
    {
        $related = $this->category->products()->limit($limit+1)->get();
        $productId = $this->id;
        $related = $related->filter(function($value, $key) use ($productId) {
            return $productId !== $value->id;
        });
        return $related->slice(0,$limit);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function userId()
    {
        return $this->user();
    }

    public function scopeAll(Builder $query)
    {
        $query->withoutGlobalScopes();
        return $query;
    }

    public function __toString()
    {
        return $this->title;
    }
}
