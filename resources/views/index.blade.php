<x-layout>
    <x-slot name="title">My Biography | College Student</x-slot>

    <!-- Main Content -->
    <section class="relative bg-gradient-to-br from-blue-900 via-indigo-900 to-black text-white flex items-center justify-center min-h-screen px-6 overflow-hidden">
        
        <!-- Animated background glow -->
        <div class="absolute inset-0 bg-gradient-to-r from-purple-500/20 via-transparent to-yellow-500/20 animate-pulse"></div>

        <div class="relative text-center animate-fade-in">
            <h1 class="text-5xl md:text-6xl font-extrabold mb-4 tracking-tight">
                Welcome to <span class="text-yellow-300">Nexus</span>
            </h1>
            <p class="text-lg text-gray-300 mb-8 max-w-2xl mx-auto">
                This is the homepage of our group project. Explore our biography and learn more about us.
            </p>
            <div class="flex justify-center">
                <a href="{{ url('/biography') }}"
                   class="bg-white text-blue-600 hover:bg-blue-100 px-8 py-3 rounded-full font-semibold shadow-lg transition transform hover:scale-110 hover:shadow-2xl duration-300">
                    Go to My Biography
                </a>
            </div>
        </div>
    </section>
</x-layout>
