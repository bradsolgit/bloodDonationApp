<?php
?>

<div class="container">
	<article class="clearfix form-center">
		<form class="form-inline text-center" id="searchForm" role="form">
			<div class="form-group">

				<input type="text" class="form-control bloodgroup" name="bloodgroup"
					id="bloodgroup" placeholder="Blood Groop">
			</div>
			<div class="form-group">
				<label class="in" for="city">In</label> <input type="text"
					class="form-control" name="city" id="city"
					placeholder="Enter city Name">
			</div>

			<button type="button" id="searchBtn" class="btn btn-success">
				<span class="glyphicon glyphicon-search" aria-hidden="true"></span>Get
				Me Donor
			</button>
		</form>
	</article>
</div>
<div id=table class="ppInfo">
	<table id="jsontable">
		<thead>
			<tr>
				<th>Name</th>
				<th>Email</th>
				<th>Number</th>
				<th>Blood Group</th>
			</tr>
		</thead>


	</table>
</div>
