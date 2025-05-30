<div>
    <div class="relative mb-6 w-full">
        <flux:header size='xl'>Contracts</flux:header>
        <flux:subheading size="lg" class="mb-6 px-8">List of contracts in {{getCompany()->name}}</flux:subheading>
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
                                <th class="px-8 py-6">Employee Details</th>
                                <th class="px-8 py-6">Contract Details</th>
                                <th class="px-8 py-6">Rate</th>
                                <th class="px-8 py-6">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($contracts as $key => $contract) 
                                <tr wire:key='{{ $contract->id }}' class="text-center bg-nos-100 hover:bg-nos-50 dark:bg-nos-900 dark:hover:bg-nos-950 py-4">
                                    <td>{{ $key+1 }}</td>
                                    <td class="text-zinc-900 dark:text-white flex flex-col justify-center align-center p-4">
                                        <span class="font-semibold text-lg">{{ $contract->employee->name }}</span>
                                        <span>{{ $contract->employee->email }}</span>
                                        <span>{{ $contract->employee->phone }}</span>
                                        <span class="font-bold">{{ $contract->employee->designation->name }}</span>
                                    </td>
                                    <td>
                                        <h5>Start date: {{ $contract->start_date }}</h5>
                                        <p>End date: {{ $contract->end_date }}</p>
                                        <p class="font-semibold text-lg">Duration: {{ $contract->duration }}</p>
                                    </td>
                                    <td>₦{{ number_format($contract->rate) }} {{ $contract->rate_type}}</td>
                                    <td>
                                        <div>
                                            <flux:button variant="filled" icon="pencil" :href="route('contracts.edit', $contract->id)" />
                                            <flux:button variant="danger" icon="trash" wire:click='delete({{ $contract->id }})' />
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="py-4 px-4 bg-nos-200 dark:bg-nos-950">{{ $contracts->links() }}</div>
                </div>
            </div>
        </div>
    </div>
</div>

