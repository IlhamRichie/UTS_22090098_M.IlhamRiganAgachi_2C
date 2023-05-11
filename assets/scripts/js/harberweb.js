$(document).ready(function () {
    $("#btnsearch").click(function (e) {
      $("#infoinvaccr").html("wait for access request ngga");
      $.ajax({
        type: "POST",
        url: "./assets/scripts/ajax/getcurl.php",
        data: "",
        success: function (response) {
          $("#infoinvaccr").html(response);
        },
      });
    });
  });
  