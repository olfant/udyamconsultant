<!-- footer -->
<style>
.new-footer {
    background-color: #0B1E59; /* Premium Dark Navy */
    color: rgba(255, 255, 255, 0.7);
    font-family: 'Inter', sans-serif;
    border-top: 4px solid var(--theme-orange);
    padding: 60px 0 0;
}
.new-footer h5 {
    color: #ffffff;
    font-weight: 700;
    margin-bottom: 25px;
    font-size: 16px;
    letter-spacing: 1px;
    /* text-transform: uppercase; Removed to match image */
    position: relative;
    padding-bottom: 10px;
}
.new-footer p, .new-footer a {
    color: rgba(255, 255, 255, 0.8);
    font-size: 13px;
    line-height: 1.8;
}
.new-footer ul {
    list-style: none;
    padding: 0;
    margin: 0;
}
.new-footer ul li {
    margin-bottom: 8px;
}
.new-footer ul li a {
    text-decoration: none;
    transition: all 0.3s ease;
    display: inline-block;
    font-size: 13px;
}
@media (max-width: 768px) {
    .new-footer h5 {
        margin-top: 20px;
        margin-bottom: 15px;
    }
    .new-footer .mb-5 {
        margin-bottom: 1.5rem !important;
    }
    .new-footer {
        padding: 30px 0 0;
    }
}
.new-footer ul li a:hover {
    color: var(--theme-orange);
    transform: translateX(5px);
}
.footer-social a {
    display: inline-flex;
    justify-content: center;
    align-items: center;
    width: 40px;
    height: 40px;
    background: rgba(255, 255, 255, 0.05);
    color: #ffffff;
    border-radius: 50%;
    margin-right: 12px;
    transition: all 0.3s ease;
    text-decoration: none;
    font-size: 16px;
    border: 1px solid rgba(255, 255, 255, 0.1);
}
.footer-social a:hover {
    background: var(--theme-orange);
    border-color: var(--theme-orange);
    color: #fff;
    transform: translateY(-3px);
    box-shadow: 0 4px 10px rgba(255, 152, 0, 0.3);
}
.footer-promo {
    background-color: var(--theme-orange); /* Orange background per image */
    padding: 15px 0;
    color: #ffffff;
    font-size: 13px;
    font-weight: 500;
    text-align: center;
    margin-top: 40px;
}
.footer-copyright {
    background-color: var(--theme-green); /* Green background per image */
    padding: 10px 0;
    color: #ffffff;
    font-size: 13px;
    text-align: center;
}
</style>

<footer class="new-footer">
    <div class="container-fluid px-lg-5">
        <div class="row justify-content-center">
            
            <!-- Column 1: Quick Links -->
            <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                <h5>Quick Links</h5>
                <ul>
                    <li><a href="/udyam-online-registration.php">Udyam Information Form</a></li>
                    <li><a href="/udyam-matters-experts-registration.php">Udyam Matters Experts Registration</a></li>
                </ul>
            </div>

            <!-- Column 2: Useful Links -->
            <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                <h5>Useful Links</h5>
                <ul>
                    <li><a href="/about-us.php">About Us</a></li>
                    <li><a href="/udyam-online-registration.php">Udyam Information Form</a></li>
                    <li><a href="/privacy-policy.php">Privacy Policy</a></li>
                    <li><a href="/terms-and-condition.php">Terms &amp; Conditions</a></li>
                    <li><a href="/cancellation-and-refund-policy.php">Refund Policy</a></li>
                    <li><a href="/list-of-experts.php">List Of Experts</a></li>
                    <li><a href="#">Pricing</a></li>
                </ul>
            </div>

            <!-- Column 3: Contact -->
            <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                <h5>Contact</h5>
                <p>
                    Email: care@<?php echo $webName; ?><br>
                    Phone: +91 <?php echo $webNumber; ?>
                </p>
                <!-- Social Icons (Commented out per request) -->
                <!--
                <div class="footer-social mt-4">
                    <a href="https://www.facebook.com/profile.php?id=61591439595616" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://x.com/UdyamGov" target="_blank"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.instagram.com/udyamgov.offical/" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.youtube.com/@UdyamGov" target="_blank"><i class="fab fa-youtube"></i></a>
                </div>
                -->
            </div>

            <!-- Column 4: About Us -->
            <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                <h5>About Us</h5>
                <p>
                    <?php echo $webName; ?> is a trusted platform that helps businesses by connecting them to UDYAM Matters Experts.<br>
                    These Experts provides UDYAM Matters Consultancy to avail various benefits that government offers to UDYAM Registered units.
                </p>
            </div>
        </div>
    </div>

    <!-- Promo Banner (Orange) -->
    <div class="footer-promo">
        <div class="container-fluid px-lg-5">
            Our advertising on Google Ads is primarily focused on offering consultancy services through our private platform, udyamconsultant.com. The use of keywords associated with government documents and services is only incidental and intended to help us understand the requirements of potential clients, rather than to directly promote or offer any government documents or services.
        </div>
    </div>

    <!-- Copyright Banner (Green) -->
    <div class="footer-copyright">
        &copy; 2025 All Rights Reserved.
    </div>
</footer>

<!-- sticky navbar js -->
<script src="/assets/js/sticky-nav.js"></script>
<script>
  document.addEventListener("DOMContentLoaded", function() {
    const udyamInputs = document.querySelectorAll('input[name="udyam_number"], input[name="uam_number"]');
    const warning = document.getElementById("udyam_warning");
    const pattern = /^UDYAM-[A-Z]{2}-\d{2}-\d{7}$/;

    udyamInputs.forEach(function(input) {
        input.placeholder = "UDYAM-State Code (2 Letters)-District Code (2 Digit Numeric)-7 Digit Numeric Code";
        
        input.addEventListener("input", function() {
            this.value = this.value.replace(/[^A-Z0-9-]/gi, '').toUpperCase();
            if (pattern.test(this.value) && warning) {
                warning.style.display = "none";
            }
        });

        input.addEventListener("blur", function() {
            if (warning) {
                if (this.value && !pattern.test(this.value)) {
                    warning.style.display = "inline";
                } else {
                    warning.style.display = "none";
                }
            }
        });
    });
  });
</script>

<?php
 // edittable form
  include_once('editable/edit-submit-form.php');
?>