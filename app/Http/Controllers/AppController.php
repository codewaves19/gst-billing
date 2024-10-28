<?php

// path location of controller file ...also namespace to avoid conflicts if same name exist at different location
namespace App\Http\Controllers; // avoid naming conflicts

use Illuminate\Http\Request;
use App\Models\Party;

class AppController extends Controller
{
    // create a function here
    public function index() {
        //$name = "Manisha";
        //$phone = "9810492993";
        

        // usin php compact function
        //return view("welcome", compact("name", "phone"));

        // using associative array
       /* return view("welcome", array(
            'name' => $name,
            'phone' => $phone
        ));*/
       // using associative array
      // $data['name'] = $name;
       //$data['phone'] = $phone;

       //return view("welcome", $data);
        // using with method
        /*return view("welcome")
            ->with('name', $name)
            ->with('phone', $phone);*/
       // Insert option 1
        $party = new Party;
        $party->full_name = "Money";
        //$party->save();
        // Insert option 2
        $param=array(
            "full_name" => "Roy",
            "phone" => "5456545645",
            "address" => "uyghgtfthgjh"
        );
        //Party::create($param);

        // select all data
        $parties= Party::all();
        //echo $parties;
       // dd($parties);

        // select one record by id
        //$id = 1;
        //$party = Party::find($id);
        //dd($party);

        // select record by column/field
        $party = Party::where('phone', '5456545645')->get();
        dd($party);

        return "Database operations";

    }
        // create a function here
        public function about() {
            return view("about");
        }
}
