(function(d){var h=[];d.loadImages=function(a,e){"string"==typeof a&&(a=[a]);for(var f=a.length,g=0,b=0;b<f;b++){var c=document.createElement("img");c.onload=function(){g++;g==f&&d.isFunction(e)&&e()};c.src=a[b];h.push(c)}}})(window.jQuery);
var wl;

var lwi=-1;function thresholdPassed(){var w=$(window).width();var p=false;var cw=0;if(w>=768){cw++;}if(w>=960){cw++;}if(w>=1200){cw++;}if(lwi!=cw){p=true;}lwi=cw;return p;}
window.plstp||(window.plstp=[]),plst=function(p,w){for(f in window.plstp)window.plstp[f]();window.plstp=[],window.plstp[p]=w},plrm=function(p){delete window.plstp[p]};!function(){if("Promise"in window&&void 0!==window.performance){var e,t,r=document,n=function(){return r.createElement("link")},o=new Set,a=n(),i=a.relList&&a.relList.supports&&a.relList.supports("prefetch"),s=location.href.replace(/#[^#]+$/,"");o.add(s);var c=function(e){var t=location,r="http:",n="https:";if(e&&e.href&&e.origin==t.origin&&[r,n].includes(e.protocol)&&(e.protocol!=r||t.protocol!=n)){var o=e.pathname;if(!(e.hash&&o+e.search==t.pathname+t.search||"?preload=no"==e.search.substr(-11)||".html"!=o.substr(-5)&&".html"!=o.substr(-5)&&"/"!=o.substr(-1)))return!0}},u=function(e){var t=e.replace(/#[^#]+$/,"");if(!o.has(t)){if(i){var a=n();a.rel="prefetch",a.href=t,r.head.appendChild(a)}else{var s=new XMLHttpRequest;s.open("GET",t,s.withCredentials=!0),s.send()}o.add(t)}},p=function(e){return e.target.closest("a")},f=function(t){var r=t.relatedTarget;r&&p(t)==r.closest("a")||e&&(clearTimeout(e),e=void 0)},d={capture:!0,passive:!0};r.addEventListener("touchstart",function(e){t=performance.now();var r=p(e);c(r)&&u(r.href)},d),r.addEventListener("mouseover",function(r){if(!(performance.now()-t<1200)){var n=p(r);c(n)&&(n.addEventListener("mouseout",f,{passive:!0}),e=setTimeout(function(){u(n.href),e=void 0},80))}},d)}}();

$(function(){
r=function(){if(thresholdPassed()){dpi=window.devicePixelRatio;if($(window).width()>=1200){var a='data-src';var e=document.querySelector('.un22 .slide0');if(e.hasAttribute('src')){a='src';}e.setAttribute(a,(dpi>1)?'images/devotional_set_6-842.png':'images/devotional_set_6-421.png');
var a='data-src';var e=document.querySelector('.un22 .slide1');if(e.hasAttribute('src')){a='src';}e.setAttribute(a,(dpi>1)?'images/devotional_set_5-842.png':'images/devotional_set_5-421.png');
var a='data-src';var e=document.querySelector('.un22 .slide2');if(e.hasAttribute('src')){a='src';}e.setAttribute(a,(dpi>1)?'images/devotional_set_4-842.png':'images/devotional_set_4-421.png');
var a='data-src';var e=document.querySelector('.un22 .slide3');if(e.hasAttribute('src')){a='src';}e.setAttribute(a,(dpi>1)?'images/devotional_set_3-842.png':'images/devotional_set_3-421.png');
var a='data-src';var e=document.querySelector('.un22 .slide4');if(e.hasAttribute('src')){a='src';}e.setAttribute(a,(dpi>1)?'images/devotional_set_2-842.png':'images/devotional_set_2-421.png');
var a='data-src';var e=document.querySelector('.un22 .slide5');if(e.hasAttribute('src')){a='src';}e.setAttribute(a,(dpi>1)?'images/devotional_set_1-842.png':'images/devotional_set_1-421.png');}else if($(window).width()>=960){var a='data-src';var e=document.querySelector('.un22 .slide0');if(e.hasAttribute('src')){a='src';}e.setAttribute(a,(dpi>1)?'images/devotional_set_6-674.png':'images/devotional_set_6-337.png');
var a='data-src';var e=document.querySelector('.un22 .slide1');if(e.hasAttribute('src')){a='src';}e.setAttribute(a,(dpi>1)?'images/devotional_set_5-674.png':'images/devotional_set_5-337.png');
var a='data-src';var e=document.querySelector('.un22 .slide2');if(e.hasAttribute('src')){a='src';}e.setAttribute(a,(dpi>1)?'images/devotional_set_4-674.png':'images/devotional_set_4-337.png');
var a='data-src';var e=document.querySelector('.un22 .slide3');if(e.hasAttribute('src')){a='src';}e.setAttribute(a,(dpi>1)?'images/devotional_set_3-674.png':'images/devotional_set_3-337.png');
var a='data-src';var e=document.querySelector('.un22 .slide4');if(e.hasAttribute('src')){a='src';}e.setAttribute(a,(dpi>1)?'images/devotional_set_2-674.png':'images/devotional_set_2-337.png');
var a='data-src';var e=document.querySelector('.un22 .slide5');if(e.hasAttribute('src')){a='src';}e.setAttribute(a,(dpi>1)?'images/devotional_set_1-674.png':'images/devotional_set_1-337.png');}else if($(window).width()>=768){var a='data-src';var e=document.querySelector('.un22 .slide0');if(e.hasAttribute('src')){a='src';}e.setAttribute(a,(dpi>1)?'images/devotional_set_6-540.png':'images/devotional_set_6-270.png');
var a='data-src';var e=document.querySelector('.un22 .slide1');if(e.hasAttribute('src')){a='src';}e.setAttribute(a,(dpi>1)?'images/devotional_set_5-540.png':'images/devotional_set_5-270.png');
var a='data-src';var e=document.querySelector('.un22 .slide2');if(e.hasAttribute('src')){a='src';}e.setAttribute(a,(dpi>1)?'images/devotional_set_4-540.png':'images/devotional_set_4-270.png');
var a='data-src';var e=document.querySelector('.un22 .slide3');if(e.hasAttribute('src')){a='src';}e.setAttribute(a,(dpi>1)?'images/devotional_set_3-540.png':'images/devotional_set_3-270.png');
var a='data-src';var e=document.querySelector('.un22 .slide4');if(e.hasAttribute('src')){a='src';}e.setAttribute(a,(dpi>1)?'images/devotional_set_2-540.png':'images/devotional_set_2-270.png');
var a='data-src';var e=document.querySelector('.un22 .slide5');if(e.hasAttribute('src')){a='src';}e.setAttribute(a,(dpi>1)?'images/devotional_set_1-540.png':'images/devotional_set_1-270.png');}else{var a='data-src';var e=document.querySelector('.un22 .slide0');if(e.hasAttribute('src')){a='src';}e.setAttribute(a,(dpi>1)?'images/devotional_set_6-548.png':'images/devotional_set_6-274.png');
var a='data-src';var e=document.querySelector('.un22 .slide1');if(e.hasAttribute('src')){a='src';}e.setAttribute(a,(dpi>1)?'images/devotional_set_5-548.png':'images/devotional_set_5-274.png');
var a='data-src';var e=document.querySelector('.un22 .slide2');if(e.hasAttribute('src')){a='src';}e.setAttribute(a,(dpi>1)?'images/devotional_set_4-548.png':'images/devotional_set_4-274.png');
var a='data-src';var e=document.querySelector('.un22 .slide3');if(e.hasAttribute('src')){a='src';}e.setAttribute(a,(dpi>1)?'images/devotional_set_3-548.png':'images/devotional_set_3-274.png');
var a='data-src';var e=document.querySelector('.un22 .slide4');if(e.hasAttribute('src')){a='src';}e.setAttribute(a,(dpi>1)?'images/devotional_set_2-548.png':'images/devotional_set_2-274.png');
var a='data-src';var e=document.querySelector('.un22 .slide5');if(e.hasAttribute('src')){a='src';}e.setAttribute(a,(dpi>1)?'images/devotional_set_1-548.png':'images/devotional_set_1-274.png');}}};
if(!window.HTMLPictureElement){$(window).resize(r);r();}
!function(){var e=document.querySelectorAll('a[href^="#"]');[].forEach.call(e,function(e){e.addEventListener("click",function(t){var o=0;if(e.hash.length>1){var n=parseFloat(getComputedStyle(document.body).getPropertyValue("zoom"));n||(n=1);var r=document.querySelectorAll('[name="'+e.hash.slice(1)+'"]')[0];if(!r)return;var l=/chrome/i.test(navigator.userAgent);o=l?r.getBoundingClientRect().top*n+pageYOffset:(r.getBoundingClientRect().top+pageYOffset)*n}if("scrollBehavior"in document.documentElement.style)scroll({top:o,left:0,behavior:"smooth"});else if("requestAnimationFrame"in window){var a=pageYOffset,i=null;requestAnimationFrame(function e(t){i||(i=t);var n=t-i;scrollTo(0,a<o?(o-a)*n/400+a:a-(a-o)*n/400),n<400?requestAnimationFrame(e):scrollTo(0,o)})}else scrollTo(0,o);t.preventDefault()},!1)})}();
un21=document.querySelectorAll('.un21');
if(un21.length){
un21=new Plyr('.un21 audio',{'iconUrl':'css/plyr.svg',controls:['play'],storage:{enabled:false}});
un21.volume=0.5;
un21.on('play',function(){plst('un21',function(){un21.pause();})});
un21.on('pause ended',function(){plrm('un21')});
}
$('.un22 .slider').slick({lazyLoad: 'ondemand',slidesToShow: 1,slidesToScroll: 1,overflow: 'hidden',speed: 300,dots: true,arrows: true,infinite: true});if(location.hash){var e=location.hash.replace("#",""),o=function(){var t=document.querySelectorAll('[name="'+e+'"]')[0];t&&t.scrollIntoView(),"0px"===window.getComputedStyle(document.body).getPropertyValue("min-width")&&setTimeout(o,100)};o()}

});