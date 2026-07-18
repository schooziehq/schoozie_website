<?php
/* ─────────────────────────────────────────────────────────────────────────
   _schema.php — Reusable structured-data helpers.

   sz_site_entities()  → WebSite + Organization (call once, on the homepage).
   sz_page(...)        → WebPage (with dateModified) + BreadcrumbList (subpages).

   All blocks are linked by @id into one graph so search engines and AI
   understand Schoozie as a single entity. No SearchAction is emitted because
   the site has no search endpoint (fake markup would violate Google's rules).
   ───────────────────────────────────────────────────────────────────────── */

if (!function_exists('sz_schema_out')) {

  function sz_schema_out(array $data): void {
    echo '<script type="application/ld+json">' . "\n"
       . json_encode($data, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT)
       . "\n</script>\n";
  }

  /* WebSite + Organization — the site-wide entity anchors. Homepage only. */
  function sz_site_entities(): void {
    global $contact_email;

    $org = [
      '@type' => 'Organization',
      '@id'   => 'https://schoozie.com/#organization',
      'name'  => 'Schoozie',
      'url'   => 'https://schoozie.com/',
      'logo'  => [
        '@type'  => 'ImageObject',
        'url'    => 'https://schoozie.com/assets/icons/web/icon-512.png',
        'width'  => 512,
        'height' => 512,
      ],
      'description' => 'AI-powered school ERP, websites and CMS for Indian schools, with parent communication in Hindi, Tamil, Bengali and more.',
      'areaServed'  => ['@type' => 'Country', 'name' => 'India'],
    ];
    if (!empty($contact_email)) {
      $org['contactPoint'] = [
        '@type'             => 'ContactPoint',
        'contactType'       => 'customer support',
        'email'             => $contact_email,
        'areaServed'        => 'IN',
        'availableLanguage' => ['English', 'Hindi', 'Tamil', 'Bengali'],
      ];
    }

    $website = [
      '@type'         => 'WebSite',
      '@id'           => 'https://schoozie.com/#website',
      'url'           => 'https://schoozie.com/',
      'name'          => 'Schoozie',
      'alternateName' => 'Schoozie School ERP & Websites',
      'description'   => 'AI-powered school management platform for Indian schools.',
      'inLanguage'    => 'en-IN',
      'publisher'     => ['@id' => 'https://schoozie.com/#organization'],
    ];

    sz_schema_out(['@context' => 'https://schema.org', '@graph' => [$org, $website]]);
  }

  /* WebPage (dateModified from the file's mtime) + BreadcrumbList.
     $crumbs = [['name'=>'Home','url'=>'https://schoozie.com/'], ...] */
  function sz_page(string $name, string $description, string $url, string $file, array $crumbs): void {
    $webpage = [
      '@type'       => 'WebPage',
      '@id'         => $url . '#webpage',
      'url'         => $url,
      'name'        => $name,
      'description' => $description,
      'inLanguage'  => 'en-IN',
      'isPartOf'    => ['@id' => 'https://schoozie.com/#website'],
      'publisher'   => ['@id' => 'https://schoozie.com/#organization'],
    ];
    $modified = @filemtime($file);
    if ($modified) $webpage['dateModified'] = date('c', $modified);

    $items = [];
    foreach ($crumbs as $i => $c) {
      $items[] = [
        '@type'    => 'ListItem',
        'position' => $i + 1,
        'name'     => $c['name'],
        'item'     => $c['url'],
      ];
    }
    $breadcrumb = ['@type' => 'BreadcrumbList', 'itemListElement' => $items];

    sz_schema_out(['@context' => 'https://schema.org', '@graph' => [$webpage, $breadcrumb]]);
  }
}
