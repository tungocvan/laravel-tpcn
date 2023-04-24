<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WpUser extends Model
{
    use HasFactory; 
    protected $table = "wp_users";
    protected $fillable = ['user_login','user_pass','user_nicename','user_email','user_url','user_registered','user_status','display_name'];
    public $timestamps = false;
}
