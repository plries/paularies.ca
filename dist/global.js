(()=>{var e,t={946:(e,t,o)=>{"use strict";var r=o(5880);document.addEventListener("DOMContentLoaded",(function(){var e=document.querySelector(".cursor"),t=document.getElementsByClassName("project"),o=document.getElementsByClassName("filter"),n=document.querySelectorAll("a"),a=document.getElementsByClassName("code-dropdown"),i=document.getElementsByClassName("email"),s=document.querySelectorAll("button"),c=document.getElementsByClassName("skill"),l=document.querySelectorAll("iframe"),d=document.querySelector(".flickity-viewport");r.os.set(".cursor",{xPercent:-50,yPercent:-50});var p=r.os.quickTo(".cursor","x",{duration:.1,ease:"power3"}),u=r.os.quickTo(".cursor","y",{duration:.1,ease:"power3"});window.addEventListener("mousemove",(function(t){p(t.clientX),u(t.clientY),e.style.opacity="1"})),window.addEventListener("mousedown",(function(){v.play()})),window.addEventListener("mouseup",(function(){v.reverse()}));var v=r.os.to(".cursor",{paused:!0,borderWidth:"4px",duration:.1}),m=r.os.to(".cursor",{paused:!0,scale:.5,duration:.1}),y=function(e){Array.from(e).forEach((function(e){e.addEventListener("mouseenter",(function(){m.play()})),e.addEventListener("mouseleave",(function(){m.reverse()}))}))};y(t),y(o),y(a),y(i),y(s),y(n),y(c),l.forEach((function(t){t.addEventListener("mouseover",(function(){e.style.display="none"})),t.addEventListener("mouseleave",(function(){e.style.display="block"}))})),d.addEventListener("mouseenter",(function(){m.play()})),d.addEventListener("mouseleave",(function(){m.reverse()}))}))},5063:(e,t,o)=>{"use strict";var r=o(5880),n=o(6575);r.os.registerPlugin(n.u),r.os.timeline({scrollTrigger:{trigger:".footer-content",start:"bottom bottom",end:"+=440",scrub:1}}).to(".footer-icons",{delay:5,duration:10,transform:"translateY(-128px)",ease:"none"}),r.os.timeline({repeat:-1}).to(".footer-icon",{rotation:"360deg",ease:"none",duration:30});var a=r.os.timeline({repeat:-1});a.to("#target",{transform:"translateY(16px)",ease:"bounce",duration:2}),a.to("#target",{transform:"translateY(-24px)",duration:2})},1513:(e,t,o)=>{"use strict";var r=new(o(4066).A);requestAnimationFrame((function e(t){r.raf(t),requestAnimationFrame(e)}))},4867:()=>{var e=document.querySelector(".nav-toggle"),t=document.querySelector(".nav-wrapper"),o=document.querySelector(".menu-icon");e.addEventListener("click",(function(){e.classList.toggle("open"),t.classList.toggle("visible"),t.classList.contains("visible")?o.src="../icons/ui/white-x.svg":o.src="../icons/ui/white-menu.svg"}))},4569:(e,t,o)=>{"use strict";var r=o(4116);(0,r.A)().reveal(".intro",{distance:"150px",ease:"ease-in",opacity:0}),(0,r.A)().reveal(".more",{distance:"150px",ease:"ease-in",opacity:0}),(0,r.A)().reveal("main h2",{distance:"150px",ease:"ease-in",opacity:0}),(0,r.A)().reveal("main h1",{distance:"150px",ease:"ease-in",opacity:0}),(0,r.A)().reveal(".profile h1",{distance:"0px"}),(0,r.A)().reveal(".testimonial",{distance:"150px",ease:"ease-in",opacity:0,interval:64}),(0,r.A)().reveal(".filter",{delay:64,distance:"150px",ease:"ease-in",opacity:0,interval:64}),(0,r.A)().reveal(".view-toggle",{delay:320,distance:"150px",ease:"ease-in",opacity:0}),(0,r.A)().reveal(".project-cards",{delay:128,distance:"150px",ease:"ease-in",opacity:0,interval:64}),(0,r.A)().reveal(".project-reveal",{delay:128,distance:"150px",ease:"ease-in",opacity:0}),(0,r.A)().reveal(".about-reveal",{distance:"150px",ease:"ease-in",opacity:0,interval:128})},4460:(e,t,o)=>{"use strict";var r=o(7381);(0,r.Ay)(".skill",{placement:"top"}),(0,r.Ay)('.footer-logo[data-tippy-content="back to top!"]',{placement:"bottom"}),(0,r.Ay)('.code-dropdown-btn[data-tippy-content="code snippet!"]',{placement:"top"}),(0,r.Ay)("#outdoors",{content:"<div style='display: grid; place-items: center; width: 100%; height: 100%; gap: 8px; padding: 4px 0px;'><img src='./media/tippy/outdoors.jpg' style='width: 100%; height: 100%; border-radius: 8px;'></div>",allowHTML:!0,placement:"top"}),(0,r.Ay)("#concert",{content:"<div style='display: grid; place-items: center; width: 100%; height: 100%; gap: 8px; padding: 4px 0px;'><img src='./media/tippy/concert.jpg' style='width: 100%; height: 100%; border-radius: 8px;'></div>",allowHTML:!0,placement:"top"})}},o={};function r(e){var n=o[e];if(void 0!==n)return n.exports;var a=o[e]={exports:{}};return t[e].call(a.exports,a,a.exports,r),a.exports}r.m=t,e=[],r.O=(t,o,n,a)=>{if(!o){var i=1/0;for(d=0;d<e.length;d++){for(var[o,n,a]=e[d],s=!0,c=0;c<o.length;c++)(!1&a||i>=a)&&Object.keys(r.O).every((e=>r.O[e](o[c])))?o.splice(c--,1):(s=!1,a<i&&(i=a));if(s){e.splice(d--,1);var l=n();void 0!==l&&(t=l)}}return t}a=a||0;for(var d=e.length;d>0&&e[d-1][2]>a;d--)e[d]=e[d-1];e[d]=[o,n,a]},r.d=(e,t)=>{for(var o in t)r.o(t,o)&&!r.o(e,o)&&Object.defineProperty(e,o,{enumerable:!0,get:t[o]})},r.o=(e,t)=>Object.prototype.hasOwnProperty.call(e,t),r.j=682,(()=>{var e={682:0};r.O.j=t=>0===e[t];var t=(t,o)=>{var n,a,[i,s,c]=o,l=0;if(i.some((t=>0!==e[t]))){for(n in s)r.o(s,n)&&(r.m[n]=s[n]);if(c)var d=c(r)}for(t&&t(o);l<i.length;l++)a=i[l],r.o(e,a)&&e[a]&&e[a][0](),e[a]=0;return r.O(d)},o=self.webpackChunkportfoliob=self.webpackChunkportfoliob||[];o.forEach(t.bind(null,0)),o.push=t.bind(null,o.push.bind(o))})(),r.O(void 0,[96],(()=>r(1513))),r.O(void 0,[96],(()=>r(946))),r.O(void 0,[96],(()=>r(4569))),r.O(void 0,[96],(()=>r(4867))),r.O(void 0,[96],(()=>r(5063)));var n=r.O(void 0,[96],(()=>r(4460)));n=r.O(n)})();