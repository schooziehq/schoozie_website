<?php
/* ─────────────────────────────────────────────
   Request-a-Callback handler.
   Receives the footer form (name, phone, school) and emails it to
   $callback_to via Hostinger SMTP using PHPMailer. Returns JSON.
───────────────────────────────────────────── */
declare(strict_types=1);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

header('Content-Type: application/json; charset=utf-8');

function fail(string $msg, int $code = 400): void {
  http_response_code($code);
  echo json_encode(['ok' => false, 'error' => $msg]);
  exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') fail('Method not allowed', 405);

require __DIR__ . '/config.php';
if (is_file(__DIR__ . '/config.local.php')) require __DIR__ . '/config.local.php';
require __DIR__ . '/lib/PHPMailer/src/Exception.php';
require __DIR__ . '/lib/PHPMailer/src/PHPMailer.php';
require __DIR__ . '/lib/PHPMailer/src/SMTP.php';

/* Honeypot: bots fill hidden fields. Pretend success, send nothing. */
if (!empty($_POST['company'])) { echo json_encode(['ok' => true]); exit; }

$clean = static function (string $v, int $max = 120): string {
  $v = trim($v);
  $v = preg_replace('/[\r\n\t]+/', ' ', $v); // strip control chars
  return mb_substr($v, 0, $max);
};

$name   = $clean($_POST['name']   ?? '');
$phone  = $clean($_POST['phone']  ?? '', 40);
$school = $clean($_POST['school'] ?? '', 160);

if ($name === '')  fail('Please enter your name.');
if ($phone === '') fail('Please enter a phone number.');
if (strlen(preg_replace('/\D/', '', $phone)) < 7) fail('Please enter a valid phone number.');

$ip   = $_SERVER['REMOTE_ADDR'] ?? '';
$page = $clean($_POST['page'] ?? '', 300);
$when = date('d M Y, H:i');

$rows = [
  ['Name', $name],
  ['Phone', $phone],
  ['School / institution', $school !== '' ? $school : '—'],
  ['Submitted', $when],
  ['Page', $page !== '' ? $page : '—'],
  ['IP', $ip],
];
$htmlRows = '';
$textRows = '';
foreach ($rows as [$k, $v]) {
  $htmlRows .= '<tr><td style="padding:6px 14px 6px 0;color:#5a6552;font-size:13px;white-space:nowrap;vertical-align:top">' . htmlspecialchars($k) . '</td><td style="padding:6px 0;color:#1c241a;font-size:14px;font-weight:600">' . htmlspecialchars($v) . '</td></tr>';
  $textRows .= $k . ': ' . $v . "\n";
}
$html = '<div style="font-family:Arial,Helvetica,sans-serif;max-width:520px">'
      . '<h2 style="margin:0 0 4px;color:#4B5D3F;font-size:18px">New callback request</h2>'
      . '<p style="margin:0 0 16px;color:#5a6552;font-size:13px">From the Schoozie website</p>'
      . '<table style="border-collapse:collapse">' . $htmlRows . '</table></div>';
$text = "New callback request (Schoozie website)\n\n" . $textRows;

$mail = new PHPMailer(true);
try {
  $mail->isSMTP();
  $mail->Host       = $smtp_host;
  $mail->SMTPAuth   = true;
  $mail->Username   = $smtp_user;
  $mail->Password   = $smtp_pass;
  $mail->SMTPSecure = $smtp_secure; // 'ssl' | 'tls'
  $mail->Port       = (int)$smtp_port;
  $mail->CharSet    = 'UTF-8';

  $mail->setFrom($smtp_user, $smtp_from_name);
  $mail->addAddress($callback_to);

  $mail->Subject = 'New Callback Request — ' . $name;
  $mail->isHTML(true);
  $mail->Body    = $html;
  $mail->AltBody = $text;

  $mail->send();
  echo json_encode(['ok' => true]);
} catch (Exception $e) {
  error_log('[send-callback] ' . $mail->ErrorInfo);
  fail('Could not send right now. Please try again or WhatsApp us.', 500);
}
