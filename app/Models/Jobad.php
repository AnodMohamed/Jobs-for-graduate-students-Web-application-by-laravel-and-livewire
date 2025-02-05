<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jobad extends Model
{
    use HasFactory;

     /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'description',
        'sallery',
        'skilles',
        'degree',
        'file',
        'category_id',
        'company_id',
    ];
    public static function search($search)
    {
        return empty($search) ? static::query()
            : static::query()->where('id', 'like', '%'.$search.'%')
                ->orWhere('name', 'like', '%'.$search.'%')
                ->orWhere('description', 'like', '%'.$search.'%')
                ->orWhere('sallery', 'like', '%'.$search.'%')
                ->orWhere('skilles', 'like', '%'.$search.'%')
                ->orWhere('degree', 'like', '%'.$search.'%');
    }

    public function category() {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
    public function company() {
        return $this->belongsTo(User::class, 'company_id', 'id');
    }
    
}
