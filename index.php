<?php
$site_name = "Schoozie";
$year = date("Y");
require_once 'config.php';

/* Resolve an image that may be saved as .png, .jpg or .jpeg.
   Pass the path WITHOUT extension; returns the first file that exists on
   disk. Falls back to the first extension so the markup still renders. */
if (!function_exists('img_src')) {
  function img_src(string $base, array $exts = ['png', 'jpg', 'jpeg']): string {
    foreach ($exts as $ext) {
      if (is_file(__DIR__ . '/' . $base . '.' . $ext)) return $base . '.' . $ext;
    }
    return $base . '.' . $exts[0];
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include '_analytics.php'; ?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Schoozie - Take Your School Digital in Minutes</title>
<meta name="description" content="Schoozie helps Indian schools go digital with professional school websites, dynamic CMS, and school ERP software. WhatsApp support included.">
<meta name="keywords" content="school website india, school ERP software india, school management software, dynamic school website, school CMS india, school website design india, urdu medium school website, hindi medium school website, school ERP roorkee, school website uttarakhand, affordable school website india">
<meta name="robots" content="index, follow">
<link rel="canonical" href="https://schoozie.com/">
<link rel="icon" href="assets/icons/web/favicon.ico" sizes="32x32">
<link rel="icon" href="assets/icons/web/favicon.svg" type="image/svg+xml">
<link rel="apple-touch-icon" href="assets/icons/web/apple-touch-icon.png">
<link rel="manifest" href="assets/icons/web/site.webmanifest">
<!-- Open Graph -->
<meta property="og:type" content="website">
<meta property="og:title" content="Schoozie - School Website & ERP Software for Indian Schools">
<meta property="og:description" content="Schoozie helps Indian schools go digital with professional school websites, dynamic CMS, and school ERP software.">
<meta property="og:url" content="https://schoozie.com/">
<meta property="og:image" content="https://schoozie.com/assets/og-image.jpg">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:image:type" content="image/jpeg">
<meta property="og:image:alt" content="Schoozie - School Websites, CMS & ERP Software for Indian Schools">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Schoozie - School Website & ERP Software for Indian Schools">
<meta name="twitter:description" content="Schoozie helps Indian schools go digital with professional school websites, dynamic CMS, and school ERP software.">
<meta name="twitter:image" content="https://schoozie.com/assets/og-image.jpg">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="dns-prefetch" href="https://cdnjs.cloudflare.com">
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Source+Serif+4:opsz,wght@8..60,400;8..60,500;8..60,600;8..60,700;8..60,800;8..60,900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<link rel="stylesheet" href="css/global.css?v=<?php echo filemtime('css/global.css'); ?>">
<link rel="stylesheet" href="css/home.css?v=<?php echo filemtime('css/home.css'); ?>">
</head>
<body>

<?php $active_page = 'home'; include '_header.php'; ?>

<!-- HERO (text + laptop/phone device cluster) -->
<section class="hero">
  <div class="wrap hero-grid">
    <div class="hero-text">
      <span class="eyebrow">AI-Powered School Platform</span>
      <h1>Manage Your Entire School in One Simple App.</h1>
      <p class="lead">Stop struggling with paperwork. Schoozie&rsquo;s AI helps Indian schools handle fees, attendance and parent communication with zero effort.</p>
      <div class="hero-btns">
        <a class="btn" href="https://wa.me/<?php echo $contact_whatsapp; ?>?text=Hi%2C+I%27d+like+a+free+demo+of+Schoozie." target="_blank" rel="noopener">
          Book a Free Demo <i class="fa-solid fa-arrow-right"></i>
        </a>
      </div>
      <p class="hero-note"><span><i class="fa-solid fa-circle-check"></i> Easy to learn</span> <span><i class="fa-solid fa-circle-check"></i> Works on any device</span></p>
    </div>
    <div class="hero-visual">
      <img src="assets/png/hero-section-2.png" alt="Schoozie dashboard on a laptop with the parent, teacher and principal apps on phones" loading="eager">
      <span class="hero-ai-badge"><i class="fa-solid fa-wand-magic-sparkles"></i> Powered by AI</span>
    </div>
  </div>
</section>


<!-- THREE ERAS OF MANAGEMENT -->
<section class="section dark">
  <div class="wrap">
    <div class="head">
      <span class="eyebrow">Transformation</span>
      <h2>The Three Eras of Management</h2>
      <p>From paper registers to a school that runs itself.</p>
    </div>
    <div class="eras-grid">

      <div class="era">
        <span class="era-label">Era 1 &middot; Manual</span>
        <h3>The Paper School</h3>
        <ul>
          <li><i class="fa-solid fa-xmark"></i> Paper files &amp; registers</li>
          <li><i class="fa-solid fa-xmark"></i> Fee queues &amp; cash counters</li>
          <li><i class="fa-solid fa-xmark"></i> Manual attendance books</li>
          <li><i class="fa-solid fa-xmark"></i> Phone calls &amp; notice boards</li>
        </ul>
      </div>

      <div class="era">
        <span class="era-label">Era 2 &middot; Old ERP</span>
        <h3>The Traditional ERP</h3>
        <ul>
          <li><i class="fa-solid fa-xmark"></i> Digital - but you do the thinking</li>
          <li><i class="fa-solid fa-xmark"></i> Endless data entry &amp; forms</li>
          <li><i class="fa-solid fa-xmark"></i> Disconnected modules</li>
          <li><i class="fa-solid fa-xmark"></i> Reacts only after you ask</li>
        </ul>
      </div>

      <div class="era featured">
        <span class="era-label">Era 3 &middot; Autonomous AI</span>
        <h3>The Schoozie Brain</h3>
        <ul>
          <li><i class="fa-solid fa-check"></i> Thinks, decides &amp; acts on its own</li>
          <li><i class="fa-solid fa-check"></i> Payments reconcile themselves</li>
          <li><i class="fa-solid fa-check"></i> Biometric attendance built-in</li>
          <li><i class="fa-solid fa-check"></i> Speaks to you &amp; predicts what's next</li>
          <li><i class="fa-solid fa-check"></i> One brain, every module connected</li>
        </ul>
      </div>

    </div>
  </div>
</section>


<!-- THE SCHOOZIE STORY -->
<section class="section story">
  <div class="wrap">
    <div class="head">
      <span class="eyebrow">Breaking Language Barriers</span>
      <h2>Every parent deserves to understand.</h2>
      <p>No English? No problem. See how one mother finally connected with her child&rsquo;s school.</p>
    </div>
    <div class="story-grid">

      <div class="story-step">
        <div class="story-img">
          <img src="<?php echo img_src('assets/png/story/story-1'); ?>" alt="A worried mother at a school meeting, unsure how to talk to the teacher" loading="lazy">
          <span class="story-num">1</span>
        </div>
        <p><b>She froze at the meeting.</b> &ldquo;How will I even talk to the teacher? I don&rsquo;t know English&hellip;&rdquo;</p>
      </div>

      <div class="story-step">
        <div class="story-img">
          <img src="<?php echo img_src('assets/png/story/story-2'); ?>" alt="The mother discovers the Schoozie app that lets her speak in her own language" loading="lazy">
          <span class="story-num">2</span>
        </div>
        <p><b>Then she found Schoozie.</b> &ldquo;Speak in your own language,&rdquo; it said &mdash; in Hindi.</p>
      </div>

      <div class="story-step">
        <div class="story-img">
          <img src="<?php echo img_src('assets/png/story/story-3'); ?>" alt="The mother speaks to Schoozie AI which is listening" loading="lazy">
          <span class="story-num">3</span>
        </div>
        <p><b>She just asked out loud,</b> in her own words. Schoozie AI listened.</p>
      </div>

      <div class="story-step">
        <div class="story-img">
          <img src="<?php echo img_src('assets/png/story/story-4'); ?>" alt="The mother smiles as Schoozie replies in Hindi that her daughter scored 94 out of 100" loading="lazy">
          <span class="story-num">4</span>
        </div>
        <p><b>Instantly, in Hindi:</b> &ldquo;Kavya scored 94/100 in Maths today. Well done!&rdquo; She smiled.</p>
      </div>

    </div>
  </div>
</section>

<!-- JUST ASK (voice intelligence) -->
<section class="section ask">
  <div class="ask-wave-bg" aria-hidden="true"><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i></div>
  <div class="wrap">
    <div class="ask-head">
      <span class="eyebrow">Voice Intelligence &middot; Many Indian Languages</span>
      <h2>Just Ask.</h2>
      <div class="ask-bar">
        <i class="fa-solid fa-microphone"></i>
        <span id="ask-q">&ldquo;Give me a full update on Aarav.&rdquo;</span>
        <em class="ask-wave"><i></i><i></i><i></i><i></i></em>
      </div>
      <p class="ask-lead">Instant insights into attendance, performance and behaviour - get answers in English, Hindi, Bengali, Tamil and many more Indian languages.</p>
    </div>

    <div class="ask-answer">
      <div class="ask-answer-top">
        <button type="button" class="ask-listen" id="ask-listen" aria-label="Play this answer aloud in the selected language" title="Play aloud" disabled>
          <i class="fa-solid fa-volume-high"></i>
        </button>
      </div>
      <p id="ask-a">&ldquo;Aarav has 90% attendance this term and all fees are cleared. He&rsquo;s completed 22 of 22 assignments, averaged 91% in exams, and has 2 library books issued (due next Monday). Teachers report steady focus with nothing pending.&rdquo;</p>
    </div>

    <div class="ask-langs" id="ask-langs">
      <span class="active" data-q="Give me a full update on Aarav." data-a="Aarav has 90% attendance this term and all fees are cleared. He's completed 22 of 22 assignments, averaged 91% in exams, and has 2 library books issued (due next Monday). Teachers report steady focus with nothing pending.">English</span>
      <span data-q="आरव की पूरी जानकारी दीजिए।" data-a="इस सत्र में आरव की उपस्थिति 98% है और सारी फीस चुकता है। उसने 22 में से 22 असाइनमेंट पूरे किए, परीक्षाओं में औसतन 91% अंक पाए, और उसके नाम 2 लाइब्रेरी किताबें जारी हैं (अगले सोमवार तक जमा करनी हैं)। शिक्षकों के अनुसार उसकी एकाग्रता अच्छी है और कुछ भी लंबित नहीं है।">Hindi</span>
      <span data-q="আরভ সম্পর্কে সম্পূর্ণ আপডেট দিন।" data-a="এই টার্মে আরভের উপস্থিতি ৯৮% এবং সব ফি পরিশোধিত। সে ২২টির মধ্যে ২২টি অ্যাসাইনমেন্ট সম্পন্ন করেছে, পরীক্ষায় গড়ে ৯১% পেয়েছে এবং তার নামে ২টি লাইব্রেরি বই ইস্যু করা আছে (আগামী সোমবার জমা দিতে হবে)। শিক্ষকরা জানিয়েছেন তার মনোযোগ স্থির এবং কিছুই বাকি নেই।">Bengali</span>
      <span data-q="ஆரவ் பற்றிய முழு விவரத்தைத் தாருங்கள்." data-a="இந்தப் பருவத்தில் ஆரவின் வருகை 98%, அனைத்து கட்டணங்களும் செலுத்தப்பட்டுள்ளன. அவர் 22-ல் 22 பணிகளை முடித்துள்ளார், தேர்வுகளில் சராசரியாக 91% பெற்றுள்ளார், மேலும் 2 நூலக புத்தகங்கள் அவர் பெயரில் வழங்கப்பட்டுள்ளன (அடுத்த திங்கள் திரும்பச் செலுத்த வேண்டும்). ஆசிரியர்கள் அவரது கவனம் நிலையாக உள்ளதாகவும் நிலுவையில் எதுவும் இல்லை என்றும் கூறுகின்றனர்.">Tamil</span>
      <span data-q="ఆరవ్ గురించి పూర్తి సమాచారం ఇవ్వండి." data-a="ఈ టర్మ్‌లో ఆరవ్ హాజరు 98%, అన్ని ఫీజులు చెల్లించబడ్డాయి. అతను 22లో 22 అసైన్‌మెంట్‌లు పూర్తి చేశాడు, పరీక్షల్లో సగటున 91% సాధించాడు, మరియు అతని పేరిట 2 లైబ్రరీ పుస్తకాలు ఉన్నాయి (వచ్చే సోమవారం తిరిగి ఇవ్వాలి). ఉపాధ్యాయులు అతని ఏకాగ్రత స్థిరంగా ఉందని, పెండింగ్ ఏదీ లేదని తెలిపారు.">Telugu</span>
      <span data-q="आरवची संपूर्ण माहिती द्या." data-a="या सत्रात आरवची उपस्थिती 98% असून सर्व फी भरलेली आहे. त्याने 22 पैकी 22 असाइनमेंट पूर्ण केले, परीक्षांमध्ये सरासरी 91% गुण मिळवले आणि त्याच्या नावावर 2 ग्रंथालय पुस्तके आहेत (पुढील सोमवारी परत करायची आहेत). शिक्षकांच्या मते त्याची एकाग्रता स्थिर आहे आणि काहीही प्रलंबित नाही.">Marathi</span>
      <span data-q="આરવ વિશે સંપૂર્ણ માહિતી આપો." data-a="આ સત્રમાં આરવની હાજરી 98% છે અને બધી ફી ભરાઈ ગઈ છે. તેણે 22માંથી 22 અસાઇનમેન્ટ પૂરા કર્યા, પરીક્ષાઓમાં સરેરાશ 91% ગુણ મેળવ્યા, અને તેના નામે 2 લાઇબ્રેરી પુસ્તકો ઇશ્યૂ થયેલા છે (આવતા સોમવારે પરત કરવાના છે). શિક્ષકોના મતે તેની એકાગ્રતા સ્થિર છે અને કંઈ બાકી નથી.">Gujarati</span>
      <span class="more">+ many more</span>
      <i class="fa-solid fa-arrow-up-long lang-arrow" id="lang-arrow" aria-hidden="true"></i>
    </div>
  </div>
</section>

<script>
(function(){
  var box = document.getElementById('ask-langs');
  var q   = document.getElementById('ask-q');
  var a   = document.getElementById('ask-a');
  if(!box || !q || !a) return;
  var langs = Array.prototype.slice.call(box.querySelectorAll('span[data-a]'));
  if(!langs.length) return;
  var idx = 0, timer = null;

  // ── voice playback (only the languages we have audio for) ──
  var AUDIO = {
    'English':  'assets/sounds/sounds/eng.wav',
    'Hindi':    'assets/sounds/sounds/hindi.wav',
    'Bengali':  'assets/sounds/sounds/bengali.wav',
    'Tamil':    'assets/sounds/sounds/tamil.wav',
    'Telugu':   'assets/sounds/sounds/telugu.wav',
    'Marathi':  'assets/sounds/sounds/marathi.wav',
    'Gujarati': 'assets/sounds/sounds/gujrati.wav'
  };
  var listen = document.getElementById('ask-listen');
  var audio  = new Audio();
  var RATE = 0.9;                 // slower playback (0.9 = 10% slower)
  audio.preservesPitch = true;    // keep the voice natural, not deep
  audio.mozPreservesPitch = true; audio.webkitPreservesPitch = true;
  audio.playbackRate = RATE;
  var playing = false;
  function setListenUI(on){
    if(!listen) return;
    listen.classList.toggle('playing', on);
    var ic = listen.querySelector('i'); if(ic) ic.className = on ? 'fa-solid fa-pause' : 'fa-solid fa-volume-high';
  }
  function stopAudio(){ if(playing){ audio.pause(); try{ audio.currentTime = 0; }catch(e){} playing = false; setListenUI(false); } }
  function updateListen(el){
    if(!listen) return;
    var src = AUDIO[(el.textContent || '').trim()];
    stopAudio();
    if(src){ listen.dataset.src = src; listen.disabled = false; listen.classList.remove('is-off'); }
    else   { listen.dataset.src = '';  listen.disabled = true;  listen.classList.add('is-off'); }
  }
  function startPlay(){
    var src = listen ? listen.dataset.src : '';
    if(!src) return;
    stopAudio();
    stop();                                     // pause auto-rotation while listening
    audio.src = src;
    audio.playbackRate = RATE;                  // re-assert after loading a new clip
    var p = audio.play();
    if(p && p.catch) p.catch(function(){ playing = false; setListenUI(false); });
    playing = true; setListenUI(true);
  }
  if(listen){
    listen.addEventListener('click', function(e){
      e.stopPropagation();
      if(playing){ stopAudio(); start(); return; }   // tap again to stop
      startPlay();
    });
    audio.addEventListener('ended', function(){ playing = false; setListenUI(false); setTimeout(start, 3000); });
  }
  // flag the chips that have a voice clip (small speaker cue) + init the button
  langs.forEach(function(s){
    if(AUDIO[(s.textContent || '').trim()]){
      s.classList.add('has-audio');
      var g = document.createElement('i');
      g.className = 'fa-solid fa-volume-high chip-spk';
      g.setAttribute('aria-hidden', 'true');
      s.appendChild(g);
    }
  });
  updateListen(langs[idx]);

  // stop playback when the user leaves the page / hides or switches the tab
  document.addEventListener('visibilitychange', function(){ if(document.hidden) stopAudio(); });
  window.addEventListener('pagehide', stopAudio);
  window.addEventListener('blur', stopAudio);

  var arrow = document.getElementById('lang-arrow');
  function placeArrow(){
    if(!arrow || langs.length < 2) return;
    box.style.setProperty('--x1', (langs[0].offsetLeft + langs[0].offsetWidth/2) + 'px');
    box.style.setProperty('--x2', (langs[1].offsetLeft + langs[1].offsetWidth/2) + 'px');
  }
  placeArrow();
  window.addEventListener('resize', placeArrow);
  var reduce = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  function apply(el){
    langs.forEach(function(s){ s.classList.remove('active'); });
    el.classList.add('active');
    updateListen(el);
    q.style.opacity = a.style.opacity = '0';
    setTimeout(function(){
      q.textContent = '“' + el.getAttribute('data-q') + '”';
      a.textContent = '“' + el.getAttribute('data-a') + '”';
      q.style.opacity = a.style.opacity = '1';
    }, 160);
  }
  function next(){ idx = (idx + 1) % langs.length; apply(langs[idx]); }
  function start(){ if(reduce || timer || playing) return; timer = setInterval(next, 3200); }
  function stop(){ if(timer){ clearInterval(timer); timer = null; } }

  box.addEventListener('click', function(e){
    var el = e.target.closest('span[data-a]');
    if(!el) return;
    idx = langs.indexOf(el);
    apply(el);
    stop();
    if(listen && listen.dataset.src){ startPlay(); }   // language has a voice -> play it right away
    else { setTimeout(start, 8000); }
  });

  var section = box.closest('.ask') || box;
  section.addEventListener('mouseenter', stop);
  section.addEventListener('mouseleave', start);

  if('IntersectionObserver' in window && !reduce){
    new IntersectionObserver(function(entries){
      entries.forEach(function(en){ en.isIntersecting ? start() : stop(); });
    }, {threshold:0.3}).observe(box);
  } else {
    start();
  }
})();
</script>

<!-- LIVING DIGITAL TWIN -->
<section class="section twin">
  <div class="wrap">
    <div class="twin-head">
      <div>
        <span class="eyebrow">Living Digital Twin</span>
        <h2>The campus, <span class="hl">live.</span></h2>
        <p>Fly above your school and watch it breathe &mdash; students moving, buses driving, attendance syncing and every system updating every second, with AI watching over all of it.</p>
      </div>
      <span class="twin-feed"><span class="live-dot"></span> Real-Time Data Feed</span>
    </div>
    <div class="twin-card">
      <div class="twin-stats">
        <div class="tstat"><span class="tnum green">98.6%</span><span class="tlbl">Live Attendance</span></div>
        <div class="tstat"><span class="tnum">1,284</span><span class="tlbl">Marked Today</span></div>
        <div class="tstat"><span class="tnum">1,284</span><span class="tlbl">Parents Notified</span></div>
        <div class="tstat"><span class="tnum">42</span><span class="tlbl">Buses on Route</span></div>
      </div>
      <div class="twin-live" id="twin-live">

        <!-- TEACHER APP -->
        <div class="tl-phone">
          <div class="tl-status"><span class="tl-clock">9:41</span><span class="tl-sysic"><i class="fa-solid fa-signal"></i><i class="fa-solid fa-wifi"></i><i class="fa-solid fa-battery-three-quarters"></i></span></div>
          <div class="tl-top">
            <img class="tl-logo" src="assets/png/logo-parent.png?v=<?php echo @filemtime('assets/png/logo-parent.png'); ?>" alt="">
            <div class="tl-idn"><b>Class 5-A &middot; Attendance</b><span>Manavendra &middot; Class Teacher</span></div>
            <span class="tl-livechip"><i></i> live</span>
          </div>
          <div class="tl-roster" id="tl-roster">
            <div class="tl-row"><span class="tl-av">D</span><span class="tl-nm">Diya Nair</span><span class="tl-tk"><i class="fa-solid fa-check"></i></span></div>
            <div class="tl-row"><span class="tl-av">K</span><span class="tl-nm">Kabir Khan</span><span class="tl-tk"><i class="fa-solid fa-check"></i></span></div>
            <div class="tl-row is-aarav"><span class="tl-av">A</span><span class="tl-nm">Aarav Sharma</span><span class="tl-tk"><i class="fa-solid fa-check"></i></span></div>
            <div class="tl-row"><span class="tl-av">M</span><span class="tl-nm">Meera Iyer</span><span class="tl-tk"><i class="fa-solid fa-check"></i></span></div>
            <div class="tl-row"><span class="tl-av">R</span><span class="tl-nm">Rohan Das</span><span class="tl-tk"><i class="fa-solid fa-check"></i></span></div>
          </div>
          <div class="tl-foot"><span>Present</span><b><span id="tl-present">26</span> / 30</b></div>
        </div>

        <!-- SYNC FLOW -->
        <div class="tl-flow">
          <span class="tl-flow-dot" id="tl-flow-dot"></span>
          <i class="fa-solid fa-arrow-right-long"></i>
          <span class="tl-flow-lbl">syncing</span>
        </div>

        <!-- PARENT APP -->
        <div class="tl-phone">
          <div class="tl-status tl-status-g"><span class="tl-clock">9:41</span><span class="tl-sysic"><i class="fa-solid fa-signal"></i><i class="fa-solid fa-wifi"></i><i class="fa-solid fa-battery-three-quarters"></i></span></div>
          <div class="tl-top tl-top-g">
            <img class="tl-logo" src="assets/png/logo-parent.png?v=<?php echo @filemtime('assets/png/logo-parent.png'); ?>" alt="">
            <div class="tl-idn"><b>Aarav &middot; Class 5-A</b><span>Parent app</span></div>
          </div>
          <div class="tl-pbody">
            <div class="tl-notif tl-pending" id="tl-notif">
              <span class="tl-notif-ic"><i class="fa-solid fa-hourglass-half" id="tl-notif-i"></i></span>
              <div class="tl-notif-tx"><b id="tl-notif-b">Attendance not marked yet</b><span id="tl-notif-s">Waiting for today&rsquo;s update&hellip;</span></div>
            </div>
            <div class="tl-ring-wrap">
              <div class="tl-ring" id="tl-ring"><span id="tl-att">93%</span></div>
              <div class="tl-ring-lbl">Attendance<em>this month so far</em></div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>

<?php /* HIDDEN on homepage - reuse "One brain. Every system." on another page
<section class="section modules">
  <div class="wrap">
    <div class="head">
      <h2>One brain. <span class="hl">Every system.</span></h2>
      <p>Explore our universe of 85+ intelligent modules designed to manage every micro-detail of your institution.</p>
    </div>
    <div class="mod-grid">
      <div class="mod-col">
        <div class="mod-ic"><i class="fa-solid fa-graduation-cap"></i></div>
        <h3>Academics</h3>
        <ul><li>Exam Engine</li><li>Lesson Plans</li><li>Digital Gradebook</li><li>Skill Analysis</li></ul>
      </div>
      <div class="mod-col">
        <div class="mod-ic"><i class="fa-solid fa-users"></i></div>
        <h3>People</h3>
        <ul><li>HR &amp; Payroll</li><li>Staff Portal</li><li>Admission CRM</li><li>Parent Connect</li></ul>
      </div>
      <div class="mod-col">
        <div class="mod-ic"><i class="fa-solid fa-indian-rupee-sign"></i></div>
        <h3>Finance</h3>
        <ul><li>Smart Fee Pay</li><li>Inventory Mgmt</li><li>Asset Tracking</li><li>Financial Audit</li></ul>
      </div>
      <div class="mod-col">
        <div class="mod-ic"><i class="fa-solid fa-shield-halved"></i></div>
        <h3>Campus &amp; Safety</h3>
        <ul><li>Live Transport</li><li>Gate Pass AI</li><li>Visitor Mgmt</li><li>Health Records</li></ul>
      </div>
    </div>
    <div class="mod-bar">
      <div>
        <strong>Predictive AI Platform</strong>
        <span>Our underlying neural engine connects all these modules, predicting trends and automating routine tasks across the entire institution.</span>
      </div>
      <a href="erp.php" class="mod-btn"><i class="fa-solid fa-layer-group"></i> Explore All 85+ Modules</a>
    </div>
  </div>
</section>

*/ ?>
<!-- INTEGRATED ECOSYSTEM -->
<section class="section soft eco">
  <div class="wrap">
    <div class="head">
      <span class="eyebrow">Integrated by Design</span>
      <h2>Integrated Ecosystem</h2>
      <p>The foundation that powers our intelligent layer.</p>
    </div>
    <div class="eco-grid">
      <a href="erp.php" class="eco-card">
        <span class="eco-tag">AI Management</span>
        <h3><span class="hl">AI</span>-Powered School ERP</h3>
        <p>From fee collection and payroll to automated attendance and grading - our AI becomes the central nervous system of your institution.</p>
        <div class="eco-feats">
          <span><i class="fa-solid fa-circle-check"></i> Automated Fees</span>
          <span><i class="fa-solid fa-circle-check"></i> Online Admissions</span>
          <span><i class="fa-solid fa-circle-check"></i> Smart Attendance</span>
          <span><i class="fa-solid fa-circle-check"></i> Exam &amp; Results</span>
          <span><i class="fa-solid fa-circle-check"></i> Staff Payroll</span>
          <span><i class="fa-solid fa-circle-check"></i> Live Transport</span>
          <span><i class="fa-solid fa-circle-check"></i> Parent App</span>
          <span><i class="fa-solid fa-circle-check"></i> Timetable &amp; Diary</span>
        </div>
      </a>
      <a href="websites.php" class="eco-card dark">
        <span class="eco-tag">Reputation</span>
        <h3>Professional Websites</h3>
        <p>Attract more admissions with a high-end website - static or fully dynamic - that showcases your institution's prestige.</p>
        <div class="eco-feats">
          <span><i class="fa-solid fa-circle-check"></i> Static &amp; Dynamic</span>
          <span><i class="fa-solid fa-circle-check"></i> Mobile-Responsive</span>
          <span><i class="fa-solid fa-circle-check"></i> Self-Update CMS</span>
          <span><i class="fa-solid fa-circle-check"></i> SEO Ready</span>
          <span><i class="fa-solid fa-circle-check"></i> Admission Forms</span>
          <span><i class="fa-solid fa-circle-check"></i> News &amp; Gallery</span>
          <span><i class="fa-solid fa-circle-check"></i> Custom Domain</span>
          <span><i class="fa-solid fa-circle-check"></i> Free SSL &amp; Hosting</span>
        </div>
      </a>
    </div>
  </div>
</section>

<?php /* HIDDEN: Pick what you need (Plans section)
<section class="section soft">
  <div class="wrap">
    <div class="head">
      <h2>Pick what you need</h2>
      <p>Start small or go all-in. Pay only for what you use.</p>
    </div>
    <div class="plan-grid">

      <a href="websites.php#static" class="plan">
        <div class="plan-icon"><i class="fa-solid fa-desktop"></i></div>
        <h3>Static Website</h3>
        <p>A ready-made school website we build and manage for you.</p>
        <div class="plan-price">From <strong>Rs. <?php echo $static_regular_price; ?></strong></div>
        <span class="plan-link">View details <i class="fa-solid fa-arrow-right"></i></span>
      </a>

      <a href="websites.php#dynamic" class="plan">
        <div class="plan-icon"><i class="fa-solid fa-bolt"></i></div>
        <h3>Dynamic Website</h3>
        <p>Your own admin panel to update news, events and gallery.</p>
        <div class="plan-price">From <strong>Rs. <?php echo $dynamic_regular_price; ?></strong></div>
        <span class="plan-link">View details <i class="fa-solid fa-arrow-right"></i></span>
      </a>

      <a href="erp.php" class="plan">
        <span class="plan-soon">Coming soon</span>
        <div class="plan-icon"><i class="fa-solid fa-layer-group"></i></div>
        <h3>School ERP</h3>
        <p>Full school management - fees, attendance, exams and more.</p>
        <div class="plan-price">Simple per-student pricing</div>
        <span class="plan-link">Preview <i class="fa-solid fa-arrow-right"></i></span>
      </a>

      <a href="pricing.php" class="plan">
        <div class="plan-icon"><i class="fa-solid fa-indian-rupee-sign"></i></div>
        <h3>ERP Plans &amp; Pricing</h3>
        <p>Transparent Basic, Standard, Premium &amp; Custom plans - with Schoozie AI included.</p>
        <div class="plan-price"><strong>4 plans</strong> &middot; AI included</div>
        <span class="plan-link">See plans <i class="fa-solid fa-arrow-right"></i></span>
      </a>

    </div>
  </div>
</section>

*/ ?>
<!-- HOW IT WORKS -->
<section class="section" id="how">
  <div class="wrap">
    <div class="head">
      <span class="eyebrow">Onboarding</span>
      <h2>Live in three simple steps</h2>
      <p>A guided setup with our team &mdash; no technical effort on your side.</p>
    </div>
    <div class="steps">
      <div class="step">
        <div class="step-ic"><i class="fa-solid fa-comments"></i></div>
        <span class="step-idx">Step 01</span>
        <h3>Share your needs</h3>
        <p>Website, AI ERP or both &mdash; tell us in a quick call.</p>
      </div>
      <div class="step">
        <div class="step-ic"><i class="fa-solid fa-wand-magic-sparkles"></i></div>
        <span class="step-idx">Step 02</span>
        <h3>We set it up</h3>
        <p>We build it, migrate your data and train your staff.</p>
      </div>
      <div class="step">
        <div class="step-ic"><i class="fa-solid fa-rocket"></i></div>
        <span class="step-idx">Step 03</span>
        <h3>Go live</h3>
        <p>Launch with dedicated onboarding and ongoing support.</p>
      </div>
    </div>
  </div>
</section>

<!-- FINAL CTA -->
<section class="cta">
  <div class="wrap cta-inner">
    <img src="assets/svg/schoozie-wordmark.svg?v=<?php echo @filemtime('assets/svg/schoozie-wordmark.svg'); ?>" class="cta-logo" alt="Schoozie">
    <h2>Ready to modernize your institution?</h2>
    <p>Join forward-thinking principals who choose simplicity over complexity. Transparent pricing, guided onboarding and dedicated support at every step.</p>
    <a class="btn" href="https://wa.me/<?php echo $contact_whatsapp; ?>?text=Hi%2C+I%27d+like+a+free+demo+of+Schoozie." target="_blank" rel="noopener">
      Connect With Us
    </a>
  </div>
</section>

<!-- live-ticking Living Digital Twin stats -->
<script>
(function(){
  var nums = document.querySelectorAll('.tnum');
  if(!nums.length || !('IntersectionObserver' in window)) return;
  var reduce = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  function fmt(v, dec, suf){ return (dec ? v.toFixed(1) : Math.round(v).toLocaleString('en-IN')) + suf; }
  function cur(el){ return parseFloat((el.textContent||'0').replace(/,/g,'').replace('%','')) || 0; }
  function tween(el, from, to, dur, dec, suf, cb){
    var start=null;
    function step(ts){ if(!start) start=ts; var p=Math.min((ts-start)/dur,1); var e=1-Math.pow(1-p,3);
      el.textContent = fmt(from+(to-from)*e, dec, suf);
      if(p<1) requestAnimationFrame(step); else { el.textContent = fmt(to, dec, suf); if(cb) cb(); } }
    requestAnimationFrame(step);
  }
  function live(el, base, dec, suf){
    if(reduce || base === 0) return;
    var running = base;
    setInterval(function(){
      var next;
      if(suf === '%'){ next = Math.max(90, Math.min(99.9, base + (Math.random()*0.6 - 0.3))); }
      else if(base >= 1000){ running = Math.min(base + 60, running + Math.floor(Math.random()*3) + 1); next = running; }
      else { next = Math.max(0, base + (Math.floor(Math.random()*3) - 1)); }
      tween(el, cur(el), next, 700, dec, suf);
    }, 2400 + Math.random()*1600);
  }
  function run(el){
    var raw = el.getAttribute('data-val') || el.textContent; el.setAttribute('data-val', raw);
    var suf = /%$/.test(raw) ? '%' : '';
    var dec = /\./.test(raw);
    var target = parseFloat(raw.replace(/,/g,'').replace('%',''));
    if(!isFinite(target)) return;
    if(reduce){ el.textContent = fmt(target, dec, suf); return; }
    tween(el, 0, target, 1500, dec, suf, function(){ live(el, target, dec, suf); });
  }
  var io = new IntersectionObserver(function(es){ es.forEach(function(en){ if(en.isIntersecting){ run(en.target); io.unobserve(en.target); } }); }, {threshold:0.5});
  nums.forEach(function(n){ io.observe(n); });
})();
</script>

<!-- live attendance sync (teacher -> parent) -->
<script>
(function(){
  var live = document.getElementById('twin-live'); if(!live) return;
  var rows    = Array.prototype.slice.call(live.querySelectorAll('#tl-roster .tl-row'));
  var aIdx    = rows.indexOf(live.querySelector('.is-aarav'));
  var present = document.getElementById('tl-present');
  var flow    = document.getElementById('tl-flow-dot');
  var notif   = document.getElementById('tl-notif');
  var nIc     = document.getElementById('tl-notif-i');
  var nB      = document.getElementById('tl-notif-b');
  var nS      = document.getElementById('tl-notif-s');
  var att     = document.getElementById('tl-att');
  var ring    = document.getElementById('tl-ring');
  var reduce  = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  var min = 4, timers = [];
  function setRing(p){ if(att) att.textContent = p + '%'; if(ring) ring.style.background = 'conic-gradient(#4B5D3F 0 ' + p + '%, #e6e2d6 ' + p + '% 100%)'; }
  function setPending(){
    notif.classList.add('tl-pending'); notif.classList.remove('pop');
    if(nIc) nIc.className = 'fa-solid fa-hourglass-half';
    if(nB) nB.textContent = 'Attendance not marked yet';
    if(nS) nS.innerHTML = 'Waiting for today&rsquo;s update&hellip;';
    setRing(93);
  }
  function setMarked(){
    notif.classList.remove('tl-pending'); notif.classList.remove('pop'); void notif.offsetWidth; notif.classList.add('pop');
    if(nIc) nIc.className = 'fa-solid fa-check';
    if(nB) nB.textContent = 'Aarav marked present';
    min++; if(min > 59) min = 4;
    if(nS) nS.textContent = 'Class 5-A · 9:' + (min < 10 ? '0' + min : min) + ' AM';
    setRing(94);
  }
  function cycle(){
    timers.forEach(clearTimeout); timers = [];
    rows.forEach(function(r){ r.classList.remove('on','flash'); });
    setPending();
    if(present) present.textContent = '25';
    rows.forEach(function(r, k){
      timers.push(setTimeout(function(){
        r.classList.add('on');
        if(present) present.textContent = String(26 + k);
        if(k === aIdx){                         // teacher reaches Aarav
          r.classList.add('flash');
          if(flow){ flow.classList.remove('go'); void flow.offsetWidth; flow.classList.add('go'); }
          timers.push(setTimeout(setMarked, 850));   // ...lands on his parent's screen
        }
      }, 720 * (k + 1)));
    });
  }
  if(reduce){ rows.forEach(function(r){ r.classList.add('on'); }); if(present) present.textContent = '30'; setMarked(); return; }
  var started = false;
  function start(){ if(started) return; started = true; cycle(); setInterval(cycle, 6400); }
  if('IntersectionObserver' in window){
    var io = new IntersectionObserver(function(es){ es.forEach(function(e){ if(e.isIntersecting){ start(); io.unobserve(e.target); } }); }, {threshold:0.25});
    io.observe(live);
  } else { start(); }
})();
</script>

<!-- scroll reveal -->
<script>
(function(){
  if(window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches) return;
  if(!('IntersectionObserver' in window)) return;
  var sel = '.head, .era, .story-step, .eco-card, .step, .twin-card, .ask-answer, .cta-inner';
  var els = document.querySelectorAll(sel);
  els.forEach(function(el){ el.classList.add('reveal'); });
  var io = new IntersectionObserver(function(es){
    es.forEach(function(en){ if(en.isIntersecting){ en.target.classList.add('in'); io.unobserve(en.target); } });
  }, {threshold:0.15, rootMargin:'0px 0px -8% 0px'});
  els.forEach(function(el){ io.observe(el); });
})();
</script>

<?php include '_footer.php'; ?>

<!-- hero image 3D tilt on hover -->
<script>
(function(){
  var v = document.querySelector('.hero-visual');
  if(!v) return;
  if(window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches) return;
  if(window.matchMedia && window.matchMedia('(hover: none)').matches) return; /* skip on touch */
  v.addEventListener('mousemove', function(e){
    var r = v.getBoundingClientRect();
    var px = (e.clientX - r.left) / r.width - 0.5;
    var py = (e.clientY - r.top) / r.height - 0.5;
    v.style.transform = 'rotateX(' + (-py * 5).toFixed(2) + 'deg) rotateY(' + (px * 7).toFixed(2) + 'deg) translateY(-6px) scale(1.06)';
    v.style.setProperty('--mx', (px + 0.5) * 100 + '%');
    v.style.setProperty('--my', (py + 0.5) * 100 + '%');
  });
  v.addEventListener('mouseleave', function(){ v.style.transform = ''; });
})();
</script>

<!-- JSON-LD STRUCTURED DATA -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "LocalBusiness",
      "name": "Schoozie",
      "description": "Schoozie provides professional school websites, dynamic CMS platforms, and ERP software for schools across India.",
      "url": "https://schoozie.com",
      "logo": "https://schoozie.com/assets/icons/web/icon-512.png",
      "telephone": "+<?php echo $contact_whatsapp; ?>",
      "email": "<?php echo $contact_email; ?>",
      "address": {
        "@type": "PostalAddress",
        "addressLocality": "<?php echo $contact_city; ?>",
        "addressRegion": "<?php echo $contact_region; ?>",
        "addressCountry": "IN"
      },
      "sameAs": [],
      "areaServed": "IN",
      "priceRange": "₹₹"
    },
    {
      "@type": "SoftwareApplication",
      "name": "Schoozie School ERP",
      "applicationCategory": "EducationalApplication",
      "operatingSystem": "Web",
      "description": "Cloud-based school ERP software for student management, fee tracking, timetable, attendance, and more.",
      "url": "https://schoozie.com/erp.php"
    }
  ]
}
</script>

</body>
</html>
