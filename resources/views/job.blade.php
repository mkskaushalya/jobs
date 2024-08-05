<x-page>
    <x-slot name="title">
        Job
    </x-slot>
    <x-slot name="headline">
        Job Page
    </x-slot>
    <div>
        <div>
            <div class="px-4 sm:px-0">
              <h3 class="text-base font-bold leading-7 text-gray-900 sm:text-2xl">Job Information</h3>
            </div>
            <div class="mt-2 border-t border-gray-100">
              <dl class="divide-y divide-gray-100">
                <div class="px-2 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                  <dt class="text-sm font-medium leading-6 text-gray-900">Job Title</dt>
                  <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $job['title']}}</dd>
                </div>
                <div class="px-2 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                  <dt class="text-sm font-medium leading-6 text-gray-900">Job Description</dt>
                  <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $job['description']}}</dd>
                </div>
                <div class="px-2 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                  <dt class="text-sm font-medium leading-6 text-gray-900">Salary</dt>
                  <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">${{ $job['salary']}}/year</dd>
                </div>
                <div class="px-2 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                  <dt class="text-sm font-medium leading-6 text-gray-900">Job Location</dt>
                  <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $job['location'] }}</dd>
                </div>
                <div class="px-2 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                  <dt class="text-sm font-medium leading-6 text-gray-900">Company</dt>
                  <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $job['company_name'] }}</dd>
                </div>
                <div class="px-2 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                  <dt class="text-sm font-medium leading-6 text-gray-900">Closing Date</dt>
                  <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $job['closing_date'] }}</dd>
                </div>
              </dl>
            </div>
          </div>
          
    </div>
</x-page>