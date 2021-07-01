<!DOCTYPE html>



<html lang="en">

<head>
    <style>
        body {
            background-color: #eee;
        }

        .container-fluid {
            padding: 50px;
        }

        .container {
            background-color: white;
            padding: 50px;
        }

        #title {
            font-family: 'Lobster', cursive;
            ;
        }
    </style>
</head>

<body>



    <div style="
    display: block;
    text-align: center; margin-top: 200px; width:100%;">

        <form role="form" action="Home/storee" method="POST">

            <p class="text-uppercase pull-center"> SIGN UP.</p>
            <div class="form-group">
                <input type="text" name="username" id="username" class="form-control input-lg" placeholder="username">
            </div>
            </br>
            </br>

            <div class="form-group">
                <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address">
            </div>
            </br>
            </br>
            <div class="form-group">
                <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password">
            </div>
            </br>
            </br>
            <div>
                <input type="submit" class="btn btn-lg btn-primary " value="submit" name="submit">
            </div>

        </form>


    </div>


</body>


</html>