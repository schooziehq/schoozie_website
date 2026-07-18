<?php
/* ─────────────────────────────────────────────────────────────────────────
   _faq.php — Reusable FAQ block (single source of truth).

   Renders BOTH the visible accordion AND the matching FAQPage structured data
   from ONE array, so the two can never drift apart (Google requires schema to
   reflect visible content).

   Usage on any page:
     require_once __DIR__ . '/_faq.php';
     sz_render_faq([
       ['q' => 'Your question?', 'a' => 'Answer. May contain <strong>bold</strong>.'],
       ...
     ], 'Frequently asked questions', 'FAQ');

   Uses its own "sz-faq" class namespace (won't clash with the contact page's
   .faq-item styles) and ships its own CSS, printed once per page.
   ───────────────────────────────────────────────────────────────────────── */

if (!function_exists('sz_render_faq')) {

  /* Plain-text version of a question/answer for the JSON-LD (strip tags,
     decode entities, collapse whitespace). */
  function sz_faq_text(string $html): string {
    $t = html_entity_decode(strip_tags($html), ENT_QUOTES, 'UTF-8');
    return trim(preg_replace('/\s+/', ' ', $t));
  }

  function sz_faq_styles(): void {
    if (defined('SZ_FAQ_CSS_DONE')) return;
    define('SZ_FAQ_CSS_DONE', true);
    ?>
<style>
.sz-faq{padding:64px 0;background:var(--bg,#f8f9f6)}
.sz-faq .wrap{max-width:820px;margin:0 auto;padding:0 20px}
.sz-faq-head{text-align:center;margin-bottom:34px}
.sz-faq-eyebrow{display:inline-block;font-size:12px;font-weight:700;letter-spacing:.14em;text-transform:uppercase;color:var(--accent,#a4791b);margin-bottom:10px}
.sz-faq-head h2{font-family:var(--font-head,'Source Serif 4',Georgia,serif);font-size:clamp(26px,4vw,38px);line-height:1.15;color:var(--ink,#1c241a);margin:0}
.sz-faq-list{display:flex;flex-direction:column;gap:12px}
.sz-faq-item{background:var(--surface,#fff);border:1px solid var(--line,rgba(28,36,26,.12));border-radius:var(--radius,16px);overflow:hidden;transition:border-color .2s,box-shadow .2s}
.sz-faq-item[open]{border-color:var(--primary,#4B5D3F);box-shadow:0 6px 24px rgba(28,36,26,.06)}
.sz-faq-q{list-style:none;cursor:pointer;display:flex;align-items:center;justify-content:space-between;gap:16px;padding:18px 22px;font-size:16px;font-weight:600;color:var(--ink,#1c241a)}
.sz-faq-q::-webkit-details-marker{display:none}
.sz-faq-q:hover{color:var(--primary,#4B5D3F)}
.sz-faq-ic{flex:0 0 auto;width:24px;height:24px;position:relative;transition:transform .25s}
.sz-faq-ic::before,.sz-faq-ic::after{content:"";position:absolute;top:50%;left:50%;width:12px;height:2px;background:var(--primary,#4B5D3F);border-radius:2px;transform:translate(-50%,-50%)}
.sz-faq-ic::after{transform:translate(-50%,-50%) rotate(90deg)}
.sz-faq-item[open] .sz-faq-ic{transform:rotate(45deg)}
.sz-faq-a{padding:0 22px 20px;font-size:15px;line-height:1.7;color:var(--muted,#5a6552)}
.sz-faq-a strong{color:var(--ink,#1c241a);font-weight:700}
.sz-faq-a a{color:var(--primary,#4B5D3F);text-decoration:underline}
@media (max-width:520px){.sz-faq{padding:48px 0}.sz-faq-q{padding:16px 18px;font-size:15px}.sz-faq-a{padding:0 18px 18px}}
</style>
    <?php
  }

  function sz_render_faq(array $faqs, string $title = 'Frequently asked questions', string $eyebrow = 'FAQ'): void {
    $faqs = array_values(array_filter($faqs, fn($f) => !empty($f['q']) && !empty($f['a'])));
    if (!$faqs) return;

    sz_faq_styles();

    /* Visible accordion (first item open) */
    echo '<section class="sz-faq" aria-labelledby="sz-faq-h">' . "\n";
    echo '  <div class="wrap">' . "\n";
    echo '    <div class="sz-faq-head">' . "\n";
    echo '      <span class="sz-faq-eyebrow">' . htmlspecialchars($eyebrow) . '</span>' . "\n";
    echo '      <h2 id="sz-faq-h">' . htmlspecialchars($title) . '</h2>' . "\n";
    echo '    </div>' . "\n";
    echo '    <div class="sz-faq-list">' . "\n";
    foreach ($faqs as $i => $f) {
      $open = $i === 0 ? ' open' : '';
      echo '      <details class="sz-faq-item"' . $open . '>' . "\n";
      echo '        <summary class="sz-faq-q">' . $f['q'] . '<span class="sz-faq-ic" aria-hidden="true"></span></summary>' . "\n";
      echo '        <div class="sz-faq-a">' . $f['a'] . '</div>' . "\n";
      echo '      </details>' . "\n";
    }
    echo '    </div>' . "\n";
    echo '  </div>' . "\n";
    echo '</section>' . "\n";

    /* Matching FAQPage JSON-LD (plain text, built from the SAME array) */
    $items = [];
    foreach ($faqs as $f) {
      $items[] = [
        '@type' => 'Question',
        'name'  => sz_faq_text($f['q']),
        'acceptedAnswer' => ['@type' => 'Answer', 'text' => sz_faq_text($f['a'])],
      ];
    }
    $ld = ['@context' => 'https://schema.org', '@type' => 'FAQPage', 'mainEntity' => $items];
    echo '<script type="application/ld+json">' . "\n"
       . json_encode($ld, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT)
       . "\n</script>\n";
  }
}
