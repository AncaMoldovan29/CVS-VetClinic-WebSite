// FormValidation

function handleform(event) {
  let name = document.getElementById("signUpUserName").value;
  let parola1 = document.getElementById("signUpPass1").value;
  let parola2 = document.getElementById("signUpPass2").value;
  let email = document.getElementById("signUpUserEmail");

  if (name.length <= 3) {
    alert("you MUST have at least 3 characters");
    event.preventDefault();
    return;
  }
  if (parola1.search(/[0-9]/) < 0) {
    alert("Your password must contain at least one digit.");
    event.preventDefault();
    return;
  }
  if (parola1 != parola2) {
    alert("Pass doesn't match");
    event.preventDefault();
    return;
  }

  if (!email.endsWith(".com")) {
    alert("Your email must end with .com");
    event.preventDefault();
    return;
  }
}
function handle_form(event) {
  let name = document.getElementById("editUserName").value;
  let parola1 = document.getElementById("editPass1").value;
  let parola2 = document.getElementById("editPass2").value;
  let email = document.getElementById("editUserEmail");

  if (name.length <= 3 || name == "admin") {
    alert("You MUST have at least 3 characters or this name is reserved");
    event.preventDefault();
    return;
  }
  if (parola1.search(/[0-9]/) < 0) {
    alert("Your password must contain at least one digit.");
    event.preventDefault();
    return;
  }
  if (parola1 != parola2) {
    alert("Pass doesn't match");
    event.preventDefault();
    return;
  }

  if (!email.endsWith(".com")) {
    alert("Your email must end with .com");
    event.preventDefault();
    return;
  }
}

// Notification

const checkbox = document.querySelector("#contact");
const container = document.getElementById("notif");
if (checkbox) {
  checkbox.addEventListener("change", function (e) {
    if (checkbox.checked) {
      createNotification();
    } else {
      console.log("Checkbox is not checked..");
    }
  });
}
function createNotification() {
  const notification = document.createElement("div");
  notification.classList.add("msg");
  notification.innerText = " Va vom contacta in curand!";
  container.appendChild(notification);
  console.log(createNotification);
  setTimeout(() => {
    notification.remove();
  }, 2000);
}

// generate pictures Tratamente

let button = document.querySelectorAll(".buttontrat");

button.forEach((btn) => {
  btn.addEventListener("click", showPic);
});

let image = 1;

function showPic() {
  const poza = this.nextElementSibling.querySelector("img");
  if (image == 1) {
    poza.style.display = "block";
    return (image = 0);
  } else {
    poza.style.display = "none";
    return (image = 1);
  }
}

// Zoom pictures

mediumZoom(".image-dark", {
  background: "#000000",
  margin: 50,
});
