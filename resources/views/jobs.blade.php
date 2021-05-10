@include('layouts.guest')
<main class="py-16 px-5">
<div class="flex items-center justify-center">
    <div class="max-w-5xl w-full">

        <div class="pb-10">
            <h1 class="inline-block text-3xl font-bold text-gray-900">Find Jobs</h1>
        </div>

        <!-- Filter -->
        <div class="grid lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-4 mb-10">
            <div class="relative text-gray-400">
                <span class="absolute inset-y-0 left-0 flex items-center pl-4">
                    <i class="material-icons-outlined">search</i>
                </span>
                <input type="search" name="search" class="w-full py-3 text-sm bg-gray-100 rounded-md border-2 border-gray-200 pl-14 focus:outline-none focus:bg-white focus:text-gray-900" placeholder="Keywords" autocomplete="off">
            </div>

            <div class="relative text-gray-400">
                <span class="absolute inset-y-0 left-0 flex items-center pl-4">
                    <i class="material-icons-outlined">location_on</i>
                </span>
                <select name="type" class="appearance-none w-full py-3 text-sm bg-gray-100 rounded-md border-2 border-gray-200 px-14 focus:outline-none focus:bg-white focus:text-gray-900" placeholder="Job Type" autocomplete="off">
                    <option value="" selected disabled>Select Option</option>
                    <option value="Jakarta">Jakarta</option>
                    <option value="Bogor">Bogor</option>
                    <option value="Depok">Depok</option>
                    <option value="Tanggerang">Tanggerang</option>
                    <option value="Bekasi">Bekasi</option>
                </select>
            </div>

            <div class="relative text-gray-400">
                <span class="absolute inset-y-0 left-0 flex items-center pl-4">
                    <i class="material-icons-outlined">work_outline</i>
                </span>
                <select name="type" class="appearance-none w-full py-3 text-sm bg-gray-100 rounded-md border-2 border-gray-200 px-14 focus:outline-none focus:bg-white focus:text-gray-900" placeholder="Job Type" autocomplete="off">
                    <option value="" selected disabled>Select Option</option>
                    <option value="Full Time">Full Time</option>
                    <option value="Part Time">Part Time</option>
                    <option value="Contract">Contract</option>
                </select>
            </div>

            <div class="relative text-gray-400">
                <span class="absolute inset-y-0 left-0 flex items-center pl-4">
                    <i class="material-icons-outlined">attach_money</i>
                </span>
                <input type="search" name="salary" class="w-full py-3 text-sm bg-gray-100 rounded-md border-2 border-gray-200 pl-14 focus:outline-none focus:bg-white focus:text-gray-900" placeholder="Salary" autocomplete="off">
            </div>
        </div>

        <!-- List -->
        <div class="grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-2 grid-cols-1 gap-4">
            @foreach($vacancies as $vacancy)
            <div class="bg-white shadow">
                <div class="p-6">
                    <img src="{{ asset('image/' . $vacancy->institute->logo) }}" width="50px">
                    <div class="pt-5">
                        <h4 class="font-bold">{{ $vacancy->name }}</h4>
                        <span class="text-sm font-light">{{ $vacancy->institute->name }}</span>
                    </div>
                    <div class="mt-3 flex">
                        <a href="#" class="w-full rounded bg-indigo-600 py-2 text-white font-semibold text-xs text-center mr-1">Apply Now</a>
                        <a href="#" class="w-full rounded bg-gray-300 py-2 text-gray-600 font-semibold text-xs text-center ml-1">Check</a>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>
</main>