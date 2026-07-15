<?php
$site_name = "Schoozie"; $year = date("Y"); require_once 'config.php';
if(!isset($legal_title))     $legal_title     = 'Legal';
if(!isset($legal_desc))      $legal_desc      = $legal_title.' — Schoozie, a school-management platform for Indian schools.';
if(!isset($legal_effective)) $legal_effective = '7 July 2026';
if(!isset($legal_updated))   $legal_updated   = '7 July 2026';
$legal_page = basename($_SERVER['SCRIPT_NAME']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include '_analytics.php'; ?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo htmlspecialchars($legal_title); ?> | Schoozie</title>
<meta name="description" content="<?php echo htmlspecialchars($legal_desc); ?>">
<meta name="robots" content="index, follow">
<link rel="canonical" href="https://schoozie.com/<?php echo $legal_page; ?>">

<!-- Open Graph (shared by every legal page) -->
<meta property="og:type" content="website">
<meta property="og:title" content="<?php echo htmlspecialchars($legal_title); ?> | Schoozie">
<meta property="og:description" content="<?php echo htmlspecialchars($legal_desc); ?>">
<meta property="og:url" content="https://schoozie.com/<?php echo $legal_page; ?>">
<meta property="og:image" content="https://schoozie.com/assets/og-image.jpg">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:image:type" content="image/jpeg">
<meta property="og:image:alt" content="Schoozie - School Websites, CMS &amp; ERP Software for Indian Schools">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?php echo htmlspecialchars($legal_title); ?> | Schoozie">
<meta name="twitter:description" content="<?php echo htmlspecialchars($legal_desc); ?>">
<meta name="twitter:image" content="https://schoozie.com/assets/og-image.jpg">

<link rel="icon" href="assets/icons/web/favicon.ico" sizes="32x32">
<link rel="icon" href="assets/icons/web/favicon.svg" type="image/svg+xml">
<link rel="apple-touch-icon" href="assets/icons/web/apple-touch-icon.png">
<link rel="manifest" href="assets/icons/web/site.webmanifest">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<link rel="stylesheet" href="css/global.css?v=<?php echo @filemtime('css/global.css'); ?>">
<link rel="stylesheet" href="css/site-chrome.css?v=<?php echo @filemtime('css/site-chrome.css'); ?>">
<link rel="stylesheet" href="css/legal.css?v=<?php echo @filemtime('css/legal.css'); ?>">
</head>
<body class="page-legal">
<?php $active_page = 'legal'; include '_header.php'; ?>
<div class="legal">
  <div class="legal-wrap">
    <div class="legal-head">
      <span class="legal-brand">Schoozie</span>
      <h1><?php echo htmlspecialchars($legal_title); ?></h1>
      <p class="legal-meta">Effective date: <?php echo $legal_effective; ?> &nbsp;&middot;&nbsp; Last updated: <?php echo $legal_updated; ?></p>
    </div>
    <div class="legal-body">
<?php if(!isset($legal_no_intro)): ?>
      <p>Schoozie (&ldquo;Schoozie&rdquo;, &ldquo;we&rdquo;, &ldquo;us&rdquo; or &ldquo;our&rdquo;) is a school-management platform, available as a website and as mobile applications for Android and iOS. Schoozie is operated by its proprietor from Roorkee, Uttarakhand, India. This document applies to your use of our website at <a href="https://schoozie.com">schoozie.com</a>, our mobile applications, and all related services (together, the &ldquo;Services&rdquo;).</p>
<?php endif; ?>
