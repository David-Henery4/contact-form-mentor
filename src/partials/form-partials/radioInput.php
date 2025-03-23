

<div class="relative w-full flex flex-row-reverse justify-end items-center gap-3 rounded-lg px-6 py-3 border border-grey outline-none hover:border-brightGreen focus-within:border-brightGreen has-[input:checked]:border-brightGreen">

  <input type="radio" name="<?= $name ?>" id="<?= $id ?>" class="peer opacity-0 absolute w-full h-full top-0 left-0 z-30">

  <label for="<?= $id ?>" class="relative z-20">
    <?= $label ?> 
  </label>

  <div class="relative z-20 w-4 h-4 rounded-full border border-brightGreen peer-checked:after:rounded-full peer-checked:after:bg-brightGreen peer-checked:after:w-2 peer-checked:after:h-2 peer-checked:after:absolute peer-checked:after:top-1/2 peer-checked:after:left-1/2 peer-checked:after:-translate-x-1/2 peer-checked:after:-translate-y-1/2"></div>
  <div class="hidden peer-checked:block absolute top-0 left-0 w-full h-full bg-brightGreen/20 z-10"></div>

</div>