<?php require_once 'config.php';
$plan = [
  'name'           => 'Static Website',
  'badge'          => $offer_active
                        ? '<i class="fa-solid fa-tag"></i> '.$offer_month.' Special Offer'
                        : '<i class="fa-solid fa-desktop"></i> Standard Plan',
  'badge_bg'       => $offer_active ? 'rgba(0,183,255,0.12)' : 'rgba(255,255,255,0.07)',
  'badge_color'    => $offer_active ? '#00b7ff' : '#aaa',
  'badge_border'   => $offer_active ? 'rgba(0,183,255,0.35)' : 'rgba(255,255,255,0.15)',
  'title_gradient' => 'linear-gradient(90deg,#00b7ff,#a855f7)',
  'accent'         => '#00b7ff',
  'description'    => 'Just share your school\'s logo, photos, and basic info with us — we design, build, and publish your website. No technical knowledge needed. Your school goes live online without you lifting a finger.',
  'price_display'  => 'Rs. '.($offer_active ? $static_offer_price : $static_regular_price),
  'price_period'   => 'one-time setup fee',
  'price_old'      => $offer_active ? 'Rs. '.$static_regular_price : '',
  'price_save'     => $offer_active ? 'Save Rs. '.$static_saving.' this '.$offer_month : '',
  'domain_note'    => '* Domain charges excluded &nbsp;·&nbsp; Annual renewal: Rs. '.$static_renewal_price.'/yr',
  'btn_bg'         => 'linear-gradient(90deg,#00b7ff,#a855f7)',
  'btn_text'       => 'Contact Us',
  'tab_color'      => 'green',
  'features' => [
    ['<i class="fa-solid fa-desktop" style="color:#00b7ff"></i>','Professional school website'],
    ['<i class="fa-solid fa-mobile-screen" style="color:#a855f7"></i>','Mobile responsive design'],
    ['<i class="fa-solid fa-clipboard-list" style="color:#f59e0b"></i>','Admissions inquiry form'],
    ['<i class="fa-solid fa-images" style="color:#ec4899"></i>','Photo gallery & news'],
    ['<i class="fa-solid fa-chalkboard-user" style="color:#06b6d4"></i>','Staff & faculty profiles'],
    ['<i class="fa-solid fa-bullhorn" style="color:#f97316"></i>','Notice board'],
    ['<i class="fa-solid fa-pen" style="color:#10b981"></i>','Content managed by Schoozie'],
    ['<i class="fa-solid fa-arrows-rotate" style="color:#06b6d4"></i>','Free updates on request'],
    ['<i class="fa-solid fa-globe" style="color:#3b82f6"></i>','1 year hosting included'],
    ['<i class="fa-solid fa-bolt" style="color:#fbbf24"></i>','Fast-loading pages'],
    ['<i class="fa-solid fa-magnifying-glass" style="color:#a855f7"></i>','SEO-ready structure'],
    ['<i class="fa-solid fa-gear" style="color:#9ca3af"></i>','Domain setup assistance'],
  ],
  'tc' => [

    /* ====== ENGLISH ====== */
    'en' => [
      ['title'=>'What We Do','text'=>'We design, build, and publish a professional website for your school. You share your logo, photos, school name, and basic information with us — we handle everything else. All content is managed by the Schoozie team on your behalf.'],
      ['title'=>'Pricing','points'=>[
        $offer_active
          ? '<strong>Offer Price: Rs. '.$static_offer_price.'</strong> (one-time setup) — Save Rs. '.$static_saving.' this '.$offer_month.'.'
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
        'Domain setup and configuration (you purchase the domain — we set it up).',
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
        'Updates applied within 2–3 working days.',
      ]],
      ['title'=>'Delivery','text'=>'Once we receive all your content (logo, photos, school information), your website is ready within 5–10 minutes. We\'ll send you the live link on WhatsApp the moment it\'s done.'],
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
      ['title'=>'Support','text'=>'Support available via WhatsApp and email during business hours (Mon–Sat, 10am–5pm IST). Response within 24 hours.'],
      ['title'=>'Terms','text'=>'These terms are governed under Indian law. Any dispute will first be resolved through mutual discussion. Schoozie may update these terms at any time with prior notice via WhatsApp or email.'],
    ],

    /* ====== URDU ====== */
    'ur' => [
      ['title'=>'ہم کیا کرتے ہیں','text'=>'ہم آپ کے اسکول کے لیے ایک پیشہ ورانہ ویب سائٹ ڈیزائن، تیار اور شائع کرتے ہیں۔ آپ ہمیں اپنا لوگو، تصاویر، اسکول کا نام اور بنیادی معلومات دیں — باقی سب ہم سنبھالتے ہیں۔'],
      ['title'=>'قیمت','points'=>[
        $offer_active
          ? '<strong>آفر قیمت: '.str_replace(',','،',$static_offer_price).' روپے</strong> (یکمشت سیٹ اپ) — اس '.$offer_month.' میں '.str_replace(',','،',$static_saving).' روپے کی بچت۔'
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
        'ڈومین سیٹ اپ اور کنفیگریشن (آپ ڈومین خریدیں — ہم سیٹ کریں)۔',
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

    /* ====== HINDI ====== */
    'hi' => [
      ['title'=>'हम क्या करते हैं','text'=>'हम आपके स्कूल के लिए एक प्रोफेशनल वेबसाइट डिज़ाइन, बनाते और लाइव करते हैं। आप हमें अपना लोगो, फोटो, स्कूल का नाम और बुनियादी जानकारी दें — बाकी सब हम संभालते हैं।'],
      ['title'=>'मूल्य निर्धारण','points'=>[
        $offer_active
          ? '<strong>ऑफर मूल्य: Rs. '.$static_offer_price.'</strong> (एकमुश्त सेटअप) — इस '.$offer_month.' में Rs. '.$static_saving.' की बचत।'
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
        'डोमेन सेटअप (आप डोमेन खरीदें — हम सेट करें)।',
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
      ['title'=>'डिलीवरी','text'=>'एक बार जब हमें आपकी सारी सामग्री (लोगो, फोटो, स्कूल की जानकारी) मिल जाए, तो आपकी वेबसाइट 5–10 मिनट के अंदर तैयार हो जाती है। हम तुरंत WhatsApp पर लाइव लिंक भेजेंगे।'],
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
  ],
];
include '_plan_layout.php';
