function hasClass(t,e){return t.className&&new RegExp("(^|\\s)"+e+"(\\s|$)").test(t.className)}var button=document.getElementById("mobile-toggle"),nav=document.getElementById("site-navigation-mobile"),body=document.body;button.onclick=function(){var t="open",e=this.getAttribute("class"),s=nav.getAttribute("class"),i=body.getAttribute("class");hasClass(this,t)===!0?(i=i.replace(t,""),body.setAttribute("class",i),e=e.replace(t,""),button.setAttribute("class",e),s=s.replace(t,""),nav.setAttribute("class",s),setTimeout(function(){nav.style.visibility="hidden",nav.style.display="none"},650)):(i=i+=" "+t,body.setAttribute("class",i),e=e+=" "+t,button.setAttribute("class",e),s=s+=" "+t,nav.style.visibility="visible",nav.style.display="block",setTimeout(function(){nav.setAttribute("class",s)},50))};