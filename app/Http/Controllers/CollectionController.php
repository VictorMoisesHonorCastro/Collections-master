<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Add the collection class
use Illuminate\Support\Collection;
class CollectionController extends Controller
{
    //

    public function collection_class(){


        //Crear una nueva colección usando la clase Colección
        $collection1 = new Collection(['123456789w','987654321e','123789456t','456123789f','789546123a']);

        //volcar el contenido variable en el navegador
        dd($collection1);
    }

    public function collect_method(){

        //Create a new collection using the collect method
        $collection2 = collect(["Tomas", "Better", "Raquel", "Maria", "Raul"]);

        //dump the variable content in the browser
        dd($collection2);

    }

    public function search_data()
    {
        //Declarar una colección
        $customer = collect([['dni' => '123456789w', 'name' => 'Rahman'],
            ['dni' => '987654321e', 'name' => 'Janifer'],
            ['dni' => '123789456t', 'name' => 'Micheal',]]);

        //Buscar usando método contains
        if ($customer->contains('name', 'Janifer'))
        {
            echo "Janifer exists in the customer list.<br/>";
        }

        //Buscar usando  método where
        echo $customer->where('name', 'Janifer')."<br/>";

        //ordenar segun el nombre
        $sortedCustomer = $customer->sortBy('author');

        //volcar el contenido en el buscador
        dd($sortedCustomer->values()->toArray());
    }
}
