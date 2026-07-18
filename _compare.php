<?php
/* ─────────────────────────────────────────────────────────────────────────
   _compare.php — Reusable comparison table (AI engines love quoting tables).

   Usage:
     require_once __DIR__ . '/_compare.php';
     sz_render_compare(
       'Schoozie vs a traditional ERP',   // title
       'Why schools switch',              // eyebrow
       ['', 'Traditional ERP', 'Schoozie'],   // column headers (first is the row-label col)
       [
         ['Fee collection', 'Manual entry &amp; cash counters', 'Online, auto-reconciled by AI'],
         ...
       ],
       2                                  // 0-based column to highlight (the Schoozie col). -1 = none
     );

   Self-contained styles (sz-cmp namespace), printed once. Cells may contain
   HTML (e.g. Font Awesome icons, <strong>). Horizontally scrolls on mobile.
   ───────────────────────────────────────────────────────────────────────── */

if (!function_exists('sz_render_compare')) {

  function sz_cmp_styles(): void {
    if (defined('SZ_CMP_CSS_DONE')) return;
    define('SZ_CMP_CSS_DONE', true);
    ?>
<style>
.sz-cmp{padding:64px 0;background:var(--bg,#f8f9f6)}
.sz-cmp .wrap{max-width:960px;margin:0 auto;padding:0 20px}
.sz-cmp-head{text-align:center;margin-bottom:30px}
.sz-cmp-eyebrow{display:inline-block;font-size:12px;font-weight:700;letter-spacing:.14em;text-transform:uppercase;color:var(--accent,#a4791b);margin-bottom:10px}
.sz-cmp-head h2{font-family:var(--font-head,'Source Serif 4',Georgia,serif);font-size:clamp(26px,4vw,38px);line-height:1.15;color:var(--ink,#1c241a);margin:0}
.sz-cmp-scroll{overflow-x:auto;-webkit-overflow-scrolling:touch}
.sz-cmp-table{width:100%;border-collapse:separate;border-spacing:0;min-width:520px;background:var(--surface,#fff);border:1px solid var(--line,rgba(28,36,26,.12));border-radius:var(--radius,16px);overflow:hidden}
.sz-cmp-table th,.sz-cmp-table td{padding:14px 18px;text-align:left;font-size:15px;vertical-align:top;border-bottom:1px solid var(--line,rgba(28,36,26,.1))}
.sz-cmp-table thead th{font-family:var(--font-head,'Source Serif 4',Georgia,serif);font-size:16px;font-weight:700;color:var(--ink,#1c241a);background:var(--soft,#f2f4f1)}
.sz-cmp-table tbody tr:last-child th,.sz-cmp-table tbody tr:last-child td{border-bottom:none}
.sz-cmp-table tbody th{font-weight:600;color:var(--ink,#1c241a);white-space:nowrap}
.sz-cmp-table td{color:var(--muted,#5a6552)}
.sz-cmp-table .is-hi{background:rgba(75,93,63,.06);color:var(--ink,#1c241a);font-weight:600}
.sz-cmp-table thead .is-hi{background:var(--primary,#4B5D3F);color:#fff}
.sz-cmp-table td.is-hi strong{color:var(--primary-d,#3a4a30)}
.sz-cmp .yes{color:var(--primary,#4B5D3F)}
.sz-cmp .no{color:#b0472f}
@media (max-width:520px){.sz-cmp{padding:48px 0}.sz-cmp-table th,.sz-cmp-table td{padding:12px 14px;font-size:14px}}
</style>
    <?php
  }

  function sz_render_compare(string $title, string $eyebrow, array $headers, array $rows, int $highlight = -1): void {
    if (!$headers || !$rows) return;
    sz_cmp_styles();

    echo '<section class="sz-cmp">' . "\n  <div class=\"wrap\">\n";
    echo '    <div class="sz-cmp-head">' . "\n";
    echo '      <span class="sz-cmp-eyebrow">' . htmlspecialchars($eyebrow) . '</span>' . "\n";
    echo '      <h2>' . htmlspecialchars($title) . '</h2>' . "\n";
    echo '    </div>' . "\n";
    echo '    <div class="sz-cmp-scroll">' . "\n";
    echo '      <table class="sz-cmp-table">' . "\n        <thead><tr>";
    foreach ($headers as $i => $h) {
      $cls = ($i === $highlight) ? ' class="is-hi"' : '';
      echo '<th' . $cls . '>' . $h . '</th>';
    }
    echo "</tr></thead>\n        <tbody>\n";
    foreach ($rows as $row) {
      echo '          <tr>';
      foreach (array_values($row) as $i => $cell) {
        $cls = ($i === $highlight) ? ' class="is-hi"' : '';
        if ($i === 0) echo '<th scope="row">' . $cell . '</th>';
        else echo '<td' . $cls . '>' . $cell . '</td>';
      }
      echo "</tr>\n";
    }
    echo "        </tbody>\n      </table>\n    </div>\n  </div>\n</section>\n";
  }
}
