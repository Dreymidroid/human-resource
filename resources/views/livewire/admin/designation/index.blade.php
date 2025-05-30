<div>
    <div class="relative mb-6 w-full">
        <flux:header size='xl'>Designations</flux:header>
        <flux:subheading size="lg" class="mb-6 px-8">List of designations in {{getCompany()->name}}</flux:subheading>
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
                                <th class="px-8 py-6">Designation Name</th>
                                <th class="px-8 py-6">Department</th>
                                <th class="px-8 py-6">Number of Employees</th>
                                <th class="px-8 py-6">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($designations as $key => $designation) 
                                <tr wire:key='{{ $designation->id }}' class="text-center bg-nos-100 hover:bg-nos-50 dark:bg-nos-900 dark:hover:bg-nos-950 py-4">
                                    <td>{{ $key+1 }}</td>
                                    <td class="text-zinc-900 dark:text-white flex justify-center align-center p-4">
                                    {{ $designation->name }}
                                    </td>
                                    <td>{{ $designation->department->name }}</td>
                                    <td>{{ $designation->employees->count() }}</td>
                                    <td>
                                        <div>
                                            <flux:button variant="filled" icon="pencil" :href="route('designations.edit', $designation->id)" />
                                            <flux:button variant="danger" icon="trash" wire:click='delete({{ $designation->id }})' />
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="py-4 px-4 bg-nos-200 dark:bg-nos-950">{{ $designations->links() }}</div>
                </div>
            </div>
        </div>
    </div>
</div>

