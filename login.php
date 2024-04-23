<?php
include("header.php");
include("navbar.php");
?>


<div class="container-fluid mt-3">
    <div class="row">
        <div class="col">
        <div class="card">
                    <div class="card-header"><h4>Registration</h4></div>
                    <div class="card-body">
                    <form action="/action_page.php">
                        <div class="form-floating mb-3 mt-3">
                        <input type="text" class="form-control" id="email" placeholder="email" name="email">
                        <label for="email">email</label>
                    </div>

                            <div class="form-floating mt-3 mb-3">
                            <input type="password" class="form-control" id="pwd2" placeholder="Enter password" name="cpswd">
                            <label for="pwd2">Confirm Password</label>
                    </div>
                            <button type="submit" class="btn btn-primary">Login</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col">
            <img src="images/lovecode.webp" alt="lovecode">
        </div>
    </div>
</div>


<?php
include("footer.php");
?>
