<?php

namespace uc\modules\Http\Livewire\UserModule;

use Livewire\Component;
use Livewire\Attributes\Title;


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






    #[Title('الحسابات والمستحدمين')]
    public function render()
    {

        $pageTitle='الحسابات والمستخدمين';
        
        return view('users.user-create')->layoutData(['pageTitle'=>$pageTitle]);
    }
}
