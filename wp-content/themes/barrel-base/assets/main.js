(function(a){function b(d){if(c[d])return c[d].exports;var e=c[d]={i:d,l:!1,exports:{}};return a[d].call(e.exports,e,e.exports,b),e.l=!0,e.exports}var c={};return b.m=a,b.c=c,b.d=function(a,c,d){b.o(a,c)||Object.defineProperty(a,c,{configurable:!1,enumerable:!0,get:d})},b.n=function(a){var c=a&&a.__esModule?function(){return a['default']}:function(){return a};return b.d(c,'a',c),c},b.o=function(a,b){return Object.prototype.hasOwnProperty.call(a,b)},b.p='/wp-content/themes/barrel-base/assets',b(b.s=1)})([function(a,b,c){function d(a){return c(e(a))}function e(a){var b=f[a];if(!(b+1))throw new Error('Cannot find module \''+a+'\'.');return b}var f={"./header/header.js":5,"./hero/hero.js":6};d.keys=function(){return Object.keys(f)},d.resolve=e,a.exports=d,d.id=0},function(a,b,c){c(2),a.exports=c(3)},function(){},function(a,b,c){'use strict';var d=c(4),e=function(a){return a&&a.__esModule?a:{default:a}}(d);document.addEventListener('DOMContentLoaded',function(){(0,e.default)({module:'modules'}).mount()})},function(a,b,c){'use strict';function d(a){if(Array.isArray(a)){for(var b=0,c=Array(a.length);b<a.length;b++)c[b]=a[b];return c}return Array.from(a)}function e(a){return Array.isArray(a)?a:Array.from(a)}function f(a,b){for(var c,e=arguments.length,f=Array(2<e?e-2:0),g=2;g<e;g++)f[g-2]=arguments[g];(c=console)[a].apply(c,['\u2699\uFE0F micromanager -'].concat(d(h[b](f))))}Object.defineProperty(b,'__esModule',{value:!0});var g={},h={duplicate:function(a){var b=e(a),c=b[0],f=b.slice(1);return['a duplicate key '+c+' was found in the cache. This instance will be overwritten.'].concat(d(f))},undefined:function(a){var b=e(a),c=b[0],f=b.slice(1);return['can\'t find '+c+' in the cache'].concat(d(f))},error:function(a){var b=e(a),c=b[0],f=b.slice(1);return[c+' threw an error\n\n'].concat(d(f))}};b.default=function(a){var b=1<arguments.length&&arguments[1]!==void 0?arguments[1]:document;return{cache:{set:function(a,b){g[a]&&f('warn','duplicate',a),g[a]=b},get:function(a){try{return g[a]}catch(b){return f('warn','undefined',a),null}},dump:function(){return g}},mount:function(){for(var d in a)for(var g,e='data-'+d,h=[].slice.call(b.querySelectorAll('['+e+']')),j=a[d].replace(/^\/|\/$/,''),k=0;k<h.length;k++){g=h[k].getAttribute(e);try{var i='module'==d?c(0)('./'+g+'/'+g+'.js').default(h[k]):c(0)('./'+g+'.js').default(h[k]);h[k].removeAttribute(e),i&&this.cache.set(i.displayName||g,i)}catch(a){f('error','error',g,a)}}return this},unmount:function(){for(var a in g){var b=g[a];b.unmount&&(b.unmount(),delete g[a])}return this}}}},function(a){'use strict';a.exports=function(a){this.el=a}},function(a,b){'use strict';Object.defineProperty(b,'__esModule',{value:!0}),b.default=function(a){this.el=a}}]);