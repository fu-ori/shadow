<!-- custom css -->
<style type="text/css">
	#form-mail {
		background-color: #616161;
	}
	form {
		padding: 140px;
	}
	form input {
		margin-bottom: 20px;
	}
	form button {
		width: 100%;
		height: 60px;
		background-color: #616161;
		color: #86efac;
		font-size: 20px;
	}
</style>

<!-- ui -->
<section class="hero is-fullheight" id="form-mail">
	<div class="hero-body">
		<div class="container">
			<form action="plasma/form-mail-send.php" method="POST" class="box">
				<label class="label">Name</label>
				<input type="text" name="name" class="input" required>

				<label class="label">E-Mail</label>
				<input type="email" name="email" class="input" required>

				<label class="label">Would you like to subscribe to the newsletter?</label>
				<div class="columns">
					<div class="column is-2">
						<div class="field">
							<input type="radio" id="sim" name="newsletter" value="Sim" class="radio">
							<label for="sim">Yes :)</label>
						</div>
					</div>

					<div class="column">
						<div class="field">
							<input type="radio" id="nao" name="newsletter" value="Não" class="radio">
							<label for="nao">No!</label>
						</div>
					</div>
				</div>

				<button type="submit" class="button is-primary">Send</button>
			</form>
		</div>
	</div>
</section>
