<?php
require_once("template.php");
require_once("listenFunctionsData.php");
require_once("../../inc/connect.php");
$page = new Template();
$page->setTitle('Listen to Blücher | Blücher Archive | Bard College');
$page->setMetaDesc('Listen to recordings and audio files related to the Blücher Memorial at Bard College. Explore speeches, interviews, and discussions commemorating the life and legacy of Leon Botstein\'s maternal grandfather, Heinrich Blücher, a Jewish activist and entrepreneur who escaped Nazi Germany.');

// print page header
$page->open();
?>
</header>
<div class="container home mt-4">
	<div>
		<p>
			The audio here is selected from a larger collection of open reel tapes made in Blücher's classrooms at The New School and Bard College in the 1950s and 1960s. The collection includes lectures titled "Ethical Confusion and Moral Corruption," as well as those below, titled "Sources of Creative Power." Open reel tapes were transferred to 60-minute cassettes by Dr. George Rose ('63) at the Hershey Medical Center at the University of Pennsylvania. These MP3 audio files were digitized by Jeremy Hall ('98). Summaries and keyword/descriptors were contributed by Elliot Dutcher ('08).
		</p>
		<p>
			Thanks, as always and in many ways, to Alex ('71) and Wendy Bazelow for their generous support.
		</p>
	</div>

	<?php
	printSection();

	echo '</div>';

	$page->close();
	?>
