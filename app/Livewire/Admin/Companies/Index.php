<?php

namespace App\Livewire\Admin\Companies;

use App\Models\Company;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\Features\SupportPagination\WithoutUrlPagination;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination, WithoutUrlPagination;


    public function selectCompany($id) {
        Session::put('company_id', 1);
        Session::flash('success', 'Company id set successfully');
    }

    public function index($id) {
        $company = Company::find($id);
        if($company->logo)
        {
            Storage::disk('public')->delete($company->logo);
        }

        $company->delete();
        session()->flash('message', 'Company deleted successfully.');
    }

    public function render()
    {
        return view('livewire.admin.companies.index', [
            'companies' => Company::latest()->paginate(10),
        ]);
    }
}
