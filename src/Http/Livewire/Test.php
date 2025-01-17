<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\CitzenServices;
use Livewire\Attributes\Computed;

class Test extends Component
{

    #[Computed()]
    public function services()
    {
        return CitzenServices::
         where('home_page_order','!=',0)
        ->orderBy('home_page_order','desc')
        ->get();
    }


    public function render()
    {
        return view('livewire.test');
    }
}
