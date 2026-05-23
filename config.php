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

$offer_active = false;

$offer_month  = "Limited Offer";           // short label shown on badges & savings text
$offer_full   = "Limited Spots for Premium Schools";

/* Static Website */
$static_offer_price   = "6,499";
$static_regular_price = "8,999";
$static_saving        = "2,500";

/* Dynamic Website */
$dynamic_offer_price   = "14,499";
$dynamic_regular_price = "19,999";
$dynamic_saving        = "5,500";

/* ERP - per-student monthly + setup fee (legacy - used by combo.php) */
$erp_per_student          = "10";   // Basic plan
$erp_standard_per_student = "20";   // Standard plan
$erp_complete_per_student = "25";   // Complete plan
$erp_offer_setup    = "21,499";
$erp_regular_setup  = "28,499";
$erp_setup_saving   = "7,000";

/* ERP - new tiered subscription pricing (Quarterly / Half-Yearly / Yearly) */
$erp_basic_quarterly     = "8,997";
$erp_basic_halfyearly    = "16,239.59";
$erp_basic_yearly        = "26,001.33";
$erp_basic_modules       = 9;

$erp_standard_quarterly  = "17,997";
$erp_standard_halfyearly = "32,484.59";
$erp_standard_yearly     = "52,011.33";
$erp_standard_modules    = 13;

$erp_premium_quarterly   = "29,997";
$erp_premium_halfyearly  = "54,144.59";
$erp_premium_yearly      = "86,691.33";
$erp_premium_modules     = 18;

$erp_savings_halfyearly  = "5";   // % off vs quarterly (marketing label)
$erp_savings_yearly      = "15";  // % off vs quarterly (marketing label)

/* Renewal prices */
$static_renewal_price  = "4,800";
$dynamic_renewal_price = "9,800";

/* Combo */
$combo_website_discount = "50";   // % off on chosen website (static or dynamic)
