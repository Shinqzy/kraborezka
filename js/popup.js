document.getElementById("open_pop_up").addEventListener("click", function () {
  document.getElementById("pop_up").classList.add("open");
});

document.getElementById("pop_up_close").addEventListener("click", function () {
  document.getElementById("pop_up").classList.remove("open");
});

window.addEventListener("keydown", (e) => {
  if (e.key === "Escape") {
    document.getElementById("pop_up").classList.remove("open");
  }
});
