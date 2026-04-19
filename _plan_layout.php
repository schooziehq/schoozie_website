<?php require_once 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo $plan['name']; ?> — Schoozie</title>
<link rel="icon" type="image/svg+xml" href="assets/svg/schoozie-logo.svg">
<link rel="apple-touch-icon" href="assets/svg/schoozie-logo.svg">
<meta property="og:type" content="website">
<meta property="og:title" content="<?php echo $plan['name']; ?> — Schoozie">
<meta property="og:description" content="<?php echo $plan['description']; ?>">
<meta property="og:url" content="https://schoozie.com/<?php echo basename($_SERVER['PHP_SELF']); ?>">
<meta property="og:image" content="https://schoozie.com/assets/og-image.png">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:image:type" content="image/png">
<meta property="og:image:alt" content="Schoozie — School Digital Solutions India">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?php echo $plan['name']; ?> — Schoozie">
<meta name="twitter:description" content="<?php echo $plan['description']; ?>">
<meta name="twitter:image" content="https://schoozie.com/assets/og-image.png">
<link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;600;800&family=Inter:wght@300;400;600&family=Noto+Nastaliq+Urdu:wght@400;700&family=Noto+Sans+Devanagari:wght@400;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<link rel="stylesheet" href="css/global.css?v=<?php echo filemtime('css/global.css'); ?>">
<link rel="stylesheet" href="css/plan.css?v=<?php echo filemtime('css/plan.css'); ?>">
</head>
<body>

<?php $active_page = ''; $show_back_btn = true; include '_header.php'; ?>

<div class="page">

  <!-- PLAN HERO -->
  <div class="plan-hero">
    <div class="plan-hero-left">
      <span class="plan-badge" style="background:<?php echo $plan['badge_bg']; ?>;color:<?php echo $plan['badge_color']; ?>;border:1px solid <?php echo $plan['badge_border']; ?>"><?php echo $plan['badge']; ?></span>
      <h1 style="background:<?php echo $plan['title_gradient']; ?>;-webkit-background-clip:text;-webkit-text-fill-color:transparent"><?php echo $plan['name']; ?></h1>
      <p><?php echo $plan['description']; ?></p>
    </div>
    <div class="plan-price-box" style="border-color:<?php echo $plan['accent']; ?>20;box-shadow:0 0 40px <?php echo $plan['accent']; ?>15">
      <div class="label">Your Investment</div>
      <div class="big-price" style="background:<?php echo $plan['title_gradient']; ?>;-webkit-background-clip:text;-webkit-text-fill-color:transparent"><?php echo $plan['price_display']; ?></div>
      <div class="period"><?php echo $plan['price_period']; ?></div>
      <?php if(!empty($plan['price_old'])): ?>
      <div class="old-price">Regular: <?php echo $plan['price_old']; ?></div>
      <span class="save"><?php echo $plan['price_save']; ?></span>
      <?php endif; ?>
      <?php if(!empty($plan['domain_note'])): ?>
      <span class="domain-note"><?php echo $plan['domain_note']; ?></span>
      <?php endif; ?>
      <button class="cta-btn" style="background:<?php echo $plan['btn_bg']; ?>;box-shadow:0 5px 25px <?php echo $plan['accent']; ?>40"
        onclick="window.open('https://wa.me/<?php echo $contact_whatsapp; ?>?text=Hi%2C+I%27m+interested+in+the+<?php echo urlencode($plan['name']); ?>+plan.','_blank')">
        <?php echo $plan['btn_text']; ?>
      </button>
    </div>
  </div>

  <!-- FEATURES ROW -->
  <?php
    $a = $plan['accent'];
    // build rgba glow from hex accent
  ?>
  <div class="features-row" style="--accent:<?php echo $a; ?>;--accent-glow:<?php echo $a; ?>33;--accent-bg:<?php echo $a; ?>18;">
    <?php foreach($plan['features'] as $f): ?>
    <div class="feat-item">
      <span class="icon"><?php echo $f[0]; ?></span>
      <span><?php echo $f[1]; ?></span>
    </div>
    <?php endforeach; ?>
  </div>

  <!-- SUB-PLANS (only if defined) -->
  <?php if(!empty($plan['sub_plans'])): ?>
  <div class="sub-plans-section">
    <div class="sp-heading">Choose Your Subscription Tier</div>
    <div class="sp-sub">All plans include a free trial. No contracts — cancel anytime.</div>
    <div class="sp-grid">
      <?php foreach($plan['sub_plans'] as $sp): ?>
      <div class="sp-card <?php echo !empty($sp['popular']) ? 'popular' : ''; ?>" style="--sp-color:<?php echo $sp['color']; ?>">
        <?php if(!empty($sp['popular'])): ?>
        <span class="sp-popular-badge" style="background:<?php echo $sp['color']; ?>22;color:<?php echo $sp['color']; ?>;border:1px solid <?php echo $sp['color']; ?>44"><i class="fa-solid fa-star"></i> Most Popular</span>
        <?php endif; ?>
        <div class="sp-emoji"><?php echo $sp['emoji']; ?></div>
        <div class="sp-name" style="color:<?php echo $sp['color']; ?>"><?php echo $sp['name']; ?></div>
        <div class="sp-tagline"><?php echo $sp['tagline']; ?></div>
        <div class="sp-price" style="background:linear-gradient(90deg,<?php echo $sp['color']; ?>,#ffffff88);-webkit-background-clip:text;-webkit-text-fill-color:transparent">Rs. <?php echo $sp['price']; ?></div>
        <div class="sp-period">per student / per month</div>
        <div class="sp-divider"></div>
        <ul class="sp-feats">
          <?php foreach($sp['features'] as $f): ?>
          <li class="<?php echo $f[0]==='yes' ? 'yes' : 'no'; ?>">
            <span class="chk"><?php echo $f[0]==='yes' ? '<i class="fa-solid fa-check"></i>' : '<i class="fa-solid fa-lock"></i>'; ?></span>
            <span class="feat-text"><?php echo $f[1]; ?></span>
          </li>
          <?php endforeach; ?>
        </ul>
        <button class="sp-btn" style="background:<?php echo $sp['btn_bg']; ?>"
          onclick="window.open('https://wa.me/<?php echo $contact_whatsapp; ?>?text=Hi%2C+I%27m+interested+in+the+ERP+<?php echo urlencode($sp['name']); ?>+Plan+(Rs.+<?php echo $sp['price']; ?>%2Fstudent%2Fmonth).','_blank')">
          Get <?php echo $sp['name']; ?> Plan
        </button>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  <?php endif; ?>

  <!-- LANGUAGE TABS + T&C -->
  <div class="lang-section">
    <div class="lang-tabs">
      <button class="lang-tab active <?php echo $plan['tab_color']; ?>" onclick="switchLang('en',this)">&#127468;&#127463; English</button>
      <button class="lang-tab" onclick="switchLang('ur',this)">اردو</button>
      <button class="lang-tab" onclick="switchLang('hi',this)">&#127470;&#127475; हिंदी</button>
    </div>

    <!-- ENGLISH -->
    <div class="lang-panel active" id="panel-en">
      <div class="tc-wrap tc-english">
        <h2>Terms &amp; Conditions — <?php echo $plan['name']; ?></h2>
        <div class="important-box">
          <p>&#9888; Please read these terms carefully before purchasing. By making payment, you agree to all terms listed below. For questions, contact us on WhatsApp before proceeding.</p>
        </div>
        <?php foreach($plan['tc']['en'] as $i => $tc): ?>
        <div class="tc-block">
          <h3>
            <span class="num" style="background:<?php echo $plan['accent']; ?>22;color:<?php echo $plan['accent']; ?>"><?php echo $i+1; ?></span>
            <?php echo $tc['title']; ?>
          </h3>
          <?php if(isset($tc['points'])): ?>
          <ul><?php foreach($tc['points'] as $pt) echo "<li>$pt</li>"; ?></ul>
          <?php else: ?>
          <p><?php echo $tc['text']; ?></p>
          <?php endif; ?>
        </div>
        <?php endforeach; ?>
        <div class="bottom-cta">
          <h3>Ready to Get Started?</h3>
          <p>Contact us on WhatsApp and we'll guide you through the process.</p>
          <button class="cta-btn" style="background:<?php echo $plan['btn_bg']; ?>;box-shadow:0 5px 25px <?php echo $plan['accent']; ?>40"
            onclick="window.open('https://wa.me/<?php echo $contact_whatsapp; ?>?text=Hi%2C+I%27m+interested+in+the+<?php echo urlencode($plan['name']); ?>+plan.','_blank')"><?php echo $plan['btn_text']; ?></button>
        </div>
      </div>
    </div>

    <!-- URDU -->
    <div class="lang-panel" id="panel-ur">
      <div class="tc-wrap tc-urdu">
        <h2 style="font-family:'Noto Nastaliq Urdu',serif">شرائط و ضوابط — <?php echo $plan['name']; ?></h2>
        <div class="important-box">
          <p>&#9888; خریداری سے پہلے یہ شرائط غور سے پڑھیں۔ ادائیگی کرنے سے آپ تمام شرائط سے متفق ہوتے ہیں۔ کسی بھی سوال کے لیے ادائیگی سے پہلے واٹس ایپ پر رابطہ کریں۔</p>
        </div>
        <?php foreach($plan['tc']['ur'] as $i => $tc): ?>
        <div class="tc-block">
          <h3>
            <span class="num" style="background:<?php echo $plan['accent']; ?>22;color:<?php echo $plan['accent']; ?>"><?php echo $i+1; ?></span>
            <?php echo $tc['title']; ?>
          </h3>
          <?php if(isset($tc['points'])): ?>
          <ul><?php foreach($tc['points'] as $pt) echo "<li>$pt</li>"; ?></ul>
          <?php else: ?>
          <p><?php echo $tc['text']; ?></p>
          <?php endif; ?>
        </div>
        <?php endforeach; ?>
        <div class="bottom-cta">
          <h3 style="font-family:'Noto Nastaliq Urdu',serif">شروع کرنے کے لیے تیار ہیں؟</h3>
          <p style="font-family:'Noto Nastaliq Urdu',serif;direction:rtl">واٹس ایپ پر ہم سے رابطہ کریں، ہم آپ کی مکمل رہنمائی کریں گے۔</p>
          <button class="cta-btn" style="background:<?php echo $plan['btn_bg']; ?>;box-shadow:0 5px 25px <?php echo $plan['accent']; ?>40"
            onclick="window.open('https://wa.me/<?php echo $contact_whatsapp; ?>?text=Hi%2C+I%27m+interested+in+the+<?php echo urlencode($plan['name']); ?>+plan.','_blank')"><?php echo $plan['btn_text']; ?></button>
        </div>
      </div>
    </div>

    <!-- HINDI -->
    <div class="lang-panel" id="panel-hi">
      <div class="tc-wrap tc-hindi">
        <h2 style="font-family:'Noto Sans Devanagari',sans-serif">नियम एवं शर्तें — <?php echo $plan['name']; ?></h2>
        <div class="important-box">
          <p>&#9888; खरीदारी से पहले इन शर्तों को ध्यान से पढ़ें। भुगतान करके आप सभी शर्तों से सहमत होते हैं। किसी भी प्रश्न के लिए भुगतान से पहले WhatsApp पर संपर्क करें।</p>
        </div>
        <?php foreach($plan['tc']['hi'] as $i => $tc): ?>
        <div class="tc-block">
          <h3>
            <span class="num" style="background:<?php echo $plan['accent']; ?>22;color:<?php echo $plan['accent']; ?>"><?php echo $i+1; ?></span>
            <?php echo $tc['title']; ?>
          </h3>
          <?php if(isset($tc['points'])): ?>
          <ul><?php foreach($tc['points'] as $pt) echo "<li>$pt</li>"; ?></ul>
          <?php else: ?>
          <p><?php echo $tc['text']; ?></p>
          <?php endif; ?>
        </div>
        <?php endforeach; ?>
        <div class="bottom-cta">
          <h3 style="font-family:'Noto Sans Devanagari',sans-serif">शुरू करने के लिए तैयार हैं?</h3>
          <p>WhatsApp पर हमसे संपर्क करें, हम आपका पूरा मार्गदर्शन करेंगे।</p>
          <button class="cta-btn" style="background:<?php echo $plan['btn_bg']; ?>;box-shadow:0 5px 25px <?php echo $plan['accent']; ?>40"
            onclick="window.open('https://wa.me/<?php echo $contact_whatsapp; ?>?text=Hi%2C+I%27m+interested+in+the+<?php echo urlencode($plan['name']); ?>+plan.','_blank')"><?php echo $plan['btn_text']; ?></button>
        </div>
      </div>
    </div>

  </div><!-- end lang-section -->
</div><!-- end page -->

<?php include '_footer.php'; ?>

<!-- JSON-LD STRUCTURED DATA -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "LocalBusiness",
  "name": "Schoozie",
  "description": "Schoozie provides professional school websites, dynamic CMS platforms, and ERP software for schools across India.",
  "url": "https://schoozie.com",
  "telephone": "+<?php echo $contact_whatsapp; ?>",
  "email": "<?php echo $contact_email; ?>",
  "address": {
    "@type": "PostalAddress",
    "addressLocality": "<?php echo $contact_city; ?>",
    "addressRegion": "<?php echo $contact_region; ?>",
    "addressCountry": "IN"
  },
  "areaServed": "IN"
}
</script>

<script>
function switchLang(lang, btn){
  document.querySelectorAll('.lang-panel').forEach(p => p.classList.remove('active'));
  document.querySelectorAll('.lang-tab').forEach(t => t.classList.remove('active'));
  document.getElementById('panel-'+lang).classList.add('active');
  btn.classList.add('active');
}
</script>
</body>
</html>
