<style>
  a
  {
    text-decoration:none;
  }
  </style>
<!-- Modal -->
<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
  <div class="modal-dialog">
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
          Login in now
        </a>
      </div>
      </div>
    </div>
  </div>
</div>
</div>
<?php
include('view/login.php');
?>