<style>
    .bg-login-img {
        background: url(<?= base_url('assets/img/14.png'); ?>);
        background-position: center;
        background-size: cover;

    }
</style>
<div class="container bg-inputzen m-auto align-items-center">

    <!-- Outer Row -->
    <div class="row justify-content-center m-auto">

        <div class="col-xl-6 col-lg-6 col-md-9 mt-5 col-12">

            <div class="card o-hidden border-0 shadow-lg my-5 ">
                <div class="card-body p-0 ">
                    <!-- Nested Row within Card Body -->
                    <div class="row m-auto ">
                        <div class="col-lg-12">
                            <div class="p-5 text-center">
                                <form class="user mt-4" method="POST" action="<?= base_url('auth'); ?>">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user bg-inputzen" id="email" name="email" placeholder="Email" value="<?= set_value('email'); ?>">
                                        <?= form_error('email', '<small class="text-danger pl-3">', '</small> '); ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user  bg-inputzen" id="password" name="password" placeholder="Password">
                                        <?= form_error('password', '<small class="text-danger pl-3">', '</small> '); ?>
                                    </div>
                                    <button href="index.html" class="btn btn-zen btn-user btn-block">
                                        Login
                                    </button>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small text-zen" href="forgot-password.html">Forgot Password?</a>
                                </div>
                                <div class="text-center">
                                    <a class="small text-zen" href="<?= base_url('auth/registration'); ?>">Create an Account!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>