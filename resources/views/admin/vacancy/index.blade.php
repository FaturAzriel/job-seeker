@include('layouts.admin')
<main class="py-16 px-5">
    <div class="flex items-center justify-center">
        <div class="max-w-5xl w-full">

        <div class="flex items-center justify-between pb-10">
            <h1 class="inline-block text-3xl font-bold text-gray-900">Jobs</h1>
            <a href="{{ route('admin.vacancy.create') }}" class="bg-indigo-600 rounded text-sm text-white px-5 py-2">Create new</a>
        </div>

        @if (session('alert-success'))
        <div x-data="{ show: true }" x-show="show" class="flex justify-between items-center bg-green-200 relative text-green-600 py-3 px-3 rounded mb-5">
            <div><span class="font-semibold text-green-700">Success!</span> {{ session('alert-success') }}</div>
            <div>
                <button type="button" @click="show = false" class=" text-green-700">
                    <span class="text-lg">&times;</span>
                </button>
            </div>
        </div>
        @endif

        <table class="w-full whitespace-nowrap rounded-lg bg-white divide-y divide-gray-300 overflow-hidden">
            <thead class="bg-gray-50">
                <tr class="text-gray-600 text-left">
                    <th class="font-semibold text-sm uppercase px-6 py-4">institute</th>
                    <th class="font-semibold text-sm uppercase px-6 py-4">Name</th>
                    <th class="font-semibold text-sm uppercase px-6 py-4 text-center">status</th>
                    <th class="font-semibold text-sm uppercase px-6 py-4 text-center">Action</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @foreach($jobs as $job)
                <tr>
                    <td class="px-6 py-4">
                    <div class="flex items-center space-x-3">
                            <div class="inline-flex w-10 h-10">
                                <img class="w-10 h-10 object-cover rounded-full" alt="Logo" src="{{ asset('image/'. $job->institute->logo) }}">
                            </div>
                            <div>
                                <p class="">
                                    {{ $job->institute->name }}
                                </p>
                            </div>
                        </div>
                    </td>\
                    <td class="px-6 py-4">{{ $job->name }}</td>
                    <td class="px-6 py-4 text-center"><span class="text-green-800 bg-green-200 font-semibold px-2 rounded-full text-xs">Active</span>
                    <td class="px-6 py-4 text-center">
                        <a href="#" class="text-green-600 hover:underline text-sm">Show</a> 
                        <span class="text-xs text-gray-400">|</span> 
                        <a href="#" class="text-purple-800 hover:underline text-sm">Edit</a> 
                        <span class="text-xs text-gray-400">|</span> 
                        <a href="#" class="text-red-800 hover:underline text-sm">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        </div>
    </div>
</main>