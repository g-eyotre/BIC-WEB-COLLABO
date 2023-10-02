// Function to change the current image in the slideshow
function changeImage() {
    const slideImages = document.querySelectorAll('.slide-images img');
    let currentIndex = 0;

    // Hide all slide images
    slideImages.forEach(img => {
        img.style.opacity = 0;
    });

    // Show the first slide image
    slideImages[currentIndex].style.opacity = 1;

    // Function to switch to the next slide
    function nextSlide() {
        slideImages[currentIndex].style.opacity = 0;
        currentIndex = (currentIndex + 1) % slideImages.length;
        slideImages[currentIndex].style.opacity = 1;
    }

    // Change the slide every 3 seconds (3000 milliseconds)
    setInterval(nextSlide, 8000);
}

// Call the function when the page is fully loaded
window.addEventListener('load', changeImage);

// Function to change the current image in the slideshow
function changeImage() {
    const slideImages = document.querySelectorAll('.slide-images img');
    let currentIndex = 0;

    // Hide all slide images
    slideImages.forEach(img => {
        img.style.opacity = 0;
    });

    // Show the first slide image
    slideImages[currentIndex].style.opacity = 1;

    // Function to switch to the next slide
    function nextSlide() {
        slideImages[currentIndex].style.opacity = 0;
        currentIndex = (currentIndex + 1) % slideImages.length;
        slideImages[currentIndex].style.opacity = 1;
    }

    // Change the slide every 3 seconds (3000 milliseconds)
    setInterval(nextSlide, 8000);
}

// Call the function when the page is fully loaded
window.addEventListener('load', changeImage);


// Function to count numbers with animation
function countNumbers() {
    var counters = document.querySelectorAll('.number');
    counters.forEach(counter => {
        var target = parseInt(counter.getAttribute('data-count'));
        var current = 0;
        var increment = 1;
        var speed = 5; // Adjust the speed (milliseconds)

        var updateCounter = function () {
            if (current < target) {
                current += increment;
                counter.textContent = `${current}+`;
                setTimeout(updateCounter, speed);
            } else {
                counter.textContent = `${target}+`;
            }
        };
        updateCounter();
    });
}

// Call the countNumbers function when the page loads
window.addEventListener('load', countNumbers);

// function for smooth slider
function scrollToSection(sectionId) {
    const section = document.querySelector(sectionId);
    if (section) {
        window.scrollTo({
            top: section.offsetTop,
            behavior: 'smooth'
        });
    } 
 }


 // JavaScript to toggle the visibility of hidden images
document.addEventListener("DOMContentLoaded", function () {
    const showMoreButton = document.getElementById("show-more-button");
    const hiddenImages = document.querySelector(".hidden-images");

    showMoreButton.addEventListener("click", function () {
        if (hiddenImages.style.display === "none" || hiddenImages.style.display === "") {
            hiddenImages.style.display = "flex";
            showMoreButton.textContent = "Show Less";
        } else {
            hiddenImages.style.display = "none";
            showMoreButton.textContent = "More Stories";
        }
    });
});


// hidden contact info(reservation details)
function toggleContactInfo() {
    var contactInfo = document.querySelector('.contact-info2');
    if (contactInfo.style.display === 'none' || contactInfo.style.display === '') {
        contactInfo.style.display = 'block';
    } else {
        contactInfo.style.display = 'none';
    }
}


// Add a click event listener to all elements with the "clickable-row" class
document.querySelectorAll('.clickable-row').forEach(function(row) {
    row.addEventListener('click', function() {
        // Get the URL from the "data-href" attribute
        const url = row.getAttribute('data-href');
        
        // Redirect to the URL
        window.location.href = url;
    });
});


// Get the input elements and tables by class
const searchInputs = document.querySelectorAll('.searchInput');
const tables = document.querySelectorAll('.myTable');

// Add event listeners to each search input
searchInputs.forEach((searchInput, index) => {
    searchInput.addEventListener('keyup', function() {
        const searchText = searchInput.value.toLowerCase();
        
        // Get the corresponding table
        const table = tables[index];
        const rows = table.getElementsByTagName('tr');
        
        // Loop through all the table rows and hide those that don't match the search query
        for (let i = 1; i < rows.length; i++) { // Start from 1 to skip the header row
            const cells = rows[i].getElementsByTagName('td');
            let rowMatchesSearch = false;
            
            for (let j = 0; j < cells.length; j++) {
                const cellText = cells[j].textContent.toLowerCase();
                
                if (cellText.includes(searchText)) {
                    rowMatchesSearch = true;
                    break;
                }
            }
            
            rows[i].style.display = rowMatchesSearch ? '' : 'none';
        }
    });
});