<nav class="glass sticky top-0 z-50" style="background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(10px);">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center py-4">
            <div class="flex items-center space-x-2">
                <div class="w-10 h-10 bg-gradient-to-r from-indigo-500 to-pink-500 rounded-lg flex items-center justify-center">
                    <span class="text-white font-bold">📱</span>
                </div>
                <h1 class="text-2xl font-bold text-white">SmartPhone Hub</h1>
            </div>
            
            <div class="hidden md:flex items-center space-x-8">
                <a href="/" class="text-white hover:text-yellow-400 transition-colors">Home</a>
                <a href="/smartphones" class="text-white hover:text-yellow-400 transition-colors">Smartphones</a>
                <a href="/about" class="text-white hover:text-yellow-400 transition-colors">About</a>
            </div>
            
            <div class="flex items-center space-x-4">
                @auth
                    <span class="text-white">Welcome, {{ Auth::user()->name }}!</span>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button class="bg-red-500 text-white px-4 py-2 rounded-lg hover:opacity-90 transition-opacity">
                            Logout
                        </button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="glass text-white px-4 py-2 rounded-lg hover:bg-white hover:bg-opacity-20 transition-all">
                        Login
                    </a>
                    <a href="{{ route('register') }}" class="bg-gradient-to-r from-indigo-500 to-pink-500 text-white px-6 py-2 rounded-lg hover:opacity-90 transition-opacity">
                        Register
                    </a>
                @endauth
            </div>
        </div>
    </div>
</nav>