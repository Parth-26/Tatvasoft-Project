
<?php
$base_url='http://localhost/Tatvasoft-Project/Project/Helperland/';


?>
<style>
  a
  {
    text-decoration:none;
  }
  </style>
<!-- Modal -->
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel1">Login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form method="post" action="<?= $base_url.'?controller=User&function=login_data'?>" class="ng-untouched ng-pristine ng-invalid">
          <div>
            <div class="py-1">
              <input class="form-control ng-untouched ng-pristine ng-invalid" formcontrolname="Email" maxlength="100" name="Email" type="Email" placeholder="Email address" required>
            </div>
            <div class="py-1">
              <input class="form-control ng-untouched ng-pristine ng-invalid" formcontrolname="Password" name="passwd" type="password" placeholder="Password" required>
            </div>
          </div>
        <div class="col-sm-12 text-center pt-4">
          <button class="btn btn-primary btn-lg" data-dismiss="msg" type="submit">Log in</button>
        </div>
      </form>
      <div class="modal-footer">
      <a href="#" class="d-block" data-bs-toggle="modal" data-bs-target="#exampleModal2" data-dismiss="modal">
          Forgot Password ?
        </a>
        <label class="d-block">Don't have an account yet?</label>
        <a class="d-block" href="<?= $base_url.'?controller=User&function=create_acc'?>">Create Account</a>
      </div>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered ">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel2">Login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form method="post" action="" class="ng-untouched ng-pristine ng-invalid">
          <div>
            <div class="py-1">
              <input class="form-control ng-untouched ng-pristine ng-invalid" formcontrolname="Email" maxlength="100" name="Email" type="Email" placeholder="Email address" required>
            </div>
          </div>
        <div class="col-sm-12 text-center pt-4">
          <button class="btn btn-primary btn-lg" data-dismiss="msg" type="submit">Log in</button>
        </div>
      </form>
      <div class="text-center pt-4">
      <a href="#" class="d-block" data-bs-toggle="modal" data-bs-target="#exampleModal1" data-dismiss="modal">
          Log in now
        </a>
      </div>
      </div>
    </div>
  </div>
</div>