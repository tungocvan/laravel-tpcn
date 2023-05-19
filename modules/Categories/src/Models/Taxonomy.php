<?php

namespace modules\Categories\src\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Categories\src\Models\Categories;

class Taxonomy extends Model
{
    use HasFactory;
    protected $table = 'term_taxonomy';
    protected $primaryKey = 'term_id';
    protected $fillable = ['term_taxonomy_id', 'term_id', 'taxonomy', 'description', 'parent', 'count'];
    public $timestamps = false;
    //const CREATED_AT ="created_at";
    //const UPDATED_AT ="updated_at";

    // quan hệ 1 => 1
    public function category()
    {
        return $this->hasOne(Categories::class, 'term_id', 'term_id');
    }
}
