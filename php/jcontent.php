<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div class="col-md-6 offset-md-3 mt-5">
<p class="h1">You are Applying For Content Writer Job In Blood Donation Website</p>
    <form action="cvcontent.php" method="POST" enctype="multipart/form-data" class="py-3">
      <div class="form-group">
        <label for="fullname">Full Name</label>
        <input type="text" name="fullname" class="form-control" id="fullname" placeholder="Enter your name and surname" required="required">
      </div>
      <div class="form-group">
        <label for="email" required="required">Email address</label>
        <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email address"required="required">
      </div>
      <div class="form-group">
        <label for="address">Address</label>
        <input type="text" name="address" class="form-control" id="address" placeholder="Opp. LPU Main Gate"required="required">
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="city">City</label>
          <input type="text" name="city" class="form-control" id="city" placeholder="Ludhiana"required="required">
        </div>
        <div class="form-group col-md-2">
          <label for="zip">ZipCode</label>
          <input type="text" name="zip" class="form-control" id="zip" placeholder="141100"required="required">
        </div>
      </div>
            <div class="form-row">
        <div class="form-group col-md-6">
          <label for="exp">Exprience</label>
          <input type="text" name="exp" class="form-control" id="exp" placeholder="2 Years"required="required">
        </div>
        <div class="form-group col-md-6">
          <label for="qua">Qualification</label>
          <input type="text" name="qua" class="form-control" id="qua" placeholder="12 Standard"required="required">
        </div>
      </div>
      <div class="form-group">
        <label for="tel">Telephone</label>
          <input class="form-control" name="tel" type="tel" value="+91" id="tel"required="required">
      </div>
      <div class="form-group mt-3">
        <label class="mr-4">Upload your CV:</label>
        <input type="file" name="file"required="required">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>