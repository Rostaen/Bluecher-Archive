<?php
    require_once("template.php");

	$page = new Template();
	$page->setTitle('Additional Articles | Blücher Archive | Bard College');
	$page->setMetaKW('');
	$page->setMetaDesc('');

	// print page header
	$page->open();
?>
</header>
<div class="container home mt-4">
	<p>Additional articles and essays about Heinrich Blücher and his life and work.</p>
	<h3><a href="https://www.bard.edu/bluecher/rel_misc/BluecherAutobio.pdf" target="_blank">Description of An Average Life</a></h3>
	<p>
		This short autobiographical sketch was cited by Arendt biographer Elisabeth Young-Bruehl in her portrait of Blücher. (See Hannah Arendt: For Love of the World, chapter 4, footnote 11, p. 507.) “Description of an Average Life” was discovered among Hannah Arendt's private papers and is translated from German by Kathrin Nussbaumer.
	</p>
	<h3><a href="https://www.bard.edu/bluecher/rel_misc/heuer.pdf" target="_blank">Hannah Arendt and her Socrates</a></h3>
	<p>
		Wolfgang Heuer’s biographical sketch of Blücher, which examines his intellectual relationship with Hannah Arendt.
	</p>
	<h3><a href="https://www.bard.edu/bluecher/rel_misc/bluecher_alumni1.pdf" target="_blank">Heinrich Blücher - A Profile</a></h3>
	<p>
		An article about Blücher’s intellectual contribution to Bard College by Eugenio Villicana from the Bard-St. Stephen's Alumni Magazine, March 1960.
	</p>
</div>



<?php
	$page->close();
?>