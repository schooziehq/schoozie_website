<?php
$site_name = "Schoozie";
$year = date("Y");
require_once 'config.php';

/* ── PLAN DATA - Static + Dynamic ── */
$plan_static = [
  'accent'      => '#00b7ff',
  'name'        => 'Static Website',
  'tagline'     => 'We design, build & manage everything for you.',
  'description' => 'Just share your school\'s logo, photos, and basic info - we design, build, and publish your website. No technical knowledge needed. Your school goes live online without you lifting a finger.',
  'price_now'   => $offer_active ? $static_offer_price   : $static_regular_price,
  'price_was'   => $offer_active ? $static_regular_price : '',
  'price_save'  => $offer_active ? $static_saving        : '',
  'price_note'  => 'one-time setup &nbsp;·&nbsp; Renewal: Rs. '.$static_renewal_price.'/yr',
  'domain_note' => 'You buy your own domain - we set it up free',
  'features' => [
    ['fa-desktop','#00b7ff','Professional school website'],
    ['fa-mobile-screen','#a855f7','Mobile responsive design'],
    ['fa-clipboard-list','#f59e0b','Admissions inquiry form'],
    ['fa-images','#ec4899','Photo gallery & news'],
    ['fa-chalkboard-user','#06b6d4','Staff & faculty profiles'],
    ['fa-bullhorn','#f97316','Notice board'],
    ['fa-pen','#10b981','Content managed by Schoozie'],
    ['fa-arrows-rotate','#06b6d4','Free updates on request'],
    ['fa-globe','#3b82f6','1 year hosting included'],
    ['fa-bolt','#fbbf24','Fast-loading pages'],
    ['fa-magnifying-glass','#a855f7','SEO-ready structure'],
    ['fa-gear','#9ca3af','Domain setup assistance'],
  ],
  'image'   => 'assets/png/section-5.png',
  'wa_text' => 'Hi%2C+I%27m+interested+in+the+Static+Website+plan.',
];

$plan_dynamic = [
  'accent'      => '#ff5fcb',
  'name'        => 'Dynamic Website',
  'tagline'     => 'Your own admin panel - update anything, anytime.',
  'description' => 'Your school gets its own powerful admin panel. Update news, galleries, events and admissions yourself - anytime, anywhere. No technical knowledge needed.',
  'price_now'   => $offer_active ? $dynamic_offer_price   : $dynamic_regular_price,
  'price_was'   => $offer_active ? $dynamic_regular_price : '',
  'price_save'  => $offer_active ? $dynamic_saving        : '',
  'price_note'  => 'one-time setup &nbsp;·&nbsp; Renewal: Rs. '.$dynamic_renewal_price.'/yr',
  'domain_note' => 'You buy your own domain - we set it up free',
  'features' => [
    ['fa-bolt','#fbbf24','Your own admin login panel'],
    ['fa-newspaper','#06b6d4','Post news & updates yourself'],
    ['fa-images','#ec4899','Upload photos & gallery yourself'],
    ['fa-bell','#f97316','Publish notices anytime'],
    ['fa-calendar-days','#f59e0b','Add events & circulars yourself'],
    ['fa-user-tie','#ec4899','Update staff profiles anytime'],
    ['fa-clipboard-list','#10b981','Receive admissions inquiries online'],
    ['fa-mobile-screen','#a855f7','Manage from phone or laptop'],
    ['fa-key','#fbbf24','No Schoozie needed for updates'],
    ['fa-desktop','#00b7ff','Professional school website'],
    ['fa-globe','#3b82f6','1 year hosting included'],
    ['fa-chalkboard-user','#10b981','Admin training included'],
  ],
  'image'   => 'assets/png/section-2.png',
  'wa_text' => 'Hi%2C+I%27m+interested+in+the+Dynamic+Website+plan.',
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include '_analytics.php'; ?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>School Websites for Indian Schools - Static &amp; Dynamic | Schoozie</title>
<meta name="description" content="Choose between a Schoozie-managed Static school website or a Dynamic website with your own admin panel. Starting at Rs. <?php echo $static_offer_price; ?>. Mobile-responsive, 1-year hosting included.">
<meta name="keywords" content="school website india, static school website, dynamic school website, school website with cms, school website design india, school website admin panel, affordable school website">
<meta name="robots" content="index, follow">
<link rel="canonical" href="https://schoozie.com/websites.php">
<link rel="icon" href="assets/icons/web/favicon.ico" sizes="32x32">
<link rel="icon" href="assets/icons/web/favicon.svg" type="image/svg+xml">
<link rel="apple-touch-icon" href="assets/icons/web/apple-touch-icon.png">
<link rel="manifest" href="assets/icons/web/site.webmanifest">
<meta property="og:type" content="website">
<meta property="og:title" content="School Websites - Static &amp; Dynamic Plans | Schoozie">
<meta property="og:description" content="Choose between a Schoozie-managed Static school website or a Dynamic website with your own admin panel. Starting at Rs. <?php echo $static_offer_price; ?>.">
<meta property="og:url" content="https://schoozie.com/websites.php">
<meta property="og:image" content="https://schoozie.com/assets/og-image.jpg">
<meta name="twitter:card" content="summary_large_image">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700;900&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Inter:wght@300;400;500;600;700&family=Noto+Sans+Arabic:wght@500;600;700&family=Noto+Sans+Devanagari:wght@400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<link rel="stylesheet" href="css/global.css?v=<?php echo filemtime('css/global.css'); ?>">
<link rel="stylesheet" href="css/site-chrome.css?v=<?php echo filemtime('css/site-chrome.css'); ?>">
<link rel="stylesheet" href="css/websites-v2.css?v=<?php echo filemtime('css/websites-v2.css'); ?>">
</head>
<body class="page-websites">

<?php $active_page = 'websites'; include '_header.php'; ?>

<div class="webx">

  <!-- HERO -->
  <section class="wb-hero">
    <div class="wb-wrap">
      <div class="wb-hero-text">
        <h1>Elevate your school&rsquo;s <span class="hl">digital identity</span>.</h1>
        <p class="lead">We design and manage high-performance websites for schools that demand academic precision and a professional presence online.</p>
        <div class="wb-hero-cta">
          <a href="<?php echo $demo_url; ?>" target="_blank" rel="noopener" class="wb-btn-gold"><i class="fa-solid fa-eye"></i> View a live demo</a>
        </div>
        <div class="wb-hero-trust">
          <span><i class="fa-solid fa-mobile-screen"></i> Mobile-ready</span>
          <span><i class="fa-solid fa-gauge-high"></i> Fast on 2G/3G</span>
          <span><i class="fa-solid fa-lock"></i> Free SSL &amp; hosting</span>
        </div>
      </div>
      <div class="wb-hero-visual">
        <div class="wb-collage">
          <div class="wb-collage-back">
            <div class="wb-mini">
              <div class="wb-mini-top"><span class="wb-site-crest sm"><i class="fa-solid fa-graduation-cap"></i></span><b>Campus Life</b></div>
              <div class="wb-mini-body">
                <div class="wb-mini-photo"></div>
                <div class="wb-mini-line"></div>
                <div class="wb-mini-line short"></div>
              </div>
            </div>
          </div>
          <div class="wb-browser">
            <div class="wb-browser-bar"><i></i><i></i><i></i><span class="wb-browser-url"><i class="fa-solid fa-lock" style="font-size:9px"></i> greenfield-school.edu.in</span></div>
            <div class="wb-site">
              <div class="wb-site-nav"><span class="wb-site-crest"><i class="fa-solid fa-graduation-cap"></i></span><b>Greenfield School</b><span class="links"><span>About</span><span>Academics</span><span>Admissions</span></span></div>
              <div class="wb-site-hero"><small>Admissions Open 2026</small><h5>Where Every Child Grows</h5><p>Nurturing curious minds since 1998</p></div>
              <div class="wb-site-cards">
                <div class="wb-site-card"><i class="fa-solid fa-user-plus"></i><span>Admissions</span></div>
                <div class="wb-site-card"><i class="fa-solid fa-bullhorn"></i><span>Notices</span></div>
                <div class="wb-site-card"><i class="fa-solid fa-images"></i><span>Gallery</span></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- WHY (bento) -->
  <section class="wb-why wb-section" id="wb-why">
    <div class="wb-wrap">
      <div class="wb-head">
        <span class="wb-eyebrow">Why Schoozie</span>
        <h2>Why Schoozie for <span class="hl">your website?</span></h2>
        <p>Purpose-built for educational leadership, so every digital touchpoint reflects institutional excellence.</p>
      </div>
      <div class="wb-bento">
        <article class="wb-bento-card big" style="--i:0">
          <div class="wb-bento-ic"><i class="fa-solid fa-magnifying-glass"></i></div>
          <b>SEO Optimized for Admissions</b>
          <p>A clean, search-friendly structure means your school shows up when parents search locally &mdash; turning visibility into enquiries and admissions.</p>
          <div class="wb-bento-tags"><span>Local Search</span><span>Authority Building</span></div>
        </article>
        <article class="wb-bento-card dark" style="--i:1">
          <div class="wb-bento-ic gold"><i class="fa-solid fa-mobile-screen"></i></div>
          <b>Mobile-First Design</b>
          <p>Parents access information on the go. Your site looks stunning on every device.</p>
        </article>
        <article class="wb-bento-card" style="--i:2">
          <div class="wb-bento-ic"><i class="fa-solid fa-screwdriver-wrench"></i></div>
          <b>Zero Maintenance</b>
          <p>Focus on education. We handle hosting, security, updates and performance for you.</p>
        </article>
        <article class="wb-bento-card wide" style="--i:3">
          <div class="wb-bento-d-text">
            <div class="wb-bento-ic"><i class="fa-solid fa-bolt"></i></div>
            <b>Lightning Fast</b>
            <p>Optimized to load in a blink &mdash; even on 2G/3G. Fast pages keep parents browsing and help you rank higher on Google.</p>
          </div>
          <div class="wb-bento-gauge"><div class="ring"><span>99</span></div><em>Speed score</em></div>
        </article>
      </div>
    </div>
  </section>

  <!-- STATIC vs DYNAMIC -->
  <section class="wb-choice wb-section">
    <div class="wb-wrap">
      <div class="wb-head">
        <span class="wb-eyebrow">Two ways to run it</span>
        <h2>Static or <span class="hl">Dynamic</span>?</h2>
        <p>Pick how hands-on you want to be. Both come professionally designed, mobile-ready and hosted.</p>
      </div>
      <div class="wb-choice-grid">
        <article class="wb-ccard">
          <h3>Static Website</h3>
          <div class="who">We manage it</div>
          <p>You tell us what to change; we update it for you. Perfect for schools that want a polished site with zero upkeep.</p>
          <ul class="wb-clist">
            <li><i class="fa-solid fa-check"></i> Professionally designed pages</li>
            <li><i class="fa-solid fa-check"></i> We handle all updates for you</li>
            <li><i class="fa-solid fa-check"></i> 1-year hosting &amp; SSL included</li>
            <li><i class="fa-solid fa-check"></i> Fastest to launch</li>
          </ul>
        </article>
        <article class="wb-ccard feat">
          <span class="wb-ctag">Most popular</span>
          <h3>Dynamic Website</h3>
          <div class="who">You manage it</div>
          <p>Your own simple admin panel to post notices, news and photos anytime &mdash; no coding, no waiting.</p>
          <ul class="wb-clist">
            <li><i class="fa-solid fa-check"></i> Easy admin panel (CMS)</li>
            <li><i class="fa-solid fa-check"></i> Update notices, news &amp; gallery yourself</li>
            <li><i class="fa-solid fa-check"></i> Unlimited content, anytime</li>
            <li><i class="fa-solid fa-check"></i> 1-year hosting &amp; SSL included</li>
          </ul>
        </article>
      </div>
    </div>
  </section>

  <!-- CMS SPOTLIGHT -->
  <section class="wb-cms wb-section">
    <div class="wb-wrap">
      <div class="wb-cms-text">
        <span class="wb-eyebrow">The Dynamic advantage</span>
        <h2>Update it yourself, in seconds</h2>
        <p>With the Dynamic plan you get a clean admin panel built for busy school offices &mdash; if you can use WhatsApp, you can run your website.</p>
        <div class="wb-cms-step"><i class="fa-solid fa-bullhorn"></i><div><b>Post a notice</b><span>Type it, hit publish &mdash; live instantly.</span></div></div>
        <div class="wb-cms-step"><i class="fa-solid fa-images"></i><div><b>Upload photos</b><span>Drag in event pictures to build a gallery.</span></div></div>
        <div class="wb-cms-step"><i class="fa-solid fa-calendar-plus"></i><div><b>Add an event</b><span>Keep parents up to date with the calendar.</span></div></div>
      </div>
      <div class="wb-cms-visual">
        <div class="wb-admin">
          <div class="wb-admin-top"><span class="dot"><i class="fa-solid fa-gauge"></i></span><b>School Admin Panel</b><small>greenfield &middot; admin</small></div>
          <div class="wb-admin-body">
            <div class="wb-admin-row"><i class="fa-solid fa-bullhorn"></i><div><b>Add Notice</b><span>Half-day on Friday</span></div><span class="go">Publish</span></div>
            <div class="wb-admin-row"><i class="fa-solid fa-images"></i><div><b>Upload Photos</b><span>Annual Day 2026 &middot; 24 photos</span></div><span class="go">Save</span></div>
            <div class="wb-admin-row"><i class="fa-solid fa-calendar-plus"></i><div><b>New Event</b><span>Science Fair &middot; 12 Aug</span></div><span class="go">Add</span></div>
            <div class="wb-admin-row"><i class="fa-solid fa-newspaper"></i><div><b>Latest News</b><span>Won inter-school quiz</span></div><span class="go">Post</span></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- TRUST BAND -->
  <section class="wb-band">
    <div class="wb-wrap">
      <p class="wb-band-q">&ldquo;Built to be seen, trusted, and remembered by every parent.&rdquo;</p>
      <div class="wb-bstats">
        <div class="wb-bstat"><i class="fa-solid fa-gauge-high"></i><h4>Fast on Any Network</h4><p>Optimized to load quickly even on 2G/3G connections in rural areas.</p></div>
        <div class="wb-bstat"><i class="fa-solid fa-magnifying-glass"></i><h4>Google-Friendly</h4><p>Clean, SEO-ready pages so parents find your school when they search.</p></div>
        <div class="wb-bstat"><i class="fa-solid fa-lock"></i><h4>Secure by Default</h4><p>Free SSL, reliable hosting and daily backups included for a year.</p></div>
      </div>
    </div>
  </section>

  <!-- FINAL CTA -->
  <section class="wb-cta wb-section">
    <div class="wb-wrap">
      <h2>Connect <span class="hl">with us</span></h2>
      <p>Have a question, or ready to start? We&rsquo;re just one message away.</p>
      <div class="wb-cta-btns">
        <a href="https://wa.me/<?php echo $contact_whatsapp; ?>?text=Hi%2C+I%27d+like+help+picking+a+website+plan+for+my+school." target="_blank" rel="noopener" class="wb-btn">Connect with us</a>
        <a href="<?php echo $demo_url; ?>" target="_blank" rel="noopener" class="wb-btn-ghost"><i class="fa-solid fa-eye"></i> See Demo Site</a>
      </div>
    </div>
  </section>

</div><!-- .webx -->

<script>
(function(){
  var s=document.getElementById('wb-why');
  if(!s) return;
  if(!('IntersectionObserver' in window)){ s.classList.add('in'); return; }
  var io=new IntersectionObserver(function(en){ en.forEach(function(e){ if(e.isIntersecting){ s.classList.add('in'); io.disconnect(); } }); },{threshold:0.15});
  io.observe(s);
})();
</script>


<!-- COMPARISON -->
<?php
require_once __DIR__ . '/_compare.php';
sz_render_compare(
  'Static vs Dynamic school website',
  'Which one fits your school',
  ['', 'Static', 'Dynamic (CMS)'],
  [
    ['Best for', 'A professional online presence', 'Schools that update content often'],
    ['Update content yourself', 'No &mdash; we update it for you', 'Yes &mdash; via an easy CMS dashboard'],
    ['Notices, news &amp; gallery', 'Updated on request', 'Post anytime yourself'],
    ['Admissions', 'Enquiry form', 'Online admission forms &amp; enquiries'],
    ['Pages', 'A set of designed pages', 'Add more as you grow'],
    ['Hosting, SSL &amp; support', 'Included', 'Included'],
  ],
  -1
);
?>

<!-- FAQ -->
<?php
require_once __DIR__ . '/_faq.php';
sz_render_faq([
  ['q' => 'What&rsquo;s the difference between a static and dynamic school website?',
   'a' => 'A <strong>static website</strong> is a fast, professional set of fixed pages we design and maintain for you. A <strong>dynamic website</strong> adds a <strong>CMS</strong> so your staff can update notices, news, galleries, results and admissions themselves &mdash; no developer needed.'],
  ['q' => 'Can we update the website ourselves?',
   'a' => 'With the <strong>dynamic (CMS) plan</strong>, yes &mdash; post notices, news, photos, results and admission forms yourself from a simple dashboard. On the static plan, our team makes updates for you quickly whenever you need them.'],
  ['q' => 'Do you include hosting, domain and SSL?',
   'a' => 'Yes. <strong>Hosting and an SSL security certificate are included</strong>, and we guide you on your school&rsquo;s domain name. Your site loads fast, stays secure with https, and we handle the technical maintenance.'],
  ['q' => 'Will the website work on mobiles and rank on Google?',
   'a' => 'Yes. Every Schoozie site is <strong>mobile-responsive, fast and SEO-friendly</strong>, with clean structure and meta tags so parents find your school on Google and the site looks great on any phone or computer.'],
  ['q' => 'How long does it take to build our website?',
   'a' => 'Once you share your <strong>logo and content, a website is typically ready within a few working days</strong>. We keep you updated at every step on WhatsApp and only go live once you&rsquo;re happy with it.'],
  ['q' => 'Can we add online admissions or fee payment to the website?',
   'a' => 'Yes. Paired with the Schoozie ERP, your website can carry <strong>online admission enquiries and fee payment links</strong>, so parents can apply and pay directly &mdash; turning your site into a working part of the school, not just a brochure.'],
], 'School websites &mdash; frequently asked questions', 'Websites FAQ');
?>

<?php
require_once __DIR__ . '/_schema.php';
sz_page(
  'School Websites (Static & Dynamic CMS) — Schoozie',
  'Professional static and dynamic (CMS) school websites for Indian schools — mobile-friendly, SEO-ready, with hosting, SSL and support included.',
  'https://schoozie.com/websites.php',
  __FILE__,
  [['name' => 'Home', 'url' => 'https://schoozie.com/'], ['name' => 'School Websites', 'url' => 'https://schoozie.com/websites.php']]
);
?>

<?php include '_footer.php'; ?>

<!-- JSON-LD STRUCTURED DATA -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Product",
  "name": "Schoozie School Websites",
  "description": "Static and Dynamic school website plans for Indian schools.",
  "brand": {"@type":"Brand","name":"Schoozie"},
  "offers": [
    {
      "@type": "Offer",
      "name": "Static Website",
      "price": "<?php echo str_replace(',','',$plan_static['price_now']); ?>",
      "priceCurrency": "INR",
      "url": "https://schoozie.com/websites.php#static"
    },
    {
      "@type": "Offer",
      "name": "Dynamic Website",
      "price": "<?php echo str_replace(',','',$plan_dynamic['price_now']); ?>",
      "priceCurrency": "INR",
      "url": "https://schoozie.com/websites.php#dynamic"
    }
  ]
}
</script>

<script>
/* T&C plan tabs (Static / Dynamic) */
document.querySelectorAll('.w-terms-tab').forEach(function(btn){
  btn.addEventListener('click', function(){
    var key = btn.dataset.tab;
    document.querySelectorAll('.w-terms-tab').forEach(function(b){ b.classList.remove('active'); });
    document.querySelectorAll('.w-terms-panel').forEach(function(p){ p.classList.remove('active'); });
    btn.classList.add('active');
    document.querySelector('.w-terms-panel[data-panel="'+key+'"]').classList.add('active');
  });
});
/* Auto-switch terms tab when arriving via #terms-dynamic anchor */
function syncTermsTabFromHash(){
  var h = location.hash;
  if(h === '#terms-dynamic'){
    document.querySelector('.w-terms-tab[data-tab="dynamic"]').click();
  } else if(h === '#terms-static'){
    document.querySelector('.w-terms-tab[data-tab="static"]').click();
  }
}
window.addEventListener('hashchange', syncTermsTabFromHash);
syncTermsTabFromHash();

/* Language sub-tabs inside each T&C panel */
document.querySelectorAll('.w-lang-tabs').forEach(function(group){
  var plan = group.dataset.plan;
  var scope = group.closest('.w-terms-block');
  group.querySelectorAll('.w-lang-tab').forEach(function(btn){
    btn.addEventListener('click', function(){
      var lang = btn.dataset.lang;
      group.querySelectorAll('.w-lang-tab').forEach(function(b){ b.classList.remove('active'); });
      scope.querySelectorAll('.w-lang-panel').forEach(function(p){ p.classList.remove('active'); });
      btn.classList.add('active');
      scope.querySelector('.w-lang-panel[data-lang="'+lang+'"]').classList.add('active');
    });
  });
});
</script>

</body>
</html>
