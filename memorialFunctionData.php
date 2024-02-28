<?php
$imgData = [
    [1, "Bleucher Memorial Program0001.jpg", "Memorial title page"],
    [2, "Bleucher Memorial Program0002.jpg", "Memorial date information"],
    [3, "Bleucher Memorial Program0003.jpg", "Memorial statement by Reamer Kline"],
];

function image($imgPosition, $img, $alt)
{
    echo '<div class="col-4">
		<img src="https://www.bard.edu/library/archive/bluecher/images/' . $img . '" class="img-fluid" data-bs-toggle="modal" data-bs-target="#lsImg' . $imgPosition . '" alt="' . $alt . '">
	</div>';
}

function imagePopUp($imgPosition, $img, $alt)
{
    echo '<div class="modal" id="lsImg' . $imgPosition . '">
		<div class="modal-dialog">
			<div class="modal-content">
				<!-- Modal Header -->
				<div class="modal-header">
					<button type="button" class="close" data-bs-dismiss="modal">&times;</button>
				</div>
				<!-- Modal body -->
				<div class="modal-body d-flex justify-content-center">
					<img src="https://www.bard.edu/library/archive/bluecher/images/' . $img . '" class="img-fluid" alt="' . $alt . '">
				</div>
			</div>
		</div>
	</div>';
}
