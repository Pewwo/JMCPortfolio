<?php
// Project Data Centralization & Dynamic Image Loading
$base_dir = __DIR__ . '/../';
$projects = [
    'savannah' => [
        'title' => 'Savannah',
        'category' => 'Residential',
        'subtitle' => '5 Bedroom 2-Storey Residence',
        'desc' => 'A contemporary home that blends sleek, minimalist design with functional elements, offering a harmonious and stylish living space that prioritizes both aesthetics and practicality. This modern  house emphasizes clean lines, open spaces, and high-quality materials to create a sophisticated, comfortable living environment that meets the needs of its inhabitants while embracing contemporary elegance.',
        'path' => 'assets/Savannah',
        'offset' => ''
    ],
    'solace' => [
        'title' => 'Solace',
        'category' => 'Residential',
        'subtitle' => '3 Bedroom Bungalow Residence',
        'desc' => 'SOLACE RESIDENCE is a modern bungalow that epitomizes contemporary elegance through clean lines, open spaces, and an integration with nature. The design  emphasizes a seamless flow between indoor and outdoor areas, prioritize natural light and high-quality materials, and offer a serene, functional living environment.',
        'path' => 'assets/Solace',
        'offset' => ''
    ],
    'dekada' => [
        'title' => 'Dekada Cafe',
        'category' => 'Hospitality',
        'subtitle' => 'Heritage Style Cafe',
        'desc' => 'DEKADA CAFE is a  coffee shop that combines the warmth and charm of traditional Filipino architecture with Spanish colonial and contemporary design elements, offering a cozy and inviting atmosphere that celebrates the rich cultural heritage of the Philippines.',
        'path' => 'assets/Dekada cafe',
        'offset' => ''
    ],
    'verticity' => [
        'title' => 'Verticity',
        'category' => 'Urban Planning',
        'subtitle' => 'Vertical Biophilic Community',
        'desc' => 'Biophilic architecture is an approach to building design that seeks to connect occupants more closely to nature. it integrates natural elements and processes into the built environment to create spaces that enhance human health, well being, and productivity.',
        'path' => 'assets/Verticity',
        'offset' => ''
    ],
    'magalang' => [
        'title' => 'Magalang Center',
        'category' => 'Healthcare',
        'subtitle' => 'Secondary Cardiology Hospital',
        'desc' => 'The site is along the Magalang Concepcion road. It is 350 meters or 4 minutes walk near the Sacred Garden Memorial Park and it is 1km away or 12 minutes walk to San Miguel Barangay Hall and St. John Paul II Medical Center Corporation. . The location may be reached through two important municipal roads: Magalang-Concepcion Road and Magalang-Mabalacat Road Road thus, it is accessible if you are from Tarlac, Mabalacat, Manila and Pampanga.',
        'path' => 'assets/Magalang ctr',
        'offset' => ''
    ],
    'mexico' => [
        'title' => 'Mexico Vital',
        'category' => 'Healthcare',
        'subtitle' => 'Biophilic Tertiary Hospital',
        'desc' => 'Pulmonary circulation is a part of the circulatory system that transports deoxygenated blood from the heart to the lungs and back, where it is oxygenated and then delivered to the heart for transmission all over the human body. As a Design Concept, The pulmonary circulation could be used to design structures that encourage natural ventilation, and air flow, both of which are vital for keeping good indoor air quality and preventing the transmission of airborne infections For instance, a structure created with pulmonary circulation in mind can include features like atria or courtyards that serve as the structure\'s "lungs," bringing in outside air and dispersing it inside. Mechanical ventilation and air filtration devices could be added to this natural ventilation system to further enhance indoor air quality and lower the risk of contracting airborne diseases.',
        'path' => 'assets/Mexico vital care',
        'offset' => ''
    ],
    'paraiso' => [
        'title' => 'Paraiso',
        'category' => 'Residential',
        'subtitle' => 'Luxury Tropical Escape',
        'desc' => 'The overall design was inspired by the tortoise of Tortugas in Bataan. It concludes the difference in the design, which is that tortoises have more rounded and domed shells, whereas turtles have thinner, more water-dynamic shells. Turtle shells are more streamlined to aid in swimming. One major key difference is that tortoises spend most of their time on land, while turtles are adapted for life spent in water.',
        'path' => 'assets/Paraiso',
        'offset' => ''
    ]
];
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Joshua Mae Cantos | Architectural Designer</title>

    <!-- Sophisticated Fonts via Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- Using Inter for rigid minimal tech, Playfair Display for organic elegant architecture -->
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;500&family=Playfair+Display:ital,wght@0,400;0,500;0,600;1,400;1,500&display=swap"
        rel="stylesheet">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#1F3D2B', // Dark Green
                        hover: '#6E8F7A',   // Soft Sage Hover
                        bg: '#F6F8F5',      // Warm Cream Base
                        surface: '#FFFFFF', // Pure White
                        card: '#DDE5D8',    // Light Sage Card/Box
                        textdark: '#1A1A1A',
                        textlight: '#6B7280'
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        serif: ['Playfair Display', 'serif'],
                    }
                }
            }
        }
    </script>

    <!-- AOS Animation CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Phosphor Icons -->
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
</head>

<body
    class="bg-bg text-textdark font-sans antialiased overflow-x-hidden selection:bg-hover selection:text-white [&::-webkit-scrollbar]:hidden [-ms-overflow-style:none] [scrollbar-width:none]">

    <!-- Thin, Elegant Dark Navbar -->
    <nav id="navbar"
        class="fixed w-full z-50 py-5 px-8 md:px-16 flex justify-between items-center bg-primary text-white shadow-sm transition-all duration-500">
        <a href="#" class="text-xl font-serif font-normal tracking-[0.2em] relative">JMC</a>

        <!-- Desktop Menu -->
        <div class="hidden md:flex gap-12 items-center text-[10px] font-medium tracking-[0.2em] uppercase">
            <a href="#about" class="hover:text-hover hover:-translate-y-0.5 transition-all duration-300">About</a>
            <a href="#skills" class="hover:text-hover hover:-translate-y-0.5 transition-all duration-300">Skills</a>
            <a href="#portfolio"
                class="hover:text-hover hover:-translate-y-0.5 transition-all duration-300">Projects</a>
            <a href="#contact" class="hover:text-hover hover:-translate-y-0.5 transition-all duration-300">Contact</a>
        </div>

        <!-- Mobile Menu Button -->
        <button id="mobile-menu-btn"
            class="md:hidden text-white z-50 relative focus:outline-none hover:text-hover transition-colors">
            <i class="ph ph-list text-2xl"></i>
        </button>

        <!-- Mobile Menu Overlay -->
        <div id="mobile-menu"
            class="fixed inset-0 bg-primary/95 backdrop-blur-md flex-col justify-center items-center gap-10 hidden z-40 opacity-0 transition-opacity duration-300">
            <a href="#about"
                class="text-white hover:text-hover transition-colors font-serif italic text-3xl mobile-link">About</a>
            <a href="#skills"
                class="text-white hover:text-hover transition-colors font-serif italic text-3xl mobile-link">Skills</a>
            <a href="#portfolio"
                class="text-white hover:text-hover transition-colors font-serif italic text-3xl mobile-link">Projects</a>
            <a href="#contact"
                class="text-white hover:text-hover transition-colors font-serif italic text-3xl mobile-link">Contact</a>
        </div>
    </nav>

    <!-- High-End Editorial Hero Section -->
    <header id="home" class="min-h-screen pt-32 lg:pt-0 flex items-center relative overflow-hidden">
        <!-- Floating Decorative Element -->
        <div class="absolute top-1/4 -right-24 w-1/3 aspect-square bg-primary/5 rounded-full blur-[120px] -z-10"></div>

        <div class="px-8 md:px-16 lg:px-24 max-w-[1900px] mx-auto w-full">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 lg:gap-8 items-center">
                <!-- Vertical Title Track -->
                <div class="hidden lg:flex lg:col-span-1 flex-col items-center justify-center gap-12"
                    data-aos="fade-down" data-aos-duration="1500">
                    <div class="w-[1px] h-32 bg-primary/10"></div>
                </div>

                <!-- Main Content -->
                <div class="lg:col-span-5 relative z-10">
                    <div class="mb-12" data-aos="fade-up" data-aos-duration="1200">
                        <span
                            class="bg-primary text-white text-[9px] font-bold tracking-[0.4em] uppercase px-20 py-2 inline-block mb-10">
                        </span>
                        <h1
                            class="text-7xl md:text-8xl lg:text-[9rem] font-serif text-primary leading-[0.85] tracking-tighter mb-12">
                            Joshua <br>Mae <span class="italic font-light text-hover">Cantos.</span>
                        </h1>
                        <p
                            class="text-textlight font-light text-lg lg:text-xl leading-relaxed max-w-md mb-12 opacity-80">
                            Engineering spaces where <span class="italic text-primary font-normal">sustainability</span>
                            meets modern human <span class="italic text-primary font-normal">aesthetics.</span>
                        </p>
                    </div>

                    <div class="flex items-center gap-10" data-aos="fade-up" data-aos-delay="200">
                        <a href="#portfolio"
                            class="group bg-primary text-white px-10 py-5 text-[10px] font-bold uppercase tracking-[0.2em] hover:bg-hover transition-all duration-500 shadow-xl shadow-primary/10 flex items-center gap-6">
                            View Showcase
                            <i
                                class="ph ph-arrow-right text-lg group-hover:translate-x-2 transition-transform duration-500"></i>
                        </a>
                        <a href="#about"
                            class="text-[10px] font-bold uppercase tracking-[0.2em] text-primary group flex items-center gap-4">
                            Learn More
                            <i
                                class="ph ph-arrow-up-right text-lg group-hover:translate-x-1 group-hover:-translate-y-1 transition-all duration-500"></i>
                        </a>
                    </div>
                </div>

                <!-- Hero Imagery -->
                <div class="lg:col-span-6 relative" data-aos="zoom-out-left" data-aos-duration="2000">
                    <div
                        class="relative aspect-[4/5] lg:aspect-[1.1] w-full bg-white p-4 shadow-2xl relative group overflow-hidden">
                        <div
                            class="absolute inset-0 bg-primary/20 opacity-0 group-hover:opacity-100 transition-opacity duration-1000 z-10 pointer-events-none mix-blend-overlay">
                        </div>
                        <img src="assets/images/hero_architecture_1775146297379.png"
                            class="w-full h-full grayscale transition-all duration-[3s] group-hover:grayscale-0 group-hover:scale-105"
                            alt="Featured Architecture">
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Redesigned About Section (Studio Aesthetic) -->
    <section id="about" class="py-40 bg-surface relative overflow-hidden">
        <div class="px-8 md:px-16 lg:px-24 max-w-[1800px] mx-auto">
            <div class="flex flex-col lg:flex-row gap-20 lg:gap-32">
                <!-- Image Side -->
                <div class="lg:w-5/12 relative group" data-aos="fade-right">
                    <div class="aspect-[4/5] relative z-10 overflow-hidden shadow-2xl">
                        <img src="assets/images/architect_profile_1775146314840.png"
                            class="w-full h-full object-cover grayscale transition-all duration-[3s] group-hover:grayscale-0 group-hover:scale-105"
                            alt="JMC Architect">
                    </div>
                    <!-- Decorative back frame -->
                    <div
                        class="absolute -top-10 -left-10 w-full h-full border border-primary/10 -z-10 transition-transform duration-1000 group-hover:translate-x-4 group-hover:translate-y-4">
                    </div>
                    <div class="absolute bottom-12 -right-12 z-20 bg-primary px-8 py-8 md:px-12 text-white max-w-[320px] shadow-2xl"
                        data-aos="fade-up" data-aos-delay="400">
                        <i class="ph ph-quotes text-4xl text-hover opacity-40 mb-6 block"></i>
                        <p class="font-serif italic text-lg leading-relaxed text-surface/90">"Good design is obvious.
                            Great design is transparent."</p>
                    </div>
                </div>

                <!-- Text Side -->
                <div class="lg:w-7/12 pt-10" data-aos="fade-up">
                    <div
                        class="inline-flex items-center gap-5 text-hover text-[10px] font-bold tracking-[0.4em] uppercase mb-12">
                        <span class="w-12 h-[1px] bg-hover"></span> Studio Profile
                    </div>

                    <h3 class="text-5xl md:text-7xl font-serif text-primary leading-[1.1] mb-16">
                        Merging <span class="italic font-light">Natural Elements</span> with Sharp Modern <span
                            class="text-hover">Complexity.</span>
                    </h3>

                    <div
                        class="grid grid-cols-1 md:grid-cols-2 gap-12 text-textlight font-light leading-relaxed text-base lg:text-lg">
                        <p>
                            I am an architectural designer passionate about creating spaces that are both functional and
                            visually compelling. My approach combines modern design principles, sustainability, and
                            user-centered planning to deliver environments that enhance everyday living.
                        </p>
                        <p>
                            I focus on integrating biophilic concepts to craft innovative layouts, aiming to design
                            structures that not only meet practical needs but also improve well-being, comfort, and
                            connection to nature.
                        </p>
                    </div>

                    <!-- Stats / Mini List -->
                    <div class="mt-20 grid grid-cols-2 lg:grid-cols-4 gap-8 pt-12 border-t border-gray-100">
                        <div>
                            <span class="block text-3xl font-serif text-primary mb-1">7</span>
                            <span class="text-[9px] uppercase tracking-widest text-textlight">Projects</span>
                        </div>
                        <div>
                            <span class="block text-3xl font-serif text-primary mb-1">Sustainable</span>
                            <span class="text-[9px] uppercase tracking-widest text-textlight">Primary Focus</span>
                        </div>
                        <div>
                            <span class="block text-3xl font-serif text-primary mb-1">Premium</span>
                            <span class="text-[9px] uppercase tracking-widest text-textlight">Build Quality</span>
                        </div>
                        <div>
                            <span class="block text-3xl font-serif text-primary mb-1">Global</span>
                            <span class="text-[9px] uppercase tracking-widest text-textlight">Design Standards</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Disciplines & Expertise (Modern List View) -->
    <section id="skills" class="py-32 bg-bg px-8 md:px-16 lg:px-24">
        <div class="max-w-[1800px] mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 items-start">
                <div class="lg:col-span-5" data-aos="fade-right">
                    <span class="text-hover text-[10px] font-bold tracking-[0.4em] uppercase mb-8 block">Skills &
                        Disciplines</span>
                    <h3 class="text-5xl lg:text-7xl font-serif text-primary mb-12">Building the <br><span
                            class="italic font-light">Future.</span></h3>
                    <p class="text-textlight text-lg font-light leading-relaxed max-w-sm mb-16">
                        A comprehensive toolkit of architectural masteries centered on user-centric planning and
                        biophilic integration.
                    </p>

                    <div class="bg-primary p-12 text-surface shadow-2xl relative overflow-hidden group">
                        <div
                            class="absolute -right-20 -bottom-20 w-64 h-64 bg-white/5 rounded-full group-hover:scale-150 transition-transform duration-1000">
                        </div>
                        <h4 class="text-[10px] font-bold tracking-[0.4em] uppercase text-hover mb-6 relative z-10">
                            Creative Flow</h4>
                        <p class="text-xl font-serif italic font-light relative z-10 leading-relaxed">"Every line drawn
                            is a commitment to the user's daily experience."</p>
                    </div>
                </div>

                <div class="lg:col-span-7 pt-12 space-y-0 border-t border-primary/10">
                    <div class="group py-12 flex items-center justify-between border-b border-primary/10 hover:px-6 transition-all duration-500 cursor-default"
                        data-aos="fade-up">
                        <div class="flex items-center gap-12">
                            <span
                                class="text-[10px] font-bold text-hover/30 tracking-widest font-serif italic">01.</span>
                            <h4
                                class="text-2xl md:text-4xl font-serif text-primary group-hover:text-hover transition-colors">
                                Architectural Design</h4>
                        </div>
                    </div>
                    <div class="group py-12 flex items-center justify-between border-b border-primary/10 hover:px-6 transition-all duration-500 cursor-default"
                        data-aos="fade-up" data-aos-delay="100">
                        <div class="flex items-center gap-12">
                            <span
                                class="text-[10px] font-bold text-hover/30 tracking-widest font-serif italic">02.</span>
                            <h4
                                class="text-2xl md:text-4xl font-serif text-primary group-hover:text-hover transition-colors">
                                Biophilic Planning</h4>
                        </div>
                    </div>
                    <div class="group py-12 flex items-center justify-between border-b border-primary/10 hover:px-6 transition-all duration-500 cursor-default"
                        data-aos="fade-up" data-aos-delay="200">
                        <div class="flex items-center gap-12">
                            <span
                                class="text-[10px] font-bold text-hover/30 tracking-widest font-serif italic">03.</span>
                            <h4
                                class="text-2xl md:text-4xl font-serif text-primary group-hover:text-hover transition-colors">
                                3D Visualization</h4>
                        </div>
                    </div>
                    <div class="group py-12 flex items-center justify-between border-b border-primary/10 hover:px-6 transition-all duration-500 cursor-default"
                        data-aos="fade-up" data-aos-delay="300">
                        <div class="flex items-center gap-12">
                            <span
                                class="text-[10px] font-bold text-hover/30 tracking-widest font-serif italic">04.</span>
                            <h4
                                class="text-2xl md:text-4xl font-serif text-primary group-hover:text-hover transition-colors">
                                Sustainable Solutions</h4>
                        </div>
                    </div>
                    <div class="group py-12 flex items-center justify-between border-b border-primary/10 hover:px-6 transition-all duration-500 cursor-default"
                        data-aos="fade-up" data-aos-delay="400">
                        <div class="flex items-center gap-12">
                            <span
                                class="text-[10px] font-bold text-hover/30 tracking-widest font-serif italic">05.</span>
                            <h4
                                class="text-2xl md:text-4xl font-serif text-primary group-hover:text-hover transition-colors">
                                Concept Development</h4>
                        </div>
                    </div>
    </section>

    <!-- Bento Style Editorial Project Grid -->
    <section id="portfolio" class="py-32 px-8 md:px-16 lg:px-24 bg-bg">
        <div class="max-w-[1600px] mx-auto">
            <h2 class="text-hover text-[10px] font-semibold tracking-[0.3em] uppercase mb-6 flex items-center gap-4"
                data-aos="fade-right">
                <span class="w-8 h-[1px] bg-hover"></span> Selected Works
            </h2>
            <h3 class="text-5xl lg:text-7xl font-serif text-primary mb-24 lg:mb-32" data-aos="fade-up"
                data-aos-duration="1000">Featured <span class="italic font-light">Projects.</span></h3>
            <div class="flex flex-wrap justify-center gap-x-12 lg:gap-x-20 gap-y-16 lg:gap-y-24 items-start pb-40">

                <?php foreach ($projects as $id => $p):
                    $raw_images = glob($base_dir . $p['path'] . "/*.{png,jpg,jpeg,webp}", GLOB_BRACE);
                    ?>
                    <!-- Project: <?= $p['title'] ?> -->
                    <div class="w-full md:w-[200px] lg:w-[320px] group cursor-pointer flex flex-col items-center transition-all duration-700 hover:-translate-y-4 <?= $p['offset'] ?>"
                        data-aos="fade-up" data-aos-duration="1200" onclick="openModal('modal-<?= $id ?>')">
                        <div
                            class="overflow-hidden aspect-square w-full rounded-[3rem] bg-surface mb-10 shadow-[0_30px_60px_-15px_rgba(0,0,0,0.08)] hover:shadow-[0_50px_100px_-20px_rgba(0,0,0,0.15)] transition-all duration-700 relative project-carousel border border-primary/5">
                            <div class="carousel-inner h-full w-full relative">
                                <?php foreach ($raw_images as $index => $img_path): 
                                    $web_img = str_replace($base_dir, '', $img_path);
                                    ?>
                                    <img src="<?= $web_img ?>"
                                        class="absolute inset-0 w-full h-full object-cover transition-all duration-[2s] group-hover:scale-110 <?= $index === 0 ? 'opacity-100 z-10' : 'opacity-0' ?>"
                                        alt="<?= $p['title'] ?>">
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <div class="text-center">
                            <span
                                class="text-hover text-[9px] font-bold tracking-[0.3em] uppercase mb-4 block transition-colors duration-500"><?= $p['category'] ?></span>
                            <h4
                                class="text-2xl font-serif text-primary tracking-tight transition-colors duration-500 group-hover:text-hover">
                                <?= $p['title'] ?>
                            </h4>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Redesigned Contact Section (Split Editorial) -->
    <section id="contact" class="py-40 bg-surface relative overflow-hidden">
        <!-- Floating Brand Text -->
        <div
            class="absolute -bottom-20 -left-20 text-[20rem] font-serif text-primary/5 italic pointer-events-none -z-0">
            J.M.C</div>

        <div class="px-8 md:px-16 lg:px-24 max-w-[1900px] mx-auto relative z-10">
            <div class="flex flex-col lg:flex-row gap-20 lg:gap-0 items-stretch">
                <!-- Text Column -->
                <div class="lg:w-[55%] flex flex-col justify-center" data-aos="fade-right">
                    <span
                        class="text-hover text-[10px] font-bold tracking-[0.4em] uppercase mb-10 flex items-center gap-5">
                        <span class="w-12 h-[1px] bg-hover"></span> Collab / Inquiries
                    </span>
                    <h3 class="text-6xl lg:text-[7rem] font-serif text-primary leading-[0.9] mb-16 tracking-tighter">
                        Let's start the <br><span class="italic font-light">Conversation.</span>
                    </h3>

                    <div class="space-y-12">
                        <div class="flex items-start gap-8">
                            <div
                                class="w-16 h-16 rounded-full bg-primary/5 flex items-center justify-center text-primary">
                                <i class="ph ph-envelope-simple text-3xl"></i>
                            </div>
                            <div>
                                <h5 class="text-[10px] font-bold tracking-widest uppercase text-textlight mb-2">Direct
                                    Mail</h5>
                                <a href="mailto:joshuamaecantos01@gmail.com"
                                    class="text-2xl font-serif italic text-primary hover:text-hover transition-colors">joshuamaecantos01@gmail.com</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Form Column -->
                <div class="lg:w-[45%] bg-bg p-10 md:p-16 lg:p-24 shadow-2xl relative" data-aos="fade-left">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-primary/5 -z-10 blur-3xl"></div>
                    <form id="contactForm" class="space-y-16" action="https://api.web3forms.com/submit" method="POST">
                        <!-- Web3Forms Config -->
                        <input type="hidden" name="access_key" value="YOUR_ACCESS_KEY_HERE">
                        <input type="hidden" name="subject" value="New Inquiry from Portfolio">
                        <input type="hidden" name="from_name" value="Architect Portfolio">

                        <div class="space-y-2">
                            <label class="text-[10px] font-bold tracking-[0.2em] uppercase text-textlight block">Full
                                Name</label>
                            <input type="text" id="name" name="name" required
                                class="w-full bg-transparent border-b border-primary/10 py-5 text-2xl font-serif italic text-primary focus:outline-none focus:border-primary transition-all placeholder:text-primary/10"
                                placeholder="e.g. Marcus Aurelius">
                        </div>
                        <div class="space-y-2">
                            <label class="text-[10px] font-bold tracking-[0.2em] uppercase text-textlight block">Email
                                Address</label>
                            <input type="email" id="email" name="email" required
                                class="w-full bg-transparent border-b border-primary/10 py-5 text-2xl font-serif italic text-primary focus:outline-none focus:border-primary transition-all placeholder:text-primary/10"
                                placeholder="e.g. marcus@architecture.com">
                        </div>
                        <div class="space-y-2">
                            <label
                                class="text-[10px] font-bold tracking-[0.2em] uppercase text-textlight block">Message</label>
                            <textarea id="message" name="message" rows="3" required
                                class="w-full bg-transparent border-b border-primary/10 py-5 text-2xl font-serif italic text-primary focus:outline-none focus:border-primary transition-all placeholder:text-primary/10 resize-none"
                                placeholder="Briefly describe your vision..."></textarea>
                        </div>

                        <button type="submit"
                            class="group w-full py-8 text-white bg-primary hover:bg-hover transition-all duration-500 relative overflow-hidden shadow-2xl shadow-primary/20 flex items-center justify-center gap-6">
                            <span class="text-[10px] font-bold tracking-[0.4em] uppercase relative z-10">Send
                                Inquire</span>
                            <i
                                class="ph ph-arrow-right text-xl relative z-10 group-hover:translate-x-3 transition-transform duration-500"></i>
                            <div
                                class="absolute inset-0 bg-white/5 -translate-x-full group-hover:translate-x-0 transition-transform duration-700">
                            </div>
                        </button>
                        <div id="formFeedback" class="hidden text-center text-xs font-serif italic text-hover mt-6">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Super Minimal Footer -->
    <footer class="py-4 text-center text-white bg-primary border-t border-white/5">
        <div class="px-8 max-w-[1900px] mx-auto flex flex-col items-center gap-4">
            <p class="text-[8px] font-medium uppercase tracking-[0.3em] text-white/30 italic">© 2026 Architectural
                Portfolio. All rights reserved.</p>
        </div>
    </footer>

    <!-- Dynamic Project Modals Loop -->
    <?php foreach ($projects as $id => $p):
        $raw_images = glob($base_dir . $p['path'] . "/*.{png,jpg,jpeg,webp}", GLOB_BRACE);
        $img_count = count($raw_images);
        ?>
        <div id="modal-<?= $id ?>"
            class="fixed inset-0 z-[100] hidden items-center justify-center p-4 md:p-12 lg:p-20 bg-textdark/60 backdrop-blur-md opacity-0 transition-all duration-700">
            <div class="w-full max-w-7xl max-h-full bg-surface shadow-2xl relative flex flex-col lg:flex-row overflow-hidden rounded-[3rem]"
                data-aos="zoom-in" data-aos-duration="800">

                <div class="w-full lg:w-[60%] min-h-[50vh] lg:h-auto relative bg-textdark/5 overflow-hidden modal-carousel group/modal-car"
                    data-project="<?= $id ?>">
                    <div class="carousel-inner absolute inset-0 w-full h-full relative">
                        <?php if (empty($raw_images)): ?>
                            <div
                                class="h-full w-full flex items-center justify-center bg-gray-50 text-gray-400 font-serif italic text-sm">
                                Imagery coming soon...</div>
                        <?php else: ?>
                            <?php foreach ($raw_images as $index => $img_path): 
                                $web_img = str_replace($base_dir, '', $img_path);
                                ?>
                                <img src="<?= $web_img ?>"
                                    class="absolute inset-0 w-full h-full object-cover transition-opacity duration-1000 <?= $index === 0 ? 'opacity-100 z-10' : 'opacity-0 z-0' ?>"
                                    alt="<?= $p['title'] ?>">
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                    <?php if ($img_count > 1): ?>
                        <div
                            class="absolute inset-y-0 left-0 flex items-center px-8 z-30 opacity-40 group-hover/modal-car:opacity-100 transition-opacity duration-500">
                            <button
                                class="carousel-prev w-14 h-14 rounded-full bg-white/10 backdrop-blur-md text-white border border-white/20 flex items-center justify-center hover:bg-white hover:text-primary transition-all">
                                <i class="ph ph-arrow-left text-xl"></i>
                            </button>
                        </div>
                        <div
                            class="absolute inset-y-0 right-0 flex items-center px-8 z-30 opacity-40 group-hover/modal-car:opacity-100 transition-opacity duration-500">
                            <button
                                class="carousel-next w-14 h-14 rounded-full bg-white/10 backdrop-blur-md text-white border border-white/20 flex items-center justify-center hover:bg-white hover:text-primary transition-all">
                                <i class="ph ph-arrow-right text-xl"></i>
                            </button>
                        </div>
                        <div
                            class="absolute bottom-10 left-10 z-30 bg-primary/80 backdrop-blur-md px-5 py-2 text-[10px] text-white font-bold tracking-[0.4em] uppercase">
                            <span class="current-slide">1</span> &mdash; <span class="total-slides"><?= $img_count ?></span>
                        </div>
                    <?php endif; ?>
                </div>
                <div
                    class="w-full lg:w-[40%] p-10 md:p-20 lg:p-28 flex flex-col justify-between bg-surface relative overflow-y-auto">
                    <!-- Close button moved inside the content area for better alignment or keeping it absolute but separated -->
                    <button onclick="closeModal('modal-<?= $id ?>')"
                        class="absolute top-10 right-10 text-primary hover:text-hover transition-all z-[110] flex items-center gap-4 group">
                        <span
                            class="text-[8px] tracking-[0.5em] uppercase font-bold text-primary/30 group-hover:text-primary transition-colors">Close</span>
                        <div
                            class="w-10 h-10 rounded-full border border-primary/10 flex items-center justify-center group-hover:bg-primary group-hover:text-white transition-all duration-500">
                            <i class="ph ph-x text-sm"></i>
                        </div>
                    </button>

                    <div class="max-w-md pt-12 lg:pt-0">
                        <div class="mb-16">
                            <span
                                class="text-hover text-[9px] font-bold tracking-[0.6em] uppercase mb-10 block opacity-70"><?= $p['category'] ?>
                                &mdash; Details</span>
                            <h3 class="text-5xl md:text-6xl font-serif text-primary mb-6 leading-tight tracking-tighter">
                                <?= $p['title'] ?>
                            </h3>
                            <p class="text-textlight text-lg font-light italic leading-relaxed opacity-60">
                                <?= $p['subtitle'] ?>
                            </p>
                        </div>

                        <div class="space-y-12 text-[16px] text-textlight font-light leading-relaxed mb-20">
                            <div class="w-12 h-[1px] bg-primary/20 mb-10"></div>
                            <p><?= $p['desc'] ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>

    <!-- Lightbox & Scripts -->
    <div id="lightbox"
        class="fixed inset-0 z-[200] bg-textdark/95 backdrop-blur-md hidden items-center justify-center p-4 md:p-12 opacity-0 transition-opacity duration-300 cursor-zoom-out"
        onclick="closeLightbox()">
        <button class="absolute top-8 right-8 text-white/50 hover:text-white transition-colors"><i
                class="ph ph-x text-3xl"></i></button>
        <img id="lightbox-img" src="" class="max-w-full max-h-full object-contain shadow-2xl" alt="Lightbox Full View">
    </div>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="js/script.js"></script>
</body>

</html>