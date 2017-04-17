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
        padding: 30px;
    }

</style>

<head>
    <h3 style="text-align: center; margin-top: 0px; color:black;">
        Login
    </h3>
</head>

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
                <div id="forgotinfo">
                    <div class="col-md-offset-2 col-md-10">
                        <a href="#">Forgot your username?</a>
                    </div>
                </div>
            </div>

            <div class="form-group row">
                <label class="control-label col-md-2" for="password">Password: </label>
                <div class="col-md-10">
                    <input type="text" class="form-control" id="password" placeholder="Enter Password">
                </div>

                <div id="forgotinfo">
                    <div class="col-md-offset-2 col-md-10">
                        <a href="#">Forgot your password?</a>
                    </div>
                </div>

            </div>

            <div class="form-group row">
                <div style="width: 47%; padding-left:12px;">
                    <a href="<?php echo base_url()?>index.php/home" class="btn btn-default" type="button" id="Cancel" >Cancel</a></button>
                    <button type ="button" id= "submit" class="btn btn-default" style="float: right;">Login</button>
                </div>
            </div>
        </form>
    </div>
    <div style="text-align: center">
            <a href="#" style="font-size: 15px;">New user? Register here</a>

    </div>

</div>

</body>
</html>