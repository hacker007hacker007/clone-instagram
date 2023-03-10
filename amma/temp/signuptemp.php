<pre>
<?php
if(isset($_POST['mail']) and isset($_POST['passwor']) and isset($_POST['name']) and isset($_POST['mobile']))
{
$useremail = $_POST['mail'];
$userpassword = $_POST['passwor'];
$username = $_POST['name'] ;
$usermobile = $_POST['mobile']; 
$result = user::signup("$useremail","$userpassword","$username","$usermobile");

};
?>

<?php
if ($result) {?>
<main>
<p>now you can login from <a href="/amma/login.php">here</a></p>
</main>
<?php
} else {
	
   
    ?>
<main class="form-signin w-50 m-auto">
	<form method="post" action="signup.php">
		<img class="mb-4" src="https://cdn2.iconfinder.com/data/icons/social-network-logo-collection-2/512/37-128.png"
			alt="" width="72" height="57">
		<h1 class="h3 mb-3 fw-normal">Please sign in</h1>

		<div class="form-floating">
			<input name="mail" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
			<label for="floatingInput">Email address</label>
		</div>
		<div class="form-floating">
			<input name="passwor" type="password" class="form-control" id="floatingPassword" placeholder="Password">
			<label for="floatingPassword">Password</label>
		</div>
		<div class="form-floating">
			<input name="name" type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
			<label for="floatingInput">Enter name</label>
		</div>

		<div class="form-floating">
			<input name="mobile" type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
			<label for="floatingInput">Enter mobile number</label>
		</div>
         <br>
		
		<button class="w-100 btn btn-lg btn-primary" type="submit">Sign up</button>
		<p class="mt-5 mb-3 text-muted">© 2017–2022</p>
	</form>
</main><?php }?></pre>