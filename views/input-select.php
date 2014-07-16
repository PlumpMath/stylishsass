<div class="input-select-<?=$size?>">
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
    var timeoutID = null;

    $("body").on("click", function (event)
    {
      $(".input-select-small, .input-select-medium").each(function (index)
      {
        $(this).removeClass("active");
      });

      if ($(event.target).parents(".input-select-medium, .input-select-small").length) {
        $(event.target).parents(".input-select-medium, .input-select-small").each(function (index)
        {
          $(this).toggleClass("active");
        });
      }

      return false;
    });
    /*
    $.each($(".input-select-small, .input-select-medium"), function (index, value) {
      value.on("click", function (e) {
        if ($(e.target).hasClass("input-select-item-option")) {
          $(".input-select-item-placeholder").html($(e.target).html());
        }
        $(this).toggleClass("active")
      });
    });
    */
  })();
</script>

