<main class="form-signin w-50 m-auto">
	<form method="post" action="login.php">
		<img class="mb-4" src="https://cdn2.iconfinder.com/data/icons/social-network-logo-collection-2/512/37-128.png"
			alt="" width="72" height="57">
		<h1 class="h3 mb-3 fw-normal">Please sign in</h1>

		<div class="form-floating">
			<input name="name" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
			<label for="floatingInput">Email address</label>
		</div>
		<div class="form-floating">
			<input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
			<label for="floatingPassword">Password</label>
		</div>

		<div class="checkbox mb-3">
			<label>
				<input type="checkbox" value="remember-me"> Remember me
			</label>
		</div>
		<button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
		<p class="mt-5 mb-3 text-muted">© 2017–2022</p>
	</form>
</main>