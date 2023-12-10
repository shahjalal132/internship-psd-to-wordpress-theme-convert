(function ($) {
  $(document).ready(function () {
    // Dynamic Add new service
    // $("#add_new_service").click(function () {
    // //   // Clone the last service input fields and append them to the container
    // //   var newService = $(".service-field").clone();
    // //   newService.find("input").val(""); // clear the input fields
    // //   $(".service-field").after(newService);
    //   console.log("button clicked");
    // });
  });
})(jQuery);

let button = document.querySelector("#add_new_service");
button.addEventListener("clidk", (e) => {
  console.log("button clicked");
});
