<?php

// function loadPartial ($name) {
//   require "../partials/form-partials/textInput.php";
// }

// Could use this also for re-usable component
function renderInput($label = "Input Label", $name = "", $id = "")
{
  echo `
    <div>
  <label for="$id" class="text-darkGrey text-base">
    $label
  </label>
  <input
    id="$id"
    name="$name">
    type="text" class="w-full mt-2 rounded-lg px-6 py-3 border border-grey outline-none">
</div>`;
}
