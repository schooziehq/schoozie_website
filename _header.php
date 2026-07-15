<?php
/**
 * _header.php - Shared site header + mobile nav + hamburger JS
 *
 * Variables to set BEFORE including this file:
 *   $active_page  (string) - 'home' | 'about' | 'contact' | ''
 *   $show_back_btn (bool)  - true on plan pages to show "← Plans" instead of "Get Started"
 *
 * Requires config.php to be loaded (for $demo_url, $contact_whatsapp)
 */
if (!isset($active_page))   $active_page   = '';
if (!isset($show_back_btn)) $show_back_btn = false;
?>
<!-- PROMO STRIP -->
<div class="promo-strip promo-fixed">
  <div class="promo-track">
    <span><i class="fa-solid fa-globe"></i> Professional school <strong>websites, dynamic CMS &amp; AI-powered ERP</strong> - all in one place.</span>
    <span class="promo-sep">◆</span>
    <span><i class="fa-solid fa-language"></i> AI that speaks your parents&rsquo; language - <strong>updates in Hindi, Tamil, Bengali &amp; more</strong>.</span>
    <span class="promo-sep">◆</span>
    <span><i class="fa-solid fa-layer-group"></i> One connected platform for <strong>attendance, fees, exams, transport &amp; the parent app</strong>.</span>
    <span class="promo-sep">◆</span>
    <span><i class="fa-solid fa-globe"></i> Professional school <strong>websites, dynamic CMS &amp; AI-powered ERP</strong> - all in one place.</span>
    <span class="promo-sep">◆</span>
    <span><i class="fa-solid fa-language"></i> AI that speaks your parents&rsquo; language - <strong>updates in Hindi, Tamil, Bengali &amp; more</strong>.</span>
    <span class="promo-sep">◆</span>
    <span><i class="fa-solid fa-layer-group"></i> One connected platform for <strong>attendance, fees, exams, transport &amp; the parent app</strong>.</span>
    <span class="promo-sep">◆</span>
  </div>
</div>

<header>
  <a href="index.php" class="logo">
    <img src="assets/svg/schoozie-wordmark.svg?v=<?php echo @filemtime('assets/svg/schoozie-wordmark.svg'); ?>" class="logo-full" alt="Schoozie">
  </a>
  <?php $plans_active = in_array($active_page, ['plans','websites','erp','pricing'], true); ?>
  <nav>
    <a href="index.php"      <?php if($active_page==='home')    echo 'class="nav-active"'; ?>>Home</a>
    <a href="erp.php"        <?php if($active_page==='erp')     echo 'class="nav-active"'; ?>>ERP</a>
    <a href="websites.php"   <?php if($active_page==='websites') echo 'class="nav-active"'; ?>>Websites</a>
    <a href="pricing.php"    <?php if($active_page==='pricing') echo 'class="nav-active"'; ?>>Plans</a>
    <?php /* hidden until launch:
    <a href="offers.php"     <?php if($active_page==='offers')  echo 'class="nav-active"'; ?>>What We Offer</a>
    */ ?>
    <a href="vision.php"     <?php if($active_page==='vision')  echo 'class="nav-active"'; ?>>Vision</a>
    <a href="contact.php"    <?php if($active_page==='contact') echo 'class="nav-active"'; ?>>Contact</a>
  </nav>
  <div class="header-right">
    <a href="<?php echo $demo_url; ?>" target="_blank" rel="noopener" class="header-demo-btn">
      <i class="fa-solid fa-eye"></i> Demo Site
    </a>
    <?php if($show_back_btn): ?>
    <a href="index.php" class="back-btn">&#8592; Plans</a>
    <?php endif; ?>
    <button class="hamburger" id="hamburger" aria-label="Toggle menu" aria-expanded="false">
      <span></span><span></span><span></span>
    </button>
  </div>
</header>

<!-- MOBILE NAV -->
<div class="mobile-nav" id="mobile-nav" role="navigation" aria-label="Mobile menu">
  <a href="index.php"    <?php if($active_page==='home')     echo 'class="nav-active"'; ?>>Home</a>
  <a href="erp.php"      <?php if($active_page==='erp')      echo 'class="nav-active"'; ?>>ERP</a>
  <a href="websites.php" <?php if($active_page==='websites') echo 'class="nav-active"'; ?>>Websites</a>
  <a href="pricing.php"  <?php if($active_page==='pricing')  echo 'class="nav-active"'; ?>>Plans</a>
  <?php /* hidden until launch:
  <a href="offers.php">What We Offer</a>
  */ ?>
  <a href="vision.php"   <?php if($active_page==='vision')   echo 'class="nav-active"'; ?>>Vision</a>
  <a href="contact.php"  <?php if($active_page==='contact')  echo 'class="nav-active"'; ?>>Contact</a>
</div>

<script>
(function(){
  var btn = document.getElementById('hamburger');
  var nav = document.getElementById('mobile-nav');
  if(!btn || !nav) return;
  btn.addEventListener('click', function(){
    var open = nav.classList.toggle('open');
    btn.classList.toggle('open', open);
    btn.setAttribute('aria-expanded', open);
  });
  document.addEventListener('click', function(e){
    if(!btn.contains(e.target) && !nav.contains(e.target)){
      nav.classList.remove('open');
      btn.classList.remove('open');
      btn.setAttribute('aria-expanded', 'false');
    }
  });
})();
</script>
