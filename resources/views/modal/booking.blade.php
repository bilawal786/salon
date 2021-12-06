<!-- BOOK ONLINE BOXLIGHT -->
<div id="book_online" class="booking_popup">
	<div class="book_online">
		<div class="makeup_fl_form">
			<h3>Réservation en ligne</h3>
			<form action="/" method="post" class="contact_form" id="contact_form">

				<div class="fl-col-6">
					<div class="your-name">
						<label>Nom<span>*</span></label>
						<input type="text" id="name" placeholder="Nom"/>
					</div>
				</div>
				<div class="fl-col-6 last">
					<div class="your-email">
						<label>Email<span>*</span></label>
						<input type="text" id="email" placeholder="Email"/>
					</div>
				</div>
				<div class="fl-col-6">
					<div class="your-phone">
						<label>Téléphone<span>*</span></label>
						<input type="text" id="phone" placeholder="Téléphone"/>
					</div>
				</div>
				<div class="fl-col-6 last">
					<div class="fl-col-8">
						<div class="datepicker-input" data-date-format="dd / mm / yy" data-first-day="1">
							<label>Date: <span>*</span></label>
							<input type="datetime" id="reservation-date" name="reservation-date">
						</div>
					</div>
					<div class="fl-col-4 last">
						<div class="your-time">
							<label>Temps: <span>*</span></label>
							<input id="time" type="text" class="time" />
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
				<div class="your-message">
					<label>Message: <span>*</span></label>
					<textarea id="message" placeholder="Message" cols="3" rows="5"></textarea>
				</div>
				<div class="button">
				<input type="button" class="makeup_fl_btn makeup_fl_btn_bookingsend" value="Réservation en ligne" />
				</div>
				<!-- RETURN MESSAGES -->
				<div class="returnmessage" data-success="Votre message a été reçu, nous vous contacterons bientôt."></div>
				<div class="empty_notice"><span>Veuillez remplir les champs obligatoires</span></div>
				<!-- /RETURN MESSAGES -->
			</form>
		</div>
	</div>
</div>
<!-- /BOOK ONLINE BOXLIGHT -->
