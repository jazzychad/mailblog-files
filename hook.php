<?

// NOTE: this file is specific to Mailgun.net's incoming mail webhook implementation.
// If you are using another email service provider, please read their documentation
// to handle incoming data.

$input = file_get_contents("php://input");

if (trim($input) == "") {
   die();
}

// uncomment for debugging
//file_put_contents("/var/www/mg/mglog.log", $input, FILE_APPEND);
//file_put_contents("/var/www/mg/mglog.log", print_r($_POST, true), FILE_APPEND);


$subject = ucfirst($_POST["subject"]);
$body = $_POST["stripped-text"];

$post = "---
layout: post
title: $subject
share_buttons: true
date: " . strftime("%F %T") . "
---

$body";

$filename = "/home/chad/blog/_posts/" . date("Y-m-d") . "-" . str_replace(" ", "-", strtolower($subject)) . ".md";

file_put_contents($filename, $post);

exec("/home/chad/do_blog.sh > /dev/null", $out);


?>