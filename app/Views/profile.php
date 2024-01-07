<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <link href="css/profile.css" rel="stylesheet">
    <link href="img/favicon.ico" rel="icon">

<!-- Google Web Fonts -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet"> 

<!-- Font Awesome -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

<!-- Libraries Stylesheet -->
<link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<!-- Customized Bootstrap Stylesheet -->
<link href="css/style.css" rel="stylesheet">
</head>
<body>
<?= $this->include('layouts/navbar') ?>
<div style="background-image: url('img/bg2.jpg');background-color: rgba(255,255,255,0.9);">
        <div class="row gutters-sm" style="background-image: url('img/bg2.jpg');">
          <div class="col-md-4 d-none d-md-block">
          <div class="card" style="background-color: rgba(255,255,255,0.9);">
              <div class="card-body">
                <nav class="nav flex-column nav-pills nav-gap-y-1">
                  <a href="#profile" data-toggle="tab" class="nav-item nav-link has-icon nav-link-faded active">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user mr-2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>Profile Information
                  </a>
                  <a href="#accounts" data-toggle="tab" class="nav-item nav-link has-icon nav-link-faded">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings mr-2"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>Account Settings
                  </a>
                  <a href="#security" data-toggle="tab" class="nav-item nav-link has-icon nav-link-faded">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shield mr-2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>Security
                  </a>
                  <a href="#billing" data-toggle="tab" class="nav-item nav-link has-icon nav-link-faded">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-credit-card mr-2"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect><line x1="1" y1="10" x2="23" y2="10"></line></svg>Billing
                  </a>
                </nav>
              </div>
            </div>
          </div>
          <div class="col-md-8">
            <div class="card" style="background-color: rgba(255,255,255,0.9);">
              <div class="card-header border-bottom mb-3 d-flex d-md-none">
                <ul class="nav nav-tabs card-header-tabs nav-gap-x-1" role="tablist">
                  <li class="nav-item">
                    <a href="#profile" data-toggle="tab" class="nav-link has-icon active"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg></a>
                  </li>
                  <li class="nav-item">
                    <a href="#accounts" data-toggle="tab" class="nav-link has-icon active"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg></a>
                  </li>
                  <li class="nav-item">
                    <a href="#security" data-toggle="tab" class="nav-link has-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shield"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg></a>
                  </li>
                  <li class="nav-item">
                    <a href="#billing" data-toggle="tab" class="nav-link has-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-credit-card"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect><line x1="1" y1="10" x2="23" y2="10"></line></svg></a>
                  </li>
                </ul>
              </div>
              <div class="card-body tab-content">
                <div class="tab-pane active" id="profile">
                  <h6>YOUR PROFILE INFORMATION</h6>
                  <hr>
                  <form action="/update" method="post">
                    <div class="form-group">
                      <label for="fullName">Username</label>
                      <input type="text" class="form-control" id="fullName" aria-describedby="fullNameHelp" placeholder="Enter your fullname" value="<?= $userData['username'] ?>" disabled>
                      <small id="fullNameHelp" class="form-text text-muted">Your name may appear around here where you are mentioned. You can change or remove it at any time.</small>
                    </div>
                    <div class="form-group">
                      <label for="bio">Age</label>
                      <input type="number" class="form-control" id="date" name="age" placeholder="Enter your age" value="<?= $userData['age'] ?>">
                    </div>
                    <div class="form-group">
                      <label for="url">Address</label>
                      <input type="text" class="form-control" id="address" name="address" placeholder="Enter your address" value="<?= $userData['address'] ?>">
                    </div>
                    <div class="form-group">
                      <label for="location">Course</label>
                      <input type="text" class="form-control" id="course" name="course" placeholder="User's course" value="<?= $userData['course'] ?>" disabled>
                    </div>
                    <div class="form-group">
                      <label for="location">Trainer</label>
                      <input type="text" class="form-control" id="trainer" name="trainer" placeholder="Trainer" value="<?= $userData['trainer'] ?>" disabled>
                    </div>
                    <div class="form-group">
                      <label for="location">Mobile Number</label>
                      <input type="number" class="form-control" id="number" name="number" placeholder="+62" value="<?= $userData['mobile_number'] ?>">
                    </div>
                    <div class="form-group small text-muted">
                      All of the fields on this page are optional and can be deleted at any time, and by filling them out, you're giving us consent to share this data wherever your user profile appears.
                    </div>
                    <button type="submit"  class="btn btn-primary">Update Profile</button>
                    <button type="reset" class="btn btn-light">Reset Changes</button>
                  </form>
                </div>
                <div class="tab-pane" id="accounts">
                  <h6>ACCOUNT SETTINGS</h6>
                  <hr>
                  <form>
                    <div class="form-group">
                      <label for="username">Username</label>
                      <input type="text" class="form-control" id="username" aria-describedby="usernameHelp" placeholder="Enter your username" value="kennethvaldez">
                      <small id="usernameHelp" class="form-text text-muted">After changing your username, your old username becomes available for anyone else to claim.</small>
                    </div>
                    <hr>
                    <div class="form-group">
                      <label class="d-block text-danger">Delete Account</label>
                      <p class="text-muted font-size-sm">Once you delete your account, there is no going back. Please be certain.</p>
                    </div>
                    <button class="btn btn-danger" type="button">Delete Account</button>
                  </form>
                </div>
                <div class="tab-pane" id="security">
                  <h6>SECURITY SETTINGS</h6>
                  <hr>
                  <form>
                    <div class="form-group">
                      <label class="d-block">Change Password</label>
                      <input type="text" class="form-control" placeholder="Enter your old password">
                      <input type="text" class="form-control mt-1" placeholder="New password">
                      <input type="text" class="form-control mt-1" placeholder="Confirm new password">
                    </div>
                    <button class="btn btn-info" type="button">Submit</button>
                    <p class="small text-muted mt-2">Just in case someone already know your password, we required to changed it to  new one</p>
                  </form>
        
                </div>
                <div class="tab-pane" id="billing">
                  <h6>BILLING SETTINGS</h6>
                  <hr>
                  <form>
                    <div class="form-group">
                      <label class="d-block mb-0">Payment Method</label>
                      <div class="small text-muted mb-3">You have not added a payment method</div>
                      <button class="btn btn-info" type="button">Add Payment Method</button>
                    </div>
                    <div class="form-group mb-0">
                      <label class="d-block">Payment History</label>
                      <div class="border border-gray-500 bg-gray-200 p-3 text-center font-size-sm">You have not made any payment.</div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
      <?= $this->include('layouts/footer') ?>

      <script src='https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js'></script>
      <script>
        // Add this script after including Bootstrap JavaScript
        $(document).ready(function(){
            $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
                // This ensures that the URL is updated based on the tab shown
                var target = $(e.target).attr("href");
                window.location.hash = target;
            });
    
            // Check if there is a hash in the URL and trigger click on corresponding tab
            if(window.location.hash){
                $('a[href="' + window.location.hash + '"]').tab('show');
            }
        });
    </script>
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>


</html>