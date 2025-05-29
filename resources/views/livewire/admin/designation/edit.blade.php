<div>
    <div class="relative mb-6 w-full">
        <flux:header size='xl'>Designations</flux:header>
        <flux:subheading size="lg" class="mb-6 px-8">Edit this Designation</flux:subheading>
        <flux:separator />
    </div>

    <form wire:submit='save'  class="my-6 w-full space-y-6">
        <flux:select label="Department" wire:model.live="designation.department_id" :invalid="$errors->has('designation.department_id')">
        <option selected>Select Department</option>
        @foreach ($departments as $department)
        <option value="{{ $department->id }}">{{$department->name}}</option>
            
        @endforeach
        </flux:select>
        <flux:input label='Designation name' wire:model.live='designation.name' :invalid="$errors->has('designation.name')" type='text' />
        <flux:button variant="primary" type='submit'>Save</flux:button>
    </form>
</div>