setTimeout(() => {
    const box = document.getElementById('time');
  
    // 👇️ removes element from DOM
    box.style.display = 'none';
  
    // 👇️ hides element (still takes up space on page)
    // box.style.visibility = 'hidden';
  }, 3000);