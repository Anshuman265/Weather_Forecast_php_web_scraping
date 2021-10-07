<?php
    $output = "";
    //Checking whether the user has given any input
    if(array_key_exists('city_name',$_GET)){
                if($_GET['city_name']){
                    $soruce_page = file_get_contents("https://www.myweather2.com/City-Town/India/".$_GET['city_name'].".aspx");
                    $array1 = explode('</p></div>',$soruce_page);
                    $array2 = explode('</strong><br><br><p>',$array1[0]);
                    $output =  $array2[1];
                }
                //Checking if the city name exists
                    
                if(strlen($output) <=1){
                    $output = "Please re-check the city name!";
                }

        }
?>
    <!doctype html>
    <html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <title>Your Weather Forecast
        </title>
        <style type="text/css">
            body {
                background-image: url(w3.jpg);
                background-position: center center;
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: cover;
                background-color: #464646;
            }
            
            .container {
                text-align: center;
                margin-top: 70px;
                width: 480px;
            }
            
            input {
                margin: 15px 0px;
            }
            
            button {
                margin: 10px 0px;
            }
        </style>
    </head>

    <body>
        <div class="container">
            <h1>Your Weather Forecast!</h1>
            <form>
                <div class="form-group">
                    <label for="city_name"><h2>Enter your city name.</h2></label>
                    <input type="text" class="form-control" id="city_name" name="city_name" placeholder="Your City Name.">
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
            </form>
            <div id="result">
                <?php
                    if($output){
                        echo '<div class="alert alert-primary" role="alert">
                                '.$output.'
                            </div>';
                    }          
                ?>
            </div>
        </div>
        <!-- Optional JavaScript -->
        <!-- jQuery first,
    then Popper.js,
    then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>

    </html>