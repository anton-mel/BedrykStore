<style type="text/css">
/*SUBSCRIBERS FORM*/
.thxletter{
	position: absolute;
	background: #333;
	padding: 7px 15px;
	transform: translate(-10%, -50%);
	font-weight: 700;
	left: 0;
	color: #fff;
	font-family: sans-serif;
	font-size: 12px;
	letter-spacing: .2px;
}
.form_gm{
	display: flex;
	justify-content: center;
	position: relative;
}
.form_gm input{
	width: 220px;
	padding: 15px 40px;
	border: none !important;
	outline: none !important;
	background: #fff !important;
	border-radius: var(--rr);
	color: #333 !important;
}
.gmails{
	background: #d14e66;
	padding: 35px 65px;
}
</style>

<div class="gmails">
	<div class="p_gm">
		<div class="l_gm">
			<h1>ОТРИМУЙТЕ ОСТАННІ НОВИНИ ЗАВЖДИ!</h1>
			<p>Залиште нам свою електронну пошту, ми іноді будемо надсилати вам цікаві пропозиції!</p>
		</div>
		<div class="r_gm">
			<form action="index.php" class="form_gm" method="POST">
				<input type="gmail" name="gmails_get" id="input_name_subsa" autocomplete="off" placeholder="Введіть Ваш E-mail (Нажміть /)">
				<button type="submit" name="addsubscr"><i class="fa fa-envelope" style="margin-right: 7px;" aria-hidden="true"></i>НАДІСЛАТИ</button>
				<p class="thxletter"></p>
			</form>
		</div>
	</div>
</div>

