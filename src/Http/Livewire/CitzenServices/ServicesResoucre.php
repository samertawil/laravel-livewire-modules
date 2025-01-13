<?php

namespace App\Livewire\CitzenServices;

use Livewire\Component;
use App\Models\CitzenServices;
use App\Traits\FlashMsgTraits;
use Livewire\Attributes\Validate;

class ServicesResoucre extends Component
{
 
   public $num;
   #[Validate(['required'])]
   public $name;
   public $url;
   public $status_id;
   public $Responsible;
   public $url_active_from_date;
   public $url_active_to_date;
   public $active_from_date;
   public $active_to_date;
   #[Validate(['required'])]
   public $active=1;
   public $description;
   public $note;
   public $conditions;
   public $route_name;
   public $logo1;
   public $logo2;
   public $home_page_order;


    public function store() {
        
        $this->validate();
        CitzenServices::create([
            'num'=> $this->num,
            'name'=> $this->name,
            'url'=> $this->url,
            //  'status_id'=> $this->status_id,
            'Responsible'=> $this->Responsible,
            'url_active_from_date'=> $this->url_active_from_date,
            'url_active_to_date'=> $this->url_active_to_date,
            'active_from_date'=> $this->active_from_date,
            'active_to_date'=> $this->active_to_date,
            'active'=> $this->active,
            'description'=> $this->description,
            'note'=> $this->note,
            'conditions'=>$this->conditions,
            'route_name'=>$this->route_name,
            'home_page_order'=>$this->home_page_order,
            
        
        ]);

        FlashMsgTraits::created();
        
    }
    public function render()
    {
        return view('livewire.citzen-services.services-resoucre');
    }
}
