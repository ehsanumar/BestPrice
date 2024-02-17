   <!-- Sidebar -->
            <div class="bg-gray-800 text-white w-64 flex flex-col">
                <div class="p-4 border-b border-gray-700">
                    <h2 class="text-lg font-semibold">{{ auth()->user()->name }}</h2>
                </div>
                <nav class="flex-1 overflow-y-auto">
                    <a href="/" class="block p-4 hover:bg-gray-700">home</a>
                    <a href="{{ route('user.index') }}" class="block p-4 hover:bg-gray-700">Guests</a>
                    <a href="{{ route('company.users') }}" class="block p-4 hover:bg-gray-700">Company</a>
                    <a href="{{ route('pharmacy.users') }}" class="block p-4 hover:bg-gray-700">Pharmacy</a>
                    <a href="{{ route('pharmacy.index') }}" class="block p-4 hover:bg-gray-700">Pharmacy medicine</a>
                    <a href="{{ route('company.index') }}" class="block p-4 hover:bg-gray-700">Company medicine</a>
                </nav>

                <div class="p-4 border-t border-gray-700">
                    <a href="{{ route('logout') }}" class="block p-2 hover:bg-gray-700 text-red-400">Logout</a>
                </div>
            </div>
