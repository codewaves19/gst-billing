<?php

// path location of controller file ...also namespace to avoid conflicts if same name exist at different location
namespace App\Http\Controllers; // avoid naming conflicts

// Facades
use Illuminate\Http\Request;
use App\Models\Party;
use Illuminate\Support\Facades\DB; // Facade is a design pattern in laravel which makes various components of application accessible and provide consistent and clean APIs to developer. they are attached to service components

class AppController extends Controller
{
    // create a function here
    public function index() {
        // using query builder
        
        // insert record 
        $param = array(
            'full_name' => 'Rohit'
        );
        //DB::table('parties')->insert($param); // here it will ignore that we have passed value to only one field of table. it will pass null for other columns


        // select all
        $party = DB::table('parties')->get();

        // select one record
        $party = DB::table("parties")
        ->where('id', 2)
        ->where('phone', 5456545645)
        ->get();

        echo "<pre>";
        print_r($party);

        // update
        $param = array(
            'full_name' => 'Sangmitra'
        );
       // DB::table('parties')
        //->where('id', 4)
        //->update($param);

        // delete
        DB::table('parties')
        ->where('id', 6);

        return "Database operations";
    }
        // create a function here
        public function about() {
            return view("about");
        }
}
