<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

use App\Car;

class BackendController extends Controller
{



    public function cars_index()
    {
        $cars = Car::all();

        return view('backend.cars_index', compact('cars'));
    }


    public function cars_index_filter()
    {
        $cars = Car::whereId();

        return view('backend.cars_index', compact('cars'));
    }



    public function cars_show($id)


    {
//        $categories = Category::all();

        $car = Car::find($id);

        return view('backend.cars_show', compact('car'));
    }


    public function cars_create()
    {

        $categories = Category::all();

        return view('backend.cars_create', compact('categories'));
    }

    public function cars_store(Request $request)
    {


        $input = $request->all();



      $car =  Car::create($input);

        if($request->category_id)
        {

            $car->categories()->sync($request->category_id);

        }


//        $car = new Car;
//        $car->model = $request->model;
//        $car->brand = $request->brand;
//        $car->year = $request->year;
//        $car->price1h = $request->price1h;
//        $car->price1hcost = $request->price1hcost;
//        $car->owner_user_id = $request->owner_user_id;
//        $car->long_description = $request->long_description;
//        $car->save();

        return redirect('cars/index');

    }

    public function cars_edit($id)
    {

        $car = Car::findOrFail($id);

        $categories = Category::all();

        $cc = array();

        foreach ($car->categories as $c){

            $cc[] = $c->id-1;

        };

        $filtered = array_except($categories, $cc);

        return view('backend.cars_edit', compact('car','categories', 'filtered'));


    }


    public function cars_update(Request $request, $id)
    {
        $car = Car::findOrFail($id);

        $car->update($request->all());

        if($request->category_id)
        {
            $car->categories()->sync($request->category_id);
        }

        return redirect('cars/index');
    }




    public function cars_destroy($id)
    {
        Car::findOrFail($id)->delete();

        return redirect('cars/index');
    }


}
