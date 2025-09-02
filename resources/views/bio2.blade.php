<x-layout>
   <x-slot name="title">My Biography | College Student</x-slot>
  <header class="bg-primary text-white p-6 shadow-md">
    <div class="container mx-auto flex justify-between items-center">
      <h1 class="text-2xl font-bold">My Biography</h1>
      <nav class="space-x-4">
        <button onclick="showSection('about')" class="hover:underline">About</button>
        <button onclick="showSection('hobbies')" class="hover:underline">Hobbies</button>
        <button onclick="showSection('education')" class="hover:underline">Education</button>
      </nav>
    </div>
  </header>

  <section class="py-12 text-center bg-white">
    <img src="ivybio.jpg" alt="Ivy Mae A. Ringor" class="w-40 h-40 rounded-full mx-auto border-4 border-primary shadow-md mb-4 object-cover" />
    <h2 class="text-3xl font-semibold text-primary">Ivy Mae A. Ringor</h2>
    <p class="text-gray-700 mt-2">College Student | Bachelor of Science in Information Technology</p>
  </section>

  <main class="px-4 md:px-0">

    <!-- About Section -->
    <section id="about" class="tab-section active bg-white py-16">
      <div class="max-w-3xl mx-auto px-6">
        <h3 class="text-2xl font-bold text-center mb-8 text-dark">About Me</h3>
        <div class="bg-secondary bg-opacity-20 rounded-xl p-6 shadow-md space-y-2 text-gray-800">
          A Bachelor of Science in Information Technology student who may not be a coding expert yet, determined and willing to learn. 
          Known for being straightforward and sometimes harsh with words, yet carries a sincere attitude and a genuinely kind heart.
        </div>

        <div class="mt-16 text-center">
          <h3 class="text-2xl font-bold text-dark mb-6">Contact Me</h3>
          <p class="text-gray-700 mb-4">You can reach me through the following:</p>
          <p class="text-primary font-semibold mb-4">
            <i class="fas fa-phone-alt mr-2"></i>09460598087
          </p>

          <div class="flex justify-center space-x-6 text-2xl text-dark mt-4">
            <a href="https://www.facebook.com/ivymae.ringor/" target="_blank" class="hover:text-primary" aria-label="Facebook">
              <i class="fab fa-facebook"></i>
            </a>
            <a href="https://www.instagram.com/itsjust.ivby/" target="_blank" class="hover:text-primary" aria-label="Instagram">
              <i class="fab fa-instagram"></i>
            </a>
            <a href="mailto:yviringor@gmail.com" class="hover:text-primary" aria-label="Email">
              <i class="fas fa-envelope"></i>
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- Hobbies Section -->
    <section id="hobbies" class="tab-section bg-light py-16">
      <div class="max-w-6xl mx-auto px-6">
        <h3 class="text-2xl font-bold text-center mb-10 text-dark">My Hobbies</h3>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-10">

          <div class="bg-white rounded-xl shadow-lg overflow-hidden">
            <img src="billiard.jpg" alt="Billiards" class="w-full h-64 object-cover">
            <div class="p-5 text-center">
              <h4 class="text-lg font-semibold text-primary">Billiards</h4>
            </div>
          </div>

          <div class="bg-white rounded-xl shadow-lg overflow-hidden">
            <img src="wattpad.png" alt="Reading Wattpad Stories" class="w-full h-64 object-cover">
            <div class="p-5 text-center">
              <h4 class="text-lg font-semibold text-primary">Reading Wattpad Stories</h4>
            </div>
          </div>

          <div class="bg-white rounded-xl shadow-lg overflow-hidden">
            <img src="music.png" alt="Sountrip" class="w-full h-64 object-cover">
            <div class="p-5 text-center">
              <h4 class="text-lg font-semibold text-primary">Sountrip</h4>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- Education Section -->
    <section id="education" class="tab-section bg-secondary bg-opacity-10 py-16">
      <div class="max-w-3xl mx-auto px-6">
        <h3 class="text-2xl font-bold text-center mb-12 text-dark">My Education</h3>
        <div class="space-y-8">
          <div class="bg-white p-6 rounded-lg shadow-md border-l-4 border-primary">
            <h4 class="text-xl font-bold text-primary mb-1">College</h4>
            <p class="text-gray-700">Ilocos Sur Polytechnic State College</p>
            <span class="text-sm text-gray-500">2025 - Present</span>
          </div>
          <div class="bg-white p-6 rounded-lg shadow-md border-l-4 border-primary">
            <h4 class="text-xl font-bold text-primary mb-1">High School</h4>
            <p class="text-gray-700">Rimos National High School</p>
            <span class="text-sm text-gray-500">2022 - 2023</span>
          </div>
          <div class="bg-white p-6 rounded-lg shadow-md border-l-4 border-primary">
            <h4 class="text-xl font-bold text-primary mb-1">Elementary School</h4>
            <p class="text-gray-700">Rimos del Norte Elementary School</p>
            <span class="text-sm text-gray-500">2016 - 2017</span>
          </div>
        </div>
      </div>
    </section>

  </main>

  <footer class="bg-dark text-white text-center py-6 mt-12">
    <p>&copy; 2025 Ivy Mae A. Ringor. All rights reserved.</p>
  </footer>

  <script>
    function showSection(id) {
      const sections = document.querySelectorAll('.tab-section');
      sections.forEach(section => section.classList.remove('active'));
      document.getElementById(id).classList.add('active');
    }
  </script>
</x-layout>