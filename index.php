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
<title>Schoozie — Take Your School Digital in Minutes</title>
<meta name="description" content="Schoozie helps Indian schools go digital with professional school websites, dynamic CMS, and school ERP software. Starting at ₹<?php echo $erp_per_student; ?> per student per month. WhatsApp support included.">
<meta name="keywords" content="school website india, school ERP software india, school management software, dynamic school website, school CMS india, school website design india, urdu medium school website, hindi medium school website, school ERP roorkee, school website uttarakhand, affordable school website india">
<meta name="robots" content="index, follow">
<link rel="canonical" href="https://schoozie.com/">
<link rel="icon" type="image/png" href="assets/_fonts/logo.png">
<link rel="icon" type="image/svg+xml" href="assets/svg/schoozie-logo.svg">
<link rel="apple-touch-icon" href="assets/_fonts/logo.png">
<!-- Open Graph -->
<meta property="og:type" content="website">
<meta property="og:title" content="Schoozie — School Website & ERP Software for Indian Schools">
<meta property="og:description" content="Schoozie helps Indian schools go digital with professional school websites, dynamic CMS, and school ERP software. Starting at ₹<?php echo $erp_per_student; ?> per student per month.">
<meta property="og:url" content="https://schoozie.com/">
<meta property="og:image" content="https://schoozie.com/assets/og-image.png">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:image:type" content="image/png">
<meta property="og:image:alt" content="Schoozie — School Websites, CMS & ERP Software for Indian Schools">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Schoozie — School Website & ERP Software for Indian Schools">
<meta name="twitter:description" content="Schoozie helps Indian schools go digital with professional school websites, dynamic CMS, and school ERP software. Starting at ₹<?php echo $erp_per_student; ?> per student per month.">
<meta name="twitter:image" content="https://schoozie.com/assets/og-image.png">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="dns-prefetch" href="https://cdnjs.cloudflare.com">
<link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700;900&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<link rel="stylesheet" href="css/global.css?v=<?php echo filemtime('css/global.css'); ?>">
<link rel="stylesheet" href="css/index.css?v=<?php echo filemtime('css/index.css'); ?>">
</head>
<body class="page-home">

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
        <span class="hs-num">₹<?php echo $erp_per_student; ?></span>
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

<!-- PROMO STRIP (desktop only — shown after features strip) -->
<div class="promo-strip promo-inline">
  <div class="promo-track">
    <span><i class="fa-solid fa-crown"></i> Take your school digital at <strong>India's lowest price</strong> &mdash; Only 100 founding spots available.</span>
    <span class="promo-sep">◆</span>
    <span><i class="fa-solid fa-fire-flame-curved"></i> Once 100 schools join, <strong>this price is gone forever.</strong> Secure your spot now.</span>
    <span class="promo-sep">◆</span>
    <span><i class="fa-solid fa-bolt"></i> Founding Offer &mdash; <strong>Your price stays locked for life.</strong> No hike. No surprise bills.</span>
    <span class="promo-sep">◆</span>
    <span><i class="fa-solid fa-crown"></i> Take your school digital at <strong>India's lowest price</strong> &mdash; Only 100 founding spots available.</span>
    <span class="promo-sep">◆</span>
    <span><i class="fa-solid fa-fire-flame-curved"></i> Once 100 schools join, <strong>this price is gone forever.</strong> Secure your spot now.</span>
    <span class="promo-sep">◆</span>
    <span><i class="fa-solid fa-bolt"></i> Founding Offer &mdash; <strong>Your price stays locked for life.</strong> No hike. No surprise bills.</span>
    <span class="promo-sep">◆</span>
  </div>
</div>

<!-- WHY SCHOOZIE -->
<section class="why-section" id="why">
  <div class="section-head">
    <h2>Why Schools Choose Schoozie</h2>
    <p>We're not a generic web agency. We're built specifically for Indian schools.</p>
  </div>
  <div class="why-grid">
    <div class="why-card">
      <div class="why-card-header">
        <div class="why-icon" style="background:rgba(0,183,255,0.1);color:#00b7ff"><i class="fa-solid fa-indian-rupee-sign"></i></div>
        <h3>India's Lowest Price. Locked for Life.</h3>
      </div>
      <p>Our founding price never hikes. No surprise renewal bills, no contract traps — just honest, affordable pricing built around what Indian schools actually spend.</p>
    </div>
    <div class="why-card why-card-featured">
      <div class="why-card-header">
        <div class="why-icon" style="background:rgba(168,85,247,0.1);color:#bf5fff"><i class="fa-solid fa-graduation-cap"></i></div>
        <h3>Built for Your Board</h3>
      </div>
      <p>CBSE, ICSE, or State Board — your website is designed to match your board's identity, not a generic template. We know what parents of each board expect, and we deliver exactly that.</p>
    </div>
    <div class="why-card">
      <div class="why-card-header">
        <div class="why-icon" style="background:rgba(37,211,102,0.1);color:#25d366"><i class="fa-brands fa-whatsapp"></i></div>
        <h3>Real People, Fast Support</h3>
      </div>
      <p>Not a ticket system. A real person on WhatsApp who knows your school setup — and actually responds the same day.</p>
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
      <span class="offer-ribbon-divider"></span>
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
        <li>Renewal: Rs. <?php echo $static_renewal_price; ?>/year</li>
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
        <li>Renewal: Rs. <?php echo $dynamic_renewal_price; ?>/year</li>
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
        <div class="amount"><span class="rs">Rs.</span> <?php echo $erp_per_student; ?></div>
        <div class="per">per student / per month</div>
        <?php if($offer_active): ?>
        <div class="per" style="margin-top:6px;color:#ccc;font-size:12px">+ One-time setup: <strong style="color:#00c8ff">Rs. <?php echo $erp_offer_setup; ?></strong> <span style="color:#aaa">(<?php echo $offer_month; ?> offer)</span></div>
        <div class="per" style="color:#555;font-size:11px">Regular setup: Rs. <?php echo $erp_regular_setup; ?></div>
        <span class="c-save">Save Rs. <?php echo $erp_setup_saving; ?> on setup this <?php echo $offer_month; ?></span>
        <?php else: ?>
        <div class="per" style="margin-top:6px;color:#ccc;font-size:12px">+ One-time setup: <strong style="color:#00c8ff">Rs. <?php echo $erp_regular_setup; ?></strong></div>
        <?php endif; ?>
      </div>
      <div class="c-divider"></div>
      <ul class="c-feats">
        <li>Fee collection &amp; tracking</li>
        <li>Attendance &amp; exam system</li>
        <li>Parent portal access</li>
        <li>In-panel notifications</li>
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
        <div class="amount" style="font-size:26px;background:linear-gradient(135deg,#ffc94d,#ff8c00);-webkit-background-clip:text;-webkit-text-fill-color:transparent"><?php echo $combo_website_discount; ?>% OFF Website</div>
        <?php if($offer_active): ?>
        <div class="per" style="color:#ccc;margin-top:8px;font-size:12px">+ ERP setup: <strong style="color:#ffc94d">Rs. <?php echo $erp_offer_setup; ?></strong> <span style="color:#aaa">(<?php echo $offer_month; ?> offer)</span></div>
        <?php else: ?>
        <div class="per" style="color:#ccc;margin-top:8px;font-size:12px">+ ERP setup: <strong style="color:#ffc94d">Rs. <?php echo $erp_regular_setup; ?></strong></div>
        <?php endif; ?>
        <div class="per" style="color:#ccc;font-size:12px">+ Rs. <?php echo $erp_per_student; ?> per student/month</div>
        <span class="c-save">Maximum savings on both plans</span>
        <span class="c-domain">* Domain charges excluded</span>
      </div>
      <div class="c-divider"></div>
      <ul class="c-feats">
        <li><?php echo $combo_website_discount; ?>% off your website</li>
        <li>Full ERP included</li>
        <li>Unified school management</li>
        <li>Guided setup, on us</li>
        <li>Dedicated priority support</li>
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
        "price": "2"
      },
      "description": "Cloud-based school ERP software for student management, fee tracking, timetable, attendance, and more.",
      "url": "https://schoozie.com/erp.php"
    }
  ]
}
</script>

<!-- SCHOOZIE DUCK moved to _footer.php -->


</body>
</html>
