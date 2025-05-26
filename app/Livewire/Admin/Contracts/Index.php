<?php

namespace App\Livewire\Admin\Contracts;

use App\Models\Contract;
use App\Models\Department;
use Illuminate\Support\Facades\Session;
use Livewire\Component;
use Livewire\Features\SupportPagination\WithoutUrlPagination;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination, WithoutUrlPagination;

    public $search = '';

    public function delete($id)
    {
        Contract::find($id)->delete();
        Session::flash('success', 'Contract deleted successsfully');
    }

    public function render()
    {
        return view('livewire.admin.contracts.index', [
            'contracts' => Contract::inCompany()->searchByEmployee($this->search)->paginate(10),
        ]);
    }
}
