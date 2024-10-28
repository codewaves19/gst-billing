<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Party extends Model
{
    use HasFactory;
    // Table name
    protected $table = "parties"; // attach table with parties table

    // primary key
    protected $primaryKey = "id";

    // Required columns or mandatory
    //protected $fillable = array("full_name");
    protected $fillable = array("full_name", "phone", "address");

}
