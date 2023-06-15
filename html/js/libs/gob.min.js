/*! ** GOB.mx - Grafica Base v1.1.0 */
//  ** ultima modificacion: '2-1-2016';


/* Modernizr (Custom Build) | MIT & BSD
 * Build: http://modernizr.com/download/#-shiv-printshiv-load-mq-cssclasses-svg
 */
// ;window.Modernizr=function(e,t,n){function x(e){f.cssText=e}function T(e,t){return x(prefixes.join(e+";")+(t||""))}function N(e,t){return typeof e===t}function C(e,t){return!!~(""+e).indexOf(t)}function k(e,t,r){for(var i in e){var s=t[e[i]];if(s!==n)return r===!1?e[i]:N(s,"function")?s.bind(r||t):s}return!1}var r="2.8.3",i={},s=!0,o=t.documentElement,u="modernizr",a=t.createElement(u),f=a.style,l,c={}.toString,h={svg:"http://www.w3.org/2000/svg"},p={},d={},v={},m=[],g=m.slice,y,b=function(e,n,r,i){var s,a,f,l,c=t.createElement("div"),h=t.body,p=h||t.createElement("body");if(parseInt(r,10))while(r--)f=t.createElement("div"),f.id=i?i[r]:u+(r+1),c.appendChild(f);return s=["&#173;",'<style id="s',u,'">',e,"</style>"].join(""),c.id=u,(h?c:p).innerHTML+=s,p.appendChild(c),h||(p.style.background="",p.style.overflow="hidden",l=o.style.overflow,o.style.overflow="hidden",o.appendChild(p)),a=n(c,e),h?c.parentNode.removeChild(c):(p.parentNode.removeChild(p),o.style.overflow=l),!!a},w=function(t){var n=e.matchMedia||e.msMatchMedia;if(n)return n(t)&&n(t).matches||!1;var r;return b("@media "+t+" { #"+u+" { position: absolute; } }",function(t){r=(e.getComputedStyle?getComputedStyle(t,null):t.currentStyle)["position"]=="absolute"}),r},E={}.hasOwnProperty,S;!N(E,"undefined")&&!N(E.call,"undefined")?S=function(e,t){return E.call(e,t)}:S=function(e,t){return t in e&&N(e.constructor.prototype[t],"undefined")},Function.prototype.bind||(Function.prototype.bind=function(t){var n=this;if(typeof n!="function")throw new TypeError;var r=g.call(arguments,1),i=function(){if(this instanceof i){var e=function(){};e.prototype=n.prototype;var s=new e,o=n.apply(s,r.concat(g.call(arguments)));return Object(o)===o?o:s}return n.apply(t,r.concat(g.call(arguments)))};return i}),p.svg=function(){return!!t.createElementNS&&!!t.createElementNS(h.svg,"svg").createSVGRect};for(var L in p)S(p,L)&&(y=L.toLowerCase(),i[y]=p[L](),m.push((i[y]?"":"no-")+y));return i.addTest=function(e,t){if(typeof e=="object")for(var r in e)S(e,r)&&i.addTest(r,e[r]);else{e=e.toLowerCase();if(i[e]!==n)return i;t=typeof t=="function"?t():t,typeof s!="undefined"&&s&&(o.className+=" "+(t?"":"no-")+e),i[e]=t}return i},x(""),a=l=null,function(e,t){function c(e,t){var n=e.createElement("p"),r=e.getElementsByTagName("head")[0]||e.documentElement;return n.innerHTML="x<style>"+t+"</style>",r.insertBefore(n.lastChild,r.firstChild)}function h(){var e=y.elements;return typeof e=="string"?e.split(" "):e}function p(e){var t=f[e[u]];return t||(t={},a++,e[u]=a,f[a]=t),t}function d(e,n,r){n||(n=t);if(l)return n.createElement(e);r||(r=p(n));var o;return r.cache[e]?o=r.cache[e].cloneNode():s.test(e)?o=(r.cache[e]=r.createElem(e)).cloneNode():o=r.createElem(e),o.canHaveChildren&&!i.test(e)&&!o.tagUrn?r.frag.appendChild(o):o}function v(e,n){e||(e=t);if(l)return e.createDocumentFragment();n=n||p(e);var r=n.frag.cloneNode(),i=0,s=h(),o=s.length;for(;i<o;i++)r.createElement(s[i]);return r}function m(e,t){t.cache||(t.cache={},t.createElem=e.createElement,t.createFrag=e.createDocumentFragment,t.frag=t.createFrag()),e.createElement=function(n){return y.shivMethods?d(n,e,t):t.createElem(n)},e.createDocumentFragment=Function("h,f","return function(){var n=f.cloneNode(),c=n.createElement;h.shivMethods&&("+h().join().replace(/[\w\-]+/g,function(e){return t.createElem(e),t.frag.createElement(e),'c("'+e+'")'})+");return n}")(y,t.frag)}function g(e){e||(e=t);var n=p(e);return y.shivCSS&&!o&&!n.hasCSS&&(n.hasCSS=!!c(e,"article,aside,dialog,figcaption,figure,footer,header,hgroup,main,nav,section{display:block}mark{background:#FF0;color:#000}template{display:none}")),l||m(e,n),e}var n="3.7.0",r=e.html5||{},i=/^<|^(?:button|map|select|textarea|object|iframe|option|optgroup)$/i,s=/^(?:a|b|code|div|fieldset|h1|h2|h3|h4|h5|h6|i|label|li|ol|p|q|span|strong|style|table|tbody|td|th|tr|ul)$/i,o,u="_html5shiv",a=0,f={},l;(function(){try{var e=t.createElement("a");e.innerHTML="<xyz></xyz>",o="hidden"in e,l=e.childNodes.length==1||function(){t.createElement("a");var e=t.createDocumentFragment();return typeof e.cloneNode=="undefined"||typeof e.createDocumentFragment=="undefined"||typeof e.createElement=="undefined"}()}catch(n){o=!0,l=!0}})();var y={elements:r.elements||"abbr article aside audio bdi canvas data datalist details dialog figcaption figure footer header hgroup main mark meter nav output progress section summary template time video",version:n,shivCSS:r.shivCSS!==!1,supportsUnknownElements:l,shivMethods:r.shivMethods!==!1,type:"default",shivDocument:g,createElement:d,createDocumentFragment:v};e.html5=y,g(t)}(this,t),i._version=r,i.mq=w,i.testStyles=b,o.className=o.className.replace(/(^|\s)no-js(\s|$)/,"$1$2")+(s?" js "+m.join(" "):""),i}(this,this.document),function(e,t){function l(e,t){var n=e.createElement("p"),r=e.getElementsByTagName("head")[0]||e.documentElement;return n.innerHTML="x<style>"+t+"</style>",r.insertBefore(n.lastChild,r.firstChild)}function c(){var e=g.elements;return typeof e=="string"?e.split(" "):e}function h(e){var t=a[e[o]];return t||(t={},u++,e[o]=u,a[u]=t),t}function p(e,n,s){n||(n=t);if(f)return n.createElement(e);s||(s=h(n));var o;return s.cache[e]?o=s.cache[e].cloneNode():i.test(e)?o=(s.cache[e]=s.createElem(e)).cloneNode():o=s.createElem(e),o.canHaveChildren&&!r.test(e)?s.frag.appendChild(o):o}function d(e,n){e||(e=t);if(f)return e.createDocumentFragment();n=n||h(e);var r=n.frag.cloneNode(),i=0,s=c(),o=s.length;for(;i<o;i++)r.createElement(s[i]);return r}function v(e,t){t.cache||(t.cache={},t.createElem=e.createElement,t.createFrag=e.createDocumentFragment,t.frag=t.createFrag()),e.createElement=function(n){return g.shivMethods?p(n,e,t):t.createElem(n)},e.createDocumentFragment=Function("h,f","return function(){var n=f.cloneNode(),c=n.createElement;h.shivMethods&&("+c().join().replace(/\w+/g,function(e){return t.createElem(e),t.frag.createElement(e),'c("'+e+'")'})+");return n}")(g,t.frag)}function m(e){e||(e=t);var n=h(e);return g.shivCSS&&!s&&!n.hasCSS&&(n.hasCSS=!!l(e,"article,aside,figcaption,figure,footer,header,hgroup,nav,section{display:block}mark{background:#FF0;color:#000}")),f||v(e,n),e}function E(e){var t,n=e.getElementsByTagName("*"),r=n.length,i=RegExp("^(?:"+c().join("|")+")$","i"),s=[];while(r--)t=n[r],i.test(t.nodeName)&&s.push(t.applyElement(S(t)));return s}function S(e){var t,n=e.attributes,r=n.length,i=e.ownerDocument.createElement(b+":"+e.nodeName);while(r--)t=n[r],t.specified&&i.setAttribute(t.nodeName,t.nodeValue);return i.style.cssText=e.style.cssText,i}function x(e){var t,n=e.split("{"),r=n.length,i=RegExp("(^|[\\s,>+~])("+c().join("|")+")(?=[[\\s,>+~#.:]|$)","gi"),s="$1"+b+"\\:$2";while(r--)t=n[r]=n[r].split("}"),t[t.length-1]=t[t.length-1].replace(i,s),n[r]=t.join("}");return n.join("{")}function T(e){var t=e.length;while(t--)e[t].removeNode()}function N(e){function o(){clearTimeout(r._removeSheetTimer),t&&t.removeNode(!0),t=null}var t,n,r=h(e),i=e.namespaces,s=e.parentWindow;return!w||e.printShived?e:(typeof i[b]=="undefined"&&i.add(b),s.attachEvent("onbeforeprint",function(){o();var r,i,s,u=e.styleSheets,a=[],f=u.length,c=Array(f);while(f--)c[f]=u[f];while(s=c.pop())if(!s.disabled&&y.test(s.media)){try{r=s.imports,i=r.length}catch(h){i=0}for(f=0;f<i;f++)c.push(r[f]);try{a.push(s.cssText)}catch(h){}}a=x(a.reverse().join("")),n=E(e),t=l(e,a)}),s.attachEvent("onafterprint",function(){T(n),clearTimeout(r._removeSheetTimer),r._removeSheetTimer=setTimeout(o,500)}),e.printShived=!0,e)}var n=e.html5||{},r=/^<|^(?:button|map|select|textarea|object|iframe|option|optgroup)$/i,i=/^<|^(?:a|b|button|code|div|fieldset|form|h1|h2|h3|h4|h5|h6|i|iframe|img|input|label|li|link|ol|option|p|param|q|script|select|span|strong|style|table|tbody|td|textarea|tfoot|th|thead|tr|ul)$/i,s,o="_html5shiv",u=0,a={},f;(function(){try{var e=t.createElement("a");e.innerHTML="<xyz></xyz>",s="hidden"in e,f=e.childNodes.length==1||function(){t.createElement("a");var e=t.createDocumentFragment();return typeof e.cloneNode=="undefined"||typeof e.createDocumentFragment=="undefined"||typeof e.createElement=="undefined"}()}catch(n){s=!0,f=!0}})();var g={elements:n.elements||"abbr article aside audio bdi canvas data datalist details figcaption figure footer header hgroup mark meter nav output progress section summary time video",shivCSS:n.shivCSS!==!1,supportsUnknownElements:f,shivMethods:n.shivMethods!==!1,type:"default",shivDocument:m,createElement:p,createDocumentFragment:d};e.html5=g,m(t);var y=/^$|\b(?:all|print)\b/,b="html5shiv",w=!f&&function(){var n=t.documentElement;return typeof t.namespaces!="undefined"&&typeof t.parentWindow!="undefined"&&typeof n.applyElement!="undefined"&&typeof n.removeNode!="undefined"&&typeof e.attachEvent!="undefined"}();g.type+=" print",g.shivPrint=N,N(t)}(this,document),function(e,t,n){function r(e){return"[object Function]"==d.call(e)}function i(e){return"string"==typeof e}function s(){}function o(e){return!e||"loaded"==e||"complete"==e||"uninitialized"==e}function u(){var e=v.shift();m=1,e?e.t?h(function(){("c"==e.t?k.injectCss:k.injectJs)(e.s,0,e.a,e.x,e.e,1)},0):(e(),u()):m=0}function a(e,n,r,i,s,a,f){function l(t){if(!d&&o(c.readyState)&&(w.r=d=1,!m&&u(),c.onload=c.onreadystatechange=null,t)){"img"!=e&&h(function(){b.removeChild(c)},50);for(var r in T[n])T[n].hasOwnProperty(r)&&T[n][r].onload()}}var f=f||k.errorTimeout,c=t.createElement(e),d=0,g=0,w={t:r,s:n,e:s,a:a,x:f};1===T[n]&&(g=1,T[n]=[]),"object"==e?c.data=n:(c.src=n,c.type=e),c.width=c.height="0",c.onerror=c.onload=c.onreadystatechange=function(){l.call(this,g)},v.splice(i,0,w),"img"!=e&&(g||2===T[n]?(b.insertBefore(c,y?null:p),h(l,f)):T[n].push(c))}function f(e,t,n,r,s){return m=0,t=t||"j",i(e)?a("c"==t?E:w,e,t,this.i++,n,r,s):(v.splice(this.i++,0,e),1==v.length&&u()),this}function l(){var e=k;return e.loader={load:f,i:0},e}var c=t.documentElement,h=e.setTimeout,p=t.getElementsByTagName("script")[0],d={}.toString,v=[],m=0,g="MozAppearance"in c.style,y=g&&!!t.createRange().compareNode,b=y?c:p.parentNode,c=e.opera&&"[object Opera]"==d.call(e.opera),c=!!t.attachEvent&&!c,w=g?"object":c?"script":"img",E=c?"script":w,S=Array.isArray||function(e){return"[object Array]"==d.call(e)},x=[],T={},N={timeout:function(e,t){return t.length&&(e.timeout=t[0]),e}},C,k;k=function(e){function t(e){var e=e.split("!"),t=x.length,n=e.pop(),r=e.length,n={url:n,origUrl:n,prefixes:e},i,s,o;for(s=0;s<r;s++)o=e[s].split("="),(i=N[o.shift()])&&(n=i(n,o));for(s=0;s<t;s++)n=x[s](n);return n}function o(e,i,s,o,u){var a=t(e),f=a.autoCallback;a.url.split(".").pop().split("?").shift(),a.bypass||(i&&(i=r(i)?i:i[e]||i[o]||i[e.split("/").pop().split("?")[0]]),a.instead?a.instead(e,i,s,o,u):(T[a.url]?a.noexec=!0:T[a.url]=1,s.load(a.url,a.forceCSS||!a.forceJS&&"css"==a.url.split(".").pop().split("?").shift()?"c":n,a.noexec,a.attrs,a.timeout),(r(i)||r(f))&&s.load(function(){l(),i&&i(a.origUrl,u,o),f&&f(a.origUrl,u,o),T[a.url]=2})))}function u(e,t){function n(e,n){if(e){if(i(e))n||(f=function(){var e=[].slice.call(arguments);l.apply(this,e),c()}),o(e,f,t,0,u);else if(Object(e)===e)for(p in h=function(){var t=0,n;for(n in e)e.hasOwnProperty(n)&&t++;return t}(),e)e.hasOwnProperty(p)&&(!n&&!--h&&(r(f)?f=function(){var e=[].slice.call(arguments);l.apply(this,e),c()}:f[p]=function(e){return function(){var t=[].slice.call(arguments);e&&e.apply(this,t),c()}}(l[p])),o(e[p],f,t,p,u))}else!n&&c()}var u=!!e.test,a=e.load||e.both,f=e.callback||s,l=f,c=e.complete||s,h,p;n(u?e.yep:e.nope,!!a),a&&n(a)}var a,f,c=this.yepnope.loader;if(i(e))o(e,0,c,0);else if(S(e))for(a=0;a<e.length;a++)f=e[a],i(f)?o(f,0,c,0):S(f)?k(f):Object(f)===f&&u(f,c);else Object(e)===e&&u(e,c)},k.addPrefix=function(e,t){N[e]=t},k.addFilter=function(e){x.push(e)},k.errorTimeout=1e4,null==t.readyState&&t.addEventListener&&(t.readyState="loading",t.addEventListener("DOMContentLoaded",C=function(){t.removeEventListener("DOMContentLoaded",C,0),t.readyState="complete"},0)),e.yepnope=l(),e.yepnope.executeStack=u,e.yepnope.injectJs=function(e,n,r,i,a,f){var l=t.createElement("script"),c,d,i=i||k.errorTimeout;l.src=e;for(d in r)l.setAttribute(d,r[d]);n=f?u:n||s,l.onreadystatechange=l.onload=function(){!c&&o(l.readyState)&&(c=1,n(),l.onload=l.onreadystatechange=null)},h(function(){c||(c=1,n(1))},i),a?l.onload():p.parentNode.insertBefore(l,p)},e.yepnope.injectCss=function(e,n,r,i,o,a){var i=t.createElement("link"),f,n=a?u:n||s;i.href=e,i.rel="stylesheet",i.type="text/css";for(f in r)i.setAttribute(f,r[f]);o||(p.parentNode.insertBefore(i,p),h(n,0))}}(this,document),Modernizr.load=function(){yepnope.apply(window,[].slice.call(arguments,0))};

//'use strict';

function _addEvent(e, evt, handler){

    if(typeof handler !== 'function')
        return;

    if (e.addEventListener)
        e.addEventListener(evt, handler, false);
    else if (e.attachEvent)
        e.attachEvent("on" + evt, handler);
    else
    {
        var oldHandler = e["on" + evt];
    }
}
var _events = ["ready"];
var _myLib = function(item){
    function eventWorker(item, event){
        this.add = function(handler){
            _addEvent(item, event, handler);
        };
    }
    for(var i=0;i<_events.length;i++)
        this[_events[i]] = (new eventWorker(item, _events[i])).add;
};
var $gmx = function(item){
    return new _myLib(item);
};
// Custom event for ready gobmx-framework


(function(){

    // Variable de la URL que se encuentra en Gruntfile.js para obtener la URl segÃƒÂºn ambiente.
    var root ='https://framework-gb.cdn.gob.mx/';

    var path =  root + 'assets/';
    var imagesPath = path + 'images/';
    var scriptsPath = path + 'scripts/';
    var stylesPath = path + 'styles/';
    var myVar;


    // variable para cargar ÃƒÂºnicamente el script de main donde viene header y footer
    var mainScript = [scriptsPath + 'main.js'];
    // variable para cargar ambos scripts (plugins.js trae bootstrap.js)
    var allScripts = [scriptsPath + 'plugins.js', scriptsPath + 'main.js'];

    // funciÃƒÂ³n que sirve para verificar si existe el meta tag con propiedad = gobmxhelper y content = no plugins.
    function isMetaHelper(){
      var metas = document.getElementsByTagName('meta');

      function isMeta() {
        for (var i = 0; i < metas.length; i++) {
          if ( metas[i].getAttribute('property') === 'gobmxhelper') {
            return metas[i].getAttribute('content');
          }
        }
      }
      if( isMeta() === 'no plugins') { return true; } else { return false; }
    }

    // funciÃƒÂ³n que nos ayudarÃƒÂ¡ a cargar ÃƒÂºnicamente el main.js si existe el meta gobmxhelper, de lo contrario cargar main.js y plugins.js
    function loadScriptsMeta() {
        if ( !isMetaHelper() ) {
            loadScripts(allScripts);
        } else {
            loadScripts(mainScript);
        }
    }

    // se revisa que no exista Modernizr primero para cargarlo al DOM, para despuÃƒÂ©s mandar a llamar la funcion de carga de scripts.
    if(!window.Modernizr){
        var script = document.createElement('script');
        script.type = 'text/javascript';
        script.src = scriptsPath + 'vendor/modernizr.js';
        document.getElementsByTagName('head')[0].appendChild(script);

        var pace = document.createElement('script');
        pace.type = 'text/javascript';
        pace.src = scriptsPath + 'vendor/pace.min.js';
        document.getElementsByTagName('head')[0].appendChild(pace);

        var analitycs = document.createElement('script');
        analitycs.type = 'text/javascript';
        analitycs.src = scriptsPath + 'vendor/analitycs.js';
        document.getElementsByTagName('head')[0].appendChild(analitycs);

        window.onload = function(){
            loadScriptsMeta();
        };

    } else {
        loadScriptsMeta();
    };

    // funciÃƒÂ³n que ayuda como callback.
    function setTime( func ) {
        myVar = setTimeout(function(){ func }, 100);
    };

    function loadScripts( scriptsArr ){
        if (!window.jQuery) {

            Modernizr.load([{
                load: '//ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js',
                complete: function () {
                  if ( !window.jQuery ) {
                        Modernizr.load( root + 'jquery.min.js');
                  }
                }
            }, {
                load: scriptsArr
              }
            ]);
        } else {
            Modernizr.load([{
                 load: scriptsArr
            }]);
        }
    }

})();