<?php
/**
 * mail-config.php
 * This file contains your reCAPTCHA API keys and your recipient's email addresses.
 *
 * @param string $siteKey your public reCAPTCHA API key
 * @param string $secret your secret reCAPTCHA API key
 * @param array $MAIL_RECIPIENTS array of email addresses and corresponding recipient names to send form responses to
 *
 * @author Rochelle Lewis <rlewis37@cnm.edu>
 *
 * This file contains sensitive information and should ALWAYS be gitignored!
 **/

//the SendGrid SMTP authorization
$smtpSecret = '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';

// your Google reCAPTCHA keys here
$siteKey = "6LfjI5QUAAAAANcqfj8R_9aDyfg_CjIl7kyv23kW";
$secret = "6LfjI5QUAAAAAEr7dx7_pmsutCiVwS7EnRs1aaGU";

/**
 * attach the recipients to the message
 * notice this an array that can include or omit the the recipient's real name
 * use the recipients' real name where possible; this reduces the probability of the Email being marked as spam
 **/
$MAIL_RECIPIENTS = ["dominguez.1st@gmail.com" , "Robert Dominguez"];