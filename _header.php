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
    <span><i class="fa-solid fa-crown"></i> Take your school digital at <strong>India's lowest price</strong> - Only 100 founding spots available.</span>
    <span class="promo-sep">◆</span>
    <span><i class="fa-solid fa-fire-flame-curved"></i> Once 100 schools join, <strong>this price is gone forever.</strong> Secure your spot now.</span>
    <span class="promo-sep">◆</span>
    <span><i class="fa-solid fa-bolt"></i> Founding Offer - <strong>Your price stays locked for life.</strong> No hike. No surprise bills.</span>
    <span class="promo-sep">◆</span>
    <span><i class="fa-solid fa-crown"></i> Take your school digital at <strong>India's lowest price</strong> - Only 100 founding spots available.</span>
    <span class="promo-sep">◆</span>
    <span><i class="fa-solid fa-fire-flame-curved"></i> Once 100 schools join, <strong>this price is gone forever.</strong> Secure your spot now.</span>
    <span class="promo-sep">◆</span>
    <span><i class="fa-solid fa-bolt"></i> Founding Offer - <strong>Your price stays locked for life.</strong> No hike. No surprise bills.</span>
    <span class="promo-sep">◆</span>
  </div>
</div>

<header>
  <a href="index.php" class="logo">
    <img src="assets/svg/schoozie-logo.svg" class="logo-icon" alt="Schoozie">
    <span>Schoozie</span>
  </a>
  <?php $plans_active = in_array($active_page, ['plans','websites','erp','combo'], true); ?>
  <nav>
    <a href="index.php"      <?php if($active_page==='home')    echo 'class="nav-active"'; ?>>Home</a>
    <div class="nav-dropdown <?php echo $plans_active ? 'is-active' : ''; ?>">
      <a href="websites.php" class="nav-dropdown-trigger <?php echo $plans_active ? 'nav-active' : ''; ?>">
        Plans <i class="fa-solid fa-chevron-down nav-chev"></i>
      </a>
      <div class="nav-dropdown-menu">
        <a href="websites.php" <?php if($active_page==='websites') echo 'class="is-current"'; ?>>
          <i class="fa-solid fa-globe"></i>
          <span><strong>Websites</strong><em>Static &amp; Dynamic</em></span>
        </a>
        <a href="erp.php" <?php if($active_page==='erp') echo 'class="is-current"'; ?>>
          <i class="fa-solid fa-layer-group"></i>
          <span><strong>School ERP</strong><em>4 tiers &middot; Q/H/Y billing</em></span>
        </a>
        <a href="combo.php" <?php if($active_page==='combo') echo 'class="is-current"'; ?>>
          <i class="fa-solid fa-fire"></i>
          <span><strong>Website + ERP Combo</strong><em>Best value bundle</em></span>
        </a>
      </div>
    </div>
    <?php /* hidden until launch:
    <a href="offers.php"     <?php if($active_page==='offers')  echo 'class="nav-active"'; ?>>What We Offer</a>
    */ ?>
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
  <div class="mobile-nav-group">
    <span class="mobile-nav-group-label">Plans</span>
    <a href="websites.php"><i class="fa-solid fa-globe"></i> Websites <em>(Static &amp; Dynamic)</em></a>
    <a href="erp.php"><i class="fa-solid fa-layer-group"></i> School ERP</a>
    <a href="combo.php"><i class="fa-solid fa-fire"></i> Website + ERP Combo</a>
  </div>
  <?php /* hidden until launch:
  <a href="offers.php">What We Offer</a>
  */ ?>
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
