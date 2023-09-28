document.addEventListener('DOMContentLoaded', function()
{
    const spans = document.querySelectorAll('.words .span'); // Select all the <span> elements
    let currentIndex = 0; // Initialize the index
    
    function toggleClass() {
      // Remove the class 'active' from the current <span>
      spans[currentIndex].classList.remove('showSpan');
    
      // Increment the index and loop back to 0 when it reaches the end
      currentIndex = (currentIndex + 1) % spans.length;
    
      // Add the class 'active' to the next <span>
      spans[currentIndex].classList.add('showSpan');
    }
    
    // Initially, add the class 'active' to the first <span>
    spans[currentIndex].classList.add('showSpan');
    
    // Set up an interval to toggle the class every 3 seconds
    const interval = setInterval(toggleClass, 1000);
    
    // Optional: Stop the loop after a certain number of iterations (e.g., 10 times)
    const iterations = 1;
    let currentIteration = 0;
    
    function stopLoop() {
      currentIteration++;
      if (currentIteration >= iterations) {
        clearInterval(interval); // Stop the loop after a certain number of iterations
      }
    }
});