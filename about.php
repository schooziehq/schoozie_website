<?php require_once 'config.php'; $year = date("Y"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>About Schoozie | School Website & ERP Software Company in India</title>
<meta name="description" content="Schoozie is an Indian ed-tech company helping schools go digital with professional websites, dynamic CMS platforms, and school management ERP software. Learn our story, mission, and vision.">
<meta name="keywords" content="about schoozie, school website company india, school ERP software india, ed-tech startup india, school digital solutions, school management software roorkee uttarakhand">
<meta name="robots" content="index, follow">
<link rel="canonical" href="https://schoozie.com/about.php">

<!-- Open Graph -->
<meta property="og:type" content="website">
<meta property="og:title" content="About Schoozie — Digitizing Schools Across India">
<meta property="og:description" content="We build professional school websites, dynamic CMS platforms, and powerful ERP software for schools across India.">
<meta property="og:url" content="https://schoozie.com/about.php">
<meta property="og:image" content="https://schoozie.com/assets/og-image.png">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:image:type" content="image/png">
<meta property="og:image:alt" content="Schoozie — Digitizing Schools Across India">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="About Schoozie — Digitizing Schools Across India">
<meta name="twitter:description" content="We build professional school websites, dynamic CMS platforms, and powerful ERP software for schools across India.">
<meta name="twitter:image" content="https://schoozie.com/assets/og-image.png">

<link rel="icon" type="image/svg+xml" href="assets/svg/schoozie-logo.svg">
<link rel="apple-touch-icon" href="assets/svg/schoozie-logo.svg">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="dns-prefetch" href="https://cdnjs.cloudflare.com">
<link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700;800&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<link rel="stylesheet" href="css/global.css?v=<?php echo filemtime('css/global.css'); ?>">
<link rel="stylesheet" href="css/about.css?v=<?php echo filemtime('css/about.css'); ?>">
</head>
<body>

<?php $active_page = 'about'; include '_header.php'; ?>

<div class="inner-page">

  <!-- HERO -->
  <section class="about-hero">
    <span class="about-hero-eyebrow"><i class="fa-solid fa-circle-info"></i> &nbsp;About Us</span>
    <h1>Built for Schools.<br>Designed for the Future.</h1>
    <p>We started Schoozie with one belief — every school in India, no matter how big or small, deserves a strong digital presence and tools that actually work.</p>
    <div class="about-hero-actions">
      <a href="index.php#pricing" class="btn-primary-grad"><i class="fa-solid fa-layer-group"></i> Explore Our Plans</a>
      <a href="https://wa.me/<?php echo $contact_whatsapp; ?>" target="_blank" rel="noopener" class="btn-outline-grad"><i class="fa-brands fa-whatsapp"></i> Talk to Us</a>
    </div>
  </section>

  <!-- STATS STRIP -->
  <div class="stats-strip" aria-label="Our numbers">
    <div class="stat-item">
      <div class="stat-num">4+</div>
      <div class="stat-label">Products Built</div>
    </div>
    <div class="stat-item">
      <div class="stat-num">100%</div>
      <div class="stat-label">Custom Work</div>
    </div>
    <div class="stat-item">
      <div class="stat-num">&#8734;</div>
      <div class="stat-label">Schools We Can Serve</div>
    </div>
  </div>

  <!-- STORY SECTION -->
  <section class="section" aria-labelledby="story-heading">
    <div class="story-grid">
      <div class="story-content">
        <span class="section-tag"><i class="fa-solid fa-book-open"></i> &nbsp;Our Story</span>
        <h2 id="story-heading">Why We Built Schoozie</h2>
        <p class="story-lead">Most schools in India still rely on WhatsApp groups, paper registers, and word-of-mouth. We thought that needed to change.</p>
        <p>Schoozie was founded to bridge the technology gap in the Indian education sector. We saw schools struggling with outdated tools, expensive enterprise software, and developers who didn't understand the school ecosystem.</p>
        <p>So we built something different — affordable, purpose-built digital solutions that work for schools in Tier 2 and Tier 3 cities just as well as they do in metros.</p>
      </div>
      <div class="story-visual" role="list">
        <div class="story-pill" role="listitem">
          <i class="fa-solid fa-lightbulb"></i>
          <div>
            <div class="story-pill-title">The Problem We Saw</div>
            <div class="story-pill-desc">Schools spending lakhs on broken software, or paying agencies for generic websites that hurt more than help.</div>
          </div>
        </div>
        <div class="story-pill" role="listitem">
          <i class="fa-solid fa-screwdriver-wrench"></i>
          <div>
            <div class="story-pill-title">What We Built</div>
            <div class="story-pill-desc">Clean, fast school websites — plus a full-featured ERP built specifically for how Indian schools operate.</div>
          </div>
        </div>
        <div class="story-pill" role="listitem">
          <i class="fa-solid fa-rocket"></i>
          <div>
            <div class="story-pill-title">Where We're Going</div>
            <div class="story-pill-desc">An AI-powered school assistant, smart dashboards, and the most connected school platform in South Asia.</div>
          </div>
        </div>
        <div class="story-pill" role="listitem">
          <i class="fa-solid fa-earth-asia"></i>
          <div>
            <div class="story-pill-title">Who We Serve</div>
            <div class="story-pill-desc">Schools of all sizes across India — CBSE, ICSE, State Board, English medium and Urdu medium alike.</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- PRODUCTS SECTION -->
  <section class="section products-section" aria-labelledby="products-heading">
    <div class="section-inner">
      <div class="section-header">
        <span class="section-tag" style="text-align:center;display:block"><i class="fa-solid fa-box-open"></i> &nbsp;What We Build</span>
        <h2 id="products-heading" style="text-align:center;max-width:100%">Four Products. One Mission.</h2>
        <p style="text-align:center;margin:0 auto">Everything a school needs to go digital — from a simple brochure website to a fully integrated management system.</p>
      </div>
      <div class="products-grid">
        <a href="static-web.php" class="product-card">
          <div class="product-card-header">
            <div class="product-card-icon" style="color:#00b7ff"><i class="fa-solid fa-desktop"></i></div>
            <h3>Static School Website</h3>
          </div>
          <p>A fast, beautiful, mobile-friendly website for your school. Great for first impressions and Google discovery.</p>
          <span class="product-card-link">View Plan <i class="fa-solid fa-arrow-right"></i></span>
        </a>
        <a href="dynamic-web.php" class="product-card">
          <div class="product-card-header">
            <div class="product-card-icon" style="color:#bf5fff"><i class="fa-solid fa-bolt"></i></div>
            <h3>Dynamic Website + CMS</h3>
          </div>
          <p>Everything in Static, plus a content management panel so your staff can update notices, events, and results themselves.</p>
          <span class="product-card-link">View Plan <i class="fa-solid fa-arrow-right"></i></span>
        </a>
        <a href="erp.php" class="product-card">
          <div class="product-card-header">
            <div class="product-card-icon" style="color:#00c8ff"><i class="fa-solid fa-school"></i></div>
            <h3>School ERP Software</h3>
          </div>
          <p>Student records, fee management, attendance, timetables, reports — all in one cloud platform built for Indian schools.</p>
          <span class="product-card-link">View Plan <i class="fa-solid fa-arrow-right"></i></span>
        </a>
        <a href="combo.php" class="product-card">
          <div class="product-card-header">
            <div class="product-card-icon" style="color:#f59e0b"><i class="fa-solid fa-rocket"></i></div>
            <h3>Website + ERP Combo</h3>
          </div>
          <p>The complete package — your school's digital identity and its operational backbone, bundled for maximum value.</p>
          <span class="product-card-link">View Plan <i class="fa-solid fa-arrow-right"></i></span>
        </a>
      </div>
    </div>
  </section>

  <!-- MISSION & VISION -->
  <section class="section" aria-labelledby="mission-heading">
    <span class="section-tag" style="text-align:center;display:block"><i class="fa-solid fa-bullseye"></i> &nbsp;Mission &amp; Vision</span>
    <h2 id="mission-heading" style="text-align:center;max-width:100%;margin-bottom:40px">What Drives Us</h2>
    <div class="mission-grid">
      <div class="mission-box">
        <h3><i class="fa-solid fa-crosshairs"></i> &nbsp;Our Mission</h3>
        <p>To make professional digital infrastructure accessible to every school in India — regardless of size, budget, or location. We believe a school in a small town deserves the same quality of technology as one in a metro city.</p>
      </div>
      <div class="vision-box">
        <h3><i class="fa-solid fa-eye"></i> &nbsp;Our Vision</h3>
        <p>To become the most trusted school technology platform in South Asia — starting with websites and ERP, expanding into AI-powered school assistants, parent apps, and smart analytics that help schools make better decisions every day.</p>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="about-cta">
    <h2>Ready to Take Your School Digital?</h2>
    <p>Explore our plans or reach out on WhatsApp — we'll help you figure out exactly what your school needs.</p>
    <div class="about-hero-actions">
      <a href="index.php#pricing" class="btn-primary-grad"><i class="fa-solid fa-layer-group"></i> See Our Plans</a>
      <a href="contact.php" class="btn-outline-grad"><i class="fa-solid fa-envelope"></i> Contact Us</a>
    </div>
  </section>

</div><!-- end inner-page -->

<?php include '_footer.php'; ?>

<!-- JSON-LD -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "AboutPage",
  "name": "About Schoozie",
  "description": "Schoozie is an Indian ed-tech company providing school websites, CMS, and ERP software.",
  "url": "https://schoozie.com/about.php",
  "publisher": {
    "@type": "Organization",
    "name": "Schoozie",
    "url": "https://schoozie.com",
    "logo": "https://schoozie.com/assets/svg/schoozie-logo.svg",
    "email": "<?php echo $contact_email; ?>",
    "address": {
      "@type": "PostalAddress",
      "addressLocality": "<?php echo $contact_city; ?>",
      "addressRegion": "<?php echo $contact_region; ?>",
      "addressCountry": "IN"
    },
    "areaServed": "IN",
    "description": "Schoozie builds professional school websites, dynamic CMS platforms, and ERP software for schools across India."
  }
}
</script>


</body>
</html>
