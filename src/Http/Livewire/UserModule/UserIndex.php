<?php

namespace uc\modules\Http\Livewire\UserModule;



 
 
use Livewire\Component;
use App\Services\FlashMsg;
use uc\modules\Models\User;
use Livewire\Attributes\Url;
use Livewire\WithPagination;
use Livewire\Attributes\Rule;
use App\Traits\FlashMsgTraits;
use uc\modules\Traits\SortTrait;
use Illuminate\Support\Facades\Hash;

class UserIndex extends Component
{
    use SortTrait;


    #[Url()]
    public $sortBy = 'created_at';

    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    #[Url()]
    public $perPage = 10;

    #[Url()]
    public $searchUsertype = '';

    #[Url()]
    public $search = '';

    public $editUserId;

    // #[Rule('required')]
    public $editName = '';

    public $edituserType = '';

    #[Rule('required|in:0,1')]
    public $editActiovation = '';


    public $editMobile = '';




    public function edit($id)
    {

        $this->editUserId = $id;
        $data = User::find($id);

        $this->editName = $data->name;
        $this->editActiovation = $data->user_activation;
        $this->editMobile = $data->mobile;
        $this->edituserType = $data->user_type;
    }


    public function cancelEdit()
    {
        $this->reset('editUserId');
    }

    public function update()
    {


        $user = User::find($this->editUserId);

        $this->validate();


        $user->update([
            'name' => $this->editName,
            'user_activation' => $this->editActiovation,
            'mobile' => $this->editMobile,
            'user_type' => $this->edituserType,
        ]);



        $this->cancelEdit();

        $this->resetPage();
    }


    public function destroy($id)
    {
        User::destroy($id);
    }

    public function resetPass($id)
    {

        $user = User::findOrfail($id);

        $user->update([

            'password' => Hash::make('12345'),
            'need_to_change' => 1,
        ]);


        FlashMsgTraits::created($msgType = 'success', $msg = ' تم طلب اعادة تعيين كلمة المرور - كلمة المرور المؤقتة هي 12345');
    }

    public function render()
    {
        $title = 'المستخدمين';
        $pageTitle = 'المستخدمين';

        $users = User::SearchName($this->search)
            ->SearchUserType($this->searchUsertype)
            ->orderBy($this->sortBy, $this->sortdir)
            ->paginate($this->perPage);

        return view('modules::livewire.users.user-index', compact('users'))->layoutData(['title' => $title, 'pageTitle' => $pageTitle]);
    }
}
