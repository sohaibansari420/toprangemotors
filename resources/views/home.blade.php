<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Top Range Motors</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet"/>
<style>
    body {
        background: linear-gradient(135deg, #1f2937 0%, #3b4162 100%);
        color: #f9fafb;
        font-family: 'Poppins', sans-serif;
        margin: 0;
        padding: 0;
    }
    .hero {
        height: 100vh;
        background: url('{{ asset("frontend/images/prius.jpg") }}') no-repeat center center / cover;
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
    }
    .hero::before {
        content: '';
        position: absolute;
        inset: 0;
        background: rgba(20, 25, 40, 0.7);
        z-index: 0;
    }
    .hero-content {
        position: relative;
        z-index: 1;
        max-width: 800px;
        padding: 0 1rem;
    }
    .hero-content h1 {
        font-size: 3.5rem;
        font-weight: 800;
        margin-bottom: 1rem;
        color: #fff;
        text-shadow: 0 0 15px rgba(0, 0, 0, 0.7);
    }
    .hero-content p {
        font-size: 1.3rem;
        margin-bottom: 2rem;
        color: #cfd6e4;
    }
    .btn-accent {
        background-color: #ff6a3d;
        border: none;
        padding: 12px 28px;
        font-weight: 600;
        transition: background-color 0.3s ease;
        box-shadow: 0 4px 15px rgba(255, 106, 61, 0.5);
        color: #fff;
    }
    .btn-accent:hover {
        background-color: #e35b2a;
        box-shadow: 0 6px 20px rgba(227, 91, 42, 0.7);
        color: #fff;
    }
    section h2.section-title {
        text-align: center;
        font-weight: 800;
        font-size: 2.75rem;
        margin-bottom: 2rem;
        color: #ff6a3d;
        text-shadow: 0 2px 8px rgba(255, 106, 61, 0.7);
    }
    .about {
        max-width: 900px;
        margin: 4rem auto 2rem auto;
        padding: 0 1rem;
        color: #d1d5db;
        text-align: center;
    }
    .about p {
        font-size: 1.1rem;
        line-height: 1.6;
        max-width: 700px;
        margin: 0 auto;
    }
    .services {
        padding: 2rem 1rem 4rem 1rem;
        max-width: 1140px;
        margin: 0 auto;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
        gap: 2rem;
    }
    .service-card {
        background: #2a3149;
        border-radius: 12px;
        padding: 2rem;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        color: #fff;
        text-align: center;
    }
    .service-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 40px rgba(255, 106, 61, 0.6);
    }
    .service-icon {
        font-size: 3.5rem;
        margin-bottom: 1rem;
        color: #ff6a3d;
    }
    .service-card h3 {
        font-weight: 700;
        margin-bottom: 0.8rem;
    }
    .service-card p {
        color: #d1d5db;
        font-size: 1rem;
    }
    .services-section {
        padding: 4rem 1rem;
        background-color: #1f2537;
    }
    .services-container {
        max-width: 1140px;
        margin: 0 auto;
    }
    .services-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
        gap: 2rem;
    }
    .section-title {
        text-align: center;
        font-weight: 800;
        font-size: 2.75rem;
        margin-bottom: 2.5rem;
        color: #ff6a3d;
        text-shadow: 0 2px 8px rgba(255, 106, 61, 0.7);
    }
    .gallery {
        max-width: 1140px;
        margin: 4rem auto;
        padding: 0 1rem;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 1.5rem;
    }
    .gallery h2.section-title {
        grid-column: 1 / -1;
        margin-bottom: 2rem;
    }
    .gallery img {
        border-radius: 14px;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.6);
        width: 100%;
        height: auto;
        transition: transform 0.4s ease;
        cursor: pointer;
    }
    .gallery img:hover {
        transform: scale(1.05);
        box-shadow: 0 15px 30px rgba(255, 106, 61, 0.7);
    }
    .contact {
        max-width: 1140px;
        margin: 4rem auto 6rem auto;
        padding: 0 1rem;
        color: #d1d5db;
        text-align: center;
    }
    .contact h2 {
        font-weight: 800;
        margin-bottom: 2rem;
        color: #fff;
    }
    .contact-info p,
    .contact-info a {
        font-size: 1.1rem;
        margin-bottom: 0.6rem;
        color: #d1d5db;
    }
    .contact-info a:hover {
        color: #ff6a3d;
        text-decoration: none;
    }
    iframe {
        border-radius: 14px;
        box-shadow: 0 10px 20px rgba(0,0,0,0.4);
        width: 100%;
        min-height: 280px;
        margin-top: 1rem;
    }
    footer {
        background: linear-gradient(90deg, #ff6a3d, #ffb347, #ff6a3d);
        padding: 2.5rem 1rem;
        text-align: center;
        color: #fff;
        font-size: 1rem;
        font-weight: 700;
        letter-spacing: 0.1em;
        box-shadow: 0 -4px 15px rgba(255, 106, 61, 0.7);
        margin-top: 6rem;
        border-radius: 12px 12px 0 0;
        user-select: none;
        transition: background 0.3s ease;
    }
    footer:hover {
        background: linear-gradient(90deg, #ffb347, #ff6a3d, #ffb347);
        box-shadow: 0 -6px 20px rgba(255, 181, 71, 0.9);
    }
    @media (max-width: 768px) {
        .hero-content h1 {
        font-size: 2.4rem;
        }
        .hero-content p {
        font-size: 1rem;
        }
        .services {
        padding: 2rem 1rem;
        }
        .about {
        margin: 2rem 1rem;
        }
    }
</style>
</head>
<body>
    <section class="hero">
        <div class="hero-content">
        <h1>Top Range Motors</h1>
        <p>Your Trusted Partner for Used Cars, Repairs & Transport Support</p>
        <a href="#services" class="btn btn-accent me-3">Explore Services</a>
        <a href="#contact" class="btn btn-outline-light">Contact Us</a>
        </div>
    </section>
    <section class="about" id="about">
        <h2 class="section-title">About Us</h2>
        <p>
        At Top Range Motors, we are committed to providing quality used cars,
        expert repairs, and seamless transport support. With years of experience,
        our dedicated team ensures your automotive needs are met with professionalism and care.
        </p>
    </section>
    <section class="services-section" id="services">
        <div class="services-container">
            <h2 class="section-title">Our Services</h2>

            <div class="services-grid">
            <div class="service-card">
                <div class="service-icon"><i class="fas fa-car"></i></div>
                <h3>Used Car Sales</h3>
                <p>Wide selection of inspected, certified vehicles with full history.</p>
            </div>
            <div class="service-card">
                <div class="service-icon"><i class="fas fa-tools"></i></div>
                <h3>Maintenance & Repair</h3>
                <p>Expert servicing and repair solutions to keep your car running smoothly.</p>
            </div>
            <div class="service-card">
                <div class="service-icon"><i class="fas fa-truck-moving"></i></div>
                <h3>Transport Support</h3>
                <p>Efficient logistics and vehicle support tailored to your needs.</p>
            </div>
            <div class="service-card">
                <div class="service-icon"><i class="fas fa-briefcase"></i></div>
                <h3>Consultation</h3>
                <p>Professional advice on car buying, selling, and maintenance plans.</p>
            </div>
            </div>
        </div>
    </section>
    <section class="gallery" id="gallery">
        <h2 class="section-title">Gallery</h2>
        <img src="{{ asset('frontend/images/car1.jpg') }}" alt="Car 1" />
        <img src="{{ asset('frontend/images/car2.jpg') }}" alt="Car 2" />
        <img src="{{ asset('frontend/images/car3.jpg') }}" alt="Car 3" />
    </section>
  <hr>
    <section class="contact" id="contact">
        <h2>Contact Us</h2>
        <div class="contact-info mb-4">
        <p><i class="fas fa-phone"></i> Phone: +44 (0) 121 285 1875</p>
        <p><i class="fas fa-envelope"></i> Email: info@toprangemotors.com</p>
        <p><i class="fas fa-map-marker-alt"></i>Address: 11B Oxhill Road, Shirley, Solihull, England, B90 1LR</p>
        </div>
        <iframe src="https://maps.google.com/maps?q=11B%20Oxhill%20Road,%20Shirley,%20Solihull,%20England,%20B90%201LR&z=15&ie=UTF8&iwloc=&output=embed" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>

    <footer>
        &copy; {{ date('Y') }} Top Range Motors. All Rights Reserved.
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
