<?php
/**
 * _footer.php - Shared site footer
 *
 * Requires config.php to be loaded (for $contact_* and $demo_url variables)
 * Optional: $plan (array) - if set, WhatsApp message includes the plan name
 */
$wa_footer_text = isset($plan)
  ? 'Hi%2C+I%27m+interested+in+' . urlencode($plan['name']) . '+from+Schoozie.'
  : 'Hi%2C+I%27m+interested+in+Schoozie+for+my+school.';
?>
<footer class="site-footer" itemscope itemtype="https://schema.org/Organization">
  <div class="footer-grid">

    <!-- BRAND -->
    <div class="footer-col">
      <p class="footer-desc">Schoozie helps schools across India go digital - with professional school websites, dynamic CMS platforms, and powerful ERP software tailored for modern institutions.</p>
      <p class="footer-keywords" aria-hidden="true">school website design india · school management software · school ERP system · school CMS · digital school solutions</p>
    </div>

    <!-- QUICK LINKS -->
    <div class="footer-col">
      <h3>Quick Links</h3>
      <nav aria-label="Footer navigation">
        <ul>
          <li><a href="index.php"><i class="fa-solid fa-angle-right"></i> Home</a></li>
          <li><a href="websites.php"><i class="fa-solid fa-angle-right"></i> School Websites</a></li>
          <li><a href="erp.php"><i class="fa-solid fa-angle-right"></i> School ERP</a></li>
          <li><a href="pricing.php"><i class="fa-solid fa-angle-right"></i> Plans &amp; Pricing</a></li>
          <li><a href="vision.php"><i class="fa-solid fa-angle-right"></i> Our Vision</a></li>
          <li><a href="contact.php"><i class="fa-solid fa-angle-right"></i> Contact Us</a></li>
          <li><a href="<?php echo $demo_url; ?>" target="_blank" rel="noopener"><i class="fa-solid fa-angle-right"></i> Live Demo</a></li>
        </ul>
      </nav>
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
         target="_blank" rel="noopener"
         aria-label="Chat with us on WhatsApp"
         title="Chat on WhatsApp">
        <i class="fa-brands fa-whatsapp"></i>
      </a>
    </div>

  </div><!-- end footer-grid -->

  <div class="footer-bar">
    <span>&copy; <?php echo date('Y'); ?> <strong>Schoozie</strong> - Beyond Education Systems. All Rights Reserved.</span>
    <div class="footer-bar-links">
      <a href="privacy.php">Privacy</a>
      <a href="terms.php">Terms</a>
      <a href="refund.php">Refund</a>
      <a href="data-deletion.php">Data Deletion</a>
    </div>
  </div>
</footer>


<!-- SCHOOZIE MASCOT (logo) -->
<div id="schoozie-duck">
  <div class="cube-form" id="cube-form">
    <button type="button" class="cube-form-close" id="cube-form-close" aria-label="Close">&times;</button>
    <div class="cube-form-head">
      <span><i class="fa-solid fa-headset"></i> Request a Callback</span>
    </div>
    <p>Share your details and our team will reach out.</p>
    <input type="text" id="cf-name" placeholder="Full name *" required>
    <div class="cf-phone">
      <span class="cf-phone-cc">+91</span>
      <input type="tel" id="cf-phone" placeholder="Mobile number *" inputmode="numeric" maxlength="10" pattern="[0-9]{10}" autocomplete="tel-national" required>
    </div>
    <input type="text" id="cf-school" placeholder="School / institution (optional)">
    <input type="text" id="cf-company" name="company" tabindex="-1" autocomplete="off" aria-hidden="true" style="position:absolute;left:-9999px;width:1px;height:1px;opacity:0">
    <button type="button" class="cube-form-send" id="cf-send">Request Callback <i class="fa-solid fa-arrow-right"></i></button>
    <div class="cube-form-note"><i class="fa-solid fa-clock"></i> We&rsquo;ll call you back within 24 hours</div>
  </div>
  <div class="duck-logo cube-mascot" role="button" tabindex="0" aria-label="Request a callback"><i class="fa-solid fa-phone"></i></div>
</div>

<script>
(function(){
  var duck   = document.getElementById('schoozie-duck');
  var form   = document.getElementById('cube-form');
  var cube   = duck && duck.querySelector('.cube-mascot');
  if(!duck || !form || !cube) return;
  function spin(){ cube.classList.remove('spin'); void cube.offsetWidth; cube.classList.add('spin'); }
  function openForm(o, foc){ form.classList.toggle('open', o); if(o && foc) setTimeout(function(){ var n=document.getElementById('cf-name'); if(n) n.focus(); }, 260); }

  duck.addEventListener('mouseenter', function(){ if(!form.classList.contains('open')){ spin(); openForm(true, false); } });
  cube.addEventListener('click', function(e){ e.stopPropagation(); spin(); openForm(true, true); });
  var closeBtn = document.getElementById('cube-form-close');
  if(closeBtn) closeBtn.addEventListener('click', function(e){ e.stopPropagation(); openForm(false); });
  form.addEventListener('click', function(e){ e.stopPropagation(); });
  document.addEventListener('click', function(){ openForm(false); });

  // Mobile field: digits only, hard-capped at 10 (maxlength alone isn't reliable on mobile tel inputs)
  var phoneInput = document.getElementById('cf-phone');
  if(phoneInput) phoneInput.addEventListener('input', function(){
    this.value = this.value.replace(/\D/g, '').slice(0, 10);
  });

  var send = document.getElementById('cf-send');
  var note = form.querySelector('.cube-form-note');
  var head = form.querySelector('.cube-form-head span');
  var noteHTML = note ? note.innerHTML : '';
  var headHTML = head ? head.innerHTML : '';
  var sendHTML = send ? send.innerHTML : '';

  function resetForm(){
    if(send){ send.disabled = false; send.innerHTML = sendHTML; }
    if(note){ note.innerHTML = noteHTML; note.style.color = ''; }
    if(head){ head.innerHTML = headHTML; }
  }

  if(send) send.addEventListener('click', function(){
    var nameEl = document.getElementById('cf-name');
    var phoneEl = document.getElementById('cf-phone');
    var name   = (nameEl.value  || '').trim();
    var digits = (phoneEl.value || '').replace(/\D/g,'');
    var school = (document.getElementById('cf-school').value  || '').trim();
    var company= (document.getElementById('cf-company').value || '').trim();
    if(!name){   if(note){ note.textContent = 'Please enter your name.';  note.style.color = '#b0472f'; } nameEl.focus();  return; }
    if(!digits){ if(note){ note.textContent = 'Please enter a mobile number.'; note.style.color = '#b0472f'; } phoneEl.focus(); return; }
    if(digits.length < 10){ if(note){ note.textContent = 'Please enter a valid 10-digit mobile number.'; note.style.color = '#b0472f'; } phoneEl.focus(); return; }
    var phone = '+91 ' + digits;

    send.disabled = true; send.innerHTML = 'Sending…';
    if(note){ note.innerHTML = '<i class="fa-solid fa-spinner fa-spin"></i> Sending your request…'; note.style.color = ''; }

    var body = new URLSearchParams({ name:name, phone:phone, school:school, company:company, page:location.href });
    fetch('send-callback.php', { method:'POST', headers:{'Content-Type':'application/x-www-form-urlencoded'}, body:body.toString() })
      .then(function(r){ return r.json().catch(function(){ return { ok:false, error:'Unexpected response.' }; }); })
      .then(function(res){
        if(res && res.ok){
          if(head) head.innerHTML = '<i class="fa-solid fa-circle-check"></i> Request sent';
          if(note){ note.innerHTML = '<i class="fa-solid fa-check"></i> Thanks! We’ll call you back within 24 hours.'; note.style.color = ''; }
          nameEl.value = ''; phoneEl.value = ''; document.getElementById('cf-school').value = '';
          setTimeout(function(){ openForm(false); setTimeout(resetForm, 400); }, 2400);
        } else {
          if(note){ note.textContent = (res && res.error) || 'Could not send. Please try again.'; note.style.color = '#b0472f'; }
          send.disabled = false; send.innerHTML = sendHTML;
        }
      })
      .catch(function(){
        if(note){ note.textContent = 'Network error. Please try again.'; note.style.color = '#b0472f'; }
        send.disabled = false; send.innerHTML = sendHTML;
      });
  });
})();
</script>
