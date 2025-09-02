<x-layout>
    <x-slot name="title">My Biography | College Student</x-slot>

    <nav class="hero-gradient text-white shadow-lg sticky top-0 z-50">
        <div class="container mx-auto px-6 py-3 flex justify-between items-center">
         <a href="{{ url('/') }}" class="text-xl font-bold">MyBio</a>
            <div class="hidden md:flex space-x-8">
                <a href="{{ url('/') }}" class="hover:text-gray-200 transition">Home</a>
                <a href="#about" class="hover:text-gray-200 transition">About</a>
                <a href="#education" class="hover:text-gray-200 transition">Education</a>
                <a href="#contact" class="hover:text-gray-200 transition">Contact</a>
            </div>
            <button class="md:hidden focus:outline-none" id="menu-btn">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
        <div class="md:hidden hidden py-2 px-4" id="mobile-menu">
             <a href="{{ url('/index') }}" class="hover:text-gray-200 transition">Home</a>
            <a href="#about" class="block py-2 hover:bg-blue-700 rounded px-2">About</a>
            <a href="#education" class="block py-2 hover:bg-blue-700 rounded px-2">Education</a>
            <a href="#contact" class="block py-2 hover:bg-blue-700 rounded px-2">Contact</a>
        </div>
    </nav>

    <!-- Hero -->
    <section class="hero-gradient text-white py-20">
        <div class="container mx-auto px-6 flex flex-col md:flex-row items-center">
            <div class="md:w-1/2 mb-10 md:mb-0">
                <h1 class="text-4xl md:text-6xl font-bold mb-4">
                    Hi, I'm <span class="text-yellow-300">Vladimir Ortega</span>
                </h1>
                <h2 class="text-xl md:text-2xl mb-6">Information Technology Student</h2>
                <p class="mb-8 text-gray-200">
                    Passionate about learning new technologies. Currently pursuing my degree while exploring the world of Information Technology.
                </p>
                <div class="flex space-x-4">
                    <a href="#education" class="bg-white text-blue-600 hover:bg-gray-100 px-6 py-3 rounded-full font-semibold interactive-btn">My Education</a>
                    <a href="#contact" class="border-2 border-white text-white hover:bg-white hover:text-blue-600 px-6 py-3 rounded-full font-semibold interactive-btn">Contact Me</a>
                </div>
            </div>
            <div class="md:w-1/2 flex justify-center">
                <div class="bg-white rounded-full p-1 shadow-xl profile-animate">
                    <img src="{{ asset('images/boi.jpg') }}" alt="Profile" class="rounded-full border-4 border-yellow-300 w-64 h-64 object-cover">
                </div>
            </div>
        </div>
    </section>

    <!-- About -->
    <section id="about" class="py-16 bg-white">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-12">About <span class="text-blue-600">Me</span></h2>
            <div class="flex flex-col md:flex-row">
                <div class="md:w-1/3 mb-8 md:mb-0 flex justify-center">
                    <div class="relative">
                        <div class="absolute -inset-4 bg-blue-200 rounded-lg blur opacity-50"></div>
                        <img src="{{ asset('images/boi1.jpg') }}" alt="Student working on laptop" class="relative rounded-lg shadow-md w-full max-w-xs">
                    </div>
                </div>
                <div class="md:w-2/3 md:pl-12">
                    <h3 class="text-2xl font-semibold mb-4">Who Am I?</h3>
                    <p class="mb-6 text-gray-700">
                        Hi! I’m Vladimir Orgega, a friendly and easygoing person. I like spending time with friends, exploring new things, and enjoying life. 
                        I stay positive and make the most out of each day.
                    </p>
                    <h3 class="text-2xl font-semibold mb-4">My Interests</h3>
                    <div class="flex flex-wrap gap-3 mb-6">
                        <span class="bg-blue-100 text-blue-800 px-4 py-2 rounded-full">Technology Trends</span>
                        <span class="bg-purple-100 text-purple-800 px-4 py-2 rounded-full">Gaming</span>
                        <span class="bg-green-100 text-green-800 px-4 py-2 rounded-full">Sports</span>
                        <span class="bg-yellow-100 text-yellow-800 px-4 py-2 rounded-full">Music</span>
                    </div>
                    <h3 class="text-2xl font-semibold mb-4">My Approach</h3>
                    <p class="text-gray-700">
                        I believe in continuous learning and self-improvement. My goal is to make the most of my college experience by engaging with different perspectives and challenging myself with new ideas.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Education -->
    <section id="education" class="py-16 bg-gray-50">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-12">My <span class="text-blue-600">Education</span></h2>
            <div class="max-w-4xl mx-auto">
                <div class="relative space-y-12">
                    <div class="relative pl-8">
                        <div class="absolute w-6 h-6 rounded-full bg-blue-600 border-4 border-white -left-3"></div>
                        <div class="bg-white p-6 rounded-lg shadow-md">
                            <h3 class="text-xl font-bold mb-2">Bachelor of Science in Information Technology</h3>
                            <p class="text-gray-600 mb-2">Ilocos Sur Polytechnic State College Tagudin Campus, 2025 - Present</p>
                            <p class="text-gray-700">Currently pursuing my degree with a focus on foundational IT principles.</p>
                        </div>
                    </div>
                    <div class="relative pl-8">
                        <div class="absolute w-6 h-6 rounded-full bg-blue-600 border-4 border-white -left-3"></div>
                        <div class="bg-white p-6 rounded-lg shadow-md">
                            <h3 class="text-xl font-bold mb-2">High School</h3>
                            <p class="text-gray-600 mb-2">Tagudin National High School, 2017 - 2022</p>
                        </div>
                    </div>
                    <div class="relative pl-8">
                        <div class="absolute w-6 h-6 rounded-full bg-blue-600 border-4 border-white -left-3"></div>
                        <div class="bg-white p-6 rounded-lg shadow-md">
                            <h3 class="text-xl font-bold mb-2">Future Goals</h3>
                            <p class="text-gray-600 mb-2">2025 and Beyond</p>
                            <p class="text-gray-700">After completing my degree, I plan to pursue graduate studies or enter the workforce. My vision includes continuous learning and contributing to technology.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact -->
    <section id="contact" class="py-16 bg-white">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-12">Get In <span class="text-blue-600">Touch</span></h2>
            <div class="max-w-4xl mx-auto">
                <h3 class="text-2xl font-semibold mb-6">Contact Information</h3>
                <p class="mb-4 text-gray-700">Email: vlad@gmail.com</p>
                <p class="mb-4 text-gray-700">Location: Tagudin, Ilocos Sur</p>
                <p class="mb-4 text-gray-700">Facebook: <a href="https://www.facebook.com/ur.vladyy" class="text-blue-600 hover:underline">Profile</a></p>
                <p class="mb-4 text-gray-700">Instagram: <a href="https://www.instagram.com/accounts/onetap/" class="text-blue-600 hover:underline">Profile</a></p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-10">
        <div class="container mx-auto px-6 flex flex-col md:flex-row justify-between items-center">
            <div class="mb-6 md:mb-0">
                <a href="#" class="text-xl font-bold">MyBio</a>
                <p class="mt-2 text-gray-400">Student | Learner | Future Professional</p>
            </div>
            <div class="flex space-x-6">
                 <a href="{{ url('/') }}" class="hover:text-gray-200 transition">Home</a>
                <a href="#about" class="text-gray-400 hover:text-white transition">About</a>
                <a href="#education" class="text-gray-400 hover:text-white transition">Education</a>
                <a href="#contact" class="text-gray-400 hover:text-white transition">Contact</a>
            </div>
        </div>
    </footer>
</x-layout>
