<?php

namespace App\Models;

class Reply extends Model
{
    protected $fillable = ['content'];


    //数据模型关联 一条回复属于一个话题，
    public function topic(){
        return $this->belongsTo(Topic::class);
    }
    // 一个条回复属于一个作者所有：
    public function user(){
        return $this->belongsTo(User::class);
    }
    // recent() 方法在数据模型基类 app/Models/Model.php 中定义，并且使用了 本地作用域 的方式进行定义，
    // 我们的 Reply 模型，就如代码生成器所生成的数据模型一样，统一继承了此类方法：
    public function scopeRecent($query)
    {
        return $query->orderBy('id', 'desc');
    }

}
