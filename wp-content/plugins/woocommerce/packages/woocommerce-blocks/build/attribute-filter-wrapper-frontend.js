(window.webpackWcBlocksJsonp=window.webpackWcBlocksJsonp||[]).push([[14,75],{110:function(e,t,n){"use strict";n.d(t,"a",(function(){return c})),n.d(t,"b",(function(){return o}));var r=n(42);const c=function(){let e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:[],t=arguments.length>1?arguments[1]:void 0,n=arguments.length>2?arguments[2]:void 0,c=arguments.length>3&&void 0!==arguments[3]?arguments[3]:"";const o=e.filter(e=>e.attribute===n.taxonomy),a=o.length?o[0]:null;if(!(a&&a.slug&&Array.isArray(a.slug)&&a.slug.includes(c)))return;const l=a.slug.filter(e=>e!==c),s=e.filter(e=>e.attribute!==n.taxonomy);l.length>0&&(a.slug=l.sort(),s.push(a)),t(Object(r.a)(s).asc("attribute"))},o=function(){let e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:[],t=arguments.length>1?arguments[1]:void 0,n=arguments.length>2?arguments[2]:void 0,c=arguments.length>3&&void 0!==arguments[3]?arguments[3]:[],o=arguments.length>4&&void 0!==arguments[4]?arguments[4]:"in";if(!n||!n.taxonomy)return[];const a=e.filter(e=>e.attribute!==n.taxonomy);return 0===c.length?t(a):(a.push({attribute:n.taxonomy,operator:o,slug:c.map(e=>{let{slug:t}=e;return t}).sort()}),t(Object(r.a)(a).asc("attribute"))),a}},113:function(e,t){},114:function(e,t){},116:function(e,t,n){"use strict";n.d(t,"a",(function(){return o})),n.d(t,"b",(function(){return a}));var r=n(2);n(139),n(5);const c=Object(r.getSetting)("attributes",[]).reduce((e,t)=>{const n=(r=t)&&r.attribute_name?{id:parseInt(r.attribute_id,10),name:r.attribute_name,taxonomy:"pa_"+r.attribute_name,label:r.attribute_label}:null;var r;return n&&n.id&&e.push(n),e},[]),o=e=>{if(e)return c.find(t=>t.id===e)},a=e=>{if(e)return c.find(t=>t.taxonomy===e)}},123:function(e){e.exports=JSON.parse('{"name":"woocommerce/attribute-filter","version":"1.0.0","title":"Filter by Attribute Controls","description":"Enable customers to filter the product grid by selecting one or more attributes, such as color.","category":"woocommerce","keywords":["WooCommerce"],"supports":{"html":false,"color":{"text":true,"background":false},"inserter":false,"lock":false},"attributes":{"className":{"type":"string","default":""},"attributeId":{"type":"number","default":0},"showCounts":{"type":"boolean","default":true},"queryType":{"type":"string","default":"or"},"headingLevel":{"type":"number","default":3},"displayStyle":{"type":"string","default":"list"},"showFilterButton":{"type":"boolean","default":false},"selectType":{"type":"string","default":"multiple"},"isPreview":{"type":"boolean","default":false}},"textdomain":"woocommerce","apiVersion":2,"$schema":"https://schemas.wp.org/trunk/block.json"}')},131:function(e,t){},132:function(e,t,n){"use strict";n.d(t,"a",(function(){return d}));var r=n(0),c=n(82),o=n(22),a=n(92),l=n(42),s=n(26),u=n(30),i=n(54),b=n(24);const d=e=>{let{queryAttribute:t,queryPrices:n,queryStock:d,queryRating:f,queryState:m,productIds:g,isEditor:p=!1}=e,O=Object(b.a)();O+="-collection-data";const[j]=Object(u.a)(O),[y,h]=Object(u.b)("calculate_attribute_counts",[],O),[v,w]=Object(u.b)("calculate_price_range",null,O),[_,E]=Object(u.b)("calculate_stock_status_counts",null,O),[k,S]=Object(u.b)("calculate_rating_counts",null,O),C=Object(s.a)(t||{}),x=Object(s.a)(n),N=Object(s.a)(d),T=Object(s.a)(f);Object(r.useEffect)(()=>{"object"==typeof C&&Object.keys(C).length&&(y.find(e=>Object(o.b)(C,"taxonomy")&&e.taxonomy===C.taxonomy)||h([...y,C]))},[C,y,h]),Object(r.useEffect)(()=>{v!==x&&void 0!==x&&w(x)},[x,w,v]),Object(r.useEffect)(()=>{_!==N&&void 0!==N&&E(N)},[N,E,_]),Object(r.useEffect)(()=>{k!==T&&void 0!==T&&S(T)},[T,S,k]);const[A,L]=Object(r.useState)(p),[F]=Object(c.a)(A,200);A||L(!0);const R=Object(r.useMemo)(()=>(e=>{const t=e;return Array.isArray(e.calculate_attribute_counts)&&(t.calculate_attribute_counts=Object(l.a)(e.calculate_attribute_counts.map(e=>{let{taxonomy:t,queryType:n}=e;return{taxonomy:t,query_type:n}})).asc(["taxonomy","query_type"])),t})(j),[j]);return Object(i.a)({namespace:"/wc/store/v1",resourceName:"products/collection-data",query:{...m,page:void 0,per_page:void 0,orderby:void 0,order:void 0,...!Object(a.a)(g)&&{include:g},...R},shouldSelect:F})}},139:function(e,t,n){"use strict";n.d(t,"b",(function(){return c})),n.d(t,"c",(function(){return o})),n.d(t,"a",(function(){return l}));var r=n(22);const c=e=>Object(r.b)(e,"count")&&Object(r.b)(e,"description")&&Object(r.b)(e,"id")&&Object(r.b)(e,"name")&&Object(r.b)(e,"parent")&&Object(r.b)(e,"slug")&&"number"==typeof e.count&&"string"==typeof e.description&&"number"==typeof e.id&&"string"==typeof e.name&&"number"==typeof e.parent&&"string"==typeof e.slug,o=e=>Array.isArray(e)&&e.every(c),a=e=>Object(r.b)(e,"attribute")&&Object(r.b)(e,"operator")&&Object(r.b)(e,"slug")&&"string"==typeof e.attribute&&"string"==typeof e.operator&&Array.isArray(e.slug)&&e.slug.every(e=>"string"==typeof e),l=e=>Array.isArray(e)&&e.every(a)},155:function(e,t,n){"use strict";var r=n(0),c=n(1),o=n(26),a=n(55),l=n(30),s=n(54),u=n(132),i=n(56),b=n(62),d=n(63),f=n(14),m=n.n(f),g=n(21),p=n(2),O=n(15),j=n(72),y=n(27),h=n(22),v=n(139),w=n(79),_=n(149),E=n(68),k=n(80),S=n(61),C=n(4),x=n.n(C),N=n(116),T=n(110);const A=[{value:"preview-1",formattedValue:"preview-1",name:"Blue",label:Object(r.createElement)(i.a,{name:"Blue",count:3}),textLabel:"Blue (3)"},{value:"preview-2",formattedValue:"preview-2",name:"Green",label:Object(r.createElement)(i.a,{name:"Green",count:3}),textLabel:"Green (3)"},{value:"preview-3",formattedValue:"preview-3",name:"Red",label:Object(r.createElement)(i.a,{name:"Red",count:2}),textLabel:"Red (2)"}],L={count:0,has_archives:!0,id:0,label:"Preview",name:"preview",order:"menu_order",parent:0,taxonomy:"preview",type:""};n(221);var F=n(52),R=n(81),q=e=>{let{isLoading:t=!1,options:n,checked:c,onChange:o}=e;return t?Object(r.createElement)(r.Fragment,null,Object(r.createElement)("span",{className:"is-loading"}),Object(r.createElement)("span",{className:"is-loading"})):Object(r.createElement)(R.a,{className:"wc-block-attribute-filter-list",options:n,checked:c,onChange:o,isLoading:t,isDisabled:t})},I=n(44);t.a=e=>{let{attributes:t,isEditor:n=!1,getNotice:f=(()=>null)}=e;const C=Object(p.getSettingWithCoercion)("has_filterable_products",!1,j.a),R=Object(p.getSettingWithCoercion)("is_rendering_php_template",!1,j.a),Q=Object(p.getSettingWithCoercion)("page_url",window.location.href,y.a),V=n?[]:Object(p.getSettingWithCoercion)("product_ids",[],Array.isArray),[B,M]=Object(r.useState)(!1),P=t.isPreview&&!t.attributeId?L:Object(N.a)(t.attributeId),$=Object(r.useMemo)(()=>Object(F.e)(P),[P]),[D,W]=Object(r.useState)($),[Y,U]=Object(r.useState)(Object(F.d)()),[z,K]=Object(r.useState)(t.isPreview&&!t.attributeId?A:[]),[J]=Object(l.a)(),[G,H]=Object(l.b)("attributes",[]),{results:Z,isLoading:X}=Object(s.a)({namespace:"/wc/store/v1",resourceName:"products/attributes/terms",resourceValues:[(null==P?void 0:P.id)||0],shouldSelect:t.attributeId>0}),{results:ee,isLoading:te}=Object(u.a)({queryAttribute:{taxonomy:(null==P?void 0:P.taxonomy)||"",queryType:t.queryType},queryState:{...J},productIds:V,isEditor:n}),ne=Object(r.useCallback)(e=>Object(h.b)(ee,"attribute_counts")&&Array.isArray(ee.attribute_counts)?ee.attribute_counts.find(t=>{let{term:n}=t;return n===e}):null,[ee]);Object(r.useEffect)(()=>{if(X||te)return;if(!Array.isArray(Z))return;const e=Z.map(e=>{const n=ne(e.id);if(!(n||D.includes(e.slug)||(c=e.slug,null!=J&&J.attributes&&J.attributes.some(e=>{let{attribute:t,slug:n=[]}=e;return t===(null==P?void 0:P.taxonomy)&&n.includes(c)}))))return null;var c;const o=n?n.count:0;return{formattedValue:Object(F.c)(e.slug),value:e.slug,name:Object(g.decodeEntities)(e.name),label:Object(r.createElement)(i.a,{name:Object(g.decodeEntities)(e.name),count:t.showCounts?o:null}),textLabel:t.showCounts?`${Object(g.decodeEntities)(e.name)} (${o})`:Object(g.decodeEntities)(e.name)}}).filter(e=>!!e);K(e),U(Object(F.d)())},[null==P?void 0:P.taxonomy,Z,X,t.showCounts,te,ne,D,J.attributes]);const re=Object(r.useCallback)(e=>Array.isArray(Z)?Z.reduce((t,n)=>(e.includes(n.slug)&&t.push(n),t),[]):[],[Z]),ce=Object(r.useCallback)((function(e){let t=arguments.length>1&&void 0!==arguments[1]&&arguments[1];if(e=e.map(e=>({...e,slug:e.slug.map(e=>decodeURIComponent(e))})),t){if(null==P||!P.taxonomy)return;const t=Object.keys(Object(O.getQueryArgs)(window.location.href)),n=Object(F.h)(P.taxonomy),r=t.reduce((e,t)=>t.includes(E.b+n)||t.includes(E.a+n)?Object(O.removeQueryArgs)(e,t):e,window.location.href),c=Object(F.b)(r,e);Object(E.c)(c)}else{const t=Object(F.b)(Q,e),n=Object(O.getQueryArgs)(window.location.href),r=Object(O.getQueryArgs)(t);Object(F.f)(n,r)||Object(E.c)(t)}}),[Q,null==P?void 0:P.taxonomy]),oe=e=>{const n=Object(T.b)(G,H,P,re(e),"or"===t.queryType?"in":"and");ce(n,0===e.length)},ae=Object(r.useCallback)((function(e){let r=arguments.length>1&&void 0!==arguments[1]&&arguments[1];n||(W(e),!r&&t.showFilterButton||Object(T.b)(G,H,P,re(e),"or"===t.queryType?"in":"and"))}),[n,W,G,H,P,re,t.queryType,t.showFilterButton]),le=Object(r.useMemo)(()=>Object(v.a)(G)?G.filter(e=>{let{attribute:t}=e;return t===(null==P?void 0:P.taxonomy)}).flatMap(e=>{let{slug:t}=e;return t}):[],[G,null==P?void 0:P.taxonomy]),se=Object(o.a)(le),ue=Object(a.a)(se);Object(r.useEffect)(()=>{!ue||m()(ue,se)||m()(D,se)||ae(se)},[D,se,ue,ae]);const ie="single"!==t.selectType,be=Object(r.useCallback)(e=>{const t=D.includes(e);let n;ie?(n=D.filter(t=>t!==e),t||(n.push(e),n.sort())):n=t?[]:[e],ae(n)},[D,ie,ae]);Object(r.useEffect)(()=>{P&&!t.showFilterButton&&(Object(F.a)({currentCheckedFilters:D,hasSetFilterDefaultsFromUrl:B})?ce(G,!0):ce(G,!1))},[B,ce,G,P,D,t.showFilterButton]),Object(r.useEffect)(()=>{if(!B&&!X)return $.length>0?(M(!0),void ae($,!0)):void(R||M(!0))},[P,B,X,ae,$,R]);const de=Object(I.b)();if(!C)return de(!1),null;if(!P)return n?f("noAttributes"):(de(!1),null);if(0===z.length&&!X&&n)return f("noProducts");const fe="h"+t.headingLevel,me=!t.isPreview&&X,ge=!t.isPreview&&te,pe=(me||ge)&&0===z.length;if(!pe&&0===z.length)return de(!1),null;const Oe=ie?!pe&&D.length<z.length:!pe&&0===D.length,je=Object(r.createElement)(fe,{className:"wc-block-attribute-filter__title"},t.heading),ye=pe?Object(r.createElement)(S.a,null,je):je;return de(!0),Object(r.createElement)(r.Fragment,null,!n&&t.heading&&ye,Object(r.createElement)("div",{className:x()("wc-block-attribute-filter","style-"+t.displayStyle)},"dropdown"===t.displayStyle?Object(r.createElement)(r.Fragment,null,Object(r.createElement)(k.a,{key:Y,className:x()({"single-selection":!ie,"is-loading":pe}),style:{borderStyle:"none"},suggestions:z.filter(e=>!D.includes(e.value)).map(e=>e.formattedValue),disabled:pe,placeholder:Object(c.sprintf)(
/* translators: %s attribute name. */
Object(c.__)("Select %s","woocommerce"),P.label),onChange:e=>{!ie&&e.length>1&&(e=[e[e.length-1]]);const t=[e=e.map(e=>{const t=z.find(t=>t.formattedValue===e);return t?t.value:e}),D].reduce((e,t)=>e.filter(e=>!t.includes(e)));if(1===t.length)return be(t[0]);const n=[D,e].reduce((e,t)=>e.filter(e=>!t.includes(e)));1===n.length&&be(n[0])},value:D,displayTransform:e=>{const t=z.find(t=>[t.value,t.formattedValue].includes(e));return t?t.textLabel:e},saveTransform:F.c,messages:{added:Object(c.sprintf)(
/* translators: %s is the attribute label. */
Object(c.__)("%s filter added.","woocommerce"),P.label),removed:Object(c.sprintf)(
/* translators: %s is the attribute label. */
Object(c.__)("%s filter removed.","woocommerce"),P.label),remove:Object(c.sprintf)(
/* translators: %s is the attribute label. */
Object(c.__)("Remove %s filter.","woocommerce"),P.label.toLocaleLowerCase()),__experimentalInvalid:Object(c.sprintf)(
/* translators: %s is the attribute label. */
Object(c.__)("Invalid %s filter.","woocommerce"),P.label.toLocaleLowerCase())}}),Oe&&Object(r.createElement)(w.a,{icon:_.a,size:30})):Object(r.createElement)(q,{options:z,checked:D,onChange:be,isLoading:pe,isDisabled:pe})),Object(r.createElement)("div",{className:"wc-block-attribute-filter__actions"},(D.length>0||n)&&!pe&&Object(r.createElement)(b.a,{onClick:()=>{W([]),U(Object(F.d)()),B&&oe([])},screenReaderLabel:Object(c.__)("Reset attribute filter","woocommerce")}),t.showFilterButton&&Object(r.createElement)(d.a,{className:"wc-block-attribute-filter__button",isLoading:pe,disabled:(()=>{if(me||ge)return!0;const e=Object(F.e)(P);return e.length===D.length&&D.every(t=>e.includes(t))})(),onClick:()=>oe(D)})))}},19:function(e,t,n){"use strict";var r=n(0),c=n(4),o=n.n(c);t.a=e=>{let t,{label:n,screenReaderLabel:c,wrapperElement:a,wrapperProps:l={}}=e;const s=null!=n,u=null!=c;return!s&&u?(t=a||"span",l={...l,className:o()(l.className,"screen-reader-text")},Object(r.createElement)(t,l,c)):(t=a||r.Fragment,s&&u&&n!==c?Object(r.createElement)(t,l,Object(r.createElement)("span",{"aria-hidden":"true"},n),Object(r.createElement)("span",{className:"screen-reader-text"},c)):Object(r.createElement)(t,l,n))}},22:function(e,t,n){"use strict";n.d(t,"a",(function(){return r})),n.d(t,"b",(function(){return c}));const r=e=>!(e=>null===e)(e)&&e instanceof Object&&e.constructor===Object;function c(e,t){return r(e)&&t in e}},221:function(e,t){},24:function(e,t,n){"use strict";n.d(t,"a",(function(){return o}));var r=n(0);const c=Object(r.createContext)("page"),o=()=>Object(r.useContext)(c);c.Provider},26:function(e,t,n){"use strict";n.d(t,"a",(function(){return a}));var r=n(0),c=n(14),o=n.n(c);function a(e){const t=Object(r.useRef)(e);return o()(e,t.current)||(t.current=e),t.current}},27:function(e,t,n){"use strict";n.d(t,"a",(function(){return r}));const r=e=>"string"==typeof e},286:function(e,t,n){"use strict";n.d(t,"a",(function(){return d}));var r=n(4),c=n.n(r),o=n(22),a=n(27);const l=e=>Object(a.a)(e)?JSON.parse(e)||{}:Object(o.a)(e)?e:{};var s=n(284),u=n(130);function i(){let e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:{};const t={};return Object(u.getCSSRules)(e,{selector:""}).forEach(e=>{t[e.key]=e.value}),t}function b(e,t){return e&&t?`has-${Object(s.a)(t)}-${e}`:""}const d=e=>{const t=Object(o.a)(e)?e:{style:{}},n=l(t.style),r=function(e){var t,n,r,a,l,s,u;const{backgroundColor:d,textColor:f,gradient:m,style:g}=e,p=b("background-color",d),O=b("color",f),j=function(e){if(e)return`has-${e}-gradient-background`}(m),y=j||(null==g||null===(t=g.color)||void 0===t?void 0:t.gradient);return{className:c()(O,j,{[p]:!y&&!!p,"has-text-color":f||(null==g||null===(n=g.color)||void 0===n?void 0:n.text),"has-background":d||(null==g||null===(r=g.color)||void 0===r?void 0:r.background)||m||(null==g||null===(a=g.color)||void 0===a?void 0:a.gradient),"has-link-color":Object(o.a)(null==g||null===(l=g.elements)||void 0===l?void 0:l.link)?null==g||null===(s=g.elements)||void 0===s||null===(u=s.link)||void 0===u?void 0:u.color:void 0})||void 0,style:i({color:(null==g?void 0:g.color)||{}})}}({...t,style:n}),s=function(e){var t;const n=(null===(t=e.style)||void 0===t?void 0:t.border)||{};return{className:function(e){var t;const{borderColor:n,style:r}=e,o=n?b("border-color",n):"";return c()({"has-border-color":n||(null==r||null===(t=r.border)||void 0===t?void 0:t.color),borderColorClass:o})}(e)||void 0,style:i({border:n})}}({...t,style:n}),u=function(e){const{style:t}=e;return{className:void 0,style:i({spacing:(null==t?void 0:t.spacing)||{}})}}({...t,style:n}),d=(e=>{const t=l(e.style),n=Object(o.a)(t.typography)?t.typography:{},r=Object(a.a)(n.fontFamily)?n.fontFamily:"";return{className:e.fontFamily?`has-${e.fontFamily}-font-family`:r,style:{fontSize:e.fontSize?`var(--wp--preset--font-size--${e.fontSize})`:n.fontSize,fontStyle:n.fontStyle,fontWeight:n.fontWeight,letterSpacing:n.letterSpacing,lineHeight:n.lineHeight,textDecoration:n.textDecoration,textTransform:n.textTransform}}})(t);return{className:c()(d.className,r.className,s.className,u.className),style:{...d.style,...r.style,...s.style,...u.style}}}},30:function(e,t,n){"use strict";n.d(t,"a",(function(){return b})),n.d(t,"b",(function(){return d})),n.d(t,"c",(function(){return f}));var r=n(3),c=n(5),o=n(0),a=n(14),l=n.n(a),s=n(26),u=n(55),i=n(24);const b=e=>{const t=Object(i.a)();e=e||t;const n=Object(c.useSelect)(t=>t(r.QUERY_STATE_STORE_KEY).getValueForQueryContext(e,void 0),[e]),{setValueForQueryContext:a}=Object(c.useDispatch)(r.QUERY_STATE_STORE_KEY);return[n,Object(o.useCallback)(t=>{a(e,t)},[e,a])]},d=(e,t,n)=>{const a=Object(i.a)();n=n||a;const l=Object(c.useSelect)(c=>c(r.QUERY_STATE_STORE_KEY).getValueForQueryKey(n,e,t),[n,e]),{setQueryValue:s}=Object(c.useDispatch)(r.QUERY_STATE_STORE_KEY);return[l,Object(o.useCallback)(t=>{s(n,e,t)},[n,e,s])]},f=(e,t)=>{const n=Object(i.a)();t=t||n;const[r,c]=b(t),a=Object(s.a)(r),d=Object(s.a)(e),f=Object(u.a)(d),m=Object(o.useRef)(!1);return Object(o.useEffect)(()=>{l()(f,d)||(c(Object.assign({},a,d)),m.current=!0)},[a,d,f,c]),m.current?[r,c]:[e,c]}},486:function(e,t,n){"use strict";n.r(t);var r=n(0),c=n(4),o=n.n(c),a=n(286),l=n(27),s=n(155),u=n(52);t.default=e=>{const t=Object(a.a)(e),n=Object(u.g)(e);return Object(r.createElement)("div",{className:o()(Object(l.a)(e.className)?e.className:"",t.className),style:t.style},Object(r.createElement)(s.a,{isEditor:!1,attributes:n}))}},52:function(e,t,n){"use strict";n.d(t,"d",(function(){return l})),n.d(t,"h",(function(){return s})),n.d(t,"b",(function(){return u})),n.d(t,"a",(function(){return i})),n.d(t,"e",(function(){return b})),n.d(t,"f",(function(){return d})),n.d(t,"c",(function(){return f})),n.d(t,"g",(function(){return m}));var r=n(15),c=n(68),o=n(27),a=n(123);function l(){return Math.floor(Math.random()*Date.now())}const s=e=>e.replace("pa_",""),u=function(e){let t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:[];const n={};t.forEach(e=>{const{attribute:t,slug:r,operator:o}=e,a=s(t),l=r.join(","),u=`${c.b}${a}`,i="in"===o?"or":"and";n[`${c.a}${a}`]=l,n[u]=i});const o=Object(r.removeQueryArgs)(e,...Object.keys(n));return Object(r.addQueryArgs)(o,n)},i=e=>{let{currentCheckedFilters:t,hasSetFilterDefaultsFromUrl:n}=e;return n&&0===t.length},b=e=>{if(e){const t=Object(c.d)("filter_"+e.name);return("string"==typeof t?t.split(","):[]).map(e=>encodeURIComponent(e).toLowerCase())}return[]},d=(e,t)=>{const n=Object.entries(t).reduce((e,t)=>{let[n,r]=t;return n.includes("query_type")?e:{...e,[n]:r}},{});return Object.entries(n).reduce((t,n)=>{let[r,c]=n;return e[r]===c&&t},!0)},f=e=>e.trim().replace(/\s/g,"-").replace(/_/g,"-").replace(/-+/g,"-").replace(/[^a-zA-Z0-9-]/g,""),m=e=>({className:Object(o.a)(null==e?void 0:e.className)?e.className:"",attributeId:parseInt(Object(o.a)(null==e?void 0:e.attributeId)?e.attributeId:"0",10),showCounts:"false"!==(null==e?void 0:e.showCounts),queryType:Object(o.a)(null==e?void 0:e.queryType)&&e.queryType||a.attributes.queryType.default,heading:Object(o.a)(null==e?void 0:e.heading)?e.heading:"",headingLevel:Object(o.a)(null==e?void 0:e.headingLevel)&&parseInt(e.headingLevel,10)||a.attributes.headingLevel.default,displayStyle:Object(o.a)(null==e?void 0:e.displayStyle)&&e.displayStyle||a.attributes.displayStyle.default,showFilterButton:"true"===(null==e?void 0:e.showFilterButton),selectType:Object(o.a)(null==e?void 0:e.selectType)&&e.selectType||a.attributes.selectType.default,isPreview:!1})},54:function(e,t,n){"use strict";n.d(t,"a",(function(){return l}));var r=n(3),c=n(5),o=n(0),a=n(26);const l=e=>{const{namespace:t,resourceName:n,resourceValues:l=[],query:s={},shouldSelect:u=!0}=e;if(!t||!n)throw new Error("The options object must have valid values for the namespace and the resource properties.");const i=Object(o.useRef)({results:[],isLoading:!0}),b=Object(a.a)(s),d=Object(a.a)(l),f=(()=>{const[,e]=Object(o.useState)();return Object(o.useCallback)(t=>{e(()=>{throw t})},[])})(),m=Object(c.useSelect)(e=>{if(!u)return null;const c=e(r.COLLECTIONS_STORE_KEY),o=[t,n,b,d],a=c.getCollectionError(...o);if(a){if(!(a instanceof Error))throw new Error("TypeError: `error` object is not an instance of Error constructor");f(a)}return{results:c.getCollection(...o),isLoading:!c.hasFinishedResolution("getCollection",o)}},[t,n,d,b,u]);return null!==m&&(i.current=m),i.current}},55:function(e,t,n){"use strict";n.d(t,"a",(function(){return c}));var r=n(0);function c(e,t){const n=Object(r.useRef)();return Object(r.useEffect)(()=>{n.current===e||t&&!t(e,n.current)||(n.current=e)},[e,t]),n.current}},56:function(e,t,n){"use strict";var r=n(0),c=n(1),o=n(19);n(131),t.a=e=>{let{name:t,count:n}=e;return Object(r.createElement)(r.Fragment,null,t,null!==n&&Number.isFinite(n)&&Object(r.createElement)(o.a,{label:n.toString(),screenReaderLabel:Object(c.sprintf)(
/* translators: %s number of products. */
Object(c._n)("%s product","%s products",n,"woocommerce"),n),wrapperElement:"span",wrapperProps:{className:"wc-filter-element-label-list-count"}}))}},61:function(e,t,n){"use strict";var r=n(0);n(87),t.a=e=>{let{children:t}=e;return Object(r.createElement)("div",{className:"wc-block-filter-title-placeholder"},t)}},62:function(e,t,n){"use strict";var r=n(0),c=n(1),o=n(4),a=n.n(o),l=n(19);n(88),t.a=e=>{let{className:t,label:
/* translators: Reset button text for filters. */
n=Object(c.__)("Reset","woocommerce"),onClick:o,screenReaderLabel:s=Object(c.__)("Reset filter","woocommerce")}=e;return Object(r.createElement)("button",{className:a()("wc-block-components-filter-reset-button",t),onClick:o},Object(r.createElement)(l.a,{label:n,screenReaderLabel:s}))}},63:function(e,t,n){"use strict";var r=n(0),c=n(1),o=n(4),a=n.n(o),l=n(19);n(89),t.a=e=>{let{className:t,isLoading:n,disabled:o,label:
/* translators: Submit button text for filters. */
s=Object(c.__)("Apply","woocommerce"),onClick:u,screenReaderLabel:i=Object(c.__)("Apply filter","woocommerce")}=e;return Object(r.createElement)("button",{type:"submit",className:a()("wp-block-button__link","wc-block-filter-submit-button","wc-block-components-filter-submit-button",{"is-loading":n},t),disabled:o,onClick:u},Object(r.createElement)(l.a,{label:s,screenReaderLabel:i}))}},68:function(e,t,n){"use strict";n.d(t,"b",(function(){return l})),n.d(t,"a",(function(){return s})),n.d(t,"d",(function(){return u})),n.d(t,"c",(function(){return i})),n.d(t,"e",(function(){return b}));var r=n(15),c=n(2),o=n(72);const a=Object(c.getSettingWithCoercion)("is_rendering_php_template",!1,o.a),l="query_type_",s="filter_";function u(e){return window?Object(r.getQueryArg)(window.location.href,e):null}function i(e){a?window.location.href=e:window.history.replaceState({},"",e)}const b=e=>{const t=Object(r.getQueryArgs)(e);return Object(r.addQueryArgs)(e,t)}},72:function(e,t,n){"use strict";n.d(t,"a",(function(){return r}));const r=e=>"boolean"==typeof e},80:function(e,t,n){"use strict";var r=n(13),c=n.n(r),o=n(0),a=n(121),l=n(4),s=n.n(l);n(113),t.a=e=>{let{className:t,style:n,suggestions:r,multiple:l=!0,saveTransform:u=(e=>e.trim().replace(/\s/g,"-")),messages:i={},validateInput:b=(e=>r.includes(e)),label:d="",...f}=e;return Object(o.createElement)("div",{className:s()("wc-blocks-components-form-token-field-wrapper",t,{"single-selection":!l}),style:n},Object(o.createElement)(a.a,c()({label:d,__experimentalExpandOnFocus:!0,__experimentalShowHowTo:!1,__experimentalValidateInput:b,saveTransform:u,maxLength:l?void 0:1,suggestions:r,messages:i},f)))}},81:function(e,t,n){"use strict";var r=n(0),c=n(1),o=n(4),a=n.n(o),l=n(11);n(114),t.a=e=>{let{className:t,onChange:n,options:o=[],checked:s=[],isLoading:u=!1,isDisabled:i=!1,limit:b=10}=e;const[d,f]=Object(r.useState)(!1),m=Object(r.useMemo)(()=>[...Array(5)].map((e,t)=>Object(r.createElement)("li",{key:t,style:{width:Math.floor(75*Math.random())+25+"%"}})),[]),g=Object(r.useMemo)(()=>{const e=o.length-b;return!d&&Object(r.createElement)("li",{key:"show-more",className:"show-more"},Object(r.createElement)("button",{onClick:()=>{f(!0)},"aria-expanded":!1,"aria-label":Object(c.sprintf)(
/* translators: %s is referring the remaining count of options */
Object(c._n)("Show %s more option","Show %s more options",e,"woocommerce"),e)},Object(c.sprintf)(
/* translators: %s number of options to reveal. */
Object(c._n)("Show %s more","Show %s more",e,"woocommerce"),e)))},[o,b,d]),p=Object(r.useMemo)(()=>d&&Object(r.createElement)("li",{key:"show-less",className:"show-less"},Object(r.createElement)("button",{onClick:()=>{f(!1)},"aria-expanded":!0,"aria-label":Object(c.__)("Show less options","woocommerce")},Object(c.__)("Show less","woocommerce"))),[d]),O=Object(r.useMemo)(()=>{const e=o.length>b+5;return Object(r.createElement)(r.Fragment,null,o.map((t,c)=>Object(r.createElement)(r.Fragment,{key:t.value},Object(r.createElement)("li",e&&!d&&c>=b&&{hidden:!0},Object(r.createElement)(l.CheckboxControl,{id:t.value,className:"wc-block-checkbox-list__checkbox",label:t.label,checked:s.includes(t.value),onChange:()=>{n(t.value)},disabled:i})),e&&c===b-1&&g)),e&&p)},[o,n,s,d,b,p,g,i]),j=a()("wc-block-checkbox-list","wc-block-components-checkbox-list",{"is-loading":u},t);return Object(r.createElement)("ul",{className:j},u?m:O)}},87:function(e,t){},88:function(e,t){},89:function(e,t){},92:function(e,t,n){"use strict";n.d(t,"a",(function(){return r}));const r=e=>null==e||"object"==typeof e&&0===Object.keys(e).length||"string"==typeof e&&0===e.trim().length}}]);