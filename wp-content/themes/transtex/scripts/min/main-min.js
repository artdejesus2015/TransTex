!function(e,t,$){"use strict";!function(e,t,n){var a=e.querySelectorAll(".inputfile");Array.prototype.forEach.call(a,function(e){var t=e.nextElementSibling,n=t.innerHTML;e.addEventListener("change",function(e){var a="";a=this.files&&this.files.length>1?(this.getAttribute("data-multiple-caption")||"").replace("{count}",this.files.length):e.target.value.split("\\").pop(),a?t.querySelector("span.label-upload").innerHTML=a:t.innerHTML=n}),e.addEventListener("focus",function(){e.classList.add("has-focus")}),e.addEventListener("blur",function(){e.classList.remove("has-focus")})})}(t,e,0),$(e).scroll(function(){$(this).scrollTop()>1?$(".navbar-menu").addClass("navbar-animated"):$(".navbar-menu").removeClass("navbar-animated")}),$(".operation-wrap .operation-circle").hover(function(e){$(this).next().show(),$(this).next().addClass("show")},function(e){$(this).next().hide(),$(this).next().removeClass("show")})}(window,document,jQuery);