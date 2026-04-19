<?php
/**
 * _footer.php — Shared site footer
 *
 * Requires config.php to be loaded (for $contact_* and $demo_url variables)
 * Optional: $plan (array) — if set, WhatsApp message includes the plan name
 */
$wa_footer_text = isset($plan)
  ? 'Hi%2C+I%27m+interested+in+' . urlencode($plan['name']) . '+from+Schoozie.'
  : 'Hi%2C+I%27m+interested+in+Schoozie+for+my+school.';
?>
<footer class="site-footer" itemscope itemtype="https://schema.org/Organization">
  <div class="footer-grid">

    <!-- BRAND -->
    <div class="footer-col">
      <a href="index.php" class="footer-brand-logo">
        <img src="assets/svg/schoozie-logo.svg" alt="Schoozie Logo">
        Schoozie
      </a>
      <p class="footer-desc">Schoozie helps schools across India go digital — with professional school websites, dynamic CMS platforms, and powerful ERP software tailored for modern institutions.</p>
      <p class="footer-keywords" aria-hidden="true">school website design india · school management software · school ERP system · school CMS · digital school solutions</p>
    </div>

    <!-- OUR PLANS -->
    <div class="footer-col">
      <h3>Our Plans</h3>
      <nav aria-label="Plans navigation">
        <ul>
          <li><a href="static-web.php"><i class="fa-solid fa-desktop"></i> Static School Website</a></li>
          <li><a href="dynamic-web.php"><i class="fa-solid fa-bolt"></i> Dynamic Website + CMS</a></li>
          <li><a href="erp.php"><i class="fa-solid fa-layer-group"></i> School ERP Software</a></li>
          <li><a href="combo.php"><i class="fa-solid fa-fire"></i> Website + ERP Combo</a></li>
        </ul>
      </nav>
    </div>

    <!-- QUICK LINKS -->
    <div class="footer-col">
      <h3>Quick Links</h3>
      <ul>
        <li><a href="index.php#pricing"><i class="fa-solid fa-angle-right"></i> View All Plans</a></li>
        <li><a href="why.php"><i class="fa-solid fa-angle-right"></i> Why Schoozie</a></li>
        <li><a href="about.php"><i class="fa-solid fa-angle-right"></i> About Schoozie</a></li>
        <li><a href="contact.php"><i class="fa-solid fa-angle-right"></i> Contact Us</a></li>
        <li><a href="<?php echo $demo_url; ?>" target="_blank" rel="noopener"><i class="fa-solid fa-angle-right"></i> Live Demo</a></li>
      </ul>
    </div>

    <!-- CONTACT -->
    <div class="footer-col">
      <h3>Contact Us</h3>
      <address style="font-style:normal">
        <div class="footer-contact-item">
          <i class="fa-solid fa-location-dot"></i>
          <span itemprop="address" itemscope itemtype="https://schema.org/PostalAddress">
            <span itemprop="addressLocality"><?php echo $contact_city; ?></span>,
            <span itemprop="addressRegion"><?php echo $contact_region; ?></span>,
            <span itemprop="addressCountry"><?php echo $contact_country; ?></span>
          </span>
        </div>
        <div class="footer-contact-item">
          <i class="fa-solid fa-envelope"></i>
          <a href="mailto:<?php echo $contact_email; ?>" itemprop="email"><?php echo $contact_email; ?></a>
        </div>
      </address>
      <a class="footer-wa-btn"
         href="https://wa.me/<?php echo $contact_whatsapp; ?>?text=<?php echo $wa_footer_text; ?>"
         target="_blank" rel="noopener">
        <i class="fa-brands fa-whatsapp"></i> Chat on WhatsApp
      </a>
    </div>

  </div><!-- end footer-grid -->

  <div class="footer-bar">
    <span>&copy; <?php echo date('Y'); ?> <strong>Schoozie</strong> &mdash; Beyond Education Systems. All Rights Reserved.</span>
    <div class="footer-bar-links">
      <a href="#">Privacy Policy</a>
      <a href="#">Terms of Use</a>
      <a href="contact.php">Support</a>
    </div>
  </div>
</footer>
