<x-layout>
  <x-slot name="title">My Biography | College Student</x-slot>

  <!-- Header -->
  <header style="background: linear-gradient(90deg, #6a11cb 0%, #2575fc 100%); color: white; text-align: center; padding: 30px 20px;">
    <h1 style="font-size: 2.5em; margin-bottom: 10px;">My Biography</h1>
    <nav style="margin-top: 20px;">
      <a href="#about" style="color: white; margin: 0 15px; text-decoration: none; font-weight: 600;">About</a>
      <a href="#education" style="color: white; margin: 0 15px; text-decoration: none; font-weight: 600;">Education</a>
      <a href="#hobbies" style="color: white; margin: 0 15px; text-decoration: none; font-weight: 600;">Hobbies</a>
      <a href="#contact" style="color: white; margin: 0 15px; text-decoration: none; font-weight: 600;">Contact</a>
    </nav>
  </header>

  <!-- Intro -->
  <section style="max-width: 900px; margin: 40px auto; background: white; padding: 30px; border-radius: 15px; box-shadow: 0 4px 20px rgba(0,0,0,0.05); text-align: center;">
    <img src="ivybio.jpg" alt="Ivy Mae A. Ringor" style="width: 180px; height: 180px; border-radius: 50%; object-fit: cover; border: 4px solid #6a11cb; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); margin-bottom: 20px;">
    <h2 style="color: #6a11cb; font-size: 30px; margin-bottom: 10px;">Ivy Mae A. Ringor</h2>
    <p style="color: #555;">College Student | Bachelor of Science in Information Technology</p>
  </section>

  <main>

    <!-- About -->
    <section id="about" class="tab-section active" style="max-width: 900px; margin: 20px auto; background: white; padding: 30px; border-radius: 15px; box-shadow: 0 4px 20px rgba(0,0,0,0.05);">
      <h3 style="color: #6a11cb; margin-bottom: 15px; text-align:center;">About Me</h3>
      <p style="color: #333; line-height: 1.6; text-align:center;">
        A Bachelor of Science in Information Technology student who is determined and willing to learn. Known for being straightforward and sometimes harsh with words, yet carries a sincere attitude and a genuinely kind heart.
      </p>

      <div style="margin-top: 40px; text-align:center;">
        <h3 style="color: #6a11cb; margin-bottom: 15px;">Contact Me</h3>
        <p style="margin-bottom: 8px;">Phone: <span style="color:#2575fc; font-weight:600;">09460598087</span></p>
        <p style="margin-bottom: 8px;">Facebook: <a href="https://www.facebook.com/ivymae.ringor/" target="_blank" style="color: #2575fc; text-decoration: none;">ivymae.ringor</a></p>
        <p style="margin-bottom: 8px;">Instagram: <a href="https://www.instagram.com/itsjust.ivby/" target="_blank" style="color: #2575fc; text-decoration: none;">@itsjust.ivby</a></p>
        <p>Email: <a href="mailto:yviringor@gmail.com" style="color: #2575fc; text-decoration: none;">yviringor@gmail.com</a></p>
      </div>
    </section>

    <!-- Hobbies -->
    <section id="hobbies" class="tab-section" style="max-width: 900px; margin: 20px auto; background: white; padding: 30px; border-radius: 15px; box-shadow: 0 4px 20px rgba(0,0,0,0.05);">
      <h3 style="color: #6a11cb; margin-bottom: 20px; text-align:center;">My Hobbies</h3>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px;">
        <div style="background:white; border-radius:12px; box-shadow:0 4px 10px rgba(0,0,0,0.08); overflow:hidden; text-align:center;">
          <img src="billiard.jpg" alt="Billiards" style="width:100%; height:200px; object-fit:cover;">
          <h4 style="color:#6a11cb; padding:15px 0;">Billiards</h4>
        </div>
        <div style="background:white; border-radius:12px; box-shadow:0 4px 10px rgba(0,0,0,0.08); overflow:hidden; text-align:center;">
          <img src="wattpad.png" alt="Reading Wattpad Stories" style="width:100%; height:200px; object-fit:cover;">
          <h4 style="color:#6a11cb; padding:15px 0;">Reading Wattpad Stories</h4>
        </div>
        <div style="background:white; border-radius:12px; box-shadow:0 4px 10px rgba(0,0,0,0.08); overflow:hidden; text-align:center;">
          <img src="music.png" alt="Sountrip" style="width:100%; height:200px; object-fit:cover;">
          <h4 style="color:#6a11cb; padding:15px 0;">Sountrip</h4>
        </div>
      </div>
    </section>

    <!-- Education -->
    <section id="education" class="tab-section" style="max-width: 900px; margin: 20px auto 40px; background: white; padding: 30px; border-radius: 15px; box-shadow: 0 4px 20px rgba(0,0,0,0.05);">
      <h3 style="color: #6a11cb; margin-bottom: 20px; text-align:center;">My Education</h3>
      <ul style="list-style: none; padding-left: 0; line-height:1.6; color:#333;">
        <li style="margin-bottom: 12px;">
          <strong>College:</strong> Ilocos Sur Polytechnic State College<br>
          <span style="color:#555;">2025 - Present</span>
        </li>
        <li style="margin-bottom: 12px;">
          <strong>High School:</strong> Rimos National High School<br>
          <span style="color:#555;">2022 - 2023</span>
        </li>
        <li>
          <strong>Elementary:</strong> Rimos del Norte Elementary School<br>
          <span style="color:#555;">2016 - 2017</span>
        </li>
      </ul>
    </section>
  </main>

  <!-- Footer -->
  <footer style="background: #6a11cb; color: white; text-align: center; padding: 15px;">
    <p style="margin:0;">&copy; 2025 Ivy Mae A. Ringor. All rights reserved.</p>
  </footer>

  <script>
    function showSection(id) {
      const sections = document.querySelectorAll('.tab-section');
      sections.forEach(section => section.classList.remove('active'));
      document.getElementById(id).classList.add('active');
    }
  </script>
</x-layout>