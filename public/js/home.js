$(document).ready(function(){function e(){$("<div id='oscura'></div>").appendTo("body").hide().fadeIn(1e3)}function a(){$("div#oscura").remove()}var n=$("div#espandi_menu"),i=$("div#espandi_menu > img"),t=$("nav[role=menu] ul a");$(this);i.eq(1).hide(),$("nav[role=menu] *").hide(),i.eq(0).click(function(){t.css("width","0%"),n.hide().animate({left:"30%",marginLeft:"-50px"},750),$("nav[role=menu]").animate({width:"30%"},750),i.eq(0).hide(),i.eq(1).show(),n.delay(800).fadeIn(1e3),e(),$("nav[role=menu] > img").delay(750).fadeIn(),$("nav[role=menu] > ul, nav[role=menu] ul *").delay(1e3).fadeIn(),t.eq(0).delay(50).animate({width:"100%"}),t.eq(1).delay(100).animate({width:"100%"}),t.eq(2).delay(150).animate({width:"100%"}),t.eq(3).delay(200).animate({width:"100%"}),t.eq(4).delay(250).animate({width:"100%"}),t.eq(5).delay(300).animate({width:"100%"})}),i.eq(1).click(function(){$("nav[role=menu] *").fadeOut(100),n.hide().animate({left:"0%",marginLeft:"50px"},750),$("nav[role=menu]").animate({width:"0%"},750),i.eq(1).hide(),i.eq(0).show(),n.fadeIn(1e3),a()})}),function(e,a,n,i,t,d,o){e.GoogleAnalyticsObject=t,e[t]=e[t]||function(){(e[t].q=e[t].q||[]).push(arguments)},e[t].l=1*new Date,d=a.createElement(n),o=a.getElementsByTagName(n)[0],d.async=1,d.src=i,o.parentNode.insertBefore(d,o)}(window,document,"script","//www.google-analytics.com/analytics.js","ga"),ga("create","UA-71565044-1","auto"),ga("send","pageview");