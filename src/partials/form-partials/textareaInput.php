<?php
$isError = isset($errorsList[$name])
?>

<div class="w-full smTablet:col-start-1 smTablet:col-end-3">
  <div class="w-full flex flex-col justify-start items-start gap-3">
    <label for="<?= $id ?>">
      <?= "{$label} *" ?>
    </label>
    <textarea class="w-full min-h-60 resize-none rounded-lg px-6 py-3 border outline-none smTablet:min-h-32 lgTablet:min-h-28 hover:border-brightGreen focus:border-brightGreen        
      <?= $isError ? "border-red" : "border-grey" ?>" name="<?= $name ?>" id="<?= $id ?> "><?= isset($_POST[$name]) ? trim(htmlentities($_POST[$name])) : "" ?></textarea>
  </div>
  <?php if (isset($errorsList[$name])): ?>
    <div class="w-full mt-2 col-start-1 col-end-[-1]">
      <p class="text-sm text-red"><?= $errorsList[$name] ?></p>
    </div>
  <?php endif; ?>
</div>