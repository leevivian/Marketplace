<html>
<style>
    body{
        color: black;
    }

    label{
        text-align: right;
    }


    #formrow{
        margin-left: 33%;
    }

    #forgotinfo{
        font-size: 15px;
    }

    input.form-control{
        width: 35%;
    }

    #loginform{
        padding: 50px;
    }



</style>
<body>


<div id="loginform" class="container">

    <?php echo form_open('Login');?>
    <div class="row" id="formrow">
        <form class="form-horizontal">

            <div class="form-group row">
                <label class="control-label col-md-2" for="username">Username: </label>
                <div class="col-md-10">
                    <input type="text" class="form-control" id="username" placeholder="Username">
                </div>
            </div>

            <div class="form-group row">
                <label class="control-label col-md-2" for="password">Password: </label>
                <div class="col-md-10">
                    <input type="text" class="form-control" id="password" placeholder="Enter Password">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-offset-2 col-md-10">
                    <button type ="submit" class="btn btn-default">Log In</button>
                </div>
            </div>

            <div class ="form-group row" id="forgotinfo">
                <div class="col-md-offset-2 col-md-10">
                    <a href="#">Forgot your password?</a></br>
                    <a href="#">Forgot your username?</a>
                </div>
            </div>


        </form>
    </div>

</div>

</div>




</body>
</html>