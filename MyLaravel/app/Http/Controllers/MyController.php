<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Movies {

    public $title;
    public $description;

    public function __construct($title, $description = 'none'){

        $this->title = $title;
        $this->description = $description;
    }

    public function getString(){

        return 'Title: ' . $this->title . ' - ' . 'Description: ' . $this->description;
    }
}

class MyController extends Controller
{
    public function homepage(){

        $movie1 = new Movies('No Country for Old Men');
        $movie1->description = 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequatur modi cumque totam quaerat expedita facilis cupiditate culpa, ipsa ullam velit aliquid aperiam distinctio. Maiores vel amet libero similique consequuntur repellat!';
        $movie1Str = $movie1->getString();

        $movie2 = new Movies('Forrest Gump');
        $movie2Str = $movie2->getString();

        dd($movie1Str, $movie2Str);

        return view('pages.home');
    }
}
