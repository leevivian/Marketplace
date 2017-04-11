<html>
    <style>
        body{
            color: black;
            margin: 25px;
        }

        label{
            margin-bottom: 0px;
        }

        .itemdescription{

            padding: 25px;
            border: 1px solid black;
            margin-top: 25px;
        }

        .payment{
            margin-top: 25px;
            margin-bottom: 25px;
            padding: 25px;
            padding-top: 10px;
            border: 1px solid black;
        }

        .submitbuttons{
            padding-bottom:10px;
        }

        #submit{
            margin: 10px;
        }

        #preview{
            margin:10px;
        }

        label{
            font-size: 15px;
        }
    </style>

     <body>
        <div class="itemdescription container">
            <div class="row">
                <h4>Describe your item:</h4>
            </div>

            <!--Form's first row, containing title, condition, and category -->
            <div class="row form-group form-inline">
                <div class="col-sm-4">
                    <label for="itemname">Title*: </label>
                    <input type="text" class="form-control" id="itemName">
                </div>

                <div class ="col-sm-4">
                    <label for="categoryselect">Category*:</label>
                    <select class="form-control" id="categoryselect">
                        <option value="" selected hidden>Select Category</option>
                        <option>Books</option>
                        <option>Furniture</option>
                        <option>Electronics</option>
                        <option>Event Tickets</option>
                        <option>Other</option>
                    </select>
                </div>

                <div class ="col-sm-4">
                    <label for="itemcondition">Condition:</label>
                    <select class="form-control" id="itemcondition">
                        <option value="" selected hidden>Select Condition</option>
                        <option>Brand New</option>
                        <option>Like New</option>
                        <option>Good</option>
                        <option>Acceptable</option>
                    </select>
                </div>
            </div>
            <!-- End first row -->


            <div class="row form-group">
                <label for="description">Item Description</label>
                <textarea class="form-control" rows="5" id="description"></textarea>
            </div>

            <div class="row form-group form-inline">
                <label for="keywords">Keywords</label>
                <input type="text" class="form-control" id="keywords">
                <input type="text" class="form-control" id="keywords">
                <input type="text" class="form-control" id="keywords">
                <input type="text" class="form-control" id="keywords">
            </div>


            <div class="row form-group">
                <label for="photoUpload">Upload photos</label>
                <button class="btn btn-default" type="button" id="browse">Browse...</button>
            </div>
        </div>

        <div class="container payment">
            <div class="row">
                <h4>Payment:</h4>
            </div>
            <div class="row form-group form-inline">
                <div class="col-sm-6">
                    <label for="price">Price*:</label>
                    <input type="text" class="form-control" id="price">
                </div>

                <div class ="col-sm-6">
                    <label for="listingduration">Duration*:</label>

                    <select class="form-control" id="listingduration">
                        <option>1 Day</option>
                        <option>2 Days</option>
                        <option>3 Days</option>
                        <option>4 Days</option>
                        <option>5 Days</option>
                        <option>6 Days</option>
                        <option>7 Days</option>
                    </select>
                </div>
            </div>

        </div>

        <div class="container submitbuttons">
            <button class="btn btn-default" type="button" id="preview" style="float:right;">Preview</button>

            <button class="btn btn-primary" type="button" id="submit" style="float:right;">Submit</button>

        </div>

    </body>

</html>