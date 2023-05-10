<?php
// Landingpage vom heise kapern
//auslesen des Quelltexts von heise.de
$content = file_get_contents('http://www.heise.de');
// Quelltext lokal sichern
file_put_contents('phishing.html',$content);
// Links anpassen mit <base href="http://www.heise.de"
// Text auf eigenem Server manipulieren.
