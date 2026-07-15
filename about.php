<?php
/**
 * about.php - Legacy URL (indexed by Google)
 *
 * The About content now lives on the homepage. This file issues a 301
 * permanent redirect so the existing SEO authority transfers to the homepage.
 *
 * Do NOT delete - the URL may be referenced from external sites and search results.
 */
header('HTTP/1.1 301 Moved Permanently');
header('Location: /');
exit;
