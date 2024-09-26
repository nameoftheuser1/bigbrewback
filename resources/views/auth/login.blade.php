<x-layout>
    <div class="w-full max-w-md">
        <div class="bg-white shadow-md rounded px-8 py-8 pt-6">
            <h3 class="text-center text-2xl font-semibold mb-6 text-gray-700">Login</h3>

            <form method="POST" action="{{ url('login') }}">
                @csrf
                <div class="mb-4">
                    <label for="inputEmail" class="block text-sm font-medium text-gray-700">Email</label>
                    <input class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                            id="inputEmail" type="email" name="email" placeholder="name@example.com" value="{{ old('email') }}" required />
                </div>
                <div class="mb-4">
                    <label for="inputPassword" class="block text-sm font-medium text-gray-700">Password</label>
                    <input class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                            id="inputPassword" type="password" name="password" placeholder="Password" required />
                </div>
                <div class="mt-8">
                    <button type="submit"
                    class="w-full btn-register focus:outline-none focus:ring-2 focus:ring-offset-2">
                    Login
                    </button>
                </div>
                <div class="flex items-center justify-start mt-4">
                    <span class="text-black">Don't have an account?</span>
                    <a class="text-sm text-gray-500 hover:text-gray-700 ml-2" href="{{ route('register') }}">Create account here.</a>
                </div>

            </form>

            @if ($errors->any())
                <div class="bg-red-50 border-l-4 border-red-400 p-4 mt-6">
                    <div class="text-red-700">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif
        </div>
    </div>
</x-layout>
