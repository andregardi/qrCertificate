<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Certificate</title>


  

  <!-- Load paper.css for happy printing -->
  <link rel="stylesheet" href="paper-css/paper.min.css">
  <!-- Load qrCertificate.css for positioning elements -->
  <!--link rel="stylesheet" href="../css.css"-->
  <link rel="stylesheet" href="qrCertificate/qrCertificate.css">

  <!-- Set page size here: A5, A4 or A3 -->
  <!-- Set also "landscape" if you need -->
  <style>@page { size: A4 landscape }</style>
</head>

<!-- Set "A5", "A4" or "A3" for class name -->
<!-- Set also "landscape" if you need -->
<body class="A4 landscape">

  <!-- Each sheet element should have the class "sheet" -->
  <!-- "padding-**mm" is optional: you can set 10, 15, 20 or 25 -->
  <section class="sheet padding-0mm">
  

    <!-- Write HTML just like a web page -->
	<?php echo qrCertificate::$html;?>
	
	</section>

</body>

</html>
