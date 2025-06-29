<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Login Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</head>

<body>

    <div class="container col-xl-10 col-xxl-8 px-4 py-5">
        <div class="row">
            <?php if (!empty($model['error'] ?? '')): ?>
                <div class="alert alert-danger" role="alert">
                    <?= htmlspecialchars($model['error']) ?>
                </div>
            <?php endif; ?>

            <?php if (!empty($model['success'] ?? '')): ?>
                <div class="alert alert-success" role="alert">
                    <?= htmlspecialchars($model['success']) ?>
                </div>
            <?php endif; ?>

        </div>
        <div class="row align-items-center g-lg-5 py-5">
            <div class="col-lg-7 text-center text-lg-start">
                <h1 class="display-4 fw-bold lh-1 mb-3">Register</h1>
                <p class="col-lg-10 fs-4">by <a target="_blank" href="https://www.programmerzamannow.com/">
                        <?= isset($model['content']) ? htmlspecialchars($model['content']) : '' ?>
                    </a>
                </p>
            </div>
            <div class="col-md-10 mx-auto col-lg-5">
                <form class="p-4 p-md-5 border rounded-3 bg-light" method="post" action="/users/register">
                    <!-- <div class="form-floating mb-3">
                    <input name="id" type="text" class="form-control" id="id" placeholder="id" />
                    <label for="id">Id</label>
                </div> -->
                    <div class="form-floating mb-3">
                        <input name="username" type="text" class="form-control" id="username" placeholder="username"
                            value="<?= htmlspecialchars($_POST["username"] ?? "") ?>" />
                        <label for="username">Username</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input name="email" type="text" class="form-control" id="email" placeholder="email"
                            value="<?= htmlspecialchars($_POST["email"] ?? "") ?>" />
                        <label for="email">Email</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input name="password" type="password" class="form-control" id="password"
                            placeholder="password" />
                        <label for="password">Password</label>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>