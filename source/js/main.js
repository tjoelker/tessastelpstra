document.addEventListener('DOMContentLoaded', () => {
  let cases = document.querySelectorAll('.component-case'),
      scrollPosition = document.body.scrollTop || document.documentElement.scrollTop,
      perspective = 333.334,
      zAxisSpacing = -1000,
      zAxisSpacingValues = new Array,
      bodyHeight = ((cases.length - 1) * 666.667) + document.documentElement.clientHeight;
  
  for (let i = 0; i < cases.length; i++) {
    zAxisSpacingValues.unshift((cases.length - (i + 1)) * zAxisSpacing);
  }

  zAxisScrollPosition();

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
          opacity = newZAxisValue < 0 ? 1 : 1 - parseInt((newZAxisValue - 200) / (perspective - 200) * 10) / 10,
          display = newZAxisValue > perspective ? 'none' : 'block';
      
      componentCase.style.transform = `translate3d(0, 0, ${transform}px)`;
      componentCase.style.opacity = opacity;
      componentCase.style.display = display;
      // componentCase.querySelector('.card-case .image-wrapper img').style.filter = `blur(${transform * -0.011}px)`; // /!\ needs refinement
    }
  }
});
