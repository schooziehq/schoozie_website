<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo $plan['name']; ?> — Schoozie</title>
<link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;600;800&family=Inter:wght@300;400;600&family=Noto+Nastaliq+Urdu:wght@400;700&family=Noto+Sans+Devanagari:wght@400;600&display=swap" rel="stylesheet">
<style>
*{margin:0;padding:0;box-sizing:border-box}
html{scroll-behavior:smooth}
body{
  font-family:'Inter',sans-serif;
  background:radial-gradient(circle at 20% 20%,#0f0c29,#302b63,#24243e);
  color:#fff;
  overflow-x:hidden;
  min-height:100vh;
}
body::before{
  content:"";
  position:fixed;width:200%;height:200%;
  background:url('https://www.transparenttextures.com/patterns/stardust.png');
  animation:moveStars 60s linear infinite;
  opacity:0.25;pointer-events:none;z-index:0;
}
@keyframes moveStars{from{transform:translate(0,0)}to{transform:translate(-500px,-500px)}}

/* HEADER */
header{
  display:flex;justify-content:space-between;align-items:center;
  padding:18px 60px;position:fixed;width:100%;z-index:1000;
  background:rgba(0,0,0,0.35);backdrop-filter:blur(20px);
  border-bottom:1px solid rgba(255,255,255,0.05);
}
.logo{
  font-family:'Orbitron';font-size:24px;letter-spacing:2px;
  background:linear-gradient(90deg,#ff00cc,#3333ff);
  -webkit-background-clip:text;-webkit-text-fill-color:transparent;
  text-decoration:none;
}
.back-btn{
  padding:10px 22px;border-radius:25px;border:1.5px solid rgba(255,255,255,0.18);
  background:transparent;color:#ccc;cursor:pointer;font-family:'Inter';
  font-size:13px;transition:.3s;text-decoration:none;display:inline-block;
}
.back-btn:hover{background:rgba(255,255,255,0.07);color:#fff;border-color:rgba(255,255,255,0.4)}

/* PAGE CONTENT */
.page{position:relative;z-index:1;padding-top:80px}

/* PLAN HERO */
.plan-hero{
  padding:70px 60px 60px;
  display:flex;align-items:center;justify-content:space-between;
  gap:40px;
  border-bottom:1px solid rgba(255,255,255,0.06);
}
.plan-hero-left{}
.plan-badge{
  display:inline-block;padding:5px 16px;border-radius:20px;
  font-size:11px;font-weight:700;letter-spacing:1px;text-transform:uppercase;
  margin-bottom:16px;
}
.plan-hero-left h1{
  font-family:'Orbitron';font-size:42px;font-weight:800;
  line-height:1.2;margin-bottom:14px;
}
.plan-hero-left p{color:#b0b0c8;font-size:15px;line-height:1.7;max-width:520px}

.plan-price-box{
  min-width:280px;
  padding:32px;border-radius:24px;
  background:rgba(255,255,255,0.05);
  backdrop-filter:blur(20px);
  border:1px solid rgba(255,255,255,0.1);
  text-align:center;
  flex-shrink:0;
}
.plan-price-box .label{
  font-size:12px;color:#aaa;letter-spacing:1px;text-transform:uppercase;
  margin-bottom:10px;
}
.plan-price-box .big-price{
  font-family:'Orbitron';font-weight:800;
  font-size:50px;line-height:1;
}
.plan-price-box .period{font-size:13px;color:#bbb;margin-top:8px}
.plan-price-box .old-price{font-size:13px;color:#888;text-decoration:line-through;margin-top:5px}
.plan-price-box .save{
  display:inline-block;font-size:12px;color:#00f064;
  background:rgba(0,240,100,0.1);border-radius:10px;
  padding:3px 12px;margin-top:6px;border:1px solid rgba(0,240,100,0.2);
}
.plan-price-box .domain-note{display:block;font-size:11px;color:#999;margin-top:6px;font-style:italic}
.plan-price-box .cta-btn{
  margin-top:20px;width:100%;padding:14px;border-radius:12px;
  border:none;font-family:'Inter';font-size:14px;font-weight:700;
  cursor:pointer;transition:.3s;color:#fff;
}
.cta-btn:hover{transform:translateY(-2px)}

/* FEATURES ROW */
.features-row{
  padding:50px 60px;
  display:grid;
  grid-template-columns:repeat(auto-fill,minmax(150px,1fr));
  gap:20px;
  border-bottom:1px solid rgba(255,255,255,0.06);
}
.feat-item{
  display:flex;flex-direction:column;align-items:center;
  text-align:center;gap:14px;
  padding:24px 16px;border-radius:18px;
  background:rgba(255,255,255,0.03);
  border:1px solid rgba(255,255,255,0.07);
  transition:.3s;cursor:default;
}
.feat-item:hover{
  background:rgba(255,255,255,0.07);
  transform:translateY(-4px);
  border-color:var(--accent);
  box-shadow:0 8px 30px rgba(0,0,0,0.3);
}
.feat-item .icon{
  width:52px;height:52px;border-radius:14px;
  display:flex;align-items:center;justify-content:center;
  font-size:24px;
  background:rgba(255,255,255,0.05);
  border:1px solid rgba(255,255,255,0.1);
  box-shadow:0 0 18px var(--accent-glow);
  transition:.3s;
}
.feat-item:hover .icon{
  background:var(--accent-bg);
  border-color:var(--accent);
}
.feat-item span{font-size:12px;color:#c0c0d8;line-height:1.5;font-weight:500}
@media(max-width:900px){
  .features-row{padding:30px 24px;grid-template-columns:repeat(auto-fill,minmax(130px,1fr));gap:14px}
  .feat-item{padding:18px 12px}
}
@media(max-width:500px){
  .features-row{grid-template-columns:repeat(3,1fr)}
}

/* LANGUAGE TABS */
.lang-section{padding:60px}

.lang-tabs{
  display:flex;gap:10px;margin-bottom:40px;
  border-bottom:1px solid rgba(255,255,255,0.08);
  padding-bottom:0;
}
.lang-tab{
  padding:12px 28px;border-radius:12px 12px 0 0;
  border:1px solid transparent;border-bottom:none;
  background:transparent;color:#aaa;cursor:pointer;
  font-size:14px;font-family:'Inter';transition:.3s;
  position:relative;bottom:-1px;
}
.lang-tab:hover{color:#fff}
.lang-tab.active{
  background:rgba(255,255,255,0.07);
  border-color:rgba(255,255,255,0.1);
  border-bottom-color:rgba(15,12,41,1);
  color:#fff;
}
.lang-tab.active.pink{border-top:2px solid #ff00cc;color:#ff00cc}
.lang-tab.active.cyan{border-top:2px solid #00f0ff;color:#00f0ff}
.lang-tab.active.gold{border-top:2px solid #ffd200;color:#ffd200}
.lang-tab.active.green{border-top:2px solid #00f064;color:#00f064}

/* Language content panels */
.lang-panel{display:none}
.lang-panel.active{display:block}

/* English T&C */
.tc-english{font-family:'Inter'}
.tc-urdu{
  font-family:'Noto Nastaliq Urdu',serif;
  direction:rtl;text-align:right;
  line-height:2.4;
}
.tc-hindi{
  font-family:'Noto Sans Devanagari',sans-serif;
  line-height:2;
}

/* T&C content styling */
.tc-wrap h2{
  font-family:'Orbitron';font-size:20px;
  margin-bottom:28px;
  padding-bottom:12px;
  border-bottom:1px solid rgba(255,255,255,0.08);
}
.tc-block{
  margin-bottom:28px;
  padding:24px;border-radius:16px;
  background:rgba(255,255,255,0.03);
  border:1px solid rgba(255,255,255,0.07);
}
.tc-block h3{
  font-size:15px;font-weight:600;
  color:#fff;margin-bottom:10px;
  display:flex;align-items:center;gap:10px;
}
.tc-block h3 .num{
  width:26px;height:26px;border-radius:50%;
  display:flex;align-items:center;justify-content:center;
  font-size:11px;font-weight:700;flex-shrink:0;
}
.tc-block p,.tc-block ul{font-size:13px;color:#c8c8dc;line-height:1.9}
.tc-block ul{padding-left:18px;margin-top:6px}
.tc-block ul li{margin-bottom:5px}

/* Urdu T&C block adjustments */
.tc-urdu .tc-block h3{flex-direction:row-reverse}
.tc-urdu .tc-block h3 .num{flex-shrink:0}
.tc-urdu .tc-block ul{padding-left:0;padding-right:18px}

/* Important note box */
.important-box{
  padding:20px 24px;border-radius:14px;
  background:rgba(255,200,0,0.07);
  border:1px solid rgba(255,200,0,0.2);
  margin-bottom:28px;
}
.important-box p{font-size:13px;color:#ffc800;line-height:1.8}
.tc-urdu .important-box p{font-family:'Noto Nastaliq Urdu',serif;line-height:2.4}
.tc-hindi .important-box p{font-family:'Noto Sans Devanagari',sans-serif;line-height:2}

/* CTA bottom */
.bottom-cta{
  margin-top:40px;padding:40px;text-align:center;
  border-radius:20px;
  background:rgba(255,255,255,0.03);
  border:1px solid rgba(255,255,255,0.07);
}
.bottom-cta h3{font-family:'Orbitron';font-size:22px;margin-bottom:10px}
.bottom-cta p{color:#b0b0c8;font-size:14px;margin-bottom:20px}
.bottom-cta .cta-btn{
  padding:14px 36px;width:auto;border-radius:30px;
  font-size:14px;
}

/* SUB-PLANS SECTION */
.sub-plans-section{
  padding:0 60px 60px;
  border-bottom:1px solid rgba(255,255,255,0.06);
}
.sub-plans-section .sp-heading{
  font-family:'Orbitron';font-size:22px;font-weight:700;
  margin-bottom:8px;text-align:center;
}
.sub-plans-section .sp-sub{
  text-align:center;color:#b0b0c8;font-size:14px;margin-bottom:32px;
}
.sp-grid{
  display:grid;grid-template-columns:repeat(3,1fr);gap:20px;
}
.sp-card{
  border-radius:20px;padding:28px 24px;
  background:rgba(255,255,255,0.04);
  border:1px solid rgba(255,255,255,0.08);
  display:flex;flex-direction:column;
  position:relative;overflow:hidden;
  transition:.3s;
}
.sp-card:hover{transform:translateY(-4px);background:rgba(255,255,255,0.07)}
.sp-card.popular{border-color:var(--sp-color);box-shadow:0 0 30px rgba(0,240,255,0.12)}
.sp-popular-badge{
  position:absolute;top:14px;right:14px;
  font-size:10px;font-weight:700;letter-spacing:1px;
  padding:4px 12px;border-radius:20px;text-transform:uppercase;
}
.sp-emoji{font-size:32px;margin-bottom:12px}
.sp-name{
  font-family:'Orbitron';font-size:17px;font-weight:700;
  margin-bottom:6px;
}
.sp-tagline{font-size:12px;color:#999;margin-bottom:18px;line-height:1.6}
.sp-price{
  font-family:'Orbitron';font-size:28px;font-weight:800;
  margin-bottom:4px;
}
.sp-period{font-size:11px;color:#aaa;margin-bottom:20px}
.sp-divider{height:1px;background:rgba(255,255,255,0.07);margin-bottom:18px}
.sp-feats{list-style:none;padding:0;margin:0;flex:1}
.sp-feats li{
  font-size:12.5px;padding:5px 0;
  display:flex;align-items:center;gap:8px;
  border-bottom:1px solid rgba(255,255,255,0.04);
}
.sp-feats li:last-child{border:none}
.sp-feats li.yes{color:#d0d0e8}
.sp-feats li.no{color:#444;text-decoration:none}
.sp-feats li.no .chk{filter:grayscale(1);opacity:0.5}
.sp-feats li.no .feat-text{color:#555}
.sp-feats li .chk{font-size:13px;flex-shrink:0}
.sp-btn{
  margin-top:20px;padding:12px;border-radius:12px;
  border:none;font-family:'Inter';font-size:13px;font-weight:700;
  cursor:pointer;color:#fff;transition:.3s;
}
.sp-btn:hover{transform:translateY(-2px)}
@media(max-width:900px){
  .sub-plans-section{padding:0 24px 40px}
  .sp-grid{grid-template-columns:1fr}
}

/* FOOTER */
footer{
  text-align:center;padding:28px;color:#888;
  font-size:13px;border-top:1px solid rgba(255,255,255,0.05);
  margin-top:60px;position:relative;z-index:1;
}

/* RESPONSIVE */
@media(max-width:900px){
  header{padding:14px 20px}
  .plan-hero{flex-direction:column;padding:60px 24px 40px;text-align:center}
  .plan-hero-left p{margin:0 auto}
  .plan-price-box{width:100%;max-width:400px;margin:0 auto}
  .plan-hero-left h1{font-size:30px}
  .features-row,.lang-section{padding:30px 24px}
}
@media(max-width:600px){
  .lang-tabs{gap:5px}
  .lang-tab{padding:10px 14px;font-size:12px}
  .plan-hero-left h1{font-size:26px}
  .plan-price-box .big-price{font-size:38px}
  .tc-block{padding:16px}
}
</style>
</head>
<body>

<header>
  <a href="index.php" class="logo">Schoozie</a>
  <a href="index.php" class="back-btn">&#8592; Back to Plans</a>
</header>

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
        onclick="window.open('https://wa.me/917017760292?text=Hi%2C+I%27m+interested+in+the+<?php echo urlencode($plan['name']); ?>+plan.','_blank')">
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
        <span class="sp-popular-badge" style="background:<?php echo $sp['color']; ?>22;color:<?php echo $sp['color']; ?>;border:1px solid <?php echo $sp['color']; ?>44">⭐ Most Popular</span>
        <?php endif; ?>
        <div class="sp-emoji"><?php echo $sp['emoji']; ?></div>
        <div class="sp-name" style="color:<?php echo $sp['color']; ?>"><?php echo $sp['name']; ?></div>
        <div class="sp-tagline"><?php echo $sp['tagline']; ?></div>
        <div class="sp-price" style="background:linear-gradient(90deg,<?php echo $sp['color']; ?>,#ffffff88);-webkit-background-clip:text;-webkit-text-fill-color:transparent">Rs. <?php echo $sp['price']; ?></div>
        <div class="sp-period">per student / per month</div>
        <div class="sp-divider"></div>
        <ul class="sp-feats">
          <?php foreach($sp['features'] as $f): ?>
          <li class="<?php echo $f[0]==='✅' ? 'yes' : 'no'; ?>">
            <span class="chk"><?php echo $f[0]; ?></span>
            <span class="feat-text"><?php echo $f[1]; ?></span>
          </li>
          <?php endforeach; ?>
        </ul>
        <button class="sp-btn" style="background:<?php echo $sp['btn_bg']; ?>"
          onclick="window.open('https://wa.me/917017760292?text=Hi%2C+I%27m+interested+in+the+ERP+<?php echo urlencode($sp['name']); ?>+Plan+(Rs.+<?php echo $sp['price']; ?>%2Fstudent%2Fmonth).','_blank')">
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
            onclick="window.open('https://wa.me/917017760292?text=Hi%2C+I%27m+interested+in+the+<?php echo urlencode($plan['name']); ?>+plan.','_blank')"><?php echo $plan['btn_text']; ?></button>
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
            onclick="window.open('https://wa.me/917017760292?text=Hi%2C+I%27m+interested+in+the+<?php echo urlencode($plan['name']); ?>+plan.','_blank')"><?php echo $plan['btn_text']; ?></button>
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
            onclick="window.open('https://wa.me/917017760292?text=Hi%2C+I%27m+interested+in+the+<?php echo urlencode($plan['name']); ?>+plan.','_blank')"><?php echo $plan['btn_text']; ?></button>
        </div>
      </div>
    </div>

  </div><!-- end lang-section -->
</div><!-- end page -->

<footer>
  &copy; <?php echo date("Y"); ?> Schoozie &nbsp;|&nbsp; Beyond Education Systems &nbsp;|&nbsp; All Rights Reserved
</footer>

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
