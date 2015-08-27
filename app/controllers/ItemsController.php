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
        $items = Auth::user()->items;
        return View::make('test', ['items' => $items]);
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
    public function show($id)
    {
        $item = Auth::user()->items()->where('id', $id)->first();

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
        ]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id)
    {
        //
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
