<?php

namespace App\Livewire\Admin\Designation;

use App\Models\Designation;
use Livewire\Component;

class Edit extends Component
{
    public $designation;

    public function rules()
    {
        return [
            'designation.name' => 'required|string|max:255',
            'designation.department_id' => 'required|exists:departments,id',
        ];
    }

    public function mount($id)
    {
        $this->designation =  Designation::find($id);
    }

    public function save()
    {
        $this->validate();
        $this->designation->save();
        session()->flash('Success', 'Designation updated successfully.');
        return $this->redirectIntended('designation.index');
    }

    public function render()
    {
        return view('livewire.admin.designation.edit');
    }
}
