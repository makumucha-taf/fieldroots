<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FieldRoots AGRI CO. | Contact Us</title>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Playfair+Display:ital,wght@0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- Header / Navigation Bar -->
    <header class="navbar">
        <div class="logo">
            <div class="logo-icon">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#e1a427" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10Z"></path>
                    <path d="M2 21c0-3 1.85-5.36 5.08-6C9.5 14.52 12 13 13 12"></path>
                </svg>
            </div>
            <div class="logo-text">
                <span class="brand-name">FieldRoots</span>
                <span class="brand-sub">AGRI CO.</span>
            </div>
        </div>

        <nav class="nav-links">
            <a href="index.html" class="nav-item">Home</a>
            <a href="products.php" class="nav-item">Products</a>
            <a href="about.html" class="nav-item">About Us</a>
            <a href="contact.php" class="nav-item active">Contact</a>
        </nav>

        <div class="nav-actions">
            <a href="products.php"><button class="btn btn-order">Order Now</button></a>
        </div>
    </header>

    <!-- Page Title & Subtitle -->
    <section class="contact-header">
        <div class="contact-header-container">
            <span class="section-tagline">GET IN TOUCH</span>
            <h3 class="contact-title">Contact Us</h3>
        </div>
    </section>

    <!-- Main Contact Section -->
    <section class="contact-main">
        <div class="contact-grid-container">

            <!-- Contact Form -->
            <div class="contact-form-wrapper">
                <?php if (isset($_GET['success'])): ?>
                    <div style="color: green; margin-bottom: 15px;">
                        Thank you! Your message has been sent successfully.
                    </div>
                <?php elseif (isset($_GET['error'])): ?>
                    <div style="color: red; margin-bottom: 15px;">
                        Please fill in all reqired fields!
                    </div>
                <?php endif; ?>
                <form class="contact-form" action="process_form.php" method="POST">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="fullname">FULL NAME *</label>
                            <input type="text" id="fullname" name="fullname" placeholder="Tafadzwa Makumucha" required>
                        </div>
                        <div class="form-group">
                            <label for="email">EMAIL ADDRESS *</label>
                            <input type="email" id="email" name="email" placeholder="tmakumucha1@fieldroots.co.zw" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="message">MESSAGE *</label>
                        <textarea id="message" name="message" rows="6" placeholder="Tell us about your farm, your needs, or your question..." required></textarea>
                    </div>

                    <button type="submit" class="btn btn-submit-message">Send Message</button>
                    <p class="form-response-note">We respond within one business day · Mon–Sat</p>
                </form>
            </div>

            <!-- Dark Green - Farm details -->
            <div class="farm-details-card">
                
                <div class="details-group">
                    <span class="details-label">📍 ADDRESS</span>
                    <p>1942 Boomin Street</p>
                    <p>Harare, Mashonaland Province</p>
                    <p>Zimbabwe</p>
                </div>

                <div class="details-group">
                    <span class="details-label">📞 PHONE</span>
                    <p><a href="tel:+263714575717">+254 714 575 717</a></p>
                </div>

                <div class="details-group">
                    <span class="details-label">✉️ EMAIL</span>
                    <p><a href="mailto:info@fieldroots.co.zw">info@fieldroots.co.zw</a></p>
                </div>

                <div class="details-group">
                    <span class="details-label">🕒 HOURS</span>
                    <p>Monday – Friday: 7:00am – 5:00pm</p>
                    <p>Saturday: 8:00am – 1:00pm</p>
                </div>
            </div>

        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section">
        <div class="faq-container">
            <span class="section-tagline">FAQ</span>
            <h2 class="faq-heading">Common questions</h2>

            <div class="faq-grid">

                <!-- Q1 -->
                <div class="faq-item">
                    <h4 class="faq-question">What is your minimum order quantity?</h4>
                    <p class="faq-answer">
                        For most products, the minimum order is one bag or pack. Bulk discounts apply from 500 kg or 50 units.
                    </p>
                </div>

                <!-- Q2 -->
                <div class="faq-item">
                    <h4 class="faq-question">Do you deliver outside Mashonaland Province?</h4>
                    <p class="faq-answer">
                        Yes — we deliver nationwide via trusted logistics partners. Delivery costs vary by distance. Free delivery for orders above US$1,000 within 100 km.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="site-footer">
        <div class="footer-top">
            <!-- Brand Info Column -->
            <div class="footer-col brand-col">
                <div class="logo">
                    <div class="logo-icon footer-logo-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10Z"></path>
                            <path d="M2 21c0-3 1.85-5.36 5.08-6C9.5 14.52 12 13 13 12"></path>
                        </svg>
                    </div>
                    <div class="logo-text">
                        <span class="brand-name light-text">FieldRoots</span>
                        <span class="brand-sub light-sub">AGRI CO.</span>
                    </div>
                </div>
                <p class="footer-description">
                    Rooted in the soil. Committed to your yield. Serving farmers across Zimbabwe since 2020.
                </p>
            </div>

            <!-- Navigate Links Column -->
            <div class="footer-col">
                <h4 class="footer-heading">Quick Links</h4>
                <ul class="footer-links">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="products.php">Products</a></li>
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>

            <!-- Products Column -->
            <div class="footer-col">
                <h4 class="footer-heading">Products</h4>
                <ul class="footer-links">
                    <li><a href="#">Fresh Produce</a></li>
                    <li><a href="#">Seeds & Grains</a></li>
                    <li><a href="#">Agri Inputs</a></li>
                    <li><a href="#">Farm Equipment</a></li>
                </ul>
            </div>

            <!-- Contact & Location Column -->
            <div class="footer-col">
                <h4 class="footer-heading">FIND US</h4>
                <address class="footer-contact">
                    <p>1942 Boomin Street</p>
                    <p>Harare, Mashonaland Province, Zimbabwe</p>
                    <p class="contact-info"><a href="tel:+263714575717">+263 714 575 717</a></p>
                    <p class="contact-info"><a href="mailto:info@fieldroots.co.zw">info@fieldroots.co.zw</a></p>
                    <p class="business-hours">Mon–Sat · 7:00am – 5:00pm</p>
                </address>
            </div>
        </div>

        <!-- Footer Bottom Bar -->
        <div class="footer-bottom">
            <p class="copyright">&copy; 2026 FieldRoots Agri Co. Ltd. All rights reserved.</p>
            <div class="legal-links">
                <a href="#">Privacy Policy</a>
                <a href="#">Terms of Sale</a>
                <a href="#">Refund Policy</a>
            </div>
        </div>
    </footer>
    <script src="script.js"></script>
</body>
</html>
