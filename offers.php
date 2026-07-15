<?php
$site_name = "Schoozie";
$year = date("Y");
require_once 'config.php';

/* ────────────────────────────────────────────────
   CAPABILITY ECOSYSTEMS - 7 sections, modular data
   ──────────────────────────────────────────────── */
$ecosystems = [
  [
    'id'     => 'oneid',
    'eyebrow'=> 'OneID Smart Campus',
    'title'  => 'One identity. Every touchpoint.',
    'desc'   => 'A single verified identity powering attendance, access, transport and student safety.',
    'accent' => '#bf5fff',
    'cards'  => [
      ['fa-face-grin',         'Face Recognition',  'Attendance and access through verified facial identity.'],
      ['fa-qrcode',            'QR Attendance',     'One scan - identity verified, attendance marked.'],
      ['fa-location-crosshairs','Geofencing',       'Define safe zones; instant alerts on entry or exit.'],
      ['fa-camera-retro',      'Selfie Attendance', 'Verified self check-in for staff on the move.'],
      ['fa-id-card',           'Smart ID Cards',    'One card for identity, library, mess and transport.'],
      ['fa-bell',              'Real-Time Alerts',  'Push notifications the moment something matters.'],
    ],
  ],
  [
    'id'     => 'academics',
    'eyebrow'=> 'Smart Academics',
    'title'  => 'Academic workflows, reimagined.',
    'desc'   => 'Smarter tools for teachers, coordinators and administrators - built around how schools actually work.',
    'accent' => '#00b7ff',
    'cards'  => [
      ['fa-calendar-week',     'Timetable Builder',     'Drag-and-drop scheduling with conflict detection.'],
      ['fa-arrow-right-arrow-left','Substitute Assignment','Auto-find replacements when teachers are absent.'],
      ['fa-book-open',         'Homework Management',   'Assign, track and submit - all in one flow.'],
      ['fa-file-pen',          'Result Builder',        'Build report-card formats once, generate at scale.'],
      ['fa-id-card-clip',      'Report Card Design',    'Print-ready templates that match your board.'],
      ['fa-chart-line',        'Academic Analytics',    'Class-level and student-level performance insights.'],
    ],
  ],
  [
    'id'     => 'transport',
    'eyebrow'=> 'Smart Transport &amp; Safety',
    'title'  => 'Every vehicle, every child, in view.',
    'desc'   => 'Live transport visibility paired with verified student safety workflows.',
    'accent' => '#fbbf24',
    'cards'  => [
      ['fa-map-location-dot',  'Live Bus Tracking',    'See every vehicle on a map, in real time.'],
      ['fa-user-tie',          'Driver Panel',         'Driver-side app for route start, stops and incidents.'],
      ['fa-people-line',       'Conductor Panel',      'Boarding scans with instant parent updates.'],
      ['fa-shield-halved',     'Boarding Validation',  'Verified pickups - only the right child boards.'],
      ['fa-user-check',        'Pickup Authorization', 'Parents pre-authorize alternate pickups.'],
      ['fa-route',             'Route Management',     'Build, edit and optimize routes from one screen.'],
    ],
  ],
  [
    'id'     => 'parents',
    'eyebrow'=> 'Parent Connect',
    'title'  => 'Parents, always in the loop.',
    'desc'   => 'Keep families informed through real-time communication and targeted updates.',
    'accent' => '#ff5fcb',
    'cards'  => [
      ['fa-bell-concierge',    'Attendance Alerts',       'Parents notified the instant their child checks in.'],
      ['fa-book-bookmark',     'Homework Updates',        'Daily homework pushed straight to the parent app.'],
      ['fa-bullhorn',          'Notifications',           'Targeted messages by class, section or campus.'],
      ['fa-people-roof',       'Multi-Child Dashboard',   'One login covers every child in the family.'],
      ['fa-comments',          'Messaging',               'Direct chat between teachers and parents.'],
      ['fa-clipboard-check',   'Parent Acknowledgements', 'Track who has read circulars and notices.'],
    ],
  ],
  [
    'id'     => 'operations',
    'eyebrow'=> 'Operations &amp; Payroll',
    'title'  => 'Run the back office, smoothly.',
    'desc'   => 'Manage staff, payroll and daily operations from one organized system.',
    'accent' => '#22c55e',
    'cards'  => [
      ['fa-sack-dollar',       'Payroll',              'Automated monthly salaries with payslips.'],
      ['fa-file-invoice-dollar','EPF / TDS',           'Compliance-ready statutory deductions.'],
      ['fa-plane-departure',   'Leave Workflow',       'Apply, approve and track leave digitally.'],
      ['fa-users-gear',        'Staff Management',     'Single source for staff profiles and history.'],
      ['fa-user-clock',        'Duty Tracking',        'Assign and monitor staff duties across the day.'],
      ['fa-chart-pie',         'Reports &amp; Analytics','Operational dashboards leadership actually uses.'],
    ],
  ],
  [
    'id'     => 'digital',
    'eyebrow'=> 'Digital Presence &amp; Admissions',
    'title'  => 'Your school, beautifully online.',
    'desc'   => 'Websites, admissions and connected digital workflows that look as modern as your school feels.',
    'accent' => '#f97316',
    'cards'  => [
      ['fa-globe',             'School Websites',     'Modern, mobile-first sites built for every school.'],
      ['fa-user-plus',         'Online Admissions',   'End-to-end admission flow with online payments.'],
      ['fa-camera',            'Photographer Portal', 'Upload, tag and publish school photos at scale.'],
      ['fa-photo-film',        'Student Media',       'Per-student galleries, accessible to parents.'],
      ['fa-plug-circle-bolt',  'ERP Integration',     'Website and ERP share one source of truth.'],
      ['fa-palette',           'Branding System',     'Consistent identity across every touchpoint.'],
    ],
  ],
  [
    'id'     => 'enterprise',
    'eyebrow'=> 'Enterprise Infrastructure',
    'title'  => 'Built for groups that scale.',
    'desc'   => 'The platform layer that holds multi-branch operations together.',
    'accent' => '#a855f7',
    'compact'=> true,
    'cards'  => [
      ['fa-building-circle-check','Multi-Branch Management','One control plane for every campus you operate.'],
      ['fa-list-check',        'Audit Logs',           'Every action, timestamped and traceable.'],
      ['fa-user-shield',       'Roles &amp; Permissions','Fine-grained access for every team member.'],
      ['fa-microchip',         'Analytics Engine',     'Real-time insights across the entire group.'],
      ['fa-sitemap',           'Delegation Workflow',  'Empower teams without losing oversight.'],
    ],
  ],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include '_analytics.php'; ?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>What We Offer - Schoozie Platform Capabilities</title>
<meta name="description" content="The full Schoozie platform - OneID smart campus, smart academics, transport safety, parent connect, operations &amp; payroll, digital presence, and enterprise infrastructure for school groups.">
<meta name="robots" content="noindex, nofollow"><!-- hidden until launch -->
<link rel="canonical" href="https://schoozie.com/offers.php">
<link rel="icon" href="assets/icons/web/favicon.ico" sizes="32x32">
<link rel="icon" href="assets/icons/web/favicon.svg" type="image/svg+xml">
<link rel="apple-touch-icon" href="assets/icons/web/apple-touch-icon.png">
<link rel="manifest" href="assets/icons/web/site.webmanifest">
<meta property="og:type" content="website">
<meta property="og:title" content="What We Offer - Schoozie Platform Capabilities">
<meta property="og:description" content="Every capability that powers Schoozie schools - identity, academics, transport, parent connect, operations, digital presence and enterprise infrastructure.">
<meta property="og:url" content="https://schoozie.com/offers.php">
<meta property="og:image" content="https://schoozie.com/assets/og-image.jpg">
<meta name="twitter:card" content="summary_large_image">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700;900&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<link rel="stylesheet" href="css/global.css?v=<?php echo filemtime('css/global.css'); ?>">
<link rel="stylesheet" href="css/index-v2.css?v=<?php echo filemtime('css/index-v2.css'); ?>">
<link rel="stylesheet" href="css/offers.css?v=<?php echo filemtime('css/offers.css'); ?>">
<link rel="stylesheet" href="css/site-chrome.css?v=<?php echo filemtime('css/site-chrome.css'); ?>">
</head>
<body class="page-offers">

<?php $active_page = 'offers'; include '_header.php'; ?>

<!-- HERO - compact, premium -->
<section class="of-hero">
  <div class="of-hero-inner">
    <span class="of-hero-eyebrow">
      <span class="of-eye-dot"></span> Platform Overview
    </span>
    <h1>What we <span class="grad">offer</span></h1>
    <p class="of-hero-lead">
      Everything schools need to manage academics, communication, operations and digital
      experiences - in one connected platform.
    </p>
    <div class="of-hero-meta">
      <span><i class="fa-solid fa-layer-group"></i> <?php echo count($ecosystems); ?> ecosystems</span>
      <span class="of-hero-dot">·</span>
      <span><i class="fa-solid fa-cubes"></i>
        <?php
          $total = 0;
          foreach($ecosystems as $e) $total += count($e['cards']);
          echo $total;
        ?> capabilities
      </span>
      <span class="of-hero-dot">·</span>
      <span><i class="fa-solid fa-shield-check"></i> Enterprise-grade</span>
    </div>
  </div>
</section>

<!-- ECOSYSTEM SECTIONS -->
<main class="of-main">
  <?php foreach($ecosystems as $eco):
    $compact = !empty($eco['compact']);
  ?>
  <section class="of-eco <?php echo $compact ? 'is-compact' : ''; ?>"
           id="<?php echo $eco['id']; ?>"
           style="--ac:<?php echo $eco['accent']; ?>">
    <header class="of-eco-head reveal">
      <span class="of-eco-eyebrow"><?php echo $eco['eyebrow']; ?></span>
      <h2><?php echo htmlspecialchars($eco['title']); ?></h2>
      <p><?php echo $eco['desc']; ?></p>
    </header>

    <div class="of-cards">
      <?php foreach($eco['cards'] as $i => $c):
        list($icon, $title, $desc) = $c;
      ?>
      <article class="of-card reveal" style="--delay:<?php echo $i * 60; ?>ms">
        <div class="of-card-vis" aria-hidden="true">
          <span class="of-card-vis-icon"><i class="fa-solid <?php echo $icon; ?>"></i></span>
          <span class="of-card-vis-glow"></span>
          <span class="of-card-vis-grid"></span>
        </div>
        <div class="of-card-body">
          <h3><?php echo $title; ?></h3>
          <p><?php echo $desc; ?></p>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </section>
  <?php endforeach; ?>

  <!-- AND MUCH MORE - depth signal -->
  <section class="of-more reveal">
    <div class="of-more-card">
      <span class="of-more-tag"><i class="fa-solid fa-sparkles"></i> And beyond</span>
      <h2>And much more <span class="grad">under the hood</span></h2>
      <p>What you see here is the surface. Schoozie is extensible - schools shape it, we build for them. If something your school needs isn't on this page, it doesn't mean we can't do it. It usually just means we haven't talked yet.</p>

      <div class="of-more-chips">
        <span><i class="fa-solid fa-cube"></i> Custom Modules</span>
        <span><i class="fa-solid fa-plug"></i> Third-Party Integrations</span>
        <span><i class="fa-solid fa-code"></i> API Access</span>
        <span><i class="fa-solid fa-arrow-right-arrow-left"></i> Migration Tools</span>
        <span><i class="fa-solid fa-key"></i> SSO / SAML</span>
        <span><i class="fa-solid fa-paint-roller"></i> White-Label</span>
        <span><i class="fa-solid fa-language"></i> Multi-Language</span>
        <span><i class="fa-solid fa-shield-halved"></i> Compliance Reports</span>
        <span><i class="fa-solid fa-diagram-project"></i> Custom Workflows</span>
        <span class="of-chip-final"><i class="fa-solid fa-plus"></i> whatever your school needs next</span>
      </div>
    </div>
  </section>
</main>

<!-- CLOSING CTA -->
<section class="v2-final-cta of-cta">
  <h2>Ready to see it <span class="grad">in your school?</span></h2>
  <p>Pick a plan, or talk to us - we'll map the right capabilities to your school's reality.</p>
  <div class="v2-final-cta-btns">
    <a href="websites.php" class="v2-btn-primary">
      <i class="fa-solid fa-layer-group"></i> See Plans
    </a>
    <a href="https://wa.me/<?php echo $contact_whatsapp; ?>?text=Hi%2C+I%27d+like+to+talk+about+the+Schoozie+platform." target="_blank" rel="noopener" class="v2-btn-outline">
      <i class="fa-brands fa-whatsapp"></i> Talk to Us
    </a>
  </div>
</section>

<?php include '_footer.php'; ?>

<script>
/* Scroll-triggered reveal - fade-up with stagger via --delay */
(function(){
  if(!('IntersectionObserver' in window)){
    document.querySelectorAll('.reveal').forEach(function(el){ el.classList.add('is-visible'); });
    return;
  }
  var io = new IntersectionObserver(function(entries){
    entries.forEach(function(entry){
      if(entry.isIntersecting){
        entry.target.classList.add('is-visible');
        io.unobserve(entry.target);
      }
    });
  }, { rootMargin: '0px 0px -10% 0px', threshold: 0.08 });
  document.querySelectorAll('.reveal').forEach(function(el){ io.observe(el); });
})();
</script>

</body>
</html>
