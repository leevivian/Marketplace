<html>
<style>
    body{
        color: black;
    }
    label{
        text-align: right;
    }

    #formrow{
        margin-left: 23%;
    }


    input.form-control{
        width: 50%;
    }


    .control-label{
        font-size: 15px;
    }


</style>

<head>
    <h3 style="text-align: center; margin-top: 0px; color:black;">
        Registration
    </h3>
    <p style ="text-align: center;">Please enter your account information below</p>
</head>

<body>

<div id="registration-form" class="container">
    <?php echo form_open('Registration');?>
    <div class="col-md-8 col-md-offset-2" id="formrow" >
        <form class="form-horizontal">

            <div class="form-group row">
                <label class="control-label col-md-4" for="email">SFSU Email: </label>
                <div class="col-md-8">
                    <input type="text" class="form-control" id="email" placeholder="Email">
                </div>
            </div>

            <div class="form-group row">
                <label class="control-label col-md-4" for="username">Username: </label>
                <div class="col-md-8">
                    <input type="text" class="form-control" id="username" placeholder="Username">
                </div>
            </div>

            <div class="form-group row">
                <label class="control-label col-md-4" for="username">First Name: </label>
                <div class="col-md-8">
                    <input type="text" class="form-control" id="first-name" placeholder="First Name">
                </div>
            </div>

            <div class="form-group row">
                <label class="control-label col-md-4" for="username">Last Name: </label>
                <div class="col-md-8">
                    <input type="text" class="form-control" id="last-name" placeholder="Last Name">
                </div>
            </div>

            <div class="form-group row">
                <label class="control-label col-md-4" for="password">Password: </label>
                <div class="col-md-8">
                    <input type="text" class="form-control" id="password" placeholder="Enter Password">
                </div>
            </div>
            <div class="form-group row">
                <label class="control-label col-md-4" for="password">Confirm Password: </label>
                <div class="col-md-8">
                    <input type="text" class="form-control" id="password-confirm" placeholder="Confirm Password">
                </div>
            </div>

            <div class="form-group row checkbox-inline" style="padding-left: 80px;">
                <label><input type="checkbox" value="">I have read the terms & agreements.</label>
            </div>

            <div class="form-group row">
                    <a href="<?php echo base_url()?>index.php/home" class="btn btn-danger" type="button" id="Cancel" >Cancel</a></button>

                    <a href="<?php echo base_url()?>index.php/home" type ="button" id= "submit" class="btn btn-primary" style="float: right;">Create Account</a>

            </div>
        </form>
    </div>
</div>


</body>
</html>