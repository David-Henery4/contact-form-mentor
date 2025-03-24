<div class="w-full smTablet:col-start-1 smTablet:col-end-3">
  <div class="w-full flex flex-row-reverse justify-end items-center gap-5">
    <label for="<?= $id ?>" class="text-base font-normal">
      <?= "{$label}" ?> *
    </label>
    <input type="checkbox" name="<?= $name ?>" id="<?= $id ?>" class="border accent-brightGreen border-grey w-5 h-5 " <?= isset($_POST[$name]) ? "checked" : "" ?>>
  </div>
  <?php if (isset($errorsList[$name])): ?>
    <div class="w-full mt-2 col-start-1 col-end-[-1]">
      <p class="text-sm text-red"><?= $errorsList[$name] ?></p>
    </div>
  <?php endif; ?>
</div>