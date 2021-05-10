@include('layouts.admin')
<main class="py-16 px-5">
    <div class="flex items-center justify-center">
        <div class="max-w-5xl w-full">

            <div class="pb-10">
                <h1 class="inline-block text-3xl font-bold text-gray-900">Create Vacancy</h1>
            </div>

            <div class="grid lg:grid-cols-2 md:grid-cols-2 grid-cols-1 gap-4">
                <div class="mb-5">
                    <label for="institute" class="text-sm">Institute</label>
                    <select name="institute" id="institute" class="outline-none border-none bg-gray-200 text-gray-700 rounded w-full text-sm">
                        <option value="" selected disabled>Choose Institute</option>
                        @foreach($institute as $i)
                            <option value="{{ $i->id }}">{{ $i->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-5">
                    <label for="name" class="text-sm">Name</label>
                    <input type="text" id="name" name="name" class="outline-none border-none bg-gray-200 text-gray-700 rounded w-full text-sm" placeholder="Name">
                </div>
            </div>

            <div class="grid grid-cols-1 gap-4">
                <div class="mb-5">
                    <label for="description" class="text-sm">Description</label>
                    <textarea id="description" name="description" class="outline-none border-none bg-gray-200 text-gray-700 rounded w-full text-sm" placeholder="Description"></textarea>
                </div>
            </div>

            <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 gap-4">
                <div class="mb-5">
                    <label for="type" class="text-sm">Type</label>
                    <select name="type" id="type" class="outline-none border-none bg-gray-200 text-gray-700 rounded w-full text-sm">
                        <option value="" selected disabled>Choose Type</option>
                        <option value="Full Time">Full Time</option>
                        <option value="Part Time">Part Time</option>
                        <option value="Remote">Remote</option>
                    </select>
                </div>

                <div class="mb-5">
                    <label for="salary" class="text-sm">Salary</label>
                    <input type="text" id="salary" name="salary" class="outline-none border-none bg-gray-200 text-gray-700 rounded w-full text-sm" placeholder="Salary">
                </div>

                <div class="mb-5">
                    <label for="qualification" class="text-sm">Qualification</label>
                    <input type="text" id="qualification" name="qualification" class="outline-none border-none bg-gray-200 text-gray-700 rounded w-full text-sm" placeholder="Qualification">
                </div>
                
                <div class="mb-5">
                    <label for="year" class="text-sm">Year</label>
                    <select name="year" id="year" class="outline-none border-none bg-gray-200 text-gray-700 rounded w-full text-sm">
                        <option value="" selected disabled>Choose Year</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
            </div>
            <div class="mb-5">
                <button type="submit" class="w-full rounded bg-indigo-600 py-2 text-white font-semibold text-xs text-center">Submit</button>
            </div>
        </div>
    </div>
</main>