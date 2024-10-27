<?php
include 'header.php';
include "logic.php";
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<div class="col-md-6 offset-md-3 mt-5">
    <p class="h1 text-center" style="color:white;">Add Blood Camps</p>
    <form method="POST" class="py-3" style="color:white;">
        <div class="row">
      <div class="col">
        <label for="sdate">Starting date</label>
        <input type="date" name="sdate" class="form-control" id="sdate" required="required">
      </div>
      <div class="col">
        <label for="edate">Expiry date</label>
        <input type="date" name="edate" class="form-control" id="edate" required="required">
      </div>
      </div>
      <div class="row mt-3">
      <div class="col">
        <label for="sdate">Starting Time</label>
        <input type="time" name="stime" class="form-control" id="stime" required="required">
      </div>
      <div class="col">
        <label for="etime">Ending Time</label>
        <input type="time" name="etime" class="form-control" id="etime" required="required">
      </div>
      </div>
      <div class="form-group mt-3">
        <label for="cname" required="required">Camp Name</label>
        <input type="text" name="cname" class="form-control" id="cname" placeholder="Enter Camp Name"required="required">
      </div>
      <div class="form-group mt-3">
        <label for="cadd" required="required">Camp Address</label>
        <textarea name="cadd" class="form-control" id="cadd" placeholder="Enter Camp Address"required="required"></textarea>
      </div>
      <div class="row mt-3">
      <div class="col">
        <label for="state">State</label>
        <input type="text" name="state" class="form-control" id="state" placeholder="Enter State" required="required">
      </div>
      <div class="col">
        <label for="district">District</label>
        <input type="text" name="district" class="form-control" id="district"placeholder="Enter District" required="required">
      </div>
      </div>
      <div class="form-group mt-3">
        <label for="contact" required="required">Contact</label>
        <input type="tel" name="contact" class="form-control" id="contact" placeholder="+91 XXXXXXXXXX"required="required">
      </div>
      <div class="row mt-3">
      <div class="col">
        <label for="conducted">Conducted By</label>
        <input type="text" name="conducted" class="form-control" id="conducted" required="required">
      </div>
      <div class="col">
        <label for="organized">Organized By</label>
        <input type="text" name="organized" class="form-control" id="organized" required="required">
      </div>
      </div>
      <button class="btn btn-primary my-4" name="add_camps">Submit</button>
</form>
</div>