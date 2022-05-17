$(document).ready(function () {
  const usernasme = $("#username").value;
  console.log("Ussername: ", usernasme);
  const DOMAIN = "http://localhost:8888/Ngoku/public_html/";
  $("#register_form").on("submit", function (e) {
    let status = false;
    const username = $("#fullname");
    const email = $("#email");
    const pass1 = $("#password1");
    const pass2 = $("#password2");
    const type = $("#usertype");
    // var n_patt = new RegExp(/^[A-Za-z]$/);
    const e_patt = new RegExp(
      /^[a-z0-9_-]+(\.[a-z0-9_-]+)*@[a-z0-9_-]+(\.[a-z0-9_-]+)*(\.[a-z]{2,3})$/
    );

    if (username.val().length < 6) {
      username.addClass("border-danger");
      // username.next().text("Username must be at least 6 characters");
      $("#u_error").html(
        "<span class='text-danger'>Username must be at least 6 characters</span>"
      );
      status = false;
    } else {
      username.removeClass("border-danger");
      $("#u_error").html("");
      status = true;
    }
    if (!e_patt.test(email.val())) {
      email.addClass("border-danger");
      // email.next().text("Email is invalid");
      $("#e_error").html("<span class='text-danger'>Email is invalid</span>");
      status = false;
    } else {
      email.removeClass("border-danger");
      $("e_error").html("");
      status = true;
    }
    if (pass1.val() == "" || pass1.val().length < 6) {
      pass1.addClass("border-danger");
      // pass1.next().text("Password must be at least 6 characters");
      $("#p1_error").html(
        "<span class='text-danger'>Password must be at least 6 characters</span>"
      );
      status = false;
    } else {
      pass1.removeClass("border-danger");
      $("#p1_error").html("");
      status = true;
    }
    if (pass2.val() == "" || pass2.val().length < 6) {
      pass2.addClass("border-danger");
      // pass2.next().text("Password must be at least 6 characters");
      $("#p2_error").html(
        "<span class='text-danger'>Password must be at least 6 characters</span>"
      );
      status = false;
    } else {
      pass2.removeClass("border-danger");
      $("#p2_error").html("");
      status = true;
    }
    if (pass1.val() != pass2.val()) {
      console.log("Pass1: " + pass1 + "Pass2: " + pass2);
      pass2.addClass("border-danger");
      // pass2.next().text("Password does not match");
      $("#p2_error").html(
        "<span class='text-danger'>Password does not match</span>"
      );
      status = false;
    } else {
      pass2.removeClass("border-danger");
      $("#p2_error").html("");
      status = true;
    }
    if (type.val() == "") {
      type.addClass("border-danger");
      // type.next().text("Please select user type");
      $("#t_error").html(
        "<span class='text-danger'>Please select user type</span>"
      );
      status = false;
    } else {
      type.removeClass("border-danger");
      $("#t_error").html("");
      status = true;
    }
    if (status == true) {
      console.log("form submitted");
      $.ajax({
        url: DOMAIN + "includes/process.php",
        method: "POST",
        data: $("#register_form").serialize(),
        success: function (data) {
          console.log(data);
          if (data == "EMAIL_ALREADY_EXISTS") {
            alert("It seems that you have already registered with this email");
          } else if (data == "SOME_ERROR") {
            alert("Something went wrong");
          } else {
            alert("Registration successful");
            window.location.href = encodeURI(
              DOMAIN +
                "login.php?msg=You are registered successfully. Please login to continue"
            );
          }
        },
      });
    }
  });

  // For Login Form
  $("#login_form").on("submit", function (e) {
    const email = $("#log_email");
    const password = $("log_password");
    const DOMAIN = "http://localhost:8888/Ngoku/public_html/";
    let status = false;
    if (email.val() == "") {
      email.addClass("border-danger");
      // email.next().text("Email is required");
      $("#log_e_error").html(
        "<span class='text-danger'>Email is required</span>"
      );
      status = false;
    } else {
      email.removeClass("border-danger");
      $("#log_e_error").html("");
      status = true;
    }
    if (password.val() == "") {
      password.addClass("border-danger");
      // password.next().text("Password is required");
      $("#log_p_error").html(
        "<span class='text-danger'>Password is required</span>"
      );
      status = false;
    } else {
      password.removeClass("border-danger");
      $("#log_p_error").html("");
      status = true;
    }
    if (status == true) {
      console.log("form submitted");
      // console.log($("#login_form").serialize())
      $.ajax({
        url: DOMAIN + "includes/process.php",
        method: "POST",
        data: $("#login_form").serialize(),
        success: function (data) {
          console.log(data);
          if (data == "NOT_REGISTERED") {
            alert(
              "It seems that you are not registered with this email. Feel free to register"
            );
          } else if (data.includes("PASSWORD_NOT_MATCHED")) {
            password.addClass("border-danger");
            // password.next().text("Password is incorrect");
            $("#p_error").html(
              "<span class='text-danger'>Password is incorrect</span>"
            );
            status = false;
          } else if (data == "SOME_ERROR") {
            alert("Something went wrong");
          } else if (data.includes("LOGIN_SUCCESS") && !data.includes("PASSWORD_NOT_MATCHED")) {
            // console.log("data: " + data);
            window.location.href = encodeURI(DOMAIN + "dashboard.php");
          }
        },
      });
    }
  });



  // Fetch Category Form
  // $("#form_category").on("submit", function (e) {
    fetchCategory();
  function fetchCategory() {
    $.ajax({
      url: DOMAIN + "includes/process.php",
      method: "POST",
      data: {getCategory: 1},
      success: function(data) {
        let root = "<option value={0}>Root</option>";
        $("#parent_cat").html(root + data);
      }
    });
  }
  
  // });
});
