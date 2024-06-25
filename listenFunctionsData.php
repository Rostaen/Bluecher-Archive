<?php

function fetchListenData()
{
    $pdo = connectToDatabase();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Setting up SQL query for librarian information
    $Table = "bluecherListen";
    $sql = "SELECT * FROM $Table";

    $stmt = $pdo->query($sql);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function printSection()
{
    try {
        $results = fetchListenData();
        if ($results)
            foreach ($results as $item) {
                echo '<div><div class="mb-5"><h2>' . $item['title'] . '" (59:45)</h2><p>' . $item['paragraph'] . '</p>';
                if ($item['keywords'] != "") echo '<p><i>Keywords: ' . $item['keywords'] . '</i></p>';
                printPlayer($item['title'], $item['src']);
                echo '</div></div>';
            }
    } catch (PDOException $e) {
        echo '<p>Database Error: ' . $e->getMessage() . '</p>';
        error_log('PDOException: ' . $e->getMessage());
    }
}

function printPlayer($titleName, $src)
{
    // Removed title from iframe as it was breaking one player from showing and completely broken in all other players
    echo '<div class="row">
			<div class="col-3">&nbsp;</div>
			<div class="col-6" style="position: relative;">
				<iframe
					frameborder="0"
					width="100%"
					height="75"
					src="https://drive.google.com/file/d/' . $src . '/preview?usp=share">
				</iframe>
				<div style="width: 53px; height: 55px; position: absolute; opacity: 0; right: 10px; top: 0px;">&nbsp;</div>
			</div>
			<div class="col-3">&nbsp;</div>
		</div>';
}
