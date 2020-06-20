<?php

namespace App\Http\Controllers;
use App\Car;
use Illuminate\Http\Request;


class CarController extends Controller
{
    //to create a new car instance
    public function create(Request $request)
    {
        //this is to create a new car instance
        $make=$request['make'];
        $model=$request['model'];
        $produced_on=$request['produced_on'];
        $car=new Car();
        $car->make=$make;
        $car->model=$model;
        $car->produced_on=$produced_on;
        $car->save();
        return redirect()->back();
    }

    public function show()
    {
         //to show all the cars

         $cars=Car::all();
         return view('index',['cars'=>$cars]);
    }
}
