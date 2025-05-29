<div>
    <div class="relative mb-6 w-full">
        <flux:header size='xl'>Departments</flux:header>
        <flux:subheading size="lg" class="mb-6 px-8">Create new Department</flux:subheading>
        <flux:separator />
    </div>

    <form wire:submit='save'  class="my-6 w-full space-y-6">
        <flux:input label='Department name' wire:model.live='department.name' :invalid="$errors->has('department.name')" type='text' />
        <flux:button variant="primary" type='submit'>Save</flux:button>
    </form>
</div>