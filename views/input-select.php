<div class="input-select-medium">
  <span class="input-select-item-placeholder">Select a Country</span>
  <div class="input-select-options">
    <ul>
      <li class="input-select-item-option invisible">Select a Country</li>
      <li class="input-select-item-option">France</li>
      <li class="input-select-item-option">Argentina</li>
      <li class="input-select-item-option">Brazil</li>
      <li class="input-select-item-option">South Africa</li>
    </ul>
  </div>
  <select class="hidden">
    <option value disabled>Select a Country</option>
    <option value="france">France</option>
    <option value="argentina">Argentina</option>
    <option value="brazil">Brazil</option>
    <option value="south-africa">South Africa</option>
  </select>
</div>
<script>
  (function () {
    $(".input-select-medium").on("click", function (e) {
      if ($(e.target).hasClass("input-select-item-option")) {
        $(".input-select-item-placeholder").html($(e.target).html());
      }
      $(".input-select-medium").toggleClass("active")
    });
  })();
</script>

