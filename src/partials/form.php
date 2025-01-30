<form class="w-full mt-8 grid gap-6">

  <?php
  $inputId = "first-name";
  $inputName = "first-name";
  $label = "First Name";
  include __DIR__ . "/form-partials/textInput.php";
  ?>

  <?php
  $inputId = "last-name";
  $inputName = "last-name";
  $label = "Last Name";
  include __DIR__ . "/form-partials/textInput.php";
  ?>

  <?php
  $inputId = "email-name";
  $inputName = "email-name";
  $label = "Email Name";
  include __DIR__ . "/form-partials/textInput.php";
  ?>

  <div>

    <label for="query-type">
      Query Type*
    </label>

    <div class="w-full flex flex-row-reverse justify-end items-center gap-3 mt-2 rounded-lg px-6 py-3 border border-grey outline-none">
      <label for="query-enquiry">
        General Enquiry
      </label>
      <input type="radio" name="query" id="query-enquiry">
    </div>

    <div class="w-full flex flex-row-reverse justify-end items-center gap-3 mt-2 rounded-lg px-6 py-3 border border-grey outline-none">
      <label for="query-request">
        Support Request
      </label>
      <input type="radio" name="query" id="query-request">
    </div>

  </div>

</form>