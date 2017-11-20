<?php

namespace App\Models;

class Topic extends Model
{
    protected $fillable = ['title', 'body', 'user_id', 'category_id', 'reply_count',
     'view_count', 'last_reply_user_id', 'order', 'excerpt', 'slug'];

     // 添加模型关系
     public function category(){
         return $this->belongsTo(Category::Class);
     }
     public function user(){
         return $this->belongsTo(User::class);
     }


}
