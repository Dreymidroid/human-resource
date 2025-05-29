<div>
    <div class="relative mb-6 w-full">
        <flux:header size='xl'>Departments</flux:header> 
        <flux:subheading size="lg" class="mb-4 mx-8 text-sm text-gray-500">
            List of departments for {{ getCompany()->name }}
        </flux:subheading>
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
                                <th class="px-8 py-6">Department Name</th>
                                <th class="px-8 py-6">Number of Designations</th>
                                <th class="px-8 py-6">Number of Employees</th>
                                <th class="px-8 py-6">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($departments as $key => $department) 
                                <tr wire:key='{{ $department->id }}' class="text-center bg-nos-100 hover:bg-nos-50 dark:bg-nos-900 dark:hover:bg-nos-950 py-4">
                                    <td>{{ $key+1  }}</td>
                                    <td class="text-zinc-900 dark:text-white flex justify-center align-center p-4">
                                        {{ $department->name }}
                                    </td>
                                    <td>{{ $department->designations->count() }}</td>
                                    <td>{{ $department->designations->flatMap->employees->count() }}</td>
                                    <td>
                                        <div>
                                            <flux:button variant="filled" icon="pencil" :href="route('departments.edit', $department->id)" />
                                            <flux:button variant="danger" icon="trash" wire:click='delete({{ $department->id }})' />
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="py-4 px-4 bg-nos-200 dark:bg-nos-950">{{ $departments->links() }}</div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
