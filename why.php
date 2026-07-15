<?php
/**
 * why.php - Legacy URL (indexed by Google)
 *
 * The "Why Schoozie" content has been folded into the homepage and the
 * product pages. This file now issues a 301 permanent redirect so the
 * existing SEO authority transfers to the homepage.
 *
 * Do NOT delete - the URL may be referenced from external sites and search results.
 */
header('HTTP/1.1 301 Moved Permanently');
header('Location: /');
exit;
