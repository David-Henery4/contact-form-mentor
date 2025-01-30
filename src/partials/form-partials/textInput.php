

<div>
  <label for=<?= $inputId ?? "input-id"; ?> class="text-darkGrey text-base">
    <?= $label ?? "Input Label"; ?>
  </label>
  <input
    id=<?= $inputId ?? "input-id"; ?>
    name=<?= $inputName ?? "input-name"; ?>
    type="text" class="w-full mt-2 rounded-lg px-6 py-3 border border-grey outline-none">
</div>