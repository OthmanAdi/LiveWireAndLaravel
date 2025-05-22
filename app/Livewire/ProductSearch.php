<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;

class ProductSearch extends Component
{
    public $search = '';

//    Diese property wird automatisch aktualisiert wenn der benutzer:in tippt
// uns löst damit die rendering der komponent aus
    public function render()
    {
        $searchTerm = '%' . $this->search . '%'; //Wildcard suchen

        $products = Product::where('name', 'like', $searchTerm)
            ->orWhere('description', 'like', $searchTerm)
            ->orWhere('category', 'like', $searchTerm)
            ->get();

        return view('livewire.product-search', ['products' => $products]);
    }
}
