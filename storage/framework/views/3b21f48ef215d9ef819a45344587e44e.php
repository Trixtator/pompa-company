<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PT Adhikari Tekindo | Premium Pump Services</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700;800;900&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">

    <style>
        /* FIX AGAR TIDAK TABRAKAN SAAT KLIK MENU */
        html { scroll-behavior: smooth; scroll-padding-top: 90px; }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                <img src="<?php echo e(asset('images/Logo_Adikaari_Tekindo-preview.png')); ?>" alt="AKT Tekindo Logo">
            </a>
            <button class="navbar-toggler navbar-dark border-0 focus-ring-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">Profil</a></li>
                    <li class="nav-item"><a class="nav-link" href="#services">Layanan</a></li>
                    <li class="nav-item"><a class="nav-link" href="#tools">Peralatan</a></li>
                    <li class="nav-item"><a class="nav-link" href="#projects">Portofolio</a></li>
                    <li class="nav-item ms-lg-4 mt-3 mt-lg-0">
                        <a href="#contact" class="btn btn-gradient rounded-pill px-4 py-2 fs-6 text-white text-decoration-none">Hubungi Kami</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <?php echo $__env->yieldContent('content'); ?>

    <footer id="contact" class="footer-premium">
        <div class="footer-top">
            <div class="container">
                <div class="row gy-5">
                    <div class="col-lg-4 col-md-6">
                        <div class="footer-brand">
                            <img src="<?php echo e(asset('images/Logo_Adikaari_Tekindo-preview.png')); ?>" alt="AKT Logo">
                        </div>
                        <p class="mb-4 pe-lg-5 text-muted">Partner terpercaya dalam solusi pompa industri. Mengedepankan integritas, keselamatan kerja, dan kepuasan pelanggan.</p>
                        <div class="d-flex gap-3">
                            <a href="#" class="btn btn-outline-light rounded-circle p-2 d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; border-color: #333;"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#" class="btn btn-outline-light rounded-circle p-2 d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; border-color: #333;"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 offset-lg-1">
                        <h5 class="text-white fw-bold mb-4">Navigasi</h5>
                        <ul class="list-unstyled">
                            <li><a href="#" class="footer-link">Beranda</a></li>
                            <li><a href="#about" class="footer-link">Profil</a></li>
                            <li><a href="#services" class="footer-link">Layanan</a></li>
                            <li><a href="#tools" class="footer-link">Peralatan</a></li>
                            <li><a href="#projects" class="footer-link">Portofolio</a></li>
                            <li><a href="#contact" class="footer-link">Kontak</a></li>
                        </ul>
                    </div>
                    
                    <div class="col-lg-5 col-md-12">
                         <h5 class="text-white fw-bold mb-4">Kontak Resmi</h5>
                         
                         <a href="https://maps.google.com/?q=Plaza+UNY" target="_blank" class="contact-item d-flex mb-4 text-decoration-none">
                             <div class="contact-icon"><i class="fas fa-map-marker-alt"></i></div>
                             <div>
                                 <h6 class="text-white mb-1">Alamat Kantor</h6>
                                 <p class="mb-0 text-muted small">Plaza UNY Lt. 4, Jl. Affandi No.168, Sleman, DIY 55781</p>
                             </div>
                         </a>

                         <a href="https://wa.me/6281227659956" target="_blank" class="contact-item d-flex mb-4 text-decoration-none">
                             <div class="contact-icon"><i class="fas fa-phone-volume"></i></div>
                             <div>
                                 <h6 class="text-white mb-1">WhatsApp</h6>
                                 <p class="mb-0 fw-bold fs-5 text-white">0812-2765-9956</p>
                             </div>
                         </a>

                         <a href="mailto:adhikaritekindo@gmail.com" class="contact-item d-flex text-decoration-none">
                             <div class="contact-icon"><i class="fas fa-envelope-open-text"></i></div>
                             <div>
                                 <h6 class="text-white mb-1">Email</h6>
                                 <p class="mb-0 text-muted small">adhikaritekindo@gmail.com</p>
                             </div>
                         </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container text-center">
                <p class="mb-0 text-muted small">© 2024 <b>PT Adhikari Tekindo</b>. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <div class="float-wa-premium">
        <a href="https://wa.me/6281227659956" target="_blank" class="wa-btn-premium">
            <i class="fab fa-whatsapp"></i>
        </a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({ once: true, offset: 80, duration: 1000, easing: 'ease-out-cubic' });
        
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            // Navbar tetap hitam solid, tapi tambah shadow saat scroll
            if (window.scrollY > 50) {
                navbar.classList.add('shadow-lg');
                navbar.style.padding = '10px 0';
            } else {
                navbar.classList.remove('shadow-lg');
                navbar.style.padding = '15px 0';
            }
        });
    </script>
</body>
</html><?php /**PATH C:\xampp\htdocs\pompa-company\resources\views/layouts/app.blade.php ENDPATH**/ ?>