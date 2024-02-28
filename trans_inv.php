<?php
require_once("template.php");
require_once("transcriptData.php");
$page = new Template();
$page->setTitle('Lecture Transcripts | Blücher Archive | Bard College');
$page->setMetaDesc('');

// print page header
$page->open();

function printLI($item)
{
	echo '<li>' . $item . '</li>';
}
?>
</header>
<div class="container home mt-4">
	<div>
		<h2>Lecture Transcripts</h2>

		<p>
			These manuscripts now form the core of materials in the Blücher Archive web site. The collection includes two other types of material: 1) untranscribed audio cassettes of the lectures titled "Ethical Confusion and Moral Corruption" (43 one-hour tapes); and 2) transcribed lectures that have not yet been digitized. The following is a descriptive inventory of these manuscripts:
		</p>

		<h3>Stevenson Library September 2002</h3>

		<h4>Blücher transcripts</h4>

		<ol>
			<?php
			foreach ($transcriptData as $item)
				printLI($item[0]);
			?>
		</ol>

		<h2>List of Transcripts of Heinrich Blücher's Lectures, 1952-1959</h2>

		<p>From a letter dated April 29, 1976, from Frederick G. Cook, Head Librarian, to Peter Skiff</p>

		<ol>
			<?php
			foreach ($letterData as $item)
				printLI($item[0]);
			?>
		</ol>

		<h3>Lectures not Transcribed (as of 4/29/76)</h3>

		<ol>
			<?php
			foreach ($lectureData as $item)
				printLI($item[0]);
			?>
		</ol>

		<h3>Individual Transcriptions</h3>

		<p>Lectures arranged by Alexander Bazelow. These lectures were separated out from the other transcripts, bound, and given numbers in the order below. They seem to be an attempt to reconstruct, from lectures given both at the New School and at Bard, what the common course may have looked like. Some of them, such as the lectures on "Homer" from 1954, are drawn from the lecture series entitled "Sources of Creative Power." Though Blücher never delivered the course in the manner indicated here, and the arrangement of the lectures here may more accurately be an attempt to form a coherent thread out of the vast material at hand, this seems to give a reasonable idea of the look and feel of the Common Course as it was intended to be. The dates below are the dates the lectures were actually given.</p>

		<ol type="I">
			<?php
			foreach ($individualData as $item)
				printLI($item[0]);
			?>
		</ol>
	</div>
</div>

<?php
$page->close();
?>
