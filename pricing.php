<?php
$site_name = "Schoozie";
$year = date("Y");
require_once 'config.php';

$term_disc = [5=>25, 3=>15, 1=>0];

/* ── ERP plans (data + card highlights; full lists power the comparison) ──
   The numbers below (base / students / ai / discounts) are FALLBACK defaults.
   They are overridden LIVE from the ERP a little further down, so editing a
   price in the Schoozie super-admin panel updates this page automatically.
   All the COPY (tag, highlights, groups) stays hardcoded here. */
$plans = [
  'basic' => [
    'name'=>'Basic','icon'=>'fa-cube','variant'=>'basic','feat'=>false,'badge'=>null,'badge_class'=>'','eyebrow'=>'Essentials',
    'tag'=>"Run your school's daily essentials.",
    'ai'=>'1,500','students'=>500,'base'=>6250,'count'=>40,
    'cta'=>'Choose Basic','btn'=>'prx-btn-dark','wa'=>'Basic',
    'highlights'=>['Student, staff &amp; admissions records','Digital attendance with parent alerts','Fees, online payments &amp; GST receipts','Parent app, notices &amp; communication','Core Schoozie AI assistant'],
    'groups'=>[
      'Schoozie AI Suite'=>['AI notice writer & translator (12+ languages)','AI parent assistant — grounded summaries & Q&A','AI admin agent — preview-then-confirm actions','AI teacher & staff assistant','Read-aloud TTS in 10 Indian languages','AI usage dashboard, fairness caps & audit log'],
      'Fees & Payments'=>['Online fee payment (school\'s own Razorpay)','Fee heads, installment plans & late fines','Discounts & concessions (sibling, RTE, EWS, staff-ward)','GST receipts with CGST/SGST split (5 templates)','Cheque/DD lifecycle with bounce tracking','Refunds with approval limits & escalation','Due reminders via SMS, WhatsApp & email','Defaulters aging & daily collection reports','Bulk dues generation & reminder dispatch'],
      'Attendance & Presence'=>['Period-wise student attendance with parent alerts','Staff QR kiosk + GPS geofence check-in','Student gate entry & live on-campus status','Parent-applied student leave with approvals','Regularization & official-duty workflows','Punch anomaly detection & review queue','Auto leave-binding & nightly attendance sweeps'],
      'Parent App'=>['Parent mobile & web app, multi-child switcher','Fees, attendance & notices for parents','Notice acknowledgements & leave requests'],
      'Communication'=>['Multi-class/role notices with read receipts','SMS & OTP (MSG91), WhatsApp & push channels','Notification templates & delivery audit','School feed with photo carousel'],
      'Students & Admissions'=>['Admissions with secure document uploads','Quota tracking, sibling links & concession flags','Transfer Certificates & No-Dues clearance','Roll numbers, class history & elective choices'],
      'Security & Admin'=>['Unified single-ID login (one Schoozie ID)','13+ roles with feature-level gating','Cover-duty role switching with audit stamps','On-site gating for cash operations','Hardened logins: rate limits & device caps','Guided setup wizard for new schools','School branding, signatories & locale settings'],
    ],
  ],
  'standard' => [
    'name'=>'Standard','icon'=>'fa-bolt','variant'=>'standard','feat'=>false,'badge'=>null,'badge_class'=>'','eyebrow'=>'Most chosen',
    'tag'=>'For growing schools that need timetables, exams and assignments.',
    'ai'=>'3,500','students'=>1000,'base'=>11250,'count'=>55,
    'cta'=>'Choose Standard','btn'=>'prx-btn-dark','wa'=>'Standard',
    'highlights'=>['<b>Everything in Basic</b>, plus:','Timetable, exams &amp; report cards (NEP HPC)','Full Schoozie AI Suite + question papers','Homework &amp; results in the parent app'],
    'groups'=>[
      'Schoozie AI Suite'=>['AI question papers with auto answer keys','AI notice writer & translator (12+ languages)','AI parent assistant — grounded summaries & Q&A','AI admin agent — preview-then-confirm actions','AI teacher & staff assistant','Read-aloud TTS in 10 Indian languages','AI usage dashboard, fairness caps & audit log','AI assignment & worksheet generator'],
      'Fees & Payments'=>['Online fee payment (school\'s own Razorpay)','Fee heads, installment plans & late fines','Discounts & concessions (sibling, RTE, EWS, staff-ward)','GST receipts with CGST/SGST split (5 templates)','Cheque/DD lifecycle with bounce tracking','Refunds with approval limits & escalation','Due reminders via SMS, WhatsApp & email','Defaulters aging & daily collection reports','Bulk dues generation & reminder dispatch'],
      'Attendance & Presence'=>['Period-wise student attendance with parent alerts','Staff QR kiosk + GPS geofence check-in','Student gate entry & live on-campus status','Parent-applied student leave with approvals','Regularization & official-duty workflows','Punch anomaly detection & review queue','Auto leave-binding & nightly attendance sweeps'],
      'Exams & Report Cards'=>['Exam scheduling, admit cards & eligibility','Bulk marks entry with Excel import','Custom mark schemes (CBSE, ICSE, state boards)','Grade scales, CGPA & weighted term results','HPC / NEP 2020 holistic report cards','Report card PDFs with auto-generated remarks','One-click assessment profile setup'],
      'Parent App'=>['Parent mobile & web app, multi-child switcher','Fees, attendance & notices for parents','Homework & results in the parent app','Notice acknowledgements & leave requests'],
      'Communication'=>['Multi-class/role notices with read receipts','SMS & OTP (MSG91), WhatsApp & push channels','Notification templates & delivery audit','School feed with photo carousel'],
      'Students & Admissions'=>['Admissions with secure document uploads','Quota tracking, sibling links & concession flags','Transfer Certificates & No-Dues clearance','Roll numbers, class history & elective choices'],
      'Timetable'=>['Drag-drop builder with teacher clash detection','Substitutions with notification workflow','Rooms, seasonal templates & subject constraints'],
      'Payroll & HR'=>['Multi-level staff leave approvals & balances','Comp-off earning with expiry & approvals'],
      'Security & Admin'=>['Unified single-ID login (one Schoozie ID)','13+ roles with feature-level gating','Cover-duty role switching with audit stamps','On-site gating for cash operations','Hardened logins: rate limits & device caps','Guided setup wizard for new schools','School branding, signatories & locale settings'],
    ],
  ],
  'premium' => [
    'name'=>'Premium','icon'=>'fa-crown','variant'=>'premium','feat'=>true,'badge'=>'Most Popular','badge_class'=>'b-premium','eyebrow'=>'Complete platform',
    'tag'=>'The complete platform — library, transport, payroll and more.',
    'ai'=>'6,000','students'=>1500,'base'=>17500,'count'=>77,
    'cta'=>'Choose Premium','btn'=>'prx-btn-gold','wa'=>'Premium',
    'highlights'=>['<b>Everything in Standard</b>, plus:','Payroll, HR &amp; statutory returns','Library, Transport &amp; Hostel','Face-recognition attendance','Full audit log &amp; analytics'],
    'groups'=>[
      'Schoozie AI Suite'=>['AI question papers with auto answer keys','AI notice writer & translator (12+ languages)','AI parent assistant — grounded summaries & Q&A','AI admin agent — preview-then-confirm actions','AI teacher & staff assistant','Read-aloud TTS in 10 Indian languages','AI usage dashboard, fairness caps & audit log','AI assignment & worksheet generator'],
      'Fees & Payments'=>['Online fee payment (school\'s own Razorpay)','Fee heads, installment plans & late fines','Discounts & concessions (sibling, RTE, EWS, staff-ward)','GST receipts with CGST/SGST split (5 templates)','Cheque/DD lifecycle with bounce tracking','Refunds with approval limits & escalation','Due reminders via SMS, WhatsApp & email','Defaulters aging & daily collection reports','Bulk dues generation & reminder dispatch'],
      'Attendance & Presence'=>['Period-wise student attendance with parent alerts','Staff QR kiosk + GPS geofence check-in','Student gate entry & live on-campus status','Parent-applied student leave with approvals','Regularization & official-duty workflows','Punch anomaly detection & review queue','Auto leave-binding & nightly attendance sweeps','Face recognition attendance (DPDPA consent)'],
      'Exams & Report Cards'=>['Exam scheduling, admit cards & eligibility','Bulk marks entry with Excel import','Custom mark schemes (CBSE, ICSE, state boards)','Grade scales, CGPA & weighted term results','HPC / NEP 2020 holistic report cards','Report card PDFs with auto-generated remarks','One-click assessment profile setup','Re-evaluation requests with fee tracking','Locked-result revision audit trail'],
      'Parent App'=>['Parent mobile & web app, multi-child switcher','Fees, attendance & notices for parents','Homework & results in the parent app','Notice acknowledgements & leave requests','Live bus tracking with geofence arrival alerts'],
      'Communication'=>['Multi-class/role notices with read receipts','SMS & OTP (MSG91), WhatsApp & push channels','Notification templates & delivery audit','School feed with photo carousel'],
      'Students & Admissions'=>['Admissions with secure document uploads','Quota tracking, sibling links & concession flags','Transfer Certificates & No-Dues clearance','Roll numbers, class history & elective choices','Bulk promotion, detention & alumni records'],
      'Timetable'=>['Drag-drop builder with teacher clash detection','Substitutions with notification workflow','Rooms, seasonal templates & subject constraints'],
      'Payroll & HR'=>['Multi-level staff leave approvals & balances','Comp-off earning with expiry & approvals','Full Indian payroll with payslip disputes','PF, ESI, Professional Tax & LWF automation','Form 16 & TDS (old/new regime)','Statutory returns (PF ECR, ESI, 24Q/26Q)','Salary advances & NEFT batch export'],
      'Library'=>['Per-copy tracking, barcodes & QR cards','Issue/return with auto fines & renewals','Librarian wallet & handover audit'],
      'Transport'=>['Routes, stops & student assignments','Vehicle compliance & maintenance logs','QR authorized pickups with handover audit','Trip logs, crew vetting & bus swaps'],
      'Hostel'=>['Room occupancy grid & bed allocation','Nightly roll-call & gate pass approvals','Mess plans, diet types & billing','Visitor log with ID verification'],
      'Security & Admin'=>['Unified single-ID login (one Schoozie ID)','13+ roles with feature-level gating','Cover-duty role switching with audit stamps','On-site gating for cash operations','Hardened logins: rate limits & device caps','Guided setup wizard for new schools','School branding, signatories & locale settings','Full audit log with before/after values'],
    ],
  ],
];

/* ─────────────────────────────────────────────────────────────────────────
   LIVE PRICING from the Schoozie ERP — the single source of truth.
   Overrides base / students / AI / per-plan discounts on the cards above so a
   price change in the super-admin panel shows here immediately. Always live
   (no local cache); a short timeout + graceful fallback keeps the page fast
   and up even if the ERP is briefly unreachable.
   Endpoint: GET /api/v1/subscriptions/public-pricing/  (public, no auth)
   ───────────────────────────────────────────────────────────────────────── */
$ERP_PRICING_URL = 'https://erp.schoozie.com/api/v1/subscriptions/public-pricing/';

function schoozie_fetch_pricing($url){
  if(!function_exists('curl_init')) return null;
  $ch = curl_init($url);
  curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_TIMEOUT        => 4,
    CURLOPT_CONNECTTIMEOUT => 3,
    CURLOPT_SSL_VERIFYPEER => true,
    CURLOPT_SSL_VERIFYHOST => 2,
    CURLOPT_HTTPHEADER     => ['Accept: application/json'],
    CURLOPT_USERAGENT      => 'schoozie-marketing/1.0',
  ]);
  $body = curl_exec($ch);
  $code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
  curl_close($ch);
  if($body === false || $code !== 200) return null;
  $data = json_decode($body, true);
  if(!is_array($data) || empty($data['plans']) || !is_array($data['plans'])) return null;
  $by_code = [];
  foreach($data['plans'] as $pl){
    if(empty($pl['code'])) continue;
    $by_code[strtolower($pl['code'])] = $pl;
  }
  return $by_code ?: null;
}

/* Seed every card with the fallback discount map, then override from the ERP. */
foreach($plans as $k=>$_p){ $plans[$k]['disc'] = $term_disc; }

$erp = schoozie_fetch_pricing($ERP_PRICING_URL);
if($erp){
  foreach($plans as $key=>$p){
    if(!isset($erp[$key])) continue;
    $live = $erp[$key];

    if(isset($live['list_monthly']) && $live['list_monthly'] > 0)
      $plans[$key]['base'] = (int)round($live['list_monthly']);
    if(isset($live['max_students']) && $live['max_students'] > 0)
      $plans[$key]['students'] = (int)$live['max_students'];
    if(isset($live['ai_actions_per_month']))
      $plans[$key]['ai'] = number_format((int)$live['ai_actions_per_month']);

    // Per-plan discounts from the live pricing rows (months 12/36/60 → 1/3/5-yr).
    if(!empty($live['pricing']) && is_array($live['pricing'])){
      $disc = [];
      foreach($live['pricing'] as $row){
        if(empty($row['months'])) continue;
        $term = (int)round($row['months'] / 12);
        if(in_array($term, [1,3,5], true))
          $disc[$term] = (int)round(isset($row['discount_pct']) ? $row['discount_pct'] : 0);
      }
      // Live values win; any term the ERP didn't return keeps the fallback.
      $plans[$key]['disc'] = $disc + $plans[$key]['disc'];
    }
  }
}

function inr($n){ return number_format($n, 0, '.', ','); }
function flat_feats($groups){ $s=[]; foreach($groups as $items){ foreach($items as $it){ $s[$it]=true; } } return $s; }
$has = ['basic'=>flat_feats($plans['basic']['groups']), 'standard'=>flat_feats($plans['standard']['groups'])];
function ok($b){ return $b ? '<i class="fa-solid fa-check yes"></i>' : '<i class="fa-solid fa-minus no"></i>'; }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include '_analytics.php'; ?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Schoozie Plans &amp; Pricing for Indian Schools | Schoozie</title>
<meta name="description" content="Transparent Schoozie pricing — school websites (Static &amp; Dynamic) and the AI ERP (Basic, Standard, Premium, Custom). Schoozie AI included, GST invoicing, secure Razorpay payments.">
<meta name="robots" content="index, follow">
<link rel="canonical" href="https://schoozie.com/pricing.php">

<!-- Open Graph -->
<meta property="og:type" content="website">
<meta property="og:title" content="Schoozie Plans &amp; Pricing for Indian Schools">
<meta property="og:description" content="Transparent pricing — school websites (Static &amp; Dynamic) and the AI-powered ERP (Basic, Standard, Premium, Custom). GST invoicing and secure Razorpay payments included.">
<meta property="og:url" content="https://schoozie.com/pricing.php">
<meta property="og:image" content="https://schoozie.com/assets/og-image.jpg">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:image:type" content="image/jpeg">
<meta property="og:image:alt" content="Schoozie - Plans &amp; Pricing for Indian Schools">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Schoozie Plans &amp; Pricing for Indian Schools">
<meta name="twitter:description" content="Transparent pricing for school websites and the AI-powered school ERP.">
<meta name="twitter:image" content="https://schoozie.com/assets/og-image.jpg">

<link rel="icon" href="assets/icons/web/favicon.ico" sizes="32x32">
<link rel="icon" href="assets/icons/web/favicon.svg" type="image/svg+xml">
<link rel="apple-touch-icon" href="assets/icons/web/apple-touch-icon.png">
<link rel="manifest" href="assets/icons/web/site.webmanifest">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<link rel="stylesheet" href="css/global.css?v=<?php echo filemtime('css/global.css'); ?>">
<link rel="stylesheet" href="css/site-chrome.css?v=<?php echo filemtime('css/site-chrome.css'); ?>">
<link rel="stylesheet" href="css/pricing.css?v=<?php echo filemtime('css/pricing.css'); ?>">
</head>
<body class="page-pricing">

<?php $active_page = 'pricing'; include '_header.php'; ?>

<div class="prx">

  <!-- HERO -->
  <section class="prx-hero">
    <div class="prx-wrap">
      <div class="prx-hero-ebs">
        <span class="prx-pill"><i class="fa-solid fa-shield-halved"></i> Secure Razorpay payments</span>
        <span class="prx-pill"><i class="fa-solid fa-file-invoice"></i> GST invoice every time</span>
        <span class="prx-pill"><i class="fa-solid fa-location-dot"></i> Built for Indian schools</span>
      </div>
      <h1>Pricing that <span class="hl">fits</span> your school.</h1>
      <p>Websites and the AI ERP — pick what your school needs.</p>
    </div>
  </section>

  <!-- INSTITUTIONAL PRESENCE (websites) -->
  <section class="prx-block alt">
    <div class="prx-wrap">
      <div class="prx-shead">
        <span class="eb">Institutional Presence</span>
        <h2>Your school&rsquo;s digital identity</h2>
        <p>A polished website that earns trust and drives admissions. One-time build, first year of hosting included.</p>
      </div>
      <div class="prx-web-grid">
        <article class="prx-card prx-wcard">
          <div class="prx-whead">
            <i class="fa-solid fa-pen-ruler"></i>
            <b>Static</b>
          </div>
          <span class="prx-web-eb">Managed &middot; we run it</span>
          <p class="prx-tag">We design, build &amp; manage your school website for you.</p>
          <div class="prx-price"><span class="amt">&#8377;<?php echo $offer_active ? $static_offer_price : $static_regular_price; ?></span><span class="per">one-time</span><?php if($offer_active): ?><span class="was">&#8377;<?php echo $static_regular_price; ?></span><?php endif; ?></div>
          <p class="prx-note">Renewal &#8377;<?php echo $static_renewal_price; ?>/year (hosting) &middot; domain billed separately</p>
          <div class="prx-wfeats">
            <div class="prx-feat"><i class="fa-solid fa-circle-check"></i><span>Professionally designed pages</span></div>
            <div class="prx-feat"><i class="fa-solid fa-circle-check"></i><span>We handle all updates for you</span></div>
            <div class="prx-feat"><i class="fa-solid fa-circle-check"></i><span>Admissions enquiry, notices, gallery &amp; news</span></div>
            <div class="prx-feat"><i class="fa-solid fa-circle-check"></i><span>1-year hosting &amp; SSL included</span></div>
            <div class="prx-feat"><i class="fa-solid fa-circle-check"></i><span>Fastest to launch</span></div>
          </div>
          <div class="prx-cta"><a href="https://wa.me/<?php echo $contact_whatsapp; ?>?text=Hi%2C+I%27m+interested+in+a+Static+school+website." target="_blank" rel="noopener" class="prx-btn prx-btn-dark">Choose Static <i class="fa-solid fa-arrow-right"></i></a></div>
        </article>
        <article class="prx-card prx-wcard is-popular">
          <div class="prx-ribbon"><span>Most Popular</span></div>
          <div class="prx-whead">
            <i class="fa-solid fa-gauge-high"></i>
            <b>Dynamic</b>
          </div>
          <span class="prx-web-eb">Self-managed &middot; you run it</span>
          <p class="prx-tag">Your own admin panel &mdash; post notices, news &amp; photos anytime.</p>
          <div class="prx-price"><span class="amt">&#8377;<?php echo $offer_active ? $dynamic_offer_price : $dynamic_regular_price; ?></span><span class="per">one-time</span><?php if($offer_active): ?><span class="was">&#8377;<?php echo $dynamic_regular_price; ?></span><?php endif; ?></div>
          <p class="prx-note">Renewal &#8377;<?php echo $dynamic_renewal_price; ?>/year (hosting) &middot; domain billed separately</p>
          <div class="prx-wfeats">
            <div class="prx-feat"><i class="fa-solid fa-circle-check"></i><span>Easy admin panel (CMS)</span></div>
            <div class="prx-feat"><i class="fa-solid fa-circle-check"></i><span>Update notices, news &amp; gallery yourself</span></div>
            <div class="prx-feat"><i class="fa-solid fa-circle-check"></i><span>Unlimited content, anytime</span></div>
            <div class="prx-feat"><i class="fa-solid fa-circle-check"></i><span>Everything in Static, plus self-service</span></div>
            <div class="prx-feat"><i class="fa-solid fa-circle-check"></i><span>1-year hosting &amp; SSL included</span></div>
          </div>
          <div class="prx-cta"><a href="https://wa.me/<?php echo $contact_whatsapp; ?>?text=Hi%2C+I%27m+interested+in+a+Dynamic+school+website." target="_blank" rel="noopener" class="prx-btn prx-btn-gold">Choose Dynamic <i class="fa-solid fa-arrow-right"></i></a></div>
        </article>
      </div>
    </div>
  </section>

  <!-- ENTERPRISE RESOURCE PLANNING (ERP) -->
  <section class="prx-block">
    <div class="prx-wrap">
      <div class="prx-shead">
        <span class="eb">Enterprise Resource Planning</span>
        <h2>Run the whole school on one AI platform</h2>
        <p>Every plan includes Schoozie AI. Pick 1, 3 or 5 years — the longer you commit, the more you save.</p>
      </div>

      <div class="prx-grid">
        <?php foreach($plans as $key=>$p):
          $disc5 = isset($p['disc'][5]) ? (int)$p['disc'][5] : 25;
          $eff   = (int)round($p['base'] * (1 - $disc5/100));
          $persy = $p['students'] > 0 ? (int)round($eff * 12 / $p['students']) : 0;
          $discJson = htmlspecialchars(json_encode($p['disc']), ENT_QUOTES);
          $variantClass = $p['feat'] ? 'is-feat' : 'is-'.$p['variant'];
        ?>
        <article class="prx-card <?php echo $variantClass; ?>" data-base="<?php echo $p['base']; ?>" data-students="<?php echo $p['students']; ?>" data-disc='<?php echo $discJson; ?>'>
          <?php if($p['badge']): ?><div class="prx-ribbon"><span><?php echo $p['badge']; ?></span></div><?php endif; ?>
          <span class="prx-kicker"><?php echo $p['eyebrow']; ?></span>
          <div class="prx-name"><i class="fa-solid <?php echo $p['icon']; ?>"></i><b><?php echo $p['name']; ?></b></div>
          <p class="prx-tag"><?php echo htmlspecialchars($p['tag']); ?></p>

          <div class="prx-ai"><i class="fa-solid fa-microchip"></i><div><b>Schoozie AI included</b><span><?php echo $p['ai']; ?> AI actions / month</span></div></div>

          <div class="prx-terms">
            <button type="button" data-term="5" class="on">5 Years</button>
            <button type="button" data-term="3">3 Years</button>
            <button type="button" data-term="1">1 Year</button>
          </div>

          <div class="prx-price"><span class="amt">&#8377;<?php echo inr($eff); ?></span><span class="per">/mo</span><span class="was"<?php if($disc5<=0) echo ' style="display:none"'; ?>>&#8377;<?php echo inr($p['base']); ?>/mo</span></div>
          <span class="prx-save"<?php if($disc5<=0) echo ' style="display:none"'; ?>>Save <?php echo $disc5; ?>%</span>
          <p class="prx-note"><b class="n-bill">Billed upfront for 5 years</b> &middot; + 18% GST<br>Effective monthly rate &middot; &asymp; <span class="n-persy">&#8377;<?php echo inr($persy); ?></span>/student/year</p>

          <div class="prx-cap"><i class="fa-solid fa-users"></i> Up to <?php echo inr($p['students']); ?> students</div>

          <div class="prx-hl">
            <?php foreach($p['highlights'] as $h): ?>
              <div class="prx-feat"><i class="fa-solid fa-circle-check"></i><span><?php echo $h; ?></span></div>
            <?php endforeach; ?>
          </div>
          <a href="#compare" class="prx-cmplink">See full comparison <i class="fa-solid fa-arrow-down"></i></a>

          <div class="prx-cta"><a href="https://wa.me/<?php echo $contact_whatsapp; ?>?text=Hi%2C+I%27m+interested+in+the+Schoozie+ERP+<?php echo $p['wa']; ?>+plan." target="_blank" rel="noopener" class="prx-btn <?php echo $p['btn']; ?>"><?php echo $p['cta']; ?> <i class="fa-solid fa-arrow-right"></i></a></div>
        </article>
        <?php endforeach; ?>

        <!-- CUSTOM / ENTERPRISE -->
        <article class="prx-card is-custom">
          <span class="prx-kicker">Enterprise</span>
          <div class="prx-name"><i class="fa-solid fa-gem"></i><b>Custom</b></div>
          <p class="prx-tag">For large groups, chains &amp; bespoke requirements.</p>
          <div class="prx-custom-price">Custom</div>
          <p class="prx-custom-sub">Priced to your institution&rsquo;s needs.</p>
          <div class="prx-custom-list">
            <div class="prx-feat"><i class="fa-solid fa-circle-check"></i><span>Every module &amp; feature</span></div>
            <div class="prx-feat"><i class="fa-solid fa-circle-check"></i><span>Unlimited students &amp; staff</span></div>
            <div class="prx-feat"><i class="fa-solid fa-circle-check"></i><span>Custom AI quotas</span></div>
            <div class="prx-feat"><i class="fa-solid fa-circle-check"></i><span>Dedicated onboarding &amp; support</span></div>
            <div class="prx-feat"><i class="fa-solid fa-circle-check"></i><span>Private server &amp; data isolation</span></div>
          </div>
          <div class="prx-cta"><a href="https://wa.me/<?php echo $contact_whatsapp; ?>?text=Hi%2C+I%27d+like+a+Custom+Schoozie+ERP+plan+for+my+school+group." target="_blank" rel="noopener" class="prx-btn prx-btn-purple"><i class="fa-solid fa-phone"></i> Talk to sales</a></div>
        </article>
      </div>
    </div>
  </section>

  <!-- CAPABILITY COMPARISON -->
  <section class="prx-block alt" id="compare">
    <div class="prx-wrap">
      <div class="prx-shead">
        <span class="eb">Capability Comparison</span>
        <h2>Every module, side by side</h2>
        <p>A feature-by-feature breakdown across all four ERP plans.</p>
      </div>
      <div class="prx-cmp">
        <table class="prx-cmp-table">
          <thead>
            <tr>
              <th>Feature</th>
              <th>Basic</th>
              <th>Standard</th>
              <th class="hi">Premium</th>
              <th>Custom</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($plans['premium']['groups'] as $gname=>$items): ?>
              <tr class="grp"><td colspan="5"><?php echo htmlspecialchars($gname); ?></td></tr>
              <?php foreach($items as $it): ?>
                <tr>
                  <td><?php echo htmlspecialchars($it); ?></td>
                  <td><?php echo ok(isset($has['basic'][$it])); ?></td>
                  <td><?php echo ok(isset($has['standard'][$it])); ?></td>
                  <td><?php echo ok(true); ?></td>
                  <td><?php echo ok(true); ?></td>
                </tr>
              <?php endforeach; ?>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
      <p class="prx-cmp-note">All plans include secure Razorpay payments, GST invoicing and free updates. Prices exclude 18% GST.</p>
    </div>
  </section>

</div>

<script>
(function(){
  function inr(n){ return n.toLocaleString('en-IN'); }
  function discFor(card, term){
    try { var dm = JSON.parse(card.dataset.disc || '{}'); return +dm[term] || 0; }
    catch(e){ return 0; }
  }
  function setTerm(term){
    document.querySelectorAll('.prx-card[data-base]').forEach(function(card){
      var base = +card.dataset.base, students = +card.dataset.students, disc = discFor(card, term);
      var eff = Math.round(base * (1 - disc/100)), persy = students ? Math.round(eff * 12 / students) : 0;
      card.querySelector('.amt').innerHTML = '&#8377;' + inr(eff);
      var was = card.querySelector('.was'); was.innerHTML = '&#8377;' + inr(base) + '/mo'; was.style.display = disc>0?'':'none';
      var save = card.querySelector('.prx-save'); save.textContent = 'Save ' + disc + '%'; save.style.display = disc>0?'':'none';
      card.querySelector('.n-bill').textContent = 'Billed upfront for ' + term + (term>1?' years':' year');
      card.querySelector('.n-persy').innerHTML = '&#8377;' + inr(persy);
      card.querySelectorAll('.prx-terms button').forEach(function(b){ b.classList.toggle('on', +b.dataset.term===term); });
    });
  }
  document.querySelectorAll('.prx-terms button').forEach(function(btn){ btn.addEventListener('click', function(){ setTerm(+btn.dataset.term); }); });
})();
</script>

<?php
/* ── Structured data (Product/Offer) — built from the SAME live pricing the
   cards show above, so the rich-result prices never drift. ── */
$strip = function($s){ return preg_replace('/[^\d]/', '', (string)$s); };
$sw = $offer_active ? $static_offer_price  : $static_regular_price;
$dw = $offer_active ? $dynamic_offer_price : $dynamic_regular_price;

$erp_effs = [];
foreach($plans as $p){
  if(empty($p['base']) || $p['base'] <= 0) continue;
  $d5 = isset($p['disc'][5]) ? (int)$p['disc'][5] : 25;
  $erp_effs[] = (int)round($p['base'] * (1 - $d5/100));   // effective monthly rate
}

$provider = ['@type'=>'Organization','@id'=>'https://schoozie.com/#organization','name'=>'Schoozie'];
$area     = ['@type'=>'Country','name'=>'India'];
$ld = ['@context'=>'https://schema.org', '@graph'=>[
  [
    '@type'=>'Service', 'name'=>'Schoozie Static School Website',
    'serviceType'=>'School website design',
    'description'=>'Professionally designed, Schoozie-managed static school website with free SSL and first-year hosting included.',
    'provider'=>$provider, 'areaServed'=>$area,
    'offers'=>['@type'=>'Offer','priceCurrency'=>'INR','price'=>$strip($sw),'availability'=>'https://schema.org/InStock','url'=>'https://schoozie.com/pricing.php'],
  ],
  [
    '@type'=>'Service', 'name'=>'Schoozie Dynamic School Website',
    'serviceType'=>'School website & CMS',
    'description'=>'Self-managed dynamic school website with an admin panel to post notices, news and photos any time.',
    'provider'=>$provider, 'areaServed'=>$area,
    'offers'=>['@type'=>'Offer','priceCurrency'=>'INR','price'=>$strip($dw),'availability'=>'https://schema.org/InStock','url'=>'https://schoozie.com/pricing.php'],
  ],
]];
if($erp_effs){
  $ld['@graph'][] = [
    '@type'=>'Service', 'name'=>'Schoozie School ERP',
    'serviceType'=>'School management software',
    'description'=>'AI-powered school ERP — fees, attendance, exams, transport, payroll and the parent app. Basic, Standard, Premium and Custom tiers.',
    'provider'=>$provider, 'areaServed'=>$area,
    'offers'=>['@type'=>'AggregateOffer','priceCurrency'=>'INR',
      'lowPrice'=>(string)min($erp_effs), 'highPrice'=>(string)max($erp_effs),
      'offerCount'=>(string)count($erp_effs),
      'availability'=>'https://schema.org/InStock', 'url'=>'https://schoozie.com/pricing.php'],
  ];
}
echo "<script type=\"application/ld+json\">\n".json_encode($ld, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT)."\n</script>\n";
?>

<!-- FAQ -->
<?php
require_once __DIR__ . '/_faq.php';
sz_render_faq([
  ['q' => 'How is Schoozie priced?',
   'a' => 'Schoozie has two parts. <strong>School websites</strong> are a one-time build plus a low yearly renewal, and the <strong>ERP is billed per quarter</strong>, with bigger discounts the longer the term you choose. Setup, hosting, SSL, updates and support are all included.'],
  ['q' => 'Are there any hidden charges or setup fees?',
   'a' => 'No. Schoozie pricing is <strong>all-inclusive and transparent</strong> &mdash; onboarding, data migration, hosting, SSL, updates and WhatsApp support are covered. There are no surprise setup fees and no sudden renewal hikes; you always know exactly what you pay.'],
  ['q' => 'Is GST included in the listed prices?',
   'a' => 'Listed prices are <strong>exclusive of 18% GST</strong>, which is added at billing as per Indian tax rules. The plan pages show the base price so you can compare clearly, and your invoice adds GST on top.'],
  ['q' => 'Do longer plans cost less?',
   'a' => 'Yes. The ERP rewards longer commitments &mdash; <strong>half-yearly and yearly plans carry increasing discounts</strong> versus paying quarterly &mdash; so a longer term gives your school the best effective monthly rate.'],
  ['q' => 'Can we bundle a website and ERP together?',
   'a' => 'Yes. The <strong>Website + ERP combo</strong> gives you a discount on the website when taken with the ERP, so schools going fully digital pay less than buying each separately. See the combo option above.'],
  ['q' => 'Can we upgrade or add features later?',
   'a' => 'You can start small and grow. Begin with a website or a lower ERP tier and <strong>upgrade whenever you&rsquo;re ready</strong> &mdash; we carry over all your existing data and content, and adjust your plan fairly with no penalty.'],
], 'Pricing &mdash; frequently asked questions', 'Pricing FAQ');
?>

<?php
require_once __DIR__ . '/_schema.php';
sz_page(
  'Plans & Pricing — Schoozie',
  'Transparent, all-inclusive Schoozie pricing for school websites and ERP — one-time website build plus yearly renewal, and quarterly ERP with term discounts.',
  'https://schoozie.com/pricing.php',
  __FILE__,
  [['name' => 'Home', 'url' => 'https://schoozie.com/'], ['name' => 'Plans & Pricing', 'url' => 'https://schoozie.com/pricing.php']]
);
?>

<?php include '_footer.php'; ?>
</body>
</html>
