<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nishan Bandara - Full Stack Software Engineer</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#1e40af',
                        secondary: '#0ea5e9',
                    }
                }
            }
        }
    </script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
        body { font-family: 'Inter', sans-serif; }
        .hero-bg { background: linear-gradient(135deg, #1e3a8a 0%, #1e40af 50%, #0ea5e9 100%); }
        .skill-bar { transition: width 2s ease-in-out; }
    </style>
</head>
<body class="bg-gray-50 text-gray-800">

    <!-- Navigation -->
    <nav class="fixed top-0 w-full bg-white/80 backdrop-blur-md z-50 shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <a href="#" class="text-2xl font-bold text-primary">NB</a>
                </div>
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#home" class="hover:text-primary transition">Home</a>
                    <a href="#about" class="hover:text-primary transition">About</a>
                    <a href="#skills" class="hover:text-primary transition">Skills</a>
                    <a href="#experience" class="hover:text-primary transition">Experience</a>
                    <a href="#projects" class="hover:text-primary transition">Projects</a>
                    <a href="#contact" class="hover:text-primary transition">Contact</a>
                </div>
                <button class="md:hidden">
                    <i class="fas fa-bars text-xl"></i>
                </button>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero-bg min-h-screen flex items-center text-white pt-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <h1 class="text-5xl md:text-7xl font-bold mb-6 leading-tight">
                        Nishan Bandara<br>
                        <span class="text-secondary">Full Stack Engineer</span>
                    </h1>
                    <p class="text-xl md:text-2xl mb-8 opacity-90">6+ years crafting scalable web & mobile apps with Flutter, Laravel, React & more. Currently at Export Development Board.</p>
                    <div class="flex space-x-4">
                        <a href="#contact" class="bg-white text-primary px-8 py-4 rounded-full font-semibold hover:bg-secondary hover:text-white transition shadow-xl">Hire Me</a>
                        <a href="#projects" class="border-2 border-white px-8 py-4 rounded-full font-semibold hover:bg-white hover:text-primary transition">View Projects</a>
                    </div>
                </div>
                <div class="relative">
                    <div class="bg-white/20 backdrop-blur-xl rounded-3xl p-8 md:p-12 shadow-2xl">
                        <img src="https://via.placeholder.com/400x400/1e40af/ffffff?text=NB+Profile" alt="Nishan Bandara" class="w-64 h-64 rounded-full mx-auto shadow-2xl">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-32 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-20">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4">About Me</h2>
                <p class="text-xl text-gray-500 max-w-2xl mx-auto">Passionate full-stack developer specializing in modern web and mobile solutions. Delivering high-performance apps for global teams.</p>
            </div>
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <h3 class="text-3xl font-bold mb-6">Software Engineer with 6+ Years Expertise</h3>
                    <p class="text-lg mb-6 leading-relaxed">Currently Software Engineer at Export Development Board, focusing on Laravel, CodeIgniter, Flutter, React, Java, C#. Previously built Flutter/Laravel apps at Prodigit Pvt Ltd (India, 2 years) and VisionCare Group. Tech stack powered by Firebase, GCP, Agora for real-time features.</p>
                    <div class="grid md:grid-cols-2 gap-6">
                        <div class="bg-primary/10 p-6 rounded-xl">
                            <i class="fas fa-mobile-alt text-3xl text-primary mb-4"></i>
                            <h4 class="font-semibold mb-2">Flutter Expert</h4>
                            <p>4+ years cross-platform mobile mastery</p>
                        </div>
                        <div class="bg-secondary/10 p-6 rounded-xl">
                            <i class="fas fa-server text-3xl text-secondary mb-4"></i>
                            <h4 class="font-semibold mb-2">Backend Pro</h4>
                            <p>Laravel & CodeIgniter specialist</p>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div class="bg-gradient-to-br from-primary to-secondary text-white p-6 rounded-2xl text-center shadow-xl">
                        <div class="text-3xl font-bold">50+</div>
                        <div>Projects Delivered</div>
                    </div>
                    <div class="bg-gradient-to-br from-gray-500 to-gray-600 text-white p-6 rounded-2xl text-center shadow-xl">
                        <div class="text-3xl font-bold">6+</div>
                        <div>Years Experience</div>
                    </div>
                    <div class="bg-gradient-to-br from-green-500 to-green-600 text-white p-6 rounded-2xl text-center shadow-xl">
                        <div class="text-3xl font-bold">100%</div>
                        <div>Client Satisfaction</div>
                    </div>
                    <div class="bg-gradient-to-br from-purple-500 to-purple-600 text-white p-6 rounded-2xl text-center shadow-xl">
                        <div class="text-3xl font-bold">4+</div>
                        <div>Flutter Years</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="py-32 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-20">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4">Skills & Technologies</h2>
                <p class="text-xl text-gray-500">Core expertise that powers my projects</p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <div>
                    <h3 class="text-2xl font-bold mb-8 text-center">Frontend & Mobile</h3>
                    <div class="space-y-4">
                        <div>
                            <div class="flex justify-between mb-2">
                                <span>Flutter</span>
                                <span class="font-semibold">95%</span>
                            </div>
                            <div class="bg-gray-200 h-3 rounded-full">
                                <div class="bg-gradient-to-r from-primary to-secondary h-3 rounded-full skill-bar" style="width: 0%; animation-delay: 0.1s;" data-width="95%"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between mb-2">
                                <span>React</span>
                                <span class="font-semibold">90%</span>
                            </div>
                            <div class="bg-gray-200 h-3 rounded-full">
                                <div class="bg-gradient-to-r from-emerald-400 to-green-500 h-3 rounded-full skill-bar" style="width: 0%;" data-width="90%"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <h3 class="text-2xl font-bold mb-8 text-center">Backend</h3>
                    <div class="space-y-4">
                        <div>
                            <div class="flex justify-between mb-2">
                                <span>Laravel</span>
                                <span class="font-semibold">95%</span>
                            </div>
                            <div class="bg-gray-200 h-3 rounded-full">
                                <div class="bg-gradient-to-r from-red-400 to-pink-500 h-3 rounded-full skill-bar" style="width: 0%;" data-width="95%"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between mb-2">
                                <span>CodeIgniter</span>
                                <span class="font-semibold">85%</span>
                            </div>
                            <div class="bg-gray-200 h-3 rounded-full">
                                <div class="bg-gradient-to-r from-yellow-400 to-orange-500 h-3 rounded-full skill-bar" style="width: 0%;" data-width="85%"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <h3 class="text-2xl font-bold mb-8 text-center">Tools & Cloud</h3>
                    <div class="grid grid-cols-2 gap-4">
                        <span class="bg-white p-4 rounded-xl shadow-md text-center"><i class="fab fa-firebase text-2xl text-orange-400 mb-2 block"></i>Firebase</span>
                        <span class="bg-white p-4 rounded-xl shadow-md text-center"><i class="fab fa-google-cloud text-2xl text-blue-500 mb-2 block"></i>GCP</span>
                        <span class="bg-white p-4 rounded-xl shadow-md text-center"><i class="fas fa-video text-2xl text-purple-500 mb-2 block"></i>Agora</span>
                        <span class="bg-white p-4 rounded-xl shadow-md text-center"><i class="fas fa-database text-2xl text-gray-700 mb-2 block"></i>Java/C#</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Experience Section -->
    <section id="experience" class="py-32 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-20">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4">Work Experience</h2>
            </div>
            <div class="grid md:grid-cols-2 gap-8">
                <div class="relative">
                    <div class="bg-gradient-to-r from-primary to-secondary text-white p-8 rounded-2xl shadow-2xl">
                        <h3 class="text-2xl font-bold mb-4">Software Engineer / Programmer</h3>
                        <p class="text-lg mb-2">Export Development Board (Current)</p>
                        <p class="mb-4">Web dev with Laravel, CodeIgniter, Flutter, React, Java, C#.</p>
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-white/20">Colombo, LK</span>
                    </div>
                </div>
                <div class="relative">
                    <div class="bg-gradient-to-r from-emerald-400 to-green-500 text-white p-8 rounded-2xl shadow-2xl">
                        <h3 class="text-2xl font-bold mb-4">Software Engineer (Flutter & Laravel)</h3>
                        <p class="text-lg mb-2">Prodigit Pvt Limited, India</p>
                        <p class="mb-4">2 years building mobile/web solutions.</p>
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-white/20">2023 - Present</span>
                    </div>
                </div>
                <div class="md:col-span-2">
                    <div class="bg-gradient-to-r from-gray-400 to-gray-500 text-white p-8 rounded-2xl shadow-2xl">
                        <h3 class="text-2xl font-bold mb-4">Associate Software Engineer</h3>
                        <p class="text-lg mb-2">Imedirep, VisionCare Group</p>
                        <p>Early career full-stack development role.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="py-32 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-20">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4">Featured Projects</h2>
                <p class="text-xl text-gray-500">Handpicked work showcasing Flutter, Laravel & full-stack skills</p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="group bg-white rounded-2xl shadow-xl overflow-hidden hover:shadow-2xl transition-all duration-500">
                    <div class="h-48 bg-gradient-to-br from-primary to-secondary group-hover:scale-110 transition-transform duration-500"></div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold mb-4">Mobile E-Commerce App</h3>
                        <p class="mb-6 text-gray-600">Flutter app with Firebase backend, real-time payments. Laravel API.</p>
                        <div class="flex space-x-4 text-sm text-gray-500">
                            <span>Flutter</span>
                            <span>Laravel</span>
                            <span>Firebase</span>
                        </div>
                    </div>
                </div>
                <div class="group bg-white rounded-2xl shadow-xl overflow-hidden hover:shadow-2xl transition-all duration-500">
                    <div class="h-48 bg-gradient-to-br from-red-400 to-pink-500 group-hover:scale-110 transition-transform duration-500"></div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold mb-4">Export Dashboard</h3>
                        <p class="mb-6 text-gray-600">React + Laravel admin panel for Export Development Board. GCP hosted.</p>
                        <div class="flex space-x-4 text-sm text-gray-500">
                            <span>React</span>
                            <span>Laravel</span>
                            <span>GCP</span>
                        </div>
                    </div>
                </div>
                <div class="group bg-white rounded-2xl shadow-xl overflow-hidden hover:shadow-2xl transition-all duration-500">
                    <div class="h-48 bg-gradient-to-br from-purple-500 to-indigo-600 group-hover:scale-110 transition-transform duration-500"></div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold mb-4">Video Call Platform</h3>
                        <p class="mb-6 text-gray-600">Real-time video with Agora SDK, CodeIgniter backend.</p>
                        <div class="flex space-x-4 text-sm text-gray-500">
                            <span>Agora</span>
                            <span>CodeIgniter</span>
                            <span>Flutter</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-32 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-20">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4">Get In Touch</h2>
                <p class="text-xl text-gray-500 mb-12">Ready to build something amazing? Let's discuss your project.</p>
            </div>
            <form class="grid md:grid-cols-2 gap-6 max-w-2xl mx-auto">
                <input type="text" placeholder="Your Name" class="p-4 border border-gray-300 rounded-xl focus:ring-4 focus:ring-primary/20 focus:border-primary">
                <input type="email" placeholder="your@email.com" class="p-4 border border-gray-300 rounded-xl focus:ring-4 focus:ring-primary/20 focus:border-primary">
                <input type="text" placeholder="Subject" class="md:col-span-2 p-4 border border-gray-300 rounded-xl focus:ring-4 focus:ring-primary/20 focus:border-primary">
                <textarea rows="5" placeholder="Your Message" class="md:col-span-2 p-4 border border-gray-300 rounded-xl focus:ring-4 focus:ring-primary/20 focus:border-primary"></textarea>
                <button type="submit" class="md:col-span-2 bg-gradient-to-r from-primary to-secondary text-white py-4 px-8 rounded-xl font-bold text-lg hover:shadow-xl transition-all duration-300">Send Message</button>
            </form>
            <div class="mt-20 flex justify-center space-x-8 text-2xl">
                <a href="#" class="text-primary hover:text-secondary transition"><i class="fab fa-linkedin"></i></a>
                <a href="#" class="text-primary hover:text-secondary transition"><i class="fab fa-github"></i></a>
                <a href="#" class="text-primary hover:text-secondary transition"><i class="fab fa-twitter"></i></a>
                <a href="mailto:nishan@example.com" class="text-primary hover:text-secondary transition"><i class="fas fa-envelope"></i></a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <p>&copy; 2026 Nishan Bandara. Built with Laravel & Tailwind. Colombo, Sri Lanka.</p>
        </div>
    </footer>

    <script>
        // Smooth scrolling
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({ behavior: 'smooth' });
            });
        });

        // Animate skill bars on scroll
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const bars = entry.target.querySelectorAll('.skill-bar');
                    bars.forEach(bar => {
                        bar.style.width = bar.dataset.width;
                    });
                }
            });
        });
        document.querySelector('#skills').observer = observer.observe(document.querySelector('#skills'));
    </script>

</body>
</html>
