<?php 
include("functions/functions.php");
include("partials/header.php");

$arrImages = getData("SELECT * FROM photos");
$arrPackageImages = getData("SELECT * FROM packages");
$arrHeroImage = getData("SELECT * FROM hero");
?>


<div class="holder">
 <h1 class="formtitle">ANY ENQUIRIES</h1>   
<div class="container">
  <form action="save.php" onsubmit="return">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="strFirstName" placeholder="Your name.." required>

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="strLastName" placeholder="Your last name.." required>

    <label for="lname">Email</label>
    <input type="Email" id="lname" name="strEmail" placeholder="Email Address" required>
    
    <label for="subject">Subject</label>
    <textarea id="subject" name="nMessage" placeholder="Write something.." style="height:200px"></textarea required>

    <input type="submit" value="submit" class="submit">
  </form>

  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2602.667270612457!2d-123.11754638413201!3d49.28270167868997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5486717893865d35%3A0xa8d10bdb2ca1c083!2sVancouver+Institute+of+Media+Arts+(VanArts)!5e0!3m2!1sen!2sca!4v1547437833459" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

</div>
</div>
  <script src="js/script.js"></script>
  <script>
    const $form = document.getElementById('form');
    const $error = document.getElementById('error');
    $form.addEventListener('change', update);
    $form.addEventListener('input', update);

    function update(e) {
    const type = e.target.type;
    const validity = e.target.validity;


    const $password = $form.elements['_password'];
    const $passwordConfirm = $form.elements['_passwordConfirm'];


    $passwordConfirm.setCustomValidity('');
    if ($password.value !== $passwordConfirm.value) {

    $passwordConfirm.setCustomValidity('Passwords do not match');
    }

    $error.innerHTML = $passwordConfirm.validationMessage;
    }
    </script>

<?php
include("partials/footer.php")
?>