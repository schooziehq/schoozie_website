<?php require_once 'config.php';
$plan = [
  'name'           => 'Dynamic Website',
  'badge'          => $offer_active
                        ? '<i class="fa-solid fa-tag"></i> '.$offer_month.' Special Offer'
                        : '<i class="fa-solid fa-bolt"></i> Dynamic Plan',
  'badge_bg'       => $offer_active ? 'rgba(255,0,204,0.12)' : 'rgba(255,255,255,0.07)',
  'badge_color'    => $offer_active ? '#ff00cc' : '#aaa',
  'badge_border'   => $offer_active ? 'rgba(255,0,204,0.35)' : 'rgba(255,255,255,0.15)',
  'title_gradient' => 'linear-gradient(90deg,#ff00cc,#aa00ff)',
  'accent'         => '#ff00cc',
  'description'    => 'Your school gets its own powerful admin panel. Update news, galleries, events, and admissions yourself — anytime, anywhere. No technical knowledge needed.',
  'price_display'  => 'Rs. '.($offer_active ? $dynamic_offer_price : $dynamic_regular_price),
  'price_period'   => 'one-time setup fee',
  'price_old'      => $offer_active ? 'Rs. '.$dynamic_regular_price : '',
  'price_save'     => $offer_active ? 'Save Rs. '.$dynamic_saving.' this '.$offer_month : '',
  'domain_note'    => '* Domain charges excluded &nbsp;·&nbsp; Annual renewal: Rs. '.$dynamic_renewal_price.'/yr',
  'btn_bg'         => 'linear-gradient(90deg,#ff00cc,#aa00ff)',
  'btn_text'       => 'Contact Us',
  'tab_color'      => 'pink',
  'features' => [
    ['<i class="fa-solid fa-bolt" style="color:#fbbf24"></i>','Your own admin login panel'],
    ['<i class="fa-solid fa-newspaper" style="color:#06b6d4"></i>','Post news & updates yourself'],
    ['<i class="fa-solid fa-images" style="color:#ec4899"></i>','Upload photos & gallery yourself'],
    ['<i class="fa-solid fa-bell" style="color:#f97316"></i>','Publish notices anytime'],
    ['<i class="fa-solid fa-calendar-days" style="color:#f59e0b"></i>','Add events & circulars yourself'],
    ['<i class="fa-solid fa-user-tie" style="color:#ec4899"></i>','Update staff profiles anytime'],
    ['<i class="fa-solid fa-clipboard-list" style="color:#10b981"></i>','Receive admissions inquiries online'],
    ['<i class="fa-solid fa-mobile-screen" style="color:#a855f7"></i>','Manage from phone or laptop'],
    ['<i class="fa-solid fa-key" style="color:#fbbf24"></i>','No Schoozie needed for updates'],
    ['<i class="fa-solid fa-desktop" style="color:#00b7ff"></i>','Professional school website'],
    ['<i class="fa-solid fa-globe" style="color:#3b82f6"></i>','1 year hosting included'],
    ['<i class="fa-solid fa-chalkboard-user" style="color:#10b981"></i>','Admin training included'],
  ],
  'tc' => [

    /* ====== ENGLISH ====== */
    'en' => [
      ['title'=>'Service Overview','text'=>'Under this plan, Schoozie will design, develop, and deliver a fully dynamic school website with a dedicated admin login panel. You will be able to manage your own website content — including news, events, photos, staff profiles, and admissions — without requiring any technical knowledge.'],
      ['title'=>'Pricing','points'=>[
        $offer_active
          ? '<strong>Offer Price: Rs. '.$dynamic_offer_price.'</strong> (one-time setup) — Save Rs. '.$dynamic_saving.' this '.$offer_month.'.'
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
        'Ready-to-use dynamic school website — no content needed from you upfront.',
        'Admin panel credentials delivered directly after payment.',
        'You manage everything yourself — news, photos, notices, events, staff profiles.',
        'Mobile-friendly layout — manage from any phone or laptop.',
        'Receive and view admissions inquiries online.',
        'First year of web hosting included.',
        'First-time admin panel setup assistance from our team.',
        'Onboarding call — get started with confidence.',
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
      ['title'=>'Delivery Timeline','text'=>'Make your payment — that\'s it. No content, no photos, no information needed from you upfront. Within a few hours, we send your admin panel credentials directly. Our team assists you with the first-time setup, and from that point, you\'re fully in control of your website.'],
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
        'Technical support available via call or email (Mon–Sat, 10am–5pm IST).',
        'Response time within 24 hours on working days.',
        'Basic panel usage support is included for 30 days post-launch.',
      ]],
      ['title'=>'Governing Terms','text'=>'These terms are governed under Indian law. Disputes will first be handled through mutual discussion. Schoozie reserves the right to update these terms at any time with prior notice via email or phone.'],
    ],

    /* ====== URDU ====== */
    'ur' => [
      ['title'=>'خدمت کا جائزہ','text'=>'اس پلان کے تحت، اسکوزی آپ کے اسکول کے لیے ایک مکمل ڈائنامک ویب سائٹ تیار کرے گا جس میں ایک مخصوص ایڈمن لاگ ان پینل شامل ہوگا۔ آپ خود اپنی ویب سائٹ کا مواد — خبریں، تقریبات، تصاویر، اسٹاف پروفائل اور داخلے — بغیر کسی تکنیکی علم کے منظم کر سکیں گے۔'],
      ['title'=>'قیمت','points'=>[
        $offer_active
          ? '<strong>آفر قیمت: '.str_replace(',','،',$dynamic_offer_price).' روپے</strong> (یکمشت سیٹ اپ) — اس '.$offer_month.' میں '.str_replace(',','،',$dynamic_saving).' روپے کی بچت۔'
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
        'استعمال کے لیے تیار ڈائنامک اسکول ویب سائٹ — پہلے سے کوئی مواد فراہم کرنے کی ضرورت نہیں۔',
        'ادائیگی کے بعد ایڈمن پینل کی اسناد براہ راست فراہم کی جائیں گی۔',
        'سب کچھ آپ خود منظم کریں — خبریں، تصاویر، نوٹسز، تقریبات، اسٹاف پروفائل۔',
        'موبائل فرینڈلی لے آؤٹ — کسی بھی فون یا لیپ ٹاپ سے منظم کریں۔',
        'داخلہ انکوائریاں آن لائن موصول کریں اور دیکھیں۔',
        'پہلے سال کی ویب ہوسٹنگ شامل۔',
        'ہماری ٹیم کی طرف سے پہلی بار ایڈمن پینل سیٹ اپ میں مدد۔',
        'آن بورڈنگ کال — اعتماد کے ساتھ شروع کریں۔',
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
      ['title'=>'ڈیلیوری ٹائم لائن','text'=>'ادائیگی کریں — بس اتنا کافی ہے۔ پہلے سے کوئی مواد، تصاویر یا معلومات کی ضرورت نہیں۔ چند گھنٹوں کے اندر ہم آپ کی ایڈمن پینل اسناد براہ راست بھیجیں گے۔ ہماری ٹیم پہلی بار سیٹ اپ میں مدد کرے گی، اور اس کے بعد آپ اپنی ویب سائٹ کے مکمل کنٹرول میں ہوں گے۔'],
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

    /* ====== HINDI ====== */
    'hi' => [
      ['title'=>'सेवा का अवलोकन','text'=>'इस प्लान के तहत, Schoozie आपके स्कूल के लिए एक पूरी तरह से डायनामिक वेबसाइट तैयार करेगा जिसमें एक समर्पित एडमिन लॉगिन पैनल शामिल होगा। आप खुद अपनी वेबसाइट की सामग्री — समाचार, कार्यक्रम, फ़ोटो, स्टाफ प्रोफाइल और प्रवेश — बिना किसी तकनीकी ज्ञान के प्रबंधित कर सकेंगे।'],
      ['title'=>'मूल्य निर्धारण','points'=>[
        $offer_active
          ? '<strong>ऑफर मूल्य: Rs. '.$dynamic_offer_price.'</strong> (एकमुश्त सेटअप) — इस '.$offer_month.' में Rs. '.$dynamic_saving.' की बचत।'
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
        'उपयोग के लिए तैयार डायनामिक स्कूल वेबसाइट — पहले से कोई सामग्री देने की जरूरत नहीं।',
        'भुगतान के बाद एडमिन पैनल क्रेडेंशियल सीधे प्रदान किए जाएंगे।',
        'सब कुछ खुद प्रबंधित करें — समाचार, फोटो, नोटिस, कार्यक्रम, स्टाफ प्रोफाइल।',
        'मोबाइल-फ्रेंडली लेआउट — किसी भी फोन या लैपटॉप से प्रबंधित करें।',
        'प्रवेश जांच ऑनलाइन प्राप्त करें और देखें।',
        'पहले वर्ष की वेब होस्टिंग शामिल।',
        'हमारी टीम द्वारा पहली बार एडमिन पैनल सेटअप में सहायता।',
        'ऑनबोर्डिंग कॉल — आत्मविश्वास के साथ शुरू करें।',
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
      ['title'=>'डिलीवरी समयसीमा','text'=>'भुगतान करें — बस इतना काफी है। पहले से कोई सामग्री, फोटो या जानकारी देने की जरूरत नहीं। कुछ घंटों के भीतर हम आपके एडमिन पैनल क्रेडेंशियल सीधे भेजेंगे। हमारी टीम पहली बार सेटअप में मदद करेगी, और उसके बाद आप अपनी वेबसाइट के पूर्ण नियंत्रण में होंगे।'],
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
  ],
];
include '_plan_layout.php';
