<?php require_once 'config.php'; $year = date("Y"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contact Schoozie | Get a Free Demo for Your School</title>
<meta name="description" content="Get in touch with Schoozie for a free demo of our school website, CMS, or ERP software. We respond fast on WhatsApp. Serving schools across India.">
<meta name="keywords" content="contact schoozie, school website demo india, school ERP demo, school software enquiry india, get school website made india">
<meta name="robots" content="index, follow">
<link rel="canonical" href="https://schoozie.com/contact.php">

<!-- Open Graph -->
<meta property="og:type" content="website">
<meta property="og:title" content="Contact Schoozie — Get a Free Demo for Your School">
<meta property="og:description" content="Reach out on WhatsApp or email to get a free demo of Schoozie's school website and ERP solutions.">
<meta property="og:url" content="https://schoozie.com/contact.php">
<meta property="og:image" content="https://schoozie.com/assets/og-image.png">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:image:type" content="image/png">
<meta property="og:image:alt" content="Contact Schoozie — Get a Free Demo for Your School">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Contact Schoozie — Get a Free Demo for Your School">
<meta name="twitter:description" content="Reach out on WhatsApp or email to get a free demo of Schoozie's school website and ERP solutions.">
<meta name="twitter:image" content="https://schoozie.com/assets/og-image.png">

<link rel="icon" type="image/png" href="assets/_fonts/logo.png">
<link rel="icon" type="image/svg+xml" href="assets/svg/schoozie-logo.svg">
<link rel="apple-touch-icon" href="assets/_fonts/logo.png">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="dns-prefetch" href="https://cdnjs.cloudflare.com">
<link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700;800&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<link rel="stylesheet" href="css/global.css?v=<?php echo filemtime('css/global.css'); ?>">
<link rel="stylesheet" href="css/contact.css?v=<?php echo filemtime('css/contact.css'); ?>">
</head>
<body>

<?php $active_page = 'contact'; include '_header.php'; ?>

<div class="inner-page">

  <!-- HERO -->
  <section class="contact-hero">
    <span class="contact-hero-eyebrow"><i class="fa-solid fa-paper-plane"></i> &nbsp;Get In Touch</span>
    <h1>Let's Talk About<br>Your School's Digital Future</h1>
    <p>No sales scripts. No call centres. Just a real conversation about what your school needs — at your pace, on WhatsApp.</p>
  </section>

  <!-- CONTACT METHODS -->
  <div class="contact-methods" role="list">

    <div class="contact-card featured" role="listitem" itemscope itemtype="https://schema.org/ContactPoint">
      <div class="contact-card-icon"><i class="fa-brands fa-whatsapp"></i></div>
      <h3>WhatsApp</h3>
      <p>The fastest way to reach us. We typically reply within a few hours during business days.</p>
      <div class="contact-card-val" itemprop="contactType">WhatsApp Chat</div>
      <a class="contact-wa-btn"
         href="https://wa.me/<?php echo $contact_whatsapp; ?>?text=Hi%2C+I%27m+interested+in+Schoozie+for+my+school.+Can+we+talk?"
         target="_blank" rel="noopener"
         itemprop="url">
        <i class="fa-brands fa-whatsapp"></i> Open WhatsApp
      </a>
    </div>

    <div class="contact-card email" role="listitem" itemscope itemtype="https://schema.org/ContactPoint">
      <div class="contact-card-icon"><i class="fa-solid fa-envelope"></i></div>
      <h3>Email Us</h3>
      <p>For detailed enquiries, proposals, or partnership discussions. We reply within 24 hours.</p>
      <div class="contact-card-val" itemprop="email"><?php echo $contact_email; ?></div>
      <a class="contact-email-btn" href="mailto:<?php echo $contact_email; ?>?subject=School%20Digital%20Solutions%20Enquiry">
        <i class="fa-solid fa-envelope"></i> Send Email
      </a>
    </div>

    <div class="contact-card location" role="listitem">
      <div class="contact-card-icon"><i class="fa-solid fa-location-dot"></i></div>
      <h3>Our Offices</h3>
      <p>We are a remote-first team serving schools all across India — from Kashmir to Kanyakumari.</p>
      <div class="contact-card-val" style="display:flex;flex-direction:column;gap:14px;text-align:left">
        <div itemscope itemtype="https://schema.org/PostalAddress">
          <div style="font-size:11px;font-weight:600;color:#bf5fff;letter-spacing:.5px;text-transform:uppercase;margin-bottom:4px">South India Office</div>
          <div style="line-height:1.6">
            <span itemprop="streetAddress"><?php echo $office_south_street; ?></span><br>
            <span itemprop="addressLocality"><?php echo $office_south_city; ?></span>, <span itemprop="addressRegion"><?php echo $office_south_region; ?></span>
          </div>
        </div>
        <div itemscope itemtype="https://schema.org/PostalAddress">
          <div style="font-size:11px;font-weight:600;color:#bf5fff;letter-spacing:.5px;text-transform:uppercase;margin-bottom:4px">North India Office</div>
          <div style="line-height:1.6">
            <span itemprop="streetAddress"><?php echo $office_north_street; ?></span><br>
            <span itemprop="addressLocality"><?php echo $office_north_city; ?></span> - <?php echo $office_north_pin; ?>, <span itemprop="addressRegion"><?php echo $office_north_region; ?></span>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- WHY WHATSAPP -->
  <section class="why-wa-section" aria-labelledby="why-wa-heading">
    <div class="why-wa-inner">
      <span class="section-tag"><i class="fa-brands fa-whatsapp"></i> &nbsp;Why WhatsApp?</span>
      <h2 id="why-wa-heading">Because Real Support Beats a Ticket System</h2>
      <p>We chose WhatsApp as our primary contact channel intentionally — it's where schools already are, and it lets us give you real, personal support.</p>
      <div class="why-wa-grid">
        <div class="why-wa-item">
          <div class="why-wa-header"><i class="fa-solid fa-bolt"></i><h4>Fast Response</h4></div>
          <p>No waiting on hold or email queues. We respond personally and quickly.</p>
        </div>
        <div class="why-wa-item">
          <div class="why-wa-header"><i class="fa-solid fa-user"></i><h4>Personal Attention</h4></div>
          <p>You speak to the same person — not a rotating support agent who doesn't know your school.</p>
        </div>
        <div class="why-wa-item">
          <div class="why-wa-header"><i class="fa-solid fa-shield-halved"></i><h4>No Pressure</h4></div>
          <p>Ask questions, request demos, take your time. We never push or spam.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section class="faq-section" aria-labelledby="faq-heading">
    <h2 id="faq-heading">Frequently Asked Questions</h2>

    <details class="faq-item">
      <summary class="faq-q">How long does it take to build a school website? <i class="fa-solid fa-chevron-down"></i></summary>
      <div class="faq-a">Once we have all your content and assets, your website — static or dynamic — is ready within <strong>5–10 minutes</strong>. We keep you updated throughout via WhatsApp.</div>
    </details>

    <details class="faq-item">
      <summary class="faq-q">Do you provide a free trial or demo? <i class="fa-solid fa-chevron-down"></i></summary>
      <div class="faq-a">Yes — our ERP plans include a <strong>free trial period</strong>. For websites, we can share live demo links and mockups before you commit. Just message us on WhatsApp to get started.</div>
    </details>

    <details class="faq-item">
      <summary class="faq-q">Is Schoozie suitable for Urdu medium or Hindi medium schools? <i class="fa-solid fa-chevron-down"></i></summary>
      <div class="faq-a">Absolutely. Our platform supports <strong>English, Urdu (Nastaliq), and Hindi (Devanagari)</strong> natively. Terms and conditions, content, and interfaces are all available in all three languages.</div>
    </details>

    <details class="faq-item">
      <summary class="faq-q">What happens after I make a payment? <i class="fa-solid fa-chevron-down"></i></summary>
      <div class="faq-a">We'll send you a payment confirmation and an onboarding form via WhatsApp. Our team will schedule a kickoff call to gather your school's details, content, and preferences. You'll be kept in the loop at every step.</div>
    </details>

    <details class="faq-item">
      <summary class="faq-q">Can I upgrade my plan later? <i class="fa-solid fa-chevron-down"></i></summary>
      <div class="faq-a">Yes. You can upgrade from a Static Website to a Dynamic one, or add ERP at any time. We'll adjust pricing fairly and migrate your existing content at no extra charge.</div>
    </details>

    <details class="faq-item">
      <summary class="faq-q">What happens after I message you on WhatsApp? <i class="fa-solid fa-chevron-down"></i></summary>
      <div class="faq-a">You'll hear from us within a few hours — usually much faster. We'll ask a few quick questions about your school, understand what you need, and walk you through the right plan. No sales pitch, no pressure. Just a real conversation.</div>
    </details>

  </section>

  <!-- CTA -->
  <section class="contact-cta">
    <h2>Still Have Questions?</h2>
    <p>Drop us a message on WhatsApp — we're happy to answer anything, no commitment needed.</p>
    <a class="contact-wa-btn"
       href="https://wa.me/<?php echo $contact_whatsapp; ?>?text=Hi%2C+I+have+a+question+about+Schoozie."
       target="_blank" rel="noopener"
       style="display:inline-flex;font-size:14px;padding:13px 28px">
      <i class="fa-brands fa-whatsapp"></i> Chat on WhatsApp
    </a>
  </section>

</div><!-- end inner-page -->

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
        "name": "How long does it take to build a school website?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Once we have all your content and assets, your website — static or dynamic — is ready within 5–10 minutes."
        }
      },
      {
        "@type": "Question",
        "name": "Do you provide a free trial or demo?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes — our ERP plans include a free trial period. For websites, we can share live demo links and mockups before you commit."
        }
      },
      {
        "@type": "Question",
        "name": "Is Schoozie suitable for Urdu medium or Hindi medium schools?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes. Our platform supports English, Urdu (Nastaliq), and Hindi (Devanagari) natively."
        }
      },
      {
        "@type": "Question",
        "name": "Can I upgrade my plan later?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes. You can upgrade from a Static Website to a Dynamic one, or add ERP at any time. We'll adjust pricing fairly and migrate your existing content at no extra charge."
        }
      }
    ]
  }
}
</script>

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
      btn.setAttribute('aria-expanded','false');
    }
  });
})();
</script>

</body>
</html>
