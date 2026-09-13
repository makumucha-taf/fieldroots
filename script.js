document.addEventListener("DOMContentLoaded", function () {
    // Navigation Toggle Code
    const navbar = document.querySelector(".navbar") || document.querySelector("header") || document.querySelector("nav");

    if (navbar && !navbar.querySelector(".menu-toggle-btn")) {
        const toggleBtn = document.createElement("button");
        toggleBtn.className = "menu-toggle-btn";
        toggleBtn.setAttribute("type", "button");
        toggleBtn.setAttribute("aria-label", "Toggle navigation");
        toggleBtn.innerHTML = "&#9776;"; // Hamburger Icon

        navbar.appendChild(toggleBtn);

        toggleBtn.addEventListener("click", function (e) {
            e.preventDefault();
            navbar.classList.toggle("menu-open");
            
            if (navbar.classList.contains("menu-open")) {
                toggleBtn.innerHTML = "&#10005;"; // Close Icon
            } else {
                toggleBtn.innerHTML = "&#9776;"; // Hamburger Icon
            }
        });
    }

    // Contact Form Validation (5 Marks)
    const contactForm = document.querySelector("form");

    if (contactForm) {
        contactForm.addEventListener("submit", function (event) {
            const inputs = contactForm.querySelectorAll("input, textarea, select");
            let allFilled = true;

            inputs.forEach(input => {
                if (input.value.trim() === "") {
                    allFilled = false;
                    input.style.borderColor = "red";
                } else {
                    input.style.borderColor = "";
                }
            });

            if (!allFilled) {
                event.preventDefault();
                alert("Please fill in all fields before submitting the form.");
            }
        });
    }
    
    // Dynamic Product Search Filter (10 Marks)
    const searchInput = document.getElementById("productSearch");
    const productCards = document.querySelectorAll(".product-card");

    if (searchInput) {
        searchInput.addEventListener("keyup", function () {
            const query = searchInput.value.toLowerCase().trim();

            productCards.forEach(card => {
                const title = card.querySelector(".product-title") ? card.querySelector(".product-title").innerText.toLowerCase() : "";
                const description = card.querySelector(".product-description") ? card.querySelector(".product-description").innerText.toLowerCase() : "";

                if (title.includes(query) || description.includes(query)) {
                    card.style.display = "";
                } else {
                    card.style.display = "none";
                }
            });
        });
    }
});

// Screen Width Change Logger Function
function monitorResponsiveness() {
    console.log("Current Screen Width: " + window.innerWidth + "px");
    
    window.addEventListener("resize", function () {
        const currentWidth = window.innerWidth;
        if (currentWidth <= 768) {
            console.log("[Mobile View Triggered] Screen Width: " + currentWidth + "px");
        } else {
            console.log("[Desktop View Triggered] Screen Width: " + currentWidth + "px");
        }
    });
}

monitorResponsiveness();
