<?php 
error_reporting(E_ALL ^ E_NOTICE);
include 'css.php';
//include 'scripts.php';
?>
<body>
    <div class="container logoMargin">
                <img src="images/icons/logo.png" alt="LOGO">
                <div class="row">
                    <div class="col-md-8 col-sm-4">
				    <p class="m1-txt1 p-b-36 lol">
					    <span class="m1-txt2">Cadastra</span> :: Registre suas informações data
				    </p>
				    </div>
                </div>
                <?php
		                if(isset($_SESSION['msg'])){
			                echo $_SESSION['msg'];
			                unset($_SESSION['msg']);
		                } 
		        ?> 
				<form class="contact100-form validate-form" action="cadastro.php" method="post" id="form1">
					<div class="form-group">
					    <input class="form-control" type="text" name="name" placeholder="Seu nome" required>
					    <span class="focus-input100"></span>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="E-mail" required>
					    <span class="focus-input100"></span>   
                    </div>
					<div class="form-group">
					    <input class="form-control" type="text" name="username" placeholder="Username" required>
					    <span class="focus-input100"></span>
                    </div>
					<div class="form-group">
					    <input class="form-control" type="password" name="password" placeholder="Sua senha" required>
					    <span class="focus-input100"></span>
                    </div>
                    <div class="form-group">
					    <input class="form-control" type="password" name="cpassword" placeholder="Confirmar sua senha" required>
					    <span class="focus-input100"></span>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" name="userid" placeholder="CPF / Passaporte" required>
					    <span class="focus-input100"></span>
                    </div>
                     <!-- script recaptcha -->
                     <div class="form-group g-recaptcha" data-sitekey="6LdwMXoUAAAAAHDNLQ0Ap7vzrOwipjsc_PQcWXOd">
                     </div>
                     <script src='https://www.google.com/recaptcha/api.js'></script>                      
                    <div class="form-group alert alert-info">
                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required checked>
                        <label class="form-check-label" for="invalidCheck3">
                            Aceita nossos termos e condições?
                        </label>
                        <div class="invalid-feedback">
                        You must agree before submitting.
                        </div>
                    </div>
                        <br>
                    <button class="flex-c-m s2-txt2 size4 bg1 bor1 hov1 trans-07" type="submit" form="form1" value="Submit">
							Cadastre-se
					</button>
					<br><br>
				</form>
		</div>
	</body>
</html>r
