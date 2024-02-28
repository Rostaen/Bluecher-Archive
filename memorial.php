<?php
require_once("template.php");
require_once("memorialFunctionData.php");
$page = new Template();
$page->setTitle('Memorial | Blücher Archive | Bard College');
$page->setMetaDesc('Explore the Bluecher Memorial page at Bard College, commemorating the life and legacy of Leon Botstein\'s maternal grandfather, Heinrich  Blücher, a Jewish activist and entrepreneur who escaped Nazi Germany. Discover his contributions and learn about upcoming events.');

// print page header
$page->open();

?>
</header>
<div class="container home mt-4">
	<p>
		On November 15, 1970, a memorial was held for Heinrich Blücher at Bard College, Chapel of the Holy Innocents. Here we have the printed program for the event, including an inserted invitation from President Reamer Kline, as well as an archival recording of the memorial itself.
	</p>
	<h3>Blücher Memorial Recording</h3>
	<div class="col-6 mb-4" style="position: relative;">
		<iframe frameborder="0" width="100%" height="75" title="Heraclitus and the Metaphysical Tradition" src="https://drive.google.com/file/d/1QSEC4Y8oBmG0x2B6vFLJRkseDSeJtqN2/preview?usp=share_link">
		</iframe>
		<div style="width: 53px; height: 55px; position: absolute; opacity: 0; right: 10px; top: 0px;">&nbsp;</div>
	</div>
	<div class="row mb-4" style="cursor: pointer;">
		<?php
		for ($x = 0; $x < count($imgData); $x++)
			image($imgData[$x][0], $imgData[$x][1], $imgData[$x][2]);
		?>
	</div>
	<h3><a href="https://drive.google.com/file/d/1It8zS-uIiCG3cNA6XTXhvn8kajUIDksj/view?usp=share_link" target="_blank">Heinrich Blücher 1899–1970 by Irma Brandeis and Jack Blum</a></h3>
	<p>
		These eulogies were published in the Bard-St. Stephen's Alumni Magazine in November 1970. Irma Brandeis, Professor Emerita of English, and Jack A. Blum '62 were two of those who spoke at funeral services for Blücher in New York City on November 4 at the Riverside Chapel. Others were Horace Kallen, Professor Emeritus of Philosophy in the Graduate Faculty of the New School, Philip Miller '56, and former Bard faculty members Mary McCarthy and Ted Weiss. Miss Brandeis, Mr. Weiss, and Mr. Blum also attended the November 15 Memorial Service at the College.
	</p>
</div>

<?php
for ($x = 0; $x < count($imgData); $x++)
	imagePopUp($imgData[$x][0], $imgData[$x][1], $imgData[$x][2]);

$page->close();
?>
