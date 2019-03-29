<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <title>Contact Form</title>
  
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700|Staatliches" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
</head>
<style>
  .--valid {
    border: 1.5px solid green;
  }
  .--invalid {
    border: 1.5px solid red;
  }
  .--error {
    display: none;
  }
  .--error-show {
    color: red;
  }
</style>
<body>

  <form action="" class="form">
    <label for="name" class="form__label">Name</label>
    <input type="text" name="name" class="form__text form__text--tx" placeholder="Your Name">
    <span class="--error">Please enter your name.</span>

    <label for="email" class="form__label">Email Address</label>
    <input type="email" name="email" class="form__text form__text--em" placeholder="Your Email Address">
    <span class="--error">Please enter a valid email address.</span>

    <label for="title" class="form__label">Heading</label>
    <input type="text" name="title" class="form__text form__text--tx" placeholder="Message Heading">
    <span class="--error">Please enter a short heading.</span>

    <label for="content" class="form__label">Message</label>
    <textarea name="content" class="form__text form__text--ta" placeholder="Your Message"></textarea>
    <span class="--error">Please enter a message.</span>

    <button type="submit" class="form__submit">Send</button>
  </form>
  <script src="js/validation.js"></script>
</body>
</html>