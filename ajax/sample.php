<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/sample.css">
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

  <title>Sample 1 Ajax</title>
</head>

<body>
  <div class="container welcomePage">
    <div class="row col-sm-6">
        <form onsubmit="return insertMembersInfo();">
            <div class="form-group">
              <label for="fname">First Name</label>
              <input type="text" name="fname" class="form-control" id="fname" placeholder="First Name">
            </div>
            <div class="form-group">
              <label for="lname">Last Name</label>
              <input type="text" name="lname" class="form-control" id="lname" placeholder="Last Name">
            </div>
            <div class="form-group">
              <label for="phone">Phone</label>
              <input type="text" name="phone" class="form-control" id="phone" placeholder="phone number">
            </div>
            <div class="form-group">
              <label for="job">Job</label>
              <input type="text" name="job" class="form-control" id="job" placeholder="Your Job">
            </div>
            <button type="submit" name="inser_row" class="btn btn-primary">Submit</button>
      </form>
    </div>
    <div class="row col-sm-6">
          <table class="table table-hover table-dark">
                <thead>
                  <tr>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Job</th>
                    <th scope="col">Delete</th>
                    <th scope="col">Edit</th>
                  </tr>
                </thead>
                <tbody id="updateMe">
                 <?php 
                  include_once "select.php";
                 ?>
                </tbody>
              </table>
    </div>
    <button id="updateThis">Update New</button>
  </div>

  <script src="js/sample.js"></script>  
</body>
</html>