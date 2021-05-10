@include('layouts.guest')
<main class="py-16 px-5">
    <div class="flex items-center justify-center">
        <div class="max-w-5xl mx-auto pt-10">

            <div class="pb-10">
                <h1 class="inline-block text-3xl font-bold text-gray-900">Welcome!</h1>
            </div>

            <div>
                <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group mb-5">
                    <label for="" class="text-sm font-light">Username or Email</label>
                    <input type="text" name="email" class="w-full outline-none py-2 text-sm border-gray-300 focus:border-indigo-600 rounded" required>
                </div>
                <div class="form-group mb-5">
                    <label for="" class="text-sm font-light">Password</label>
                    <input type="password" name="password" class="w-full outline-none py-2 text-sm border-gray-300 focus:border-indigo-600 rounded" required>
                </div>
                <div class="form-group mb-5">
                    <button type="submit" class="w-full text-sm bg-indigo-600 px-6 py-2 rounded text-white">Login</button>
                </div>
                </form>
            </div>

            <div class="text-center">
                <a href="#" class="text-xs text-gray-500">Forgot Password?</a>
            </div>
            
        </div>
    </div>
</main>