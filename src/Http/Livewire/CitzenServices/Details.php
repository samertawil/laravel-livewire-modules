<?php

namespace App\Livewire\CitzenServices;

use Livewire\Component;
use App\Models\CitzenServices;



class Details extends Component
{
    public $editServicesId;

    public $conditions;

    public $description;

    public $note;

    public $url_active_from_date;

    public $url_active_to_date;

    public $url;

    public $route_name;

    public $Responsible;

    public $logo1;

    public $logo2;



    public $goEdit = 0;

    public $dataToEdit;


    public function mount($id)
    {


        $this->editServicesId = $id;

        $data = ServicesIndex::services($this->editServicesId);

        $this->dataToEdit = $data;

        $this->conditions = $data->conditions;
        $this->description = $data->description;
        $this->note = $data->note;
        $this->url_active_from_date = $data->url_active_from_date;
        $this->url_active_to_date = $data->url_active_to_date;
        $this->url = $data->url;
        $this->route_name = $data->route_name;
        $this->Responsible = $data->Responsible;
        $this->logo1 = $data->logo1;
        $this->logo2 = $data->logo2;
    }



    public function edit()
    {
        $this->goEdit = 1;


        $this->conditions = $this->dataToEdit->conditions;
        $this->description = $this->dataToEdit->description;
        $this->note = $this->dataToEdit->note;
        $this->url_active_from_date = $this->dataToEdit->url_active_from_date;
        $this->url_active_to_date = $this->dataToEdit->url_active_to_date;
        $this->url = $this->dataToEdit->url;
        $this->route_name = $this->dataToEdit->route_name;
        $this->Responsible = $this->dataToEdit->Responsible;
        $this->logo1 = $this->dataToEdit->logo1;
        $this->logo2 = $this->dataToEdit->logo2;
    }


    public function update()
    {

        $this->dataToEdit->update([
            'conditions' => $this->conditions,
            'description' => $this->description,
            'note' => $this->note,
            'url_active_from_date' => $this->url_active_from_date,
            'url_active_to_date' => $this->url_active_to_date,
            'url' => $this->url,
            'route_name' => $this->route_name,
            'Responsible' => $this->Responsible,
        ]);

        $this->cancelEdit();
    }

    public function cancelEdit()
    {

        $this->goEdit = 0;
    }


    public function render()
    {
        return view('livewire.citzen-services.details');
    }
}
