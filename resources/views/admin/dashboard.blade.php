@include('layouts.admin')
<main class="py-16 px-5">
    <div class="flex items-center justify-center">
        <div class="max-w-5xl w-full">

            <div class="pb-10">
                <h1 class="inline-block text-3xl font-bold text-gray-900">Dashboard</h1>
            </div>

            <div class="bg-indigo-600 px-8 py-4 shadow rounded text-white">
                <h1 class="text-lg">Welcome back, <span class="font-medium">{{ auth()->user()->name }}!</span></h1>
                <p class="text-sm font-light pt-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>

        </div>
    </div>
</main>