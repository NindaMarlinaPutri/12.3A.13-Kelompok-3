<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                        </div>
                        <form class="user" method="POST" actions="<?= base_url('auth/registration'); ?>">
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user bg-inputzen" name="name" id="name" placeholder="Full Name.. " value="<?= set_value('name'); ?>">
                                <?= form_error('name', '<small class="text-danger pl-3">', '</small> '); ?>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user bg-inputzen" id="email" name="email" placeholder="Email Address" value="<?= set_value('email'); ?>">
                                <?= form_error('email', '<small class="text-danger pl-3">', '</small> '); ?>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user bg-inputzen" id="alamat" name="alamat" placeholder="Address" value="<?= set_value('alamat'); ?>">
                                <?= form_error('alamat', '<small class="text-danger pl-3">', '</small> '); ?>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" class="form-control form-control-user bg-inputzen" name="password1" id="password-" placeholder="Password">
                                    <?= form_error('password1', '<small class="text-danger pl-3">', '</small> '); ?>
                                </div>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control form-control-user bg-inputzen" name="password2" id="password" placeholder="Repeat Password">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-zen btn-user btn-block">Register Account</button>
                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small text-zen" href="forgot-password.html">Forgot Password?</a>
                        </div>
                        <div class="text-center">
                            <a class="small text-zen" href="<?= base_url('auth/'); ?>">Already have an account? Login!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>