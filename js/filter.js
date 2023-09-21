document.addEventListener("DOMContentLoaded", function () {
    const typeFilter = document.getElementById("typeFilter");
    const pizzaItems = document.querySelectorAll(".pizza-item");

    typeFilter.addEventListener("change", function () {
        const selectedType = typeFilter.value;

        pizzaItems.forEach(function (pizzaItem) {
            const itemType = pizzaItem.getAttribute("data-pizzatype");

            if (selectedType === "" || selectedType === itemType) {
                pizzaItem.style.display = "block";
            } else {
                pizzaItem.style.display = "none";
            }
        });
    });
});
    
