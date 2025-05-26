<div>
    <div class="relative mb-6 w-full">
        <flux:header size='xl'>
            Companies
        </flux:header>
        <flux:subheading size="lg" class="mb-6">
            List of companies
        </flux:subheading>
        <flux:separator />
    </div>
    <div class="flex flex-col">
        <div class="overflow-x-auto sm:-mx-8 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full table">
                        <thead class="bg-nos-200 dark:bg-nos-950">
                            <tr>
                                <th>
                                    #
                                </th>
                                <th>
                                    Company Name
                                </th>
                                <th>
                                    Number of employees
                                </th>
                                <th>
                                    Actions
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                                @foreach($companies as $company) 
                                <tr class="text-center bg-nos-100 hover:bg-nos-50 dark:bg-nos-900 dark:hover:bg-nos-950">
                                    <td>{{ $company->id }}</td>
                                    <td class="text-zinc-900 dark:text-white flex justify-center"><{{ $company->name }}/td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
