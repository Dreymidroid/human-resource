<?php

namespace App\Livewire\Admin\Companies;

use App\Models\Company;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $company;
    public $logo;

    public function rules()
    {
        return [
            'company.name' => 'required|string|max:255',
            'company.email' => 'required|email|max:255',
            'company.website' => 'nullable|url|max:255',
            'logo' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
        ];
    }

    public function mount()
    {
        $company = new Company();
    }

    public function save()
    {
        $this->validate();
        if ($this->logo) {
            $this->company->logo = $this->logo->store('logos', 'public');
        }
        $this->company->save();
        session()->flash('Success', 'Company created successfully.');

        return $this->redirectRoute(route('companies.index'), true);
    }
    public function render()
    {
        return view('livewire.admin.companies.create');
    }
}
