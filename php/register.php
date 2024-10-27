<style>
#registernav{
    background-color:rgb(224, 224, 224);
}
</style>
<link rel="stylesheet" href="../css/Register.css">
<section class="u-clearfix u-custom-color-2 u-section-1" id="sec-b49d">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h1 class="u-text u-text-default u-text-1">Registration</h1>
        <div class="u-clearfix u-expanded-width u-gutter-0 u-layout-wrap u-layout-wrap-1">
          <div class="u-layout" style="">
            <div class="u-layout-row" style="">
              <div class="u-container-style u-layout-cell u-size-31 u-layout-cell-1">
                <div class="u-container-layout u-container-layout-1">
                  <h3 class="u-text u-text-default u-text-2"> BLOOD DONOR DETAILS</h3>
                  <p class="u-text u-text-default u-text-3"> A Drop of water makes ocean.<br>A Unit of Blood SAVES LIFE.
                  </p>
                  <ul class="u-text u-text-default u-text-4">
                    <li> Donating blood may reduce the risk of heart disease for men and stimulate the generation of red blood cells.</li>
                    <li> The amount of toxic chemicals (e.g. mercury, pesticides, fire retardants) circulating in the blood stream is reduced by the amount contained in given blood.</li>
                    <li style=""> The good news is you can give blood again and again to help save more lives!</li>
                    <li>If you're a regular blood donor, you can give blood once in 12 weeks.<br>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="u-align-left u-container-style u-layout-cell u-size-29 u-layout-cell-2">
                <div class="u-container-layout u-container-layout-2">
                  <div class="u-form u-form-1">
                      <div class="u-clearfix u-form-spacing-20 u-form-vertical u-inner-form">
                    <form method="POST" style="padding: 10px" source="custom" name="form" action="saveregister.php" class="myForm">
                        <div class="u-form-group u-form-name u-label-top">
                        <label for="name-3b9a" class="u-label">Name</label>
                        <input type="text" placeholder="Enter your Name" id="name-3b9a" name="name" class="u-border-2 u-border-grey-5 u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-input-1" required="">
                      </div>
                      <div class="u-form-email u-form-group u-label-top">
                        <label for="email-3b9a" class="u-label">Email</label>
                        <input type="email" placeholder="Enter a valid email address" id="email-3b9a" name="email" class="u-border-2 u-border-grey-5 u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-input-2" required="">
                      </div>
                      <div class="u-form-group u-form-phone u-label-top u-form-group-3">
                        <label for="phone-a983" class="u-label">Phone Number</label>
                        <input type="tel" pattern="\+?\d{0,3}[\s\(\-]?([0-9]{2,3})[\s\)\-]?([\s\-]?)([0-9]{3})[\s\-]?([0-9]{2})[\s\-]?([0-9]{2})" placeholder="Enter your phone (e.g. +919362789456)" id="phone-a983" name="phone" class="u-border-2 u-border-grey-5 u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-input-3" required="">
                      </div>
                      <div class="u-form-group u-form-select u-label-top u-form-group-4">
                        <label for="select-2563" class="u-label">Select your blood group</label>
                        <div class="u-form-select-wrapper">
                          <select id="select-2563" name="bg" style="background-color:rgba(0,0,0,0.6);" class="u-border-2 u-border-grey-5 u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-input-4" required="required">
                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                            <option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>
                          </select>
                          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" version="1" class="u-caret"><path fill="currentColor" d="M4 8L0 4h8z"></path></svg>
                        </div>
                      </div>
                      <div class="u-form-group u-label-top u-form-group-5">
                        <label for="text-ee14" class="u-label">City</label>
                        <input type="text" id="text-ee14" name="city" class="u-border-2 u-border-grey-5 u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-input-5" placeholder="Enter your city" required="required">
                      </div>
                      <div class="u-form-group u-label-top u-form-group-6">
                        <label for="text-a8a6" class="u-label">Pincode/ Zipcode</label>
                        <input type="text" placeholder="Enter your area pincode" id="text-a8a6" name="pin" class="u-border-2 u-border-grey-5 u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-input-6" required="required">
                      </div>
                      <div class="u-form-group u-form-textarea u-label-top u-form-group-7">
                        <label for="textarea-ad58" class="u-label">Address</label>
                        <textarea rows="4" cols="50" id="textarea-ad58" name="address" class="u-border-2 u-border-grey-5 u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-input-7" required="" placeholder="Enter your address"></textarea>
                      </div>
                      <input type="hidden" name="lat" id=""><input type="hidden" name="lon" id="">
                      <div class="u-align-center u-form-group u-form-submit u-label-top">
                        <input type="submit" value="submit" class="u-border-2 u-border-active-custom-color-1 u-border-hover-black u-border-white u-btn u-btn-rectangle u-btn-submit u-button-style u-none u-btn-1">
                      </div>
                    </form>
                    <script>
      function getLocation(){
        if(navigator.geolocation){
          navigator.geolocation.getCurrentPosition(showPosition,showError);
        }
      }
      function showPosition(position){
        document.querySelector('.myForm input[name="lat"]').value = position.coords.latitude;
        document.querySelector('.myForm input[name="lon"]').value = position.coords.longitude;
      }
      function showError(error){
        switch(error.code){
          case error.PERMISSION_DENIED:
          alert("You Must Allow Location To Fill The Form");
          location.reload();
          break;
        }
      }
    </script>
                          </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <?php
include 'footer.php';
    ?>