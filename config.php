<?php
/* ─────────────────────────────────────────────
   SCHOOZIE — OFFER CONFIGURATION
   Change these values whenever the offer changes.
   Set $offer_active = false to hide all offers.
───────────────────────────────────────────── */

/* ─────────────────────────────────────────────
   CONTACT DETAILS
   Update here and it changes everywhere on the site.
───────────────────────────────────────────── */
$demo_url         = "https://schools.schoozie.com/aggarwal-public/";

$contact_email    = "schooziehq@gmail.com";
$contact_whatsapp = "919045109910";          // with country code, no +
$contact_city     = "Roorkee";
$contact_region   = "Uttarakhand";
$contact_country  = "India";

// Office addresses
$office_south_street = "Povval, Muliyar Post Office";
$office_south_city   = "Kasaragod";
$office_south_region = "Kerala";

$office_north_street = "Lane No. 8, Nand Vihar";
$office_north_city   = "Roorkee";
$office_north_pin    = "247667";
$office_north_region = "Uttarakhand";

$offer_active = true;

$offer_month  = "April";           // short label shown on badges & savings text
$offer_full   = "April 2025 Special Offers — Limited Time";

/* Static Website */
$static_offer_price   = "4,444";
$static_regular_price = "6,999";
$static_saving        = "2,555";

/* Dynamic Website */
$dynamic_offer_price   = "9,999";
$dynamic_regular_price = "17,999";
$dynamic_saving        = "8,000";

/* ERP — per-student monthly + setup fee */
$erp_per_student          = "10";   // Basic plan
$erp_standard_per_student = "20";   // Standard plan
$erp_complete_per_student = "25";   // Complete plan
$erp_offer_setup    = "21500";
$erp_regular_setup  = "35999";
$erp_setup_saving   = "14,499";

/* Renewal prices */
$static_renewal_price  = "4,200";
$dynamic_renewal_price = "7,800";

/* Combo */
$combo_website_discount = "50";   // % off on chosen website (static or dynamic)
