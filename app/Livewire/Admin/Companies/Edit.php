<?php

namespace App\Livewire\Admin\Companies;

use App\Models\Company;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;
use Livewire\Component;
use Livewire\WithFileUploads;

class Edit extends Component
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

    public function mount($id)
    {
        $this->company = Company::find($id);
        $logo = $this->company->logo_url;
    }

    public function save()
    {
        $this->validate();
        if ($this->logo) {
            if ($this->company->logo)
                Storage::disk('public')->delete($this->company->logo);

            $this->company->logo = $this->logo->store('logos', 'public');
        }
        $this->company->save();
        session()->flash('Success', 'Company updated successfully.');

        return $this->redirectIntended(route('companies.index'), navigate: true);
    }

    public function render()
    {
        return view('livewire.admin.companies.edit', ['company' => $this->company]);
    }
}
