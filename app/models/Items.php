<?php

class Items extends Eloquent
{

    protected $guarded = [
        'id',
    ];

    protected $table = 'items';

    public function user()
    {
        return $this->belongsTo('User', 'user_ID', 'id');
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