<html>
    <style>
        body{
            color: black;
        }

        .error{
            font-size: small;
            color: red;
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

    <script>
        function myFunction() {
            document.getElementById("myText").placeholder = "Type name here..";
        }
    </script>

    <head>
    <h3 style="text-align: center; margin-top: 0px; color:black;">
        Registration
    </h3>
    <p style ="text-align: center;">Please enter your account information below</p>
</head>

<body>

    <div id="registration-form" class="container">
        <?php
        $this->load->helper('form');
        echo form_open('Registration/register');
        ?>
        <div class="col-md-8 col-md-offset-2" id="formrow" >

            <form class="form-horizontal" method="post">

                <div class="form-group row">
                    <label class="control-label col-md-4" for="username">First Name: </label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" id="firstname" name="firstname" required="true" placeholder="First Name"
                               value="<?php echo set_value('firstname');?>">
                        <?php echo form_error('firstname', '<div class="error">', '</div>'); ?>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="control-label col-md-4" for="username">Last Name: </label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" id="lastname" name="lastname" required="true" placeholder="Last Name"
                               value="<?php echo set_value('lastname');?>">
                        <?php echo form_error('lastname', '<div class="error">', '</div>'); ?>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="control-label col-md-4" for="username">Username: </label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" id="username" name="username" required="true" placeholder="Username"
                               value="<?php echo set_value('username');?>">
                        <?php echo form_error('username', '<div class="error">', '</div>'); ?>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="control-label col-md-4" for="password">Password: </label>
                    <div class="col-md-8">
                        <input type="password" class="form-control" id="password" name="password" required="true" placeholder="Enter Password">
                        <?php echo form_error('password', '<div class="error">', '</div>'); ?>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="control-label col-md-4" for="password">Confirm Password: </label>
                    <div class="col-md-8">
                        <input type="password" class="form-control" id="password-confirm" name="password-confirm" required="true" placeholder="Confirm Password">
                        <?php echo form_error('password-confirm', '<div class="error">', '</div>'); ?>
                    </div>
                </div>

                <!--$this->input->$post can only find the name of the text field-->
                <div class="form-group row">
                    <label class="control-label col-md-4" for="email">SFSU Email: </label>
                    <div class="col-md-8">
                        <input style="text-align: left;" name="email" type="text" class="form-control" id="email" placeholder="Email"
                               value="<?php echo set_value('email'); ?>">
                                <?php echo form_error('email', '<div class="error">', '</div>'); ?>

                    </div>
                </div>

                <div class="form-group row checkbox-inline" style="padding-left: 80px;">
                    <label><input type="checkbox" required="true" style="height: 30px;" value="">I have read the terms & agreements.</label>
                </div>

                <div class="form-group row">
                    <a href="<?php echo base_url() ?>index.php/home" class="btn btn-danger" type="button" id="Cancel" >Cancel</a></button>

                    <!--<a href="<?php echo base_url() ?>index.php/registration/getInput" type="submit" id= "submit" class="btn btn-primary" style="float: right;">Create Account</a>-->
                    <button style="float: right;" type="submit" id="submit" name="register-submit" class="btn btn-primary">Create Account</button>
                </div>
                <!--<input style="float: right;" type="submit" name="submit" value="Test"/>-->
            </form>
            <?php
            echo form_close();
            ?>
        </div>
    </div>


</body>
</html>