<?php require_once 'config.php';
$plan = [
  'name'           => 'School ERP Portal',
  'badge'          => $offer_active
                        ? '<i class="fa-solid fa-tag"></i> '.$offer_month.' Special Offer'
                        : '<i class="fa-solid fa-star"></i> Most Popular',
  'badge_bg'       => $offer_active ? 'rgba(0,240,255,0.12)' : 'rgba(0,240,255,0.1)',
  'badge_color'    => '#00f0ff',
  'badge_border'   => $offer_active ? 'rgba(0,240,255,0.45)' : 'rgba(0,240,255,0.3)',
  'title_gradient' => 'linear-gradient(90deg,#00f0ff,#0077ff)',
  'accent'         => '#00f0ff',
  'description'    => 'A complete cloud-based school management system — students, fees, attendance, exams, library, transport, payroll and more. Three flexible plans. Pay only for the students you have.',
  'price_display'  => 'From Rs. '.$erp_per_student,
  'price_period'   => 'per student / per month &nbsp;·&nbsp; 3 tiers: Basic Rs.'.$erp_per_student.' &middot; Standard Rs.'.$erp_standard_per_student.' &middot; Complete Rs.'.$erp_complete_per_student,
  'price_old'      => $offer_active ? 'One-time ERP setup regular: Rs. '.$erp_regular_setup : '',
  'price_save'     => $offer_active ? $offer_month.' offer: Setup Rs. '.$erp_offer_setup.' — Save Rs. '.$erp_setup_saving : '',
  'domain_note'    => '',
  'btn_bg'         => 'linear-gradient(90deg,#00b4d8,#0077b6)',
  'btn_text'       => 'Contact Us',
  'tab_color'      => 'cyan',

  /* ── FEATURES STRIP ── */
  'features' => [
    ['<i class="fa-solid fa-graduation-cap" style="color:#a855f7"></i>','Student Management'],
    ['<i class="fa-solid fa-money-bill-wave" style="color:#10b981"></i>','Fee Collection &amp; Part Payment'],
    ['<i class="fa-solid fa-clipboard-list" style="color:#f59e0b"></i>','Admission / Cancel / Transfer'],
    ['<i class="fa-solid fa-people-roof" style="color:#ec4899"></i>','Parent Portal'],
    ['<i class="fa-solid fa-chalkboard-user" style="color:#00b7ff"></i>','Teacher Management'],
    ['<i class="fa-solid fa-clipboard-check" style="color:#10b981"></i>','Attendance System'],
    ['<i class="fa-solid fa-file-lines" style="color:#f59e0b"></i>','Exam & Report Cards'],
    ['<i class="fa-solid fa-book-open" style="color:#a855f7"></i>','Library Management'],
    ['<i class="fa-solid fa-bus" style="color:#3b82f6"></i>','Transport Management'],
    ['<i class="fa-solid fa-users" style="color:#ec4899"></i>','Staff Management &amp; Payroll'],
    ['<i class="fa-solid fa-bell" style="color:#f97316"></i>','In-Panel Notifications'],
    ['<i class="fa-solid fa-chart-bar" style="color:#06b6d4"></i>','Admin Dashboard'],
    ['<i class="fa-solid fa-calendar-days" style="color:#f59e0b"></i>','Timetable Management'],
    ['<i class="fa-solid fa-book-bookmark" style="color:#a855f7"></i>','Homework & Assignments'],
    ['<i class="fa-solid fa-newspaper" style="color:#06b6d4"></i>','Notice Board & Circulars'],
    ['<i class="fa-solid fa-id-card" style="color:#10b981"></i>','ID Cards &amp; Certificates'],
    ['<i class="fa-solid fa-user-clock" style="color:#ec4899"></i>','Staff Attendance & Leave'],
    ['<i class="fa-solid fa-house-chimney-user" style="color:#3b82f6"></i>','Hostel Management'],
    ['<i class="fa-solid fa-arrow-trend-up" style="color:#10b981"></i>','Income & Expense Tracking'],
    ['<i class="fa-solid fa-magnifying-glass-chart" style="color:#fbbf24"></i>','Advanced Analytics'],
  ],

  /* ── THREE SUBSCRIPTION TIERS ── */
  'sub_plans' => [
    [
      'name'    => 'Basic',
      'emoji'   => '<i class="fa-solid fa-seedling"></i>',
      'price'   => $erp_per_student,
      'tagline' => 'Perfect for small schools just getting started.',
      'color'   => '#a855f7',
      'btn_bg'  => 'linear-gradient(135deg,#a855f7,#7c3aed)',
      'popular' => false,
      'features' => [
        ['yes', 'Student Registration & Profiles'],
        ['yes', 'Admission, Cancel & Transfer'],
        ['yes', 'Fee Collection (Online & Offline)'],
        ['yes', 'Part Payment Support'],
        ['yes', 'Fee Receipts & History'],
        ['yes', 'Admin Dashboard'],
        ['no', 'Attendance System'],
        ['no', 'Parent Portal'],
        ['no', 'Report Cards & Results'],
        ['no', 'Teacher Management'],
        ['no', 'Exam & Marks Management'],
        ['no', 'In-Panel Notifications'],
        ['no', 'Library Management'],
        ['no', 'Transport Management'],
        ['no', 'Other Staff Management'],
        ['no', 'Payroll System'],
        ['no', 'Advanced Analytics'],
        ['no', 'Priority Support'],
      ],
    ],
    [
      'name'    => 'Standard',
      'emoji'   => '<i class="fa-solid fa-bolt"></i>',
      'price'   => $erp_standard_per_student,
      'tagline' => 'Full academic management for growing schools.',
      'color'   => '#00f0ff',
      'btn_bg'  => 'linear-gradient(135deg,#00f0ff,#0077ff)',
      'popular' => true,
      'features' => [
        ['yes', 'Student Registration & Profiles'],
        ['yes', 'Admission, Cancel & Transfer'],
        ['yes', 'Fee Collection (Online & Offline)'],
        ['yes', 'Part Payment Support'],
        ['yes', 'Fee Receipts & History'],
        ['yes', 'Admin Dashboard'],
        ['yes', 'Attendance System'],
        ['yes', 'Parent Portal'],
        ['yes', 'Report Cards & Results'],
        ['yes', 'Teacher Management'],
        ['yes', 'Exam & Marks Management'],
        ['yes', 'In-Panel Notifications'],
        ['no', 'Library Management'],
        ['no', 'Transport Management'],
        ['no', 'Other Staff Management'],
        ['no', 'Payroll System'],
        ['no', 'Advanced Analytics'],
        ['no', 'Priority Support'],
      ],
    ],
    [
      'name'    => 'Complete',
      'emoji'   => '<i class="fa-solid fa-rocket"></i>',
      'price'   => $erp_complete_per_student,
      'tagline' => 'Every feature your school could ever need.',
      'color'   => '#ffd200',
      'btn_bg'  => 'linear-gradient(135deg,#ffd200,#ff8c00)',
      'popular' => false,
      'features' => [
        ['yes', 'Student Registration & Profiles'],
        ['yes', 'Admission, Cancel & Transfer'],
        ['yes', 'Fee Collection (Online & Offline)'],
        ['yes', 'Part Payment Support'],
        ['yes', 'Fee Receipts & History'],
        ['yes', 'Admin Dashboard'],
        ['yes', 'Attendance System'],
        ['yes', 'Parent Portal'],
        ['yes', 'Report Cards & Results'],
        ['yes', 'Teacher Management'],
        ['yes', 'Exam & Marks Management'],
        ['yes', 'In-Panel Notifications'],
        ['yes', 'Library Management'],
        ['yes', 'Transport Management'],
        ['yes', 'Other Staff Management'],
        ['yes', 'Payroll System'],
        ['yes', 'Advanced Analytics'],
        ['yes', 'Priority Support'],
      ],
    ],
  ],

  /* ── TERMS & CONDITIONS ── */
  'tc' => [

    /* ====== ENGLISH ====== */
    'en' => [
      ['title'=>'Service Overview','text'=>'Run your entire school from one place — students, fees, attendance, exams, staff, and more. Schoozie ERP is built for Indian schools of every size, from small madrasas to large institutions. No fixed contracts, no hidden charges. Pay only per active student, per month, and scale as your school grows. Three tiers available — Basic, Standard, and Complete — so you only pay for what you actually need.'],

      ['title'=>'Subscription Plans & Pricing','points'=>[
        '<strong>Basic — Rs. '.$erp_per_student.'/student/month:</strong> Student management, fee collection (online & offline), part payment, admission/cancel/transfer, admin dashboard.',
        '<strong>Standard — Rs. '.$erp_standard_per_student.'/student/month:</strong> Everything in Basic + attendance system, parent portal, report cards & results, teacher management, exam management, portal notifications.',
        '<strong>Complete — Rs. '.$erp_complete_per_student.'/student/month:</strong> Everything in Standard + library management, transport management, other staff management, payroll system, advanced analytics, priority support, and all future features.',
        'Plans can be upgraded at any time.',
        'Example (Standard): 100 students = Rs. 2,000/month | 300 students = Rs. 6,000/month.',
      ]],

      ['title'=>'One-Time Setup Fee','points'=>[
        'A one-time installation and onboarding fee applies to all plans.',
        $offer_active
          ? '<strong>Offer Price: Rs. '.$erp_offer_setup.'</strong> (regular: Rs. '.$erp_regular_setup.') — Save Rs. '.$erp_setup_saving.' this '.$offer_month.'.'
          : '<strong>Setup Fee: Rs. '.$erp_regular_setup.'</strong> (one-time).',
        'Setup fee covers system configuration, data migration assistance, and initial training.',
        'Setup fee is separate from the monthly subscription charge.',
        'Setup fee is non-refundable once work has begun.',
        $offer_active ? 'Offer valid only for payments made during '.$offer_month.'. Price locks in for life once paid.' : '',
      ]],

      ['title'=>'Fee Module — Details','points'=>[
        'Supports online payments (UPI, bank transfer) and offline cash/cheque recording.',
        'Part payment feature allows students to pay fees in multiple installments.',
        'Automated fee reminders via in-panel notifications.',
        'Fee receipts generated automatically for every payment.',
        'Overdue tracking with pending balance reports.',
      ]],

      ['title'=>'Admission, Cancel & Transfer','points'=>[
        'New student admission form with document upload support.',
        'TC (Transfer Certificate) generation with one click.',
        'Admission cancellation with refund tracking.',
        'Student transfer between classes/sections handled smoothly.',
        'Full admission history maintained for every student.',
      ]],

      ['title'=>'Attendance System','points'=>[
        'Mark daily attendance class-wise or student-wise from the admin panel.',
        'Late arrivals and early departures tracked separately.',
        'Monthly and annual attendance reports available instantly.',
        'Absent students flagged automatically for follow-up.',
      ]],

      ['title'=>'Exam & Report Cards','points'=>[
        'Create and manage exam schedules and mark sheets from the panel.',
        'Marks entered by teachers — grades and rankings calculated automatically.',
        'Printable report cards generated with one click.',
        'Full exam history and results stored per student.',
      ]],

      ['title'=>'Timetable Management','points'=>[
        'Create and publish class timetables directly from the admin panel.',
        'Assign subjects and teachers to time slots with ease.',
        'Timetable visible to teachers and students through their respective portals.',
        'Update and republish timetables anytime — changes reflect instantly.',
      ]],

      ['title'=>'Staff Management & Payroll','points'=>[
        'Maintain complete profiles for all teaching and non-teaching staff.',
        'Track staff attendance and manage leave requests.',
        'Generate monthly salary slips and payroll summaries.',
        'Salary disbursement records maintained for every staff member.',
      ]],

      ['title'=>'Parent Portal','points'=>[
        'Parents get their own login to track their child\'s progress.',
        'View attendance, exam results, fee status, and school notices.',
        'Receive in-panel notifications for important updates.',
        'Access available on any device — phone, tablet, or computer.',
      ]],

      ['title'=>'Library Management','points'=>[
        'Manage book inventory with issue and return records.',
        'Track overdue books and auto-calculate fines.',
        'Search books by title, author, or subject.',
        'Borrowing history maintained per student.',
      ]],

      ['title'=>'Transport Management','points'=>[
        'Manage routes, vehicles, and student assignments.',
        'Transport fees tracked and billed separately from tuition.',
        'Driver and vehicle details maintained per route.',
        'View which students are assigned to each route.',
      ]],

      ['title'=>'What Is NOT Included','points'=>[
        'School website (available as a separate Static or Dynamic plan).',
        'Biometric hardware (client must arrange own hardware).',
        'Third-party payment gateway integration (unless agreed separately).',
      ]],

      ['title'=>'Data Privacy & Security','points'=>[
        'All school and student data is stored on encrypted servers.',
        'Schoozie will never share or sell client data to third parties.',
        'Regular automated backups are performed daily.',
        'In the event of a data breach, affected clients are notified immediately.',
        'On service termination, the client may request a full data export before deletion.',
      ]],

      ['title'=>'Service Availability','text'=>'Schoozie ERP targets 99% uptime. Scheduled maintenance is communicated at least 24 hours in advance. Schoozie is not liable for disruptions caused by internet outages, third-party services, or force majeure events.'],

      ['title'=>'Subscription & Cancellation','points'=>[
        'Subscriptions are monthly and auto-renew unless cancelled.',
        'Cancellation must be requested at least 7 days before the next billing date.',
        'No refund for partial months already billed.',
        'On cancellation, school data is retained for 30 days before permanent deletion.',
        'Access may be suspended if payment is overdue by more than 7 days.',
      ]],

      ['title'=>'Support Policy','points'=>[
        'Support available via call or email (Mon–Sat, 10am–5pm IST).',
        'Response within 24 hours on working days.',
        'Critical issues addressed within 4–8 hours.',
        'Complete plan clients get priority support.',
        'Onboarding guidance and initial setup support included for all plans.',
      ]],

      ['title'=>'Governing Terms','text'=>'These terms are governed under Indian law. Any dispute will first be addressed through mutual discussion. Schoozie reserves the right to update these terms at any time with 30 days prior notice via email or phone.'],
    ],

    /* ====== URDU ====== */
    'ur' => [
      ['title'=>'خدمت کا جائزہ','text'=>'اپنے پورے اسکول کو ایک جگہ سے چلائیں — طلبا، فیس، حاضری، امتحانات، اسٹاف، اور بہت کچھ۔ اسکوزی ERP چھوٹے مدارس سے لے کر بڑے اداروں تک ہر سائز کے ہندوستانی اسکولوں کے لیے بنایا گیا ہے۔ کوئی مقررہ معاہدہ نہیں، کوئی پوشیدہ چارج نہیں۔ صرف فعال طلبا کے حساب سے ماہانہ ادائیگی کریں اور اپنے اسکول کی ترقی کے ساتھ بڑھتے جائیں۔ تین پلانز دستیاب ہیں — بیسک، اسٹینڈرڈ، اور کمپلیٹ — تاکہ آپ صرف وہی ادا کریں جو آپ کو واقعی چاہیے۔'],

      ['title'=>'سبسکرپشن پلانز اور قیمت','points'=>[
        '<strong>بیسک — '.str_replace(',','،',$erp_per_student).' روپے/طالب علم/ماہ:</strong> طلبا مینجمنٹ، فیس کلیکشن (آن لائن و آف لائن)، قسطوں میں ادائیگی، داخلہ/منسوخی/منتقلی، ایڈمن ڈیش بورڈ۔',
        '<strong>اسٹینڈرڈ — '.str_replace(',','،',$erp_standard_per_student).' روپے/طالب علم/ماہ:</strong> بیسک کی تمام سہولیات + حاضری سسٹم، والدین پورٹل، رپورٹ کارڈ، اساتذہ مینجمنٹ، امتحان مینجمنٹ، ان پینل اطلاعات۔',
        '<strong>کمپلیٹ — '.str_replace(',','،',$erp_complete_per_student).' روپے/طالب علم/ماہ:</strong> اسٹینڈرڈ کی تمام سہولیات + لائبریری مینجمنٹ، ٹرانسپورٹ مینجمنٹ، دیگر اسٹاف مینجمنٹ، تنخواہ سسٹم، جدید تجزیات، پرائیوریٹی سپورٹ، اور تمام مستقبل کی خصوصیات۔',
        'پلان کو کسی بھی وقت اپ گریڈ کیا جا سکتا ہے۔',
        'مثال (اسٹینڈرڈ): ۱۰۰ طلبا = ۲،۰۰۰ روپے/ماہ | ۳۰۰ طلبا = ۶،۰۰۰ روپے/ماہ۔',
      ]],

      ['title'=>'یکمشت سیٹ اپ فیس','points'=>[
        'تمام پلانز پر یکمشت انسٹالیشن اور آن بورڈنگ فیس لاگو ہوتی ہے۔',
        $offer_active
          ? '<strong>آفر قیمت: '.str_replace(',','،',$erp_offer_setup).' روپے</strong> (باقاعدہ: '.str_replace(',','،',$erp_regular_setup).' روپے) — اس '.$offer_month.' میں '.str_replace(',','،',$erp_setup_saving).' روپے کی بچت۔'
          : '<strong>سیٹ اپ فیس: '.str_replace(',','،',$erp_regular_setup).' روپے</strong> (یکمشت)۔',
        'سیٹ اپ فیس میں سسٹم کنفیگریشن، ڈیٹا مائیگریشن اور ابتدائی تربیت شامل ہے۔',
        'سیٹ اپ فیس ماہانہ سبسکرپشن سے الگ ہے۔',
        'کام شروع ہونے کے بعد سیٹ اپ فیس واپس نہیں کی جائے گی۔',
        $offer_active ? 'آفر صرف '.$offer_month.' میں کی گئی ادائیگیوں کے لیے ہے۔ ایک بار ادائیگی کے بعد قیمت ہمیشہ کے لیے لاک ہو جاتی ہے۔' : '',
      ]],

      ['title'=>'فیس ماڈیول — تفصیلات','points'=>[
        'آن لائن ادائیگی (UPI، بینک ٹرانسفر) اور آف لائن نقد/چیک ریکارڈنگ سپورٹ۔',
        'قسطوں میں فیس ادائیگی کی سہولت۔',
        'SMS اور والدین پورٹل کے ذریعے خودکار فیس یاددہانیاں۔',
        'ہر ادائیگی پر خودبخود رسید تیار ہوتی ہے۔',
        'واجب الادا رقم کی رپورٹس۔',
      ]],

      ['title'=>'داخلہ، منسوخی اور منتقلی','points'=>[
        'دستاویز اپ لوڈ کے ساتھ نئے طالب علم کا داخلہ فارم۔',
        'ایک کلک میں TC (ٹرانسفر سرٹیفکیٹ) تیار۔',
        'واپسی ٹریکنگ کے ساتھ داخلہ منسوخی۔',
        'طلبا کی کلاس/سیکشن کے درمیان منتقلی۔',
        'ہر طالب علم کی مکمل داخلہ تاریخ محفوظ۔',
      ]],

      ['title'=>'حاضری سسٹم','points'=>[
        'ایڈمن پینل سے کلاس یا طالب علم کے حساب سے روزانہ حاضری لگائیں۔',
        'دیر سے آنے اور جلدی جانے کا الگ ریکارڈ۔',
        'ماہانہ اور سالانہ حاضری رپورٹس فوری دستیاب۔',
        'غیر حاضر طلبا خودبخود نشان زد ہو جاتے ہیں۔',
      ]],

      ['title'=>'امتحان اور رپورٹ کارڈ','points'=>[
        'پینل سے امتحان کا شیڈول اور مارک شیٹ بنائیں اور منظم کریں۔',
        'اساتذہ نمبر داخل کریں — گریڈ اور ترتیب خودبخود حسب ضرورت۔',
        'ایک کلک میں پرنٹ کے قابل رپورٹ کارڈ تیار۔',
        'ہر طالب علم کی مکمل امتحانی تاریخ محفوظ۔',
      ]],

      ['title'=>'ٹائم ٹیبل مینجمنٹ','points'=>[
        'ایڈمن پینل سے کلاس ٹائم ٹیبل بنائیں اور شائع کریں۔',
        'مضامین اور اساتذہ کو ٹائم سلاٹس میں آسانی سے تفویض کریں۔',
        'اساتذہ اور طلبا اپنے پورٹل کے ذریعے ٹائم ٹیبل دیکھ سکتے ہیں۔',
        'ٹائم ٹیبل کسی بھی وقت اپڈیٹ کریں — تبدیلیاں فوری نظر آتی ہیں۔',
      ]],

      ['title'=>'اسٹاف مینجمنٹ اور پے رول','points'=>[
        'تمام تدریسی اور غیر تدریسی اسٹاف کے مکمل پروفائل محفوظ کریں۔',
        'اسٹاف کی حاضری ٹریک کریں اور چھٹی کی درخواستیں منظم کریں۔',
        'ماہانہ تنخواہ سلپ اور پے رول خلاصہ تیار کریں۔',
        'ہر اسٹاف ممبر کا تنخواہ ریکارڈ محفوظ رہتا ہے۔',
      ]],

      ['title'=>'والدین پورٹل','points'=>[
        'والدین کو اپنے بچے کی پیشرفت دیکھنے کے لیے الگ لاگ ان ملتا ہے۔',
        'حاضری، امتحانی نتائج، فیس کی صورتحال اور اسکول کے نوٹسز دیکھیں۔',
        'اہم اپڈیٹس کے لیے ان پینل اطلاعات ملتی ہیں۔',
        'کسی بھی ڈیوائس پر رسائی — فون، ٹیبلیٹ یا کمپیوٹر۔',
      ]],

      ['title'=>'لائبریری مینجمنٹ','points'=>[
        'کتابوں کی انوینٹری اور اجراء و واپسی کا ریکارڈ۔',
        'زیادہ مدت تک رکھی گئی کتابوں پر خودبخود جرمانہ حساب۔',
        'عنوان، مصنف یا موضوع سے کتاب تلاش کریں۔',
        'ہر طالب علم کی کتاب لینے کی تاریخ محفوظ۔',
      ]],

      ['title'=>'ٹرانسپورٹ مینجمنٹ','points'=>[
        'روٹ، گاڑیاں اور طلبا کی تفویض منظم کریں۔',
        'ٹرانسپورٹ فیس ٹیوشن سے الگ ٹریک اور بل کی جائے۔',
        'ہر روٹ کے ڈرائیور اور گاڑی کی تفصیلات محفوظ۔',
        'دیکھیں کہ کون سے طلبا کس روٹ پر ہیں۔',
      ]],

      ['title'=>'کیا شامل نہیں ہے','points'=>[
        'اسکول ویب سائٹ (الگ پلان کے طور پر دستیاب)۔',
        'بائیو میٹرک ہارڈ ویئر (کلائنٹ خود انتظام کرے)۔',
        'الگ معاہدے کے بغیر تھرڈ پارٹی پیمنٹ گیٹ وے۔',
      ]],

      ['title'=>'ڈیٹا پرائیویسی اور سیکیورٹی','points'=>[
        'تمام ڈیٹا خفیہ کردہ سرورز پر محفوظ ہے۔',
        'اسکوزی کلائنٹ ڈیٹا کبھی بھی تیسرے فریق کو نہیں دے گا۔',
        'روزانہ خودکار بیک اپ۔',
        'ڈیٹا خلاف ورزی پر فوری اطلاع۔',
        'سروس ختم ہونے پر ڈیٹا ایکسپورٹ کی سہولت۔',
      ]],

      ['title'=>'سبسکرپشن اور منسوخی','points'=>[
        'سبسکرپشن ماہانہ ہے اور خودبخود تجدید ہوتی ہے۔',
        'اگلی بلنگ تاریخ سے کم از کم ۷ دن پہلے منسوخی درخواست ضروری ہے۔',
        'بل ہو چکے جزوی مہینوں کی واپسی نہیں ہوگی۔',
        'منسوخی پر ڈیٹا ۳۰ دن تک محفوظ رہے گا۔',
        'ادائیگی ۷ دن سے زیادہ تاخیر پر رسائی معطل ہو سکتی ہے۔',
      ]],

      ['title'=>'سپورٹ پالیسی','points'=>[
        'سپورٹ کال یا ای میل کے ذریعے (پیر تا ہفتہ، صبح ۱۰ تا شام ۵ IST) دستیاب ہے۔',
        'جواب کا وقت ۲۴ گھنٹوں کے اندر۔',
        'اہم مسائل ۴ سے ۸ گھنٹوں میں حل۔',
        'کمپلیٹ پلان کے گاہکوں کو پرائیوریٹی سپورٹ ملتی ہے۔',
        'تمام پلانز میں آن بورڈنگ رہنمائی شامل ہے۔',
      ]],

      ['title'=>'حاکم شرائط','text'=>'یہ شرائط بھارتی قانون کے تحت ہیں۔ کسی بھی تنازع کو پہلے باہمی گفتگو سے حل کیا جائے گا۔ اسکوزی ۳۰ دن کی پیشگی اطلاع کے ساتھ ان شرائط کو کسی بھی وقت اپ ڈیٹ کرنے کا حق رکھتا ہے۔'],
    ],

    /* ====== HINDI ====== */
    'hi' => [
      ['title'=>'सेवा का अवलोकन','text'=>'अपने पूरे स्कूल को एक जगह से चलाएं — छात्र, शुल्क, उपस्थिति, परीक्षाएं, स्टाफ, और बहुत कुछ। Schoozie ERP छोटे मदरसों से लेकर बड़े संस्थानों तक, हर आकार के भारतीय स्कूलों के लिए बनाया गया है। कोई निश्चित अनुबंध नहीं, कोई छुपा शुल्क नहीं। केवल सक्रिय छात्रों के अनुसार मासिक भुगतान करें और अपने स्कूल की वृद्धि के साथ आगे बढ़ें। तीन योजनाएं उपलब्ध हैं — बेसिक, स्टैंडर्ड और कम्पलीट — ताकि आप केवल वही भुगतान करें जो आपको वास्तव में चाहिए।'],

      ['title'=>'सदस्यता योजनाएं और मूल्य निर्धारण','points'=>[
        '<strong>बेसिक — Rs. '.$erp_per_student.'/छात्र/माह:</strong> छात्र प्रबंधन, शुल्क संग्रह (ऑनलाइन व ऑफलाइन), किस्त भुगतान, प्रवेश/रद्दीकरण/स्थानांतरण, एडमिन डैशबोर्ड।',
        '<strong>स्टैंडर्ड — Rs. '.$erp_standard_per_student.'/छात्र/माह:</strong> बेसिक की सभी सुविधाएं + उपस्थिति प्रणाली, अभिभावक पोर्टल, रिपोर्ट कार्ड, शिक्षक प्रबंधन, परीक्षा प्रबंधन, इन-पैनल सूचनाएं।',
        '<strong>कम्पलीट — Rs. '.$erp_complete_per_student.'/छात्र/माह:</strong> स्टैंडर्ड की सभी सुविधाएं + पुस्तकालय प्रबंधन, परिवहन प्रबंधन, अन्य स्टाफ प्रबंधन, वेतन प्रणाली, उन्नत विश्लेषण, प्राथमिकता सहायता और सभी भविष्य की सुविधाएं।',
        'किसी भी समय प्लान अपग्रेड किया जा सकता है।',
        'उदाहरण (स्टैंडर्ड): 100 छात्र = Rs. 2,000/माह | 300 छात्र = Rs. 6,000/माह।',
      ]],

      ['title'=>'एकमुश्त सेटअप शुल्क','points'=>[
        'सभी प्लानों पर एकमुश्त इंस्टॉलेशन और ऑनबोर्डिंग शुल्क लागू होता है।',
        $offer_active
          ? '<strong>ऑफर मूल्य: Rs. '.$erp_offer_setup.'</strong> (नियमित: Rs. '.$erp_regular_setup.') — इस '.$offer_month.' में Rs. '.$erp_setup_saving.' की बचत।'
          : '<strong>सेटअप शुल्क: Rs. '.$erp_regular_setup.'</strong> (एकमुश्त)।',
        'सेटअप शुल्क में सिस्टम कॉन्फ़िगरेशन, डेटा माइग्रेशन सहायता और प्रारंभिक प्रशिक्षण शामिल है।',
        'सेटअप शुल्क मासिक सदस्यता से अलग है।',
        'काम शुरू होने के बाद सेटअप शुल्क वापस नहीं होगा।',
        $offer_active ? 'ऑफर केवल '.$offer_month.' में किए गए भुगतान के लिए मान्य है। एक बार भुगतान होने पर कीमत जीवन भर के लिए लॉक हो जाती है।' : '',
      ]],

      ['title'=>'शुल्क मॉड्यूल — विवरण','points'=>[
        'ऑनलाइन (UPI, बैंक ट्रांसफर) और ऑफलाइन नकद/चेक रिकॉर्डिंग समर्थन।',
        'छात्र कई किस्तों में शुल्क जमा कर सकते हैं।',
        'SMS और अभिभावक पोर्टल के माध्यम से स्वचालित शुल्क अनुस्मारक।',
        'प्रत्येक भुगतान पर स्वचालित रसीद तैयार होती है।',
        'बकाया राशि की रिपोर्ट।',
      ]],

      ['title'=>'प्रवेश, रद्दीकरण और स्थानांतरण','points'=>[
        'दस्तावेज़ अपलोड के साथ नए छात्र का प्रवेश फ़ॉर्म।',
        'एक क्लिक में TC (स्थानांतरण प्रमाण पत्र) तैयार।',
        'वापसी ट्रैकिंग के साथ प्रवेश रद्दीकरण।',
        'कक्षाओं/वर्गों के बीच छात्र स्थानांतरण।',
        'प्रत्येक छात्र का पूरा प्रवेश इतिहास सुरक्षित।',
      ]],

      ['title'=>'उपस्थिति प्रणाली','points'=>[
        'एडमिन पैनल से कक्षा या छात्र के अनुसार दैनिक उपस्थिति दर्ज करें।',
        'देरी से आने और जल्दी जाने का अलग रिकॉर्ड।',
        'मासिक और वार्षिक उपस्थिति रिपोर्ट तुरंत उपलब्ध।',
        'अनुपस्थित छात्र स्वचालित रूप से चिह्नित होते हैं।',
      ]],

      ['title'=>'परीक्षा और रिपोर्ट कार्ड','points'=>[
        'पैनल से परीक्षा शेड्यूल और मार्क शीट बनाएं और प्रबंधित करें।',
        'शिक्षक अंक दर्ज करें — ग्रेड और रैंकिंग स्वचालित रूप से गणना होती है।',
        'एक क्लिक में प्रिंट करने योग्य रिपोर्ट कार्ड तैयार।',
        'प्रत्येक छात्र का पूरा परीक्षा इतिहास सुरक्षित।',
      ]],

      ['title'=>'टाइमटेबल प्रबंधन','points'=>[
        'एडमिन पैनल से कक्षा टाइमटेबल बनाएं और प्रकाशित करें।',
        'विषयों और शिक्षकों को समय स्लॉट में आसानी से असाइन करें।',
        'शिक्षक और छात्र अपने पोर्टल के माध्यम से टाइमटेबल देख सकते हैं।',
        'टाइमटेबल कभी भी अपडेट करें — परिवर्तन तुरंत दिखते हैं।',
      ]],

      ['title'=>'स्टाफ प्रबंधन और पेरोल','points'=>[
        'सभी शिक्षण और गैर-शिक्षण स्टाफ के पूर्ण प्रोफाइल सुरक्षित करें।',
        'स्टाफ उपस्थिति ट्रैक करें और छुट्टी अनुरोध प्रबंधित करें।',
        'मासिक वेतन पर्ची और पेरोल सारांश तैयार करें।',
        'प्रत्येक स्टाफ सदस्य का वेतन रिकॉर्ड सुरक्षित रहता है।',
      ]],

      ['title'=>'अभिभावक पोर्टल','points'=>[
        'अभिभावकों को अपने बच्चे की प्रगति देखने के लिए अलग लॉगिन मिलता है।',
        'उपस्थिति, परीक्षा परिणाम, शुल्क स्थिति और स्कूल नोटिस देखें।',
        'महत्वपूर्ण अपडेट के लिए इन-पैनल सूचनाएं मिलती हैं।',
        'किसी भी डिवाइस पर पहुंच — फोन, टैबलेट या कंप्यूटर।',
      ]],

      ['title'=>'पुस्तकालय प्रबंधन','points'=>[
        'पुस्तक इन्वेंटरी और जारी करने व वापसी के रिकॉर्ड प्रबंधित करें।',
        'अधिक समय तक रखी गई पुस्तकों पर स्वचालित जुर्माना गणना।',
        'शीर्षक, लेखक या विषय से पुस्तक खोजें।',
        'प्रत्येक छात्र का पुस्तक लेने का इतिहास सुरक्षित।',
      ]],

      ['title'=>'परिवहन प्रबंधन','points'=>[
        'मार्ग, वाहन और छात्र असाइनमेंट प्रबंधित करें।',
        'परिवहन शुल्क ट्यूशन से अलग ट्रैक और बिल किया जाए।',
        'प्रत्येक मार्ग के चालक और वाहन विवरण सुरक्षित।',
        'देखें कि कौन से छात्र किस मार्ग पर हैं।',
      ]],

      ['title'=>'क्या शामिल नहीं है','points'=>[
        'स्कूल वेबसाइट (अलग प्लान के रूप में उपलब्ध)।',
        'बायोमेट्रिक हार्डवेयर (क्लाइंट स्वयं व्यवस्था करे)।',
        'अलग समझौते के बिना थर्ड-पार्टी भुगतान गेटवे।',
      ]],

      ['title'=>'डेटा गोपनीयता और सुरक्षा','points'=>[
        'सभी डेटा एन्क्रिप्टेड सर्वर पर सुरक्षित।',
        'Schoozie कभी भी क्लाइंट डेटा तीसरे पक्ष को नहीं देगा।',
        'प्रतिदिन स्वचालित बैकअप।',
        'डेटा उल्लंघन पर तत्काल सूचना।',
        'सेवा समाप्ति पर डेटा निर्यात की सुविधा।',
      ]],

      ['title'=>'सदस्यता और रद्दीकरण','points'=>[
        'सदस्यताएं मासिक हैं और स्वतः नवीनीकृत होती हैं।',
        'अगली बिलिंग तिथि से कम से कम 7 दिन पहले रद्दीकरण अनुरोध आवश्यक।',
        'पहले से बिल किए गए आंशिक महीनों की कोई धनवापसी नहीं।',
        'रद्दीकरण पर डेटा 30 दिन सुरक्षित रहेगा।',
        '7 दिन से अधिक भुगतान बकाया होने पर पहुंच निलंबित हो सकती है।',
      ]],

      ['title'=>'सहायता नीति','points'=>[
        'सहायता कॉल या ईमेल के माध्यम से (सोम-शनि, सुबह 10 - शाम 5 IST) उपलब्ध है।',
        'कार्य दिवसों पर 24 घंटे के भीतर प्रतिक्रिया।',
        'गंभीर समस्याएं 4–8 घंटों में हल।',
        'कम्पलीट प्लान ग्राहकों को प्राथमिकता सहायता।',
        'सभी प्लानों में ऑनबोर्डिंग मार्गदर्शन शामिल।',
      ]],

      ['title'=>'शासी नियम','text'=>'ये शर्तें भारतीय कानून के तहत हैं। किसी भी विवाद को पहले आपसी बातचीत से सुलझाया जाएगा। Schoozie 30 दिन की पूर्व सूचना के साथ इन शर्तों को कभी भी अपडेट करने का अधिकार रखता है।'],
    ],
  ],
];
include '_plan_layout.php';
