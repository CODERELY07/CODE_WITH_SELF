$(document).ready(function () {
  function loadList() {
    $.ajax({
      url: "load-list.php",
      method: "POST",
      success: function (response) {
        $("#list").html(response);
      },
    });
  }
  loadList();

  $("#add").on("click", function (e) {
    e.preventDefault();

    var list = $("#addList").val();

    if (list == "") {
      Swal.fire({
        title: "No Input",
        text: "Enter your List",
        icon: "error",
      });
    } else {
      $.ajax({
        url: "add-list.php",
        method: "post",
        data: { list: list },
        success: function (data) {
          loadList();
          if (data == 1) {
            Swal.fire({
              title: "Adding List Success",
              text: "New todolist Addedd",
              icon: "success",
            });
          } else {
            Swal.fire({
              title: "Adding List Error",
              text: data,
              icon: "error",
            });
          }
        },
      });
    }
  });

  $(document).on("click", "#delete", function (e) {
    e.preventDefault();
    var id = $(this).val();
    $.ajax({
      url: "delete-list.php",
      method: "post",
      data: { id: id },
      success: function (data) {
        if (data == 1) {
          Swal.fire({
            title: "Delete List",
            text: "List Deleted successfully",
            icon: "success",
          });
          loadList();
        } else {
          Swal.fire({
            title: "Delete List",
            text: data,
            icon: "error",
          });
        }
      },
    });
  });

  $(document).on("click", "#edit", function (e) {
    e.preventDefault();
    var element = this;

    $("#save-edit").on("click", function () {
      var list = $("#newlist").val();
      var id = $(element).val();
      $("#myModal").modal("hide");
      $.ajax({
        url: "edit-list.php",
        method: "post",
        data: { id: id, list: list },
        success: function (data) {
          if (data == 1) {
            Swal.fire({
              title: "Edit List",
              text: "List Edit successfully",
              icon: "success",
            });
            loadList();
          } else {
            Swal.fire({
              title: "Edit List",
              text: data,
              icon: "error",
            });
          }
        },
      });
    });
  });

  $(document).on("click", ".pointer", function () {
    $(this).toggleClass("line-through");
  });
});
