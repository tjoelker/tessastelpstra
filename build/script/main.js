'use strict';

document.addEventListener('DOMContentLoaded', function() {
  for (var d = document.querySelectorAll('.component-case'), a = document.body.scrollTop || document.documentElement.scrollTop, s = 333.334, u = new Array(), e = 666.667 * (d.length - 1) + document.documentElement.clientHeight, t = 0; t < d.length; t++) u.unshift(-1e3 * (d.length - (t + 1)));
  function n() {
    var e = document.body.scrollTop || document.documentElement.scrollTop, t = a - e;
    a = e;
    for (var n = 0; n < d.length; n++) {
      var o = d[n], c = u[n] += -1.5 * t, l = c, r = c < 0 ? 1 : 1 - parseInt((c - 200) / (s - 200) * 10) / 10, c = s < c ? 'none' : 'block';
      o.style.transform = 'translate3d(0, 0, '.concat(l, 'px)'), o.style.opacity = r, 
      o.style.display = c, o.querySelector('.card-case .image-wrapper img').style.filter = 'blur('.concat(-.011 * l, 'px)');
    }
  }
  n(), document.body.style.height = ''.concat(e, 'px'), window.addEventListener('scroll', function() {
    n();
  });
});