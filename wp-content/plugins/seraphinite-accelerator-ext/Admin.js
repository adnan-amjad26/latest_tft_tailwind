function asyncGeneratorStep(J,w,O,K,L,H,F){try{var M=J[H](F),G=M.value}catch(P){O(P);return}M.done?w(G):Promise.resolve(G).then(K,L)}function _asyncToGenerator(J){return function(){var w=this,O=arguments;return new Promise(function(K,L){function H(G){asyncGeneratorStep(M,K,L,H,F,"next",G)}function F(G){asyncGeneratorStep(M,K,L,H,F,"throw",G)}var M=J.apply(w,O);H(void 0)})}}
function _typeof(J){_typeof="function"===typeof Symbol&&"symbol"===typeof Symbol.iterator?function(w){return typeof w}:function(w){return w&&"function"===typeof Symbol&&w.constructor===Symbol&&w!==Symbol.prototype?"symbol":typeof w};return _typeof(J)}var _regenerator;
(function(){var J=function(w){function O(a,b,c,t){b=Object.create((b&&b.prototype instanceof L?b:L).prototype);t=new D(t||[]);b._invoke=P(a,c,t);return b}function K(a,b,c){try{return{type:"normal",arg:a.call(b,c)}}catch(t){return{type:"throw",arg:t}}}function L(){}function H(){}function F(){}function M(a){["next","throw","return"].forEach(function(b){a[b]=function(c){return this._invoke(b,c)}})}function G(a,b){function c(d,x,z,C){d=K(a[d],a,x);if("throw"===d.type)C(d.arg);else{var y=d.arg;return(d=
y.value)&&"object"===_typeof(d)&&q.call(d,"__await")?b.resolve(d.__await).then(function(E){c("next",E,z,C)},function(E){c("throw",E,z,C)}):b.resolve(d).then(function(E){y.value=E;z(y)},function(E){return c("throw",E,z,C)})}}var t;this._invoke=function(d,x){function z(){return new b(function(C,y){c(d,x,C,y)})}return t=t?t.then(z,z):z()}}function P(a,b,c){var t=g;return function(d,x){if(t===n)throw Error("Generator is already running");if(t===r){if("throw"===d)throw x;return A()}c.method=d;for(c.arg=
x;;){if(d=c.delegate)if(d=Q(d,c)){if(d===v)continue;return d}if("next"===c.method)c.sent=c._sent=c.arg;else if("throw"===c.method){if(t===g)throw t=r,c.arg;c.dispatchException(c.arg)}else"return"===c.method&&c.abrupt("return",c.arg);t=n;d=K(a,b,c);if("normal"===d.type){t=c.done?r:f;if(d.arg===v)continue;return{value:d.arg,done:c.done}}"throw"===d.type&&(t=r,c.method="throw",c.arg=d.arg)}}}function Q(a,b){var c=a.iterator[b.method];if(c===h){b.delegate=null;if("throw"===b.method){if(a.iterator["return"]&&
(b.method="return",b.arg=h,Q(a,b),"throw"===b.method))return v;b.method="throw";b.arg=new TypeError("The iterator does not provide a 'throw' method")}return v}c=K(c,a.iterator,b.arg);if("throw"===c.type)return b.method="throw",b.arg=c.arg,b.delegate=null,v;c=c.arg;if(!c)return b.method="throw",b.arg=new TypeError("iterator result is not an object"),b.delegate=null,v;if(c.done)b[a.resultName]=c.value,b.next=a.nextLoc,"return"!==b.method&&(b.method="next",b.arg=h);else return c;b.delegate=null;return v}
function S(a){var b={tryLoc:a[0]};1 in a&&(b.catchLoc=a[1]);2 in a&&(b.finallyLoc=a[2],b.afterLoc=a[3]);this.tryEntries.push(b)}function R(a){var b=a.completion||{};b.type="normal";delete b.arg;a.completion=b}function D(a){this.tryEntries=[{tryLoc:"root"}];a.forEach(S,this);this.reset(!0)}function I(a){if(a){var b=a[l];if(b)return b.call(a);if("function"===typeof a.next)return a;if(!isNaN(a.length)){var c=-1;b=function d(){for(;++c<a.length;)if(q.call(a,c))return d.value=a[c],d.done=!1,d;d.value=
h;d.done=!0;return d};return b.next=b}}return{next:A}}function A(){return{value:h,done:!0}}var p=Object.prototype,q=p.hasOwnProperty,h,k="function"===typeof Symbol?Symbol:{},l=k.iterator||"@@iterator",m=k.asyncIterator||"@@asyncIterator",e=k.toStringTag||"@@toStringTag";w.wrap=O;var g="suspendedStart",f="suspendedYield",n="executing",r="completed",v={};k={};k[l]=function(){return this};var B=Object.getPrototypeOf;(B=B&&B(B(I([]))))&&B!==p&&q.call(B,l)&&(k=B);var u=F.prototype=L.prototype=Object.create(k);
H.prototype=u.constructor=F;F.constructor=H;F[e]=H.displayName="GeneratorFunction";w.isGeneratorFunction=function(a){return(a="function"===typeof a&&a.constructor)?a===H||"GeneratorFunction"===(a.displayName||a.name):!1};w.mark=function(a){Object.setPrototypeOf?Object.setPrototypeOf(a,F):(a.__proto__=F,e in a||(a[e]="GeneratorFunction"));a.prototype=Object.create(u);return a};w.awrap=function(a){return{__await:a}};M(G.prototype);G.prototype[m]=function(){return this};w.AsyncIterator=G;w.async=function(a,
b,c,t,d){void 0===d&&(d=Promise);var x=new G(O(a,b,c,t),d);return w.isGeneratorFunction(b)?x:x.next().then(function(z){return z.done?z.value:x.next()})};M(u);u[e]="Generator";u[l]=function(){return this};u.toString=function(){return"[object Generator]"};w.keys=function(a){var b=[],c;for(c in a)b.push(c);b.reverse();return function d(){for(;b.length;){var x=b.pop();if(x in a)return d.value=x,d.done=!1,d}d.done=!0;return d}};w.values=I;D.prototype={constructor:D,reset:function(a){this.next=this.prev=
0;this.sent=this._sent=h;this.done=!1;this.delegate=null;this.method="next";this.arg=h;this.tryEntries.forEach(R);if(!a)for(var b in this)"t"===b.charAt(0)&&q.call(this,b)&&!isNaN(+b.slice(1))&&(this[b]=h)},stop:function(){this.done=!0;var a=this.tryEntries[0].completion;if("throw"===a.type)throw a.arg;return this.rval},dispatchException:function(a){function b(y,E){x.type="throw";x.arg=a;c.next=y;E&&(c.method="next",c.arg=h);return!!E}if(this.done)throw a;for(var c=this,t=this.tryEntries.length-1;0<=
t;--t){var d=this.tryEntries[t],x=d.completion;if("root"===d.tryLoc)return b("end");if(d.tryLoc<=this.prev){var z=q.call(d,"catchLoc"),C=q.call(d,"finallyLoc");if(z&&C){if(this.prev<d.catchLoc)return b(d.catchLoc,!0);if(this.prev<d.finallyLoc)return b(d.finallyLoc)}else if(z){if(this.prev<d.catchLoc)return b(d.catchLoc,!0)}else if(C){if(this.prev<d.finallyLoc)return b(d.finallyLoc)}else throw Error("try statement without catch or finally");}}},abrupt:function(a,b){for(var c=this.tryEntries.length-
1;0<=c;--c){var t=this.tryEntries[c];if(t.tryLoc<=this.prev&&q.call(t,"finallyLoc")&&this.prev<t.finallyLoc){var d=t;break}}d&&("break"===a||"continue"===a)&&d.tryLoc<=b&&b<=d.finallyLoc&&(d=null);c=d?d.completion:{};c.type=a;c.arg=b;return d?(this.method="next",this.next=d.finallyLoc,v):this.complete(c)},complete:function(a,b){if("throw"===a.type)throw a.arg;"break"===a.type||"continue"===a.type?this.next=a.arg:"return"===a.type?(this.rval=this.arg=a.arg,this.method="return",this.next="end"):"normal"===
a.type&&b&&(this.next=b);return v},finish:function(a){for(var b=this.tryEntries.length-1;0<=b;--b){var c=this.tryEntries[b];if(c.finallyLoc===a)return this.complete(c.completion,c.afterLoc),R(c),v}},"catch":function(a){for(var b=this.tryEntries.length-1;0<=b;--b){var c=this.tryEntries[b];if(c.tryLoc===a){a=c.completion;if("throw"===a.type){var t=a.arg;R(c)}return t}}throw Error("illegal catch attempt");},delegateYield:function(a,b,c){this.delegate={iterator:I(a),resultName:b,nextLoc:c};"next"===this.method&&
(this.arg=h);return v}};return w}("object"===("undefined"===typeof module?"undefined":_typeof(module))?module.exports:{});try{_regenerator=J}catch(w){Function("r","_regenerator = r")(J)}})();
(function(){function J(){J=_asyncToGenerator(_regenerator.mark(function q(p){return _regenerator.wrap(function(h){for(;;)switch(h.prev=h.next){case 0:return jQuery(p).attr("disabled",!0),h.prev=1,h.next=4,jQuery.ajax({url:seraph_accel.Net.UpdateQueryArgs(seraph_accel.Plugin.GetAdminApiUrl()+"LogClear",{}),type:"POST",dataType:"json",cache:!1});case 4:h.next=8;break;case 6:h.prev=6,h.t0=h["catch"](1);case 8:jQuery(p).attr("disabled",!1);case 9:case "end":return h.stop()}},q,this,[[1,6]])}));return J.apply(this,
arguments)}function w(){w=_asyncToGenerator(_regenerator.mark(function h(p,q){var k,l,m,e,g,f;return _regenerator.wrap(function(n){for(;;)switch(n.prev=n.next){case 0:k=jQuery(p.parentNode).closest(".blck").first();l=k.find(".seraph_accel_spinner");k.find(".content");m=k.find('input[type="button"]:not(.cancel)');e=k.find('input[type="button"].cancel');if(!q){n.next=23;break}m.prop("disabled",!0);l.show();seraph_accel.Manager._int.notRefreshStat=!0;g=null;n.prev=10;n.next=13;return jQuery.ajax({url:seraph_accel.Net.UpdateQueryArgs(seraph_accel.Plugin.GetAdminApiUrl()+
"UpdateStatBegin",{}),cache:!1,dataType:"json"});case 13:f=n.sent;seraph_accel.Gen.hr.Fail(f)&&(g=I(D("OpSrvErr_%1$08X","admin.Manage","seraphinite-accelerator"),f));n.next=20;break;case 17:n.prev=17,n.t0=n["catch"](10),g="HTTP "+n.t0.status;case 20:return g&&(alert(g),m.prop("disabled",!1),l.hide()),delete seraph_accel.Manager._int.notRefreshStat,n.abrupt("return");case 23:return e.prop("disabled",!0),seraph_accel.Manager._int.notRefreshStat=!0,g=null,n.prev=26,n.next=29,jQuery.ajax({url:seraph_accel.Net.UpdateQueryArgs(seraph_accel.Plugin.GetAdminApiUrl()+
"UpdateStatCancel",{}),type:"POST",cache:!1,dataType:"json"});case 29:f=n.sent;seraph_accel.Gen.hr.Fail(f)&&(g=I(D("OpSrvErr_%1$08X","admin.Manage","seraphinite-accelerator"),f));n.next=37;break;case 33:n.prev=33,n.t1=n["catch"](26),g="HTTP "+n.t1.status,e.prop("disabled",!1);case 37:g&&alert(g),delete seraph_accel.Manager._int.notRefreshStat;case 39:case "end":return n.stop()}},h,this,[[10,17],[26,33]])}));return w.apply(this,arguments)}function O(A){switch(A){case 0:return D("OpDescr_Invalidate",
"admin.Manage","seraphinite-accelerator");case 2:return D("OpDescr_Delete","admin.Manage","seraphinite-accelerator");case 10:return D("OpDescr_SrvDel","admin.Manage","seraphinite-accelerator")}return""+A}function K(){K=_asyncToGenerator(_regenerator.mark(function q(p){var h,k,l,m;return _regenerator.wrap(function(e){for(;;)switch(e.prev=e.next){case 0:return h=jQuery(p.parentNode).closest(".blck").first(),k=h.find('input[type="button"].cancel'),k.prop("disabled",!0),l=null,e.prev=4,e.next=7,jQuery.ajax({url:seraph_accel.Net.UpdateQueryArgs(seraph_accel.Plugin.GetAdminApiUrl()+
"PostUpdCancel",{}),type:"POST",cache:!1,dataType:"json"});case 7:m=e.sent;seraph_accel.Gen.hr.Fail(m)&&(l=I(D("OpSrvErr_%1$08X","admin.Manage","seraphinite-accelerator"),m));e.next=14;break;case 11:e.prev=11,e.t0=e["catch"](4),l="HTTP "+e.t0.status;case 14:l&&alert(l);case 15:case "end":return e.stop()}},q,this,[[4,11]])}));return K.apply(this,arguments)}function L(){L=_asyncToGenerator(_regenerator.mark(function q(p){var h,k,l,m;return _regenerator.wrap(function(e){for(;;)switch(e.prev=e.next){case 0:return h=
jQuery(p.parentNode).closest(".blck").first(),k=h.find('input[type="button"].cancel'),k.prop("disabled",!0),l=null,e.prev=4,e.next=7,jQuery.ajax({url:seraph_accel.Net.UpdateQueryArgs(seraph_accel.Plugin.GetAdminApiUrl()+"ScheUpdCancel",{}),type:"POST",cache:!1,dataType:"json"});case 7:m=e.sent;seraph_accel.Gen.hr.Fail(m)&&(l=I(D("OpSrvErr_%1$08X","admin.Manage","seraphinite-accelerator"),m));e.next=14;break;case 11:e.prev=11,e.t0=e["catch"](4),l="HTTP "+e.t0.status;case 14:l&&alert(l);case 15:case "end":return e.stop()}},
q,this,[[4,11]])}));return L.apply(this,arguments)}function H(){H=_asyncToGenerator(_regenerator.mark(function h(p,q){var k,l,m,e,g,f,n,r,v,B;return _regenerator.wrap(function(u){for(;;)switch(u.prev=u.next){case 0:return k=jQuery(p.parentNode).closest(".blck").first(),l=k.find(".seraph_accel_spinner"),m=k.find(".descr"),e=k.find('input[type="button"]:not(.cancel)'),g=k.find('input[type="button"].cancel'),f=k.find(".type").val(),n=seraph_accel.Gen.StrReplaceAll(String(k.find(".uri").val()),["\r",
"\n","*"],["",";","{ASTRSK}"]),l.show(),m.show(),m.text(O(q)),e.prop("disabled",!0),g.prop("disabled",!1),seraph_accel.Manager._int.notRefreshOp=!0,r={cache:!1,dataType:"json"},512>n.length?r.url=seraph_accel.Net.UpdateQueryArgs(seraph_accel.Plugin.GetAdminApiUrl()+"CacheOpBegin",{type:f,op:q,uri:n}):(r.url=seraph_accel.Net.UpdateQueryArgs(seraph_accel.Plugin.GetAdminApiUrl()+"CacheOpBegin",{type:f,op:q}),r.type="POST",r.contentType="application/x-www-form-urlencoded",r.data="uri="+encodeURIComponent(n)),
v=null,u.prev=16,u.next=19,jQuery.ajax(r);case 19:B=u.sent;seraph_accel.Gen.hr.Fail(B)&&(v=I(D("OpSrvErr_%1$08X","admin.Manage","seraphinite-accelerator"),B));u.next=26;break;case 23:u.prev=23,u.t0=u["catch"](16),v="HTTP "+u.t0.status;case 26:v&&alert(v),delete seraph_accel.Manager._int.notRefreshOp;case 28:case "end":return u.stop()}},h,this,[[16,23]])}));return H.apply(this,arguments)}function F(){F=_asyncToGenerator(_regenerator.mark(function h(p,q){var k,l,m,e;return _regenerator.wrap(function(g){for(;;)switch(g.prev=
g.next){case 0:return k=jQuery(p.parentNode).closest(".blck").first(),l=k.find('input[type="button"].cancel'),l.prop("disabled",!0),m=null,g.prev=4,g.next=7,jQuery.ajax({url:seraph_accel.Net.UpdateQueryArgs(seraph_accel.Plugin.GetAdminApiUrl()+"CacheOpCancel",{op:q}),type:"POST",cache:!1,dataType:"json"});case 7:e=g.sent;seraph_accel.Gen.hr.Fail(e)&&(m=I(D("OpSrvErr_%1$08X","admin.Manage","seraphinite-accelerator"),e));g.next=14;break;case 11:g.prev=11,g.t0=g["catch"](4),m="HTTP "+g.t0.status;case 14:m&&
alert(m);case 15:case "end":return g.stop()}},h,this,[[4,11]])}));return F.apply(this,arguments)}function M(){M=_asyncToGenerator(_regenerator.mark(function h(p,q){var k,l,m,e,g;return _regenerator.wrap(function(f){for(;;)switch(f.prev=f.next){case 0:return k=jQuery(p.parentNode).closest(".blck").first(),l=k.find(".seraph_accel_spinner"),m=k.find('input[type="button"]'),l.show(),m.prop("disabled",!0),seraph_accel.Manager._int.notRefreshQueueDeleting=!0,e=null,f.prev=7,f.next=10,jQuery.ajax({url:seraph_accel.Net.UpdateQueryArgs(seraph_accel.Plugin.GetAdminApiUrl()+
"QueueDelete",{allSites:q?!0:void 0}),type:"GET",cache:!1,dataType:"json"});case 10:g=f.sent;seraph_accel.Gen.hr.Fail(g)&&(e=I(D("OpSrvErr_%1$08X","admin.Manage","seraphinite-accelerator"),g));f.next=17;break;case 14:f.prev=14,f.t0=f["catch"](7),e="HTTP "+f.t0.status;case 17:e&&(alert(e),l.hide(),m.prop("disabled",!1)),delete seraph_accel.Manager._int.notRefreshQueueDeleting;case 19:case "end":return f.stop()}},h,this,[[7,14]])}));return M.apply(this,arguments)}function G(){G=_asyncToGenerator(_regenerator.mark(function h(p,
q){var k,l,m,e,g;return _regenerator.wrap(function(f){for(;;)switch(f.prev=f.next){case 0:if(confirm(D("ItemCancelConfirm","admin.Manage_Queue","seraphinite-accelerator"))){f.next=2;break}return f.abrupt("return");case 2:return k=jQuery(p.parentNode).closest(".blck").first(),l=k.find(".seraph_accel_spinner"),m=k.find('input[type="button"]'),l.show(),m.prop("disabled",!0),seraph_accel.Manager._int.notRefreshQueueDeleting=!0,e=null,f.prev=9,f.next=12,jQuery.ajax({url:seraph_accel.Net.UpdateQueryArgs(seraph_accel.Plugin.GetAdminApiUrl()+
"QueueItemCancel",{pc:q}),type:"GET",cache:!1,dataType:"json"});case 12:g=f.sent;seraph_accel.Gen.hr.Fail(g)&&(e=I(D("OpSrvErr_%1$08X","admin.Manage","seraphinite-accelerator"),g));f.next=19;break;case 16:f.prev=16,f.t0=f["catch"](9),e="HTTP "+f.t0.status;case 19:e&&alert(e),l.hide(),m.prop("disabled",!1),delete seraph_accel.Manager._int.notRefreshQueueDeleting;case 23:case "end":return f.stop()}},h,this,[[9,16]])}));return G.apply(this,arguments)}function P(){P=_asyncToGenerator(_regenerator.mark(function h(p,
q){var k,l,m,e;return _regenerator.wrap(function(g){for(;;)switch(g.prev=g.next){case 0:e=function(){e=_asyncToGenerator(_regenerator.mark(function n(){return _regenerator.wrap(function(r){for(;;)switch(r.prev=r.next){case 0:return r.next=2,seraph_accel.Manager._int.OnDataRefresh(p,q);case 2:l();case 3:case "end":return r.stop()}},n,this)}));return e.apply(this,arguments)},m=function(){return e.apply(this,arguments)},l=function(){var f=1E3*parseInt(k.val(),10);100>f&&(f=100);clearTimeout(seraph_accel.Manager._int.refreshTimer);
seraph_accel.Manager._int.refreshTimer=setTimeout(m,f)},k=jQuery(p).find("#queue .tmDataRefresh"),k.on("change",l),m();case 6:case "end":return g.stop()}},h,this)}));return P.apply(this,arguments)}function Q(){Q=_asyncToGenerator(_regenerator.mark(function h(p,q){var k,l,m,e,g,f,n,r,v,B,u,a,b,c,t,d,x,z,C,y,E;return _regenerator.wrap(function(N){for(;;)switch(N.prev=N.next){case 0:return k=jQuery(p).find("#status").first(),l=jQuery(p).find("#stat").first(),m=l.find(".seraph_accel_spinner"),e=l.find('input[type="button"]:not(.cancel)'),
g=l.find('input[type="button"].cancel'),f=jQuery(p).find("#operate").first(),n=f.find(".seraph_accel_spinner"),r=f.find(".descr"),v=f.find('input[type="button"]:not(.cancel)'),B=f.find('input[type="button"].cancel'),u=jQuery(p).find("#queue").first(),a=u.find(".content"),b=u.find(".maxItems"),c=u.find(".seraph_accel_spinner"),t=u.find('input[type="button"]'),d=u.find(".descrNums"),N.prev=16,N.next=19,jQuery.ajax({url:seraph_accel.Net.UpdateQueryArgs(seraph_accel.Plugin.GetAdminApiUrl()+"GetData",
{nMaxQueueItems:b.val(),allSites:q?!0:void 0}),type:"GET",cache:!1,dataType:"json"});case 19:y=N.sent;N.next=24;break;case 22:N.prev=22,N.t0=N["catch"](16);case 24:if(y){N.next=26;break}return N.abrupt("return");case 26:if(!q){for(E in y.status.cont)k.find('[data-id-cont="'+E+'"]').html(y.status.cont[E]);seraph_accel.Manager._int.notRefreshPostUpd||(x=k.find(".blck.postupd .seraph_accel_spinner"),z=k.find('.blck.postupd input[type="button"]:not(.cancel)'),C=k.find('.blck.postupd input[type="button"].cancel'),
y.status.postUpd?(x.show(),z.prop("disabled",!0),C.prop("disabled",!1)):(x.hide(),z.prop("disabled",!1),C.prop("disabled",!0)));seraph_accel.Manager._int.notRefreshScheUpd||(x=k.find(".blck.scheupd .seraph_accel_spinner"),z=k.find('.blck.scheupd input[type="button"]:not(.cancel)'),C=k.find('.blck.scheupd input[type="button"].cancel'),y.status.scheUpd?(x.show(),z.prop("disabled",!0),C.prop("disabled",!1)):(x.hide(),z.prop("disabled",!1),C.prop("disabled",!0)));seraph_accel.Manager._int.notRefreshCleanup||
(x=k.find(".blck.cleanup .seraph_accel_spinner"),z=k.find('.blck.cleanup input[type="button"]:not(.cancel)'),C=k.find('.blck.cleanup input[type="button"].cancel'),y.status.cleanUp?(x.show(),z.prop("disabled",!0),C.prop("disabled",!1)):(x.hide(),z.prop("disabled",!1),C.prop("disabled",!0)))}if(!q&&!seraph_accel.Manager._int.notRefreshStat)for(E in y.stat.isUpdating?(m.show(),e.prop("disabled",!0),g.prop("disabled",!1)):(m.hide(),e.prop("disabled",!1),g.prop("disabled",!0)),y.stat.cont)l.find('[data-id-cont="'+
E+'"]').html(y.stat.cont[E]);q||seraph_accel.Manager._int.notRefreshOp||(null===y.curOp&&(y.curOp=void 0),void 0!==y.curOp?(n.show(),r.show(),r.text(O(y.curOp)),v.prop("disabled",!0),B.prop("disabled",!1)):(n.hide(),r.hide(),v.prop("disabled",!1),B.prop("disabled",!0),r.text("")));a.html(y.queue.content);d.text(I(D("QueueNumsDescr_%1$u%2$u","admin.Manage","seraphinite-accelerator"),y.queue.nums.nInitial,y.queue.nums.nInProgress));seraph_accel.Manager._int.notRefreshQueueDeleting||(c.hide(),t.prop("disabled",
!1));case 32:case "end":return N.stop()}},h,this,[[16,22]])}));return Q.apply(this,arguments)}function S(){S=_asyncToGenerator(_regenerator.mark(function q(p){var h,k,l,m,e,g,f,n;return _regenerator.wrap(function(r){for(;;)switch(r.prev=r.next){case 0:return h=jQuery(p.parentNode).closest(".blck").first(),k=h.find(".url"),l=h.find(".messages"),m=h.find(".seraph_accel_spinner"),e=h.find('input[type="button"]'),g=0,h.find(".liteChk").prop("checked")&&(g|=1),h.find(".medChk").prop("checked")&&(g|=2),
h.find(".tidyChk").prop("checked")&&(g|=524288),l.empty(),m.show(),e.prop("disabled",!0),r.prev=12,r.next=15,jQuery.ajax({url:seraph_accel.Net.UpdateQueryArgs(seraph_accel.Plugin.GetAdminApiUrl()+"HtmlCheck",{url:k.val(),norm:g}),type:"POST",dataType:"json",cache:!1});case 15:f=r.sent;r.next=21;break;case 18:r.prev=18,r.t0=r["catch"](12),f={err:r.t0.statusText};case 21:m.hide();e.prop("disabled",!1);if(!f.err){r.next=26;break}l.append(seraph_accel.Ui.LogItem("error",f.err));return r.abrupt("return");
case 26:for(n in f.list)n=f.list[n],l.append(seraph_accel.Ui.LogItem(n.severity,n.text));case 27:case "end":return r.stop()}},q,this,[[12,18]])}));return S.apply(this,arguments)}var R=seraph_accel.Wp.Loc.GetApi(),D=R._x,I=R.sprintf;seraph_accel.Settings={_int:{StrItem_OnAdd:function(A){function p(l){(l=l.trim())&&seraph_accel.Ui.TokensList.AddItem(k[0],l)}var q=1<arguments.length&&void 0!==arguments[1]?arguments[1]:",",h=jQuery(A.parentNode).closest(".blck").first(),k=h.find(".vals");h=h.find(".val");
q?h.val().split(q).forEach(p):p(h.val());h.val("")},OnUpdateCssAuto:function(A){seraph_accel.Ui.ComboShowDependedItems(A,jQuery(A.parentNode).closest(".blck").first().get(0))},OnLogClear:function(A){return J.apply(this,arguments)}}};seraph_accel.Manager={_int:{OnStatOp:function(A,p){return w.apply(this,arguments)},OnCacheOp:function(A,p){return H.apply(this,arguments)},OnCacheOpCancel:function(A,p){return F.apply(this,arguments)},OnPostUpdCancel:function(A){return K.apply(this,arguments)},OnScheUpdCancel:function(A){return L.apply(this,
arguments)},OnQueueDel:function(A,p){return M.apply(this,arguments)},OnQueueItemCancel:function(A,p){return G.apply(this,arguments)},OnDataRefreshInit:function(A,p){return P.apply(this,arguments)},OnDataRefresh:function(A,p){return Q.apply(this,arguments)},OnHtmlCheck:function(A){return S.apply(this,arguments)}}};(function(){function A(k){return p.apply(this,arguments)}function p(){p=_asyncToGenerator(_regenerator.mark(function m(l){var e,g;return _regenerator.wrap(function(f){for(;;)switch(f.prev=
f.next){case 0:return e={},f.prev=1,seraph_accel.SelfDiag._int.curAjax=jQuery.ajax({url:seraph_accel.Net.UpdateQueryArgs(seraph_accel.Plugin.GetAdminApiUrl()+"SelfDiag_"+l,{}),cache:!1,dataType:"json"}),f.next=5,seraph_accel.SelfDiag._int.curAjax;case 5:e=f.sent;delete seraph_accel.SelfDiag._int.curAjax;f.next=14;break;case 9:f.prev=9,f.t0=f["catch"](1),delete seraph_accel.SelfDiag._int.curAjax,0===f.t0.status?e.hr=seraph_accel.Gen.hr.S_ABORTED:(e.hr=seraph_accel.Gen.hr.E_FAIL,e.descr="HTTP "+f.t0.status),
500==f.t0.status&&(g=document.implementation.createHTMLDocument(""),g.documentElement.innerHTML=f.t0.responseText,g=g.body.textContent,g=seraph_accel.Gen.StrReplaceAll(g,"\r",""),g=seraph_accel.Gen.StrReplaceAll(g,["\t","\v"]," "),g=seraph_accel.Gen.StrReplaceAll(g,"\n",". "),(g=seraph_accel.Gen.StrReplaceAllWhileChanging(g,["  ",". . "],[" ",". "]).trim())&&"."!=g&&(e.descr+="<br>"+g));case 14:return f.abrupt("return",e);case 15:case "end":return f.stop()}},m,this,[[1,9]])}));return p.apply(this,
arguments)}function q(){q=_asyncToGenerator(_regenerator.mark(function m(l){var e,g,f,n,r,v,B,u,a,b,c,t=arguments;return _regenerator.wrap(function(d){for(;;)switch(d.prev=d.next){case 0:e=1<t.length&&void 0!==t[1]?t[1]:!1;g=jQuery(l.parentNode).closest(".blck").first();f=g.find(".seraph_accel_spinner");n=g.find('input[type="button"]:not(.cancel)');r=g.find('input[type="button"].cancel');v=g.find(".log");B=[{id:"3rdPartySettCompat",name:h("TestName_3rdPartySettCompat","admin.SelfDiag","seraphinite-accelerator")},
{id:"AsyncRequest",name:h("TestName_AsyncRequest","admin.SelfDiag","seraphinite-accelerator")},{id:"SetMaxExecTime",name:h("TestName_SetMaxExecTime","admin.SelfDiag","seraphinite-accelerator")},{id:"PageOptimize",name:h("TestName_PageOptimize","admin.SelfDiag","seraphinite-accelerator")},{id:"ExtCache",name:h("TestName_ExtCache","admin.SelfDiag","seraphinite-accelerator")},{id:"CronExec",name:h("TestName_CronExec","admin.SelfDiag","seraphinite-accelerator")}];v.empty();for(u=0;u<B.length;u++)a=B[u],
v.append(seraph_accel.Ui.LogItem("none",seraph_accel.Ui.Tag("strong",a.name?a.name:a.id),!1));if(!e){d.next=11;break}return d.abrupt("return");case 11:f.show(),n.prop("disabled",!0),r.prop("disabled",!1),seraph_accel.SelfDiag._int.inProgress=!0,u=0;case 16:if(!(u<B.length)){d.next=31;break}a=B[u];jQuery(v.children().get(u)).replaceWith(seraph_accel.Ui.LogItem("info",seraph_accel.Ui.Tag("strong",a.name?a.name:a.id)+h("TestRunning","admin.SelfDiag","seraphinite-accelerator"),!1));d.next=21;return A(a.id);
case 21:b=d.sent;c=h("TestSucc","admin.SelfDiag","seraphinite-accelerator");b.hr!=seraph_accel.Gen.hr.S_OK&&(c=seraph_accel.Gen.hr.Succ(b.hr)?b.hr==seraph_accel.Gen.hr.S_ABORTED?h("TestAbort","admin.SelfDiag","seraphinite-accelerator"):b.hr==seraph_accel.Gen.hr.S_FALSE?h("TestNotice","admin.SelfDiag","seraphinite-accelerator"):h("TestWarn","admin.SelfDiag","seraphinite-accelerator"):h("TestError","admin.SelfDiag","seraphinite-accelerator"));b.descr&&(c+="<br>"+b.descr);jQuery(v.children().get(u)).replaceWith(seraph_accel.Ui.LogItem(b.hr==
seraph_accel.Gen.hr.S_OK?"success":seraph_accel.Gen.hr.Succ(b.hr)?b.hr==seraph_accel.Gen.hr.S_FALSE?"normal":"warning":"error",seraph_accel.Ui.Tag("strong",a.name?a.name:a.id)+c,!1));if(seraph_accel.SelfDiag._int.inProgress){d.next=28;break}return d.abrupt("break",31);case 28:u++;d.next=16;break;case 31:f.hide(),n.prop("disabled",!1),r.prop("disabled",!0);case 34:case "end":return d.stop()}},m,this)}));return q.apply(this,arguments)}var h=seraph_accel.Wp.Loc.GetApi()._x;seraph_accel.SelfDiag={_int:{OnStart:function(k){return q.apply(this,
arguments)},OnCancel:function(k){k=jQuery(k.parentNode).closest(".blck").first();k.find(".seraph_accel_spinner");k.find('input[type="button"]:not(.cancel)');k.find('input[type="button"].cancel').prop("disabled",!0);seraph_accel.SelfDiag._int.inProgress=!1;seraph_accel.SelfDiag._int.curAjax&&seraph_accel.SelfDiag._int.curAjax.abort()},inProgress:!1}}})()})();
