<?php

require_once('qrCertificate/qrCertificate.php');

$qr = new qrCertificate;
$qr->acknowledge="Awarded to";
$qr->name="Napoleon Bonaparte";
$qr->achievement="successfully completed the army's artillery course.";
$qr->qr='https://en.wikipedia.org/wiki/Napoleon';
$qr->date="May<br>1851";

$qr->render();
