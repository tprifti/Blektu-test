<?php

class ItemsController extends \BaseController
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        /*$items = Items::all();
        //$items = Auth::user()->get()->items;
        //return View::make('test', ['items' => $items]);
        return $items;*/


    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $data = array( 'Category' => Category::lists('category', 'id'),
                        'Condition' => Condition::lists('type', 'id'),
                        'Color' => Color::lists('color', 'id'),
                        'Size' => Size::lists('size', 'id'),
            );
        
        return View::make('items.new')->with('data', $data);
        //  return $data;                                   
    }


    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $rules = Items::$rules;
        $validator = Validator::make(Input::all(), $rules);
        if($validator->fails()){
            $messages = $validator->messages();
            return $messages;
        }
        
        $user = Auth::user();
        $item = new Items;
        
         
            $item->user_ID = Auth::user()->get()->id;
            $item->name = Input::get('name');
            $item->description = Input::get('description');
            $item->price = Input::get('price');
            $item->brand = Input::get('brand');
            $item->category_ID = Input::get('category_ID');
            $item->condition_ID = Input::get('condition_ID');
            $item->color_ID = Input::get('color_ID');
            $item->size_ID = Input::get('size_ID');
            
            $item->save(); 

            return " Item Saved";
            
    }



    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {



        $item = Auth::user()->get()->items()->where('id', $id)->first();


       /* if ($item == null) {
            App::abort(404, 'Item not found');
        }*/

        $size = $item->getSize();
        $color = $item->getColor();
        $condition = $item->getCondition();
        $category = $item->getCategory();
        $image_path = $item->getImages();


        return View::make('items.singleitem', [
            'item' => $item,
            'size' => $size,
            'color' => $color,
            'category' => $category,
            'condition' => $condition,
            'image_path' => $image_path
        ]);

     }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return edit view
     */
    public function edit($id)
    {


        $item = Items::find($id);
        $authuser = Auth::user()->get()->id;

            if(intval($authuser) == $item['user_ID'])
            {
                return View::make('items.edit')->with('item', $item);
            }else {
               return 'null';
            }

    }


    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id)
    {
        $user = Auth::user();
        $item = Items::find($id);
        $item->fill(Input::All());
        $item->save();
          return View::make('profile')->with('user', $user);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        $item = Items::find($id);
        if (!is_null($item)) {
        $item->delete();
     }
     return "Item Deleted";
}
    

    public function askForDelete($id) {
        $item = Items::find($id);
        return View::make('items.deleteitem')->with('item', $item);
    }

}
