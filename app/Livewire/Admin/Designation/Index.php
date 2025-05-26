<?php

namespace App\Livewire\Admin\Designation;

use App\Models\Department;
use App\Models\Designation;
use Livewire\Component;
use Livewire\Features\SupportPagination\WithoutUrlPagination;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination, WithoutUrlPagination;

    public function delete($id)
    {
        Designation::find($id)->delete();
        session()->flash('Success', 'Designation deleted successfully');
    }
    
    public function render()
    {
        return view('livewire.admin.designation.index', [
            'designation'=> Designation::inCompany()->paginate(5),
        ]);
    }
}
