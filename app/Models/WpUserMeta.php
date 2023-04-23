<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WpUserMeta extends Model
{
    use HasFactory;
    protected $table = "wp_usermeta";
    protected $fillable = ['user_id','meta_key','meta_value'];
}
