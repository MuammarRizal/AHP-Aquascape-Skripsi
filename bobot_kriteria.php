<?php
	include('config.php');
	include('fungsi.php');

	include('navbar.php');
?>
<section class="content container mt-5" style="margin-left: 185px;">
	<h2 class="ui header">Perbandingan Kriteria</h2>
	<?php showTabelPerbandingan('kriteria','kriteria'); ?>
</section>
