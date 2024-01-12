<?php

namespace PHPMaker2024\prj_membership;

// Page object
$News = &$Page;
?>
<?php
$Page->showMessage();
?>
<div class="card">
	<div class="card-header">
		<h5 class="m-0">Latest News</h5>
	</div>
	<div class="card-body">
		<h6 class="card-title">2024/01/01 - Project Learning Blog Released</h6>
		<p class="card-text">For more information, please visit Project Learning website.</p>
		<a href="https://projectlearning.id" class="btn btn-primary">Go to Project Learning website</a>
	</div>
</div>

<?= GetDebugMessage() ?>
