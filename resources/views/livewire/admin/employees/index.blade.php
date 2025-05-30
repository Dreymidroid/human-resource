<div>
    <div class="relative mb-6 w-full">
        <flux:header size='xl'>Employees</flux:header>
        <flux:subheading size="lg" class="mb-6 px-8">List of employees in {{getCompany()->name}}</flux:subheading>
        <flux:separator />
    </div>
    <div class="flex flex-col">
        <div class="overflow-x-auto sm:-mx-8 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden sm:rounded-lg">
                    <table class="min-w-full table">
                        <thead class="bg-nos-200 dark:bg-nos-950 border-b border-gray-200 ">
                            <tr>
                                <th class="px-8 py-6">#</th>
                                <th class="px-8 py-6">Employee Name</th>
                                <th class="px-8 py-6">Designation</th>
                                <th class="px-8 py-6">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($employees as $key => $employee) 
                                <tr wire:key='{{ $employee->id }}' class="text-center bg-nos-100 hover:bg-nos-50 dark:bg-nos-900 dark:hover:bg-nos-950 py-4">
                                    <td>{{ $key+1 }}</td>
                                    <td class="text-zinc-900 dark:text-white flex flex-col justify-center align-center p-4">
                                   <span class="font-bold text-lg"> {{ $employee->name }}</span>
                                   <span> {{ $employee->email }}</span>
                                    </td>
                                    <td><div class="text-lg">{{ $employee->designation->name }}</div>
                                    <p>{{ $employee->designation->department->name }}</p></td>
                                    <td>
                                        <div>
                                            <flux:button variant="filled" icon="pencil" :href="route('employees.edit', $employee->id)" />
                                            <flux:button variant="danger" icon="trash" wire:click='delete({{ $employee->id }})' />
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="py-4 px-4 bg-nos-200 dark:bg-nos-950">{{ $employees->links() }}</div>
                </div>
            </div>
        </div>
    </div>
</div>

