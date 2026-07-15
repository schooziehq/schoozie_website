<?php
/* ─────────────────────────────────────────────
   SCHOOZIE - OFFER CONFIGURATION
   Change these values whenever the offer changes.
   Set $offer_active = false to hide all offers.
───────────────────────────────────────────── */

/* ─────────────────────────────────────────────
   CONTACT DETAILS
   Update here and it changes everywhere on the site.
───────────────────────────────────────────── */
$demo_url         = "https://schools.schoozie.com/aggarwal-public/";

$contact_email    = "hello@schoozie.com";
$contact_whatsapp = "919045109910";          // with country code, no +

/* ─────────────────────────────────────────────
   SMTP (Hostinger) — for the Request-a-Callback form.
   The mailbox PASSWORD lives in config.local.php (gitignored).
───────────────────────────────────────────── */
$smtp_host      = "smtp.hostinger.com";
$smtp_port      = 465;              // 465 = SSL, 587 = STARTTLS
$smtp_secure    = "ssl";           // "ssl" for 465, "tls" for 587
$smtp_user      = $contact_email;  // full mailbox address = hello@schoozie.com
$smtp_from_name = "Schoozie Website";
$callback_to    = $contact_email;  // where callback requests are delivered
$smtp_pass      = "";              // overridden by config.local.php (do NOT put the real password here)
$contact_city     = "Roorkee";
$contact_region   = "Uttarakhand";
$contact_country  = "India";

// Office addresses
$office_south_street = "Povval, Muliyar Post Office";
$office_south_city   = "Kasaragod";
$office_south_region = "Kerala";

$office_north_street = "";
$office_north_city   = "Roorkee";
$office_north_pin    = "";
$office_north_region = "Uttarakhand";

/* ─────────────────────────────────────────────
   GOOGLE ANALYTICS
───────────────────────────────────────────── */
$ga_id = "G-DZ3RFQ7QQL";

/* ─────────────────────────────────────────────
   PRICING   (all figures in ₹, GST excluded)
───────────────────────────────────────────── */

/* Promotional offer — set true to switch the site to offer pricing */
$offer_active = false;
$offer_month  = "Limited Offer";                    // short badge label
$offer_full   = "Limited Spots for Premium Schools"; // longer offer headline

/* ── School Websites — one-time build + yearly renewal ── */
/* Static */
$static_offer_price    = "6,499";    // shown price
$static_regular_price  = "8,999";    // struck-through (was)
$static_saving         = "2,500";    // you save
$static_renewal_price  = "4,800";    // per year from year 2

/* Dynamic */
$dynamic_offer_price   = "14,499";
$dynamic_regular_price = "19,999";
$dynamic_saving        = "5,500";
$dynamic_renewal_price = "9,800";

/* ── School ERP — quarterly base price per tier ──
   Half-yearly & yearly totals are derived from these + the savings %
   below, inside erp.php (do NOT hard-code them here). */
$erp_basic_quarterly    = "8,997";
$erp_standard_quarterly = "17,997";
$erp_premium_quarterly  = "29,997";

$erp_savings_halfyearly = "5";       // % off vs paying quarterly
$erp_savings_yearly     = "15";      // % off vs paying quarterly

/* ── Combo (Website + ERP bundle) ── */
$combo_website_discount = "50";      // % off the chosen website
