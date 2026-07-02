<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Basic Meta -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- Title -->
    <title>Swami Vivekananda Group of Institutes (SVIST) | Admissions Open 2026</title>

    <!-- SEO Meta -->
    <meta name="description"
        content="Join Swami Vivekananda Group of Institutes (SVIST), a leading AICTE-approved institution offering B.Tech, MBA, B.Sc, Diploma, BCA, and BBA programs with modern facilities, expert faculty, and placement assistance." />

    <meta name="keywords"
        content="SVIST, Swami Vivekananda Group of Institutes, B.Tech College, MBA College, BCA College, BBA College, Diploma Courses, B.Sc Courses, Engineering College Kolkata, AICTE Approved College, MAKAUT College, NAAC B++" />

    <meta name="author" content="Swami Vivekananda Group of Institutes" />
    <meta name="robots" content="index, follow" />
    <meta name="language" content="English" />

    <!-- Canonical URL -->
    <link rel="canonical" href="https://svist.org/" />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Swami Vivekananda Group of Institutes (SVIST) | Admissions Open 2026" />
    <meta property="og:description"
        content="Shape your future with quality education, industry-focused programs, experienced faculty, and excellent placement support at SVIST." />
    <meta property="og:url" content="https://svist.org/" />
    <meta property="og:site_name" content="SVIST" />
    <meta property="og:image" content="assets/images/og-image.jpg" />

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Swami Vivekananda Group of Institutes (SVIST)" />
    <meta name="twitter:description" content="Admissions Open for B.Tech, MBA, BCA, BBA, Diploma & B.Sc Programs." />
    <meta name="twitter:image" content="assets/images/og-image.jpg" />

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/images/logo/favicon.webp" />
    <link rel="apple-touch-icon" href="assets/images/logo/favicon.webp" />

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#8C4426',
                        primaryDark: '#6B2F17',
                        secondary: '#2E384C',
                        accent: '#F6DFB3',
                        accentLight: '#F8E8CE',
                        background: '#FCF8F3',
                        white: '#ffffff',
                    },
                    boxShadow: {
                        custom: '0 4px 6px -1px rgba(0,0,0,.08)',
                        customCard: '0 10px 30px rgba(0,0,0,.06)',
                    }
                }
            }
        }
    </script>

    <!-- Slick Slider -->
    <link rel="stylesheet" href="assets/libs/slick/slick.css" />
    <link rel="stylesheet" href="assets/libs/slick/slick-theme.css" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.9.0/fonts/remixicon.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>

<body>


    <!-- Top Bar -->
    <div class="bg-secondary text-white hidden lg:block">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <div class="flex items-center justify-between h-12">

                <!-- Contact -->
                <div class="flex items-center gap-6 text-sm">

                    <a href="tel:+918910367916" class="flex items-center gap-2 hover:text-accentLight transition">
                        <i class="ri-phone-fill text-accent"></i>
                        <span>+91 89103 67916</span>
                    </a>

                    <a href="mailto:admissions@svist.org"
                        class="flex items-center gap-2 hover:text-accentLight transition">
                        <i class="ri-mail-fill text-accent"></i>
                        <span>admissions@svist.org</span>
                    </a>

                </div>

                <!-- Accreditation -->
                <div class="flex items-center gap-4 text-sm">

                    <div class="flex items-center gap-2">
                        <i class="ri-award-fill text-accent"></i>
                        <span>AICTE Approved</span>
                    </div>

                    <span class="w-px h-4 bg-white/30"></span>

                    <div class="flex items-center gap-2">
                        <i class="ri-medal-fill text-accent"></i>
                        <span>NAAC B++</span>
                    </div>

                    <span class="w-px h-4 bg-white/30"></span>

                    <div class="flex items-center gap-2">
                        <i class="ri-graduation-cap-fill text-accent"></i>
                        <span>MAKAUT</span>
                    </div>

                    <a href="#enquiry"
                        class="ml-2 bg-primary hover:bg-primaryDark px-4 py-2 rounded-lg font-medium transition">
                        Apply Now
                    </a>

                </div>

            </div>
        </div>
    </div>

    <!-- Main Navbar -->
    <header class="sticky top-0 z-50 bg-white shadow-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">

            <div class="flex items-center justify-between py-2">

                <!-- Logo -->
                <a href="/" class="flex items-center gap-3">
                    <img src="assets/images/logo/right-half-logo.png" alt="SVIST Logo"
                        class="md:h-[70px] h-12 w-auto object-contain" width="346" height="70" fetchpriority="high"
                        decoding="async">
                </a>

                <!-- Desktop Menu -->
                <nav class="hidden lg:flex items-center gap-8">
                    <a href="#home" class="hover:text-primary transition">Home</a>
                    <a href="#about" class="hover:text-primary transition">About Us</a>
                    <a href="#facilities" class="hover:text-primary transition">Facilities</a>
                    <a href="#courses" class="hover:text-primary transition">Courses</a>
                    <a href="#faq" class="hover:text-primary transition">FAQ</a>
                </nav>

                <!-- CTA Buttons -->
                <div class="hidden lg:flex items-center gap-3">

                    <button onclick="openBookingModal()"
                        class="hidden md:flex items-center space-x-3 px-4 py-2 border border-primary/60 hover:border-primaryDark rounded-xl bg-white group transition-all duration-300 select-none cursor-pointer">
                        <!-- Orange Telephone Icon in elegant circle -->
                        <img src="assets/images/icons/phone.svg" class="h-6" alt="">
                        <!-- Numeric/Booking Details -->
                        <div class="flex flex-col text-left space-y-0.5">
                            <span
                                class="text-primary font-bold text-[15px] leading-tight tracking-wide group-hover:text-primaryDark transition-colors">1860
                                500 7788</span>
                            <span class="text-slate-600 font-medium text-[10px] leading-none">Admission
                                Assistance</span>
                        </div>
                    </button>

                </div>

                <!-- Mobile Menu Button -->
                <button id="mobile-menu-toggle" class="lg:hidden text-secondary text-3xl focus:outline-none">
                    <i class="ri-menu-3-line"></i>
                </button>

            </div>

        </div>
    </header>


    <main>
        <!-- Hero Section (LCP Optimized, Creative, SEO Friendly) -->
        <section id="home"
            class="relative bg-cover bg-center bg-no-repeat overflow-hidden bg-slate-100 pt-12 md:pt-20 lg:pt-16 pb-0 flex items-stretch">
            <!-- Decorative Light Accents -->
            <div
                class="absolute top-0 left-0 w-64 h-64 bg-accentLight/30 rounded-full blur-3xl pointer-events-none select-none">
            </div>
            <div
                class="absolute bottom-0 right-0 w-96 h-96 bg-accent/20 rounded-full blur-3xl pointer-events-none select-none">
            </div>

            <div class="max-w-7xl mx-auto px-4 sm:px-6 w-full relative z-10">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-8 items-stretch">

                    <!-- Left: Content Column -->
                    <div class="lg:col-span-5 text-left flex flex-col justify-center pb-12 md:pb-20 lg:pb-16">

                        <!-- H1 Title (SEO & Creative) -->
                        <h1 class="text-2xl sm:text-4xl lg:text-3xl font-bold text-secondary !leading-snug">
                            Apply for B.Tech Admission 2026 – 2027 at
                            <span class="text-primary">SVIST</span>
                        </h1>

                        <p class="mt-4 text-gray-600 max-w-xl ">
                            Choose from Computer Science, AI & Data Science, Electronics & Communication, Mechanical,
                            Civil, and other industry-focused B.Tech programs.
                        </p>
                        <p class="text-sm font-semibold mt-6">
                            AICTE Approved <span class="mx-1.5 text-primary">•</span> NAAC B++ Accredited <span
                                class="mx-1.5 text-primary">•</span> MAKAUT Affiliated
                        </p>

                        <!-- CTA Buttons -->
                        <div class="flex flex-col sm:flex-row sm:items-center gap-4 my-8 ">
                            <a href="#enquiry"
                                class="inline-block text-center bg-primary hover:bg-primaryDark text-white font-semibold px-8 py-3.5 text-sm rounded-xl shadow-lg hover:shadow-xl transition-all duration-200 open-modal-btn w-full sm:w-auto">
                                Start Your Application
                            </a>

                            <a href="#courses"
                                class="inline-block text-center bg-white hover:bg-gray-50 text-secondary border border-secondary/30 font-semibold px-8 py-3.5 text-sm rounded-xl shadow-sm hover:shadow transition-all duration-200 w-full sm:w-auto">
                                View Courses
                            </a>
                        </div>

                        <!-- Trust Badge and Google Reviews -->
                        <div class="flex flex-wrap items-center gap-6 border-t border-secondary/10 pt-6">
                            <!-- Student Stack -->
                            <div class="flex items-center gap-3">
                                <div class="flex -space-x-3">
                                    <img src="assets/images/banner/trust-1.png" alt="Student 1"
                                        class="w-10 h-10 rounded-full border-2 border-white object-cover shadow-sm"
                                        width="40" height="40" decoding="async">
                                    <img src="assets/images/banner/trust-2.png" alt="Student 2"
                                        class="w-10 h-10 rounded-full border-2 border-white object-cover shadow-sm"
                                        width="40" height="40" decoding="async">
                                    <img src="assets/images/banner/trust-3.png" alt="Student 3"
                                        class="w-10 h-10 rounded-full border-2 border-white object-cover shadow-sm"
                                        width="40" height="40" decoding="async">
                                </div>
                                <div class="flex flex-col">
                                    <span class="text-secondary font-bold text-xs sm:text-sm leading-tight">2,500+
                                        Students</span>
                                    <span class="text-gray-500 text-[11px] leading-tight mt-0.5">Enrolled
                                        Successfully</span>
                                </div>
                            </div>

                            <!-- Vertical Divider -->
                            <div class="hidden sm:block w-px h-8 bg-secondary/15"></div>

                            <!-- Google Rating -->
                            <div class="flex items-center gap-2">
                                <img src="assets/images/banner/google.svg" alt="Google reviews rating" class="w-6 h-6"
                                    width="24" height="24" decoding="async">
                                <div class="flex flex-col text-left">
                                    <div class="flex items-center text-amber-500 text-xs gap-0.5">
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                    </div>
                                    <span class="text-gray-500 text-[11px] font-bold mt-0.5">4.8/5 rating (200+
                                        reviews)</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right: LCP Optimized Image Column -->
                    <div
                        class="lg:col-span-7 hidden sm:flex justify-end lg:justify-end items-end relative mt-8 lg:mt-0 pb-0">
                        <!-- Creative Background Decorator -->
                        <div
                            class="absolute inset-0 bg-gradient-to-tr from-bg-slate-200 to-transparent rounded-3xl -rotate-3 scale-95 pointer-events-none select-none border border-accent/20">
                        </div>
                        <div
                            class="absolute -bottom-4 -left-4 w-24 h-24 bg-slate-200/30 rounded-full blur-2xl pointer-events-none">
                        </div>

                        <!-- Image with dimensions and LCP optimization -->
                        <img src="assets/images/banner/banner-img.webp"
                            alt="Swami Vivekananda Group of Institutes successful graduates"
                            class="w-full max-w-[320px] sm:max-w-[420px] lg:max-w-[710px] relative z-10 transition-transform duration-500 block -mb-px"
                            width="500" height="520" fetchpriority="high" decoding="async">
                    </div>

                </div>
            </div>
        </section>

        <!-- Why choose Section -->
        <section id="about" class="py-12 lg:py-16 overflow-hidden bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6">

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-12 items-center">

                    <!-- Left Column: Image & Quote -->
                    <div class="relative w-full z-10">

                        <!-- Main Image -->
                        <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?q=80&w=1200&auto=format&fit=crop"
                            alt="Engineering Students at SVIST"
                            class="w-full aspect-square object-cover rounded-3xl shadow-customCard">

                        <!-- Floating Quote Box -->
                        <div
                            class="absolute -bottom-8 lg:bottom-4 right-4  w-[90%] lg:w-4/5 bg-secondary text-white p-6 sm:p-8 border border-accent/20 shadow-custom z-20 rounded-xl">

                            <p class="text-sm sm:text-base italic font-medium leading-relaxed pr-6">
                                "Empowering future engineers through innovation,
                                practical learning, and industry-ready education."
                            </p>

                            <!-- Decorative Quote -->
                            <div class="absolute -bottom-4 right-6 text-accent text-6xl font-serif leading-none">
                                ”
                            </div>
                        </div>
                    </div>

                    <!-- Right Column -->
                    <div class="flex flex-col mt-12 lg:mt-0 z-10">

                        <!-- Heading -->
                        <h2 class="text-xl sm:text-2xl lg:text-3xl font-bold text-secondary !leading-snug mb-4">
                            Why Choose
                            <span class="text-primary">SVIST</span>
                            For Your Engineering Journey?
                        </h2>

                        <!-- Description -->
                        <p class="text-gray-600 mb-6 leading-relaxed text-base">
                            Join an AICTE-approved and NAAC B++ accredited institution
                            committed to academic excellence, industry-focused learning,
                            and career growth. At SVIST, students gain practical knowledge,
                            modern technical skills, and the confidence to succeed in today's
                            competitive engineering landscape.
                        </p>

                        <!-- Features -->
                        <div class="space-y-6 mb-10">

                            <!-- Feature 1 -->
                            <div class="flex items-start gap-0 sm:gap-4">
                                <span class="text-primary font-bold text-xl min-w-[40px]">
                                    01.
                                </span>

                                <div>
                                    <h4 class="text-base sm:text-lg font-bold text-secondary mb-2">
                                        AICTE Approved & NAAC B++ Accredited
                                    </h4>

                                    <p class="text-gray-600 text-sm leading-relaxed">
                                        Study in a recognized institution that maintains
                                        high academic standards and delivers quality
                                        engineering education.
                                    </p>
                                </div>
                            </div>

                            <!-- Feature 2 -->
                            <div class="flex items-start gap-0 sm:gap-4">
                                <span class="text-primary font-bold text-xl min-w-[40px]">
                                    02.
                                </span>

                                <div>
                                    <h4 class="text-base sm:text-lg font-bold text-secondary mb-2">
                                        Industry-Focused Learning
                                    </h4>

                                    <p class="text-gray-600 text-sm leading-relaxed">
                                        Gain practical exposure through projects,
                                        workshops, technical events, internships,
                                        and real-world engineering applications.
                                    </p>
                                </div>
                            </div>

                            <!-- Feature 4 -->
                            <div class="flex items-start gap-0 sm:gap-4">
                                <span class="text-primary font-bold text-xl min-w-[40px]">
                                    03.
                                </span>

                                <div>
                                    <h4 class="text-base sm:text-lg font-bold text-secondary mb-2">
                                        Career & Placement Support
                                    </h4>

                                    <p class="text-gray-600 text-sm leading-relaxed">
                                        Benefit from career guidance, aptitude training,
                                        interview preparation, and placement assistance
                                        to help launch your professional journey.
                                    </p>
                                </div>
                            </div>

                        </div>

                        <!-- CTA -->
                        <div>
                            <a href="#enquiry"
                                class="inline-flex items-center justify-center gap-3 bg-primary hover:bg-primaryDark text-white px-8 py-3.5 font-semibold rounded-xl shadow-lg hover:shadow-xl transition-all duration-200 open-modal-btn w-full sm:w-auto">

                                Apply For Admission

                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3">
                                    </path>
                                </svg>
                            </a>
                        </div>

                    </div>

                </div>

            </div>
        </section>

        <!-- Horizontal Inquiry Form Section -->
        <section class="bg-primary text-white py-12 relative overflow-hidden"
            style="content-visibility: auto; contain-intrinsic-size: auto 200px;">
            <!-- Background glow accent -->
            <div class="absolute -top-24 -right-24 w-96 h-96 bg-white/5 rounded-full blur-3xl pointer-events-none">
            </div>

            <div class="max-w-7xl mx-auto px-4 sm:px-6 relative z-10">
                <!-- Left: Text Header -->
                <div class="text-center mb-10">
                    <h2 class="text-2xl font-bold text-white tracking-tight">Apply for B.Tech Admission 2026</h2>
                    <p class="text-accentLight/80 text-sm mt-2">Enter your details below to get immediate expert
                        counselling and verify course availability.</p>
                </div>
                <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-8">



                    <!-- Right: Form 1 -->
                    <form id="horizontal-inquiry-form" class="flex-grow" action="send-mail.php" method="POST">
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 items-end">
                            <input type="hidden" name="form_type" value="enquiry">
                            <!-- Name Input -->
                            <div class="flex flex-col gap-1.5">
                                <label for="form-name" class="text-xs font-semibold text-accentLight">Full Name</label>
                                <input type="text" id="form-name" name="form_name" placeholder="Enter your name"
                                    class="w-full px-4 py-3 bg-white/80 border border-white/20 rounded-xl text-black placeholder-black/60 focus:outline-none focus:border-white transition-all text-sm">
                            </div>

                            <!-- Phone Input -->
                            <div class="flex flex-col gap-1.5">
                                <label for="form-phone" class="text-xs font-semibold text-accentLight">Phone
                                    Number</label>
                                <input type="tel" oninput="this.value=this.value.replace(/[^0-9]/g,'');" maxlength="10" pattern=".{10,10}" autocomplete="off" id="form-phone" name="form_phone" placeholder="Enter phone number"
                                    class="w-full px-4 py-3 bg-white/80 border border-white/20 rounded-xl text-black placeholder-black/60 focus:outline-none focus:border-white transition-all text-sm">
                            </div>

                            <!-- Course Select -->
                            <div class="flex flex-col gap-1.5">
                                <label for="form-course" class="text-xs font-semibold text-accentLight">Preferred
                                    Course</label>
                                <div class="relative">
                                    <select id="form-course" name="form_course"
                                        class="w-full px-4 py-3 bg-white/80 border border-white/20 rounded-xl text-black appearance-none focus:outline-none focus:border-white transition-all text-sm pr-10 cursor-pointer">
                                        <option value="" disabled selected class="text-gray-800">Select Department
                                        </option>
                                        <option value="CSE" class="text-gray-800">Computer Science & Eng. (CSE)</option>
                                        <option value="AIDS" class="text-gray-800">AI & Data Science (AIDS)</option>
                                        <option value="ECE" class="text-gray-800">Electronics & Comm. (ECE)</option>
                                        <option value="EEE" class="text-gray-800">Electrical & Electronics (EEE)
                                        </option>
                                        <option value="ME" class="text-gray-800">Mechanical Engineering (ME)</option>
                                        <option value="CE" class="text-gray-800">Civil Engineering (CE)</option>
                                    </select>
                                    <div
                                        class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none text-black/70">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 9l-7 7-7-7"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <div>
                                <button type="submit"
                                    class="w-full bg-[#DFBE88] hover:bg-[#d7b271] text-black font-bold px-6 py-3.5 rounded-xl shadow-md hover:shadow-lg transition-all duration-200 text-sm select-none cursor-pointer flex items-center justify-center gap-2">
                                    <span>Enquire Now</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                    </svg>
                                </button>
                            </div>

                        </div>
                    </form>

                </div>
            </div>
        </section>

        <section id="courses" class="py-12 lg:py-16">
            <div class="max-w-7xl mx-auto px-4 sm:px-6">

                <!-- Header -->
                <div class="text-center max-w-3xl mx-auto mb-12">

                    <span
                        class="inline-flex items-center px-4 py-2 rounded-full bg-accentLight text-primary text-sm font-semibold">
                        B.Tech Departments
                    </span>

                    <h2 class="mt-4 text-2xl sm:text-3xl lg:text-4xl font-bold text-secondary leading-tight">
                        Explore Our
                        <span class="text-primary">Engineering Programs</span>
                    </h2>

                    <p class="mt-5 text-gray-600 leading-relaxed">
                        Choose from industry-relevant engineering disciplines designed
                        to equip students with technical expertise, innovation skills,
                        and career-ready knowledge.
                    </p>

                </div>

                <!-- Departments Grid (Mobile & Tablet) -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:hidden gap-6">

                    <!-- CSE -->
                    <div class="relative rounded-2xl overflow-hidden shadow-customCard bg-cover bg-center min-h-[320px] flex flex-col justify-end p-6 border border-secondary/10"
                        style="background-image: url('https://images.unsplash.com/photo-1517694712202-14dd9538aa97?q=80&w=800&auto=format&fit=crop');">
                        <div class="absolute inset-0 bg-[#2d1b15]/60"></div>
                        <div class="relative z-10">
                            <span class="text-white/60 font-serif text-3xl mb-1 block">01</span>
                            <h3 class="text-xl sm:text-2xl font-bold text-white mb-2 leading-tight">Computer Science &
                                Engineering</h3>
                            <p class="text-white/90 text-sm leading-relaxed drop-shadow-md">Learn software development,
                                programming, cloud computing, databases, and emerging technologies.</p>
                            <a href="#courses"
                                class="mt-4 text-accentLight font-semibold text-xs  flex items-center gap-2">
                                View Programs <i class="ri-arrow-right-long-line"></i>
                            </a>
                        </div>
                    </div>

                    <!-- AI & DS -->
                    <div class="relative rounded-2xl overflow-hidden shadow-customCard bg-cover bg-center min-h-[320px] flex flex-col justify-end p-6 border border-secondary/10"
                        style="background-image: url('https://images.unsplash.com/photo-1620712943543-bcc4688e7485?q=80&w=800&auto=format&fit=crop');">
                        <div class="absolute inset-0 bg-[#2d1b15]/60"></div>
                        <div class="relative z-10">
                            <span class="text-white/60 font-serif text-3xl mb-1 block">02</span>
                            <h3 class="text-xl sm:text-2xl font-bold text-white mb-2 leading-tight">Artificial
                                Intelligence & Data Science</h3>
                            <p class="text-white/90 text-sm leading-relaxed drop-shadow-md">Explore machine learning,
                                data analytics, artificial intelligence, and intelligent systems.</p>
                            <a href="#courses"
                                class="mt-4 text-accentLight font-semibold text-xs  flex items-center gap-2">
                                View Programs <i class="ri-arrow-right-long-line"></i>
                            </a>
                        </div>
                    </div>

                    <!-- ECE -->
                    <div class="relative rounded-2xl overflow-hidden shadow-customCard bg-cover bg-center min-h-[320px] flex flex-col justify-end p-6 border border-secondary/10"
                        style="background-image: url('https://images.unsplash.com/photo-1518770660439-4636190af475?q=80&w=800&auto=format&fit=crop');">
                        <div class="absolute inset-0 bg-[#2d1b15]/60"></div>
                        <div class="relative z-10">
                            <span class="text-white/60 font-serif text-3xl mb-1 block">03</span>
                            <h3 class="text-xl sm:text-2xl font-bold text-white mb-2 leading-tight">Electronics &
                                Communication Eng.</h3>
                            <p class="text-white/90 text-sm leading-relaxed drop-shadow-md">Study communication systems,
                                embedded technologies, electronics, and networking.</p>
                            <a href="#courses"
                                class="mt-4 text-accentLight font-semibold text-xs  flex items-center gap-2">
                                View Programs <i class="ri-arrow-right-long-line"></i>
                            </a>
                        </div>
                    </div>

                    <!-- EEE -->
                    <div class="relative rounded-2xl overflow-hidden shadow-customCard bg-cover bg-center min-h-[320px] flex flex-col justify-end p-6 border border-secondary/10"
                        style="background-image: url('https://images.unsplash.com/photo-1473341304170-971dccb5ac1e?q=80&w=800&auto=format&fit=crop');">
                        <div class="absolute inset-0 bg-[#2d1b15]/60"></div>
                        <div class="relative z-10">
                            <span class="text-white/60 font-serif text-3xl mb-1 block">04</span>
                            <h3 class="text-xl sm:text-2xl font-bold text-white mb-2 leading-tight">Electrical &
                                Electronics Eng.</h3>
                            <p class="text-white/90 text-sm leading-relaxed drop-shadow-md">Build expertise in
                                electrical systems, power engineering, automation, and electronics.</p>
                            <a href="#courses"
                                class="mt-4 text-accentLight font-semibold text-xs  flex items-center gap-2">
                                View Programs <i class="ri-arrow-right-long-line"></i>
                            </a>
                        </div>
                    </div>

                    <!-- ME -->
                    <div class="relative rounded-2xl overflow-hidden shadow-customCard bg-cover bg-center min-h-[320px] flex flex-col justify-end p-6 border border-secondary/10"
                        style="background-image: url('https://images.unsplash.com/photo-1581092580497-e0d23cbdf1dc?q=80&w=800&auto=format&fit=crop');">
                        <div class="absolute inset-0 bg-[#2d1b15]/60"></div>
                        <div class="relative z-10">
                            <span class="text-white/60 font-serif text-3xl mb-1 block">05</span>
                            <h3 class="text-xl sm:text-2xl font-bold text-white mb-2 leading-tight">Mechanical Engineering</h3>
                            <p class="text-white/90 text-sm leading-relaxed drop-shadow-md">Learn about mechanics, thermodynamics, robotics, and structural design.</p>
                            <a href="#courses"
                                class="mt-4 text-accentLight font-semibold text-xs  flex items-center gap-2">
                                View Programs <i class="ri-arrow-right-long-line"></i>
                            </a>
                        </div>
                    </div>

                    <!-- CE -->
                    <div class="relative rounded-2xl overflow-hidden shadow-customCard bg-cover bg-center min-h-[320px] flex flex-col justify-end p-6 border border-secondary/10"
                        style="background-image: url('assets/images/depart/civil.webp');">
                        <div class="absolute inset-0 bg-[#2d1b15]/60"></div>
                        <div class="relative z-10">
                            <span class="text-white/60 font-serif text-3xl mb-1 block">06</span>
                            <h3 class="text-xl sm:text-2xl font-bold text-white mb-2 leading-tight">Civil Engineering</h3>
                            <p class="text-white/90 text-sm leading-relaxed drop-shadow-md">Master the design, construction, and maintenance of the physical and naturally built environment.</p>
                            <a href="#courses"
                                class="mt-4 text-accentLight font-semibold text-xs  flex items-center gap-2">
                                View Programs <i class="ri-arrow-right-long-line"></i>
                            </a>
                        </div>
                    </div>

                </div>

                <!-- Departments Accordion Hover (Desktop) -->
                <div
                    class="hidden lg:flex w-full h-[500px] overflow-hidden rounded-3xl shadow-customCard group border border-secondary/10 bg-white">

                    <!-- CSE (Open by Default) -->
                    <div class="relative flex-[4] group-hover:flex-1 hover:!flex-[4] group/panel transition-all duration-700 ease-in-out cursor-pointer overflow-hidden bg-cover bg-center border-r border-white/20 last:border-r-0"
                        style="background-image: url('https://images.unsplash.com/photo-1517694712202-14dd9538aa97?q=80&w=800&auto=format&fit=crop');">
                        <div
                            class="absolute inset-0 bg-[#2d1b15]/60 group-hover:bg-[#2d1b15]/40 group-hover/panel:!bg-[#2d1b15]/60 transition-colors duration-500">
                        </div>
                        <div
                            class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 group-hover/panel:!opacity-0 transition-opacity duration-300 delay-100">
                            <span
                                class="transform -rotate-90 whitespace-nowrap text-white font-bold text-xl uppercase tracking-widest">Computer
                                Science</span>
                        </div>
                        <div
                            class="absolute inset-0 p-8 flex flex-col justify-end opacity-100 group-hover:opacity-0 group-hover/panel:!opacity-100 transition-opacity duration-500 delay-200">
                            <span class="text-white/50 font-serif text-3xl mb-2">01</span>
                            <h3 class="text-3xl font-bold text-white mb-3 leading-tight">Computer Science<br>&
                                Engineering</h3>
                            <p class="text-white/90 text-sm leading-relaxed mb-6 max-w-sm drop-shadow-md">Learn software
                                development, programming, cloud computing, databases, and emerging technologies.</p>
                            <a href="#courses"
                                class="text-accentLight font-semibold text-xs uppercase tracking-widest hover:text-white transition-colors flex items-center gap-2 w-max">
                                View Programs <i class="ri-arrow-right-long-line"></i>
                            </a>
                        </div>
                    </div>

                    <!-- AI & DS -->
                    <div class="relative flex-1 group/panel hover:flex-[4] transition-all duration-700 ease-in-out cursor-pointer overflow-hidden bg-cover bg-center border-r border-white/20 last:border-r-0"
                        style="background-image: url('https://images.unsplash.com/photo-1620712943543-bcc4688e7485?q=80&w=800&auto=format&fit=crop');">
                        <div
                            class="absolute inset-0 bg-[#2d1b15]/40 group-hover/panel:bg-[#2d1b15]/60 transition-colors duration-500">
                        </div>
                        <div
                            class="absolute inset-0 flex items-center justify-center opacity-100 group-hover/panel:opacity-0 transition-opacity duration-300 delay-100">
                            <span
                                class="transform -rotate-90 whitespace-nowrap text-white font-bold text-xl uppercase tracking-widest">AI
                                & Data Science</span>
                        </div>
                        <div
                            class="absolute inset-0 p-8 flex flex-col justify-end opacity-0 group-hover/panel:opacity-100 transition-opacity duration-500 delay-200">
                            <span class="text-white/50 font-serif text-3xl mb-2">02</span>
                            <h3 class="text-3xl font-bold text-white mb-3 leading-tight">Artificial Intelligence<br>&
                                Data Science</h3>
                            <p class="text-white/90 text-sm leading-relaxed mb-6 max-w-sm drop-shadow-md">Explore
                                machine learning, data analytics, artificial intelligence, and intelligent systems.</p>
                            <a href="#courses"
                                class="text-accentLight font-semibold text-xs uppercase tracking-widest hover:text-white transition-colors flex items-center gap-2 w-max">
                                View Programs <i class="ri-arrow-right-long-line"></i>
                            </a>
                        </div>
                    </div>

                    <!-- ECE -->
                    <div class="relative flex-1 group/panel hover:flex-[4] transition-all duration-700 ease-in-out cursor-pointer overflow-hidden bg-cover bg-center border-r border-white/20 last:border-r-0"
                        style="background-image: url('https://images.unsplash.com/photo-1518770660439-4636190af475?q=80&w=800&auto=format&fit=crop');">
                        <div
                            class="absolute inset-0 bg-[#2d1b15]/40 group-hover/panel:bg-[#2d1b15]/60 transition-colors duration-500">
                        </div>
                        <div
                            class="absolute inset-0 flex items-center justify-center opacity-100 group-hover/panel:opacity-0 transition-opacity duration-300 delay-100">
                            <span
                                class="transform -rotate-90 whitespace-nowrap text-white font-bold text-xl uppercase tracking-widest">Electronics
                                & Comm.</span>
                        </div>
                        <div
                            class="absolute inset-0 p-8 flex flex-col justify-end opacity-0 group-hover/panel:opacity-100 transition-opacity duration-500 delay-200">
                            <span class="text-white/50 font-serif text-3xl mb-2">03</span>
                            <h3 class="text-3xl font-bold text-white mb-3 leading-tight">Electronics &<br>Communication
                                Eng.</h3>
                            <p class="text-white/90 text-sm leading-relaxed mb-6 max-w-sm drop-shadow-md">Study
                                communication systems, embedded technologies, electronics, and networking.</p>
                            <a href="#courses"
                                class="text-accentLight font-semibold text-xs uppercase tracking-widest hover:text-white transition-colors flex items-center gap-2 w-max">
                                View Programs <i class="ri-arrow-right-long-line"></i>
                            </a>
                        </div>
                    </div>

                    <!-- EEE -->
                    <div class="relative flex-1 group/panel hover:flex-[4] transition-all duration-700 ease-in-out cursor-pointer overflow-hidden bg-cover bg-center border-r border-white/20 last:border-r-0"
                        style="background-image: url('https://images.unsplash.com/photo-1473341304170-971dccb5ac1e?q=80&w=800&auto=format&fit=crop');">
                        <div
                            class="absolute inset-0 bg-[#2d1b15]/40 group-hover/panel:bg-[#2d1b15]/60 transition-colors duration-500">
                        </div>
                        <div
                            class="absolute inset-0 flex items-center justify-center opacity-100 group-hover/panel:opacity-0 transition-opacity duration-300 delay-100">
                            <span
                                class="transform -rotate-90 whitespace-nowrap text-white font-bold text-xl uppercase tracking-widest">Electrical
                                Eng.</span>
                        </div>
                        <div
                            class="absolute inset-0 p-8 flex flex-col justify-end opacity-0 group-hover/panel:opacity-100 transition-opacity duration-500 delay-200">
                            <span class="text-white/50 font-serif text-3xl mb-2">04</span>
                            <h3 class="text-3xl font-bold text-white mb-3 leading-tight">Electrical &<br>Electronics
                                Eng.</h3>
                            <p class="text-white/90 text-sm leading-relaxed mb-6 max-w-sm drop-shadow-md">Build
                                expertise in electrical systems, power engineering, automation, and electronics.</p>
                            <a href="#courses"
                                class="text-accentLight font-semibold text-xs uppercase tracking-widest hover:text-white transition-colors flex items-center gap-2 w-max">
                                View Programs <i class="ri-arrow-right-long-line"></i>
                            </a>
                        </div>
                    </div>

                    <!-- ME -->
                    <div class="relative flex-1 group/panel hover:flex-[4] transition-all duration-700 ease-in-out cursor-pointer overflow-hidden bg-cover bg-center border-r border-white/20 last:border-r-0"
                        style="background-image: url('https://images.unsplash.com/photo-1581092580497-e0d23cbdf1dc?q=80&w=800&auto=format&fit=crop');">
                        <div
                            class="absolute inset-0 bg-[#2d1b15]/40 group-hover/panel:bg-[#2d1b15]/60 transition-colors duration-500">
                        </div>
                        <div
                            class="absolute inset-0 flex items-center justify-center opacity-100 group-hover/panel:opacity-0 transition-opacity duration-300 delay-100">
                            <span
                                class="transform -rotate-90 whitespace-nowrap text-white font-bold text-xl uppercase tracking-widest">Mechanical Eng.</span>
                        </div>
                        <div
                            class="absolute inset-0 p-8 flex flex-col justify-end opacity-0 group-hover/panel:opacity-100 transition-opacity duration-500 delay-200">
                            <span class="text-white/50 font-serif text-3xl mb-2">05</span>
                            <h3 class="text-3xl font-bold text-white mb-3 leading-tight">Mechanical<br>Engineering</h3>
                            <p class="text-white/90 text-sm leading-relaxed mb-6 max-w-sm drop-shadow-md">Learn about mechanics, thermodynamics, robotics, and structural design.</p>
                            <a href="#courses"
                                class="text-accentLight font-semibold text-xs uppercase tracking-widest hover:text-white transition-colors flex items-center gap-2 w-max">
                                View Programs <i class="ri-arrow-right-long-line"></i>
                            </a>
                        </div>
                    </div>

                    <!-- CE -->
                    <div class="relative flex-1 group/panel hover:flex-[4] transition-all duration-700 ease-in-out cursor-pointer overflow-hidden bg-cover bg-center border-r border-white/20 last:border-r-0"
                        style="background-image: url('assets/images/depart/civil.webp');">
                        <div
                            class="absolute inset-0 bg-[#2d1b15]/40 group-hover/panel:bg-[#2d1b15]/60 transition-colors duration-500">
                        </div>
                        <div
                            class="absolute inset-0 flex items-center justify-center opacity-100 group-hover/panel:opacity-0 transition-opacity duration-300 delay-100">
                            <span
                                class="transform -rotate-90 whitespace-nowrap text-white font-bold text-xl uppercase tracking-widest">Civil Eng.</span>
                        </div>
                        <div
                            class="absolute inset-0 p-8 flex flex-col justify-end opacity-0 group-hover/panel:opacity-100 transition-opacity duration-500 delay-200">
                            <span class="text-white/50 font-serif text-3xl mb-2">06</span>
                            <h3 class="text-3xl font-bold text-white mb-3 leading-tight">Civil<br>Engineering</h3>
                            <p class="text-white/90 text-sm leading-relaxed mb-6 max-w-sm drop-shadow-md">Master the design, construction, and maintenance of the physical and naturally built environment.</p>
                            <a href="#courses"
                                class="text-accentLight font-semibold text-xs uppercase tracking-widest hover:text-white transition-colors flex items-center gap-2 w-max">
                                View Programs <i class="ri-arrow-right-long-line"></i>
                            </a>
                        </div>
                    </div>

                </div>

                <!-- CTA -->
                <div class="text-center mt-12">
                    <a href="#enquiry"
                        class="inline-flex items-center justify-center gap-3 bg-primary hover:bg-primaryDark text-white px-8 py-3.5 font-semibold rounded-xl shadow-lg hover:shadow-xl transition-all duration-200 open-modal-btn w-full sm:w-auto">
                        Apply For Admission
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </a>
                </div>

            </div>
        </section>











        <!-- Campus Facilities Section -->
        <section id="facilities" class="pb-12 md:pb-16 bg-white relative">
            <div class="max-w-7xl mx-auto px-4 sm:px-6">
                <!-- Header -->
                <div class="text-center max-w-3xl mx-auto mb-16">
                    <span
                        class="inline-flex items-center px-4 py-2 rounded-full bg-accentLight text-primary text-xs sm:text-sm font-semibold mb-4">
                        Campus Life
                    </span>
                    <h2 class="text-xl sm:text-3xl md:text-4xl font-bold text-secondary leading-tight">
                        World-Class <span class="text-primary">Facilities</span>
                    </h2>
                    <p class="mt-5 text-gray-600 leading-relaxed">
                        Experience a vibrant campus life with state-of-the-art infrastructure designed to support your
                        academic and extracurricular journey.
                    </p>
                </div>

                <!-- Facilities Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Facility 1: Library -->
                    <div
                        class="bg-slate-50 rounded-2xl p-6 md:p-8 border border-secondary/5 hover:border-primary/30 hover:-translate-y-2 transition-all duration-300">
                        <div
                            class="w-14 h-14 rounded-xl bg-accentLight flex items-center justify-center mb-6 text-primary">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.253 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-secondary mb-3">Central Library</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">A vast collection of engineering books,
                            journals, e-resources, and a peaceful reading environment.</p>
                    </div>

                    <!-- Facility 2: Labs -->
                    <div
                        class="bg-slate-50 rounded-2xl p-6 md:p-8 border border-secondary/5 hover:border-primary/30 hover:-translate-y-2 transition-all duration-300">
                        <div
                            class="w-14 h-14 rounded-xl bg-accentLight flex items-center justify-center mb-6 text-primary">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-secondary mb-3">Modern Laboratories</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">High-tech computer labs, electronics workshops,
                            and mechanical labs with the latest equipment.</p>
                    </div>

                    <!-- Facility 3: Hostel -->
                    <div
                        class="bg-slate-50 rounded-2xl p-6 md:p-8 border border-secondary/5 hover:border-primary/30 hover:-translate-y-2 transition-all duration-300">
                        <div
                            class="w-14 h-14 rounded-xl bg-accentLight flex items-center justify-center mb-6 text-primary">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-secondary mb-3">Hostel Accommodation</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">Separate, secure, and comfortable hostel
                            facilities for boys and girls with high-speed Wi-Fi.</p>
                    </div>

                    <!-- Facility 4: Sports -->
                    <div
                        class="bg-slate-50 rounded-2xl p-6 md:p-8 border border-secondary/5 hover:border-primary/30 hover:-translate-y-2 transition-all duration-300">
                        <div
                            class="w-14 h-14 rounded-xl bg-accentLight flex items-center justify-center mb-6 text-primary">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z">
                                </path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-secondary mb-3">Sports & Recreation</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">Large playgrounds for cricket and football,
                            along with indoor game facilities for holistic development.</p>
                    </div>

                    <!-- Facility 5: Cafeteria -->
                    <div
                        class="bg-slate-50 rounded-2xl p-6 md:p-8 border border-secondary/5 hover:border-primary/30 hover:-translate-y-2 transition-all duration-300">
                        <div
                            class="w-14 h-14 rounded-xl bg-accentLight flex items-center justify-center mb-6 text-primary">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 15.546c-.523 0-1.046.151-1.5.454a2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.701 2.701 0 00-1.5-.454M9 6v2m3-2v2m3-2v2M9 3h.01M12 3h.01M15 3h.01M21 21v-7a2 2 0 00-2-2H5a2 2 0 00-2 2v7h18zm-3-9v-2a2 2 0 00-2-2H8a2 2 0 00-2 2v2h12z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-secondary mb-3">Hygienic Cafeteria</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">Spacious food court serving highly nutritious,
                            delicious, and diverse multi-cuisine meals.</p>
                    </div>

                    <!-- Facility 6: CTA Block -->
                    <div
                        class="bg-primary rounded-2xl p-6 md:p-8 shadow-lg hover:shadow-xl hover:-translate-y-2 transition-all duration-300 flex flex-col justify-center items-center text-center relative overflow-hidden group">
                        <!-- Decorative background elements -->
                        <div
                            class="absolute -right-10 -top-10 w-40 h-40 bg-white opacity-10 rounded-full blur-2xl group-hover:scale-150 transition-transform duration-700">
                        </div>
                        <div
                            class="absolute -left-10 -bottom-10 w-32 h-32 bg-white opacity-10 rounded-full blur-xl group-hover:scale-150 transition-transform duration-700">
                        </div>

                        <div
                            class="w-16 h-16 rounded-full bg-white/20 flex items-center justify-center mb-6 text-white backdrop-blur-sm relative z-10">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-3 relative z-10">Start Your Journey</h3>
                        <p class="text-white/90 text-sm leading-relaxed mb-8 relative z-10 px-2">Join our vibrant campus
                            and shape your engineering career with world-class facilities.</p>
                        <a href="#enquiry"
                            class="inline-flex bg-white text-primary font-bold px-8 py-3.5 rounded-xl hover:bg-accentLight transition-colors w-full justify-center relative z-10 shadow-md">
                            Apply Now
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonial Section -->
        <section class="py-12 md:py-16 text-white relative overflow-hidden
    bg-[linear-gradient(rgba(140,68,38,0.9),rgba(140,68,38,0.9)),url('assets/images/banner/svimcs-building.webp')]
    bg-cover bg-center">>
            <!-- Inline styles for Slick dots on dark background -->
            <style>
                .testi-slider .slick-dots {
                    bottom: -40px;
                }

                .testi-slider .slick-dots li button:before {
                    color: white;
                    opacity: 0.3;
                    font-size: 10px;
                    transition: opacity 0.3s ease;
                }

                .testi-slider .slick-dots li.slick-active button:before {
                    opacity: 1;
                }

                .testi-slider {
                    margin-bottom: 3rem;
                }
            </style>

            <!-- Decorative Elements -->
            <div
                class="absolute top-0 left-0 w-64 h-64 bg-white opacity-5 rounded-full blur-3xl -translate-x-1/2 -translate-y-1/2">
            </div>
            <div
                class="absolute bottom-0 right-0 w-96 h-96 bg-white opacity-5 rounded-full blur-3xl translate-x-1/3 translate-y-1/3">
            </div>

            <div class="max-w-4xl mx-auto px-4 sm:px-6 relative z-10 text-center">

                <!-- Slider Container -->
                <div class="testi-slider outline-none cursor-grab active:cursor-grabbing">

                    <!-- Slide 1 -->
                    <div class="testi-item outline-none px-4" data-type="students">
                        <i class="ri-double-quotes-l text-6xl text-white/20 mb-6 inline-block"></i>
                        <h2
                            class="text-lg sm:text-xl md:text-2xl lg:text-4xl font-bold leading-relaxed mb-6 md:mb-10 drop-shadow-sm">
                            "SVIST provided me with the perfect blend of theoretical knowledge and practical exposure.
                            The state-of-the-art facilities shaped my engineering career."
                        </h2>
                        <div class="flex flex-col items-center justify-center">
                            <span class="text-xl font-bold tracking-wide">Rahul Sharma</span>
                            <span class="text-white/80 text-sm mt-1 font-semibold">B.Tech, CSE
                                Alumni</span>
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="testi-item outline-none px-4" data-type="students">
                        <i class="ri-double-quotes-l text-6xl text-white/20 mb-6 inline-block"></i>
                        <h2
                            class="text-lg sm:text-xl md:text-2xl lg:text-4xl font-bold leading-relaxed mb-6 md:mb-10 drop-shadow-sm">
                            "The modern labs and interactive smart classrooms make learning complex engineering concepts
                            incredibly engaging. I feel completely prepared for the industry."
                        </h2>
                        <div class="flex flex-col items-center justify-center">
                            <span class="text-xl font-bold tracking-wide">Priya Das</span>
                            <span class="text-white/80 text-sm mt-1 font-semibold">B.Tech, ECE
                                (3rd Year)</span>
                        </div>
                    </div>

                    <!-- Slide 3 -->
                    <div class="testi-item outline-none px-4" data-type="students">
                        <i class="ri-double-quotes-l text-6xl text-white/20 mb-6 inline-block"></i>
                        <h2
                            class="text-lg sm:text-xl md:text-2xl lg:text-4xl font-bold leading-relaxed mb-6 md:mb-10 drop-shadow-sm">
                            "Our faculty goes above and beyond to support us. The focus on practical projects and
                            real-world applications has truly transformed my college experience."
                        </h2>
                        <div class="flex flex-col items-center justify-center">
                            <span class="text-xl font-bold tracking-wide">Aman Verma</span>
                            <span class="text-white/80 text-sm mt-1 font-semibold">B.Tech,
                                Mechanical Alumni</span>
                        </div>
                    </div>

                </div>

                <!-- Custom Navigation Arrows -->
                <div class="flex justify-center items-center gap-4 mt-8 relative z-20">
                    <button
                        class="testi-prev w-12 h-12 rounded-full border border-white/20 flex items-center justify-center text-white/70 hover:bg-white hover:text-primary hover:border-white hover:scale-110 transition-all duration-300 focus:outline-none">
                        <i class="ri-arrow-left-line text-xl"></i>
                    </button>
                    <button
                        class="testi-next w-12 h-12 rounded-full border border-white/20 flex items-center justify-center text-white/70 hover:bg-white hover:text-primary hover:border-white hover:scale-110 transition-all duration-300 focus:outline-none">
                        <i class="ri-arrow-right-line text-xl"></i>
                    </button>
                </div>

            </div>
        </section>

        <!-- FAQ Section -->
        <section id="faq" class="py-12 md:py-16 bg-white relative overflow-hidden">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                <!-- Header -->
                <div class="text-center max-w-3xl mx-auto mb-16">
                    <span
                        class="inline-flex items-center px-4 py-2 rounded-full bg-accentLight text-primary text-xs sm:text-sm font-semibold mb-4">
                        Frequently Asked Questions
                    </span>

                    <h2 class="text-xl sm:text-3xl md:text-4xl font-bold text-secondary leading-tight">
                        Admissions <span class="text-primary">& FAQs</span>
                    </h2>

                    <p class="mt-5 text-gray-600 leading-relaxed">
                        Find answers to common questions about B.Tech admissions, eligibility,
                        programs, placements, campus facilities, and the application process at SVIST.
                    </p>
                </div>
                <div class="mx-auto max-w-4xl">

                    <!-- Right Column — Accordion -->
                    <div class="lg:col-span-8">
                        <div class="faq-container">

                            <!-- FAQ Item 1 -->
                            <div class="faq-item border-t border-gray-200">
                                <button
                                    class="faq-btn w-full flex justify-between items-center text-left py-4 md:py-6 focus:outline-none group">
                                    <span
                                        class="faq-question font-semibold text-base md:text-lg text-secondary transition-colors duration-300">What
                                        are the eligibility criteria for B.Tech admission?</span>
                                    <span
                                        class="faq-icon-wrapper flex-shrink-0 ml-6 w-8 h-8 flex items-center justify-center text-secondary/60 transition-transform duration-500">
                                        <i class="ri-add-line text-2xl faq-icon transition-all duration-500"></i>
                                    </span>
                                </button>
                                <div
                                    class="faq-content grid grid-rows-[0fr] transition-[grid-template-rows] duration-500 ease-[cubic-bezier(0.33,1,0.68,1)]">
                                    <div class="overflow-hidden">
                                        <div class="pb-5 pr-4 md:pr-12 text-gray-500 leading-relaxed text-[15px]">
                                            Candidates must have passed 10+2 with Physics, Mathematics, and
                                            Chemistry/Biotechnology/Biology/Computer Science with at least 45% marks
                                            (40% for reserved categories). A valid score in WBJEE or JEE Main is
                                            required.
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- FAQ Item 2 -->
                            <div class="faq-item border-t border-gray-200">
                                <button
                                    class="faq-btn w-full flex justify-between items-center text-left py-4 md:py-6 focus:outline-none group">
                                    <span
                                        class="faq-question font-semibold text-base md:text-lg text-secondary transition-colors duration-300">Does
                                        SVIST provide placement assistance?</span>
                                    <span
                                        class="faq-icon-wrapper flex-shrink-0 ml-6 w-8 h-8 flex items-center justify-center text-secondary/60 transition-transform duration-500">
                                        <i class="ri-add-line text-2xl faq-icon transition-all duration-500"></i>
                                    </span>
                                </button>
                                <div
                                    class="faq-content grid grid-rows-[0fr] transition-[grid-template-rows] duration-500 ease-[cubic-bezier(0.33,1,0.68,1)]">
                                    <div class="overflow-hidden">
                                        <div class="pb-5 pr-4 md:pr-12 text-gray-500 leading-relaxed text-[15px]">
                                            Yes, we have a dedicated Training and Placement Cell that provides 100%
                                            placement assistance. Top recruiters visit our campus every year offering
                                            lucrative packages. We also provide pre-placement training, mock interviews,
                                            and resume building workshops.
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- FAQ Item 3 -->
                            <div class="faq-item border-t border-gray-200">
                                <button
                                    class="faq-btn w-full flex justify-between items-center text-left py-4 md:py-6 focus:outline-none group">
                                    <span
                                        class="faq-question font-semibold text-base md:text-lg text-secondary transition-colors duration-300">Are
                                        hostel facilities available?</span>
                                    <span
                                        class="faq-icon-wrapper flex-shrink-0 ml-6 w-8 h-8 flex items-center justify-center text-secondary/60 transition-transform duration-500">
                                        <i class="ri-add-line text-2xl faq-icon transition-all duration-500"></i>
                                    </span>
                                </button>
                                <div
                                    class="faq-content grid grid-rows-[0fr] transition-[grid-template-rows] duration-500 ease-[cubic-bezier(0.33,1,0.68,1)]">
                                    <div class="overflow-hidden">
                                        <div class="pb-5 pr-4 md:pr-12 text-gray-500 leading-relaxed text-[15px]">
                                            Yes, SVIST provides separate, well-furnished hostel facilities for boys and
                                            girls with 24/7 security, high-speed Wi-Fi, and nutritious food. The hostels
                                            are located within close proximity to the campus.
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- FAQ Item 4 -->
                            <div class="faq-item border-t border-gray-200">
                                <button
                                    class="faq-btn w-full flex justify-between items-center text-left py-4 md:py-6 focus:outline-none group">
                                    <span
                                        class="faq-question font-semibold text-base md:text-lg text-secondary transition-colors duration-300">Are
                                        there any scholarship programs?</span>
                                    <span
                                        class="faq-icon-wrapper flex-shrink-0 ml-6 w-8 h-8 flex items-center justify-center text-secondary/60 transition-transform duration-500">
                                        <i class="ri-add-line text-2xl faq-icon transition-all duration-500"></i>
                                    </span>
                                </button>
                                <div
                                    class="faq-content grid grid-rows-[0fr] transition-[grid-template-rows] duration-500 ease-[cubic-bezier(0.33,1,0.68,1)]">
                                    <div class="overflow-hidden">
                                        <div class="pb-5 pr-4 md:pr-12 text-gray-500 leading-relaxed text-[15px]">
                                            Yes, we support various government and private scholarship schemes based on
                                            merit and financial need. Students can apply for Swami Vivekananda Merit cum
                                            Means Scholarship, Oasis Scholarship, and more.
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- FAQ Item 5 -->
                            <div class="faq-item border-t border-gray-200">
                                <button
                                    class="faq-btn w-full flex justify-between items-center text-left py-4 md:py-6 focus:outline-none group">
                                    <span
                                        class="faq-question font-semibold text-base md:text-lg text-secondary transition-colors duration-300">What
                                        courses are offered at SVIST?</span>
                                    <span
                                        class="faq-icon-wrapper flex-shrink-0 ml-6 w-8 h-8 flex items-center justify-center text-secondary/60 transition-transform duration-500">
                                        <i class="ri-add-line text-2xl faq-icon transition-all duration-500"></i>
                                    </span>
                                </button>
                                <div
                                    class="faq-content grid grid-rows-[0fr] transition-[grid-template-rows] duration-500 ease-[cubic-bezier(0.33,1,0.68,1)]">
                                    <div class="overflow-hidden">
                                        <div class="pb-5 pr-4 md:pr-12 text-gray-500 leading-relaxed text-[15px]">
                                            SVIST offers B.Tech programs in Computer Science & Engineering (CSE), CSE
                                            (AI & ML), Electronics & Communication Engineering (ECE), Electrical
                                            Engineering (EE), and Mechanical Engineering (ME), all approved by AICTE and
                                            affiliated to MAKAUT.
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- FAQ Item 6 -->
                            <div class="faq-item border-t border-b border-gray-200">
                                <button
                                    class="faq-btn w-full flex justify-between items-center text-left py-4 md:py-6 focus:outline-none group">
                                    <span
                                        class="faq-question font-semibold text-base md:text-lg text-secondary transition-colors duration-300">How
                                        can I apply for admission?</span>
                                    <span
                                        class="faq-icon-wrapper flex-shrink-0 ml-6 w-8 h-8 flex items-center justify-center text-secondary/60 transition-transform duration-500">
                                        <i class="ri-add-line text-2xl faq-icon transition-all duration-500"></i>
                                    </span>
                                </button>
                                <div
                                    class="faq-content grid grid-rows-[0fr] transition-[grid-template-rows] duration-500 ease-[cubic-bezier(0.33,1,0.68,1)]">
                                    <div class="overflow-hidden">
                                        <div class="pb-5 pr-4 md:pr-12 text-gray-500 leading-relaxed text-[15px]">
                                            You can apply online through the enquiry form on our website or visit the
                                            campus directly. Admissions are based on WBJEE / JEE Main scores or through
                                            management quota. Our admissions team will guide you through the entire
                                            process.
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <!-- Advanced FAQ Accordion Logic -->
            <script>
                document.addEventListener('DOMContentLoaded', () => {
                    const faqItems = document.querySelectorAll('.faq-item');

                    faqItems.forEach((item) => {
                        const btn = item.querySelector('.faq-btn');

                        btn.addEventListener('click', () => {
                            const isExpanded = item.classList.contains('expanded');

                            // Close all others
                            faqItems.forEach(otherItem => {
                                otherItem.classList.remove('expanded');
                                otherItem.querySelector('.faq-content').style.gridTemplateRows = '0fr';
                                const icon = otherItem.querySelector('.faq-icon');
                                icon.style.transform = 'rotate(0deg)';
                                otherItem.querySelector('.faq-question').classList.remove('text-primary');
                            });

                            // Toggle current
                            if (!isExpanded) {
                                item.classList.add('expanded');
                                item.querySelector('.faq-content').style.gridTemplateRows = '1fr';
                                const icon = item.querySelector('.faq-icon');
                                icon.style.transform = 'rotate(45deg)';
                                item.querySelector('.faq-question').classList.add('text-primary');
                            }
                        });
                    });

                    // Open the first one by default
                    if (faqItems.length > 0) {
                        faqItems[0].querySelector('.faq-btn').click();
                    }
                });
            </script>
        </section>

    </main>

    <!-- Mobile Sticky Footer CTA Bar -->
    <div class="fixed bottom-0 left-0 right-0 z-40 bg-white/95 backdrop-blur-md flex shadow-[0_-8px_24px_rgba(0,0,0,0.08)] sm:hidden">
        <a href="tel:+918910367916" class="flex-1 bg-secondary text-white font-bold py-3.5 px-4 text-xs tracking-wider uppercase flex items-center justify-center gap-2 active:scale-95 transition-all duration-100">
            <i class="ri-phone-fill text-base"></i>
            <span>Call Now</span>
        </a>
        <a href="#enquiry" class="flex-1 bg-primary text-white font-bold py-3.5 px-4 text-xs tracking-wider uppercase flex items-center justify-center gap-2 active:scale-95 transition-all duration-100 open-modal-btn">
            <i class="ri-graduation-cap-fill text-base"></i>
            <span>Get Admission</span>
        </a>
    </div>

    <!-- Mobile Menu Drawer Backdrop & Content -->
    <div id="mobile-menu-drawer"
        class="fixed inset-0 z-50 bg-black/40 backdrop-blur-sm opacity-0 pointer-events-none transition-all duration-300">
        <div
            class="absolute right-0 top-0 h-full w-full max-w-[300px] bg-white shadow-2xl p-6 flex flex-col transform translate-x-full transition-transform duration-300">
            <!-- Close button -->
            <div class="flex justify-between items-center mb-8">
                <span class="font-bold text-lg text-secondary">Navigation</span>
                <button id="close-menu-btn"
                    class="w-8 h-8 rounded-full bg-gray-100 hover:bg-gray-200 flex items-center justify-center text-gray-500 hover:text-secondary transition-colors cursor-pointer select-none">
                    <i class="ri-close-line text-xl"></i>
                </button>
            </div>

            <!-- Menu links -->
            <nav class="flex flex-col gap-5 text-base font-semibold text-secondary">
                <a href="#home" class="hover:text-primary transition-colors py-2  border-gray-100">Home</a>
                <a href="#about" class="hover:text-primary transition-colors py-2  border-gray-100">About Us</a>
                <a href="#facilities"
                    class="hover:text-primary transition-colors py-2  border-gray-100">Facilities</a>
                <a href="#courses"
                    class="hover:text-primary transition-colors py-2  border-gray-100">Courses</a>
                <a href="#faq" class="hover:text-primary transition-colors py-2  border-gray-100">FAQ</a>
            </nav>

            <!-- CTA Button inside mobile menu -->
            <div class="mt-auto">
                <a href="#enquiry"
                    class="block text-center bg-primary hover:bg-primaryDark text-white font-semibold py-3 rounded-xl shadow-md transition-colors open-modal-btn">
                    Apply Now
                </a>
            </div>
        </div>
    </div>

    <!-- Start Application Modal & Bottom Sheet -->
    <div id="application-modal" class="modal-backdrop">
        <div class="modal-container">
            <!-- Mobile pull-down bar indicator -->
            <div class="md:hidden w-12 h-1.5 bg-gray-300 rounded-full mx-auto mb-5"></div>

            <!-- Modal Header -->
            <div class="flex justify-between items-start mb-6">
                <div>
                    <h3 class="text-xl md:text-2xl font-bold text-secondary">Start Your Application</h3>
                    <p class="text-gray-500 text-sm mt-1">Begin your engineering journey at SVIST.</p>
                </div>
                <button id="close-modal-btn"
                    class="w-8 h-8 rounded-full bg-gray-100 hover:bg-gray-200 flex items-center justify-center text-gray-500 hover:text-secondary transition-colors cursor-pointer select-none">
                    <i class="ri-close-line text-xl"></i>
                </button>
            </div>

            <!-- Modal Form -->
            <form id="modal-application-form" class="space-y-4" action="send-mail.php" method="POST">
                <input type="hidden" name="form_type" value="application">
                <!-- Name -->
                <div class="flex flex-col gap-1.5">
                    <label for="modal-name" class="text-xs font-semibold text-secondary/85">Full Name</label>
                    <input type="text" name="form_name" id="modal-name" placeholder="Enter your full name"
                        class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl text-black placeholder-gray-400 focus:outline-none focus:border-primary focus:bg-white transition-all text-sm">
                </div>

                <!-- Phone -->
                <div class="flex flex-col gap-1.5">
                    <label for="modal-phone" class="text-xs font-semibold text-secondary/85">Phone Number</label>
                    <input type="tel" oninput="this.value=this.value.replace(/[^0-9]/g,'');" maxlength="10" pattern=".{10,10}" autocomplete="off" name="form_phone" id="modal-phone" placeholder="Enter 10-digit mobile number"
                        class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl text-black placeholder-gray-400 focus:outline-none focus:border-primary focus:bg-white transition-all text-sm">
                </div>

                <!-- Email -->
                <div class="flex flex-col gap-1.5">
                    <label for="modal-email" class="text-xs font-semibold text-secondary/85">Email Address</label>
                    <input type="email" name="form_email" id="modal-email" placeholder="Enter your email"
                        class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl text-black placeholder-gray-400 focus:outline-none focus:border-primary focus:bg-white transition-all text-sm">
                </div>

                <!-- Course Select -->
                <div class="flex flex-col gap-1.5">
                    <label for="modal-course" class="text-xs font-semibold text-secondary/85">Preferred Course</label>
                    <div class="relative">
                        <select id="modal-course" name="form_course"
                            class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl text-black appearance-none focus:outline-none focus:border-primary focus:bg-white transition-all text-sm pr-10 cursor-pointer">
                            <option value="" disabled selected class="text-gray-400">Select Department</option>
                            <option value="CSE" class="text-gray-800">Computer Science & Eng. (CSE)</option>
                            <option value="AIDS" class="text-gray-800">AI & Data Science (AIDS)</option>
                            <option value="ECE" class="text-gray-800">Electronics & Comm. (ECE)</option>
                            <option value="EEE" class="text-gray-800">Electrical & Electronics (EEE)</option>
                            <option value="ME" class="text-gray-800">Mechanical Engineering (ME)</option>
                            <option value="CE" class="text-gray-800">Civil Engineering (CE)</option>
                        </select>
                        <div
                            class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none text-gray-500">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="pt-2">
                    <button type="submit"
                        class="w-full bg-primary hover:bg-primaryDark text-white font-bold px-6 py-3.5 rounded-xl shadow-md hover:shadow-lg transition-all duration-200 text-sm select-none cursor-pointer flex items-center justify-center gap-2">
                        <span>Submit Application</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <!-- Interactive UI Handler Script -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // --- Mobile Drawer Menu Logic ---
            const mobileMenu = document.getElementById('mobile-menu-drawer');
            const openMenuBtn = document.getElementById('mobile-menu-toggle');
            const closeMenuBtn = document.getElementById('close-menu-btn');
            const mobileLinks = mobileMenu.querySelectorAll('nav a');

            const openMobileMenu = () => {
                mobileMenu.classList.add('active');
                document.body.classList.add('modal-open');
            };

            const closeMobileMenu = () => {
                mobileMenu.classList.remove('active');
                document.body.classList.remove('modal-open');
            };

            // --- Smooth Scroll with Header Offset Logic ---
            const headerOffset = 90; // height of sticky header + padding
            const internalLinks = document.querySelectorAll('a[href^="#"]:not([href="#enquiry"])');

            internalLinks.forEach(link => {
                link.addEventListener('click', (e) => {
                    const targetId = link.getAttribute('href');
                    if (targetId === '#') return; // skip empty links

                    const targetElement = document.querySelector(targetId);
                    if (targetElement) {
                        e.preventDefault();

                        // Close mobile menu if it is open
                        closeMobileMenu();

                        const elementPosition = targetElement.getBoundingClientRect().top;
                        const offsetPosition = elementPosition + (window.scrollY || window.pageYOffset) - headerOffset;

                        window.scrollTo({
                            top: offsetPosition,
                            behavior: 'smooth'
                        });
                    }
                });
            });

            if (openMenuBtn) openMenuBtn.addEventListener('click', openMobileMenu);
            if (closeMenuBtn) closeMenuBtn.addEventListener('click', closeMobileMenu);
            mobileMenu.addEventListener('click', (e) => {
                if (e.target === mobileMenu) {
                    closeMobileMenu();
                }
            });
            mobileLinks.forEach(link => {
                link.addEventListener('click', closeMobileMenu);
            });


            // --- Start Application Modal Logic ---
            const modal = document.getElementById('application-modal');
            const closeBtn = document.getElementById('close-modal-btn');
            const form = document.getElementById('modal-application-form');
            const originalFormContent = form.innerHTML;

            const openModal = (e) => {
                if (e) e.preventDefault();
                // If mobile menu is open, close it first
                closeMobileMenu();
                modal.classList.add('active');
                document.body.classList.add('modal-open');
            };

            const closeModal = () => {
                modal.classList.remove('active');
                document.body.classList.remove('modal-open');
            };

            // Bind click handlers to all buttons linking to #enquiry or with class open-modal-btn
            const bindTriggers = () => {
                const triggerElements = document.querySelectorAll('a[href="#enquiry"], .open-modal-btn');
                triggerElements.forEach(el => {
                    el.removeEventListener('click', openModal);
                    el.addEventListener('click', openModal);
                });
            };

            bindTriggers();

            // Expose globally for the booking button inside header
            window.openBookingModal = openModal;

            // Close events
            closeBtn.addEventListener('click', closeModal);

            modal.addEventListener('click', (e) => {
                if (e.target === modal) {
                    closeModal();
                }
            });

            document.addEventListener('keydown', (e) => {
                if (e.key === 'Escape') {
                    if (modal.classList.contains('active')) {
                        closeModal();
                    } else if (mobileMenu.classList.contains('active')) {
                        closeMobileMenu();
                    }
                }
            });

            bindFormSubmit();
        });
    </script>

    <!-- Footer Section -->
    <footer class="bg-[#111827] text-white py-8 border-t-[6px] border-primary">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">

            <!-- Bottom Copyright -->
            <div class="flex flex-col md:flex-row items-center justify-between gap-4">
                <p class="text-white/80 text-sm text-center md:text-left">
                    &copy; 2026 Swami Vivekananda Group of Institutes (SVIST). All Rights Reserved.
                </p>
                <div class="flex gap-4 text-sm text-white/80">
                    <a href="#" class="hover:text-primary transition-colors">Privacy Policy</a>
                    <a href="#" class="hover:text-primary transition-colors">Terms of Service</a>
                </div>
            </div>
        </div>
    </footer>

    <script type="text/javascript" src="assets/libs/jquery/jquery-3.7.1.min.js"></script>
    <script type="text/javascript" src="assets/libs/slick/slick.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.testi-slider').slick({
                dots: false,
                arrows: true,
                prevArrow: $('.testi-prev'),
                nextArrow: $('.testi-next'),
                infinite: true,
                speed: 600,
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 5000,

                pauseOnHover: true
            });
        });
    </script>

    <script>
        document.getElementById("horizontal-inquiry-form").addEventListener("submit", function(e) {

            let name = document.getElementById("form-name").value.trim();
            let phone = document.getElementById("form-phone").value.trim();
            let course = document.getElementById("form-course").value;

            if (name == "") {
                e.preventDefault();
                toastr.error("Please enter your full name.");
                return;
            }

            if (!/^[A-Za-z ]+$/.test(name)) {
                e.preventDefault();
                toastr.error("Name should contain only letters.");
                return;
            }

            if (phone == "") {
                e.preventDefault();
                toastr.error("Please enter your phone number.");
                return;
            }

            if (!/^[6-9][0-9]{9}$/.test(phone)) {
                e.preventDefault();
                toastr.error("Please enter a valid 10-digit mobile number.");
                return;
            }

            if (course == "") {
                e.preventDefault();
                toastr.error("Please select a preferred course.");
                return;
            }

        });
    </script>
    <script>
        if (localStorage.getItem("success")) {
            toastr.success(localStorage.getItem("success"));
            localStorage.removeItem("success");
        }
    </script>
    <script>
        $(document).ready(function () {

            $("#modal-application-form").on("submit", function (e) {
        
                e.preventDefault();
        
                // Remove previous red borders
                $("#modal-name, #modal-phone, #modal-email, #modal-course")
                    .removeClass("border-red-500 border-red-600")
                    .addClass("border-gray-200");
        
                let name = $("#modal-name").val().trim();
                let phone = $("#modal-phone").val().trim();
                let email = $("#modal-email").val().trim();
                let course = $("#modal-course").val();
        
                // Name
                if (name === "") {
                    $("#modal-name").removeClass("border-gray-200").addClass("border-red-500");
                    toastr.error("Please enter your full name.");
                    $("#modal-name").focus();
                    return;
                }
        
                if (!/^[A-Za-z ]+$/.test(name)) {
                    $("#modal-name").removeClass("border-gray-200").addClass("border-red-500");
                    toastr.error("Please enter a valid name.");
                    $("#modal-name").focus();
                    return;
                }
        
                // Phone
                if (phone === "") {
                    $("#modal-phone").removeClass("border-gray-200").addClass("border-red-500");
                    toastr.error("Please enter your phone number.");
                    $("#modal-phone").focus();
                    return;
                }
        
                if (!/^[6-9][0-9]{9}$/.test(phone)) {
                    $("#modal-phone").removeClass("border-gray-200").addClass("border-red-500");
                    toastr.error("Please enter a valid 10-digit mobile number.");
                    $("#modal-phone").focus();
                    return;
                }
        
                // Email
                if (email === "") {
                    $("#modal-email").removeClass("border-gray-200").addClass("border-red-500");
                    toastr.error("Please enter your email address.");
                    $("#modal-email").focus();
                    return;
                }
        
                let emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        
                if (!emailPattern.test(email)) {
                    $("#modal-email").removeClass("border-gray-200").addClass("border-red-500");
                    toastr.error("Please enter a valid email address.");
                    $("#modal-email").focus();
                    return;
                }
        
                // Course
                if (!course) {
                    $("#modal-course").removeClass("border-gray-200").addClass("border-red-500");
                    toastr.error("Please select your preferred course.");
                    $("#modal-course").focus();
                    return;
                }
        
                // Submit if all validations pass
                this.submit();
        
            });
        
            // Remove red border while typing
            $("#modal-name, #modal-phone, #modal-email").on("input", function () {
                $(this).removeClass("border-red-500").addClass("border-gray-200");
            });
        
            $("#modal-course").on("change", function () {
                $(this).removeClass("border-red-500").addClass("border-gray-200");
            });
        
        });
    </script>
    
    <script>
    $(document).ready(function () {
    
        toastr.options = {
            "closeButton": true,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "timeOut": "4000",
            "preventDuplicates": true
        };
    
    });
    </script>
    <script>
    $(function () {
    
    <?php if(isset($_SESSION['success'])) { ?>
        toastr.success("<?= $_SESSION['success']; ?>");
    <?php unset($_SESSION['success']); } ?>
    
    });
    </script>
    
</body>

</html>