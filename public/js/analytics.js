loadJS("https://www.googletagmanager.com/gtag/js?id=UA-90324371-2",function(){function e(){dataLayer.push(arguments)}window.dataLayer=window.dataLayer||[],e("js",new Date),e("config","UA-90324371-2")}),loadJS("https://www.googletagmanager.com/gtag/js?id=AW-926597150",function(){function e(){dataLayer.push(arguments)}window.dataLayer=window.dataLayer||[],e("js",new Date),e("config","AW-926597150"),e("event","page_view",{send_to:"AW-926597150",user_id:"replace with value"})}),function(e,t,n,a,o,i,r){e.fbq||(o=e.fbq=function(){o.callMethod?o.callMethod.apply(o,arguments):o.queue.push(arguments)},e._fbq||(e._fbq=o),o.push=o,o.loaded=!0,o.version="2.0",o.queue=[],(i=t.createElement(n)).async=!0,i.src="https://connect.facebook.net/en_US/fbevents.js",(r=t.getElementsByTagName(n)[0]).parentNode.insertBefore(i,r))}(window,document,"script"),fbq("init","837365283112204"),fbq("track","PageView"),function(e,t,n,a,o,i){function r(){var e={a:arguments,q:[]},t=this.push(e);return"number"!=typeof t?t:r.bind(e.q)}e.MailerLiteObject=o,r.q=r.q||[],e.ml=e.ml||r.bind(r.q),e.ml.q=e.ml.q||r.q,i=t.createElement(n);var c=t.getElementsByTagName(n)[0];i.async=1,i.src="https://static.mailerlite.com/js/universal.js?v"+~~((new Date).getTime()/1e6),c.parentNode.insertBefore(i,c)}(window,document,"script",0,"ml");var ml_account=ml("accounts","1282278","c1f4z7u5f4","load");!function(){"use strict";var e=window.driftt=window.drift=window.driftt||[];if(!e.init){if(e.invoked)return void(window.console&&console.error&&console.error("Drift snippet included twice."));e.invoked=!0,e.methods=["identify","config","track","reset","debug","show","ping","page","hide","off","on"],e.factory=function(t){return function(){var n=Array.prototype.slice.call(arguments);return n.unshift(t),e.push(n),e}},e.methods.forEach(function(t){e[t]=e.factory(t)}),e.load=function(e){var t=3e5*Math.ceil(new Date/3e5),n=document.createElement("script");n.type="text/javascript",n.async=!0,n.crossorigin="anonymous",n.src="https://js.driftt.com/include/"+t+"/"+e+".js";var a=document.getElementsByTagName("script")[0];a.parentNode.insertBefore(n,a)}}}(),drift.SNIPPET_VERSION="0.3.1",drift.load("7bgvz2cd9ici");
