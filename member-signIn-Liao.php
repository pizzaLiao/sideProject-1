<!doctype html>
<html lang="en">

<head>
	<title>Member-SignIn</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS v5.2.1 -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
	<style>
		.sign-in-panel {
			width: 500px;
		}

		.logo {
			height: 200px;
		}

		.object-fit-contain {
			width: 100%;
			height: 100%;
			object-fit: contain;
		}
	</style>
</head>

<body>
	<div class="container vh-100 d-flex justify-content-center align-items-center sign-up-panel">
		<div class="sign">
			<nav>
				<ul class="nav nav-tabs d-flex justify-content-center">
					<li class="nav-item flex-growth"><a class="nav-link" href="/camp/member-signUp-Liao.php">會員註冊</a></li>
					<li class="nav-item flex-growth"><a class="nav-link" href="">會員登入</a></li>
				</ul>
			</nav>
			<form class="sign-in-panel">
				<div class="logo">
					<img class="object-fit-contain" src="https://cdn.dribbble.com/users/973433/screenshots/5422715/media/41af115b3049cc12fbbf2dfd9c7596ce.jpg?compress=1&resize=1600x1200&vertical=center" alt="">
				</div>
				<div class="form-group mb-2">
					<label for="account" class="form-label">帳號</label>
					<input type="account" class="form-control" id="account" placeholder="example@mail.com">
				</div>
				<div class="form-group mb-2">
					<label for="password" class="form-label">密碼</label>
					<input type="password" class="form-control" id="password" placeholder="6-18位數密碼，區分大小寫">
				</div>
				<div class="text-danger">錯誤資料提示文字放在這邊</div>
				<div class="d-flex justify-content-center">
					<button class="mt-3 btn btn-dark" type="button">登入</button>
				</div>
			</form>
		</div>

		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
		</script>

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
		</script>
</body>

</html>