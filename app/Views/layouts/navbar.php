<div class="container-fluid">
    <div class="row border-top px-xl-5">
        <div class="col-lg-3 d-none d-lg-block">
            <a href="/" >  <img  src="<?= base_url('img/icon.png'); ?>" class="ml-5" width="100" height="100"> </a>
        </div>
        <div class="col-lg-1">
            <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                <?php if (session()->get('logged_in')): ?>
                    <!-- Navbar for logged-in user -->
                    <div class="nav-item dropdown">
                        <a class="btn btn-primary nav-link dropdown-toggle py-2 px-4 ml-auto mt-4 mr-5 d-none d-lg-block" data-toggle="dropdown" href=""><i class="bi bi-person"></i></a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="/profile" class="dropdown-item">Profile</a>
                            <a href="/logout" class="dropdown-item">Logout</a>
                        </div>
                    </div>
                <?php else: ?>
                    <!-- Navbar for not logged-in user -->
                    <div class="nav-item dropdown">
                        <a class="btn btn-primary nav-link dropdown-toggle py-2 px-4 ml-auto mt-4 mr-5 d-none d-lg-block" data-toggle="dropdown" href=""><i class="bi bi-person"></i></a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="/login" class="dropdown-item">Login</a>
                            <a href="/register" class="dropdown-item">Sign Up</a>
                        </div>
                    </div>
                <?php endif; ?>
            </nav>
        </div>
    </div>
</div>
