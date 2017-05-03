<?php
/**
 * Created by PhpStorm.
 * User: Nick_2
 * Date: 4/10/2017
 * Time: 7:35 PM
 *
 * Certain containers courtesy of w3schools.com
 */


defined('BASEPATH') OR exit('No direct script access allowed');
?>

<html>
    <style>
        .form-control {
            width: 50%;
            text-align: center;

        }
    </style>


<div class="container-fluid text-center">
    <div class="row content">
        <div class="col-sm-12 text-center", style="color:#000000">
            <h1>Registration</h1>
            <p>Please enter your account information below.</p>
            <!--email input-->
            <div class="form-group">
                <label for="user_email">Email:</label>
                <input type="text" class="form-control" id="user_email">
            </div>
            <!--username input -->
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" class="form-control" id="usernamer">
            </div>
            <!--password input-->
            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="pwd">
            </div>
            <!--password check-->
            <div class="form-group">
                <label for="pwd_check">Please Re-Enter Password:</label>
                <input type="password" class="form-control" id="pwd_check">
            </div>
            <!--terms & agreements-->
            <div class="checkbox">
                <label><input type="checkbox" value="">I have read the terms & agreements.</label>
            </div>
            <!--clear form button-->
            <button type="button" class="btn btn-primary">Clear</button>
            <!--submit button-->
            <button type="button" class="btn btn-primary">Submit</button>
        </div>
    </div>
</div>

</html>
