
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <h2>Sign up</h2>
          <p>Remember, all fields are mandatory! Username must be alphanumeric. Password requirements:</p>
          <p>
            <ul>
              <li>at least 8 characters</li>
              <li>at least one uppercase letter</li>
              <li>at least one lowercase letter</li>
              <li>at least one number</li>
              <li>alphanumeric - [A-Z] [a-z] [0-9]</li>
            </ul>
          </p>
            <div class="form-group">
              <form method="post" class="form" role="form">
              <div>
                <label for=""></label>
                <?php if ($hasMessage === true): ?>

                	<div class="alert alert-warning" role="alert"><?php echo $message; ?></div>

                <?php endif; ?>
                <input class="form-control" name="username" placeholder="Username" type="text" id="username" required/>
              </div>
              <div>
                <label for=""></label>
                <input class="form-control" name="address" placeholder="Home Address" type=text id="address" required/>
              </div>
              <div>
                <label for=""></label>
                <input class="form-control" name="password" placeholder="Password" type="password" id="password" required/>
              </div>
              <div>
                <label for=""></label>
                <input class="form-control" name="repassword" placeholder="Confirm Password" type="password" id="repassword" required/>
              </div>
              <div>
              </div>
              <div>
                <label for=""></label>
                <button class="btn btn-lg btn-primary btn-block" type="submit">
                  Sign up</button>
              </div>
              </form>
            </div>
        </div>
    </div>
</div>
