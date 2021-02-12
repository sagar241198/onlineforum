<div class="modal fade" id="signupmodal" tabindex="-1" role="dialog" aria-labelledby="signupmodal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="signupmodal">SignUp/Create Your Account</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <!-- submitform -->
                <form action="/onlineforum/partials/_handlersignup.php" method="post">
                <div class="form-group">
                        <label for="u_name">username</label>
                        <input type="text" class="form-control" id="u_name" name="u_name" aria-describedby="emailHelp"
                            placeholder="Enter Your Username"> 
                       
                    </div>

                    <div class="form-group">
                        <label for="Email1">Email address</label>
                        <input type="email" class="form-control" id="Email1" name="email" aria-describedby="emailHelp"
                            placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                            else.</small>
                    </div>
                    <div class="form-group">

                        <label for="password"> Password</label>
                        <input type="password" class="form-control" id="password" name="password"
                            placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for="cpassword">Password</label>
                        <input type="password" class="form-control" id="cpassword" name="cpassword"
                            placeholder="confirm Password">
                    </div>

                    <button type="submit" class="btn btn-primary">Sign Up</button>
                </form>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

            </div>
        </div>
    </div>
</div>