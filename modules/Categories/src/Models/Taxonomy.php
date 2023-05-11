<?php

namespace modules\Categories\src\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Categories\src\Models\Categories;

class Taxonomy extends Model
{
    use HasFactory;
    protected $table = 'wp_term_taxonomy';
    protected $primaryKey = 'term_id';
    //protected $fillable = ['term_id', 'name', 'slug', 'term_group'];
    //protected $timestamps = true;
    //const CREATED_AT ="created_at";
    //const UPDATED_AT ="updated_at";

    // quan hệ 1 => 1
    public function category()
    {
        return $this->hasOne(Categories::class, 'term_id', 'term_id');
    }
}
