@include('layouts.guest')
<main class="py-16 px-5">
    <div class="flex items-center justify-center">
        <div class="max-w-5xl w-full">
            <div class="pb-10">
                <h1 class="inline-block text-3xl font-bold text-gray-900">About Us</h1>
            </div>

            <div class="grid lg:grid-cols-2 md:grid-cols-2 grid-cols-1 gap-4 mb-10 text-sm">
                <div>
                <p class="font-light mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                
                <p class="font-light mb-4">It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </div>
                <div class="flex justify-center">
                    <img src="{{ asset('image/about.svg') }}" width="350px">
                </div>
            </div>
        </div>
    </div>
</main>