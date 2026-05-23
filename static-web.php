<?php
/**
 * static-web.php - Legacy URL (indexed by Google)
 *
 * The Static Website plan has been consolidated into /websites.php
 * (along with Dynamic). This file now issues a 301 permanent redirect
 * so the existing SEO authority transfers to the new URL.
 *
 * Do NOT delete - the URL is referenced from external sites and search results.
 */
header('HTTP/1.1 301 Moved Permanently');
header('Location: /websites.php#static');
exit;
