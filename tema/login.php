<main id="page">
<section class="slice slice-xl">
            <div class="bg-secondary bg-absolute-cover bg-secondary bg-size--contain d-flex align-items-center">    
                <figure class="w-100">
                <?php include "assets/img/svg/bg.svg" ?>
                </figure>
            </div>
            <div class="container pt-lg">
                <div class="row justify-content-center">
                    <div class="col-md-6 col-lg-6">

                        <div class="card shadow zindex-100">
                            <div class="card-body px-md-5 py-5">
                                <div class="text-center mb-5">
                                    <h6 class="h3">Welcome back</h6>
                                    <p class="text-muted mb-0">Sign in to your account to continue</p>
                                </div>
                                <span class="clearfix"></span>



                                <form role="form" action="check-login.php" method="post">
                                    <div class="form-group">
                                        <label class="form-control-label">Username</label>
                                        <div class="input-group input-group-transparent">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="far fa-user"></i></span>
                                            </div>
                                            <input type="text" class="form-control" name="username" placeholder="name@example.com">
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div>
                                                <label class="form-control-label">Password</label>
                                            </div>
                                        </div>
                                        <div class="input-group input-group-transparent">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="far fa-key"></i></span>
                                            </div>
                                            <input type="password" class="form-control" name="password" placeholder="Password">
                                        </div>
                                    </div>
                                    <div class="text-center mb-3">
                                        <input value="Sign in" type="submit" name="submit" class="btn btn-block btn-info">
                                    </div>
                                </form>

                            </div>
                        </div>



                    </div>
                </div>
            </div>
        </section>

    </main>