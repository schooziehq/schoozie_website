<?php require_once 'config.php'; $year = date("Y"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include '_analytics.php'; ?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contact Schoozie | Get a Free Demo for Your School</title>
<meta name="description" content="Get in touch with Schoozie for a free demo of our school website, CMS, or ERP software. We respond fast on WhatsApp. Serving schools across India.">
<meta name="keywords" content="contact schoozie, school website demo india, school ERP demo, school software enquiry india, get school website made india">
<meta name="robots" content="index, follow">
<link rel="canonical" href="https://schoozie.com/contact.php">

<!-- Open Graph -->
<meta property="og:type" content="website">
<meta property="og:title" content="Contact Schoozie - Get a Free Demo for Your School">
<meta property="og:description" content="Reach out on WhatsApp or email to get a free demo of Schoozie's school website and ERP solutions.">
<meta property="og:url" content="https://schoozie.com/contact.php">
<meta property="og:image" content="https://schoozie.com/assets/og-image.jpg">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:image:type" content="image/jpeg">
<meta property="og:image:alt" content="Contact Schoozie - Get a Free Demo for Your School">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Contact Schoozie - Get a Free Demo for Your School">
<meta name="twitter:description" content="Reach out on WhatsApp or email to get a free demo of Schoozie's school website and ERP solutions.">
<meta name="twitter:image" content="https://schoozie.com/assets/og-image.jpg">

<link rel="icon" href="assets/icons/web/favicon.ico" sizes="32x32">
<link rel="icon" href="assets/icons/web/favicon.svg" type="image/svg+xml">
<link rel="apple-touch-icon" href="assets/icons/web/apple-touch-icon.png">
<link rel="manifest" href="assets/icons/web/site.webmanifest">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="dns-prefetch" href="https://cdnjs.cloudflare.com">
<link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700;800&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<link rel="stylesheet" href="css/global.css?v=<?php echo filemtime('css/global.css'); ?>">
<link rel="stylesheet" href="css/index-v2.css?v=<?php echo filemtime('css/index-v2.css'); ?>">
<link rel="stylesheet" href="css/contact.css?v=<?php echo filemtime('css/contact.css'); ?>">
<link rel="stylesheet" href="css/site-chrome.css?v=<?php echo filemtime('css/site-chrome.css'); ?>">
<link rel="stylesheet" href="css/contact-v3.css?v=<?php echo filemtime('css/contact-v3.css'); ?>">
</head>
<body>

<?php $active_page = 'contact'; include '_header.php'; ?>

<div class="ct-page">
 <div class="ct-inner">

  <!-- HERO -->
  <section class="ct-hero">
    <span class="ct-pill"><i class="fa-regular fa-clock"></i> We reply within 24 hours</span>
    <h1>Let&rsquo;s Transform Your <span class="hl">Institution</span>.</h1>
    <p>Connect with our institutional experts to see how Schoozie can modernize your school&rsquo;s operations &mdash; from professional <a href="websites.php">websites</a> to <a href="erp.php">AI-powered ERP</a>.</p>
  </section>

  <!-- MAIN GRID -->
  <div class="ct-grid">

    <!-- INQUIRY FORM -->
    <div class="ct-form-card">
      <h2>Inquiry Details</h2>
      <p class="ct-form-sub">Please fill out the form below and our team will contact you within 24 hours.</p>

      <div class="ct-row">
        <div class="ct-field">
          <label for="ct-name">Principal / Administrator Name</label>
          <input type="text" id="ct-name" placeholder="Dr. Sameer Khan">
        </div>
        <div class="ct-field">
          <label for="ct-school">School Name</label>
          <input type="text" id="ct-school" placeholder="Heritage Public School">
        </div>
      </div>

      <div class="ct-row">
        <div class="ct-field">
          <label for="ct-students">Number of Students</label>
          <input type="text" id="ct-students" inputmode="numeric" placeholder="e.g. 1200">
        </div>
        <div class="ct-field">
          <label for="ct-city">City</label>
          <input type="text" id="ct-city" placeholder="Dehradun">
        </div>
      </div>

      <div class="ct-row">
        <div class="ct-field">
          <label for="ct-phone">Phone Number</label>
          <input type="tel" id="ct-phone" placeholder="+91 00000 00000">
        </div>
        <div class="ct-field">
          <label for="ct-interest">Interested In</label>
          <select id="ct-interest">
            <option value="" disabled selected>Select a solution&hellip;</option>
            <option>School Website (Static or Dynamic)</option>
            <option>AI-Powered School ERP</option>
            <option>Website + ERP Combo</option>
            <option>Not sure yet &mdash; need guidance</option>
          </select>
        </div>
      </div>

      <input type="text" id="ct-company" name="company" tabindex="-1" autocomplete="off" aria-hidden="true" style="position:absolute;left:-9999px;width:1px;height:1px;opacity:0">
      <button type="button" class="ct-submit" id="ct-submit">Request a Personalized Demo <i class="fa-solid fa-arrow-right"></i></button>
      <p class="ct-note" id="ct-note" role="status" aria-live="polite" style="display:none;margin:14px 0 0;font-size:13px;font-weight:600"></p>
      <p class="ct-consent">By submitting, you agree to our <a href="terms.php">Terms of Service</a> and <a href="privacy.php">Privacy Policy</a>.</p>
    </div>

    <!-- SIDEBAR -->
    <aside class="ct-side">

      <div class="ct-card ct-support">
        <div class="ct-support-head">
          <span class="ct-support-badge"><i class="fa-solid fa-headset"></i></span>
          <div>
            <h3>Immediate Support</h3>
            <span class="ct-support-tag"><span class="ct-dot"></span> Typically replies within a few hours</span>
          </div>
        </div>
        <p>Need a quick consultation? Chat directly with our institutional specialists on WhatsApp.</p>
        <a class="ct-wa"
           href="https://wa.me/<?php echo $contact_whatsapp; ?>?text=Hi%2C+I%27d+like+to+speak+with+a+specialist+about+Schoozie+for+my+school."
           target="_blank" rel="noopener">
          Chat with a Specialist <i class="fa-solid fa-arrow-right"></i>
        </a>
      </div>

      <div class="ct-card">
        <span class="ct-side-label">Our Presence</span>
        <div class="ct-office" itemscope itemtype="https://schema.org/PostalAddress">
          <i class="fa-solid fa-location-dot"></i>
          <div>
            <strong>North India Office</strong>
            <span><span itemprop="addressLocality"><?php echo $office_north_city; ?></span>, <span itemprop="addressRegion"><?php echo $office_north_region; ?></span></span>
          </div>
        </div>
        <div class="ct-office" itemscope itemtype="https://schema.org/PostalAddress">
          <i class="fa-solid fa-location-dot"></i>
          <div>
            <strong>South India Office</strong>
            <span><?php if($office_south_street): ?><span itemprop="streetAddress"><?php echo $office_south_street; ?></span>, <?php endif; ?><span itemprop="addressLocality"><?php echo $office_south_city; ?></span>, <span itemprop="addressRegion"><?php echo $office_south_region; ?></span></span>
          </div>
        </div>
        <div class="ct-office">
          <i class="fa-solid fa-envelope"></i>
          <div>
            <strong>Email Inquiries</strong>
            <span><a href="mailto:<?php echo $contact_email; ?>"><?php echo $contact_email; ?></a></span>
          </div>
        </div>
      </div>

      <div class="ct-trust">
        <span class="ct-trust-label"><i class="fa-solid fa-crown"></i> Institutional Trust</span>
        <p>Join the exclusive circle of early adopters. As a founding school, your institutional pricing is <strong>Locked for Life</strong> &mdash; no surprise hikes, no hidden maintenance fees.</p>
        <div class="ct-trust-foot"><i class="fa-solid fa-shield-halved"></i> Legacy Guaranteed</div>
      </div>

    </aside>

  </div>

  <!-- FAQ -->
  <section class="ct-faq" aria-labelledby="faq-heading">
    <span class="ct-faq-eyebrow">Common Questions</span>
    <h2 id="faq-heading">Everything you need to know</h2>

    <details class="faq-item" open>
      <summary class="faq-q">How quickly can our school go live? <i class="fa-solid fa-plus"></i></summary>
      <div class="faq-a">Once we have your content and logo, a <strong>static or dynamic website is ready within a few working days</strong>, and full ERP onboarding is completed in 1&ndash;2 weeks with guided setup. We keep you updated at every step on WhatsApp.</div>
    </details>

    <details class="faq-item">
      <summary class="faq-q">Do we need an IT team or technical staff to run it? <i class="fa-solid fa-plus"></i></summary>
      <div class="faq-a">Not at all. Schoozie is built for school staff &mdash; not engineers. Everything runs from a simple dashboard and a mobile app, and <strong>our team handles all the setup, hosting and updates</strong> for you.</div>
    </details>

    <details class="faq-item">
      <summary class="faq-q">Can you migrate our existing student and fee data? <i class="fa-solid fa-plus"></i></summary>
      <div class="faq-a">Yes. Share your current records in Excel or any format and we&rsquo;ll <strong>import your students, classes, staff and fee history</strong> during onboarding &mdash; at no extra charge.</div>
    </details>

    <details class="faq-item">
      <summary class="faq-q">Is our school and student data secure? <i class="fa-solid fa-plus"></i></summary>
      <div class="faq-a">Absolutely. Data is stored on secure servers with encrypted connections, role-based access and regular backups. Your information is <strong>never sold or shared</strong> &mdash; it belongs to your school.</div>
    </details>

    <details class="faq-item">
      <summary class="faq-q">What&rsquo;s included in the price &mdash; any hidden costs? <i class="fa-solid fa-plus"></i></summary>
      <div class="faq-a">Pricing is transparent and all-inclusive: setup, hosting, SSL, updates and support are covered. <strong>No hidden charges and no surprise renewal hikes</strong> &mdash; you&rsquo;ll always know exactly what you pay.</div>
    </details>

    <details class="faq-item">
      <summary class="faq-q">Does it support Hindi and regional languages? <i class="fa-solid fa-plus"></i></summary>
      <div class="faq-a">Yes &mdash; Schoozie&rsquo;s AI and parent communication work in <strong>English, Hindi and many Indian languages</strong>, so every parent gets updates in the language they&rsquo;re most comfortable with.</div>
    </details>

    <details class="faq-item">
      <summary class="faq-q">Can we start with a website and add ERP later? <i class="fa-solid fa-plus"></i></summary>
      <div class="faq-a">Of course. Begin with a website and add the ERP whenever you&rsquo;re ready &mdash; we&rsquo;ll upgrade your plan fairly and carry over all your existing content and data seamlessly.</div>
    </details>

    <details class="faq-item">
      <summary class="faq-q">Do you provide training and ongoing support? <i class="fa-solid fa-plus"></i></summary>
      <div class="faq-a">Yes. Every school gets hands-on onboarding, staff training and <strong>direct WhatsApp support</strong> &mdash; you&rsquo;ll always reach a real person who knows your school, not a ticket queue.</div>
    </details>

  </section>

 </div><!-- .ct-inner -->
</div><!-- .ct-page -->

<script>
(function(){
  var btn = document.getElementById('ct-submit');
  if(!btn) return;
  var note = document.getElementById('ct-note');
  var origBtn = btn.innerHTML;
  function val(id){ var el=document.getElementById(id); return el ? (el.value||'').trim() : ''; }
  function setNote(msg, ok){ if(!note) return; note.textContent = msg; note.style.color = ok ? '#4B5D3F' : '#b0472f'; note.style.display = msg ? 'block' : 'none'; }

  btn.addEventListener('click', function(){
    var name=val('ct-name'), school=val('ct-school'), students=val('ct-students'),
        city=val('ct-city'), phone=val('ct-phone'), interest=val('ct-interest'),
        company=val('ct-company');
    if(!name){  setNote('Please enter your name.', false); document.getElementById('ct-name').focus(); return; }
    if(!phone){ setNote('Please enter a phone number.', false); document.getElementById('ct-phone').focus(); return; }
    if(phone.replace(/\D/g,'').length < 7){ setNote('Please enter a valid phone number.', false); document.getElementById('ct-phone').focus(); return; }

    btn.disabled = true; btn.innerHTML = 'Sending…';
    setNote('Sending your request…', true);

    var body = new URLSearchParams({ name:name, school:school, students:students, city:city, phone:phone, interest:interest, company:company, page:location.href });
    fetch('send-contact.php', { method:'POST', headers:{'Content-Type':'application/x-www-form-urlencoded'}, body:body.toString() })
      .then(function(r){ return r.json().catch(function(){ return { ok:false, error:'Unexpected response.' }; }); })
      .then(function(res){
        if(res && res.ok){
          setNote('Thanks! Our team will contact you within 24 hours.', true);
          btn.innerHTML = 'Request sent ✓';
          ['ct-name','ct-school','ct-students','ct-city','ct-phone'].forEach(function(id){ var el=document.getElementById(id); if(el) el.value=''; });
          var sel=document.getElementById('ct-interest'); if(sel) sel.selectedIndex=0;
        } else {
          setNote((res && res.error) || 'Could not send. Please try again.', false);
          btn.disabled = false; btn.innerHTML = origBtn;
        }
      })
      .catch(function(){
        setNote('Network error. Please try again.', false);
        btn.disabled = false; btn.innerHTML = origBtn;
      });
  });
})();
</script>

<?php
require_once __DIR__ . '/_schema.php';
sz_page(
  'Contact Schoozie',
  'Contact Schoozie for a free demo or questions about school websites and ERP software. WhatsApp support included.',
  'https://schoozie.com/contact.php',
  __FILE__,
  [['name' => 'Home', 'url' => 'https://schoozie.com/'], ['name' => 'Contact', 'url' => 'https://schoozie.com/contact.php']]
);
?>

<?php include '_footer.php'; ?>

<!-- JSON-LD -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "ContactPage",
  "name": "Contact Schoozie",
  "description": "Get in touch with Schoozie for school website and ERP software enquiries.",
  "url": "https://schoozie.com/contact.php",
  "publisher": {
    "@type": "Organization",
    "name": "Schoozie",
    "url": "https://schoozie.com",
    "email": "<?php echo $contact_email; ?>",
    "contactPoint": {
      "@type": "ContactPoint",
      "contactType": "customer support",
      "availableLanguage": ["English", "Hindi", "Urdu"],
      "areaServed": "IN"
    }
  },
  "mainEntity": {
    "@type": "FAQPage",
    "mainEntity": [
      {
        "@type": "Question",
        "name": "How quickly can our school go live?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Once we have your content and logo, a static or dynamic website is ready within a few working days, and full ERP onboarding is completed in 1-2 weeks with guided setup."
        }
      },
      {
        "@type": "Question",
        "name": "Do we need an IT team or technical staff to run it?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "No. Schoozie is built for school staff, not engineers. Everything runs from a simple dashboard and mobile app, and our team handles all setup, hosting and updates for you."
        }
      },
      {
        "@type": "Question",
        "name": "Can you migrate our existing student and fee data?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes. Share your current records in Excel or any format and we'll import your students, classes, staff and fee history during onboarding at no extra charge."
        }
      },
      {
        "@type": "Question",
        "name": "Is our school and student data secure?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes. Data is stored on secure servers with encrypted connections, role-based access and regular backups. Your information is never sold or shared."
        }
      },
      {
        "@type": "Question",
        "name": "What's included in the price and are there any hidden costs?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Pricing is transparent and all-inclusive: setup, hosting, SSL, updates and support are covered, with no hidden charges and no surprise renewal hikes."
        }
      },
      {
        "@type": "Question",
        "name": "Does it support Hindi and regional languages?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes. Schoozie's AI and parent communication work in English, Hindi and many Indian languages so every parent gets updates in the language they are most comfortable with."
        }
      }
    ]
  }
}
</script>

</body>
</html>
