	<div class="container">
		<div class="boxed row">
  		<div class="col-md-6">
				<h2>Create Team Recruitment Post</h2>
				<form class="form-post" enctype="multipart/form-data" action="" method="POST">
					<label>Team Name</label>
					<input ng-model="userid" type="text" required />
					<label>Platform</label>
					<br />
					<select ng-model="platform" name="platform" required>
    				<option value="bnet">Battle.net</option>
    				<option value="ps4">Playstation Network</option>
    				<option value="xbox">Xbox Live</option>
  				</select>
					<br />
					<label>Region</label>
					<br />
					<select ng-model="region" name="region"> required
    				<option value="usa">United States</option>
    				<option value="eu">Europe</option>
    				<option value="asia">Asia</option>
  				</select>
					<br />
					<label>Division</label>
					<br />
					<select ng-model="division" name="division" required>
    				<option value="bronze">Bronze</option>
    				<option value="silver">Silver</option>
    				<option value="gold">Gold</option>
						<option value="platinum">Platinum</option>
						<option value="diamond">Diamond</option>
						<option value="master">Master</option>
						<option value="grand_master">Grand Master</option>
  				</select>
					<br />
					<label>Post Title</label>
					<input type="text" ng-model="title" required />
					<label>Post Description</label>
					<br />
					<textarea ng-model="description" required></textarea>
					<br />
					<input type="submit" value="Create Post" />
				</form>
			</div>
			<div class="col-md-6">
				<h2>Post Preview</h2>
				<div class="post-preview">
					<div class="post-preview-header">
						<img src="<?php echo site_url('../assets/custom/images/platforms/{{platform}}.png') ?>" style="width: 30px; height: 30px; margin: 7px 0px 0px 10px;" />
						<img src="<?php echo site_url('../assets/custom/images/flags/{{region}}.png') ?>" style="width: 38px; height: 29px; margin: 5px 0px 0px 10px;" />
						<img src="<?php echo site_url('../assets/custom/images/division/{{division}}.png') ?>" style="float: right; width: 36px; height: 36px; margin: 5px 10px 0px 0px;" />
					</div>
					<h4 style="text-align: center; font-size: 24px; color: #fff;">{{title}}</h4>
					<h3 style="text-align: center; color: lightblue; margin: 0px 0px 10px 0px;">{{userid}}</h3>
					<p style="font-family: Montserrat-Regular; color: #fff; padding: 0px 10px 0px 10px;">{{description}}</p>
				</div>
			</div>
		</div>
	</div>
