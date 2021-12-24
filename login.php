<?php
if (!isset($_SESSION)) {
    session_start();
}
?>
<div class="container">
    <div class="jumbotron" style="padding: 10px" >
        <a href="index.php?controller=sanpham&action=index">Home</a>/
        <a href="#">Đăng Nhập</a>
    </div>
    <div class="card-body">
        <h5 class="text-center mt-1 mb-4">Sign In</h5>
        <form method="post" >
            <div class="md-form md-outline">
                <label data-error="wrong" data-success="right" for="defaultForm-email1">Your email</label>
                <input type="text" name="email" class="form-control">
            </div>
            <div class="md-form md-outline">
                <label data-error="wrong" data-success="right" for="defaultForm-pass1">Your password</label>
                <input type="password" name="password" class="form-control">
            </div>
            <br>
            <div class="text-center pb-2">
                <input name="btnlogin" type="submit" value="Login" class="btn btn-primary mb-4">
            </div>
        </form>
    </div>
</div>
