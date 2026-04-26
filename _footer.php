<?php
/**
 * _footer.php — Shared site footer
 *
 * Requires config.php to be loaded (for $contact_* and $demo_url variables)
 * Optional: $plan (array) — if set, WhatsApp message includes the plan name
 */
$wa_footer_text = isset($plan)
  ? 'Hi%2C+I%27m+interested+in+' . urlencode($plan['name']) . '+from+Schoozie.'
  : 'Hi%2C+I%27m+interested+in+Schoozie+for+my+school.';
?>
<footer class="site-footer" itemscope itemtype="https://schema.org/Organization">
  <div class="footer-grid">

    <!-- BRAND -->
    <div class="footer-col">
      <a href="index.php" class="footer-brand-logo">
        <img src="assets/svg/schoozie-logo.svg" alt="Schoozie Logo">
        Schoozie
      </a>
      <p class="footer-desc">Schoozie helps schools across India go digital — with professional school websites, dynamic CMS platforms, and powerful ERP software tailored for modern institutions.</p>
      <p class="footer-keywords" aria-hidden="true">school website design india · school management software · school ERP system · school CMS · digital school solutions</p>
    </div>

    <!-- OUR PLANS -->
    <div class="footer-col">
      <h3>Our Plans</h3>
      <nav aria-label="Plans navigation">
        <ul>
          <li><a href="static-web.php"><i class="fa-solid fa-desktop"></i> Static School Website</a></li>
          <li><a href="dynamic-web.php"><i class="fa-solid fa-bolt"></i> Dynamic Website + CMS</a></li>
          <li><a href="erp.php"><i class="fa-solid fa-layer-group"></i> School ERP Software</a></li>
          <li><a href="combo.php"><i class="fa-solid fa-fire"></i> Website + ERP Combo</a></li>
        </ul>
      </nav>
    </div>

    <!-- QUICK LINKS -->
    <div class="footer-col">
      <h3>Quick Links</h3>
      <ul>
        <li><a href="index.php#pricing"><i class="fa-solid fa-angle-right"></i> View All Plans</a></li>
        <li><a href="why.php"><i class="fa-solid fa-angle-right"></i> Why Schoozie</a></li>
        <li><a href="about.php"><i class="fa-solid fa-angle-right"></i> About Schoozie</a></li>
        <li><a href="contact.php"><i class="fa-solid fa-angle-right"></i> Contact Us</a></li>
        <li><a href="<?php echo $demo_url; ?>" target="_blank" rel="noopener"><i class="fa-solid fa-angle-right"></i> Live Demo</a></li>
      </ul>
    </div>

    <!-- CONTACT -->
    <div class="footer-col">
      <h3>Contact Us</h3>
      <address style="font-style:normal">
        <div class="footer-contact-item">
          <i class="fa-solid fa-location-dot"></i>
          <span>
            <strong style="font-size:11px;color:#9090bb;display:block;margin-bottom:2px">South India Office</strong>
            <span itemprop="address" itemscope itemtype="https://schema.org/PostalAddress">
              <?php if($office_south_street): ?><span itemprop="streetAddress"><?php echo $office_south_street; ?></span>, <?php endif; ?>
              <span itemprop="addressLocality"><?php echo $office_south_city; ?></span>,
              <span itemprop="addressRegion"><?php echo $office_south_region; ?></span>
            </span>
          </span>
        </div>
        <div class="footer-contact-item">
          <i class="fa-solid fa-location-dot"></i>
          <span>
            <strong style="font-size:11px;color:#9090bb;display:block;margin-bottom:2px">North India Office</strong>
            <span itemprop="address" itemscope itemtype="https://schema.org/PostalAddress">
              <?php if($office_north_street): ?><span itemprop="streetAddress"><?php echo $office_north_street; ?></span>, <?php endif; ?>
              <span itemprop="addressLocality"><?php echo $office_north_city; ?></span><?php if($office_north_pin): ?> - <?php echo $office_north_pin; ?><?php endif; ?>,
              <span itemprop="addressRegion"><?php echo $office_north_region; ?></span>
            </span>
          </span>
        </div>
        <div class="footer-contact-item">
          <i class="fa-solid fa-envelope"></i>
          <a href="mailto:<?php echo $contact_email; ?>" itemprop="email"><?php echo $contact_email; ?></a>
        </div>
      </address>
      <a class="footer-wa-btn"
         href="https://wa.me/<?php echo $contact_whatsapp; ?>?text=<?php echo $wa_footer_text; ?>"
         target="_blank" rel="noopener">
        <i class="fa-brands fa-whatsapp"></i> Chat on WhatsApp
      </a>
    </div>

  </div><!-- end footer-grid -->

  <div class="footer-bar">
    <span>&copy; <?php echo date('Y'); ?> <strong>Schoozie</strong> &mdash; Beyond Education Systems. All Rights Reserved.</span>
    <div class="footer-bar-links">
      <a href="privacy.php">Privacy Policy</a>
      <a href="terms.php">Terms of Use</a>
      <a href="contact.php">Support</a>
    </div>
  </div>
</footer>

<!-- SCHOOZIE DUCK -->
<div id="schoozie-duck">
  <div class="duck-bubble" id="duck-bubble"></div>
  <div class="duck-base">
  <svg id="duck-svg" viewBox="0 0 80 95" width="56" height="67" xmlns="http://www.w3.org/2000/svg">
    <defs>
      <radialGradient id="bodyG" cx="35%" cy="28%" r="70%">
        <stop offset="0%"   stop-color="#c084fc"/>
        <stop offset="55%"  stop-color="#7c3aed"/>
        <stop offset="100%" stop-color="#3b0764"/>
      </radialGradient>
      <linearGradient id="bannerG" x1="0%" y1="0%" x2="100%" y2="0%">
        <stop offset="0%"   stop-color="#f59e0b"/>
        <stop offset="100%" stop-color="#fcd34d"/>
      </linearGradient>
      <radialGradient id="headG" cx="40%" cy="30%" r="65%">
        <stop offset="0%"   stop-color="#e9d5ff"/>
        <stop offset="50%"  stop-color="#a855f7"/>
        <stop offset="100%" stop-color="#5b21b6"/>
      </radialGradient>
      <linearGradient id="wingG" x1="0%" y1="0%" x2="100%" y2="100%">
        <stop offset="0%"   stop-color="#c084fc"/>
        <stop offset="100%" stop-color="#4c1d95"/>
      </linearGradient>
      <radialGradient id="irisG" cx="38%" cy="35%" r="65%">
        <stop offset="0%"   stop-color="#67e8f9"/>
        <stop offset="60%"  stop-color="#06b6d4"/>
        <stop offset="100%" stop-color="#0e7490"/>
      </radialGradient>
      <linearGradient id="beakG" x1="0%" y1="0%" x2="0%" y2="100%">
        <stop offset="0%"   stop-color="#fde68a"/>
        <stop offset="100%" stop-color="#f59e0b"/>
      </linearGradient>
      <radialGradient id="bellyG" cx="50%" cy="25%" r="70%">
        <stop offset="0%"   stop-color="rgba(255,255,255,0.22)"/>
        <stop offset="100%" stop-color="rgba(255,255,255,0)"/>
      </radialGradient>
      <filter id="eyeGlow" x="-50%" y="-50%" width="200%" height="200%">
        <feGaussianBlur in="SourceGraphic" stdDeviation="2" result="blur"/>
        <feMerge><feMergeNode in="blur"/><feMergeNode in="SourceGraphic"/></feMerge>
      </filter>
      <filter id="bodyGlow" x="-20%" y="-20%" width="140%" height="140%">
        <feGaussianBlur in="SourceGraphic" stdDeviation="2.5" result="blur"/>
        <feMerge><feMergeNode in="blur"/><feMergeNode in="SourceGraphic"/></feMerge>
      </filter>
    </defs>
    <ellipse cx="14" cy="62" rx="13" ry="21" fill="url(#wingG)" transform="rotate(-18,14,62)" opacity="0.92">
      <animateTransform attributeName="transform" type="rotate" values="-18,14,62;-10,14,62;-18,14,62" dur="0.55s" repeatCount="indefinite"/>
    </ellipse>
    <ellipse cx="14" cy="57" rx="5.5" ry="11" fill="rgba(216,180,254,0.35)" transform="rotate(-18,14,62)">
      <animateTransform attributeName="transform" type="rotate" values="-18,14,62;-10,14,62;-18,14,62" dur="0.55s" repeatCount="indefinite"/>
    </ellipse>
    <ellipse cx="66" cy="62" rx="13" ry="21" fill="url(#wingG)" transform="rotate(18,66,62)" opacity="0.92">
      <animateTransform attributeName="transform" type="rotate" values="18,66,62;10,66,62;18,66,62" dur="0.55s" repeatCount="indefinite"/>
    </ellipse>
    <ellipse cx="66" cy="57" rx="5.5" ry="11" fill="rgba(216,180,254,0.35)" transform="rotate(18,66,62)">
      <animateTransform attributeName="transform" type="rotate" values="18,66,62;10,66,62;18,66,62" dur="0.55s" repeatCount="indefinite"/>
    </ellipse>
    <ellipse cx="40" cy="65" rx="25" ry="23" fill="url(#bodyG)" filter="url(#bodyGlow)"/>
    <ellipse cx="40" cy="65" rx="25" ry="23" fill="none" stroke="rgba(192,132,252,0.3)" stroke-width="0.8"/>
    <ellipse cx="40" cy="68" rx="14" ry="12" fill="url(#bellyG)"/>
    <circle cx="40" cy="34" r="22" fill="url(#headG)" filter="url(#bodyGlow)"/>
    <circle cx="40" cy="34" r="22" fill="none" stroke="rgba(216,180,254,0.25)" stroke-width="0.8"/>
    <ellipse cx="32" cy="26" rx="8" ry="5.5" fill="rgba(255,255,255,0.22)" transform="rotate(-20,32,26)"/>
    <path d="M 32 46 Q 40 53 48 46 Q 44 44 40 43 Q 36 44 32 46 Z" fill="url(#beakG)"/>
    <line x1="40" y1="43" x2="40" y2="52" stroke="rgba(0,0,0,0.12)" stroke-width="0.7"/>
    <path d="M 33 46 Q 40 50 40 46 Q 37 44 33 46 Z" fill="rgba(255,255,255,0.25)"/>
    <circle cx="29" cy="30" r="10" fill="#1a0a2e"/>
    <circle cx="51" cy="30" r="10" fill="#1a0a2e"/>
    <circle cx="29" cy="30" r="9"  fill="#ffffff"/>
    <circle cx="51" cy="30" r="9"  fill="#ffffff"/>
    <circle cx="29" cy="30" r="9"  fill="none" stroke="rgba(103,232,249,0.8)" stroke-width="1.5" filter="url(#eyeGlow)"/>
    <circle cx="51" cy="30" r="9"  fill="none" stroke="rgba(103,232,249,0.8)" stroke-width="1.5" filter="url(#eyeGlow)"/>
    <circle cx="29" cy="30" r="6.5" fill="url(#irisG)" filter="url(#eyeGlow)"/>
    <circle cx="51" cy="30" r="6.5" fill="url(#irisG)" filter="url(#eyeGlow)"/>
    <circle id="pupL"   cx="29" cy="31" r="4" fill="#020210"/>
    <circle id="pupR"   cx="51" cy="31" r="4" fill="#020210"/>
    <circle id="shineL" cx="31" cy="29" r="1.8" fill="white" opacity="1"/>
    <circle id="shineR" cx="53" cy="29" r="1.8" fill="white" opacity="1"/>
    <circle cx="27" cy="33" r="1.2" fill="white" opacity="0.5"/>
    <circle cx="49" cy="33" r="1.2" fill="white" opacity="0.5"/>
    <rect x="10" y="64" width="60" height="13" rx="3" fill="url(#bannerG)" opacity="0.97"/>
    <rect x="10" y="64" width="60" height="13" rx="3" fill="none" stroke="rgba(255,220,80,0.6)" stroke-width="0.8"/>
    <rect x="13" y="65.5" width="26" height="3" rx="1.5" fill="rgba(255,255,255,0.25)"/>
    <text x="40" y="73.5" text-anchor="middle" font-family="Arial Black,Arial,sans-serif" font-size="6.8" font-weight="900" letter-spacing="0.8" fill="#3b1a00">SCHOOZIE</text>
    <ellipse cx="11" cy="70" rx="6" ry="4" fill="url(#wingG)" transform="rotate(-20,11,70)"/>
    <ellipse cx="11" cy="70" rx="3" ry="2" fill="rgba(216,180,254,0.35)" transform="rotate(-20,11,70)"/>
    <ellipse cx="69" cy="70" rx="6" ry="4" fill="url(#wingG)" transform="rotate(20,69,70)"/>
    <ellipse cx="69" cy="70" rx="3" ry="2" fill="rgba(216,180,254,0.35)" transform="rotate(20,69,70)"/>
    <ellipse cx="32" cy="89" rx="12" ry="5.5" fill="#00e5ff" opacity="0.9">
      <animateTransform attributeName="transform" type="translate" values="0,0;0,2;0,0" dur="0.55s" repeatCount="indefinite"/>
    </ellipse>
    <ellipse cx="48" cy="89" rx="12" ry="5.5" fill="#00e5ff" opacity="0.9">
      <animateTransform attributeName="transform" type="translate" values="0,2;0,0;0,2" dur="0.55s" repeatCount="indefinite"/>
    </ellipse>
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
    'Schools trust us 🏫','No lock-in! 🔓','₹<?php echo $erp_per_student; ?>/student only! 💰',
    'Live in minutes! ⏱️','Free demo! 🎓','Let\'s talk! 📞'
  ];

  let bubbleTimer;

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

  function showBubble(msg){
    clearTimeout(bubbleTimer);
    bubble.textContent = msg;
    bubble.classList.add('show');
    bubbleTimer = setTimeout(()=> bubble.classList.remove('show'), 2400);
  }
  setTimeout(()=> showBubble('Hi! Need help? 👋'), 3000);

  duck.addEventListener('click', ()=> showBubble(messages[Math.floor(Math.random()*messages.length)]));
})();
</script>
