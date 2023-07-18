// 1ª forma
var container = document.getElementById("container");
var button = document.getElementById("action-btn");

button.addEventListener("click", function () {
  var container = document.getElementById("container");

  if (container.style.display === "none") {
    container.style.display = "block";
  } else {
    container.style.display = "none";
  }
});

// 2ª forma se tem classe hide ele tira e se não tem ele coloca

var button2 = document.getElementById("action-btn2");

button2.addEventListener("click", function () {
  var container2 = document.getElementById("container2");
  container2.classList.toggle("hide");
});
