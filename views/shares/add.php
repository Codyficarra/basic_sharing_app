<div class="card">
    <div class="card-header">
        <h3 class="card-title"></h3>
    </div>



    <div class="card-body">

        <!--this doesn't redirect very well!-->
        <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
            <div class="form-group">
                <label>Share Title</label>
                <input type="text" name="title" class="form-control" />
            </div>
            
            <div class="form-group">
                <label>Body</label>
                <textarea name="body" class="form-control"></textarea>
            </div>

            <div class="form-group">
                <label>Link</label>
                <input type="text" name="link" class="form-control" />
            </div> 

            <input class="btn btn-primary" name="submit" type="submit" value="Submit" />
            <a class="btn btn-danger" href="<?php echo ROOT_PATH; ?>shares">Cancel</a>

        </form>

    </div>

</div>