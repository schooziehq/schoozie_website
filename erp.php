<?php
$plan = [
  'name'           => 'School ERP Portal',
  'badge'          => '<i class="fa-solid fa-star"></i> Most Popular',
  'badge_bg'       => 'rgba(0,240,255,0.1)',
  'badge_color'    => '#00f0ff',
  'badge_border'   => 'rgba(0,240,255,0.3)',
  'title_gradient' => 'linear-gradient(90deg,#00f0ff,#0077ff)',
  'accent'         => '#00f0ff',
  'description'    => 'A complete cloud-based school management system — students, fees, attendance, exams, library, transport, payroll and more. Three flexible plans. Pay only for the students you have.',
  'price_display'  => 'From Rs. 10',
  'price_period'   => 'per student / per month',
  'price_old'      => '',
  'price_save'     => '',
  'domain_note'    => '',
  'btn_bg'         => 'linear-gradient(90deg,#00b4d8,#0077b6)',
  'btn_text'       => 'Get Started',
  'tab_color'      => 'cyan',

  /* ── FEATURES STRIP ── */
  'features' => [
    ['<i class="fa-solid fa-graduation-cap" style="color:#a855f7"></i>','Student Management'],
    ['<i class="fa-solid fa-money-bill-wave" style="color:#10b981"></i>','Fee Online & Offline'],
    ['<i class="fa-solid fa-code-branch" style="color:#06b6d4"></i>','Part Payment'],
    ['<i class="fa-solid fa-clipboard-list" style="color:#f59e0b"></i>','Admission / Cancel / Transfer'],
    ['<i class="fa-solid fa-people-roof" style="color:#ec4899"></i>','Parent Portal'],
    ['<i class="fa-solid fa-chalkboard-user" style="color:#00b7ff"></i>','Teacher Management'],
    ['<i class="fa-solid fa-clipboard-check" style="color:#10b981"></i>','Attendance System'],
    ['<i class="fa-solid fa-file-lines" style="color:#f59e0b"></i>','Exam & Report Cards'],
    ['<i class="fa-solid fa-book-open" style="color:#a855f7"></i>','Library Management'],
    ['<i class="fa-solid fa-bus" style="color:#3b82f6"></i>','Transport Management'],
    ['<i class="fa-solid fa-users" style="color:#ec4899"></i>','Other Staff Management'],
    ['<i class="fa-solid fa-wallet" style="color:#fbbf24"></i>','Payroll System'],
    ['<i class="fa-solid fa-bell" style="color:#f97316"></i>','SMS Notifications'],
    ['<i class="fa-solid fa-chart-bar" style="color:#06b6d4"></i>','Admin Dashboard'],
  ],

  /* ── THREE SUBSCRIPTION TIERS ── */
  'sub_plans' => [
    [
      'name'    => 'Basic',
      'emoji'   => '<i class="fa-solid fa-seedling"></i>',
      'price'   => '10',
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
        ['no', 'SMS Notifications'],
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
      'price'   => '20',
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
        ['yes', 'SMS Notifications'],
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
      'price'   => '25',
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
        ['yes', 'SMS Notifications'],
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
      ['title'=>'Service Overview','text'=>'Schoozie ERP is a cloud-based school management platform designed for Indian schools, madrasas, and educational institutions of all sizes. Pricing is per active student per month — you only pay for what you use. Three subscription tiers are available: Basic, Standard, and Complete.'],

      ['title'=>'Subscription Plans & Pricing','points'=>[
        '<strong>Basic — Rs. 10/student/month:</strong> Student management, fee collection (online & offline), part payment, admission/cancel/transfer, admin dashboard.',
        '<strong>Standard — Rs. 20/student/month:</strong> Everything in Basic + attendance system, parent portal, report cards & results, teacher management, exam management, SMS notifications.',
        '<strong>Complete — Rs. 25/student/month:</strong> Everything in Standard + library management, transport management, other staff management, payroll system, advanced analytics, priority support, and all future features.',
        'Plans can be upgraded at any time. Downgrade requests take effect from the next billing cycle.',
        'Example (Standard): 100 students = Rs. 2,000/month | 300 students = Rs. 6,000/month.',
      ]],

      ['title'=>'One-Time Setup Fee','points'=>[
        'A one-time installation and onboarding fee applies to all plans.',
        'April 2025 offer: Rs. 9,999 (regular price: Rs. 21,500).',
        'Setup fee covers system configuration, data migration assistance, and initial training.',
        'Setup fee is separate from the monthly subscription charge.',
        'Setup fee is non-refundable once work has begun.',
      ]],

      ['title'=>'Free Trial','points'=>[
        'A free trial is available for new schools (duration communicated at sign-up).',
        'Full access to the selected plan is provided during the trial.',
        'No payment is required during the trial period.',
        'After the trial, a subscription must be activated to continue.',
      ]],

      ['title'=>'Fee Module — Details','points'=>[
        'Supports online payments (UPI, bank transfer) and offline cash/cheque recording.',
        'Part payment feature allows students to pay fees in multiple installments.',
        'Automated fee reminders via SMS and parent portal.',
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

      ['title'=>'What Is NOT Included','points'=>[
        'School website (available as a separate Static or Dynamic plan).',
        'Biometric hardware (client must arrange own hardware).',
        'Custom mobile app development.',
        'Third-party payment gateway integration (unless agreed separately).',
        'Printed reports or physical documents.',
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
        'Cancellation must be requested via WhatsApp at least 7 days before the next billing date.',
        'No refund for partial months already billed.',
        'On cancellation, school data is retained for 30 days before permanent deletion.',
        'Access may be suspended if payment is overdue by more than 7 days.',
      ]],

      ['title'=>'Support Policy','points'=>[
        'Support available via WhatsApp (Mon–Sat, 10am–6pm IST).',
        'Response within 24 hours on working days.',
        'Critical issues addressed within 4–8 hours.',
        'Complete plan clients get priority support.',
        'Onboarding guidance and initial setup support included for all plans.',
      ]],

      ['title'=>'Governing Terms','text'=>'These terms are governed under Indian law. Any dispute will first be addressed through mutual discussion. Schoozie reserves the right to update these terms at any time with 30 days prior notice via WhatsApp or email.'],
    ],

    /* ====== URDU ====== */
    'ur' => [
      ['title'=>'خدمت کا جائزہ','text'=>'اسکوزی ERP ہندوستانی اسکولوں، مدارس اور تمام اقسام کے تعلیمی اداروں کے لیے ایک کلاؤڈ بیسڈ اسکول مینجمنٹ پلیٹ فارم ہے۔ قیمت فی فعال طالب علم، فی ماہ کی بنیاد پر ہے — آپ صرف اتنا ادا کرتے ہیں جتنا استعمال کرتے ہیں۔ تین سبسکرپشن پلانز دستیاب ہیں: بیسک، اسٹینڈرڈ، اور کمپلیٹ۔'],

      ['title'=>'سبسکرپشن پلانز اور قیمت','points'=>[
        '<strong>بیسک — ۱۰ روپے/طالب علم/ماہ:</strong> طلبا مینجمنٹ، فیس کلیکشن (آن لائن و آف لائن)، قسطوں میں ادائیگی، داخلہ/منسوخی/منتقلی، ایڈمن ڈیش بورڈ۔',
        '<strong>اسٹینڈرڈ — ۲۰ روپے/طالب علم/ماہ:</strong> بیسک کی تمام سہولیات + حاضری سسٹم، والدین پورٹل، رپورٹ کارڈ، اساتذہ مینجمنٹ، امتحان مینجمنٹ، SMS اطلاعات۔',
        '<strong>کمپلیٹ — ۲۵ روپے/طالب علم/ماہ:</strong> اسٹینڈرڈ کی تمام سہولیات + لائبریری مینجمنٹ، ٹرانسپورٹ مینجمنٹ، دیگر اسٹاف مینجمنٹ، تنخواہ سسٹم، جدید تجزیات، پرائیوریٹی سپورٹ، اور تمام مستقبل کی خصوصیات۔',
        'پلان کو کسی بھی وقت اپ گریڈ کیا جا سکتا ہے۔ ڈاؤن گریڈ اگلے بلنگ سائیکل سے نافذ ہوگا۔',
        'مثال (اسٹینڈرڈ): ۱۰۰ طلبا = ۲،۰۰۰ روپے/ماہ | ۳۰۰ طلبا = ۶،۰۰۰ روپے/ماہ۔',
      ]],

      ['title'=>'یکمشت سیٹ اپ فیس','points'=>[
        'تمام پلانز پر یکمشت انسٹالیشن اور آن بورڈنگ فیس لاگو ہوتی ہے۔',
        'اپریل ۲۰۲۵ آفر: ۹،۹۹۹ روپے (باقاعدہ قیمت: ۲۱،۵۰۰ روپے)۔',
        'سیٹ اپ فیس میں سسٹم کنفیگریشن، ڈیٹا مائیگریشن اور ابتدائی تربیت شامل ہے۔',
        'سیٹ اپ فیس ماہانہ سبسکرپشن سے الگ ہے۔',
        'کام شروع ہونے کے بعد سیٹ اپ فیس واپس نہیں کی جائے گی۔',
      ]],

      ['title'=>'مفت آزمائش','points'=>[
        'نئے اسکولوں کے لیے مفت آزمائشی مدت دستیاب ہے۔',
        'آزمائش کے دوران منتخب پلان کی تمام سہولیات تک مکمل رسائی ہوگی۔',
        'آزمائش کے دوران ادائیگی ضروری نہیں۔',
        'آزمائش کے بعد سبسکرپشن فعال کرنی ہوگی۔',
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

      ['title'=>'کیا شامل نہیں ہے','points'=>[
        'اسکول ویب سائٹ (الگ پلان کے طور پر دستیاب)۔',
        'بائیو میٹرک ہارڈ ویئر (کلائنٹ خود انتظام کرے)۔',
        'کسٹم موبائل ایپ ڈویلپمنٹ۔',
        'الگ معاہدے کے بغیر تھرڈ پارٹی پیمنٹ گیٹ وے۔',
        'پرنٹڈ رپورٹس یا جسمانی دستاویزات۔',
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
        'اگلی بلنگ تاریخ سے ۷ دن پہلے واٹس ایپ پر منسوخی درخواست ضروری ہے۔',
        'بل ہو چکے جزوی مہینوں کی واپسی نہیں ہوگی۔',
        'منسوخی پر ڈیٹا ۳۰ دن تک محفوظ رہے گا۔',
        'ادائیگی ۷ دن سے زیادہ تاخیر پر رسائی معطل ہو سکتی ہے۔',
      ]],

      ['title'=>'سپورٹ پالیسی','points'=>[
        'سپورٹ واٹس ایپ کے ذریعے (پیر تا ہفتہ، صبح ۱۰ تا شام ۶ IST) دستیاب ہے۔',
        'جواب کا وقت ۲۴ گھنٹوں کے اندر۔',
        'اہم مسائل ۴ سے ۸ گھنٹوں میں حل۔',
        'کمپلیٹ پلان کے گاہکوں کو پرائیوریٹی سپورٹ ملتی ہے۔',
        'تمام پلانز میں آن بورڈنگ رہنمائی شامل ہے۔',
      ]],

      ['title'=>'حاکم شرائط','text'=>'یہ شرائط بھارتی قانون کے تحت ہیں۔ کسی بھی تنازع کو پہلے باہمی گفتگو سے حل کیا جائے گا۔ اسکوزی ۳۰ دن کی پیشگی اطلاع کے ساتھ ان شرائط کو کسی بھی وقت اپ ڈیٹ کرنے کا حق رکھتا ہے۔'],
    ],

    /* ====== HINDI ====== */
    'hi' => [
      ['title'=>'सेवा का अवलोकन','text'=>'Schoozie ERP भारतीय स्कूलों, मदरसों और सभी प्रकार के शैक्षणिक संस्थानों के लिए एक क्लाउड-आधारित स्कूल प्रबंधन प्लेटफॉर्म है। मूल्य प्रति सक्रिय छात्र, प्रति माह है — आप केवल उतना भुगतान करते हैं जितना उपयोग करते हैं। तीन सदस्यता योजनाएं उपलब्ध हैं: बेसिक, स्टैंडर्ड और कम्पलीट।'],

      ['title'=>'सदस्यता योजनाएं और मूल्य निर्धारण','points'=>[
        '<strong>बेसिक — Rs. 10/छात्र/माह:</strong> छात्र प्रबंधन, शुल्क संग्रह (ऑनलाइन व ऑफलाइन), किस्त भुगतान, प्रवेश/रद्दीकरण/स्थानांतरण, एडमिन डैशबोर्ड।',
        '<strong>स्टैंडर्ड — Rs. 20/छात्र/माह:</strong> बेसिक की सभी सुविधाएं + उपस्थिति प्रणाली, अभिभावक पोर्टल, रिपोर्ट कार्ड, शिक्षक प्रबंधन, परीक्षा प्रबंधन, SMS सूचनाएं।',
        '<strong>कम्पलीट — Rs. 25/छात्र/माह:</strong> स्टैंडर्ड की सभी सुविधाएं + पुस्तकालय प्रबंधन, परिवहन प्रबंधन, अन्य स्टाफ प्रबंधन, वेतन प्रणाली, उन्नत विश्लेषण, प्राथमिकता सहायता और सभी भविष्य की सुविधाएं।',
        'किसी भी समय प्लान अपग्रेड किया जा सकता है। डाउनग्रेड अगले बिलिंग चक्र से प्रभावी होगा।',
        'उदाहरण (स्टैंडर्ड): 100 छात्र = Rs. 2,000/माह | 300 छात्र = Rs. 6,000/माह।',
      ]],

      ['title'=>'एकमुश्त सेटअप शुल्क','points'=>[
        'सभी प्लानों पर एकमुश्त इंस्टॉलेशन और ऑनबोर्डिंग शुल्क लागू होता है।',
        'अप्रैल 2025 ऑफर: Rs. 9,999 (नियमित मूल्य: Rs. 21,500)।',
        'सेटअप शुल्क में सिस्टम कॉन्फ़िगरेशन, डेटा माइग्रेशन सहायता और प्रारंभिक प्रशिक्षण शामिल है।',
        'सेटअप शुल्क मासिक सदस्यता से अलग है।',
        'काम शुरू होने के बाद सेटअप शुल्क वापस नहीं होगा।',
      ]],

      ['title'=>'मुफ्त परीक्षण','points'=>[
        'नए स्कूलों के लिए मुफ्त परीक्षण अवधि उपलब्ध है।',
        'परीक्षण के दौरान चुने गए प्लान की सभी सुविधाओं तक पूर्ण पहुंच होगी।',
        'परीक्षण के दौरान कोई भुगतान आवश्यक नहीं।',
        'परीक्षण के बाद सदस्यता सक्रिय करनी होगी।',
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

      ['title'=>'क्या शामिल नहीं है','points'=>[
        'स्कूल वेबसाइट (अलग प्लान के रूप में उपलब्ध)।',
        'बायोमेट्रिक हार्डवेयर (क्लाइंट स्वयं व्यवस्था करे)।',
        'कस्टम मोबाइल ऐप विकास।',
        'अलग समझौते के बिना थर्ड-पार्टी भुगतान गेटवे।',
        'मुद्रित रिपोर्ट या भौतिक दस्तावेज़।',
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
        'अगली बिलिंग तिथि से कम से कम 7 दिन पहले WhatsApp पर रद्दीकरण अनुरोध आवश्यक।',
        'पहले से बिल किए गए आंशिक महीनों की कोई धनवापसी नहीं।',
        'रद्दीकरण पर डेटा 30 दिन सुरक्षित रहेगा।',
        '7 दिन से अधिक भुगतान बकाया होने पर पहुंच निलंबित हो सकती है।',
      ]],

      ['title'=>'सहायता नीति','points'=>[
        'सहायता WhatsApp के माध्यम से (सोम-शनि, सुबह 10 - शाम 6 IST) उपलब्ध है।',
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
