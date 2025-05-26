<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Department extends Model
{
    protected $fillable = [
        'name',
        'company_id'
    ];

    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }
    public function designations(): HasMany
    {
        return $this->hasMany(Designation::class);
    }
    public function employees()
    {
        return $this->throughDesignations()->hasEmployees();
    }

    public function scopeInCompany($query) {
        return $query->where('company_id', session('company_id'));
    }
}
