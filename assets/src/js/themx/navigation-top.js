//topmenu select field dropdown  selfielddropdown
document.querySelectorAll("[data-toggle~=selfielddropdown]").forEach(setupDropdown);

function setupDropdown(selfielddropdownToggle) {
  selfielddropdownToggle.setAttribute("aria-haspopup", "true");
  selfielddropdownToggle.setAttribute("aria-expanded", "false");

  var selfielddropdownMenu = selfielddropdownToggle.parentNode.querySelector(".selfielddropdown-menu");

  selfielddropdownMenu.setAttribute("aria-hidden", "true");

  selfielddropdownToggle.onclick = toggleDropdown;

  function toggleDropdown() {
    if (selfielddropdownToggle.getAttribute("aria-expanded") === "true") {
      selfielddropdownToggle.setAttribute("aria-expanded", "false");
      selfielddropdownMenu.setAttribute("aria-hidden", "true");
      selfielddropdownToggle.parentNode.classList.remove("selfielddropdown-on");
      return;
    }
    selfielddropdownToggle.setAttribute("aria-expanded", "true");
    selfielddropdownMenu.setAttribute("aria-hidden", "false");
    selfielddropdownToggle.parentNode.classList.add("selfielddropdown-on");
    selfielddropdownMenu.children[0].focus();
    return;
  }
}

function toggleParentClass(elem, className) {
  elem.parentNode.classList.toggle(className);
}

function addParentClass(elem, className) {
  elem.parentNode.classList.add(className);
}

function removeParentClass(elem, className) {
  elem.parentNode.classList.remove(className);
}

function toggleMenu() {
  var elem = document.getElementById("main-nav");
  elem.classList.toggle("menu-on");
}

