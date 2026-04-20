<?php require_once 'config.php';
$plan = [
  'name'           => 'Website + ERP Combo',
  'badge'          => $offer_active
                        ? '<i class="fa-solid fa-fire"></i> '.$offer_month.' Best Value Deal'
                        : '<i class="fa-solid fa-fire"></i> Best Value Deal',
  'badge_bg'       => 'rgba(255,210,0,0.12)',
  'badge_color'    => '#ffd200',
  'badge_border'   => 'rgba(255,210,0,0.35)',
  'title_gradient' => 'linear-gradient(90deg,#ffd200,#ff6b00)',
  'accent'         => '#ffd200',
  'description'    => 'The complete digital package for your school — a professional website AND the full ERP system together at an exclusive combo price. One deal, everything your school needs.',
  'price_display'  => $combo_website_discount.'% OFF Website',
  'price_period'   => '+ ERP from Rs.'.$erp_per_student.'/student/month &nbsp;·&nbsp; any tier',
  'price_old'      => $offer_active ? 'ERP setup regular: Rs. '.$erp_regular_setup : '',
  'price_save'     => $offer_active ? $offer_month.' offer: ERP setup Rs. '.$erp_offer_setup.' — Save Rs. '.$erp_setup_saving : '',
  'domain_note'    => '* Domain charges excluded &nbsp;·&nbsp; Renewal depends on chosen website plan',
  'btn_bg'         => 'linear-gradient(90deg,#f7971e,#ffd200)',
  'btn_text'       => 'Contact Us',
  'tab_color'      => 'gold',
  'features' => [
    ['<i class="fa-solid fa-percent" style="color:#ffd200"></i>','50% OFF your chosen website — Static or Dynamic'],
    ['<i class="fa-solid fa-sliders" style="color:#e879f9"></i>','ERP: Basic, Standard or Complete — your choice'],
    ['<i class="fa-solid fa-rocket" style="color:#ff6b00"></i>','Website + ERP live on the same day'],
    ['<i class="fa-solid fa-layer-group" style="color:#a855f7"></i>','One login. One dashboard. Everything.'],
    ['<i class="fa-solid fa-handshake" style="color:#fbbf24"></i>','One vendor — website & ERP, both from us'],
    ['<i class="fa-solid fa-globe" style="color:#3b82f6"></i>','Your school online — professional & mobile-ready'],
    ['<i class="fa-solid fa-money-bill-wave" style="color:#10b981"></i>','Collect fees online & offline, track every rupee'],
    ['<i class="fa-solid fa-clipboard-check" style="color:#06b6d4"></i>','Attendance marked daily, reports instant'],
    ['<i class="fa-solid fa-people-roof" style="color:#ec4899"></i>','Parents always in the loop — portal + website'],
    ['<i class="fa-solid fa-file-lines" style="color:#f59e0b"></i>','Exam results & report cards on the portal'],
    ['<i class="fa-solid fa-graduation-cap" style="color:#a855f7"></i>','Every student record, one place, always safe'],
    ['<i class="fa-solid fa-chalkboard-user" style="color:#00b7ff"></i>','Staff, payroll & leave — all managed'],
    ['<i class="fa-solid fa-user-plus" style="color:#e879f9"></i>','Admissions managed start to finish'],
    ['<i class="fa-solid fa-book-open" style="color:#a855f7"></i>','Library & transport tracked inside ERP'],
    ['<i class="fa-solid fa-newspaper" style="color:#06b6d4"></i>','Post notices on your website instantly'],
    ['<i class="fa-solid fa-calendar-days" style="color:#f59e0b"></i>','Timetable managed class by class'],
    ['<i class="fa-solid fa-book-bookmark" style="color:#a855f7"></i>','Homework & assignments tracked'],
    ['<i class="fa-solid fa-id-card" style="color:#10b981"></i>','ID cards & certificates generated instantly'],
    ['<i class="fa-solid fa-chart-bar" style="color:#06b6d4"></i>','Admin analytics — see your school at a glance'],
    ['<i class="fa-solid fa-trophy" style="color:#fbbf24"></i>','Priority support for both products, always'],
  ],
  'tc' => [

    /* ====== ENGLISH ====== */
    'en' => [
      ['title'=>'Service Overview','text'=>'The Combo Plan gives your school two things at once — a professional website that parents and students see, and a complete ERP system that your staff uses daily to manage fees, attendance, exams, and more. One package, one discounted price, everything running under a single dashboard.'],

      ['title'=>'Combo Pricing Breakdown','points'=>[
        'Website: '.$combo_website_discount.'% OFF your chosen plan — pick Static or Dynamic, both qualify.',
        'ERP: choose any tier — Basic Rs.'.$erp_per_student.', Standard Rs.'.$erp_standard_per_student.', or Complete Rs.'.$erp_complete_per_student.' per student per month.',
        'Domain registration and renewal charges are NOT included.',
        'Website annual renewal depends on your chosen plan (Static or Dynamic).',
        'Both services are active under one account and one admin dashboard.',
        $offer_active ? 'Offer valid only for payments made during '.$offer_month.'. Price locks in for life once paid.' : '',
      ]],

      ['title'=>'Payment Terms','points'=>[
        'Website setup fee (at '.$combo_website_discount.'% combo discount) must be paid upfront before work begins.',
        'ERP monthly billing starts after the setup is complete.',
        'Accepted via UPI, bank transfer, or cash deposit.',
        'Both services will be activated within a few hours of confirmed payment.',
      ]],

      ['title'=>'What Is Included — Website','points'=>[
        'Professional school website — ready to go live.',
        'Mobile-friendly, responsive layout.',
        'News, events, photo gallery, and admissions form.',
        'Staff and faculty profiles.',
        'First year of web hosting included.',
        'Domain setup and configuration assistance.',
      ]],

      ['title'=>'What Is Included — ERP','points'=>[
        'Student registration and complete profile management.',
        'Staff and teacher management.',
        'Fee collection (online & offline), receipts, and reminders.',
        'Attendance system with daily and monthly reports.',
        'Exam management, mark sheets, and auto-generated report cards.',
        'Parent portal — fees, attendance, results, notices.',
        'In-panel notification system.',
        'Admin dashboard with full analytics.',
        'Cloud data backup — daily and automated.',
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
        'Support available via call or email (Mon–Sat, 10am–5pm IST).',
        '30-day post-launch dedicated support included.',
      ]],

      ['title'=>'Delivery Timeline','points'=>[
        'Website: credentials and live link delivered within a few hours of payment — no content needed upfront.',
        'ERP system activated within a few hours of confirmed payment.',
        'Both services run simultaneously under one admin panel.',
      ]],

      ['title'=>'Hosting, Billing & Renewal','points'=>[
        'Website hosting: first year free, then annual renewal (rate depends on chosen plan — Static or Dynamic).',
        'ERP billing: monthly, auto-renews based on active student count.',
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
        'No refund for partial billing months.',
      ]],

      ['title'=>'Governing Terms','text'=>'These terms are governed under Indian law. Any dispute will first be addressed through mutual discussion. Schoozie reserves the right to update these terms at any time with 30 days prior notice via email or phone.'],
    ],

    /* ====== URDU ====== */
    'ur' => [
      ['title'=>'خدمت کا جائزہ','text'=>'کومبو پلان آپ کے اسکول کو ایک ساتھ دو چیزیں دیتا ہے — ایک پیشہ ورانہ ویب سائٹ جو والدین اور طلبا دیکھتے ہیں، اور ایک مکمل ERP سسٹم جو آپ کا اسٹاف روزانہ فیس، حاضری، امتحانات اور مزید کے انتظام کے لیے استعمال کرتا ہے۔ ایک پیکج، ایک رعایتی قیمت، سب کچھ ایک ڈیش بورڈ کے تحت۔'],

      ['title'=>'کومبو قیمت کی تفصیل','points'=>[
        'ویب سائٹ: اپنے منتخب پلان پر '.$combo_website_discount.'% رعایت — اسٹیٹک یا ڈائنامک، دونوں اہل ہیں۔',
        'ERP: کوئی بھی ٹیئر منتخب کریں — بیسک '.str_replace(',','،',$erp_per_student).' روپے، اسٹینڈرڈ '.str_replace(',','،',$erp_standard_per_student).' روپے، یا کمپلیٹ '.str_replace(',','،',$erp_complete_per_student).' روپے فی طالب علم فی ماہ۔',
        'ڈومین رجسٹریشن اور تجدید کے اخراجات شامل نہیں ہیں۔',
        'ویب سائٹ کی سالانہ تجدید منتخب پلان (اسٹیٹک یا ڈائنامک) پر منحصر ہے۔',
        'دونوں خدمات ایک اکاؤنٹ اور ایک ایڈمن ڈیش بورڈ کے تحت فعال ہیں۔',
        $offer_active ? 'آفر صرف '.$offer_month.' میں کی گئی ادائیگیوں کے لیے ہے۔ ایک بار ادائیگی کے بعد قیمت ہمیشہ کے لیے لاک ہو جاتی ہے۔' : '',
      ]],

      ['title'=>'ادائیگی کی شرائط','points'=>[
        'کام شروع ہونے سے پہلے کومبو رعایت کے ساتھ ویب سائٹ سیٹ اپ فیس پیشگی ادا کرنی ہوگی۔',
        'ERP ماہانہ بلنگ سیٹ اپ مکمل ہونے کے بعد شروع ہوگی۔',
        'UPI، بینک ٹرانسفر یا نقد جمع کے ذریعے قبول۔',
        'ادائیگی کی تصدیق کے چند گھنٹوں کے اندر دونوں خدمات فعال ہو جائیں گی۔',
      ]],

      ['title'=>'کیا شامل ہے — ویب سائٹ','points'=>[
        'پیشہ ورانہ اسکول ویب سائٹ — لائیو ہونے کے لیے تیار۔',
        'موبائل فرینڈلی، ریسپانسیو لے آؤٹ۔',
        'خبریں، تقریبات، فوٹو گیلری اور داخلہ فارم۔',
        'اسٹاف اور فیکلٹی پروفائل۔',
        'پہلے سال کی ویب ہوسٹنگ شامل۔',
        'ڈومین سیٹ اپ اور کنفیگریشن میں مدد۔',
      ]],

      ['title'=>'کیا شامل ہے — ERP','points'=>[
        'طلبا کی رجسٹریشن اور مکمل پروفائل مینجمنٹ۔',
        'اسٹاف اور اساتذہ کا انتظام۔',
        'فیس کلیکشن (آن لائن و آف لائن)، رسیدیں اور یاددہانیاں۔',
        'روزانہ اور ماہانہ رپورٹس کے ساتھ حاضری سسٹم۔',
        'امتحان مینجمنٹ، مارک شیٹ اور خودبخود رپورٹ کارڈ۔',
        'والدین پورٹل — فیس، حاضری، نتائج، نوٹسز۔',
        'ان پینل نوٹیفکیشن سسٹم۔',
        'مکمل تجزیات کے ساتھ ایڈمن ڈیش بورڈ۔',
        'کلاؤڈ ڈیٹا بیک اپ — روزانہ اور خودکار۔',
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
        'ویب سائٹ: ادائیگی کے چند گھنٹوں کے اندر لائیو لنک اور اسناد فراہم — پہلے سے کوئی مواد درکار نہیں۔',
        'ERP سسٹم ادائیگی کی تصدیق کے چند گھنٹوں کے اندر فعال۔',
        'دونوں خدمات ایک ایڈمن پینل کے تحت بیک وقت چلتی ہیں۔',
      ]],

      ['title'=>'ہوسٹنگ، بلنگ اور تجدید','points'=>[
        'ویب سائٹ ہوسٹنگ: پہلا سال مفت، پھر سالانہ تجدید (شرح منتخب پلان — اسٹیٹک یا ڈائنامک — پر منحصر ہے)۔',
        'ERP بلنگ: ماہانہ، فعال طلبا کی تعداد کی بنیاد پر خودبخود تجدید۔',
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
        'جزوی بلنگ مہینوں کی واپسی نہیں ہوگی۔',
      ]],

      ['title'=>'حاکم شرائط','text'=>'یہ شرائط بھارتی قانون کے تحت ہیں۔ کسی بھی تنازع کو پہلے باہمی گفتگو سے حل کیا جائے گا۔ اسکوزی ۳۰ دن کی پیشگی اطلاع کے ساتھ ان شرائط کو کسی بھی وقت اپ ڈیٹ کرنے کا حق رکھتا ہے۔'],
    ],

    /* ====== HINDI ====== */
    'hi' => [
      ['title'=>'सेवा का अवलोकन','text'=>'Combo Plan आपके स्कूल को एक साथ दो चीजें देता है — एक पेशेवर वेबसाइट जो अभिभावक और छात्र देखते हैं, और एक पूर्ण ERP सिस्टम जिसे आपका स्टाफ रोज़ाना फीस, उपस्थिति, परीक्षा और अन्य कार्यों के प्रबंधन के लिए उपयोग करता है। एक पैकेज, एक रियायती कीमत, सब कुछ एक ही डैशबोर्ड के तहत।'],

      ['title'=>'कॉम्बो मूल्य विवरण','points'=>[
        'वेबसाइट: अपने चुने हुए प्लान पर '.$combo_website_discount.'% की छूट — Static या Dynamic, दोनों पात्र हैं।',
        'ERP: कोई भी tier चुनें — Basic Rs.'.$erp_per_student.', Standard Rs.'.$erp_standard_per_student.', या Complete Rs.'.$erp_complete_per_student.' प्रति छात्र प्रति माह।',
        'डोमेन पंजीकरण और नवीनीकरण शुल्क शामिल नहीं हैं।',
        'वेबसाइट का वार्षिक नवीनीकरण चुने गए प्लान (Static या Dynamic) पर निर्भर करता है।',
        'दोनों सेवाएं एक खाते और एक एडमिन डैशबोर्ड के तहत सक्रिय हैं।',
        $offer_active ? 'ऑफर केवल '.$offer_month.' में किए गए भुगतान के लिए मान्य है। एक बार भुगतान होने पर कीमत जीवन भर के लिए लॉक हो जाती है।' : '',
      ]],

      ['title'=>'भुगतान की शर्तें','points'=>[
        'काम शुरू होने से पहले कॉम्बो छूट के साथ वेबसाइट सेटअप शुल्क अग्रिम भुगतान करना होगा।',
        'ERP मासिक बिलिंग सेटअप पूरा होने के बाद शुरू होगी।',
        'UPI, बैंक ट्रांसफर या नकद जमा द्वारा स्वीकार।',
        'भुगतान की पुष्टि के कुछ घंटों के भीतर दोनों सेवाएं सक्रिय हो जाएंगी।',
      ]],

      ['title'=>'क्या शामिल है — वेबसाइट','points'=>[
        'पेशेवर स्कूल वेबसाइट — लाइव होने के लिए तैयार।',
        'मोबाइल-फ्रेंडली, रिस्पॉन्सिव लेआउट।',
        'समाचार, कार्यक्रम, फोटो गैलरी और प्रवेश फॉर्म।',
        'स्टाफ और फैकल्टी प्रोफाइल।',
        'पहले वर्ष की वेब होस्टिंग शामिल।',
        'डोमेन सेटअप और कॉन्फ़िगरेशन सहायता।',
      ]],

      ['title'=>'क्या शामिल है — ERP','points'=>[
        'छात्र पंजीकरण और पूर्ण प्रोफाइल प्रबंधन।',
        'स्टाफ और शिक्षक प्रबंधन।',
        'शुल्क संग्रह (ऑनलाइन व ऑफलाइन), रसीदें और अनुस्मारक।',
        'दैनिक और मासिक रिपोर्ट के साथ उपस्थिति प्रणाली।',
        'परीक्षा प्रबंधन, मार्क शीट और स्वचालित रिपोर्ट कार्ड।',
        'अभिभावक पोर्टल — शुल्क, उपस्थिति, परिणाम, नोटिस।',
        'इन-पैनल नोटिफिकेशन सिस्टम।',
        'पूर्ण विश्लेषण के साथ एडमिन डैशबोर्ड।',
        'क्लाउड डेटा बैकअप — दैनिक और स्वचालित।',
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
        'वेबसाइट: भुगतान के कुछ घंटों के भीतर लाइव लिंक और क्रेडेंशियल — पहले से कोई सामग्री आवश्यक नहीं।',
        'ERP सिस्टम भुगतान की पुष्टि के कुछ घंटों के भीतर सक्रिय।',
        'दोनों सेवाएं एक एडमिन पैनल के तहत एक साथ चलती हैं।',
      ]],

      ['title'=>'होस्टिंग, बिलिंग और नवीनीकरण','points'=>[
        'वेबसाइट होस्टिंग: पहला वर्ष मुफ्त, फिर वार्षिक नवीनीकरण (दर चुने गए प्लान — Static या Dynamic — पर निर्भर)।',
        'ERP बिलिंग: मासिक, सक्रिय छात्र संख्या के आधार पर स्वतः नवीनीकृत।',
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
        'आंशिक बिलिंग महीनों की कोई धनवापसी नहीं होगी।',
      ]],

      ['title'=>'शासी नियम','text'=>'ये शर्तें भारतीय कानून के तहत हैं। किसी भी विवाद को पहले आपसी बातचीत से सुलझाया जाएगा। Schoozie 30 दिन की पूर्व सूचना के साथ इन शर्तों को कभी भी अपडेट करने का अधिकार रखता है।'],
    ],
  ],
];
include '_plan_layout.php';
