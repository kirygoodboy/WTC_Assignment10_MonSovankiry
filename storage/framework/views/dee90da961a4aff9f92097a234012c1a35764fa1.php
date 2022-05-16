<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- @css  style -->
    <link rel="stylesheet" href="<?php echo e(asset('frontEnd/css/homepage.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('fontawesome-v6/css/all.css')); ?>">

    <!-- @jQuery  -->
    <script src="<?php echo e(asset('jQuery/jquery-3.2.1.min.js')); ?>"></script>

    <title>Home Page</title>
</head>
<body>
    <div class="container mt-4">
        <h2>Welcome for the home pages</h2>
        <h5 class="mt-4">New Feed</h5>

        <?php if(Auth::guest()): ?>
            <a href="<?php echo e(route('users.login')); ?>" id="sign-in"><button class="btn btn-primary">Sign In</button></a>
        <?php else: ?> 
            <p class="caret" id="username"><?php echo e(Auth::user()->name); ?><i  class="fa-solid fa-user"></i></p>
            <a href="" id="log-out"><button class="btn btn-danger">Log Out</button></a>
            <button id="post" class="btn btn-primary">New Post</button>
        <?php endif; ?>

        <div class="post">
            <img src="../image/pic2.jpeg" class="rounded mx-auto d-block" alt="...">
            <p>Hello Sunday!!!</p>

            <div class="profile-user">
                <h6>Profile User</h6>
                <img src="../image/pf.png" alt="">
                <p>Carvajal</p>
            </div>
        </div>
    </div>
    <div class="new-post">
        <form method="post" action="">
            <?php echo csrf_field(); ?>
            <h3>New Post</h3>
            <i id="cancel-post" class="fa-solid fa-xmark"></i>
            <div class="mb-3">
                <label for="img-file" class="form-label">Choose your file for uplode</label>
                <input class="form-control" type="file" id="img-file"> <br>
                <img src="" class="rounded mx-auto d-block" width="200"; id="image" alt="your file image">
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">Say something about your post</label>
                <textarea class="form-control" id="title" rows="3"></textarea>
            </div>
            <input class="btn btn-success" id="btn-post" type="submit" value="Create Post">
        </form>
    </div>
</body>
</html>
<script>
    $(document).ready(function(){
        $("#post").click(function(){
            $(".new-post").slideDown(500);
        });
        $("#cancel-post").click(function(){
            $(".new-post").slideUp(300);
        });

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#image').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#img-file").change(function(){
            readURL(this);
        });
    });
</script><?php /**PATH C:\wamp64\www\WTC_Assignment_Week10_MonSovankiry\resources\views/pages/homepage.blade.php ENDPATH**/ ?>