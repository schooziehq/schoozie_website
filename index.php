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
<title>Schoozie — School Website & ERP Solutions</title>
<link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700;900&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<style>

/* ── RESET ── */
*{margin:0;padding:0;box-sizing:border-box}
html{scroll-behavior:smooth}

/* ── BODY ── */
body{
  font-family:'Inter',sans-serif;
  background:#07071a;
  color:#e8e8f0;
  overflow-x:hidden;
  min-height:100vh;
}

/* ── STAR BG ── */
body::before{
  content:"";
  position:fixed;inset:0;
  background:
    radial-gradient(ellipse at 15% 30%,rgba(111,66,255,0.18) 0%,transparent 55%),
    radial-gradient(ellipse at 85% 70%,rgba(0,183,255,0.12) 0%,transparent 55%),
    radial-gradient(ellipse at 50% 10%,rgba(255,0,180,0.08) 0%,transparent 50%);
  pointer-events:none;z-index:0;
}
body::after{
  content:"";
  position:fixed;inset:0;
  background:url('https://www.transparenttextures.com/patterns/stardust.png');
  opacity:0.18;pointer-events:none;z-index:0;
  animation:stars 80s linear infinite;
}
@keyframes stars{from{transform:translate(0,0)}to{transform:translate(-300px,-300px)}}

/* ── HEADER ── */
header{
  position:fixed;top:0;width:100%;z-index:1000;
  display:flex;align-items:center;justify-content:space-between;
  padding:16px 60px;
  background:rgba(7,7,26,0.7);
  backdrop-filter:blur(24px);
  border-bottom:1px solid rgba(255,255,255,0.06);
}
.logo{
  font-family:'Orbitron';font-size:22px;font-weight:900;
  letter-spacing:3px;
  background:linear-gradient(135deg,#bf5fff,#00b7ff);
  -webkit-background-clip:text;-webkit-text-fill-color:transparent;
  text-decoration:none;
}
nav a{
  margin:0 14px;font-size:13px;font-weight:500;
  color:#9999bb;text-decoration:none;transition:.2s;
  letter-spacing:.3px;
}
nav a:hover{color:#fff}
.header-btn{
  padding:9px 22px;border-radius:8px;
  background:linear-gradient(135deg,#bf5fff,#6f42ff);
  border:none;color:#fff;font-size:13px;font-weight:600;
  cursor:pointer;font-family:'Inter';transition:.25s;
  letter-spacing:.3px;
}
.header-btn:hover{opacity:.85;transform:translateY(-1px)}

/* ── HERO ── */
.hero{
  position:relative;z-index:1;
  min-height:100vh;
  display:flex;align-items:center;justify-content:space-between;
  padding:120px 60px 80px;
  gap:50px;
}
.hero-left{max-width:54%}
.hero-tag{
  display:inline-flex;align-items:center;gap:8px;
  background:rgba(111,66,255,0.12);
  border:1px solid rgba(111,66,255,0.3);
  border-radius:20px;padding:6px 16px;
  font-size:12px;font-weight:600;color:#bf5fff;
  letter-spacing:.5px;text-transform:uppercase;
  margin-bottom:24px;
}
.hero-tag .dot{width:6px;height:6px;border-radius:50%;background:#bf5fff;animation:blink 1.2s step-start infinite}
@keyframes blink{50%{opacity:0}}
.hero h1{
  font-family:'Orbitron';font-weight:900;
  font-size:58px;line-height:1.15;
  margin-bottom:20px;
}
.hero h1 span{
  background:linear-gradient(135deg,#ff5fcb,#bf5fff,#00b7ff);
  background-size:200%;
  -webkit-background-clip:text;-webkit-text-fill-color:transparent;
  animation:hshift 5s ease infinite alternate;
}
@keyframes hshift{from{background-position:0%}to{background-position:100%}}
.hero p{
  font-size:16px;line-height:1.8;
  color:#9999bb;max-width:460px;margin-bottom:32px;
}
.hero-btns{display:flex;gap:14px;flex-wrap:wrap}
.btn-primary{
  padding:13px 28px;border-radius:10px;border:none;
  background:linear-gradient(135deg,#bf5fff,#6f42ff);
  color:#fff;font-size:14px;font-weight:600;
  cursor:pointer;font-family:'Inter';
  box-shadow:0 8px 32px rgba(111,66,255,0.35);
  transition:.25s;
}
.btn-primary:hover{transform:translateY(-2px);box-shadow:0 12px 40px rgba(111,66,255,0.5)}
.btn-outline{
  padding:13px 28px;border-radius:10px;
  background:transparent;
  border:1.5px solid rgba(255,255,255,0.15);
  color:#ccc;font-size:14px;font-weight:600;
  cursor:pointer;font-family:'Inter';transition:.25s;
}
.btn-outline:hover{border-color:rgba(255,255,255,0.4);color:#fff}

/* offers box */
.offers-box{
  flex-shrink:0;min-width:280px;
  background:rgba(255,255,255,0.03);
  border:1px solid rgba(255,255,255,0.08);
  border-radius:20px;padding:28px 30px;
  backdrop-filter:blur(20px);
}
.offers-box-head{
  font-family:'Orbitron';font-size:11px;letter-spacing:2px;
  text-transform:uppercase;margin-bottom:18px;
  display:flex;align-items:center;gap:8px;
}
.offers-box-head .fire{font-size:15px}
.offer-row{
  display:flex;justify-content:space-between;align-items:center;
  padding:12px 0;border-bottom:1px solid rgba(255,255,255,0.05);
  gap:12px;
}
.offer-row:last-of-type{border-bottom:none}
.offer-row .o-plan{
  display:flex;align-items:center;gap:8px;
  font-size:13px;color:#c0c0d8;
}
.offer-row .o-plan .o-icon{font-size:16px}
.offer-row .o-price{
  font-family:'Orbitron';font-size:13px;font-weight:700;
  white-space:nowrap;
}
.offers-note{
  font-size:11px;color:#555;margin-top:14px;margin-bottom:16px;
  text-align:center;
}
.offers-btn{
  width:100%;padding:11px;border-radius:12px;border:none;
  font-family:'Inter';font-size:13px;font-weight:700;cursor:pointer;
  background:linear-gradient(135deg,#6f42ff,#bf5fff);
  color:#fff;transition:.3s;
}
.offers-btn:hover{box-shadow:0 6px 24px rgba(111,66,255,0.4);transform:translateY(-1px)}

/* ── SECTION COMMONS ── */
section{position:relative;z-index:1}
.section-head{text-align:center;margin-bottom:50px}
.section-head h2{
  font-family:'Orbitron';font-size:32px;font-weight:700;
  margin-bottom:10px;
  background:linear-gradient(135deg,#ff5fcb,#00b7ff);
  -webkit-background-clip:text;-webkit-text-fill-color:transparent;
}
.section-head p{font-size:14px;color:#7777aa;letter-spacing:.3px}

/* ── PRICING ── */
.pricing{padding:80px 60px 100px}

.offer-ribbon{
  display:inline-flex;align-items:center;gap:10px;
  background:rgba(255,95,100,0.1);
  border:1px solid rgba(255,95,100,0.25);
  border-radius:30px;padding:8px 20px;
  font-size:12px;font-weight:600;color:#ff7b7f;
  margin-bottom:18px;letter-spacing:.4px;
}
.offer-ribbon .dot{width:7px;height:7px;border-radius:50%;background:#ff7b7f;animation:blink 1s step-start infinite}

/* grid */
.cards{
  display:grid;
  grid-template-columns:repeat(4,1fr);
  gap:20px;
  max-width:1280px;
  margin:0 auto;
  align-items:stretch;
}

/* ── CARD BASE ── */
.card{
  border-radius:20px;
  padding:30px 26px;
  background:rgba(255,255,255,0.03);
  border:1px solid rgba(255,255,255,0.08);
  display:flex;flex-direction:column;
  position:relative;overflow:hidden;
  transition:transform .35s ease,box-shadow .35s ease,border-color .35s ease;
}
.card:hover{
  transform:translateY(-10px);
  box-shadow:0 24px 64px rgba(0,0,0,0.45);
}

/* card top glow line */
.card::before{
  content:"";
  position:absolute;top:0;left:10%;right:10%;height:1px;
  background:var(--glow);
  opacity:.7;
}

/* card variants */
.card-white{--glow:linear-gradient(90deg,transparent,rgba(200,200,255,0.5),transparent)}
.card-white:hover{border-color:rgba(200,200,255,0.2)}

.card-pink{
  --glow:linear-gradient(90deg,transparent,#bf5fff,transparent);
  background:rgba(191,95,255,0.05);
  border-color:rgba(191,95,255,0.2);
}
.card-pink:hover{border-color:rgba(191,95,255,0.45);box-shadow:0 24px 64px rgba(191,95,255,0.2)}

.card-cyan{
  --glow:linear-gradient(90deg,transparent,#00b7ff,transparent);
  background:rgba(0,183,255,0.04);
  border-color:rgba(0,183,255,0.18);
}
.card-cyan:hover{border-color:rgba(0,183,255,0.4);box-shadow:0 24px 64px rgba(0,183,255,0.18)}

.card-gold{
  --glow:linear-gradient(90deg,transparent,#ffc94d,transparent);
  background:rgba(255,200,0,0.04);
  border-color:rgba(255,200,0,0.18);
}
.card-gold:hover{border-color:rgba(255,200,0,0.4);box-shadow:0 24px 64px rgba(255,200,0,0.15)}

/* badge */
.c-badge{
  display:inline-block;
  font-size:10px;font-weight:700;letter-spacing:1px;
  text-transform:uppercase;padding:4px 12px;
  border-radius:20px;margin-bottom:18px;width:fit-content;
}
.badge-offer{background:rgba(255,100,100,0.12);color:#ff7b7f;border:1px solid rgba(255,100,100,0.25)}
.badge-popular{background:linear-gradient(135deg,#bf5fff,#6f42ff);color:#fff}
.badge-hot{background:rgba(0,183,255,0.12);color:#00c8ff;border:1px solid rgba(0,183,255,0.25)}
.badge-deal{background:rgba(255,200,0,0.1);color:#ffc94d;border:1px solid rgba(255,200,0,0.25)}

/* plan name */
.c-icon{font-size:34px;margin-bottom:12px;display:block}
.c-name{
  font-family:'Orbitron';font-size:17px;font-weight:700;
  color:#fff;margin-bottom:6px;
}
.c-tagline{font-size:12px;color:#7777aa;margin-bottom:18px;line-height:1.5}

/* price block */
.c-price{margin-bottom:6px}
.c-price .amount{
  font-family:'Orbitron';font-weight:900;font-size:40px;
  line-height:1;
}
.c-price .rs{font-size:18px;font-weight:400;color:#aaa;vertical-align:super}
.c-price .per{font-size:12px;color:#7777aa;margin-top:5px}
.c-price .strike{font-size:12px;color:#555;text-decoration:line-through;margin-top:3px}
.c-save{
  display:inline-block;font-size:11px;font-weight:600;
  color:#4dff91;background:rgba(0,255,100,0.08);
  border:1px solid rgba(0,255,100,0.15);
  border-radius:6px;padding:3px 10px;margin-top:5px;
}
.c-domain{font-size:11px;color:#555;font-style:italic;margin-top:4px;display:block}

.c-divider{
  height:1px;
  background:linear-gradient(90deg,transparent,rgba(255,255,255,0.07),transparent);
  margin:18px 0;
}

/* features */
.c-feats{list-style:none;flex:1;margin-bottom:22px}
.c-feats li{
  font-size:13px;color:#c0c0d8;
  padding:7px 0;
  display:flex;align-items:center;gap:10px;
  border-bottom:1px solid rgba(255,255,255,0.04);
}
.c-feats li:last-child{border:none}
.c-feats li::before{
  content:"✓";
  width:18px;height:18px;flex-shrink:0;
  border-radius:50%;
  display:flex;align-items:center;justify-content:center;
  font-size:10px;font-weight:700;
}
.card-white .c-feats li::before{background:rgba(200,200,255,0.1);color:#9999dd}
.card-pink  .c-feats li::before{background:rgba(191,95,255,0.12);color:#bf5fff}
.card-cyan  .c-feats li::before{background:rgba(0,183,255,0.1);color:#00b7ff}
.card-gold  .c-feats li::before{background:rgba(255,200,0,0.1);color:#ffc94d}

/* card button */
.c-btn{
  width:100%;padding:13px;border-radius:10px;border:none;
  font-family:'Inter';font-size:13px;font-weight:700;
  cursor:pointer;transition:.25s;letter-spacing:.4px;
}
.c-btn:hover{transform:translateY(-2px)}
.btn-ghost{background:rgba(255,255,255,0.06);color:#ccc;border:1px solid rgba(255,255,255,0.12)}
.btn-ghost:hover{background:rgba(255,255,255,0.1);color:#fff}
.btn-red{background:linear-gradient(135deg,#ff5f6d,#ff2d55);color:#fff;box-shadow:0 6px 24px rgba(255,45,85,0.28)}
.btn-red:hover{box-shadow:0 10px 32px rgba(255,45,85,0.48)}
.btn-pink{background:linear-gradient(135deg,#bf5fff,#6f42ff);color:#fff;box-shadow:0 6px 24px rgba(111,66,255,0.3)}
.btn-pink:hover{box-shadow:0 10px 32px rgba(111,66,255,0.5)}
.btn-cyan{background:linear-gradient(135deg,#00b7ff,#0062cc);color:#fff;box-shadow:0 6px 24px rgba(0,183,255,0.25)}
.btn-cyan:hover{box-shadow:0 10px 32px rgba(0,183,255,0.45)}
.btn-gold{background:linear-gradient(135deg,#ffc94d,#ff8c00);color:#111;box-shadow:0 6px 24px rgba(255,180,0,0.25)}
.btn-gold:hover{box-shadow:0 10px 32px rgba(255,180,0,0.45)}

.c-link{
  display:block;text-align:center;
  margin-top:12px;font-size:11px;color:#555;
  text-decoration:none;transition:.2s;
}
.c-link:hover{color:#bf5fff}

/* ── CTA ── */
.cta{
  padding:70px 60px 90px;text-align:center;
}
.cta h2{
  font-family:'Orbitron';font-size:32px;font-weight:700;
  margin-bottom:12px;
  background:linear-gradient(135deg,#ff5fcb,#00b7ff);
  -webkit-background-clip:text;-webkit-text-fill-color:transparent;
}
.cta p{font-size:14px;color:#7777aa;margin-bottom:28px}

/* ── FOOTER ── */
footer{
  text-align:center;padding:26px;
  font-size:12px;color:#444;
  border-top:1px solid rgba(255,255,255,0.04);
  position:relative;z-index:1;
}

/* ── RESPONSIVE ── */
@media(max-width:1100px){
  .cards{grid-template-columns:repeat(2,1fr);max-width:700px}
}
@media(max-width:900px){
  header{padding:14px 20px}
  nav{display:none}
  .hero{flex-direction:column;padding:110px 24px 60px;text-align:center}
  .hero-left{max-width:100%}
  .hero p{margin:0 auto 28px}
  .hero-btns{justify-content:center}
  .offers-box{width:100%;max-width:360px;margin:0 auto}
  .hero h1{font-size:38px}
  .pricing,.cta{padding:60px 24px}
  .section-head h2{font-size:26px}
}
@media(max-width:600px){
  .cards{grid-template-columns:1fr;max-width:420px;margin:0 auto}
  .hero h1{font-size:30px}
  .c-price .amount{font-size:34px}
}
@media(max-width:380px){
  .hero h1{font-size:26px}
  .logo{font-size:18px}
}
</style>
</head>
<body>

<!-- HEADER -->
<header>
  <a href="#" class="logo">Schoozie</a>
  <nav>
    <a href="#">Home</a>
    <a href="#pricing">Pricing</a>
    <a href="https://wa.me/917017760292?text=Hi%2C+I%27m+interested+in+Schoozie" target="_blank">Contact</a>
  </nav>
  <button class="header-btn" onclick="window.open('https://wa.me/917017760292?text=Hi%2C+I%27m+interested+in+Schoozie','_blank')">Get Started</button>
</header>

<!-- HERO -->
<section class="hero">
  <div class="hero-left">
    <div class="hero-tag"><span class="dot"></span> India's Smart School Platform</div>
    <h1>Your School.<br><span>Smarter.</span> Faster.</h1>
    <p>From a simple school website to a full ERP system — everything your school needs to go digital, in one place.</p>
    <div class="hero-btns">
      <button class="btn-primary" onclick="document.getElementById('pricing').scrollIntoView({behavior:'smooth'})">See Pricing Plans</button>
      <button class="btn-outline" onclick="window.open('https://wa.me/917017760292?text=Hi%2C+I%27d+like+to+know+more+about+Schoozie','_blank')">Learn More</button>
    </div>
  </div>
  <?php if($offer_active): ?>
  <div class="offers-box">
    <div class="offers-box-head">
      <span class="fire">🔥</span>
      <span style="background:linear-gradient(90deg,#ff00cc,#6f42ff);-webkit-background-clip:text;-webkit-text-fill-color:transparent"><?php echo $offer_month; ?> Special Offers</span>
    </div>
    <div class="offer-row">
      <span class="o-plan"><span class="o-icon">🖥️</span> Static Website</span>
      <span class="o-price" style="color:#ff5f6d">Rs. <?php echo $static_offer_price; ?></span>
    </div>
    <div class="offer-row">
      <span class="o-plan"><span class="o-icon">⚡</span> Dynamic Website</span>
      <span class="o-price" style="color:#bf5fff">Rs. <?php echo $dynamic_offer_price; ?></span>
    </div>
    <div class="offer-row">
      <span class="o-plan"><span class="o-icon">🏫</span> School ERP</span>
      <span class="o-price" style="color:#00f0ff">Rs. <?php echo $erp_offer_setup; ?> setup</span>
    </div>
    <div class="offer-row">
      <span class="o-plan"><span class="o-icon">🚀</span> Website + ERP</span>
      <span class="o-price" style="color:#ffd200">50% OFF</span>
    </div>
    <div class="offers-note">* Domain charges excluded &nbsp;|&nbsp; No hidden fees</div>
    <button class="offers-btn" onclick="document.getElementById('pricing').scrollIntoView({behavior:'smooth'})">View All Plans ↓</button>
  </div>
  <?php endif; ?>
</section>

<!-- PRICING -->
<section class="pricing" id="pricing">
  <div class="section-head">
    <?php if($offer_active): ?>
    <div class="offer-ribbon"><span class="dot"></span> <?php echo $offer_full; ?></div>
    <?php endif; ?>
    <h2>Simple, Clear Pricing</h2>
    <p>Pick the plan that fits your school. No hidden charges, no surprises.</p>
  </div>

  <div class="cards">

    <!-- STATIC WEBSITE -->
    <div class="card card-white">
      <?php if($offer_active): ?>
      <span class="c-badge badge-offer">⚡ <?php echo $offer_month; ?> Offer</span>
      <?php endif; ?>
      <span class="c-icon">🖥️</span>
      <div class="c-name">Static Website</div>
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
      <?php if($offer_active): ?>
      <span class="c-badge badge-popular">⚡ <?php echo $offer_month; ?> Special</span>
      <?php endif; ?>
      <span class="c-icon">⚡</span>
      <div class="c-name">Dynamic Website</div>
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
      <span class="c-badge badge-hot">⭐ Most Popular</span>
      <span class="c-icon">🏫</span>
      <div class="c-name">School ERP</div>
      <div class="c-tagline">Complete school management — fees, attendance, exams &amp; more.</div>
      <div class="c-price">
        <div class="amount"><span class="rs">Rs.</span> 10</div>
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
        <li>SMS notifications</li>
        <li>Full admin dashboard</li>
      </ul>
      <button class="c-btn btn-cyan" onclick="window.location='erp.php'">Get Started</button>
      <a href="erp.php" class="c-link">Full details &amp; terms &rarr;</a>
    </div>

    <!-- COMBO -->
    <div class="card card-gold">
      <span class="c-badge badge-deal">🔥 Best Value</span>
      <span class="c-icon">🚀</span>
      <div class="c-name">Website + ERP</div>
      <div class="c-tagline">Everything together — website &amp; full ERP at one combo price.</div>
      <div class="c-price">
        <div class="amount" style="font-size:26px;background:linear-gradient(135deg,#ffc94d,#ff8c00);-webkit-background-clip:text;-webkit-text-fill-color:transparent">50% OFF Website</div>
        <?php if($offer_active): ?>
        <div class="per" style="color:#ccc;margin-top:8px;font-size:12px">+ ERP setup: <strong style="color:#ffc94d">Rs. <?php echo $combo_erp_setup; ?></strong> <span style="color:#aaa">(<?php echo $offer_month; ?> offer)</span></div>
        <?php else: ?>
        <div class="per" style="color:#ccc;margin-top:8px;font-size:12px">+ ERP setup: <strong style="color:#ffc94d">Rs. <?php echo $erp_regular_setup; ?></strong></div>
        <?php endif; ?>
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
  <h2>Ready to Take Your School Digital?</h2>
  <p>Contact us on WhatsApp — we'll guide you through everything step by step.</p>
  <button class="btn-primary" onclick="window.open('https://wa.me/917017760292?text=Hi%2C+I%27m+ready+to+take+my+school+digital+with+Schoozie','_blank')">Contact Us on WhatsApp</button>
</section>

<!-- FOOTER -->
<footer>
  &copy; <?php echo $year; ?> Schoozie &nbsp;|&nbsp; Beyond Education Systems &nbsp;|&nbsp; All Rights Reserved
</footer>

<!-- SCHOOZIE DUCK -->
<div id="schoozie-duck">
  <div class="duck-bubble" id="duck-bubble"></div>
  <svg id="duck-svg" viewBox="0 0 80 95" width="68" height="80" xmlns="http://www.w3.org/2000/svg">
    <defs>
      <radialGradient id="bodyG" cx="50%" cy="40%" r="55%">
        <stop offset="0%"   stop-color="#c084fc"/>
        <stop offset="100%" stop-color="#6f42ff"/>
      </radialGradient>
      <radialGradient id="headG" cx="50%" cy="35%" r="55%">
        <stop offset="0%"   stop-color="#d8b4fe"/>
        <stop offset="100%" stop-color="#7c3aed"/>
      </radialGradient>
      <radialGradient id="wingG" cx="40%" cy="30%" r="60%">
        <stop offset="0%"   stop-color="#a855f7"/>
        <stop offset="100%" stop-color="#5b21b6"/>
      </radialGradient>
      <filter id="glow">
        <feGaussianBlur stdDeviation="2.5" result="blur"/>
        <feMerge><feMergeNode in="blur"/><feMergeNode in="SourceGraphic"/></feMerge>
      </filter>
    </defs>

    <!-- WINGS (behind body) -->
    <ellipse cx="14" cy="62" rx="12" ry="20" fill="url(#wingG)" transform="rotate(-18,14,62)" opacity="0.9">
      <animateTransform attributeName="transform" type="rotate" values="-18,14,62;-10,14,62;-18,14,62" dur="0.55s" repeatCount="indefinite"/>
    </ellipse>
    <ellipse cx="66" cy="62" rx="12" ry="20" fill="url(#wingG)" transform="rotate(18,66,62)" opacity="0.9">
      <animateTransform attributeName="transform" type="rotate" values="18,66,62;10,66,62;18,66,62" dur="0.55s" repeatCount="indefinite"/>
    </ellipse>

    <!-- BODY -->
    <ellipse cx="40" cy="65" rx="24" ry="22" fill="url(#bodyG)" filter="url(#glow)"/>

    <!-- BELLY shine -->
    <ellipse cx="40" cy="68" rx="13" ry="11" fill="rgba(255,255,255,0.12)"/>

    <!-- HEAD -->
    <circle cx="40" cy="34" r="21" fill="url(#headG)" filter="url(#glow)"/>

    <!-- HEAD shine -->
    <ellipse cx="33" cy="27" rx="7" ry="5" fill="rgba(255,255,255,0.18)" transform="rotate(-20,33,27)"/>

    <!-- BEAK (front oval) -->
    <ellipse cx="40" cy="46" rx="9" ry="5" fill="#00e5ff"/>
    <ellipse cx="40" cy="46" rx="9" ry="2.5" fill="#00b4d8"/>

    <!-- EYE WHITES -->
    <circle cx="29" cy="30" r="8" fill="white"/>
    <circle cx="51" cy="30" r="8" fill="white"/>

    <!-- EYE SHINE ring -->
    <circle cx="29" cy="30" r="8" fill="none" stroke="#e0d0ff" stroke-width="0.5"/>
    <circle cx="51" cy="30" r="8" fill="none" stroke="#e0d0ff" stroke-width="0.5"/>

    <!-- PUPILS (moved by JS) -->
    <circle id="pupL" cx="29" cy="31" r="4.5" fill="#1a0a2e"/>
    <circle id="pupR" cx="51" cy="31" r="4.5" fill="#1a0a2e"/>

    <!-- PUPIL SHINE -->
    <circle id="shineL" cx="31" cy="29" r="1.5" fill="white"/>
    <circle id="shineR" cx="53" cy="29" r="1.5" fill="white"/>

    <!-- FEET -->
    <ellipse cx="32" cy="89" rx="11" ry="5" fill="#00e5ff" opacity="0.9">
      <animateTransform attributeName="transform" type="translate" values="0,0;0,2;0,0" dur="0.55s" repeatCount="indefinite"/>
    </ellipse>
    <ellipse cx="48" cy="89" rx="11" ry="5" fill="#00e5ff" opacity="0.9">
      <animateTransform attributeName="transform" type="translate" values="0,2;0,0;0,2" dur="0.55s" repeatCount="indefinite"/>
    </ellipse>

    <!-- BODY bob -->
    <animateTransform attributeName="transform" type="translate" values="0,0;0,-3;0,0" dur="0.55s" repeatCount="indefinite" xlink:href="#duck-svg"/>
  </svg>
  <div class="duck-name">Schoozie</div>
</div>

<style>
#schoozie-duck{
  position:fixed;bottom:24px;right:28px;z-index:9999;
  display:flex;flex-direction:column;align-items:center;
  cursor:pointer;user-select:none;
  filter:drop-shadow(0 0 14px rgba(111,66,255,0.7));
  animation:duck-bob 0.9s ease-in-out infinite alternate;
}
@keyframes duck-bob{
  from{transform:translateY(0)}
  to{transform:translateY(-6px)}
}
.duck-name{
  font-family:'Orbitron';font-size:9px;letter-spacing:1.5px;
  background:linear-gradient(90deg,#c084fc,#00e5ff);
  -webkit-background-clip:text;-webkit-text-fill-color:transparent;
  margin-top:4px;
  filter:drop-shadow(0 0 6px rgba(192,132,252,0.8));
}
.duck-bubble{
  background:linear-gradient(135deg,rgba(111,66,255,0.95),rgba(0,229,255,0.9));
  color:#fff;font-size:12px;font-weight:600;
  padding:7px 14px;border-radius:14px 14px 2px 14px;
  margin-bottom:10px;white-space:nowrap;
  opacity:0;transform:scale(0.5) translateY(8px);
  transition:opacity .3s, transform .3s;
  box-shadow:0 4px 20px rgba(111,66,255,0.5);
  pointer-events:none;
  border:1px solid rgba(255,255,255,0.2);
}
.duck-bubble.show{opacity:1;transform:scale(1) translateY(0)}
#schoozie-duck:hover{
  filter:drop-shadow(0 0 24px rgba(192,132,252,1));
  animation-play-state:paused;
}
#schoozie-duck:hover .duck-bubble{opacity:1;transform:scale(1) translateY(0)}
</style>

<script>
(function(){
  const duck    = document.getElementById('schoozie-duck');
  const bubble  = document.getElementById('duck-bubble');
  const pupL    = document.getElementById('pupL');
  const pupR    = document.getElementById('pupR');
  const shineL  = document.getElementById('shineL');
  const shineR  = document.getElementById('shineR');

  const messages = [
    'Quack! 🦆','Hi there! 👋','Pick a plan!','Need help?',
    'Honk honk! 📣','Go digital! 🎓','Let\'s talk! 💬','I\'m Schoozie!',
    'Click me! 😄','Schools love me 🏫'
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
