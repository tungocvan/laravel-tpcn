<?php

namespace modules\Categories\src\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Categories\src\Models\Taxonomy;

class Categories extends Model
{
    use HasFactory;
    protected $table = 'terms';
    protected $primaryKey = 'term_id';
    protected $fillable = ['term_id', 'name', 'slug', 'term_group'];
    public $timestamps = false;
    //const CREATED_AT ="created_at";
    //const UPDATED_AT ="updated_at";

    // quan hệ 1 => 1

    public function taxonomy()
    {
        return $this->hasOne(Taxonomy::class, 'term_id', 'term_id');
    }
}
