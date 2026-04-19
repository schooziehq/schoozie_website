<?php
/**
 * _header.php — Shared site header + mobile nav + hamburger JS
 *
 * Variables to set BEFORE including this file:
 *   $active_page  (string) — 'home' | 'about' | 'contact' | ''
 *   $show_back_btn (bool)  — true on plan pages to show "← Plans" instead of "Get Started"
 *
 * Requires config.php to be loaded (for $demo_url, $contact_whatsapp)
 */
if (!isset($active_page))   $active_page   = '';
if (!isset($show_back_btn)) $show_back_btn = false;
?>
<!-- PROMO STRIP -->
<div class="promo-strip promo-fixed">
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

<header>
  <a href="index.php" class="logo">
    <img src="assets/svg/schoozie-logo.svg" class="logo-icon" alt="Schoozie">
    <span>Schoozie</span>
  </a>
  <nav>
    <a href="index.php"      <?php if($active_page==='home')    echo 'class="nav-active"'; ?>>Home</a>
    <a href="index.php#pricing" <?php if($active_page==='plans') echo 'class="nav-active"'; ?>>Plans</a>
    <a href="why.php"        <?php if($active_page==='why')     echo 'class="nav-active"'; ?>>Why Schoozie?</a>
    <a href="about.php"      <?php if($active_page==='about')   echo 'class="nav-active"'; ?>>About</a>
    <a href="contact.php"    <?php if($active_page==='contact') echo 'class="nav-active"'; ?>>Contact</a>
  </nav>
  <div class="header-right">
    <a href="<?php echo $demo_url; ?>" target="_blank" rel="noopener" class="header-demo-btn">
      <i class="fa-solid fa-eye"></i> Demo Site
    </a>
    <?php if($show_back_btn): ?>
    <a href="index.php" class="back-btn">&#8592; Plans</a>
    <?php else: ?>
    <a href="https://wa.me/<?php echo $contact_whatsapp; ?>" target="_blank" rel="noopener" class="header-btn">Get Started</a>
    <?php endif; ?>
    <button class="hamburger" id="hamburger" aria-label="Toggle menu" aria-expanded="false">
      <span></span><span></span><span></span>
    </button>
  </div>
</header>

<!-- MOBILE NAV -->
<div class="mobile-nav" id="mobile-nav" role="navigation" aria-label="Mobile menu">
  <a href="index.php">Home</a>
  <a href="index.php#pricing">Plans</a>
  <a href="why.php">Why Schoozie?</a>
  <a href="about.php">About</a>
  <a href="contact.php">Contact</a>
  <a href="https://wa.me/<?php echo $contact_whatsapp; ?>" target="_blank" rel="noopener" class="mobile-nav-cta">Get Started &rarr;</a>
  <a href="<?php echo $demo_url; ?>" target="_blank" rel="noopener" class="mobile-nav-demo">
    <i class="fa-solid fa-eye"></i>Demo Site
  </a>
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
