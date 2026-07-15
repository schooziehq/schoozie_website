<?php
$site_name = "Schoozie";
$year = date("Y");
require_once 'config.php';

/* Pre-computed combo prices */
$static_combo_price  = (int)str_replace(',','', $offer_active ? $static_offer_price  : $static_regular_price);
$dynamic_combo_price = (int)str_replace(',','', $offer_active ? $dynamic_offer_price : $dynamic_regular_price);
$static_combo_now    = number_format(round($static_combo_price  * (100 - (int)$combo_website_discount) / 100));
$dynamic_combo_now   = number_format(round($dynamic_combo_price * (100 - (int)$combo_website_discount) / 100));
$static_combo_was    = number_format($static_combo_price);
$dynamic_combo_was   = number_format($dynamic_combo_price);

/* Combo "what you get" - two-column breakdown */
$website_includes = [
  ['fa-desktop','#00b7ff','Professional school website'],
  ['fa-mobile-screen','#a855f7','Mobile responsive design'],
  ['fa-images','#ec4899','News, events &amp; photo gallery'],
  ['fa-clipboard-list','#f59e0b','Admissions inquiry form'],
  ['fa-chalkboard-user','#06b6d4','Staff &amp; faculty profiles'],
  ['fa-globe','#3b82f6','1 year hosting included'],
  ['fa-gear','#9ca3af','Domain setup assistance'],
];
$erp_includes = [
  ['fa-graduation-cap','#a855f7','Student management &amp; profiles'],
  ['fa-money-bill-wave','#10b981','Fee collection (online &amp; offline)'],
  ['fa-clipboard-check','#06b6d4','Daily attendance system'],
  ['fa-file-lines','#f59e0b','Exam &amp; report cards'],
  ['fa-people-roof','#ec4899','Parent portal'],
  ['fa-bell','#f97316','In-panel notifications'],
  ['fa-chart-bar','#06b6d4','Admin dashboard &amp; analytics'],
  ['fa-users','#a855f7','Pick any tier - Basic to Enterprise'],
];

/* Steps */
$how_steps = [
  ['1','Pick your website',  'Static (we manage it) or Dynamic (you control updates) - both get '.$combo_website_discount.'% off.'],
  ['2','Pick your ERP tier', 'Basic, Standard, Premium or Enterprise - pick what fits your school size.'],
  ['3','Go live together',   'Website + ERP run on the same day, under one dashboard, with priority support.'],
];

/* T&C - preserved from previous combo.php (3 languages) */
$tc = [
  'en' => [
    ['title'=>'Service Overview','text'=>'The Combo Plan gives your school two things at once - a professional website that parents and students see, and a complete ERP system that your staff uses daily to manage fees, attendance, exams, and more. One package, one discounted price, everything running under a single dashboard.'],
    ['title'=>'Combo Pricing Breakdown','points'=>[
      'Website: '.$combo_website_discount.'% OFF your chosen plan - pick Static or Dynamic, both qualify.',
      'ERP: choose any tier - Basic, Standard, Premium, or Enterprise.',
      'Domain registration and renewal charges are NOT included.',
      'Website annual renewal depends on your chosen plan (Static or Dynamic).',
      'Both services are active under one account and one admin dashboard.',
      $offer_active ? 'Offer valid only for payments made during '.$offer_month.'. Price locks in for life once paid.' : '',
    ]],
    ['title'=>'Payment Terms','points'=>[
      'Website setup fee (at '.$combo_website_discount.'% combo discount) must be paid upfront before work begins.',
      'ERP billing starts after the setup is complete - choose quarterly, half-yearly, or yearly.',
      'Accepted via UPI, bank transfer, or cash deposit.',
      'Both services will be activated within a few hours of confirmed payment.',
    ]],
    ['title'=>'What Is Included - Website','points'=>[
      'Professional school website - ready to go live.',
      'Mobile-friendly, responsive layout.',
      'News, events, photo gallery, and admissions form.',
      'Staff and faculty profiles.',
      'First year of web hosting included.',
      'Domain setup and configuration assistance.',
    ]],
    ['title'=>'What Is Included - ERP','points'=>[
      'Student registration and complete profile management.',
      'Staff and teacher management.',
      'Fee collection (online & offline), receipts, and reminders.',
      'Attendance system with daily and monthly reports.',
      'Exam management, mark sheets, and auto-generated report cards.',
      'Parent portal - fees, attendance, results, notices.',
      'In-panel notification system.',
      'Admin dashboard with full analytics.',
      'Cloud data backup - daily and automated.',
    ]],
    ['title'=>'What Is NOT Included','points'=>[
      'Domain name purchase or annual renewal.',
      'Biometric hardware (client must arrange own hardware).',
      'Third-party integrations unless agreed separately.',
    ]],
    ['title'=>'Free Onboarding Session','text'=>'Combo plan clients receive a free onboarding session via call or video call. This covers website handover, ERP setup walkthrough, and admin panel training.'],
    ['title'=>'Priority Support','points'=>[
      'Combo clients receive priority support over standard plan clients.',
      'Response time within 12 hours on working days.',
      'Critical issues addressed within 4 hours.',
      'Support available via call or email (Mon-Sat, 10am-5pm IST).',
      '30-day post-launch dedicated support included.',
    ]],
    ['title'=>'Delivery Timeline','points'=>[
      'Website: credentials and live link delivered within a few hours of payment - no content needed upfront.',
      'ERP system activated within a few hours of confirmed payment.',
      'Both services run simultaneously under one admin panel.',
    ]],
    ['title'=>'Hosting, Billing & Renewal','points'=>[
      'Website hosting: first year free, then annual renewal (rate depends on chosen plan - Static or Dynamic).',
      'ERP billing: quarterly / half-yearly / yearly cycles, auto-renews based on chosen tier.',
      'Both services managed from a single dashboard.',
      'Schoozie will notify 30 days before hosting expiry.',
      'ERP subscription may be cancelled independently of the website if needed.',
    ]],
    ['title'=>'Data Privacy & Ownership','points'=>[
      'All client data (website content and student records) is securely stored.',
      'Schoozie will NOT share any client data with third parties.',
      'Client owns their content; Schoozie owns the design and code.',
      'Upon termination, client may request a full data export within 30 days.',
    ]],
    ['title'=>'Cancellation & Refund Policy','points'=>[
      'Website setup fee (at combo discount) is non-refundable once work has begun.',
      'Full refund only if requested within 24 hours of payment and work has not started.',
      'ERP subscription can be cancelled with 7 days notice before next billing cycle.',
      'No refund for partial billing cycles.',
    ]],
    ['title'=>'Governing Terms','text'=>'These terms are governed under Indian law. Any dispute will first be addressed through mutual discussion. Schoozie reserves the right to update these terms at any time with 30 days prior notice via email or phone.'],
  ],
  'hi' => [
    ['title'=>'सेवा का अवलोकन','text'=>'Combo Plan आपके स्कूल को एक साथ दो चीजें देता है - एक पेशेवर वेबसाइट जो अभिभावक और छात्र देखते हैं, और एक पूर्ण ERP सिस्टम जिसे आपका स्टाफ रोज़ाना फीस, उपस्थिति, परीक्षा और अन्य कार्यों के प्रबंधन के लिए उपयोग करता है। एक पैकेज, एक रियायती कीमत, सब कुछ एक ही डैशबोर्ड के तहत।'],
    ['title'=>'कॉम्बो मूल्य विवरण','points'=>[
      'वेबसाइट: अपने चुने हुए प्लान पर '.$combo_website_discount.'% की छूट - Static या Dynamic, दोनों पात्र हैं।',
      'ERP: कोई भी tier चुनें - Basic, Standard, Premium या Enterprise।',
      'डोमेन पंजीकरण और नवीनीकरण शुल्क शामिल नहीं हैं।',
      'वेबसाइट का वार्षिक नवीनीकरण चुने गए प्लान (Static या Dynamic) पर निर्भर करता है।',
      'दोनों सेवाएं एक खाते और एक एडमिन डैशबोर्ड के तहत सक्रिय हैं।',
      $offer_active ? 'ऑफर केवल '.$offer_month.' में किए गए भुगतान के लिए मान्य है। एक बार भुगतान होने पर कीमत जीवन भर के लिए लॉक हो जाती है।' : '',
    ]],
    ['title'=>'भुगतान की शर्तें','points'=>[
      'काम शुरू होने से पहले कॉम्बो छूट के साथ वेबसाइट सेटअप शुल्क अग्रिम भुगतान करना होगा।',
      'ERP बिलिंग सेटअप पूरा होने के बाद शुरू होगी - तिमाही, छमाही या वार्षिक।',
      'UPI, बैंक ट्रांसफर या नकद जमा द्वारा स्वीकार।',
      'भुगतान की पुष्टि के कुछ घंटों के भीतर दोनों सेवाएं सक्रिय हो जाएंगी।',
    ]],
    ['title'=>'क्या शामिल है - वेबसाइट','points'=>[
      'पेशेवर स्कूल वेबसाइट - लाइव होने के लिए तैयार।',
      'मोबाइल-फ्रेंडली, रिस्पॉन्सिव लेआउट।',
      'समाचार, कार्यक्रम, फोटो गैलरी और प्रवेश फॉर्म।',
      'स्टाफ और फैकल्टी प्रोफाइल।',
      'पहले वर्ष की वेब होस्टिंग शामिल।',
      'डोमेन सेटअप और कॉन्फ़िगरेशन सहायता।',
    ]],
    ['title'=>'क्या शामिल है - ERP','points'=>[
      'छात्र पंजीकरण और पूर्ण प्रोफाइल प्रबंधन।',
      'स्टाफ और शिक्षक प्रबंधन।',
      'शुल्क संग्रह (ऑनलाइन व ऑफलाइन), रसीदें और अनुस्मारक।',
      'दैनिक और मासिक रिपोर्ट के साथ उपस्थिति प्रणाली।',
      'परीक्षा प्रबंधन, मार्क शीट और स्वचालित रिपोर्ट कार्ड।',
      'अभिभावक पोर्टल - शुल्क, उपस्थिति, परिणाम, नोटिस।',
      'इन-पैनल नोटिफिकेशन सिस्टम।',
      'पूर्ण विश्लेषण के साथ एडमिन डैशबोर्ड।',
      'क्लाउड डेटा बैकअप - दैनिक और स्वचालित।',
    ]],
    ['title'=>'क्या शामिल नहीं है','points'=>[
      'डोमेन नाम की खरीद या वार्षिक नवीनीकरण।',
      'बायोमेट्रिक हार्डवेयर (क्लाइंट स्वयं व्यवस्था करे)।',
      'अलग समझौते के बिना थर्ड-पार्टी एकीकरण।',
    ]],
    ['title'=>'मुफ्त ऑनबोर्डिंग सत्र','text'=>'Combo plan क्लाइंट्स को कॉल या वीडियो कॉल के माध्यम से एक मुफ्त ऑनबोर्डिंग सत्र मिलता है। इसमें वेबसाइट हैंडओवर, ERP सेटअप वॉकथ्रू और एडमिन पैनल प्रशिक्षण शामिल है।'],
    ['title'=>'प्राथमिकता सहायता','points'=>[
      'Combo क्लाइंट्स को मानक प्लान क्लाइंट्स पर प्राथमिकता सहायता मिलती है।',
      'कार्य दिवसों पर प्रतिक्रिया समय 12 घंटों के भीतर।',
      'गंभीर समस्याएं 4 घंटों के भीतर हल की जाती हैं।',
      'सहायता कॉल या ईमेल के माध्यम से (सोम-शनि, सुबह 10 - शाम 5 IST) उपलब्ध है।',
      'लॉन्च के बाद 30 दिनों की समर्पित सहायता शामिल है।',
    ]],
    ['title'=>'डिलीवरी समयसीमा','points'=>[
      'वेबसाइट: भुगतान के कुछ घंटों के भीतर लाइव लिंक और क्रेडेंशियल - पहले से कोई सामग्री आवश्यक नहीं।',
      'ERP सिस्टम भुगतान की पुष्टि के कुछ घंटों के भीतर सक्रिय।',
      'दोनों सेवाएं एक एडमिन पैनल के तहत एक साथ चलती हैं।',
    ]],
    ['title'=>'होस्टिंग, बिलिंग और नवीनीकरण','points'=>[
      'वेबसाइट होस्टिंग: पहला वर्ष मुफ्त, फिर वार्षिक नवीनीकरण (दर चुने गए प्लान - Static या Dynamic - पर निर्भर)।',
      'ERP बिलिंग: तिमाही / छमाही / वार्षिक चक्र, चुने गए tier के आधार पर स्वतः नवीनीकृत।',
      'दोनों सेवाएं एक डैशबोर्ड से प्रबंधित।',
      'होस्टिंग समाप्ति से 30 दिन पहले Schoozie सूचित करेगा।',
      'यदि आवश्यक हो तो ERP सदस्यता वेबसाइट से स्वतंत्र रूप से रद्द की जा सकती है।',
    ]],
    ['title'=>'डेटा गोपनीयता और स्वामित्व','points'=>[
      'सभी क्लाइंट डेटा सुरक्षित रूप से संग्रहीत हैं।',
      'Schoozie किसी भी क्लाइंट डेटा को तीसरे पक्ष के साथ साझा नहीं करेगा।',
      'क्लाइंट अपनी सामग्री का मालिक है; Schoozie डिज़ाइन और कोड का मालिक है।',
      'समाप्ति पर क्लाइंट 30 दिनों के भीतर डेटा निर्यात का अनुरोध कर सकता है।',
    ]],
    ['title'=>'रद्दीकरण और धनवापसी नीति','points'=>[
      'काम शुरू होने के बाद सेटअप शुल्क वापस नहीं होगा।',
      'पूर्ण धनवापसी केवल तभी संभव है जब काम शुरू न हुआ हो और अनुरोध 24 घंटों के भीतर हो।',
      'ERP सदस्यता अगले बिलिंग चक्र से 7 दिन पहले सूचना देकर रद्द की जा सकती है।',
      'आंशिक बिलिंग चक्रों की कोई धनवापसी नहीं होगी।',
    ]],
    ['title'=>'शासी नियम','text'=>'ये शर्तें भारतीय कानून के तहत हैं। किसी भी विवाद को पहले आपसी बातचीत से सुलझाया जाएगा। Schoozie 30 दिन की पूर्व सूचना के साथ इन शर्तों को कभी भी अपडेट करने का अधिकार रखता है।'],
  ],
  'ur' => [
    ['title'=>'خدمت کا جائزہ','text'=>'کومبو پلان آپ کے اسکول کو ایک ساتھ دو چیزیں دیتا ہے - ایک پیشہ ورانہ ویب سائٹ جو والدین اور طلبا دیکھتے ہیں، اور ایک مکمل ERP سسٹم جو آپ کا اسٹاف روزانہ فیس، حاضری، امتحانات اور مزید کے انتظام کے لیے استعمال کرتا ہے۔ ایک پیکج، ایک رعایتی قیمت، سب کچھ ایک ڈیش بورڈ کے تحت۔'],
    ['title'=>'کومبو قیمت کی تفصیل','points'=>[
      'ویب سائٹ: اپنے منتخب پلان پر '.$combo_website_discount.'% رعایت - اسٹیٹک یا ڈائنامک، دونوں اہل ہیں۔',
      'ERP: کوئی بھی ٹیئر منتخب کریں - بیسک، اسٹینڈرڈ، پریمیم یا انٹرپرائز۔',
      'ڈومین رجسٹریشن اور تجدید کے اخراجات شامل نہیں ہیں۔',
      'ویب سائٹ کی سالانہ تجدید منتخب پلان (اسٹیٹک یا ڈائنامک) پر منحصر ہے۔',
      'دونوں خدمات ایک اکاؤنٹ اور ایک ایڈمن ڈیش بورڈ کے تحت فعال ہیں۔',
      $offer_active ? 'آفر صرف '.$offer_month.' میں کی گئی ادائیگیوں کے لیے ہے۔ ایک بار ادائیگی کے بعد قیمت ہمیشہ کے لیے لاک ہو جاتی ہے۔' : '',
    ]],
    ['title'=>'ادائیگی کی شرائط','points'=>[
      'کام شروع ہونے سے پہلے کومبو رعایت کے ساتھ ویب سائٹ سیٹ اپ فیس پیشگی ادا کرنی ہوگی۔',
      'ERP بلنگ سیٹ اپ مکمل ہونے کے بعد شروع ہوگی - سہ ماہی، ششماہی یا سالانہ۔',
      'UPI، بینک ٹرانسفر یا نقد جمع کے ذریعے قبول۔',
      'ادائیگی کی تصدیق کے چند گھنٹوں کے اندر دونوں خدمات فعال ہو جائیں گی۔',
    ]],
    ['title'=>'کیا شامل ہے - ویب سائٹ','points'=>[
      'پیشہ ورانہ اسکول ویب سائٹ - لائیو ہونے کے لیے تیار۔',
      'موبائل فرینڈلی، ریسپانسیو لے آؤٹ۔',
      'خبریں، تقریبات، فوٹو گیلری اور داخلہ فارم۔',
      'اسٹاف اور فیکلٹی پروفائل۔',
      'پہلے سال کی ویب ہوسٹنگ شامل۔',
      'ڈومین سیٹ اپ اور کنفیگریشن میں مدد۔',
    ]],
    ['title'=>'کیا شامل ہے - ERP','points'=>[
      'طلبا کی رجسٹریشن اور مکمل پروفائل مینجمنٹ۔',
      'اسٹاف اور اساتذہ کا انتظام۔',
      'فیس کلیکشن (آن لائن و آف لائن)، رسیدیں اور یاددہانیاں۔',
      'روزانہ اور ماہانہ رپورٹس کے ساتھ حاضری سسٹم۔',
      'امتحان مینجمنٹ، مارک شیٹ اور خودبخود رپورٹ کارڈ۔',
      'والدین پورٹل - فیس، حاضری، نتائج، نوٹسز۔',
      'ان پینل نوٹیفکیشن سسٹم۔',
      'مکمل تجزیات کے ساتھ ایڈمن ڈیش بورڈ۔',
      'کلاؤڈ ڈیٹا بیک اپ - روزانہ اور خودکار۔',
    ]],
    ['title'=>'کیا شامل نہیں ہے','points'=>[
      'ڈومین نام کی خریداری یا سالانہ تجدید۔',
      'بائیو میٹرک ہارڈ ویئر (کلائنٹ خود انتظام کرے)۔',
      'الگ معاہدے کے بغیر تھرڈ پارٹی انٹیگریشن۔',
    ]],
    ['title'=>'مفت آن بورڈنگ سیشن','text'=>'کومبو پلان کلائنٹس کو کال یا ویڈیو کال کے ذریعے ایک مفت آن بورڈنگ سیشن ملتا ہے۔ اس میں ویب سائٹ ہینڈ اوور، ERP سیٹ اپ واک تھرو اور ایڈمن پینل ٹریننگ شامل ہے۔'],
    ['title'=>'ترجیحی سپورٹ','points'=>[
      'کومبو کلائنٹس کو معیاری پلان کلائنٹس پر ترجیحی سپورٹ ملتی ہے۔',
      'کاری دنوں میں جواب کا وقت ۱۲ گھنٹوں کے اندر۔',
      'اہم مسائل ۴ گھنٹوں کے اندر حل کیے جاتے ہیں۔',
      'سپورٹ کال یا ای میل کے ذریعے (پیر تا ہفتہ، صبح ۱۰ تا شام ۵ IST) دستیاب ہے۔',
      'لانچ کے بعد ۳۰ دنوں کی مخصوص سپورٹ شامل ہے۔',
    ]],
    ['title'=>'ڈیلیوری ٹائم لائن','points'=>[
      'ویب سائٹ: ادائیگی کے چند گھنٹوں کے اندر لائیو لنک اور اسناد فراہم - پہلے سے کوئی مواد درکار نہیں۔',
      'ERP سسٹم ادائیگی کی تصدیق کے چند گھنٹوں کے اندر فعال۔',
      'دونوں خدمات ایک ایڈمن پینل کے تحت بیک وقت چلتی ہیں۔',
    ]],
    ['title'=>'ہوسٹنگ، بلنگ اور تجدید','points'=>[
      'ویب سائٹ ہوسٹنگ: پہلا سال مفت، پھر سالانہ تجدید (شرح منتخب پلان - اسٹیٹک یا ڈائنامک - پر منحصر ہے)۔',
      'ERP بلنگ: سہ ماہی / ششماہی / سالانہ سائیکل، منتخب ٹیئر کی بنیاد پر خودبخود تجدید۔',
      'دونوں خدمات ایک ڈیش بورڈ سے منظم۔',
      'ہوسٹنگ کی میعاد ختم ہونے سے ۳۰ دن پہلے اسکوزی مطلع کرے گا۔',
      'ضرورت پڑنے پر ERP سبسکرپشن ویب سائٹ سے آزادانہ طور پر منسوخ کی جا سکتی ہے۔',
    ]],
    ['title'=>'ڈیٹا پرائیویسی اور ملکیت','points'=>[
      'تمام کلائنٹ ڈیٹا محفوظ طریقے سے رکھا جاتا ہے۔',
      'اسکوزی کلائنٹ کا ڈیٹا تیسرے فریق کے ساتھ شیئر نہیں کرے گا۔',
      'کلائنٹ اپنے مواد کا مالک ہے؛ اسکوزی ڈیزائن اور کوڈ کا مالک ہے۔',
      'ختم ہونے پر کلائنٹ ۳۰ دنوں کے اندر ڈیٹا ایکسپورٹ کی درخواست کر سکتا ہے۔',
    ]],
    ['title'=>'منسوخی اور واپسی کی پالیسی','points'=>[
      'کام شروع ہونے کے بعد سیٹ اپ فیس واپس نہیں ہوگی۔',
      'مکمل واپسی صرف تب ممکن ہے جب کام شروع نہ ہوا ہو اور درخواست ادائیگی کے ۲۴ گھنٹوں کے اندر ہو۔',
      'ERP سبسکرپشن اگلے بلنگ سائیکل سے ۷ دن پہلے اطلاع دے کر منسوخ کی جا سکتی ہے۔',
      'جزوی بلنگ سائیکلز کی واپسی نہیں ہوگی۔',
    ]],
    ['title'=>'حاکم شرائط','text'=>'یہ شرائط بھارتی قانون کے تحت ہیں۔ کسی بھی تنازع کو پہلے باہمی گفتگو سے حل کیا جائے گا۔ اسکوزی ۳۰ دن کی پیشگی اطلاع کے ساتھ ان شرائط کو کسی بھی وقت اپ ڈیٹ کرنے کا حق رکھتا ہے۔'],
  ],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include '_analytics.php'; ?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Website + ERP Combo - Best Value Bundle | Schoozie</title>
<meta name="description" content="The complete digital package - professional school website AND full ERP system at <?php echo $combo_website_discount; ?>% off the website price. Both products, one combined deal, priority support.">
<meta name="keywords" content="school website and erp combo, school digital package, school management bundle, school website erp bundle india, complete school digital solution">
<meta name="robots" content="index, follow">
<link rel="canonical" href="https://schoozie.com/combo.php">
<link rel="icon" href="assets/icons/web/favicon.ico" sizes="32x32">
<link rel="icon" href="assets/icons/web/favicon.svg" type="image/svg+xml">
<link rel="apple-touch-icon" href="assets/icons/web/apple-touch-icon.png">
<link rel="manifest" href="assets/icons/web/site.webmanifest">
<meta property="og:type" content="website">
<meta property="og:title" content="Website + ERP Combo - Best Value Bundle | Schoozie">
<meta property="og:description" content="School website AND full ERP, <?php echo $combo_website_discount; ?>% off the website. One bundle, priority support.">
<meta property="og:url" content="https://schoozie.com/combo.php">
<meta property="og:image" content="https://schoozie.com/assets/og-image.jpg">
<meta name="twitter:card" content="summary_large_image">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700;900&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Inter:wght@300;400;500;600;700&family=Noto+Sans+Arabic:wght@500;600;700&family=Noto+Sans+Devanagari:wght@400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<link rel="stylesheet" href="css/global.css?v=<?php echo filemtime('css/global.css'); ?>">
<link rel="stylesheet" href="css/index-v2.css?v=<?php echo filemtime('css/index-v2.css'); ?>">
<link rel="stylesheet" href="css/websites.css?v=<?php echo filemtime('css/websites.css'); ?>">
<link rel="stylesheet" href="css/combo.css?v=<?php echo filemtime('css/combo.css'); ?>">
<link rel="stylesheet" href="css/site-chrome.css?v=<?php echo filemtime('css/site-chrome.css'); ?>">
</head>
<body class="page-combo">

<?php $active_page = 'combo'; include '_header.php'; ?>

<!-- COMPACT HERO -->
<section class="w-hero">
  <div class="w-hero-inner">
    <div class="v2-hero-tag combo-tag"><i class="fa-solid fa-fire"></i><span>Best Value Bundle</span></div>
    <h1>Get your website + ERP <span class="grad">together &amp; save</span></h1>
    <p class="lead">One bundle, both products, priority support. Pick any website plan and any ERP tier - we run them under one dashboard.</p>
  </div>
</section>

<!-- DEAL CARD -->
<section class="combo-deal-section">
  <div class="combo-deal">
    <span class="combo-deal-ribbon"><i class="fa-solid fa-fire"></i> Combo Deal</span>

    <div class="combo-deal-row">
      <div class="combo-deal-pillar">
        <span class="combo-pillar-label">Website</span>
        <div class="combo-pillar-amt">
          <span class="combo-pct"><?php echo $combo_website_discount; ?>%</span>
          <span class="combo-pct-suffix">OFF</span>
        </div>
        <div class="combo-pillar-hint">
          on Static or Dynamic<br>
          <span class="combo-pillar-was">Static from <strong>Rs. <?php echo $static_combo_now; ?></strong> <s>Rs. <?php echo $static_combo_was; ?></s></span><br>
          <span class="combo-pillar-was">Dynamic from <strong>Rs. <?php echo $dynamic_combo_now; ?></strong> <s>Rs. <?php echo $dynamic_combo_was; ?></s></span>
        </div>
      </div>

      <div class="combo-deal-plus" aria-hidden="true">+</div>

      <div class="combo-deal-pillar">
        <span class="combo-pillar-label">School ERP</span>
        <div class="combo-pillar-amt">
          <span class="combo-pct">Any</span>
          <span class="combo-pct-suffix">Tier</span>
        </div>
        <div class="combo-pillar-hint">
          Pick Basic, Standard,<br>
          Premium or Enterprise<br>
          <span class="combo-pillar-was">From <strong>Rs. <?php echo $erp_basic_quarterly; ?></strong>/quarter</span>
        </div>
      </div>

      <div class="combo-deal-plus combo-deal-equals" aria-hidden="true">=</div>

      <div class="combo-deal-pillar combo-deal-result">
        <span class="combo-pillar-label">You get</span>
        <div class="combo-result-list">
          <span><i class="fa-solid fa-check"></i> One dashboard, both products</span>
          <span><i class="fa-solid fa-check"></i> Priority support</span>
          <span><i class="fa-solid fa-check"></i> Free onboarding call</span>
          <span><i class="fa-solid fa-check"></i> Live on the same day</span>
        </div>
      </div>
    </div>

    <div class="combo-deal-cta">
      <a href="https://wa.me/<?php echo $contact_whatsapp; ?>?text=Hi%2C+I%27m+interested+in+the+Website+%2B+ERP+Combo+plan." target="_blank" rel="noopener"
         class="w-btn-primary combo-cta-btn">
        <i class="fa-brands fa-whatsapp"></i> Get the Combo Deal
      </a>
      <span class="combo-deal-fineprint">Domain not included &middot; we set it up free</span>
    </div>
  </div>
</section>

<!-- HOW IT WORKS -->
<section class="combo-steps-section">
  <div class="v2-plans-head">
    <span class="v2-plans-eyebrow"><i class="fa-solid fa-route"></i> How it works</span>
    <h2>Three steps. <span class="grad">One bundle.</span></h2>
  </div>
  <div class="combo-steps">
    <?php foreach($how_steps as $step): ?>
    <div class="combo-step">
      <span class="combo-step-num"><?php echo $step[0]; ?></span>
      <h4><?php echo htmlspecialchars($step[1]); ?></h4>
      <p><?php echo htmlspecialchars($step[2]); ?></p>
    </div>
    <?php endforeach; ?>
  </div>
</section>

<!-- WHAT'S INCLUDED - two columns -->
<section class="combo-included" id="included">
  <div class="v2-plans-head">
    <span class="v2-plans-eyebrow"><i class="fa-solid fa-box-open"></i> What's inside</span>
    <h2>Everything you get in the <span class="grad">combo bundle</span></h2>
    <p>Two products, one combined package. Your school online + your school managed - all under one login.</p>
  </div>

  <div class="combo-included-grid">
    <div class="combo-incl-card" style="--ac:#00b7ff">
      <div class="combo-incl-head">
        <span class="combo-incl-icon"><i class="fa-solid fa-globe"></i></span>
        <div>
          <h3>Website side</h3>
          <p>What parents &amp; students see</p>
        </div>
      </div>
      <ul>
        <?php foreach($website_includes as $f): ?>
        <li>
          <i class="fa-solid <?php echo $f[0]; ?>" style="color:<?php echo $f[1]; ?>"></i>
          <span><?php echo $f[2]; ?></span>
        </li>
        <?php endforeach; ?>
      </ul>
      <a href="websites.php" class="combo-incl-link">See website plan details <i class="fa-solid fa-arrow-right"></i></a>
    </div>

    <div class="combo-incl-card" style="--ac:#ff5fcb">
      <div class="combo-incl-head">
        <span class="combo-incl-icon"><i class="fa-solid fa-layer-group"></i></span>
        <div>
          <h3>ERP side</h3>
          <p>What your staff uses daily</p>
        </div>
      </div>
      <ul>
        <?php foreach($erp_includes as $f): ?>
        <li>
          <i class="fa-solid <?php echo $f[0]; ?>" style="color:<?php echo $f[1]; ?>"></i>
          <span><?php echo $f[2]; ?></span>
        </li>
        <?php endforeach; ?>
      </ul>
      <a href="erp.php" class="combo-incl-link">See ERP tier details <i class="fa-solid fa-arrow-right"></i></a>
    </div>
  </div>
</section>

<!-- TERMS & DETAILS -->
<section class="w-terms" id="terms">
  <div class="v2-plans-head">
    <span class="v2-plans-eyebrow"><i class="fa-solid fa-file-contract"></i> Details</span>
    <h2>Full <span class="grad">terms &amp; pricing</span></h2>
    <p>Everything you need to know, in plain language. Tap any section to expand.</p>
  </div>

  <div class="w-terms-block" id="terms-combo">
    <?php
    $langs = [
      'en' => ['label'=>'English','dir'=>'ltr'],
      'hi' => ['label'=>'हिन्दी','dir'=>'ltr'],
      'ur' => ['label'=>'اردو','dir'=>'rtl'],
    ];
    ?>
    <div class="w-lang-tabs" data-plan="combo">
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
  <h2>Ready for the <span class="grad">full bundle?</span></h2>
  <p>Message us - we'll walk you through both products, pick the right tier together, and have you live on the same day.</p>
  <div class="v2-final-cta-btns">
    <a href="https://wa.me/<?php echo $contact_whatsapp; ?>?text=Hi%2C+I%27m+ready+for+the+Website+%2B+ERP+Combo+%E2%80%94+can+you+walk+me+through+it%3F" target="_blank" rel="noopener" class="v2-btn-primary">
      <i class="fa-brands fa-whatsapp"></i> Get the Combo
    </a>
    <a href="<?php echo $demo_url; ?>" target="_blank" rel="noopener" class="v2-btn-outline">
      <i class="fa-solid fa-eye"></i> See Live Demo
    </a>
  </div>
</section>

<?php include '_footer.php'; ?>

<!-- JSON-LD STRUCTURED DATA -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Product",
  "name": "Schoozie Website + ERP Combo",
  "description": "Bundled package: a Schoozie school website (Static or Dynamic) paired with the full Schoozie School ERP. <?php echo $combo_website_discount; ?>% off the website plus priority support and a unified dashboard.",
  "brand": {"@type":"Brand","name":"Schoozie"},
  "category": "School Software Bundle",
  "offers": {
    "@type": "AggregateOffer",
    "priceCurrency": "INR",
    "lowPrice": "<?php echo str_replace(',','',$static_combo_now); ?>",
    "highPrice": "<?php echo str_replace(',','',$dynamic_combo_now); ?>",
    "offerCount": "2",
    "url": "https://schoozie.com/combo.php",
    "description": "Website starts from Rs. <?php echo $static_combo_now; ?> (Static) or Rs. <?php echo $dynamic_combo_now; ?> (Dynamic), plus any ERP tier from Rs. <?php echo $erp_basic_quarterly; ?>/quarter."
  }
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
