+function(b){function a(){var e=document.createElement("bootstrap");var d={WebkitTransition:"webkitTransitionEnd",MozTransition:"transitionend",OTransition:"oTransitionEnd otransitionend",transition:"transitionend"};for(var c in d){if("undefined"!==typeof(e.style[c])){return{end:d[c]}}}}b.fn.emulateTransitionEnd=function(e){var d=false,c=this;b(this).one(b.support.transition.end,function(){d=true});setTimeout(function(){if(!d){b(c).trigger(b.support.transition.end)}},e);return this};b(function(){b.support.transition=a()})}(window.jQuery);