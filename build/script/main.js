'use strict';

document.addEventListener('DOMContentLoaded', function() {
  for (var a = document.querySelectorAll('.component-case'), d = document.body.scrollTop || document.documentElement.scrollTop, s = new Array(), e = 0; e < a.length; e++) s.unshift(-1e3 * (a.length - (e + 1)));
  var t = Math.abs(s[a.length - 1]);
  document.body.style.height = ''.concat(t, 'px'), window.addEventListener('scroll', function() {
    var e = document.body.scrollTop || document.documentElement.scrollTop, t = d - e;
    d = e;
    for (var n = 0; n < a.length; n++) {
      var o = a[n], c = s[n] += -1.5 * t, l = c, r = c < 200 ? 1 : 1 - parseInt((c - 200) / 100 * 10) / 10, c = 300 < c ? 'none' : 'block';
      o.style.transform = 'translateZ('.concat(l, 'px)'), o.style.opacity = r, o.style.display = c;
    }
  });
});