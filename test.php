<?php

// I18N support information here
$language = "en_US.utf8";
putenv("LANG=" . $language);
setlocale(LC_ALL, $language);

// Set the text domain as "messages"
$domain = "messages";
bindtextdomain($domain, "Locale");
bind_textdomain_codeset($domain, 'UTF-8');

textdomain($domain);

echo _("A string to be translated would go here");