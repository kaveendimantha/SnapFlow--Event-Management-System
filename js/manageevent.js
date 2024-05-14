// Get the elements
const createPackageBtn = document.getElementById("create-package-btn");
const editPackageBtn = document.getElementById("edit-package-btn");
const createPackageForm = document.getElementById("create-package");
const editPackageForm = document.getElementById("edit-package");

// Add event listeners
createPackageBtn.addEventListener("click", () => {
  createPackageForm.classList.remove("hidden");
  editPackageForm.classList.add("hidden");
});

editPackageBtn.addEventListener("click", () => {
  editPackageForm.classList.remove("hidden");
  createPackageForm.classList.add("hidden");
});

// Prevent default form submission
document.getElementById("create-package-form").addEventListener("submit", (e) => {
  e.preventDefault();
  // Handle create package form submission here
});

document.getElementById("edit-package-form").addEventListener("submit", (e) => {
  e.preventDefault();
  // Handle edit package form submission here
});
