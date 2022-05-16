<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="<?php echo e(asset('frontEnd/css/login.css')); ?>">

    <title>Create account</title>
</head>
<body ">
    <div class="container">
        <div class="mx-auto login-form">
            <div class="login-img">
                <img src="../image/pic1.jpg" alt="">
            </div>
            <div class="mt-4 login">
                <form method="post" action="<?php echo e(route('users.do_register')); ?>">
                    <?php echo csrf_field(); ?>
                    <h3>Create your new account</h3>
                    <div class="mb-3 row">
                        <label for="name" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="name" id="name" placeholder="Username*" autocomplete="off" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Input your email address" autocomplete="off" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="password" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" name="password" id="password" placeholder="Enter your password" autocomplete="off" required>
                        </div>
                    </div>
                    <p class="text-primary">
                        If your already have account please click here <a href="<?php echo e(route('users.login')); ?>" class="text-reset">Sign in Now</a>.
                    </p>
                    <input class="btn btn-warning btn-sign-in" type="submit" value="Create">
                    <a href="<?php echo e(route('users.login')); ?>"><input type="button" class="btn btn-danger btn-back" value="Back"></a>
                </form>
            </div>
        </div>     
    </div>
</body>
</html><?php /**PATH C:\wamp64\www\WTC_Assignment_Week10_MonSovankiry\resources\views/users/register.blade.php ENDPATH**/ ?>