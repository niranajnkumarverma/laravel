

<div class="modal fade seminor-login-modal" data-backdrop="static" id="sem-reg">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

          <!-- Modal body -->
          <div class="modal-body seminor-login-modal-body">
            <h5 class="modal-title text-center">CREATE AN ACCOUNT</h5>
            <button type="button" class="close" data-dismiss="modal">
              <span><i class="fa fa-times-circle" aria-hidden="true"></i></span>
            </button>

            <form method="post" action="{{ route('register') }}" class="seminor-login-form">
              @csrf
          
          
              <div class="form-group">
                <input type="name" name="name" id="name" class="form-control" required>
                <label class="form-control-placeholder" for="name">User Name</label>
              </div>
              <div class="form-group">
                <input type="email" name="email" id="email" class="form-control" required >
                <label class="form-control-placeholder" for="name">Email address</label>
              </div>
             
            
            
              <div class="form-group">
                <input type="password" name="password" id="password"  class="form-control" required >
                <label class="form-control-placeholder" for="password">Password</label>
              </div>
              <div class="form-group">
                <input type="password"  name="confirm_password" id="confirm_password" class="form-control" required >
                <label class="form-control-placeholder" for="password">Confirm Password</label>
              </div>

              <div class="form-group forgot-pass-fau text-center ">
                <a href="#" class="text-secondary">
                  By Clicking "SIGN UP" you accept our<br>
                  <span class="text-primary-fau">Terms and Conditions</span>
                </a>
              </div>

              <div class="btn-check-log">
                <button type="submit" class="btn-check-login">SIGN UP</button>
              </div>
              <div class="create-new-fau text-center pt-3">
                <a href="#" class="text-primary-fau"><span data-toggle="modal" data-target="#sem-login" data-dismiss="modal">Already Have An Account</span></a>
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>




    <!-- The Modal Login -->
    <div class="modal fade seminor-login-modal" data-backdrop="static" id="sem-login">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

          <!-- Modal body -->
          <div class="modal-body seminor-login-modal-body">
            <h5 class="modal-title text-center">LOGIN TO MY ACCOUNT</h5>
            <button type="button" class="close" data-dismiss="modal">
              <span><i class="fa fa-times-circle" aria-hidden="true"></i></span>
            </button>


            <form method="post" action="{{ route('login') }}" class="seminor-login-form">
              @csrf
              @method('post')
              <div class="form-group">
                <input type="email" name="email" id="email" class="form-control" required >
                <label class="form-control-placeholder" for="name">Email address</label>
              </div>
              <div class="form-group">
                <input type="password"  name="password" id="password" class="form-control" required >
                <label class="form-control-placeholder" for="password">Password</label>
              </div>
              <div class="form-group">
                <label class="container-checkbox">
                  Remember Me On This Computer
                  <input type="checkbox" checked="checked" required>
                  <span class="checkmark-box"></span>
                </label>
              </div>

              <div class="btn-check-log">
                <button type="submit" class="btn-check-login">LOGIN</button>
              </div>


              <div class="forgot-pass-fau text-center pt-3">
                <a href="#" class="text-secondary">Forgot Your Password?</a>

              </div>
              <div class="create-new-fau text-center pt-3">
                <a href="{{ route('register') }}" class="text-primary-fau"><span data-toggle="modal" data-target="#sem-reg" data-dismiss="modal">Create A New Account</span></a>
              </div>



            </form>

          </div>
        </div>
      </div>
    </div>

  </div>


