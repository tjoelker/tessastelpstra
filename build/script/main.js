'use strict';

document.addEventListener('DOMContentLoaded', function() {
  for (var r = document.querySelectorAll('.component-case'), s = document.body.scrollTop || document.documentElement.scrollTop, a = 333.334, u = new Array(), e = 666.667 * (r.length - 1) + document.documentElement.clientHeight, t = 0; t < r.length; t++) u.unshift(-1e3 * (r.length - (t + 1)));
  function n() {
    var e = document.body.scrollTop || document.documentElement.scrollTop, t = s - e;
    s = e;
    for (var n = 0; n < r.length; n++) {
      var o = r[n], c = u[n] += -1.5 * t, l = c, d = c < 0 ? 1 : 1 - parseInt((c - 200) / (a - 200) * 10) / 10, c = a < c ? 'none' : 'block';
      o.style.transform = 'translate3d(0, 0, '.concat(l, 'px)'), o.style.opacity = d, 
      o.style.display = c;
    }
  }
  n(), document.body.style.height = ''.concat(e, 'px'), window.addEventListener('scroll', function() {
    n();
  });
});