<?= $this->extend('layouts/base')?>
<?= $this->section('content')?>
<div class="container">
    <div class="row justify-content-center my-5">
        <h2 class="text-center">Sign In</h2>
        <div class="col-lg-5">
            <div class="p-5">
                <form action="" method="POST">
                    <? csrf_token() ?>
                    <div class="form-group mb-3">
                        <input type="email" class="form-control"
                            id="email" name="email" aria-describedby="emailHelp"
                            placeholder="Enter Email Address">
                    </div>
                    <div class="form-group mb-3">
                        <input type="password" class="form-control"
                            id="password" name="password" placeholder="Password">
                    </div>
                    <div class="form-group mb-3">
                        <input type="checkbox" class="form-check-input" id="remember" name="remember">
                        <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                    </div>
                    <div class="d-grid gap-2 mb-3">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection()?>