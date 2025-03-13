<?php
require_once("template.php");
include_once("lecturesData.php");
include_once("lecturesFunctions.php");

$page = new Template();
$page->setTitle('Read | Blücher Archive | Bard College');
$page->setMetaKW('');
$page->setMetaDesc('');

// print page header
$page->open();
?>
</header>
<div class="container home mt-4">
	<div>
		<!-- <h2>Read</h2> -->
		<p>
			These lecture transcriptions were arranged by Alexander Bazelow ’71, who studied with Heinrich Blücher. They were separated from a larger body of <a href="https://www.bard.edu/library/pdfs/bluecher/Letter from Mr. Julius Shultz.pdf" target="_blank">transcripts and recordings collected by Ruth and Julius Shultz</a> from lectures Professor Blücher had given at the New School and Bard College. Though Blücher never delivered the lectures exactly in the manner presented below, they seem to present an attempt to recreate the structure of the <a href="https://www.bard.edu/library/pdfs/bluecher/bc_commoncourse_19540430_Report_ocr.pdf" target="_blank">Common Course</a>, which was a prescribed and required part of the curriculum for first-year students that Blücher had been hired in 1952 to direct, develop, and implement.
		</p>
		<p>
			The dates next to the lectures listed are actual, so they do not appear in chronological order.
		</p>
		<a href="trans_inv.php">Complete Transcript Inventory</a>
		<ol type="I">
			<?php
			for ($x = 0; $x < count($lectureData); $x++) {
				displayPDFLink($lectureData[$x][0], $lectureData[$x][1], 'lecture');
			}
			?>
		</ol>
		<h2>Additional Transcripts</h2>
		<?php
		for ($x = 0; $x < count($transcriptData); $x++) {
			displayPDFLink($transcriptData[$x][0], $transcriptData[$x][1], 'transcript');
		}
		?>
	</div>
</div>



<?php
$page->close();
?>
