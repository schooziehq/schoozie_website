<?php
$site_name = "Schoozie";
$year = date("Y");
require_once 'config.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include '_analytics.php'; ?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Powerful School ERP for Indian Schools | Schoozie</title>
<meta name="description" content="Schoozie ERP - the central nervous system of your school. Fees, attendance, exams, HR &amp; payroll, transport, library and a conversational AI agent - engineered for Bharat, built for Indian schools.">
<meta name="keywords" content="school ERP software india, school management software, school ERP system, cloud school ERP, fee management software, school attendance software, parent portal india, school payroll software">
<meta name="robots" content="index, follow">
<link rel="canonical" href="https://schoozie.com/erp.php">
<link rel="icon" href="assets/icons/web/favicon.ico" sizes="32x32">
<link rel="icon" href="assets/icons/web/favicon.svg" type="image/svg+xml">
<link rel="apple-touch-icon" href="assets/icons/web/apple-touch-icon.png">
<link rel="manifest" href="assets/icons/web/site.webmanifest">
<meta property="og:type" content="website">
<meta property="og:title" content="School ERP Software - 4 Plans for Indian Schools | Schoozie">
<meta property="og:description" content="Schoozie School ERP - fees, attendance, exams, library, transport, payroll. Four flexible plans for schools of every size.">
<meta property="og:url" content="https://schoozie.com/erp.php">
<meta property="og:image" content="https://schoozie.com/assets/og-image.jpg">
<meta name="twitter:card" content="summary_large_image">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700;900&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Inter:wght@300;400;500;600;700&family=Noto+Sans+Arabic:wght@500;600;700&family=Noto+Sans+Devanagari:wght@400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<link rel="stylesheet" href="css/global.css?v=<?php echo filemtime('css/global.css'); ?>">
<link rel="stylesheet" href="css/site-chrome.css?v=<?php echo filemtime('css/site-chrome.css'); ?>">
<link rel="stylesheet" href="css/erp-v2.css?v=<?php echo filemtime('css/erp-v2.css'); ?>">
</head>
<body class="page-erp">

<?php $active_page = 'erp'; include '_header.php'; ?>

<div class="erpx">

  <!-- 1 · HERO -->
  <section class="ex-hero">
    <div class="ex-wrap">
      <div class="ex-hero-text">
        <span class="ex-eyebrow">AI-Powered School ERP</span>
        <h1>The <span class="hl">AI</span> that runs your <span class="hl">whole school</span></h1>
        <p class="ex-hero-lead">The central nervous system of your institution. Designed for Indian school administrators, Schoozie ERP simplifies complex workflows &mdash; ensuring academic and operational excellence with zero friction.</p>
      </div>
      <div class="ex-visual">
        <img src="assets/png/hero-erp.jpg?v=<?php echo @filemtime('assets/png/hero-erp.jpg'); ?>" class="ex-hero-img" alt="Schoozie ERP role selection and live modules for your whole school">
        <div class="ex-float">
          <b><i class="fa-solid fa-circle-check"></i> Real-time Data</b>
          <span><em>99.9% uptime</em> for institutional records and student performance tracking.</span>
        </div>
      </div>
    </div>
  </section>

  <!-- One Brain. Every App. — compact ecosystem -->
  <section class="ex-eco ex-section">
    <div class="ex-wrap">
      <div class="ex-eco-grid">
        <div class="ex-eco-fan">
          <img src="assets/png/app-teacher.jpg?v=<?php echo @filemtime('assets/png/app-teacher.jpg'); ?>" class="ph p1" alt="Schoozie Teacher app">
          <img src="assets/png/app-conductor.jpg?v=<?php echo @filemtime('assets/png/app-conductor.jpg'); ?>" class="ph p2" alt="Schoozie Conductor app">
        </div>
        <div class="ex-eco-text">
          <span class="ex-eyebrow">The Integrated Ecosystem</span>
          <h2>One Brain. Every App.</h2>
          <p>A dedicated app for every role in your school &mdash; each one simple and focused, all speaking to a single intelligent core, in real time.</p>
          <div class="ex-roles">
            <span><i class="fa-solid fa-people-roof"></i> Parent</span>
            <span><i class="fa-solid fa-chalkboard-user"></i> Teacher</span>
            <span><i class="fa-solid fa-user-tie"></i> Principal</span>
            <span><i class="fa-solid fa-bus"></i> Conductor</span>
            <span><i class="fa-solid fa-book-open-reader"></i> Librarian</span>
            <span><i class="fa-solid fa-gear"></i> Admin</span>
            <span class="more"><i class="fa-solid fa-layer-group"></i> + many more</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 3 · WHY PRINCIPALS TRUST -->
  <section class="ex-why ex-section">
    <div class="ex-wrap">
      <div class="ex-why-cards">
        <div><div class="ex-why-ic"><i class="fa-solid fa-globe"></i></div><h4>Localized Support</h4><p>Regional support teams available in multiple Indian languages for on-ground assistance.</p></div>
        <div><div class="ex-why-ic"><i class="fa-solid fa-shield-halved"></i></div><h4>Institutional Security</h4><p>Enterprise-grade encryption protecting sensitive student and financial data at all times.</p></div>
        <div><div class="ex-why-ic"><i class="fa-solid fa-wand-magic-sparkles"></i></div><h4>Low Learning Curve</h4><p>Intuitive interface designed for administrators with varying levels of tech proficiency.</p></div>
        <div><div class="ex-why-ic"><i class="fa-solid fa-cloud-arrow-up"></i></div><h4>Automated Backups</h4><p>Daily offsite backups ensuring your records are never lost, no matter what happens.</p></div>
      </div>
      <div class="ex-why-text">
        <span class="ex-eyebrow">Engineered for Bharat</span>
        <h2>Why Principals Trust Schoozie</h2>
        <p>We understand the unique challenges of Indian schools. From managing complicated fee structures to maintaining regulatory compliance, our ERP is built to handle the heavy lifting while you focus on education.</p>
        <div class="ex-why-point"><span class="ex-why-num">1</span><div><b>Dedicated Account Manager</b><span>A human expert assigned to your school for the entire contract duration.</span></div></div>
        <div class="ex-why-point"><span class="ex-why-num">2</span><div><b>Zero Hidden Fees</b><span>Transparent pricing that scales with your student count. No surprises.</span></div></div>
      </div>
    </div>
  </section>

  <!-- 4 · AI AGENT -->
  <section class="ex-ai ex-section">
    <div class="ex-wrap">
      <div class="ex-ai-text">
        <span class="ex-eyebrow">The Schoozie AI Agent</span>
        <h2>Conversational Intelligence for Your Entire School</h2>
        <p>Stop navigating deep menus. Just talk to the Schoozie AI Agent to handle administrative tasks, academic planning or parent communication in seconds.</p>
        <div class="ex-ai-feat"><i class="fa-solid fa-comments"></i><div><b>AI for Parents</b><span>&ldquo;Talk to our agent to check child progress, pending homework, or fee status instantly.&rdquo;</span></div></div>
        <div class="ex-ai-feat"><i class="fa-solid fa-chalkboard-user"></i><div><b>AI for Teachers</b><span>&ldquo;Generate MCQ tests for any class in seconds. &lsquo;Create a 5th-grade math test&rsquo; &mdash; done.&rdquo;</span></div></div>
        <div class="ex-ai-feat"><i class="fa-solid fa-shield-halved"></i><div><b>AI for Admins</b><span>&ldquo;Smart broadcasts. &lsquo;Send an email to all Class 10 parents about the science fair&rsquo; &mdash; handled.&rdquo;</span></div></div>
      </div>
      <div class="ex-chat">
        <div class="ex-chat-top"><span class="av"><i class="fa-solid fa-wand-magic-sparkles"></i></span><b>Schoozie AI Assistant</b></div>
        <div class="ex-chat-body">
          <div class="ex-msg ai">Hello Principal! How can I help you today?</div>
          <div class="ex-msg you">Send an email to all Class 10 parents about the science fair.</div>
          <div class="ex-msg draft"><b><i class="fa-solid fa-pen-nib"></i> Drafting email&hellip;</b>Draft ready for 120 recipients. Subject: Invitation to Annual Science Fair. Would you like to review or send now?</div>
        </div>
        <div class="ex-chat-input"><span>Type a command&hellip;</span><span class="ex-chat-send"><i class="fa-solid fa-paper-plane"></i></span></div>
      </div>
    </div>
  </section>

  <!-- 5 · BUILT FOR BHARAT -->
  <section class="ex-band">
    <div class="ex-wrap">
      <p class="ex-band-q">&ldquo;Built for Bharat, Engineered for Reliability.&rdquo;</p>
      <div class="ex-bstats">
        <div class="ex-bstat"><div class="n">99.9%</div><h4>Uptime Guarantee</h4><p>Redundant Indian servers ensure your institution never goes offline, even during peak admission seasons.</p></div>
        <div class="ex-bstat"><div class="n">2G/3G</div><h4>Low-Bandwidth Optimization</h4><p>Engineered to work seamlessly in rural connectivity areas where high-speed internet is a luxury.</p></div>
        <div class="ex-bstat"><div class="n">256-bit</div><h4>Bank-Grade Security</h4><p>AES-256 encryption on every record, role-based access, and automated daily backups keep your school&rsquo;s data safe and private.</p></div>
      </div>
    </div>
  </section>

  <!-- 6 · CAMPUS & LOGISTICS -->
  <section class="ex-logi">
    <div class="ex-wrap">
      <div class="ex-logi-visual">
        <img src="assets/png/map.png?v=<?php echo @filemtime('assets/png/map.png'); ?>" alt="Live school bus route tracking on a map">
        <span class="ex-logi-pill"><i class="fa-solid fa-location-dot"></i> Live Transit Tracking</span>
        <span class="ex-logi-cap">Real-time visibility over all logistics.</span>
      </div>
      <div class="ex-logi-panel">
        <div class="ex-logi-head">Campus &amp; Logistics Hub</div>
        <div class="ex-logi-item"><i class="fa-solid fa-bus"></i><div><b>Transport (Live GPS)</b><p>Optimized route planning with live tracking for parents and emergency geofencing alerts.</p></div></div>
        <div class="ex-logi-item"><i class="fa-solid fa-book-open-reader"></i><div><b>Modern Library</b><p>Digital cataloging with automated fine calculation and e-resource management.</p></div></div>
        <div class="ex-logi-item"><i class="fa-solid fa-boxes-stacked"></i><div><b>Smart Inventory</b><p>Low-stock alerts, procurement workflows and department-wise asset allocation tracking.</p></div></div>
      </div>
    </div>
  </section>

</div><!-- .erpx -->


<!-- FAQ -->
<?php
require_once __DIR__ . '/_faq.php';
sz_render_faq([
  ['q' => 'What can Schoozie&rsquo;s school ERP do?',
   'a' => 'Schoozie&rsquo;s ERP runs your whole school in one place: <strong>fees, attendance, exams and results, staff, transport and parent communication</strong> &mdash; all connected, with AI that reconciles payments, flags issues and sends updates automatically instead of waiting for you to ask.'],
  ['q' => 'How does online fee collection work?',
   'a' => 'Parents pay fees online from the app and <strong>payments reconcile themselves automatically</strong> &mdash; receipts are generated, dues are tracked, and reminders go out in the parent&rsquo;s own language. Your office stops chasing cash and manual entries.'],
  ['q' => 'Does Schoozie support biometric or automatic attendance?',
   'a' => 'Yes. Attendance can be captured by <strong>biometric device or the app</strong>, and parents are <strong>notified automatically</strong> when their child is marked present or absent &mdash; no paper registers, no phone calls.'],
  ['q' => 'Can parents use Schoozie on their phones?',
   'a' => 'Yes. Parents get a <strong>simple mobile app in their own language</strong> &mdash; English, Hindi, Tamil, Bengali and more &mdash; showing fees, attendance, results, timetable and school notices, so every family stays informed.'],
  ['q' => 'Will you migrate our existing student and fee data?',
   'a' => 'Yes. Share your current records in <strong>Excel or any format</strong> and we import your students, classes, staff and fee history during onboarding &mdash; <strong>at no extra charge</strong> &mdash; so you start with everything already in place.'],
  ['q' => 'Do we need technical staff or special hardware?',
   'a' => 'No. Schoozie runs on <strong>any phone, tablet or computer</strong>, and our team handles hosting, security and updates. It is built for school staff, not engineers, so anyone in your office can use it from day one.'],
  ['q' => 'How is the ERP priced?',
   'a' => 'The ERP is billed <strong>per quarter</strong> across simple tiers, with discounts for half-yearly and yearly terms. See the <a href="pricing.php">pricing page</a> for current plans and what each tier includes.'],
], 'School ERP &mdash; frequently asked questions', 'ERP FAQ');
?>

<?php include '_footer.php'; ?>

<!-- JSON-LD -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "SoftwareApplication",
  "name": "Schoozie School ERP",
  "applicationCategory": "EducationalApplication",
  "operatingSystem": "Web",
  "description": "Cloud-based school ERP for student management, fee collection, attendance, exams, library, transport, payroll, and more. Four flexible plans for Indian schools.",
  "url": "https://schoozie.com/erp.php"
}
</script>

<script>
/* Language tabs */
document.querySelectorAll('.w-lang-tabs').forEach(function(group){
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
