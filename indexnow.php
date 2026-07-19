<?php
/* ─────────────────────────────────────────────────────────────────────────
   IndexNow helper — instantly notify Bing/Yandex (and, via them, Copilot &
   ChatGPT surfaces) when a page is added or updated.

   Key file: /96603168a951ebec78c09c069293a215.txt (must stay reachable at web root).

   Usage:
     require_once __DIR__ . '/indexnow.php';
     indexnow_ping(['https://schoozie.com/blog/new-post']);
   ───────────────────────────────────────────────────────────────────────── */

function indexnow_ping(array $urls): bool {
  $urls = array_values(array_filter($urls));
  if (!$urls || !function_exists('curl_init')) return false;

  $key = '96603168a951ebec78c09c069293a215';
  $payload = json_encode([
    'host'        => 'schoozie.com',
    'key'         => $key,
    'keyLocation' => "https://schoozie.com/{$key}.txt",
    'urlList'     => $urls,
  ]);

  $ch = curl_init('https://api.indexnow.org/indexnow');
  curl_setopt_array($ch, [
    CURLOPT_POST           => true,
    CURLOPT_HTTPHEADER     => ['Content-Type: application/json; charset=utf-8'],
    CURLOPT_POSTFIELDS     => $payload,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_TIMEOUT        => 10,
  ]);
  curl_exec($ch);
  $code = (int) curl_getinfo($ch, CURLINFO_HTTP_CODE);
  curl_close($ch);

  return $code === 200 || $code === 202;
}
