document.addEventListener('DOMContentLoaded', () => {
  let cases = document.querySelectorAll('.component-case'),
      scrollPosition = document.body.scrollTop || document.documentElement.scrollTop,
      perspective = 300,
      zAxisSpacing = -1000,
      zAxisSpacingValues = new Array;
  
  for (let i = 0; i < cases.length; i++) {
    zAxisSpacingValues.unshift((cases.length - (i + 1)) * zAxisSpacing);
  }

  let bodyHeight = Math.abs(zAxisSpacingValues[cases.length - 1]); // + 281.35(?)
  document.body.style.height = `${bodyHeight}px`;

  window.addEventListener('scroll', () => {
    zAxisScrollPosition();
  });

  function zAxisScrollPosition() {
    let top = document.body.scrollTop || document.documentElement.scrollTop,
        delta = scrollPosition - top;
        scrollPosition = top;
    
    for (let i = 0; i < cases.length; i++) {
      let componentCase = cases[i],
          newZAxisValue = (zAxisSpacingValues[i] += (delta * -1.5)),
          transform = newZAxisValue,
          opacity = newZAxisValue < 200 ? 1 : 1 - parseInt((newZAxisValue - 200) / (perspective - 200) * 10) / 10,
          display = newZAxisValue > perspective ? 'none' : 'block';
      
      componentCase.style.transform = `translateZ(${transform}px)`;
      componentCase.style.opacity = opacity;
      componentCase.style.display = display;
    }
  }
});
