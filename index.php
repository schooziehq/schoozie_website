<?php
$site_name = "Schoozie";
$year = date("Y");
require_once 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include '_analytics.php'; ?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Schoozie - Take Your School Digital in Minutes</title>
<meta name="description" content="Schoozie helps Indian schools go digital with professional school websites, dynamic CMS, and school ERP software. Plans starting at ₹<?php echo $erp_basic_quarterly; ?> per quarter. WhatsApp support included.">
<meta name="keywords" content="school website india, school ERP software india, school management software, dynamic school website, school CMS india, school website design india, urdu medium school website, hindi medium school website, school ERP roorkee, school website uttarakhand, affordable school website india">
<meta name="robots" content="index, follow">
<link rel="canonical" href="https://schoozie.com/">
<link rel="icon" type="image/png" href="assets/_fonts/logo.png">
<link rel="icon" type="image/svg+xml" href="assets/svg/schoozie-logo.svg">
<link rel="apple-touch-icon" href="assets/_fonts/logo.png">
<!-- Open Graph -->
<meta property="og:type" content="website">
<meta property="og:title" content="Schoozie - School Website & ERP Software for Indian Schools">
<meta property="og:description" content="Schoozie helps Indian schools go digital with professional school websites, dynamic CMS, and school ERP software. Plans starting at ₹<?php echo $erp_basic_quarterly; ?> per quarter.">
<meta property="og:url" content="https://schoozie.com/">
<meta property="og:image" content="https://schoozie.com/assets/og-image.png">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:image:type" content="image/png">
<meta property="og:image:alt" content="Schoozie - School Websites, CMS & ERP Software for Indian Schools">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Schoozie - School Website & ERP Software for Indian Schools">
<meta name="twitter:description" content="Schoozie helps Indian schools go digital with professional school websites, dynamic CMS, and school ERP software. Plans starting at ₹<?php echo $erp_basic_quarterly; ?> per quarter.">
<meta name="twitter:image" content="https://schoozie.com/assets/og-image.png">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="dns-prefetch" href="https://cdnjs.cloudflare.com">
<link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700;900&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<link rel="stylesheet" href="css/global.css?v=<?php echo filemtime('css/global.css'); ?>">
<link rel="stylesheet" href="css/index-v2.css?v=<?php echo filemtime('css/index-v2.css'); ?>">
</head>
<body class="page-home">

<?php $active_page = 'home'; include '_header.php'; ?>

<!-- HERO - banner as backdrop, text overlay (fits viewport) -->
<section class="v2-hero">
  <div class="v2-hero-bg">
    <img src="assets/png/hero-banner.png" alt="Schoozie - students and staff using the smart school platform" loading="eager">
  </div>
  <div class="v2-hero-text">
    <div class="v2-hero-tag"><span class="dot"></span><span>India's Smart School Platform</span></div>
    <h1>Everything Your School Needs.<br><span class="grad">In One Place.</span></h1>
    <p class="lead">One simple platform for attendance, fees, staff, results, communication and more - built for modern schools.</p>
    <div class="v2-hero-btns">
      <a href="https://wa.me/<?php echo $contact_whatsapp; ?>?text=Hi%2C+I%27d+like+to+book+a+free+demo+of+Schoozie." target="_blank" rel="noopener" class="v2-btn-primary">
        <i class="fa-brands fa-whatsapp"></i> Book Free Demo
      </a>
      <a href="#section-1" class="v2-btn-outline">
        <i class="fa-solid fa-compass"></i> Explore Features
      </a>
    </div>
  </div>
  <a href="#section-1" class="v2-scroll-hint">Scroll to explore</a>
</section>

<!-- SECTION 1 - Run Your Entire School Smoothly -->
<section class="v2-section" id="section-1" data-num="01">
  <div class="v2-section-grid">
    <div class="v2-section-img">
      <img src="assets/png/section-1.png" alt="One platform, every school need - ERP dashboards and modules" loading="lazy">
    </div>
    <div class="v2-section-content">
      <span class="v2-section-num"><b>01</b>Everything Together</span>
      <h2>Run Your Entire School <span class="grad">Smoothly.</span></h2>
      <p class="sub">From attendance and academics to transport and communication - Schoozie helps every part of your school stay connected.</p>
      <div class="v2-highlights">
        <span class="v2-feature"><i class="fa-solid fa-user-graduate"></i>Student Portal</span>
        <span class="v2-feature cyan"><i class="fa-solid fa-chalkboard-user"></i>Staff Portal</span>
        <span class="v2-feature green"><i class="fa-solid fa-receipt"></i>Fee Management</span>
        <span class="v2-feature amber"><i class="fa-solid fa-trophy"></i>Results</span>
      </div>
    </div>
  </div>
</section>

<!-- SECTION 2 - Make Teaching & Learning Easier -->
<section class="v2-section reverse" id="section-2" data-num="02">
  <div class="v2-section-grid">
    <div class="v2-section-img">
      <img src="assets/png/section-2.png" alt="Teachers and students using Schoozie - smarter schools, happier communities" loading="lazy">
    </div>
    <div class="v2-section-content">
      <span class="v2-section-num"><b>02</b>Teaching Made Easy</span>
      <h2>Make Teaching &amp; Learning <span class="grad">Easier.</span></h2>
      <p class="sub">Help teachers manage classes, timetables, homework and daily activities with less manual work and better coordination.</p>
      <div class="v2-highlights">
        <span class="v2-feature amber"><i class="fa-solid fa-calendar-days"></i>Auto Timetable</span>
        <span class="v2-feature"><i class="fa-solid fa-book-open"></i>Homework Diary</span>
        <span class="v2-feature cyan"><i class="fa-solid fa-file-circle-check"></i>Marksheets &amp; Results</span>
        <span class="v2-feature green"><i class="fa-solid fa-arrow-right-arrow-left"></i>Teacher Substitution</span>
      </div>
    </div>
  </div>
</section>

<!-- SECTION 3 - Keep Parents Updated in Real Time -->
<section class="v2-section" id="section-3" data-num="03">
  <div class="v2-section-grid">
    <div class="v2-section-img">
      <img src="assets/png/section-3.png" alt="Every update, every moment - parents always connected through Schoozie" loading="lazy">
    </div>
    <div class="v2-section-content">
      <span class="v2-section-num"><b>03</b>Parents Connected</span>
      <h2>Keep Parents Updated <span class="grad">in Real Time.</span></h2>
      <p class="sub">Send attendance alerts, homework updates, announcements and important messages instantly through the Schoozie app.</p>
      <div class="v2-highlights">
        <span class="v2-feature pink"><i class="fa-solid fa-bell"></i>Attendance Updates</span>
        <span class="v2-feature green"><i class="fa-solid fa-book-bookmark"></i>Daily Diary</span>
        <span class="v2-feature amber"><i class="fa-solid fa-indian-rupee-sign"></i>Fee Reminders</span>
        <span class="v2-feature cyan"><i class="fa-solid fa-location-dot"></i>Live Bus Location</span>
      </div>
    </div>
  </div>
</section>

<!-- SECTION 4 - Manage School Operations -->
<section class="v2-section reverse" id="section-4" data-num="04">
  <div class="v2-section-grid">
    <div class="v2-section-img">
      <img src="assets/png/section-4.png" alt="Principal managing school operations on Schoozie dashboard" loading="lazy">
    </div>
    <div class="v2-section-content">
      <span class="v2-section-num"><b>04</b>Operations Made Simple</span>
      <h2>Manage School Operations <span class="grad">Without the Chaos.</span></h2>
      <p class="sub">Handle payroll, staff management, reports, schedules and administration from one organized system.</p>
      <div class="v2-highlights">
        <span class="v2-feature amber"><i class="fa-solid fa-sack-dollar"></i>Payroll &amp; Salaries</span>
        <span class="v2-feature cyan"><i class="fa-solid fa-users-gear"></i>Staff Management</span>
        <span class="v2-feature"><i class="fa-solid fa-chart-line"></i>Financial Reports</span>
        <span class="v2-feature green"><i class="fa-solid fa-file-signature"></i>Auto TC &amp; Certificates</span>
      </div>
    </div>
  </div>
</section>

<!-- SECTION 5 - Strong Digital Presence -->
<section class="v2-section" id="section-5" data-num="05">
  <div class="v2-section-grid">
    <div class="v2-section-img">
      <img src="assets/png/section-5.png" alt="Modern school website, ERP and admissions - Schoozie unified digital presence" loading="lazy">
    </div>
    <div class="v2-section-content">
      <span class="v2-section-num"><b>05</b>Digital Presence</span>
      <h2>Give Your School a <span class="grad">Strong Digital Presence.</span></h2>
      <p class="sub">From websites and admissions to communication and ERP, everything works together in one connected platform.</p>
      <div class="v2-highlights">
        <span class="v2-feature cyan"><i class="fa-solid fa-globe"></i>School Website</span>
        <span class="v2-feature green"><i class="fa-solid fa-user-plus"></i>Online Admission</span>
        <span class="v2-feature amber"><i class="fa-solid fa-magnifying-glass"></i>Result Lookup</span>
        <span class="v2-feature pink"><i class="fa-solid fa-address-book"></i>New Enquiries</span>
      </div>
    </div>
  </div>
</section>

<!-- PLAN CARDS -->
<section class="v2-plans" id="plans">
  <div class="v2-plans-head">
    <span class="v2-plans-eyebrow"><i class="fa-solid fa-sparkles"></i> Pricing</span>
    <h2>Pick the <span class="grad">right plan</span> for your school</h2>
    <p>Four ways to go digital. Pay only for what you need.</p>
  </div>
  <div class="v2-plans-grid">
    <a href="websites.php#static" class="v2-plan-card amber">
      <span class="v2-plan-tag">Website</span>
      <div class="v2-plan-head">
        <div class="v2-plan-icon"><i class="fa-solid fa-desktop"></i></div>
        <h3>Static Website</h3>
      </div>
      <p>Professional school website - we manage everything for you.</p>
      <div class="v2-plan-price">From <strong>Rs. <?php echo $offer_active ? $static_offer_price : $static_regular_price; ?></strong></div>
      <span class="v2-plan-arrow">View details <i class="fa-solid fa-arrow-right"></i></span>
    </a>
    <a href="websites.php#dynamic" class="v2-plan-card pink">
      <span class="v2-plan-tag">Website + CMS</span>
      <div class="v2-plan-head">
        <div class="v2-plan-icon"><i class="fa-solid fa-bolt"></i></div>
        <h3>Dynamic Website</h3>
      </div>
      <p>Your own admin panel - update news, events &amp; gallery yourself.</p>
      <div class="v2-plan-price">From <strong>Rs. <?php echo $offer_active ? $dynamic_offer_price : $dynamic_regular_price; ?></strong></div>
      <span class="v2-plan-arrow">View details <i class="fa-solid fa-arrow-right"></i></span>
    </a>
    <a href="erp.php" class="v2-plan-card cyan popular coming-soon">
      <span class="v2-plan-tag">Coming Soon</span>
      <div class="v2-plan-head">
        <div class="v2-plan-icon"><i class="fa-solid fa-layer-group"></i></div>
        <h3>School ERP</h3>
      </div>
      <p>Complete school management - fees, attendance, exams &amp; more.</p>
      <div class="v2-plan-price">From <strong>Rs. <?php echo $erp_basic_quarterly; ?></strong>/quarter</div>
      <span class="v2-plan-arrow">Preview &amp; notify me <i class="fa-solid fa-arrow-right"></i></span>
    </a>
    <a href="combo.php" class="v2-plan-card gold coming-soon">
      <span class="v2-plan-tag">Coming Soon</span>
      <div class="v2-plan-head">
        <div class="v2-plan-icon"><i class="fa-solid fa-rocket"></i></div>
        <h3>Website + ERP Combo</h3>
      </div>
      <p>Both products together - biggest savings, maximum convenience.</p>
      <div class="v2-plan-price"><strong><?php echo $combo_website_discount; ?>% OFF</strong> website</div>
      <span class="v2-plan-arrow">Preview &amp; notify me <i class="fa-solid fa-arrow-right"></i></span>
    </a>
  </div>
</section>

<!-- FINAL CTA -->
<section class="v2-final-cta">
  <h2>Ready to <span class="grad">Simplify School Management?</span></h2>
  <p>See how Schoozie helps schools save time, stay organized and improve communication.</p>
  <div class="v2-final-cta-btns">
    <a href="https://wa.me/<?php echo $contact_whatsapp; ?>?text=Hi%2C+I%27d+like+to+schedule+a+demo+of+Schoozie." target="_blank" rel="noopener" class="v2-btn-primary">
      <i class="fa-brands fa-whatsapp"></i> Schedule Demo
    </a>
    <a href="contact.php" class="v2-btn-outline">
      <i class="fa-solid fa-message"></i> Contact Us
    </a>
  </div>
</section>

<?php include '_footer.php'; ?>

<!-- JSON-LD STRUCTURED DATA -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "LocalBusiness",
      "name": "Schoozie",
      "description": "Schoozie provides professional school websites, dynamic CMS platforms, and ERP software for schools across India.",
      "url": "https://schoozie.com",
      "logo": "https://schoozie.com/assets/svg/schoozie-logo.svg",
      "telephone": "+<?php echo $contact_whatsapp; ?>",
      "email": "<?php echo $contact_email; ?>",
      "address": {
        "@type": "PostalAddress",
        "addressLocality": "<?php echo $contact_city; ?>",
        "addressRegion": "<?php echo $contact_region; ?>",
        "addressCountry": "IN"
      },
      "sameAs": [],
      "areaServed": "IN",
      "priceRange": "₹₹"
    },
    {
      "@type": "SoftwareApplication",
      "name": "Schoozie School ERP",
      "applicationCategory": "EducationalApplication",
      "operatingSystem": "Web",
      "offers": {
        "@type": "Offer",
        "priceCurrency": "INR",
        "price": "<?php echo str_replace(',','',$erp_basic_quarterly); ?>"
      },
      "description": "Cloud-based school ERP software for student management, fee tracking, timetable, attendance, and more.",
      "url": "https://schoozie.com/erp.php"
    }
  ]
}
</script>

</body>
</html>
