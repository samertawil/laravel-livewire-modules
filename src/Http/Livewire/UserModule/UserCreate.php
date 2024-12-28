<?php

namespace  App\Livewire\UserModule ;

use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;


class UserCreate extends Component
{

    public $name = '';
    public $user_name = '';
    public $mobile = '';
    public $email = '';
    public $password = '';
    public $passwordConfirmation = '';
    public $year = '';
    public $month = '';
    public $day = '';


    
    #[Layout('components.layouts.metronic7-simple-app')]
    public function render()
    {

       $pageTitle=__('ucModule.users');
        
        return view('livewire.users.user-create')->layoutData(['pageTitle'=>$pageTitle,'Title'=>$pageTitle]);
    }
}
