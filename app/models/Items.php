<?php

class Items extends Eloquent
{

    protected $guarded = [
        'id',
    ];
//TEST


    protected $fillable = [
        'name',
        'description',
        'price',
        'brand',
        'condition_ID',
        'category_ID',
        'color_ID',
        'size_ID'
    ];

    public static $rules = [
        'name' => 'required|regex:/(^[A-Za-z0-9 ]+$)+/|max:50',
        'description' => 'required|regex:/(^[A-Za-z0-9 ]+$)+/',
        'price' => 'required|numeric',
        'brand' => 'required|regex:/(^[A-Za-z0-9 ]+$)+/',
        'condition_ID' => 'required|exists:conditions,id',
        'category_ID' => 'required|exists:categories,id',
        'color_ID' => 'required|exists:colors,id',
        'size_ID' => 'required|exists:sizes,id'

    ];

    
    protected $table = 'items';

    public function user()
    {
        return $this->hasOne('User', 'user_ID', 'id');
    }

    public function getSize()
    {
        return DB::table('sizes')->select('size')
            ->where('id', $this->size_ID)->first()->size;
    }

    public function getColor()
    {
        return DB::table('colors')->select('color')
            ->where('id', $this->color_ID)->first()->color;
    }

    public function getCondition()
    {
        return DB::table('conditions')->select('type')
            ->where('id', $this->condition_ID)->first()->type;
    }

    public function getCategory()
    {
        return DB::table('categories')->select('category')
            ->where('id', $this->category_ID)->first()->category;
    }

    public function getImages()
    {
        return DB::table('images')->select('image')
            ->where('item_id', $this->id)->first()->image;
    }

    



}