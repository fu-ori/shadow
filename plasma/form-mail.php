<!-- custom css -->
<style type="text/css">
	.form-mail {
		background-color: #ccc;
	}
	.form-text {
		margin-top: 400px;
		font-size: 26px;
		font-weight: 500;
	}
	form {
		background-color: #fff;
		padding: 40px;
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
<section class="section form-mail">
	<div class="columns">
		<div class="column is-4">
			<div class="form-text">
				Caso queira solicitar o contato
				de um especialista para entender melhor
				sobre as nossas tecnologias, preencha o formulário
			</div>
		</div>

		<div class="column">
			<form action="plasma/form-mail-send.php" method="POST">
				<label class="label">Nome Completo</label>
				<input type="text" name="nome" class="input" required>

				<label class="label">E-Mail</label>
				<input type="email" name="email" class="input" required>

				<label class="label">Celular</label>
				<input type="text" name="celular" class="input">

				<label class="label">Nome da Instituição</label>
				<input type="text" name="instituicao" class="input">

				<label class="label">País</label>
				<input type="text" name="pais" class="input">

				<label class="label">Cidade</label>
				<input type="text" name="cidade" class="input">

				<label class="label">Cargo</label>
				<input type="text" name="cargo" class="input">

				<label class="label">Aceita receber nossos e-mails com informações, novidades e lançamentos?</label>
				<div class="columns">
					<div class="column is-2">
						<div class="field">
							<input type="radio" id="sim" name="newsletter" value="Sim" class="radio">
							<label for="sim">Sim</label>
						</div>
					</div>

					<div class="column">
						<div class="field">
							<input type="radio" id="nao" name="newsletter" value="Não" class="radio">
							<label for="nao">Não</label>
						</div>
					</div>
				</div>

				<button type="submit">Cadastre-se e personalize sua experiência</button>
			</form>
		</div>
	</div>
</section>
