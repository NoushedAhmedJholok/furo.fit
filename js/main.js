


// Function to add options starting from tomorrow
function populateTourDates() {
    const selectElement = document.getElementById('tour_select');
    const today = new Date();
    
    // Get tomorrow's date
    let startDate = new Date(today);
    startDate.setDate(today.getDate() + 1);

    // Number of days to display in the dropdown (you can adjust as needed)
    const numberOfDays = 30;

    for (let i = 0; i < numberOfDays; i++) {
        const option = document.createElement('option');
        const date = new Date(startDate);
        date.setDate(startDate.getDate() + i);

        // Format date as yyyy-mm-dd (you can change the format)
        const formattedDate = date.toISOString().split('T')[0];

        option.value = formattedDate;
        option.textContent = formattedDate;
        selectElement.appendChild(option);
    }
}

// Call the function to populate the dropdown
populateTourDates();



$(document).ready(function() {
  // Show the main_img after 1 second
  setTimeout(function() {
      $('.main_img').addClass('visible');
  }, 500);

  // Show the effect_one img after 2 seconds
  setTimeout(function() {
      $('.effect_one').addClass('visible');
  }, 800);

  // Show the effect_two img after 3 seconds
  setTimeout(function() {
      $('.effect_two').addClass('visible');
  }, 1100);

  // Show the effect_three img after 4 seconds
  setTimeout(function() {
      $('.effect_three').addClass('visible');
  }, 1400);

  // Show the effect_four img after 5 seconds
  setTimeout(function() {
      $('.effect_four').addClass('visible');
  }, 1700);

  // Show the effect_five img after 6 seconds
  setTimeout(function() {
      $('.effect_five').addClass('visible');
  }, 2000);
});

$(document).ready(function() {
  $('#navButton').click(function() {
      $('.nav_menu_ul').toggleClass('show'); // Toggle the 'show' class on each click
  });
});

const imageSlider = document.querySelector('.image-slider');

imageSlider.addEventListener('mouseover', () => {
    imageSlider.style.animationPlayState = 'paused'; // Pause the slider on hover
});

imageSlider.addEventListener('mouseout', () => {
    imageSlider.style.animationPlayState = 'running'; // Resume the slider when the mouse leaves
});

const slider = document.querySelector('.slider');

slider.addEventListener('mouseover', () => {
    slider.style.animationPlayState = 'paused'; // Pause the slider on hover
});

slider.addEventListener('mouseout', () => {
    slider.style.animationPlayState = 'running'; // Resume the slider when the mouse leaves
});


// Function to fetch data and populate HTML
