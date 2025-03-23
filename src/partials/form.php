<?php

$errorsList = [];

function isValidEmail($email)
{
  $pattern = '/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/';
  return preg_match($pattern, $email) === 1;
}

function checkInput($input)
{
  $input = trim($input);
  $input = stripslashes($input);
  $input = htmlspecialchars($input);
  return $input;
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {

  $inputs = [
    "first-name" => trim($_POST["first-name"]),
    "last-name" =>  trim($_POST["last-name"]),
    "email" => trim($_POST["email"]),
    "query-type" => $_POST["query-type"] ?? null,
    "message" => trim($_POST["message"]),
    "contact-consent" => $_POST["contact-consent"] ?? null,
  ];

  foreach ($inputs as $key => $value) {
    if (empty($value)) {
      $errorsList[$key] = "This field is required";
    }
    if ($key === "query-type" && !$value){
      $errorsList["query-type"] = "Please select a query type";
    }
    if ($key === "email" && !isValidEmail($value)) {
      $errorsList["email"] = "Please enter a valid email address";
    }
    if ($key === "contact-consent" && !$value){
      $errorsList["contact-consent"] = "To submit this form, please consent to being contacted";
    }
  }

  // echo "<pre>";
  // var_dump($errorsList);
  // echo "</pre>";
}

?>

<form method="POST" class="w-full mt-8 grid gap-6 smTablet:grid-cols-twoCols smTablet:gap-x-4">

  <?php
  $inputId = "first-name";
  $inputName = "first-name";
  $label = "First Name";
  $isTwoCols = false;
  include __DIR__ . "/form-partials/textInput.php";
  ?>

  <?php
  $inputId = "last-name";
  $inputName = "last-name";
  $label = "Last Name";
  $isTwoCols = false;
  include __DIR__ . "/form-partials/textInput.php";
  ?>

  <?php
  $inputId = "email";
  $inputName = "email";
  $label = "Email Name";
  $isTwoCols = true;
  include __DIR__ . "/form-partials/textInput.php";
  ?>

  <fieldset class="smTablet:col-start-1 smTablet:col-end-3">

    <legend for="query-type">
      Query Type *
    </legend>

    <div class="w-full mt-2 flex flex-col gap-4 smTablet:flex-row">
      <?php
      $name = "query-type";
      $label = "General Enquiry";
      $id = "query-enquiry";
      $value = "general-enquiry";
      include __DIR__ . "/form-partials/radioInput.php";
      ?>
      <?php
      $name = "query-type";
      $label = "Support Request";
      $id = "query-request";
      $value = "support-request";
      include __DIR__ . "/form-partials/radioInput.php";
      ?>
    </div>

  </fieldset>

  <?php
  $name = "message";
  $label = "Message";
  $id = "message";
  include __DIR__ . "/form-partials/textareaInput.php";
  ?>

  <?php
  $name = "contact-consent";
  $label = "I consent to being contacted by the team";
  $id = "contact-consent";
  include __DIR__ . "/form-partials/checkboxInput.php";
  ?>

  <button type="submit" class="p-4 rounded-lg bg-brightGreen text-center hover:bg-darkGrey text-white font-semibold text-lg active:bg-darkGrey smTablet:col-start-1 smTablet:col-end-3">Submit</button>

</form>