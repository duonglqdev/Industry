/* -- Filter Plugin -- */
!function(n){"use strict";n.fn.masonryFilter=function(e){var i=function(n){setTimeout(function(){n.masonry("layout")},100)},t=function(t){var r=t.masonry("getAllItems"),o=[],s=[];n.each(r,function(i){var t=r[i],a=n(t.element),u=e.filter&&e.filter.call(a);u?t.isHidden&&(t.isIgnored=!1,o.push(t)):t.isHidden||(t.isIgnored=!0,s.push(t))}),t.masonry("hide",s),t.masonry("reveal",o),i(t)};return this.each(function(){var e=n(this);t(e)})}}(window.jQuery);