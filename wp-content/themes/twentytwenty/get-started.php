<?php
/**
* Template Name: Get Started
*
* @package WordPress
* @subpackage Twenty_Sixteen
* @since Twenty Sixteen 1.0
*/

get_header(); ?>

<div class="getStartedForm" id="getStartedForm">
			<div class="heading"><h1><img src="assets/img/plan-icon.svg" alt="" /> Energy Plans</h1></div>
			<div class="posi-rel">
			<!---->
			<div id="zipCode-Section" class="animateForm show">
				<h2>What’s your Zip Code?</h2>
				<div class="form-group">
					<input type="number" name="zip-code" id="zip-code" class="form-control location-field" placeholder="Enter your Zip Code" />
	  				<button type="button" id="continue-button" class="btn-continue" disabled>Continue</button>
				</div>
			</div>
			<!---->
			<div id="bill-section" class="animateForm">
				<h3>How much is your Monthly Bill?</h3>
				<div class="form-group">
					<select class="form-control" id="bill-select">
						<option>Select Bill Amount</option>
						<option>$0-$500</option>
						<option>$500-$1000</option>
						<option>$1000-$1500</option>
					</select>
					<div class="gryText">If you're not sure, no worries! <br/>We'll just use the local average.</div>
	  				<button type="button" id="goToChoose" class="btn-continue">Continue</button>
				</div>
			</div>
			<!---->
			<div id="choose-section" class="animateForm">
				<h3>How would you like to provide your service location details?</h3>
				<div class="form-group">
					<a href="#" id="gotoUploadBill" class="largeBtn"><img src="assets/img/upload-icon.svg" alt="" /> Upload Bill</a>
				</div>
				<div class="form-group">
					<a href="#" id="gotoServiceBill" class="largeBtn"><img src="assets/img/location-icon1.svg" alt="" /> Enter Location Info</a>
				</div>
			</div>
<!---->
			<div id="uploadStep1" class="animateForm">
				<div class="progressBar"><span style="width: 20%"></span></div>
				<h3>Step 1: Upload Bill</h3>
				<p>Some suppliers will not provide pricing without a copy of your recent energy bill(s).</p>
				 <div class="upload-area" id="upload-area">
        <p><strong>Drag & Drop or <span>Click here to Upload</span></strong></p>
        <p>Max File Size: 10MB - Supported Files: jpg, png, pdf</p>
        <input type="file" id="file-input" accept=".jpg,.png,.pdf">
    </div>
     <div id="file-name" class="file-name" style="display: none">fgf</div>

				<button type="button" id="gotoStep2" class="btn-continue" disabled>Continue</button>
			</div>

			<!---->
			<div id="servicesStep1" class="animateForm">
				<div class="progressBar"><span style="width: 20%"></span></div>
				<h3>Step 1: Service Location(s)</h3>
				<p>Enter your service address to find your location(s).</p>
				 <div class="form-group">
					<input type="text" name="service-location" id="service-location" class="form-control location-field" placeholder="Enter your Business Name" />
	  				<button type="button" id="gotoContinueStep2" class="btn-continue" disabled>Continue</button>
	  				<a href="#" id="servicePopup" class="servicePopup" data-bs-toggle="modal" data-bs-target="#servicePopupModal">I can't find my location</a>
				</div>
			</div>


			<!---->
			<div id="step2" class="animateForm">
			    <div class="progressBar"><span style="width: 40%"></span></div>
			    <h3>Step 2: Start Date</h3>
			    <p>When would you like your new plan to start?</p>
			    <div class="form-group">
    <label for="asSoonAs" class="radioBg">
        <input type="radio" id="asSoonAs" name="response" value="asSoonAs" checked="checked" />As Soon As Possible
    </label>
    <label for="start-date" class="radioBg">
        <input type="radio" id="start-date" name="response" value="start-date" />Choose Start Date
    </label>
    <input type="date" id="date" class="form-control" disabled />
    <button type="button" id="gotoStep3" class="btn-continue">Continue</button>
</div>
			</div>

			<!---->
			<div id="step3" class="animateForm">
			    <div class="progressBar"><span style="width: 60%"></span></div>
			    <h3>Step 3: Business Name</h3>
			    <p>Please enter your business name as it appears on your most recent electricity bill.</p>
			    <div class="form-group">
					<input type="text" name="business-name" id="business-name" class="form-control location-field" placeholder="Enter your Business Name" />
	  				<button type="button" id="gotoStep4" class="btn-continue" disabled>Continue</button>
				</div>
			</div>
			<!---->
			<div id="step4" class="animateForm">
			    <div class="progressBar"><span style="width: 80%"></span></div>
			    <h3>Step 4: Contact Information</h3>
			    <p>We’ll need your authorization to proceed. Your personal information will not be shared without your permission.</p>
			    <div class="form-group">
			    	<label>First Name</label>
					<input type="text" name="first-name" id="first-name" class="form-control" placeholder="Enter your First Name" />	  				
				</div>
				 <div class="form-group">
			    	<label>Last Name</label>
					<input type="text" name="last-name" id="last-name" class="form-control" placeholder="Enter your Last Name" />	  				
				</div>
				 <div class="form-group">
			    	<label>Job Title</label>
					<input type="text" name="job-tittle" id="job-tittle" class="form-control" placeholder="President, CEO etc." />	  				
				</div>
				<div class="form-group">
			    	<label>Email Address</label>
					<input type="text" name="email" id="email" class="form-control" placeholder="John@mail.com" />	  				
				</div>
				<div class="form-group">
			    	<label>Phone Number for SMS</label>
					<input type="text" name="phone" id="phone" class="form-control" placeholder="(123) 456-7890" />	  				
				</div>
				<div class="form-group">
					<label for="authorization" class="checkboxLabel">
						<input type="checkbox" name="authorization" id="authorization">
						Text me at this number if there are any issues with my authorization. We will never use your phone number for marketing purposes.
					</label>
				</div>

				<div class="form-group termsClass">
					<h3><img src="assets/img/terms-icon.svg" alt="" /> Terms & Conditions</h3>
					<label for="authorizationTerms" class="checkboxLabel">
						<input type="checkbox" name="authorizationTerms" id="authorizationTerms">
						In accordance with Public Utility guidelines, I give permission to my utility to provide access to my usage information as outlined in the Letter of Authorization.
					</label>
				</div>
				 
				<button type="button" id="gotoStep5" class="btn-continue" disabled>Continue</button>
			</div>

			<!---->
			<div id="step5" class="animateForm ">
			    <div class="progressBar"><span style="width: 100%"></span></div>
			    <h3>Step 5: Natural Gas</h3>
			    <p>Would you like natural gas pricing as well?</p>
			    <div class="form-group">
			        <label for="yes" class="radioBg">
			            <input type="radio" id="yes" name="response" value="Yes" checked />Yes
			        </label>
			        <label for="no" class="radioBg">
			            <input type="radio" id="no" name="response" value="No" />No
			        </label>
			        <button type="button" id="lastStep" class="btn-continue">Continue</button>
			    </div>
			</div>

			<!---->
			<div id="lastStepSection" class="animateForm">
			    <h3>Last Step: Submit Request</h3>
			    <p>Please confirm that your information is correct before submitting. Your results will arrive within 2-3 business days.</p>
			    <div class="form-group termsClass">
					<h3><img src="assets/img/calender-icon.svg" alt="" /> <span>Your Requested Start <small>April 01,2025</small></span></h3>
				</div>

				<div class="form-group termsClass">
					<textarea>Your Information</textarea>
				</div>
				

				<div class="form-group termsClass">
					<h3><img src="assets/img/terms-icon.svg" alt="" /> Terms & Conditions</h3>
					<label for="lastTerms" class="checkboxLabel">
						<input type="checkbox" name="lastTerms" id="lastTerms">
						I agree to provide Blitz Ventures with authority to quote my business as shown in this Customer Representation Agreement. Blitz Ventures can proceed without this agreement, but this may limit its its ability to get quotes from some suppliers. I understand that I can cancel this agreement at any time.
					</label>
				</div>
				 
				<button type="button" id="gotoFinalStep" class="btn-continue" disabled>Continue</button>
			</div>
		</div>
			

		</div>
<div class="posi-rel">
		<div id="finalConfirm" class="FinalStep animateForm">
			<img src="assets/img/tick-green-icon.svg" alt="" />
			    <h3>Request confirmed.</h3>
			    <h4>Your quote request is being processed!</h4>
			    <div class="quoteId"><strong>Your Quote Id is:</strong> EB-Q-9DNW9L</div>
			    <p>After 2-3 business days, your personal energy expert will review the offers you receive and recommend the best plan for your business.</p>
				 
				<a href="#" id="gotoHome" class="btn-done">Done</a>
			</div>
		</div>



<!-- Services Modal -->
<div class="modal fade" id="servicePopupModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
    	<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      <div class="serviceHead">Service Location</div>
      <h3>Are you done adding service locations?</h3>
      <button type="button" id="gotoContinueStep2" class="btn-continue" disabled>Continue</button>
      <a href="#">Add another location</a>
    </div>
  </div>
</div>




<?php get_footer(); ?>


	<script type="text/javascript">
		// Enable or disable the continue button based on the input value
document.getElementById('zip-code').addEventListener('input', function() {
  const zipCodeInput = document.getElementById('zip-code');
  const continueButton = document.getElementById('continue-button');

  // Enable or disable the button based on the input value
  if (zipCodeInput.value.trim() !== "") {
    continueButton.disabled = false;
  } else {
    continueButton.disabled = true;
  }
});





// Enable or disable the continue button based on the input value
document.getElementById('business-name').addEventListener('input', function() {
  const businessNameInput = document.getElementById('business-name');
  const gotoStep2Button2 = document.getElementById('gotoStep2');

  // Enable or disable the button based on the input value
  if (businessNameInput.value.trim() !== "") {
    gotoStep2Button2.disabled = false;
  } else {
    gotoStep2Button2.disabled = true;
  }
});


// Enable or disable the continue button based on the input value
document.getElementById('service-location').addEventListener('input', function() {
  const serviceLocationInput = document.getElementById('service-location');
  const gotoContinueStep2Button = document.getElementById('gotoContinueStep2');

  // Enable or disable the button based on the input value
  if (serviceLocationInput.value.trim() !== "") {
    gotoContinueStep2Button.disabled = false;
  } else {
    gotoContinueStep2Button.disabled = true;
  }
});



// Get the checkbox and the button
    const checkBoxInput = document.getElementById('authorizationTerms');
    const gotoStep5Button = document.getElementById('gotoStep5');

    // Add event listener to checkbox to enable/disable the button
    checkBoxInput.addEventListener('change', function() {
        if (checkBoxInput.checked) {
            // Enable the button if the checkbox is checked
            gotoStep5Button.disabled = false;
        } else {
            // Disable the button if the checkbox is not checked
            gotoStep5Button.disabled = true;
        }
    });

    // Initial check to disable the button if the checkbox is unchecked on page load
    if (!checkBoxInput.checked) {
        gotoStep5Button.disabled = true;
    }

    // Get the checkbox and the button
    const checkBoxInput2 = document.getElementById('lastTerms');
    const gotoFinalStepButton = document.getElementById('gotoFinalStep');

    // Add event listener to checkbox to enable/disable the button
    checkBoxInput2.addEventListener('change', function() {
        if (checkBoxInput2.checked) {
            // Enable the button if the checkbox is checked
            gotoFinalStepButton.disabled = false;
        } else {
            // Disable the button if the checkbox is not checked
            gotoFinalStepButton.disabled = true;
        }
    });

    // Initial check to disable the button if the checkbox is unchecked on page load
    if (!checkBoxInput2.checked) {
        gotoFinalStepButton.disabled = true;
    }



 // Get the elements
    const billSelect = document.getElementById('bill-select');
    const continueButton = document.getElementById('continue-button1');
    
    // Add event listener to enable button when an option is selected
    billSelect.addEventListener('change', function() {
        if (billSelect.value !== "Select Bill Amount") {
            continueButton.disabled = false;  // Enable the button
        } else {
            continueButton.disabled = true;  // Keep the button disabled if no selection
        }
    });


 // Get elements
const uploadArea = document.getElementById('upload-area');
const fileInput = document.getElementById('file-input');
const fileNameDiv = document.getElementById('file-name');
const gotoStep2Button = document.getElementById('gotoStep2');

// Show file name when a file is selected
fileInput.addEventListener('change', function(event) {
    const file = event.target.files[0];
    if (file) {
        fileNameDiv.textContent = `${file.name}`;
        fileNameDiv.style.display = 'block'; // Show the file name div
        gotoStep2Button.disabled = false; // Enable the continue button
    }
});

// Allow user to click on the upload area to select a file
uploadArea.addEventListener('click', function() {
    fileInput.click();
});

// Drag and drop events
uploadArea.addEventListener('dragover', function(event) {
    event.preventDefault();
    uploadArea.classList.add('dragging');
});

uploadArea.addEventListener('dragleave', function() {
    uploadArea.classList.remove('dragging');
});

uploadArea.addEventListener('drop', function(event) {
    event.preventDefault();
    uploadArea.classList.remove('dragging');
    const file = event.dataTransfer.files[0];
    if (file) {
        fileNameDiv.textContent = `${file.name}`;
        fileNameDiv.style.display = 'block'; // Show the file name div
        gotoStep2Button.disabled = false; // Enable the continue button
    }
});

/************/


// Get the radio buttons and date input
const asSoonAsRadio = document.getElementById('asSoonAs');
const startDateRadio = document.getElementById('start-date');
const dateInput = document.getElementById('date');

// Initially, disable the date input since "As Soon As Possible" is checked by default
dateInput.disabled = true;

// Add event listeners for when either radio button is changed
asSoonAsRadio.addEventListener('change', function() {
    if (this.checked) {
        dateInput.disabled = true; // Disable date input if "As Soon As Possible" is selected
    }
});

startDateRadio.addEventListener('change', function() {
    if (this.checked) {
        dateInput.disabled = false; // Enable date input if "Choose Start Date" is selected
    }
});

//////////////////////////////////////
//GO TO NEXT SECTION
/////////////////////////////////////

// Function to hide a section with fade-out
function fadeOut(element) {
  element.classList.add('hide');
  setTimeout(() => {
    element.style.display = 'none'; // Make sure it is hidden after transition
  }, 500); // Matches the transition time
}

// Function to show a section with fade-in
function fadeIn(element) {
  element.style.display = 'block'; // Ensure it’s visible
  setTimeout(() => {
    element.classList.add('show');
  }, 10); // Allow slight delay for class to be added
}

// Handle the click event on the continue button
document.getElementById('continue-button').addEventListener('click', function() {
  // Remove the "disabled" attribute from the button
  this.disabled = false;

  // Get the sections
  const zipCodeSection = document.getElementById('zipCode-Section');
  const billSection = document.getElementById('bill-section');

  // Hide the zipCode section with fadeOut and show the bill section with fadeIn
  fadeOut(zipCodeSection);
  fadeIn(billSection);
});

// Handle transitions for other steps in the same manner
document.getElementById('goToChoose').addEventListener('click', function() {
  // Remove the "disabled" attribute from the button
  this.disabled = false;

  const billSection = document.getElementById('bill-section');
  const chooseSection = document.getElementById('choose-section');

  fadeOut(billSection);
  fadeIn(chooseSection);
});

document.getElementById('gotoUploadBill').addEventListener('click', function(event) {
    event.preventDefault();
    const chooseSection = document.getElementById('choose-section');
    const uploadStep1 = document.getElementById('uploadStep1');

    fadeOut(chooseSection);
    fadeIn(uploadStep1);
});


document.getElementById('gotoServiceBill').addEventListener('click', function(event) {
    event.preventDefault();
    const chooseSection = document.getElementById('choose-section');
    const servicesStep1 = document.getElementById('servicesStep1');

    fadeOut(chooseSection);
    fadeIn(servicesStep1);
});


// Repeat the same for other steps...
document.getElementById('gotoStep2').addEventListener('click', function() {
  this.disabled = false;
  const uploadStep1 = document.getElementById('uploadStep1');
  const step2 = document.getElementById('step2');

  fadeOut(uploadStep1);
  fadeIn(step2);
});

document.getElementById('gotoContinueStep2').addEventListener('click', function() {
  this.disabled = false;
  const uploadStep1 = document.getElementById('servicesStep1');
  const step2 = document.getElementById('step2');

  fadeOut(uploadStep1);
  fadeIn(step2);
});

document.getElementById('gotoStep3').addEventListener('click', function() {
  this.disabled = false;
  const step2 = document.getElementById('step2');
  const step3 = document.getElementById('step3');

  fadeOut(step2);
  fadeIn(step3);
});

document.getElementById('gotoStep4').addEventListener('click', function() {
  this.disabled = false;
  const step3 = document.getElementById('step3');
  const step4 = document.getElementById('step4');

  fadeOut(step3);
  fadeIn(step4);
});

document.getElementById('gotoStep5').addEventListener('click', function() {
  this.disabled = false;
  const step4 = document.getElementById('step4');
  const step5 = document.getElementById('step5');

  fadeOut(step4);
  fadeIn(step5);
});

document.getElementById('lastStep').addEventListener('click', function() {
  this.disabled = false;
  const step5 = document.getElementById('step5');
  const lastStepSection = document.getElementById('lastStepSection');

  fadeOut(step5);
  fadeIn(lastStepSection);
});

document.getElementById('gotoFinalStep').addEventListener('click', function() {
  this.disabled = false;
  const getStartedForm = document.getElementById('getStartedForm');
  const finalConfirm = document.getElementById('finalConfirm');

  fadeOut(getStartedForm);
  fadeIn(finalConfirm);
});


	</script>