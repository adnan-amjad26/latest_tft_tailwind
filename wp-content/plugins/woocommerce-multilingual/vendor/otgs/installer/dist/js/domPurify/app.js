!function(e){var t={};function r(n){if(t[n])return t[n].exports;var o=t[n]={i:n,l:!1,exports:{}};return e[n].call(o.exports,o,o.exports,r),o.l=!0,o.exports}r.m=e,r.c=t,r.d=function(e,t,n){r.o(e,t)||Object.defineProperty(e,t,{configurable:!1,enumerable:!0,get:n})},r.r=function(e){Object.defineProperty(e,"__esModule",{value:!0})},r.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return r.d(t,"a",t),t},r.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},r.p="",r(r.s=3)}([function(e,t,r){
/*! @license DOMPurify | (c) Cure53 and other contributors | Released under the Apache license 2.0 and Mozilla Public License 2.0 | github.com/cure53/DOMPurify/blob/2.2.2/LICENSE */
e.exports=function(){"use strict";var e=Object.hasOwnProperty,t=Object.setPrototypeOf,r=Object.isFrozen,n=Object.getPrototypeOf,o=Object.getOwnPropertyDescriptor,i=Object.freeze,a=Object.seal,s=Object.create,l="undefined"!=typeof Reflect&&Reflect,u=l.apply,c=l.construct;u||(u=function(e,t,r){return e.apply(t,r)}),i||(i=function(e){return e}),a||(a=function(e){return e}),c||(c=function(e,t){return new(Function.prototype.bind.apply(e,[null].concat(function(e){if(Array.isArray(e)){for(var t=0,r=Array(e.length);t<e.length;t++)r[t]=e[t];return r}return Array.from(e)}(t))))});var f=T(Array.prototype.forEach),d=T(Array.prototype.pop),p=T(Array.prototype.push),m=T(String.prototype.toLowerCase),h=T(String.prototype.match),y=T(String.prototype.replace),b=T(String.prototype.indexOf),g=T(String.prototype.trim),v=T(RegExp.prototype.test),w=function(e){return function(){for(var t=arguments.length,r=Array(t),n=0;n<t;n++)r[n]=arguments[n];return c(e,r)}}(TypeError);function T(e){return function(t){for(var r=arguments.length,n=Array(r>1?r-1:0),o=1;o<r;o++)n[o-1]=arguments[o];return u(e,t,n)}}function A(e,n){t&&t(e,null);for(var o=n.length;o--;){var i=n[o];if("string"==typeof i){var a=m(i);a!==i&&(r(n)||(n[o]=a),i=a)}e[i]=!0}return e}function x(t){var r=s(null),n=void 0;for(n in t)u(e,t,[n])&&(r[n]=t[n]);return r}function _(e,t){for(;null!==e;){var r=o(e,t);if(r){if(r.get)return T(r.get);if("function"==typeof r.value)return T(r.value)}e=n(e)}return null}var S=i(["a","abbr","acronym","address","area","article","aside","audio","b","bdi","bdo","big","blink","blockquote","body","br","button","canvas","caption","center","cite","code","col","colgroup","content","data","datalist","dd","decorator","del","details","dfn","dialog","dir","div","dl","dt","element","em","fieldset","figcaption","figure","font","footer","form","h1","h2","h3","h4","h5","h6","head","header","hgroup","hr","html","i","img","input","ins","kbd","label","legend","li","main","map","mark","marquee","menu","menuitem","meter","nav","nobr","ol","optgroup","option","output","p","picture","pre","progress","q","rp","rt","ruby","s","samp","section","select","shadow","small","source","spacer","span","strike","strong","style","sub","summary","sup","table","tbody","td","template","textarea","tfoot","th","thead","time","tr","track","tt","u","ul","var","video","wbr"]),E=i(["svg","a","altglyph","altglyphdef","altglyphitem","animatecolor","animatemotion","animatetransform","circle","clippath","defs","desc","ellipse","filter","font","g","glyph","glyphref","hkern","image","line","lineargradient","marker","mask","metadata","mpath","path","pattern","polygon","polyline","radialgradient","rect","stop","style","switch","symbol","text","textpath","title","tref","tspan","view","vkern"]),O=i(["feBlend","feColorMatrix","feComponentTransfer","feComposite","feConvolveMatrix","feDiffuseLighting","feDisplacementMap","feDistantLight","feFlood","feFuncA","feFuncB","feFuncG","feFuncR","feGaussianBlur","feMerge","feMergeNode","feMorphology","feOffset","fePointLight","feSpecularLighting","feSpotLight","feTile","feTurbulence"]),R=i(["animate","color-profile","cursor","discard","fedropshadow","feimage","font-face","font-face-format","font-face-name","font-face-src","font-face-uri","foreignobject","hatch","hatchpath","mesh","meshgradient","meshpatch","meshrow","missing-glyph","script","set","solidcolor","unknown","use"]),D=i(["math","menclose","merror","mfenced","mfrac","mglyph","mi","mlabeledtr","mmultiscripts","mn","mo","mover","mpadded","mphantom","mroot","mrow","ms","mspace","msqrt","mstyle","msub","msup","msubsup","mtable","mtd","mtext","mtr","munder","munderover"]),k=i(["maction","maligngroup","malignmark","mlongdiv","mscarries","mscarry","msgroup","mstack","msline","msrow","semantics","annotation","annotation-xml","mprescripts","none"]),L=i(["#text"]),N=i(["accept","action","align","alt","autocapitalize","autocomplete","autopictureinpicture","autoplay","background","bgcolor","border","capture","cellpadding","cellspacing","checked","cite","class","clear","color","cols","colspan","controls","controlslist","coords","crossorigin","datetime","decoding","default","dir","disabled","disablepictureinpicture","disableremoteplayback","download","draggable","enctype","enterkeyhint","face","for","headers","height","hidden","high","href","hreflang","id","inputmode","integrity","ismap","kind","label","lang","list","loading","loop","low","max","maxlength","media","method","min","minlength","multiple","muted","name","noshade","novalidate","nowrap","open","optimum","pattern","placeholder","playsinline","poster","preload","pubdate","radiogroup","readonly","rel","required","rev","reversed","role","rows","rowspan","spellcheck","scope","selected","shape","size","sizes","span","srclang","start","src","srcset","step","style","summary","tabindex","title","translate","type","usemap","valign","value","width","xmlns"]),M=i(["accent-height","accumulate","additive","alignment-baseline","ascent","attributename","attributetype","azimuth","basefrequency","baseline-shift","begin","bias","by","class","clip","clippathunits","clip-path","clip-rule","color","color-interpolation","color-interpolation-filters","color-profile","color-rendering","cx","cy","d","dx","dy","diffuseconstant","direction","display","divisor","dur","edgemode","elevation","end","fill","fill-opacity","fill-rule","filter","filterunits","flood-color","flood-opacity","font-family","font-size","font-size-adjust","font-stretch","font-style","font-variant","font-weight","fx","fy","g1","g2","glyph-name","glyphref","gradientunits","gradienttransform","height","href","id","image-rendering","in","in2","k","k1","k2","k3","k4","kerning","keypoints","keysplines","keytimes","lang","lengthadjust","letter-spacing","kernelmatrix","kernelunitlength","lighting-color","local","marker-end","marker-mid","marker-start","markerheight","markerunits","markerwidth","maskcontentunits","maskunits","max","mask","media","method","mode","min","name","numoctaves","offset","operator","opacity","order","orient","orientation","origin","overflow","paint-order","path","pathlength","patterncontentunits","patterntransform","patternunits","points","preservealpha","preserveaspectratio","primitiveunits","r","rx","ry","radius","refx","refy","repeatcount","repeatdur","restart","result","rotate","scale","seed","shape-rendering","specularconstant","specularexponent","spreadmethod","startoffset","stddeviation","stitchtiles","stop-color","stop-opacity","stroke-dasharray","stroke-dashoffset","stroke-linecap","stroke-linejoin","stroke-miterlimit","stroke-opacity","stroke","stroke-width","style","surfacescale","systemlanguage","tabindex","targetx","targety","transform","text-anchor","text-decoration","text-rendering","textlength","type","u1","u2","unicode","values","viewbox","visibility","version","vert-adv-y","vert-origin-x","vert-origin-y","width","word-spacing","wrap","writing-mode","xchannelselector","ychannelselector","x","x1","x2","xmlns","y","y1","y2","z","zoomandpan"]),B=i(["accent","accentunder","align","bevelled","close","columnsalign","columnlines","columnspan","denomalign","depth","dir","display","displaystyle","encoding","fence","frame","height","href","id","largeop","length","linethickness","lspace","lquote","mathbackground","mathcolor","mathsize","mathvariant","maxsize","minsize","movablelimits","notation","numalign","open","rowalign","rowlines","rowspacing","rowspan","rspace","rquote","scriptlevel","scriptminsize","scriptsizemultiplier","selection","separator","separators","stretchy","subscriptshift","supscriptshift","symmetric","voffset","width","xmlns"]),U=i(["xlink:href","xml:id","xlink:title","xml:space","xmlns:xlink"]),F=a(/\{\{[\s\S]*|[\s\S]*\}\}/gm),I=a(/<%[\s\S]*|[\s\S]*%>/gm),P=a(/^data-[\-\w.\u00B7-\uFFFF]/),C=a(/^aria-[\-\w]+$/),j=a(/^(?:(?:(?:f|ht)tps?|mailto|tel|callto|cid|xmpp):|[^a-z]|[a-z+.\-]+(?:[^a-z+.\-:]|$))/i),H=a(/^(?:\w+script|data):/i),z=a(/[\u0000-\u0020\u00A0\u1680\u180E\u2000-\u2029\u205F\u3000]/g),G="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e};function q(e){if(Array.isArray(e)){for(var t=0,r=Array(e.length);t<e.length;t++)r[t]=e[t];return r}return Array.from(e)}var W=function(){return"undefined"==typeof window?null:window},V=function(e,t){if("object"!==(void 0===e?"undefined":G(e))||"function"!=typeof e.createPolicy)return null;var r=null;t.currentScript&&t.currentScript.hasAttribute("data-tt-policy-suffix")&&(r=t.currentScript.getAttribute("data-tt-policy-suffix"));var n="dompurify"+(r?"#"+r:"");try{return e.createPolicy(n,{createHTML:function(e){return e}})}catch(e){return console.warn("TrustedTypes policy "+n+" could not be created."),null}};return function e(){var t=arguments.length>0&&void 0!==arguments[0]?arguments[0]:W(),r=function(t){return e(t)};if(r.version="2.2.6",r.removed=[],!t||!t.document||9!==t.document.nodeType)return r.isSupported=!1,r;var n=t.document,o=t.document,a=t.DocumentFragment,s=t.HTMLTemplateElement,l=t.Node,u=t.Element,c=t.NodeFilter,T=t.NamedNodeMap,K=void 0===T?t.NamedNodeMap||t.MozNamedAttrMap:T,X=t.Text,Y=t.Comment,$=t.DOMParser,J=t.trustedTypes,Z=u.prototype,Q=_(Z,"cloneNode"),ee=_(Z,"nextSibling"),te=_(Z,"childNodes"),re=_(Z,"parentNode");if("function"==typeof s){var ne=o.createElement("template");ne.content&&ne.content.ownerDocument&&(o=ne.content.ownerDocument)}var oe=V(J,n),ie=oe&&Ie?oe.createHTML(""):"",ae=o,se=ae.implementation,le=ae.createNodeIterator,ue=ae.getElementsByTagName,ce=ae.createDocumentFragment,fe=n.importNode,de={};try{de=x(o).documentMode?o.documentMode:{}}catch(e){}var pe={};r.isSupported=se&&void 0!==se.createHTMLDocument&&9!==de;var me=F,he=I,ye=P,be=C,ge=H,ve=z,we=j,Te=null,Ae=A({},[].concat(q(S),q(E),q(O),q(D),q(L))),xe=null,_e=A({},[].concat(q(N),q(M),q(B),q(U))),Se=null,Ee=null,Oe=!0,Re=!0,De=!1,ke=!1,Le=!1,Ne=!1,Me=!1,Be=!1,Ue=!1,Fe=!0,Ie=!1,Pe=!0,Ce=!0,je=!1,He={},ze=A({},["annotation-xml","audio","colgroup","desc","foreignobject","head","iframe","math","mi","mn","mo","ms","mtext","noembed","noframes","noscript","plaintext","script","style","svg","template","thead","title","video","xmp"]),Ge=null,qe=A({},["audio","video","img","source","image","track"]),We=null,Ve=A({},["alt","class","for","id","label","name","pattern","placeholder","summary","title","value","style","xmlns"]),Ke=null,Xe=o.createElement("form"),Ye=function(e){Ke&&Ke===e||(e&&"object"===(void 0===e?"undefined":G(e))||(e={}),e=x(e),Te="ALLOWED_TAGS"in e?A({},e.ALLOWED_TAGS):Ae,xe="ALLOWED_ATTR"in e?A({},e.ALLOWED_ATTR):_e,We="ADD_URI_SAFE_ATTR"in e?A(x(Ve),e.ADD_URI_SAFE_ATTR):Ve,Ge="ADD_DATA_URI_TAGS"in e?A(x(qe),e.ADD_DATA_URI_TAGS):qe,Se="FORBID_TAGS"in e?A({},e.FORBID_TAGS):{},Ee="FORBID_ATTR"in e?A({},e.FORBID_ATTR):{},He="USE_PROFILES"in e&&e.USE_PROFILES,Oe=!1!==e.ALLOW_ARIA_ATTR,Re=!1!==e.ALLOW_DATA_ATTR,De=e.ALLOW_UNKNOWN_PROTOCOLS||!1,ke=e.SAFE_FOR_TEMPLATES||!1,Le=e.WHOLE_DOCUMENT||!1,Be=e.RETURN_DOM||!1,Ue=e.RETURN_DOM_FRAGMENT||!1,Fe=!1!==e.RETURN_DOM_IMPORT,Ie=e.RETURN_TRUSTED_TYPE||!1,Me=e.FORCE_BODY||!1,Pe=!1!==e.SANITIZE_DOM,Ce=!1!==e.KEEP_CONTENT,je=e.IN_PLACE||!1,we=e.ALLOWED_URI_REGEXP||we,ke&&(Re=!1),Ue&&(Be=!0),He&&(Te=A({},[].concat(q(L))),xe=[],!0===He.html&&(A(Te,S),A(xe,N)),!0===He.svg&&(A(Te,E),A(xe,M),A(xe,U)),!0===He.svgFilters&&(A(Te,O),A(xe,M),A(xe,U)),!0===He.mathMl&&(A(Te,D),A(xe,B),A(xe,U))),e.ADD_TAGS&&(Te===Ae&&(Te=x(Te)),A(Te,e.ADD_TAGS)),e.ADD_ATTR&&(xe===_e&&(xe=x(xe)),A(xe,e.ADD_ATTR)),e.ADD_URI_SAFE_ATTR&&A(We,e.ADD_URI_SAFE_ATTR),Ce&&(Te["#text"]=!0),Le&&A(Te,["html","head","body"]),Te.table&&(A(Te,["tbody"]),delete Se.tbody),i&&i(e),Ke=e)},$e=A({},["mi","mo","mn","ms","mtext"]),Je=A({},["foreignobject","desc","title","annotation-xml"]),Ze=A({},E);A(Ze,O),A(Ze,R);var Qe=A({},D);A(Qe,k);var et="http://www.w3.org/1998/Math/MathML",tt="http://www.w3.org/2000/svg",rt="http://www.w3.org/1999/xhtml",nt=function(e){p(r.removed,{element:e});try{e.parentNode.removeChild(e)}catch(t){try{e.outerHTML=ie}catch(t){e.remove()}}},ot=function(e,t){try{p(r.removed,{attribute:t.getAttributeNode(e),from:t})}catch(e){p(r.removed,{attribute:null,from:t})}t.removeAttribute(e)},it=function(e){var t=void 0,r=void 0;if(Me)e="<remove></remove>"+e;else{var n=h(e,/^[\r\n\t ]+/);r=n&&n[0]}var i=oe?oe.createHTML(e):e;try{t=(new $).parseFromString(i,"text/html")}catch(e){}if(!t||!t.documentElement){var a=t=se.createHTMLDocument(""),s=a.body;s.parentNode.removeChild(s.parentNode.firstElementChild),s.outerHTML=i}return e&&r&&t.body.insertBefore(o.createTextNode(r),t.body.childNodes[0]||null),ue.call(t,Le?"html":"body")[0]},at=function(e){return le.call(e.ownerDocument||e,e,c.SHOW_ELEMENT|c.SHOW_COMMENT|c.SHOW_TEXT,function(){return c.FILTER_ACCEPT},!1)},st=function(e){return"object"===(void 0===l?"undefined":G(l))?e instanceof l:e&&"object"===(void 0===e?"undefined":G(e))&&"number"==typeof e.nodeType&&"string"==typeof e.nodeName},lt=function(e,t,n){pe[e]&&f(pe[e],function(e){e.call(r,t,n,Ke)})},ut=function(e){var t=void 0;if(lt("beforeSanitizeElements",e,null),function(e){return!(e instanceof X||e instanceof Y)&&!("string"==typeof e.nodeName&&"string"==typeof e.textContent&&"function"==typeof e.removeChild&&e.attributes instanceof K&&"function"==typeof e.removeAttribute&&"function"==typeof e.setAttribute&&"string"==typeof e.namespaceURI&&"function"==typeof e.insertBefore)}(e))return nt(e),!0;if(h(e.nodeName,/[\u0080-\uFFFF]/))return nt(e),!0;var n=m(e.nodeName);if(lt("uponSanitizeElement",e,{tagName:n,allowedTags:Te}),!st(e.firstElementChild)&&(!st(e.content)||!st(e.content.firstElementChild))&&v(/<[/\w]/g,e.innerHTML)&&v(/<[/\w]/g,e.textContent))return nt(e),!0;if(!Te[n]||Se[n]){if(Ce&&!ze[n])for(var o=re(e),i=te(e),a=i.length,s=a-1;s>=0;--s)o.insertBefore(Q(i[s],!0),ee(e));return nt(e),!0}return e instanceof u&&!function(e){var t=re(e);t&&t.tagName||(t={namespaceURI:rt,tagName:"template"});var r=m(e.tagName),n=m(t.tagName);if(e.namespaceURI===tt)return t.namespaceURI===rt?"svg"===r:t.namespaceURI===et?"svg"===r&&("annotation-xml"===n||$e[n]):Boolean(Ze[r]);if(e.namespaceURI===et)return t.namespaceURI===rt?"math"===r:t.namespaceURI===tt?"math"===r&&Je[n]:Boolean(Qe[r]);if(e.namespaceURI===rt){if(t.namespaceURI===tt&&!Je[n])return!1;if(t.namespaceURI===et&&!$e[n])return!1;var o=A({},["title","style","font","a","script"]);return!Qe[r]&&(o[r]||!Ze[r])}return!1}(e)?(nt(e),!0):"noscript"!==n&&"noembed"!==n||!v(/<\/no(script|embed)/i,e.innerHTML)?(ke&&3===e.nodeType&&(t=e.textContent,t=y(t,me," "),t=y(t,he," "),e.textContent!==t&&(p(r.removed,{element:e.cloneNode()}),e.textContent=t)),lt("afterSanitizeElements",e,null),!1):(nt(e),!0)},ct=function(e,t,r){if(Pe&&("id"===t||"name"===t)&&(r in o||r in Xe))return!1;if(Re&&v(ye,t));else if(Oe&&v(be,t));else{if(!xe[t]||Ee[t])return!1;if(We[t]);else if(v(we,y(r,ve,"")));else if("src"!==t&&"xlink:href"!==t&&"href"!==t||"script"===e||0!==b(r,"data:")||!Ge[e])if(De&&!v(ge,y(r,ve,"")));else if(r)return!1}return!0},ft=function(e){var t=void 0,n=void 0,o=void 0,i=void 0;lt("beforeSanitizeAttributes",e,null);var a=e.attributes;if(a){var s={attrName:"",attrValue:"",keepAttr:!0,allowedAttributes:xe};for(i=a.length;i--;){var l=t=a[i],u=l.name,c=l.namespaceURI;if(n=g(t.value),o=m(u),s.attrName=o,s.attrValue=n,s.keepAttr=!0,s.forceKeepAttr=void 0,lt("uponSanitizeAttribute",e,s),n=s.attrValue,!s.forceKeepAttr&&(ot(u,e),s.keepAttr))if(v(/\/>/i,n))ot(u,e);else{ke&&(n=y(n,me," "),n=y(n,he," "));var f=e.nodeName.toLowerCase();if(ct(f,o,n))try{c?e.setAttributeNS(c,u,n):e.setAttribute(u,n),d(r.removed)}catch(e){}}}lt("afterSanitizeAttributes",e,null)}},dt=function e(t){var r=void 0,n=at(t);for(lt("beforeSanitizeShadowDOM",t,null);r=n.nextNode();)lt("uponSanitizeShadowNode",r,null),ut(r)||(r.content instanceof a&&e(r.content),ft(r));lt("afterSanitizeShadowDOM",t,null)};return r.sanitize=function(e,o){var i=void 0,s=void 0,u=void 0,c=void 0,f=void 0;if(e||(e="\x3c!--\x3e"),"string"!=typeof e&&!st(e)){if("function"!=typeof e.toString)throw w("toString is not a function");if("string"!=typeof(e=e.toString()))throw w("dirty is not a string, aborting")}if(!r.isSupported){if("object"===G(t.toStaticHTML)||"function"==typeof t.toStaticHTML){if("string"==typeof e)return t.toStaticHTML(e);if(st(e))return t.toStaticHTML(e.outerHTML)}return e}if(Ne||Ye(o),r.removed=[],"string"==typeof e&&(je=!1),je);else if(e instanceof l)i=it("\x3c!----\x3e"),1===(s=i.ownerDocument.importNode(e,!0)).nodeType&&"BODY"===s.nodeName?i=s:"HTML"===s.nodeName?i=s:i.appendChild(s);else{if(!Be&&!ke&&!Le&&-1===e.indexOf("<"))return oe&&Ie?oe.createHTML(e):e;if(!(i=it(e)))return Be?null:ie}i&&Me&&nt(i.firstChild);for(var d=at(je?e:i);u=d.nextNode();)3===u.nodeType&&u===c||ut(u)||(u.content instanceof a&&dt(u.content),ft(u),c=u);if(c=null,je)return e;if(Be){if(Ue)for(f=ce.call(i.ownerDocument);i.firstChild;)f.appendChild(i.firstChild);else f=i;return Fe&&(f=fe.call(n,f,!0)),f}var p=Le?i.outerHTML:i.innerHTML;return ke&&(p=y(p,me," "),p=y(p,he," ")),oe&&Ie?oe.createHTML(p):p},r.setConfig=function(e){Ye(e),Ne=!0},r.clearConfig=function(){Ke=null,Ne=!1},r.isValidAttribute=function(e,t,r){Ke||Ye({});var n=m(e),o=m(t);return ct(n,o,r)},r.addHook=function(e,t){"function"==typeof t&&(pe[e]=pe[e]||[],p(pe[e],t))},r.removeHook=function(e){pe[e]&&d(pe[e])},r.removeHooks=function(e){pe[e]&&(pe[e]=[])},r.removeAllHooks=function(){pe={}},r}()}()},function(e,t,r){"use strict";var n=function(e){return e&&e.__esModule?e:{default:e}}(r(0));window.OTGS=window.OTGS||{},window.OTGS.purify=n.default.sanitize},function(e,t){!function(e){"use strict";if(!e.fetch){var t={searchParams:"URLSearchParams"in e,iterable:"Symbol"in e&&"iterator"in Symbol,blob:"FileReader"in e&&"Blob"in e&&function(){try{return new Blob,!0}catch(e){return!1}}(),formData:"FormData"in e,arrayBuffer:"ArrayBuffer"in e};if(t.arrayBuffer)var r=["[object Int8Array]","[object Uint8Array]","[object Uint8ClampedArray]","[object Int16Array]","[object Uint16Array]","[object Int32Array]","[object Uint32Array]","[object Float32Array]","[object Float64Array]"],n=function(e){return e&&DataView.prototype.isPrototypeOf(e)},o=ArrayBuffer.isView||function(e){return e&&r.indexOf(Object.prototype.toString.call(e))>-1};c.prototype.append=function(e,t){e=s(e),t=l(t);var r=this.map[e];this.map[e]=r?r+","+t:t},c.prototype.delete=function(e){delete this.map[s(e)]},c.prototype.get=function(e){return e=s(e),this.has(e)?this.map[e]:null},c.prototype.has=function(e){return this.map.hasOwnProperty(s(e))},c.prototype.set=function(e,t){this.map[s(e)]=l(t)},c.prototype.forEach=function(e,t){for(var r in this.map)this.map.hasOwnProperty(r)&&e.call(t,this.map[r],r,this)},c.prototype.keys=function(){var e=[];return this.forEach(function(t,r){e.push(r)}),u(e)},c.prototype.values=function(){var e=[];return this.forEach(function(t){e.push(t)}),u(e)},c.prototype.entries=function(){var e=[];return this.forEach(function(t,r){e.push([r,t])}),u(e)},t.iterable&&(c.prototype[Symbol.iterator]=c.prototype.entries);var i=["DELETE","GET","HEAD","OPTIONS","POST","PUT"];y.prototype.clone=function(){return new y(this,{body:this._bodyInit})},h.call(y.prototype),h.call(g.prototype),g.prototype.clone=function(){return new g(this._bodyInit,{status:this.status,statusText:this.statusText,headers:new c(this.headers),url:this.url})},g.error=function(){var e=new g(null,{status:0,statusText:""});return e.type="error",e};var a=[301,302,303,307,308];g.redirect=function(e,t){if(-1===a.indexOf(t))throw new RangeError("Invalid status code");return new g(null,{status:t,headers:{location:e}})},e.Headers=c,e.Request=y,e.Response=g,e.fetch=function(e,r){return new Promise(function(n,o){var i=new y(e,r),a=new XMLHttpRequest;a.onload=function(){var e={status:a.status,statusText:a.statusText,headers:function(e){var t=new c;return e.split(/\r?\n/).forEach(function(e){var r=e.split(":"),n=r.shift().trim();if(n){var o=r.join(":").trim();t.append(n,o)}}),t}(a.getAllResponseHeaders()||"")};e.url="responseURL"in a?a.responseURL:e.headers.get("X-Request-URL");var t="response"in a?a.response:a.responseText;n(new g(t,e))},a.onerror=function(){o(new TypeError("Network request failed"))},a.ontimeout=function(){o(new TypeError("Network request failed"))},a.open(i.method,i.url,!0),"include"===i.credentials&&(a.withCredentials=!0),"responseType"in a&&t.blob&&(a.responseType="blob"),i.headers.forEach(function(e,t){a.setRequestHeader(t,e)}),a.send(void 0===i._bodyInit?null:i._bodyInit)})},e.fetch.polyfill=!0}function s(e){if("string"!=typeof e&&(e=String(e)),/[^a-z0-9\-#$%&'*+.\^_`|~]/i.test(e))throw new TypeError("Invalid character in header field name");return e.toLowerCase()}function l(e){return"string"!=typeof e&&(e=String(e)),e}function u(e){var r={next:function(){var t=e.shift();return{done:void 0===t,value:t}}};return t.iterable&&(r[Symbol.iterator]=function(){return r}),r}function c(e){this.map={},e instanceof c?e.forEach(function(e,t){this.append(t,e)},this):Array.isArray(e)?e.forEach(function(e){this.append(e[0],e[1])},this):e&&Object.getOwnPropertyNames(e).forEach(function(t){this.append(t,e[t])},this)}function f(e){if(e.bodyUsed)return Promise.reject(new TypeError("Already read"));e.bodyUsed=!0}function d(e){return new Promise(function(t,r){e.onload=function(){t(e.result)},e.onerror=function(){r(e.error)}})}function p(e){var t=new FileReader,r=d(t);return t.readAsArrayBuffer(e),r}function m(e){if(e.slice)return e.slice(0);var t=new Uint8Array(e.byteLength);return t.set(new Uint8Array(e)),t.buffer}function h(){return this.bodyUsed=!1,this._initBody=function(e){if(this._bodyInit=e,e)if("string"==typeof e)this._bodyText=e;else if(t.blob&&Blob.prototype.isPrototypeOf(e))this._bodyBlob=e;else if(t.formData&&FormData.prototype.isPrototypeOf(e))this._bodyFormData=e;else if(t.searchParams&&URLSearchParams.prototype.isPrototypeOf(e))this._bodyText=e.toString();else if(t.arrayBuffer&&t.blob&&n(e))this._bodyArrayBuffer=m(e.buffer),this._bodyInit=new Blob([this._bodyArrayBuffer]);else{if(!t.arrayBuffer||!ArrayBuffer.prototype.isPrototypeOf(e)&&!o(e))throw new Error("unsupported BodyInit type");this._bodyArrayBuffer=m(e)}else this._bodyText="";this.headers.get("content-type")||("string"==typeof e?this.headers.set("content-type","text/plain;charset=UTF-8"):this._bodyBlob&&this._bodyBlob.type?this.headers.set("content-type",this._bodyBlob.type):t.searchParams&&URLSearchParams.prototype.isPrototypeOf(e)&&this.headers.set("content-type","application/x-www-form-urlencoded;charset=UTF-8"))},t.blob&&(this.blob=function(){var e=f(this);if(e)return e;if(this._bodyBlob)return Promise.resolve(this._bodyBlob);if(this._bodyArrayBuffer)return Promise.resolve(new Blob([this._bodyArrayBuffer]));if(this._bodyFormData)throw new Error("could not read FormData body as blob");return Promise.resolve(new Blob([this._bodyText]))},this.arrayBuffer=function(){return this._bodyArrayBuffer?f(this)||Promise.resolve(this._bodyArrayBuffer):this.blob().then(p)}),this.text=function(){var e=f(this);if(e)return e;if(this._bodyBlob)return function(e){var t=new FileReader,r=d(t);return t.readAsText(e),r}(this._bodyBlob);if(this._bodyArrayBuffer)return Promise.resolve(function(e){for(var t=new Uint8Array(e),r=new Array(t.length),n=0;n<t.length;n++)r[n]=String.fromCharCode(t[n]);return r.join("")}(this._bodyArrayBuffer));if(this._bodyFormData)throw new Error("could not read FormData body as text");return Promise.resolve(this._bodyText)},t.formData&&(this.formData=function(){return this.text().then(b)}),this.json=function(){return this.text().then(JSON.parse)},this}function y(e,t){var r=(t=t||{}).body;if(e instanceof y){if(e.bodyUsed)throw new TypeError("Already read");this.url=e.url,this.credentials=e.credentials,t.headers||(this.headers=new c(e.headers)),this.method=e.method,this.mode=e.mode,r||null==e._bodyInit||(r=e._bodyInit,e.bodyUsed=!0)}else this.url=String(e);if(this.credentials=t.credentials||this.credentials||"omit",!t.headers&&this.headers||(this.headers=new c(t.headers)),this.method=function(e){var t=e.toUpperCase();return i.indexOf(t)>-1?t:e}(t.method||this.method||"GET"),this.mode=t.mode||this.mode||null,this.referrer=null,("GET"===this.method||"HEAD"===this.method)&&r)throw new TypeError("Body not allowed for GET or HEAD requests");this._initBody(r)}function b(e){var t=new FormData;return e.trim().split("&").forEach(function(e){if(e){var r=e.split("="),n=r.shift().replace(/\+/g," "),o=r.join("=").replace(/\+/g," ");t.append(decodeURIComponent(n),decodeURIComponent(o))}}),t}function g(e,t){t||(t={}),this.type="default",this.status="status"in t?t.status:200,this.ok=this.status>=200&&this.status<300,this.statusText="statusText"in t?t.statusText:"OK",this.headers=new c(t.headers),this.url=t.url||"",this._initBody(e)}}("undefined"!=typeof self?self:this)},function(e,t,r){r(2),e.exports=r(1)}]);