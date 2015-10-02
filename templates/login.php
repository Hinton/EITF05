<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="form-group">
              <h2>Log in</h2>
              <p>Log in to place orders!</p>
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
                <input class="form-control" name="password" placeholder="Password" type="password" id="password" required/>
              </div>
              <div>
                <label for=""></label>
                <button class="btn btn-lg btn-primary btn-block" type="submit">
                  Log in</button>
              </div>
              </form>
            </div>
        </div>
    </div>
</div>
