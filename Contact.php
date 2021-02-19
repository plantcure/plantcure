<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="Contact.css">
 
    <title>Contact Us</title>
  </head>
  <body>
    <div class="main">
      <div class="container-card">
        <div class="aligned">
          <h1 style="text-align: left;">Contact Us</h1><br>
          <form method="post" name="ContactForm" onsubmit="return ValidateContactForm();">
            <label for="First Name" class="nm">First Name:</label><br><br>

            <input type="text" name="First Name" value="" class="in"><br><br>

            <label for="Last Name" class="nm">Last Name:</label><br><br>

            <input type="text" name="Last Name" value="" class="in"><br><br>

            <label for="Email" class="nm">E-mail ID:</label><br><br>

            <input type="email" name="Email" value="" class="in"><br><br>

            <label for="Query" class="nm">Query:</label><br><br>

            <textarea name="Query" rows="5" cols="50" class="in"></textarea><br><br><br>

            <button type="button" name="button" class="submit custom-btn btn">Submit</button><br><br><br>

            <h4>Please take out your valuable time to provide us a feedback.</h4><br><br>

            <label for="Feedback" class="nm">Feedback:</label><br><br>

            <textarea name="Feedback" rows="5" cols="50" class="in"></textarea><br><br><br>

            <button type="button" name="button" class="submit custom-btn btn">Submit</button><br>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>