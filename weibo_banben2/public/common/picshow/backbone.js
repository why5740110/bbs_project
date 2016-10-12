(function(){function q(k,a,b){if(k===a)return 0!==k||1/k==1/a;if(null==k||null==a)return k===a;k._chain&&(k=k._wrapped);a._chain&&(a=a._wrapped);if(k.isEqual&&d.isFunction(k.isEqual))return k.isEqual(a);if(a.isEqual&&d.isFunction(a.isEqual))return a.isEqual(k);var c=m.call(k);if(c!=m.call(a))return!1;switch(c){case "[object String]":return k==String(a);case "[object Number]":return k!=+k?a!=+a:0==k?1/k==1/a:k==+a;case "[object Date]":case "[object Boolean]":return+k==+a;case "[object RegExp]":return k.source==
a.source&&k.global==a.global&&k.multiline==a.multiline&&k.ignoreCase==a.ignoreCase}if("object"!=typeof k||"object"!=typeof a)return!1;for(var g=b.length;g--;)if(b[g]==k)return!0;b.push(k);var g=0,e=!0;if("[object Array]"==c){if(g=k.length,e=g==a.length)for(;g--&&(e=g in k==g in a&&q(k[g],a[g],b)););}else{if("constructor"in k!="constructor"in a||k.constructor!=a.constructor)return!1;for(var f in k)if(d.has(k,f)&&(g++,!(e=d.has(a,f)&&q(k[f],a[f],b))))break;if(e){for(f in a)if(d.has(a,f)&&!g--)break;
e=!g}}b.pop();return e}var B=this,K=B._,w={},h=Array.prototype,f=Object.prototype,l=h.slice,C=h.unshift,m=f.toString,u=f.hasOwnProperty,x=h.forEach,D=h.map,F=h.reduce,G=h.reduceRight,H=h.filter,r=h.every,y=h.some,z=h.indexOf,E=h.lastIndexOf,f=Array.isArray,L=Object.keys,A=Function.prototype.bind,d=function(a){return new v(a)};"undefined"!==typeof exports?("undefined"!==typeof module&&module.exports&&(exports=module.exports=d),exports._=d):B._=d;d.VERSION="1.3.3";var n=d.each=d.forEach=function(a,
b,c){if(null!=a)if(x&&a.forEach===x)a.forEach(b,c);else if(a.length===+a.length)for(var s=0,g=a.length;s<g&&!(s in a&&b.call(c,a[s],s,a)===w);s++);else for(s in a)if(d.has(a,s)&&b.call(c,a[s],s,a)===w)break};d.map=d.collect=function(a,b,d){var c=[];if(null==a)return c;if(D&&a.map===D)return a.map(b,d);n(a,function(a,k,g){c[c.length]=b.call(d,a,k,g)});a.length===+a.length&&(c.length=a.length);return c};d.reduce=d.foldl=d.inject=function(a,b,c,g){var e=2<arguments.length;null==a&&(a=[]);if(F&&a.reduce===
F)return g&&(b=d.bind(b,g)),e?a.reduce(b,c):a.reduce(b);n(a,function(a,k,d){e?c=b.call(g,c,a,k,d):(c=a,e=!0)});if(!e)throw new TypeError("Reduce of empty array with no initial value");return c};d.reduceRight=d.foldr=function(a,b,c,g){var e=2<arguments.length;null==a&&(a=[]);if(G&&a.reduceRight===G)return g&&(b=d.bind(b,g)),e?a.reduceRight(b,c):a.reduceRight(b);var f=d.toArray(a).reverse();g&&!e&&(b=d.bind(b,g));return e?d.reduce(f,b,c,g):d.reduce(f,b)};d.find=d.detect=function(a,b,c){var d;I(a,function(a,
k,g){if(b.call(c,a,k,g))return d=a,!0});return d};d.filter=d.select=function(a,b,c){var d=[];if(null==a)return d;if(H&&a.filter===H)return a.filter(b,c);n(a,function(a,k,g){b.call(c,a,k,g)&&(d[d.length]=a)});return d};d.reject=function(a,b,d){var c=[];if(null==a)return c;n(a,function(a,k,g){b.call(d,a,k,g)||(c[c.length]=a)});return c};d.every=d.all=function(a,b,c){var d=!0;if(null==a)return d;if(r&&a.every===r)return a.every(b,c);n(a,function(a,k,g){if(!(d=d&&b.call(c,a,k,g)))return w});return!!d};
var I=d.some=d.any=function(a,b,c){b||(b=d.identity);var g=!1;if(null==a)return g;if(y&&a.some===y)return a.some(b,c);n(a,function(a,k,d){if(g||(g=b.call(c,a,k,d)))return w});return!!g};d.include=d.contains=function(a,b){var c=!1;return null==a?c:z&&a.indexOf===z?-1!=a.indexOf(b):c=I(a,function(a){return a===b})};d.invoke=function(a,b){var c=l.call(arguments,2);return d.map(a,function(a){return(d.isFunction(b)?b||a:a[b]).apply(a,c)})};d.pluck=function(a,b){return d.map(a,function(a){return a[b]})};
d.max=function(a,b,c){if(!b&&d.isArray(a)&&a[0]===+a[0])return Math.max.apply(Math,a);if(!b&&d.isEmpty(a))return-Infinity;var g={computed:-Infinity};n(a,function(a,k,d){k=b?b.call(c,a,k,d):a;k>=g.computed&&(g={value:a,computed:k})});return g.value};d.min=function(a,b,c){if(!b&&d.isArray(a)&&a[0]===+a[0])return Math.min.apply(Math,a);if(!b&&d.isEmpty(a))return Infinity;var g={computed:Infinity};n(a,function(a,k,d){k=b?b.call(c,a,k,d):a;k<g.computed&&(g={value:a,computed:k})});return g.value};d.shuffle=
function(a){var b=[],c;n(a,function(a,k,d){c=Math.floor(Math.random()*(k+1));b[k]=b[c];b[c]=a});return b};d.sortBy=function(a,b,c){var g=d.isFunction(b)?b:function(a){return a[b]};return d.pluck(d.map(a,function(a,b,k){return{value:a,criteria:g.call(c,a,b,k)}}).sort(function(a,b){var k=a.criteria,c=b.criteria;return void 0===k?1:void 0===c?-1:k<c?-1:k>c?1:0}),"value")};d.groupBy=function(a,b){var c={},g=d.isFunction(b)?b:function(a){return a[b]};n(a,function(a,b){var k=g(a,b);(c[k]||(c[k]=[])).push(a)});
return c};d.sortedIndex=function(a,b,c){c||(c=d.identity);for(var g=0,e=a.length;g<e;){var f=g+e>>1;c(a[f])<c(b)?g=f+1:e=f}return g};d.toArray=function(a){return!a?[]:d.isArray(a)||d.isArguments(a)?l.call(a):a.toArray&&d.isFunction(a.toArray)?a.toArray():d.values(a)};d.size=function(a){return d.isArray(a)?a.length:d.keys(a).length};d.first=d.head=d.take=function(a,b,c){return null!=b&&!c?l.call(a,0,b):a[0]};d.initial=function(a,b,c){return l.call(a,0,a.length-(null==b||c?1:b))};d.last=function(a,
b,c){return null!=b&&!c?l.call(a,Math.max(a.length-b,0)):a[a.length-1]};d.rest=d.tail=function(a,b,c){return l.call(a,null==b||c?1:b)};d.compact=function(a){return d.filter(a,function(a){return!!a})};d.flatten=function(a,b){return d.reduce(a,function(a,k){if(d.isArray(k))return a.concat(b?k:d.flatten(k));a[a.length]=k;return a},[])};d.without=function(a){return d.difference(a,l.call(arguments,1))};d.uniq=d.unique=function(a,b,c){c=c?d.map(a,c):a;var g=[];3>a.length&&(b=!0);d.reduce(c,function(c,e,
N){if(b?d.last(c)!==e||!c.length:!d.include(c,e))c.push(e),g.push(a[N]);return c},[]);return g};d.union=function(){return d.uniq(d.flatten(arguments,!0))};d.intersection=d.intersect=function(a){var b=l.call(arguments,1);return d.filter(d.uniq(a),function(a){return d.every(b,function(b){return 0<=d.indexOf(b,a)})})};d.difference=function(a){var b=d.flatten(l.call(arguments,1),!0);return d.filter(a,function(a){return!d.include(b,a)})};d.zip=function(){for(var a=l.call(arguments),b=d.max(d.pluck(a,"length")),
c=Array(b),g=0;g<b;g++)c[g]=d.pluck(a,""+g);return c};d.indexOf=function(a,b,c){if(null==a)return-1;var g;if(c)return c=d.sortedIndex(a,b),a[c]===b?c:-1;if(z&&a.indexOf===z)return a.indexOf(b);c=0;for(g=a.length;c<g;c++)if(c in a&&a[c]===b)return c;return-1};d.lastIndexOf=function(a,b){if(null==a)return-1;if(E&&a.lastIndexOf===E)return a.lastIndexOf(b);for(var c=a.length;c--;)if(c in a&&a[c]===b)return c;return-1};d.range=function(a,b,c){1>=arguments.length&&(b=a||0,a=0);c=arguments[2]||1;for(var d=
Math.max(Math.ceil((b-a)/c),0),g=0,e=Array(d);g<d;)e[g++]=a,a+=c;return e};var t=function(){};d.bind=function(a,b){var c,g;if(a.bind===A&&A)return A.apply(a,l.call(arguments,1));if(!d.isFunction(a))throw new TypeError;g=l.call(arguments,2);return c=function(){if(!(this instanceof c))return a.apply(b,g.concat(l.call(arguments)));t.prototype=a.prototype;var d=new t,e=a.apply(d,g.concat(l.call(arguments)));return Object(e)===e?e:d}};d.bindAll=function(a){var b=l.call(arguments,1);0==b.length&&(b=d.functions(a));
n(b,function(b){a[b]=d.bind(a[b],a)});return a};d.memoize=function(a,b){var c={};b||(b=d.identity);return function(){var g=b.apply(this,arguments);return d.has(c,g)?c[g]:c[g]=a.apply(this,arguments)}};d.delay=function(a,b){var c=l.call(arguments,2);return setTimeout(function(){return a.apply(null,c)},b)};d.defer=function(a){return d.delay.apply(d,[a,1].concat(l.call(arguments,1)))};d.throttle=function(a,b){var c,g,e,f,p,h,l=d.debounce(function(){p=f=!1},b);return function(){c=this;g=arguments;e||
(e=setTimeout(function(){e=null;p&&a.apply(c,g);l()},b));f?p=!0:h=a.apply(c,g);l();f=!0;return h}};d.debounce=function(a,b,c){var d;return function(){var g=this,e=arguments;c&&!d&&a.apply(g,e);clearTimeout(d);d=setTimeout(function(){d=null;c||a.apply(g,e)},b)}};d.once=function(a){var b=!1,c;return function(){if(b)return c;b=!0;return c=a.apply(this,arguments)}};d.wrap=function(a,b){return function(){var c=[a].concat(l.call(arguments,0));return b.apply(this,c)}};d.compose=function(){var a=arguments;
return function(){for(var b=arguments,c=a.length-1;0<=c;c--)b=[a[c].apply(this,b)];return b[0]}};d.after=function(a,b){return 0>=a?b():function(){if(1>--a)return b.apply(this,arguments)}};d.keys=L||function(a){if(a!==Object(a))throw new TypeError("Invalid object");var b=[],c;for(c in a)d.has(a,c)&&(b[b.length]=c);return b};d.values=function(a){return d.map(a,d.identity)};d.functions=d.methods=function(a){var b=[],c;for(c in a)d.isFunction(a[c])&&b.push(c);return b.sort()};d.extend=function(a){n(l.call(arguments,
1),function(b){for(var c in b)a[c]=b[c]});return a};d.pick=function(a){var b={};n(d.flatten(l.call(arguments,1)),function(c){c in a&&(b[c]=a[c])});return b};d.defaults=function(a){n(l.call(arguments,1),function(b){for(var c in b)null==a[c]&&(a[c]=b[c])});return a};d.clone=function(a){return!d.isObject(a)?a:d.isArray(a)?a.slice():d.extend({},a)};d.tap=function(a,b){b(a);return a};d.isEqual=function(a,b){return q(a,b,[])};d.isEmpty=function(a){if(null==a)return!0;if(d.isArray(a)||d.isString(a))return 0===
a.length;for(var b in a)if(d.has(a,b))return!1;return!0};d.isElement=function(a){return!!(a&&1==a.nodeType)};d.isArray=f||function(a){return"[object Array]"==m.call(a)};d.isObject=function(a){return a===Object(a)};d.isArguments=function(a){return"[object Arguments]"==m.call(a)};d.isArguments(arguments)||(d.isArguments=function(a){return!(!a||!d.has(a,"callee"))});d.isFunction=function(a){return"[object Function]"==m.call(a)};d.isString=function(a){return"[object String]"==m.call(a)};d.isNumber=function(a){return"[object Number]"==
m.call(a)};d.isFinite=function(a){return d.isNumber(a)&&isFinite(a)};d.isNaN=function(a){return a!==a};d.isBoolean=function(a){return!0===a||!1===a||"[object Boolean]"==m.call(a)};d.isDate=function(a){return"[object Date]"==m.call(a)};d.isRegExp=function(a){return"[object RegExp]"==m.call(a)};d.isNull=function(a){return null===a};d.isUndefined=function(a){return void 0===a};d.has=function(a,b){return u.call(a,b)};d.noConflict=function(){B._=K;return this};d.identity=function(a){return a};d.times=
function(a,b,c){for(var d=0;d<a;d++)b.call(c,d)};d.escape=function(a){return(""+a).replace(/&/g,"&amp;").replace(/</g,"&lt;").replace(/>/g,"&gt;").replace(/"/g,"&quot;").replace(/'/g,"&#x27;").replace(/\//g,"&#x2F;")};d.result=function(a,b){if(null==a)return null;var c=a[b];return d.isFunction(c)?c.call(a):c};d.mixin=function(a){n(d.functions(a),function(b){O(b,d[b]=a[b])})};var J=0;d.uniqueId=function(a){var b=J++;return a?a+b:b};d.templateSettings={evaluate:/<%([\s\S]+?)%>/g,interpolate:/<%=([\s\S]+?)%>/g,
escape:/<%-([\s\S]+?)%>/g};var a=/.^/,b={"\\":"\\","'":"'",r:"\r",n:"\n",t:"\t",u2028:"\u2028",u2029:"\u2029"},c;for(c in b)b[b[c]]=c;var g=/\\|'|\r|\n|\t|\u2028|\u2029/g,e=/\\(\\|'|r|n|t|u2028|u2029)/g,p=function(a){return a.replace(e,function(a,c){return b[c]})};d.template=function(c,e,f){f=d.defaults(f||{},d.templateSettings);c="__p+='"+c.replace(g,function(a){return"\\"+b[a]}).replace(f.escape||a,function(a,b){return"'+\n_.escape("+p(b)+")+\n'"}).replace(f.interpolate||a,function(a,b){return"'+\n("+
p(b)+")+\n'"}).replace(f.evaluate||a,function(a,b){return"';\n"+p(b)+"\n;__p+='"})+"';\n";f.variable||(c="with(obj||{}){\n"+c+"}\n");c="var __p='';var print=function(){__p+=Array.prototype.join.call(arguments, '')};\n"+c+"return __p;\n";var h=new Function(f.variable||"obj","_",c);if(e)return h(e,d);e=function(a){return h.call(this,a,d)};e.source="function("+(f.variable||"obj")+"){\n"+c+"}";return e};d.chain=function(a){return d(a).chain()};var v=function(a){this._wrapped=a};d.prototype=v.prototype;
var M=function(a,b){return b?d(a).chain():a},O=function(a,b){v.prototype[a]=function(){var a=l.call(arguments);C.call(a,this._wrapped);return M(b.apply(d,a),this._chain)}};d.mixin(d);n("pop push reverse shift sort splice unshift".split(" "),function(a){var b=h[a];v.prototype[a]=function(){var c=this._wrapped;b.apply(c,arguments);var d=c.length;("shift"==a||"splice"==a)&&0===d&&delete c[0];return M(c,this._chain)}});n(["concat","join","slice"],function(a){var b=h[a];v.prototype[a]=function(){return M(b.apply(this._wrapped,
arguments),this._chain)}});v.prototype.chain=function(){this._chain=!0;return this};v.prototype.value=function(){return this._wrapped}}).call(this);
(function(){var q=this,B=q.Backbone,K=Array.prototype.slice,w=Array.prototype.splice,h;h="undefined"!==typeof exports?exports:q.Backbone={};h.VERSION="0.9.2";var f=q._;!f&&"undefined"!==typeof require&&(f=require("underscore"));var l=q.jQuery||q.Zepto||q.ender;h.setDomLibrary=function(a){l=a};h.noConflict=function(){q.Backbone=B;return this};h.emulateHTTP=!1;h.emulateJSON=!1;var C=/\s+/,m=h.Events={on:function(a,b,c){var d,e,f,h,l;if(!b)return this;a=a.split(C);for(d=this._callbacks||(this._callbacks=
{});e=a.shift();)f=(l=d[e])?l.tail:{},f.next=h={},f.context=c,f.callback=b,d[e]={tail:h,next:l?l.next:f};return this},off:function(a,b,c){var d,e,p,h,l,m;if(e=this._callbacks){if(!a&&!b&&!c)return delete this._callbacks,this;for(a=a?a.split(C):f.keys(e);d=a.shift();)if(p=e[d],delete e[d],p&&(b||c))for(h=p.tail;(p=p.next)!==h;)if(l=p.callback,m=p.context,b&&l!==b||c&&m!==c)this.on(d,l,m);return this}},trigger:function(a){var b,c,d,e,f,h;if(!(d=this._callbacks))return this;f=d.all;a=a.split(C);for(h=
K.call(arguments,1);b=a.shift();){if(c=d[b])for(e=c.tail;(c=c.next)!==e;)c.callback.apply(c.context||this,h);if(c=f){e=c.tail;for(b=[b].concat(h);(c=c.next)!==e;)c.callback.apply(c.context||this,b)}}return this}};m.bind=m.on;m.unbind=m.off;var u=h.Model=function(a,b){var c;a||(a={});b&&b.parse&&(a=this.parse(a));if(c=t(this,"defaults"))a=f.extend({},c,a);b&&b.collection&&(this.collection=b.collection);this.attributes={};this._escapedAttributes={};this.cid=f.uniqueId("c");this.changed={};this._silent=
{};this._pending={};this.set(a,{silent:!0});this.changed={};this._silent={};this._pending={};this._previousAttributes=f.clone(this.attributes);this.initialize.apply(this,arguments)};f.extend(u.prototype,m,{changed:null,_silent:null,_pending:null,idAttribute:"id",initialize:function(){},toJSON:function(a){return f.clone(this.attributes)},get:function(a){return this.attributes[a]},escape:function(a){var b;if(b=this._escapedAttributes[a])return b;b=this.get(a);return this._escapedAttributes[a]=f.escape(null==
b?"":""+b)},has:function(a){return null!=this.get(a)},set:function(a,b,c){var d,e;f.isObject(a)||null==a?(d=a,c=b):(d={},d[a]=b);c||(c={});if(!d)return this;d instanceof u&&(d=d.attributes);if(c.unset)for(e in d)d[e]=void 0;if(!this._validate(d,c))return!1;this.idAttribute in d&&(this.id=d[this.idAttribute]);b=c.changes={};var h=this.attributes,l=this._escapedAttributes,m=this._previousAttributes||{};for(e in d){a=d[e];if(!f.isEqual(h[e],a)||c.unset&&f.has(h,e))delete l[e],(c.silent?this._silent:
b)[e]=!0;c.unset?delete h[e]:h[e]=a;!f.isEqual(m[e],a)||f.has(h,e)!=f.has(m,e)?(this.changed[e]=a,c.silent||(this._pending[e]=!0)):(delete this.changed[e],delete this._pending[e])}c.silent||this.change(c);return this},unset:function(a,b){(b||(b={})).unset=!0;return this.set(a,null,b)},clear:function(a){(a||(a={})).unset=!0;return this.set(f.clone(this.attributes),a)},fetch:function(a){a=a?f.clone(a):{};var b=this,c=a.success;a.success=function(d,e,f){if(!b.set(b.parse(d,f),a))return!1;c&&c(b,d)};
a.error=h.wrapError(a.error,b,a);return(this.sync||h.sync).call(this,"read",this,a)},save:function(a,b,c){var d,e;f.isObject(a)||null==a?(d=a,c=b):(d={},d[a]=b);c=c?f.clone(c):{};if(c.wait){if(!this._validate(d,c))return!1;e=f.clone(this.attributes)}a=f.extend({},c,{silent:!0});if(d&&!this.set(d,c.wait?a:c))return!1;var l=this,m=c.success;c.success=function(a,b,e){b=l.parse(a,e);c.wait&&(delete c.wait,b=f.extend(d||{},b));if(!l.set(b,c))return!1;m?m(l,a):l.trigger("sync",l,a,c)};c.error=h.wrapError(c.error,
l,c);b=this.isNew()?"create":"update";b=(this.sync||h.sync).call(this,b,this,c);c.wait&&this.set(e,a);return b},destroy:function(a){a=a?f.clone(a):{};var b=this,c=a.success,d=function(){b.trigger("destroy",b,b.collection,a)};if(this.isNew())return d(),!1;a.success=function(e){a.wait&&d();c?c(b,e):b.trigger("sync",b,e,a)};a.error=h.wrapError(a.error,b,a);var e=(this.sync||h.sync).call(this,"delete",this,a);a.wait||d();return e},url:function(){var a=t(this,"urlRoot")||t(this.collection,"url")||J();
return this.isNew()?a:a+("/"==a.charAt(a.length-1)?"":"/")+encodeURIComponent(this.id)},parse:function(a,b){return a},clone:function(){return new this.constructor(this.attributes)},isNew:function(){return null==this.id},change:function(a){a||(a={});var b=this._changing;this._changing=!0;for(var c in this._silent)this._pending[c]=!0;var d=f.extend({},a.changes,this._silent);this._silent={};for(c in d)this.trigger("change:"+c,this,this.get(c),a);if(b)return this;for(;!f.isEmpty(this._pending);){this._pending=
{};this.trigger("change",this,a);for(c in this.changed)!this._pending[c]&&!this._silent[c]&&delete this.changed[c];this._previousAttributes=f.clone(this.attributes)}this._changing=!1;return this},hasChanged:function(a){return!arguments.length?!f.isEmpty(this.changed):f.has(this.changed,a)},changedAttributes:function(a){if(!a)return this.hasChanged()?f.clone(this.changed):!1;var b,c=!1,d=this._previousAttributes,e;for(e in a)if(!f.isEqual(d[e],b=a[e]))(c||(c={}))[e]=b;return c},previous:function(a){return!arguments.length||
!this._previousAttributes?null:this._previousAttributes[a]},previousAttributes:function(){return f.clone(this._previousAttributes)},isValid:function(){return!this.validate(this.attributes)},_validate:function(a,b){if(b.silent||!this.validate)return!0;a=f.extend({},this.attributes,a);var c=this.validate(a,b);if(!c)return!0;b&&b.error?b.error(this,c,b):this.trigger("error",this,c,b);return!1}});var x=h.Collection=function(a,b){b||(b={});b.model&&(this.model=b.model);b.comparator&&(this.comparator=b.comparator);
this._reset();this.initialize.apply(this,arguments);a&&this.reset(a,{silent:!0,parse:b.parse})};f.extend(x.prototype,m,{model:u,initialize:function(){},toJSON:function(a){return this.map(function(b){return b.toJSON(a)})},add:function(a,b){var c,d,e,h,l,m={},n={},k=[];b||(b={});a=f.isArray(a)?a.slice():[a];c=0;for(d=a.length;c<d;c++){if(!(e=a[c]=this._prepareModel(a[c],b)))throw Error("Can't add an invalid model to a collection");h=e.cid;l=e.id;m[h]||this._byCid[h]||null!=l&&(n[l]||this._byId[l])?
k.push(c):m[h]=n[l]=e}for(c=k.length;c--;)a.splice(k[c],1);c=0;for(d=a.length;c<d;c++)(e=a[c]).on("all",this._onModelEvent,this),this._byCid[e.cid]=e,null!=e.id&&(this._byId[e.id]=e);this.length+=d;w.apply(this.models,[null!=b.at?b.at:this.models.length,0].concat(a));this.comparator&&this.sort({silent:!0});if(b.silent)return this;c=0;for(d=this.models.length;c<d;c++)if(m[(e=this.models[c]).cid])b.index=c,e.trigger("add",e,this,b);return this},remove:function(a,b){var c,d,e,h;b||(b={});a=f.isArray(a)?
a.slice():[a];c=0;for(d=a.length;c<d;c++)if(h=this.getByCid(a[c])||this.get(a[c]))delete this._byId[h.id],delete this._byCid[h.cid],e=this.indexOf(h),this.models.splice(e,1),this.length--,b.silent||(b.index=e,h.trigger("remove",h,this,b)),this._removeReference(h);return this},push:function(a,b){a=this._prepareModel(a,b);this.add(a,b);return a},pop:function(a){var b=this.at(this.length-1);this.remove(b,a);return b},unshift:function(a,b){a=this._prepareModel(a,b);this.add(a,f.extend({at:0},b));return a},
shift:function(a){var b=this.at(0);this.remove(b,a);return b},get:function(a){return null==a?void 0:this._byId[null!=a.id?a.id:a]},getByCid:function(a){return a&&this._byCid[a.cid||a]},at:function(a){return this.models[a]},where:function(a){return f.isEmpty(a)?[]:this.filter(function(b){for(var c in a)if(a[c]!==b.get(c))return!1;return!0})},sort:function(a){a||(a={});if(!this.comparator)throw Error("Cannot sort a set without a comparator");var b=f.bind(this.comparator,this);1==this.comparator.length?
this.models=this.sortBy(b):this.models.sort(b);a.silent||this.trigger("reset",this,a);return this},pluck:function(a){return f.map(this.models,function(b){return b.get(a)})},reset:function(a,b){a||(a=[]);b||(b={});for(var c=0,d=this.models.length;c<d;c++)this._removeReference(this.models[c]);this._reset();this.add(a,f.extend({silent:!0},b));b.silent||this.trigger("reset",this,b);return this},fetch:function(a){a=a?f.clone(a):{};void 0===a.parse&&(a.parse=!0);var b=this,c=a.success;a.success=function(d,
e,f){b[a.add?"add":"reset"](b.parse(d,f),a);c&&c(b,d)};a.error=h.wrapError(a.error,b,a);return(this.sync||h.sync).call(this,"read",this,a)},create:function(a,b){var c=this;b=b?f.clone(b):{};a=this._prepareModel(a,b);if(!a)return!1;b.wait||c.add(a,b);var d=b.success;b.success=function(e,f,h){b.wait&&c.add(e,b);d?d(e,f):e.trigger("sync",a,f,b)};a.save(null,b);return a},parse:function(a,b){return a},chain:function(){return f(this.models).chain()},_reset:function(a){this.length=0;this.models=[];this._byId=
{};this._byCid={}},_prepareModel:function(a,b){b||(b={});a instanceof u?a.collection||(a.collection=this):(b.collection=this,a=new this.model(a,b),a._validate(a.attributes,b)||(a=!1));return a},_removeReference:function(a){this==a.collection&&delete a.collection;a.off("all",this._onModelEvent,this)},_onModelEvent:function(a,b,c,d){("add"==a||"remove"==a)&&c!=this||("destroy"==a&&this.remove(b,d),b&&a==="change:"+b.idAttribute&&(delete this._byId[b.previous(b.idAttribute)],this._byId[b.id]=b),this.trigger.apply(this,
arguments))}});f.each("forEach each map reduce reduceRight find detect filter select reject every all some any include contains invoke max min sortBy sortedIndex toArray size first initial rest last without indexOf shuffle lastIndexOf isEmpty groupBy".split(" "),function(a){x.prototype[a]=function(){return f[a].apply(f,[this.models].concat(f.toArray(arguments)))}});var D=h.Router=function(a){a||(a={});a.routes&&(this.routes=a.routes);this._bindRoutes();this.initialize.apply(this,arguments)},F=/:\w+/g,
G=/\*\w+/g,H=/[-[\]{}()+?.,\\^$|#\s]/g;f.extend(D.prototype,m,{initialize:function(){},route:function(a,b,c){h.history||(h.history=new r);f.isRegExp(a)||(a=this._routeToRegExp(a));c||(c=this[b]);h.history.route(a,f.bind(function(d){d=this._extractParameters(a,d);c&&c.apply(this,d);this.trigger.apply(this,["route:"+b].concat(d));h.history.trigger("route",this,b,d)},this));return this},navigate:function(a,b){h.history.navigate(a,b)},_bindRoutes:function(){if(this.routes){var a=[],b;for(b in this.routes)a.unshift([b,
this.routes[b]]);b=0;for(var c=a.length;b<c;b++)this.route(a[b][0],a[b][1],this[a[b][1]])}},_routeToRegExp:function(a){a=a.replace(H,"\\$&").replace(F,"([^/]+)").replace(G,"(.*?)");return RegExp("^"+a+"$")},_extractParameters:function(a,b){return a.exec(b).slice(1)}});var r=h.History=function(){this.handlers=[];f.bindAll(this,"checkUrl")},y=/^[#\/]/,z=/msie [\w.]+/;r.started=!1;f.extend(r.prototype,m,{interval:50,getHash:function(a){return(a=(a?a.location:window.location).href.match(/#(.*)$/))?a[1]:
""},getFragment:function(a,b){if(null==a)if(this._hasPushState||b){a=window.location.pathname;var c=window.location.search;c&&(a+=c)}else a=this.getHash();a.indexOf(this.options.root)||(a=a.substr(this.options.root.length));return a.replace(y,"")},start:function(a){if(r.started)throw Error("Backbone.history has already been started");r.started=!0;this.options=f.extend({},{root:"/"},this.options,a);this._wantsHashChange=!1!==this.options.hashChange;this._wantsPushState=!!this.options.pushState;this._hasPushState=
!(!this.options.pushState||!window.history||!window.history.pushState);a=this.getFragment();var b=document.documentMode;if(b=z.exec(navigator.userAgent.toLowerCase())&&(!b||7>=b))this.iframe=l('<iframe src="javascript:0" tabindex="-1" />').hide().appendTo("body")[0].contentWindow,this.navigate(a);this._hasPushState?l(window).bind("popstate",this.checkUrl):this._wantsHashChange&&"onhashchange"in window&&!b?l(window).bind("hashchange",this.checkUrl):this._wantsHashChange&&(this._checkUrlInterval=setInterval(this.checkUrl,
this.interval));this.fragment=a;a=window.location;b=a.pathname==this.options.root;if(this._wantsHashChange&&this._wantsPushState&&!this._hasPushState&&!b)return this.fragment=this.getFragment(null,!0),window.location.replace(this.options.root+"#"+this.fragment),!0;this._wantsPushState&&(this._hasPushState&&b&&a.hash)&&(this.fragment=this.getHash().replace(y,""),window.history.replaceState({},document.title,a.protocol+"//"+a.host+this.options.root+this.fragment));if(!this.options.silent)return this.loadUrl()},
stop:function(){l(window).unbind("popstate",this.checkUrl).unbind("hashchange",this.checkUrl);clearInterval(this._checkUrlInterval);r.started=!1},route:function(a,b){this.handlers.unshift({route:a,callback:b})},checkUrl:function(a){a=this.getFragment();a==this.fragment&&this.iframe&&(a=this.getFragment(this.getHash(this.iframe)));if(a==this.fragment)return!1;this.iframe&&this.navigate(a);this.loadUrl()||this.loadUrl(this.getHash())},loadUrl:function(a){var b=this.fragment=this.getFragment(a);return f.any(this.handlers,
function(a){if(a.route.test(b))return a.callback(b),!0})},navigate:function(a,b){if(!r.started)return!1;if(!b||!0===b)b={trigger:b};var c=(a||"").replace(y,"");this.fragment!=c&&(this._hasPushState?(0!=c.indexOf(this.options.root)&&(c=this.options.root+c),this.fragment=c,window.history[b.replace?"replaceState":"pushState"]({},document.title,c)):this._wantsHashChange?(this.fragment=c,this._updateHash(window.location,c,b.replace),this.iframe&&c!=this.getFragment(this.getHash(this.iframe))&&(b.replace||
this.iframe.document.open().close(),this._updateHash(this.iframe.location,c,b.replace))):window.location.assign(this.options.root+a),b.trigger&&this.loadUrl(a))},_updateHash:function(a,b,c){c?a.replace(a.toString().replace(/(javascript:|#).*$/,"")+"#"+b):(b!==''&&(a.hash=b))}});var E=h.View=function(a){this.cid=f.uniqueId("view");this._configure(a||{});this._ensureElement();this.initialize.apply(this,arguments);this.delegateEvents()},L=/^(\S+)\s*(.*)$/,A="model collection el id attributes className tagName".split(" ");
f.extend(E.prototype,m,{tagName:"div",$:function(a){return this.$el.find(a)},initialize:function(){},render:function(){return this},remove:function(){this.$el.remove();return this},make:function(a,b,c){a=document.createElement(a);b&&l(a).attr(b);c&&l(a).html(c);return a},setElement:function(a,b){this.$el&&this.undelegateEvents();this.$el=a instanceof l?a:l(a);this.el=this.$el[0];!1!==b&&this.delegateEvents();return this},delegateEvents:function(a){if(a||(a=t(this,"events"))){this.undelegateEvents();
for(var b in a){var c=a[b];f.isFunction(c)||(c=this[a[b]]);if(!c)throw Error('Method "'+a[b]+'" does not exist');var d=b.match(L),e=d[1],d=d[2],c=f.bind(c,this),e=e+(".delegateEvents"+this.cid);""===d?this.$el.bind(e,c):this.$el.delegate(d,e,c)}}},undelegateEvents:function(){this.$el.unbind(".delegateEvents"+this.cid)},_configure:function(a){this.options&&(a=f.extend({},this.options,a));for(var b=0,c=A.length;b<c;b++){var d=A[b];a[d]&&(this[d]=a[d])}this.options=a},_ensureElement:function(){if(this.el)this.setElement(this.el,
!1);else{var a=t(this,"attributes")||{};this.id&&(a.id=this.id);this.className&&(a["class"]=this.className);this.setElement(this.make(this.tagName,a),!1)}}});u.extend=x.extend=D.extend=E.extend=function(a,b){var c=I(this,a,b);c.extend=this.extend;return c};var d={create:"POST",update:"PUT","delete":"DELETE",read:"GET"};h.sync=function(a,b,c){var g=d[a];c||(c={});var e={type:g,dataType:"json"};c.url||(e.url=t(b,"url")||J());if(!c.data&&b&&("create"==a||"update"==a))e.contentType="application/json",
e.data=JSON.stringify(b.toJSON());h.emulateJSON&&(e.contentType="application/x-www-form-urlencoded",e.data=e.data?{model:e.data}:{});if(h.emulateHTTP&&("PUT"===g||"DELETE"===g))h.emulateJSON&&(e.data._method=g),e.type="POST",e.beforeSend=function(a){a.setRequestHeader("X-HTTP-Method-Override",g)};"GET"!==e.type&&!h.emulateJSON&&(e.processData=!1);return l.ajax(f.extend(e,c))};h.wrapError=function(a,b,c){return function(d,e){e=d===b?e:d;a?a(b,e,c):b.trigger("error",b,e,c)}};var n=function(){},I=function(a,
b,c){var d;d=b&&b.hasOwnProperty("constructor")?b.constructor:function(){a.apply(this,arguments)};f.extend(d,a);n.prototype=a.prototype;d.prototype=new n;b&&f.extend(d.prototype,b);c&&f.extend(d,c);d.prototype.constructor=d;d.__super__=a.prototype;return d},t=function(a,b){return!a||!a[b]?null:f.isFunction(a[b])?a[b]():a[b]},J=function(){throw Error('A "url" property or function must be specified');}}).call(this);
