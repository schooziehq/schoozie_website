<?php
$site_name = "Schoozie";
$year = date("Y");
require_once 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Schoozie — Take Your School Digital in Minutes</title>
<meta name="description" content="Schoozie helps Indian schools go digital with professional school websites, dynamic CMS, and school ERP software. Starting at ₹10 per student per month. WhatsApp support included.">
<meta name="keywords" content="school website india, school ERP software india, school management software, dynamic school website, school CMS india, school website design india, urdu medium school website, hindi medium school website, school ERP roorkee, school website uttarakhand, affordable school website india">
<meta name="robots" content="index, follow">
<link rel="canonical" href="https://schoozie.in/">
<link rel="icon" type="image/svg+xml" href="assets/svg/schoozie-logo.svg">
<link rel="apple-touch-icon" href="assets/svg/schoozie-logo.svg">
<!-- Open Graph -->
<meta property="og:type" content="website">
<meta property="og:title" content="Schoozie — School Website & ERP Software for Indian Schools">
<meta property="og:description" content="Schoozie helps Indian schools go digital with professional school websites, dynamic CMS, and school ERP software. Starting at ₹10 per student per month.">
<meta property="og:url" content="https://schoozie.in/">
<meta property="og:image" content="https://schoozie.in/assets/svg/schoozie-logo.svg">
<link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700;900&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<link rel="stylesheet" href="css/global.css">
<link rel="stylesheet" href="css/index.css">
</head>
<body>

<?php $active_page = 'home'; include '_header.php'; ?>

<!-- HERO -->
<section class="hero">
  <div class="hero-left">
    <div class="hero-tag"><span class="dot"></span><span>India's Smart School Platform</span></div>
    <h1>Your School.<br><span>Digital.</span> In Minutes.</h1>
    <p>From a simple school website to a full ERP system — everything your school needs to go digital, in one place.</p>
    <div class="hero-btns">
      <button class="btn-primary" onclick="document.getElementById('pricing').scrollIntoView({behavior:'smooth'})">See Pricing Plans</button>
      <button class="btn-outline" onclick="document.getElementById('features').scrollIntoView({behavior:'smooth'})">Learn More</button>
    </div>

    <div class="hero-stats">
      <div class="hero-stat">
        <span class="hs-num">4+</span>
        <span class="hs-label">Digital Products</span>
      </div>
      <div class="hs-sep"></div>
      <div class="hero-stat">
        <span class="hs-num">₹10</span>
        <span class="hs-label">Per Student / Month</span>
      </div>
      <div class="hs-sep"></div>
      <div class="hero-stat">
        <span class="hs-num">Free</span>
        <span class="hs-label">Trial Available</span>
      </div>
      <div class="hs-sep"></div>
      <div class="hero-stat">
        <span class="hs-num">100%</span>
        <span class="hs-label">Custom Built</span>
      </div>
    </div>

    <div class="hero-trust">
      <i class="fa-solid fa-circle-check" style="color:#22c55e"></i> No hidden fees
      <i class="fa-solid fa-circle-check" style="color:#22c55e"></i> No long-term contracts
      <i class="fa-solid fa-circle-check" style="color:#22c55e"></i> WhatsApp support
    </div>
  </div>
  <!-- HERO VISUAL -->
  <div class="hero-visual">
    <div class="hv-glow"></div>
    <!-- neural network lines -->
    <svg class="hv-lines" viewBox="0 0 540 540" xmlns="http://www.w3.org/2000/svg">
      <defs>
        <filter id="lg1"><feGaussianBlur stdDeviation="2" result="b"/><feMerge><feMergeNode in="b"/><feMergeNode in="SourceGraphic"/></feMerge></filter>
        <filter id="lg2"><feGaussianBlur stdDeviation="2" result="b"/><feMerge><feMergeNode in="b"/><feMergeNode in="SourceGraphic"/></feMerge></filter>
        <filter id="lg3"><feGaussianBlur stdDeviation="2" result="b"/><feMerge><feMergeNode in="b"/><feMergeNode in="SourceGraphic"/></feMerge></filter>
        <filter id="lg4"><feGaussianBlur stdDeviation="2" result="b"/><feMerge><feMergeNode in="b"/><feMergeNode in="SourceGraphic"/></feMerge></filter>
        <filter id="dot-glow"><feGaussianBlur stdDeviation="3" result="b"/><feMerge><feMergeNode in="b"/><feMergeNode in="SourceGraphic"/></feMerge></filter>
      </defs>
      <!-- lines: owl center (270,270) → card centers -->
      <line class="hvl hvl-1" x1="270" y1="270" x2="362" y2="77"  stroke="#f59e0b" filter="url(#lg1)"/>
      <line class="hvl hvl-2" x1="270" y1="270" x2="457" y2="194" stroke="#00b7ff" filter="url(#lg2)"/>
      <line class="hvl hvl-3" x1="270" y1="270" x2="457" y2="347" stroke="#22c55e" filter="url(#lg3)"/>
      <line class="hvl hvl-4" x1="270" y1="270" x2="362" y2="455" stroke="#bf5fff" filter="url(#lg4)"/>
      <line class="hvl hvl-5" x1="270" y1="270" x2="179" y2="455" stroke="#f43f5e" filter="url(#lg1)"/>
      <line class="hvl hvl-6" x1="270" y1="270" x2="87"  y2="347" stroke="#e879f9" filter="url(#lg2)"/>
      <line class="hvl hvl-7" x1="270" y1="270" x2="87"  y2="194" stroke="#f97316" filter="url(#lg3)"/>
      <line class="hvl hvl-8" x1="270" y1="270" x2="179" y2="77"  stroke="#3b82f6" filter="url(#lg4)"/>
      <!-- endpoint dots -->
      <circle class="hvd hvd-1" cx="362" cy="77"  r="3.5" fill="#f59e0b" filter="url(#dot-glow)"/>
      <circle class="hvd hvd-2" cx="457" cy="194" r="3.5" fill="#00b7ff" filter="url(#dot-glow)"/>
      <circle class="hvd hvd-3" cx="457" cy="347" r="3.5" fill="#22c55e" filter="url(#dot-glow)"/>
      <circle class="hvd hvd-4" cx="362" cy="455" r="3.5" fill="#bf5fff" filter="url(#dot-glow)"/>
      <circle class="hvd hvd-5" cx="179" cy="455" r="3.5" fill="#f43f5e" filter="url(#dot-glow)"/>
      <circle class="hvd hvd-6" cx="87"  cy="347" r="3.5" fill="#e879f9" filter="url(#dot-glow)"/>
      <circle class="hvd hvd-7" cx="87"  cy="194" r="3.5" fill="#f97316" filter="url(#dot-glow)"/>
      <circle class="hvd hvd-8" cx="179" cy="77"  r="3.5" fill="#3b82f6" filter="url(#dot-glow)"/>
      <!-- center origin dot -->
      <circle cx="270" cy="270" r="5" fill="rgba(168,85,247,0.6)" filter="url(#dot-glow)"/>
    </svg>
    <img src="assets/svg/schoozie-logo.svg" class="hv-logo" alt="Schoozie">
    <div class="hv-card hv-card-1">
      <i class="fa-solid fa-indian-rupee-sign" style="color:#f59e0b"></i>
      <div><div class="hvc-title">Fee Management</div><div class="hvc-sub">Online & offline</div></div>
    </div>
    <div class="hv-card hv-card-2">
      <i class="fa-solid fa-clipboard-check" style="color:#00b7ff"></i>
      <div><div class="hvc-title">Attendance</div><div class="hvc-sub">Daily, automated</div></div>
    </div>
    <div class="hv-card hv-card-3">
      <i class="fa-solid fa-globe" style="color:#22c55e"></i>
      <div><div class="hvc-title">School Website</div><div class="hvc-sub">Live in minutes</div></div>
    </div>
    <div class="hv-card hv-card-4">
      <i class="fa-solid fa-users-gear" style="color:#bf5fff"></i>
      <div><div class="hvc-title">Staff & Payroll</div><div class="hvc-sub">Manage your team</div></div>
    </div>
    <div class="hv-card hv-card-5">
      <i class="fa-solid fa-users" style="color:#f43f5e"></i>
      <div><div class="hvc-title">Parent Portal</div><div class="hvc-sub">Always in the loop</div></div>
    </div>
    <div class="hv-card hv-card-6">
      <i class="fa-solid fa-user-plus" style="color:#e879f9"></i>
      <div><div class="hvc-title">Admission & TC</div><div class="hvc-sub">Instant TC</div></div>
    </div>
    <div class="hv-card hv-card-7">
      <i class="fa-solid fa-pen-to-square" style="color:#f97316"></i>
      <div><div class="hvc-title">Exam & Results</div><div class="hvc-sub">Auto graded</div></div>
    </div>
    <div class="hv-card hv-card-8">
      <i class="fa-solid fa-chart-bar" style="color:#3b82f6"></i>
      <div><div class="hvc-title">Admin Dashboard</div><div class="hvc-sub">At a glance</div></div>
    </div>
  </div>
</section>

<!-- FEATURES STRIP -->
<section class="features-strip" id="features">
  <div class="fs-item"><i class="fa-solid fa-trophy" style="color:#00b7ff"></i><span>One Step Ahead of Other Schools</span></div>
  <div class="fs-sep"></div>
  <div class="fs-item"><i class="fa-solid fa-chart-line" style="color:#22c55e"></i><span>Watch Your School Grow</span></div>
  <div class="fs-sep"></div>
  <div class="fs-item"><i class="fa-solid fa-handshake" style="color:#bf5fff"></i><span>Parents Trust You More</span></div>
  <div class="fs-sep"></div>
  <div class="fs-item"><i class="fa-solid fa-star" style="color:#f43f5e"></i><span>Your School, Your Pride</span></div>
  <div class="fs-sep"></div>
  <div class="fs-item"><i class="fa-solid fa-tags" style="color:#f59e0b"></i><span>Affordable for Any School</span></div>
</section>

<!-- WHY SCHOOZIE -->
<section class="why-section" id="why">
  <div class="section-head">
    <h2>Why Schools Choose Schoozie</h2>
    <p>We're not a generic web agency. We're built specifically for Indian schools.</p>
  </div>
  <div class="why-grid">
    <div class="why-card">
      <div class="why-icon" style="background:rgba(0,183,255,0.1);color:#00b7ff"><i class="fa-solid fa-indian-rupee-sign"></i></div>
      <h3>Priced for Indian Schools</h3>
      <p>No dollar pricing. No enterprise contracts. Plans designed around what Indian schools actually spend — from small towns to big cities.</p>
    </div>
    <div class="why-card why-card-featured">
      <div class="why-icon" style="background:rgba(168,85,247,0.1);color:#bf5fff"><i class="fa-solid fa-screwdriver-wrench"></i></div>
      <h3>Built for How You Work</h3>
      <p>Urdu medium? CBSE? State board? We've thought about all of it. Multi-language support, school-specific features, nothing generic.</p>
    </div>
    <div class="why-card">
      <div class="why-icon" style="background:rgba(37,211,102,0.1);color:#25d366"><i class="fa-solid fa-headset"></i></div>
      <h3>Real People, Fast Support</h3>
      <p>Not a ticket system. You get a real person on WhatsApp who knows your school setup and responds the same day.</p>
    </div>
  </div>
</section>

<!-- PRICING -->
<section class="pricing" id="pricing">
  <div class="section-head">
    <?php if($offer_active): ?>
    <div class="offer-ribbon">
      <i class="fa-solid fa-fire offer-ribbon-fire"></i>
      <span class="offer-ribbon-text"><?php echo $offer_full; ?></span>
      <span class="offer-ribbon-tag"><i class="fa-solid fa-clock"></i> Ending Soon</span>
    </div>
    <?php endif; ?>
    <h2>Simple, Clear Pricing</h2>
    <p>Pick the plan that fits your school. No hidden charges, no surprises.</p>
  </div>

  <div class="cards">

    <!-- STATIC WEBSITE -->
    <div class="card card-white">
      <div class="c-header">
        <div class="c-title">
          <span class="c-icon"><i class="fa-solid fa-desktop"></i></span>
          <div class="c-name">Static Website</div>
        </div>
        <?php if($offer_active): ?>
        <span class="c-badge badge-offer"><span class="c-badge-inner"><i class="fa-solid fa-tag"></i><strong><?php echo $offer_month; ?></strong><em>Offer</em></span></span>
        <?php endif; ?>
      </div>
      <div class="c-tagline">We build &amp; manage your school website for you.</div>
      <div class="c-price">
        <?php if($offer_active): ?>
        <div class="amount"><span class="rs">Rs.</span> <?php echo $static_offer_price; ?></div>
        <div class="strike">Regular: Rs. <?php echo $static_regular_price; ?></div>
        <span class="c-save">Save Rs. <?php echo $static_saving; ?> this <?php echo $offer_month; ?></span>
        <?php else: ?>
        <div class="amount"><span class="rs">Rs.</span> <?php echo $static_regular_price; ?></div>
        <?php endif; ?>
        <span class="c-domain">* Domain charges excluded</span>
      </div>
      <div class="c-divider"></div>
      <ul class="c-feats">
        <li>Professional school website</li>
        <li>Mobile responsive design</li>
        <li>Content managed by Schoozie</li>
        <li>1 year hosting included</li>
        <li>Renewal: Rs. 4,800/year</li>
      </ul>
      <button class="c-btn btn-red" onclick="window.location='static-web.php'">Get This Plan</button>
      <a href="static-web.php" class="c-link">Full details &amp; terms &rarr;</a>
    </div>

    <!-- DYNAMIC WEBSITE -->
    <div class="card card-pink">
      <div class="c-header">
        <div class="c-title">
          <span class="c-icon"><i class="fa-solid fa-bolt"></i></span>
          <div class="c-name">Dynamic Website</div>
        </div>
        <?php if($offer_active): ?>
        <span class="c-badge badge-popular"><span class="c-badge-inner"><i class="fa-solid fa-bolt"></i><strong><?php echo $offer_month; ?></strong><em>Special</em></span></span>
        <?php endif; ?>
      </div>
      <div class="c-tagline">Your own admin panel — update your site yourself.</div>
      <div class="c-price">
        <?php if($offer_active): ?>
        <div class="amount"><span class="rs">Rs.</span> <?php echo $dynamic_offer_price; ?></div>
        <div class="strike">Regular: Rs. <?php echo $dynamic_regular_price; ?></div>
        <span class="c-save">Save Rs. <?php echo $dynamic_saving; ?> this <?php echo $offer_month; ?></span>
        <?php else: ?>
        <div class="amount"><span class="rs">Rs.</span> <?php echo $dynamic_regular_price; ?></div>
        <?php endif; ?>
        <span class="c-domain">* Domain charges excluded</span>
      </div>
      <div class="c-divider"></div>
      <ul class="c-feats">
        <li>Your own admin login panel</li>
        <li>Manage news, events &amp; gallery</li>
        <li>Online admissions management</li>
        <li>1 year hosting included</li>
        <li>Renewal: Rs. 7,800/year</li>
      </ul>
      <button class="c-btn btn-pink" onclick="window.location='dynamic-web.php'">Get This Plan</button>
      <a href="dynamic-web.php" class="c-link">Full details &amp; terms &rarr;</a>
    </div>

    <!-- ERP -->
    <div class="card card-cyan">
      <div class="coming-soon-ribbon">Coming Soon</div>
      <div class="c-header">
        <div class="c-title">
          <span class="c-icon"><i class="fa-solid fa-school"></i></span>
          <div class="c-name">School ERP</div>
        </div>
        <span class="c-badge badge-hot"><span class="c-badge-inner"><i class="fa-solid fa-star"></i><strong>Most</strong><em>Popular</em></span></span>
      </div>
      <div class="c-tagline">Complete school management — fees, attendance, exams &amp; more.</div>
      <div class="c-price">
        <div class="amount"><span class="rs">Rs.</span> 10</div>
        <div class="per">per student / per month</div>
        <?php /* OFFER DISABLED — uncomment when ERP is ready
        <?php if($offer_active): ?>
        <div class="per" style="margin-top:6px;color:#ccc;font-size:12px">+ One-time setup: <strong style="color:#00c8ff">Rs. <?php echo $erp_offer_setup; ?></strong> <span style="color:#aaa">(<?php echo $offer_month; ?> offer)</span></div>
        <div class="per" style="color:#555;font-size:11px">Regular setup: Rs. <?php echo $erp_regular_setup; ?></div>
        <span class="c-save">Save Rs. <?php echo $erp_setup_saving; ?> on setup this <?php echo $offer_month; ?></span>
        <?php else: ?>
        <div class="per" style="margin-top:6px;color:#ccc;font-size:12px">+ One-time setup: <strong style="color:#00c8ff">Rs. <?php echo $erp_regular_setup; ?></strong></div>
        <?php endif; ?>
        */ ?>
        <div class="per" style="margin-top:6px;color:#ccc;font-size:12px">+ One-time setup: <strong style="color:#00c8ff">Rs. <?php echo $erp_regular_setup; ?></strong></div>
      </div>
      <div class="c-divider"></div>
      <ul class="c-feats">
        <li>Fee collection &amp; tracking</li>
        <li>Attendance &amp; exam system</li>
        <li>Parent portal access</li>
        <li>SMS notifications</li>
        <li>Full admin dashboard</li>
      </ul>
      <button class="c-btn btn-cyan" onclick="window.location='erp.php'">Get Started</button>
      <a href="erp.php" class="c-link">Full details &amp; terms &rarr;</a>
    </div>

    <!-- COMBO -->
    <div class="card card-gold">
      <div class="coming-soon-ribbon">Coming Soon</div>
      <div class="c-header">
        <div class="c-title">
          <span class="c-icon"><i class="fa-solid fa-rocket"></i></span>
          <div class="c-name">Website + ERP</div>
        </div>
        <span class="c-badge badge-deal"><span class="c-badge-inner"><i class="fa-solid fa-fire"></i><strong>Best</strong><em>Value</em></span></span>
      </div>
      <div class="c-tagline">Everything together — website &amp; full ERP at one combo price.</div>
      <div class="c-price">
        <div class="amount" style="font-size:26px;background:linear-gradient(135deg,#ffc94d,#ff8c00);-webkit-background-clip:text;-webkit-text-fill-color:transparent">50% OFF Website</div>
        <?php /* OFFER DISABLED — uncomment when ERP is ready
        <?php if($offer_active): ?>
        <div class="per" style="color:#ccc;margin-top:8px;font-size:12px">+ ERP setup: <strong style="color:#ffc94d">Rs. <?php echo $combo_erp_setup; ?></strong> <span style="color:#aaa">(<?php echo $offer_month; ?> offer)</span></div>
        <?php else: ?>
        <div class="per" style="color:#ccc;margin-top:8px;font-size:12px">+ ERP setup: <strong style="color:#ffc94d">Rs. <?php echo $erp_regular_setup; ?></strong></div>
        <?php endif; ?>
        */ ?>
        <div class="per" style="color:#ccc;margin-top:8px;font-size:12px">+ ERP setup: <strong style="color:#ffc94d">Rs. <?php echo $erp_regular_setup; ?></strong></div>
        <div class="per" style="color:#ccc;font-size:12px">+ Rs. 10 per student/month</div>
        <span class="c-save">Maximum savings on both plans</span>
        <span class="c-domain">* Domain charges excluded</span>
      </div>
      <div class="c-divider"></div>
      <ul class="c-feats">
        <li>Full website + admin panel</li>
        <li>Complete ERP system</li>
        <li>Single unified dashboard</li>
        <li>Free onboarding session</li>
        <li>Priority support</li>
      </ul>
      <button class="c-btn btn-gold" onclick="window.location='combo.php'">Get This Deal</button>
      <a href="combo.php" class="c-link">Full details &amp; terms &rarr;</a>
    </div>

  </div>
</section>

<!-- CTA -->
<section class="cta">
  <?php if($offer_active): ?>
  <div class="cta-offer-tag"><i class="fa-solid fa-fire"></i> <?php echo $offer_full; ?> — Ending Soon</div>
  <?php endif; ?>
  <h2>Ready to Take Your School Digital?</h2>
  <p>Message us on WhatsApp — no forms, no calls, no pressure. We'll answer every question and help you pick the right plan for your school.</p>
  <button class="btn-primary" onclick="window.open('https://wa.me/<?php echo $contact_whatsapp; ?>?text=Hi%2C+I%27m+ready+to+take+my+school+digital+with+Schoozie','_blank')">
    <i class="fa-brands fa-whatsapp"></i> Chat on WhatsApp
  </button>
  <div class="cta-trust">
    <span><i class="fa-solid fa-circle-check"></i> We reply within hours</span>
    <span><i class="fa-solid fa-circle-check"></i> No commitment needed</span>
    <span><i class="fa-solid fa-circle-check"></i> Free demo available</span>
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
      "url": "https://schoozie.in",
      "logo": "https://schoozie.in/assets/svg/schoozie-logo.svg",
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
        "price": "2"
      },
      "description": "Cloud-based school ERP software for student management, fee tracking, timetable, attendance, and more.",
      "url": "https://schoozie.in/erp.php"
    }
  ]
}
</script>

<!-- SCHOOZIE DUCK -->
<div id="schoozie-duck">
  <div class="duck-bubble" id="duck-bubble"></div>
  <div class="duck-base">
  <svg id="duck-svg" viewBox="0 0 80 95" width="56" height="67" xmlns="http://www.w3.org/2000/svg">
    <defs>
      <!-- Body: richer radial purple -->
      <radialGradient id="bodyG" cx="35%" cy="28%" r="70%">
        <stop offset="0%"   stop-color="#c084fc"/>
        <stop offset="55%"  stop-color="#7c3aed"/>
        <stop offset="100%" stop-color="#3b0764"/>
      </radialGradient>
      <!-- Banner gradient -->
      <linearGradient id="bannerG" x1="0%" y1="0%" x2="100%" y2="0%">
        <stop offset="0%"   stop-color="#f59e0b"/>
        <stop offset="100%" stop-color="#fcd34d"/>
      </linearGradient>
      <!-- Head -->
      <radialGradient id="headG" cx="40%" cy="30%" r="65%">
        <stop offset="0%"   stop-color="#e9d5ff"/>
        <stop offset="50%"  stop-color="#a855f7"/>
        <stop offset="100%" stop-color="#5b21b6"/>
      </radialGradient>
      <!-- Wing -->
      <linearGradient id="wingG" x1="0%" y1="0%" x2="100%" y2="100%">
        <stop offset="0%"   stop-color="#c084fc"/>
        <stop offset="100%" stop-color="#4c1d95"/>
      </linearGradient>
      <!-- Eye iris: cyan matching the logo -->
      <radialGradient id="irisG" cx="38%" cy="35%" r="65%">
        <stop offset="0%"   stop-color="#67e8f9"/>
        <stop offset="60%"  stop-color="#06b6d4"/>
        <stop offset="100%" stop-color="#0e7490"/>
      </radialGradient>
      <!-- Beak gradient -->
      <linearGradient id="beakG" x1="0%" y1="0%" x2="0%" y2="100%">
        <stop offset="0%"   stop-color="#fde68a"/>
        <stop offset="100%" stop-color="#f59e0b"/>
      </linearGradient>
      <!-- Belly shine -->
      <radialGradient id="bellyG" cx="50%" cy="25%" r="70%">
        <stop offset="0%"   stop-color="rgba(255,255,255,0.22)"/>
        <stop offset="100%" stop-color="rgba(255,255,255,0)"/>
      </radialGradient>
      <!-- Eye glow -->
      <filter id="eyeGlow" x="-50%" y="-50%" width="200%" height="200%">
        <feGaussianBlur in="SourceGraphic" stdDeviation="2" result="blur"/>
        <feMerge><feMergeNode in="blur"/><feMergeNode in="SourceGraphic"/></feMerge>
      </filter>
      <!-- Body glow -->
      <filter id="bodyGlow" x="-20%" y="-20%" width="140%" height="140%">
        <feGaussianBlur in="SourceGraphic" stdDeviation="2.5" result="blur"/>
        <feMerge><feMergeNode in="blur"/><feMergeNode in="SourceGraphic"/></feMerge>
      </filter>
    </defs>

    <!-- WINGS (behind body) -->
    <ellipse cx="14" cy="62" rx="13" ry="21" fill="url(#wingG)" transform="rotate(-18,14,62)" opacity="0.92">
      <animateTransform attributeName="transform" type="rotate" values="-18,14,62;-10,14,62;-18,14,62" dur="0.55s" repeatCount="indefinite"/>
    </ellipse>
    <!-- Wing highlight left -->
    <ellipse cx="14" cy="57" rx="5.5" ry="11" fill="rgba(216,180,254,0.35)" transform="rotate(-18,14,62)">
      <animateTransform attributeName="transform" type="rotate" values="-18,14,62;-10,14,62;-18,14,62" dur="0.55s" repeatCount="indefinite"/>
    </ellipse>
    <ellipse cx="66" cy="62" rx="13" ry="21" fill="url(#wingG)" transform="rotate(18,66,62)" opacity="0.92">
      <animateTransform attributeName="transform" type="rotate" values="18,66,62;10,66,62;18,66,62" dur="0.55s" repeatCount="indefinite"/>
    </ellipse>
    <!-- Wing highlight right -->
    <ellipse cx="66" cy="57" rx="5.5" ry="11" fill="rgba(216,180,254,0.35)" transform="rotate(18,66,62)">
      <animateTransform attributeName="transform" type="rotate" values="18,66,62;10,66,62;18,66,62" dur="0.55s" repeatCount="indefinite"/>
    </ellipse>

    <!-- BODY -->
    <ellipse cx="40" cy="65" rx="25" ry="23" fill="url(#bodyG)" filter="url(#bodyGlow)"/>
    <!-- Body rim -->
    <ellipse cx="40" cy="65" rx="25" ry="23" fill="none" stroke="rgba(192,132,252,0.3)" stroke-width="0.8"/>
    <!-- BELLY shine -->
    <ellipse cx="40" cy="68" rx="14" ry="12" fill="url(#bellyG)"/>

    <!-- HEAD -->
    <circle cx="40" cy="34" r="22" fill="url(#headG)" filter="url(#bodyGlow)"/>
    <!-- Head rim -->
    <circle cx="40" cy="34" r="22" fill="none" stroke="rgba(216,180,254,0.25)" stroke-width="0.8"/>
    <!-- Head shine -->
    <ellipse cx="32" cy="26" rx="8" ry="5.5" fill="rgba(255,255,255,0.22)" transform="rotate(-20,32,26)"/>

    <!-- BEAK -->
    <path d="M 32 46 Q 40 53 48 46 Q 44 44 40 43 Q 36 44 32 46 Z" fill="url(#beakG)"/>
    <line x1="40" y1="43" x2="40" y2="52" stroke="rgba(0,0,0,0.12)" stroke-width="0.7"/>
    <!-- Beak highlight -->
    <path d="M 33 46 Q 40 50 40 46 Q 37 44 33 46 Z" fill="rgba(255,255,255,0.25)"/>

    <!-- EYE WHITES -->
    <circle cx="29" cy="30" r="10" fill="#1a0a2e"/>
    <circle cx="51" cy="30" r="10" fill="#1a0a2e"/>
    <circle cx="29" cy="30" r="9"  fill="#ffffff"/>
    <circle cx="51" cy="30" r="9"  fill="#ffffff"/>

    <!-- EYE cyan glow ring -->
    <circle cx="29" cy="30" r="9"  fill="none" stroke="rgba(103,232,249,0.8)" stroke-width="1.5" filter="url(#eyeGlow)"/>
    <circle cx="51" cy="30" r="9"  fill="none" stroke="rgba(103,232,249,0.8)" stroke-width="1.5" filter="url(#eyeGlow)"/>

    <!-- EYE IRIS (cyan) -->
    <circle cx="29" cy="30" r="6.5" fill="url(#irisG)" filter="url(#eyeGlow)"/>
    <circle cx="51" cy="30" r="6.5" fill="url(#irisG)" filter="url(#eyeGlow)"/>

    <!-- PUPILS (moved by JS) -->
    <circle id="pupL"   cx="29" cy="31" r="4" fill="#020210"/>
    <circle id="pupR"   cx="51" cy="31" r="4" fill="#020210"/>

    <!-- PUPIL SHINE -->
    <circle id="shineL" cx="31" cy="29" r="1.8" fill="white" opacity="1"/>
    <circle id="shineR" cx="53" cy="29" r="1.8" fill="white" opacity="1"/>
    <!-- Secondary shine -->
    <circle cx="27" cy="33" r="1.2" fill="white" opacity="0.5"/>
    <circle cx="49" cy="33" r="1.2" fill="white" opacity="0.5"/>

    <!-- BANNER held by paws -->
    <rect x="10" y="64" width="60" height="13" rx="3" fill="url(#bannerG)" opacity="0.97"/>
    <rect x="10" y="64" width="60" height="13" rx="3" fill="none" stroke="rgba(255,220,80,0.6)" stroke-width="0.8"/>
    <rect x="13" y="65.5" width="26" height="3" rx="1.5" fill="rgba(255,255,255,0.25)"/>
    <text x="40" y="73.5" text-anchor="middle" font-family="Arial Black,Arial,sans-serif" font-size="6.8" font-weight="900" letter-spacing="0.8" fill="#3b1a00">SCHOOZIE</text>
    <!-- left paw over banner edge -->
    <ellipse cx="11" cy="70" rx="6" ry="4" fill="url(#wingG)" transform="rotate(-20,11,70)"/>
    <ellipse cx="11" cy="70" rx="3" ry="2" fill="rgba(216,180,254,0.35)" transform="rotate(-20,11,70)"/>
    <!-- right paw over banner edge -->
    <ellipse cx="69" cy="70" rx="6" ry="4" fill="url(#wingG)" transform="rotate(20,69,70)"/>
    <ellipse cx="69" cy="70" rx="3" ry="2" fill="rgba(216,180,254,0.35)" transform="rotate(20,69,70)"/>

    <!-- FEET -->
    <ellipse cx="32" cy="89" rx="12" ry="5.5" fill="#00e5ff" opacity="0.9">
      <animateTransform attributeName="transform" type="translate" values="0,0;0,2;0,0" dur="0.55s" repeatCount="indefinite"/>
    </ellipse>
    <ellipse cx="48" cy="89" rx="12" ry="5.5" fill="#00e5ff" opacity="0.9">
      <animateTransform attributeName="transform" type="translate" values="0,2;0,0;0,2" dur="0.55s" repeatCount="indefinite"/>
    </ellipse>
    <!-- Feet highlight -->
    <ellipse cx="32" cy="87" rx="7" ry="2.5" fill="rgba(255,255,255,0.3)">
      <animateTransform attributeName="transform" type="translate" values="0,0;0,2;0,0" dur="0.55s" repeatCount="indefinite"/>
    </ellipse>
    <ellipse cx="48" cy="87" rx="7" ry="2.5" fill="rgba(255,255,255,0.3)">
      <animateTransform attributeName="transform" type="translate" values="0,2;0,0;0,2" dur="0.55s" repeatCount="indefinite"/>
    </ellipse>
  </svg>
  </div>
</div>

<script>
(function(){
  const duck    = document.getElementById('schoozie-duck');
  const bubble  = document.getElementById('duck-bubble');
  const pupL    = document.getElementById('pupL');
  const pupR    = document.getElementById('pupR');
  const shineL  = document.getElementById('shineL');
  const shineR  = document.getElementById('shineR');

  const messages = [
    'Hi there! 👋','Need help? Ask us!','See our plans! 📋',
    'April offer on! 🔥','WhatsApp us! 💬','Demo available! 👀',
    'Going digital? 🚀','We reply fast! ⚡','I\'m Schoozie! 🦉',
    'Schools trust us 🏫','No lock-in! 🔓','₹10/student only! 💰',
    'Live in minutes! ⏱️','Free demo! 🎓','Let\'s talk! 📞'
  ];

  let bubbleTimer;

  /* ── EYE TRACKING ── */
  document.addEventListener('mousemove', function(e){
    const r   = duck.getBoundingClientRect();
    const cx  = r.left + r.width  / 2;
    const cy  = r.top  + r.height / 2;
    const ang = Math.atan2(e.clientY - cy, e.clientX - cx);
    const d   = 2.8;
    const ox  = Math.cos(ang) * d;
    const oy  = Math.sin(ang) * d;
    pupL.setAttribute('cx',   29+ox); pupL.setAttribute('cy',   31+oy);
    pupR.setAttribute('cx',   51+ox); pupR.setAttribute('cy',   31+oy);
    shineL.setAttribute('cx', 31+ox); shineL.setAttribute('cy', 29+oy);
    shineR.setAttribute('cx', 53+ox); shineR.setAttribute('cy', 29+oy);
  });

  /* ── RANDOM LOOK AROUND when mouse idle ── */
  let idleTimer;
  function randomLook(){
    const ox=(Math.random()-0.5)*4, oy=(Math.random()-0.5)*4;
    pupL.setAttribute('cx',   29+ox); pupL.setAttribute('cy',   31+oy);
    pupR.setAttribute('cx',   51+ox); pupR.setAttribute('cy',   31+oy);
    shineL.setAttribute('cx', 31+ox); shineL.setAttribute('cy', 29+oy);
    shineR.setAttribute('cx', 53+ox); shineR.setAttribute('cy', 29+oy);
    idleTimer = setTimeout(randomLook, 900+Math.random()*1200);
  }
  document.addEventListener('mousemove', ()=>{ clearTimeout(idleTimer); idleTimer=setTimeout(randomLook,2000); });
  idleTimer = setTimeout(randomLook, 2000);

  /* ── AUTO GREET after 3 sec ── */
  function showBubble(msg){
    clearTimeout(bubbleTimer);
    bubble.textContent = msg;
    bubble.classList.add('show');
    bubbleTimer = setTimeout(()=> bubble.classList.remove('show'), 2400);
  }
  setTimeout(()=> showBubble('Hi! Need help? 👋'), 3000);

  /* ── CLICK ── */
  duck.addEventListener('click', ()=> showBubble(messages[Math.floor(Math.random()*messages.length)]));
})();
</script>


</body>
</html>
