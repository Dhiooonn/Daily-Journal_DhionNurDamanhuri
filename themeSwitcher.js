const toggleButton = document.getElementById("toggle-dark-mode");
const body = document.body;

toggleButton.addEventListener("click", () => {
  body.classList.toggle("dark-mode");
  const cards = document.querySelectorAll(".card");
  cards.forEach((card) => {
    card.classList.toggle("dark-mode");
  });
  toggleButton.classList.toggle("btn-secondary");
  toggleButton.classList.toggle("btn-light");
  toggleButton.innerText = body.classList.contains("dark-mode")
    ? "Light Mode"
    : "Dark Mode";
});
