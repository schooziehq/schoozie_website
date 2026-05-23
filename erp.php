<?php
$site_name = "Schoozie";
$year = date("Y");
require_once 'config.php';

/* ────────────────────────────────────────────────────────────────
   ERP TIERS - Basic / Standard / Premium / Enterprise
   ──────────────────────────────────────────────────────────────── */

/* Feature labels in canonical order - used by every tier card AND comparison */
$erp_all_features = [
  'Student Registration & Profiles',
  'Admission, Cancel & Transfer',
  'Fee Collection (Online & Offline)',
  'Part Payment Support',
  'Fee Receipts & History',
  'Admin Dashboard',
  'Attendance System',
  'Parent Portal',
  'In-Panel Notifications',
  'Report Cards & Results',
  'Teacher Management',
  'Exam & Marks Management',
  'Timetable Management',
  'Library Management',
  'Transport Management',
  'Other Staff Management',
  'Payroll System',
  'Advanced Analytics & Priority Support',
];

/* Yes/no matrix per tier, by index into $erp_all_features */
$tier_yes = [
  'basic'    => [0,1,2,3,4,5,6,7,8],
  'standard' => [0,1,2,3,4,5,6,7,8,9,10,11,12],
  'premium'  => range(0, 17), // all 18
];

$tiers = [
  'basic' => [
    'name'    => 'Basic',
    'tagline' => 'Essentials for getting started.',
    'icon'    => 'fa-seedling',
    'accent'  => '#a855f7',
    'modules' => $erp_basic_modules,
    'popular' => false,
    'prices'  => [
      'q' => $erp_basic_quarterly,
      'h' => $erp_basic_halfyearly,
      'y' => $erp_basic_yearly,
    ],
    'wa_text' => 'Hi%2C+I%27m+interested+in+the+ERP+Basic+Plan.',
  ],
  'standard' => [
    'name'    => 'Standard',
    'tagline' => 'Run daily operations end-to-end.',
    'icon'    => 'fa-bolt',
    'accent'  => '#00b7ff',
    'modules' => $erp_standard_modules,
    'popular' => true,
    'prices'  => [
      'q' => $erp_standard_quarterly,
      'h' => $erp_standard_halfyearly,
      'y' => $erp_standard_yearly,
    ],
    'wa_text' => 'Hi%2C+I%27m+interested+in+the+ERP+Standard+Plan.',
  ],
  'premium' => [
    'name'    => 'Premium',
    'tagline' => 'Every Schoozie module, fully unlocked.',
    'icon'    => 'fa-crown',
    'accent'  => '#ffd200',
    'modules' => $erp_premium_modules,
    'popular' => false,
    'prices'  => [
      'q' => $erp_premium_quarterly,
      'h' => $erp_premium_halfyearly,
      'y' => $erp_premium_yearly,
    ],
    'wa_text' => 'Hi%2C+I%27m+interested+in+the+ERP+Premium+Plan.',
  ],
  'enterprise' => [
    'name'    => 'Enterprise',
    'tagline' => 'When your school deserves more than a plan.',
    'icon'    => 'fa-gem',
    'accent'  => '#bf5fff',
    'custom'  => true,
    'subtitle'=> 'Best for 2,000+ students or multi-branch groups',
    'highlights' => [
      'Unlimited students, staff, storage & SMS/WhatsApp',
      'Private dedicated server - your data stays separate',
      'Dedicated relationship manager + 24×7 support',
      'Custom features built for your school',
      'Login with your existing Gmail / Outlook',
      'Assisted data migration & full staff training',
    ],
    'wa_text' => 'Hi%2C+I%27m+interested+in+the+ERP+Enterprise+Plan+for+my+school.',
  ],
];

/* ────────────────────────────────────────────────────────────────
   T&C - preserved verbatim from previous erp.php (3 languages)
   ──────────────────────────────────────────────────────────────── */
$tc = [
  'en' => [
    ['title'=>'Service Overview','text'=>'Run your entire school from one place - students, fees, attendance, exams, staff, and more. Schoozie ERP is built for Indian schools of every size, from small madrasas to large institutions. No fixed contracts, no hidden charges. Pick a plan, choose your billing cycle (Quarterly, Half-Yearly, or Yearly), and switch tiers anytime - mid-cycle changes are prorated by day, so you only pay the difference. Four tiers available - Basic, Standard, Premium, and Enterprise - so you only pay for what you actually need.'],
    ['title'=>'Subscription Plans & Pricing','points'=>[
      '<strong>Basic - Rs. '.$erp_basic_quarterly.'/quarter ('.$erp_basic_modules.' modules):</strong> Student management, fee collection (online & offline), part payment, admission/cancel/transfer, admin dashboard, attendance, parent portal, in-panel notifications.',
      '<strong>Standard - Rs. '.$erp_standard_quarterly.'/quarter ('.$erp_standard_modules.' modules):</strong> Everything in Basic + report cards & results, teacher management, exam & marks management, timetable management.',
      '<strong>Premium - Rs. '.$erp_premium_quarterly.'/quarter ('.$erp_premium_modules.' modules):</strong> Everything in Standard + library management, transport management, other staff management, payroll system, advanced analytics & priority support.',
      '<strong>Enterprise - Custom pricing:</strong> Best for schools with 2,000+ students or multi-branch groups. Unlimited students, teachers, storage, and SMS/WhatsApp. Private server, dedicated relationship manager, 24×7 support, custom features, and assisted data migration.',
      'Plans can be upgraded or downgraded at any time. Mid-cycle switches are prorated by day.',
    ]],
    ['title'=>'Billing Cycles & Savings','points'=>[
      '<strong>Quarterly:</strong> Pay every 3 months at the base price.',
      '<strong>Half-Yearly:</strong> Save '.$erp_savings_halfyearly.'% vs paying quarterly - pay every 6 months.',
      '<strong>Yearly:</strong> Save '.$erp_savings_yearly.'% vs paying quarterly - pay once for the full year.',
      'Switching billing cycles takes effect from the next renewal date.',
      'All amounts are inclusive of taxes unless stated otherwise on the invoice.',
    ]],
    ['title'=>'Mid-Cycle Plan Switches','points'=>[
      'Upgrade or downgrade your plan anytime - no cancellation needed.',
      'On upgrade, the difference is calculated daily for the remaining cycle and billed instantly.',
      'On downgrade, the unused balance is credited to your next invoice.',
      'You always pay only for what you use - never overpaying for a tier you outgrew.',
    ]],
    ['title'=>'One-Time Setup Fee','points'=>[
      'A one-time installation and onboarding fee may apply, depending on your school size and plan.',
      'Setup fee covers system configuration, data migration assistance, and initial training.',
      'Setup fee is separate from the subscription charge.',
      'Setup fee is non-refundable once work has begun.',
      'For Enterprise, setup is included in the discovery and onboarding process.',
    ]],
    ['title'=>'Fee Module - Details','points'=>[
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
      'Marks entered by teachers - grades and rankings calculated automatically.',
      'Printable report cards generated with one click.',
      'Full exam history and results stored per student.',
    ]],
    ['title'=>'Timetable Management','points'=>[
      'Create and publish class timetables directly from the admin panel.',
      'Assign subjects and teachers to time slots with ease.',
      'Timetable visible to teachers and students through their respective portals.',
      'Update and republish timetables anytime - changes reflect instantly.',
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
      'Access available on any device - phone, tablet, or computer.',
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
    ['title'=>'Enterprise Tier','points'=>[
      'Designed for schools with 2,000+ students, school groups, or multi-branch networks.',
      'Unlimited students, teachers, storage, SMS, and WhatsApp credits - subject to fair-use limits appropriate to school size.',
      'Private dedicated server - your data never shares space with another school.',
      'Login with your existing Google Workspace or Microsoft 365 email.',
      'Custom feature development included - tell us what you need, we build it.',
      'Dedicated relationship manager with direct mobile number; 24×7 support.',
      'Pricing is custom and shared during the discovery call.',
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
      'Subscriptions auto-renew at the end of each billing cycle (Quarterly, Half-Yearly, or Yearly) unless cancelled.',
      'Cancellation must be requested at least 7 days before the next billing date.',
      'No refund for the current paid cycle once it has begun.',
      'On cancellation, school data is retained for 30 days before permanent deletion.',
      'Access may be suspended if payment is overdue by more than 7 days.',
    ]],
    ['title'=>'Support Policy','points'=>[
      'Support available via call or email (Mon-Sat, 10am-5pm IST).',
      'Response within 24 hours on working days for Basic and Standard plans.',
      'Premium clients get priority support - response within 4-8 hours on critical issues.',
      'Enterprise clients get a dedicated relationship manager and 24×7 support.',
      'Onboarding guidance and initial setup support included for all plans.',
    ]],
    ['title'=>'Governing Terms','text'=>'These terms are governed under Indian law. Any dispute will first be addressed through mutual discussion. Schoozie reserves the right to update these terms at any time with 30 days prior notice via email or phone.'],
  ],
  'hi' => [
    ['title'=>'सेवा का अवलोकन','text'=>'अपने पूरे स्कूल को एक जगह से चलाएं - छात्र, शुल्क, उपस्थिति, परीक्षाएं, स्टाफ, और बहुत कुछ। Schoozie ERP हर आकार के भारतीय स्कूलों के लिए बनाया गया है। कोई निश्चित अनुबंध नहीं, कोई छुपा शुल्क नहीं। प्लान चुनें, बिलिंग चक्र (तिमाही, छमाही या वार्षिक) चुनें, और किसी भी समय टियर बदलें - मध्य-चक्र परिवर्तन प्रति दिन प्रोरेट होते हैं। चार योजनाएं उपलब्ध हैं - बेसिक, स्टैंडर्ड, प्रीमियम और एंटरप्राइज।'],
    ['title'=>'सदस्यता योजनाएं और मूल्य निर्धारण','points'=>[
      '<strong>बेसिक - Rs. '.$erp_basic_quarterly.'/तिमाही ('.$erp_basic_modules.' मॉड्यूल):</strong> छात्र प्रबंधन, शुल्क संग्रह, किस्त भुगतान, प्रवेश/रद्दीकरण/स्थानांतरण, एडमिन डैशबोर्ड, उपस्थिति, अभिभावक पोर्टल, इन-पैनल सूचनाएं।',
      '<strong>स्टैंडर्ड - Rs. '.$erp_standard_quarterly.'/तिमाही ('.$erp_standard_modules.' मॉड्यूल):</strong> बेसिक की सभी सुविधाएं + रिपोर्ट कार्ड, शिक्षक प्रबंधन, परीक्षा प्रबंधन, टाइमटेबल।',
      '<strong>प्रीमियम - Rs. '.$erp_premium_quarterly.'/तिमाही ('.$erp_premium_modules.' मॉड्यूल):</strong> स्टैंडर्ड की सभी सुविधाएं + पुस्तकालय, परिवहन, अन्य स्टाफ, वेतन प्रणाली, उन्नत विश्लेषण और प्राथमिकता सहायता।',
      '<strong>एंटरप्राइज - कस्टम मूल्य:</strong> 2,000+ छात्रों या मल्टी-ब्रांच ग्रुप के लिए। असीमित छात्र, शिक्षक, स्टोरेज, SMS और WhatsApp। निजी सर्वर, समर्पित रिलेशनशिप मैनेजर, 24×7 सहायता।',
      'किसी भी समय प्लान अपग्रेड या डाउनग्रेड किया जा सकता है। मध्य-चक्र स्विच प्रति दिन प्रोरेट होते हैं।',
    ]],
    ['title'=>'बिलिंग चक्र और बचत','points'=>[
      '<strong>तिमाही:</strong> हर 3 महीने में आधार मूल्य पर भुगतान।',
      '<strong>छमाही:</strong> तिमाही के मुकाबले '.$erp_savings_halfyearly.'% की बचत।',
      '<strong>वार्षिक:</strong> तिमाही के मुकाबले '.$erp_savings_yearly.'% की बचत।',
      'बिलिंग चक्र बदलने पर अगले नवीनीकरण से प्रभावी।',
    ]],
    ['title'=>'मध्य-चक्र प्लान स्विच','points'=>[
      'किसी भी समय अपग्रेड या डाउनग्रेड करें।',
      'अपग्रेड पर शेष चक्र का अंतर प्रति दिन गणना कर तुरंत बिल किया जाता है।',
      'डाउनग्रेड पर अप्रयुक्त बैलेंस अगले बिल में जमा होता है।',
      'आप हमेशा केवल उतना ही भुगतान करते हैं जितना उपयोग करते हैं।',
    ]],
    ['title'=>'एकमुश्त सेटअप शुल्क','points'=>[
      'स्कूल आकार और प्लान के अनुसार एकमुश्त सेटअप शुल्क लागू हो सकता है।',
      'सेटअप शुल्क में सिस्टम कॉन्फ़िगरेशन, डेटा माइग्रेशन और प्रारंभिक प्रशिक्षण शामिल है।',
      'सेटअप शुल्क सदस्यता शुल्क से अलग है।',
      'काम शुरू होने के बाद सेटअप शुल्क वापस नहीं होगा।',
      'एंटरप्राइज के लिए सेटअप ऑनबोर्डिंग में शामिल है।',
    ]],
    ['title'=>'शुल्क मॉड्यूल - विवरण','points'=>[
      'ऑनलाइन (UPI, बैंक ट्रांसफर) और ऑफलाइन रिकॉर्डिंग।',
      'किस्त भुगतान सुविधा।',
      'इन-पैनल स्वचालित अनुस्मारक।',
      'प्रत्येक भुगतान पर रसीद।',
      'बकाया रिपोर्ट।',
    ]],
    ['title'=>'प्रवेश, रद्दीकरण और स्थानांतरण','points'=>[
      'दस्तावेज़ अपलोड के साथ प्रवेश फ़ॉर्म।',
      'एक क्लिक में TC तैयार।',
      'वापसी ट्रैकिंग के साथ रद्दीकरण।',
      'कक्षा स्थानांतरण।',
      'पूरा प्रवेश इतिहास।',
    ]],
    ['title'=>'उपस्थिति प्रणाली','points'=>[
      'दैनिक उपस्थिति।',
      'देरी और जल्दी जाने का अलग रिकॉर्ड।',
      'मासिक/वार्षिक रिपोर्ट।',
      'अनुपस्थित छात्र चिह्नित।',
    ]],
    ['title'=>'परीक्षा और रिपोर्ट कार्ड','points'=>[
      'परीक्षा शेड्यूल और मार्क शीट।',
      'स्वचालित ग्रेड गणना।',
      'एक क्लिक में रिपोर्ट कार्ड।',
      'परीक्षा इतिहास सुरक्षित।',
    ]],
    ['title'=>'टाइमटेबल प्रबंधन','points'=>[
      'टाइमटेबल बनाएं और प्रकाशित करें।',
      'विषय और शिक्षक असाइन करें।',
      'पोर्टल पर दृश्य।',
      'किसी भी समय अपडेट।',
    ]],
    ['title'=>'स्टाफ प्रबंधन और पेरोल','points'=>[
      'सभी स्टाफ के पूर्ण प्रोफाइल।',
      'उपस्थिति और छुट्टी।',
      'मासिक वेतन पर्ची।',
      'वेतन रिकॉर्ड सुरक्षित।',
    ]],
    ['title'=>'अभिभावक पोर्टल','points'=>[
      'अभिभावक लॉगिन।',
      'उपस्थिति, परिणाम, शुल्क, नोटिस।',
      'इन-पैनल सूचनाएं।',
      'किसी भी डिवाइस पर पहुंच।',
    ]],
    ['title'=>'पुस्तकालय और परिवहन','points'=>[
      'पुस्तक इन्वेंटरी और जारी/वापसी।',
      'मार्ग, वाहन और छात्र असाइनमेंट।',
      'परिवहन शुल्क अलग ट्रैक।',
    ]],
    ['title'=>'एंटरप्राइज टियर','points'=>[
      '2,000+ छात्रों या मल्टी-ब्रांच के लिए।',
      'असीमित छात्र, शिक्षक, स्टोरेज, SMS और WhatsApp।',
      'निजी सर्वर - आपका डेटा कभी किसी और स्कूल के साथ नहीं।',
      'मौजूदा Google Workspace या Microsoft 365 ईमेल से लॉगिन।',
      'कस्टम फीचर डेवलपमेंट शामिल।',
      'समर्पित रिलेशनशिप मैनेजर और 24×7 सहायता।',
      'मूल्य डिस्कवरी कॉल में साझा होता है।',
    ]],
    ['title'=>'क्या शामिल नहीं है','points'=>[
      'स्कूल वेबसाइट (अलग प्लान)।',
      'बायोमेट्रिक हार्डवेयर।',
      'अलग समझौते के बिना थर्ड-पार्टी भुगतान गेटवे।',
    ]],
    ['title'=>'डेटा गोपनीयता और सुरक्षा','points'=>[
      'सभी डेटा एन्क्रिप्टेड।',
      'तीसरे पक्ष को डेटा नहीं।',
      'दैनिक स्वचालित बैकअप।',
      'उल्लंघन पर तत्काल सूचना।',
      'समाप्ति पर डेटा निर्यात।',
    ]],
    ['title'=>'सदस्यता और रद्दीकरण','points'=>[
      'सदस्यता स्वतः नवीनीकृत।',
      'अगली बिलिंग से 7 दिन पहले रद्दीकरण।',
      'चालू चक्र की कोई वापसी नहीं।',
      'रद्दीकरण पर डेटा 30 दिन।',
      '7 दिन से अधिक बकाया पर पहुंच निलंबित।',
    ]],
    ['title'=>'सहायता नीति','points'=>[
      'सहायता कॉल/ईमेल (सोम-शनि, 10-5 IST)।',
      'बेसिक/स्टैंडर्ड के लिए 24 घंटे प्रतिक्रिया।',
      'प्रीमियम के लिए 4-8 घंटे प्राथमिकता।',
      'एंटरप्राइज के लिए 24×7 समर्पित सहायता।',
    ]],
    ['title'=>'शासी नियम','text'=>'ये शर्तें भारतीय कानून के तहत हैं। किसी भी विवाद को पहले आपसी बातचीत से सुलझाया जाएगा। Schoozie 30 दिन की पूर्व सूचना के साथ इन शर्तों को कभी भी अपडेट करने का अधिकार रखता है।'],
  ],
  'ur' => [
    ['title'=>'خدمت کا جائزہ','text'=>'اپنے پورے اسکول کو ایک جگہ سے چلائیں - طلبا، فیس، حاضری، امتحانات، اسٹاف، اور بہت کچھ۔ اسکوزی ERP چھوٹے مدارس سے لے کر بڑے اداروں تک ہر سائز کے ہندوستانی اسکولوں کے لیے بنایا گیا ہے۔ کوئی مقررہ معاہدہ نہیں، کوئی پوشیدہ چارج نہیں۔ پلان منتخب کریں، بلنگ سائیکل (سہ ماہی، ششماہی، یا سالانہ) چنیں، اور کسی بھی وقت ٹیئر تبدیل کریں - درمیانی تبدیلیاں روزانہ کے حساب سے تقسیم کی جاتی ہیں۔ چار پلانز دستیاب ہیں - بیسک، اسٹینڈرڈ، پریمیم، اور انٹرپرائز۔'],
    ['title'=>'سبسکرپشن پلانز اور قیمت','points'=>[
      '<strong>بیسک - '.str_replace(',','،',$erp_basic_quarterly).' روپے/سہ ماہی ('.$erp_basic_modules.' ماڈیولز):</strong> طلبا مینجمنٹ، فیس کلیکشن، قسطوں میں ادائیگی، داخلہ/منسوخی/منتقلی، ایڈمن ڈیش بورڈ، حاضری، والدین پورٹل، ان پینل اطلاعات۔',
      '<strong>اسٹینڈرڈ - '.str_replace(',','،',$erp_standard_quarterly).' روپے/سہ ماہی ('.$erp_standard_modules.' ماڈیولز):</strong> بیسک کی تمام سہولیات + رپورٹ کارڈ، اساتذہ مینجمنٹ، امتحان مینجمنٹ، ٹائم ٹیبل۔',
      '<strong>پریمیم - '.str_replace(',','،',$erp_premium_quarterly).' روپے/سہ ماہی ('.$erp_premium_modules.' ماڈیولز):</strong> اسٹینڈرڈ کی تمام سہولیات + لائبریری، ٹرانسپورٹ، دیگر اسٹاف، تنخواہ سسٹم، جدید تجزیات اور پرائیوریٹی سپورٹ۔',
      '<strong>انٹرپرائز - حسب ضرورت قیمت:</strong> ۲۰۰۰+ طلبا یا متعدد برانچ والے اسکول گروپس کے لیے بہترین۔ لامحدود طلبا، اساتذہ، اسٹوریج، SMS اور WhatsApp۔ نجی سرور، مخصوص ریلیشن شپ مینیجر، ۲۴×۷ سپورٹ، حسب ضرورت خصوصیات اور معاون ڈیٹا مائیگریشن۔',
      'پلان کسی بھی وقت اپ گریڈ یا ڈاؤن گریڈ کیا جا سکتا ہے۔ درمیانی تبدیلیاں روزانہ کے حساب سے تقسیم کی جاتی ہیں۔',
    ]],
    ['title'=>'بلنگ سائیکل اور بچت','points'=>[
      '<strong>سہ ماہی:</strong> ہر ۳ ماہ میں بنیادی قیمت پر ادائیگی۔',
      '<strong>ششماہی:</strong> سہ ماہی کے مقابلے میں '.$erp_savings_halfyearly.'% کی بچت - ہر ۶ ماہ میں ادائیگی۔',
      '<strong>سالانہ:</strong> سہ ماہی کے مقابلے میں '.$erp_savings_yearly.'% کی بچت - پورے سال کی ایک ہی ادائیگی۔',
      'بلنگ سائیکل تبدیل کرنا اگلی تجدید سے نافذ ہوگا۔',
    ]],
    ['title'=>'درمیانی پلان تبدیلی','points'=>[
      'کسی بھی وقت پلان اپ گریڈ یا ڈاؤن گریڈ کریں - منسوخی کی ضرورت نہیں۔',
      'اپ گریڈ پر، باقی سائیکل کے لیے فرق روزانہ کے حساب سے فوری بل کیا جاتا ہے۔',
      'ڈاؤن گریڈ پر، استعمال نہ ہونے والی رقم اگلے بل میں کریڈٹ کی جاتی ہے۔',
      'آپ ہمیشہ صرف اسی کا ادا کرتے ہیں جو استعمال کرتے ہیں۔',
    ]],
    ['title'=>'یکمشت سیٹ اپ فیس','points'=>[
      'اسکول کے سائز اور پلان کے مطابق یکمشت سیٹ اپ فیس لاگو ہو سکتی ہے۔',
      'سیٹ اپ فیس میں سسٹم کنفیگریشن، ڈیٹا مائیگریشن اور ابتدائی تربیت شامل ہے۔',
      'سیٹ اپ فیس سبسکرپشن چارج سے الگ ہے۔',
      'کام شروع ہونے کے بعد سیٹ اپ فیس واپس نہیں کی جائے گی۔',
      'انٹرپرائز کے لیے سیٹ اپ ڈسکوری اور آن بورڈنگ میں شامل ہے۔',
    ]],
    ['title'=>'فیس ماڈیول - تفصیلات','points'=>[
      'آن لائن (UPI، بینک ٹرانسفر) اور آف لائن نقد/چیک ریکارڈنگ سپورٹ۔',
      'قسطوں میں فیس ادائیگی کی سہولت۔',
      'ان پینل اطلاعات کے ذریعے خودکار فیس یاددہانیاں۔',
      'ہر ادائیگی پر خودبخود رسید تیار ہوتی ہے۔',
      'واجب الادا رقم کی رپورٹس۔',
    ]],
    ['title'=>'داخلہ، منسوخی اور منتقلی','points'=>[
      'دستاویز اپ لوڈ کے ساتھ نئے طالب علم کا داخلہ فارم۔',
      'ایک کلک میں TC تیار۔',
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
      'پینل سے امتحان کا شیڈول اور مارک شیٹ بنائیں۔',
      'اساتذہ نمبر داخل کریں - گریڈ خودبخود حساب۔',
      'ایک کلک میں رپورٹ کارڈ تیار۔',
      'ہر طالب علم کی مکمل امتحانی تاریخ محفوظ۔',
    ]],
    ['title'=>'ٹائم ٹیبل مینجمنٹ','points'=>[
      'ایڈمن پینل سے کلاس ٹائم ٹیبل بنائیں اور شائع کریں۔',
      'مضامین اور اساتذہ کو ٹائم سلاٹس میں آسانی سے تفویض کریں۔',
      'اساتذہ اور طلبا اپنے پورٹل کے ذریعے ٹائم ٹیبل دیکھ سکتے ہیں۔',
      'ٹائم ٹیبل کسی بھی وقت اپڈیٹ کریں۔',
    ]],
    ['title'=>'اسٹاف مینجمنٹ اور پے رول','points'=>[
      'تمام اسٹاف کے مکمل پروفائل۔',
      'اسٹاف کی حاضری اور چھٹی کی درخواستیں۔',
      'ماہانہ تنخواہ سلپ اور پے رول۔',
      'ہر اسٹاف ممبر کا تنخواہ ریکارڈ محفوظ۔',
    ]],
    ['title'=>'والدین پورٹل','points'=>[
      'والدین کو الگ لاگ ان۔',
      'حاضری، نتائج، فیس اور نوٹسز دیکھیں۔',
      'ان پینل اطلاعات۔',
      'کسی بھی ڈیوائس پر رسائی۔',
    ]],
    ['title'=>'لائبریری اور ٹرانسپورٹ','points'=>[
      'کتابوں کی انوینٹری اور اجراء و واپسی کا ریکارڈ۔',
      'روٹ، گاڑیاں اور طلبا کی تفویض منظم کریں۔',
      'ٹرانسپورٹ فیس ٹیوشن سے الگ ٹریک کی جائے۔',
    ]],
    ['title'=>'انٹرپرائز ٹیئر','points'=>[
      '۲۰۰۰+ طلبا والے اسکولوں یا متعدد برانچ والے گروپس کے لیے۔',
      'لامحدود طلبا، اساتذہ، اسٹوریج، SMS اور WhatsApp۔',
      'نجی سرور - آپ کا ڈیٹا کسی اور اسکول سے کبھی نہیں ملتا۔',
      'موجودہ Google Workspace یا Microsoft 365 ای میل سے لاگ ان۔',
      'حسب ضرورت فیچر ڈیولپمنٹ شامل۔',
      'مخصوص ریلیشن شپ مینیجر اور ۲۴×۷ سپورٹ۔',
      'قیمت ڈسکوری کال کے دوران شیئر کی جاتی ہے۔',
    ]],
    ['title'=>'کیا شامل نہیں ہے','points'=>[
      'اسکول ویب سائٹ (الگ پلان دستیاب)۔',
      'بائیو میٹرک ہارڈ ویئر (کلائنٹ خود انتظام کرے)۔',
      'الگ معاہدے کے بغیر تھرڈ پارٹی پیمنٹ گیٹ وے۔',
    ]],
    ['title'=>'ڈیٹا پرائیویسی اور سیکیورٹی','points'=>[
      'تمام ڈیٹا خفیہ کردہ سرورز پر محفوظ۔',
      'اسکوزی کلائنٹ ڈیٹا کبھی بھی تیسرے فریق کو نہیں دے گا۔',
      'روزانہ خودکار بیک اپ۔',
      'ڈیٹا خلاف ورزی پر فوری اطلاع۔',
      'سروس ختم ہونے پر ڈیٹا ایکسپورٹ کی سہولت۔',
    ]],
    ['title'=>'سبسکرپشن اور منسوخی','points'=>[
      'سبسکرپشن خودبخود تجدید ہوتی ہے۔',
      'اگلی بلنگ تاریخ سے کم از کم ۷ دن پہلے منسوخی درخواست ضروری۔',
      'موجودہ سائیکل شروع ہونے کے بعد واپسی نہیں ہوگی۔',
      'منسوخی پر ڈیٹا ۳۰ دن تک محفوظ رہے گا۔',
      'ادائیگی ۷ دن سے زیادہ تاخیر پر رسائی معطل ہو سکتی ہے۔',
    ]],
    ['title'=>'سپورٹ پالیسی','points'=>[
      'سپورٹ کال یا ای میل کے ذریعے (پیر تا ہفتہ، صبح ۱۰ تا شام ۵)۔',
      'بیسک اور اسٹینڈرڈ کے لیے ۲۴ گھنٹوں میں جواب۔',
      'پریمیم کے لیے پرائیوریٹی سپورٹ - اہم مسائل ۴-۸ گھنٹوں میں۔',
      'انٹرپرائز کے لیے مخصوص ریلیشن شپ مینیجر اور ۲۴×۷ سپورٹ۔',
    ]],
    ['title'=>'حاکم شرائط','text'=>'یہ شرائط بھارتی قانون کے تحت ہیں۔ کسی بھی تنازع کو پہلے باہمی گفتگو سے حل کیا جائے گا۔ اسکوزی ۳۰ دن کی پیشگی اطلاع کے ساتھ ان شرائط کو کسی بھی وقت اپ ڈیٹ کرنے کا حق رکھتا ہے۔'],
  ],
];

/* helper: check if a feature index is included in a tier */
function tier_has($tier_key, $feat_idx, $tier_yes){
  if($tier_key === 'enterprise') return true;
  return in_array($feat_idx, $tier_yes[$tier_key], true);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include '_analytics.php'; ?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>School ERP Software - 4 Plans, Pay Quarterly or Yearly | Schoozie</title>
<meta name="description" content="Schoozie School ERP - fees, attendance, exams, library, transport, payroll. Four plans starting at Rs. <?php echo $erp_basic_quarterly; ?>/quarter. Switch tiers anytime, prorated by day. Built for Indian schools.">
<meta name="keywords" content="school ERP software india, school management software, school ERP system, cloud school ERP, fee management software, school attendance software, parent portal india, school payroll software">
<meta name="robots" content="index, follow">
<link rel="canonical" href="https://schoozie.com/erp.php">
<link rel="icon" type="image/png" href="assets/_fonts/logo.png">
<link rel="icon" type="image/svg+xml" href="assets/svg/schoozie-logo.svg">
<meta property="og:type" content="website">
<meta property="og:title" content="School ERP Software - 4 Plans for Indian Schools | Schoozie">
<meta property="og:description" content="Schoozie School ERP - fees, attendance, exams, library, transport, payroll. Plans starting at Rs. <?php echo $erp_basic_quarterly; ?>/quarter.">
<meta property="og:url" content="https://schoozie.com/erp.php">
<meta property="og:image" content="https://schoozie.com/assets/og-image.png">
<meta name="twitter:card" content="summary_large_image">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700;900&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Inter:wght@300;400;500;600;700&family=Noto+Sans+Arabic:wght@500;600;700&family=Noto+Sans+Devanagari:wght@400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<link rel="stylesheet" href="css/global.css?v=<?php echo filemtime('css/global.css'); ?>">
<link rel="stylesheet" href="css/index-v2.css?v=<?php echo filemtime('css/index-v2.css'); ?>">
<link rel="stylesheet" href="css/websites.css?v=<?php echo filemtime('css/websites.css'); ?>">
<link rel="stylesheet" href="css/erp.css?v=<?php echo filemtime('css/erp.css'); ?>">
</head>
<body class="page-erp">

<?php $active_page = 'erp'; include '_header.php'; ?>

<!-- COMPACT HERO -->
<section class="w-hero">
  <div class="w-hero-inner">
    <div class="v2-hero-tag"><span class="dot"></span><span>School ERP</span></div>
    <h1>Run your whole school <span class="grad">from one place</span></h1>
    <p class="lead">Fees, attendance, exams, library, transport, payroll - everything in one cloud-based system. Four plans, pay quarterly or yearly, switch anytime.</p>
  </div>
</section>

<!-- BILLING TOGGLE -->
<section class="erp-billing-section">
  <div class="erp-billing-toggle" role="tablist" aria-label="Billing cycle">
    <button type="button" class="erp-bt active" data-billing="q">Quarterly</button>
    <button type="button" class="erp-bt" data-billing="h">
      Half-Yearly
      <span class="erp-bt-save">Save <?php echo $erp_savings_halfyearly; ?>%</span>
    </button>
    <button type="button" class="erp-bt" data-billing="y">
      Yearly
      <span class="erp-bt-save">Save <?php echo $erp_savings_yearly; ?>%</span>
    </button>
  </div>
  <p class="erp-proration">Mid-cycle switches are prorated by day - you only pay the difference.</p>
</section>

<!-- TIER CARDS -->
<section class="erp-tiers" id="plans">
  <div class="erp-tiers-grid">
    <?php foreach($tiers as $key => $t): ?>
    <article class="erp-tier-card <?php echo !empty($t['popular']) ? 'is-popular' : ''; ?> <?php echo !empty($t['custom']) ? 'is-custom' : ''; ?>"
             id="tier-<?php echo $key; ?>"
             style="--ac:<?php echo $t['accent']; ?>">

      <?php if(!empty($t['popular'])): ?>
        <span class="erp-tier-flag"><i class="fa-solid fa-star"></i> Most Popular</span>
      <?php endif; ?>
      <?php if(!empty($t['custom'])): ?>
        <span class="erp-tier-flag erp-flag-custom"><i class="fa-solid fa-gem"></i> Enterprise</span>
      <?php endif; ?>

      <div class="erp-tier-head">
        <span class="erp-tier-icon"><i class="fa-solid <?php echo $t['icon']; ?>"></i></span>
        <h3><?php echo htmlspecialchars($t['name']); ?></h3>
        <p class="erp-tier-tag"><?php echo htmlspecialchars($t['tagline']); ?></p>
      </div>

      <div class="erp-tier-price"
           <?php if(!empty($t['prices'])): ?>
           data-q="<?php echo $t['prices']['q']; ?>"
           data-h="<?php echo $t['prices']['h']; ?>"
           data-y="<?php echo $t['prices']['y']; ?>"
           <?php endif; ?>>
        <?php if(!empty($t['custom'])): ?>
          <div class="erp-price-row">
            <span class="erp-price-amt">Custom</span>
          </div>
          <div class="erp-price-period"><?php echo htmlspecialchars($t['subtitle']); ?></div>
        <?php else: ?>
          <div class="erp-price-row">
            <span class="erp-price-rs">Rs.</span>
            <span class="erp-price-amt"><?php echo $t['prices']['q']; ?></span>
          </div>
          <div class="erp-price-period">
            <span class="erp-price-per">/quarter</span>
          </div>
          <div class="erp-price-modules"><?php echo $t['modules']; ?> modules included</div>
        <?php endif; ?>
      </div>

      <div class="erp-tier-feats">
        <?php if(!empty($t['custom'])): ?>
          <ul>
            <?php foreach($t['highlights'] as $h): ?>
            <li><i class="fa-solid fa-check"></i><span><?php echo htmlspecialchars($h); ?></span></li>
            <?php endforeach; ?>
          </ul>
        <?php else: ?>
          <ul>
            <?php foreach($erp_all_features as $idx => $label):
              $has = tier_has($key, $idx, $tier_yes);
            ?>
            <li class="<?php echo $has ? '' : 'is-off'; ?>">
              <i class="fa-solid <?php echo $has ? 'fa-check' : 'fa-minus'; ?>"></i>
              <span><?php echo htmlspecialchars($label); ?></span>
            </li>
            <?php endforeach; ?>
          </ul>
        <?php endif; ?>
      </div>

      <div class="erp-tier-cta">
        <a href="https://wa.me/<?php echo $contact_whatsapp; ?>?text=<?php echo $t['wa_text']; ?>"
           target="_blank" rel="noopener"
           class="w-btn-primary"
           style="background:linear-gradient(135deg,<?php echo $t['accent']; ?>,#6f42ff)">
          <i class="fa-brands fa-whatsapp"></i>
          <?php echo !empty($t['custom']) ? 'Contact Sales' : 'Get '.htmlspecialchars($t['name']); ?>
        </a>
      </div>
    </article>
    <?php endforeach; ?>
  </div>
</section>

<!-- SETUP FEE CALLOUT -->
<section class="erp-callout-wrap">
  <div class="erp-callout">
    <span class="erp-callout-icon"><i class="fa-solid fa-circle-info"></i></span>
    <div>
      <strong>One-time setup fee may apply</strong>
      <em>Depends on school size &amp; plan - covers configuration, data migration &amp; staff training. We share the exact amount on your first call.</em>
    </div>
  </div>
</section>

<!-- COMPARISON TABLE -->
<section class="w-compare" id="compare">
  <div class="v2-plans-head">
    <span class="v2-plans-eyebrow"><i class="fa-solid fa-table-list"></i> Compare</span>
    <h2>Compare all <span class="grad">four tiers</span></h2>
    <p>Every feature, side-by-side. Pick what fits your school.</p>
  </div>
  <div class="w-compare-wrap erp-compare-wrap">
    <table class="w-compare-table erp-compare-table">
      <thead>
        <tr>
          <th class="cmp-feature">Feature</th>
          <?php foreach($tiers as $key => $t): ?>
          <th style="color:<?php echo $t['accent']; ?>">
            <i class="fa-solid <?php echo $t['icon']; ?>"></i><br>
            <?php echo htmlspecialchars($t['name']); ?>
          </th>
          <?php endforeach; ?>
        </tr>
      </thead>
      <tbody>
        <?php foreach($erp_all_features as $idx => $label): ?>
        <tr>
          <td class="cmp-feature"><?php echo htmlspecialchars($label); ?></td>
          <?php foreach($tiers as $key => $t):
            $has = tier_has($key, $idx, $tier_yes);
          ?>
          <td>
            <?php if($has): ?>
              <span class="cmp-yes"><i class="fa-solid fa-circle-check"></i></span>
            <?php else: ?>
              <span class="cmp-no"><i class="fa-solid fa-circle-xmark"></i></span>
            <?php endif; ?>
          </td>
          <?php endforeach; ?>
        </tr>
        <?php endforeach; ?>
        <tr class="erp-compare-extra">
          <td class="cmp-feature">Unlimited everything (students, staff, storage, SMS)</td>
          <td><span class="cmp-no"><i class="fa-solid fa-circle-xmark"></i></span></td>
          <td><span class="cmp-no"><i class="fa-solid fa-circle-xmark"></i></span></td>
          <td><span class="cmp-no"><i class="fa-solid fa-circle-xmark"></i></span></td>
          <td><span class="cmp-yes"><i class="fa-solid fa-circle-check"></i></span></td>
        </tr>
        <tr class="erp-compare-extra">
          <td class="cmp-feature">Private dedicated server</td>
          <td><span class="cmp-no"><i class="fa-solid fa-circle-xmark"></i></span></td>
          <td><span class="cmp-no"><i class="fa-solid fa-circle-xmark"></i></span></td>
          <td><span class="cmp-no"><i class="fa-solid fa-circle-xmark"></i></span></td>
          <td><span class="cmp-yes"><i class="fa-solid fa-circle-check"></i></span></td>
        </tr>
        <tr class="erp-compare-extra">
          <td class="cmp-feature">24×7 support + dedicated manager</td>
          <td><span class="cmp-no"><i class="fa-solid fa-circle-xmark"></i></span></td>
          <td><span class="cmp-no"><i class="fa-solid fa-circle-xmark"></i></span></td>
          <td><span class="cmp-no"><i class="fa-solid fa-circle-xmark"></i></span></td>
          <td><span class="cmp-yes"><i class="fa-solid fa-circle-check"></i></span></td>
        </tr>
      </tbody>
    </table>
  </div>
</section>

<!-- TERMS & DETAILS -->
<section class="w-terms" id="terms">
  <div class="v2-plans-head">
    <span class="v2-plans-eyebrow"><i class="fa-solid fa-file-contract"></i> Details</span>
    <h2>Full <span class="grad">terms &amp; pricing</span></h2>
    <p>Everything you need to know, in plain language. Tap any section to expand.</p>
  </div>

  <div class="w-terms-block" id="terms-erp">
    <?php
    $langs = [
      'en' => ['label'=>'English','dir'=>'ltr'],
      'hi' => ['label'=>'हिन्दी','dir'=>'ltr'],
      'ur' => ['label'=>'اردو','dir'=>'rtl'],
    ];
    ?>
    <div class="w-lang-tabs" data-plan="erp">
      <?php $i=0; foreach($langs as $code => $meta):
        if(!isset($tc[$code])) continue;
        if($i++>0): ?><span class="w-lang-sep">·</span><?php endif;
      ?>
        <button type="button"
                class="w-lang-tab w-lang-<?php echo $code; ?> <?php echo $code==='en' ? 'active' : ''; ?>"
                data-lang="<?php echo $code; ?>"><?php echo htmlspecialchars($meta['label']); ?></button>
      <?php endforeach; ?>
    </div>

    <?php foreach($langs as $code => $meta): if(!isset($tc[$code])) continue; ?>
    <div class="w-lang-panel <?php echo $code==='en' ? 'active' : ''; ?>"
         data-lang="<?php echo $code; ?>"
         dir="<?php echo $meta['dir']; ?>">
      <div class="w-tc-list">
        <?php foreach($tc[$code] as $item): ?>
        <details class="w-tc-item">
          <summary><span><?php echo htmlspecialchars($item['title']); ?></span><i class="fa-solid fa-chevron-down"></i></summary>
          <div class="w-tc-body">
            <?php if(isset($item['text'])): ?>
              <p><?php echo $item['text']; ?></p>
            <?php endif; ?>
            <?php if(isset($item['points'])): ?>
              <ul>
                <?php foreach($item['points'] as $pt): if(!$pt) continue; ?>
                <li><?php echo $pt; ?></li>
                <?php endforeach; ?>
              </ul>
            <?php endif; ?>
          </div>
        </details>
        <?php endforeach; ?>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
</section>

<!-- FINAL CTA -->
<section class="v2-final-cta">
  <h2>Ready to <span class="grad">go digital?</span></h2>
  <p>Book a free demo - see Schoozie ERP running with your school's data flow. No commitment.</p>
  <div class="v2-final-cta-btns">
    <a href="https://wa.me/<?php echo $contact_whatsapp; ?>?text=Hi%2C+I%27d+like+a+free+demo+of+Schoozie+ERP." target="_blank" rel="noopener" class="v2-btn-primary">
      <i class="fa-brands fa-whatsapp"></i> Book Free Demo
    </a>
  </div>
</section>

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
  "url": "https://schoozie.com/erp.php",
  "offers": [
    {"@type":"Offer","name":"Basic","price":"<?php echo str_replace(',','',$erp_basic_quarterly); ?>","priceCurrency":"INR","priceSpecification":{"@type":"UnitPriceSpecification","price":"<?php echo str_replace(',','',$erp_basic_quarterly); ?>","priceCurrency":"INR","unitText":"quarter"}},
    {"@type":"Offer","name":"Standard","price":"<?php echo str_replace(',','',$erp_standard_quarterly); ?>","priceCurrency":"INR","priceSpecification":{"@type":"UnitPriceSpecification","price":"<?php echo str_replace(',','',$erp_standard_quarterly); ?>","priceCurrency":"INR","unitText":"quarter"}},
    {"@type":"Offer","name":"Premium","price":"<?php echo str_replace(',','',$erp_premium_quarterly); ?>","priceCurrency":"INR","priceSpecification":{"@type":"UnitPriceSpecification","price":"<?php echo str_replace(',','',$erp_premium_quarterly); ?>","priceCurrency":"INR","unitText":"quarter"}}
  ]
}
</script>

<script>
/* Billing toggle - updates all tier prices */
(function(){
  var bts = document.querySelectorAll('.erp-bt');
  var savingsH = <?php echo (int)$erp_savings_halfyearly; ?>;
  var savingsY = <?php echo (int)$erp_savings_yearly; ?>;
  var periodLabels = { q:'/quarter', h:'/half-yearly', y:'/yearly' };
  bts.forEach(function(btn){
    btn.addEventListener('click', function(){
      var key = btn.dataset.billing;
      bts.forEach(function(b){ b.classList.remove('active'); });
      btn.classList.add('active');
      document.querySelectorAll('.erp-tier-price').forEach(function(p){
        var amt  = p.querySelector('.erp-price-amt');
        var per  = p.querySelector('.erp-price-per');
        if(!amt || !per) return;
        var v = p.dataset[key];
        if(!v) return;
        amt.textContent = v;
        per.textContent = periodLabels[key];
      });
    });
  });
})();

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
