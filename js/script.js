var wheight=$(window).height();$(".fullheight").css("height",wheight),$(window).resize(function(){var a=$(window).height();$(".fullheight").css("height",a)}),$("a[href*=#]:not([href=#])").click(function(){if(location.pathname.replace(/^\//,"")==this.pathname.replace(/^\//,"")&&location.hostname==this.hostname){var a=$(this.hash);if(a=a.length?a:$("[name="+this.hash.slice(1)+"]"),a.length)return $("html,body").animate({scrollTop:a.offset().top-topoffset},1e3),!1}});var controller=new ScrollMagic({globalSceneOptions:{triggerHook:"onLeave"}}),pin=new ScrollScene({triggerElement:"#nav"}).setPin("#nav").addTo(controller);