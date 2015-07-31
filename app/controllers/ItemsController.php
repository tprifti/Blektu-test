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
        //
    }


    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //
    }


    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($username)
    {
        /*$item = Auth::user()->items()->where('id', $id)->first();

        if ($item == null) {
            App::abort(404, 'Item not found');
        }

        $size = $item->getSize();
        $color = $item->getColor();
        $condition = $item->getCondition();
        $category = $item->getCategory();
        $image_path = $item->getImages();


        return View::make('item', [
            'item' => $item,
            'size' => $size,
            'color' => $color,
            'category' => $category,
            'condition' => $condition,
            'image_path' => $image_path
        ]);*/
    $user = User::where('username', $username)->first();

    return View::make('test')->with('user', $user);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        $item = Items::find($id);

return View::make('edititem')->with('item', $item);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id)
    {
        $item = Items::find($id);

  $item->fill(Input::All());
  $item->save();
  return View::make('profile');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }


}
