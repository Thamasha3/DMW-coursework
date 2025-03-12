document.addEventListener('DOMContentLoaded', function () {
    // Get all "See More" buttons
    const seeMoreButtons = document.querySelectorAll('.see-more-btn');

    seeMoreButtons.forEach(button => {
        button.addEventListener('click', function () {
            const recipeId = this.getAttribute('data-id');
            const detailsDiv = document.getElementById('details-' + recipeId);

            // Toggle the visibility of the recipe details
            detailsDiv.classList.toggle('hide');
            detailsDiv.classList.toggle('show');
        });
    });

    // Attach Event Listeners Dynamically (Edit & Delete)

    document.body.addEventListener("click", function (event) {
        const target = event.target;
    
        if (target.classList.contains("edit-btn")) {
            const recipeId = target.getAttribute("data-id");
    
            // Get recipe details using specific IDs (safer than nth-child)
            const title = document.querySelector(#recipe-${recipeId} h3).textContent;
            const ingredients = document.querySelector(#details-${recipeId} .ingredients).textContent;
            const method = document.querySelector(#details-${recipeId} .method).textContent;
            const author = document.querySelector(#details-${recipeId} .author).textContent;
            const imageSrc = document.querySelector(#recipe-${recipeId} img).getAttribute("src");
    
            // Fill form fields
           
            document.getElementById("edit-title").value = title;
            document.getElementById("edit-ingredients").value = ingredients;
            document.getElementById("edit-method").value = method;
            document.getElementById("edit-author").value = author;
    
            // Image preview (if you allow editing images)
            document.getElementById("edit-image-preview").src = imageSrc;
    
            // Show the edit modal
            document.getElementById("edit-modal").style.display = "block";
        }
    });



    
        // 🔹 Delete Button Clicked
        if (target.classList.contains("delete-btn")) {
            const recipeId = target.getAttribute("data-id");
            if (confirm("Are you sure you want to delete this recipe ?")) {
                fetch("delete_recipe.php", {
                    method: "POST",
                    body: new URLSearchParams({ id: recipeId })
                })
                .then(response => response.text())
                .then(data => {
                    alert(data);
                    location.reload();
                })
                .catch(error => console.error("Error:", error));
            }
        }
    });
    
    // 🔹 Handle Edit Form Submission (AJAX)
    document.getElementById("edit-form").addEventListener("submit", function (event) {
        event.preventDefault();
    
        const formData = new FormData(this);
    
        fetch("update_recipe.php", {
            method: "POST",
            body: formData
        })
        .then(response => response.text())
        .then(data => {
            alert(data);
            location.reload();
        })
        .catch(error => console.error("Error:", error));
    });