<div class="card">
    <div class="card-header">
        <h3 class="card-title">Can't Post if You Don't Register</h3>
    </div>


<?php if(isset($_POST['submit'])){ header('Location: /share_app/users/login');} ?>


    <div class="card-body">

        <!--this doesn't redirect very well!-->
        <form method="post" action=" ">
            <div class="form-group">
                <label>Userame</label>
                <input type="text" name="name" class="form-control" />
            </div>
            
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control" />
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" minlength="8" required/>
            </div> 

            <input class="btn btn-primary" name="submit" type="submit" value="Submit" />

        </form>

    </div>

</div>