<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" >
</head>
<body>
    <div class="container-fluid"
     style="background-image:url('images/abc.jpg');
      height:1000px; 
      width:100%;
      background-repeat:no-repeat;
       background-size:cover;
      
       position:relative;">
        <div class="well" style="position:absolute; left:40%; top:20%;">
            <form action="" method="post" style="border:3px solid pink;padding:10px;  width:350px;" >
                <div class="form-group">
                    <label >Email</label>
                    <input type="email" class="form-control" id="email"  placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label >Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Enter Password">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </div>
                <div class="form-group form-check" >
                    <label class="form-check-label "><input type="checkbox" class=" form-check-input" id="exampleCheck1">Keep me logged in</label>
                </div>
                <div class="form-group" >
                    <label><a href="#" >Forgot password?</a></label>
                </div>
            </form>
        </div>
    </div>

    
</body>
</html>