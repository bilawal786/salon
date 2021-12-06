<!-- ADDRESS BOXLIGHT -->
<?php
$gs = \App\GeneralSettings::find(1);
?>
<div id="addresses" class="address_popup">
	<div class="address">
		<div class="box">
			<div class="info">
				<ul>
					<li>
						<span class="span1"><i class="xcon-home"></i></span>
						<span class="span2">{{$gs->address}}</span>
					</li>
					<li>
						<span class="span1"><i class="xcon-phone"></i></span>
						<span class="span2"><strong>Telephone:</strong> {{$gs->phone1}}<br />
						<strong>Telephone:</strong> {{$gs->phone2}}</span>
					</li>
					<li>
						<span class="span1"><i class="xcon-mail"></i></span>
						<span class="span2"><strong>Email:</strong> {{$gs->email}} <br />
						<strong>Web:</strong> <a href="#">{{$gs->web}}</a></span>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!-- /ADDRESS BOXLIGHT -->
