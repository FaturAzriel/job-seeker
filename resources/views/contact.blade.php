@include('layouts.guest')
<main class="py-16 px-5">
    <div class="flex items-center justify-center">
        <div class="max-w-5xl w-full">

        <div class="pb-10">
            <h1 class="inline-block text-3xl font-bold text-gray-900">Contact Us</h1>
        </div>

        <div class="grid lg:grid-cols-2 md:grid-cols-2 grid-cols-1 gap-4 mb-10 text-sm">
            <div>
                <p class="font-light mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                
                <p class="font-light mb-4">It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            </div>

            <div class="lg:ml-12">
                <div class="form-group mb-5">
                    <label for="" class="text-sm font-light">Name</label>
                    <input type="text" name="name" class="w-full bg-gray-200 border-none rounded text-sm mt-2 py-2 px-4" placeholder="Your Name">
                </div>
                <div class="form-group mb-5">
                    <label for="" class=" font-light">Email</label>
                    <input type="text" name="email" class="w-full bg-gray-200 border-none rounded text-sm mt-2 py-2 px-4" placeholder="Your Email">
                </div>
                <div class="form-group mb-5">
                    <label for="" class=" font-light">Message</label>
                    <textarea name="message" class="w-full bg-gray-200 border-none rounded text-sm mt-2 py-2 px-4" placeholder="Your Message"></textarea>
                </div>
                <div class="form-group">
                    <a href="#" class="text-sm bg-indigo-600 px-6 py-2 rounded text-white">Submit</a>
                </div>
            </div>
        </div>

        </div>
    </div>
</main>