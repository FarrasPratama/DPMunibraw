<?php include_once('layouts/master.php') ?>
<center>
    <div class="container my-5" style="padding:100px;">
        <div class="row">
            <div class="col-md-6">
                <img src="foto/login.jpg" width="100%">
            </div>
            <div class="col-md-6 my-auto mx-auto">
                <h1>Login Administrator</h1>
                <form action="auth.php" method="post" style="width: 500px;">
                    <div class="input-group input-group-lg">
                        <input type="text" class="form-control" placeholder="Username" name="username">
                    </div>
                    <div class="input-group input-group-lg mt-3">
                        <input type="password" class="form-control" placeholder="Password" name="password">
                    </div>
                    <div class="btn-group btn-group-justified mt-3" role="group">
                        <div class="btn-group" role="group">
                            <button type="submit" name="login" value="login" class="btn btn-success mr-5">Login</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</center>
<div style="padding-top:250px"></div>
<?php include_once('layouts/footer.php') ?>