<?php
$g_hostname               = 'localhost';
$g_db_type                = 'mysqli';
$g_database_name          = 'NewBugtracker';
$g_db_username            = 'root';
$g_db_password            = '';

$g_default_timezone       = 'Europe/Berlin';

$g_crypto_master_salt     = 'M5o6fDmkYnTBiYtw0hkZlpbchskk9dPrLZBQqS/0H6E=';

$g_path                   = 'https://localhost/cds/';

# --- Branding ---
$g_window_title			= 'Mantis CDS';
$g_logo_image			= 'images/cds_logo.jpg';
$g_favicon_image		= 'images/cds.png';


# --- Email Configuration ---

$g_phpMailer_method     = PHPMAILER_METHOD_SMTP;
$g_smtp_host            = 'smtp.office365.com';# used with PHPMAILER_METHOD_SMTP
$g_smtp_username        = 'notification@creditdusenegal.com';                   # used with PHPMAILER_METHOD_SMTP
$g_smtp_password        = 'LetMeP@$$2025';                   # used with PHPMAILER_METHOD_SMTP
$g_administrator_email  = 'awa.thiouf@creditdusenegal.com';
$g_webmaster_email      = 'awa.thiouf@creditdusenegal.com';
$g_from_name            = 'Mantis CDS';
$g_from_email           = 'notification@creditdusenegal.com';    # the "From: " field in emails
$g_return_path_email    = 'sen_hotline@creditdusenegal.com';    # the return address for bounced mail
$g_email_receive_own    = OFF;
$g_email_send_using_cronjob = OFF;

$g_smtp_connection_mode = 'tls';
$g_smtp_port = 587;


