<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the .wam-main-content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Pressable
 */
?>


</main>




<?php wp_footer(); ?>
<script>
  document.getElementById('toggle-light-dark').addEventListener('click', () => {
    document.body.classList.toggle('light-mode');
  });

  // Check for saved theme mode in localStorage
  if (localStorage.getItem('theme') === 'light') {
    document.body.classList.add('light-mode');
  } else {
    // Default to dark mode
    document.body.classList.remove('light-mode');
  }

  // Toggle function with saving preference
  document.getElementById('toggle-light-dark').addEventListener('click', () => {
    document.body.classList.toggle('light-mode');
    const currentMode = document.body.classList.contains('light-mode') ? 'light' : 'dark';
    localStorage.setItem('theme', currentMode);
  });


  // List of aura classes
  const auras = ['aura-blue', 'aura-green', 'aura-yellow', 'aura-purple', 'aura-red', 'aura-white-silver'];

  // Function to get a random starting aura
  function getRandomAura() {
    return auras[Math.floor(Math.random() * auras.length)];
  }

  // Apply random starting aura if none is set
  if (!localStorage.getItem('currentAura')) {
    const randomAura = getRandomAura();
    document.body.classList.add(randomAura);
    localStorage.setItem('currentAura', randomAura);
  } else {
    // Apply saved aura
    document.body.classList.add(localStorage.getItem('currentAura'));
  }

  // Light/Dark Mode Default
  if (localStorage.getItem('theme') === 'light') {
    document.body.classList.add('light-mode');
  } else {
    // Default to dark mode
    document.body.classList.remove('light-mode');
  }

  // Toggle function for Light/Dark Mode
  document.getElementById('toggle-light-dark').addEventListener('click', () => {
    document.body.classList.toggle('light-mode');
    const currentMode = document.body.classList.contains('light-mode') ? 'light' : 'dark';
    localStorage.setItem('theme', currentMode);
  });

  // Toggle function to switch to the next aura
  document.getElementById('toggle-aura').addEventListener('click', () => {
    // Get current aura from localStorage
    let currentAura = localStorage.getItem('currentAura');

    // Find the index of the current aura in the auras array
    let currentIndex = auras.indexOf(currentAura);

    // Remove the current aura class
    document.body.classList.remove(currentAura);

    // Calculate the next aura index in the sequence
    let nextIndex = (currentIndex + 1) % auras.length;
    let nextAura = auras[nextIndex];

    // Apply the next aura class
    document.body.classList.add(nextAura);

    // Save the new current aura in localStorage
    localStorage.setItem('currentAura', nextAura);
  });





  "use strict";

  document.addEventListener('DOMContentLoaded', () => {
    const interBubble = document.querySelector('.interactive');
    let curX = 0;
    let curY = 0;
    let tgX = 0;
    let tgY = 0;
    let ticking = false;

    function move() {
      // Smoothly interpolate the position towards the target
      curX += (tgX - curX) / 20;
      curY += (tgY - curY) / 20;
      interBubble.style.transform = `translate(${Math.round(curX)}px, ${Math.round(curY)}px)`;

      // Continue the animation loop
      requestAnimationFrame(move);
    }

    window.addEventListener('mousemove', (event) => {
      if (!ticking) {
        requestAnimationFrame(() => {
          tgX = event.clientX;
          tgY = event.clientY;
          ticking = false; // Reset the ticking state
        });
        ticking = true;
      }
    });

    move(); // Start the animation loop
  });

</script>

</body>

</html>