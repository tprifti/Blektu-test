<?php

class Items extends Eloquent
{

    protected $guarded = [
        'id',
    ];



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
        'condition_ID' => 'required',
        'category_ID' => 'required',
        'color_ID' => 'required',
        'size_ID' => 'required'
        

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
<<<<<<< HEAD

    



=======
>>>>>>> parent of e47c1a8... Added Edit Item function
}