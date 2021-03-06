<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Product Managment</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>

        <div class="jumbotron text-center">
            <h1>Add Product</h1>
            <p>Add a product by uploading a file or using device camera</p> 
        </div>
        <div class="row">
            <div class="col-sm-4">
            </div>
            <div class="col-sm-8">
                <div class="col-sm-4">
                    <video id="liveStream" width="100%" alt="liveo video frame" autoplay></video>
                </div>
                <div class="col-sm-4">
                    <input type="image" id="snap" width="40%" src="img/cameraicon.png" alt="snapshot button" >       
                </div>
                <div class="col-sm-4">
                    <canvas id="snapShot" alt="player saved picture" ></canvas>
                </div>
            </div>	
        </div>
        <div class id="row">
            <div class="col-sm-4">
            </div>
            <div class="col-sm-8">
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
                <script src="js/jquery.form.min.js"></script>
                <form action="php/imageUpload.php" method="post" enctype="multipart/form-data" id="imageUploadForm">
                    <div class="form-group">
                        <label for="exampleInputFile">Product Images</label>
                        <input type="file" class="form-control-file" name="fileToUpload[]" id="fileToUpload" aria-describedby="fileHelp" multiple>
                        <small id="fileHelp" class="form-text text-muted">Supported image formats are png,jpg,gif and bmp</small>
                    </div>
                    <div class="form-group">
                        <label for="productName">Product Name:</label>
                        <input name="productName" class="form-control" id="productName" type="text"/>
                    </div>

                    <div class="form-group">
                        <label for="productDesc">Product description:</label>
                        <textarea class="form-control" name="productDesc" id="productDesc" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="productCategory">Product Category:</label>
                        <select multiple class="form-control" id="productCategory" name="productCategory">
                            <option>Flowers</option>
                            <option>Fruit</option>
                            <option>Cactus</option>
                        </select>
                    </div>

                    <div class="form-group col-sm-2">
                            <label for="productPrice">Product Price:</label>
                            <input name="productPrice" class="form-control"  id="productPrice" value="0.0" type="number"step="0.01">
                            
                    </div>
                    <div class="row">
                        <div class="col-sm-8">
                            <input type="submit" class="btn btn-primary" id="submit-btn" value="Upload" >
                        </div>
                    </div>
                </form>
                <div class ="row">
                    <div class="col-sm-2">
                        <div id="progressbox" ><div id="progressbar"></div ><div id="statustxt">0%</div></div>
                        <div id="output"></div>
                    </div>
                </div>
            </div>
        </div>


        <script src="js/addProduct.js"></script>
    </body>
</html>