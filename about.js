function countUp(element, finalNumber, duration) {
    let start = 0;
    const interval = duration / finalNumber;
  
    const intervalId = setInterval(() => {
      const scrolly = window.pageYOffset || document.documentElement.scrollTop;
      if (scrolly > (window.innerHeight / 2.5 )) { // يتحقق من أن الـ scrolly أكبر من 50vh
        if (start <= finalNumber) {
          element.textContent = start + "+";
          start++;
        } else {
          clearInterval(intervalId);
        }
      }
    }, interval);
  }
  
  const user = document.getElementById("user");
  countUp(user, 100, 1000);
  
  const distributor = document.getElementById("distributor");
  countUp(distributor, 7, 700);
  
  const experience = document.getElementById("experience");
  countUp(experience, 5, 500);
  