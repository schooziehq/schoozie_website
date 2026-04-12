<?php
/* ─────────────────────────────────────────────
   SCHOOZIE — OFFER CONFIGURATION
   Change these values whenever the offer changes.
   Set $offer_active = false to hide all offers.
───────────────────────────────────────────── */

$offer_active = true;

$offer_month  = "April";           // short label shown on badges & savings text
$offer_full   = "April 2025 Special Offers — Limited Time";

/* Static Website */
$static_offer_price   = "4,444";
$static_regular_price = "5,999";
$static_saving        = "1,555";

/* Dynamic Website */
$dynamic_offer_price   = "9,999";
$dynamic_regular_price = "12,999";
$dynamic_saving        = "3,000";

/* ERP — setup fee only (per-student stays same) */
$erp_offer_setup    = "9,999";
$erp_regular_setup  = "21,500";
$erp_setup_saving   = "11,501";

/* Combo — ERP setup fee (website stays 50% off) */
$combo_erp_setup = "9,999";
