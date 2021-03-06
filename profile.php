<?php

session_start();

date_default_timezone_set('America/Sao_Paulo');

include 'css.php';

include 'listaprofile.php';

$users = listaUser($conexao);

?>

<style>

    .jumbotron {

    padding: 50px;

    opacity: 0.90;

    }

    .margin-form{
        margin-top: 2%;
    }

</style>

		<!--<div class="col-md-4">

				<img src="images/icons/logo.png" alt="LOGO">

        </div>-->

        <div class="logoMargin container">

        <img src="images/icons/logo.png" alt="LOGO">

        <!-- Three columns of text below the carousel -->

        <div class="jumbotron margin4">
                <form class="margin-form contact100-form validate-form" action="resetpassword.php" method="post" id="form">
                    <div class="form-group">
                        <label for="staticEmail">Nome</label>
                    </div>
                   <div class="form-group">
                        <?php foreach($users as $user) : ?>
                        <input type="text" readonly class="form-control" id="staticEmail" value="<?=$user['res_st_name']?>">
                        <?php endforeach ?>  
                    </div>
                    <div class="form-group">
                        <label for="staticEmail">Username</label>
                    </div>
                   <div class="form-group">
                        <?php foreach($users as $user) : ?>
                        <input type="text" readonly class="form-control" id="staticEmail" value="<?=$user['res_st_username']?>">
                        <?php endforeach ?>  
                    </div>
                    <div class="form-group">
                        <label for="staticEmail">E-mail</label>
                    </div>
                    <div class="form-group">
                        <?php foreach($users as $user) : ?>
                        <input type="text" readonly class="form-control" id="staticEmail" value="<?=$user['res_st_email']?>">
                        <?php endforeach ?>  
                    </div>
                    <div class="form-group">
                        <label for="staticEmail">Nova Senha</label>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="newpassword" placeholder="Password" required>
                        <span class="focus-input100"></span>
                    </div>
                    <div class="form-group">
                    <button class="btn btn-outline-danger" type="submit" value="Submit">
                            Resete sua senha
                    </button>
                    </div>
                    <div class="form-group">
                        <label for="staticEmail">CPF/Passaporte</label>
                    </div>
                    <div class="form-group">
                        <?php foreach($users as $user) : ?>
                        <input type="text" readonly class="form-control" id="staticEmail" value="<?=$user['res_st_userid']?>">
                        <?php endforeach ?>
                    </div>
                    
                        <!-- script qrcode -->
                        <script src="js/jquery.min.js"></script>
                        <script src="js/jquery.qrcode.min.js"></script>
                        <p class="m1-txt1 p-b-36 lol"><span class="m1-txt2">FRAEX</span> :: App Checker<li>Código para registro do aplicativo</li></p>
                        <div id="qrcodeTable"></div>
                        <?php include 'js/suqrcode.php'; ?>
                        <br>
            </form>
                    <!--<button id="myBtn" class="btn btn-outline-primary">
                            Insert New Wallets
                    </button>-->
                <!-- The Modal -->
                <div id="myModal" class="modal">

                  <!-- Modal content -->
                  <div class="modal-content">
                    <div class="modal-header">
                      <span class="close">&times;</span>
                    </div>
                    <div class="modal-body">
                      <form class="margin-form contact100-form validate-form" action="wallets.php" method="post" id="form1">
                        <div class="form-group">
                            <label for="staticEmail">Bitcoin Wallet</label>
                        </div>
                         <div class="form-group">
                            <input class="form-control" type="text" name="bitcoinw">
                            <span class="focus-input100"></span>
                        </div>
                        <div class="form-group">
                            <label for="staticEmail">Ethereum Wallet</label>
                        </div>
                         <div class="form-group">
                            <input class="form-control" type="text" name="ethereumw">
                            <span class="focus-input100"></span>
                        </div>
                        <div class="form-group">
                            <label for="staticEmail">Litecoin Wallet</label>
                        </div>
                         <div class="form-group">
                            <input class="form-control" type="text" name="litecoinw">
                            <span class="focus-input100"></span>
                        </div>
                        <div class="form-group">
                            <label for="staticEmail">Cardano Wallet</label>
                        </div>
                         <div class="form-group">
                            <input class="form-control" type="text" name="cardanow">
                            <span class="focus-input100"></span>
                        </div>
                        <button class="btn btn-outline-danger" type="submit" value="Submit">
                            Save
                    </button>
                      </form>
                    </div>
                    <div class="modal-footer">
                      <h3>Insert New Wallets or Renew them</h3>
                    </div>
                  </div>
                </div>
        </div><!-- /.row -->								

		</div><!-- /.container -->

</body>

</html>
