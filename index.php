<?php
require_once("template.php");

$page = new Template();
$page->setTitle('Blücher Archive | Bard College');
$page->setMetaDesc('Discover the Bl&uuml;cher Memorial at Bard College, honoring the memory of Leon Botstein\'s maternal grandfather, Heinrich Bl&uuml;cher, a Jewish activist and entrepreneur who fled Nazi Germany. Explore exhibits, events, and resources dedicated to preserving his legacy.');

// print page header
$page->open();
?>
<img src="images/bluecher1.jpg" class="img-fluid" alt="Website banner with a variety of Bluecher images and notes.">
</header>
<div class="container home mt-4">
	<div>
		<img src="http://www.bard.edu/bluecher/images/bluecher_portrait3.jpg" alt="Image of Bluecher" class="float-end ps-2 pb-2">
		<p>
			In the early 1990s a box of cassette tapes was discovered in the Library director's office labeled only "Sources of Creative Power." In the box, Jeff Katz, director at the time and newly in his position, found a treasure trove of content from Heinrich Blücher: not only audio recordings—tapes that had been converted from original reel-to-reel recordings—but also a collection of written and typed transcripts based on Blücher's work at The New School and Bard. The lecture transcripts had been arranged by Alexander Bazelow ('71) who had been a student of Blücher in the 1970s. These weren't merely tapes and transcripts, but rather an important part of Bard's story, something which we can now share with generations of students here in Annandale and the world at large.
		</p>
		<p>
			The scope of the lectures and transcripts is grand, encompassing both the history of philosophy and the philosophy of education. When Blücher speaks of Socrates or Homer or Jesus, his interest is not in biography, but rather in exploring the means of philosophical action. His emphasis is on application to the present, on using philosophy and history to confront the greater moral, ethical, and philosophical challenges of our age and to help us approach the tasks of everyday life. He believed that through Homer and the Greek myth of the binding of the Titans we may understand something of the actual nature of the atomic age. Through the power of free philosophical reasoning itself, the student takes up the task of education, "to become free men and free women."
		<p>
			For more information about this site and archive, contact Helene Tieger at tieger@bard.edu or (845) 758-7396.
		</p>
	</div>
</div>

<?php
$page->close();
?>
