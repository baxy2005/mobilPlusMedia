var topoffset=90,wheight=$(window).height();$(".fullheight").css("height",wheight),$(window).resize(function(){var a=$(window).height();$(".fullheight").css("height",a)}),$("a[href*=#]:not([href=#])").click(function(){if(location.pathname.replace(/^\//,"")==this.pathname.replace(/^\//,"")&&location.hostname==this.hostname){var a=$(this.hash);if(a=a.length?a:$("[name="+this.hash.slice(1)+"]"),a.length)return $("html,body").animate({scrollTop:a.offset().top-topoffset},1e3),!1}}),$(window).scroll(function(){var a=$(window).scrollTop()+topoffset;$("nav li a").removeClass("active"),a>$("#link2").offset().top&&($("nav li a").removeClass("active"),$('a[href$="#link2"]').addClass("active")),a>$("#link3").offset().top&&($("nav li a").removeClass("active"),$('a[href$="#link3"]').addClass("active"))});var controller=new ScrollMagic({globalSceneOptions:{triggerHook:"onLeave"}}),pin=new ScrollScene({triggerElement:"#nav"}).setPin("#nav").addTo(controller);