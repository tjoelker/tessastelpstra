'use strict';

document.addEventListener('DOMContentLoaded', function() {
  for (var a = document.querySelectorAll('.component-case'), s = document.body.scrollTop || document.documentElement.scrollTop, d = new Array(), e = 0; e < a.length; e++) d.unshift(-1e3 * (a.length - (e + 1)));
  var t = Math.abs(d[a.length - 1] + -1e3);
  document.body.style.height = ''.concat(t, 'px'), window.addEventListener('scroll', function() {
    var e = document.body.scrollTop || document.documentElement.scrollTop, t = s - e;
    s = e;
    for (var o = 0; o < a.length; o++) {
      var n = a[o], c = d[o] += -1.5 * t, l = c, r = c < 0 ? 1 : 1 - parseInt((c - 200) / 100 * 10) / 10, c = 300 < c ? 'none' : 'block';
      n.style.transform = 'translate3d(0, 0, '.concat(l, 'px)'), n.style.opacity = r, 
      n.style.display = c, n.querySelector('.card-case .image-wrapper img').style.filter = 'blur('.concat(Math.abs(l) / 100, 'px)');
    }
  });
});