<!DOCTYPE html>

<?php
 
 

 if(isset($_GET['submit']))

 {
    
    $search = $_GET ['search']; 
 
    if($search=='a')
    {
      header("Location: index.php");
    }
    elseif ($search=='does norton stop hacker')
    {
  
      header("Location: norton.php");
    }
    elseif ($search=='c')
    {
  
      header("Location: http://www.google.com");
    }
    elseif ($search=='d')
    {
  
      header("Location: http://www.adityaca.com");
    }
 }



 ?>

<html itemscope="" itemtype="http://schema.org/SearchResultsPage" lang="en-IN">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta content="/images/branding/googleg/1x/googleg_standard_color_128dp.png" itemprop="image">
    <meta content="origin" name="referrer">
    <title><?php if(!empty($_GET['search'])){ echo $_GET['search'];}?> - Google Search</title>
    <link rel="stylesheet" href="sty5le.css">
    <!-- <script src="norton_files/cbgapi.loaded_0" nonce="T/1dJyC0GxsSMWP7nSTknQ==" async=""></script>
    <script
        nonce="T/1dJyC0GxsSMWP7nSTknQ==">(function () { window.google = { kEI: 'abc', kEXPI: '31', kBL: 'ocLG' }; google.sn = 'web'; google.kHL = 'en-IN'; })(); (function () { google.lc = []; google.li = 0; google.getEI = function (a) { for (var c; a && (!a.getAttribute || !(c = a.getAttribute("eid")));)a = a.parentNode; return c || google.kEI }; google.getLEI = function (a) { for (var c = null; a && (!a.getAttribute || !(c = a.getAttribute("leid")));)a = a.parentNode; return c }; google.ml = function () { return null }; google.time = function () { return Date.now() }; google.log = function (a, c, b, d, g) { if (b = google.logUrl(a, c, b, d, g)) { a = new Image; var e = google.lc, f = google.li; e[f] = a; a.onerror = a.onload = a.onabort = function () { delete e[f] }; google.vel && google.vel.lu && google.vel.lu(b); a.src = b; google.li = f + 1 } }; google.logUrl = function (a, c, b, d, g) { var e = "", f = google.ls || ""; b || -1 != c.search("&ei=") || (e = "&ei=" + google.getEI(d), -1 == c.search("&lei=") && (d = google.getLEI(d)) && (e += "&lei=" + d)); d = ""; !b && google.cshid && -1 == c.search("&cshid=") && "slh" != a && (d = "&cshid=" + google.cshid); b = b || "/" + (g || "gen_204") + "?atyp=i&ct=" + a + "&cad=" + c + e + f + "&zx=" + google.time() + d; /^http:/i.test(b) && "https:" == window.location.protocol && (google.ml(Error("a"), !1, { src: b, glmm: 1 }), b = ""); return b }; }).call(this); (function () { google.y = {}; google.x = function (a, b) { if (a) var c = a.id; else { do c = Math.random(); while (google.y[c]) } google.y[c] = [a, b]; return !1 }; google.lm = []; google.plm = function (a) { google.lm.push.apply(google.lm, a) }; google.lq = []; google.load = function (a, b, c) { google.lq.push([[a], b, c]) }; google.loadAll = function (a, b) { google.lq.push([a, b]) }; }).call(this); google.f = {}; (function () {
                document.documentElement.addEventListener("submit", function (b) { var a; if (a = b.target) { var c = a.getAttribute("data-submitfalse"); a = "1" == c || "q" == c && !a.elements.q.value ? !0 : !1 } else a = !1; a && (b.preventDefault(), b.stopPropagation()) }, !0); document.documentElement.addEventListener("click", function (b) { var a; a: { for (a = b.target; a && a != document.documentElement; a = a.parentElement)if ("A" == a.tagName) { a = "1" == a.getAttribute("data-nohref"); break a } a = !1 } a && b.preventDefault() }, !0);
            }).call(this); (function () { google.hs = { h: true, sie: false }; })(); var h = "function" == typeof Object.defineProperties ? Object.defineProperty : function (a, b, c) { if (a == Array.prototype || a == Object.prototype) return a; a[b] = c.value; return a }, k = function (a) { a = ["object" == typeof globalThis && globalThis, a, "object" == typeof window && window, "object" == typeof self && self, "object" == typeof global && global]; for (var b = 0; b < a.length; ++b) { var c = a[b]; if (c && c.Math == Math) return c } throw Error("a"); }, l = k(this), m = function (a, b) {
                if (b) {
                    var c = l; a = a.split("."); for (var d = 0; d < a.length - 1; d++) {
                        var e = a[d]; e in c ||
                            (c[e] = {}); c = c[e]
                    } a = a[a.length - 1]; d = c[a]; b = b(d); b != d && null != b && h(c, a, { configurable: !0, writable: !0, value: b })
                }
            }; m("String.prototype.startsWith", function (a) { return a ? a : function (b, c) { if (null == this) throw new TypeError("The 'this' value for String.prototype.startsWith must not be null or undefined"); if (b instanceof RegExp) throw new TypeError("First argument to String.prototype.startsWith must not be a regular expression"); var d = this + ""; b += ""; var e = d.length, g = b.length; c = Math.max(0, Math.min(c | 0, d.length)); for (var f = 0; f < g && c < e;)if (d[c++] != b[f++]) return !1; return f >= g } }); google.arwt = function (a) { a.href = document.getElementById(a.id.substring(a.id.startsWith("vcs") ? 3 : 1)).href; return !0 }; (function () {
                var f = this || self, h = Date.now || function () { return +new Date };

                var x = {}; var aa = function (a, c) { if (null === c) return !1; if ("contains" in a && 1 == c.nodeType) return a.contains(c); if ("compareDocumentPosition" in a) return a == c || !!(a.compareDocumentPosition(c) & 16); for (; c && a != c;)c = c.parentNode; return c == a }; var ba = function (a, c) { return function (d) { d || (d = window.event); return c.call(a, d) } }, z = function (a) { a = a.target || a.srcElement; !a.getAttribute && a.parentNode && (a = a.parentNode); return a }, A = "undefined" != typeof navigator && /Macintosh/.test(navigator.userAgent), ca = "undefined" != typeof navigator && !/Opera/.test(navigator.userAgent) && /WebKit/.test(navigator.userAgent), da = { A: 1, INPUT: 1, TEXTAREA: 1, SELECT: 1, BUTTON: 1 }, ea = function () { this._mouseEventsPrevented = !0 }, F = { A: 13, BUTTON: 0, CHECKBOX: 32, COMBOBOX: 13, FILE: 0, GRIDCELL: 13, LINK: 13, LISTBOX: 13, MENU: 0, MENUBAR: 0, MENUITEM: 0, MENUITEMCHECKBOX: 0, MENUITEMRADIO: 0, OPTION: 0, RADIO: 32, RADIOGROUP: 32, RESET: 0, SUBMIT: 0, SWITCH: 32, TAB: 0, TREE: 13, TREEITEM: 13 }, G = { CHECKBOX: !0, FILE: !0, OPTION: !0, RADIO: !0 }, H = { COLOR: !0, DATE: !0, DATETIME: !0, "DATETIME-LOCAL": !0, EMAIL: !0, MONTH: !0, NUMBER: !0, PASSWORD: !0, RANGE: !0, SEARCH: !0, TEL: !0, TEXT: !0, TEXTAREA: !0, TIME: !0, URL: !0, WEEK: !0 }, fa = { A: !0, AREA: !0, BUTTON: !0, DIALOG: !0, IMG: !0, INPUT: !0, LINK: !0, MENU: !0, OPTGROUP: !0, OPTION: !0, PROGRESS: !0, SELECT: !0, TEXTAREA: !0 };
                var I = function () { this.h = this.a = null }, K = function (a, c) { var d = J; d.a = a; d.h = c; return d }; I.prototype.g = function () { var a = this.a; this.a && this.a != this.h ? this.a = this.a.__owner || this.a.parentNode : this.a = null; return a }; var L = function () { this.i = []; this.a = 0; this.h = null; this.j = !1 }; L.prototype.g = function () { if (this.j) return J.g(); if (this.a != this.i.length) { var a = this.i[this.a]; this.a++; a != this.h && a && a.__owner && (this.j = !0, K(a.__owner, this.h)); return a } return null }; var J = new I, M = new L;
                var O = function () { this.o = []; this.a = []; this.g = []; this.j = {}; this.h = null; this.i = []; N(this, "_custom") }, ha = "undefined" != typeof navigator && /iPhone|iPad|iPod/.test(navigator.userAgent), P = String.prototype.trim ? function (a) { return a.trim() } : function (a) { return a.replace(/^\s+/, "").replace(/\s+$/, "") }, ia = /\s*;\s*/, ma = function (a, c) {
                    return function p(b, g) {
                        g = void 0 === g ? !0 : g; var m = c; if ("_custom" == m) { m = b.detail; if (!m || !m._type) return; m = m._type } if ("click" == m && (A && b.metaKey || !A && b.ctrlKey || 2 == b.which || null == b.which &&
                            4 == b.button || b.shiftKey)) m = "clickmod"; else { var l = b.which || b.keyCode; ca && 3 == l && (l = 13); if (13 != l && 32 != l) l = !1; else { var e = z(b), n; (n = "keydown" != b.type || !!(!("getAttribute" in e) || (e.getAttribute("type") || e.tagName).toUpperCase() in H || "BUTTON" == e.tagName.toUpperCase() || e.type && "FILE" == e.type.toUpperCase() || e.isContentEditable) || b.ctrlKey || b.shiftKey || b.altKey || b.metaKey || (e.getAttribute("type") || e.tagName).toUpperCase() in G && 32 == l) || ((n = e.tagName in da) || (n = e.getAttributeNode("tabindex"), n = null != n && n.specified), n = !(n && !e.disabled)); if (n) l = !1; else { n = (e.getAttribute("role") || e.type || e.tagName).toUpperCase(); var q = !(n in F) && 13 == l; e = "INPUT" != e.tagName.toUpperCase() || !!e.type; l = (0 == F[n] % l || q) && e } } l && (m = "clickkey") } e = b.srcElement || b.target; l = Q(m, b, e, "", null); b.path ? (M.i = b.path, M.a = 0, M.h = this, M.j = !1, n = M) : n = K(e, this); for (; q = n.g();) { var k = q; var r = void 0; var u = k; q = m; var t = u.__jsaction; if (!t) { var y; t = null; "getAttribute" in u && (t = u.getAttribute("jsaction")); if (y = t) { t = x[y]; if (!t) { t = {}; for (var B = y.split(ia), ja = B ? B.length : 0, C = 0; C < ja; C++) { var w = B[C]; if (w) { var D = w.indexOf(":"), R = -1 != D, ka = R ? P(w.substr(0, D)) : "click"; w = R ? P(w.substr(D + 1)) : w; t[ka] = w } } x[y] = t } u.__jsaction = t } else t = la, u.__jsaction = t } u = t; "maybe_click" == q && u.click ? (r = q, q = "click") : "clickkey" == q ? q = "click" : "click" != q || u.click || (q = "clickonly"); r = { m: r ? r : q, action: u[q] || "", event: null, s: !1 }; l = Q(r.m, r.event || b, e, r.action || "", k, l.timeStamp); if (r.s || r.action) break } l && "touchend" == l.eventType && (l.event._preventMouseEvents = ea); if (r && r.action) {
                                if (e = "clickkey" == m) e = z(b), e = (e.type ||
                                    e.tagName).toUpperCase(), (e = 32 == (b.which || b.keyCode) && "CHECKBOX" != e) || (e = z(b), n = e.tagName.toUpperCase(), r = (e.getAttribute("role") || "").toUpperCase(), e = "BUTTON" === n || "BUTTON" === r ? !0 : !(e.tagName.toUpperCase() in fa) || "A" === n || "SELECT" === n || (e.getAttribute("type") || e.tagName).toUpperCase() in G || (e.getAttribute("type") || e.tagName).toUpperCase() in H ? !1 : !0); e && (b.preventDefault ? b.preventDefault() : b.returnValue = !1); if ("mouseenter" == m || "mouseleave" == m) if (e = b.relatedTarget, !("mouseover" == b.type && "mouseenter" ==
                                        m || "mouseout" == b.type && "mouseleave" == m) || e && (e === k || aa(k, e))) l.action = "", l.actionElement = null; else { m = {}; for (var v in b) "function" !== typeof b[v] && "srcElement" !== v && "target" !== v && (m[v] = b[v]); m.type = "mouseover" == b.type ? "mouseenter" : "mouseleave"; m.target = m.srcElement = k; m.bubbles = !1; l.event = m; l.targetElement = k }
                            } else l.action = "", l.actionElement = null; k = l; a.h && !k.event.a11ysgd && (v = Q(k.eventType, k.event, k.targetElement, k.action, k.actionElement, k.timeStamp), "clickonly" == v.eventType && (v.eventType = "click"), a.h(v, !0)); if (k.actionElement) { if (a.h) { if (!k.actionElement || "A" != k.actionElement.tagName || "click" != k.eventType && "clickmod" != k.eventType || (b.preventDefault ? b.preventDefault() : b.returnValue = !1), (b = a.h(k)) && g) { p.call(this, b, !1); return } } else { if ((g = f.document) && !g.createEvent && g.createEventObject) try { var E = g.createEventObject(b) } catch (pa) { E = b } else E = b; k.event = E; a.i.push(k) } if ("touchend" == k.event.type && k.event._mouseEventsPrevented) { b = k.event; for (var qa in b); h() } }
                    }
                }, Q = function (a, c, d, b, g, p) { return { eventType: a, event: c, targetElement: d, action: b, actionElement: g, timeStamp: p || h() } }, la = {}, na = function (a, c) { return function (d) { var b = a, g = c, p = !1; "mouseenter" == b ? b = "mouseover" : "mouseleave" == b && (b = "mouseout"); if (d.addEventListener) { if ("focus" == b || "blur" == b || "error" == b || "load" == b) p = !0; d.addEventListener(b, g, p) } else d.attachEvent && ("focus" == b ? b = "focusin" : "blur" == b && (b = "focusout"), g = ba(d, g), d.attachEvent("on" + b, g)); return { m: b, l: g, capture: p } } }, N = function (a, c) { if (!a.j.hasOwnProperty(c)) { var d = ma(a, c), b = na(c, d); a.j[c] = d; a.o.push(b); for (d = 0; d < a.a.length; ++d) { var g = a.a[d]; g.g.push(b.call(null, g.a)) } "click" == c && N(a, "keydown") } }; O.prototype.l = function (a) { return this.j[a] }; var V = function (a, c) { var d = new oa(c); a: { for (var b = 0; b < a.a.length; b++)if (S(a.a[b], c)) { c = !0; break a } c = !1 } if (c) return a.g.push(d), d; T(a, d); a.a.push(d); U(a); return d }, U = function (a) { for (var c = a.g.concat(a.a), d = [], b = [], g = 0; g < a.a.length; ++g) { var p = a.a[g]; W(p, c) ? (d.push(p), X(p)) : b.push(p) } for (g = 0; g < a.g.length; ++g)p = a.g[g], W(p, c) ? d.push(p) : (b.push(p), T(a, p)); a.a = b; a.g = d }, T = function (a, c) { var d = c.a; ha && (d.style.cursor = "pointer"); for (d = 0; d < a.o.length; ++d)c.g.push(a.o[d].call(null, c.a)) }, Y = function (a, c) { a.h = c; a.i && (0 < a.i.length && c(a.i), a.i = null) }, oa = function (a) { this.a = a; this.g = [] }, S = function (a, c) { for (a = a.a; a != c && c.parentNode;)c = c.parentNode; return a == c }, W = function (a, c) { for (var d = 0; d < c.length; ++d)if (c[d].a != a.a && S(c[d], a.a)) return !0; return !1 }, X = function (a) { for (var c = 0; c < a.g.length; ++c) { var d = a.a, b = a.g[c]; d.removeEventListener ? d.removeEventListener(b.m, b.l, b.capture) : d.detachEvent && d.detachEvent("on" + b.m, b.l) } a.g = [] }; var Z = new O; V(Z, window.document.documentElement); N(Z, "click"); N(Z, "focus"); N(Z, "focusin"); N(Z, "blur"); N(Z, "focusout"); N(Z, "error"); N(Z, "load"); N(Z, "change"); N(Z, "dblclick"); N(Z, "input"); N(Z, "keyup"); N(Z, "keydown"); N(Z, "keypress"); N(Z, "mousedown"); N(Z, "mouseenter"); N(Z, "mouseleave"); N(Z, "mouseout"); N(Z, "mouseover"); N(Z, "mouseup"); N(Z, "paste"); N(Z, "touchstart"); N(Z, "touchend"); N(Z, "touchcancel"); N(Z, "speech"); (function (a) { google.jsad = function (c) { Y(a, c) }; google.jsaac = function (c) { return V(a, c) }; google.jsarc = function (c) { X(c); for (var d = !1, b = 0; b < a.a.length; ++b)if (a.a[b] === c) { a.a.splice(b, 1); d = !0; break } if (!d) for (d = 0; d < a.g.length; ++d)if (a.g[d] === c) { a.g.splice(d, 1); break } U(a) } })(Z); window.gws_wizbind = function (a) { return { trigger: function (c) { var d = a.l(c.type); d || (N(a, c.type), d = a.l(c.type)); var b = c.target || c.srcElement; d && d.call(b.ownerDocument.documentElement, c) }, bind: function (c) { Y(a, c) } } }(Z);
            }).call(this); (function () {
                var b = []; google.jsc = { xx: b, x: function (a) { b.push(a) }, mm: [], m: function (a) { google.jsc.mm.length || (google.jsc.mm = a) } };
            }).call(this); (function () {
            google.c = { gl: false, inp: false, lhc: false, slp: false, uio: false, ust: false }; (function () {
                var e = window.performance; var g = function (a, b, c, d) { a.addEventListener ? a.removeEventListener(b, c, d || !1) : a.attachEvent && a.detachEvent("on" + b, c) }, h = function (a, b, c, d) { a.addEventListener ? a.addEventListener(b, c, d || !1) : a.attachEvent && a.attachEvent("on" + b, c) }; google.timers = {}; google.startTick = function (a) { google.timers[a] = { t: { start: google.time() }, e: {}, m: {} } }; google.tick = function (a, b, c) { google.timers[a] || google.startTick(a); c = void 0 !== c ? c : google.time(); b instanceof Array || (b = [b]); for (var d = 0, f; f = b[d++];)google.timers[a].t[f] = c }; google.c.e = function (a, b, c) { google.timers[a].e[b] = c }; google.c.b = function (a) { var b = google.timers.load.m; b[a] && google.ml(Error("a"), !1, { m: a }); b[a] = !0 }; google.c.u = function (a) { var b = google.timers.load.m; if (b[a]) { b[a] = !1; for (a in b) if (b[a]) return; google.csiReport() } else google.ml(Error("b"), !1, { m: a }) }; google.rll = function (a, b, c) { var d = function (f) { c(f); g(a, "load", d); g(a, "error", d) }; h(a, "load", d); b && h(a, "error", d) }; google.aft = function (a) { a.setAttribute("data-iml", google.time()) }; google.startTick("load"); var k = google.timers.load; a: { var l = k.t; if (e) { var m = e.timing; if (m) { var n = m.navigationStart, p = m.responseStart; if (p > n && p <= l.start) { l.start = p; k.wsrt = p - n; break a } } e.now && (k.wsrt = Math.floor(e.now())) } } google.c.b("pr"); google.c.b("xe"); if (google.c.gl) { var q = function (a) { a && google.aft(a.target) }; h(document.documentElement, "load", q, !0); google.c.glu = function () { g(document.documentElement, "load", q, !0) } };
            }).call(this);
            })();</script> -->
    <style>
        [dir='ltr'],
        [dir='rtl'] {
            unicode-bidi: isolate;
            unicode-bidi: isolate
        }

        bdo[dir='ltr'],
        bdo[dir='rtl'] {
            unicode-bidi: bidi-override;
            unicode-bidi: isolate-override;
            unicode-bidi: isolate-override
        }

        #logocont {
            z-index: 1;
            padding-left: 16px;
            padding-right: 10px;
            margin-top: -2px;
            padding-top: 7px
        }

        #logocont.ddl {
            padding-top: 3px
        }

        .big #logocont {
            padding-left: 16px;
            padding-right: 12px
        }

        #searchform #logocont {
            padding-top: 11px;
            padding-right: 28px;
            padding-left: 30px
        }

        .sbibod {
            background-color: #fff;
            height: 44px;
            vertical-align: top;
            border: 1px solid #dfe1e5;
            border-radius: 8px;
            box-shadow: none;
            transition: box-shadow 200ms cubic-bezier(0.4, 0.0, 0.2, 1);
        }

        .lst {
            border: 0;
            margin-top: 5px;
            margin-bottom: 0
        }

        .lst:focus {
            outline: none
        }

        #lst-ib {
            color: #000
        }

        .gsfi,
        .lst {
            font: 16px arial, sans-serif;
            line-height: 34px;
            height: 34px !important
        }

        .lst-c {
            overflow: hidden
        }

        #gs_st0 {
            line-height: 44px;
            padding: 0 8px;
            margin-top: -1px;
            position: static
        }

        .srp #gs_st0 {
            padding: 0 2px 0 8px
        }

        .gsfs {
            font: 17px arial, sans-serif
        }

        .lsb {
            background: transparent;
            border: 0;
            font-size: 0;
            height: 30px;
            outline: 0;
            text-align: left;
            width: 100%
        }

        .sbico {
            display: inline-block;
            height: 0px;
            width: 0px;
            cursor: pointer;
            vertical-align: middle;
            color: #4285f4
        }

        .sbico-c {
            background: transparent;
            border: 0;
            float: right;
            height: 44px;
            line-height: 44px;
            margin-top: -1px;
            outline: 0;
            padding-right: 16px;
            position: relative;
            top: -1px
        }

        .hp .sbico-c {
            display: none
        }

        #sblsbb {
            border-bottom-left-radius: 0;
            border-top-left-radius: 0;
            height: 44px;
            margin: 0;
            padding: 0;
        }

        #sbds {
            border: 0;
            margin-left: -1px
        }

        .hp .nojsb,
        .srp .jsb {
            display: none
        }

        #sfopt {
            display: inline-block;
            line-height: normal
        }

        .lsd {
            font-size: 11px;
            position: absolute;
            top: 3px;
            left: 16px
        }

        .tsf {
            background: none
        }

        #sform {
            height: 65px
        }

        #searchform {
            width: 100%
        }

        .minidiv #gb {
            top: 2px
        }

        .minidiv .sfbg {
            background: #fff;
            box-shadow: 0 1px 6px 0 rgba(32, 33, 36, .28);
            height: 72px;
        }

        .minidiv .sbibod {
            height: 32px;
            margin: 10px 0;
            border-radius: 16px
        }

        .minidiv .visible-suggestions {
            border-bottom-left-radius: 0;
            border-bottom-right-radius: 0
        }

        .minidiv .sbico-c {
            height: 32px;
            line-height: 32px
        }

        .minidiv .sbib_b {
            padding-top: 0
        }

        .minidiv .gsfi {
            font-size: 14px;
            line-height: 32px
        }

        .minidiv .gsfs {
            font-size: 14px
        }

        .minidiv #logo img {
            height: 28px;
            width: 86px
        }

        #searchform.minidiv #logocont {
            padding: 17px 34px 0
        }

        .minidiv li.sbsb_c .sbse {
            padding: 0px 0
        }

        .minidiv .sbdd_a .sbdd_b,
        .minidiv .sbsb_a {
            border-bottom-left-radius: 16px;
            border-bottom-right-radius: 16px
        }

        .minidiv #gs_st0 {
            line-height: 32px !important
        }

        .minidiv .sbdd_a {
            top: 32px !important
        }

        .minidiv .gsri_a {
            background-size: 20px 20px;
            height: 20px;
            width: 16px
        }

        .minidiv .sbico-c .sbico {
            height: 20px;
            width: 20px
        }

        .hp #searchform {
            position: absolute;
            top: 311px
        }

        @media only screen and (max-height:768px) {
            .hp #searchform {
                top: 269px
            }
        }

        .srp #searchform {
            position: absolute;
            top: 20px;
        }

        .sfbg {
            height: 69px;
            left: 0;
            position: absolute;
            width: 100%
        }

        .sfbgg {
            height: 65px
        }

        #cnt {
            padding-top: 20px;
        }
    </style>
    <style id="gstyle">
        body {
            background: #fff;
            color: #000;
            margin: 0
        }

        .link {
            color: #1a0dab !important
        }

        .ts {
            border-collapse: collapse
        }

        .ts td {
            padding: 0
        }

        .g {
            line-height: 1.2;
            text-align: left;
            width: 600px
        }

        .ti {
            display: inline;
            display: inline-table
        }

        #rhs {
            padding-bottom: 15px
        }

        a:link,
        .q:active,
        .q:visited {
            color: #1a0dab
        }

        a:visited {
            color: #609
        }

        .b {
            font-weight: bold
        }

        .s {
            max-width: 48em
        }

        .sl {
            font-size: 82%
        }

        .f,
        .f a:link,
        .m {
            color: #70757a;
            line-height: 1.58
        }

        .c h2 {
            color: #666
        }

        .mslg cite {
            display: none
        }

        .ng {
            color: #dd4b39
        }

        h1,
        ol,
        ul,
        li {
            margin: 0;
            padding: 0
        }

        .g,
        body,
        html,
        input,
        .std,
        h1 {
            font-family: arial, sans-serif
        }

        .g,
        body,
        input,
        .std,
        h1 {
            font-size: 14px
        }

        .c h2,
        h1 {
            font-weight: normal
        }

        h3,
        .med {
            font-size: medium;
            font-weight: normal;
            margin: 0;
            padding: 0
        }

        #res h3,
        #extrares h3 {
            font-size: 20px;
            line-height: 1.3;
        }

        #cnt {
            clear: both
        }

        #res {
            margin: 0 16px
        }

        ol li {
            list-style: none
        }

        .sm li {
            margin: 0
        }

        .gl,
        #foot a,
        .nobr {
            white-space: nowrap
        }

        .sl,
        .r {
            font-weight: normal;
            margin: 0
        }

        .r {
            font-size: medium
        }

        h4.r {
            font-size: small
        }

        .gic {
            position: relative;
            overflow: hidden;
            z-index: 0
        }

        #rhs {
            display: block;
            margin-left: 712px;
            padding-bottom: 10px;
            min-width: 268px
        }

        .mdm #rhs {
            margin-left: 732px
        }

        .big #rhs {
            margin-left: 792px
        }

        #rhs .scrt.rhsvw,
        #rhs table.rhsvw {
            border: 0
        }

        #rhs .rhsvw {
            border: 1px solid #ebebeb;
            padding-left: 17px;
            padding-right: 16px;
            position: relative;
            width: 457px;
            box-sizing: border-box
        }

        #center_col .rhsl4,
        #center_col .rhsl5 {
            display: none
        }

        #rhs.rhstc4 .rhsvw {
            width: 369px
        }

        #rhs.rhstc3 .rhsvw {
            width: 281px
        }

        .rhstc4 .rhsg4,
        .rhstc3 .rhsg4,
        .rhstc3 .rhsg3 {
            background: none !important;
            display: none !important
        }

        .rhstc5 .rhsl5,
        .rhstc5 .rhsl4,
        .rhstc4 .rhsl4 {
            background: none !important;
            display: none !important
        }

        .nrgt {
            margin-left: 22px;
        }

        .mslg .vsc {
            transition: opacity .2s ease;
            margin-top: 2px;
            transition: opacity .2s ease;
            width: 294px;
            border: 1px solid transparent;
            border-radius: 2px;
            border-radius: 2px;
            padding: 3px 0 3px 5px
        }

        .mslg>td {
            padding-right: 6px;
            padding-top: 4px
        }

        .vsc {
            display: inline-block;
            position: relative;
            width: 100%
        }

        #res h3.r {
            display: block;
            overflow: hidden;
            text-overflow: ellipsis;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        em {
            font-weight: bold;
            font-style: normal
        }

        ol,
        ul,
        li {
            border: 0;
            margin: 0;
            padding: 0
        }

        .g {
            margin-top: 0;
            margin-bottom: 28px
        }

        .tsw {
            width: 595px
        }

        #cnt {
            min-width: 833px;
            margin-left: 0
        }

        .mw {
            max-width: 1197px
        }

        .big .mw {
            max-width: 1280px
        }

        .tsf-p {
            padding-left: 180px;
            margin-right: 46px;
            max-width: 739px
        }

        .big .tsf-p {
            margin-right: 322px;
            padding-left: 180px
        }

        .col {
            float: left
        }

        #leftnavc,
        #center_col,
        #rhs {
            position: relative
        }

        #center_col {
            margin-left: 138px;
            margin-right: 264px;
        }

        .big #center_col {
            margin-left: 138px;
        }

        #res {
            border: 0;
            margin: 0;
        }

        a:link,
        .q:active,
        .q:visited {
            cursor: pointer
        }

        .gl a,
        #tsf a,
        a.gl,
        a.fl,
        .bc a,
        .flt,
        a.flt u,
        .blg a,
        #appbar a {
            text-decoration: none
        }

        .gl a:hover,
        #tsf a:hover,
        a.gl:hover,
        a.fl:hover,
        .bc a:hover,
        .flt:hover,
        a.flt:hover u,
        .blg a:hover {
            text-decoration: underline
        }

        #tads a,
        #tadsb a,
        #res a,
        #rhs a,
        #taw a {
            text-decoration: none
        }

        #brs a,
        .nsa,
        .fl,
        #botstuff a,
        .flt:hover u,
        #rhs .gl a {
            text-decoration: none
        }

        #foot .ftl {
            margin-right: 12px
        }

        #foot {
            visibility: hidden
        }

        #fll a,
        #bfl a {
            color: #1a0dab;
            margin: 0 12px;
            text-decoration: none
        }

        body {
            color: #222
        }

        .s {
            color: #4d5156
        }

        .s .st em,
        .st.s.std em {
            color: #5f6368
        }

        .s a:visited em {
            color: #609
        }

        .s a:active em {
            color: #dd4b39
        }

        #tsf {
            width: 833px;
        }

        .big #tsf {
            width: 1109px
        }

        .st {
            line-height: 1.58;
            word-wrap: break-word
        }

        .sbc {
            padding: 0 2px;
            min-width: 30px
        }

        #rcnt {
            margin-top: 0px;
        }

        #appbar,
        .rhscol {
            min-width: 1173px
        }

        #appbar {
            -webkit-box-sizing: border-box;
            width: 100%
        }

        #main {
            width: 100%
        }

        #cnt #center_col,
        #cnt #foot {
            width: 652px
        }

        #center_col {
            clear: both
        }

        #cnt #center_col,
        .mw #center_col {
            margin-left: 180px
        }

        #rso {
            margin-top: 6px
        }

        .mw #rhs {
            margin-left: 892px
        }

        .th {
            border: 1px solid #ebebeb
        }

        .ellip {
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap
        }
    </style>
    <style>
        @-webkit-keyframes qs-timer {
            0% {}
        }

        .fp-f {
            bottom: 0;
            height: auto;
            left: 0;
            position: fixed !important;
            right: 0;
            top: 0;
            width: auto;
            z-index: 127
        }

        .fp-h:not(.fp-nh):not(.goog-modalpopup-bg):not(.goog-modalpopup) {
            display: none !important
        }

        .fp-zh.fp-h:not(.fp-nh):not(.goog-modalpopup-bg):not(.goog-modalpopup) {
            display: block !important;
            height: 0;
            overflow: hidden;
            transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0)
        }

        .fp-i .fp-c {
            display: block;
            min-height: 100vh
        }

        li.fp-c {
            list-style: none
        }

        .fp-w {
            box-sizing: border-box;
            left: 0;
            margin-left: auto;
            margin-right: auto;
            max-width: 1217px;
            right: 0
        }
    </style>
    <script nonce="T/1dJyC0GxsSMWP7nSTknQ==">(function () {
            var b = [function () { google.tick && google.tick("load", "dcl") }]; google.dclc = function (a) { b.length ? b.push(a) : a() }; function c() { for (var a; a = b.shift();)a() } window.addEventListener ? (document.addEventListener("DOMContentLoaded", c, !1), window.addEventListener("load", c, !1)) : window.attachEvent && window.attachEvent("onload", c);
        }).call(this); (function () {
            window.rwt = function () { return !0 };
        }).call(this); (function () { window.jsarwt = function () { return !1 }; }).call(this);</script>
    <style>
        div#searchform {
            min-width: 1173px;
            z-index: 127
        }

        #gb {
            height: 0;
            padding-left: 16px;
            padding-right: 16px
        }
    </style>
    <script nonce="T/1dJyC0GxsSMWP7nSTknQ==">; this.gbar_ = { CONFIG: [[[0, "www.gstatic.com", "og.qtm.en_US.Kr4TVma1eiQ.O", "co.in", "en", "1", 1, [4, 2, ".40.40.40.40.40.40.", "", "1300102,3700301,3700697,3700763,3700775", "313117145", "0"], null, "2pvSXtDZLqaa4-EPyNSbyAw", null, 0, "og.qtm.1bvxx528hqvsc.L.F4.O", "AA2YrTtIx4AGwpQDxM6vn71h3JMTrEy9Vw", "AA2YrTvo3vJwXv_zaZfCc1aKUBBrgkA8_w", "", 2, 1, 200, "IND", null, null, "1", "1", 1], null, [1, 0.1000000014901161, 2, 1], [1, 0.001000000047497451, 1], [0, 0, 0, null, "", "", "", ""], [0, 0, "", 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, null, 0, 0, null, null, 0, 0, 0, "", "", "", "", "", "", null, 0, 0, 0, 0, 0, null, null, null, "rgba(32,33,36,1)", "rgba(255,255,255,1)", 0, 0, 1, 1, 0], null, null, ["1", "gci_91f30755d6a6b787dcc2a4062e6e9824.js", "googleapis.client:plusone:gapi.iframes", "", "en"], null, null, null, null, ["m;/_/scs/abc-static/_/js/k=gapi.gapi.en.uvz63P-Csxw.O/d=1/ct=zgms/rs=AHpOoo-7ni_72Jo-lNC1pTImnv6TrVfwUQ/m=__features__", "https://apis.google.com", "", "", "", "", null, 1, "es_plusone_gc_20200428.0_p1", "en", null, 0, 0], [0.009999999776482582, "co.in", "1", [null, "", "0", null, 1, 5184000, null, null, "", 0, 1, "", 0, 0, 0, 0, 0, 0, 1, 0, 0, 0], null, [["", "", "0", 0, 0, -1]], null, 0, null, null, ["5061451", "google\\.(com|ru|ca|by|kz|com\\.mx|com\\.tr)$", 1]], [1, 1, null, 40400, 1, "IND", "en", "313117145.0", 8, 0.009999999776482582, 0, 0, null, null, 1, 0, "3700763", null, null, null, "2pvSXtDZLqaa4-EPyNSbyAw", 0], [[null, null, null, "https://www.gstatic.com/og/_/js/k=og.qtm.en_US.Kr4TVma1eiQ.O/rt=j/m=qabr,q_d,qcwid,qmutsd,qapid/exm=qaaw,qadd,qaid,qein,qhaw,qhbr,qhch,qhga,qhid,qhin,qhpr/d=1/ed=1/rs=AA2YrTtIx4AGwpQDxM6vn71h3JMTrEy9Vw"], [null, null, null, "https://www.gstatic.com/og/_/ss/k=og.qtm.1bvxx528hqvsc.L.F4.O/m=qcwid/excm=qaaw,qadd,qaid,qein,qhaw,qhbr,qhch,qhga,qhid,qhin,qhpr/d=1/ed=1/ct=zgms/rs=AA2YrTvo3vJwXv_zaZfCc1aKUBBrgkA8_w"]], null, null, [""], [[[null, null, [null, null, null, "https://ogs.google.com/widget/app/so"], 0, 468, 340, 57, 4, 1, 0, 0, 63, 64, 8000, "https://www.google.co.in/intl/en/about/products?tab=wh", 67, 1, 69, null, 1, 70, "Can't seem to load the app launcher right now. Try again or go to the %1$sGoogle Products%2$s page.", 3, 1, 0, 74, 0, null, null, null, null, null, null, 1]], 0, [null, null, null, "https://www.gstatic.com/og/_/js/k=og.qtm.en_US.Kr4TVma1eiQ.O/rt=j/m=qdsh/d=1/ed=1/rs=AA2YrTtIx4AGwpQDxM6vn71h3JMTrEy9Vw"], "1", "1", 1, 0, null, "en", 0]]], }; this.gbar_ = this.gbar_ || {}; (function (_) {
            var window = this;
            try {
                /*
                
                 Copyright The Closure Library Authors.
                 SPDX-License-Identifier: Apache-2.0
                */
                var aa, ba, ca, da, fa, ha, ja, ka, oa, pa, Aa, Ba, Da, Ea, Ga; aa = function (a) { var b = 0; return function () { return b < a.length ? { done: !1, value: a[b++] } : { done: !0 } } }; ba = "function" == typeof Object.defineProperties ? Object.defineProperty : function (a, b, c) { if (a == Array.prototype || a == Object.prototype) return a; a[b] = c.value; return a };
                ca = function (a) { a = ["object" == typeof globalThis && globalThis, a, "object" == typeof window && window, "object" == typeof self && self, "object" == typeof global && global]; for (var b = 0; b < a.length; ++b) { var c = a[b]; if (c && c.Math == Math) return c } throw Error("a"); }; da = ca(this); fa = function (a, b) { if (b) { var c = da; a = a.split("."); for (var d = 0; d < a.length - 1; d++) { var e = a[d]; e in c || (c[e] = {}); c = c[e] } a = a[a.length - 1]; d = c[a]; b = b(d); b != d && null != b && ba(c, a, { configurable: !0, writable: !0, value: b }) } };
                fa("Symbol", function (a) { if (a) return a; var b = function (e, f) { this.j = e; ba(this, "description", { configurable: !0, writable: !0, value: f }) }; b.prototype.toString = function () { return this.j }; var c = 0, d = function (e) { if (this instanceof d) throw new TypeError("b"); return new b("jscomp_symbol_" + (e || "") + "_" + c++, e) }; return d });
                fa("Symbol.iterator", function (a) { if (a) return a; a = Symbol("c"); for (var b = "Array Int8Array Uint8Array Uint8ClampedArray Int16Array Uint16Array Int32Array Uint32Array Float32Array Float64Array".split(" "), c = 0; c < b.length; c++) { var d = da[b[c]]; "function" === typeof d && "function" != typeof d.prototype[a] && ba(d.prototype, a, { configurable: !0, writable: !0, value: function () { return ha(aa(this)) } }) } return a }); ha = function (a) { a = { next: a }; a[Symbol.iterator] = function () { return this }; return a };
                _.ia = function (a) { var b = "undefined" != typeof Symbol && Symbol.iterator && a[Symbol.iterator]; return b ? b.call(a) : { next: aa(a) } }; ja = "function" == typeof Object.create ? Object.create : function (a) { var b = function () { }; b.prototype = a; return new b }; if ("function" == typeof Object.setPrototypeOf) ka = Object.setPrototypeOf; else { var la; a: { var ma = { Ug: !0 }, na = {}; try { na.__proto__ = ma; la = na.Ug; break a } catch (a) { } la = !1 } ka = la ? function (a, b) { a.__proto__ = b; if (a.__proto__ !== b) throw new TypeError("d`" + a); return a } : null } oa = ka;
                _.n = function (a, b) { a.prototype = ja(b.prototype); a.prototype.constructor = a; if (oa) oa(a, b); else for (var c in b) if ("prototype" != c) if (Object.defineProperties) { var d = Object.getOwnPropertyDescriptor(b, c); d && Object.defineProperty(a, c, d) } else a[c] = b[c]; a.M = b.prototype }; pa = function (a, b, c) { if (null == a) throw new TypeError("e`" + c); if (b instanceof RegExp) throw new TypeError("f`" + c); return a + "" };
                fa("String.prototype.startsWith", function (a) { return a ? a : function (b, c) { var d = pa(this, b, "startsWith"), e = d.length, f = b.length; c = Math.max(0, Math.min(c | 0, d.length)); for (var g = 0; g < f && c < e;)if (d[c++] != b[g++]) return !1; return g >= f } }); fa("Number.MAX_SAFE_INTEGER", function () { return 9007199254740991 });
                var qa = function (a, b) { a instanceof String && (a += ""); var c = 0, d = { next: function () { if (c < a.length) { var e = c++; return { value: b(e, a[e]), done: !1 } } d.next = function () { return { done: !0, value: void 0 } }; return d.next() } }; d[Symbol.iterator] = function () { return d }; return d }; fa("Array.prototype.keys", function (a) { return a ? a : function () { return qa(this, function (b) { return b }) } }); fa("Array.prototype.values", function (a) { return a ? a : function () { return qa(this, function (b, c) { return c }) } });
                var ra = function (a, b) { return Object.prototype.hasOwnProperty.call(a, b) };
                fa("WeakMap", function (a) {
                    function b() { } function c(l) { var m = typeof l; return "object" === m && null !== l || "function" === m } function d(l) { if (!ra(l, f)) { var m = new b; ba(l, f, { value: m }) } } function e(l) { var m = Object[l]; m && (Object[l] = function (r) { if (r instanceof b) return r; d(r); return m(r) }) } if (function () { if (!a || !Object.seal) return !1; try { var l = Object.seal({}), m = Object.seal({}), r = new a([[l, 2], [m, 3]]); if (2 != r.get(l) || 3 != r.get(m)) return !1; r.delete(l); r.set(m, 4); return !r.has(l) && 4 == r.get(m) } catch (t) { return !1 } }()) return a;
                    var f = "$jscomp_hidden_" + Math.random(); e("freeze"); e("preventExtensions"); e("seal"); var g = 0, k = function (l) { this.j = (g += Math.random() + 1).toString(); if (l) { l = _.ia(l); for (var m; !(m = l.next()).done;)m = m.value, this.set(m[0], m[1]) } }; k.prototype.set = function (l, m) { if (!c(l)) throw Error("g"); d(l); if (!ra(l, f)) throw Error("h`" + l); l[f][this.j] = m; return this }; k.prototype.get = function (l) { return c(l) && ra(l, f) ? l[f][this.j] : void 0 }; k.prototype.has = function (l) { return c(l) && ra(l, f) && ra(l[f], this.j) }; k.prototype.delete = function (l) {
                        return c(l) &&
                            ra(l, f) && ra(l[f], this.j) ? delete l[f][this.j] : !1
                    }; return k
                }); var sa = "function" == typeof Object.assign ? Object.assign : function (a, b) { for (var c = 1; c < arguments.length; c++) { var d = arguments[c]; if (d) for (var e in d) ra(d, e) && (a[e] = d[e]) } return a }; fa("Object.assign", function (a) { return a || sa });
                fa("Array.from", function (a) { return a ? a : function (b, c, d) { c = null != c ? c : function (k) { return k }; var e = [], f = "undefined" != typeof Symbol && Symbol.iterator && b[Symbol.iterator]; if ("function" == typeof f) { b = f.call(b); for (var g = 0; !(f = b.next()).done;)e.push(c.call(d, f.value, g++)) } else for (f = b.length, g = 0; g < f; g++)e.push(c.call(d, b[g], g)); return e } });
                fa("Map", function (a) {
                    if (function () { if (!a || "function" != typeof a || !a.prototype.entries || "function" != typeof Object.seal) return !1; try { var k = Object.seal({ x: 4 }), l = new a(_.ia([[k, "s"]])); if ("s" != l.get(k) || 1 != l.size || l.get({ x: 4 }) || l.set({ x: 4 }, "t") != l || 2 != l.size) return !1; var m = l.entries(), r = m.next(); if (r.done || r.value[0] != k || "s" != r.value[1]) return !1; r = m.next(); return r.done || 4 != r.value[0].x || "t" != r.value[1] || !m.next().done ? !1 : !0 } catch (t) { return !1 } }()) return a; var b = new WeakMap, c = function (k) {
                    this.o = {}; this.j =
                        f(); this.size = 0; if (k) { k = _.ia(k); for (var l; !(l = k.next()).done;)l = l.value, this.set(l[0], l[1]) }
                    }; c.prototype.set = function (k, l) { k = 0 === k ? 0 : k; var m = d(this, k); m.list || (m.list = this.o[m.id] = []); m.Xa ? m.Xa.value = l : (m.Xa = { next: this.j, Zb: this.j.Zb, head: this.j, key: k, value: l }, m.list.push(m.Xa), this.j.Zb.next = m.Xa, this.j.Zb = m.Xa, this.size++); return this }; c.prototype.delete = function (k) {
                        k = d(this, k); return k.Xa && k.list ? (k.list.splice(k.index, 1), k.list.length || delete this.o[k.id], k.Xa.Zb.next = k.Xa.next, k.Xa.next.Zb =
                            k.Xa.Zb, k.Xa.head = null, this.size--, !0) : !1
                    }; c.prototype.clear = function () { this.o = {}; this.j = this.j.Zb = f(); this.size = 0 }; c.prototype.has = function (k) { return !!d(this, k).Xa }; c.prototype.get = function (k) { return (k = d(this, k).Xa) && k.value }; c.prototype.entries = function () { return e(this, function (k) { return [k.key, k.value] }) }; c.prototype.keys = function () { return e(this, function (k) { return k.key }) }; c.prototype.values = function () { return e(this, function (k) { return k.value }) }; c.prototype.forEach = function (k, l) {
                        for (var m = this.entries(),
                            r; !(r = m.next()).done;)r = r.value, k.call(l, r[1], r[0], this)
                    }; c.prototype[Symbol.iterator] = c.prototype.entries; var d = function (k, l) { var m = l && typeof l; "object" == m || "function" == m ? b.has(l) ? m = b.get(l) : (m = "" + ++g, b.set(l, m)) : m = "p_" + l; var r = k.o[m]; if (r && ra(k.o, m)) for (k = 0; k < r.length; k++) { var t = r[k]; if (l !== l && t.key !== t.key || l === t.key) return { id: m, list: r, index: k, Xa: t } } return { id: m, list: r, index: -1, Xa: void 0 } }, e = function (k, l) {
                        var m = k.j; return ha(function () {
                            if (m) {
                                for (; m.head != k.j;)m = m.Zb; for (; m.next != m.head;)return m =
                                    m.next, { done: !1, value: l(m) }; m = null
                            } return { done: !0, value: void 0 }
                        })
                    }, f = function () { var k = {}; return k.Zb = k.next = k.head = k }, g = 0; return c
                });
                fa("Set", function (a) {
                    if (function () { if (!a || "function" != typeof a || !a.prototype.entries || "function" != typeof Object.seal) return !1; try { var c = Object.seal({ x: 4 }), d = new a(_.ia([c])); if (!d.has(c) || 1 != d.size || d.add(c) != d || 1 != d.size || d.add({ x: 4 }) != d || 2 != d.size) return !1; var e = d.entries(), f = e.next(); if (f.done || f.value[0] != c || f.value[1] != c) return !1; f = e.next(); return f.done || f.value[0] == c || 4 != f.value[0].x || f.value[1] != f.value[0] ? !1 : e.next().done } catch (g) { return !1 } }()) return a; var b = function (c) {
                    this.j = new Map; if (c) {
                        c =
                        _.ia(c); for (var d; !(d = c.next()).done;)this.add(d.value)
                    } this.size = this.j.size
                    }; b.prototype.add = function (c) { c = 0 === c ? 0 : c; this.j.set(c, c); this.size = this.j.size; return this }; b.prototype.delete = function (c) { c = this.j.delete(c); this.size = this.j.size; return c }; b.prototype.clear = function () { this.j.clear(); this.size = 0 }; b.prototype.has = function (c) { return this.j.has(c) }; b.prototype.entries = function () { return this.j.entries() }; b.prototype.values = function () { return this.j.values() }; b.prototype.keys = b.prototype.values;
                    b.prototype[Symbol.iterator] = b.prototype.values; b.prototype.forEach = function (c, d) { var e = this; this.j.forEach(function (f) { return c.call(d, f, f, e) }) }; return b
                }); fa("Object.entries", function (a) { return a ? a : function (b) { var c = [], d; for (d in b) ra(b, d) && c.push([d, b[d]]); return c } }); fa("Object.is", function (a) { return a ? a : function (b, c) { return b === c ? 0 !== b || 1 / b === 1 / c : b !== b && c !== c } });
                fa("Array.prototype.includes", function (a) { return a ? a : function (b, c) { var d = this; d instanceof String && (d = String(d)); var e = d.length; c = c || 0; for (0 > c && (c = Math.max(c + e, 0)); c < e; c++) { var f = d[c]; if (f === b || Object.is(f, b)) return !0 } return !1 } }); fa("String.prototype.includes", function (a) { return a ? a : function (b, c) { return -1 !== pa(this, b, "includes").indexOf(b, c || 0) } }); _.ta = _.ta || {}; _.p = this || self; _.ua = function () { }; _.va = function (a) { a.Xe = void 0; a.ua = function () { return a.Xe ? a.Xe : a.Xe = new a } };
                _.xa = function (a) {
                    var b = typeof a; if ("object" == b) if (a) { if (a instanceof Array) return "array"; if (a instanceof Object) return b; var c = Object.prototype.toString.call(a); if ("[object Window]" == c) return "object"; if ("[object Array]" == c || "number" == typeof a.length && "undefined" != typeof a.splice && "undefined" != typeof a.propertyIsEnumerable && !a.propertyIsEnumerable("splice")) return "array"; if ("[object Function]" == c || "undefined" != typeof a.call && "undefined" != typeof a.propertyIsEnumerable && !a.propertyIsEnumerable("call")) return "function" } else return "null";
                    else if ("function" == b && "undefined" == typeof a.call) return "object"; return b
                }; _.ya = function (a) { return "function" == _.xa(a) }; _.za = function (a) { var b = typeof a; return "object" == b && null != a || "function" == b }; _.Ca = function (a) { return Object.prototype.hasOwnProperty.call(a, Aa) && a[Aa] || (a[Aa] = ++Ba) }; Aa = "closure_uid_" + (1E9 * Math.random() >>> 0); Ba = 0; Da = function (a, b, c) { return a.call.apply(a.bind, arguments) };
                Ea = function (a, b, c) { if (!a) throw Error(); if (2 < arguments.length) { var d = Array.prototype.slice.call(arguments, 2); return function () { var e = Array.prototype.slice.call(arguments); Array.prototype.unshift.apply(e, d); return a.apply(b, e) } } return function () { return a.apply(b, arguments) } }; _.q = function (a, b, c) { Function.prototype.bind && -1 != Function.prototype.bind.toString().indexOf("native code") ? _.q = Da : _.q = Ea; return _.q.apply(null, arguments) }; _.Fa = Date.now || function () { return +new Date };
                _.u = function (a, b) { a = a.split("."); var c = _.p; a[0] in c || "undefined" == typeof c.execScript || c.execScript("var " + a[0]); for (var d; a.length && (d = a.shift());)a.length || void 0 === b ? c[d] && c[d] !== Object.prototype[d] ? c = c[d] : c = c[d] = {} : c[d] = b }; _.v = function (a, b) { function c() { } c.prototype = b.prototype; a.M = b.prototype; a.prototype = new c; a.prototype.constructor = a }; Ga = function (a) { return a };
                _.Ha = function (a) { var b = null, c = _.p.trustedTypes; if (!c || !c.createPolicy) return b; try { b = c.createPolicy(a, { createHTML: Ga, createScript: Ga, createScriptURL: Ga }) } catch (d) { _.p.console && _.p.console.error(d.message) } return b };
                _.Ia = function (a) { if (Error.captureStackTrace) Error.captureStackTrace(this, _.Ia); else { var b = Error().stack; b && (this.stack = b) } a && (this.message = String(a)) }; _.v(_.Ia, Error); _.Ia.prototype.name = "CustomError";
                _.Ja = Array.prototype.indexOf ? function (a, b) { return Array.prototype.indexOf.call(a, b, void 0) } : function (a, b) { if ("string" === typeof a) return "string" !== typeof b || 1 != b.length ? -1 : a.indexOf(b, 0); for (var c = 0; c < a.length; c++)if (c in a && a[c] === b) return c; return -1 }; _.Ka = Array.prototype.forEach ? function (a, b, c) { Array.prototype.forEach.call(a, b, c) } : function (a, b, c) { for (var d = a.length, e = "string" === typeof a ? a.split("") : a, f = 0; f < d; f++)f in e && b.call(c, e[f], f, a) };
                _.La = Array.prototype.filter ? function (a, b, c) { return Array.prototype.filter.call(a, b, c) } : function (a, b, c) { for (var d = a.length, e = [], f = 0, g = "string" === typeof a ? a.split("") : a, k = 0; k < d; k++)if (k in g) { var l = g[k]; b.call(c, l, k, a) && (e[f++] = l) } return e }; _.Ma = Array.prototype.map ? function (a, b, c) { return Array.prototype.map.call(a, b, c) } : function (a, b, c) { for (var d = a.length, e = Array(d), f = "string" === typeof a ? a.split("") : a, g = 0; g < d; g++)g in f && (e[g] = b.call(c, f[g], g, a)); return e };
                _.Na = Array.prototype.some ? function (a, b) { return Array.prototype.some.call(a, b, void 0) } : function (a, b) { for (var c = a.length, d = "string" === typeof a ? a.split("") : a, e = 0; e < c; e++)if (e in d && b.call(void 0, d[e], e, a)) return !0; return !1 }; _.Oa = function (a, b) { return 0 <= (0, _.Ja)(a, b) };
                var Qa; _.Pa = function (a, b, c) { for (var d in a) b.call(c, a[d], d, a) }; Qa = "constructor hasOwnProperty isPrototypeOf propertyIsEnumerable toLocaleString toString valueOf".split(" "); _.Ra = function (a, b) { for (var c, d, e = 1; e < arguments.length; e++) { d = arguments[e]; for (c in d) a[c] = d[c]; for (var f = 0; f < Qa.length; f++)c = Qa[f], Object.prototype.hasOwnProperty.call(d, c) && (a[c] = d[c]) } };
                var Ta = function () { var a = Sa; return function () { var b = this || _.p; b = b.closure_memoize_cache_ || (b.closure_memoize_cache_ = {}); var c = a(_.Ca(_.Ha), arguments); return b.hasOwnProperty(c) ? b[c] : b[c] = _.Ha.apply(this, arguments) } }, Sa = function (a, b) { a = [a]; for (var c = b.length - 1; 0 <= c; --c)a.push(typeof b[c], b[c]); return a.join("\x0B") };
                _.Ua = function () { return Ta()("ogb-qtm#html") };
                var Wa; _.Xa = function (a, b) { this.j = a === _.Va && b || ""; this.o = Wa }; _.Xa.prototype.Pb = !0; _.Xa.prototype.Fb = function () { return this.j }; _.Ya = function (a) { return a instanceof _.Xa && a.constructor === _.Xa && a.o === Wa ? a.j : "type_error:Const" }; Wa = {}; _.Va = {};
                var $a, Za; _.ab = function (a, b) { this.o = a === Za && b || ""; this.w = $a }; _.ab.prototype.Pb = !0; _.ab.prototype.Fb = function () { return this.o.toString() }; _.ab.prototype.Ve = !0; _.ab.prototype.j = function () { return 1 }; _.cb = function (a) { return _.bb(a).toString() }; _.bb = function (a) { if (a instanceof _.ab && a.constructor === _.ab && a.w === $a) return a.o; _.xa(a); return "type_error:TrustedResourceUrl" }; $a = {}; _.db = function (a) { var b = _.Ua(); a = b ? b.createScriptURL(a) : a; return new _.ab(Za, a) }; Za = {};
                var fb; _.eb = String.prototype.trim ? function (a) { return a.trim() } : function (a) { return /^[\s\xa0]*([\s\S]*?)[\s\xa0]*$/.exec(a)[1] };
                _.gb = function (a, b) { var c = 0; a = (0, _.eb)(String(a)).split("."); b = (0, _.eb)(String(b)).split("."); for (var d = Math.max(a.length, b.length), e = 0; 0 == c && e < d; e++) { var f = a[e] || "", g = b[e] || ""; do { f = /(\d*)(\D*)(.*)/.exec(f) || ["", "", "", ""]; g = /(\d*)(\D*)(.*)/.exec(g) || ["", "", "", ""]; if (0 == f[0].length && 0 == g[0].length) break; c = fb(0 == f[1].length ? 0 : parseInt(f[1], 10), 0 == g[1].length ? 0 : parseInt(g[1], 10)) || fb(0 == f[2].length, 0 == g[2].length) || fb(f[2], g[2]); f = f[3]; g = g[3] } while (0 == c) } return c };
                fb = function (a, b) { return a < b ? -1 : a > b ? 1 : 0 };
                var lb, ib; _.jb = function (a, b) { this.o = a === _.hb && b || ""; this.w = ib }; _.jb.prototype.Pb = !0; _.jb.prototype.Fb = function () { return this.o.toString() }; _.jb.prototype.Ve = !0; _.jb.prototype.j = function () { return 1 }; _.kb = function (a) { if (a instanceof _.jb && a.constructor === _.jb && a.w === ib) return a.o; _.xa(a); return "type_error:SafeUrl" }; lb = /^(?:(?:https?|mailto|ftp):|[^:/?#]*(?:[/?#]|$))/i;
                _.mb = function (a) { if (a instanceof _.jb) return a; a = "object" == typeof a && a.Pb ? a.Fb() : String(a); lb.test(a) || (a = "about:invalid#zClosurez"); return new _.jb(_.hb, a) }; _.nb = function (a) { if (a instanceof _.jb) return a; a = "object" == typeof a && a.Pb ? a.Fb() : String(a); lb.test(a) || (a = "about:invalid#zClosurez"); return new _.jb(_.hb, a) }; ib = {}; _.hb = {};
                _.pb = function () { this.j = ""; this.o = _.ob }; _.pb.prototype.Pb = !0; _.ob = {}; _.pb.prototype.Fb = function () { return this.j }; _.qb = function (a) { var b = new _.pb; b.j = a; return b }; _.rb = _.qb("");
                a: { var tb = _.p.navigator; if (tb) { var ub = tb.userAgent; if (ub) { _.sb = ub; break a } } _.sb = "" } _.w = function (a) { return -1 != _.sb.indexOf(a) };
                var xb; _.vb = function () { return _.w("Trident") || _.w("MSIE") }; _.wb = function () { return _.w("Firefox") || _.w("FxiOS") }; _.yb = function () { return _.w("Safari") && !(xb() || _.w("Coast") || _.w("Opera") || _.w("Edge") || _.w("Edg/") || _.w("OPR") || _.wb() || _.w("Silk") || _.w("Android")) }; xb = function () { return (_.w("Chrome") || _.w("CriOS")) && !_.w("Edge") }; _.zb = function () { return _.w("Android") && !(xb() || _.wb() || _.w("Opera") || _.w("Silk")) };
                var Ab; _.Bb = function () { this.o = ""; this.A = Ab; this.w = null }; _.Bb.prototype.Ve = !0; _.Bb.prototype.j = function () { return this.w }; _.Bb.prototype.Pb = !0; _.Bb.prototype.Fb = function () { return this.o.toString() }; _.Cb = function (a) { if (a instanceof _.Bb && a.constructor === _.Bb && a.A === Ab) return a.o; _.xa(a); return "type_error:SafeHtml" }; Ab = {}; _.Db = function (a, b) { var c = new _.Bb, d = _.Ua(); c.o = d ? d.createHTML(a) : a; c.w = b; return c }; _.Eb = new _.Bb; _.Eb.o = _.p.trustedTypes && _.p.trustedTypes.emptyHTML ? _.p.trustedTypes.emptyHTML : "";
                _.Eb.w = 0; _.Fb = _.Db("<br>", 0);
                _.Gb = function (a) { var b = !1, c; return function () { b || (c = a(), b = !0); return c } }(function () { var a = document.createElement("div"), b = document.createElement("div"); b.appendChild(document.createElement("div")); a.appendChild(b); b = a.firstChild.firstChild; a.innerHTML = _.Cb(_.Eb); return !b.parentElement });
                var Hb; Hb = function () { return _.w("iPhone") && !_.w("iPod") && !_.w("iPad") }; _.Ib = function () { return Hb() || _.w("iPad") || _.w("iPod") };
                _.Jb = function (a) { _.Jb[" "](a); return a }; _.Jb[" "] = _.ua; var Lb = function (a, b) { var c = Kb; return Object.prototype.hasOwnProperty.call(c, a) ? c[a] : c[a] = b(a) };
                var Zb, $b, Kb, hc; _.Mb = _.w("Opera"); _.x = _.vb(); _.Nb = _.w("Edge"); _.Ob = _.Nb || _.x; _.Pb = _.w("Gecko") && !(-1 != _.sb.toLowerCase().indexOf("webkit") && !_.w("Edge")) && !(_.w("Trident") || _.w("MSIE")) && !_.w("Edge"); _.Qb = -1 != _.sb.toLowerCase().indexOf("webkit") && !_.w("Edge"); _.Rb = _.w("Macintosh"); _.Sb = _.w("Windows"); _.Tb = _.w("Linux") || _.w("CrOS"); _.Ub = _.w("Android"); _.Vb = Hb(); _.Wb = _.w("iPad"); _.Xb = _.w("iPod"); _.Yb = _.Ib(); Zb = function () { var a = _.p.document; return a ? a.documentMode : void 0 };
                a: { var ac = "", bc = function () { var a = _.sb; if (_.Pb) return /rv:([^\);]+)(\)|;)/.exec(a); if (_.Nb) return /Edge\/([\d\.]+)/.exec(a); if (_.x) return /\b(?:MSIE|rv)[: ]([^\);]+)(\)|;)/.exec(a); if (_.Qb) return /WebKit\/(\S+)/.exec(a); if (_.Mb) return /(?:Version)[ \/]?(\S+)/.exec(a) }(); bc && (ac = bc ? bc[1] : ""); if (_.x) { var cc = Zb(); if (null != cc && cc > parseFloat(ac)) { $b = String(cc); break a } } $b = ac } _.dc = $b; Kb = {}; _.ec = function (a) { return Lb(a, function () { return 0 <= _.gb(_.dc, a) }) }; _.gc = function (a) { return Number(fc) >= a };
                if (_.p.document && _.x) { var ic = Zb(); hc = ic ? ic : parseInt(_.dc, 10) || void 0 } else hc = void 0; var fc = hc;
                _.jc = _.wb(); _.kc = Hb() || _.w("iPod"); _.lc = _.w("iPad"); _.mc = _.zb(); _.nc = xb(); _.oc = _.yb() && !_.Ib();
                var pc = {}, qc = null;
                _.rc = function (a) { this.j = 0; this.o = a }; _.rc.prototype.next = function () { return this.j < this.o.length ? { done: !1, value: this.o[this.j++] } : { done: !0, value: void 0 } }; "undefined" != typeof Symbol && "undefined" != typeof Symbol.iterator && (_.rc.prototype[Symbol.iterator] = function () { return this });
                var yc; _.y = function () { }; _.sc = "function" == typeof Uint8Array;
                _.z = function (a, b, c, d, e, f) { a.j = null; b || (b = c ? [c] : []); a.H = c ? String(c) : void 0; a.B = 0 === c ? -1 : 0; a.w = b; a: { c = a.w.length; b = -1; if (c && (b = c - 1, c = a.w[b], !(null === c || "object" != typeof c || Array.isArray(c) || _.sc && c instanceof Uint8Array))) { a.C = b - a.B; a.A = c; break a } -1 < d ? (a.C = Math.max(d, b + 1 - a.B), a.A = null) : a.C = Number.MAX_VALUE } a.J = {}; if (e) for (d = 0; d < e.length; d++)b = e[d], b < a.C ? (b += a.B, a.w[b] = a.w[b] || _.tc) : (_.uc(a), a.A[b] = a.A[b] || _.tc); if (f && f.length) for (d = 0; d < f.length; d++)_.vc(a, f[d]) }; _.tc = [];
                _.uc = function (a) { var b = a.C + a.B; a.w[b] || (a.A = a.w[b] = {}) }; _.A = function (a, b) { if (b < a.C) { b += a.B; var c = a.w[b]; return c === _.tc ? a.w[b] = [] : c } if (a.A) return c = a.A[b], c === _.tc ? a.A[b] = [] : c }; _.B = function (a, b) { a = _.A(a, b); return null == a ? a : !!a }; _.C = function (a, b, c) { a = _.A(a, b); return null == a ? c : a }; _.wc = function (a, b, c) { a = _.B(a, b); return null == a ? c : a }; _.xc = function (a, b, c) { a = _.A(a, b); a = null == a ? a : +a; return null == a ? c : a }; _.E = function (a, b, c) { b < a.C ? a.w[b + a.B] = c : (_.uc(a), a.A[b] = c); return a };
                _.vc = function (a, b) { for (var c, d, e = 0; e < b.length; e++) { var f = b[e], g = _.A(a, f); null != g && (c = f, d = g, _.E(a, f, void 0)) } return c ? (_.E(a, c, d), c) : 0 }; _.G = function (a, b, c) { a.j || (a.j = {}); if (!a.j[c]) { var d = _.A(a, c); d && (a.j[c] = new b(d)) } return a.j[c] }; _.H = function (a, b, c) { a.j || (a.j = {}); var d = c ? c.tb() : c; a.j[b] = c; return _.E(a, b, d) }; yc = function (a) { if (a.j) for (var b in a.j) { var c = a.j[b]; if (Array.isArray(c)) for (var d = 0; d < c.length; d++)c[d] && c[d].tb(); else c && c.tb() } }; _.y.prototype.tb = function () { yc(this); return this.w };
                _.y.prototype.o = _.sc ? function () {
                    var a = Uint8Array.prototype.toJSON; Uint8Array.prototype.toJSON = function () {
                        var b; void 0 === b && (b = 0); if (!qc) { qc = {}; for (var c = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789".split(""), d = ["+/=", "+/", "-_=", "-_.", "-_"], e = 0; 5 > e; e++) { var f = c.concat(d[e].split("")); pc[e] = f; for (var g = 0; g < f.length; g++) { var k = f[g]; void 0 === qc[k] && (qc[k] = g) } } } b = pc[b]; c = []; for (d = 0; d < this.length; d += 3) {
                            var l = this[d], m = (e = d + 1 < this.length) ? this[d + 1] : 0; k = (f = d + 2 < this.length) ? this[d + 2] : 0;
                            g = l >> 2; l = (l & 3) << 4 | m >> 4; m = (m & 15) << 2 | k >> 6; k &= 63; f || (k = 64, e || (m = 64)); c.push(b[g], b[l], b[m] || "", b[k] || "")
                        } return c.join("")
                    }; try { return JSON.stringify(this.w && this.tb(), zc) } finally { Uint8Array.prototype.toJSON = a }
                } : function () { return JSON.stringify(this.w && this.tb(), zc) }; var zc = function (a, b) { return "number" !== typeof b || !isNaN(b) && Infinity !== b && -Infinity !== b ? b : String(b) }; _.y.prototype.toString = function () { yc(this); return this.w.toString() };
                _.I = function () { this.Wa = this.Wa; this.Db = this.Db }; _.I.prototype.Wa = !1; _.I.prototype.ta = function () { this.Wa || (this.Wa = !0, this.R()) }; _.I.prototype.R = function () { if (this.Db) for (; this.Db.length;)this.Db.shift()() };
                var Ac = function (a) { _.z(this, a, 0, -1, null, null) }; _.v(Ac, _.y);
                _.Bc = function (a) { _.z(this, a, 0, -1, null, null) }; _.v(_.Bc, _.y);
                var Cc = function (a) { _.z(this, a, 0, -1, null, null) }; _.v(Cc, _.y);
                _.Dc = function (a) { _.z(this, a, 0, -1, null, null) }; _.v(_.Dc, _.y);
                _.Ec = function (a) { _.z(this, a, 0, -1, null, null) }; _.v(_.Ec, _.y);
                var Fc = function (a) { _.I.call(this); this.w = a; this.j = []; this.o = {} }; _.v(Fc, _.I); Fc.prototype.ud = function () { for (var a = this.j.length, b = this.j, c = [], d = 0; d < a; ++d) { var e = b[d].j(); a: { var f = this.w; for (var g = e.split("."), k = g.length, l = 0; l < k; ++l)if (f[g[l]]) f = f[g[l]]; else { f = null; break a } f = f instanceof Function ? f : null } if (f && f != this.o[e]) try { b[d].ud(f) } catch (m) { } else c.push(b[d]) } this.j = c.concat(b.slice(a)) };
                var Mc; _.Gc = function () { this.j = {}; this.o = {} }; _.va(_.Gc); _.Ic = function (a) { return _.Hc(_.Gc.ua(), a) }; _.Kc = function (a, b) { var c = _.Gc.ua(); if (a in c.j) { if (c.j[a] != b) throw new Jc(a); } else { c.j[a] = b; if (b = c.o[a]) for (var d = 0, e = b.length; d < e; d++)b[d].j(c.j, a); delete c.o[a] } }; _.Hc = function (a, b) { if (b in a.j) return a.j[b]; throw new Lc(b); }; Mc = function () { _.Ia.call(this) }; _.v(Mc, _.Ia); var Jc = function () { _.Ia.call(this) }; _.v(Jc, Mc); var Lc = function () { _.Ia.call(this) }; _.v(Lc, Mc);
                var Pc = function (a) { _.I.call(this); this.B = a; this.w = this.j = null; this.C = 0; this.A = {}; this.o = !1; a = window.navigator.userAgent; 0 <= a.indexOf("MSIE") && 0 <= a.indexOf("Trident") && (a = /\b(?:MSIE|rv)[: ]([^\);]+)(\)|;)/.exec(a)) && a[1] && 9 > parseFloat(a[1]) && (this.o = !0) }; _.n(Pc, _.I); Pc.prototype.D = function (a, b) { this.j = b; this.w = a; b.preventDefault ? b.preventDefault() : b.returnValue = !1 };
                _.Qc = function (a) { _.z(this, a, 0, -1, null, null) }; _.v(_.Qc, _.y);
                _.Rc = function (a) { _.z(this, a, 0, -1, null, null) }; _.v(_.Rc, _.y);
                _.J = function (a, b) { return null != a ? !!a : !!b }; _.L = function (a, b) { void 0 == b && (b = ""); return null != a ? a : b }; _.Sc = function (a, b) { void 0 == b && (b = 0); return null != a ? a : b };
                _.Tc = function () { this.data = {} }; _.Tc.prototype.j = function () { window.console && window.console.log && window.console.log("Log data: ", this.data) }; _.Tc.prototype.o = function (a) { var b = [], c; for (c in this.data) b.push(encodeURIComponent(c) + "=" + encodeURIComponent(String(this.data[c]))); return ("atyp=i&zx=" + (new Date).getTime() + "&" + b.join("&")).substr(0, a) };
                var Uc = function (a, b) { this.data = {}; var c = _.G(a, Cc, 8) || new Cc; window.google && window.google.kEI && (this.data.ei = window.google.kEI); this.data.sei = _.L(_.A(a, 10)); this.data.ogf = _.L(_.A(c, 3)); var d = window.google && window.google.sn ? /.*hp$/.test(window.google.sn) ? !1 : !0 : _.J(_.B(a, 7)); this.data.ogrp = d ? "1" : ""; this.data.ogv = _.L(_.A(c, 6)) + "." + _.L(_.A(c, 7)); this.data.ogd = _.L(_.A(a, 21)); this.data.ogc = _.L(_.A(a, 20)); this.data.ogl = _.L(_.A(a, 5)); b && (this.data.oggv = b) }; _.v(Uc, _.Tc);
                var Vc = [1, 2, 3, 4, 5, 6, 9, 10, 11, 13, 14, 28, 29, 30, 34, 35, 37, 38, 39, 40, 42, 43, 48, 49, 50, 51, 52, 53, 62, 500], Yc = function (a, b, c, d, e, f) { Uc.call(this, a, b); _.Ra(this.data, { oge: d, ogex: _.L(_.A(a, 9)), ogp: _.L(_.A(a, 6)), ogsr: Math.round(1 / (Wc(d) ? _.Sc(_.xc(c, 3, 1)) : _.Sc(_.xc(c, 2, 1E-4)))), ogus: e }); if (f) { "ogw" in f && (this.data.ogw = f.ogw, delete f.ogw); "ved" in f && (this.data.ved = f.ved, delete f.ved); a = []; for (var g in f) 0 != a.length && a.push(","), a.push(Xc(g)), a.push("."), a.push(Xc(f[g])); f = a.join(""); "" != f && (this.data.ogad = f) } };
                _.v(Yc, Uc); var Xc = function (a) { a = String(a); return a.replace(".", "%2E").replace(",", "%2C") }, Zc = null, Wc = function (a) { if (!Zc) { Zc = {}; for (var b = 0; b < Vc.length; b++)Zc[Vc[b]] = !0 } return !!Zc[a] };
                var $c, cd, bd; _.ad = function (a) { var b = window.google && window.google.logUrl ? "" : "https://www.google.com"; b += "/gen_204?"; b += a.o(2040 - b.length); $c(_.mb(b)) }; $c = function (a) { var b = new Image; b.onerror = b.onload = b.onabort = function () { bd in cd && delete cd[bd] }; cd[bd++] = b; b.src = _.kb(a) }; cd = []; bd = 0;
                var gd = function () { var a = dd, b = ed, c = fd; this.C = a; this.B = b; this.A = _.Sc(_.xc(a, 2, 1E-4), 1E-4); this.o = _.Sc(_.xc(a, 3, 1), 1); b = Math.random(); this.w = _.J(_.B(a, 1)) && b < this.A; this.j = _.J(_.B(a, 1)) && b < this.o; a = 0; _.J(_.B(c, 1)) && (a |= 1); _.J(_.B(c, 2)) && (a |= 2); _.J(_.B(c, 3)) && (a |= 4); this.D = a }; gd.prototype.log = function (a, b) { try { if (Wc(a) ? this.j : this.w) { var c = new Yc(this.B, "quantum:gapiBuildLabel", this.C, a, this.D, b); _.ad(c) } } catch (d) { } };
                _.hd = function (a, b, c, d, e) { Uc.call(this, a, b); _.Ra(this.data, { jexpid: _.L(_.A(a, 9)), srcpg: "prop=" + _.L(_.A(a, 6)), jsr: Math.round(1 / d), emsg: c.name + ":" + c.message }); if (e) { e._sn && (e._sn = "og." + e._sn); for (var f in e) this.data[encodeURIComponent(f)] = e[f] } }; _.v(_.hd, Uc);
                _.id = function (a) { _.z(this, a, 0, -1, null, null) }; _.v(_.id, _.y);
                var ld = function () { var a = jd; this.D = kd; this.A = _.Sc(_.xc(a, 2, .001), .001); this.C = _.J(_.B(a, 1)) && Math.random() < this.A; this.B = _.Sc(_.C(a, 3, 1), 1); this.w = 0; this.j = this.o = null; _.wc(a, 4, !0) }; ld.prototype.log = function (a, b) { if (this.j) { var c = new Ac; _.E(c, 1, a.message); _.E(c, 2, a.stack); _.E(c, 3, a.lineNumber); _.E(c, 5, 1); var d = new _.Bc; _.H(d, 40, c); this.j.log(98, d) } try { if (this.C && this.w < this.B) { try { var e = (this.o || _.Hc(_.Gc.ua(), "lm")).j(a, b) } catch (f) { e = new _.hd(this.D, "quantum:gapiBuildLabel", a, this.A, b) } _.ad(e); this.w++ } } catch (f) { } };
                var md = function (a) { _.z(this, a, 0, -1, null, null) }; _.v(md, _.y);
                var nd = function (a) { this.j = a; this.o = void 0; this.w = [] }; nd.prototype.then = function (a, b, c) { this.w.push(new od(a, b, c)); _.pd(this) }; _.qd = function (a, b) { if (void 0 !== a.j || void 0 !== a.o) throw Error("o"); a.j = b; _.pd(a) }; _.pd = function (a) { if (0 < a.w.length) { var b = void 0 !== a.j, c = void 0 !== a.o; if (b || c) { b = b ? a.A : a.B; c = a.w; a.w = []; try { (0, _.Ka)(c, b, a) } catch (d) { console.error(d) } } } }; nd.prototype.A = function (a) { a.o && a.o.call(a.j, this.j) }; nd.prototype.B = function (a) { a.w && a.w.call(a.j, this.o) };
                var od = function (a, b, c) { this.o = a; this.w = b; this.j = c };
                _.M = function () { this.A = new nd; this.o = new nd; this.D = new nd; this.B = new nd; this.C = new nd; this.G = new nd; this.J = new nd; this.j = new nd; this.w = new nd }; _.va(_.M); _.h = _.M.prototype; _.h.Dh = function () { return this.A }; _.h.Lh = function () { return this.o }; _.h.Rh = function () { return this.D }; _.h.Kh = function () { return this.B }; _.h.Ph = function () { return this.C }; _.h.Sh = function () { return this.G }; _.h.Hh = function () { return this.J }; _.h.Ih = function () { return this.j }; _.h.wh = function () { return this.w };
                var rd = function (a) { _.z(this, a, 0, -1, null, null) }; _.v(rd, _.y); _.td = function () { return _.G(_.sd, _.Dc, 1) }; _.ud = function () { return _.G(_.sd, _.Ec, 5) };
                var vd; window.gbar_ && window.gbar_.CONFIG ? vd = window.gbar_.CONFIG[0] || {} : vd = []; _.sd = new rd(vd);
                var jd, kd, ed, fd, dd; jd = _.G(_.sd, _.id, 3) || new _.id; kd = _.td() || new _.Dc; _.wd = new ld; ed = _.td() || new _.Dc; fd = _.ud() || new _.Ec; dd = _.G(_.sd, md, 4) || new md; _.xd = new gd;
                _.u("gbar_._DumpException", function (a) { _.wd ? _.wd.log(a) : console.error(a) });
                _.yd = new Pc(_.wd);
                _.xd.log(8, { m: "BackCompat" == document.compatMode ? "q" : "s" }); _.u("gbar.A", nd); nd.prototype.aa = nd.prototype.then; _.u("gbar.B", _.M); _.M.prototype.ba = _.M.prototype.Lh; _.M.prototype.bb = _.M.prototype.Rh; _.M.prototype.bd = _.M.prototype.Ph; _.M.prototype.be = _.M.prototype.Sh; _.M.prototype.bf = _.M.prototype.Dh; _.M.prototype.bg = _.M.prototype.Kh; _.M.prototype.bh = _.M.prototype.Hh; _.M.prototype.bi = _.M.prototype.Ih; _.M.prototype.bj = _.M.prototype.wh; _.u("gbar.a", _.M.ua()); var zd = new Fc(window); _.Kc("api", zd);
                var Ad = _.ud() || new _.Ec, Bd = _.L(_.A(Ad, 8)); window.__PVT = Bd; _.Kc("eq", _.yd);

            } catch (e) { _._DumpException(e) }
            try {
                var Cd = function (a) { _.z(this, a, 0, -1, null, null) }; _.v(Cd, _.y);
                var Dd = function () { _.I.call(this); this.o = []; this.j = [] }; _.n(Dd, _.I); Dd.prototype.w = function (a, b) { this.o.push({ Ud: a, options: b }) }; Dd.prototype.init = function (a, b, c) { window.gapi = {}; var d = window.___jsl = {}; d.h = _.L(_.A(a, 1)); null != _.A(a, 12) && (d.dpo = _.J(_.B(a, 12))); d.ms = _.L(_.A(a, 2)); d.m = _.L(_.A(a, 3)); d.l = []; _.A(b, 1) && (a = _.A(b, 3)) && this.j.push(a); _.A(c, 1) && (c = _.A(c, 2)) && this.j.push(c); _.u("gapi.load", (0, _.q)(this.w, this)); return this };
                var Ed = _.G(_.sd, _.Qc, 14) || new _.Qc, Fd = _.G(_.sd, _.Rc, 9) || new _.Rc, Gd = new Cd, Hd = new Dd; Hd.init(Ed, Fd, Gd); _.Kc("gs", Hd);

            } catch (e) { _._DumpException(e) }
        })(this.gbar_);
// Google Inc.
    </script> <noscript></noscript>
    <style>
        .gb_2a:not(.gb_Wd) {
            font: 13px/27px Roboto, RobotoDraft, Arial, sans-serif;
            z-index: 986
        }

        @-moz-keyframes gb__a {
            0% {
                opacity: 0
            }

            50% {
                opacity: 1
            }
        }

        @keyframes gb__a {
            0% {
                opacity: 0
            }

            50% {
                opacity: 1
            }
        }

        a.gb_0 {
            border: none;
            color: #4285f4;
            cursor: default;
            font-weight: bold;
            outline: none;
            position: relative;
            text-align: center;
            text-decoration: none;
            text-transform: uppercase;
            white-space: nowrap;
            -moz-user-select: none
        }

        a.gb_0:hover:after,
        a.gb_0:focus:after {
            background-color: rgba(0, 0, 0, .12);
            content: '';
            height: 100%;
            left: 0;
            position: absolute;
            top: 0;
            width: 100%
        }

        a.gb_0:hover,
        a.gb_0:focus {
            text-decoration: none
        }

        a.gb_0:active {
            background-color: rgba(153, 153, 153, .4);
            text-decoration: none
        }

        a.gb_1 {
            background-color: #4285f4;
            color: #fff
        }

        a.gb_1:active {
            background-color: #0043b2
        }

        .gb_2 {
            -moz-box-shadow: 0 1px 1px rgba(0, 0, 0, .16);
            box-shadow: 0 1px 1px rgba(0, 0, 0, .16)
        }

        .gb_0,
        .gb_1,
        .gb_3,
        .gb_4 {
            display: inline-block;
            line-height: 28px;
            padding: 0 12px;
            -moz-border-radius: 2px;
            border-radius: 2px
        }

        .gb_3 {
            background: #f8f8f8;
            border: 1px solid #c6c6c6
        }

        .gb_4 {
            background: #f8f8f8
        }

        .gb_3,
        #gb a.gb_3.gb_3,
        .gb_4 {
            color: #666;
            cursor: default;
            text-decoration: none
        }

        #gb a.gb_4.gb_4 {
            cursor: default;
            text-decoration: none
        }

        .gb_4 {
            border: 1px solid #4285f4;
            font-weight: bold;
            outline: none;
            background: #4285f4;
            background: -moz-linear-gradient(top, #4387fd, #4683ea);
            background: linear-gradient(top, #4387fd, #4683ea);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#4387fd, endColorstr=#4683ea, GradientType=0)
        }

        #gb a.gb_4.gb_4 {
            color: #fff
        }

        .gb_4:hover {
            -moz-box-shadow: 0 1px 0 rgba(0, 0, 0, .15);
            box-shadow: 0 1px 0 rgba(0, 0, 0, .15)
        }

        .gb_4:active {
            -moz-box-shadow: inset 0 2px 0 rgba(0, 0, 0, .15);
            box-shadow: inset 0 2px 0 rgba(0, 0, 0, .15);
            background: #3c78dc;
            background: -moz-linear-gradient(top, #3c7ae4, #3f76d3);
            background: linear-gradient(top, #3c7ae4, #3f76d3);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#3c7ae4, endColorstr=#3f76d3, GradientType=0)
        }

        .gb_Fa {
            display: none !important
        }

        .gb_Ha {
            visibility: hidden
        }

        .gb_md {
            display: inline-block;
            vertical-align: middle
        }

        .gb_Vf {
            position: relative
        }

        .gb_D {
            display: inline-block;
            outline: none;
            vertical-align: middle;
            -moz-border-radius: 2px;
            border-radius: 2px;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            height: 40px;
            width: 40px;
            color: #000;
            cursor: pointer;
            text-decoration: none
        }

        #gb#gb a.gb_D {
            color: #000;
            cursor: pointer;
            text-decoration: none
        }

        .gb_4a {
            border-color: transparent;
            border-bottom-color: #fff;
            border-style: dashed dashed solid;
            border-width: 0 8.5px 8.5px;
            display: none;
            position: absolute;
            left: 11.5px;
            top: 43px;
            z-index: 1;
            height: 0;
            width: 0;
            -moz-animation: gb__a .2s;
            animation: gb__a .2s
        }

        .gb_5a {
            border-color: transparent;
            border-style: dashed dashed solid;
            border-width: 0 8.5px 8.5px;
            display: none;
            position: absolute;
            left: 11.5px;
            z-index: 1;
            height: 0;
            width: 0;
            -moz-animation: gb__a .2s;
            animation: gb__a .2s;
            border-bottom-color: #ccc;
            border-bottom-color: rgba(0, 0, 0, .2);
            top: 42px
        }

        x:-o-prefocus,
        div.gb_5a {
            border-bottom-color: #ccc
        }

        .gb_F {
            background: #fff;
            border: 1px solid #ccc;
            border-color: rgba(0, 0, 0, .2);
            color: #000;
            -moz-box-shadow: 0 2px 10px rgba(0, 0, 0, .2);
            box-shadow: 0 2px 10px rgba(0, 0, 0, .2);
            display: none;
            outline: none;
            overflow: hidden;
            position: absolute;
            right: 8px;
            top: 62px;
            -moz-animation: gb__a .2s;
            animation: gb__a .2s;
            -moz-border-radius: 2px;
            border-radius: 2px;
            -moz-user-select: text
        }

        .gb_md.gb_na .gb_4a,
        .gb_md.gb_na .gb_5a,
        .gb_md.gb_na .gb_F,
        .gb_na.gb_F {
            display: block
        }

        .gb_md.gb_na.gb_Wf .gb_4a,
        .gb_md.gb_na.gb_Wf .gb_5a {
            display: none
        }

        .gb_Xf {
            position: absolute;
            right: 8px;
            top: 62px;
            z-index: -1
        }

        .gb_Oa .gb_4a,
        .gb_Oa .gb_5a,
        .gb_Oa .gb_F {
            margin-top: -10px
        }

        .gb_md:first-child,
        #gbsfw:first-child+.gb_md {
            padding-left: 4px
        }

        .gb_sa.gb_5e .gb_md:first-child {
            padding-left: 0
        }

        .gb_3c {
            position: relative
        }

        .gb_Rc .gb_3c,
        .gb_ee .gb_3c {
            float: right
        }

        .gb_D {
            padding: 8px;
            cursor: pointer
        }

        .gb_sa .gb_5c:not(.gb_0):focus img {
            background-color: rgba(0, 0, 0, 0.20);
            outline: none;
            -moz-border-radius: 50%;
            border-radius: 50%
        }

        .gb_6e button:focus svg,
        .gb_6e button:hover svg,
        .gb_6e button:active svg,
        .gb_D:focus,
        .gb_D:hover,
        .gb_D:active,
        .gb_D[aria-expanded=true] {
            outline: none;
            -moz-border-radius: 50%;
            border-radius: 50%
        }

        .gb_Ac .gb_6e.gb_7e button:focus svg,
        .gb_Ac .gb_6e.gb_7e button:focus:hover svg,
        .gb_6e button:focus svg,
        .gb_6e button:focus:hover svg,
        .gb_D:focus,
        .gb_D:focus:hover {
            background-color: rgba(60, 64, 67, 0.1)
        }

        .gb_Ac .gb_6e.gb_7e button:active svg,
        .gb_6e button:active svg,
        .gb_D:active {
            background-color: rgba(60, 64, 67, 0.12)
        }

        .gb_Ac .gb_6e.gb_7e button:hover svg,
        .gb_6e button:hover svg,
        .gb_D:hover {
            background-color: rgba(60, 64, 67, 0.08)
        }

        .gb_ia .gb_D.gb_Ra:hover {
            background-color: transparent
        }

        .gb_D[aria-expanded=true],
        .gb_D:hover[aria-expanded=true] {
            background-color: rgba(95, 99, 104, 0.24)
        }

        .gb_D[aria-expanded=true] .gb_8e,
        .gb_D[aria-expanded=true] .gb_9e {
            fill: #5f6368;
            opacity: 1
        }

        .gb_Ac .gb_6e button:hover svg,
        .gb_Ac .gb_D:hover {
            background-color: rgba(232, 234, 237, 0.08)
        }

        .gb_Ac .gb_6e button:focus svg,
        .gb_Ac .gb_6e button:focus:hover svg,
        .gb_Ac .gb_D:focus,
        .gb_Ac .gb_D:focus:hover {
            background-color: rgba(232, 234, 237, 0.10)
        }

        .gb_Ac .gb_6e button:active svg,
        .gb_Ac .gb_D:active {
            background-color: rgba(232, 234, 237, 0.12)
        }

        .gb_Ac .gb_D[aria-expanded=true],
        .gb_Ac .gb_D:hover[aria-expanded=true] {
            background-color: rgba(255, 255, 255, 0.12)
        }

        .gb_Ac .gb_D[aria-expanded=true] .gb_8e,
        .gb_Ac .gb_D[aria-expanded=true] .gb_9e {
            fill: #ffffff;
            opacity: 1
        }

        .gb_md {
            padding: 4px
        }

        .gb_sa.gb_5e .gb_md {
            padding: 4px 2px
        }

        .gb_sa.gb_5e .gb_Sa.gb_md {
            padding-left: 6px
        }

        .gb_F {
            z-index: 991;
            line-height: normal
        }

        .gb_F.gb_af {
            left: 8px;
            right: auto
        }

        @media (max-width:350px) {
            .gb_F.gb_af {
                left: 0
            }
        }

        .gb_bf .gb_F {
            top: 56px
        }

        .gb_C .gb_D,
        .gb_E .gb_C .gb_D {
            background-position: -64px -29px
        }

        .gb_j .gb_C .gb_D {
            background-position: -29px -29px;
            opacity: 1
        }

        .gb_C .gb_D,
        .gb_C .gb_D:hover,
        .gb_C .gb_D:focus {
            opacity: 1
        }

        .gb_Xd {
            display: none
        }

        .gb_6c {
            font-family: Google Sans, Roboto, RobotoDraft, Helvetica, Arial, sans-serif;
            font-size: 20px;
            font-weight: 400;
            letter-spacing: .25px;
            line-height: 48px;
            margin-bottom: 2px;
            opacity: 1;
            overflow: hidden;
            padding-left: 16px;
            position: relative;
            text-overflow: ellipsis;
            vertical-align: middle;
            top: 2px;
            white-space: nowrap;
            flex: 1 1 auto
        }

        .gb_6c.gb_7c {
            color: #3c4043
        }

        .gb_sa.gb_ta .gb_6c {
            margin-bottom: 0
        }

        .gb_8c.gb_9c .gb_6c {
            padding-left: 4px
        }

        .gb_sa.gb_ta .gb_ad {
            position: relative;
            top: -2px
        }

        .gb_sa {
            color: black;
            min-width: 320px;
            position: relative;
            -moz-transition: box-shadow 250ms;
            transition: box-shadow 250ms
        }

        .gb_sa.gb_Jc {
            min-width: 240px
        }

        .gb_sa.gb_Zd .gb_1c {
            display: none
        }

        .gb_sa.gb_Zd .gb_0d {
            height: 56px
        }

        header.gb_sa {
            display: block
        }

        .gb_sa svg {
            fill: currentColor
        }

        .gb_1d {
            position: fixed;
            top: 0;
            width: 100%
        }

        .gb_2d {
            -moz-box-shadow: 0 4px 5px 0 rgba(0, 0, 0, 0.14), 0 1px 10px 0 rgba(0, 0, 0, 0.12), 0 2px 4px -1px rgba(0, 0, 0, 0.2);
            box-shadow: 0 4px 5px 0 rgba(0, 0, 0, 0.14), 0 1px 10px 0 rgba(0, 0, 0, 0.12), 0 2px 4px -1px rgba(0, 0, 0, 0.2)
        }

        .gb_3d {
            height: 64px
        }

        .gb_sa:not(.gb_Mc) .gb_cd.gb_dd:not(.gb_4d):not(.gb_5d),
        .gb_sa:not(.gb_Mc) .gb_Td:not(.gb_4d):not(.gb_5d),
        .gb_sa.gb_6d .gb_cd.gb_dd.gb_4d,
        .gb_sa.gb_6d .gb_Td.gb_4d,
        .gb_sa.gb_6d .gb_cd.gb_dd.gb_5d,
        .gb_sa.gb_6d .gb_Td.gb_5d {
            display: none !important
        }

        .gb_0d {
            box-sizing: border-box;
            position: relative;
            width: 100%;
            display: -webkit-box;
            display: -moz-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            justify-content: space-between;
            min-width: -webkit-min-content;
            min-width: -moz-min-content;
            min-width: -ms-min-content;
            min-width: min-content
        }

        .gb_sa:not(.gb_ta) .gb_0d {
            padding: 8px
        }

        .gb_sa.gb_7d .gb_0d {
            flex: 1 0 auto
        }

        .gb_sa .gb_0d.gb_8d.gb_9d {
            min-width: 0
        }

        .gb_sa.gb_ta .gb_0d {
            padding: 4px;
            padding-left: 8px;
            min-width: 0
        }

        .gb_1c {
            height: 48px;
            vertical-align: middle;
            white-space: nowrap;
            -moz-box-align: center;
            align-items: center;
            display: -webkit-box;
            display: -moz-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            -moz-user-select: -moz-none
        }

        .gb_be>.gb_1c {
            display: table-cell;
            width: 100%
        }

        .gb_8c {
            padding-right: 30px;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            flex: 1 0 auto
        }

        .gb_sa.gb_ta .gb_8c {
            padding-right: 14px
        }

        .gb_ce {
            flex: 1 1 100%
        }

        .gb_ce>:only-child {
            display: inline-block
        }

        .gb_2c.gb_Sc {
            padding-left: 4px
        }

        .gb_2c.gb_de,
        .gb_sa.gb_7d .gb_2c,
        .gb_sa.gb_ta:not(.gb_ee) .gb_2c {
            padding-left: 0
        }

        .gb_sa.gb_ta .gb_2c.gb_de {
            padding-right: 0
        }

        .gb_sa.gb_ta .gb_2c.gb_de .gb_ia {
            margin-left: 10px
        }

        .gb_Sc {
            display: inline
        }

        .gb_sa.gb_Mc .gb_2c.gb_fe {
            padding-left: 2px
        }

        .gb_6c {
            display: inline-block
        }

        .gb_2c {
            box-sizing: border-box;
            height: 48px;
            line-height: normal;
            padding: 0 4px;
            padding-left: 30px;
            flex: 0 0 auto;
            justify-content: flex-end
        }

        .gb_ee {
            height: 48px
        }

        .gb_sa.gb_ee {
            min-width: initial;
            min-width: auto
        }

        .gb_ee .gb_2c {
            float: right;
            padding-left: 32px
        }

        .gb_ee .gb_2c.gb_ge {
            padding-left: 0
        }

        .gb_he {
            font-size: 14px;
            max-width: 200px;
            overflow: hidden;
            padding: 0 12px;
            text-overflow: ellipsis;
            white-space: nowrap;
            -moz-user-select: text
        }

        .gb_ie {
            transition: background-color .4s
        }

        .gb_je {
            color: black
        }

        .gb_Ac {
            color: white
        }

        .gb_sa a,
        .gb_Fc a {
            color: inherit
        }

        .gb_t {
            color: rgba(0, 0, 0, 0.87)
        }

        .gb_sa svg,
        .gb_Fc svg,
        .gb_8c .gb_ke,
        .gb_Rc .gb_ke {
            color: #5f6368;
            opacity: 1
        }

        .gb_Ac svg,
        .gb_Fc.gb_Kc svg,
        .gb_Ac .gb_8c .gb_ke,
        .gb_Ac .gb_8c .gb_zc,
        .gb_Ac .gb_8c .gb_ad,
        .gb_Fc.gb_Kc .gb_ke {
            color: rgba(255, 255, 255, .87)
        }

        .gb_Ac .gb_8c .gb_ua:not(.gb_le) {
            opacity: .87
        }

        .gb_7c {
            color: inherit;
            opacity: 1;
            text-rendering: optimizeLegibility;
            -moz-osx-font-smoothing: grayscale
        }

        .gb_Ac .gb_7c,
        .gb_je .gb_7c {
            opacity: 1
        }

        .gb_me {
            position: relative
        }

        .gb_ne {
            font-family: arial, sans-serif;
            line-height: normal;
            padding-right: 15px
        }

        a.gb_g,
        span.gb_g {
            color: rgba(0, 0, 0, 0.87);
            text-decoration: none
        }

        .gb_Ac a.gb_g,
        .gb_Ac span.gb_g {
            color: white
        }

        a.gb_g:hover,
        a.gb_g:focus {
            opacity: .85;
            text-decoration: underline
        }

        .gb_h {
            display: inline-block;
            padding-left: 15px
        }

        .gb_h .gb_g {
            display: inline-block;
            line-height: 24px;
            outline: none;
            vertical-align: middle
        }

        .gb_oe {
            font-family: Google Sans, Roboto, RobotoDraft, Helvetica, Arial, sans-serif;
            font-weight: 500;
            font-size: 14px;
            letter-spacing: .25px;
            line-height: 16px;
            margin-left: 10px;
            margin-right: 8px;
            min-width: 96px;
            padding: 9px 23px;
            text-align: center;
            vertical-align: middle;
            -moz-border-radius: 4px;
            border-radius: 4px;
            -moz-box-sizing: border-box;
            box-sizing: border-box
        }

        .gb_sa.gb_ee .gb_oe {
            margin-left: 8px
        }

        #gb a.gb_4.gb_4.gb_oe,
        #gb a.gb_3.gb_3.gb_oe {
            cursor: pointer
        }

        .gb_4.gb_oe:hover {
            background: #2b7de9;
            -moz-box-shadow: 0 1px 2px 0 rgba(66, 133, 244, 0.3), 0 1px 3px 1px rgba(66, 133, 244, 0.15);
            box-shadow: 0 1px 2px 0 rgba(66, 133, 244, 0.3), 0 1px 3px 1px rgba(66, 133, 244, 0.15)
        }

        .gb_4.gb_oe:focus,
        .gb_4.gb_oe:hover:focus {
            background: #5094ed;
            -moz-box-shadow: 0 1px 2px 0 rgba(66, 133, 244, 0.3), 0 1px 3px 1px rgba(66, 133, 244, 0.15);
            box-shadow: 0 1px 2px 0 rgba(66, 133, 244, 0.3), 0 1px 3px 1px rgba(66, 133, 244, 0.15)
        }

        .gb_4.gb_oe:active {
            background: #63a0ef;
            -moz-box-shadow: 0 1px 2px 0 rgba(66, 133, 244, 0.3), 0 1px 3px 1px rgba(66, 133, 244, 0.15);
            box-shadow: 0 1px 2px 0 rgba(66, 133, 244, 0.3), 0 1px 3px 1px rgba(66, 133, 244, 0.15)
        }

        .gb_oe:not(.gb_3) {
            background: #1a73e8;
            border: 1px solid transparent
        }

        .gb_sa.gb_ta .gb_oe {
            padding: 9px 15px;
            min-width: 80px
        }

        #gb a.gb_4.gb_ja.gb_oe,
        #gb a.gb_oe.gb_3 {
            background: #ffffff;
            border-color: #dadce0;
            -moz-box-shadow: none;
            box-shadow: none;
            color: #1a73e8
        }

        #gb a.gb_4.gb_ja.gb_oe:hover,
        #gb a.gb_oe.gb_3:hover {
            background: #f8fbff;
            border-color: #cce0fc
        }

        #gb a.gb_4.gb_ja.gb_oe:focus,
        #gb a.gb_4.gb_ja.gb_oe:focus:hover,
        #gb a.gb_oe.gb_3:focus,
        #gb a.gb_oe.gb_3:focus:hover {
            background: #f4f8ff;
            border-color: #c9ddfc
        }

        #gb a.gb_4.gb_ja.gb_oe:active,
        #gb a.gb_oe.gb_3:active {
            background: #ecf3fe
        }

        #gb a.gb_4.gb_ja.gb_oe:active {
            -moz-box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.3), 0 2px 6px 2px rgba(0, 0, 0, 0.15);
            box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.3), 0 2px 6px 2px rgba(0, 0, 0, 0.15)
        }

        #gb a.gb_oe.gb_3:not(.gb_ja):active {
            -moz-box-shadow: 0 1px 2px 0 rgba(60, 64, 67, 0.3), 0 2px 6px 2px rgba(60, 64, 67, 0.15);
            box-shadow: 0 1px 2px 0 rgba(60, 64, 67, 0.3), 0 2px 6px 2px rgba(60, 64, 67, 0.15)
        }

        .gb_ia {
            background-color: rgba(255, 255, 255, 0.88);
            border: 1px solid #dadce0;
            box-sizing: border-box;
            cursor: pointer;
            display: inline-block;
            max-height: 48px;
            overflow: hidden;
            outline: none;
            padding: 0;
            vertical-align: middle;
            width: 134px;
            -moz-border-radius: 8px;
            border-radius: 8px
        }

        .gb_ia.gb_ja {
            background-color: transparent;
            border: 1px solid #5f6368
        }

        .gb_ka {
            width: 115px
        }

        .gb_la {
            display: inherit
        }

        .gb_la.gb_ja {
            background: #ffffff;
            -moz-border-radius: 4px;
            border-radius: 4px;
            display: inline-block;
            left: 8px;
            margin-right: 5px;
            position: relative;
            padding: 3px;
            top: -1px
        }

        .gb_la.gb_ma.gb_ja {
            left: 6px;
            margin-right: 2px
        }

        .gb_ia:hover {
            border: 1px solid #d2e3fc;
            background-color: rgba(248, 250, 255, 0.88)
        }

        .gb_ia.gb_ja:hover {
            border: 1px solid #5f6368;
            background-color: rgba(232, 234, 237, 0.08)
        }

        .gb_ia:focus {
            border: 1px solid #fff;
            background-color: rgba(255, 255, 255);
            -moz-box-shadow: 0 1px 2px 0 rgba(60, 64, 67, 0.3), 0 1px 3px 1px rgba(60, 64, 67, 0.15);
            box-shadow: 0 1px 2px 0 rgba(60, 64, 67, 0.3), 0 1px 3px 1px rgba(60, 64, 67, 0.15)
        }

        .gb_ia.gb_ja:focus {
            border: 1px solid #e8eaed;
            background-color: #38383b
        }

        .gb_ia.gb_ja:active,
        .gb_ia.gb_na.gb_ja:focus {
            border: 1px solid #5f6368;
            background-color: #333438
        }

        .gb_oa {
            display: inline-block;
            padding-left: 7px;
            padding-bottom: 2px;
            text-align: center;
            vertical-align: middle;
            line-height: 32px;
            width: 78px
        }

        .gb_oa.gb_ja {
            line-height: 26px;
            width: 72px
        }

        .gb_oa.gb_pa.gb_ja {
            line-height: 30px;
            width: 57px
        }

        .gb_oa.gb_pa {
            line-height: 40px;
            width: 59px
        }

        .gb_oa.gb_ja {
            padding-left: 0;
            padding-bottom: 0
        }

        .gb_oa.gb_qa {
            background-color: #f1f3f4;
            -moz-border-radius: 4px;
            border-radius: 4px;
            margin-left: 8px;
            padding-left: 0
        }

        .gb_oa.gb_qa .gb_ra {
            vertical-align: middle
        }

        .gb_sa:not(.gb_ta) .gb_ia {
            margin-left: 10px;
            margin-right: 4px
        }

        .gb_ia .gb_ra.gb_ua {
            min-width: 0
        }

        .gb_va {
            max-height: 32px;
            width: 78px
        }

        .gb_pa>.gb_va {
            max-height: 40px;
            width: 96px
        }

        .gb_va.gb_ja {
            max-height: 26px;
            width: 72px
        }

        .gb_pa>.gb_va.gb_ja {
            max-height: 30px;
            width: 88px
        }

        .gb_Ia {
            background-size: 32px 32px;
            -moz-border-radius: 50%;
            border-radius: 50%;
            display: block;
            margin: 0;
            overflow: hidden;
            position: relative;
            height: 32px;
            width: 32px;
            z-index: 0
        }

        .gb_Ja {
            background-color: #e8f0fe;
            border: 1px solid rgba(32, 33, 36, .08);
            position: relative
        }

        .gb_Ja.gb_Ia {
            height: 30px;
            width: 30px
        }

        .gb_Ja.gb_Ia:hover,
        .gb_Ja.gb_Ia:active {
            -moz-box-shadow: none;
            box-shadow: none
        }

        .gb_Ka {
            background: #fff;
            border: none;
            -moz-border-radius: 50%;
            border-radius: 50%;
            bottom: 2px;
            -moz-box-shadow: 0 1px 2px 0 rgba(60, 64, 67, .30), 0 1px 3px 1px rgba(60, 64, 67, .15);
            box-shadow: 0 1px 2px 0 rgba(60, 64, 67, .30), 0 1px 3px 1px rgba(60, 64, 67, .15);
            height: 14px;
            margin: 2px;
            position: absolute;
            right: 0;
            width: 14px
        }

        .gb_La {
            color: #1f71e7;
            font: 400 22px/32px Google Sans, Roboto, RobotoDraft, Helvetica, Arial, sans-serif;
            text-align: center;
            text-transform: uppercase
        }

        @media (min-resolution:1.25dppx),
        (-o-min-device-pixel-ratio:5/4),
        (-webkit-min-device-pixel-ratio:1.25),
        (min-device-pixel-ratio:1.25) {
            .gb_Ia::before {
                display: inline-block;
                -moz-transform: scale(.5);
                transform: scale(.5);
                -moz-transform-origin: left 0;
                transform-origin: left 0
            }

            .gb_Ma::before {
                display: inline-block;
                -moz-transform: scale(.5);
                transform: scale(.5);
                -moz-transform-origin: left 0;
                transform-origin: left 0
            }

            .gb_l .gb_Ma::before {
                -moz-transform: scale(0.416666667);
                transform: scale(0.416666667)
            }
        }

        .gb_Ia:hover,
        .gb_Ia:focus {
            -moz-box-shadow: 0 1px 0 rgba(0, 0, 0, .15);
            box-shadow: 0 1px 0 rgba(0, 0, 0, .15)
        }

        .gb_Ia:active {
            -moz-box-shadow: inset 0 2px 0 rgba(0, 0, 0, .15);
            box-shadow: inset 0 2px 0 rgba(0, 0, 0, .15)
        }

        .gb_Ia:active::after {
            background: rgba(0, 0, 0, .1);
            -moz-border-radius: 50%;
            border-radius: 50%;
            content: '';
            display: block;
            height: 100%
        }

        .gb_Na {
            cursor: pointer;
            line-height: 40px;
            min-width: 30px;
            opacity: .75;
            overflow: hidden;
            vertical-align: middle;
            text-overflow: ellipsis
        }

        .gb_D.gb_Na {
            width: auto
        }

        .gb_Na:hover,
        .gb_Na:focus {
            opacity: .85
        }

        .gb_Oa .gb_Na,
        .gb_Oa .gb_Pa {
            line-height: 26px
        }

        #gb#gb.gb_Oa a.gb_Na,
        .gb_Oa .gb_Pa {
            font-size: 11px;
            height: auto
        }

        .gb_Qa {
            border-top: 4px solid #000;
            border-left: 4px dashed transparent;
            border-right: 4px dashed transparent;
            display: inline-block;
            margin-left: 6px;
            opacity: .75;
            vertical-align: middle
        }

        .gb_Ra:hover .gb_Qa {
            opacity: .85
        }

        .gb_ia>.gb_Sa {
            padding: 3px 3px 3px 4px
        }

        .gb_Ta.gb_Ha {
            color: #fff
        }

        .gb_j .gb_Na,
        .gb_j .gb_Qa {
            opacity: 1
        }

        #gb#gb.gb_j.gb_j a.gb_Na,
        #gb#gb .gb_j.gb_j a.gb_Na {
            color: #fff
        }

        .gb_j.gb_j .gb_Qa {
            border-top-color: #fff;
            opacity: 1
        }

        .gb_E .gb_Ia:hover,
        .gb_j .gb_Ia:hover,
        .gb_E .gb_Ia:focus,
        .gb_j .gb_Ia:focus {
            -moz-box-shadow: 0 1px 0 rgba(0, 0, 0, .15), 0 1px 2px rgba(0, 0, 0, .2);
            box-shadow: 0 1px 0 rgba(0, 0, 0, .15), 0 1px 2px rgba(0, 0, 0, .2)
        }

        .gb_Ua .gb_Sa,
        .gb_Va .gb_Sa {
            position: absolute;
            right: 1px
        }

        .gb_Sa.gb_i,
        .gb_Wa.gb_i,
        .gb_Ra.gb_i {
            flex: 0 1 auto;
            flex: 0 1 main-size
        }

        .gb_Xa.gb_Za .gb_Na {
            width: 30px !important
        }

        .gb_0a.gb_Ha {
            display: none
        }

        .gb_1a {
            height: 40px;
            position: absolute;
            right: -5px;
            top: -5px;
            width: 40px
        }

        .gb_2a .gb_1a,
        .gb_3a .gb_1a {
            right: 0;
            top: 0
        }

        .gb_Sa .gb_D {
            padding: 4px
        }

        .gb_qe {
            display: none
        }

        .gb_bd {
            display: none
        }

        .gb_bd.gb_na {
            display: block
        }

        .gb_cd {
            background-color: #fff;
            -moz-box-shadow: 0 1px 0 rgba(0, 0, 0, 0.08);
            box-shadow: 0 1px 0 rgba(0, 0, 0, 0.08);
            color: #000;
            position: relative;
            z-index: 986
        }

        .gb_dd {
            height: 40px;
            padding: 16px 24px;
            white-space: nowrap
        }

        .gb_ed {
            position: fixed;
            bottom: 16px;
            padding: 16px;
            right: 16px;
            white-space: normal;
            width: 328px;
            transition: width .2s, bottom .2s, right .2s;
            -moz-border-radius: 2px;
            border-radius: 2px;
            -moz-box-shadow: 0 5px 5px -3px rgba(0, 0, 0, 0.2), 0 8px 10px 1px rgba(0, 0, 0, 0.14), 0 3px 14px 2px rgba(0, 0, 0, 0.12);
            box-shadow: 0 5px 5px -3px rgba(0, 0, 0, 0.2), 0 8px 10px 1px rgba(0, 0, 0, 0.14), 0 3px 14px 2px rgba(0, 0, 0, 0.12)
        }

        @media (max-width:400px) {
            .gb_cd.gb_ed {
                max-width: 368px;
                width: auto;
                bottom: 0;
                right: 0
            }
        }

        .gb_cd .gb_5c {
            border: 0;
            font-weight: 500;
            font-size: 14px;
            line-height: 36px;
            min-width: 32px;
            padding: 0 16px;
            vertical-align: middle
        }

        .gb_cd .gb_5c:before {
            content: '';
            height: 6px;
            left: 0;
            position: absolute;
            top: -6px;
            width: 100%
        }

        .gb_cd .gb_5c:after {
            bottom: -6px;
            content: '';
            height: 6px;
            left: 0;
            position: absolute;
            width: 100%
        }

        .gb_cd .gb_5c+.gb_5c {
            margin-left: 8px
        }

        .gb_fd {
            height: 48px;
            padding: 4px;
            margin: -8px 0 0 -8px
        }

        .gb_ed .gb_fd {
            float: left;
            margin: -4px
        }

        .gb_gd {
            font-family: Roboto, RobotoDraft, Helvetica, Arial, sans-serif;
            overflow: hidden;
            vertical-align: top
        }

        .gb_dd .gb_gd {
            display: inline-block;
            padding-left: 8px;
            width: 640px
        }

        .gb_ed .gb_gd {
            display: block;
            margin-left: 56px;
            padding-bottom: 16px
        }

        .gb_hd {
            background-color: inherit
        }

        .gb_dd .gb_hd {
            display: inline-block;
            position: absolute;
            top: 18px;
            right: 24px
        }

        .gb_ed .gb_hd {
            text-align: right;
            padding-right: 24px;
            padding-top: 6px
        }

        .gb_hd .gb_id {
            height: 1.5em;
            margin: -.25em 10px -.25em 0;
            vertical-align: text-top;
            width: 1.5em
        }

        .gb_jd {
            line-height: 20px;
            font-size: 16px;
            font-weight: 700;
            color: rgba(0, 0, 0, .87)
        }

        .gb_ed .gb_jd {
            color: rgba(0, 0, 0, .87);
            font-size: 16px;
            line-height: 20px;
            padding-top: 8px
        }

        .gb_dd .gb_jd,
        .gb_dd .gb_kd {
            width: 640px
        }

        .gb_kd .gb_ld,
        .gb_kd {
            line-height: 20px;
            font-size: 13px;
            font-weight: 400;
            color: rgba(0, 0, 0, .54)
        }

        .gb_ed .gb_kd .gb_ld {
            font-size: 14px
        }

        .gb_ed .gb_kd {
            padding-top: 12px
        }

        .gb_ed .gb_kd a {
            color: rgba(66, 133, 244, 1)
        }

        .gb_md.gb_nd {
            padding: 0
        }

        .gb_nd .gb_F {
            background: #ffffff;
            border: solid 1px transparent;
            -moz-border-radius: 8px;
            border-radius: 8px;
            box-sizing: border-box;
            padding: 16px;
            right: 16px;
            top: 72px;
            -moz-box-shadow: 0 1px 2px 0 rgba(65, 69, 73, 0.3), 0 3px 6px 2px rgba(65, 69, 73, 0.15);
            box-shadow: 0 1px 2px 0 rgba(65, 69, 73, 0.3), 0 3px 6px 2px rgba(65, 69, 73, 0.15)
        }

        a.gb_od {
            color: #5f6368 !important;
            font-size: 22px;
            height: 24px;
            opacity: 1;
            padding: 8px;
            position: absolute;
            right: 8px;
            top: 8px;
            text-decoration: none !important;
            width: 24px
        }

        a.gb_od:focus,
        a.gb_od:active,
        a.gb_od:focus:hover {
            background-color: #e8eaed;
            -moz-border-radius: 50%;
            border-radius: 50%;
            outline: none
        }

        a.gb_od:hover {
            background-color: #f1f3f4;
            -moz-border-radius: 50%;
            border-radius: 50%;
            outline: none
        }

        svg.gb_pd {
            fill: #5f6368;
            opacity: 1
        }

        .gb_qd {
            padding: 0;
            white-space: normal;
            display: table
        }

        .gb_rd {
            line-height: normal;
            font-family: Roboto, RobotoDraft, Helvetica, Arial, sans-serif
        }

        .gb_nd .gb_4:active {
            outline: none;
            -moz-box-shadow: 0 4px 5px rgba(0, 0, 0, .16);
            box-shadow: 0 4px 5px rgba(0, 0, 0, .16)
        }

        .gb_0.gb_sd.gb_td {
            -moz-border-radius: 4px;
            border-radius: 4px;
            box-sizing: border-box;
            cursor: pointer;
            height: 34px;
            font-family: Google Sans, Roboto, RobotoDraft, Helvetica, Arial, sans-serif;
            font-size: 14px;
            font-weight: 500;
            letter-spacing: .25px;
            line-height: 16px;
            min-width: 70px;
            outline: none;
            padding: 8px 6px;
            text-transform: none;
            -moz-osx-font-smoothing: grayscale
        }

        .gb_0.gb_ud.gb_td {
            -moz-border-radius: 4px;
            border-radius: 4px;
            box-sizing: border-box;
            cursor: pointer;
            height: 34px;
            color: #5f6368;
            font-family: Google Sans, Roboto, RobotoDraft, Helvetica, Arial, sans-serif;
            font-size: 14px;
            font-weight: 500;
            letter-spacing: .25px;
            line-height: 16px;
            min-width: 70px;
            outline: none;
            padding: 8px 6px;
            text-transform: none;
            -moz-osx-font-smoothing: grayscale
        }

        .gb_0.gb_sd.gb_td {
            background: white;
            border: 1px solid #dadce0;
            color: #1a73e8;
            margin-top: 21px
        }

        .gb_0.gb_sd.gb_td:hover {
            background-color: rgba(26, 115, 232, 0.04)
        }

        .gb_0.gb_sd.gb_td:focus,
        .gb_0.gb_sd.gb_td:focus:hover {
            background-color: rgba(26, 115, 232, 0.12);
            border: solid 1px #1a73e8
        }

        .gb_0.gb_sd.gb_td:active {
            background-color: rgba(26, 115, 232, 0.1);
            border-color: transparent
        }

        .gb_0.gb_ud:hover {
            background-color: #f8f9fa
        }

        .gb_0.gb_ud:focus,
        .gb_0.gb_ud:hover:focus {
            background-color: #f1f3f4;
            border-color: transparent
        }

        .gb_0.gb_ud:active {
            background-color: #f1f3f4;
            -moz-box-shadow: 0 1px 2px 0 rgba(60, 64, 67, 0.3), 0 1px 3px 1px rgba(60, 64, 67, 0.15);
            box-shadow: 0 1px 2px 0 rgba(60, 64, 67, 0.3), 0 1px 3px 1px rgba(60, 64, 67, 0.15)
        }

        .gb_ld {
            color: #5f6368;
            font-family: Roboto, RobotoDraft, Helvetica, Arial, sans-serif;
            font-size: 14px;
            letter-spacing: .25px;
            line-height: 20px;
            margin: 0;
            margin-bottom: 5px
        }

        .gb_vd {
            text-align: right;
            font-size: 14px;
            padding-bottom: 0;
            white-space: nowrap
        }

        .gb_vd .gb_wd,
        .gb_vd .gb_xd {
            margin-left: 12px;
            text-transform: none
        }

        a.gb_4.gb_wd:hover {
            background-color: #2b7de9;
            border-color: transparent;
            -moz-box-shadow: 0 1px 2px 0 rgba(66, 133, 244, 0.3), 0 1px 3px 1px rgba(66, 133, 244, 0.15);
            box-shadow: 0 1px 2px 0 rgba(66, 133, 244, 0.3), 0 1px 3px 1px rgba(66, 133, 244, 0.15)
        }

        a.gb_4.gb_wd:focus,
        a.gb_4.gb_wd:hover:focus {
            background-color: #5094ed;
            border-color: transparent;
            -moz-box-shadow: 0 1px 2px 0 rgba(66, 133, 244, 0.3), 0 1px 3px 1px rgba(66, 133, 244, 0.15);
            box-shadow: 0 1px 2px 0 rgba(66, 133, 244, 0.3), 0 1px 3px 1px rgba(66, 133, 244, 0.15)
        }

        a.gb_4.gb_wd:active {
            background-color: #63a0ef;
            -moz-box-shadow: 0 1px 2px 0 rgba(66, 133, 244, 0.3), 0 1px 3px 1px rgba(66, 133, 244, 0.15);
            box-shadow: 0 1px 2px 0 rgba(66, 133, 244, 0.3), 0 1px 3px 1px rgba(66, 133, 244, 0.15)
        }

        .gb_vd .gb_wd.gb_yd {
            padding-left: 6px;
            padding-right: 14px
        }

        .gb_vd .gb_td.gb_wd img {
            background-color: inherit;
            -moz-border-radius: initial;
            border-radius: initial;
            height: 18px;
            margin: 0 8px 0 4px;
            vertical-align: text-top;
            width: 18px
        }

        .gb_zd .gb_qd .gb_Ad .gb_td {
            border: 2px solid transparent
        }

        .gb_qd .gb_Ad .gb_td:focus:after,
        .gb_qd .gb_Ad .gb_td:hover:after {
            background-color: transparent
        }

        .gb_rd {
            background-color: #404040;
            color: #fff;
            padding: 16px;
            position: absolute;
            top: 62px;
            min-width: 328px;
            max-width: 650px;
            right: 8px;
            -moz-border-radius: 2px;
            border-radius: 2px;
            -moz-box-shadow: 4px 4px 12px rgba(0, 0, 0, 0.4);
            box-shadow: 4px 4px 12px rgba(0, 0, 0, 0.4)
        }

        .gb_rd a,
        .gb_rd a:visited {
            color: #5e97f6;
            text-decoration: none
        }

        .gb_Bd {
            text-transform: uppercase
        }

        .gb_Cd {
            padding-left: 50px
        }

        .gb_Dd {
            color: #3c4043;
            font-family: Google Sans, Roboto, RobotoDraft, Helvetica, Arial, sans-serif;
            font-size: 16px;
            font-weight: 500;
            letter-spacing: .1px;
            line-height: 20px;
            margin: 0;
            margin-bottom: 12px
        }

        .gb_ld a.gb_Fd {
            text-decoration: none;
            color: #5e97f6
        }

        .gb_ld a.gb_Fd:visited {
            color: #5e97f6
        }

        .gb_ld a.gb_Fd:hover,
        .gb_ld a.gb_Fd:active {
            text-decoration: underline
        }

        .gb_Hd {
            position: absolute;
            background: transparent;
            top: -999px;
            z-index: -1;
            visibility: hidden;
            margin-top: 1px;
            margin-left: 1px
        }

        #gb .gb_nd {
            margin: 0
        }

        .gb_nd .gb_5c {
            background: #4d90fe;
            border: 2px solid transparent;
            box-sizing: border-box;
            font-weight: 500;
            margin-top: 21px;
            min-width: 70px;
            text-align: center;
            -moz-osx-font-smoothing: grayscale
        }

        .gb_nd a.gb_4 {
            background: #1a73e8;
            -moz-border-radius: 4px;
            border-radius: 4px;
            color: #ffffff;
            font-family: Google Sans, Roboto, RobotoDraft, Helvetica, Arial, sans-serif;
            font-size: 14px;
            font-weight: 500;
            letter-spacing: .25px;
            line-height: 16px;
            padding: 8px 22px;
            -moz-osx-font-smoothing: grayscale
        }

        .gb_nd a.gb_4.gb_Id {
            background: #d93025
        }

        .gb_nd a.gb_4.gb_Id:hover {
            background-color: #cc3127
        }

        .gb_nd a.gb_4.gb_Id:focus,
        .gb_nd a.gb_4.gb_Id:focus:hover {
            background-color: #b3332c
        }

        .gb_nd a.gb_4.gb_Id:active,
        .gb_nd a.gb_4.gb_Id:focus:active {
            background-color: #a6342e
        }

        .gb_nd.gb_Jd a.gb_4 {
            float: right
        }

        #gb .gb_nd a.gb_5c.gb_5c {
            color: #ffffff;
            cursor: pointer
        }

        .gb_nd .gb_5c:hover {
            background: #357ae8;
            border-color: #2f5bb7
        }

        .gb_Kd,
        .gb_Ad {
            display: table-cell
        }

        .gb_Kd {
            vertical-align: middle
        }

        .gb_Kd img {
            height: 48px;
            padding-left: 4px;
            padding-right: 20px;
            width: 48px
        }

        .gb_Ad {
            padding-left: 13px;
            width: 100%
        }

        .gb_nd .gb_Ad {
            padding-top: 4px;
            min-width: 326px;
            padding-left: 0;
            width: 326px
        }

        .gb_nd.gb_Ld .gb_Ad {
            min-width: 254px;
            width: 254px
        }

        .gb_nd.gb_Jd .gb_Ad {
            padding-top: 32px
        }

        .gb_Md {
            display: block;
            display: inline-block;
            padding: 1em 0 0 0;
            position: relative;
            width: 100%
        }

        .gb_Nd {
            color: #ff0000;
            font-style: italic;
            margin: 0;
            padding-left: 46px
        }

        .gb_Md .gb_Od {
            float: right;
            margin: -20px 0;
            width: -moz-calc(100% - 46px);
            width: calc(100% - 46px)
        }

        .gb_Pd svg {
            fill: grey
        }

        .gb_Pd.gb_Qd svg {
            fill: #4285f4
        }

        .gb_Md .gb_Od label:after {
            background-color: #4285f4
        }

        .gb_Pd {
            display: inline;
            float: right;
            margin-right: 22px;
            position: relative;
            top: 2px
        }

        .gb_Td {
            color: #ffffff;
            font-size: 13px;
            font-weight: bold;
            height: 25px;
            line-height: 19px;
            padding-top: 5px;
            padding-left: 12px;
            position: relative;
            background-color: #4d90fe
        }

        .gb_Td .gb_Ud {
            color: #ffffff;
            cursor: default;
            font-size: 22px;
            font-weight: normal;
            position: absolute;
            right: 12px;
            top: 5px
        }

        .gb_Td .gb_wd,
        .gb_Td .gb_ud {
            color: #ffffff;
            display: inline-block;
            font-size: 11px;
            margin-left: 16px;
            padding: 0 8px;
            white-space: nowrap
        }

        .gb_Vd {
            background: none;
            background-image: -moz-linear-gradient(top, rgba(0, 0, 0, 0.16), rgba(0, 0, 0, 0.2));
            background-image: linear-gradient(top, rgba(0, 0, 0, 0.16), rgba(0, 0, 0, 0.2));
            background-image: -moz-linear-gradient(top, rgba(0, 0, 0, 0.16), rgba(0, 0, 0, 0.2));
            -moz-border-radius: 2px;
            border-radius: 2px;
            border: 1px solid #dcdcdc;
            border: 1px solid rgba(0, 0, 0, 0.1);
            cursor: default !important;
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#160000ff, endColorstr=#220000ff);
            text-decoration: none !important
        }

        .gb_Vd:hover {
            background: none;
            background-image: -moz-linear-gradient(top, rgba(0, 0, 0, 0.14), rgba(0, 0, 0, 0.2));
            background-image: linear-gradient(top, rgba(0, 0, 0, 0.14), rgba(0, 0, 0, 0.2));
            background-image: -moz-linear-gradient(top, rgba(0, 0, 0, 0.14), rgba(0, 0, 0, 0.2));
            border: 1px solid rgba(0, 0, 0, 0.2);
            box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
            -moz-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#14000000, endColorstr=#22000000)
        }

        .gb_Vd:active {
            box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.3);
            -moz-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.3)
        }

        .gb_sa .gb_0 {
            color: #4285f4
        }

        .gb_sa .gb_1 {
            color: #fff
        }

        .gb_sa .gb_5c:not(.gb_3e):focus {
            outline: none
        }

        sentinel {}

        .gbii::before {
            content: url(https://lh3.googleusercontent.com/ogw/default-user=s32)
        }

        .gbip::before {
            content: url(https://lh3.googleusercontent.com/ogw/default-user=s83)
        }

        @media (min-resolution:1.25dppx),
        (-o-min-device-pixel-ratio:5/4),
        (-webkit-min-device-pixel-ratio:1.25),
        (min-device-pixel-ratio:1.25) {
            .gbii::before {
                content: url(https://lh3.googleusercontent.com/ogw/default-user=s64)
            }

            .gbip::before {
                content: url(https://lh3.googleusercontent.com/ogw/default-user=s192)
            }
        }
    </style>
    <script async="" type="text/javascript" charset="UTF-8" src="norton_files/rsAA2YrTtIx4AGwpQDxM6vn71h3JMTrEy9Vw"
        nonce="T/1dJyC0GxsSMWP7nSTknQ=="></script>
    <link type="text/css" rel="stylesheet" href="norton_files/rsAA2YrTvo3vJwXv_zaZfCc1aKUBBrgkA8_w.css">
    <link crossorigin="use-credentials" rel="prefetch"
        href="https://ogs.google.com/widget/app/so?origin=https%3A%2F%2Fwww.google.com&amp;pid=1&amp;spid=1&amp;hl=en&amp;gm=">
    <link rel="preconnect" href="https://www.googleadservices.com/">
</head>

<body jsmodel="jivSc TvHxbe" class="srp tbo vasq" jscontroller="aCZVp" jsaction="rcuQ6b:npT2md;tbSCpf:.CLIENT" id="gsr"
    topmargin="3" marginheight="3">
    <div id="cst">
        <style>
            .z1asCe {
                display: inline-block;
                fill: currentColor;
                height: 24px;
                line-height: 24px;
                position: relative;
                width: 24px
            }

            .z1asCe svg {
                display: block;
                height: 100%;
                width: 100%
            }

            .iUh30 {
                font-size: 14px;
                padding-top: 1px;
                line-height: 1.3
            }

            #rhs .bc {
                font-size: 14px;
                line-height: 1.58
            }

            .hJND5c,
            .dhIWPd {
                display: block;
            }

            .f,
            .f a:link {
                color: #70757a
            }

            .a,
            cite,
            cite a:link,
            cite a:visited,
            .cite,
            .cite:link,
            #nygTcd>i,
            .bc a:link {
                color: #202124;
                font-style: normal
            }

            a.fl:link,
            .fl a,
            .flt,
            a.flt,
            .gl a:link {
                color: #1a0dab
            }

            .r a.fl {
                font-size: 14px
            }

            #rso .hJND5c {
                height: 18px;
                line-height: 16px
            }

            #rcnt a:hover,
            #brs a:hover {
                text-decoration: underline
            }

            #rcnt [role=button]:hover,
            #rcnt .kno-fb-ctx>a:hover,
            #rcnt a.kpbb:hover,
            #rcnt a.a-no-hover-decoration:hover,
            #brs a.a-no-hover-decoration:hover {
                text-decoration: none
            }

            .dPAwzb,
            .dPAwzb a {
                font-size: 18px;
                line-height: 1.3;
            }

            .rc {
                position: relative
            }

            .Jb0Zif .oQWFCf {
                margin: 16px 16px -11px
            }

            a:hover h3 {
                text-decoration: underline
            }

            .r {
                font-size: small
            }

            .r {
                line-height: 1.58
            }

            .gl:visited {
                color: #666
            }

            .rc .s {
                line-height: 1.58
            }

            .tVOupd {
                display: inline
            }

            .jD79hf {
                margin-right: 12px;
                vertical-align: middle
            }

            .osl {
                margin-top: 0px;
                color: #70757a;
            }

            .osl a {
                text-decoration: none;
                line-height: 1.58;
            }

            .osl a:hover {
                text-decoration: none
            }

            .khgTR {
                border-bottom: 1px solid #ebebeb;
                display: block;
                line-height: 22px;
                margin: 0px -16px 9px -16px;
                padding: 0 16px 11px 16px
            }

            .khgTR .f.hJND5c {
                margin-top: 0px;
                overflow: hidden;
                white-space: nowrap
            }

            .khgTR.QEhTP {
                border-bottom: none;
                margin-bottom: 0;
                padding-bottom: 0
            }

            .khgTR.lWEpfd {
                border-bottom: none;
                margin-bottom: 0;
                padding-bottom: 0
            }

            .uZfOAb {
                clear: both;
                padding-top: 6px
            }

            .jtDWfd {
                margin-left: -10px;
                margin-right: -10px
            }

            .gpeho {
                margin-left: -10px;
                margin-right: -10px;
                padding: 12px 0 5px
            }

            .tTfzVd {
                padding-top: 9px
            }

            .pb0Ufd {
                border-radius: 4px;
                border: 1px solid rgba(0, 0, 0, .12);
                font-size: 14px;
                line-height: 16px;
                margin-left: 10px;
                padding: 7px 8px;
                display: inline-block;
                text-align: center
            }

            .pb0Ufd:last-child {
                margin-right: 24px
            }

            .tcPEUc .jD79hf {
                display: none
            }

            .P1usbc {
                display: table;
                white-space: nowrap;
                margin: 5px 0;
                line-height: 1.58;
                color: #70757a
            }

            .G1Rrjc {
                display: table-cell;
                padding-left: 15px;
                vertical-align: baseline
            }

            .i4vd5e {
                display: table-cell
            }

            .VNLkW {
                display: table-row;
                vertical-align: top
            }

            .h7mcFf {
                color: #999
            }

            .TXwUJf {
                color: #70757a
            }

            .PcHvNb {
                position: absolute
            }

            .N3nEGc {
                background-color: #fff;
                float: left;
                margin-top: 4px
            }

            .wEQKyf.N3nEGc {
                float: right;
                margin: 7px 0 5px 12px
            }

            .Ixi80c {
                margin-top: 0px
            }

            .i0PvJb {
                background-color: #000
            }

            .mWTy7c {
                border-top-left-radius: 2px;
                bottom: 0;
                font-size: 11px;
                font-weight: bold;
                padding: 1px 3px;
                position: absolute;
                right: 0;
                text-align: right;
                text-decoration: none;
                background-color: rgba(0, 0, 0, .7);
                color: #fff
            }

            .rGhul {
                display: block;
                position: relative;
                overflow: hidden
            }

            .rGhul:focus {
                outline-style: solid;
                outline-width: 2px
            }

            .TbwUpd a.fl {
                font-size: 14px
            }

            .TbwUpd.rLwn0d {
                overflow: hidden;
                text-overflow: ellipsis
            }

            .TbwUpd {
                display: inline-block
            }

            .TbwUpd {
                line-height: 1.58
            }

            .H89pHb {
                margin-right: 6px
            }

            .NRRPPb {
                color: #ffa500
            }

            .st sup {
                line-height: 0.9
            }

            .mOd06 em {
                font-weight: bold !important
            }

            #hdtb {
                color: #666;
                font-size: 13px;
                border-bottom: 1px solid #ebebeb;
                margin-top: -21px;
                outline-width: 0;
                outline: none;
                position: relative;
                z-index: 126
            }

            #hdtb.hdtba {
                border-bottom: none
            }

            .hdtb-mitem a,
            #hdtb-more-mn a {
                padding: 0 12px;
                color: #5f6368;
                text-decoration: none;
                display: block
            }

            .hdtb-mitem {
                height: 16px;
                line-height: 16px;
                margin: 11px 1px 0
            }

            .hdtb-mitem.hdtb-msel,
            .hdtb-mitem a {
                padding: 16px 12px 12px 10px
            }

            .HF9Klc {
                margin-right: 5px;
                vertical-align: text-bottom
            }

            .hdtb-mitem a.sqXXR {
                padding-left: 6px
            }

            .hdtbItm label:hover,
            .hdtbItm a:hover,
            #hdtb-more-mn a:hover,
            .hdtb-mn-hd:hover,
            #hdtb-more:hover,
            #hdtb-tls:hover {
                color: #1A73E8
            }

            #hdtb.notl a,
            #hdtb.notl div,
            #hdtb.notl li {
                outline-width: 0;
                outline: none
            }

            #hdtb .hdtb-mitem a:active,
            #hdtb-more:active,
            .hdtb-mn-hd:active {
                color: #1A73E8
            }

            .hdtb-dd-mn a,
            .hdtb-dd-mn a:visited,
            .hdtb-dd-mn a:active {
                color: inherit;
                display: block;
                text-decoration: none
            }

            .more-vert {
                vertical-align: text-bottom
            }

            #hdtb-more-mn a:hover,
            .hdtbItm.hdtbSel:hover,
            .hdtbItm a:hover,
            #cdrlnk:hover {
                background-color: #f1f1f1
            }

            .hdtbItm.hdtbSel,
            #hdtb .hdtbItm a,
            #hdtb-more-mn a,
            #cdrlnk {
                color: #5f6368;
                text-decoration: none;
                padding: 6px 44px 6px 30px;
                line-height: 17px;
                display: block
            }

            .hdtb-mitem a {
                display: inline-block
            }

            #hdtb-more-mn a {
                display: block;
                padding: 6px 16px;
                margin: 0
            }

            #hdtb-more-mn {
                min-width: 120px
            }

            #hdtbMenus {
                background-color: transparent;
                top: 0;
                width: 100%;
                height: 22px;
                position: absolute;
                transition: top 220ms ease-in-out;
                transition: top 220ms ease-in-out;
            }

            .hdtb-td-h {
                display: none
            }

            #hdtbMenus.hdtb-td-o {
                top: 58px;
                padding-top: 3px;
                padding-bottom: 7px;
                top: 0
            }

            body.vasq #hdtbMenus.hdtb-td-o {
                top: 68px
            }

            #hdtb.hdtba #hdtbMenus {
                top: 21px
            }

            body.vasq #hdtb.hdtba #hdtbMenus.hdtb-td-o {
                top: 58px
            }

            #hdtb.hdtba #hdtbMenus {
                background-color: #fafafa;
                border-bottom: 1px solid #ebebeb;
                padding: 7px 0px
            }

            #botabar {
                transition: margin-top 220ms ease-in-out;
                transition: margin-top 220ms ease-in-out
            }

            #hdtbMenus.hdtb-td-c {}

            #hdtbSum {
                background: #fff;
                height: 58px;
                padding: 0;
                position: relative;
                z-index: 126
            }

            .hdtb-mn-o,
            .hdtb-mn-c {
                background: #fff;
                border-radius: 8px;
                box-shadow: 0 2px 10px 0 rgba(0, 0, 0, 0.2);
                box-shadow: 0 2px 10px 0 rgba(0, 0, 0, 0.2);
                color: #333;
                position: absolute;
                line-height: 17px;
                padding-top: 5px;
                padding-bottom: 5px;
                top: 36px;
                z-index: 126
            }

            .hdtb-mn-c {
                display: none
            }

            #hdtb-msb {
                float: left;
                position: relative;
                white-space: nowrap;
                align-items: baseline;
                display: flex;
                -ms-flex-pack: justify;
                justify-content: space-between;
                min-width: 832px
            }

            #hdtb-msb-vis {
                display: inline;
                margin-left: 169px
            }

            #hdtb-msb .hdtb-mitem {
                display: inline-block
            }

            #hdtb-more-mn .hdtb-mitem {
                display: block
            }

            #hdtb-msb .hdtb-mitem.hdtb-msel {
                border-bottom: 3px solid #1A73E8;
                color: #1A73E8;
            }

            #hdtb.hdtba #hdtb-msb .hdtb-mitem.hdtb-msel {
                border-bottom: none
            }

            #hdtb-msb .hdtb-mitem.hdtb-msel:hover {
                cursor: pointer
            }

            #hdtb-msb .hdtb-mitem.hdtb-msel:active {
                background: none
            }

            #hdtb .hdtb-mitem a {
                color: #5f6368
            }

            #hdtb-msb #hdtb-more,
            #hdtb-msb #hdtb-tls {
                color: #5f6368
            }

            #hdtb-tls {
                text-decoration: none
            }

            #hdtb-more {
                display: inline-block;
                padding: 0 12px;
                position: relative;
                tap-highlight-color: rgba(255, 255, 255, 0)
            }

            #hdtb-more:hover {
                cursor: pointer
            }

            .hdtb-mitem .mcolor {
                display: inline-block;
                width: 40px;
                height: 10px;
                margin-left: -13px;
                margin-right: -13px
            }

            #hdtb-msb .hdtb-mitem.hdtb-imb.mlinesep {
                width: 0px;
                margin-left: 8px;
                margin-right: 8px;
                padding: 0px;
                border-left: 1px solid rgba(0, 0, 0, .12)
            }

            .mn-hd-txt {
                display: inline-block;
                padding-right: 6px;
                white-space: nowrap
            }

            .mn-dwn-arw {
                border-color: #70757a transparent;
                border-style: solid;
                border-width: 5px 4px 0 4px;
                width: 0;
                height: 0;
                margin-left: -2px;
                top: 50%;
                margin-top: -2px;
                position: absolute
            }

            .hdtb-mn-hd:hover .mn-dwn-arw,
            #hdtb-more:hover .mn-dwn-arw {
                border-color: #222 transparent
            }

            .hdtb-mn-hd:active .mn-dwn-arw,
            #hdtb-more:active .mn-dwn-arw {
                border-color: #1A73E8 transparent
            }

            .hdtb-tl {
                border: 1px solid transparent;
                display: inline-block;
                text-align: center;
                border-radius: 2px;
                line-height: 19px;
                cursor: pointer;
                margin-left: -1px;
                padding: 4px 11px
            }

            #hdtb-msb .hdtb-tl-sel,
            #hdtb-msb .hdtb-tl-sel:hover {
                background: -moz-linear-gradient(top, #eee, #e0e0e0);
                -moz-box-shadow: inset 0 1px 2px 0 rgba(0, 0, 0, .1);
                border: 1px solid #d7d7d7;
                box-shadow: inset 0 1px 2px 0 rgba(0, 0, 0, .1);
            }

            #hdtb #hdtb-tls:active {
                color: #000
            }

            .mn-hd-txt>.simg_thmb {
                display: none
            }

            .mn-hd-txt .mn-col {
                width: 14px;
                height: 14px;
                border: 1px solid #ccc;
                display: inline-block;
                margin-top: 7px
            }

            #hdtb-tls:hover {
                -moz-box-shadow: 0 1px 1px rgba(0, 0, 0, .1);
                box-shadow: 0 1px 1px rgba(0, 0, 0, .1);
                -moz-transition: all 0.0s;
                transition: all 0.0s
            }

            #hdtb-tls:hover {
                background-color: #f8f8f8;
                background-image: -moz-linear-gradient(top, #f8f8f8, #f1f1f1);
                background-image: linear-gradient(top, #f8f8f8, #f1f1f1);
                border: 1px solid #c6c6c6;
                color: #222;
            }

            #hdtb-tls:active {
                background-color: #f6f6f6;
                background-image: -moz-linear-gradient(top, #f6f6f6, #f1f1f1);
                background-image: linear-gradient(top, #f6f6f6, #f1f1f1);
                -moz-box-shadow: inset 0 1px 2px rgba(0, 0, 0, .1);
                box-shadow: inset 0 1px 2px rgba(0, 0, 0, .1);
            }

            #hdtb-msb>.hdtb-mitem:first-child {
                margin-left: 180px
            }

            body.vasq #hdtbSum {
                height: 58px
            }

            body.vasq #hdtb-msb .hdtb-mitem.hdtb-msel {}

            body.vasq .hdtb-mn-o,
            body.vasq .hdtb-mn-c {
                top: 38px
            }

            #top_nav {
                -moz-user-select: none;
                min-width: 1173px
            }

            .GHDvEf,
            .GHDvEf:hover,
            .GHDvEf.selected,
            .GHDvEf.selected:hover {
                display: inline-block;
                background-color: #fff;
                height: 12px;
                margin-top: 1px;
                user-select: none;
                width: 13px
            }

            .action-menu .mn-dwn-arw {
                border-color: #202124 transparent;
                margin-top: -3px;
                margin-left: 3px;
                left: 0;
                border-color: #70757a transparent
            }

            .action-menu {
                display: inline;
                margin: 0 3px;
                position: relative;
                user-select: none;
                margin-top: 1px;
                vertical-align: middle
            }

            .action-menu-panel {
                padding: 6px 0;
                position: absolute;
                left: 0;
                padding: 0;
                top: 12px;
                visibility: hidden;
                background: #fff;
                border: 1px solid #dcdcdc;
                border: 1px solid rgba(0, 0, 0, .2);
                font-size: 13px;
                white-space: nowrap;
                z-index: 3;
                transition: opacity 0.218s;
                box-shadow: 0 2px 4px rgba(0, 0, 0, .2)
            }

            .action-menu-item {
                cursor: pointer;
                user-select: none
            }

            .action-menu-item:hover {
                background-color: #eee
            }

            #rcnt .action-menu-item a.fl,
            .action-menu-item a.fl {
                color: #333;
                display: block;
                padding: 7px 18px;
                text-decoration: none;
                outline: 0
            }

            .action-menu-panel:focus,
            .action-menu-item:focus,
            .action-menu-item a:focus {
                outline: none
            }

            .action-menu-item {
                margin: 0;
                padding: 0;
                -moz-user-select: none;
            }

            .action-menu-item.selected {
                background-color: #eee
            }

            .GXZmWe {
                background-color: rgba(0, 0, 0, .07);
                border-width: 0;
                color: rgba(0, 0, 0, .07);
                height: 1px
            }

            .GXZmWe {
                margin: 28px -8px 28px -8px
            }

            .tqS43.GXZmWe {
                margin-top: 34px
            }

            .vk_c a {
                text-decoration: none
            }

            .vk_gn {
                color: #3d9400 !important
            }

            .vk_rd {
                color: #dd4b39 !important
            }

            .bTuXH {
                color: #545454 !important
            }

            .vk_gy {
                color: #878787 !important
            }

            .vk_lgy {
                color: #bababa !important
            }

            .vk_bk {
                color: #212121 !important
            }

            .dDoNo {
                font-weight: lighter !important;
                margin-bottom: 5px
            }

            .dDoNo {
                font-size: xx-large !important
            }

            .vk_h {
                font-weight: lighter !important
            }

            .vk_h {
                font-size: x-large !important
            }

            .vk_sh {
                font-weight: lighter !important
            }

            .vk_sh {
                font-size: medium !important
            }

            .Uekwlc {
                font-weight: lighter !important
            }

            .Uekwlc {
                font-size: 14px
            }

            .p13zmc {
                font-weight: lighter !important
            }

            .vk_cdns {
                font-size: 13px !important
            }

            .cYvRhe {
                font-weight: bold !important
            }

            .vk_c,
            .vk_cxp,
            #rhs .fIcnad {
                border-radius: 8px;
                border: 1px solid #dfe1e5;
                box-shadow: none
            }

            #rhs .fIcnad {
                border: none;
                margin-left: 0
            }

            .vk_c,
            .vk_cxp {
                background-color: #fff;
                position: relative
            }

            .vkc_np {
                margin-left: -16px;
                margin-right: -16px
            }

            .WIDPrb,
            .ts .WIDPrb {
                padding-left: 16px
            }

            .iiFzhd,
            .ts .iiFzhd {
                padding-right: 16px
            }

            .vk_pt,
            .ts .vk_pt {
                padding-top: 20px
            }

            .QiLuMc {
                padding-bottom: 20px
            }

            .vk_c {
                width: 618px
            }

            .vk_c,
            .vk_cxp {
                padding: 20px 16px 24px 16px
            }

            .vk_c .vk_c,
            .vk_c .vk_cxp {
                border-radius: 0;
                box-shadow: none;
                background-color: transparent;
                border: 0;
                box-shadow: none;
                margin: 0;
                padding: 0;
                position: static
            }

            .vk_cxp {
                padding-top: 30px;
                padding-bottom: 34px
            }

            .vk_c_cxp {
                margin-top: 10px;
                margin-bottom: 10px
            }

            .vk_gbb {
                border-bottom: 1px solid #eee
            }

            .vk_gbr {
                border-right: 1px solid #eee
            }

            .vk_gbt {
                border-top: 1px solid #eee
            }

            .vk_slic {
                display: inline-block;
                margin-top: -3px;
                margin-right: 16px;
                position: relative;
                height: 24px;
                width: 24px;
                vertical-align: middle
            }

            .vk_sli,
            .vk_slih {
                border: none;
                position: absolute;
                top: 0;
                left: 0;
                height: 24px;
                width: 24px
            }

            a:hover .vk_sli,
            .vk_slih {
                display: none
            }

            a:hover .vk_slih,
            .vk_sli {
                display: inline-block
            }

            .vk_spc {
                height: 16px;
                width: 100%
            }

            .vk_arc {
                border-top: 1px solid #ebebeb;
                cursor: pointer;
                height: 0px;
                margin-bottom: -19px;
                overflow: hidden;
                padding: 20px 0;
                text-align: center
            }

            .vk_ard {
                top: -11px
            }

            .vk_aru {
                bottom: -6px
            }

            .vk_ard,
            .vk_aru {
                background-color: #e5e5e5;
                margin-left: auto;
                margin-right: auto;
                position: relative
            }

            .vk_ard,
            .vk_aru {
                height: 6px;
                width: 64px
            }

            .vk_ard:after,
            .vk_ard:before,
            .vk_aru:after,
            .vk_aru:before {
                content: ' ';
                height: 0;
                left: 0;
                position: absolute;
                width: 0
            }

            .vk_ard:after,
            .vk_ard:before,
            .vk_aru:after,
            .vk_aru:before {
                border-left: 32px solid rgba(229, 229, 229, 0);
                border-right: 32px solid rgba(229, 229, 229, 0)
            }

            .vk_ard:before {
                border-top: 16px solid #e5e5e5;
                top: 6px
            }

            .vk_aru:before {
                border-bottom: 16px solid #e5e5e5;
                bottom: 6px
            }

            .vk_ard:after {
                top: 0
            }

            .vk_ard:after {
                border-top: 16px solid #fff
            }

            .vk_aru:after {
                bottom: 0
            }

            .vk_aru:after {
                border-bottom: 16px solid #fff
            }

            .vk_bk.vk_ard,
            .vk_bk.vk_aru {
                background-color: #212121
            }

            .vk_bk.vk_ard:before {
                border-top-color: #212121
            }

            .vk_bk.vk_aru:before {
                border-bottom-color: #212121
            }

            .di8g3 {
                font-size: 11px !important;
                padding: 6px 8px
            }

            #center_col .di8g3 {
                margin: 0 -35px 0 -8px;
                padding: 6px 20px 0
            }

            #rhs .di8g3 {
                margin-left: 2px;
                padding-bottom: 5px;
                padding-top: 5px
            }

            .di8g3,
            .di8g3 a {
                color: #878787 !important;
                text-decoration: none
            }

            .di8g3 a:hover {
                text-decoration: underline
            }

            .hntNk.vk_c {
                padding-top: 24px;
                padding-bottom: 20px
            }

            .hntNk .dDoNo {
                margin-bottom: 0;
                word-wrap: break-word
            }

            .hntNk .vk_gy {
                margin-bottom: 5px
            }

            .pVFdhc {
                background-color: #ebebeb;
                height: 1px
            }

            .vk_tbl {
                border-collapse: collapse
            }

            .vk_tbl td {
                padding: 0
            }

            .xpdclps,
            .xpdxpnd {
                overflow: hidden
            }

            .xpdclps,
            .xpdxpnd {
                transition: max-height 0.3s
            }

            .xpdxpnd,
            .xpdopen .xpdclps,
            .xpdopen .xpdxpnd.xpdnoxpnd {
                max-height: 0
            }

            .xpdopen .xpdxpnd {
                max-height: none
            }

            .xpdopen .xpdbox .xpdxpnd,
            .xpdopen .xpdbox.xpdopen .xpdclps {
                max-height: 0
            }

            .xpdopen .xpdbox.xpdopen .xpdxpnd,
            .xpdopen .xpdbox .xpdclps {
                max-height: none
            }

            .xpdclose .k5nfEc {
                display: none
            }

            .bNg8Rb {
                clip: rect(1px, 1px, 1px, 1px);
                height: 1px;
                margin: 0;
                overflow: hidden;
                padding: 0;
                position: absolute;
                white-space: nowrap;
                width: 1px;
                z-index: -1000
            }
        </style>
    </div><noscript>
        <style>
            .nojsv {
                visibility: visible
            }
        </style>
    </noscript>
    <div>
        <h1 class="bNg8Rb">Accessibility links</h1>
        <div jscontroller="r36a9c" class="wYq63b">
            <style>
                .wYq63b {
                    display: flex;
                    left: 0;
                    position: absolute;
                    top: 0;
                    z-index: 1001
                }

                .S6VXfe {
                    align-items: center;
                    background-color: #fff;
                    border-radius: 0 2px 2px 0;
                    box-shadow: 0 2px 2px 0 rgba(0, 0, 0, .16), 0 0 0 1px rgba(0, 0, 0, .08);
                    display: flex;
                    margin: 80px auto 8px 0;
                    overflow: hidden
                }

                .gyPpGe,
                .gyPpGe:visited,
                .qlVNAd {
                    border: 2px solid rgba(0, 0, 0, .16);
                    border-radius: 2px;
                    color: #2228af;
                    cursor: pointer;
                    display: inline-block;
                    font-size: 14px;
                    line-height: 20px;
                    margin: 6px 11px;
                    min-height: 32px;
                    text-decoration: underline;
                    text-align: center;
                    width: 106px
                }

                .gyPpGe:not(:focus) {
                    clip: rect(1px, 1px, 1px, 1px);
                    overflow: hidden;
                    position: absolute;
                    padding: 0
                }
            </style>
            <div class="S6VXfe"><a jsname="BKxS1e" class="gyPpGe" role="link" tabindex="0" jsaction="i3viod"
                    data-ved="0ahUKEwjcnJqVktzpAhUtyTgGHd61BF8Q67oDCAQ">Skip to main content</a><a jsname="KI37ad"
                    class="gyPpGe" href="https://support.google.com/websearch/answer/181196?hl=en-IN"
                    onmousedown="return rwt(this,'','','','','AOvVaw26r2_fCGW-RHG6syjlap5r','','0ahUKEwjcnJqVktzpAhUtyTgGHd61BF8QwcMDCAU','','',event)">Accessibility
                    help</a>
                <div
                    data-async-context="async_id:duf3-78;authority:0;card_id:;entry_point:0;feature_id:;ftoe:0;header:0;is_jobs_spam_form:0;open:0;preselect_answer_index:-1;suggestions:;suggestions_subtypes:;suggestions_types:;surface:0;title:;type:78">
                    <style>
                        a.duf3 {
                            color: #70757a;
                            float: right;
                            font-style: italic;
                            tap-highlight-color: rgba(0, 0, 0, 0);
                            tap-highlight-color: rgba(0, 0, 0, 0)
                        }

                        a.aciXEb {
                            padding: 0 5px;
                        }

                        .RTZ84b {
                            color: #9e9e9e;
                            cursor: pointer;
                            padding-right: 8px
                        }

                        .XEKxtf {
                            color: #9e9e9e;
                            float: right;
                            font-size: 12px;
                            line-height: 1.34;
                            padding-bottom: 4px
                        }
                    </style>
                    <div jscontroller="xz7cCd" style="display:none" jsaction="rcuQ6b:npT2md"></div>
                    <div id="duf3-78" data-jiis="up" data-async-type="duffy3"
                        data-async-context-required="type,open,feature_id,async_id,entry_point,authority,card_id,ftoe,title,header,suggestions,surface,suggestions_types,suggestions_subtypes,preselect_answer_index,is_jobs_spam_form"
                        class="y yp" data-ved="0ahUKEwjcnJqVktzpAhUtyTgGHd61BF8Q-0EIBg"></div><a jsname="JUypV"
                        class="gyPpGe" data-async-trigger="duf3-78" role="link" tabindex="0"
                        jsaction="async.u">Accessibility feedback</a>
                </div>
            </div>
        </div>
    </div><noscript>
        <meta
            content="0;url="
            http-equiv="refresh">
        <style>
            table,
            div,
            span,
            p {
                display: none
            }
        </style>
        <div style="display:block">Please click <a
                href="">here</a>
            if you are not redirected within a few seconds.</div>
    </noscript>
    <style>
        .A8SBwf {
            position: relative;
            margin: 0 auto;
            margin-left: 133px;
            width: 692px;
            padding-left: 27px;
        }

        .RNNXgb {
            background: #fff;
            display: flex;
            border: 1px solid #dfe1e5;
            box-shadow: none;
            height: 39px;
            width: 690px;
            border-radius: 24px;
            z-index: 3;
            height: 44px;
            margin: 0 auto;
        }

        .emcav .RNNXgb {
            border-bottom-left-radius: 0;
            border-bottom-right-radius: 0;
            border-color: rgba(223, 225, 229, 0);
            box-shadow: 0 1px 6px 0 rgba(32, 33, 36, 0.28)
        }

        .RNNXgb:hover,
        .sbfc .RNNXgb {
            box-shadow: 0 1px 6px 0 rgba(32, 33, 36, 0.28);
            border-color: rgba(223, 225, 229, 0)
        }

        .SDkEP {
            flex: 1;
            display: flex;
            padding: 5px 4px 0 16px;
            padding-left: 14px;
        }

        .logo {
            position: absolute;
            left: -139px;
            padding: 4px 28px 0 30px;
            top: 4px
        }

        .sbfc .iblpc,
        .emcav .iblpc {
            padding-right: 14px;
            margin-left: -1px
        }

        .iblpc span {
            display: none
        }

        .sbfc .iblpc span,
        .emcav .iblpc span {
            display: block
        }

        .sbfc.A8SBwf,
        .emcav.A8SBwf {
            padding-left: 0;
            width: 719px
        }

        .sbfc .RNNXgb,
        .emcav .RNNXgb {
            width: 717px
        }

        .iblpc {
            display: flex;
            align-items: center;
            padding-right: 6px;
            margin-top: -7px
        }

        #logo {
            display: block;
            overflow: hidden;
            position: relative
        }

        #logo img {
            border: 0;
        }

        .hsuHs {
            margin: auto
        }

        .wFncld {
            color: #9AA0A6;
            height: 20px;
            width: 20px
        }

        .gLFyf {
            background-color: transparent;
            border: none;
            margin: 0;
            padding: 0;
            color: rgba(0, 0, 0, .87);
            word-wrap: break-word;
            outline: none;
            display: flex;
            flex: 100%;
            tap-highlight-color: transparent;
            margin-top: -37px;
            height: 34px;
            font-size: 16px
        }

        .a4bIc {
            display: flex;
            flex: 1;
            flex-wrap: wrap
        }

        .pR49Ae {
            color: transparent;
            flex: 100%;
            white-space: pre;
            height: 34px
        }

        .pR49Ae span {
            background: url("/images/experiments/wavy-underline.png") repeat-x scroll 0 100% transparent;
            padding: 0 0 10px 0;
        }

        .dRYYxd {
            display: flex;
            flex: 0 0 auto;
            margin-top: -5px;
            align-items: stretch;
            flex-direction: row
        }

        .clear-button {
            flex: 1 0 auto;
            display: none;
            cursor: pointer;
            align-items: center;
            border: 0;
            background: transparent;
            outline: none;
            padding: 0 8px;
            line-height: 44px
        }

        .XoaYSb {
            display: flex
        }

        .lBbtTb {
            height: 100%;
            color: #80868b;
            vertical-align: middle;
            outline: none
        }

        .Tg7LZd {
            height: 44px;
            width: 44px;
            background: transparent;
            border: none;
            cursor: pointer;
            flex: 0 0 auto;
            padding: 0
        }

        .Tg7LZd {
            flex: 0 0 auto;
            padding-right: 13px
        }

        html:not(.zAoYTe) .Tg7LZd:focus {
            outline: none
        }

        .FAuhyb {
            background: none;
            color: #4285f4;
            height: 24px;
            width: 24px;
            margin: auto
        }

        .UUbT9 {
            position: absolute;
            width: 100%;
            text-align: left;
            margin-top: -1px;
            z-index: 989;
            cursor: default;
            user-select: none
        }

        .aajZCb {
            background: #fff;
            display: flex;
            flex-direction: column;
            list-style-type: none;
            margin: 0;
            padding: 0;
            box-shadow: 0 3px 8px 0 rgba(0, 0, 0, 0.2), 0 0 0 1px rgba(0, 0, 0, 0.08);
            border: 0;
            border-radius: 0 0 24px 24px;
            box-shadow: 0 4px 6px 0 rgba(32, 33, 36, 0.28);
            padding-bottom: 4px;
            overflow: hidden
        }

        .erkvQe {
            flex: auto;
            padding-bottom: 16px
        }

        .RjPuVb {
            height: 1px;
            margin: 0 26px 0 0
        }

        .S3nFnd .RjPuVb,
        .S3nFnd .aajZCb {
            flex: 0 0 auto
        }

        .xtSCL {
            border-top: 1px solid #e8eaed;
            margin: 0 14px;
            padding-bottom: 4px
        }

        #ynRric {
            display: none
        }

        .ynRric {
            list-style-type: none;
            flex-direction: column;
            color: #80868b;
            font-family: arial, sans-serif;
            font-size: 14px;
            letter-spacing: 0.75px;
            margin: 0 20px 0 16px;
            padding: 8px 0 8px 0;
            line-height: 16px
        }

        #sbt {
            display: none
        }

        .sbct {
            display: flex;
            align-items: center;
            min-width: 0;
            max-height: none;
            padding: 0
        }

        .jKWzZXdEJWi__suggestions-inner-container {
            flex: auto;
            display: flex;
            margin: 0 20px;
            align-items: center;
            margin: 0 20px 0 14px
        }

        .sbtc {
            display: flex;
            flex: auto;
            flex-direction: column;
            min-width: 0;
            max-height: none;
            padding: 6px 0
        }

        .sbic {
            display: flex;
            flex: 0 1 auto;
            align-items: center;
            margin-right: 14px
        }

        .sbl1 {
            display: flex;
            font-size: 16px;
            color: #212121;
            flex: auto;
            align-items: center;
            word-break: break-all;
            padding-right: 8px
        }

        .sbl1>span {
            flex: auto
        }

        .sbab {
            display: flex;
            flex: 0 1 auto;
            align-self: stretch
        }

        .JUypV {
            font-size: 8pt;
            margin-top: -16px;
            position: absolute;
            right: 16px
        }
    </style>
    
   
   <div id="cl" style="margin-top:2%"></div>

<div class=" big big" id="">
  <div class="gb_sa gb_ee gb_2a gb_Mc" id="gb">
      <div class="gb_2c gb_Xa gb_1c" data-ogsr-up="">
          <div class="gb_3c">
              <div class="gb_Sc">
                  <div class="gb_C gb_md gb_i gb_Wf" data-ogsr-fb="true" data-ogsr-alt="" id="gbwa">
                      <div class="gb_Vf">
                          <a class="gb_D" aria-label="Google apps"
                              href="https://www.google.co.in/intl/en/about/products?tab=wh" aria-expanded="false"
                              role="button" tabindex="0">
                              <svg class="gb_8e" focusable="false" viewBox="0 0 24 24">
                                  <path
                                      d="M6,8c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM12,20c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM6,20c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM6,14c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM12,14c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM16,6c0,1.1 0.9,2 2,2s2,-0.9 2,-2 -0.9,-2 -2,-2 -2,0.9 -2,2zM12,8c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM18,14c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM18,20c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2z">
                                  </path>
                              </svg>
                          </a>
                      </div>
                  </div>
              </div><a class="gb_4 gb_5 gb_oe gb_5c"
                  href="https://accounts.google.com/ServiceLogin?hl=en&amp;passive=true&amp;continue=https://www.google.com/search%3Fclient%3Dfirefox-b-d%26q%3Ddoes%2Bnorton%2Bstop%2Bhacker"
                  target="_top">Sign in</a>
          </div>
          <div
              style="overflow: hidden; position: absolute; top: 0px; visibility: hidden; width: 340px; z-index: 991; height: 468px; margin-top: 57px; right: 0px; margin-right: 4px; transition: height 0.3s ease-in-out 0s;">
          </div>
          <div
              style="overflow: hidden; position: absolute; top: 0px; visibility: hidden; width: 340px; z-index: 991; height: 468px; margin-top: 57px; right: 0px; margin-right: 4px; transition: height 0.3s ease-in-out 0s;">
              <iframe role="presentation" frameborder="0" scrolling="no"
                  src="https://ogs.google.com/widget/app/so?origin=http%3A%2F%2Flocalhost&amp;pid=1&amp;spid=1&amp;hl=en&amp;gm="
                  style="height: 100%; width: 100%; visibility: hidden;"></iframe></div>
      </div>
  </div>
  <div class="sfbg nojsv" style="margin-top:-20px">
      <div class="sfbgg"></div>
  </div>
  <form class="tsf nj" action="index.php" id="sf" method="GET">

      <div>
          <div class="A8SBwf" jsdata="LVplcb;_;"
              jsaction="lX6RWd:w3Wsmc;DkpM0b:d3sQLd;IQOavd:dFyQEf;XzZZPe:jI3wzf;Aghsf:AVsnlb;iHd9U:Q7Cnrc;f5hEHe:G0jgYd;vmxUb:j3bJnb;R2c5O:LuRugf;R3Yrj:DURTdb;qiCkJd:ANdidc;NOg9L:HLgh3;uGoIkd:epUokb;zLdLw:eaGBS;rcuQ6b:npT2md">
              <div class="logo">
                  <a href="https://www.google.com/webhp?hl=en&amp;sa=X&amp;ved=0ahUKEwjcnJqVktzpAhUtyTgGHd61BF8QPAgH"
                      title="Go to Google Home" id="logo" data-hveid="7">
                      <img src="https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_92x30dp.png"
                          alt="Google" data-atf="1" width="92" height="30">
                  </a>
              </div>
              <div class="RNNXgb" jsname="RNNXgb">
                  <div class="SDkEP">
                      <div class="iblpc" jsname="uFMOof">
                          <div class="hsuHs"><span class="wFncld z1asCe MZy1Rb"><svg focusable="false"
                                      xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                      <path
                                          d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0 0 16 9.5 6.5 6.5 0 1 0 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z">
                                      </path>
                                  </svg></span>
                          </div>
                      </div>
                      <div  class="a4bIc" >
                          <div class="pR49Ae gsfi" j></div>
                          <input class="gLFyf gsfi" maxlength="2048" name="search" type="text"  aria-haspopup="false" autocapitalize="off"
                              autocomplete="off" autocorrect="off" role="combobox" spellcheck="false"
                              title="Search" value="<?php if(!empty($_GET["search"])) {echo $_GET['search'];}?>"
                              aria-label="Search" >
                      </div>
                      <div class="dRYYxd">
                          <div aria-label="Clear" role="button">
                              <span onclick="res()" class="lBbtTb z1asCe rzyADb" jsname="itVqKe" tabindex="0"
                                  aria-label="Clear">
                                  <svg focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                      <path
                                          d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z">
                                      </path>
                                  </svg></span>
                          </div>
                      </div>
                  </div>
                  <button class="Tg7LZd" jsname="Tg7LZd" aria-label="Google Search" name="submit" type="submit"
                      data-ved="0ahUKEwjcnJqVktzpAhUtyTgGHd61BF8Q4dUDCAs">
                      <div class="FAuhyb"> <span class="z1asCe MZy1Rb"><svg focusable="false"
                                  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                  <path
                                      d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0 0 16 9.5 6.5 6.5 0 1 0 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z">
                                  </path>
                              </svg></span>
                      </div>
                  </button>
              </div>
              <div class="UUbT9" style="display:none">
                  <div class="RjPuVb" jsname="RjPuVb"></div>
                  <div class="aajZCb" jsname="aajZCb">
                      <div class="xtSCL"></div>
                      <ul class="erkvQe" jsname="erkvQe" role="listbox"></ul>
                      <li class="ynRric" id="ynRric" role="presentation"></li>
                      <li data-view-type="1" class="sbct" id="sbt" role="presentation">
                          <div class="jKWzZXdEJWi__suggestions-inner-container">
                              <div class="sbic"></div>
                              <div class="sbtc" role="option">
                                  <div class="sbl1"><span></span>
                                  </div>
                              </div>
                              <div class="sbab">
                                  <div class="sbai">Remove</div>
                              </div>
                          </div>
                      </li>
                  </div>
                  <div jsname="JUypV" jscontroller="IvlUe" class="JUypV"
                      data-async-context="async_id:duf3-46;authority:0;card_id:;entry_point:0;feature_id:;ftoe:0;header:0;is_jobs_spam_form:0;open:0;preselect_answer_index:-1;suggestions:;suggestions_subtypes:;suggestions_types:;surface:0;title:;type:46">
                      <div jscontroller="xz7cCd" style="display:none" jsaction="rcuQ6b:npT2md"></div>
                      <div id="duf3-46" data-jiis="up" data-async-type="duffy3"
                          data-async-context-required="type,open,feature_id,async_id,entry_point,authority,card_id,ftoe,title,header,suggestions,surface,suggestions_types,suggestions_subtypes,preselect_answer_index,is_jobs_spam_form"
                          class="y yp" data-ved="0ahUKEwjcnJqVktzpAhUtyTgGHd61BF8Q-0EIDA"></div><a
                          class="duf3 aciXEb" href="#" id="sbfblt" data-async-trigger="duf3-46" jsaction="async.u"
                          data-ved="0ahUKEwjcnJqVktzpAhUtyTgGHd61BF8Qtw8IDQ">Report inappropriate predictions</a>
                  </div>
              </div>
          </div>
          <div style="background:url(/images/searchbox/desktop_searchbox_sprites302_hr.webp)"></div>
      </div>
  </form>
</div>
    


    <div class="sfbgx"></div>
    <div id="gac_scont"></div>
    <div id="main">
        <!-- <div id="easter-egg"></div><span class="kpshf line gsr bilit" style="display:none"></span> -->
        <div id="cnt" class=" big">
            <script
                nonce="T/1dJyC0GxsSMWP7nSTknQ==">(function () {
                        var j = 1280;
                        try { var a = document.getElementById("cnt"), b = document.getElementById("searchform"), c = ""; if (window.gbar && gbar.elr) { var d = gbar.elr().mo; c = "md" == d ? " mdm" : "lg" == d ? " big" : "" } else { var e = document.body && document.body.offsetWidth; e && e >= j && (c = " big") } a && (a.className += c); b && (b.className += c) } catch (f) { google.ml(f, !1, { elr: !0 }) };
                    })();</script>
           
            <script nonce="T/1dJyC0GxsSMWP7nSTknQ==">(function () {
                    google.tick("load", "sct");
                }).call(this);</script>
            <div id="dc"></div>
            <style>
                #hdtb form {
                    display: inline
                }

                .hdtbSel,
                .hdtbSel span.q {
                    color: #000;
                    cursor: default;
                    padding-right: 15px;
                    text-decoration: none
                }

                .iJddsb {
                    display: inline-block;
                    fill: currentColor
                }

                .iJddsb img,
                .iJddsb svg {
                    display: block;
                    height: 100%;
                    width: 100%
                }

                .rwUYcf {
                    display: inline-block
                }

                .Cq34nf {
                    cursor: pointer
                }

                .cF4V5c {
                    background: #fff;
                    border-radius: 8px;
                    box-shadow: 0 2px 10px 0 rgba(0, 0, 0, 0.2);
                    margin-top: -4px;
                    outline: none;
                    padding: 5px 0;
                    position: absolute
                }

                a.f9UGee,
                a.f9UGee:visited {
                    color: inherit;
                    cursor: pointer;
                    display: block;
                    font-size: 14px;
                    line-height: 23px;
                    outline: 0;
                    padding: 3px 16px;
                    text-decoration: inherit;
                    white-space: nowrap
                }

                a.f9UGee:hover {
                    text-decoration: none
                }

                .il8Sef {
                    margin-left: -15px
                }

                .il8Sef a.f9UGee {
                    color: #5f6368;
                    line-height: 16px;
                    padding: 8px 16px
                }

                .f9UGee.AchQod {
                    background: rgba(0, 0, 0, .1)
                }

                .pdswFd {
                    float: right;
                    position: relative;
                    z-index: 3;
                    right: 17px
                }

                .pdswFd .hdtb-mitem {
                    display: inline-block
                }

                .gTMtLb {
                    z-index: 1001;
                    position: absolute;
                    top: -1000px
                }

                .WE0UJf {
                    height: 33px;
                    margin-left: 180px;
                }

                body.vasq .WE0UJf {
                    height: 43px
                }

                #result-stats {
                    position: absolute;
                    top: 0;
                    overflow: hidden;
                    text-overflow: ellipsis;
                    white-space: nowrap;
                    transition: all 220ms ease-in-out;
                    color: #70757a;
                    line-height: 33px;
                    padding-top: 0;
                    padding-bottom: 0;
                    padding-right: 8px;
                }

                body.vasq #result-stats {
                    line-height: 43px
                }
            </style>
            <div id="top_nav">
                <div jscontroller="qik19b" jsdata="Z1JpA;;CDvW2A" jsaction="rcuQ6b:npT2md">
                    <h1 class="bNg8Rb">Search modes</h1>
                    <div class="hdtbna notl" id="hdtb" role="navigation">
                        <div id="hdtbSum">
                            <div id="hdtb-s" style="white-space:nowrap">
                                <div id="hdtb-msb">
                                    <div>
                                        <div id="hdtb-msb-vis">
                                            <div class="hdtb-mitem hdtb-msel hdtb-imb" aria-hidden="true"><span
                                                    class="HF9Klc iJddsb" style="height:16px;width:16px"><svg
                                                        focusable="false" viewBox="0 0 24 24">
                                                        <path d="M10 2v2a6 6 0 0 1 6 6h2a8 8 0 0 0-8-8" fill="#34A853">
                                                        </path>
                                                        <path d="M10 4V2a8 8 0 0 0-8 8h2c0-3.3 2.7-6 6-6"
                                                            fill="#EA4335"></path>
                                                        <path d="M4 10H2a8 8 0 0 0 8 8v-2c-3.3 0-6-2.69-6-6"
                                                            fill="#FBBC04"></path>
                                                        <path
                                                            d="M22 20.59l-5.69-5.69A7.96 7.96 0 0 0 18 10h-2a6 6 0 0 1-6 6v2c1.85 0 3.52-.64 4.88-1.68l5.69 5.69L22 20.59"
                                                            fill="#4285F4"></path>
                                                    </svg></span>All</div>
                                            <div class="hdtb-mitem hdtb-imb"><a class="q qs"
                                                    href="https://www.google.com/search?q=does+norton+stop+hacker&amp;client=firefox-b-d&amp;source=lnms&amp;tbm=nws&amp;sa=X&amp;ved=2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8Q_AUoAXoECBAQAw"><span
                                                        class="HF9Klc iJddsb" style="height:16px;width:16px"><svg
                                                            focusable="false" viewBox="0 0 24 24">
                                                            <path
                                                                d="M12 11h6v2h-6v-2zm-6 6h12v-2H6v2zm0-4h4V7H6v6zm16-7.22v12.44c0 1.54-1.34 2.78-3 2.78H5c-1.64 0-3-1.25-3-2.78V5.78C2 4.26 3.36 3 5 3h14c1.64 0 3 1.25 3 2.78zM19.99 12V5.78c0-.42-.46-.78-1-.78H5c-.54 0-1 .36-1 .78v12.44c0 .42.46.78 1 .78h14c.54 0 1-.36 1-.78V12zM12 9h6V7h-6v2">
                                                            </path>
                                                        </svg></span>News</a></div>
                                            <div class="hdtb-mitem hdtb-imb"><a class="q qs"
                                                    href="https://www.google.com/search?q=does+norton+stop+hacker&amp;client=firefox-b-d&amp;source=lnms&amp;tbm=vid&amp;sa=X&amp;ved=2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8Q_AUoAnoECBAQBA"><span
                                                        class="HF9Klc iJddsb" style="height:16px;width:16px"><svg
                                                            focusable="false" viewBox="0 0 24 24">
                                                            <path
                                                                d="M10 16.5l6-4.5-6-4.5v9zM5 20h14a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1zm14.5 2H5a3 3 0 0 1-3-3V4.4A2.4 2.4 0 0 1 4.4 2h15.2A2.4 2.4 0 0 1 22 4.4v15.1a2.5 2.5 0 0 1-2.5 2.5">
                                                            </path>
                                                        </svg></span>Videos</a></div>
                                            <div class="hdtb-mitem hdtb-imb"><a class="q qs"
                                                    href="https://www.google.com/search?q=does+norton+stop+hacker&amp;client=firefox-b-d&amp;source=lnms&amp;tbm=shop&amp;sa=X&amp;ved=2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8Q_AUoA3oECBAQBQ"><span
                                                        class="HF9Klc iJddsb" style="height:16px;width:16px"><svg
                                                            focusable="false" viewBox="0 0 24 24">
                                                            <path
                                                                d="M21.11 2.89A3.02 3.02 0 0 0 18.95 2h-5.8c-.81 0-1.58.31-2.16.89L7.25 6.63 2.9 10.98a3.06 3.06 0 0 0 0 4.32l5.79 5.8a3.05 3.05 0 0 0 4.32.01l8.09-8.1c.58-.58.9-1.34.9-2.16v-5.8c0-.81-.32-1.59-.89-2.16zM20 10.85c0 .28-.12.54-.32.74l-3.73 3.74-4.36 4.36c-.41.41-1.08.41-1.49 0l-2.89-2.9-2.9-2.9a1.06 1.06 0 0 1 0-1.49l8.1-8.1c.2-.2.46-.3.74-.3l5.8-.01A1.05 1.05 0 0 1 20 5.05v5.8zM16 6c1.1 0 2 .9 2 2s-.9 2-2 2-2-.9-2-2 .9-2 2-2">
                                                            </path>
                                                        </svg></span>Shopping</a></div>
                                            <div class="hdtb-mitem hdtb-imb"><a class="q qs"
                                                    href="https://www.google.com/search?q=does+norton+stop+hacker&amp;client=firefox-b-d&amp;source=lnms&amp;tbm=isch&amp;sa=X&amp;ved=2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8Q_AUoBHoECBAQBg"><span
                                                        class="HF9Klc iJddsb" style="height:16px;width:16px"><svg
                                                            focusable="false" viewBox="0 0 24 24">
                                                            <path
                                                                d="M14 13l4 5H6l4-4 1.79 1.78L14 13zm-6.01-2.99A2 2 0 0 0 8 6a2 2 0 0 0-.01 4.01zM22 5v14a3 3 0 0 1-3 2.99H5c-1.64 0-3-1.36-3-3V5c0-1.64 1.36-3 3-3h14c1.65 0 3 1.36 3 3zm-2.01 0a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h7v-.01h7a1 1 0 0 0 1-1V5">
                                                            </path>
                                                        </svg></span>Images</a></div>
                                        </div>
                                        <g-header-menu class="hdtb-mitem rwUYcf" jscontroller="aam1T"
                                            jsaction="rcuQ6b:npT2md" id="ow16" __is_owner="true"><a jsname="LgbsSe"
                                                class="Cq34nf hdtb-dd-b sqXXR" aria-haspopup="true" role="button"
                                                tabindex="0" jsaction="BVg1Q"><span class="more-vert z1asCe SaPW2b"
                                                    style="height:16px;line-height:16px;width:16px"><svg
                                                        focusable="false" xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 24 24">
                                                        <path
                                                            d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z">
                                                        </path>
                                                    </svg></span>More</a>
                                            <div jsname="xl07Ob" class="cF4V5c il8Sef" style="display:none" role="menu"
                                                tabindex="-1" jsaction="keydown:uYT2Vb"
                                                data-ved="2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8Q2h8oBXoECBAQBw"
                                                jsowner="ow16"><a class="f9UGee q qs" jsaction="mouseover:sbHm2b"
                                                    role="menuitem" tabindex="-1"
                                                    href="https://maps.google.com/maps?client=firefox-b-d&amp;q=does+norton+stop+hacker&amp;um=1&amp;ie=UTF-8&amp;sa=X&amp;ved=2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8Q_AUoAHoECBAQCA"><span
                                                        class="HF9Klc iJddsb" style="height:16px;width:16px"><svg
                                                            focusable="false" viewBox="0 0 16 16">
                                                            <path
                                                                d="M7.503 0c3.09 0 5.502 2.487 5.502 5.427 0 2.337-1.13 3.694-2.26 5.05-.454.528-.906 1.13-1.358 1.734-.452.603-.754 1.508-.98 1.96-.226.452-.377.829-.904.829-.528 0-.678-.377-.905-.83-.226-.451-.527-1.356-.98-1.959-.452-.603-.904-1.206-1.356-1.734C3.132 9.121 2 7.764 2 5.427 2 2.487 4.412 0 7.503 0zm0 1.364c-2.283 0-4.14 1.822-4.14 4.063 0 1.843.86 2.873 1.946 4.177.468.547.942 1.178 1.4 1.79.34.452.596.99.794 1.444.198-.455.453-.992.793-1.445.459-.61.931-1.242 1.413-1.803 1.074-1.29 1.933-2.32 1.933-4.163 0-2.24-1.858-4.063-4.139-4.063zm0 2.734a1.33 1.33 0 11-.001 2.658 1.33 1.33 0 010-2.658">
                                                            </path>
                                                        </svg></span>Maps</a><a class="f9UGee q qs"
                                                    jsaction="mouseover:sbHm2b" role="menuitem" tabindex="-1"
                                                    href="https://www.google.com/search?q=does+norton+stop+hacker&amp;client=firefox-b-d&amp;source=lnms&amp;tbm=bks&amp;sa=X&amp;ved=2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8Q_AUoAXoECBAQCQ"><span
                                                        class="HF9Klc iJddsb" style="height:16px;width:16px"><svg
                                                            focusable="false" viewBox="0 0 24 24">
                                                            <path
                                                                d="M18 2H6a2 2 0 0 0-2 2v16c0 1.1.9 2 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2zm0 18H6V4h2v8l2.5-1.5L13 12V4h5v16">
                                                            </path>
                                                        </svg></span>Books</a><a class="f9UGee q qs"
                                                    jsaction="mouseover:sbHm2b" role="menuitem" tabindex="-1"
                                                    href="https://www.google.com/flights?q=does+norton+stop+hacker&amp;client=firefox-b-d&amp;source=lnms&amp;tbm=flm&amp;sa=X&amp;ved=2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8Q_AUoAnoECBAQCg"><span
                                                        class="HF9Klc iJddsb" style="height:16px;width:16px"><svg
                                                            focusable="false" viewBox="0 0 24 24">
                                                            <path
                                                                d="M12.98 12.89l-4.03 4.03.42 2.95L8.24 21l-1.87-3.37L3 15.76l1.12-1.12 2.95.42 4.03-4.03L3 6.77l1.5-1.5 10.04 2.32 4.2-4.2a1.32 1.32 0 0 1 1.87 0c.52.52.52 1.36 0 1.87l-4.2 4.2 2.32 10.04-1.5 1.5-4.25-8.11">
                                                            </path>
                                                        </svg></span>Flights</a><a class="f9UGee q qs"
                                                    jsaction="mouseover:sbHm2b" role="menuitem" tabindex="-1"
                                                    href="https://www.google.com/search?q=does+norton+stop+hacker&amp;client=firefox-b-d&amp;source=lnms&amp;tbm=fin&amp;sa=X&amp;ved=2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8Q_AUoA3oECBAQCw"><span
                                                        class="HF9Klc iJddsb" style="height:16px;width:16px"><svg
                                                            focusable="false" viewBox="0 0 24 24">
                                                            <path
                                                                d="M6 15.5l-3 2.94V10h3v5.5zm5-1.84l-1.57-1.34L8 13.64V6h3v7.66zM16 12l-3 3V2h3v10zm2.81-.19L17 10h5v5l-1.79-1.79L13 20.36l-3.47-3.02L5.75 21H3l6.47-6.34L13 17.64l5.81-5.83">
                                                            </path>
                                                        </svg></span>Finance</a></div>
                                        </g-header-menu>
                                    </div>
                                   
                                </div>
                                <ol class="pdswFd"></ol>
                            </div>
                        </div>
                      
                    </div>
                </div>
            </div>
            <div id="before-appbar"></div>
            <div class="gTMtLb" id="lb"></div>
            <div class="appbar" id="appbar">
                <div id="extabar">
                    <div style="position:relative">
                        <div class="WE0UJf" id="slim_appbar">
                            <div>
                                <div id="result-stats">About 39,10,000 results<nobr> (0.49 seconds)&nbsp;</nobr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mw" id="ucs"></div>
            <div id="atvcap"></div>
            <div class="mw">
                <div id="rcnt" style="clear:both;position:relative;zoom:1">
                    <div id="bcenter">
                        <div class="col" style="width:0"></div>
                    </div>
                    <div class="col" style="width:0">
                        <div id="center_col">
                            <style>
                                .gL9Hy {
                                    font-size: 18px
                                }

                                .d2IKib {
                                    color: #dd4b39
                                }

                                .gqLncc {
                                    margin: .33em 0 17px
                                }

                                .ads-ad h3 {
                                    font-size: 20px !important;
                                    line-height: 26px;
                                }

                                .ads-ad {
                                    color: #4d5156;
                                    line-height: 22px
                                }

                                .ads-ad a:active {
                                    color: #dd4b39
                                }

                                .ads-ad .pCA4Bd,
                                .ads-ad .pCA4Bd a {
                                    color: #70757a
                                }

                                .qGXjvb {
                                    margin-top: 6px
                                }

                                .ads-ad {
                                    margin-bottom: 27px;
                                    position: relative;
                                }

                                #center_col .C4eCVc {
                                    box-sizing: border-box;
                                    position: relative;
                                    margin-left: 0px;
                                    margin-right: 0px;
                                    width: 600px
                                }

                                .ad_cclk {
                                    position: relative
                                }

                                #center_col .ad_cclk a.V0MxL:hover,
                                .ad_cclk a.V0MxL {
                                    text-decoration: none
                                }

                                .sA5rQ {
                                    display: inline-block;
                                    margin-bottom: 3px;
                                    padding-top: 3px
                                }

                                .ads-visurl {
                                    display: inline-block;
                                    color: #202124;
                                    white-space: nowrap;
                                    font-size: 14px;
                                    padding-bottom: 3px;
                                    padding-top: 1px;
                                    line-height: 1.5
                                }

                                .ads-visurl cite {
                                    color: #202124;
                                }

                                .UdQCqe {
                                    overflow: hidden;
                                    text-overflow: ellipsis;
                                    white-space: nowrap
                                }

                                .ads-visurl {
                                    display: inline-flex;
                                    align-items: baseline;
                                    max-width: 600px;
                                    position: absolute;
                                    top: 0;
                                    left: 0
                                }

                                .nYN2jf {
                                    height: 0
                                }

                                .evvN5c {
                                    visibility: hidden
                                }

                                .VqFMTc {
                                    background-color: #fff;
                                    color: #202124;
                                    display: inline-block;
                                    font-size: 14px;
                                    font-weight: bold;
                                    margin-left: 0px
                                }

                                .p8AiDd {
                                    padding: 0;
                                    margin-right: 0
                                }

                                .e1ycic {
                                    display: inline-block;
                                    margin: 0 3px;
                                    position: initial;
                                    width: 12px
                                }

                                .TxG06d {
                                    position: relative;
                                    top: 0px;
                                    left: 0px;
                                    cursor: pointer;
                                    display: inline-block
                                }

                                .YMEk9e,
                                .action-menu.YMEk9e {
                                    margin: 0 0px 0 0px;
                                    padding: 0px 0px 0px 0px
                                }

                                .e1ycic .k1sBMc {
                                    display: inline-block
                                }

                                .c0Xbsc,
                                .TTTqTe {
                                    vertical-align: middle
                                }

                                .c0Xbsc {
                                    margin-right: 7px
                                }

                                .NC2iFe {
                                    padding: 10px 0
                                }

                                g-dropdown-menu {
                                    display: inline-block;
                                    position: relative
                                }

                                .e7RZX {
                                    background-color: #fff
                                }

                                .EwsJzb {
                                    display: block;
                                    position: absolute
                                }

                                .rIbAWc {
                                    cursor: pointer;
                                    display: inline-block
                                }

                                .sAKBe {
                                    border-radius: 8px;
                                    box-shadow: 0 2px 10px 0 rgba(0, 0, 0, 0.2)
                                }

                                .C4eCVc .action-menu {
                                    line-height: 0
                                }

                                .C4eCVc .action-menu .mn-dwn-arw {
                                    border-color: #70757a transparent;
                                    margin-top: -4px;
                                    margin-top: -3px;
                                    top: 50%
                                }

                                .action-menu.YMEk9e {
                                    height: 12px;
                                    position: relative;
                                    vertical-align: middle
                                }

                                html:not(.zAoYTe) .hide-focus-ring {
                                    outline: 0
                                }

                                .gLSAk {
                                    border: none;
                                    display: block;
                                    outline: none;
                                }

                                .ErsxPb {
                                    display: block;
                                    position: relative
                                }

                                .znKVS {
                                    overflow: hidden;
                                    padding: 0 16px;
                                    text-overflow: ellipsis;
                                    vertical-align: middle;
                                    white-space: nowrap
                                }

                                .ErsxPb:hover {
                                    cursor: pointer
                                }

                                .ErsxPb,
                                .fbKdEb:hover {
                                    cursor: default
                                }

                                .znKVS {
                                    line-height: 23px
                                }

                                .gvybPb,
                                .ErsxPb:active {
                                    background-color: rgba(0, 0, 0, .1)
                                }

                                .ads-creative b {
                                    color: #5f6368
                                }

                                .St0YAf {
                                    margin: 0 -13px -2px 0;
                                    padding: 4px 0 3px 28px;
                                    width: 614px
                                }

                                .lG7WA>li,
                                .St0YAf>li {
                                    box-sizing: border-box;
                                    box-sizing: border-box;
                                    display: inline-block;
                                    padding: 0 13px 2px 0;
                                    vertical-align: top;
                                    width: 50%
                                }

                                .St0YAf {
                                    padding-top: 16px;
                                    padding-bottom: 4px;
                                    margin-bottom: -15px
                                }

                                .St0YAf>li {
                                    padding-bottom: 15px;
                                }

                                .lG7WA>li,
                                .St0YAf>li {
                                    line-height: inherit
                                }

                                .KLi8Vd {
                                    font-size: 20px
                                }

                                .IspyAe {
                                    color: rgba(0, 0, 0, .57);
                                    margin: 12px 20px;
                                    font-size: 14px
                                }

                                .VQ1yJb {
                                    box-shadow: 0 1px 2px rgba(0, 0, 0, .2);
                                    display: none;
                                    left: calc(100% + 64px);
                                    margin-top: 10px;
                                    top: 2px;
                                    opacity: 0;
                                    transition: all 150ms ease-in-out;
                                    transform-origin: top left;
                                    white-space: nowrap;
                                    border: 1px solid rgba(0, 0, 0, .13);
                                    border-radius: 2px
                                }

                                .qOrWEe {
                                    background-color: transparent;
                                    transform-origin: top
                                }

                                .f5ZhKb {
                                    display: inline-block;
                                    overflow-x: hidden;
                                    overflow-y: hidden;
                                    margin-left: -16px;
                                    padding-right: 24px;
                                    width: 100%;
                                    padding-left: 20px
                                }

                                .f5ZhKb::-webkit-scrollbar {
                                    display: none
                                }

                                .vA0x9b {
                                    background-image: url(data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2216px%22%20height%3D%2216px%22%20viewBox%3D%220%200%2048%2048%22%20fill%3D%22%23000000%22%3E%0D%0A%20%20%20%20%3Cpath%20d%3D%22M38%2012.83L35.17%2010%2024%2021.17%2012.83%2010%2010%2012.83%2021.17%2024%2010%2035.17%2012.83%2038%2024%2026.83%2035.17%2038%2038%2035.17%2026.83%2024z%22%2F%3E%0D%0A%20%20%20%20%3Cpath%20d%3D%22M0%200h48v48H0z%22%20fill%3D%22none%22%2F%3E%0D%0A%3C%2Fsvg%3E%0D%0A);
                                    background-repeat: no-repeat;
                                    background-position: center;
                                    position: absolute;
                                    right: 0;
                                    width: 16px;
                                    height: 16px;
                                    padding: 12px;
                                    z-index: 10;
                                    opacity: 0.54
                                }

                                .vA0x9b:focus {
                                    outline: none
                                }

                                .qOrWEe {
                                    padding-left: 15px
                                }

                                .VQ1yJb {
                                    box-shadow: none;
                                    margin-top: 8px;
                                    margin-left: -15px;
                                    margin-right: -15px
                                }

                                .f5ZhKb {
                                    line-height: 24px;
                                    margin-left: 0;
                                    overflow-x: hidden;
                                    padding-left: 0;
                                    padding-right: 0;
                                    white-space: normal;
                                    width: calc(100% - 24px)
                                }

                                .IspyAe {
                                    margin-bottom: 4px;
                                    margin-left: 0;
                                    margin-top: 14px
                                }

                                .f5ZhKb {
                                    white-space: nowrap
                                }

                                .g-blk {
                                    position: relative
                                }

                                .kp-blk a {
                                    text-decoration: none
                                }

                                .kp-blk .mod:first-child {
                                    padding-top: 16px;
                                    border-radius: 8px
                                }

                                .kp-blk .match-mod-horizontal-padding,
                                .kp-blk .mod:not(.NFQFxe) {
                                    padding-left: 16px;
                                    padding-right: 16px;
                                }

                                .kp-blk {
                                    box-shadow: none;
                                    border: 1px solid #dfe1e5;
                                    border-radius: 8px
                                }

                                #center_col .kp-blk {
                                    position: relative;
                                    width: 652px
                                }

                                .rfli .kp-blk {
                                    background: #fff;
                                    box-shadow: 0 3px 6px rgba(0, 0, 0, .16), 0 3px 6px rgba(0, 0, 0, .23)
                                }

                                .kp-blk .g:not(.g-blk) {
                                    margin: 0
                                }

                                .kp-blk>.vk_arc,
                                .kp-blk>div>.vk_arc {
                                    margin: 0
                                }

                                .kp-blk .g {
                                    margin-bottom: 0
                                }

                                .knowledge-panel.kp-blk .mod,
                                .c14z5c .mod {
                                    line-height: 1.58
                                }

                                .c2xzTb .g,
                                .c2xzTb .rc,
                                .ruTcId .rc {
                                    clear: both;
                                    padding-bottom: 0
                                }

                                .c2xzTb .mod,
                                .ruTcId .mod {
                                    clear: none
                                }

                                .c2xzTb .g,
                                .ruTcId .g,
                                .fm06If .g,
                                .cUnQKe .g,
                                .HanQmf .g {
                                    padding-left: 16px;
                                    padding-right: 16px
                                }

                                .c2xzTb .g:last-child,
                                .fm06If .g:last-child,
                                .cUnQKe .g:last-child {
                                    padding-bottom: 16px
                                }

                                .mod {
                                    clear: both
                                }

                                html .kp-blk .xpdclose .LKPcQc,
                                html .kp-blk .xpdopen .viOShc {
                                    padding-top: 0
                                }

                                .xpdclose .a84NUc:not(:empty),
                                .xpdopen .CQKTwc:not(:empty) {
                                    border-top: solid 1px #ebebeb;
                                    border-radius: 0
                                }

                                .xpdclose .oHglmf,
                                .xpdopen .xzPb7d {
                                    padding-bottom: 16px
                                }

                                .xpdclose .kp-header .oHglmf,
                                .xpdopen .kp-header .xzPb7d {
                                    padding-bottom: 0
                                }

                                .Wnoohf .xpdopen .yp1CPe,
                                .OJXvsb .xpdclose .siXlze {
                                    padding-bottom: 16px
                                }

                                .Wnoohf .xpdclose .mod.xsZWvb,
                                .Wnoohf .xpdopen .mod.EfDVh {
                                    padding-bottom: 0
                                }

                                .c2xzTb .iq-content-first .oHglmf,
                                .c2xzTb .iq-content-first .xzPb7d {
                                    padding-top: 0;
                                    padding-bottom: 16px
                                }

                                #rhs .kp-blk .xpdclose .LKPcQc,
                                #rhs .kp-blk .xpdopen .viOShc {
                                    padding-top: 0
                                }

                                #rhs .Wnoohf .xpdopen .yp1CPe,
                                #rhs .OJXvsb .xpdclose .siXlze {
                                    padding-bottom: 15px
                                }

                                #rhs .Wnoohf .xpdclose .mod.xsZWvb,
                                #rhs .Wnoohf .xpdopen .mod.EfDVh {
                                    padding-bottom: 0
                                }

                                #rhs .Wnoohf .xpdclose .mod.xsZWvb.ecRggb,
                                #rhs .Wnoohf .xpdopen .mod.EfDVh.ecRggb,
                                #rhs .kp-blk .ecRggb {
                                    padding-bottom: 15px
                                }

                                .ILfuVd {
                                    font-size: 16px;
                                    line-height: 1.375;
                                }

                                .fm06If .NA6bn,
                                .HSryR .NA6bn,
                                .c2xzTb .ILfuVd.duSGDe,
                                .c2xzTb .NA6bn.c3biWd {
                                    font-size: 14px;
                                    line-height: 1.58
                                }

                                .c2xzTb {
                                    overflow: hidden
                                }

                                .e24Kjd {
                                    padding: 0 8px 0 0
                                }

                                .LGOjhe {
                                    overflow: hidden;
                                    padding-bottom: 20px
                                }

                                .SALvLe .LGOjhe,
                                .Jb0Zif .LGOjhe,
                                .HSryR .LGOjhe,
                                .rhs-osrp .LGOjhe {
                                    padding: 0 0 10px;
                                    margin: 10px 0 0 0
                                }

                                #res .Jb0Zif .qDOt0b h3,
                                .rhs-osrp .qDOt0b h3 {
                                    font-size: 16px;
                                    line-height: 1.375
                                }

                                .Jb0Zif .qDOt0b .iUh30,
                                .rhs-osrp .qDOt0b .iUh30 {
                                    font-size: 14px;
                                    line-height: 1.58
                                }

                                #rhs .desktop-wa-xp-block .kp-blk .mod,
                                #rhs .desktop-wa-xp-block .kp-blk .mod:not(.NFQFxe) {
                                    padding: 0
                                }

                                .knowledge-panel .LjTgvd .LGOjhe,
                                .kp-blk .LjTgvd .LGOjhe {
                                    margin-left: -16px;
                                    margin-right: -16px
                                }

                                a:hover h3.LC20lb {
                                    text-decoration: underline
                                }

                                .LC20lb {
                                    display: inline-block;
                                    line-height: 1.3;
                                    margin-bottom: 3px
                                }

                                .DKV0Md {
                                    padding-top: 4px;
                                }

                                .TbwUpd {
                                    padding-bottom: 1px;
                                    padding-top: 1px;
                                    -webkit-text-size-adjust: none
                                }

                                .NJjxre {
                                    position: absolute;
                                    left: 0;
                                    top: 0
                                }

                                .eipWBe {
                                    color: #5f6368
                                }

                                .rhsvw .TieM1d .tjvcx,
                                .rhs-osrp .tjvcx,
                                .kno-kp .tjvcx,
                                #rhs .ss6qqb .tjvcx {
                                    display: inline-block;
                                    height: 17px;
                                    overflow-y: hidden
                                }

                                .B6fmyf {
                                    position: absolute;
                                    top: 0;
                                    height: 0;
                                    visibility: hidden;
                                    white-space: nowrap
                                }

                                .eFM0qc {
                                    display: inline-block;
                                    padding-bottom: 1px;
                                    padding-left: 2px;
                                    visibility: visible
                                }

                                div.iOWvff {
                                    float: right
                                }

                                .b3Ke9b {
                                    color: #9e9e9e;
                                    cursor: pointer;
                                    padding-right: 8px
                                }

                                .hELpae {
                                    color: #9e9e9e;
                                    float: right;
                                    font-size: 12px;
                                    line-height: 1.34
                                }

                                .kno-ftr {
                                    clear: both;
                                    color: #70757a;
                                    font-size: 12px;
                                    line-height: 1.34;
                                    overflow: hidden
                                }

                                .kno-ftr a {
                                    color: #70757a;
                                    text-decoration: none
                                }

                                .OwRFvb {
                                    float: right;
                                    margin-left: 2em
                                }

                                .kno-ftr a:hover {
                                    text-decoration: underline
                                }

                                div.VTZT1b {
                                    padding: 4px 16px 0 8px;
                                    margin-bottom: -4px
                                }

                                .kno-ftr {
                                    margin-left: 0px;
                                    margin-right: -52px;
                                    padding: 4px 16px 0;
                                }

                                .JolIg {
                                    color: #222;
                                    font-size: 20px;
                                    padding: 9px 16px;
                                    line-height: 1.3;
                                    font-weight: normal;
                                    margin: 0
                                }

                                .cbphWd {
                                    border-top: 1px solid #e5e5e5;
                                    cursor: pointer;
                                    display: block;
                                    font-size: 16px;
                                    padding-bottom: 9px;
                                    padding-top: 9px;
                                    position: relative;
                                    line-height: 1.58;
                                }

                                a.cbphWd {
                                    color: #222;
                                    text-decoration: none !important
                                }

                                .related-question-pair .kno-ftr {
                                    margin: 0;
                                    padding-top: 0
                                }

                                .cxrEAd,
                                .uKh9yc {
                                    display: block;
                                    opacity: 0;
                                    transform: scale(0);
                                    transition-property: border-width, opacity, transform
                                }

                                .uKh9yc {
                                    border: 10px solid transparent;
                                    margin: 0 auto
                                }

                                .gy6Qzb {
                                    transition: max-height 0.3s;
                                    overflow: hidden
                                }

                                .S8PBwe {
                                    max-height: 0;
                                    visibility: hidden
                                }

                                .vp45yf {
                                    pointer-events: none;
                                    position: absolute !important;
                                    right: 0;
                                    color: #70757A;
                                    top: 50%;
                                    margin-top: -12px
                                }

                                .mWyH1d {
                                    position: relative
                                }

                                html:not(.zAoYTe) .mWyH1d:focus {
                                    outline: 0
                                }
                            </style>
                            <div id="taw">
                                <div></div>
                                <div>
                                    <div class="med">
                                        <p class="gqLncc card-section" aria-level="3" role="heading"><span
                                                class="gL9Hy d2IKib">Did you mean:</span> <a class="gL9Hy"
                                                href="https://www.google.com/a=firefox-b-d&amp;q=does+norton+stop+hackers&amp;spell=1&amp;sa=X&amp;ved=2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8QBSgAegQIEBAm">does
                                                norton stop <b><i>hackers</i></b></a> </p>
                                    </div>
                                </div>
                                <div id="tvcap">
                                    <div class="qGXjvb" id="tads" aria-label="Ads" role="region"
                                        data-ved="2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8QGHoECBAQJw">
                                        <h1 class="bNg8Rb">Ads</h1>
                                        <script>(function () {
                                                var d = function (b) { this.g = b = b.url; var a = /[?&]dsh=1(&|$)/.test(b); this.i = !a && /[?&]ae=1(&|$)/.test(b); this.j = !a && /[?&]ae=2(&|$)/.test(b); if ((this.a = /[?&]adurl=([^&]*)/.exec(b)) && this.a[1]) { try { var c = decodeURIComponent(this.a[1]) } catch (g) { c = null } this.h = c } }, f = function (b, a) { return b.i && b.h || b.j ? 1 == a ? b.i ? b.h : e(b, "&dct=1") : 2 == a ? e(b, "&ri=2") : e(b, "&ri=16") : b.g }, e = function (b, a) { return b.a ? b.g.slice(0, b.a.index) + a + b.g.slice(b.a.index) : b.g + a }; var l = function (b, a) { this.a = b === h && a || ""; this.g = k }; l.prototype.i = !0; l.prototype.h = function () { return this.a.toString() }; var m = /^(?:(?:https?|mailto|ftp):|[^:/?#]*(?:[/?#]|$))/i, k = {}, h = {}; var n = /^((market|itms|intent|itms-appss):\/\/)/i; var p = function (b, a) { a instanceof l || a instanceof l || (a = "object" == typeof a && a.i ? a.h() : String(a), m.test(a) || (a = "about:invalid#zClosurez"), a = new l(h, a)); b.href = a instanceof l && a.constructor === l && a.g === k ? a.a : "type_error:SafeUrl" }; google.f.LmvwCb = function (b) { if (!b) return google.ml(Error("a"), !1), !0; var a = b.getAttribute("data-arwt"); if (a) { var c = b ? (c = b.getAttribute("data-ved")) ? "&ved=" + c : "" : ""; b.href = a + c } return !0 }; google.f.DfwaCb = function (b) { if (!b) return google.ml(Error("b"), !1), !0; if (b.hasAttribute("data-uch")) { if (b.hasAttribute("data-ohref")) var a = b.getAttribute("data-ohref"); else a = b.href, b.setAttribute("data-ohref", a); a = new d({ url: a }); if (a.i && a.h || a.j) a = navigator.sendBeacon ? navigator.sendBeacon(e(a, "&act=1&ri=1"), "") ? f(a, 1) : f(a, 2) : f(a, 0), a = a instanceof l || !n.test(a) ? a : new l(h, a), p(b, a) } else if (b.hasAttribute("data-sbv2")) { b.hasAttribute("data-ohref") ? p(b, b.getAttribute("data-ohref")) : b.setAttribute("data-ohref", b.href); var c = b.href, g = /[?&]adurl=([^&]+)/.exec(c); if (g && /[?&]ae=1(&|$)/.test(c)) try { a = { l: c + "&act=1", m: decodeURIComponent(g[1]) } } catch (q) { google.ml(Error("c`" + c), !1), a = null } else a = null; a && (navigator.sendBeacon ? navigator.sendBeacon(a.l + "&ri=1") ? p(b, a.m) : p(b, b.href + "&ri=2") : p(b, b.href + "&ri=16")) } return !0 }; google.f.bez1fd = google.f.LmvwCb;
                                            }).call(this);</script>
                                        <div class="C4eCVc c">
                                            <ol>
                                                <li class="ads-ad" data-bg="1" data-hveid="CBEQAA">
                                                    <div class="ad_cclk"><a style="display:none"
                                                            href="https://www.googleadservices.com/pagead/aclk?sa=L&amp;ai=DChcSEwjOqaKVktzpAhXWqJYKHa2aD18YABAAGgJ0bA&amp;ohost=www.google.com&amp;cid=CAASE-RoC-gKkJx9VIYosFC4daaTcWs&amp;sig=AOD64_3Xf9B6BNcAmDdLBA0Ufp1OtMRz8g&amp;q=&amp;ved=2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8Q0Qx6BAgREAE&amp;adurl="
                                                            id="n1s0p1c0"></a><a class="V0MxL"
                                                            href="https://buy-static.norton.com/norton/ps/bb/inhard/360/in_en_nort_NAV-1D-3D-5D.html"
                                                            id="vn1s0p1c0" onmousedown="return google.arwt(this)"
                                                            ontouchstart="return google.arwt(this)"
                                                            data-preconnect-urls="https://buy.norton.com/,http://clickserve.dartsearch.net/,https://buy-static.norton.com/"
                                                            data-prefetch-urls="https://buy-static.norton.com/norton/ps/bb/inhard/360/js/external-min.js?ckcachebust=1988b0504e8c866f3852d113a75ee1d6,https://nexus.ensighten.com/symantec/Bootstrap.js?ckcachebust=583089670"
                                                            jscontroller="obC14" jsaction="rcuQ6b:npT2md"
                                                            jsl="$t t-r1glFWqNI5A;$x 0;"><br>
                                                            <h3 class="sA5rQ">Norton™ Official Site – US | Now with
                                                                New Features‎</h3>
                                                            <div class="ads-visurl"><span class="VqFMTc p8AiDd">Ad<span
                                                                        style="padding:0 5px">·</span></span><cite
                                                                    class="UdQCqe">in.norton.com/official-site/US</cite>‎<span
                                                                    class="evvN5c"><span class="e1ycic"><span
                                                                            class="aii">
                                                                            <div class="action-menu YMEk9e TxG06d"><span
                                                                                    class="mn-dwn-arw"></span></div>
                                                                        </span></span></span></div>
                                                        </a>
                                                        <div class="nYN2jf ads-visurl"><span
                                                                class="evvN5c VqFMTc p8AiDd">Ad<span
                                                                    style="padding:0 5px">·</span></span><cite
                                                                class="UdQCqe evvN5c">in.norton.com/official-site/india</cite>‎<span><span
                                                                    class="e1ycic"><span id="aiis0" class="aii"
                                                                        data-async-context="wtad:Cq4CEAEYACgBmgEKbm9ydG9uLmNvbcIBCm5vcnRvbi5jb23qAdQBW251bGwsbnVsbCxudWxsLG51bGwsWzEsbnVsbCxbWyJpbi5ub3J0b24uY29tL29mZmljaWFsLXNpdGUvaW5kaWEiXQosIm5vcnRvbi5jb20iLCJub3J0b24uY29tIl0KLDIsbnVsbCxudWxsLG51bGwsbnVsbCxbWyIzNjQ1ODE1NTQ2MTciXQosWyIxNTkwODYwNzYyODc5MTgyIiwxNzc2NDU3ODIsMTU5NDg1ODE1N10KLCJkb2VzIG5vcnRvbiBzdG9wIGhhY2tlciJdCl0KXQqKAgJzMLAEAOoEK0RDaGNTRXdqT3FhS1ZrdHpwQWhYV3FKWUtIYTJhRDE4WUFCQUFHZ0owYkE%3D"
                                                                        data-async-trigger="wta_async_s0"
                                                                        jsdata="o12Rlf;;CDvW2Q" jscontroller="PekE8b"
                                                                        jsaction="rcuQ6b:npT2md;menu_item_selected:B2ovp"
                                                                        jsl="$t t-FcRZKOABPPk;$x 0;">
                                                                        <div jsname="v7hl4d" class="k1sBMc y yp"
                                                                            id="wta_async_s0" data-jiis="up"
                                                                            data-async-type="wta"
                                                                            data-async-context-required="wtad"
                                                                            data-ved="2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8Qqa8FegQIERAC">
                                                                        </div>
                                                                        <g-dropdown-menu jscontroller="DqdCgd"
                                                                            jsdata="xJGXK;;CDvW2U" jsshadow=""
                                                                            jsaction="rcuQ6b:npT2md;menu_item_selected:GKlhgf;g_popup_before_reposition:cCpuJc;dp_menu_reg_caption:bzkPEc;clear_menu_item:oyYkKb;g_popup_show:G8Ofmd;g_popup_hide:rWoVB;hide_popup:L76sMb;menu_close_button:L76sMb">
                                                                            <g-popup jsname="zpo2ue"
                                                                                jscontroller="NZI0Db"
                                                                                jsaction="A05xBd:IYtByb;"
                                                                                jsdata="mVjAjf;;CDvW2Y" id="ow21"
                                                                                __is_owner="true">
                                                                                <div jsname="oYxtQd"
                                                                                    class="rIbAWc hide-focus-ring"
                                                                                    jsslot="" aria-expanded="false"
                                                                                    aria-haspopup="true" role="button"
                                                                                    tabindex="0"
                                                                                    jsaction="WFrRFb;keydown:uYT2Vb">
                                                                                    <div class="YMEk9e action-menu TxG06d"
                                                                                        title="Why this ad?"
                                                                                        aria-label="Why this ad?"
                                                                                        role="button" tabindex="0"
                                                                                        data-ved="2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8QtpYBegQIERAD">
                                                                                        <span class="mn-dwn-arw"
                                                                                            id="zvzE9"></span></div>
                                                                                </div>
                                                                                <div jsname="V68bde"
                                                                                    class="EwsJzb sAKBe"
                                                                                    style="display:none;z-index:1"
                                                                                    jsowner="ow21">
                                                                                    <g-menu jsname="iXXGtd"
                                                                                        class="e7RZX gLSAk"
                                                                                        jscontroller="wQpTuc"
                                                                                        data-mh="-1" role="menu"
                                                                                        tabindex="-1"
                                                                                        jsaction="focus:h06R8;PSl28c;keydown:uYT2Vb;mouseenter:WOQqYb;mouseleave:Tx5Rb;mouseover:IgJl9c;rcuQ6b:npT2md"
                                                                                        data-ved="2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8Q0ZYBegQIERAE">
                                                                                        <g-menu-item jsname="NNJLud"
                                                                                            jscontroller="qjr3nc"
                                                                                            class="ErsxPb hide-focus-ring"
                                                                                            role="menuitem" tabindex="0"
                                                                                            data-short-label=""
                                                                                            jsdata="zPXzie;;CDvW2c"
                                                                                            jsaction="rcuQ6b:npT2md"
                                                                                            data-ved="2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8QqZsFegQIERAF">
                                                                                            <div jsname="ibnC6b"
                                                                                                class="znKVS">
                                                                                                <div class="NC2iFe">
                                                                                                    <span
                                                                                                        class="c0Xbsc z1asCe A2gxLb"
                                                                                                        style="height:22px;line-height:22px;width:22px"><svg
                                                                                                            focusable="false"
                                                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                                                            viewBox="0 0 24 24">
                                                                                                            <path
                                                                                                                d="M11 18h2v-2h-2v2zm1-16C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm0-14c-2.21 0-4 1.79-4 4h2c0-1.1.9-2 2-2s2 .9 2 2c0 2-3 1.75-3 5h2c0-2.25 3-2.5 3-5 0-2.21-1.79-4-4-4z">
                                                                                                            </path>
                                                                                                        </svg></span><span
                                                                                                        class="TTTqTe">Why
                                                                                                        this ad?</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </g-menu-item>
                                                                                    </g-menu>
                                                                                </div>
                                                                            </g-popup>
                                                                        </g-dropdown-menu>
                                                                    </span></span></span></div>
                                                    </div>
                                                    <div class="ads-creative">Real-time
                                                        Threat Protection, Password Manager, Firewall for PC or Mac®
                                                        &amp;
                                                        More. Powerful Protection for Your Devices and All Their
                                                        Content.
                                                        Download It Today! 43% off <b>Norton</b>™ 360. Pay By Net
                                                        Banking. Top Antivirus in India. <b>Norton</b>™ 360. 100% Money
                                                        Back Guarantee.</div>
                                                    <ul class="St0YAf">
                                                        <li>
                                                            <h3><a class="V0MxL KLi8Vd"
                                                                    data-arwt="//www.googleadservices.com/pagead/aclk?sa=L&amp;ai=DChcSEwjOqaKVktzpAhXWqJYKHa2aD18YABABGgJ0bA&amp;ohost=www.google.com&amp;cid=CAASE-RoC-gKkJx9VIYosFC4daaTcWs&amp;sig=AOD64_3YP6eqkd_ENSKDZrUbXOo32w5OQw&amp;adurl=&amp;q="
                                                                    data-mousedown="LmvwCb" data-touchstart="bez1fd"
                                                                    data-uch="1"
                                                                    onmousedown="return google.f[this.getAttribute('data-mousedown')](this)"
                                                                    ontouchstart="return google.f[this.getAttribute('data-touchstart')](this)"
                                                                    href="https://buy.norton.com/ps_ant_super?lp=/bb/inhard/360/in_en_nort_NAV-1D-3D-5D.html"
                                                                    data-ved="2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8QqyQoAHoECBEQBw">Norton™
                                                                    2020 Products</a></h3>
                                                            <div class="F95vTc oW7EFd">Now it Comes with Additional
                                                                Safety<br>Features. More Info Visit Now!</div>
                                                        </li>
                                                        <li>
                                                            <h3><a class="V0MxL KLi8Vd"
                                                                    data-arwt="//www.googleadservices.com/pagead/aclk?sa=L&amp;ai=DChcSEwjOqaKVktzpAhXWqJYKHa2aD18YABACGgJ0bA&amp;ohost=www.google.com&amp;cid=CAASE-RoC-gKkJx9VIYosFC4daaTcWs&amp;sig=AOD64_0gt7_dHBLdy_mfSPZy7Q24IFYvGg&amp;adurl=&amp;q="
                                                                    data-mousedown="LmvwCb" data-touchstart="bez1fd"
                                                                    data-uch="1"
                                                                    onmousedown="return google.f[this.getAttribute('data-mousedown')](this)"
                                                                    ontouchstart="return google.f[this.getAttribute('data-touchstart')](this)"
                                                                    href="https://buy.norton.com/ps_ant_nortoncom_super?lp=mobile-security-for-android&amp;nortoncountry=in"
                                                                    data-ved="2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8QqyQoAXoECBEQCA">Norton™
                                                                    Mobile Security</a></h3>
                                                            <div class="F95vTc oW7EFd">Powerful Mobile Protection for
                                                                You.<br>Protect Yourself - Download Today!</div>
                                                        </li>
                                                    </ul>
                                                    <div jscontroller="zUPIy" data-counterfactual-logging="false"
                                                        data-max-timing="2500"
                                                        data-new-base-uri="/a=firefox-b-d"
                                                        data-num-query-columns="2" data-result-index="1"
                                                        jsaction="rcuQ6b:npT2md">
                                                        <div jsname="UTgHCf" class="VQ1yJb" id="aobm_1"
                                                            data-ved="2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8QmYICegQIERAJ">
                                                            <div jsname="d3PE6e" id="aobd_1" style="display:none">
                                                                <div
                                                                    data-ved="2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8QmoICKAB6BAgREAo">
                                                                    norton antivirus</div>
                                                                <div
                                                                    data-ved="2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8QmoICKAF6BAgREAs">
                                                                    does norton protect from malware</div>
                                                                <div
                                                                    data-ved="2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8QmoICKAJ6BAgREAw">
                                                                    norton hack</div>
                                                                <div
                                                                    data-ved="2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8QmoICKAN6BAgREA0">
                                                                    how to prevent hackers from stealing information
                                                                </div>
                                                                <div
                                                                    data-ved="2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8QmoICKAR6BAgREA4">
                                                                    does mcafee protect against hackers</div>
                                                                <div
                                                                    data-ved="2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8QmoICKAV6BAgREA8">
                                                                    norton 360</div>
                                                                <div
                                                                    data-ved="2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8QmoICKAZ6BAgREBA">
                                                                    hacker protection</div>
                                                                <div
                                                                    data-ved="2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8QmoICKAd6BAgREBE">
                                                                    how can you prevent malware from being used to steal
                                                                    your password</div>
                                                            </div><span jsname="ZnuYW" class="vA0x9b" id="aobs_1"
                                                                aria-label="Dismiss suggested follow ups" role="button"
                                                                tabindex="0" jsaction="ornU0b"></span>
                                                            <div>
                                                                <div jsname="l1CLDf" class="qOrWEe">
                                                                    <h4 jsname="IaVMje" class="IspyAe" id="aobp_1">
                                                                        People also search for</h4>
                                                                    <div jsname="CeevUc" class="f5ZhKb" id="aobr_1">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                                <script data-u="https://www.googleadservices.com/" jscontroller="khSAxb"
                                    nonce="T/1dJyC0GxsSMWP7nSTknQ==" jsaction="rcuQ6b:npT2md"
                                    jsl="$t t-IbpwSJ5oNyI;$x 0;"></script>
                            </div>
                            <div class="med" id="res" role="main">
                                <div id="topstuff"></div>
                                <div id="search">
                                    <div data-ved="2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8QGnoECBAQKQ">
                                        <!--a-->
                                        <h1 class="bNg8Rb">Search Results</h1>
                                        <div eid="abc"
                                            data-async-context="query:does%20norton%20stop%20hacker" id="rso">
                                            <div class="g mnr-c g-blk" data-hveid="CAsQAA"
                                                data-ved="2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8QjDYoAHoECAsQAA" lang="en-IN">
                                                <div class="kp-blk c2xzTb Wnoohf OJXvsb">
                                                    <div class="xpdopen">
                                                        <div class="ifM9O">
                                                            <h2 class="bNg8Rb">Featured snippet from the web</h2>
                                                            <div>
                                                                <div class="mod" data-md="61" style="clear:none"
                                                                    lang="en-IN">
                                                                    <!--m-->
                                                                    <div aria-level="3" class="LGOjhe" role="heading"
                                                                        data-attrid="wa:/description"
                                                                        data-hveid="CAsQAQ"><span class="ILfuVd"><span
                                                                                class="e24Kjd"><b>Norton</b> Antivirus
                                                                                <b>stops hackers</b> in some ways, but
                                                                                it doesn't provide complete protection
                                                                                from <b>hackers</b>. <b>Norton</b>
                                                                                Antivirus is able to protect your
                                                                                computer from many of the tools
                                                                                <b>hackers</b> use to infiltrate your
                                                                                computer, but the program that keeps
                                                                                <b>hackers</b> from directly getting in
                                                                                to your computer is called a
                                                                                firewall.</span></span></div>
                                                                    <!--n-->
                                                                </div>
                                                                <div class="g">
                                                                    <!--m-->
                                                                    <div class="rc" data-hveid="CAsQAg"
                                                                        data-ved="2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8QFSgBMAF6BAgLEAI">
                                                                        <div class="r"><a
                                                                                href="https://smallbusiness.chron.com/norton-antivirus-stop-hackers-62465.html"
                                                                                onmousedown="return rwt(this,'','','','','AOvVaw3mAm9eTpsWRSEYnpZlftqt','','2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8QFjABegQICxAD','','',event)"><br>
                                                                                <h3 class="LC20lb DKV0Md">Does Norton
                                                                                    Antivirus Stop Hackers? | Small
                                                                                    Business ...</h3>
                                                                                <div class="TbwUpd NJjxre"><cite
                                                                                        class="iUh30 bc tjvcx">smallbusiness.chron.com<span
                                                                                            class="eipWBe"> › ... ›
                                                                                            Social Security
                                                                                            Numbers</span></cite></div>
                                                                            </a>
                                                                            <div class="B6fmyf">
                                                                                <div class="TbwUpd"><cite
                                                                                        class="iUh30 bc tjvcx">smallbusiness.chron.com<span
                                                                                            class="eipWBe"> › ... ›
                                                                                            Social Security
                                                                                            Numbers</span></cite></div>
                                                                                <div class="eFM0qc"><span>
                                                                                        <div class="action-menu"><a
                                                                                                class="GHDvEf" href="#"
                                                                                                id="am-b1"
                                                                                                aria-label="Result options"
                                                                                                aria-expanded="false"
                                                                                                aria-haspopup="true"
                                                                                                role="button"
                                                                                                jsaction="m.tdd;keydown:m.hbke;keypress:m.mskpe"
                                                                                                data-ved="2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8Q7B0wAXoECAsQCA"><span
                                                                                                    class="mn-dwn-arw"></span></a>
                                                                                            <ol class="action-menu-panel"
                                                                                                role="menu"
                                                                                                tabindex="-1"
                                                                                                jsaction="keydown:m.hdke;mouseover:m.hdhne;mouseout:m.hdhue"
                                                                                                data-ved="2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8QqR8wAXoECAsQCQ">
                                                                                                <li class="action-menu-item"
                                                                                                    role="menuitem"><a
                                                                                                        class="fl"
                                                                                                        href="https://webcache.googleusercontent.com/search?q=cache:HOtbnJt5YoAJ:https://smallbusiness.chron.com/norton-antivirus-stop-hackers-62465.html+&amp;cd=2&amp;hl=en&amp;ct=clnk&amp;gl=in&amp;client=firefox-b-d"
                                                                                                        onmousedown="return rwt(this,'','','','','AOvVaw1jjmNJB4mb1Xa7kqnKRx1J','','2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8QIDABegQICxAK','','',event)">Cached</a>
                                                                                                </li>
                                                                                            </ol>
                                                                                        </div>
                                                                                    </span></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="s">
                                                                            <div><span class="st"></span></div>
                                                                        </div>
                                                                    </div>
                                                                    <!--n-->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div style="clear:both"></div>
                                                    </div>
                                                </div>
                                                <div class="AuP6le VTZT1b kno-ftr">
                                                    <div class="OwRFvb kno-fb">
                                                        <div
                                                            data-async-context="async_id:duf3-1-0;authority:0;card_id:;entry_point:0;feature_id:;ftoe:0;header:0;is_jobs_spam_form:0;open:0;preselect_answer_index:-1;suggestions:;suggestions_subtypes:;suggestions_types:;surface:0;title:;type:1">
                                                            <div jscontroller="xz7cCd" style="display:none"
                                                                jsaction="rcuQ6b:npT2md"></div>
                                                            <div id="duf3-1-0" data-jiis="up" data-async-type="duffy3"
                                                                data-async-context-required="type,open,feature_id,async_id,entry_point,authority,card_id,ftoe,title,header,suggestions,surface,suggestions_types,suggestions_subtypes,preselect_answer_index,is_jobs_spam_form"
                                                                class="y yp"
                                                                data-ved="2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8Q-0F6BAgLEAs">
                                                            </div><span><span class="RTZ84b z1asCe Msi2Rc"
                                                                    data-async-trigger="duf3-1-0" role="link"
                                                                    tabindex="-1" jsaction="async.u"
                                                                    style="height:14px;line-height:14px;width:14px"
                                                                    data-ved="2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8Qtw96BAgLEAw"><svg
                                                                        focusable="false"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        viewBox="0 0 24 24">
                                                                        <path
                                                                            d="M20 2H4c-1.1 0-1.99.9-1.99 2L2 22l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm-7 9h-2V5h2v6zm0 4h-2v-2h2v2z">
                                                                        </path>
                                                                    </svg></span><a class="XEKxtf" href="#"
                                                                    data-async-trigger="duf3-1-0" jsaction="async.u"
                                                                    data-ved="2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8Qtw96BAgLEA0">Feedback</a></span>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="iOWvff"><a
                                                                href="https://www.google.com/url?url=https://support.google.com/websearch?p%3Dfeatured_snippets%26hl%3Den-IN&amp;rct=j&amp;q=&amp;esrc=s&amp;usg=AOvVaw1vZKUsZLL2lq4flgrOD_cS&amp;hl=en-IN&amp;sa=X&amp;ved=2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8QrpwBegQICxAO"
                                                                tabindex="-1"><span class="b3Ke9b z1asCe JrWGoc"
                                                                    style="height:16px;line-height:16px;width:16px"><svg
                                                                        focusable="false"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        viewBox="0 0 24 24">
                                                                        <path
                                                                            d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 17h-2v-2h2v2zm2.07-7.75l-.9.92C13.45 12.9 13 13.5 13 15h-2v-.5c0-1.1.45-2.1 1.17-2.83l1.24-1.26c.37-.36.59-.86.59-1.41 0-1.1-.9-2-2-2s-2 .9-2 2H8c0-2.21 1.79-4 4-4s4 1.79 4 4c0 .88-.36 1.68-.93 2.25z">
                                                                        </path>
                                                                    </svg></span></a><span class="hELpae"><a
                                                                    href="https://www.google.com/url?url=https://support.google.com/websearch?p%3Dfeatured_snippets%26hl%3Den-IN&amp;rct=j&amp;q=&amp;esrc=s&amp;usg=AOvVaw1vZKUsZLL2lq4flgrOD_cS&amp;hl=en-IN&amp;sa=X&amp;ved=2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8QrpwBegQICxAP">About
                                                                    Featured Snippets</a></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="g kno-kp mnr-c g-blk" data-hveid="CA0QAA"
                                                data-ved="2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8QuU4oAHoECA0QAA">
                                                <div class="kp-blk cUnQKe Wnoohf OJXvsb">
                                                    <div class="xpdopen">
                                                        <div class="ifM9O">
                                                            <h2 class="JolIg i8lZMc">People also ask</h2>
                                                            <div jscontroller="xj7LNb" class="feCgPc q1kEvb vsXRLb y yf"
                                                                jsaction="ac_bc:NlNJyb;ac_be:o7YQ2"
                                                                data-cs="OeMST8lPLVbIyy8qyc9TKC7JL1DISEzOTi0SMnABSSTmlWSWZRaVFisU56eVlCcWpSoUFOWXpCaXKCSmJ2bmFZdA1RfbC0mDdaRlFqWWJ-bkIBsGlJQES_pB7EnKyU_OVghPTUpOzLUXUgrPSCxRSEGSD4BaEZlfquBWlJ9rr8RxIrTN8U_WtXIDFg-GAIZEBiioYAAA"
                                                                data-mqac="0" id="_abc29"
                                                                data-jiis="up" data-async-type="rq"
                                                                data-async-context-required="q,state"
                                                                data-async-rclass="search"
                                                                data-ved="2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8QqrkBKAB6BAgNEAE">
                                                                <div decode-data-ved="1" eid="abc"
                                                                    class="related-question-pair"
                                                                    data-ved="2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8Qq7kBKAB6BAgNEAI">
                                                                    <g-accordion-expander jscontroller="XMgU6d"
                                                                        jsshadow=""
                                                                        jsaction="ac_ar:y3EGVb;b_cs:XyzvNd;rcuQ6b:npT2md">
                                                                        <div jsname="ARU61" class="mWyH1d UgLoB"
                                                                            aria-controls="_abc30"
                                                                            aria-expanded="false"
                                                                            id="_abc31" jsslot=""
                                                                            role="button" tabindex="0"
                                                                            jsaction="CQwlrf;fastbutton:CQwlrf"><span
                                                                                class="vp45yf z1asCe bjaP2b"
                                                                                style="right:16px"><svg
                                                                                    focusable="false"
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    viewBox="0 0 24 24">
                                                                                    <path
                                                                                        d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z">
                                                                                    </path>
                                                                                </svg></span>
                                                                            <div style="padding-right:40px"
                                                                                jsname="xXq91c"
                                                                                class="match-mod-horizontal-padding hide-focus-ring cbphWd"
                                                                                data-kt="KjGT6dvywNzb0oUB7fPS5uzQyq8z_fv714jy8tC_Ac3e3-Hc24bGoQGc1u_iubOesYAB"
                                                                                data-hveid="CA0QAw"
                                                                                data-ved="2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8Quk4oAHoECA0QAw">
                                                                                Does antivirus software protect against
                                                                                hackers?</div>
                                                                        </div>
                                                                        <div jsname="dcydfb" class="gy6Qzb S8PBwe"
                                                                            aria-labelledby="_abc31"
                                                                            id="_abc30" jsslot=""
                                                                            jsaction="CQwlrf;fastbutton:CQwlrf"
                                                                            style="max-height: 0px;">
                                                                            <div>
                                                                                <div jsname="oQYOj"
                                                                                    id="_abc32"
                                                                                    data-hveid="CA0QBA"
                                                                                    data-ved="2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8Qu04oAXoECA0QBA">
                                                                                    <div class="mod" data-md="61"
                                                                                        style="clear:none">
                                                                                        <!--m-->
                                                                                        <div aria-level="3"
                                                                                            class="LGOjhe"
                                                                                            role="heading"
                                                                                            data-attrid="wa:/description"
                                                                                            data-hveid="CA0QBQ"><span
                                                                                                class="ILfuVd NA6bn"><span
                                                                                                    class="e24Kjd">Yes
                                                                                                    <b>antivirus</b> and
                                                                                                    firewall both
                                                                                                    <b>protect against
                                                                                                        hackers</b> but
                                                                                                    it is also true that
                                                                                                    they are not fully
                                                                                                    capable of
                                                                                                    <b>protecting</b>
                                                                                                    system. <b>Antivirus
                                                                                                        programs</b> are
                                                                                                    mainly used for
                                                                                                    removing virus and
                                                                                                    worms but they are
                                                                                                    not capable for
                                                                                                    <b>protecting
                                                                                                        against</b> the
                                                                                                    <b>hacker</b>.</span></span>
                                                                                        </div>
                                                                                        <!--n-->
                                                                                    </div>
                                                                                    <div class="g">
                                                                                        <!--m-->
                                                                                        <div class="rc"
                                                                                            data-hveid="CA0QBg"
                                                                                            data-ved="2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8QFSgBMAN6BAgNEAY">
                                                                                            <div class="r"><a
                                                                                                    href="https://www.quora.com/Do-antivirus-programs-or-firewalls-protect-against-hackers"
                                                                                                    onmousedown="return rwt(this,'','','','','AOvVaw3BbHpkJMGB6nCRcOMlwfKo','','2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8QFjADegQIDRAH','','',event)"><br>
                                                                                                    <h3
                                                                                                        class="LC20lb DKV0Md">
                                                                                                        Do antivirus
                                                                                                        programs or
                                                                                                        firewalls
                                                                                                        protect against
                                                                                                        hackers? - Quora
                                                                                                    </h3>
                                                                                                    <div
                                                                                                        class="TbwUpd NJjxre">
                                                                                                        <cite
                                                                                                            class="iUh30 bc tjvcx">www.quora.com<span
                                                                                                                class="eipWBe">
                                                                                                                ›
                                                                                                                Do-antivirus-programs-or-firewalls-pr...</span></cite>
                                                                                                    </div>
                                                                                                </a>
                                                                                                <div class="B6fmyf">
                                                                                                    <div class="TbwUpd">
                                                                                                        <cite
                                                                                                            class="iUh30 bc tjvcx">www.quora.com<span
                                                                                                                class="eipWBe">
                                                                                                                ›
                                                                                                                Do-antivirus-programs-or-firewalls-pr...</span></cite>
                                                                                                    </div>
                                                                                                    <div class="eFM0qc">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="s">
                                                                                                <div><span
                                                                                                        class="st"></span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <!--n-->
                                                                                    </div>
                                                                                    <div
                                                                                        class="iOBnre match-mod-horizontal-padding">
                                                                                        Search for: <a
                                                                                            href="https://www.google.com/a=firefox-b-d&amp;q=Does+antivirus+software+protect+against+hackers%3F&amp;sa=X&amp;ved=2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8Qzmd6BAgNEAs">Does
                                                                                            antivirus software protect
                                                                                            against hackers?</a></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </g-accordion-expander>
                                                                </div>
                                                                <div decode-data-ved="1" eid="abc"
                                                                    class="related-question-pair"
                                                                    data-ved="2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8Qq7kBKAF6BAgNEAw">
                                                                    <g-accordion-expander jscontroller="XMgU6d"
                                                                        jsshadow=""
                                                                        jsaction="ac_ar:y3EGVb;b_cs:XyzvNd;rcuQ6b:npT2md">
                                                                        <div jsname="ARU61" class="mWyH1d UgLoB"
                                                                            aria-controls="_abc36"
                                                                            aria-expanded="false"
                                                                            id="_abc37" jsslot=""
                                                                            role="button" tabindex="0"
                                                                            jsaction="CQwlrf;fastbutton:CQwlrf"><span
                                                                                class="vp45yf z1asCe bjaP2b"
                                                                                style="right:16px"><svg
                                                                                    focusable="false"
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    viewBox="0 0 24 24">
                                                                                    <path
                                                                                        d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z">
                                                                                    </path>
                                                                                </svg></span>
                                                                            <div style="padding-right:40px"
                                                                                jsname="xXq91c"
                                                                                class="match-mod-horizontal-padding hide-focus-ring cbphWd"
                                                                                data-kt="KjCnkt6K5Zj3yBn9mZqKo9a73PkB7fPS5uzQyq8ztuTv2PfqstDOAf37-9eI8vLQvwE"
                                                                                data-hveid="CA0QDQ"
                                                                                data-ved="2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8Quk4oAHoECA0QDQ">
                                                                                Does firewall stop hackers?</div>
                                                                        </div>
                                                                        <div jsname="dcydfb" class="gy6Qzb S8PBwe"
                                                                            aria-labelledby="_abc37"
                                                                            id="_abc36" jsslot=""
                                                                            jsaction="CQwlrf;fastbutton:CQwlrf"
                                                                            style="max-height: 0px;">
                                                                            <div>
                                                                                <div jsname="oQYOj"
                                                                                    id="_abc38"
                                                                                    data-hveid="CA0QDg"
                                                                                    data-ved="2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8Qu04oAXoECA0QDg">
                                                                                    <div class="mod" data-md="61"
                                                                                        style="clear:none">
                                                                                        <!--m-->
                                                                                        <div aria-level="3"
                                                                                            class="LGOjhe"
                                                                                            role="heading"
                                                                                            data-attrid="wa:/description"
                                                                                            data-hveid="CA0QDw"><span
                                                                                                class="ILfuVd NA6bn"><span
                                                                                                    class="e24Kjd"><b>Firewalls
                                                                                                        block</b> all
                                                                                                    unauthorized
                                                                                                    connections to your
                                                                                                    computer (including
                                                                                                    those of
                                                                                                    <b>hackers</b>
                                                                                                    who are trying to
                                                                                                    steal your data) and
                                                                                                    even let you select
                                                                                                    which
                                                                                                    programs can access
                                                                                                    the internet so that
                                                                                                    you're never
                                                                                                    connected
                                                                                                    unknowingly.</span></span>
                                                                                        </div>
                                                                                        <!--n-->
                                                                                    </div>
                                                                                    <div class="g">
                                                                                        <!--m-->
                                                                                        <div class="rc"
                                                                                            data-hveid="CA0QEA"
                                                                                            data-ved="2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8QFSgBMAV6BAgNEBA">
                                                                                            <div class="r"><a
                                                                                                    href="https://www.avast.com/f-firewall"
                                                                                                    onmousedown="return rwt(this,'','','','','AOvVaw3MzjyETuSSsakVXpDVAmsX','','2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8QFjAFegQIDRAR','','',event)"><br>
                                                                                                    <h3
                                                                                                        class="LC20lb DKV0Md">
                                                                                                        Firewall | Stop
                                                                                                        hacker's access
                                                                                                        to your PC |
                                                                                                        Avast</h3>
                                                                                                    <div
                                                                                                        class="TbwUpd NJjxre">
                                                                                                        <cite
                                                                                                            class="iUh30 bc tjvcx">www.avast.com<span
                                                                                                                class="eipWBe">
                                                                                                                ›
                                                                                                                f-firewall</span></cite>
                                                                                                    </div>
                                                                                                </a>
                                                                                                <div class="B6fmyf">
                                                                                                    <div class="TbwUpd">
                                                                                                        <cite
                                                                                                            class="iUh30 bc tjvcx">www.avast.com<span
                                                                                                                class="eipWBe">
                                                                                                                ›
                                                                                                                f-firewall</span></cite>
                                                                                                    </div>
                                                                                                    <div class="eFM0qc">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="s">
                                                                                                <div><span
                                                                                                        class="st"></span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <!--n-->
                                                                                    </div>
                                                                                    <div
                                                                                        class="iOBnre match-mod-horizontal-padding">
                                                                                        Search for: <a
                                                                                            href="https://www.google.com/a=firefox-b-d&amp;q=Does+firewall+stop+hackers%3F&amp;sa=X&amp;ved=2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8Qzmd6BAgNEBU">Does
                                                                                            firewall stop hackers?</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </g-accordion-expander>
                                                                </div>
                                                                <div decode-data-ved="1" eid="abc"
                                                                    class="related-question-pair"
                                                                    data-ved="2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8Qq7kBKAJ6BAgNEBY">
                                                                    <g-accordion-expander jscontroller="XMgU6d"
                                                                        jsshadow=""
                                                                        jsaction="ac_ar:y3EGVb;b_cs:XyzvNd;rcuQ6b:npT2md">
                                                                        <div jsname="ARU61" class="mWyH1d UgLoB"
                                                                            aria-controls="_abc41"
                                                                            aria-expanded="false"
                                                                            id="_abc42" jsslot=""
                                                                            role="button" tabindex="0"
                                                                            jsaction="CQwlrf;fastbutton:CQwlrf"><span
                                                                                class="vp45yf z1asCe bjaP2b"
                                                                                style="right:16px"><svg
                                                                                    focusable="false"
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    viewBox="0 0 24 24">
                                                                                    <path
                                                                                        d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z">
                                                                                    </path>
                                                                                </svg></span>
                                                                            <div style="padding-right:40px"
                                                                                jsname="xXq91c"
                                                                                class="match-mod-horizontal-padding hide-focus-ring cbphWd"
                                                                                data-kt="Ki-_xLnpyNuXzP4Bgobu4unDrfBnmsjKoZ-84-Zz7PW3yev1-bieAbTq5dmNj9qefg"
                                                                                data-hveid="CA0QFw"
                                                                                data-ved="2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8Quk4oAHoECA0QFw">
                                                                                Does Norton block Webcam?</div>
                                                                        </div>
                                                                        <div jsname="dcydfb" class="gy6Qzb S8PBwe"
                                                                            aria-labelledby="_abc42"
                                                                            id="_abc41" jsslot=""
                                                                            jsaction="CQwlrf;fastbutton:CQwlrf"
                                                                            style="max-height: 0px;">
                                                                            <div>
                                                                                <div jsname="oQYOj"
                                                                                    id="_abc43"
                                                                                    data-hveid="CA0QGA"
                                                                                    data-ved="2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8Qu04oAXoECA0QGA">
                                                                                    <div class="mod" data-md="61"
                                                                                        style="clear:none">
                                                                                        <!--m-->
                                                                                        <div aria-level="3"
                                                                                            class="LGOjhe"
                                                                                            role="heading"
                                                                                            data-attrid="wa:/description"
                                                                                            data-hveid="CA0QGQ"><span
                                                                                                class="ILfuVd NA6bn"><span
                                                                                                    class="e24Kjd"><b>Norton</b>
                                                                                                    SafeCam enables you
                                                                                                    to be secure when
                                                                                                    you use
                                                                                                    <b>webcam</b>
                                                                                                    devices on the
                                                                                                    Internet. It
                                                                                                    prevents
                                                                                                    applications and
                                                                                                    malware from
                                                                                                    accessing your
                                                                                                    computer's
                                                                                                    <b>webcam</b>
                                                                                                    without your
                                                                                                    consent. ... You
                                                                                                    have the option to
                                                                                                    then allow or
                                                                                                    <b>block</b> access
                                                                                                    to the
                                                                                                    application.</span></span>
                                                                                        </div>
                                                                                        <!--n-->
                                                                                    </div>
                                                                                    <div class="g">
                                                                                        <!--m-->
                                                                                        <div class="rc"
                                                                                            data-hveid="CA0QGg"
                                                                                            data-ved="2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8QFSgBMAd6BAgNEBo">
                                                                                            <div class="r"><a
                                                                                                    href="https://support.norton.com/sp/en/us/home/current/solutions/v126148153"
                                                                                                    onmousedown="return rwt(this,'','','','','AOvVaw3ILWFgU4LsvLIXJ4nQQfeE','','2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8QFjAHegQIDRAb','','',event)"><br>
                                                                                                    <h3
                                                                                                        class="LC20lb DKV0Md">
                                                                                                        Norton SafeCam -
                                                                                                        Norton Support
                                                                                                    </h3>
                                                                                                    <div
                                                                                                        class="TbwUpd NJjxre">
                                                                                                        <cite
                                                                                                            class="iUh30 bc tjvcx">support.norton.com<span
                                                                                                                class="eipWBe">
                                                                                                                › home ›
                                                                                                                current
                                                                                                                ›
                                                                                                                solutions</span></cite>
                                                                                                    </div>
                                                                                                </a>
                                                                                                <div class="B6fmyf">
                                                                                                    <div class="TbwUpd">
                                                                                                        <cite
                                                                                                            class="iUh30 bc tjvcx">support.norton.com<span
                                                                                                                class="eipWBe">
                                                                                                                › home ›
                                                                                                                current
                                                                                                                ›
                                                                                                                solutions</span></cite>
                                                                                                    </div>
                                                                                                    <div class="eFM0qc">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="s">
                                                                                                <div><span
                                                                                                        class="st"></span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <!--n-->
                                                                                    </div>
                                                                                    <div
                                                                                        class="iOBnre match-mod-horizontal-padding">
                                                                                        Search for: <a
                                                                                            href="https://www.google.com/a=firefox-b-d&amp;q=Does+Norton+block+Webcam%3F&amp;sa=X&amp;ved=2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8Qzmd6BAgNEB8">Does
                                                                                            Norton block Webcam?</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </g-accordion-expander>
                                                                </div>
                                                                <div decode-data-ved="1" eid="abc"
                                                                    class="related-question-pair"
                                                                    data-ved="2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8Qq7kBKAN6BAgNECA">
                                                                    <g-accordion-expander jscontroller="XMgU6d"
                                                                        jsshadow=""
                                                                        jsaction="ac_ar:y3EGVb;b_cs:XyzvNd;rcuQ6b:npT2md">
                                                                        <div jsname="ARU61" class="mWyH1d UgLoB"
                                                                            aria-controls="_abc46"
                                                                            aria-expanded="false"
                                                                            id="_abc47" jsslot=""
                                                                            role="button" tabindex="0"
                                                                            jsaction="CQwlrf;fastbutton:CQwlrf"><span
                                                                                class="vp45yf z1asCe bjaP2b"
                                                                                style="right:16px"><svg
                                                                                    focusable="false"
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    viewBox="0 0 24 24">
                                                                                    <path
                                                                                        d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z">
                                                                                    </path>
                                                                                </svg></span>
                                                                            <div style="padding-right:40px"
                                                                                jsname="xXq91c"
                                                                                class="match-mod-horizontal-padding hide-focus-ring cbphWd"
                                                                                data-kt="Ki_elrz-p7e5-kGZtsHjkfnq4XOh0MqXifaqxYsB68qkp97MgYOUAcmV55Df2NriRA"
                                                                                data-hveid="CA0QIQ"
                                                                                data-ved="2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8Quk4oAHoECA0QIQ">
                                                                                What does Norton Protect You From?</div>
                                                                        </div>
                                                                        <div jsname="dcydfb" class="gy6Qzb S8PBwe"
                                                                            aria-labelledby="_abc47"
                                                                            id="_abc46" jsslot=""
                                                                            jsaction="CQwlrf;fastbutton:CQwlrf"
                                                                            style="max-height: 0px;">
                                                                            <div>
                                                                                <div jsname="oQYOj"
                                                                                    id="_abc48"
                                                                                    data-hveid="CA0QIg"
                                                                                    data-ved="2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8Qu04oAXoECA0QIg">
                                                                                    <div class="mod" data-md="61"
                                                                                        style="clear:none">
                                                                                        <!--m-->
                                                                                        <div aria-level="3"
                                                                                            class="LGOjhe"
                                                                                            role="heading"
                                                                                            data-attrid="wa:/description"
                                                                                            data-hveid="CA0QIw"><span
                                                                                                class="ILfuVd NA6bn"><span
                                                                                                    class="e24Kjd"><b>Norton</b>
                                                                                                    Internet Security
                                                                                                    gave <b>you</b>
                                                                                                    virus
                                                                                                    <b>protection</b>.
                                                                                                    <b>Norton</b>™ 360
                                                                                                    gives <b>you</b>
                                                                                                    much more.
                                                                                                    <b>Norton</b> 360
                                                                                                    plans give
                                                                                                    <b>you</b> device
                                                                                                    security to
                                                                                                    <b>protect</b> PCs,
                                                                                                    Macs and mobile
                                                                                                    devices
                                                                                                    <b>against</b>
                                                                                                    viruses with
                                                                                                    multi-layered
                                                                                                    malware
                                                                                                    <b>protection</b>,
                                                                                                    plus new ways to
                                                                                                    <b>protect your</b>
                                                                                                    devices and online
                                                                                                    privacy.</span></span>
                                                                                        </div>
                                                                                        <!--n-->
                                                                                    </div>
                                                                                    <div class="g">
                                                                                        <!--m-->
                                                                                        <div class="rc"
                                                                                            data-hveid="CA0QJA"
                                                                                            data-ved="2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8QFSgBMAl6BAgNECQ">
                                                                                            <div class="r"><a
                                                                                                    href="https://us.norton.com/internet-security"
                                                                                                    onmousedown="return rwt(this,'','','','','AOvVaw2WLPUYhnWCLL9yDxtMu4sA','','2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8QFjAJegQIDRAl','','',event)"><br>
                                                                                                    <h3
                                                                                                        class="LC20lb DKV0Md">
                                                                                                        Norton Internet
                                                                                                        Security™ - Web
                                                                                                        Security &amp;
                                                                                                        Protection for
                                                                                                        Your PC</h3>
                                                                                                    <div
                                                                                                        class="TbwUpd NJjxre">
                                                                                                        <cite
                                                                                                            class="iUh30 bc tjvcx">us.norton.com<span
                                                                                                                class="eipWBe">
                                                                                                                ›
                                                                                                                internet-security</span></cite>
                                                                                                    </div>
                                                                                                </a>
                                                                                                <div class="B6fmyf">
                                                                                                    <div class="TbwUpd">
                                                                                                        <cite
                                                                                                            class="iUh30 bc tjvcx">us.norton.com<span
                                                                                                                class="eipWBe">
                                                                                                                ›
                                                                                                                internet-security</span></cite>
                                                                                                    </div>
                                                                                                    <div class="eFM0qc">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="s">
                                                                                                <div><span
                                                                                                        class="st"></span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <!--n-->
                                                                                    </div>
                                                                                    <div
                                                                                        class="iOBnre match-mod-horizontal-padding">
                                                                                        Search for: <a
                                                                                            href="https://www.google.com/a=firefox-b-d&amp;q=What+does+Norton+Protect+You+From%3F&amp;sa=X&amp;ved=2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8Qzmd6BAgNECk">What
                                                                                            does Norton Protect You
                                                                                            From?</a></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </g-accordion-expander>
                                                                </div>
                                                                <g-loading-icon jsname="aZ2wEe" class="uKh9yc"
                                                                    style="display:none;height:24px;width:24px"><img
                                                                        src="norton_files/loading_24.gif"
                                                                        alt="Loading..." role="progressbar" data-atf="0"
                                                                        width="24" height="24"></g-loading-icon>
                                                            </div>
                                                        </div>
                                                        <div style="clear:both"></div>
                                                    </div>
                                                </div>
                                                <div class="kno-ftr">
                                                    <div class="OwRFvb kno-fb">
                                                        <div
                                                            data-async-context="async_id:duf3-44-2;authority:0;card_id:;entry_point:0;feature_id:;ftoe:0;header:0;is_jobs_spam_form:0;open:0;preselect_answer_index:-1;suggestions:;suggestions_subtypes:;suggestions_types:;surface:0;title:;type:44">
                                                            <div jscontroller="xz7cCd" style="display:none"
                                                                jsaction="rcuQ6b:npT2md"></div>
                                                            <div id="duf3-44-2" data-jiis="up" data-async-type="duffy3"
                                                                data-async-context-required="type,open,feature_id,async_id,entry_point,authority,card_id,ftoe,title,header,suggestions,surface,suggestions_types,suggestions_subtypes,preselect_answer_index,is_jobs_spam_form"
                                                                class="y yp"
                                                                data-ved="2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8Q-0F6BAgNECo">
                                                            </div><a class="duf3" href="#"
                                                                data-async-trigger="duf3-44-2" jsaction="async.u"
                                                                data-ved="2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8Qtw96BAgNECs">Feedback</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="g">
                                                <h2 class="bNg8Rb">Web results</h2>
                                                <!--m-->
                                                <div class="rc" data-hveid="CAMQAA"
                                                    data-ved="2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8QFSgAMAp6BAgDEAA">
                                                    <div class="r"><a
                                                            href="https://us.norton.com/internetsecurity-malware-webcam-hacking.html"
                                                            onmousedown="return rwt(this,'','','','','AOvVaw29sr3CMW-ehkEOGtGCHMmD','','2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8QFjAKegQIAxAB','','',event)"><br>
                                                            <h3 class="LC20lb DKV0Md">How to secure your webcam and help
                                                                prevent webcam hacking</h3>
                                                            <div class="TbwUpd NJjxre"><cite
                                                                    class="iUh30 bc tjvcx">us.norton.com<span
                                                                        class="eipWBe"> ›
                                                                        internetsecurity-malware-webcam-hac...</span></cite>
                                                            </div>
                                                        </a>
                                                        <div class="B6fmyf">
                                                            <div class="TbwUpd"><cite
                                                                    class="iUh30 bc tjvcx">us.norton.com<span
                                                                        class="eipWBe"> ›
                                                                        internetsecurity-malware-webcam-hac...</span></cite>
                                                            </div>
                                                            <div class="eFM0qc"><span>
                                                                    <div class="action-menu"><a class="GHDvEf" href="#"
                                                                            id="am-b10" aria-label="Result options"
                                                                            aria-expanded="false" aria-haspopup="true"
                                                                            role="button"
                                                                            jsaction="m.tdd;keydown:m.hbke;keypress:m.mskpe"
                                                                            data-ved="2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8Q7B0wCnoECAMQBA"><span
                                                                                class="mn-dwn-arw"></span></a>
                                                                        <ol class="action-menu-panel" role="menu"
                                                                            tabindex="-1"
                                                                            jsaction="keydown:m.hdke;mouseover:m.hdhne;mouseout:m.hdhue"
                                                                            data-ved="2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8QqR8wCnoECAMQBQ">
                                                                            <li class="action-menu-item"
                                                                                role="menuitem"><a class="fl"
                                                                                    href="https://webcache.googleusercontent.com/search?q=cache:7Potua7ncZ4J:https://us.norton.com/internetsecurity-malware-webcam-hacking.html+&amp;cd=11&amp;hl=en&amp;ct=clnk&amp;gl=in&amp;client=firefox-b-d"
                                                                                    onmousedown="return rwt(this,'','','','','AOvVaw1-Z5aH0sDN5qQ8OqQP7UFa','','2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8QIDAKegQIAxAG','','',event)">Cached</a>
                                                                            </li>
                                                                            <li class="action-menu-item"
                                                                                role="menuitem"><a class="fl"
                                                                                    href="https://www.google.com/a=firefox-b-d&amp;q=related:https://us.norton.com/internetsecurity-malware-webcam-hacking.html+does+norton+stop+hacker&amp;tbo=1&amp;sa=X&amp;ved=2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8QHzAKegQIAxAH">Similar</a>
                                                                            </li>
                                                                        </ol>
                                                                    </div>
                                                                </span></div>
                                                        </div>
                                                    </div>
                                                    <div class="s">
                                                        <div><span class="st">Just about everything has a camera on it
                                                                these days. So how <em>can</em> you help protect
                                                                yourself against webcam <em>hacking</em>? Install
                                                                <em>Norton</em> Security on your device.</span></div>
                                                    </div>
                                                    <div jscontroller="m6a0l" id="eob_7" jsdata="fxg5tf;;CDvW1o"
                                                        jsaction="rcuQ6b:npT2md"
                                                        data-ved="2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8Q2Z0BMAp6BAgDEAg">
                                                        <div jsname="UTgHCf" class="AUiS2"
                                                            data-ved="2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8Qx40DegQIExAA">
                                                            <div jsname="d3PE6e" style="display:none">
                                                                <div
                                                                    data-ved="2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8QsKwBKAB6BAgTEAE">
                                                                    universal webcam hacker pro</div>
                                                                <div
                                                                    data-ved="2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8QsKwBKAF6BAgTEAI">
                                                                    webcam hack online</div>
                                                                <div
                                                                    data-ved="2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8QsKwBKAJ6BAgTEAM">
                                                                    norton safecam</div>
                                                                <div
                                                                    data-ved="2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8QsKwBKAN6BAgTEAQ">
                                                                    webcam security best practices</div>
                                                                <div
                                                                    data-ved="2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8QsKwBKAR6BAgTEAU">
                                                                    can hackers see you through your phone camera</div>
                                                                <div
                                                                    data-ved="2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8QsKwBKAV6BAgTEAY">
                                                                    how to tell if your laptop camera is hacked</div>
                                                            </div><span jsname="ZnuYW" class="XCKyNd" jsaction="ornU0b"
                                                                aria-label="Dismiss suggested follow ups" role="button"
                                                                tabindex="0"></span>
                                                            <div>
                                                                <div jsname="l1CLDf" class="d8lLoc">
                                                                    <h4 jsname="IaVMje" class="eJ7tvc">People also
                                                                        search for</h4>
                                                                    <div jsname="CeevUc" class="hYkSRb"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--n-->
                                            </div>
                                            <div class="g">
                                                <!--m-->
                                                <div class="rc" data-hveid="CAEQAA"
                                                    data-ved="2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8QFSgAMAt6BAgBEAA">
                                                    <div class="r"><a href="https://us.norton.com/feature/safecam"
                                                            onmousedown="return rwt(this,'','','','','AOvVaw0Tdcfci6bzQGDcH7AczgfK','','2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8QFjALegQIARAB','','',event)"><br>
                                                            <h3 class="LC20lb DKV0Md">Norton SafeCam | Help protect your
                                                                PC from webcam hacking</h3>
                                                            <div class="TbwUpd NJjxre"><cite
                                                                    class="iUh30 bc tjvcx">us.norton.com<span
                                                                        class="eipWBe"> › feature ›
                                                                        safecam</span></cite></div>
                                                        </a>
                                                        <div class="B6fmyf">
                                                            <div class="TbwUpd"><cite
                                                                    class="iUh30 bc tjvcx">us.norton.com<span
                                                                        class="eipWBe"> › feature ›
                                                                        safecam</span></cite></div>
                                                            <div class="eFM0qc"><span>
                                                                    <div class="action-menu"><a class="GHDvEf" href="#"
                                                                            id="am-b11" aria-label="Result options"
                                                                            aria-expanded="false" aria-haspopup="true"
                                                                            role="button"
                                                                            jsaction="m.tdd;keydown:m.hbke;keypress:m.mskpe"
                                                                            data-ved="2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8Q7B0wC3oECAEQBA"><span
                                                                                class="mn-dwn-arw"></span></a>
                                                                        <ol class="action-menu-panel" role="menu"
                                                                            tabindex="-1"
                                                                            jsaction="keydown:m.hdke;mouseover:m.hdhne;mouseout:m.hdhue"
                                                                            data-ved="2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8QqR8wC3oECAEQBQ">
                                                                            <li class="action-menu-item"
                                                                                role="menuitem"><a class="fl"
                                                                                    href="https://webcache.googleusercontent.com/search?q=cache:GqQy9OGNzXMJ:https://us.norton.com/feature/safecam+&amp;cd=12&amp;hl=en&amp;ct=clnk&amp;gl=in&amp;client=firefox-b-d"
                                                                                    onmousedown="return rwt(this,'','','','','AOvVaw0p3zKBpARCzraWxY6Ka14I','','2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8QIDALegQIARAG','','',event)">Cached</a>
                                                                            </li>
                                                                        </ol>
                                                                    </div>
                                                                </span></div>
                                                        </div>
                                                    </div>
                                                    <div class="s">
                                                        <div><span class="st">But it <em>can</em> also be vulnerable to
                                                                <em>hacking</em>. With <em>Norton</em> SafeCam, you'll
                                                                get notified when cybercriminals try to use your webcam,
                                                                so we <em>can</em> help <em>block</em> them.</span>
                                                        </div>
                                                    </div>
                                                    <div jscontroller="m6a0l" id="eob_5" jsdata="fxg5tf;;CDvW1s"
                                                        jsaction="rcuQ6b:npT2md"
                                                        data-ved="2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8Q2Z0BMAt6BAgBEAc">
                                                        <div jsname="UTgHCf" class="AUiS2"
                                                            data-ved="2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8Qx40DegQIFxAA">
                                                            <div jsname="d3PE6e" style="display:none">
                                                                <div
                                                                    data-ved="2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8QsKwBKAB6BAgXEAE">
                                                                    norton blocking webcam</div>
                                                                <div
                                                                    data-ved="2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8QsKwBKAF6BAgXEAI">
                                                                    dark web norton</div>
                                                                <div
                                                                    data-ved="2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8QsKwBKAJ6BAgXEAM">
                                                                    why is google chrome accessing my webcam</div>
                                                                <div
                                                                    data-ved="2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8QsKwBKAN6BAgXEAQ">
                                                                    norton products</div>
                                                                <div
                                                                    data-ved="2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8QsKwBKAR6BAgXEAU">
                                                                    my norton</div>
                                                            </div><span jsname="ZnuYW" class="XCKyNd" jsaction="ornU0b"
                                                                aria-label="Dismiss suggested follow ups" role="button"
                                                                tabindex="0"></span>
                                                            <div>
                                                                <div jsname="l1CLDf" class="d8lLoc">
                                                                    <h4 jsname="IaVMje" class="eJ7tvc">People also
                                                                        search for</h4>
                                                                    <div jsname="CeevUc" class="hYkSRb"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--n-->
                                            </div><span id="fld"></span>
                                            <style>
                                                .zVvuGd.MRfBrb {
                                                    overflow: hidden
                                                }

                                                .zVvuGd {
                                                    padding-top: 8px;
                                                    white-space: nowrap
                                                }

                                                .Aks71e {
                                                    padding: 4px 8px;
                                                    float: right;
                                                    margin: auto 0
                                                }

                                                .xpdclose .lfNb6b,
                                                .xpdopen .hyaVx {
                                                    margin-bottom: 24px
                                                }

                                                .xpdclose .ecRggb .lfNb6b,
                                                .xpdopen .ecRggb .hyaVx {
                                                    margin-bottom: 0
                                                }

                                                .Ss2Faf a {
                                                    text-decoration: none
                                                }

                                                .Ss2Faf a:hover {
                                                    text-decoration: underline
                                                }

                                                .Ss2Faf {
                                                    color: #222;
                                                    line-height: 1.3;
                                                    font-size: 20px
                                                }

                                                .Ss2Faf a {
                                                    color: #222
                                                }

                                                .oaSpFd {
                                                    color: #70757a;
                                                    margin: 0 0 3px 16px
                                                }

                                                .sV2QOc {
                                                    margin: 0 16px
                                                }

                                                .kno-vrt-t.MRfBrb {
                                                    padding-left: 13px
                                                }

                                                .k0bPBc:first-child,
                                                .kno-vrt-t.MRfBrb:first-child {
                                                    padding-left: 17px
                                                }

                                                .kno-vrt-t {
                                                    display: inline-block;
                                                    overflow: hidden;
                                                    position: relative;
                                                    text-align: left;
                                                    vertical-align: top;
                                                }

                                                .xlBGCb,
                                                .oBrLN,
                                                .C9iYEe,
                                                .mytS8,
                                                .AAhd0c {}

                                                .oBrLN {
                                                    display: block;
                                                    white-space: normal;
                                                    margin: 3px 0 -1px;
                                                    padding-bottom: 1px;
                                                    width: 100%;
                                                }

                                                .kno-vrt-t {
                                                    line-height: 1.29;
                                                    white-space: normal
                                                }

                                                .rhs-osrp .oBrLN,
                                                .rhs-osrp .xlBGCb {
                                                    font-size: 14px;
                                                    line-height: 18px
                                                }

                                                .rhs-osrp .oBrLN {
                                                    color: rgba(0, 0, 0, .87);
                                                    margin: 0;
                                                    padding-top: 8px
                                                }

                                                .kno-vrt-t a {
                                                    display: block;
                                                    min-height: 100%;
                                                }

                                                .XQ6p1d {
                                                    overflow: hidden
                                                }

                                                g-img {
                                                    display: block
                                                }

                                                .M4dUYb {
                                                    position: relative
                                                }

                                                .rISBZc {
                                                    display: block;
                                                    border: 0
                                                }

                                                .F2eIEb {
                                                    bottom: -25px;
                                                    position: absolute;
                                                    right: 0
                                                }

                                                .F2eIEb a {
                                                    font-size: 12px
                                                }

                                                .zVvuGd.ulRSHd {
                                                    padding-bottom: 4px;
                                                    padding-top: 14px
                                                }

                                                #brs {}

                                                #brs {
                                                    margin-bottom: 28px
                                                }

                                                #brs .med {
                                                    color: #222;
                                                    height: auto;
                                                    padding-bottom: 8px
                                                }

                                                .brs_col {
                                                    font-size: 16px;
                                                    margin-top: -1px;
                                                    padding-bottom: 1px;
                                                    display: inline-block;
                                                    line-height: 24px;
                                                    vertical-align: top;
                                                    max-width: 100%;
                                                    box-sizing: border-box;
                                                    display: block
                                                }

                                                #brs .nVcaUb {
                                                    margin: 0;
                                                    clear: both
                                                }

                                                .brs_col .search-icon {
                                                    color: #1a0dab;
                                                    vertical-align: middle;
                                                    margin-right: 12px
                                                }

                                                #brs a {
                                                    padding: 3px 32px 3px 0;
                                                    display: inline-block;
                                                    float: left
                                                }

                                                #brs a {
                                                    text-decoration: none
                                                }

                                                g-section-with-header {
                                                    display: block;
                                                    margin: 0 0 40px 0
                                                }

                                                .e2BEnf {
                                                    font-size: 20px;
                                                    line-height: 1.3;
                                                }

                                                .U7izfe {
                                                    padding: 0 0px 12px 0px
                                                }

                                                .AaVjTc a {
                                                    display: block
                                                }

                                                .AaVjTc td {
                                                    padding: 0;
                                                    text-align: center
                                                }

                                                .AaVjTc a.G0iuSb {
                                                    text-decoration: none
                                                }

                                                .d6cvqb span {
                                                    text-decoration: none
                                                }

                                                .AaVjTc a.G0iuSb:hover {
                                                    text-decoration: underline
                                                }

                                                .YyVfkd {
                                                    font-weight: bold
                                                }

                                                #foot .AaVjTc .YyVfkd {
                                                    color: rgba(0, 0, 0, .87);
                                                    font-weight: normal
                                                }

                                                #foot .AaVjTc a {
                                                    color: #4285f4;
                                                    font-weight: normal
                                                }

                                                #cnt.rfli .AaVjTc .YyVfkd {
                                                    color: rgba(0, 0, 0, .87);
                                                    font-weight: normal
                                                }

                                                .SJajHc {
                                                    background: url(/images/nav_logo299.webp) no-repeat;
                                                    overflow: hidden;
                                                    background-position: 0 0;
                                                    height: 40px;
                                                    display: block
                                                }

                                                .NVbCr {
                                                    cursor: pointer
                                                }

                                                #foot {
                                                    visibility: inherit
                                                }
                                            </style>
                                            <div class="g">
                                                <!--m-->
                                                <div class="rc" data-hveid="CAIQAA"
                                                    data-ved="2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8QFSgAMAx6BAgCEAA">
                                                    <div class="r"><a
                                                            href="https://community.norton.com/en/forums/does-norton-protect-you-if-someone-hacks-your-wireless-network"
                                                            onmousedown="return rwt(this,'','','','','AOvVaw1VXU-u169ghEC3b0MOtSZk','','2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8QFjAMegQIAhAB','','',event)"><br>
                                                            <h3 class="LC20lb DKV0Md">Does norton protect you if someone
                                                                hacks your wireless ...</h3>
                                                            <div class="TbwUpd NJjxre"><cite
                                                                    class="iUh30 bc tjvcx">community.norton.com<span
                                                                        class="eipWBe"> › forums ›
                                                                        does-norton-protect...</span></cite></div>
                                                        </a>
                                                        <div class="B6fmyf">
                                                            <div class="TbwUpd"><cite
                                                                    class="iUh30 bc tjvcx">community.norton.com<span
                                                                        class="eipWBe"> › forums ›
                                                                        does-norton-protect...</span></cite></div>
                                                            <div class="eFM0qc"><span>
                                                                    <div class="action-menu"><a class="GHDvEf" href="#"
                                                                            id="am-b12" aria-label="Result options"
                                                                            aria-expanded="false" aria-haspopup="true"
                                                                            role="button"
                                                                            jsaction="m.tdd;keydown:m.hbke;keypress:m.mskpe"
                                                                            data-ved="2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8Q7B0wDHoECAIQBA"><span
                                                                                class="mn-dwn-arw"></span></a>
                                                                        <ol class="action-menu-panel" role="menu"
                                                                            tabindex="-1"
                                                                            jsaction="keydown:m.hdke;mouseover:m.hdhne;mouseout:m.hdhue"
                                                                            data-ved="2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8QqR8wDHoECAIQBQ">
                                                                            <li class="action-menu-item"
                                                                                role="menuitem"><a class="fl"
                                                                                    href="https://webcache.googleusercontent.com/search?q=cache:V-1dxYrsM1YJ:https://community.norton.com/en/forums/does-norton-protect-you-if-someone-hacks-your-wireless-network+&amp;cd=13&amp;hl=en&amp;ct=clnk&amp;gl=in&amp;client=firefox-b-d"
                                                                                    onmousedown="return rwt(this,'','','','','AOvVaw0ZPVTrxCiduHzYIjKA4VKg','','2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8QIDAMegQIAhAG','','',event)">Cached</a>
                                                                            </li>
                                                                            <li class="action-menu-item"
                                                                                role="menuitem"><a class="fl"
                                                                                    href="https://www.google.com/a=firefox-b-d&amp;q=related:https://community.norton.com/en/forums/does-norton-protect-you-if-someone-hacks-your-wireless-network+does+norton+stop+hacker&amp;tbo=1&amp;sa=X&amp;ved=2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8QHzAMegQIAhAH">Similar</a>
                                                                            </li>
                                                                        </ol>
                                                                    </div>
                                                                </span></div>
                                                        </div>
                                                    </div>
                                                    <div class="s">
                                                        <div><span class="st"><span class="f">Feb 24, 2011 - </span>I'm
                                                                really worried someone <em>will hack</em> my wireless
                                                                network and steal my ... This <em>will</em> protect your
                                                                PC from outside access, but <em>will</em> not
                                                                <em>prevent</em>&nbsp;...</span>
                                                            <div class="P1usbc"
                                                                data-ved="2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8QqwIwDHoECAIQCQ">
                                                                <div class="VNLkW">
                                                                    <div class="i4vd5e"><a class="fl"
                                                                            href="https://community.norton.com/en/forums/norton-360-windows-firewall-better-against-hackers"
                                                                            onmousedown="return rwt(this,'','','','','AOvVaw2fqTab7jHNGEWUku4Npcjm','','2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8QrAIoADAMegQIAhAK','','',event)"><b>Norton</b>
                                                                            360 &amp; Windows Firewall - Better Against
                                                                            <b>Hackers</b> ...</a></div>
                                                                    <div class="G1Rrjc">25 Mar 2010</div>
                                                                </div>
                                                                <div class="VNLkW">
                                                                    <div class="i4vd5e"><a class="fl"
                                                                            href="https://community.norton.com/en/forums/my-email-was-hacked-why-didnt-norton-find"
                                                                            onmousedown="return rwt(this,'','','','','AOvVaw31IrSxViUpMScIe9vAGT7Q','','2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8QrAIoATAMegQIAhAL','','',event)">My
                                                                            email was hacked. Why didn't <b>Norton</b>
                                                                            find this? | <b>Norton</b> ...</a></div>
                                                                    <div class="G1Rrjc">9 Jan 2010</div>
                                                                </div>
                                                                <div class="k6DEPe">
                                                                    <div class="i4vd5e"><a class="fl"
                                                                            href="https://www.google.com/search?q=does+norton+stop+hacker+site:community.norton.com&amp;client=firefox-b-d&amp;sa=X&amp;ved=2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8QrQIoAjAMegQIAhAM">More
                                                                            results from community.norton.com</a></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--n-->
                                            </div>
                                            <div class="g">
                                                <!--m-->
                                                <div class="rc" data-hveid="CAQQAA"
                                                    data-ved="2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8QFSgAMA16BAgEEAA">
                                                    <div class="r"><a
                                                            href="https://us.norton.com/internetsecurity-how-to-create-a-hack-proof-password.html"
                                                            onmousedown="return rwt(this,'','','','','AOvVaw1lvJAlS57EYJtHymLcS5p4','','2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8QFjANegQIBBAB','','',event)"><br>
                                                            <h3 class="LC20lb DKV0Md">How to create a hack-proof
                                                                password - Norton</h3>
                                                            <div class="TbwUpd NJjxre"><cite
                                                                    class="iUh30 bc tjvcx">us.norton.com<span
                                                                        class="eipWBe"> ›
                                                                        internetsecurity-how-to-create-a-hack-...</span></cite>
                                                            </div>
                                                        </a>
                                                        <div class="B6fmyf">
                                                            <div class="TbwUpd"><cite
                                                                    class="iUh30 bc tjvcx">us.norton.com<span
                                                                        class="eipWBe"> ›
                                                                        internetsecurity-how-to-create-a-hack-...</span></cite>
                                                            </div>
                                                            <div class="eFM0qc"><span>
                                                                    <div class="action-menu"><a class="GHDvEf" href="#"
                                                                            id="am-b13" aria-label="Result options"
                                                                            aria-expanded="false" aria-haspopup="true"
                                                                            role="button"
                                                                            jsaction="m.tdd;keydown:m.hbke;keypress:m.mskpe"
                                                                            data-ved="2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8Q7B0wDXoECAQQBA"><span
                                                                                class="mn-dwn-arw"></span></a>
                                                                        <ol class="action-menu-panel" role="menu"
                                                                            tabindex="-1"
                                                                            jsaction="keydown:m.hdke;mouseover:m.hdhne;mouseout:m.hdhue"
                                                                            data-ved="2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8QqR8wDXoECAQQBQ">
                                                                            <li class="action-menu-item"
                                                                                role="menuitem"><a class="fl"
                                                                                    href="https://webcache.googleusercontent.com/search?q=cache:qvcLsR4lGncJ:https://us.norton.com/internetsecurity-how-to-create-a-hack-proof-password.html+&amp;cd=14&amp;hl=en&amp;ct=clnk&amp;gl=in&amp;client=firefox-b-d"
                                                                                    onmousedown="return rwt(this,'','','','','AOvVaw1oJb5g4kzHZEhz7G0ucO9-','','2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8QIDANegQIBBAG','','',event)">Cached</a>
                                                                            </li>
                                                                        </ol>
                                                                    </div>
                                                                </span></div>
                                                        </div>
                                                    </div>
                                                    <div class="s">
                                                        <div><span class="st">Learn seven tips on how to create
                                                                <em>hack</em>-proof passwords that <em>will</em> keep
                                                                ... no one <em>can prevent</em> all identity theft or
                                                                cybercrime, and that LifeLock <em>does</em> not
                                                                monitor&nbsp;...</span></div>
                                                    </div>
                                                    <div jscontroller="m6a0l" id="eob_6" jsdata="fxg5tf;;CDvW1w"
                                                        jsaction="rcuQ6b:npT2md"
                                                        data-ved="2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8Q2Z0BMA16BAgEEAc">
                                                        <div jsname="UTgHCf" class="AUiS2"
                                                            data-ved="2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8Qx40DegQIFhAA">
                                                            <div jsname="d3PE6e" style="display:none">
                                                                <div
                                                                    data-ved="2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8QsKwBKAB6BAgWEAE">
                                                                    hack-proof passwords</div>
                                                                <div
                                                                    data-ved="2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8QsKwBKAF6BAgWEAI">
                                                                    hack-proof meaning</div>
                                                                <div
                                                                    data-ved="2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8QsKwBKAJ6BAgWEAM">
                                                                    most difficult password to hack</div>
                                                                <div
                                                                    data-ved="2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8QsKwBKAN6BAgWEAQ">
                                                                    hack proof phone</div>
                                                                <div
                                                                    data-ved="2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8QsKwBKAR6BAgWEAU">
                                                                    hackenproof</div>
                                                                <div
                                                                    data-ved="2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8QsKwBKAV6BAgWEAY">
                                                                    how do hackers hack passwords</div>
                                                            </div><span jsname="ZnuYW" class="XCKyNd" jsaction="ornU0b"
                                                                aria-label="Dismiss suggested follow ups" role="button"
                                                                tabindex="0"></span>
                                                            <div>
                                                                <div jsname="l1CLDf" class="d8lLoc">
                                                                    <h4 jsname="IaVMje" class="eJ7tvc">People also
                                                                        search for</h4>
                                                                    <div jsname="CeevUc" class="hYkSRb"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--n-->
                                            </div>
                                            <div class="g">
                                                <!--m-->
                                                <div class="rc" data-hveid="CAUQAA"
                                                    data-ved="2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8QFSgAMA56BAgFEAA">
                                                    <div class="r"><a
                                                            href="https://www.safetydetectives.com/blog/can-antivirus-stop-hackers/"
                                                            onmousedown="return rwt(this,'','','','','AOvVaw39mcOlduk7XTj6pUKOd-mY','','2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8QFjAOegQIBRAB','','',event)"><br>
                                                            <h3 class="LC20lb DKV0Md">Can Antivirus Stop Hackers? -
                                                                Safety Detectives</h3>
                                                            <div class="TbwUpd NJjxre"><cite
                                                                    class="iUh30 bc tjvcx">www.safetydetectives.com<span
                                                                        class="eipWBe"> › Blog</span></cite></div>
                                                        </a>
                                                        <div class="B6fmyf">
                                                            <div class="TbwUpd"><cite
                                                                    class="iUh30 bc tjvcx">www.safetydetectives.com<span
                                                                        class="eipWBe"> › Blog</span></cite></div>
                                                            <div class="eFM0qc"><span>
                                                                    <div class="action-menu"><a class="GHDvEf" href="#"
                                                                            id="am-b14" aria-label="Result options"
                                                                            aria-expanded="false" aria-haspopup="true"
                                                                            role="button"
                                                                            jsaction="m.tdd;keydown:m.hbke;keypress:m.mskpe"
                                                                            data-ved="2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8Q7B0wDnoECAUQBg"><span
                                                                                class="mn-dwn-arw"></span></a>
                                                                        <ol class="action-menu-panel" role="menu"
                                                                            tabindex="-1"
                                                                            jsaction="keydown:m.hdke;mouseover:m.hdhne;mouseout:m.hdhue"
                                                                            data-ved="2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8QqR8wDnoECAUQBw">
                                                                            <li class="action-menu-item"
                                                                                role="menuitem"><a class="fl"
                                                                                    href="https://webcache.googleusercontent.com/search?q=cache:k_RWDuRupYUJ:https://www.safetydetectives.com/blog/can-antivirus-stop-hackers/+&amp;cd=15&amp;hl=en&amp;ct=clnk&amp;gl=in&amp;client=firefox-b-d"
                                                                                    onmousedown="return rwt(this,'','','','','AOvVaw0_tbpg5S6j_DvI8VyxUASY','','2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8QIDAOegQIBRAI','','',event)">Cached</a>
                                                                            </li>
                                                                        </ol>
                                                                    </div>
                                                                </span></div>
                                                        </div>
                                                    </div>
                                                    <div class="s">
                                                        <div><span class="st"><span class="f">Aug 30, 2018 -
                                                                </span>Protection Against <em>Hacking</em> and Zero-Day
                                                                Attacks. <em>Hackers</em> rely on malware like viruses,
                                                                worms, and Trojans to gain access to computer
                                                                systems.</span></div>
                                                    </div>
                                                    <div jscontroller="m6a0l" id="eob_12" jsdata="fxg5tf;;CDvW10"
                                                        jsaction="rcuQ6b:npT2md"
                                                        data-ved="2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8Q2Z0BMA56BAgFEAo">
                                                        <div jsname="UTgHCf" class="AUiS2"
                                                            data-ved="2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8Qx40DegQIFBAA">
                                                            <div jsname="d3PE6e" style="display:none">
                                                                <div
                                                                    data-ved="2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8QsKwBKAB6BAgUEAE">
                                                                    advance ip protector</div>
                                                                <div
                                                                    data-ved="2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8QsKwBKAF6BAgUEAI">
                                                                    trojan virus wiki</div>
                                                                <div
                                                                    data-ved="2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8QsKwBKAJ6BAgUEAM">
                                                                    hacker protection</div>
                                                                <div
                                                                    data-ved="2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8QsKwBKAN6BAgUEAQ">
                                                                    benefits of firewall</div>
                                                                <div
                                                                    data-ved="2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8QsKwBKAR6BAgUEAU">
                                                                    network firewall</div>
                                                                <div
                                                                    data-ved="2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8QsKwBKAV6BAgUEAY">
                                                                    does antivirus protect against ransomware</div>
                                                            </div><span jsname="ZnuYW" class="XCKyNd" jsaction="ornU0b"
                                                                aria-label="Dismiss suggested follow ups" role="button"
                                                                tabindex="0"></span>
                                                            <div>
                                                                <div jsname="l1CLDf" class="d8lLoc">
                                                                    <h4 jsname="IaVMje" class="eJ7tvc">People also
                                                                        search for</h4>
                                                                    <div jsname="CeevUc" class="hYkSRb"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--n-->
                                            </div>
                                            <div class="g">
                                                <!--m-->
                                                <div class="rc" data-hveid="CAgQAA"
                                                    data-ved="2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8QFSgAMA96BAgIEAA">
                                                    <div class="r"><a
                                                            href="https://personalinfosecurity.com/norton-antivirus-plus-protect-my-webcam/"
                                                            onmousedown="return rwt(this,'','','','','AOvVaw0oKtwzwJm1mlezoBYVlfs5','','2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8QFjAPegQICBAB','','',event)"><br>
                                                            <h3 class="LC20lb DKV0Md">Does Norton Antivirus Plus Protect
                                                                My Webcam? - Personal ...</h3>
                                                            <div class="TbwUpd NJjxre"><cite
                                                                    class="iUh30 bc tjvcx">personalinfosecurity.com<span
                                                                        class="eipWBe"> ›
                                                                        norton-antivirus-plus-protec...</span></cite>
                                                            </div>
                                                        </a>
                                                        <div class="B6fmyf">
                                                            <div class="TbwUpd"><cite
                                                                    class="iUh30 bc tjvcx">personalinfosecurity.com<span
                                                                        class="eipWBe"> ›
                                                                        norton-antivirus-plus-protec...</span></cite>
                                                            </div>
                                                            <div class="eFM0qc"><span>
                                                                    <div class="action-menu"><a class="GHDvEf" href="#"
                                                                            id="am-b15" aria-label="Result options"
                                                                            aria-expanded="false" aria-haspopup="true"
                                                                            role="button"
                                                                            jsaction="m.tdd;keydown:m.hbke;keypress:m.mskpe"
                                                                            data-ved="2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8Q7B0wD3oECAgQBA"><span
                                                                                class="mn-dwn-arw"></span></a>
                                                                        <ol class="action-menu-panel" role="menu"
                                                                            tabindex="-1"
                                                                            jsaction="keydown:m.hdke;mouseover:m.hdhne;mouseout:m.hdhue"
                                                                            data-ved="2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8QqR8wD3oECAgQBQ">
                                                                            <li class="action-menu-item"
                                                                                role="menuitem"><a class="fl"
                                                                                    href="https://webcache.googleusercontent.com/search?q=cache:rYUh8kYYYREJ:https://personalinfosecurity.com/norton-antivirus-plus-protect-my-webcam/+&amp;cd=16&amp;hl=en&amp;ct=clnk&amp;gl=in&amp;client=firefox-b-d"
                                                                                    onmousedown="return rwt(this,'','','','','AOvVaw2NWW6qBZmBMX4y9Pubx-Zs','','2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8QIDAPegQICBAG','','',event)">Cached</a>
                                                                            </li>
                                                                        </ol>
                                                                    </div>
                                                                </span></div>
                                                        </div>
                                                    </div>
                                                    <div class="s">
                                                        <div><span class="st">Webcam <em>hackers</em> are a very real
                                                                threat and <em>can</em> use your computer to spy on you
                                                                without you knowing it. Only having a powerful set of
                                                                system tools <em>can stop</em> this&nbsp;...</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--n-->
                                            </div>
                                            <div class="g">
                                                <!--m-->
                                                <div class="rc" data-hveid="CAYQAA"
                                                    data-ved="2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8QFSgAMBB6BAgGEAA">
                                                    <div class="r"><a
                                                            href="https://www.businessnewsdaily.com/11213-secure-computer-from-hackers.html"
                                                            onmousedown="return rwt(this,'','','','','AOvVaw3u0T-qrGOAVMn-CZo9D2ZL','','2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8QFjAQegQIBhAB','','',event)"><br>
                                                            <h3 class="LC20lb DKV0Md">How to Secure Your Computer From
                                                                Hackers</h3>
                                                            <div class="TbwUpd NJjxre"><cite
                                                                    class="iUh30 bc tjvcx">www.businessnewsdaily.com<span
                                                                        class="eipWBe"> › ... › Security</span></cite>
                                                            </div>
                                                        </a>
                                                        <div class="B6fmyf">
                                                            <div class="TbwUpd"><cite
                                                                    class="iUh30 bc tjvcx">www.businessnewsdaily.com<span
                                                                        class="eipWBe"> › ... › Security</span></cite>
                                                            </div>
                                                            <div class="eFM0qc"><span>
                                                                    <div class="action-menu"><a class="GHDvEf" href="#"
                                                                            id="am-b16" aria-label="Result options"
                                                                            aria-expanded="false" aria-haspopup="true"
                                                                            role="button"
                                                                            jsaction="m.tdd;keydown:m.hbke;keypress:m.mskpe"
                                                                            data-ved="2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8Q7B0wEHoECAYQBg"><span
                                                                                class="mn-dwn-arw"></span></a>
                                                                        <ol class="action-menu-panel" role="menu"
                                                                            tabindex="-1"
                                                                            jsaction="keydown:m.hdke;mouseover:m.hdhne;mouseout:m.hdhue"
                                                                            data-ved="2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8QqR8wEHoECAYQBw">
                                                                            <li class="action-menu-item"
                                                                                role="menuitem"><a class="fl"
                                                                                    href="https://webcache.googleusercontent.com/search?q=cache:_f3-ipDLob8J:https://www.businessnewsdaily.com/11213-secure-computer-from-hackers.html+&amp;cd=17&amp;hl=en&amp;ct=clnk&amp;gl=in&amp;client=firefox-b-d"
                                                                                    onmousedown="return rwt(this,'','','','','AOvVaw1x19SSygU5jiGnjHkmBKmM','','2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8QIDAQegQIBhAI','','',event)">Cached</a>
                                                                            </li>
                                                                        </ol>
                                                                    </div>
                                                                </span></div>
                                                        </div>
                                                    </div>
                                                    <div class="s">
                                                        <div><span class="st"><span class="f">Jan 10, 2019 - </span>Here
                                                                are some steps you <em>can</em> take to protect your
                                                                company's computer network. ... is often included in
                                                                major antivirus packages like Webroot, McAfee and
                                                                <em>Norton</em>. ... Most updates include security fixes
                                                                that <em>prevent hackers</em> from&nbsp;...</span></div>
                                                    </div>
                                                    <div jscontroller="m6a0l" id="eob_13" jsdata="fxg5tf;;CDvW14"
                                                        jsaction="rcuQ6b:npT2md"
                                                        data-ved="2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8Q2Z0BMBB6BAgGEAo">
                                                        <div jsname="UTgHCf" class="AUiS2"
                                                            data-ved="2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8Qx40DegQIGBAA">
                                                            <div jsname="d3PE6e" style="display:none">
                                                                <div
                                                                    data-ved="2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8QsKwBKAB6BAgYEAE">
                                                                    hacker protection software</div>
                                                                <div
                                                                    data-ved="2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8QsKwBKAF6BAgYEAI">
                                                                    how to secure your home computer</div>
                                                                <div
                                                                    data-ved="2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8QsKwBKAJ6BAgYEAM">
                                                                    anti-spyware package</div>
                                                                <div
                                                                    data-ved="2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8QsKwBKAN6BAgYEAQ">
                                                                    how to protect yourself from hackers 2019</div>
                                                                <div
                                                                    data-ved="2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8QsKwBKAR6BAgYEAU">
                                                                    what are the steps to avoid getting hacked</div>
                                                                <div
                                                                    data-ved="2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8QsKwBKAV6BAgYEAY">
                                                                    how to prevent unauthorized computer access</div>
                                                            </div><span jsname="ZnuYW" class="XCKyNd" jsaction="ornU0b"
                                                                aria-label="Dismiss suggested follow ups" role="button"
                                                                tabindex="0"></span>
                                                            <div>
                                                                <div jsname="l1CLDf" class="d8lLoc">
                                                                    <h4 jsname="IaVMje" class="eJ7tvc">People also
                                                                        search for</h4>
                                                                    <div jsname="CeevUc" class="hYkSRb"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--n-->
                                            </div>
                                            <div class="g">
                                                <!--m-->
                                                <div class="rc" data-hveid="CAcQAA"
                                                    data-ved="2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8QFSgAMBF6BAgHEAA">
                                                    <div class="r"><a
                                                            href="https://www.quora.com/Do-antivirus-programs-or-firewalls-protect-against-hackers"
                                                            onmousedown="return rwt(this,'','','','','AOvVaw3BbHpkJMGB6nCRcOMlwfKo','','2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8QFjARegQIBxAB','','',event)"><br>
                                                            <h3 class="LC20lb DKV0Md">Do antivirus programs or firewalls
                                                                protect against hackers ...</h3>
                                                            <div class="TbwUpd NJjxre"><cite
                                                                    class="iUh30 bc tjvcx">www.quora.com<span
                                                                        class="eipWBe"> ›
                                                                        Do-antivirus-programs-or-firewalls-...</span></cite>
                                                            </div>
                                                        </a>
                                                        <div class="B6fmyf">
                                                            <div class="TbwUpd"><cite
                                                                    class="iUh30 bc tjvcx">www.quora.com<span
                                                                        class="eipWBe"> ›
                                                                        Do-antivirus-programs-or-firewalls-...</span></cite>
                                                            </div>
                                                            <div class="eFM0qc"><span>
                                                                    <div class="action-menu"><a class="GHDvEf" href="#"
                                                                            id="am-b17" aria-label="Result options"
                                                                            aria-expanded="false" aria-haspopup="true"
                                                                            role="button"
                                                                            jsaction="m.tdd;keydown:m.hbke;keypress:m.mskpe"
                                                                            data-ved="2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8Q7B0wEXoECAcQBA"><span
                                                                                class="mn-dwn-arw"></span></a>
                                                                        <ol class="action-menu-panel" role="menu"
                                                                            tabindex="-1"
                                                                            jsaction="keydown:m.hdke;mouseover:m.hdhne;mouseout:m.hdhue"
                                                                            data-ved="2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8QqR8wEXoECAcQBQ">
                                                                            <li class="action-menu-item"
                                                                                role="menuitem"><a class="fl"
                                                                                    href="https://www.google.com/a=firefox-b-d&amp;q=related:https://www.quora.com/Do-antivirus-programs-or-firewalls-protect-against-hackers+does+norton+stop+hacker&amp;tbo=1&amp;sa=X&amp;ved=2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8QHzARegQIBxAG">Similar</a>
                                                                            </li>
                                                                        </ol>
                                                                    </div>
                                                                </span></div>
                                                        </div>
                                                    </div>
                                                    <div class="s">
                                                        <div><span class="st">To better defend yourself against
                                                                <em>hack</em> attacks, you need to understand what ...
                                                                They <em>can</em> protect us but they are not good
                                                                enough (but they could <em>stop hackers</em>
                                                                in<wbr>&nbsp;...</span>
                                                            <div class="dhIWPd f">17 answers</div>
                                                        </div>
                                                    </div>
                                                    <div jscontroller="m6a0l" id="eob_15" jsdata="fxg5tf;;CDvW18"
                                                        jsaction="rcuQ6b:npT2md"
                                                        data-ved="2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8Q2Z0BMBF6BAgHEAg">
                                                        <div jsname="UTgHCf" class="AUiS2"
                                                            data-ved="2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8Qx40DegQIFRAA">
                                                            <div jsname="d3PE6e" style="display:none">
                                                                <div
                                                                    data-ved="2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8QsKwBKAB6BAgVEAE">
                                                                    advance ip protector</div>
                                                                <div
                                                                    data-ved="2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8QsKwBKAF6BAgVEAI">
                                                                    sonic firewall 3600</div>
                                                                <div
                                                                    data-ved="2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8QsKwBKAJ6BAgVEAM">
                                                                    will a firewall stop hackers</div>
                                                                <div
                                                                    data-ved="2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8QsKwBKAN6BAgVEAQ">
                                                                    trojan virus wiki</div>
                                                                <div
                                                                    data-ved="2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8QsKwBKAR6BAgVEAU">
                                                                    benefits of firewall</div>
                                                                <div
                                                                    data-ved="2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8QsKwBKAV6BAgVEAY">
                                                                    does antivirus protect against ransomware</div>
                                                            </div><span jsname="ZnuYW" class="XCKyNd" jsaction="ornU0b"
                                                                aria-label="Dismiss suggested follow ups" role="button"
                                                                tabindex="0"></span>
                                                            <div>
                                                                <div jsname="l1CLDf" class="d8lLoc">
                                                                    <h4 jsname="IaVMje" class="eJ7tvc">People also
                                                                        search for</h4>
                                                                    <div jsname="CeevUc" class="hYkSRb"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--n-->
                                            </div>
                                            <div class="g">
                                                <!--m-->
                                                <div class="rc" data-hveid="CAkQAA"
                                                    data-ved="2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8QFSgAMBJ6BAgJEAA">
                                                    <div class="r"><a
                                                            href="https://answers.microsoft.com/en-us/windows/forum/all/can-someone-hack-my-laptop-even-if-i-have-norton/95b59333-49dc-4fe9-81e4-94f2edc6c206"
                                                            onmousedown="return rwt(this,'','','','','AOvVaw2rr2ZuzT8DVS0NEZr4xnCN','','2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8QFjASegQICRAB','','',event)"><br>
                                                            <h3 class="LC20lb DKV0Md">Can someone hack my laptop even if
                                                                I have Norton anti virus ...</h3>
                                                            <div class="TbwUpd NJjxre"><cite
                                                                    class="iUh30 bc tjvcx">answers.microsoft.com<span
                                                                        class="eipWBe"> › en-us › windows › forum ›
                                                                        all</span></cite></div>
                                                        </a>
                                                        <div class="B6fmyf">
                                                            <div class="TbwUpd"><cite
                                                                    class="iUh30 bc tjvcx">answers.microsoft.com<span
                                                                        class="eipWBe"> › en-us › windows › forum ›
                                                                        all</span></cite></div>
                                                            <div class="eFM0qc"><span>
                                                                    <div class="action-menu"><a class="GHDvEf" href="#"
                                                                            id="am-b18" aria-label="Result options"
                                                                            aria-expanded="false" aria-haspopup="true"
                                                                            role="button"
                                                                            jsaction="m.tdd;keydown:m.hbke;keypress:m.mskpe"
                                                                            data-ved="2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8Q7B0wEnoECAkQBA"><span
                                                                                class="mn-dwn-arw"></span></a>
                                                                        <ol class="action-menu-panel" role="menu"
                                                                            tabindex="-1"
                                                                            jsaction="keydown:m.hdke;mouseover:m.hdhne;mouseout:m.hdhue"
                                                                            data-ved="2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8QqR8wEnoECAkQBQ">
                                                                            <li class="action-menu-item"
                                                                                role="menuitem"><a class="fl"
                                                                                    href="https://webcache.googleusercontent.com/search?q=cache:P6zDSuqjNawJ:https://answers.microsoft.com/en-us/windows/forum/all/can-someone-hack-my-laptop-even-if-i-have-norton/95b59333-49dc-4fe9-81e4-94f2edc6c206+&amp;cd=19&amp;hl=en&amp;ct=clnk&amp;gl=in&amp;client=firefox-b-d"
                                                                                    onmousedown="return rwt(this,'','','','','AOvVaw2F0Wbtmg0ygkIbEOZXIfN4','','2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8QIDASegQICRAG','','',event)">Cached</a>
                                                                            </li>
                                                                        </ol>
                                                                    </div>
                                                                </span></div>
                                                        </div>
                                                    </div>
                                                    <div class="s">
                                                        <div><span class="st">hey , <em>can</em> someone <em>hack</em>
                                                                my lap top if the person has my IP address? I have
                                                                <em>Norton</em> anti-virus on my lap top. I also have
                                                                fire wall on. Someone&nbsp;...</span>
                                                            <div class="dhIWPd f">Jul 1, 2012 - 1 post</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--n-->
                                            </div>
                                        </div>
                                        <!--z-->
                                    </div>
                                </div>
                            </div>
                            <div id="bottomads"></div>
                            <div id="extrares">
                                <div id="botstuff">
                                    <div data-ved="2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8QCHoECBAQKg">
                                        <div jsdata="GXYZuf;;CDvW2E" jscontroller="G3eKy" jsaction="rcuQ6b:npT2md"
                                            jsl="$t t-w-XilABeKRA;$x 0;"></div>
                                        <div id="bres">
                                            <div class="g mnr-c g-blk" data-hveid="CAwQAA"
                                                data-ved="2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8Q3mIoAHoECAwQAA">
                                                <div class="kp-blk Wnoohf OJXvsb">
                                                    <div class="xpdopen">
                                                        <div class="ifM9O">
                                                            <div>
                                                                <div class="NFQFxe yp1CPe mod" data-md="133"
                                                                    data-ved="2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8QkCkwE3oECAoQAA">
                                                                    <!--m-->
                                                                    <div class="oaSpFd">Related search</div>
                                                                    <div class="sV2QOc Ss2Faf zbA8Me i8lZMc"
                                                                        aria-level="3" role="heading">Top 10 antivirus
                                                                        in India</div>
                                                                    <div class="zVvuGd MRfBrb ulRSHd"
                                                                        data-hveid="CAoQAQ">
                                                                        <div class="PZPZlf MRfBrb kno-vrt-t"
                                                                            data-reltype="sideways" data-rentity=""
                                                                            style="width:77px"><a
                                                                                href="https://www.google.com/a=firefox-b-d&amp;q=Norton+AntiVirus&amp;stick=H4sIAAAAAAAAAOOQUeLUz9U3MDE2LMgxkizJL1AwNFBIzCvJLMssKi1WyMwDopTMxCjxlPzUYoW8_KKS_DyFYpC6jMTk7NSiU4wI_acYuUBso0KLgjTzU4y8-un6hobJxuWWaSVFhVBJ46SKogwjqC6j4qyC8l-MkiFYrPUEWbuIVcAPYqUjUC4MJAcAP6BujLIAAAA&amp;sa=X&amp;ved=2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8QxA0wE3oECAoQAw"
                                                                                title="Norton AntiVirus"
                                                                                data-ved="2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8QxA0wE3oECAoQAw">
                                                                                <div class="XQ6p1d">
                                                                                    <g-img><img id="dimg_16"
                                                                                            src="norton_files/images_004.png"
                                                                                            class="rISBZc M4dUYb"
                                                                                            alt="Norton AntiVirus"
                                                                                            data-atf="4" width="77"
                                                                                            height="77"></g-img>
                                                                                </div>
                                                                                <div class="fl ellip oBrLN"
                                                                                    data-original-name="Norton AntiVirus">
                                                                                    Norton AntiVirus</div>
                                                                            </a></div>
                                                                        <div class="PZPZlf MRfBrb kno-vrt-t"
                                                                            data-reltype="sideways" data-rentity=""
                                                                            style="width:77px"><a
                                                                                href="https://www.google.com/a=firefox-b-d&amp;q=BitDefender&amp;stick=H4sIAAAAAAAAAOOQUeLSz9U3MCq0KEgzN5IsyS9QMDRQSMwrySzLLCotVsjMA6KUzMQo8ZT81GKFvPyikvw8hWKQuozE5OzUolOMnCADTIwNC3JOMSIZdoqRVz9d39Aw2bjcMq2kqBAqaZxUUZRhBNVlVJxVUP6LUTIEi7WeIGsXsXI7ZZa4pKal5qWkFgEAR6O0MK4AAAA&amp;sa=X&amp;ved=2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8QxA0wE3oECAoQBQ"
                                                                                title="BitDefender"
                                                                                data-ved="2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8QxA0wE3oECAoQBQ">
                                                                                <div class="XQ6p1d">
                                                                                    <g-img><img id="dimg_18"
                                                                                            src="norton_files/images.png"
                                                                                            class="rISBZc M4dUYb"
                                                                                            alt="BitDefender"
                                                                                            data-atf="4" width="77"
                                                                                            height="77"></g-img>
                                                                                </div>
                                                                                <div class="fl ellip oBrLN"
                                                                                    data-original-name="BitDefender">
                                                                                    BitDefender</div>
                                                                            </a></div>
                                                                        <div class="PZPZlf MRfBrb kno-vrt-t"
                                                                            data-reltype="sideways" data-rentity=""
                                                                            style="width:77px"><a
                                                                                href="https://www.google.com/a=firefox-b-d&amp;q=Avast+Antivirus&amp;stick=H4sIAAAAAAAAAOOQUeLVT9c3NEw2LrdMKykqNJIsyS9QMDRQSMwrySzLLCotVsjMA6KUzMQo8ZT81GKFvPyikvw8hWKQuozE5OzUolOMnPq5-gYmxoYFOacYuUBso0KLgjTzU4yohkMljZMqijKMoLqMirMKyn8xSoZgsdYTZO0iVn7HssTiEgVHmBQAoSGOybUAAAA&amp;sa=X&amp;ved=2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8QxA0wE3oECAoQBw"
                                                                                title="Avast Antivirus"
                                                                                data-ved="2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8QxA0wE3oECAoQBw">
                                                                                <div class="XQ6p1d">
                                                                                    <g-img><img id="dimg_20"
                                                                                            src="norton_files/images_002.png"
                                                                                            class="rISBZc M4dUYb"
                                                                                            alt="Avast Antivirus"
                                                                                            data-atf="4" width="77"
                                                                                            height="77"></g-img>
                                                                                </div>
                                                                                <div class="fl ellip oBrLN"
                                                                                    data-original-name="Avast Antivirus">
                                                                                    Avast Antivirus</div>
                                                                            </a></div>
                                                                        <div class="PZPZlf rhsg3 MRfBrb kno-vrt-t"
                                                                            data-reltype="sideways" data-rentity=""
                                                                            style="width:77px"><a
                                                                                href="https://www.google.com/a=firefox-b-d&amp;q=Kaspersky+Anti-Virus&amp;stick=H4sIAAAAAAAAAOOQUeLSz9U3ME6qKMowMpIsyS9QMDRQSMwrySzLLCotVsjMA6KUzMQo8ZT81GKFvPyikvw8hWKQuozE5OzUolOMnCADTIwNC3JOMYINMyq0KEgzP8XIq5-ub2iYbFxumVZSVAiVhNgE1WVUnFVQ_otRMgSLtZ4gaxexingnFhekFhVnVyo4AqV1w0DyANbKmyK3AAAA&amp;sa=X&amp;ved=2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8QxA0wE3oECAoQCQ"
                                                                                title="Kaspersky Anti-Virus"
                                                                                data-ved="2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8QxA0wE3oECAoQCQ">
                                                                                <div class="XQ6p1d">
                                                                                    <g-img><img id="dimg_22"
                                                                                            src="norton_files/images.jpg"
                                                                                            class="rISBZc M4dUYb"
                                                                                            alt="Kaspersky Anti-Virus"
                                                                                            data-atf="4" width="77"
                                                                                            height="77"></g-img>
                                                                                </div>
                                                                                <div class="fl ellip oBrLN"
                                                                                    data-original-name="Kaspersky Anti‑Virus">
                                                                                    Kaspersky Anti‑Virus</div>
                                                                            </a></div>
                                                                        <div class="PZPZlf rhsg4 MRfBrb kno-vrt-t"
                                                                            data-reltype="sideways" data-rentity=""
                                                                            style="width:77px"><a
                                                                                href="https://www.google.com/a=firefox-b-d&amp;q=Kaspersky&amp;stick=H4sIAAAAAAAAAOOQUeLUz9U3MCrOKig3kizJL1AwNFBIzCvJLMssKi1WyMwDopTMxCjxlPzUYoW8_KKS_DyFYpC6jMTk7NSiU4xg_SbGhgU5pxi5wGYVWhSkmZ9i5NVP1zc0TDYut0wrKSqEShonVRRlGEF1gW39xSgZgsVaT5C1i1g5vROLC1KLirMrAeCu8dmrAAAA&amp;sa=X&amp;ved=2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8QxA0wE3oECAoQCw"
                                                                                title="Kaspersky"
                                                                                data-ved="2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8QxA0wE3oECAoQCw">
                                                                                <div class="XQ6p1d">
                                                                                    <g-img><img id="dimg_24"
                                                                                            src="norton_files/images_003.png"
                                                                                            class="rISBZc M4dUYb"
                                                                                            alt="Kaspersky" data-atf="4"
                                                                                            width="77" height="77">
                                                                                    </g-img>
                                                                                </div>
                                                                                <div class="fl ellip oBrLN"
                                                                                    data-original-name="Kaspersky">
                                                                                    Kaspersky</div>
                                                                            </a></div>
                                                                    </div>
                                                                    <div class="kno-ftr Aks71e F2eIEb"
                                                                        data-async-context="async_id:duf3-34-0;authority:0;card_id:;entry_point:0;feature_id:;ftoe:0;header:0;is_jobs_spam_form:0;open:0;preselect_answer_index:-1;suggestions:;suggestions_subtypes:;suggestions_types:;surface:0;title:;type:34">
                                                                        <div jscontroller="xz7cCd" style="display:none"
                                                                            jsaction="rcuQ6b:npT2md"></div>
                                                                        <div id="duf3-34-0" data-jiis="up"
                                                                            data-async-type="duffy3"
                                                                            data-async-context-required="type,open,feature_id,async_id,entry_point,authority,card_id,ftoe,title,header,suggestions,surface,suggestions_types,suggestions_subtypes,preselect_answer_index,is_jobs_spam_form"
                                                                            class="y yp"
                                                                            data-ved="2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8Q-0EwE3oECAoQDA">
                                                                        </div><a class="duf3" href="#"
                                                                            data-async-trigger="duf3-34-0"
                                                                            jsaction="async.u"
                                                                            data-ved="2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8Qtw8wE3oECAoQDQ">Feedback</a>
                                                                    </div>
                                                                    <!--n-->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div style="clear:both"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="brs" data-hveid="CA4QAA">
                                            <g-section-with-header style="margin-bottom:0">
                                                <div class="e2BEnf U7izfe">
                                                    <h3 class="med dPAwzb" style="text-align:left" aria-level="2"
                                                        role="heading">Searches related to does norton stop hacker</h3>
                                                </div>
                                                <div class="card-section">
                                                    <div class="brs_col">
                                                        <p class="nVcaUb"><a
                                                                href="https://www.google.com/a=firefox-b-d&amp;q=norton+antivirus&amp;sa=X&amp;ved=2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8Q1QIoAHoECA4QAQ"><span
                                                                    class="search-icon z1asCe MZy1Rb"
                                                                    style="height:20px;line-height:20px;width:20px"><svg
                                                                        focusable="false"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        viewBox="0 0 24 24">
                                                                        <path
                                                                            d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0 0 16 9.5 6.5 6.5 0 1 0 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z">
                                                                        </path>
                                                                    </svg></span>norton <b>antivirus</b></a></p>
                                                        <p class="nVcaUb"><a
                                                                href="https://www.google.com/a=firefox-b-d&amp;q=does+norton+protect+from+malware&amp;sa=X&amp;ved=2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8Q1QIoAXoECA4QAg"><span
                                                                    class="search-icon z1asCe MZy1Rb"
                                                                    style="height:20px;line-height:20px;width:20px"><svg
                                                                        focusable="false"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        viewBox="0 0 24 24">
                                                                        <path
                                                                            d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0 0 16 9.5 6.5 6.5 0 1 0 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z">
                                                                        </path>
                                                                    </svg></span>does norton <b>protect from
                                                                    malware</b></a></p>
                                                        <p class="nVcaUb"><a
                                                                href="https://www.google.com/a=firefox-b-d&amp;q=norton+hack&amp;sa=X&amp;ved=2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8Q1QIoAnoECA4QAw"><span
                                                                    class="search-icon z1asCe MZy1Rb"
                                                                    style="height:20px;line-height:20px;width:20px"><svg
                                                                        focusable="false"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        viewBox="0 0 24 24">
                                                                        <path
                                                                            d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0 0 16 9.5 6.5 6.5 0 1 0 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z">
                                                                        </path>
                                                                    </svg></span>norton <b>hack</b></a></p>
                                                        <p class="nVcaUb"><a
                                                                href="https://www.google.com/a=firefox-b-d&amp;q=how+to+prevent+hackers+from+stealing+information&amp;sa=X&amp;ved=2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8Q1QIoA3oECA4QBA"><span
                                                                    class="search-icon z1asCe MZy1Rb"
                                                                    style="height:20px;line-height:20px;width:20px"><svg
                                                                        focusable="false"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        viewBox="0 0 24 24">
                                                                        <path
                                                                            d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0 0 16 9.5 6.5 6.5 0 1 0 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z">
                                                                        </path>
                                                                    </svg></span><b>how to prevent hackers from stealing
                                                                    information</b></a></p>
                                                    </div>
                                                    <div class="brs_col">
                                                        <p class="nVcaUb"><a
                                                                href="https://www.google.com/a=firefox-b-d&amp;q=does+mcafee+protect+against+hackers&amp;sa=X&amp;ved=2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8Q1QIoBHoECA4QBQ"><span
                                                                    class="search-icon z1asCe MZy1Rb"
                                                                    style="height:20px;line-height:20px;width:20px"><svg
                                                                        focusable="false"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        viewBox="0 0 24 24">
                                                                        <path
                                                                            d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0 0 16 9.5 6.5 6.5 0 1 0 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z">
                                                                        </path>
                                                                    </svg></span>does <b>mcafee protect against
                                                                    hackers</b></a></p>
                                                        <p class="nVcaUb"><a
                                                                href="https://www.google.com/a=firefox-b-d&amp;q=norton+360&amp;sa=X&amp;ved=2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8Q1QIoBXoECA4QBg"><span
                                                                    class="search-icon z1asCe MZy1Rb"
                                                                    style="height:20px;line-height:20px;width:20px"><svg
                                                                        focusable="false"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        viewBox="0 0 24 24">
                                                                        <path
                                                                            d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0 0 16 9.5 6.5 6.5 0 1 0 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z">
                                                                        </path>
                                                                    </svg></span>norton <b>360</b></a></p>
                                                        <p class="nVcaUb"><a
                                                                href="https://www.google.com/a=firefox-b-d&amp;q=hacker+protection&amp;sa=X&amp;ved=2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8Q1QIoBnoECA4QBw"><span
                                                                    class="search-icon z1asCe MZy1Rb"
                                                                    style="height:20px;line-height:20px;width:20px"><svg
                                                                        focusable="false"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        viewBox="0 0 24 24">
                                                                        <path
                                                                            d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0 0 16 9.5 6.5 6.5 0 1 0 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z">
                                                                        </path>
                                                                    </svg></span>hacker <b>protection</b></a></p>
                                                        <p class="nVcaUb"><a
                                                                href="https://www.google.com/a=firefox-b-d&amp;q=how+can+you+prevent+malware+from+being+used+to+steal+your+password&amp;sa=X&amp;ved=2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8Q1QIoB3oECA4QCA"><span
                                                                    class="search-icon z1asCe MZy1Rb"
                                                                    style="height:20px;line-height:20px;width:20px"><svg
                                                                        focusable="false"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        viewBox="0 0 24 24">
                                                                        <path
                                                                            d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0 0 16 9.5 6.5 6.5 0 1 0 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z">
                                                                        </path>
                                                                    </svg></span><b>how can you prevent malware from
                                                                    being used to steal your password</b></a></p>
                                                    </div>
                                                </div>
                                            </g-section-with-header>
                                        </div>
                                        <div jscontroller="WgDvvc" jsdata="hE2vdf;;CDvW2I" jsaction="rcuQ6b:npT2md">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div jscontroller="iD8Yk" style="display:none" jsaction="rcuQ6b:npT2md"></div>
                                <div id="foot" role="navigation"><span id="xjs">
                                        <div>
                                            <h1 class="bNg8Rb">Page navigation</h1>
                                            <table class="AaVjTc"
                                                style="border-collapse:collapse;text-align:left;margin:30px auto 30px"
                                                role="presentation">
                                                <tbody>
                                                    <tr valign="top">
                                                        <td class="b d6cvqb"><span class="SJajHc"
                                                                style="background:url(/images/nav_logo299.webp) no-repeat;background-position:-24px 0;width:28px"></span>
                                                        </td>
                                                        <td class="YyVfkd"><span class="SJajHc"
                                                                style="background:url(/images/nav_logo299.webp) no-repeat;background-position:-53px 0;width:20px"></span>1
                                                        </td>
                                                        <td><a aria-label="Page 2" class="fl"
                                                                href="https://www.google.com/search?q=does+norton+stop+hacker&amp;client=firefox-b-d&amp;ei=abc&amp;start=10&amp;sa=N&amp;ved=2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8Q8tMDegQIEBAv"><span
                                                                    class="SJajHc NVbCr"
                                                                    style="background:url(/images/nav_logo299.webp) no-repeat;background-position:-74px 0;width:20px"></span>2</a>
                                                        </td>
                                                        <td><a aria-label="Page 3" class="fl"
                                                                href="https://www.google.com/search?q=does+norton+stop+hacker&amp;client=firefox-b-d&amp;ei=abc&amp;start=20&amp;sa=N&amp;ved=2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8Q8tMDegQIEBAx"><span
                                                                    class="SJajHc NVbCr"
                                                                    style="background:url(/images/nav_logo299.webp) no-repeat;background-position:-74px 0;width:20px"></span>3</a>
                                                        </td>
                                                        <td><a aria-label="Page 4" class="fl"
                                                                href="https://www.google.com/search?q=does+norton+stop+hacker&amp;client=firefox-b-d&amp;ei=abc&amp;start=30&amp;sa=N&amp;ved=2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8Q8tMDegQIEBAz"><span
                                                                    class="SJajHc NVbCr"
                                                                    style="background:url(/images/nav_logo299.webp) no-repeat;background-position:-74px 0;width:20px"></span>4</a>
                                                        </td>
                                                        <td><a aria-label="Page 5" class="fl"
                                                                href="https://www.google.com/search?q=does+norton+stop+hacker&amp;client=firefox-b-d&amp;ei=abc&amp;start=40&amp;sa=N&amp;ved=2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8Q8tMDegQIEBA1"><span
                                                                    class="SJajHc NVbCr"
                                                                    style="background:url(/images/nav_logo299.webp) no-repeat;background-position:-74px 0;width:20px"></span>5</a>
                                                        </td>
                                                        <td><a aria-label="Page 6" class="fl"
                                                                href="https://www.google.com/search?q=does+norton+stop+hacker&amp;client=firefox-b-d&amp;ei=abc&amp;start=50&amp;sa=N&amp;ved=2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8Q8tMDegQIEBA3"><span
                                                                    class="SJajHc NVbCr"
                                                                    style="background:url(/images/nav_logo299.webp) no-repeat;background-position:-74px 0;width:20px"></span>6</a>
                                                        </td>
                                                        <td><a aria-label="Page 7" class="fl"
                                                                href="https://www.google.com/search?q=does+norton+stop+hacker&amp;client=firefox-b-d&amp;ei=abc&amp;start=60&amp;sa=N&amp;ved=2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8Q8tMDegQIEBA5"><span
                                                                    class="SJajHc NVbCr"
                                                                    style="background:url(/images/nav_logo299.webp) no-repeat;background-position:-74px 0;width:20px"></span>7</a>
                                                        </td>
                                                        <td><a aria-label="Page 8" class="fl"
                                                                href="https://www.google.com/search?q=does+norton+stop+hacker&amp;client=firefox-b-d&amp;ei=abc&amp;start=70&amp;sa=N&amp;ved=2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8Q8tMDegQIEBA7"><span
                                                                    class="SJajHc NVbCr"
                                                                    style="background:url(/images/nav_logo299.webp) no-repeat;background-position:-74px 0;width:20px"></span>8</a>
                                                        </td>
                                                        <td><a aria-label="Page 9" class="fl"
                                                                href="https://www.google.com/search?q=does+norton+stop+hacker&amp;client=firefox-b-d&amp;ei=abc&amp;start=80&amp;sa=N&amp;ved=2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8Q8tMDegQIEBA9"><span
                                                                    class="SJajHc NVbCr"
                                                                    style="background:url(/images/nav_logo299.webp) no-repeat;background-position:-74px 0;width:20px"></span>9</a>
                                                        </td>
                                                        <td><a aria-label="Page 10" class="fl"
                                                                href="https://www.google.com/search?q=does+norton+stop+hacker&amp;client=firefox-b-d&amp;ei=abc&amp;start=90&amp;sa=N&amp;ved=2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8Q8tMDegQIEBA_"><span
                                                                    class="SJajHc NVbCr"
                                                                    style="background:url(/images/nav_logo299.webp) no-repeat;background-position:-74px 0;width:20px"></span>10</a>
                                                        </td>
                                                        <td aria-level="3" class="b d6cvqb" role="heading"><a
                                                                class="G0iuSb"
                                                                href="https://www.google.com/search?q=does+norton+stop+hacker&amp;client=firefox-b-d&amp;ei=abc&amp;start=10&amp;sa=N&amp;ved=2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8Q8NMDegQIEBBB"
                                                                id="pnnext" style="text-align:left"><span
                                                                    class="SJajHc NVbCr"
                                                                    style="background:url(/images/nav_logo299.webp) no-repeat;background-position:-96px 0;width:71px"></span><span
                                                                    style="display:block;margin-left:53px">Next</span></a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </span>
                                    <div id="gfn"></div><span id="fvf"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div jscontroller="TxZWcc" class="rhscol col rhstc4" jsaction="rcuQ6b:npT2md"
                        jsdata="MdeVKb;;CDvW2M" id="rhs">
                        <script
                            nonce="T/1dJyC0GxsSMWP7nSTknQ==">(function () {
                                    var c4 = 1261; var c5 = 1349; var no5 = false; var no3 = false; (function () {
                                        var a = document.body.offsetWidth, b = no3 ? "rhstc4" : "rhstc3"; a >= c4 && (b = no5 || a < c5 ? "rhstc4" : "rhstc5"); document.getElementById("rhs").className += " " + b;
                                    }).call(this);
                                })();</script>
                        <span class="rhstc3 rhstc4 rhstc5" style="display:none"></span></div>
                    <div style="clear:both"></div>
                </div>
                <div id="bfoot"><span style="display:none"><span jscontroller="NBZ7u" style="display:none" data-du="1"
                            data-lhe="1" data-lve="1" jsaction="rcuQ6b:npT2md"
                            data-ei="abc"></span></span></div>
            </div>
            <style>
                .fbar a,
                #fsettl {
                    text-decoration: none;
                    white-space: nowrap
                }

                .fbar {
                    margin-left: -27px
                }

                .Fx4vi {
                    padding-left: 27px;
                    margin: 0 !important
                }

                #fbarcnt {
                    display: block;
                }

                #fsl {
                    white-space: nowrap
                }

                #fbar {
                    background: #f2f2f2;
                    line-height: 40px;
                    min-width: 1173px;
                    border-top: 1px solid #e4e4e4;
                }

                .B4GxFc {
                    margin-left: 180px
                }

                .fbar p,
                .fbar a,
                #fsettl,
                #fsett a {
                    color: #5f6368
                }

                .fbar a:hover,
                #fsett a:hover {
                    color: #333
                }

                .fbar {
                    font-size: 14px
                }

                .b0KoTc {
                    color: rgba(0, 0, 0, .54);
                    padding-left: 27px
                }

                .b2hzT {
                    border-bottom: 1px solid #e4e4e4
                }

                .Q8LRLc {
                    font-size: 15px
                }

                #Wprf1b {
                    color: #333;
                    font-weight: bold
                }

                .smiUbb img {
                    margin-right: 4px
                }

                .smiUbb a,
                .M6hT6 #swml a {
                    text-decoration: none
                }

                .smiUbb {
                    margin-left: 180px;
                    line-height: 15px;
                    color: #5f6368;
                }

                .smiUbb a,
                #swml a {
                    color: #5f6368
                }

                .smiUbb a:hover,
                #swml a:hover {
                    color: #333
                }

                #swml a {
                    display: inline-block
                }

                #swml {
                    display: inline-block;
                    margin-left: 13px;
                    padding-left: 16px;
                    border-left: 1px solid #e4e4e4
                }
            </style>
            <div id="footcnt" data-ved="2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8Qpyp6BAgQEEM">
                <h1 class="bNg8Rb">Footer links</h1>
                <div>
                    <div id="fbarcnt" style="position: relative; visibility: visible; height: auto;">
                        <div id="fbar" class="mSAqxd" style="left:0;right:0">
                            <div class="fbar b2hzT">
                                
                            </div>
                            <div class="fbar"><span class="B4GxFc"><span id="fsl"><a class="Fx4vi"
                                            href="https://support.google.com/websearch/?p=ws_results_help&amp;hl=en-IN&amp;fg=1"
                                            onmousedown="return rwt(this,'','','','','AOvVaw1pMqL4P-c2v-w7aJ4SNns7','','2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8Q8KwCegQIEBBG','','',event)">Help</a><a
                                            href="#" class="Fx4vi" data-bucket="websearch" id="dk2qOd" target="_blank"
                                            jsaction="gf.sf" data-ved="2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8QLnoECBAQRw">Send
                                            feedback</a><a class="Fx4vi" href="https://policies.google.com/privacy?fg=1"
                                            onmousedown="return rwt(this,'','','','','AOvVaw12z8DS9cd-g0Aokit_wxri','','2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8Q8awCegQIEBBI','','',event)">Privacy</a><a
                                            class="Fx4vi" href="https://policies.google.com/terms?fg=1"
                                            onmousedown="return rwt(this,'','','','','AOvVaw3sEM_N0elgYQx8WbCXpj3n','','2ahUKEwjcnJqVktzpAhUtyTgGHd61BF8Q8qwCegQIEBBJ','','',event)">Terms</a></span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- cctlcm 0 cctlcm -->
            <script
                nonce="T/1dJyC0GxsSMWP7nSTknQ==">(function () {
                        function k() { return window.performance && window.performance.navigation && window.performance.navigation.type }; function m(a, b, c) { return !a || !b && p(a) ? 0 : a.getBoundingClientRect ? q(a, b, c, function (e) { return e.getBoundingClientRect() }) : 1 } function p(a) { return "none" == a.style.display ? !0 : document.defaultView && document.defaultView.getComputedStyle ? (a = document.defaultView.getComputedStyle(a), !!a && ("hidden" == a.visibility || "0px" == a.height && "0px" == a.width)) : !1 }
                        function q(a, b, c, e) { var d = e(a), f = d.left + window.pageXOffset, n = d.top + window.pageYOffset, h = d.width, l = d.height, g = 0; if (!b && 0 >= l && 0 >= h) return g; 0 > n + l ? g = 2 : n >= (window.innerHeight || document.documentElement.clientHeight) && (g = 4); if (0 > f + h || f >= (window.innerWidth || document.documentElement.clientWidth)) g |= 8; else if (c) { for (b = d.left; a && a != c; a = a.parentElement)b += a.scrollLeft; c = e(c); if (b + h < c.left || b >= c.right) g |= 8 } return g || 1 }; var r, t = ["aft", "hct", "prt", "pprt", "sct"]; function u(a) { return google.c.slp ? a in google.c.p ? google.c.p[a] : -1 : (a = v.search.match(new RegExp("[?&]" + a + "=(\\d+)"))) ? Number(a[1]) : -1 } function w(a) { r.removeEventListener("click", w); a.stopPropagation && a.stopPropagation() } var v = location; var x = 0, y = 0, z = 0, A = 0, B = 0, C, D; function E(a, b, c, e) { var d = google.timers.load.t[a]; d && (c || e && b && b < d) || google.tick("load", a, b) } function F(a, b) { b = b || google.time(); E("aft", b, !1, !0); ++B; G(); H(a, b) } function H(a, b) { a = b || google.time(); E("iml", a, !1, !0); ++y; I() } function I() { D || y != x || google.c.u("il") }
                        function G() {
                            if (!C && B == z) {
                                var a = "&ima=" + z + "&imad=" + A; google.timers.load.e.imn && (a += "&imn=" + google.timers.load.e.imn); var b = google.timers.load.m; if (!b || !b.prs) {
                                    var c = google.timers.load, e = google.c.inp && k() ? 0 : u("qsubts"); 0 < e && (b = u("fbts"), 0 < b && (c.t.start = Math.max(e, b))); var d = c.t, f = d.start; b = { wsrt: c.wsrt }; for (var n = 0, h; h = t[n++];) { var l = d[h]; l && f && (b[h] = l - f) } 0 < e && (b.gsasrt = c.t.start - e); c = "/gen_204?s=" + google.sn + "&t=aft&atyp=csi&ei=" + google.kEI + "&rt="; e = ""; for (var g in b) c += e + g + "." + b[g], e = ","; google.cshid &&
                                        (c += "&cshid=" + google.cshid); 2 == k() && (c += "&bb=1"); 1 == k() && (c += "&r=1"); "gsasrt" in b && (g = u("qsd"), 0 < g && (c += "&qsd=" + g)); google.kBL && (c += "&bl=" + google.kBL); a = c + (a || ""); (r = document.getElementById("csi-ping")) ? (r.addEventListener("click", w), r.setAttribute("ping", a), r.click()) : navigator.sendBeacon ? navigator.sendBeacon(a, "") : google.log("", "", a)
                                }
                            }
                        } var J = "src bsrc url ll image img-url".split(" "); function K(a) { var b = "string" != typeof a.src || !a.src, c = !!a.getAttribute("data-bsrc"), e = a.getAttribute("data-deferred"), d; if (d = !e) a: { d = 0; for (var f; f = J[d++];)if (a.getAttribute("data-" + f)) { d = !0; break a } d = !1 } d && a.setAttribute("data-lzy_", 1); b = (d = (b || a.complete) && !e && !c) && !google.c.lhc && Number(a.getAttribute("data-iml")) || 0; for (f = a; f && "center_col" != f.id && "rhscol" != f.id;)f = f.parentElement; c = m(a, c, f); a.setAttribute("data-atf", c); ++x; d && !b || a.hasAttribute("data-noaft") ? ++y : (d = (c = 1 == c) ? F : H, c && (++z, e && ++A), b ? d(void 0, b) : google.rll(a, !0, d)) }; (function () { var a = google.time(); if (google.timers && google.timers.load.t) { var b = !google.c.setup; b && (D = C = !0, google.c.b("il")); for (var c = document.getElementsByTagName("img"), e = 0, d = void 0; d = c[e++];)b ? K(d) : d.hasAttribute("data-atf") || google.c.setup(d); E("prt", a); E("aft", a, !0); E("iml", a, !0); google.c.e("load", "imn", String(b ? x : c.length)); b ? (C && (C = !1, G()), D = !1, I()) : google.c.ub(); google.c.glu && google.c.glu(); google.rll(window, !1, function () { E("ol", void 0); google.c.u("pr") }) } })();
                    }).call(this);</script>
            <div></div>
            <style id="dstyle">
                .minidiv .RNNXgb {
                    height: 32px;
                    border-radius: 16px;
                    margin: 10px 0 0
                }

                .minidiv .emcav .RNNXgb {
                    border-bottom-left-radius: 0;
                    border-bottom-right-radius: 0
                }

                .emcav.emcat .RNNXgb {
                    border-bottom-left-radius: 24px;
                    border-bottom-right-radius: 24px
                }

                .minidiv .emcav.emcat .RNNXgb {
                    border-bottom-left-radius: 16px;
                    border-bottom-right-radius: 16px
                }

                .minidiv .SDkEP {
                    padding-top: 0
                }

                .minidiv .logo {
                    padding: 0 32px
                }

                .minidiv .iblpc {
                    margin-top: 0
                }

                .minidiv .gLFyf {
                    margin-top: -35px;
                }

                .minidiv .dRYYxd {
                    margin-top: 0
                }

                .minidiv .clear-button {
                    line-height: 32px
                }

                .minidiv .lBbtTb {
                    width: 20px
                }

                .minidiv .Tg7LZd {
                    height: 32px;
                    line-height: 32px
                }

                .minidiv .Tg7LZd .FAuhyb {
                    height: 20px;
                    width: 20px
                }

                .minidiv .Tg7LZd svg {
                    height: 20px;
                    width: 20px
                }

                .minidiv .aajZCb {
                    border-bottom-left-radius: 16px;
                    border-bottom-right-radius: 16px
                }

                .S3nFnd {
                    display: flex
                }

                .lh87ke:link,
                .lh87ke:visited {
                    color: #36c;
                    cursor: pointer;
                    font: 11px arial, sans-serif;
                    padding: 0 5px;
                    text-decoration: none;
                    flex: auto;
                    align-self: flex-end;
                    margin: 0 16px 5px 0
                }

                .lh87ke:hover {
                    text-decoration: underline
                }

                .sb7 {
                    background: url() no-repeat;
                    min-height: 0px;
                    min-width: 0px;
                    height: 0px;
                    width: 0px
                }

                .sb27 {
                    background: url(/images/searchbox/desktop_searchbox_sprites302_hr.webp) no-repeat 0 -21px;
                    background-size: 20px;
                    min-height: 20px;
                    min-width: 20px;
                    height: 20px;
                    width: 20px
                }

                .sb43 {
                    background: url(/images/searchbox/desktop_searchbox_sprites302_hr.webp) no-repeat 0 0;
                    background-size: 20px;
                    min-height: 20px;
                    min-width: 20px;
                    height: 20px;
                    width: 20px
                }

                .sb53.sb53 {
                    padding: 0 4px;
                    margin: 0
                }

                .minidiv .sbl1 {
                    font-size: 14px
                }

                .sbl1p {
                    color: #52188c
                }

                .sbdb:hover {
                    color: #1a73e8;
                    text-decoration: underline
                }

                .sbdb {
                    color: #80868b;
                    cursor: pointer;
                    font: 13px arial, sans-serif;
                    align-self: center
                }

                .sbhl {
                    background: #eee
                }

                .mus_pc {
                    display: block;
                    margin: 6px 0
                }

                .mus_il {
                    font-family: Arial, HelveticaNeue-Light, HelveticaNeue, Helvetica;
                    padding-top: 7px;
                    position: relative
                }

                .mus_il:first-child {
                    padding-top: 0
                }

                .mus_il_at {
                    margin-left: 10px
                }

                .mus_il_st {
                    right: 52px;
                    position: absolute
                }

                .mus_il_i {
                    align: left;
                    margin-right: 10px
                }

                .mus_it3 {
                    margin-bottom: 3px;
                    max-height: 24px;
                    vertical-align: bottom
                }

                .mus_it5 {
                    height: 24px;
                    width: 24px;
                    vertical-align: bottom;
                    margin-left: 10px;
                    margin-right: 10px;
                    transform: rotate(90deg)
                }

                .mus_tt3 {
                    color: #767676;
                    font-size: 12px;
                    vertical-align: top
                }

                .mus_tt5 {
                    color: #dd4b39;
                    font-size: 14px
                }

                .mus_tt6 {
                    color: #3d9400;
                    font-size: 14px
                }

                .mus_tt8 {
                    font-size: 16px;
                    font-family: Arial, sans-serif
                }

                .mus_tt17 {
                    color: #212121;
                    font-size: 20px
                }

                .mus_tt18 {
                    color: #212121;
                    font-size: 24px
                }

                .mus_tt19 {
                    color: #767676;
                    font-size: 12px
                }

                .mus_tt20 {
                    color: #767676;
                    font-size: 14px
                }

                .mus_tt23 {
                    color: #767676;
                    font-size: 18px
                }

                .hdtbU {
                    top: -500px;
                    white-space: nowrap
                }

                .hdtbU .hdtbItm,
                .hdtbU li {
                    list-style: none outside none
                }

                .hdtbItm {
                    background: #fff
                }

                .hdtbSel,
                .hdtbSel #cdrlnk {
                    background-image: url(//ssl.gstatic.com/ui/v1/menu/checkmark2.png);
                    background-position: left center;
                    background-repeat: no-repeat
                }

                .wIV7Db {
                    visibility: hidden
                }

                .KUYZFd {
                    border-top: 1px solid #ddd;
                    cursor: default;
                    height: 0;
                    margin: 5px 0;
                    overflow: hidden;
                    padding: 0
                }

                .Qj0a9e {
                    border-top: 1px solid #ebebeb;
                    margin: 5px 0
                }

                .CXrxm {
                    background-image: url(//ssl.gstatic.com/ui/v1/menu/checkmark.png);
                    background-position: left center;
                    background-repeat: no-repeat
                }

                .hdtb-mn-cont {
                    height: 22px;
                    white-space: nowrap
                }

                .hdtb-mn-hd {
                    color: #70757a;
                    display: inline-block;
                    position: relative;
                    padding-top: 0;
                    padding-bottom: 0;
                    padding-right: 18px;
                    padding-left: 12px;
                    line-height: 22px;
                    cursor: pointer
                }

                #XJDHvf {
                    display: inline-block;
                    width: 180px;
                }

                .kpbb,
                .kpgrb,
                .ksb {
                    -moz-border-radius: 2px;
                    border-radius: 2px;
                    cursor: default;
                    font-family: arial, sans-serif;
                    font-size: 11px;
                    font-weight: bold;
                    height: 27px;
                    line-height: 27px;
                    margin: 2px 0;
                    min-width: 54px;
                    padding: 0 8px;
                    text-align: center;
                    transition: all 0.218s, visibility 0s;
                    -moz-user-select: none;
                }

                .ksb {
                    background-color: #f5f5f5;
                    background-image: linear-gradient(top, #f5f5f5, #f1f1f1);
                    border: 1px solid #dcdcdc;
                    border: 1px solid rgba(0, 0, 0, .1);
                    color: #444;
                    background-image: -moz-linear-gradient(top, #f5f5f5, #f1f1f1);
                }

                a.ksb,
                .div.ksb {
                    color: #444;
                    text-decoration: none;
                    cursor: default
                }

                .kpbb:hover,
                .kpgrb:hover,
                .ksb:hover {
                    box-shadow: 0 1px 1px rgba(0, 0, 0, .1);
                    transition: all 0.0s
                }

                .ksb:hover {
                    background-color: #f8f8f8;
                    background-image: -moz-linear-gradient(top, #f8f8f8, #f1f1f1);
                    background-image: linear-gradient(top, #f8f8f8, #f1f1f1);
                    border: 1px solid #c6c6c6;
                    color: #222;
                }

                .ksb:active {
                    background-color: #f6f6f6;
                    background-image: -moz-linear-gradient(top, #f6f6f6, #f1f1f1);
                    background-image: linear-gradient(top, #f6f6f6, #f1f1f1);
                    box-shadow: inset 0 1px 2px rgba(0, 0, 0, .1);
                }

                .kpbb,
                .kpgrb {
                    border-radius: 2px;
                    color: #fff
                }

                .kpbb:hover,
                .kpgrb:hover {
                    box-shadow: 0 1px 1px rgba(0, 0, 0, .1);
                    color: #fff
                }

                .kpbb:active,
                .kpgrb:active {
                    box-shadow: inset 0 1px 2px rgba(0, 0, 0, .3)
                }

                .kpbb {
                    background-color: #4d90fe;
                    background-image: linear-gradient(top, #4d90fe, #4787ed);
                    border: 1px solid #3079ed
                }

                .kpbb:hover {
                    background-color: #357ae8;
                    background-image: linear-gradient(top, #4d90fe, #357ae8);
                    background-image: linear-gradient(top, #4d90fe, #357ae8);
                    border: 1px solid #2f5bb7
                }

                a.kpbb:link,
                a.kpbb:visited {
                    color: #fff
                }

                .kpgrb {
                    background-color: #f5f5f5;
                    background-image: linear-gradient(top, #f5f5f5, #f1f1f1);
                    background-image: linear-gradient(top, #f5f5f5, #f1f1f1);
                    border: 1px solid #dcdcdc;
                    color: #555
                }

                .kpgrb:hover {
                    background-color: #f8f8f8;
                    background-image: linear-gradient(top, #f8f8f8, #f1f1f1);
                    background-image: linear-gradient(top, #f8f8f8, #f1f1f1);
                    border: 1px solid #dcdcdc;
                    color: #333
                }

                a.kpgrb:link,
                a.kpgrb:visited {
                    color: #555
                }

                .ktf {
                    -moz-border-radius: 1px;
                    -moz-box-sizing: content-box;
                    background-color: #fff;
                    border: 1px solid #d9d9d9;
                    border-top: 1px solid #c0c0c0;
                    box-sizing: content-box;
                    color: #333;
                    display: inline-block;
                    height: 29px;
                    line-height: 27px;
                    padding-left: 8px;
                    vertical-align: top
                }

                .ktf:hover {
                    -moz-box-shadow: inset 0 1px 2px rgba(0, 0, 0, .1);
                    border: 1px solid #b9b9b9;
                    border-top: 1px solid #a0a0a0;
                    box-shadow: inset 0 1px 2px rgba(0, 0, 0, .1)
                }

                .ktf:focus {
                    -moz-box-shadow: inset 0 1px 2px rgba(0, 0, 0, .3);
                    border: 1px solid #4d90fe;
                    box-shadow: inset 0 1px 2px rgba(0, 0, 0, .3);
                    outline: none
                }

                .ktf.mini {
                    font-size: 11px;
                    height: 17px;
                    line-height: 17px;
                    padding: 0 2px
                }

                .ksb.mini {
                    -moz-box-sizing: content-box;
                    box-sizing: content-box;
                    height: 17px;
                    line-height: 17px;
                    min-width: 0
                }

                #vjyzWd {
                    border-top: 1px solid #ebebeb;
                    margin-top: 5px;
                    padding-top: 5px
                }

                .hdtbSel#vjyzWd,
                .hdtbSel#vjyzWd:hover {
                    background: none;
                    padding: 5px 0 0
                }

                #cdrlnk {
                    cursor: pointer
                }

                .T3kYXe,
                .OouJcb,
                .rzG2be {
                    color: #666
                }

                .OouJcb,
                .rzG2be {
                    font-family: arial, sans-serif;
                    width: 100%;
                    display: inline;
                    margin: 0 4px
                }

                .J6UZg .goog-date-picker {
                    left: 154px;
                    background-color: #f1f1f1;
                    border-radius: 2px;
                    border: none;
                    font-size: 12px;
                    outline: none;
                    padding: 5px 1px 10px;
                    position: absolute;
                    top: 61px;
                    user-select: none
                }

                .J6UZg .goog-date-picker table {
                    padding: 0 10px;
                    width: 175px
                }

                .J6UZg .goog-date-picker table thead td {
                    border-bottom: 1px solid #e5e5e5
                }

                .J6UZg .goog-date-picker tbody th {
                    width: 0
                }

                .J6UZg tr.goog-date-picker-head {
                    height: 27px
                }

                .J6UZg tr.goog-date-picker-head td {
                    white-space: nowrap
                }

                .J6UZg .goog-date-picker-monthyear {
                    font-size: 13px
                }

                .J6UZg .goog-date-picker tbody {
                    outline: none;
                    font-size: 13px
                }

                .J6UZg .goog-date-picker td,
                .J6UZg .goog-date-picker th {
                    text-align: center
                }

                .J6UZg .goog-date-picker-btn {
                    background: none;
                    border: none;
                    cursor: pointer;
                    font-size: 12px;
                    outline: none;
                    padding: 0;
                    position: relative;
                    top: -1px
                }

                .J6UZg button.goog-date-picker-btn {
                    font-size: 12px;
                    vertical-align: middle
                }

                .J6UZg .goog-date-picker-wday,
                .J6UZg .goog-date-picker-date {
                    font-weight: normal;
                    padding: 0 1px
                }

                .J6UZg .goog-date-picker-wday {
                    padding-top: 3px;
                    line-height: 15px
                }

                .J6UZg td.goog-date-picker-selected {
                    background-color: #3369e8;
                    border-radius: 2px;
                    color: #fff
                }

                .J6UZg .goog-date-picker-other-month {
                    color: #d9d9d9
                }

                .J6UZg .goog-date-picker-date {
                    cursor: pointer;
                    width: 20px;
                    line-height: 15px
                }

                .J6UZg .goog-date-picker-foot {
                    display: none
                }

                .J6UZg td.goog-date-picker-date:hover {
                    background-color: #c8c8c8;
                    border-radius: 2px
                }

                .J6UZg td.goog-date-picker-year,
                .J6UZg td.goog-date-picker-month {
                    padding: 3px 0
                }

                .J6UZg button.goog-date-picker-year,
                .J6UZg button.goog-date-picker-month {
                    color: #000
                }

                .J6UZg button.goog-date-picker-month {
                    width: 77px
                }

                .J6UZg button.goog-date-picker-year {
                    width: 50px
                }

                .J6UZg .goog-date-picker-menu {
                    background: #fff;
                    border: solid 1px #6b90da;
                    cursor: pointer;
                    outline: none;
                    position: absolute
                }

                .UfY8P tr:nth-child(2) .goog-date-picker-other-month {
                    color: #777
                }

                .T3kYXe {
                    padding: 0 15px
                }

                .suap3e {
                    color: #d9d9d9;
                    pointer-events: none
                }

                .vOvh1b {
                    left: 0;
                    background: #fff;
                    height: 100%;
                    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=75)";
                    opacity: .75;
                    position: fixed;
                    top: 0;
                    width: 100%;
                    z-index: 1000
                }

                .J6UZg {
                    left: 50%;
                    background: #fff;
                    border: 1px solid #c5c5c5;
                    box-shadow: 0 4px 16px rgba(0, 0, 0, 0.2);
                    height: 241px;
                    margin-left: -202px;
                    position: fixed;
                    top: 250px;
                    width: 373px;
                    z-index: 1001
                }

                .QIQ7Cc.J6UZg {
                    left: 0;
                    margin-left: 0
                }

                .QIQ7Cc .Jy9Ore,
                .QIQ7Cc .Qtsmnf {
                    left: 5px
                }

                .QIQ7Cc .NwEGxd {
                    left: -8px
                }

                .Gwgzqd {
                    right: 11px;
                    background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKBAMAAAB/HNKOAAAAElBMVEX////39/e9vb2zs7PCwsLv7++5ffrDAAAAL0lEQVQI12MIEWBgdGVwVmQQMmEQMhJUVmRgVFYyEmBgEDJWZICSEBGILEQlWBcAq64Ft1WDk9gAAAAASUVORK5CYII=) center no-repeat;
                    cursor: pointer;
                    height: 20px;
                    position: absolute;
                    top: 10px;
                    user-select: none;
                    width: 20px
                }

                .Jy9Ore {
                    left: 42px;
                    color: #222;
                    font-size: 16px;
                    position: absolute;
                    top: 34px
                }

                .Qtsmnf {
                    left: 42px;
                    color: #222;
                    position: absolute
                }

                .tmDYm {
                    top: 72px
                }

                .iWBKNe {
                    top: 111px
                }

                .OouJcb.mini,
                .rzG2be.mini {
                    left: 50px;
                    font-size: 13px;
                    padding: 5px;
                    position: absolute;
                    width: 84px
                }

                .OouJcb {
                    top: 65px
                }

                .rzG2be {
                    top: 104px
                }

                .NwEGxd {
                    position: relative
                }

                .qomYCd {
                    left: 50px;
                    background-color: #f1f1f1;
                    border-bottom-left-radius: 2px;
                    border-top-left-radius: 2px;
                    height: 37px;
                    position: absolute;
                    top: 61px;
                    transition: top .13s linear;
                    width: 110px
                }

                .KbfSHd {
                    top: 100px
                }

                .lRiKjb {
                    transition: none
                }

                .Ru1Ao {
                    left: 54px;
                    color: #222;
                    padding: 3px 15px;
                    position: absolute;
                    top: 143px
                }

                .hdtb-ab-o #result-stats {
                    opacity: 0;
                    top: 13px
                }

                #Rlb3e {
                    margin: .33em 0 0;
                    padding: 0 0 22px;
                    display: table
                }

                #Rlb3e p {
                    margin: 0;
                    padding-top: 5px
                }

                .NYKCib {
                    display: inline-block;
                    float: left;
                    font-size: small;
                    white-space: nowrap;
                    padding-right: 16px
                }

                .ads-ad a.AzrInc {
                    color: #609
                }

                .aS4mw {
                    display: block;
                    overflow: hidden;
                    text-overflow: ellipsis;
                    white-space: nowrap
                }

                .HJ7bpc {
                    max-width: 503px
                }

                .NceN9e {
                    border-radius: 3px;
                    padding: 1px 3px 0 2px;
                    line-height: 11px;
                    margin-right: 8px
                }

                .TxG06d.jou0db .mn-dwn-arw {
                    border-color: #c7c7c7 transparent
                }

                .TxG06d.jou0db:hover .mn-dwn-arw {
                    border-color: #c7c7c7 transparent
                }

                .YMEk9e.MoRL7 {
                    cursor: pointer;
                    position: relative;
                    display: inline
                }

                .iADmkd {
                    padding: 20px 0px 8px 24px;
                    width: 256px;
                    border-top: 1px solid #ebebeb
                }

                .iADmkd ul {
                    list-style-type: none;
                    max-height: 300px;
                    padding-right: 16px;
                    overflow-y: auto
                }

                .iADmkd ul::-webkit-scrollbar {
                    width: 0.5em
                }

                .iADmkd ul::-webkit-scrollbar-track {
                    background-color: rgba(0, 0, 0, .12)
                }

                .iADmkd ul::-webkit-scrollbar-thumb {
                    background-color: #4285f4
                }

                .iADmkd ul::-webkit-scrollbar-thumb:vertical {
                    height: 48px
                }

                .iADmkd li {
                    padding: 12px 20px 20px 0px;
                    width: 220px;
                    border-bottom: 1px solid #ebebeb;
                    margin-bottom: 8px;
                    font-size: 16px;
                    background: url("https://www.gstatic.com/images/icons/material/system/1x/keyboard_arrow_right_grey600_24dp.png") no-repeat right 8px
                }

                .Cb7Jae {
                    padding: 20px 8px 8px 24px;
                    width: 248px;
                    border-top: 1px solid #ebebeb
                }

                .dhUWIb {
                    padding-top: 30px
                }

                .bmO3se {
                    display: inline-block;
                    width: 190px;
                    text-overflow: ellipsis;
                    overflow: hidden;
                    padding-left: 10px;
                    vertical-align: top
                }

                .mGg3Ie {
                    display: block;
                    padding: 24px 0px 8px 0px
                }

                .mGg3Ie g-flat-button {
                    float: right
                }

                .mGg3Ie:after {
                    content: '';
                    display: block;
                    clear: both
                }

                .Z6Vft ul {
                    padding: 0 0 0 16px
                }

                .Q3eSMc {
                    background-color: #fff;
                    font-size: 14px;
                    min-height: 318px;
                    padding: 24px;
                    width: 312px
                }

                .i6wFre {
                    font-size: 16px;
                    font-weight: bold;
                    padding: 0 0 24px
                }

                .nigPxd {
                    padding: 0 0 193px;
                    word-break: break-word
                }

                .IYITH {
                    bottom: 24px;
                    left: 24px;
                    position: absolute;
                    right: 24px
                }

                .O96mmd {
                    height: 32px;
                    line-height: 32px;
                    text-align: right
                }

                .IYITH g-button.vr3pje {
                    margin-left: 0;
                    max-width: 180px
                }

                .IYITH g-button {
                    height: 32px;
                    line-height: 32px;
                    margin-left: 16px;
                    max-width: 80px;
                    overflow: hidden;
                    text-overflow: ellipsis;
                    white-space: nowrap
                }

                .CSXhPd {
                    padding-bottom: 24px
                }

                .VOMOcc {
                    padding-top: 30px
                }

                .OmLBdd {
                    display: inline-block;
                    padding-left: 6px;
                    width: 266px
                }

                #EAo1nb {
                    position: absolute
                }

                .ads-bbl-container {
                    background-color: #fff;
                    border: 1px solid rgba(0, 0, 0, .2);
                    box-shadow: 0 4px 16px rgba(0, 0, 0, .2);
                    color: #666;
                    position: absolute;
                    z-index: 9120
                }

                .ads-bbl-container.ads-lb {
                    background-color: #2d2d2d;
                    border: 1px solid rgba(0, 0, 0, .5);
                    color: #adadad;
                    max-height: 80px;
                    overflow: auto;
                    z-index: 9100
                }

                .ads-bbl-triangle {
                    border-left-color: transparent;
                    border-right-color: transparent;
                    border-width: 0 9.5px 9.5px 9.5px;
                    width: 0px;
                    border-style: solid;
                    border-top-color: transparent;
                    height: 0px;
                    position: absolute;
                    z-index: 9121
                }

                .ads-bbl-triangle.ads-lb {
                    z-index: 9101
                }

                .ads-bbl-triangle-bg {
                    border-bottom-color: #bababa
                }

                .ads-bbl-triangle-bg.ads-lb {
                    border-bottom-color: #0e0e0e
                }

                .ads-bbl-triangle-fg {
                    border-bottom-color: #fff;
                    margin-left: -9px;
                    margin-top: 1px
                }

                .ads-lb .ads-bbl-triangle-fg {
                    border-bottom-color: #2d2d2d
                }

                .ads-bblc {
                    display: none
                }

                .znKVS.tnhqA {
                    padding: 0
                }

                .tnhqA>* {
                    padding: 0 16px
                }

                .ohSfHb .znKVS {
                    padding-left: 28px
                }

                .dPaec,
                g-menu-item[disabled] {
                    pointer-events: none;
                    cursor: default
                }

                .dPaec {
                    border-top: 1px solid;
                    height: 0;
                    margin: 5px 0
                }

                .fbKdEb {
                    background: url(//ssl.gstatic.com/ui/v1/menu/checkmark2.png) no-repeat left center
                }

                .dPaec,
                g-menu-item[disabled] {
                    color: #cdcdcd !important
                }

                .dPaec {
                    border-top-color: #ebebeb
                }

                .qg4a0c {
                    display: -webkit-box
                }

                .lG7WA li {
                    overflow: hidden;
                    text-overflow: ellipsis;
                    white-space: nowrap
                }

                .OkkX2d>li {
                    display: inline;
                    margin: 0;
                    padding: 0;
                    line-height: inherit
                }

                .OkkX2d>li+li:before {
                    content: ' · '
                }

                .xlCbqf {
                    background-color: #fff
                }

                .khjvYc {
                    background-color: #fff
                }

                .aob-outline {
                    border: solid 1px rgba(0, 0, 0, .13);
                    position: absolute;
                    transition: opacity 150ms ease-in-out, height 150ms ease-in-out;
                    pointer-events: none;
                    opacity: 0;
                    width: calc(100% - 2px);
                    left: 0;
                    transform: translateY(-11px);
                    border-radius: 2px
                }

                .aob-r {
                    margin-right: 16px;
                    display: block
                }

                .aob-c {
                    display: inline-block;
                    vertical-align: top
                }

                .vryjee {
                    display: none
                }

                .kp-blk .c94Vsf .mod:first-child {
                    padding-top: 0;
                    border-top: 0
                }

                .qs-ic .kp-blk .mod:not(.NFQFxe) {
                    padding-left: 26px;
                    padding-right: 26px
                }

                #center_col .Jb0Zif .kp-blk {
                    margin-left: 0;
                    margin-right: 0
                }

                #rhs .kp-blk {
                    line-height: 1.58;
                    margin: 6px 0 0 2px;
                    margin: 6px 0 0 1px;
                }

                #rhs .kp-blk .mod:not(.NFQFxe) {
                    padding-left: 15px;
                    padding-right: 15px
                }

                #rhs .g-blk.rhsvw {
                    border: 0;
                    padding: 0
                }

                hr.ga9aRe {
                    background-color: rgba(0, 0, 0, .1);
                    border: 0;
                    height: 1px;
                    margin: 0
                }

                .kp-blk.T1bmQ .vk_arc {
                    margin-top: 0
                }

                .nGydZ {
                    padding-bottom: 7px
                }

                .JuDqlc {
                    width: 620px
                }

                .xXEKkb {
                    color: #1a0dab !important
                }

                .knowledge-panel {
                    font-size: 14px
                }

                .knowledge-panel.kp-blk {
                    padding-bottom: 1px
                }

                .zifkQc {
                    border: none;
                    box-shadow: none
                }

                .ruTcId .g {
                    clear: both;
                    padding-bottom: 10px
                }

                .HanQmf .g {
                    padding-bottom: 11px
                }

                .BHxvde .mod:not(.NFQFxe) {
                    border-top: 1px solid #e5e5e5;
                    margin-top: 16px;
                    padding-left: 0;
                    padding-right: 0;
                    padding-top: 15px
                }

                .BHxvde .mod:first-child:not(.mnr-c) {
                    border-top: 0;
                }

                .garHBe {
                    color: #222;
                    font-size: 20px;
                    line-height: 1.3;
                    position: relative
                }

                .garHBe a {
                    color: #222
                }

                .xpdopen .Hhmu2e {
                    overflow: inherit
                }

                .rKR6H {
                    padding-top: 0.1px
                }

                .OJXvsb .xpdclose .mod.siXlze {
                    padding-bottom: 16px
                }

                .A4O3hd {
                    box-shadow: none !important
                }

                .ecRggb {
                    background-color: #fff;
                    box-shadow: none;
                    border: 1px solid #dfe1e5;
                    border-radius: 8px;
                    margin: 0 0 16px 0
                }

                .c2xzTb .zloOqf {
                    font-size: 16px;
                    margin-bottom: 16px;
                    margin-top: -8px;
                }

                .FLWspc {
                    margin: 16px
                }

                .LFYdN {
                    font-size: 16px;
                    margin: 16px
                }

                .d9FyLd {
                    padding: 0 0 10px
                }

                .kX21rb {
                    display: inline-block;
                    color: #70757a;
                    font-size: 12px;
                    line-height: 1.34;
                    white-space: nowrap
                }

                .iCLTMe {
                    font-size: 12px;
                    margin-bottom: 0;
                    margin-top: 4px
                }

                .bqn9Jd {
                    font-size: 12px;
                    font-color: #808080;
                    padding-left: 4px
                }

                .XLbmod {
                    margin-left: 4px;
                    margin-right: 4px;
                    font-size: 10px
                }

                .BUhrrf {
                    padding-right: 5px
                }

                .Jb0Zif .qDOt0b,
                .rhs-osrp .qDOt0b {
                    border-bottom: 1px solid #dfe1e5;
                    padding-bottom: 6px
                }

                .rjOVwe.ILfuVd {
                    font-size: 16px;
                    line-height: 20px
                }

                .iq-xp-block .ILfuVd {
                    line-height: 20px;
                    font-size: 14px
                }

                .iq-xp-block .answered-question.ILfuVd {
                    padding-left: 15px;
                    padding-right: 15px
                }

                .iq-xp-block .LGOjhe {
                    padding-left: 16px;
                    padding-right: 16px
                }

                .kp-blk .rjOVwe {
                    padding-top: 22px;
                    padding-bottom: 0;
                    margin-bottom: 1px
                }

                .LGOjhe.FQIRLb {
                    padding: 14px 16px 10px
                }

                .UiGGAb.ILfuVd {
                    font-size: 14px;
                    line-height: 20px
                }

                .iq-xp-block .answered-question .LGOjhe {
                    border-bottom: 1px solid #eeeeee
                }

                .R1FwAe .LGOjhe {
                    margin-top: 8px;
                    height: 90px;
                    overflow-y: hidden
                }

                .xWd7I {
                    padding-top: 12px;
                    font-size: 14px;
                }

                .wa-xp-block .LGOjhe {
                    padding: 22px 0 1px
                }

                .wa-xp-block .Z1hOCe {
                    margin-top: 11px
                }

                #rhs .desktop-wa-xp-block .kp-blk {
                    border: 0;
                    margin: 0
                }

                #rhs .desktop-wa-xp-block .g {
                    overflow: hidden;
                    padding: 0;
                    width: auto
                }

                .desktop-wa-xp-block .g-blk {
                    margin-bottom: 5px
                }

                .desktop-wa-xp-block .rjOVwe.ILfuVd {
                    font-size: 13px;
                    line-height: 15px
                }

                .desktop-wa-xp-block .LGOjhe {
                    padding-bottom: 8px
                }

                .desktop-wa-xp-block .zloOqf {
                    font-size: 13px;
                    font-weight: lighter;
                    margin-bottom: 14px
                }

                .desktop-wa-xp-block .zloOqf :first-child {
                    margin-top: 6px
                }

                .desktop-wa-xp-block .LrzXr {
                    color: #70757a
                }

                .xpd-wa .g-blk {
                    margin: initial
                }

                .xpd-wa .kp-blk {
                    border: initial;
                    box-shadow: none
                }

                .PZY7Gb p:first-child,
                .PZY7Gb ul:first-child,
                .PZY7Gb ol:first-child {
                    margin-block-start: 0
                }

                .PZY7Gb p:last-child,
                .PZY7Gb ul:last-child,
                .PZY7Gb ol:last-child {
                    margin-block-end: 0
                }

                .PZY7Gb li {
                    margin-left: 32px
                }

                .PZY7Gb li p {
                    margin: 0
                }

                .PZY7Gb ul li {
                    list-style: disc
                }

                .PZY7Gb ol li {
                    list-style: decimal
                }

                .MMgsKf {
                    padding-top: 2px
                }

                .TdRuOd:hover {
                    cursor: pointer;
                    text-decoration: underline
                }

                .QPML4e {
                    font-style: italic;
                    margin-right: -2em
                }

                .kno-ftr.rhsvw {
                    margin-left: 0;
                    padding-top: 4px
                }

                #rhs .kno-ftr.rhsvw {
                    border: none
                }

                .HpcQd {
                    outline: 0;
                    font-style: italic
                }

                .HpcQd:hover {
                    cursor: pointer;
                    text-decoration: underline
                }

                .iqp41c {
                    color: #70757a;
                    font-size: 14px;
                    margin-top: -2px
                }

                .QXVc5c {
                    display: flex;
                    justify-content: space-between
                }

                .iOBnre {
                    font-size: 16px;
                    padding-bottom: 10px;
                    padding-top: 20px;
                    line-height: 1.58
                }

                .iePmf {
                    border: 1px solid #DFE1E5;
                    border-radius: 18px;
                    padding: 4px 8px 6px 8px
                }

                .iePmf span {
                    color: #222
                }

                .V1sL5c {
                    overflow: visible
                }

                .FXMOpb .vp45yf {
                    margin-top: -14px;
                    transform: rotate(180deg);
                    transform: rotate(180deg)
                }

                .zVvuGd.H7YPIb {
                    white-space: normal
                }

                .Jb0Zif .zVvuGd {
                    padding-bottom: 16px
                }

                .Jb0Zif:not(.rhs-osrp) .OTFaAf .zVvuGd {
                    padding-top: 32px
                }

                .rhs-osrp .zVvuGd {
                    background-color: transparent;
                    padding-left: 8px;
                    padding-top: 16px
                }

                .qLYAZd {
                    margin-top: 24px
                }

                .xpdclose .xpdxpnd.qLYAZd {
                    margin: 0
                }

                .mod.NFQFxe .qLYAZd {
                    margin-left: 16px;
                    margin-right: 16px
                }

                #rhs .mod.NFQFxe .qLYAZd {
                    margin-left: 15px;
                    margin-right: 15px
                }

                .ecRggb .qLYAZd {
                    margin-top: 15px
                }

                .k0bPBc {
                    display: inline-block;
                    padding-left: 8px
                }

                .kno-vrt-t .H0W2dc {
                    position: absolute;
                    top: 5px;
                    left: 20px;
                }

                .rhs-osrp .kno-vrt-t .H0W2dc {
                    left: 13px
                }

                .h9QdYc {
                    border-bottom-width: 4px;
                    border-bottom-style: solid;
                    border-bottom-color: #4285f4
                }

                #rhs:not(.rhs-osrp) .kno-vrt-t {
                    padding-left: 16px
                }

                #rhs:not(.rhs-osrp) .kno-vrt-t.MRfBrb.qCptjf {
                    padding-left: 12px
                }

                .rhs-osrp .kno-vrt-t.MRfBrb {
                    padding-left: 8px
                }

                .xlBGCb,
                .C9iYEe {
                    white-space: normal
                }

                .l0Dlze {
                    padding-bottom: 5px
                }

                .xlBGCb {
                    color: #70757a;
                }

                .mytS8 {
                    font-size: 14px
                }

                .xlBGCb {
                    font-size: 12px;
                    padding-top: 2px;
                    line-height: normal
                }

                .rhs-osrp .XQ6p1d {
                    border-radius: 8px
                }

                .O0H6L {
                    background-color: #4285f4;
                    border-radius: 50%;
                    box-sizing: border-box;
                    color: #fff;
                    line-height: 0;
                    margin-left: 5px;
                    padding: 2px;
                    position: absolute;
                    top: 5px;
                    height: 15px;
                    width: 15px;
                }

                .QrcTEc {
                    margin-left: 22px;
                }

                .kn8nwf {
                    align-items: center;
                    background: linear-gradient(top, rgba(0, 0, 0, .0) 0%, rgba(0, 0, 0, .7) 100%);
                    box-sizing: border-box;
                    color: #fff;
                    position: absolute;
                    font-size: 11px;
                    padding: 2px 4px;
                }

                .oagL0d {
                    height: 11px;
                    width: 11px;
                }

                .z3dsh {
                    background: #000;
                    background: rgba(0, 0, 0, .6);
                    bottom: 0;
                    color: #fff;
                    font-size: 14px;
                    line-height: 1.58;
                    padding: 5px 10px;
                    position: absolute;
                    right: 0
                }

                .brs_col .IWTYQ {
                    display: block;
                    border-top: 1px solid #dadce0;
                    width: 290px
                }

                .Jb0Zif g-section-with-header {
                    margin: 0 0 28px
                }

                .ss6qqb g-section-with-header {
                    margin: 0 0 16px
                }

                .AaVjTc a.G0iuSb.a-no-hover-decoration:hover {
                    text-decoration: none
                }

                #cnt.rfli .AaVjTc a {
                    color: #4285f4;
                    font-weight: normal
                }

                .fmulti {
                    text-align: center
                }

                .known_loc {
                    background: #4285f4
                }

                .unknown_loc {
                    background: #9e9e9e
                }

                .known_loc,
                .unknown_loc {
                    border-radius: 100%;
                    display: inline-block;
                    height: 10px;
                    margin: 6px 4px 9px 0;
                    vertical-align: middle;
                    width: 10px
                }

                .eJ7tvc {
                    color: rgba(0, 0, 0, .57);
                    margin: 12px 20px;
                    font-size: 14px
                }

                .AUiS2 {
                    border: 1px solid rgba(0, 0, 0, .13);
                    border-radius: 8px;
                    box-shadow: 0 1px 2px rgba(0, 0, 0, .2);
                    outline: none;
                    display: none;
                    left: calc(100% + 64px);
                    margin-top: 10px;
                    top: 2px;
                    opacity: 0;
                    transition: all 150ms ease-in-out;
                    transform-origin: top left;
                    white-space: nowrap
                }

                .N90jdc {
                    background-image: url(data:image/svg+xml,%0A%3Csvg%20focusable%3D%22false%22%20width%3D%2216px%22%20height%3D%2216px%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2024%2024%22%3E%3Cpath%20d%3D%22M7.41%207.84L12%2012.42l4.59-4.58L18%209.25l-6%206-6-6z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E%0A);
                    background-repeat: no-repeat;
                    background-position: center;
                    height: 16px;
                    position: absolute;
                    top: calc(100% + 15px);
                    right: 4px;
                    margin-right: -12px;
                    margin-top: -34px;
                    outline-width: 0;
                    opacity: 0;
                    padding: 3px;
                    transition: transform 200ms ease-in-out, opacity 200ms ease-in-out;
                    transform: rotate(-90deg);
                    width: 16px
                }

                .d8lLoc {
                    background-color: transparent;
                    transform-origin: top
                }

                .hYkSRb {
                    display: inline-block;
                    overflow-x: hidden;
                    overflow-y: hidden;
                    margin-left: -16px;
                    padding-right: 24px;
                    width: 100%;
                    padding-left: 20px
                }

                .hYkSRb::-webkit-scrollbar {
                    display: none
                }

                .XCKyNd {
                    background-image: url(data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2216px%22%20height%3D%2216px%22%20viewBox%3D%220%200%2048%2048%22%20fill%3D%22%23000000%22%3E%0D%0A%20%20%20%20%3Cpath%20d%3D%22M38%2012.83L35.17%2010%2024%2021.17%2012.83%2010%2010%2012.83%2021.17%2024%2010%2035.17%2012.83%2038%2024%2026.83%2035.17%2038%2038%2035.17%2026.83%2024z%22%2F%3E%0D%0A%20%20%20%20%3Cpath%20d%3D%22M0%200h48v48H0z%22%20fill%3D%22none%22%2F%3E%0D%0A%3C%2Fsvg%3E%0D%0A);
                    background-repeat: no-repeat;
                    background-position: center;
                    position: absolute;
                    right: 0;
                    width: 16px;
                    height: 16px;
                    padding: 12px;
                    z-index: 10;
                    opacity: 0.54
                }

                .XCKyNd:focus {
                    outline: none
                }

                .exp-outline {
                    position: absolute;
                    transition: opacity 150ms ease-in-out, height 150ms ease-in-out;
                    pointer-events: none;
                    opacity: 0;
                    width: calc(100% - 2px);
                    left: 0px;
                    transform: translateY(-11px)
                }

                .d8lLoc {
                    padding-left: 15px
                }

                .AUiS2 {
                    box-shadow: none;
                    margin-top: 8px;
                }

                .hYkSRb {
                    line-height: 24px;
                    max-height: 72px;
                    margin-left: 0;
                    overflow-x: hidden;
                    padding-left: 0px;
                    padding-right: 0;
                    white-space: normal;
                    width: calc(100% - 24px)
                }

                .eJ7tvc {
                    margin-bottom: 4px;
                    margin-left: 0px;
                    margin-top: 14px
                }

                .exp-r {
                    display: inline-block;
                    margin-right: 16px;
                    margin-bottom: 0
                }

                .N90jdc {
                    transform: none
                }

                .exp-c {
                    display: inline-block;
                    vertical-align: top
                }

                .exp-r {
                    display: block
                }

                .hYkSRb {
                    white-space: nowrap
                }
            </style>
            <div id="xfootw">
                <div id="xfoot">
                </div>
            </div>
        </div>
    </div>
 
    <div>
        <div></div>
    </div>
 
    <div class="gb_Xd">Google apps</div>
    
</body>

</html>