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

/* Comparison rows: [label, static_value, dynamic_value]
   value can be: 'yes' | 'no' | 'partial' | a string */
$comparison = [
  ['Professional school website',     'yes', 'yes'],
  ['Mobile responsive design',        'yes', 'yes'],
  ['Photo gallery, news, notices',    'yes', 'yes'],
  ['Admissions inquiry form',         'yes', 'yes'],
  ['1 year hosting included',         'yes', 'yes'],
  ['Domain setup assistance',         'yes', 'yes'],
  ['Who manages content?',            'Schoozie team', 'You manage it yourself'],
  ['Admin login panel',               'no',  'yes'],
  ['Update news & photos yourself',   'no',  'yes'],
  ['Post notices anytime',            'no',  'yes'],
  ['Admin training & onboarding call','no',  'yes'],
  ['Time to go live',                 '5-10 minutes after content', 'Few hours (admin credentials)'],
];

/* T&C data - preserved verbatim from static-web.php and dynamic-web.php */
$tc_static = [
  'en' => [
    ['title'=>'What We Do','text'=>'We design, build, and publish a professional website for your school. You share your logo, photos, school name, and basic information with us - we handle everything else. All content is managed by the Schoozie team on your behalf.'],
    ['title'=>'Pricing','points'=>[
      $offer_active
        ? '<strong>Offer Price: Rs. '.$static_offer_price.'</strong> (one-time setup) - Save Rs. '.$static_saving.' this '.$offer_month.'.'
        : '<strong>Setup Fee: Rs. '.$static_regular_price.'</strong> (one-time).',
      'Annual renewal from Year 2: <strong>Rs. '.$static_renewal_price.'/year</strong>.',
      'Domain registration and renewal charges are billed separately.',
      $offer_active ? 'Offer valid only for payments made during '.$offer_month.'. Price locks in for life once paid.' : '',
    ]],
    ['title'=>'Payment','points'=>[
      'Full payment is required before work begins.',
      'Accepted via UPI, bank transfer, or cash deposit.',
      'Work begins within a few hours of confirmed payment.',
    ]],
    ['title'=>'What Is Included','points'=>[
      'Custom-designed school website (10+ pages).',
      'Mobile-friendly, responsive layout.',
      'School name, logo, photo gallery, and contact page.',
      'Admissions inquiry form.',
      'News and announcements section.',
      'First year of web hosting.',
      'Domain setup and configuration (you purchase the domain - we set it up).',
    ]],
    ['title'=>'What Is NOT Included','points'=>[
      'Domain name purchase or annual renewal.',
      'Student or fee management features.',
      'Admin login panel for the school.',
      'Custom email accounts.',
      'Third-party integrations (payment gateways, maps, etc.) unless agreed separately.',
    ]],
    ['title'=>'Content Updates','points'=>[
      'Up to 2 free content update requests per month.',
      'Submit update requests via WhatsApp or email with clear details of what needs to change.',
      'Additional updates beyond 2/month: Rs. 300 per update.',
      'Updates applied within 2-3 working days.',
    ]],
    ['title'=>'Delivery','text'=>'Once we receive all your content (logo, photos, school information), your website is ready within 5-10 minutes. We\'ll send you the live link on WhatsApp the moment it\'s done.'],
    ['title'=>'Hosting & Renewal','points'=>[
      'First year of hosting is included in the setup fee.',
      'Annual renewal from Year 2: <strong>Rs. '.$static_renewal_price.'/year</strong> (domain excluded).',
      'You will be notified 30 days before renewal is due.',
      'Schoozie reserves the right to take down the website if hosting is not renewed.',
    ]],
    ['title'=>'Ownership','points'=>[
      'Content you provide (text, photos) remains your property.',
      'Website design, template, and code remain the property of Schoozie.',
      'Schoozie may display the website in its portfolio unless you request otherwise.',
    ]],
    ['title'=>'Refund Policy','points'=>[
      'No refund once design work has begun.',
      'Full refund available if requested within 24 hours of payment and work has not started.',
      'Schoozie may cancel without refund if false or inappropriate content is provided.',
    ]],
    ['title'=>'Support','text'=>'Support available via WhatsApp and email during business hours (Mon-Sat, 10am-5pm IST). Response within 24 hours.'],
    ['title'=>'Terms','text'=>'These terms are governed under Indian law. Any dispute will first be resolved through mutual discussion. Schoozie may update these terms at any time with prior notice via WhatsApp or email.'],
  ],
  'ur' => [
    ['title'=>'ہم کیا کرتے ہیں','text'=>'ہم آپ کے اسکول کے لیے ایک پیشہ ورانہ ویب سائٹ ڈیزائن، تیار اور شائع کرتے ہیں۔ آپ ہمیں اپنا لوگو، تصاویر، اسکول کا نام اور بنیادی معلومات دیں - باقی سب ہم سنبھالتے ہیں۔'],
    ['title'=>'قیمت','points'=>[
      $offer_active
        ? '<strong>آفر قیمت: '.str_replace(',','،',$static_offer_price).' روپے</strong> (یکمشت سیٹ اپ) - اس '.$offer_month.' میں '.str_replace(',','،',$static_saving).' روپے کی بچت۔'
        : '<strong>سیٹ اپ فیس: '.str_replace(',','،',$static_regular_price).' روپے</strong> (یکمشت)۔',
      'دوسرے سال سے سالانہ تجدید: <strong>'.str_replace(',','،',$static_renewal_price).' روپے/سال</strong>۔',
      'ڈومین رجسٹریشن اور تجدید کے اخراجات الگ سے بل کیے جاتے ہیں۔',
      $offer_active ? 'آفر صرف '.$offer_month.' میں کی گئی ادائیگیوں کے لیے ہے۔ ایک بار ادائیگی کے بعد قیمت ہمیشہ کے لیے لاک ہو جاتی ہے۔' : '',
    ]],
    ['title'=>'ادائیگی','points'=>[
      'کام شروع ہونے سے پہلے مکمل ادائیگی ضروری ہے۔',
      'UPI، بینک ٹرانسفر یا نقد جمع کے ذریعے قبول۔',
      'ادائیگی کی تصدیق کے چند گھنٹوں کے اندر کام شروع ہو جاتا ہے۔',
    ]],
    ['title'=>'کیا شامل ہے','points'=>[
      'حسب ضرورت اسکول ویب سائٹ ڈیزائن (۱۰+ صفحات)۔',
      'موبائل فرینڈلی، ریسپانسیو لے آؤٹ۔',
      'اسکول کا نام، لوگو، فوٹو گیلری اور رابطہ صفحہ۔',
      'داخلہ انکوائری فارم۔',
      'خبریں اور اعلانات کا سیکشن۔',
      'پہلے سال کی ویب ہوسٹنگ۔',
      'ڈومین سیٹ اپ اور کنفیگریشن (آپ ڈومین خریدیں - ہم سیٹ کریں)۔',
    ]],
    ['title'=>'کیا شامل نہیں ہے','points'=>[
      'ڈومین نام کی خریداری یا سالانہ تجدید۔',
      'طلبا یا فیس مینجمنٹ کی سہولیات۔',
      'اسکول کے لیے ایڈمن لاگ ان پینل۔',
      'کسٹم ای میل اکاؤنٹس۔',
      'تھرڈ پارٹی انٹیگریشن الگ معاہدے کے بغیر۔',
    ]],
    ['title'=>'مواد کی اپڈیٹ','points'=>[
      'ہر ماہ ۲ مفت مواد اپڈیٹ کی درخواستیں شامل ہیں۔',
      'اپڈیٹ کی درخواستیں واٹس ایپ یا ای میل کے ذریعے واضح تفصیلات کے ساتھ جمع کرائیں۔',
      'ماہانہ ۲ سے زیادہ اپڈیٹس کے لیے فی اپڈیٹ ۳۰۰ روپے چارج ہوگا۔',
      'اپڈیٹس ۲ سے ۳ کاری دنوں میں لاگو کی جائیں گی۔',
    ]],
    ['title'=>'ڈیلیوری','text'=>'ایک بار جب ہمیں آپ کا تمام مواد (لوگو، تصاویر، اسکول کی معلومات) مل جائے، آپ کی ویب سائٹ ۵ سے ۱۰ منٹ کے اندر تیار ہو جاتی ہے۔ ہم فوری طور پر واٹس ایپ پر لائیو لنک بھیجیں گے۔'],
    ['title'=>'ہوسٹنگ اور تجدید','points'=>[
      'پہلے سال کی ہوسٹنگ سیٹ اپ فیس میں شامل ہے۔',
      'دوسرے سال سے سالانہ تجدید: <strong>'.str_replace(',','،',$static_renewal_price).' روپے/سال</strong> (ڈومین کے بغیر)۔',
      'تجدید کی تاریخ سے ۳۰ دن پہلے آپ کو مطلع کیا جائے گا۔',
      'ہوسٹنگ تجدید نہ ہونے پر اسکوزی ویب سائٹ ہٹانے کا حق رکھتا ہے۔',
    ]],
    ['title'=>'ملکیت','points'=>[
      'آپ کا فراہم کردہ مواد (متن، تصاویر) آپ کی ملکیت رہتا ہے۔',
      'ویب سائٹ ڈیزائن، ٹیمپلیٹ اور کوڈ اسکوزی کی ملکیت ہے۔',
      'اسکوزی آپ کی اجازت کے بغیر ویب سائٹ اپنے پورٹ فولیو میں دکھا سکتا ہے۔',
    ]],
    ['title'=>'واپسی کی پالیسی','points'=>[
      'ڈیزائن کام شروع ہونے کے بعد کوئی واپسی نہیں ہوگی۔',
      'ادائیگی کے ۲۴ گھنٹوں کے اندر اور کام شروع نہ ہونے پر مکمل واپسی ممکن ہے۔',
      'غلط یا نامناسب مواد فراہم کرنے پر اسکوزی بغیر واپسی کے سروس منسوخ کر سکتا ہے۔',
    ]],
    ['title'=>'سپورٹ','text'=>'سپورٹ واٹس ایپ اور ای میل کے ذریعے کاروباری اوقات (پیر تا ہفتہ، صبح ۱۰ تا شام ۵ IST) میں دستیاب ہے۔ جواب کا وقت ۲۴ گھنٹوں کے اندر۔'],
    ['title'=>'شرائط','text'=>'یہ شرائط بھارتی قانون کے تحت ہیں۔ کسی بھی تنازع کو پہلے باہمی گفتگو سے حل کیا جائے گا۔ اسکوزی پیشگی اطلاع دے کر ان شرائط کو کسی بھی وقت اپ ڈیٹ کرنے کا حق رکھتا ہے۔'],
  ],
  'hi' => [
    ['title'=>'हम क्या करते हैं','text'=>'हम आपके स्कूल के लिए एक प्रोफेशनल वेबसाइट डिज़ाइन, बनाते और लाइव करते हैं। आप हमें अपना लोगो, फोटो, स्कूल का नाम और बुनियादी जानकारी दें - बाकी सब हम संभालते हैं।'],
    ['title'=>'मूल्य निर्धारण','points'=>[
      $offer_active
        ? '<strong>ऑफर मूल्य: Rs. '.$static_offer_price.'</strong> (एकमुश्त सेटअप) - इस '.$offer_month.' में Rs. '.$static_saving.' की बचत।'
        : '<strong>सेटअप शुल्क: Rs. '.$static_regular_price.'</strong> (एकमुश्त)।',
      'दूसरे वर्ष से वार्षिक नवीनीकरण: <strong>Rs. '.$static_renewal_price.'/वर्ष</strong>।',
      'डोमेन पंजीकरण और नवीनीकरण शुल्क अलग से बिल किए जाते हैं।',
      $offer_active ? 'ऑफर केवल '.$offer_month.' में किए गए भुगतान के लिए मान्य है। एक बार भुगतान होने पर कीमत जीवन भर के लिए लॉक हो जाती है।' : '',
    ]],
    ['title'=>'भुगतान','points'=>[
      'काम शुरू होने से पहले पूरा भुगतान आवश्यक है।',
      'UPI, बैंक ट्रांसफर या नकद जमा द्वारा स्वीकार।',
      'भुगतान की पुष्टि के कुछ घंटों के भीतर काम शुरू हो जाता है।',
    ]],
    ['title'=>'क्या शामिल है','points'=>[
      'कस्टम-डिज़ाइन की गई स्कूल वेबसाइट (10+ पृष्ठ)।',
      'मोबाइल-फ्रेंडली, रिस्पॉन्सिव लेआउट।',
      'स्कूल का नाम, लोगो, फोटो गैलरी और संपर्क पृष्ठ।',
      'प्रवेश जांच फॉर्म।',
      'समाचार और घोषणाएं अनुभाग।',
      'पहले वर्ष की वेब होस्टिंग।',
      'डोमेन सेटअप (आप डोमेन खरीदें - हम सेट करें)।',
    ]],
    ['title'=>'क्या शामिल नहीं है','points'=>[
      'डोमेन नाम की खरीद या वार्षिक नवीनीकरण।',
      'छात्र या शुल्क प्रबंधन सुविधाएं।',
      'स्कूल के लिए एडमिन लॉगिन पैनल।',
      'कस्टम ईमेल खाते।',
      'अलग समझौते के बिना थर्ड-पार्टी एकीकरण।',
    ]],
    ['title'=>'सामग्री अपडेट','points'=>[
      'प्रति माह 2 मुफ्त सामग्री अपडेट अनुरोध शामिल हैं।',
      'अपडेट अनुरोध WhatsApp या ईमेल के माध्यम से स्पष्ट विवरण के साथ भेजें।',
      'प्रति माह 2 से अधिक अपडेट के लिए Rs. 300 प्रति अपडेट।',
      'अपडेट 2-3 कार्य दिवसों के भीतर लागू किए जाएंगे।',
    ]],
    ['title'=>'डिलीवरी','text'=>'एक बार जब हमें आपकी सारी सामग्री (लोगो, फोटो, स्कूल की जानकारी) मिल जाए, तो आपकी वेबसाइट 5-10 मिनट के अंदर तैयार हो जाती है। हम तुरंत WhatsApp पर लाइव लिंक भेजेंगे।'],
    ['title'=>'होस्टिंग और नवीनीकरण','points'=>[
      'पहले वर्ष की होस्टिंग सेटअप शुल्क में शामिल है।',
      'दूसरे वर्ष से वार्षिक नवीनीकरण: <strong>Rs. '.$static_renewal_price.'/वर्ष</strong> (डोमेन शुल्क अलग)।',
      'नवीनीकरण से 30 दिन पहले आपको सूचित किया जाएगा।',
      'नवीनीकरण न होने पर Schoozie वेबसाइट हटाने का अधिकार रखता है।',
    ]],
    ['title'=>'स्वामित्व','points'=>[
      'आपकी प्रदान की गई सामग्री (पाठ, फ़ोटो) आपकी संपत्ति रहती है।',
      'वेबसाइट डिज़ाइन, टेम्पलेट और कोड Schoozie की संपत्ति है।',
      'Schoozie वेबसाइट को अपने पोर्टफोलियो में दिखा सकता है जब तक आप आपत्ति न करें।',
    ]],
    ['title'=>'धनवापसी नीति','points'=>[
      'डिज़ाइन कार्य शुरू होने के बाद कोई धनवापसी नहीं।',
      'भुगतान के 24 घंटों के भीतर और कार्य शुरू न होने पर पूर्ण धनवापसी संभव है।',
      'गलत या अनुचित सामग्री प्रदान करने पर Schoozie बिना धनवापसी के सेवा रद्द कर सकता है।',
    ]],
    ['title'=>'सहायता','text'=>'सहायता WhatsApp और ईमेल के माध्यम से व्यावसायिक घंटों (सोम-शनि, सुबह 10 - शाम 5 IST) में उपलब्ध है। प्रतिक्रिया समय 24 घंटों के भीतर।'],
    ['title'=>'नियम','text'=>'ये शर्तें भारतीय कानून के तहत हैं। किसी भी विवाद को पहले आपसी बातचीत से सुलझाया जाएगा। Schoozie पूर्व सूचना के साथ इन शर्तों को कभी भी अपडेट करने का अधिकार रखता है।'],
  ],
];

$tc_dynamic = [
  'en' => [
    ['title'=>'Service Overview','text'=>'Under this plan, Schoozie will design, develop, and deliver a fully dynamic school website with a dedicated admin login panel. You will be able to manage your own website content - including news, events, photos, staff profiles, and admissions - without requiring any technical knowledge.'],
    ['title'=>'Pricing','points'=>[
      $offer_active
        ? '<strong>Offer Price: Rs. '.$dynamic_offer_price.'</strong> (one-time setup) - Save Rs. '.$dynamic_saving.' this '.$offer_month.'.'
        : '<strong>Setup Fee: Rs. '.$dynamic_regular_price.'</strong> (one-time).',
      'Annual renewal from Year 2: <strong>Rs. '.$dynamic_renewal_price.'/year</strong>.',
      'Domain registration and renewal charges are billed separately.',
      $offer_active ? 'Offer valid only for payments made during '.$offer_month.'. Price locks in for life once paid.' : '',
    ]],
    ['title'=>'Payment Terms','points'=>[
      'Full payment is required before credentials are issued.',
      'Accepted via UPI, bank transfer, or cash deposit.',
      'Admin panel credentials delivered within a few hours of confirmed payment.',
    ]],
    ['title'=>'What Is Included','points'=>[
      'Ready-to-use dynamic school website - no content needed from you upfront.',
      'Admin panel credentials delivered directly after payment.',
      'You manage everything yourself - news, photos, notices, events, staff profiles.',
      'Mobile-friendly layout - manage from any phone or laptop.',
      'Receive and view admissions inquiries online.',
      'First year of web hosting included.',
      'First-time admin panel setup assistance from our team.',
      'Onboarding call - get started with confidence.',
    ]],
    ['title'=>'What Is NOT Included','points'=>[
      'Domain name purchase or annual renewal.',
      'Fee collection or ERP/student management features.',
      'Custom email accounts.',
      'Third-party integrations unless agreed separately.',
      'Ongoing content management by Schoozie (client manages own content).',
    ]],
    ['title'=>'Admin Panel & Credentials','points'=>[
      'A unique admin username and password will be created for your school.',
      'The client is fully responsible for keeping credentials secure.',
      'Schoozie will NOT be responsible for unauthorized access due to password sharing.',
      'Password reset assistance is available on request.',
    ]],
    ['title'=>'Delivery Timeline','text'=>'Make your payment - that\'s it. No content, no photos, no information needed from you upfront. Within a few hours, we send your admin panel credentials directly. Our team assists you with the first-time setup, and from that point, you\'re fully in control of your website.'],
    ['title'=>'Hosting & Renewal','points'=>[
      'First year of hosting is included in the package price.',
      'Annual renewal from Year 2: <strong>Rs. '.$dynamic_renewal_price.'/year</strong> (domain excluded).',
      'Client will be notified at least 30 days before hosting expiry.',
      'Schoozie reserves the right to take down the website if hosting fees are not renewed.',
    ]],
    ['title'=>'Ownership Rights','points'=>[
      'Content uploaded by the client (text, photos) remains the client\'s property.',
      'Website design, framework, and code remain the property of Schoozie.',
      'The client may not resell, transfer, or copy the website design for any third party.',
    ]],
    ['title'=>'Cancellation & Refund Policy','points'=>[
      'No refund after design or development work has commenced.',
      'Full refund may be requested within 24 hours of payment if work has not yet started.',
      'Schoozie may cancel the service without refund if client provides inappropriate, illegal, or false content.',
    ]],
    ['title'=>'Support Policy','points'=>[
      'Technical support available via call or email (Mon-Sat, 10am-5pm IST).',
      'Response time within 24 hours on working days.',
      'Basic panel usage support is included for 30 days post-launch.',
    ]],
    ['title'=>'Governing Terms','text'=>'These terms are governed under Indian law. Disputes will first be handled through mutual discussion. Schoozie reserves the right to update these terms at any time with prior notice via email or phone.'],
  ],
  'ur' => [
    ['title'=>'خدمت کا جائزہ','text'=>'اس پلان کے تحت، اسکوزی آپ کے اسکول کے لیے ایک مکمل ڈائنامک ویب سائٹ تیار کرے گا جس میں ایک مخصوص ایڈمن لاگ ان پینل شامل ہوگا۔ آپ خود اپنی ویب سائٹ کا مواد - خبریں، تقریبات، تصاویر، اسٹاف پروفائل اور داخلے - بغیر کسی تکنیکی علم کے منظم کر سکیں گے۔'],
    ['title'=>'قیمت','points'=>[
      $offer_active
        ? '<strong>آفر قیمت: '.str_replace(',','،',$dynamic_offer_price).' روپے</strong> (یکمشت سیٹ اپ) - اس '.$offer_month.' میں '.str_replace(',','،',$dynamic_saving).' روپے کی بچت۔'
        : '<strong>سیٹ اپ فیس: '.str_replace(',','،',$dynamic_regular_price).' روپے</strong> (یکمشت)۔',
      'دوسرے سال سے سالانہ تجدید: <strong>'.str_replace(',','،',$dynamic_renewal_price).' روپے/سال</strong>۔',
      'ڈومین رجسٹریشن اور تجدید کے اخراجات الگ سے بل کیے جاتے ہیں۔',
      $offer_active ? 'آفر صرف '.$offer_month.' میں کی گئی ادائیگیوں کے لیے ہے۔ ایک بار ادائیگی کے بعد قیمت ہمیشہ کے لیے لاک ہو جاتی ہے۔' : '',
    ]],
    ['title'=>'ادائیگی کی شرائط','points'=>[
      'کام شروع ہونے سے پہلے مکمل ادائیگی ضروری ہے۔',
      'UPI، بینک ٹرانسفر یا نقد جمع کے ذریعے قبول۔',
      'ادائیگی کی تصدیق کے چند گھنٹوں کے اندر ایڈمن پینل کی اسناد براہ راست بھیجی جائیں گی۔',
      'ڈومین رجسٹریشن اور تجدید کے اخراجات شامل نہیں ہیں۔',
    ]],
    ['title'=>'کیا شامل ہے','points'=>[
      'استعمال کے لیے تیار ڈائنامک اسکول ویب سائٹ - پہلے سے کوئی مواد فراہم کرنے کی ضرورت نہیں۔',
      'ادائیگی کے بعد ایڈمن پینل کی اسناد براہ راست فراہم کی جائیں گی۔',
      'سب کچھ آپ خود منظم کریں - خبریں، تصاویر، نوٹسز، تقریبات، اسٹاف پروفائل۔',
      'موبائل فرینڈلی لے آؤٹ - کسی بھی فون یا لیپ ٹاپ سے منظم کریں۔',
      'داخلہ انکوائریاں آن لائن موصول کریں اور دیکھیں۔',
      'پہلے سال کی ویب ہوسٹنگ شامل۔',
      'ہماری ٹیم کی طرف سے پہلی بار ایڈمن پینل سیٹ اپ میں مدد۔',
      'آن بورڈنگ کال - اعتماد کے ساتھ شروع کریں۔',
    ]],
    ['title'=>'کیا شامل نہیں ہے','points'=>[
      'ڈومین نام کی خریداری یا سالانہ تجدید۔',
      'فیس کلیکشن یا ERP/طلبا مینجمنٹ کی سہولیات۔',
      'کسٹم ای میل اکاؤنٹس۔',
      'تھرڈ پارٹی انٹیگریشن الگ معاہدے کے بغیر۔',
      'اسکوزی کی طرف سے جاری مواد کا انتظام (کلائنٹ خود مواد منظم کرتا ہے)۔',
    ]],
    ['title'=>'ایڈمن پینل اور اسناد','points'=>[
      'آپ کے اسکول کے لیے ایک منفرد ایڈمن یوزر نیم اور پاس ورڈ بنایا جائے گا۔',
      'کلائنٹ اسناد کو محفوظ رکھنے کا مکمل ذمہ دار ہے۔',
      'پاس ورڈ شیئر کرنے کی وجہ سے غیر مجاز رسائی کے لیے اسکوزی ذمہ دار نہیں ہوگا۔',
      'پاس ورڈ ری سیٹ کی مدد درخواست پر دستیاب ہے۔',
    ]],
    ['title'=>'ڈیلیوری ٹائم لائن','text'=>'ادائیگی کریں - بس اتنا کافی ہے۔ پہلے سے کوئی مواد، تصاویر یا معلومات کی ضرورت نہیں۔ چند گھنٹوں کے اندر ہم آپ کی ایڈمن پینل اسناد براہ راست بھیجیں گے۔ ہماری ٹیم پہلی بار سیٹ اپ میں مدد کرے گی، اور اس کے بعد آپ اپنی ویب سائٹ کے مکمل کنٹرول میں ہوں گے۔'],
    ['title'=>'ہوسٹنگ اور تجدید','points'=>[
      'پہلے سال کی ہوسٹنگ پیکج کی قیمت میں شامل ہے۔',
      'دوسرے سال سے سالانہ تجدید: <strong>'.str_replace(',','،',$dynamic_renewal_price).' روپے/سال</strong> (ڈومین کے بغیر)۔',
      'ہوسٹنگ میعاد ختم ہونے سے کم از کم ۳۰ دن پہلے کلائنٹ کو مطلع کیا جائے گا۔',
      'اگر ہوسٹنگ فیس تجدید نہ ہو تو اسکوزی ویب سائٹ ہٹانے کا حق رکھتا ہے۔',
    ]],
    ['title'=>'ملکیت کے حقوق','points'=>[
      'کلائنٹ کا اپ لوڈ کردہ مواد (متن، تصاویر) کلائنٹ کی ملکیت رہتا ہے۔',
      'ویب سائٹ ڈیزائن، فریم ورک اور کوڈ اسکوزی کی ملکیت رہتے ہیں۔',
      'کلائنٹ کسی تیسرے فریق کے لیے ویب سائٹ ڈیزائن کو فروخت، منتقل یا کاپی نہیں کر سکتا۔',
    ]],
    ['title'=>'منسوخی اور واپسی کی پالیسی','points'=>[
      'ڈیزائن یا ڈویلپمنٹ کام شروع ہونے کے بعد کوئی واپسی نہیں ہوگی۔',
      'اگر کام ابھی شروع نہیں ہوا تو ادائیگی کے ۲۴ گھنٹوں کے اندر مکمل واپسی کی درخواست کی جا سکتی ہے۔',
      'اگر کلائنٹ نامناسب، غیر قانونی یا غلط مواد فراہم کرے تو اسکوزی بغیر واپسی کے سروس منسوخ کر سکتا ہے۔',
    ]],
    ['title'=>'سپورٹ پالیسی','points'=>[
      'تکنیکی سپورٹ کال یا ای میل کے ذریعے (پیر تا ہفتہ، صبح ۱۰ بجے تا شام ۵ بجے IST) دستیاب ہے۔',
      'کاری دنوں میں جواب کا وقت ۲۴ گھنٹوں کے اندر ہے۔',
      'لانچ کے بعد ۳۰ دنوں تک بنیادی پینل استعمال کی سپورٹ شامل ہے۔',
    ]],
    ['title'=>'حاکم شرائط','text'=>'یہ شرائط بھارتی قانون کے تحت ہیں۔ تنازعات کو پہلے باہمی گفتگو سے حل کیا جائے گا۔ اسکوزی ای میل یا فون کے ذریعے پیشگی اطلاع دے کر ان شرائط کو کسی بھی وقت اپ ڈیٹ کرنے کا حق رکھتا ہے۔'],
  ],
  'hi' => [
    ['title'=>'सेवा का अवलोकन','text'=>'इस प्लान के तहत, Schoozie आपके स्कूल के लिए एक पूरी तरह से डायनामिक वेबसाइट तैयार करेगा जिसमें एक समर्पित एडमिन लॉगिन पैनल शामिल होगा। आप खुद अपनी वेबसाइट की सामग्री - समाचार, कार्यक्रम, फ़ोटो, स्टाफ प्रोफाइल और प्रवेश - बिना किसी तकनीकी ज्ञान के प्रबंधित कर सकेंगे।'],
    ['title'=>'मूल्य निर्धारण','points'=>[
      $offer_active
        ? '<strong>ऑफर मूल्य: Rs. '.$dynamic_offer_price.'</strong> (एकमुश्त सेटअप) - इस '.$offer_month.' में Rs. '.$dynamic_saving.' की बचत।'
        : '<strong>सेटअप शुल्क: Rs. '.$dynamic_regular_price.'</strong> (एकमुश्त)।',
      'दूसरे वर्ष से वार्षिक नवीनीकरण: <strong>Rs. '.$dynamic_renewal_price.'/वर्ष</strong>।',
      'डोमेन पंजीकरण और नवीनीकरण शुल्क अलग से बिल किए जाते हैं।',
      $offer_active ? 'ऑफर केवल '.$offer_month.' में किए गए भुगतान के लिए मान्य है। एक बार भुगतान होने पर कीमत जीवन भर के लिए लॉक हो जाती है।' : '',
    ]],
    ['title'=>'भुगतान की शर्तें','points'=>[
      'काम शुरू होने से पहले पूरा भुगतान आवश्यक है।',
      'UPI, बैंक ट्रांसफर या नकद जमा द्वारा स्वीकार।',
      'भुगतान की पुष्टि के कुछ घंटों के भीतर एडमिन पैनल क्रेडेंशियल सीधे भेजे जाएंगे।',
      'डोमेन पंजीकरण और नवीनीकरण शुल्क शामिल नहीं हैं।',
    ]],
    ['title'=>'क्या शामिल है','points'=>[
      'उपयोग के लिए तैयार डायनामिक स्कूल वेबसाइट - पहले से कोई सामग्री देने की जरूरत नहीं।',
      'भुगतान के बाद एडमिन पैनल क्रेडेंशियल सीधे प्रदान किए जाएंगे।',
      'सब कुछ खुद प्रबंधित करें - समाचार, फोटो, नोटिस, कार्यक्रम, स्टाफ प्रोफाइल।',
      'मोबाइल-फ्रेंडली लेआउट - किसी भी फोन या लैपटॉप से प्रबंधित करें।',
      'प्रवेश जांच ऑनलाइन प्राप्त करें और देखें।',
      'पहले वर्ष की वेब होस्टिंग शामिल।',
      'हमारी टीम द्वारा पहली बार एडमिन पैनल सेटअप में सहायता।',
      'ऑनबोर्डिंग कॉल - आत्मविश्वास के साथ शुरू करें।',
    ]],
    ['title'=>'क्या शामिल नहीं है','points'=>[
      'डोमेन नाम की खरीद या वार्षिक नवीनीकरण।',
      'शुल्क संग्रह या ERP/छात्र प्रबंधन सुविधाएं।',
      'कस्टम ईमेल खाते।',
      'अलग समझौते के बिना थर्ड-पार्टी एकीकरण।',
      'Schoozie द्वारा चल रहे सामग्री प्रबंधन (क्लाइंट खुद सामग्री प्रबंधित करता है)।',
    ]],
    ['title'=>'एडमिन पैनल और क्रेडेंशियल','points'=>[
      'आपके स्कूल के लिए एक अद्वितीय एडमिन यूज़रनेम और पासवर्ड बनाया जाएगा।',
      'क्लाइंट क्रेडेंशियल को सुरक्षित रखने के लिए पूरी तरह जिम्मेदार है।',
      'पासवर्ड साझा करने के कारण अनधिकृत पहुंच के लिए Schoozie जिम्मेदार नहीं होगा।',
      'पासवर्ड रीसेट सहायता अनुरोध पर उपलब्ध है।',
    ]],
    ['title'=>'डिलीवरी समयसीमा','text'=>'भुगतान करें - बस इतना काफी है। पहले से कोई सामग्री, फोटो या जानकारी देने की जरूरत नहीं। कुछ घंटों के भीतर हम आपके एडमिन पैनल क्रेडेंशियल सीधे भेजेंगे। हमारी टीम पहली बार सेटअप में मदद करेगी, और उसके बाद आप अपनी वेबसाइट के पूर्ण नियंत्रण में होंगे।'],
    ['title'=>'होस्टिंग और नवीनीकरण','points'=>[
      'पहले वर्ष की होस्टिंग पैकेज मूल्य में शामिल है।',
      'दूसरे वर्ष से वार्षिक नवीनीकरण शुल्क: <strong>Rs. '.$dynamic_renewal_price.'/वर्ष</strong> (डोमेन शुल्क अलग)।',
      'होस्टिंग समाप्ति से कम से कम 30 दिन पहले क्लाइंट को सूचित किया जाएगा।',
      'यदि होस्टिंग शुल्क नवीनीकृत नहीं किया जाता तो Schoozie वेबसाइट हटाने का अधिकार रखता है।',
    ]],
    ['title'=>'स्वामित्व अधिकार','points'=>[
      'क्लाइंट द्वारा अपलोड की गई सामग्री (पाठ, फ़ोटो) क्लाइंट की संपत्ति रहती है।',
      'वेबसाइट डिज़ाइन, फ्रेमवर्क और कोड Schoozie की संपत्ति रहते हैं।',
      'क्लाइंट किसी तीसरे पक्ष के लिए वेबसाइट डिज़ाइन को बेच, स्थानांतरित या कॉपी नहीं कर सकता।',
    ]],
    ['title'=>'रद्दीकरण और धनवापसी नीति','points'=>[
      'डिज़ाइन या विकास कार्य शुरू होने के बाद कोई धनवापसी नहीं होगी।',
      'यदि कार्य अभी शुरू नहीं हुआ है तो भुगतान के 24 घंटों के भीतर पूर्ण धनवापसी का अनुरोध किया जा सकता है।',
      'यदि क्लाइंट अनुचित, अवैध या गलत सामग्री प्रदान करे तो Schoozie बिना धनवापसी के सेवा रद्द कर सकता है।',
    ]],
    ['title'=>'सहायता नीति','points'=>[
      'तकनीकी सहायता कॉल या ईमेल के माध्यम से (सोम-शनि, सुबह 10 बजे - शाम 5 बजे IST) उपलब्ध है।',
      'कार्य दिवसों पर प्रतिक्रिया समय 24 घंटों के भीतर है।',
      'लॉन्च के बाद 30 दिनों तक बुनियादी पैनल उपयोग सहायता शामिल है।',
    ]],
    ['title'=>'शासी नियम','text'=>'ये शर्तें भारतीय कानून के तहत हैं। विवादों को पहले आपसी बातचीत से सुलझाया जाएगा। Schoozie ईमेल या फोन के माध्यम से पूर्व सूचना देकर इन शर्तों को कभी भी अपडेट करने का अधिकार रखता है।'],
  ],
];


/* helper to render a comparison cell */
function render_cmp_cell($v){
  if($v === 'yes')   return '<span class="cmp-yes"><i class="fa-solid fa-circle-check"></i></span>';
  if($v === 'no')    return '<span class="cmp-no"><i class="fa-solid fa-circle-xmark"></i></span>';
  return '<span class="cmp-text">'.htmlspecialchars($v).'</span>';
}

/* helper to render T&C block with 3-language tabs */
function render_tc($tc_data, $anchor){
  $langs = [
    'en' => ['label'=>'English', 'code'=>'EN', 'dir'=>'ltr'],
    'hi' => ['label'=>'हिन्दी',    'code'=>'HI', 'dir'=>'ltr'],
    'ur' => ['label'=>'اردو',     'code'=>'UR', 'dir'=>'rtl'],
  ];
?>
<div id="terms-<?php echo $anchor; ?>" class="w-terms-block">
  <div class="w-lang-tabs" data-plan="<?php echo $anchor; ?>">
    <?php
    $i = 0;
    foreach($langs as $code => $meta):
      if(!isset($tc_data[$code])) continue;
      if($i++ > 0): ?><span class="w-lang-sep">·</span><?php endif;
    ?>
      <button type="button"
              class="w-lang-tab w-lang-<?php echo $code; ?> <?php echo $code==='en' ? 'active' : ''; ?>"
              data-lang="<?php echo $code; ?>"><?php echo htmlspecialchars($meta['label']); ?></button>
    <?php endforeach; ?>
  </div>

  <?php foreach($langs as $code => $meta): if(!isset($tc_data[$code])) continue; ?>
  <div class="w-lang-panel <?php echo $code==='en' ? 'active' : ''; ?>"
       data-lang="<?php echo $code; ?>"
       dir="<?php echo $meta['dir']; ?>">
    <div class="w-tc-list">
      <?php foreach($tc_data[$code] as $item): ?>
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
<?php
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include '_analytics.php'; ?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>School Websites - Static &amp; Dynamic Plans | Schoozie</title>
<meta name="description" content="Choose between a Schoozie-managed Static school website or a Dynamic website with your own admin panel. Starting at Rs. <?php echo $static_offer_price; ?>. Mobile-responsive, 1-year hosting included.">
<meta name="keywords" content="school website india, static school website, dynamic school website, school website with cms, school website design india, school website admin panel, affordable school website">
<meta name="robots" content="index, follow">
<link rel="canonical" href="https://schoozie.com/websites.php">
<link rel="icon" type="image/png" href="assets/_fonts/logo.png">
<link rel="icon" type="image/svg+xml" href="assets/svg/schoozie-logo.svg">
<meta property="og:type" content="website">
<meta property="og:title" content="School Websites - Static &amp; Dynamic Plans | Schoozie">
<meta property="og:description" content="Choose between a Schoozie-managed Static school website or a Dynamic website with your own admin panel. Starting at Rs. <?php echo $static_offer_price; ?>.">
<meta property="og:url" content="https://schoozie.com/websites.php">
<meta property="og:image" content="https://schoozie.com/assets/og-image.png">
<meta name="twitter:card" content="summary_large_image">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700;900&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Inter:wght@300;400;500;600;700&family=Noto+Sans+Arabic:wght@500;600;700&family=Noto+Sans+Devanagari:wght@400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<link rel="stylesheet" href="css/global.css?v=<?php echo filemtime('css/global.css'); ?>">
<link rel="stylesheet" href="css/index-v2.css?v=<?php echo filemtime('css/index-v2.css'); ?>">
<link rel="stylesheet" href="css/websites.css?v=<?php echo filemtime('css/websites.css'); ?>">
</head>
<body class="page-websites">

<?php $active_page = 'websites'; include '_header.php'; ?>

<!-- COMPACT HERO -->
<section class="w-hero">
  <div class="w-hero-inner">
    <div class="v2-hero-tag"><span class="dot"></span><span>School Websites</span></div>
    <h1>Pick your <span class="grad">school website plan</span></h1>
    <p class="lead">Two simple options. Pick the one that fits how your school works - pricing is clear, and there are no hidden fees.</p>
  </div>
</section>

<!-- PLAN CARDS - Static + Dynamic -->
<section class="w-plans-list" id="plans">
  <div class="w-plans-grid">
    <?php
    $cards = [['static', $plan_static], ['dynamic', $plan_dynamic]];
    foreach($cards as $entry):
      list($anchor, $plan) = $entry;
    ?>
    <article class="w-plan-card" id="<?php echo $anchor; ?>" style="--ac:<?php echo $plan['accent']; ?>">
      <div class="w-plan-head">
        <h3><?php echo htmlspecialchars($plan['name']); ?></h3>
        <p class="w-plan-tag"><?php echo htmlspecialchars($plan['tagline']); ?></p>
      </div>

      <div class="w-plan-pricing">
        <div class="w-price-main">
          <span class="w-price-rs">Rs.</span>
          <span class="w-price-amt"><?php echo $plan['price_now']; ?></span>
          <?php if($plan['price_was']): ?>
            <span class="w-price-was">Rs. <?php echo $plan['price_was']; ?></span>
          <?php endif; ?>
        </div>
        <div class="w-price-note"><?php echo $plan['price_note']; ?></div>
        <?php if(!empty($plan['domain_note'])): ?>
          <div class="w-domain-note">
            <span class="w-dn-icon"><i class="fa-solid fa-globe"></i></span>
            <span class="w-dn-text">
              <strong>Domain not included</strong>
              <em><?php echo $plan['domain_note']; ?></em>
            </span>
          </div>
        <?php endif; ?>
        <?php if($plan['price_save']): ?>
          <span class="w-price-save"><i class="fa-solid fa-tag"></i> Save Rs. <?php echo $plan['price_save']; ?> this <?php echo $offer_month; ?></span>
        <?php endif; ?>
      </div>

      <div class="w-plan-feats">
        <h4>What's included</h4>
        <ul>
          <?php foreach($plan['features'] as $f): ?>
          <li><i class="fa-solid fa-check"></i><span><?php echo htmlspecialchars($f[2]); ?></span></li>
          <?php endforeach; ?>
        </ul>
      </div>

      <div class="w-plan-cta">
        <a href="https://wa.me/<?php echo $contact_whatsapp; ?>?text=<?php echo $plan['wa_text']; ?>" target="_blank" rel="noopener"
           class="w-btn-primary" style="background:linear-gradient(135deg,<?php echo $plan['accent']; ?>,#6f42ff)">
          <i class="fa-brands fa-whatsapp"></i> Get <?php echo htmlspecialchars($plan['name']); ?>
        </a>
        <a href="#terms" class="w-btn-outline">Full terms</a>
      </div>
    </article>
    <?php endforeach; ?>
  </div>
</section>

<!-- COMPARISON TABLE -->
<section class="w-compare" id="compare">
  <div class="v2-plans-head">
    <span class="v2-plans-eyebrow"><i class="fa-solid fa-table-list"></i> Compare</span>
    <h2>Which plan is <span class="grad">right for your school?</span></h2>
    <p>A side-by-side look so you can pick with confidence.</p>
  </div>
  <div class="w-compare-wrap">
    <table class="w-compare-table">
      <thead>
        <tr>
          <th class="cmp-feature">Feature</th>
          <th class="cmp-static">
            <i class="fa-solid fa-desktop" style="color:#00b7ff"></i> Static<br>
            <small>We manage</small>
          </th>
          <th class="cmp-dynamic">
            <i class="fa-solid fa-bolt" style="color:#ff5fcb"></i> Dynamic<br>
            <small>You manage</small>
          </th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($comparison as $row): ?>
        <tr>
          <td class="cmp-feature"><?php echo htmlspecialchars($row[0]); ?></td>
          <td><?php echo render_cmp_cell($row[1]); ?></td>
          <td><?php echo render_cmp_cell($row[2]); ?></td>
        </tr>
        <?php endforeach; ?>
      </tbody>
      <tfoot>
        <tr>
          <td></td>
          <td>
            <a href="#static" class="w-mini-btn" style="background:linear-gradient(135deg,#00b7ff,#0077b6)">View Static</a>
          </td>
          <td>
            <a href="#dynamic" class="w-mini-btn" style="background:linear-gradient(135deg,#ff5fcb,#aa00ff)">View Dynamic</a>
          </td>
        </tr>
      </tfoot>
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

  <div class="w-terms-tabs">
    <button class="w-terms-tab active" data-tab="static"><i class="fa-solid fa-desktop"></i> Static Website</button>
    <button class="w-terms-tab" data-tab="dynamic"><i class="fa-solid fa-bolt"></i> Dynamic Website</button>
  </div>

  <div class="w-terms-panel active" data-panel="static">
    <?php render_tc($tc_static, 'static'); ?>
  </div>
  <div class="w-terms-panel" data-panel="dynamic">
    <?php render_tc($tc_dynamic, 'dynamic'); ?>
  </div>
</section>

<!-- FINAL CTA -->
<section class="v2-final-cta">
  <h2>Not sure which plan? <span class="grad">Let's talk.</span></h2>
  <p>Tell us a bit about your school and we'll recommend the best fit - no pressure, no sales pitch.</p>
  <div class="v2-final-cta-btns">
    <a href="https://wa.me/<?php echo $contact_whatsapp; ?>?text=Hi%2C+I%27d+like+help+picking+a+website+plan+for+my+school." target="_blank" rel="noopener" class="v2-btn-primary">
      <i class="fa-brands fa-whatsapp"></i> Chat on WhatsApp
    </a>
    <a href="<?php echo $demo_url; ?>" target="_blank" rel="noopener" class="v2-btn-outline">
      <i class="fa-solid fa-eye"></i> See Demo Site
    </a>
  </div>
</section>

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
