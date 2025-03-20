<form class="w-full mt-8 grid gap-6 smTablet:grid-cols-twoCols smTablet:gap-x-4">

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
  $inputId = "email-name";
  $inputName = "email-name";
  $label = "Email Name";
  $isTwoCols = true;
  include __DIR__ . "/form-partials/textInput.php";
  ?>

  <fieldset class="smTablet:col-start-1 smTablet:col-end-3">

    <legend for="query-type">
      Query Type *
    </legend>

    <div class="w-full mt-2 flex flex-col gap-4 smTablet:flex-row">
      <div class="relative w-full flex flex-row-reverse justify-end items-center gap-3 rounded-lg px-6 py-3 border-2 border-grey outline-none hover:border-brightGreen focus-within:border-brightGreen has-[input:checked]:border-brightGreen">
        <input type="radio" name="query-type" id="query-enquiry" class="peer opacity-0 absolute w-full h-full top-0 left-0 z-30">
        <label for="query-enquiry" class="relative z-20">
          General Enquiry
        </label>
        <div class="relative z-20 w-4 h-4 rounded-full border-2 border-brightGreen peer-checked:after:rounded-full peer-checked:after:bg-brightGreen peer-checked:after:w-2 peer-checked:after:h-2 peer-checked:after:absolute peer-checked:after:top-1/2 peer-checked:after:left-1/2 peer-checked:after:-translate-x-1/2 peer-checked:after:-translate-y-1/2"></div>
        <div class="hidden peer-checked:block absolute top-0 left-0 w-full h-full bg-brightGreen/20 z-10"></div>
      </div>

      <div class="relative w-full flex flex-row-reverse justify-end items-center gap-3 rounded-lg px-6 py-3 border-2 border-grey outline-none hover:border-brightGreen focus-within:border-brightGreen has-[input:checked]:border-brightGreen">
        <label for="query-request" class="relative z-20">
          Support Request
        </label>
        <input type="radio" name="query-type" id="query-request" class="peer opacity-0 absolute w-full h-full top-0 left-0 z-30">
        <div class="relative z-20 w-4 h-4 rounded-full border-2 border-brightGreen peer-checked:after:rounded-full peer-checked:after:bg-brightGreen peer-checked:after:w-2 peer-checked:after:h-2 peer-checked:after:absolute peer-checked:after:top-1/2 peer-checked:after:left-1/2 peer-checked:after:-translate-x-1/2 peer-checked:after:-translate-y-1/2"></div>
        <div class="hidden peer-checked:block absolute top-0 left-0 w-full h-full bg-brightGreen/20 z-10"></div>
      </div>
    </div>

  </fieldset>

  <div class="w-full flex flex-col justify-start items-start gap-3 smTablet:col-start-1 smTablet:col-end-3">
    <label for="message">
      Message *
    </label>
    <textarea class="w-full min-h-60 resize-none rounded-lg px-6 py-3 border-2 border-grey outline-none smTablet:min-h-32 lgTablet:min-h-28 hover:border-brightGreen focus:border-brightGreen" name="message" id="message">

    </textarea>
  </div>

  <div class="w-full flex flex-row-reverse justify-end items-center gap-5 smTablet:col-start-1 smTablet:col-end-3">
    <label for="contact-consent" class="text-base font-normal">
      I consent to being contacted by the team *
    </label>
    <input type="checkbox" name="contact-consent" id="contact-consent" class="border-2 accent-brightGreen border-grey w-5 h-5 ">
  </div>

  <button type="submit" class="p-4 rounded-lg bg-brightGreen text-center hover:bg-brightGreen/50 text-white font-bold active:bg-brightGreen smTablet:col-start-1 smTablet:col-end-3">Submit</button>

</form>