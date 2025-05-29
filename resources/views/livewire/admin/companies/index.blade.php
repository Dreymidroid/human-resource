<div>
    <div class="relative mb-6 w-full">
        <flux:header size='xl'>Companies</flux:header>
        <flux:subheading size="lg" class="mb-6 px-8">List of companies</flux:subheading>
        <flux:separator />
    </div>
    <div class="flex flex-col">
        <div class="overflow-x-auto sm:-mx-8 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden sm:rounded-lg">
                    <table class="min-w-full table">
                        <thead class="bg-nos-200 dark:bg-nos-950 border-b border-gray-200 ">
                            <tr>
                                <th class="px-8 py-6">
                                    #
                                </th>
                                <th class="px-8 py-6">
                                    Company Name
                                </th>
                                <th class="px-8 py-6">
                                    Number of Employees
                                </th>
                                <th class="px-8 py-6">
                                    Actions
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($companies as $singleCompany) 
                                <tr wire:key='{{ $singleCompany->id }}' class="text-center bg-nos-100 hover:bg-nos-50 dark:bg-nos-900 dark:hover:bg-nos-950 py-4">
                                    <td>{{ $singleCompany->id }}</td>
                                    <td class="text-zinc-900 dark:text-white flex justify-center align-center p-4">
                                        <img src="{{ $singleCompany->logo_url  }}" class="w-8 h-8 rounded-full mr-2" />
                                        <span  class="flex align-center justify-center py-">{{ $singleCompany->name }}</span>
                                    </td>
                                    <td>{{ $singleCompany->departments->flatMap->designations->flatMap->employees->count() }}</td>
                                    <td>
                                        <div>
                                            <flux:button variant="filled" icon="pencil" :href="route('companies.edit', $singleCompany->id)" />
                                            <flux:button variant="danger" icon="trash" wire:click='delete({{ $singleCompany->id }})' />
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
