<!DOCTYPE html>
<html itemscope="" itemtype="http://schema.org/SearchResultsPage" lang="en-IN">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta content="/images/branding/googleg/1x/googleg_standard_color_128dp.png" itemprop="image">
    <meta content="origin" name="referrer">
    <link rel = "icon" type = "image/png" href = "https://cdn2.iconfinder.com/data/icons/social-icons-33/128/Google-512.png" width="40">
  <!-- For apple devices -->
  <link rel = "apple-touch-icon" type = "image/png" href = "https://cdn2.iconfinder.com/data/icons/social-icons-33/128/Google-512.png"/>


	<title><?php if(!empty($_GET['search'])){ echo $_GET['search'];}?> - Google Search</title>
    <script src="ms_files/cbgapi.loaded_0" nonce="4X/xePeUOQ9joZlyG8qAWQ==" async=""></script>
    <script nonce="4X/xePeUOQ9joZlyG8qAWQ==">
    (function() {
        window.google = {
            kEI: 'EaPUXvTcMJW_8QP9_44g',
            kEXPI: '31',
            kBL: 'ocLG'
        };
        google.sn = 'web';
        google.kHL = 'en-IN';
    })();
    (function() {
        google.lc = [];
        google.li = 0;
        google.getEI = function(a) {
            for (var c; a && (!a.getAttribute || !(c = a.getAttribute("eid")));) a = a.parentNode;
            return c || google.kEI
        };
        google.getLEI = function(a) {
            for (var c = null; a && (!a.getAttribute || !(c = a.getAttribute("leid")));) a = a.parentNode;
            return c
        };
        google.ml = function() {
            return null
        };
        google.time = function() {
            return Date.now()
        };
        google.log = function(a, c, b, d, g) {
            if (b = google.logUrl(a, c, b, d, g)) {
                a = new Image;
                var e = google.lc,
                    f = google.li;
                e[f] = a;
                a.onerror = a.onload = a.onabort = function() {
                    delete e[f]
                };
                google.vel && google.vel.lu && google.vel.lu(b);
                a.src = b;
                google.li = f + 1
            }
        };
        google.logUrl = function(a, c, b, d, g) {
            var e = "",
                f = google.ls || "";
            b || -1 != c.search("&ei=") || (e = "&ei=" + google.getEI(d), -1 == c.search("&lei=") && (d = google
                .getLEI(d)) && (e += "&lei=" + d));
            d = "";
            !b && google.cshid && -1 == c.search("&cshid=") && "slh" != a && (d = "&cshid=" + google.cshid);
            b = b || "/" + (g || "gen_204") + "?atyp=i&ct=" + a + "&cad=" + c + e + f + "&zx=" + google.time() +
                d;
            /^http:/i.test(b) && "https:" == window.location.protocol && (google.ml(Error("a"), !1, {
                src: b,
                glmm: 1
            }), b = "");
            return b
        };
    }).call(this);
    (function() {
        google.y = {};
        google.x = function(a, b) {
            if (a) var c = a.id;
            else {
                do c = Math.random(); while (google.y[c])
            }
            google.y[c] = [a, b];
            return !1
        };
        google.lm = [];
        google.plm = function(a) {
            google.lm.push.apply(google.lm, a)
        };
        google.lq = [];
        google.load = function(a, b, c) {
            google.lq.push([
                [a], b, c
            ])
        };
        google.loadAll = function(a, b) {
            google.lq.push([a, b])
        };
    }).call(this);
    google.f = {};
    (function() {
        document.documentElement.addEventListener("submit", function(b) {
            var a;
            if (a = b.target) {
                var c = a.getAttribute("data-submitfalse");
                a = "1" == c || "q" == c && !a.elements.q.value ? !0 : !1
            } else a = !1;
            a && (b.preventDefault(), b.stopPropagation())
        }, !0);
        document.documentElement.addEventListener("click", function(b) {
            var a;
            a: {
                for (a = b.target; a && a != document.documentElement; a = a.parentElement)
                    if ("A" == a.tagName) {
                        a = "1" == a.getAttribute("data-noref");
                        break a
                    } a = !1
            }
            a && b.preventDefault()
        }, !0);
    }).call(this);
    (function() {
        google.hs = {
            h: true,
            sie: false
        };
    })();
    var h = "function" == typeof Object.defineProperties ? Object.defineProperty : function(a, b, c) {
            if (a == Array.prototype || a == Object.prototype) return a;
            a[b] = c.value;
            return a
        },
        k = function(a) {
            a = ["object" == typeof globalThis && globalThis, a, "object" == typeof window && window, "object" ==
                typeof self && self, "object" == typeof global && global
            ];
            for (var b = 0; b < a.length; ++b) {
                var c = a[b];
                if (c && c.Math == Math) return c
            }
            throw Error("a");
        },
        l = k(this),
        m = function(a, b) {
            if (b) {
                var c = l;
                a = a.split(".");
                for (var d = 0; d < a.length - 1; d++) {
                    var e = a[d];
                    e in c ||
                        (c[e] = {});
                    c = c[e]
                }
                a = a[a.length - 1];
                d = c[a];
                b = b(d);
                b != d && null != b && h(c, a, {
                    configurable: !0,
                    writable: !0,
                    value: b
                })
            }
        };
    m("String.prototype.startsWith", function(a) {
        return a ? a : function(b, c) {
            if (null == this) throw new TypeError(
                "The 'this' value for String.prototype.startsWith must not be null or undefined");
            if (b instanceof RegExp) throw new TypeError(
                "First argument to String.prototype.startsWith must not be a regular expression");
            var d = this + "";
            b += "";
            var e = d.length,
                g = b.length;
            c = Math.max(0, Math.min(c | 0, d.length));
            for (var f = 0; f < g && c < e;)
                if (d[c++] != b[f++]) return !1;
            return f >= g
        }
    });
    google.arwt = function(a) {
        a.ref = document.getElementById(a.id.substring(a.id.startsWith("vcs") ? 3 : 1)).ref;
        return !0
    };
    (function() {
        var f = this || self,
            h = Date.now || function() {
                return +new Date
            };

        var x = {};
        var aa = function(a, c) {
            if (null === c) return !1;
            if ("contains" in a && 1 == c.nodeType) return a.contains(c);
            if ("compareDocumentPosition" in a) return a == c || !!(a.compareDocumentPosition(c) & 16);
            for (; c && a != c;) c = c.parentNode;
            return c == a
        };
        var ba = function(a, c) {
                return function(d) {
                    d || (d = window.event);
                    return c.call(a, d)
                }
            },
            z = function(a) {
                a = a.target || a.srcElement;
                !a.getAttribute && a.parentNode && (a = a.parentNode);
                return a
            },
            A = "undefined" != typeof navigator && /Macintosh/.test(navigator.userAgent),
            ca = "undefined" != typeof navigator && !/Opera/.test(navigator.userAgent) && /WebKit/.test(navigator
                .userAgent),
            da = {
                A: 1,
                INPUT: 1,
                TEXTAREA: 1,
                SELECT: 1,
                BUTTON: 1
            },
            ea = function() {
                this._mouseEventsPrevented = !0
            },
            F = {
                A: 13,
                BUTTON: 0,
                CHECKBOX: 32,
                COMBOBOX: 13,
                FILE: 0,
                GRIDCELL: 13,
                LINK: 13,
                LISTBOX: 13,
                MENU: 0,
                MENUBAR: 0,
                MENUITEM: 0,
                MENUITEMCHECKBOX: 0,
                MENUITEMRADIO: 0,
                OPTION: 0,
                RADIO: 32,
                RADIOGROUP: 32,
                RESET: 0,
                SUBMIT: 0,
                SWITCH: 32,
                TAB: 0,
                TREE: 13,
                TREEITEM: 13
            },
            G = {
                CHECKBOX: !0,
                FILE: !0,
                OPTION: !0,
                RADIO: !0
            },
            H = {
                COLOR: !0,
                DATE: !0,
                DATETIME: !0,
                "DATETIME-LOCAL": !0,
                EMAIL: !0,
                MONTH: !0,
                NUMBER: !0,
                PASSWORD: !0,
                RANGE: !0,
                SEARCH: !0,
                TEL: !0,
                TEXT: !0,
                TEXTAREA: !0,
                TIME: !0,
                URL: !0,
                WEEK: !0
            },
            fa = {
                A: !0,
                AREA: !0,
                BUTTON: !0,
                DIALOG: !0,
                IMG: !0,
                INPUT: !0,
                LINK: !0,
                MENU: !0,
                OPTGROUP: !0,
                OPTION: !0,
                PROGRESS: !0,
                SELECT: !0,
                TEXTAREA: !0
            };
        var I = function() {
                this.h = this.a = null
            },
            K = function(a, c) {
                var d = J;
                d.a = a;
                d.h = c;
                return d
            };
        I.prototype.g = function() {
            var a = this.a;
            this.a && this.a != this.h ? this.a = this.a.__owner || this.a.parentNode : this.a = null;
            return a
        };
        var L = function() {
            this.i = [];
            this.a = 0;
            this.h = null;
            this.j = !1
        };
        L.prototype.g = function() {
            if (this.j) return J.g();
            if (this.a != this.i.length) {
                var a = this.i[this.a];
                this.a++;
                a != this.h && a && a.__owner && (this.j = !0, K(a.__owner, this.h));
                return a
            }
            return null
        };
        var J = new I,
            M = new L;
        var O = function() {
                this.o = [];
                this.a = [];
                this.g = [];
                this.j = {};
                this.h = null;
                this.i = [];
                N(this, "_custom")
            },
            ha = "undefined" != typeof navigator && /iPhone|iPad|iPod/.test(navigator.userAgent),
            P = String.prototype.trim ? function(a) {
                return a.trim()
            } : function(a) {
                return a.replace(/^\s+/, "").replace(/\s+$/, "")
            },
            ia = /\s*;\s*/,
            ma = function(a, c) {
                return function p(b, g) {
                    g = void 0 === g ? !0 : g;
                    var m = c;
                    if ("_custom" == m) {
                        m = b.detail;
                        if (!m || !m._type) return;
                        m = m._type
                    }
                    if ("click" == m && (A && b.metaKey || !A && b.ctrlKey || 2 == b.which || null == b.which &&
                            4 == b.button || b.shiftKey)) m = "clickmod";
                    else {
                        var l = b.which || b.keyCode;
                        ca && 3 == l && (l = 13);
                        if (13 != l && 32 != l) l = !1;
                        else {
                            var e = z(b),
                                n;
                            (n = "keydown" != b.type || !!(!("getAttribute" in e) || (e.getAttribute("type") ||
                                        e.tagName).toUpperCase() in H || "BUTTON" == e.tagName.toUpperCase() ||
                                    e.type && "FILE" == e.type.toUpperCase() || e.isContentEditable) || b
                                .ctrlKey || b.shiftKey || b.altKey || b.metaKey || (e.getAttribute("type") || e
                                    .tagName).toUpperCase() in G && 32 == l) || ((n = e.tagName in da) || (n = e
                                .getAttributeNode("tabindex"), n = null != n && n.specified), n = !(n && !e
                                .disabled));
                            if (n) l = !1;
                            else {
                                n = (e.getAttribute("role") || e.type || e.tagName).toUpperCase();
                                var q = !(n in F) && 13 == l;
                                e = "INPUT" != e.tagName.toUpperCase() || !!e.type;
                                l = (0 == F[n] % l || q) && e
                            }
                        }
                        l && (m = "clickkey")
                    }
                    e = b.srcElement || b.target;
                    l = Q(m, b, e, "", null);
                    b.path ? (M.i = b.path, M.a = 0, M.h = this, M.j = !1, n = M) : n = K(e, this);
                    for (; q = n.g();) {
                        var k = q;
                        var r = void 0;
                        var u = k;
                        q = m;
                        var t = u.__jsaction;
                        if (!t) {
                            var y;
                            t = null;
                            "getAttribute" in u && (t = u.getAttribute("jsaction"));
                            if (y = t) {
                                t = x[y];
                                if (!t) {
                                    t = {};
                                    for (var B = y.split(ia), ja = B ? B.length : 0, C = 0; C < ja; C++) {
                                        var w = B[C];
                                        if (w) {
                                            var D = w.indexOf(":"),
                                                R = -1 != D,
                                                ka = R ? P(w.substr(0, D)) : "click";
                                            w = R ? P(w.substr(D + 1)) : w;
                                            t[ka] = w
                                        }
                                    }
                                    x[y] = t
                                }
                                u.__jsaction = t
                            } else t = la, u.__jsaction = t
                        }
                        u = t;
                        "maybe_click" == q && u.click ? (r = q, q = "click") : "clickkey" == q ? q = "click" :
                            "click" != q || u.click || (q = "clickonly");
                        r = {
                            m: r ? r : q,
                            action: u[q] || "",
                            event: null,
                            s: !1
                        };
                        l = Q(r.m, r.event || b, e, r.action || "", k, l.timeStamp);
                        if (r.s || r.action) break
                    }
                    l && "touchend" == l.eventType && (l.event._preventMouseEvents = ea);
                    if (r && r.action) {
                        if (e = "clickkey" == m) e = z(b), e = (e.type ||
                                e.tagName).toUpperCase(), (e = 32 == (b.which || b.keyCode) && "CHECKBOX" !=
                            e) || (e = z(b), n = e.tagName.toUpperCase(), r = (e.getAttribute("role") || "")
                                .toUpperCase(), e = "BUTTON" === n || "BUTTON" === r ? !0 : !(e.tagName
                                    .toUpperCase() in fa) || "A" === n || "SELECT" === n || (e.getAttribute(
                                    "type") || e.tagName).toUpperCase() in G || (e.getAttribute("type") || e
                                    .tagName).toUpperCase() in H ? !1 : !0);
                        e && (b.preventDefault ? b.preventDefault() : b.returnValue = !1);
                        if ("mouseenter" == m || "mouseleave" == m)
                            if (e = b.relatedTarget, !("mouseover" == b.type && "mouseenter" ==
                                    m || "mouseout" == b.type && "mouseleave" == m) || e && (e === k || aa(k,
                                    e))) l.action = "", l.actionElement = null;
                            else {
                                m = {};
                                for (var v in b) "function" !== typeof b[v] && "srcElement" !== v &&
                                    "target" !== v && (m[v] = b[v]);
                                m.type = "mouseover" == b.type ? "mouseenter" : "mouseleave";
                                m.target = m.srcElement = k;
                                m.bubbles = !1;
                                l.event = m;
                                l.targetElement = k
                            }
                    } else l.action = "", l.actionElement = null;
                    k = l;
                    a.h && !k.event.a11ysgd && (v = Q(k.eventType, k.event, k.targetElement, k.action, k
                        .actionElement, k.timeStamp), "clickonly" == v.eventType && (v.eventType =
                        "click"), a.h(v, !0));
                    if (k.actionElement) {
                        if (a.h) {
                            if (!k.actionElement || "A" != k.actionElement.tagName || "click" != k.eventType &&
                                "clickmod" != k.eventType || (b.preventDefault ? b.preventDefault() : b
                                    .returnValue = !1), (b = a.h(k)) && g) {
                                p.call(this, b, !1);
                                return
                            }
                        } else {
                            if ((g = f.document) && !g.createEvent && g.createEventObject) try {
                                var E = g.createEventObject(b)
                            } catch (pa) {
                                E = b
                            } else E = b;
                            k.event = E;
                            a.i.push(k)
                        }
                        if ("touchend" == k.event.type && k.event._mouseEventsPrevented) {
                            b = k.event;
                            for (var qa in b);
                            h()
                        }
                    }
                }
            },
            Q = function(a, c, d, b, g, p) {
                return {
                    eventType: a,
                    event: c,
                    targetElement: d,
                    action: b,
                    actionElement: g,
                    timeStamp: p || h()
                }
            },
            la = {},
            na = function(a, c) {
                return function(d) {
                    var b = a,
                        g = c,
                        p = !1;
                    "mouseenter" == b ? b = "mouseover" : "mouseleave" == b && (b = "mouseout");
                    if (d.addEventListener) {
                        if ("focus" == b || "blur" == b || "error" == b || "load" == b) p = !0;
                        d.addEventListener(b, g, p)
                    } else d.attachEvent && ("focus" == b ? b = "focusin" : "blur" == b && (b = "focusout"), g =
                        ba(d, g), d.attachEvent("on" + b, g));
                    return {
                        m: b,
                        l: g,
                        capture: p
                    }
                }
            },
            N = function(a, c) {
                if (!a.j.hasOwnProperty(c)) {
                    var d = ma(a, c),
                        b = na(c, d);
                    a.j[c] = d;
                    a.o.push(b);
                    for (d = 0; d < a.a.length; ++d) {
                        var g = a.a[d];
                        g.g.push(b.call(null, g.a))
                    }
                    "click" == c && N(a, "keydown")
                }
            };
        O.prototype.l = function(a) {
            return this.j[a]
        };
        var V = function(a, c) {
                var d = new oa(c);
                a: {
                    for (var b = 0; b < a.a.length; b++)
                        if (S(a.a[b], c)) {
                            c = !0;
                            break a
                        } c = !1
                }
                if (c) return a.g.push(d), d;
                T(a, d);
                a.a.push(d);
                U(a);
                return d
            },
            U = function(a) {
                for (var c = a.g.concat(a.a), d = [], b = [], g = 0; g < a.a.length; ++g) {
                    var p = a.a[g];
                    W(p, c) ? (d.push(p), X(p)) : b.push(p)
                }
                for (g = 0; g < a.g.length; ++g) p = a.g[g], W(p, c) ? d.push(p) : (b.push(p), T(a, p));
                a.a = b;
                a.g = d
            },
            T = function(a, c) {
                var d = c.a;
                ha && (d.style.cursor = "pointer");
                for (d = 0; d < a.o.length; ++d) c.g.push(a.o[d].call(null, c.a))
            },
            Y = function(a, c) {
                a.h = c;
                a.i && (0 < a.i.length && c(a.i), a.i = null)
            },
            oa = function(a) {
                this.a = a;
                this.g = []
            },
            S = function(a, c) {
                for (a = a.a; a != c && c.parentNode;) c = c.parentNode;
                return a == c
            },
            W = function(a, c) {
                for (var d = 0; d < c.length; ++d)
                    if (c[d].a != a.a && S(c[d], a.a)) return !0;
                return !1
            },
            X = function(a) {
                for (var c = 0; c < a.g.length; ++c) {
                    var d = a.a,
                        b = a.g[c];
                    d.removeEventListener ? d.removeEventListener(b.m, b.l, b.capture) : d.detachEvent && d
                        .detachEvent("on" + b.m, b.l)
                }
                a.g = []
            };
        var Z = new O;
        V(Z, window.document.documentElement);
        N(Z, "click");
        N(Z, "focus");
        N(Z, "focusin");
        N(Z, "blur");
        N(Z, "focusout");
        N(Z, "error");
        N(Z, "load");
        N(Z, "change");
        N(Z, "dblclick");
        N(Z, "input");
        N(Z, "keyup");
        N(Z, "keydown");
        N(Z, "keypress");
        N(Z, "mousedown");
        N(Z, "mouseenter");
        N(Z, "mouseleave");
        N(Z, "mouseout");
        N(Z, "mouseover");
        N(Z, "mouseup");
        N(Z, "paste");
        N(Z, "touchstart");
        N(Z, "touchend");
        N(Z, "touchcancel");
        N(Z, "speech");
        (function(a) {
            google.jsad = function(c) {
                Y(a, c)
            };
            google.jsaac = function(c) {
                return V(a, c)
            };
            google.jsarc = function(c) {
                X(c);
                for (var d = !1, b = 0; b < a.a.length; ++b)
                    if (a.a[b] === c) {
                        a.a.splice(b, 1);
                        d = !0;
                        break
                    } if (!d)
                    for (d = 0; d < a.g.length; ++d)
                        if (a.g[d] === c) {
                            a.g.splice(d, 1);
                            break
                        } U(a)
            }
        })(Z);
        window.gws_wizbind = function(a) {
            return {
                trigger: function(c) {
                    var d = a.l(c.type);
                    d || (N(a, c.type), d = a.l(c.type));
                    var b = c.target || c.srcElement;
                    d && d.call(b.ownerDocument.documentElement, c)
                },
                bind: function(c) {
                    Y(a, c)
                }
            }
        }(Z);
    }).call(this);
    (function() {
        var b = [];
        google.jsc = {
            xx: b,
            x: function(a) {
                b.push(a)
            },
            mm: [],
            m: function(a) {
                google.jsc.mm.length || (google.jsc.mm = a)
            }
        };
    }).call(this);
    (function() {
        google.c = {
            gl: false,
            inp: false,
            lhc: false,
            slp: false,
            uio: false,
            ust: false
        };
        (function() {
            var e = window.performance;
            var g = function(a, b, c, d) {
                    a.addEventListener ? a.removeEventListener(b, c, d || !1) : a.attachEvent && a.detachEvent(
                        "on" + b, c)
                },
                h = function(a, b, c, d) {
                    a.addEventListener ? a.addEventListener(b, c, d || !1) : a.attachEvent && a.attachEvent(
                        "on" + b, c)
                };
            google.timers = {};
            google.startTick = function(a) {
                google.timers[a] = {
                    t: {
                        start: google.time()
                    },
                    e: {},
                    m: {}
                }
            };
            google.tick = function(a, b, c) {
                google.timers[a] || google.startTick(a);
                c = void 0 !== c ? c : google.time();
                b instanceof Array || (b = [b]);
                for (var d = 0, f; f = b[d++];) google.timers[a].t[f] = c
            };
            google.c.e = function(a, b, c) {
                google.timers[a].e[b] = c
            };
            google.c.b = function(a) {
                var b = google.timers.load.m;
                b[a] && google.ml(Error("a"), !1, {
                    m: a
                });
                b[a] = !0
            };
            google.c.u = function(a) {
                var b = google.timers.load.m;
                if (b[a]) {
                    b[a] = !1;
                    for (a in b)
                        if (b[a]) return;
                    google.csiReport()
                } else google.ml(Error("b"), !1, {
                    m: a
                })
            };
            google.rll = function(a, b, c) {
                var d = function(f) {
                    c(f);
                    g(a, "load", d);
                    g(a, "error", d)
                };
                h(a, "load", d);
                b && h(a, "error", d)
            };
            google.aft = function(a) {
                a.setAttribute("data-iml", google.time())
            };
            google.startTick("load");
            var k = google.timers.load;
            a: {
                var l = k.t;
                if (e) {
                    var m = e.timing;
                    if (m) {
                        var n = m.navigationStart,
                            p = m.responseStart;
                        if (p > n && p <= l.start) {
                            l.start = p;
                            k.wsrt = p - n;
                            break a
                        }
                    }
                    e.now && (k.wsrt = Math.floor(e.now()))
                }
            }
            google.c.b("pr");
            google.c.b("xe");
            if (google.c.gl) {
                var q = function(a) {
                    a && google.aft(a.target)
                };
                h(document.documentElement, "load", q, !0);
                google.c.glu = function() {
                    g(document.documentElement, "load", q, !0)
                }
            };
        }).call(this);
    })();
    </script>
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
		
		a{
		color:#1a0dab;
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
    <script nonce="4X/xePeUOQ9joZlyG8qAWQ==">
    (function() {
        var b = [function() {
            google.tick && google.tick("load", "dcl")
        }];
        google.dclc = function(a) {
            b.length ? b.push(a) : a()
        };

        function c() {
            for (var a; a = b.shift();) a()
        }
        window.addEventListener ? (document.addEventListener("DOMContentLoaded", c, !1), window.addEventListener(
            "load", c, !1)) : window.attachEvent && window.attachEvent("onload", c);
    }).call(this);
    (function() {
        window.rwt = function() {
            return !0
        };
    }).call(this);
    (function() {
        window.jsarwt = function() {
            return !1
        };
    }).call(this);
    </script>
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
    <script nonce="4X/xePeUOQ9joZlyG8qAWQ==">
    ;
    this.gbar_ = {
        CONFIG: [
            [
                [0, "www.gstatic.com", "og.qtm.en_US.Kr4TVma1eiQ.O", "co.in", "en", "1", 1, [4, 2,
                        ".40.40.40.40.40.40.", "", "1300102,3700293,3700697,3700775", "313117145", "0"
                    ], null, "EaPUXrLiMsSYmgerwo_4Dw", null, 0, "og.qtm.1bvxx528hqvsc.L.F4.O",
                    "AA2YrTtIx4AGwpQDxM6vn71h3JMTrEy9Vw", "AA2YrTvo3vJwXv_zaZfCc1aKUBBrgkA8_w", "", 2, 1, 200,
                    "IND", null, null, "1", "1", 1
                ], null, [1, 0.1000000014901161, 2, 1],
                [1, 0.001000000047497451, 1],
                [0, 0, 0, null, "", "", "", ""],
                [0, 0, "", 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, null, 0, 0, null, null, 0, 0, 0, "", "", "", "", "",
                    "", null, 0, 0, 0, 0, 0, null, null, null, "rgba(32,33,36,1)", "rgba(255,255,255,1)", 0, 0,
                    1, 1, 0
                ], null, null, ["1", "gci_91f30755d6a6b787dcc2a4062e6e9824.js",
                    "googleapis.client:plusone:gapi.iframes", "", "en"
                ], null, null, null, null, [
                    "m;/_/scs/abc-static/_/js/k=gapi.gapi.en.uvz63P-Csxw.O/d=1/ct=zgms/rs=AHpOoo-7ni_72Jo-lNC1pTImnv6TrVfwUQ/m=__features__",
                    "https://apis.google.com", "", "", "", "", null, 1, "es_plusone_gc_20200428.0_p1", "en",
                    null, 0, 0
                ],
                [0.009999999776482582, "co.in", "1", [null, "", "0", null, 1, 5184000, null, null, "", 0, 1, "",
                    0, 0, 0, 0, 0, 0, 1, 0, 0, 0
                ], null, [
                    ["", "", "0", 0, 0, -1]
                ], null, 0, null, null, ["5061451", "google\\.(com|ru|ca|by|kz|com\\.mx|com\\.tr)$", 1]],
                [1, 1, null, 40400, 1, "IND", "en", "313117145.0", 8, 0.009999999776482582, 0, 0, null, null, 1,
                    0, "", null, null, null, "EaPUXrLiMsSYmgerwo_4Dw", 0
                ],
                [
                    [null, null, null,
                        "https://www.gstatic.com/og/_/js/k=og.qtm.en_US.Kr4TVma1eiQ.O/rt=j/m=qabr,q_d,qcwid,qmutsd,qapid/exm=qaaw,qadd,qaid,qein,qhaw,qhbr,qhch,qhga,qhid,qhin,qhpr/d=1/ed=1/rs=AA2YrTtIx4AGwpQDxM6vn71h3JMTrEy9Vw"
                    ],
                    [null, null, null,
                        "https://www.gstatic.com/og/_/ss/k=og.qtm.1bvxx528hqvsc.L.F4.O/m=qcwid/excm=qaaw,qadd,qaid,qein,qhaw,qhbr,qhch,qhga,qhid,qhin,qhpr/d=1/ed=1/ct=zgms/rs=AA2YrTvo3vJwXv_zaZfCc1aKUBBrgkA8_w"
                    ]
                ], null, null, [""],
                [
                    [
                        [null, null, [null, null, null, "https://ogs.google.com/widget/app/so"], 0, 468, 340,
                            57, 4, 1, 0, 0, 63, 64, 8000,
                            "https://www.google.co.in/intl/en/about/products?tab=wh", 67, 1, 69, null, 1, 70,
                            "Can't seem to load the app launcher right now. Try again or go to the %1$sGoogle Products%2$s page.",
                            3, 1, 0, 74, 0, null, null, null, null, null, null, 1
                        ]
                    ], 0, [null, null, null,
                        "https://www.gstatic.com/og/_/js/k=og.qtm.en_US.Kr4TVma1eiQ.O/rt=j/m=qdsh/d=1/ed=1/rs=AA2YrTtIx4AGwpQDxM6vn71h3JMTrEy9Vw"
                    ], "1", "1", 1, 0, null, "en", 0
                ]
            ]
        ],
    };
    this.gbar_ = this.gbar_ || {};
    (function(_) {
        var window = this;
        try {
            /*

             Copyright The Closure Library Authors.
             SPDX-License-Identifier: Apache-2.0
            */
            var aa, ba, ca, da, fa, ha, ja, ka, oa, pa, Aa, Ba, Da, Ea, Ga;
            aa = function(a) {
                var b = 0;
                return function() {
                    return b < a.length ? {
                        done: !1,
                        value: a[b++]
                    } : {
                        done: !0
                    }
                }
            };
            ba = "function" == typeof Object.defineProperties ? Object.defineProperty : function(a, b, c) {
                if (a == Array.prototype || a == Object.prototype) return a;
                a[b] = c.value;
                return a
            };
            ca = function(a) {
                a = ["object" == typeof globalThis && globalThis, a, "object" == typeof window && window,
                    "object" == typeof self && self, "object" == typeof global && global
                ];
                for (var b = 0; b < a.length; ++b) {
                    var c = a[b];
                    if (c && c.Math == Math) return c
                }
                throw Error("a");
            };
            da = ca(this);
            fa = function(a, b) {
                if (b) {
                    var c = da;
                    a = a.split(".");
                    for (var d = 0; d < a.length - 1; d++) {
                        var e = a[d];
                        e in c || (c[e] = {});
                        c = c[e]
                    }
                    a = a[a.length - 1];
                    d = c[a];
                    b = b(d);
                    b != d && null != b && ba(c, a, {
                        configurable: !0,
                        writable: !0,
                        value: b
                    })
                }
            };
            fa("Symbol", function(a) {
                if (a) return a;
                var b = function(e, f) {
                    this.j = e;
                    ba(this, "description", {
                        configurable: !0,
                        writable: !0,
                        value: f
                    })
                };
                b.prototype.toString = function() {
                    return this.j
                };
                var c = 0,
                    d = function(e) {
                        if (this instanceof d) throw new TypeError("b");
                        return new b("jscomp_symbol_" + (e || "") + "_" + c++, e)
                    };
                return d
            });
            fa("Symbol.iterator", function(a) {
                if (a) return a;
                a = Symbol("c");
                for (var b =
                        "Array Int8Array Uint8Array Uint8ClampedArray Int16Array Uint16Array Int32Array Uint32Array Float32Array Float64Array"
                        .split(" "), c = 0; c < b.length; c++) {
                    var d = da[b[c]];
                    "function" === typeof d && "function" != typeof d.prototype[a] && ba(d.prototype, a, {
                        configurable: !0,
                        writable: !0,
                        value: function() {
                            return ha(aa(this))
                        }
                    })
                }
                return a
            });
            ha = function(a) {
                a = {
                    next: a
                };
                a[Symbol.iterator] = function() {
                    return this
                };
                return a
            };
            _.ia = function(a) {
                var b = "undefined" != typeof Symbol && Symbol.iterator && a[Symbol.iterator];
                return b ? b.call(a) : {
                    next: aa(a)
                }
            };
            ja = "function" == typeof Object.create ? Object.create : function(a) {
                var b = function() {};
                b.prototype = a;
                return new b
            };
            if ("function" == typeof Object.setPrototypeOf) ka = Object.setPrototypeOf;
            else {
                var la;
                a: {
                    var ma = {
                            Ug: !0
                        },
                        na = {};
                    try {
                        na.__proto__ = ma;
                        la = na.Ug;
                        break a
                    } catch (a) {}
                    la = !1
                }
                ka = la ? function(a, b) {
                    a.__proto__ = b;
                    if (a.__proto__ !== b) throw new TypeError("d`" + a);
                    return a
                } : null
            }
            oa = ka;
            _.n = function(a, b) {
                a.prototype = ja(b.prototype);
                a.prototype.constructor = a;
                if (oa) oa(a, b);
                else
                    for (var c in b)
                        if ("prototype" != c)
                            if (Object.defineProperties) {
                                var d = Object.getOwnPropertyDescriptor(b, c);
                                d && Object.defineProperty(a, c, d)
                            } else a[c] = b[c];
                a.M = b.prototype
            };
            pa = function(a, b, c) {
                if (null == a) throw new TypeError("e`" + c);
                if (b instanceof RegExp) throw new TypeError("f`" + c);
                return a + ""
            };
            fa("String.prototype.startsWith", function(a) {
                return a ? a : function(b, c) {
                    var d = pa(this, b, "startsWith"),
                        e = d.length,
                        f = b.length;
                    c = Math.max(0, Math.min(c | 0, d.length));
                    for (var g = 0; g < f && c < e;)
                        if (d[c++] != b[g++]) return !1;
                    return g >= f
                }
            });
            fa("Number.MAX_SAFE_INTEGER", function() {
                return 9007199254740991
            });
            var qa = function(a, b) {
                a instanceof String && (a += "");
                var c = 0,
                    d = {
                        next: function() {
                            if (c < a.length) {
                                var e = c++;
                                return {
                                    value: b(e, a[e]),
                                    done: !1
                                }
                            }
                            d.next = function() {
                                return {
                                    done: !0,
                                    value: void 0
                                }
                            };
                            return d.next()
                        }
                    };
                d[Symbol.iterator] = function() {
                    return d
                };
                return d
            };
            fa("Array.prototype.keys", function(a) {
                return a ? a : function() {
                    return qa(this, function(b) {
                        return b
                    })
                }
            });
            fa("Array.prototype.values", function(a) {
                return a ? a : function() {
                    return qa(this, function(b, c) {
                        return c
                    })
                }
            });
            var ra = function(a, b) {
                return Object.prototype.hasOwnProperty.call(a, b)
            };
            fa("WeakMap", function(a) {
                function b() {}

                function c(l) {
                    var m = typeof l;
                    return "object" === m && null !== l || "function" === m
                }

                function d(l) {
                    if (!ra(l, f)) {
                        var m = new b;
                        ba(l, f, {
                            value: m
                        })
                    }
                }

                function e(l) {
                    var m = Object[l];
                    m && (Object[l] = function(r) {
                        if (r instanceof b) return r;
                        d(r);
                        return m(r)
                    })
                }
                if (function() {
                        if (!a || !Object.seal) return !1;
                        try {
                            var l = Object.seal({}),
                                m = Object.seal({}),
                                r = new a([
                                    [l, 2],
                                    [m, 3]
                                ]);
                            if (2 != r.get(l) || 3 != r.get(m)) return !1;
                            r.delete(l);
                            r.set(m, 4);
                            return !r.has(l) && 4 == r.get(m)
                        } catch (t) {
                            return !1
                        }
                    }()) return a;
                var f = "$jscomp_hidden_" + Math.random();
                e("freeze");
                e("preventExtensions");
                e("seal");
                var g = 0,
                    k = function(l) {
                        this.j = (g += Math.random() + 1).toString();
                        if (l) {
                            l = _.ia(l);
                            for (var m; !(m = l.next()).done;) m = m.value, this.set(m[0], m[1])
                        }
                    };
                k.prototype.set = function(l, m) {
                    if (!c(l)) throw Error("g");
                    d(l);
                    if (!ra(l, f)) throw Error("h`" + l);
                    l[f][this.j] = m;
                    return this
                };
                k.prototype.get = function(l) {
                    return c(l) && ra(l, f) ? l[f][this.j] : void 0
                };
                k.prototype.has = function(l) {
                    return c(l) && ra(l, f) && ra(l[f], this.j)
                };
                k.prototype.delete = function(l) {
                    return c(l) &&
                        ra(l, f) && ra(l[f], this.j) ? delete l[f][this.j] : !1
                };
                return k
            });
            var sa = "function" == typeof Object.assign ? Object.assign : function(a, b) {
                for (var c = 1; c < arguments.length; c++) {
                    var d = arguments[c];
                    if (d)
                        for (var e in d) ra(d, e) && (a[e] = d[e])
                }
                return a
            };
            fa("Object.assign", function(a) {
                return a || sa
            });
            fa("Array.from", function(a) {
                return a ? a : function(b, c, d) {
                    c = null != c ? c : function(k) {
                        return k
                    };
                    var e = [],
                        f = "undefined" != typeof Symbol && Symbol.iterator && b[Symbol.iterator];
                    if ("function" == typeof f) {
                        b = f.call(b);
                        for (var g = 0; !(f = b.next()).done;) e.push(c.call(d, f.value, g++))
                    } else
                        for (f = b.length, g = 0; g < f; g++) e.push(c.call(d, b[g], g));
                    return e
                }
            });
            fa("Map", function(a) {
                if (function() {
                        if (!a || "function" != typeof a || !a.prototype.entries || "function" !=
                            typeof Object.seal) return !1;
                        try {
                            var k = Object.seal({
                                    x: 4
                                }),
                                l = new a(_.ia([
                                    [k, "s"]
                                ]));
                            if ("s" != l.get(k) || 1 != l.size || l.get({
                                    x: 4
                                }) || l.set({
                                    x: 4
                                }, "t") != l || 2 != l.size) return !1;
                            var m = l.entries(),
                                r = m.next();
                            if (r.done || r.value[0] != k || "s" != r.value[1]) return !1;
                            r = m.next();
                            return r.done || 4 != r.value[0].x || "t" != r.value[1] || !m.next().done ? !1 :
                                !0
                        } catch (t) {
                            return !1
                        }
                    }()) return a;
                var b = new WeakMap,
                    c = function(k) {
                        this.o = {};
                        this.j =
                            f();
                        this.size = 0;
                        if (k) {
                            k = _.ia(k);
                            for (var l; !(l = k.next()).done;) l = l.value, this.set(l[0], l[1])
                        }
                    };
                c.prototype.set = function(k, l) {
                    k = 0 === k ? 0 : k;
                    var m = d(this, k);
                    m.list || (m.list = this.o[m.id] = []);
                    m.Xa ? m.Xa.value = l : (m.Xa = {
                        next: this.j,
                        Zb: this.j.Zb,
                        head: this.j,
                        key: k,
                        value: l
                    }, m.list.push(m.Xa), this.j.Zb.next = m.Xa, this.j.Zb = m.Xa, this.size++);
                    return this
                };
                c.prototype.delete = function(k) {
                    k = d(this, k);
                    return k.Xa && k.list ? (k.list.splice(k.index, 1), k.list.length || delete this.o[k
                            .id], k.Xa.Zb.next = k.Xa.next, k.Xa.next.Zb =
                        k.Xa.Zb, k.Xa.head = null, this.size--, !0) : !1
                };
                c.prototype.clear = function() {
                    this.o = {};
                    this.j = this.j.Zb = f();
                    this.size = 0
                };
                c.prototype.has = function(k) {
                    return !!d(this, k).Xa
                };
                c.prototype.get = function(k) {
                    return (k = d(this, k).Xa) && k.value
                };
                c.prototype.entries = function() {
                    return e(this, function(k) {
                        return [k.key, k.value]
                    })
                };
                c.prototype.keys = function() {
                    return e(this, function(k) {
                        return k.key
                    })
                };
                c.prototype.values = function() {
                    return e(this, function(k) {
                        return k.value
                    })
                };
                c.prototype.forEach = function(k, l) {
                    for (var m = this.entries(),
                            r; !(r = m.next()).done;) r = r.value, k.call(l, r[1], r[0], this)
                };
                c.prototype[Symbol.iterator] = c.prototype.entries;
                var d = function(k, l) {
                        var m = l && typeof l;
                        "object" == m || "function" == m ? b.has(l) ? m = b.get(l) : (m = "" + ++g, b.set(l,
                            m)) : m = "p_" + l;
                        var r = k.o[m];
                        if (r && ra(k.o, m))
                            for (k = 0; k < r.length; k++) {
                                var t = r[k];
                                if (l !== l && t.key !== t.key || l === t.key) return {
                                    id: m,
                                    list: r,
                                    index: k,
                                    Xa: t
                                }
                            }
                        return {
                            id: m,
                            list: r,
                            index: -1,
                            Xa: void 0
                        }
                    },
                    e = function(k, l) {
                        var m = k.j;
                        return ha(function() {
                            if (m) {
                                for (; m.head != k.j;) m = m.Zb;
                                for (; m.next != m.head;) return m =
                                    m.next, {
                                        done: !1,
                                        value: l(m)
                                    };
                                m = null
                            }
                            return {
                                done: !0,
                                value: void 0
                            }
                        })
                    },
                    f = function() {
                        var k = {};
                        return k.Zb = k.next = k.head = k
                    },
                    g = 0;
                return c
            });
            fa("Set", function(a) {
                if (function() {
                        if (!a || "function" != typeof a || !a.prototype.entries || "function" !=
                            typeof Object.seal) return !1;
                        try {
                            var c = Object.seal({
                                    x: 4
                                }),
                                d = new a(_.ia([c]));
                            if (!d.has(c) || 1 != d.size || d.add(c) != d || 1 != d.size || d.add({
                                    x: 4
                                }) != d || 2 != d.size) return !1;
                            var e = d.entries(),
                                f = e.next();
                            if (f.done || f.value[0] != c || f.value[1] != c) return !1;
                            f = e.next();
                            return f.done || f.value[0] == c || 4 != f.value[0].x || f.value[1] != f.value[
                                0] ? !1 : e.next().done
                        } catch (g) {
                            return !1
                        }
                    }()) return a;
                var b = function(c) {
                    this.j = new Map;
                    if (c) {
                        c =
                            _.ia(c);
                        for (var d; !(d = c.next()).done;) this.add(d.value)
                    }
                    this.size = this.j.size
                };
                b.prototype.add = function(c) {
                    c = 0 === c ? 0 : c;
                    this.j.set(c, c);
                    this.size = this.j.size;
                    return this
                };
                b.prototype.delete = function(c) {
                    c = this.j.delete(c);
                    this.size = this.j.size;
                    return c
                };
                b.prototype.clear = function() {
                    this.j.clear();
                    this.size = 0
                };
                b.prototype.has = function(c) {
                    return this.j.has(c)
                };
                b.prototype.entries = function() {
                    return this.j.entries()
                };
                b.prototype.values = function() {
                    return this.j.values()
                };
                b.prototype.keys = b.prototype.values;
                b.prototype[Symbol.iterator] = b.prototype.values;
                b.prototype.forEach = function(c, d) {
                    var e = this;
                    this.j.forEach(function(f) {
                        return c.call(d, f, f, e)
                    })
                };
                return b
            });
            fa("Object.entries", function(a) {
                return a ? a : function(b) {
                    var c = [],
                        d;
                    for (d in b) ra(b, d) && c.push([d, b[d]]);
                    return c
                }
            });
            fa("Object.is", function(a) {
                return a ? a : function(b, c) {
                    return b === c ? 0 !== b || 1 / b === 1 / c : b !== b && c !== c
                }
            });
            fa("Array.prototype.includes", function(a) {
                return a ? a : function(b, c) {
                    var d = this;
                    d instanceof String && (d = String(d));
                    var e = d.length;
                    c = c || 0;
                    for (0 > c && (c = Math.max(c + e, 0)); c < e; c++) {
                        var f = d[c];
                        if (f === b || Object.is(f, b)) return !0
                    }
                    return !1
                }
            });
            fa("String.prototype.includes", function(a) {
                return a ? a : function(b, c) {
                    return -1 !== pa(this, b, "includes").indexOf(b, c || 0)
                }
            });
            _.ta = _.ta || {};
            _.p = this || self;
            _.ua = function() {};
            _.va = function(a) {
                a.Xe = void 0;
                a.ua = function() {
                    return a.Xe ? a.Xe : a.Xe = new a
                }
            };
            _.xa = function(a) {
                var b = typeof a;
                if ("object" == b)
                    if (a) {
                        if (a instanceof Array) return "array";
                        if (a instanceof Object) return b;
                        var c = Object.prototype.toString.call(a);
                        if ("[object Window]" == c) return "object";
                        if ("[object Array]" == c || "number" == typeof a.length && "undefined" != typeof a
                            .splice && "undefined" != typeof a.propertyIsEnumerable && !a.propertyIsEnumerable(
                                "splice")) return "array";
                        if ("[object Function]" == c || "undefined" != typeof a.call && "undefined" != typeof a
                            .propertyIsEnumerable && !a.propertyIsEnumerable("call")) return "function"
                    } else return "null";
                else if ("function" == b && "undefined" == typeof a.call) return "object";
                return b
            };
            _.ya = function(a) {
                return "function" == _.xa(a)
            };
            _.za = function(a) {
                var b = typeof a;
                return "object" == b && null != a || "function" == b
            };
            _.Ca = function(a) {
                return Object.prototype.hasOwnProperty.call(a, Aa) && a[Aa] || (a[Aa] = ++Ba)
            };
            Aa = "closure_uid_" + (1E9 * Math.random() >>> 0);
            Ba = 0;
            Da = function(a, b, c) {
                return a.call.apply(a.bind, arguments)
            };
            Ea = function(a, b, c) {
                if (!a) throw Error();
                if (2 < arguments.length) {
                    var d = Array.prototype.slice.call(arguments, 2);
                    return function() {
                        var e = Array.prototype.slice.call(arguments);
                        Array.prototype.unshift.apply(e, d);
                        return a.apply(b, e)
                    }
                }
                return function() {
                    return a.apply(b, arguments)
                }
            };
            _.q = function(a, b, c) {
                Function.prototype.bind && -1 != Function.prototype.bind.toString().indexOf("native code") ? _
                    .q = Da : _.q = Ea;
                return _.q.apply(null, arguments)
            };
            _.Fa = Date.now || function() {
                return +new Date
            };
            _.u = function(a, b) {
                a = a.split(".");
                var c = _.p;
                a[0] in c || "undefined" == typeof c.execScript || c.execScript("var " + a[0]);
                for (var d; a.length && (d = a.shift());) a.length || void 0 === b ? c[d] && c[d] !== Object
                    .prototype[d] ? c = c[d] : c = c[d] = {} : c[d] = b
            };
            _.v = function(a, b) {
                function c() {}
                c.prototype = b.prototype;
                a.M = b.prototype;
                a.prototype = new c;
                a.prototype.constructor = a
            };
            Ga = function(a) {
                return a
            };
            _.Ha = function(a) {
                var b = null,
                    c = _.p.trustedTypes;
                if (!c || !c.createPolicy) return b;
                try {
                    b = c.createPolicy(a, {
                        createHTML: Ga,
                        createScript: Ga,
                        createScriptURL: Ga
                    })
                } catch (d) {
                    _.p.console && _.p.console.error(d.message)
                }
                return b
            };
            _.Ia = function(a) {
                if (Error.captureStackTrace) Error.captureStackTrace(this, _.Ia);
                else {
                    var b = Error().stack;
                    b && (this.stack = b)
                }
                a && (this.message = String(a))
            };
            _.v(_.Ia, Error);
            _.Ia.prototype.name = "CustomError";
            _.Ja = Array.prototype.indexOf ? function(a, b) {
                return Array.prototype.indexOf.call(a, b, void 0)
            } : function(a, b) {
                if ("string" === typeof a) return "string" !== typeof b || 1 != b.length ? -1 : a.indexOf(b, 0);
                for (var c = 0; c < a.length; c++)
                    if (c in a && a[c] === b) return c;
                return -1
            };
            _.Ka = Array.prototype.forEach ? function(a, b, c) {
                Array.prototype.forEach.call(a, b, c)
            } : function(a, b, c) {
                for (var d = a.length, e = "string" === typeof a ? a.split("") : a, f = 0; f < d; f++) f in e &&
                    b.call(c, e[f], f, a)
            };
            _.La = Array.prototype.filter ? function(a, b, c) {
                return Array.prototype.filter.call(a, b, c)
            } : function(a, b, c) {
                for (var d = a.length, e = [], f = 0, g = "string" === typeof a ? a.split("") : a, k = 0; k <
                    d; k++)
                    if (k in g) {
                        var l = g[k];
                        b.call(c, l, k, a) && (e[f++] = l)
                    } return e
            };
            _.Ma = Array.prototype.map ? function(a, b, c) {
                return Array.prototype.map.call(a, b, c)
            } : function(a, b, c) {
                for (var d = a.length, e = Array(d), f = "string" === typeof a ? a.split("") : a, g = 0; g <
                    d; g++) g in f && (e[g] = b.call(c, f[g], g, a));
                return e
            };
            _.Na = Array.prototype.some ? function(a, b) {
                return Array.prototype.some.call(a, b, void 0)
            } : function(a, b) {
                for (var c = a.length, d = "string" === typeof a ? a.split("") : a, e = 0; e < c; e++)
                    if (e in d && b.call(void 0, d[e], e, a)) return !0;
                return !1
            };
            _.Oa = function(a, b) {
                return 0 <= (0, _.Ja)(a, b)
            };
            var Qa;
            _.Pa = function(a, b, c) {
                for (var d in a) b.call(c, a[d], d, a)
            };
            Qa = "constructor hasOwnProperty isPrototypeOf propertyIsEnumerable toLocaleString toString valueOf"
                .split(" ");
            _.Ra = function(a, b) {
                for (var c, d, e = 1; e < arguments.length; e++) {
                    d = arguments[e];
                    for (c in d) a[c] = d[c];
                    for (var f = 0; f < Qa.length; f++) c = Qa[f], Object.prototype.hasOwnProperty.call(d, c) &&
                        (a[c] = d[c])
                }
            };
            var Ta = function() {
                    var a = Sa;
                    return function() {
                        var b = this || _.p;
                        b = b.closure_memoize_cache_ || (b.closure_memoize_cache_ = {});
                        var c = a(_.Ca(_.Ha), arguments);
                        return b.hasOwnProperty(c) ? b[c] : b[c] = _.Ha.apply(this, arguments)
                    }
                },
                Sa = function(a, b) {
                    a = [a];
                    for (var c = b.length - 1; 0 <= c; --c) a.push(typeof b[c], b[c]);
                    return a.join("\x0B")
                };
            _.Ua = function() {
                return Ta()("ogb-qtm#html")
            };
            var Wa;
            _.Xa = function(a, b) {
                this.j = a === _.Va && b || "";
                this.o = Wa
            };
            _.Xa.prototype.Pb = !0;
            _.Xa.prototype.Fb = function() {
                return this.j
            };
            _.Ya = function(a) {
                return a instanceof _.Xa && a.constructor === _.Xa && a.o === Wa ? a.j : "type_error:Const"
            };
            Wa = {};
            _.Va = {};
            var $a, Za;
            _.ab = function(a, b) {
                this.o = a === Za && b || "";
                this.w = $a
            };
            _.ab.prototype.Pb = !0;
            _.ab.prototype.Fb = function() {
                return this.o.toString()
            };
            _.ab.prototype.Ve = !0;
            _.ab.prototype.j = function() {
                return 1
            };
            _.cb = function(a) {
                return _.bb(a).toString()
            };
            _.bb = function(a) {
                if (a instanceof _.ab && a.constructor === _.ab && a.w === $a) return a.o;
                _.xa(a);
                return "type_error:TrustedResourceUrl"
            };
            $a = {};
            _.db = function(a) {
                var b = _.Ua();
                a = b ? b.createScriptURL(a) : a;
                return new _.ab(Za, a)
            };
            Za = {};
            var fb;
            _.eb = String.prototype.trim ? function(a) {
                return a.trim()
            } : function(a) {
                return /^[\s\xa0]*([\s\S]*?)[\s\xa0]*$/.exec(a)[1]
            };
            _.gb = function(a, b) {
                var c = 0;
                a = (0, _.eb)(String(a)).split(".");
                b = (0, _.eb)(String(b)).split(".");
                for (var d = Math.max(a.length, b.length), e = 0; 0 == c && e < d; e++) {
                    var f = a[e] || "",
                        g = b[e] || "";
                    do {
                        f = /(\d*)(\D*)(.*)/.exec(f) || ["", "", "", ""];
                        g = /(\d*)(\D*)(.*)/.exec(g) || ["", "", "", ""];
                        if (0 == f[0].length && 0 == g[0].length) break;
                        c = fb(0 == f[1].length ? 0 : parseInt(f[1], 10), 0 == g[1].length ? 0 : parseInt(g[1],
                            10)) || fb(0 == f[2].length, 0 == g[2].length) || fb(f[2], g[2]);
                        f = f[3];
                        g = g[3]
                    } while (0 == c)
                }
                return c
            };
            fb = function(a, b) {
                return a < b ? -1 : a > b ? 1 : 0
            };
            var lb, ib;
            _.jb = function(a, b) {
                this.o = a === _.hb && b || "";
                this.w = ib
            };
            _.jb.prototype.Pb = !0;
            _.jb.prototype.Fb = function() {
                return this.o.toString()
            };
            _.jb.prototype.Ve = !0;
            _.jb.prototype.j = function() {
                return 1
            };
            _.kb = function(a) {
                if (a instanceof _.jb && a.constructor === _.jb && a.w === ib) return a.o;
                _.xa(a);
                return "type_error:SafeUrl"
            };
            lb = /^(?:(?:https?|mailto|ftp):|[^:/?#]*(?:[/?#]|$))/i;
            _.mb = function(a) {
                if (a instanceof _.jb) return a;
                a = "object" == typeof a && a.Pb ? a.Fb() : String(a);
                lb.test(a) || (a = "about:invalid#zClosurez");
                return new _.jb(_.hb, a)
            };
            _.nb = function(a) {
                if (a instanceof _.jb) return a;
                a = "object" == typeof a && a.Pb ? a.Fb() : String(a);
                lb.test(a) || (a = "about:invalid#zClosurez");
                return new _.jb(_.hb, a)
            };
            ib = {};
            _.hb = {};
            _.pb = function() {
                this.j = "";
                this.o = _.ob
            };
            _.pb.prototype.Pb = !0;
            _.ob = {};
            _.pb.prototype.Fb = function() {
                return this.j
            };
            _.qb = function(a) {
                var b = new _.pb;
                b.j = a;
                return b
            };
            _.rb = _.qb("");
            a: {
                var tb = _.p.navigator;
                if (tb) {
                    var ub = tb.userAgent;
                    if (ub) {
                        _.sb = ub;
                        break a
                    }
                }
                _.sb = ""
            }
            _.w = function(a) {
                return -1 != _.sb.indexOf(a)
            };
            var xb;
            _.vb = function() {
                return _.w("Trident") || _.w("MSIE")
            };
            _.wb = function() {
                return _.w("Firefox") || _.w("FxiOS")
            };
            _.yb = function() {
                return _.w("Safari") && !(xb() || _.w("Coast") || _.w("Opera") || _.w("Edge") || _.w("Edg/") ||
                    _.w("OPR") || _.wb() || _.w("Silk") || _.w("Android"))
            };
            xb = function() {
                return (_.w("Chrome") || _.w("CriOS")) && !_.w("Edge")
            };
            _.zb = function() {
                return _.w("Android") && !(xb() || _.wb() || _.w("Opera") || _.w("Silk"))
            };
            var Ab;
            _.Bb = function() {
                this.o = "";
                this.A = Ab;
                this.w = null
            };
            _.Bb.prototype.Ve = !0;
            _.Bb.prototype.j = function() {
                return this.w
            };
            _.Bb.prototype.Pb = !0;
            _.Bb.prototype.Fb = function() {
                return this.o.toString()
            };
            _.Cb = function(a) {
                if (a instanceof _.Bb && a.constructor === _.Bb && a.A === Ab) return a.o;
                _.xa(a);
                return "type_error:SafeHtml"
            };
            Ab = {};
            _.Db = function(a, b) {
                var c = new _.Bb,
                    d = _.Ua();
                c.o = d ? d.createHTML(a) : a;
                c.w = b;
                return c
            };
            _.Eb = new _.Bb;
            _.Eb.o = _.p.trustedTypes && _.p.trustedTypes.emptyHTML ? _.p.trustedTypes.emptyHTML : "";
            _.Eb.w = 0;
            _.Fb = _.Db("<br>", 0);
            _.Gb = function(a) {
                var b = !1,
                    c;
                return function() {
                    b || (c = a(), b = !0);
                    return c
                }
            }(function() {
                var a = document.createElement("div"),
                    b = document.createElement("div");
                b.appendChild(document.createElement("div"));
                a.appendChild(b);
                b = a.firstChild.firstChild;
                a.innerHTML = _.Cb(_.Eb);
                return !b.parentElement
            });
            var Hb;
            Hb = function() {
                return _.w("iPhone") && !_.w("iPod") && !_.w("iPad")
            };
            _.Ib = function() {
                return Hb() || _.w("iPad") || _.w("iPod")
            };
            _.Jb = function(a) {
                _.Jb[" "](a);
                return a
            };
            _.Jb[" "] = _.ua;
            var Lb = function(a, b) {
                var c = Kb;
                return Object.prototype.hasOwnProperty.call(c, a) ? c[a] : c[a] = b(a)
            };
            var Zb, $b, Kb, hc;
            _.Mb = _.w("Opera");
            _.x = _.vb();
            _.Nb = _.w("Edge");
            _.Ob = _.Nb || _.x;
            _.Pb = _.w("Gecko") && !(-1 != _.sb.toLowerCase().indexOf("webkit") && !_.w("Edge")) && !(_.w(
                "Trident") || _.w("MSIE")) && !_.w("Edge");
            _.Qb = -1 != _.sb.toLowerCase().indexOf("webkit") && !_.w("Edge");
            _.Rb = _.w("Macintosh");
            _.Sb = _.w("Windows");
            _.Tb = _.w("Linux") || _.w("CrOS");
            _.Ub = _.w("Android");
            _.Vb = Hb();
            _.Wb = _.w("iPad");
            _.Xb = _.w("iPod");
            _.Yb = _.Ib();
            Zb = function() {
                var a = _.p.document;
                return a ? a.documentMode : void 0
            };
            a: {
                var ac = "",
                    bc = function() {
                        var a = _.sb;
                        if (_.Pb) return /rv:([^\);]+)(\)|;)/.exec(a);
                        if (_.Nb) return /Edge\/([\d\.]+)/.exec(a);
                        if (_.x) return /\b(?:MSIE|rv)[: ]([^\);]+)(\)|;)/.exec(a);
                        if (_.Qb) return /WebKit\/(\S+)/.exec(a);
                        if (_.Mb) return /(?:Version)[ \/]?(\S+)/.exec(a)
                    }();bc && (ac = bc ? bc[1] : "");
                if (_.x) {
                    var cc = Zb();
                    if (null != cc && cc > parseFloat(ac)) {
                        $b = String(cc);
                        break a
                    }
                }
                $b = ac
            }
            _.dc = $b;
            Kb = {};
            _.ec = function(a) {
                return Lb(a, function() {
                    return 0 <= _.gb(_.dc, a)
                })
            };
            _.gc = function(a) {
                return Number(fc) >= a
            };
            if (_.p.document && _.x) {
                var ic = Zb();
                hc = ic ? ic : parseInt(_.dc, 10) || void 0
            } else hc = void 0;
            var fc = hc;
            _.jc = _.wb();
            _.kc = Hb() || _.w("iPod");
            _.lc = _.w("iPad");
            _.mc = _.zb();
            _.nc = xb();
            _.oc = _.yb() && !_.Ib();
            var pc = {},
                qc = null;
            _.rc = function(a) {
                this.j = 0;
                this.o = a
            };
            _.rc.prototype.next = function() {
                return this.j < this.o.length ? {
                    done: !1,
                    value: this.o[this.j++]
                } : {
                    done: !0,
                    value: void 0
                }
            };
            "undefined" != typeof Symbol && "undefined" != typeof Symbol.iterator && (_.rc.prototype[Symbol
                .iterator] = function() {
                return this
            });
            var yc;
            _.y = function() {};
            _.sc = "function" == typeof Uint8Array;
            _.z = function(a, b, c, d, e, f) {
                a.j = null;
                b || (b = c ? [c] : []);
                a.H = c ? String(c) : void 0;
                a.B = 0 === c ? -1 : 0;
                a.w = b;
                a: {
                    c = a.w.length;b = -1;
                    if (c && (b = c - 1, c = a.w[b], !(null === c || "object" != typeof c || Array.isArray(
                            c) || _.sc && c instanceof Uint8Array))) {
                        a.C = b - a.B;
                        a.A = c;
                        break a
                    } - 1 < d ? (a.C = Math.max(d, b + 1 - a.B), a.A = null) : a.C = Number.MAX_VALUE
                }
                a.J = {};
                if (e)
                    for (d = 0; d < e.length; d++) b = e[d], b < a.C ? (b += a.B, a.w[b] = a.w[b] || _.tc) : (_
                        .uc(a), a.A[b] = a.A[b] || _.tc);
                if (f && f.length)
                    for (d = 0; d < f.length; d++) _.vc(a, f[d])
            };
            _.tc = [];
            _.uc = function(a) {
                var b = a.C + a.B;
                a.w[b] || (a.A = a.w[b] = {})
            };
            _.A = function(a, b) {
                if (b < a.C) {
                    b += a.B;
                    var c = a.w[b];
                    return c === _.tc ? a.w[b] = [] : c
                }
                if (a.A) return c = a.A[b], c === _.tc ? a.A[b] = [] : c
            };
            _.B = function(a, b) {
                a = _.A(a, b);
                return null == a ? a : !!a
            };
            _.C = function(a, b, c) {
                a = _.A(a, b);
                return null == a ? c : a
            };
            _.wc = function(a, b, c) {
                a = _.B(a, b);
                return null == a ? c : a
            };
            _.xc = function(a, b, c) {
                a = _.A(a, b);
                a = null == a ? a : +a;
                return null == a ? c : a
            };
            _.E = function(a, b, c) {
                b < a.C ? a.w[b + a.B] = c : (_.uc(a), a.A[b] = c);
                return a
            };
            _.vc = function(a, b) {
                for (var c, d, e = 0; e < b.length; e++) {
                    var f = b[e],
                        g = _.A(a, f);
                    null != g && (c = f, d = g, _.E(a, f, void 0))
                }
                return c ? (_.E(a, c, d), c) : 0
            };
            _.G = function(a, b, c) {
                a.j || (a.j = {});
                if (!a.j[c]) {
                    var d = _.A(a, c);
                    d && (a.j[c] = new b(d))
                }
                return a.j[c]
            };
            _.H = function(a, b, c) {
                a.j || (a.j = {});
                var d = c ? c.tb() : c;
                a.j[b] = c;
                return _.E(a, b, d)
            };
            yc = function(a) {
                if (a.j)
                    for (var b in a.j) {
                        var c = a.j[b];
                        if (Array.isArray(c))
                            for (var d = 0; d < c.length; d++) c[d] && c[d].tb();
                        else c && c.tb()
                    }
            };
            _.y.prototype.tb = function() {
                yc(this);
                return this.w
            };
            _.y.prototype.o = _.sc ? function() {
                var a = Uint8Array.prototype.toJSON;
                Uint8Array.prototype.toJSON = function() {
                    var b;
                    void 0 === b && (b = 0);
                    if (!qc) {
                        qc = {};
                        for (var c = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789".split(
                                ""), d = ["+/=", "+/", "-_=", "-_.", "-_"], e = 0; 5 > e; e++) {
                            var f = c.concat(d[e].split(""));
                            pc[e] = f;
                            for (var g = 0; g < f.length; g++) {
                                var k = f[g];
                                void 0 === qc[k] && (qc[k] = g)
                            }
                        }
                    }
                    b = pc[b];
                    c = [];
                    for (d = 0; d < this.length; d += 3) {
                        var l = this[d],
                            m = (e = d + 1 < this.length) ? this[d + 1] : 0;
                        k = (f = d + 2 < this.length) ? this[d + 2] : 0;
                        g = l >> 2;
                        l = (l & 3) << 4 | m >> 4;
                        m = (m & 15) << 2 | k >> 6;
                        k &= 63;
                        f || (k = 64, e || (m = 64));
                        c.push(b[g], b[l], b[m] || "", b[k] || "")
                    }
                    return c.join("")
                };
                try {
                    return JSON.stringify(this.w && this.tb(), zc)
                } finally {
                    Uint8Array.prototype.toJSON = a
                }
            } : function() {
                return JSON.stringify(this.w && this.tb(), zc)
            };
            var zc = function(a, b) {
                return "number" !== typeof b || !isNaN(b) && Infinity !== b && -Infinity !== b ? b : String(b)
            };
            _.y.prototype.toString = function() {
                yc(this);
                return this.w.toString()
            };
            _.I = function() {
                this.Wa = this.Wa;
                this.Db = this.Db
            };
            _.I.prototype.Wa = !1;
            _.I.prototype.ta = function() {
                this.Wa || (this.Wa = !0, this.R())
            };
            _.I.prototype.R = function() {
                if (this.Db)
                    for (; this.Db.length;) this.Db.shift()()
            };
            var Ac = function(a) {
                _.z(this, a, 0, -1, null, null)
            };
            _.v(Ac, _.y);
            _.Bc = function(a) {
                _.z(this, a, 0, -1, null, null)
            };
            _.v(_.Bc, _.y);
            var Cc = function(a) {
                _.z(this, a, 0, -1, null, null)
            };
            _.v(Cc, _.y);
            _.Dc = function(a) {
                _.z(this, a, 0, -1, null, null)
            };
            _.v(_.Dc, _.y);
            _.Ec = function(a) {
                _.z(this, a, 0, -1, null, null)
            };
            _.v(_.Ec, _.y);
            var Fc = function(a) {
                _.I.call(this);
                this.w = a;
                this.j = [];
                this.o = {}
            };
            _.v(Fc, _.I);
            Fc.prototype.ud = function() {
                for (var a = this.j.length, b = this.j, c = [], d = 0; d < a; ++d) {
                    var e = b[d].j();
                    a: {
                        var f = this.w;
                        for (var g = e.split("."), k = g.length, l = 0; l < k; ++l)
                            if (f[g[l]]) f = f[g[l]];
                            else {
                                f = null;
                                break a
                            } f = f instanceof Function ? f : null
                    }
                    if (f && f != this.o[e]) try {
                        b[d].ud(f)
                    } catch (m) {} else c.push(b[d])
                }
                this.j = c.concat(b.slice(a))
            };
            var Mc;
            _.Gc = function() {
                this.j = {};
                this.o = {}
            };
            _.va(_.Gc);
            _.Ic = function(a) {
                return _.Hc(_.Gc.ua(), a)
            };
            _.Kc = function(a, b) {
                var c = _.Gc.ua();
                if (a in c.j) {
                    if (c.j[a] != b) throw new Jc(a);
                } else {
                    c.j[a] = b;
                    if (b = c.o[a])
                        for (var d = 0, e = b.length; d < e; d++) b[d].j(c.j, a);
                    delete c.o[a]
                }
            };
            _.Hc = function(a, b) {
                if (b in a.j) return a.j[b];
                throw new Lc(b);
            };
            Mc = function() {
                _.Ia.call(this)
            };
            _.v(Mc, _.Ia);
            var Jc = function() {
                _.Ia.call(this)
            };
            _.v(Jc, Mc);
            var Lc = function() {
                _.Ia.call(this)
            };
            _.v(Lc, Mc);
            var Pc = function(a) {
                _.I.call(this);
                this.B = a;
                this.w = this.j = null;
                this.C = 0;
                this.A = {};
                this.o = !1;
                a = window.navigator.userAgent;
                0 <= a.indexOf("MSIE") && 0 <= a.indexOf("Trident") && (a = /\b(?:MSIE|rv)[: ]([^\);]+)(\)|;)/
                    .exec(a)) && a[1] && 9 > parseFloat(a[1]) && (this.o = !0)
            };
            _.n(Pc, _.I);
            Pc.prototype.D = function(a, b) {
                this.j = b;
                this.w = a;
                b.preventDefault ? b.preventDefault() : b.returnValue = !1
            };
            _.Qc = function(a) {
                _.z(this, a, 0, -1, null, null)
            };
            _.v(_.Qc, _.y);
            _.Rc = function(a) {
                _.z(this, a, 0, -1, null, null)
            };
            _.v(_.Rc, _.y);
            _.J = function(a, b) {
                return null != a ? !!a : !!b
            };
            _.L = function(a, b) {
                void 0 == b && (b = "");
                return null != a ? a : b
            };
            _.Sc = function(a, b) {
                void 0 == b && (b = 0);
                return null != a ? a : b
            };
            _.Tc = function() {
                this.data = {}
            };
            _.Tc.prototype.j = function() {
                window.console && window.console.log && window.console.log("Log data: ", this.data)
            };
            _.Tc.prototype.o = function(a) {
                var b = [],
                    c;
                for (c in this.data) b.push(encodeURIComponent(c) + "=" + encodeURIComponent(String(this.data[
                    c])));
                return ("atyp=i&zx=" + (new Date).getTime() + "&" + b.join("&")).substr(0, a)
            };
            var Uc = function(a, b) {
                this.data = {};
                var c = _.G(a, Cc, 8) || new Cc;
                window.google && window.google.kEI && (this.data.ei = window.google.kEI);
                this.data.sei = _.L(_.A(a, 10));
                this.data.ogf = _.L(_.A(c, 3));
                var d = window.google && window.google.sn ? /.*hp$/.test(window.google.sn) ? !1 : !0 : _.J(_.B(
                    a, 7));
                this.data.ogrp = d ? "1" : "";
                this.data.ogv = _.L(_.A(c, 6)) + "." + _.L(_.A(c, 7));
                this.data.ogd = _.L(_.A(a, 21));
                this.data.ogc = _.L(_.A(a, 20));
                this.data.ogl = _.L(_.A(a, 5));
                b && (this.data.oggv = b)
            };
            _.v(Uc, _.Tc);
            var Vc = [1, 2, 3, 4, 5, 6, 9, 10, 11, 13, 14, 28, 29, 30, 34, 35, 37, 38, 39, 40, 42, 43, 48, 49, 50,
                    51, 52, 53, 62, 500
                ],
                Yc = function(a, b, c, d, e, f) {
                    Uc.call(this, a, b);
                    _.Ra(this.data, {
                        oge: d,
                        ogex: _.L(_.A(a, 9)),
                        ogp: _.L(_.A(a, 6)),
                        ogsr: Math.round(1 / (Wc(d) ? _.Sc(_.xc(c, 3, 1)) : _.Sc(_.xc(c, 2, 1E-4)))),
                        ogus: e
                    });
                    if (f) {
                        "ogw" in f && (this.data.ogw = f.ogw, delete f.ogw);
                        "ved" in f && (this.data.ved = f.ved, delete f.ved);
                        a = [];
                        for (var g in f) 0 != a.length && a.push(","), a.push(Xc(g)), a.push("."), a.push(Xc(f[g]));
                        f = a.join("");
                        "" != f && (this.data.ogad = f)
                    }
                };
            _.v(Yc, Uc);
            var Xc = function(a) {
                    a = String(a);
                    return a.replace(".", "%2E").replace(",", "%2C")
                },
                Zc = null,
                Wc = function(a) {
                    if (!Zc) {
                        Zc = {};
                        for (var b = 0; b < Vc.length; b++) Zc[Vc[b]] = !0
                    }
                    return !!Zc[a]
                };
            var $c, cd, bd;
            _.ad = function(a) {
                var b = window.google && window.google.logUrl ? "" : "https://www.google.com";
                b += "/gen_204?";
                b += a.o(2040 - b.length);
                $c(_.mb(b))
            };
            $c = function(a) {
                var b = new Image;
                b.onerror = b.onload = b.onabort = function() {
                    bd in cd && delete cd[bd]
                };
                cd[bd++] = b;
                b.src = _.kb(a)
            };
            cd = [];
            bd = 0;
            var gd = function() {
                var a = dd,
                    b = ed,
                    c = fd;
                this.C = a;
                this.B = b;
                this.A = _.Sc(_.xc(a, 2, 1E-4), 1E-4);
                this.o = _.Sc(_.xc(a, 3, 1), 1);
                b = Math.random();
                this.w = _.J(_.B(a, 1)) && b < this.A;
                this.j = _.J(_.B(a, 1)) && b < this.o;
                a = 0;
                _.J(_.B(c, 1)) && (a |= 1);
                _.J(_.B(c, 2)) && (a |= 2);
                _.J(_.B(c, 3)) && (a |= 4);
                this.D = a
            };
            gd.prototype.log = function(a, b) {
                try {
                    if (Wc(a) ? this.j : this.w) {
                        var c = new Yc(this.B, "quantum:gapiBuildLabel", this.C, a, this.D, b);
                        _.ad(c)
                    }
                } catch (d) {}
            };
            _.hd = function(a, b, c, d, e) {
                Uc.call(this, a, b);
                _.Ra(this.data, {
                    jexpid: _.L(_.A(a, 9)),
                    srcpg: "prop=" + _.L(_.A(a, 6)),
                    jsr: Math.round(1 / d),
                    emsg: c.name + ":" + c.message
                });
                if (e) {
                    e._sn && (e._sn = "og." + e._sn);
                    for (var f in e) this.data[encodeURIComponent(f)] = e[f]
                }
            };
            _.v(_.hd, Uc);
            _.id = function(a) {
                _.z(this, a, 0, -1, null, null)
            };
            _.v(_.id, _.y);
            var ld = function() {
                var a = jd;
                this.D = kd;
                this.A = _.Sc(_.xc(a, 2, .001), .001);
                this.C = _.J(_.B(a, 1)) && Math.random() < this.A;
                this.B = _.Sc(_.C(a, 3, 1), 1);
                this.w = 0;
                this.j = this.o = null;
                _.wc(a, 4, !0)
            };
            ld.prototype.log = function(a, b) {
                if (this.j) {
                    var c = new Ac;
                    _.E(c, 1, a.message);
                    _.E(c, 2, a.stack);
                    _.E(c, 3, a.lineNumber);
                    _.E(c, 5, 1);
                    var d = new _.Bc;
                    _.H(d, 40, c);
                    this.j.log(98, d)
                }
                try {
                    if (this.C && this.w < this.B) {
                        try {
                            var e = (this.o || _.Hc(_.Gc.ua(), "lm")).j(a, b)
                        } catch (f) {
                            e = new _.hd(this.D, "quantum:gapiBuildLabel", a, this.A, b)
                        }
                        _.ad(e);
                        this.w++
                    }
                } catch (f) {}
            };
            var md = function(a) {
                _.z(this, a, 0, -1, null, null)
            };
            _.v(md, _.y);
            var nd = function(a) {
                this.j = a;
                this.o = void 0;
                this.w = []
            };
            nd.prototype.then = function(a, b, c) {
                this.w.push(new od(a, b, c));
                _.pd(this)
            };
            _.qd = function(a, b) {
                if (void 0 !== a.j || void 0 !== a.o) throw Error("o");
                a.j = b;
                _.pd(a)
            };
            _.pd = function(a) {
                if (0 < a.w.length) {
                    var b = void 0 !== a.j,
                        c = void 0 !== a.o;
                    if (b || c) {
                        b = b ? a.A : a.B;
                        c = a.w;
                        a.w = [];
                        try {
                            (0, _.Ka)(c, b, a)
                        } catch (d) {
                            console.error(d)
                        }
                    }
                }
            };
            nd.prototype.A = function(a) {
                a.o && a.o.call(a.j, this.j)
            };
            nd.prototype.B = function(a) {
                a.w && a.w.call(a.j, this.o)
            };
            var od = function(a, b, c) {
                this.o = a;
                this.w = b;
                this.j = c
            };
            _.M = function() {
                this.A = new nd;
                this.o = new nd;
                this.D = new nd;
                this.B = new nd;
                this.C = new nd;
                this.G = new nd;
                this.J = new nd;
                this.j = new nd;
                this.w = new nd
            };
            _.va(_.M);
            _.h = _.M.prototype;
            _.h.Dh = function() {
                return this.A
            };
            _.h.Lh = function() {
                return this.o
            };
            _.h.Rh = function() {
                return this.D
            };
            _.h.Kh = function() {
                return this.B
            };
            _.h.Ph = function() {
                return this.C
            };
            _.h.Sh = function() {
                return this.G
            };
            _.h.Hh = function() {
                return this.J
            };
            _.h.Ih = function() {
                return this.j
            };
            _.h.wh = function() {
                return this.w
            };
            var rd = function(a) {
                _.z(this, a, 0, -1, null, null)
            };
            _.v(rd, _.y);
            _.td = function() {
                return _.G(_.sd, _.Dc, 1)
            };
            _.ud = function() {
                return _.G(_.sd, _.Ec, 5)
            };
            var vd;
            window.gbar_ && window.gbar_.CONFIG ? vd = window.gbar_.CONFIG[0] || {} : vd = [];
            _.sd = new rd(vd);
            var jd, kd, ed, fd, dd;
            jd = _.G(_.sd, _.id, 3) || new _.id;
            kd = _.td() || new _.Dc;
            _.wd = new ld;
            ed = _.td() || new _.Dc;
            fd = _.ud() || new _.Ec;
            dd = _.G(_.sd, md, 4) || new md;
            _.xd = new gd;
            _.u("gbar_._DumpException", function(a) {
                _.wd ? _.wd.log(a) : console.error(a)
            });
            _.yd = new Pc(_.wd);
            _.xd.log(8, {
                m: "BackCompat" == document.compatMode ? "q" : "s"
            });
            _.u("gbar.A", nd);
            nd.prototype.aa = nd.prototype.then;
            _.u("gbar.B", _.M);
            _.M.prototype.ba = _.M.prototype.Lh;
            _.M.prototype.bb = _.M.prototype.Rh;
            _.M.prototype.bd = _.M.prototype.Ph;
            _.M.prototype.be = _.M.prototype.Sh;
            _.M.prototype.bf = _.M.prototype.Dh;
            _.M.prototype.bg = _.M.prototype.Kh;
            _.M.prototype.bh = _.M.prototype.Hh;
            _.M.prototype.bi = _.M.prototype.Ih;
            _.M.prototype.bj = _.M.prototype.wh;
            _.u("gbar.a", _.M.ua());
            var zd = new Fc(window);
            _.Kc("api", zd);
            var Ad = _.ud() || new _.Ec,
                Bd = _.L(_.A(Ad, 8));
            window.__PVT = Bd;
            _.Kc("eq", _.yd);

        } catch (e) {
            _._DumpException(e)
        }
        try {
            var Cd = function(a) {
                _.z(this, a, 0, -1, null, null)
            };
            _.v(Cd, _.y);
            var Dd = function() {
                _.I.call(this);
                this.o = [];
                this.j = []
            };
            _.n(Dd, _.I);
            Dd.prototype.w = function(a, b) {
                this.o.push({
                    Ud: a,
                    options: b
                })
            };
            Dd.prototype.init = function(a, b, c) {
                window.gapi = {};
                var d = window.___jsl = {};
                d.h = _.L(_.A(a, 1));
                null != _.A(a, 12) && (d.dpo = _.J(_.B(a, 12)));
                d.ms = _.L(_.A(a, 2));
                d.m = _.L(_.A(a, 3));
                d.l = [];
                _.A(b, 1) && (a = _.A(b, 3)) && this.j.push(a);
                _.A(c, 1) && (c = _.A(c, 2)) && this.j.push(c);
                _.u("gapi.load", (0, _.q)(this.w, this));
                return this
            };
            var Ed = _.G(_.sd, _.Qc, 14) || new _.Qc,
                Fd = _.G(_.sd, _.Rc, 9) || new _.Rc,
                Gd = new Cd,
                Hd = new Dd;
            Hd.init(Ed, Fd, Gd);
            _.Kc("gs", Hd);

        } catch (e) {
            _._DumpException(e)
        }
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
    <script async="" type="text/javascript" charset="UTF-8" src="ms_files/rsAA2YrTtIx4AGwpQDxM6vn71h3JMTrEy9Vw"
        nonce="4X/xePeUOQ9joZlyG8qAWQ=="></script>
    <link type="text/css" rel="stylesheet" ref="ms_files/rsAA2YrTvo3vJwXv_zaZfCc1aKUBBrgkA8_w.css">
    <link crossorigin="use-credentials" rel="prefetch"
        ref="https://ogs.google.com/widget/app/so?origin=https%3A%2F%2Fwww.google.com&amp;pid=1&amp;spid=1&amp;hl=en&amp;gm=">
    <style type="text/css" data-late-css="">
    .reportAbuseComponent {
        height: 100%;
        width: 100%;
        position: absolute;
        overflow-x: hidden;
        top: 0;
        left: 0;
        z-index: 1000
    }

    .reportAbuseCard {
        height: 100%;
        width: 100%;
        background-color: white;
        position: absolute;
        top: 0;
        left: 100%;
        -moz-box-shadow: 0 1px 4px;
        box-shadow: 0 1px 4px
    }

    .reportAbuseCardHeader {
        background-color: #4374e0;
        min-height: 25px;
        font-size: 15px;
        margin-bottom: 5px;
        padding: 16px 56px;
        font-weight: 900
    }

    .reportAbuseCardHeaderButton.reportAbuseCardIconButton {
        display: inline-block;
        background-color: transparent;
        position: absolute;
        top: 10px;
        color: white;
        border: none;
        outline: none;
        -moz-box-shadow: none;
        box-shadow: none;
        font-size: 36px;
        height: 36px;
        min-width: 36px;
        width: 36px;
        line-height: 36px;
        margin: 0 10px;
        padding: 15px 15px
    }

    .reportAbuseCardHeaderButton.reportAbuseCardIconButton:focus {
        color: #ccc;
        background-color: transparent;
        -moz-box-shadow: none;
        box-shadow: none;
        outline: none;
        border: none
    }

    .reportAbuseCardCancelButton.reportAbuseCardHeaderButton {
        right: 0
    }

    .reportAbuseCardBackButton.reportAbuseCardHeaderButton {
        left: 0;
        font-size: 28px
    }

    .reportAbuseCardOptions .reportAbuseCardButton {
        display: inline-block;
        margin: 5px auto;
        background-color: white;
        min-width: 26px;
        color: #262626;
        -moz-box-shadow: 0 0 2px rgba(0, 0, 0, .25);
        box-shadow: 0 0 2px rgba(0, 0, 0, .25);
        border: 1px solid #d9d9d9;
        padding: 20px 10px;
        width: 80%;
        word-wrap: normal;
        white-space: normal;
        height: auto
    }

    .reportAbuseCardOptions .reportAbuseCardButton:active {
        -moz-box-shadow: inset 0 1px 0 #ddd;
        box-shadow: inset 0 1px 0 #ddd;
        background-color: #e5e5e5;
        border-color: #bfbfbf
    }

    .reportAbuseCardOptions .reportAbuseCardButton:hover {
        background-color: #f5f5f5;
        -moz-box-shadow: 0 0 2px rgba(0, 0, 0, .3);
        box-shadow: 0 0 2px rgba(0, 0, 0, .3);
        border-color: #bfbfbf;
        cursor: pointer
    }

    .reportAbuseCardHeaderText {
        display: inline-block;
        text-align: center;
        width: 100%;
        color: white;
        outline: none;
        padding: 18px 0
    }

    .reportAbuseCardOptions {
        text-align: center
    }

    .reportAbuseCardFooterButton {
        display: none
    }

    .reportAbuseCardMessage {
        font-size: 16px;
        padding: 16px
    }

    .reportAbuseDialogComponent .Qzfjqf {
        font-size: 24px
    }

    .tC7PGc {
        font-size: 16px;
        margin-top: 20px;
        margin-bottom: 20px
    }

    .reportAbuseComponentCards {
        position: relative
    }

    .reportAbuseComponent.reportAbuseDialogComponent {
        height: auto;
        width: auto;
        position: relative;
        overflow: hidden
    }

    .reportAbuseDialogComponent .reportAbuseCardOptions .reportAbuseCardButton {
        padding: 20px 0;
        -moz-box-shadow: 1px 1px 5px 0 rgba(0, 0, 0, .35);
        box-shadow: 1px 1px 5px 0 rgba(0, 0, 0, .35);
        border: none;
        text-align: center;
        text-transform: uppercase;
        width: 99%;
        margin-left: 1px
    }

    .reportAbuseDialogComponent .reportAbuseCardOptions .reportAbuseCardButton:active {
        -moz-box-shadow: 1px 1px 5px 0 rgba(0, 0, 0, .4);
        box-shadow: 1px 1px 5px 0 rgba(0, 0, 0, .4);
        background-color: #f0f0f0;
        border-color: transparent
    }

    .reportAbuseDialogComponent .reportAbuseCardOptions .reportAbuseCardButton:hover {
        -moz-box-shadow: 1px 1px 5px 0 rgba(0, 0, 0, .37);
        box-shadow: 1px 1px 5px 0 rgba(0, 0, 0, .37);
        background-color: #f5f5f5;
        border-color: transparent
    }

    .reportAbuseDialogComponent .reportAbuseCardOptions {
        text-align: left
    }

    .reportAbuseDialogComponent .reportAbuseCard {
        height: auto;
        -moz-box-shadow: none;
        box-shadow: none;
        position: relative;
        left: 0%;
        display: block
    }

    .reportAbuseDialogComponent .reportAbuseCardHeader {
        background-color: white;
        padding: 16px 0
    }

    .reportAbuseDialogComponent .reportAbuseCardHeaderText {
        color: black;
        text-align: left
    }

    .reportAbuseDialogComponent .reportAbuseCardHeaderButton {
        display: none
    }

    .reportAbuseDialogComponent .reportAbuseCardFooter .reportAbuseCardFooterButton {
        display: inline-block;
        color: #4374e0;
        -moz-box-shadow: none;
        box-shadow: none;
        text-align: left;
        background-color: transparent;
        padding: 20px 0;
        border: none;
        text-transform: uppercase;
        margin-left: 1px;
        cursor: pointer
    }

    sentinel {}
    </style>
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
                    data-ved="0ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQ67oDCAQ">Skip to main content</a><a jsname="KI37ad"
                    class="gyPpGe" ref="https://support.google.com/websearch/answer/181196?hl=en-IN"
                    onmousedown="return rwt(this,'','','','','AOvVaw26r2_fCGW-RHG6syjlap5r','','0ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQwcMDCAU','','',event)">Accessibility
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
                        class="y yp" data-ved="0ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQ-0EIBg"></div><a jsname="JUypV"
                        class="gyPpGe" data-async-trigger="duf3-78" role="link" tabindex="0"
                        jsaction="async.u">Accessibility feedback</a>
                </div>
            </div>
        </div>
    </div><noscript>
        <meta
            content="0;url=/search?q=microsoft+online+support&amp;client=firefox-b-d&amp;gbv=1&amp;sei=EaPUXvTcMJW_8QP9_44g"
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
                ref="/search?q=microsoft+online+support&amp;client=firefox-b-d&amp;gbv=1&amp;sei=EaPUXvTcMJW_8QP9_44g">here</a>
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
                              ref="https://www.google.co.in/intl/en/about/products?tab=wh" aria-expanded="false"
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
                  ref="https://accounts.google.com/ServiceLogin?hl=en&amp;passive=true&amp;continue=https://www.google.com/search%3Fclient%3Dfirefox-b-d%26q%3Ddoes%2Bnorton%2Bstop%2Bhacker"
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
                  <a ref="https://www.google.com/webhp?hl=en&amp;sa=X&amp;ved=0ahUKEwjcnJqVktzpAhUtyTgGHd61BF8QPAgH"
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
                      <div class="a4bIc" j
                          >
                          <div class="pR49Ae gsfi" jsname="vdLsw"></div>
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
                          class="duf3 aciXEb" ref="#" id="sbfblt" data-async-trigger="duf3-46" jsaction="async.u"
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
        <div id="easter-egg"></div><span class="kpshf line gsr bilit" style="display:none"></span>
        <div id="cnt" class=" big">
            <script nonce="4X/xePeUOQ9joZlyG8qAWQ==">
            (function() {
                var j = 1280;
                try {
                    var a = document.getElementById("cnt"),
                        b = document.getElementById("searchform"),
                        c = "";
                    if (window.gbar && gbar.elr) {
                        var d = gbar.elr().mo;
                        c = "md" == d ? " mdm" : "lg" == d ? " big" : ""
                    } else {
                        var e = document.body && document.body.offsetWidth;
                        e && e >= j && (c = " big")
                    }
                    a && (a.className += c);
                    b && (b.className += c)
                } catch (f) {
                    google.ml(f, !1, {
                        elr: !0
                    })
                };
            })();
            </script>
           
            <script nonce="4X/xePeUOQ9joZlyG8qAWQ==">
            (function() {
                google.tick("load", "sct");
            }).call(this);
            </script>
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
                <div jscontroller="qik19b" jsdata="Z1JpA;;B2WCGg" jsaction="rcuQ6b:npT2md">
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
                                                    ref="https://www.google.com/search?q=microsoft+online+support&amp;client=firefox-b-d&amp;source=lnms&amp;tbm=nws&amp;sa=X&amp;ved=2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQ_AUoAXoECCUQAw"><span
                                                        class="HF9Klc iJddsb" style="height:16px;width:16px"><svg
                                                            focusable="false" viewBox="0 0 24 24">
                                                            <path
                                                                d="M12 11h6v2h-6v-2zm-6 6h12v-2H6v2zm0-4h4V7H6v6zm16-7.22v12.44c0 1.54-1.34 2.78-3 2.78H5c-1.64 0-3-1.25-3-2.78V5.78C2 4.26 3.36 3 5 3h14c1.64 0 3 1.25 3 2.78zM19.99 12V5.78c0-.42-.46-.78-1-.78H5c-.54 0-1 .36-1 .78v12.44c0 .42.46.78 1 .78h14c.54 0 1-.36 1-.78V12zM12 9h6V7h-6v2">
                                                            </path>
                                                        </svg></span>News</a></div>
                                            <div class="hdtb-mitem hdtb-imb"><a class="q qs"
                                                    ref="https://www.google.com/search?q=microsoft+online+support&amp;client=firefox-b-d&amp;source=lnms&amp;tbm=vid&amp;sa=X&amp;ved=2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQ_AUoAnoECCUQBA"><span
                                                        class="HF9Klc iJddsb" style="height:16px;width:16px"><svg
                                                            focusable="false" viewBox="0 0 24 24">
                                                            <path
                                                                d="M10 16.5l6-4.5-6-4.5v9zM5 20h14a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1zm14.5 2H5a3 3 0 0 1-3-3V4.4A2.4 2.4 0 0 1 4.4 2h15.2A2.4 2.4 0 0 1 22 4.4v15.1a2.5 2.5 0 0 1-2.5 2.5">
                                                            </path>
                                                        </svg></span>Videos</a></div>
                                            <div class="hdtb-mitem hdtb-imb"><a class="q qs"
                                                    ref="https://www.google.com/search?q=microsoft+online+support&amp;client=firefox-b-d&amp;source=lnms&amp;tbm=isch&amp;sa=X&amp;ved=2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQ_AUoA3oECCUQBQ"><span
                                                        class="HF9Klc iJddsb" style="height:16px;width:16px"><svg
                                                            focusable="false" viewBox="0 0 24 24">
                                                            <path
                                                                d="M14 13l4 5H6l4-4 1.79 1.78L14 13zm-6.01-2.99A2 2 0 0 0 8 6a2 2 0 0 0-.01 4.01zM22 5v14a3 3 0 0 1-3 2.99H5c-1.64 0-3-1.36-3-3V5c0-1.64 1.36-3 3-3h14c1.65 0 3 1.36 3 3zm-2.01 0a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h7v-.01h7a1 1 0 0 0 1-1V5">
                                                            </path>
                                                        </svg></span>Images</a></div>
                                            <div class="hdtb-mitem hdtb-imb"><a class="q qs"
                                                    ref="https://www.google.com/search?q=microsoft+online+support&amp;client=firefox-b-d&amp;source=lnms&amp;tbm=shop&amp;sa=X&amp;ved=2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQ_AUoBHoECCUQBg"><span
                                                        class="HF9Klc iJddsb" style="height:16px;width:16px"><svg
                                                            focusable="false" viewBox="0 0 24 24">
                                                            <path
                                                                d="M21.11 2.89A3.02 3.02 0 0 0 18.95 2h-5.8c-.81 0-1.58.31-2.16.89L7.25 6.63 2.9 10.98a3.06 3.06 0 0 0 0 4.32l5.79 5.8a3.05 3.05 0 0 0 4.32.01l8.09-8.1c.58-.58.9-1.34.9-2.16v-5.8c0-.81-.32-1.59-.89-2.16zM20 10.85c0 .28-.12.54-.32.74l-3.73 3.74-4.36 4.36c-.41.41-1.08.41-1.49 0l-2.89-2.9-2.9-2.9a1.06 1.06 0 0 1 0-1.49l8.1-8.1c.2-.2.46-.3.74-.3l5.8-.01A1.05 1.05 0 0 1 20 5.05v5.8zM16 6c1.1 0 2 .9 2 2s-.9 2-2 2-2-.9-2-2 .9-2 2-2">
                                                            </path>
                                                        </svg></span>Shopping</a></div>
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
                                                data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQ2h8oBXoECCUQBw"
                                                jsowner="ow16"><a class="f9UGee q qs" jsaction="mouseover:sbHm2b"
                                                    role="menuitem" tabindex="-1"
                                                    ref="https://maps.google.com/maps?client=firefox-b-d&amp;q=microsoft+online+support&amp;gs_lcp=CgZwc3ktYWIQAzICCAAyAggAMgIIADICCAAyAggAMgIIADICCAAyAggAMgIIADICCAA6BQgAEJECOgUIABCDAVDczgFYpowCYLmRAmgAcAB4AIAB1AKIAfEokgEIMC4xNS44LjKYAQCgAQGqAQdnd3Mtd2l6&amp;uact=5&amp;um=1&amp;ie=UTF-8&amp;sa=X&amp;ved=2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQ_AUoAHoECCUQCA"><span
                                                        class="HF9Klc iJddsb" style="height:16px;width:16px"><svg
                                                            focusable="false" viewBox="0 0 16 16">
                                                            <path
                                                                d="M7.503 0c3.09 0 5.502 2.487 5.502 5.427 0 2.337-1.13 3.694-2.26 5.05-.454.528-.906 1.13-1.358 1.734-.452.603-.754 1.508-.98 1.96-.226.452-.377.829-.904.829-.528 0-.678-.377-.905-.83-.226-.451-.527-1.356-.98-1.959-.452-.603-.904-1.206-1.356-1.734C3.132 9.121 2 7.764 2 5.427 2 2.487 4.412 0 7.503 0zm0 1.364c-2.283 0-4.14 1.822-4.14 4.063 0 1.843.86 2.873 1.946 4.177.468.547.942 1.178 1.4 1.79.34.452.596.99.794 1.444.198-.455.453-.992.793-1.445.459-.61.931-1.242 1.413-1.803 1.074-1.29 1.933-2.32 1.933-4.163 0-2.24-1.858-4.063-4.139-4.063zm0 2.734a1.33 1.33 0 11-.001 2.658 1.33 1.33 0 010-2.658">
                                                            </path>
                                                        </svg></span>Maps</a><a class="f9UGee q qs"
                                                    jsaction="mouseover:sbHm2b" role="menuitem" tabindex="-1"
                                                    ref="https://www.google.com/search?q=microsoft+online+support&amp;client=firefox-b-d&amp;source=lnms&amp;tbm=bks&amp;sa=X&amp;ved=2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQ_AUoAXoECCUQCQ"><span
                                                        class="HF9Klc iJddsb" style="height:16px;width:16px"><svg
                                                            focusable="false" viewBox="0 0 24 24">
                                                            <path
                                                                d="M18 2H6a2 2 0 0 0-2 2v16c0 1.1.9 2 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2zm0 18H6V4h2v8l2.5-1.5L13 12V4h5v16">
                                                            </path>
                                                        </svg></span>Books</a><a class="f9UGee q qs"
                                                    jsaction="mouseover:sbHm2b" role="menuitem" tabindex="-1"
                                                    ref="https://www.google.com/flights?q=microsoft+online+support&amp;client=firefox-b-d&amp;source=lnms&amp;tbm=flm&amp;sa=X&amp;ved=2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQ_AUoAnoECCUQCg"><span
                                                        class="HF9Klc iJddsb" style="height:16px;width:16px"><svg
                                                            focusable="false" viewBox="0 0 24 24">
                                                            <path
                                                                d="M12.98 12.89l-4.03 4.03.42 2.95L8.24 21l-1.87-3.37L3 15.76l1.12-1.12 2.95.42 4.03-4.03L3 6.77l1.5-1.5 10.04 2.32 4.2-4.2a1.32 1.32 0 0 1 1.87 0c.52.52.52 1.36 0 1.87l-4.2 4.2 2.32 10.04-1.5 1.5-4.25-8.11">
                                                            </path>
                                                        </svg></span>Flights</a><a class="f9UGee q qs"
                                                    jsaction="mouseover:sbHm2b" role="menuitem" tabindex="-1"
                                                    ref="https://www.google.com/search?q=microsoft+online+support&amp;client=firefox-b-d&amp;source=lnms&amp;tbm=fin&amp;sa=X&amp;ved=2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQ_AUoA3oECCUQCw"><span
                                                        class="HF9Klc iJddsb" style="height:16px;width:16px"><svg
                                                            focusable="false" viewBox="0 0 24 24">
                                                            <path
                                                                d="M6 15.5l-3 2.94V10h3v5.5zm5-1.84l-1.57-1.34L8 13.64V6h3v7.66zM16 12l-3 3V2h3v10zm2.81-.19L17 10h5v5l-1.79-1.79L13 20.36l-3.47-3.02L5.75 21H3l6.47-6.34L13 17.64l5.81-5.83">
                                                            </path>
                                                        </svg></span>Finance</a></div>
                                        </g-header-menu>
                                    </div>
                                    <div>
                                        <g-header-menu class="hdtb-mitem rwUYcf" jscontroller="aam1T"
                                            jsaction="rcuQ6b:npT2md" id="ow17" __is_owner="true"><a jsname="LgbsSe"
                                                class="Cq34nf hdtb-dd-b" aria-haspopup="true" role="button" tabindex="0"
                                                jsaction="BVg1Q" ref="https://www.google.com/preferences"
                                                id="abar_button_opt">Settings</a>
                                            <div jsname="xl07Ob" class="cF4V5c" style="display:none" role="menu"
                                                tabindex="-1" jsaction="keydown:uYT2Vb"
                                                data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQn_YBKAB6BAglEAw"
                                                jsowner="ow17"><a
                                                    ref="https://www.google.com/preferences?hl=en&amp;prev=https://www.google.com/search?client%3Dfirefox-b-d%26ei%3D7aLUXt7uLu_C3LUPppOrkAQ%26q%3Dmicrosoft%2Bonline%2Bsupport%26oq%3Dmicrosoft%2Bonline%2Bsupport%26gs_lcp%3DCgZwc3ktYWIQAzICCAAyAggAMgIIADICCAAyAggAMgIIADICCAAyAggAMgIIADICCAA6BQgAEJECOgUIABCDAVDczgFYpowCYLmRAmgAcAB4AIAB1AKIAfEokgEIMC4xNS44LjKYAQCgAQGqAQdnd3Mtd2l6%26sclient%3Dpsy-ab%26ved%3D0ahUKEwiemeKYgeDpAhVvIbcAHabJCkIQ4dUDCAs%26uact%3D5"
                                                    class="f9UGee" jsaction="mouseover:sbHm2b" role="menuitem"
                                                    tabindex="-1"
                                                    data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQo_oBegQIJRAN">Search
                                                    settings</a><a
                                                    ref="https://www.google.com/preferences?hl=en&amp;prev=https://www.google.com/search?client%3Dfirefox-b-d%26ei%3D7aLUXt7uLu_C3LUPppOrkAQ%26q%3Dmicrosoft%2Bonline%2Bsupport%26oq%3Dmicrosoft%2Bonline%2Bsupport%26gs_lcp%3DCgZwc3ktYWIQAzICCAAyAggAMgIIADICCAAyAggAMgIIADICCAAyAggAMgIIADICCAA6BQgAEJECOgUIABCDAVDczgFYpowCYLmRAmgAcAB4AIAB1AKIAfEokgEIMC4xNS44LjKYAQCgAQGqAQdnd3Mtd2l6%26sclient%3Dpsy-ab%26ved%3D0ahUKEwiemeKYgeDpAhVvIbcAHabJCkIQ4dUDCAs%26uact%3D5#languages"
                                                    class="f9UGee" jsaction="mouseover:sbHm2b" role="menuitem"
                                                    tabindex="-1"
                                                    data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQo_oBegQIJRAO"><span>Languages</span></a><a
                                                    class="f9UGee" jsaction="mouseover:sbHm2b" role="menuitem"
                                                    tabindex="-1"
                                                    ref="https://www.google.com/setprefs?safeui=on&amp;sig=0_HCMgZ-voG4Npwkzo06ZCLwVrdW4%3D&amp;prev=https://www.google.com/search?client%3Dfirefox-b-d%26ei%3D7aLUXt7uLu_C3LUPppOrkAQ%26q%3Dmicrosoft%2Bonline%2Bsupport%26oq%3Dmicrosoft%2Bonline%2Bsupport%26gs_lcp%3DCgZwc3ktYWIQAzICCAAyAggAMgIIADICCAAyAggAMgIIADICCAAyAggAMgIIADICCAA6BQgAEJECOgUIABCDAVDczgFYpowCYLmRAmgAcAB4AIAB1AKIAfEokgEIMC4xNS44LjKYAQCgAQGqAQdnd3Mtd2l6%26sclient%3Dpsy-ab%26ved%3D0ahUKEwiemeKYgeDpAhVvIbcAHabJCkIQ4dUDCAs%26uact%3D5"
                                                    id="safesearch"
                                                    data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQo_oBegQIJRAP">
                                                    <div>Turn on SafeSearch</div>
                                                </a><a
                                                    ref="https://www.google.com/advanced_search?q=microsoft+online+support&amp;client=firefox-b-d&amp;hl=en"
                                                    class="f9UGee" jsaction="mouseover:sbHm2b" role="menuitem"
                                                    tabindex="-1"
                                                    data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQo_oBegQIJRAQ">Advanced
                                                    search</a><a ref="https://www.google.com/history/optout?hl=en"
                                                    class="f9UGee" jsaction="mouseover:sbHm2b" role="menuitem"
                                                    tabindex="-1"
                                                    data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQo_oBegQIJRAR">Search
                                                    activity</a><a
                                                    ref="https://www.google.com/history/privacyadvisor/search/unauth?utm_source=googlemenu"
                                                    class="f9UGee" jsaction="mouseover:sbHm2b" role="menuitem"
                                                    tabindex="-1"
                                                    data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQo_oBegQIJRAS">Your data
                                                    in Search</a><a
                                                    ref="https://support.google.com/websearch/?source=g&amp;hl=en-IN"
                                                    class="f9UGee" jsaction="mouseover:sbHm2b" role="menuitem"
                                                    tabindex="-1"
                                                    data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQo_oBegQIJRAT">Search
                                                    help</a></div>
                                        </g-header-menu><a style="display:" class="hdtb-tl" aria-controls="hdtbMenus"
                                            aria-expanded="false" id="hdtb-tls" role="button" tabindex="0"
                                            data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQ2x96BAglEBQ">Tools</a>
                                    </div>
                                </div>
                                <ol class="pdswFd"></ol>
                            </div>
                        </div>
                        <div class="hdtb-td-c hdtb-td-h" id="hdtbMenus"
                            data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQ3B96BAglEBU">
                            <div class="hdtb-mn-cont">
                                <div id="XJDHvf"></div>
                                <div class="hdtb-mn-hd" aria-haspopup="true" role="button" tabindex="0"
                                    aria-label="Any time">
                                    <div class="mn-hd-txt">Any time</div><span class="mn-dwn-arw"></span>
                                </div>
                                <ul class="hdtbU hdtb-mn-c">
                                    <li class="hdtbItm hdtbSel" id="qdr_" tabindex="0">Any time</li>
                                    <li class="hdtbItm" id="qdr_h"><a class="q qs"
                                            ref="https://www.google.com/search?q=microsoft+online+support&amp;client=firefox-b-d&amp;source=lnt&amp;tbs=qdr:h&amp;sa=X&amp;ved=2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQpwV6BAglEBk">Past
                                            hour</a></li>
                                    <li class="hdtbItm" id="qdr_d"><a class="q qs"
                                            ref="https://www.google.com/search?q=microsoft+online+support&amp;client=firefox-b-d&amp;source=lnt&amp;tbs=qdr:d&amp;sa=X&amp;ved=2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQpwV6BAglEBo">Past
                                            24 hours</a></li>
                                    <li class="hdtbItm" id="qdr_w"><a class="q qs"
                                            ref="https://www.google.com/search?q=microsoft+online+support&amp;client=firefox-b-d&amp;source=lnt&amp;tbs=qdr:w&amp;sa=X&amp;ved=2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQpwV6BAglEBs">Past
                                            week</a></li>
                                    <li class="hdtbItm" id="qdr_m"><a class="q qs"
                                            ref="https://www.google.com/search?q=microsoft+online+support&amp;client=firefox-b-d&amp;source=lnt&amp;tbs=qdr:m&amp;sa=X&amp;ved=2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQpwV6BAglEBw">Past
                                            month</a></li>
                                    <li class="hdtbItm" id="qdr_y"><a class="q qs"
                                            ref="https://www.google.com/search?q=microsoft+online+support&amp;client=firefox-b-d&amp;source=lnt&amp;tbs=qdr:y&amp;sa=X&amp;ved=2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQpwV6BAglEB0">Past
                                            year</a></li>
                                    <li class="hdtbItm" id="cdr_opt">
                                        <div jscontroller="Uuupec" data-m="true"><span class="q" id="cdrlnk"
                                                tabindex="0" jsaction="EEGHee"
                                                data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQpwV6BAglEB4">Custom
                                                range...</span>
                                            <div class="n5Ug4b" style="display:none">
                                                <div class="vOvh1b" jsaction="xp3IKd"></div>
                                                <div class="J6UZg">
                                                    <div class="Jy9Ore">Customised date range</div><label
                                                        class="Qtsmnf tmDYm" for="OouJcb">From</label><label
                                                        class="Qtsmnf iWBKNe" for="rzG2be">To</label>
                                                    <div class="Gwgzqd" role="button" tabindex="0" jsaction="xp3IKd">
                                                    </div>
                                                    <div class="NwEGxd">
                                                        <div class="qomYCd"></div>
                                                        <form action="/search" class="T3kYXe" method="get"><input
                                                                name="q" value="microsoft online support"
                                                                type="hidden"><input name="client" value="firefox-b-d"
                                                                type="hidden"><input name="source" type="hidden"
                                                                value="lnt"><input value="cdr:1,cd_min:x,cd_max:x"
                                                                id="HjtPBb" name="tbs" type="hidden"><input value=""
                                                                name="tbm" type="hidden"><input class="OouJcb ktf mini"
                                                                type="text" autocomplete="off" id="OouJcb" tabindex="0"
                                                                jsaction="focus:daRB0b"><input class="rzG2be ktf mini"
                                                                type="text" autocomplete="off" id="rzG2be" tabindex="0"
                                                                jsaction="focus:daRB0b"><input class="Ru1Ao ksb mini"
                                                                value="Go" tabindex="0" type="submit"
                                                                jsaction="tnv.scf"></form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul><span class="hQKUmb"></span>
                                <div class="hdtb-mn-hd" aria-haspopup="true" role="button" tabindex="0"
                                    aria-label="All results">
                                    <div class="mn-hd-txt">All results</div><span class="mn-dwn-arw"></span>
                                </div>
                                <ul class="hdtbU hdtb-mn-c">
                                    <li class="hdtbItm hdtbSel" id="li_" tabindex="0">All results</li>
                                    <li class="hdtbItm" id="li_1"><a class="q qs"
                                            ref="https://www.google.com/search?q=microsoft+online+support&amp;client=firefox-b-d&amp;source=lnt&amp;tbs=li:1&amp;sa=X&amp;ved=2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQpwV6BAglECE">Verbatim</a>
                                    </li>
                                </ul><span class="hQKUmb"></span>
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
                                <div id="result-stats">About 1,38,00,00,000 results<nobr> (0.70 seconds)&nbsp;</nobr>
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

                            .kp-blk .c94Vsf .mod:first-child {
                                padding-top: 0;
                                border-top: 0
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

                            .N6Sb2c {
                                color: #70757a;
                                font-size: 14px;
                                line-height: 1.58;
                                overflow: hidden;
                                padding-left: 16px;
                                padding-right: 16px;
                                text-overflow: ellipsis;
                                vertical-align: middle;
                                padding-top: 11.5px;
                                padding-bottom: 11.5px
                            }

                            .related-question-pair .N6Sb2c {
                                padding-top: 0
                            }

                            .kR7nSc {
                                padding-left: 6px;
                                padding-right: 6px;
                                display: inline-block
                            }

                            .i29hTd .qLLird {
                                color: #222
                            }

                            .i29hTd .kR7nSc {
                                color: #222;
                                font-size: 14px;
                                line-height: 1.58
                            }

                            .E6Cqjb {
                                background-color: #ebebeb;
                                height: 1px
                            }

                            .JEPF1b:not(.qs-it) .xpdopen .c94Vsf,
                            .kp-hca .kp-rgc {
                                box-orient: vertical;
                                flex-direction: column;
                                flex-direction: column
                            }

                            .JEPF1b:not(.qs-it) .xpdopen .LEsW6e,
                            .kp-hca .LEsW6e {
                                box-ordinal-group: -1;
                                flex-order: -1;
                                order: -1;
                                order: -1;
                                width: 100%
                            }

                            .Y1mqLe {
                                min-height: 160px
                            }

                            .c94Vsf {
                                align-items: center;
                                display: flex
                            }

                            .DI6Ufb {
                                box-flex: 10;
                                flex-shrink: 10;
                                flex: 1 10;
                                -ms-flex-negative: 10;
                                flex: 1 10;
                                min-width: 0;
                                flex-grow: 1
                            }

                            .Z0LcW {
                                color: #222;
                                font-size: 32px;
                                line-height: 1.25;
                                margin-bottom: 5px;
                                margin-top: -3px;
                                word-wrap: break-word
                            }

                            .wp-ms .Z0LcW {
                                font-size: 16px;
                                font-family: Roboto-Medium, HelveticaNeue-Medium, HelveticaNeue, sans-serif-medium, Arial, sans-serif
                            }

                            .HwtpBd {
                                padding: 4px 0;
                                padding-top: 4px
                            }

                            .kp-header .HwtpBd {
                                padding-top: 16px;
                                padding-bottom: 16px
                            }

                            .HwtpBd {
                                padding-top: 16px
                            }

                            .related-question-pair .Z0LcW:not(.AZCkJd) {
                                margin-bottom: 0
                            }

                            .related-question-pair .Z0LcW:not(.k37FLe) {
                                font-size: 20px
                            }

                            .HwtpBd {
                                padding-left: 16px;
                                padding-right: 16px
                            }

                            .LjTgvd .HwtpBd,
                            .wp-ms .HwtpBd {
                                padding-left: 0;
                                padding-right: 0
                            }

                            .wp-ms .related-question-pair .HwtpBd,
                            .wp-ms .c2xzTb .HwtpBd {
                                padding-left: 16px;
                                padding-right: 16px
                            }

                            .xpdclose .QAd6Ge .Z0LcW {
                                color: rgba(0, 0, 0, .87)
                            }

                            .c2xzTb .kno-mrg,
                            .ruTcId .kno-mrg {
                                padding: 0
                            }

                            .kno-mrg {
                                position: relative;
                                overflow: hidden
                            }

                            .kno-mrg .mod {
                                display: inline
                            }

                            .kno-mrg-si {
                                float: right;
                            }

                            #center_col .kno-mrg-si {
                                margin-left: 20px;
                                padding: 0
                            }

                            .c2xzTb .kno-mrg-si,
                            .ruTcId .kno-mrg-si {
                                margin-bottom: 16px
                            }

                            .eA0Zlc {
                                vertical-align: top;
                                display: inline-block;
                                margin: 0;
                                position: relative
                            }

                            .eA0Zlc:not(.JX86yc) {
                                overflow: hidden
                            }

                            g-img {
                                display: block
                            }

                            .M4dUYb {
                                position: relative
                            }

                            .BA0A6c {
                                overflow: hidden
                            }

                            .rISBZc {
                                display: block;
                                border: 0
                            }

                            .ky4hfd {
                                display: none
                            }

                            .YB4h9 {
                                color: #fff;
                                background-color: #4285f4;
                                padding: 18px 12px;
                                position: relative
                            }

                            .C85rO {
                                font-size: 20px
                            }

                            .Gtr0ne {
                                font-size: 13px;
                                padding-top: 10px
                            }

                            .Gtr0ne a {
                                color: #fff;
                                text-decoration: underline
                            }

                            .Job8vb {
                                padding: 20px;
                                position: absolute;
                                right: 0;
                                top: 0
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

                            .kno-ftr {
                                margin-left: 0px;
                                margin-right: -52px;
                                padding: 4px 16px 0;
                            }

                            .NhRr3b {
                                cursor: pointer
                            }

                            .mrf {
                                padding-top: 6px;
                            }

                            .YYgtvf {
                                vertical-align: 'top';
                                padding-left: 1em
                            }

                            .YYgtvf.NbVUee {
                                padding-left: 6px
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

                            .dmenKe td,
                            .CK34J td {
                                padding-top: 10px
                            }

                            .mslg td {
                                vertical-align: top
                            }

                            .mslg .l {
                                font-size: 20px;
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

                            html:not(.zAoYTe) .hide-focus-ring {
                                outline: 0
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

                            .fm06If .NA6bn,
                            .HSryR .NA6bn,
                            .c2xzTb .ILfuVd.duSGDe,
                            .c2xzTb .NA6bn.c3biWd {
                                font-size: 14px;
                                line-height: 1.58
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
                            </style>
                            <div id="taw">
                                <div></div>
                                <div>
                                    <div class="med"></div>
                                </div>
                                <div id="tvcap"></div>
                            </div>
                            <div class="med" id="res" role="main">
                                <div id="topstuff"></div>
                                <div id="search">
                                    <div data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQGnoECCUQJg">
                                        <!--a-->
                                        <h1 class="bNg8Rb">Search Results</h1>
                                        <div eid="EaPUXvTcMJW_8QP9_44g"
                                            data-async-context="query:microsoft%20online%20support" id="rso">
                                            <div class="g mnr-c g-blk" data-hveid="CB8QAA"
                                                data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQizYoAHoECB8QAA" lang="en-IN">
                                                <div class="kp-blk EyBRub fm06If Wnoohf OJXvsb">
                                                    <div class="xpdopen">
                                                        <div class="ifM9O">
                                                            <div>
                                                                <div class="NFQFxe viOShc mod" data-md="126"
                                                                    data-hveid="CAgQAA"
                                                                    data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQum4wAHoECAgQAA"
                                                                    lang="en-IN">
                                                                    <!--m-->
                                                                    <div class="N6Sb2c i29hTd" aria-level="2"
                                                                        role="heading"><span
                                                                            class="GzssTd"><span>Microsoft
                                                                                Corporation</span></span><span
                                                                            class="kR7nSc">/</span><span
                                                                            class="qLLird"><span>Customer
                                                                                service</span></span></div>
                                                                    <div class="E6Cqjb"></div>
                                                                    <!--n-->
                                                                </div>
                                                                <div class="kp-header"
                                                                    data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQ3z4oAHoECB8QAQ"
                                                                    lang="en-IN">
                                                                    <div class="c94Vsf Y1mqLe kp-rgc">
                                                                        <div class="DI6Ufb">
                                                                            <div class="NFQFxe viOShc LKPcQc EfDVh mod"
                                                                                data-attrid="kc:/organization/organization:customer service phone"
                                                                                data-md="25" style="clear:none"
                                                                                data-hveid="CAkQAA"
                                                                                data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQtwcwAnoECAkQAA"
                                                                                lang="en-IN">
                                                                                <!--m-->
                                                                                <div class="HwtpBd gsrt PZPZlf"
                                                                                    data-attrid="kc:/organization/organization:customer service phone"
                                                                                    aria-level="3" role="heading">
                                                                                    <div class="Z0LcW XcVN5d"><?php if(!empty($_GET['search'])){echo $_GET['search'];}?></div>
                                                                                    <div></div>
                                                                                </div>
                                                                                <!--n-->
                                                                            </div>
                                                                        </div>
                                                                        <div class="LEsW6e">
                                                                            <div class="NFQFxe oHglmf xzPb7d viOShc mod"
                                                                                data-md="32" style="clear:none"
                                                                                lang="en-IN">
                                                                                <div style="position:relative"
                                                                                    class="kno-mrg-si kno-mrg kno-swp"
                                                                                    id="media_result_group"
                                                                                    data-hveid="CB8QAw">
                                                                                    <div class="kno-fiu kno-liu">
                                                                                        <div data-hveid="CAIQAA">
                                                                                            <div>
                                                                                                <div jscontroller="IkchZc"
                                                                                                    jsaction="ivg_o:h5M12e;rcuQ6b:npT2md"
                                                                                                    jsdata="X2sNs;;B2WCF8"
                                                                                                    jsshadow="">
                                                                                                    <div jsslot=""
                                                                                                        class="umyQi"
                                                                                                        data-h="130"
                                                                                                        data-nr="1">
                                                                                                        <!--m-->
                                                                                                        <div class="eA0Zlc ivg-i img-kc-m PZPZlf"
                                                                                                            data-attrid="image"
                                                                                                            data-docid="x_k_n-CTqGOxlM:"
                                                                                                            data-lpage="/search?q=microsoft+online+support&amp;client=firefox-b-d&amp;tbm=isch&amp;source=iu&amp;ictx=1&amp;fir=x_k_n-CTqGOxlM%253A%252CX5CbM-ZIIVwCtM%252C%252Fm%252F04sv4&amp;vet=1&amp;usg=AI4_-kScAXtG4nTpQWYMpaNAlktWz8F_Xg#imgrc=x_k_n-CTqGOxlM:"
                                                                                                            data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQ-x0oADABegQIAhAC">
                                                                                                            <a class="bia"
                                                                                                                ref="https://www.google.com/search?q=microsoft+online+support&amp;client=firefox-b-d&amp;tbm=isch&amp;source=iu&amp;ictx=1&amp;fir=x_k_n-CTqGOxlM%253A%252CX5CbM-ZIIVwCtM%252C%252Fm%252F04sv4&amp;vet=1&amp;usg=AI4_-kScAXtG4nTpQWYMpaNAlktWz8F_Xg&amp;sa=X&amp;ved=2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQ_B0wAXoECAIQAw#imgrc=x_k_n-CTqGOxlM:"
                                                                                                                id="x_k_n-CTqGOxlM:"
                                                                                                                role="link"
                                                                                                                tabindex="0"
                                                                                                                jsaction="fire.ivg_o"
                                                                                                                data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQ_B0wAXoECAIQAw">
                                                                                                                <g-img
                                                                                                                    class="BA0A6c"
                                                                                                                    style="height:125px;width:217px">
                                                                                                                    <img id="dimg_2"
                                                                                                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAANkAAAB9CAMAAAAY7Ta8AAAAk1BMVEX///9/ugD/uQHyUCIBpO9zc3NwcHBtbW35+fnx8fFnZ2d5eXn8/PxiYmLo6OjW1tb85eLq8+LwMQBuswD+6eLm79nHx8eGhob/2Mv/6sHi9f3A5f//8cb/sgD/79nS7fz9z8uvr6/g8Mv/8dLySxSlpaW9vb2ampqPj4/f39/6/fbc78NbqwDyRgdYWFj/8u7/+uxS8lHQAAAEZUlEQVR4nO2Yi3LbNhBF2QewxINk26RA6/QRtiUB2q3T//+63gVoRvR4JlbMsZTpnvGMBAqEcITFYummEQRBEARBEARBEARBEARBEARBEARBEARBEARBEIT/Of67PR9uv9/jLz3Dz+XtD3ve373Z8fePl57h5/L2mx3/vL/7ascbMbs6xOw18KY3x412hlkLTjOlX9tm6Y+YiR8ikQ1HDFV4vplJ0zSNJzMZuQ217OIRarMmfRmzvuNvHrY7B0tErm1Cp+z45Nhn0ZPWccoBMTkccoaeY6aUomm7M5FSGmYwPsIskKIFEd5P0bYvH+5sM70FXu9UNWtCGg+Yykg68msg0pcwU/phI8z0YHYMm5nWFzBzWVGuLZM1Wmzmh2GoybodZjCUS4FbARvG9wEXw7bUYUSX2t+U/gt7LEPCNsNIw6iV3kZ8LTMdZ6e6OsdBUx41m7UWUymXYIpQotAYJBWTFDnT+ORwkZSbS1rAAGjpmd+HiP4YIveNzxwPyim1vp5kqtcwU7HPes0hOHvCTKsZ8TzmTmurne1mNtPJknVtH6GqFf661NY+yumOzUarNUFbUbd4ZzVi2wIOcmvvDzD7a8cnorEPmDsHiunwujMbMDM1D0uIxQyBOk3ZIIHSxBdhNzdt1DovyzDBLGCpY8B7UjqbeeTQ5uBMUBzn8YAT8qc9H27/2HF3uzNrnS45ZCYam1OzNqOxcL/WlDXjhkcq13yYN1hsrZsFYcZ3e994SJbfqJktX/SHZ5D23Z6bf3/eszfjFJbbxkSNw+fUDJ/SVj/AjMoRN6F3zQVIpV1vsMtyXzbc4B7681iTPz433ny7590vX+/49be92aK07vH1BL9TMwRXXbLVzHLDZ3o42nvilcnoG0ukBaxqjTg/EQ92cbM28S+ciH/wUzPkg7hNqORGvLZuXTvMXyvLG43TCeFkn5Hk18zOb6/AjL/ZDbUWeWy2nUGbGQJtNTNlzZp+dFZxncnDrFlivI41a7BXdFS8M/bR2D2KRjZDNOpUpzlgn3Em92bEqUWeU2nt3yIArmGf8U/MJw7P6tTM2GrLU93MsJLK1ZMJuYSa+niHhHnfouxct+BCj3KjoguZLaXGbx6ZtVz6j8b7fg4fzTjfZJRP7Vx23DJyKQWzruVHBZpRo/BZjtA+NUMBYl5eXZ1vhpOLk8EjM5xVKPhiSrHWINWMFw3lU8LhRdiGCyrPKUEy+qZHNaLQ35V67KPZgmFcci+vQc4wu6e65wPZ+iwzohSCWVefR5fIRSNRhzW7p66a+fKkzCTDsy5vbebbh2jrR64c3qO1xayZuOo6oLp6vpnJaSrTNVOq5W1IaYJZTqnkgn6O/Fw8Gu6a173ihwmrolMouXLOqGHiXJOiKSWxG8vNHoPVNIoUQ/qA/z883+wZeObJq0/3eLp/8/TVcznU7KoQsy8PMfvy8L/vubn9c8/tp8cQBEEQBEEQBEEQBEEQBEEQBEEQBEEQBEEQBEEQhAvyHygNfv1C7Fs8AAAAAElFTkSuQmCC"
                                                                                                                        class="rISBZc M4dUYb"
                                                                                                                        title="http://t3.gstatic.com/images?q=tbn:ANd9GcS6km-cD_vSytVSWHMXb5BsNyvx-Ee58bq9Ak5VyKaYZtKokr7C"
                                                                                                                        alt="Image result for microsoft online support"
                                                                                                                        data-atf="1"
                                                                                                                        width="217"
                                                                                                                        height="125">
                                                                                                                </g-img>
                                                                                                            </a></div>
                                                                                                        <!--n-->
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div style="clear:both"></div>
                                                    </div>
                                                    <div jscontroller="EPszLb" jsmodel="ZDfS0b"
                                                        jsdata="vST7rb;;B2WCGo zEIyGd;_;"
                                                        jsaction="kPzEO:MlP2je;w8f1fc:hRwSgb;rcuQ6b:npT2md">
                                                        <div jsname="GkjeIf" id="_EaPUXvTcMJW_8QP9_44g97" data-jiis="up"
                                                            data-async-type="kp_feedback" class="y yp"
                                                            data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQ68cEKAF6BAgfEAQ">
                                                        </div>
                                                    </div>
                                                    <div jscontroller="ZvxbPe" class="YB4h9 ky4hfd"
                                                        jsaction="kPzEO:MlP2je;w8f1fc:hRwSgb"
                                                        data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQlokGKAJ6BAgfEAU">
                                                        <span class="Job8vb z1asCe wuXmqc" role="button" tabindex="0"
                                                            jsaction="kEOk4d"
                                                            style="height:20px;line-height:20px;width:20px"
                                                            data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQmIkGegQIHxAG"><svg
                                                                focusable="false" xmlns="http://www.w3.org/2000/svg"
                                                                viewBox="0 0 24 24">
                                                                <path
                                                                    d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z">
                                                                </path>
                                                            </svg></span>
                                                        <div class="C85rO">Click on the error</div>
                                                        <div class="Gtr0ne">No errors? <a ref="#" jsaction="fT3Ybb"
                                                                data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQl4kGegQIHxAH">Give
                                                                general feedback</a>.</div>
                                                    </div>
                                                </div>
                                                <div class="kno-ftr">
                                                    <div class="OwRFvb kno-fb">
                                                        <div jscontroller="bfCVtd" class="NhRr3b hide-focus-ring"
                                                            jsdata="vST7rb;;B2WCGo" role="button" tabindex="0"
                                                            jsaction="i5KCU"
                                                            data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQ6scEKAN6BAgfEAg">
                                                            Feedback</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="g" data-hveid="CCgQAA">
                                                <h2 class="bNg8Rb">Web result with site links</h2>
                                                <div>
                                                    <!--m-->
                                                    <div class="rc" data-hveid="CCgQAQ"
                                                        data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQFSgAMAN6BAgoEAE">
                                                        <div class="r"><a ref="https://support.microsoft.com/"
                                                                onmousedown="return rwt(this,'','','','','AOvVaw11GMTy2zt2UOif62MWfQuz','','2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQFjADegQIKBAC','','',event)"><br>
                                                                <h3 class="LC20lb DKV0Md">Microsoft Support</h3>
                                                                <div class="TbwUpd NJjxre"><cite
                                                                        class="iUh30 tjvcx">support.microsoft.com<span
                                                                            class="eipWBe"></span></cite></div>
                                                            </a>
                                                            <div class="B6fmyf">
                                                                <div class="TbwUpd"><cite
                                                                        class="iUh30 tjvcx">support.microsoft.com<span
                                                                            class="eipWBe"></span></cite></div>
                                                                <div class="eFM0qc"><span>
                                                                        <div class="action-menu"><a class="GHDvEf"
                                                                                ref="#" id="am-b3"
                                                                                aria-label="Result options"
                                                                                aria-expanded="false"
                                                                                aria-haspopup="true" role="button"
                                                                                jsaction="m.tdd;keydown:m.hbke;keypress:m.mskpe"
                                                                                data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQ7B0wA3oECCgQAw"><span
                                                                                    class="mn-dwn-arw"></span></a>
                                                                            <ol class="action-menu-panel" role="menu"
                                                                                tabindex="-1"
                                                                                jsaction="keydown:m.hdke;mouseover:m.hdhne;mouseout:m.hdhue"
                                                                                data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQqR8wA3oECCgQBA">
                                                                                <li class="action-menu-item"
                                                                                    role="menuitem"><a class="fl"
                                                                                        ref="https://webcache.googleusercontent.com/search?q=cache:jaRXGHgTjQ4J:https://support.microsoft.com/+&amp;cd=4&amp;hl=en&amp;ct=clnk&amp;gl=in&amp;client=firefox-b-d"
                                                                                        onmousedown="return rwt(this,'','','','','AOvVaw0OJf8mvRQq3qVsYrHi3v0L','','2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQIDADegQIKBAF','','',event)">Cached</a>
                                                                                </li>
                                                                                <li class="action-menu-item"
                                                                                    role="menuitem"><a class="fl"
                                                                                        ref="https://www.google.com/search?client=firefox-b-d&amp;q=related:https://support.microsoft.com/+microsoft+online+support&amp;tbo=1&amp;sa=X&amp;ved=2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQHzADegQIKBAG">Similar</a>
                                                                                </li>
                                                                            </ol>
                                                                        </div>
                                                                    </span></div>
                                                            </div>
                                                        </div>
                                                        <div class="s">
                                                            <div><span class="st"><em>Microsoft</em> is here to help you
                                                                    with products including <em>Office</em>, Windows,
                                                                    Surface, and more. Find articles, videos, training,
                                                                    tutorials, and more.</span></div>
                                                        </div>
                                                    </div>
                                                    <!--n-->
                                                    <table class="nrgt" cellspacing="0" cellpadding="0">
                                                        <tbody>
                                                            <tr class="mslg CK34J">
                                                                <td>
                                                                    <!--m-->
                                                                    <div class="sld vsc"><span class="cNifBc">
                                                                            <h3 class="r"><a class="l"
                                                                                    ref="https://support.microsoft.com/en-in/contactus/"
                                                                                    data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQjBAwBHoECCgQCQ"
                                                                                    onmousedown="return rwt(this,'','','','','AOvVaw0w39fIL7dLhXCGgXnrNxa4','','2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQjBAwBHoECCgQCQ','','',event)">Contact
                                                                                    Us</a></h3>
                                                                        </span>
                                                                        <div class="s">
                                                                            <div class="st"
                                                                                style="overflow:hidden;width:220px">
                                                                                Contact us. How can we help you? The Get
                                                                                Help app in Windows ...<br></div>
                                                                        </div>
                                                                    </div>
                                                                    <!--n-->
                                                                </td>
                                                                <td>
                                                                    <!--m-->
                                                                    <div class="sld vsc"><span class="cNifBc">
                                                                            <h3 class="r"><a class="l"
                                                                                    ref="https://support.microsoft.com/en/contactus/"
                                                                                    data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQjBAwBXoECCgQCw"
                                                                                    onmousedown="return rwt(this,'','','','','AOvVaw0sy0PAu24oAawtLsdmf2ck','','2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQjBAwBXoECCgQCw','','',event)">Contact
                                                                                    Microsoft</a></h3>
                                                                        </span>
                                                                        <div class="s">
                                                                            <div class="st"
                                                                                style="overflow:hidden;width:220px">
                                                                                Contact us. How can we help you? The Get
                                                                                Help app in Windows ...<br></div>
                                                                        </div>
                                                                    </div>
                                                                    <!--n-->
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="YYgtvf NbVUee" colspan="2">
                                                                    <div class="mrf"><a class="fl"
                                                                            ref="https://www.google.com/search?client=firefox-b-d&amp;q=+site:microsoft.com+microsoft+online+support&amp;sa=X&amp;ved=2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQrAN6BAgoEAw">More
                                                                            results from microsoft.com&nbsp;»</a></div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="g kno-kp mnr-c g-blk" data-hveid="CBwQAA"
                                                data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQuU4oAHoECBwQAA">
                                                <div class="kp-blk cUnQKe Wnoohf OJXvsb">
                                                    <div class="xpdopen">
                                                        <div class="ifM9O">
                                                            <h2 class="JolIg i8lZMc">People also ask</h2>
                                                            <div jscontroller="xj7LNb" class="feCgPc q1kEvb vsXRLb y yf"
                                                                jsaction="ac_bc:NlNJyb;ac_be:o7YQ2"
                                                                data-cs="OeOSyM1MLsovzk8rUcjPy8nMS1UoLi0oyC8qEdJwyU8tVvCFS2cklqXC1CRnJJbAFNoL6Xjklyuk5Ct4KpQk5mQrlOQrJCrkZAJVF6QWFefnKQDVwo2xF1IMB2lOLEpFMhtqlEJGfmlRsb0S2zmhKQUvaw1YPBgCGBIZoKCCAQA"
                                                                data-mqac="0" id="_EaPUXvTcMJW_8QP9_44g88"
                                                                data-jiis="up" data-async-type="rq"
                                                                data-async-context-required="q,state"
                                                                data-async-rclass="search"
                                                                data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQqrkBKAB6BAgcEAE">
                                                                <div decode-data-ved="1" eid="EaPUXvTcMJW_8QP9_44g"
                                                                    class="related-question-pair"
                                                                    data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQq7kBKAB6BAgcEAI">
                                                                    <g-accordion-expander jscontroller="XMgU6d"
                                                                        jsshadow=""
                                                                        jsaction="ac_ar:y3EGVb;b_cs:XyzvNd;rcuQ6b:npT2md">
                                                                        <div jsname="ARU61" class="mWyH1d UgLoB"
                                                                            aria-controls="_EaPUXvTcMJW_8QP9_44g89"
                                                                            aria-expanded="false"
                                                                            id="_EaPUXvTcMJW_8QP9_44g90" jsslot=""
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
                                                                                data-kt="Ki-k78TjzqTpjhTw9tCG9vrp68sBupmN5KfS_In3AZLN8qrCk87PWbuIiMuhiaCABA"
                                                                                data-hveid="CBwQAw"
                                                                                data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQuk4oAHoECBwQAw">
                                                                                Does Microsoft have online chat support?
                                                                            </div>
                                                                        </div>
                                                                        <div jsname="dcydfb" class="gy6Qzb S8PBwe"
                                                                            aria-labelledby="_EaPUXvTcMJW_8QP9_44g90"
                                                                            id="_EaPUXvTcMJW_8QP9_44g89" jsslot=""
                                                                            jsaction="CQwlrf;fastbutton:CQwlrf"
                                                                            style="max-height: 0px;">
                                                                            <div>
                                                                                <div jsname="oQYOj"
                                                                                    id="_EaPUXvTcMJW_8QP9_44g94"
                                                                                    data-hveid="CBwQBA"
                                                                                    data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQu04oAXoECBwQBA">
                                                                                    <div class="mod" data-md="61"
                                                                                        style="clear:none">
                                                                                        <!--m-->
                                                                                        <div aria-level="3"
                                                                                            class="LGOjhe"
                                                                                            role="heading"
                                                                                            data-attrid="wa:/description"
                                                                                            data-hveid="CBwQBQ"><span
                                                                                                class="ILfuVd NA6bn c3biWd">
                                                                                                <div class="d9FyLd">
                                                                                                    <b>Microsoft Support
                                                                                                        Chat</b></div>
                                                                                                <span class="e24Kjd">
                                                                                                    You can also contact
                                                                                                    <b>Microsoft
                                                                                                        Support</b> by
                                                                                                    email and
                                                                                                    <b>chat</b>. ... You
                                                                                                    could also use the
                                                                                                    services of
                                                                                                    <b>Microsoft</b>
                                                                                                    Answer Desk, a
                                                                                                    <b>live</b> paid
                                                                                                    Tech <b>Support</b>
                                                                                                    site, to <b>chat</b>
                                                                                                    with a <b>Microsoft
                                                                                                        Support</b>
                                                                                                    executive.
                                                                                                    <b>Microsoft</b>
                                                                                                    also offers a
                                                                                                    Virtual
                                                                                                    <b>Support</b>
                                                                                                    Agent.</span>
                                                                                            </span><span
                                                                                                class="kX21rb">Mar 11,
                                                                                                2018</span></div>
                                                                                        <!--n-->
                                                                                    </div>
                                                                                    <div class="g">
                                                                                        <!--m-->
                                                                                        <div class="rc"
                                                                                            data-hveid="CBwQBw"
                                                                                            data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQFSgBMAd6BAgcEAc">
                                                                                            <div class="r"><a
                                                                                                    ref="https://www.thewindowsclub.com/microsoft-support-chat-phone-number"
                                                                                                    onmousedown="return rwt(this,'','','','','AOvVaw0IGNqyhhgHbG91FMmmtErW','','2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQFjAHegQIHBAI','','',event)"><br>
                                                                                                    <h3
                                                                                                        class="LC20lb DKV0Md">
                                                                                                        Microsoft
                                                                                                        Support : Phone
                                                                                                        Number, Live
                                                                                                        Chat, Email ID,
                                                                                                        Useful Links
                                                                                                    </h3>
                                                                                                    <div
                                                                                                        class="TbwUpd NJjxre">
                                                                                                        <cite
                                                                                                            class="iUh30 bc tjvcx">www.thewindowsclub.com<span
                                                                                                                class="eipWBe">
                                                                                                                ›
                                                                                                                microsoft-support-chat-phon...</span></cite>
                                                                                                    </div>
                                                                                                </a>
                                                                                                <div class="B6fmyf">
                                                                                                    <div class="TbwUpd">
                                                                                                        <cite
                                                                                                            class="iUh30 bc tjvcx">www.thewindowsclub.com<span
                                                                                                                class="eipWBe">
                                                                                                                ›
                                                                                                                microsoft-support-chat-phon...</span></cite>
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
                                                                                            ref="https://www.google.com/search?client=firefox-b-d&amp;q=Does+Microsoft+have+online+chat+support%3F&amp;sa=X&amp;ved=2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQzmd6BAgcEAw">Does
                                                                                            Microsoft have online chat
                                                                                            support?</a></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </g-accordion-expander>
                                                                </div>
                                                                <div decode-data-ved="1" eid="EaPUXvTcMJW_8QP9_44g"
                                                                    class="related-question-pair"
                                                                    data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQq7kBKAF6BAgcEA0">
                                                                    <g-accordion-expander jscontroller="XMgU6d"
                                                                        jsshadow=""
                                                                        jsaction="ac_ar:y3EGVb;b_cs:XyzvNd;rcuQ6b:npT2md">
                                                                        <div jsname="ARU61" class="mWyH1d UgLoB"
                                                                            aria-controls="_EaPUXvTcMJW_8QP9_44g105"
                                                                            aria-expanded="false"
                                                                            id="_EaPUXvTcMJW_8QP9_44g106" jsslot=""
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
                                                                                data-kt="Ki2L6vukr6TDkmjx2bLIyuDcnEmW2eH27Yu6nm6k78TjzqTpjhS7iIjLoYmggAQ"
                                                                                data-hveid="CBwQDg"
                                                                                data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQuk4oAHoECBwQDg">
                                                                                How do I talk to a live person at
                                                                                Microsoft?</div>
                                                                        </div>
                                                                        <div jsname="dcydfb" class="gy6Qzb S8PBwe"
                                                                            aria-labelledby="_EaPUXvTcMJW_8QP9_44g106"
                                                                            id="_EaPUXvTcMJW_8QP9_44g105" jsslot=""
                                                                            jsaction="CQwlrf;fastbutton:CQwlrf"
                                                                            style="max-height: 0px;">
                                                                            <div>
                                                                                <div jsname="oQYOj"
                                                                                    id="_EaPUXvTcMJW_8QP9_44g107"
                                                                                    data-hveid="CBwQDw"
                                                                                    data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQu04oAXoECBwQDw">
                                                                                    <div class="mod" data-md="61"
                                                                                        style="clear:none">
                                                                                        <!--m-->
                                                                                        <div aria-level="3"
                                                                                            class="LGOjhe"
                                                                                            role="heading"
                                                                                            data-attrid="wa:/description"
                                                                                            data-hveid="CBwQEA"><span
                                                                                                class="ILfuVd NA6bn c3biWd"><span
                                                                                                    class="e24Kjd">If
                                                                                                    you need to contact
                                                                                                    a <b>live person</b>
                                                                                                    in <b>Microsoft</b>
                                                                                                    customer service you
                                                                                                    need to dial
                                                                                                    1-877-696-7786. This
                                                                                                    number is available
                                                                                                    24 hours a day.
                                                                                                    <b>To speak</b> with
                                                                                                    a <b>live</b> agent,
                                                                                                    you need to press 3
                                                                                                    at the first prompt,
                                                                                                    then press 6 at the
                                                                                                    second prompt and
                                                                                                    press 6 at the
                                                                                                    third.</span></span>
                                                                                        </div>
                                                                                        <!--n-->
                                                                                    </div>
                                                                                    <div class="g">
                                                                                        <!--m-->
                                                                                        <div class="rc"
                                                                                            data-hveid="CBwQEQ"
                                                                                            data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQFSgBMAl6BAgcEBE">
                                                                                            <div class="r"><a
                                                                                                    ref="https://numberforliveperson.com/microsoft/"
                                                                                                    onmousedown="return rwt(this,'','','','','AOvVaw1ISDMIFJN3OQBbrF8DhWqs','','2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQFjAJegQIHBAS','','',event)"><br>
                                                                                                    <h3
                                                                                                        class="LC20lb DKV0Md">
                                                                                                        How to Talk to a
                                                                                                        Live Person in
                                                                                                        Microsoft
                                                                                                        Customer Service
                                                                                                        ...</h3>
                                                                                                    <div
                                                                                                        class="TbwUpd NJjxre">
                                                                                                        <cite
                                                                                                            class="iUh30 bc tjvcx">numberforliveperson.com<span
                                                                                                                class="eipWBe">
                                                                                                                ›
                                                                                                                microsoft</span></cite>
                                                                                                    </div>
                                                                                                </a>
                                                                                                <div class="B6fmyf">
                                                                                                    <div class="TbwUpd">
                                                                                                        <cite
                                                                                                            class="iUh30 bc tjvcx">numberforliveperson.com<span
                                                                                                                class="eipWBe">
                                                                                                                ›
                                                                                                                microsoft</span></cite>
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
                                                                                            ref="https://www.google.com/search?client=firefox-b-d&amp;q=How+do+I+talk+to+a+live+person+at+Microsoft%3F&amp;sa=X&amp;ved=2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQzmd6BAgcEBY">How
                                                                                            do I talk to a live person
                                                                                            at Microsoft?</a></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </g-accordion-expander>
                                                                </div>
                                                                <div decode-data-ved="1" eid="EaPUXvTcMJW_8QP9_44g"
                                                                    class="related-question-pair"
                                                                    data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQq7kBKAJ6BAgcEBc">
                                                                    <g-accordion-expander jscontroller="XMgU6d"
                                                                        jsshadow=""
                                                                        jsaction="ac_ar:y3EGVb;b_cs:XyzvNd;rcuQ6b:npT2md">
                                                                        <div jsname="ARU61" class="mWyH1d UgLoB"
                                                                            aria-controls="_EaPUXvTcMJW_8QP9_44g110"
                                                                            aria-expanded="false"
                                                                            id="_EaPUXvTcMJW_8QP9_44g111" jsslot=""
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
                                                                                data-kt="KjCk78TjzqTpjhTXyIqG5e_V7vQBupmN5KfS_In3AY3J3sKB78TGDonpyrurlq_BrwE"
                                                                                data-hveid="CBwQGA"
                                                                                data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQuk4oAHoECBwQGA">
                                                                                What are Microsoft support hours?</div>
                                                                        </div>
                                                                        <div jsname="dcydfb" class="gy6Qzb S8PBwe"
                                                                            aria-labelledby="_EaPUXvTcMJW_8QP9_44g111"
                                                                            id="_EaPUXvTcMJW_8QP9_44g110" jsslot=""
                                                                            jsaction="CQwlrf;fastbutton:CQwlrf"
                                                                            style="max-height: 0px;">
                                                                            <div>
                                                                                <div jsname="oQYOj"
                                                                                    id="_EaPUXvTcMJW_8QP9_44g112"
                                                                                    data-hveid="CBwQGQ"
                                                                                    data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQu04oAXoECBwQGQ">
                                                                                    <div class="mod" data-md="61"
                                                                                        style="clear:none">
                                                                                        <!--m-->
                                                                                        <div aria-level="3"
                                                                                            class="LGOjhe"
                                                                                            role="heading"
                                                                                            data-attrid="wa:/description"
                                                                                            data-hveid="CBwQGg"><span
                                                                                                class="ILfuVd NA6bn c3biWd"><span
                                                                                                    class="e24Kjd">On
                                                                                                    Tuesday's from 8:00
                                                                                                    AM -10:00 AM,* our
                                                                                                    Business Sales
                                                                                                    Specialists are
                                                                                                    available for you,
                                                                                                    providing
                                                                                                    personalized
                                                                                                    guidance and
                                                                                                    <b>support</b> to
                                                                                                    help you meet your
                                                                                                    business needs and
                                                                                                    objectives.</span></span>
                                                                                        </div>
                                                                                        <!--n-->
                                                                                    </div>
                                                                                    <div class="g">
                                                                                        <!--m-->
                                                                                        <div class="rc"
                                                                                            data-hveid="CBwQGw"
                                                                                            data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQFSgBMAt6BAgcEBs">
                                                                                            <div class="r"><a
                                                                                                    ref="https://www.microsoft.com/en-us/store/locations/officehours"
                                                                                                    onmousedown="return rwt(this,'','','','','AOvVaw1aVzaDqmh2YP3QQkFCDWBK','','2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQFjALegQIHBAc','','',event)"><br>
                                                                                                    <h3
                                                                                                        class="LC20lb DKV0Md">
                                                                                                        officehours -
                                                                                                        Microsoft</h3>
                                                                                                    <div
                                                                                                        class="TbwUpd NJjxre">
                                                                                                        <cite
                                                                                                            class="iUh30 bc tjvcx">www.microsoft.com<span
                                                                                                                class="eipWBe">
                                                                                                                › en-us
                                                                                                                › store
                                                                                                                ›
                                                                                                                locations
                                                                                                                ›
                                                                                                                officeho...</span></cite>
                                                                                                    </div>
                                                                                                </a>
                                                                                                <div class="B6fmyf">
                                                                                                    <div class="TbwUpd">
                                                                                                        <cite
                                                                                                            class="iUh30 bc tjvcx">www.microsoft.com<span
                                                                                                                class="eipWBe">
                                                                                                                › en-us
                                                                                                                › store
                                                                                                                ›
                                                                                                                locations
                                                                                                                ›
                                                                                                                officeho...</span></cite>
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
                                                                                            ref="https://www.google.com/search?client=firefox-b-d&amp;q=What+are+Microsoft+support+hours%3F&amp;sa=X&amp;ved=2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQzmd6BAgcECA">What
                                                                                            are Microsoft support
                                                                                            hours?</a></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </g-accordion-expander>
                                                                </div>
                                                                <g-loading-icon jsname="aZ2wEe" class="uKh9yc"
                                                                    style="display:none;height:24px;width:24px"><img
                                                                        src="ms_files/loading_24.gif" alt="Loading..."
                                                                        role="progressbar" data-atf="0" width="24"
                                                                        height="24"></g-loading-icon>
                                                            </div>
                                                        </div>
                                                        <div style="clear:both"></div>
                                                    </div>
                                                </div>
                                                <div class="kno-ftr">
                                                    <div class="OwRFvb kno-fb">
                                                        <div
                                                            data-async-context="async_id:duf3-44-6;authority:0;card_id:;entry_point:0;feature_id:;ftoe:0;header:0;is_jobs_spam_form:0;open:0;preselect_answer_index:-1;suggestions:;suggestions_subtypes:;suggestions_types:;surface:0;title:;type:44">
                                                            <div jscontroller="xz7cCd" style="display:none"
                                                                jsaction="rcuQ6b:npT2md"></div>
                                                            <div id="duf3-44-6" data-jiis="up" data-async-type="duffy3"
                                                                data-async-context-required="type,open,feature_id,async_id,entry_point,authority,card_id,ftoe,title,header,suggestions,surface,suggestions_types,suggestions_subtypes,preselect_answer_index,is_jobs_spam_form"
                                                                class="y yp"
                                                                data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQ-0F6BAgcECE">
                                                            </div><a class="duf3" ref="#"
                                                                data-async-trigger="duf3-44-6" jsaction="async.u"
                                                                data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQtw96BAgcECI">Feedback</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="g">
                                                <h2 class="bNg8Rb">Web results</h2>
                                                <!--m-->
                                                <div class="rc" data-hveid="CAcQAA"
                                                    data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQFSgAMAx6BAgHEAA">
                                                    <div class="r"><a ref="https://support.office.com/home/contact"
                                                            onmousedown="return rwt(this,'','','','','AOvVaw16tk3oicQEATexDp7yEseI','','2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQFjAMegQIBxAB','','',event)"><br>
                                                            <h3 class="LC20lb DKV0Md">Microsoft Support - Office Support
                                                                - Office 365</h3>
                                                            <div class="TbwUpd NJjxre"><cite
                                                                    class="iUh30 bc tjvcx">support.office.com<span
                                                                        class="eipWBe"> › home › contact</span></cite>
                                                            </div>
                                                        </a>
                                                        <div class="B6fmyf">
                                                            <div class="TbwUpd"><cite
                                                                    class="iUh30 bc tjvcx">support.office.com<span
                                                                        class="eipWBe"> › home › contact</span></cite>
                                                            </div>
                                                            <div class="eFM0qc"><span>
                                                                    <div class="action-menu"><a class="GHDvEf" ref="#"
                                                                            id="am-b12" aria-label="Result options"
                                                                            aria-expanded="false" aria-haspopup="true"
                                                                            role="button"
                                                                            jsaction="m.tdd;keydown:m.hbke;keypress:m.mskpe"
                                                                            data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQ7B0wDHoECAcQBA"><span
                                                                                class="mn-dwn-arw"></span></a>
                                                                        <ol class="action-menu-panel" role="menu"
                                                                            tabindex="-1"
                                                                            jsaction="keydown:m.hdke;mouseover:m.hdhne;mouseout:m.hdhue"
                                                                            data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQqR8wDHoECAcQBQ">
                                                                            <li class="action-menu-item"
                                                                                role="menuitem"><a class="fl"
                                                                                    ref="https://webcache.googleusercontent.com/search?q=cache:kqZcJZw4n1kJ:https://support.office.com/home/contact+&amp;cd=13&amp;hl=en&amp;ct=clnk&amp;gl=in&amp;client=firefox-b-d"
                                                                                    onmousedown="return rwt(this,'','','','','AOvVaw1gAOErPdNK3q_Ykc4vVD5V','','2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQIDAMegQIBxAG','','',event)">Cached</a>
                                                                            </li>
                                                                            <li class="action-menu-item"
                                                                                role="menuitem"><a class="fl"
                                                                                    ref="https://www.google.com/search?client=firefox-b-d&amp;q=related:https://support.office.com/home/contact+microsoft+online+support&amp;tbo=1&amp;sa=X&amp;ved=2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQHzAMegQIBxAH">Similar</a>
                                                                            </li>
                                                                        </ol>
                                                                    </div>
                                                                </span></div>
                                                        </div>
                                                    </div>
                                                    <div class="s">
                                                        <div><span class="st">Skip to main content. <em>Microsoft</em>.
                                                                <em>Office</em>. <em>Office</em>. <em>Office</em>. Home.
                                                                Products. For home &gt;. Plans &amp; pricing · For
                                                                households · For individuals · See <em>Office
                                                                    365</em>.</span></div>
                                                    </div>
                                                    <div jscontroller="m6a0l" id="eob_21" jsdata="fxg5tf;;B2WCGI"
                                                        jsaction="rcuQ6b:npT2md"
                                                        data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQ2Z0BMAx6BAgHEAg">
                                                        <div jsname="UTgHCf" class="AUiS2"
                                                            data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQx40DegQIOBAA">
                                                            <div jsname="d3PE6e" style="display:none">
                                                                <div
                                                                    data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQsKwBKAB6BAg4EAE">
                                                                    microsoft support xbox</div>
                                                                <div
                                                                    data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQsKwBKAF6BAg4EAI">
                                                                    office 365 forum</div>
                                                                <div
                                                                    data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQsKwBKAJ6BAg4EAM">
                                                                    microsoft contacts</div>
                                                                <div
                                                                    data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQsKwBKAN6BAg4EAQ">
                                                                    microsoft remote assistance</div>
                                                                <div
                                                                    data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQsKwBKAR6BAg4EAU">
                                                                    microsoft office 365</div>
                                                                <div
                                                                    data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQsKwBKAV6BAg4EAY">
                                                                    how do i talk to a live person at microsoft</div>
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
                                                <div class="rc" data-hveid="CA4QAA"
                                                    data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQFSgAMA16BAgOEAA">
                                                    <div class="r"><a ref="https://support.office.com/"
                                                            onmousedown="return rwt(this,'','','','','AOvVaw3Nv0aSS9Ifavg7vt_sbpyb','','2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQFjANegQIDhAB','','',event)"><br>
                                                            <h3 class="LC20lb DKV0Md">Microsoft Office Help &amp;
                                                                Training</h3>
                                                            <div class="TbwUpd NJjxre"><cite
                                                                    class="iUh30 tjvcx">support.office.com<span
                                                                        class="eipWBe"></span></cite></div>
                                                        </a>
                                                        <div class="B6fmyf">
                                                            <div class="TbwUpd"><cite
                                                                    class="iUh30 tjvcx">support.office.com<span
                                                                        class="eipWBe"></span></cite></div>
                                                            <div class="eFM0qc"><span>
                                                                    <div class="action-menu"><a class="GHDvEf" ref="#"
                                                                            id="am-b13" aria-label="Result options"
                                                                            aria-expanded="false" aria-haspopup="true"
                                                                            role="button"
                                                                            jsaction="m.tdd;keydown:m.hbke;keypress:m.mskpe"
                                                                            data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQ7B0wDXoECA4QAg"><span
                                                                                class="mn-dwn-arw"></span></a>
                                                                        <ol class="action-menu-panel" role="menu"
                                                                            tabindex="-1"
                                                                            jsaction="keydown:m.hdke;mouseover:m.hdhne;mouseout:m.hdhue"
                                                                            data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQqR8wDXoECA4QAw">
                                                                            <li class="action-menu-item"
                                                                                role="menuitem"><a class="fl"
                                                                                    ref="https://webcache.googleusercontent.com/search?q=cache:7BnnRiXK-roJ:https://support.office.com/+&amp;cd=14&amp;hl=en&amp;ct=clnk&amp;gl=in&amp;client=firefox-b-d"
                                                                                    onmousedown="return rwt(this,'','','','','AOvVaw1i3Zd-khlKawmfu0Nntabb','','2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQIDANegQIDhAE','','',event)">Cached</a>
                                                                            </li>
                                                                            <li class="action-menu-item"
                                                                                role="menuitem"><a class="fl"
                                                                                    ref="https://www.google.com/search?client=firefox-b-d&amp;q=related:https://support.office.com/+microsoft+online+support&amp;tbo=1&amp;sa=X&amp;ved=2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQHzANegQIDhAF">Similar</a>
                                                                            </li>
                                                                        </ol>
                                                                    </div>
                                                                </span></div>
                                                        </div>
                                                    </div>
                                                    <div class="s">
                                                        <div><span class="st"><em>Help for</em> all <em>Office</em>
                                                                apps. Set up your <em>Office 365</em> subscription. Find
                                                                how-to articles and video tutorials. Contact our Answer
                                                                Techs for assisted <em>support</em>.</span></div>
                                                    </div>
                                                    <div jscontroller="m6a0l" id="eob_60" jsdata="fxg5tf;;B2WCGQ"
                                                        jsaction="rcuQ6b:npT2md"
                                                        data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQ2Z0BMA16BAgOEAY">
                                                        <div jsname="UTgHCf" class="AUiS2"
                                                            data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQx40DegQIORAA">
                                                            <div jsname="d3PE6e" style="display:none">
                                                                <div
                                                                    data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQsKwBKAB6BAg5EAE">
                                                                    outlook for mac support</div>
                                                                <div
                                                                    data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQsKwBKAF6BAg5EAI">
                                                                    microsoft office for mac download</div>
                                                                <div
                                                                    data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQsKwBKAJ6BAg5EAM">
                                                                    outlook customer service number</div>
                                                                <div
                                                                    data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQsKwBKAN6BAg5EAQ">
                                                                    office 365 free download</div>
                                                                <div
                                                                    data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQsKwBKAR6BAg5EAU">
                                                                    microsoft office sign in</div>
                                                                <div
                                                                    data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQsKwBKAV6BAg5EAY">
                                                                    www.office365.com -my account</div>
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
                                                <div class="rc" data-hveid="CAsQAA"
                                                    data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQFSgAMA56BAgLEAA">
                                                    <div class="r"><a ref="https://support.office.com/en-in/outlook"
                                                            onmousedown="return rwt(this,'','','','','AOvVaw2PVK91l9oiF_3qEr_cuYWp','','2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQFjAOegQICxAB','','',event)"><br>
                                                            <h3 class="LC20lb DKV0Md">Outlook help &amp; learning -
                                                                Office Support</h3>
                                                            <div class="TbwUpd NJjxre"><cite
                                                                    class="iUh30 bc tjvcx">support.office.com<span
                                                                        class="eipWBe"> › en-in › outlook</span></cite>
                                                            </div>
                                                        </a>
                                                        <div class="B6fmyf">
                                                            <div class="TbwUpd"><cite
                                                                    class="iUh30 bc tjvcx">support.office.com<span
                                                                        class="eipWBe"> › en-in › outlook</span></cite>
                                                            </div>
                                                            <div class="eFM0qc"><span>
                                                                    <div class="action-menu"><a class="GHDvEf" ref="#"
                                                                            id="am-b14" aria-label="Result options"
                                                                            aria-expanded="false" aria-haspopup="true"
                                                                            role="button"
                                                                            jsaction="m.tdd;keydown:m.hbke;keypress:m.mskpe"
                                                                            data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQ7B0wDnoECAsQBA"><span
                                                                                class="mn-dwn-arw"></span></a>
                                                                        <ol class="action-menu-panel" role="menu"
                                                                            tabindex="-1"
                                                                            jsaction="keydown:m.hdke;mouseover:m.hdhne;mouseout:m.hdhue"
                                                                            data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQqR8wDnoECAsQBQ">
                                                                            <li class="action-menu-item"
                                                                                role="menuitem"><a class="fl"
                                                                                    ref="https://webcache.googleusercontent.com/search?q=cache:13VaZ3giUQUJ:https://support.office.com/en-in/outlook+&amp;cd=15&amp;hl=en&amp;ct=clnk&amp;gl=in&amp;client=firefox-b-d"
                                                                                    onmousedown="return rwt(this,'','','','','AOvVaw2tGY60kzeG_jxm04M-2YEm','','2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQIDAOegQICxAG','','',event)">Cached</a>
                                                                            </li>
                                                                        </ol>
                                                                    </div>
                                                                </span></div>
                                                        </div>
                                                    </div>
                                                    <div class="s">
                                                        <div><span class="st">Keep in touch and stay productive with
                                                                Teams and <em>Microsoft 365</em>, even when you'<wbr>re
                                                                working remotely. Learn more. Outlook help &amp;
                                                                learning.</span></div>
                                                    </div>
                                                </div>
                                                <!--n-->
                                            </div><span id="fld"></span>
                                            <script nonce="4X/xePeUOQ9joZlyG8qAWQ==">
                                            (function() {
                                                function l() {
                                                    return window.performance && window.performance.navigation &&
                                                        window.performance.navigation.type
                                                };

                                                function n(a, b, c) {
                                                    return !a || !b && p(a) ? 0 : a.getBoundingClientRect ? q(a, b,
                                                        c,
                                                        function(f) {
                                                            return f.getBoundingClientRect()
                                                        }) : 1
                                                }

                                                function p(a) {
                                                    return "none" == a.style.display ? !0 : document.defaultView &&
                                                        document.defaultView.getComputedStyle ? (a = document
                                                            .defaultView.getComputedStyle(a), !!a && ("hidden" == a
                                                                .visibility || "0px" == a.height && "0px" == a.width
                                                                )) : !1
                                                }

                                                function q(a, b, c, f) {
                                                    var d = f(a),
                                                        e = d.left + window.pageXOffset,
                                                        m = d.top + window.pageYOffset,
                                                        h = d.width,
                                                        k = d.height,
                                                        g = 0;
                                                    if (!b && 0 >= k && 0 >= h) return g;
                                                    0 > m + k ? g = 2 : m >= (window.innerHeight || document
                                                        .documentElement.clientHeight) && (g = 4);
                                                    if (0 > e + h || e >= (window.innerWidth || document
                                                            .documentElement.clientWidth)) g |= 8;
                                                    else if (c) {
                                                        for (b = d.left; a && a != c; a = a.parentElement) b += a
                                                            .scrollLeft;
                                                        c = f(c);
                                                        if (b + h < c.left || b >= c.right) g |= 8
                                                    }
                                                    return g || 1
                                                };
                                                var r, t = ["aft", "hct", "prt", "pprt", "sct"];

                                                function u(a) {
                                                    return google.c.slp ? a in google.c.p ? google.c.p[a] : -1 : (
                                                            a = v.search.match(new RegExp("[?&]" + a + "=(\\d+)"))
                                                            ) ? Number(a[1]) : -1
                                                }

                                                function w(a) {
                                                    r.removeEventListener("click", w);
                                                    a.stopPropagation && a.stopPropagation()
                                                }
                                                var v = location;
                                                var x = 0,
                                                    y = 0,
                                                    z = 0,
                                                    A = 0,
                                                    B = 0,
                                                    C, D;

                                                function E(a, b) {
                                                    var c = google.timers.load.t[a];
                                                    c && b && b < c || google.tick("load", a, b)
                                                }

                                                function F(a, b) {
                                                    b = b || google.time();
                                                    E("aft", b);
                                                    ++B;
                                                    G();
                                                    H(a, b)
                                                }

                                                function H(a, b) {
                                                    a = b || google.time();
                                                    E("iml", a);
                                                    ++y;
                                                    I()
                                                }

                                                function I() {
                                                    D || y != x || google.c.u("il")
                                                }

                                                function G() {
                                                    if (!C && B == z) {
                                                        var a = "&ima=" + z + "&imad=" + A;
                                                        google.timers.load.e.imn && (a += "&imn=" + google.timers
                                                            .load.e.imn);
                                                        var b = google.timers.load.m;
                                                        if (!b || !b.prs) {
                                                            var c = google.timers.load,
                                                                f = google.c.inp && l() ? 0 : u("qsubts");
                                                            0 < f && (b = u("fbts"), 0 < b && (c.t.start = Math.max(
                                                                f, b)));
                                                            var d = c.t,
                                                                e = d.start;
                                                            b = {
                                                                wsrt: c.wsrt
                                                            };
                                                            for (var m = 0, h; h = t[m++];) {
                                                                var k = d[h];
                                                                k && e && (b[h] = k - e)
                                                            }
                                                            0 < f && (b.gsasrt = c.t.start - f);
                                                            c = "/gen_204?s=" + google.sn + "&t=aft&atyp=csi&ei=" +
                                                                google.kEI + "&rt=";
                                                            f = "";
                                                            for (var g in b) c += f + g + "." + b[g], f = ",";
                                                            google.cshid &&
                                                                (c += "&cshid=" + google.cshid);
                                                            2 == l() && (c += "&bb=1");
                                                            1 == l() && (c += "&r=1");
                                                            "gsasrt" in b && (g = u("qsd"), 0 < g && (c += "&qsd=" +
                                                                g));
                                                            google.kBL && (c += "&bl=" + google.kBL);
                                                            a = c + (a || "");
                                                            (r = document.getElementById("csi-ping")) ? (r
                                                                .addEventListener("click", w), r.setAttribute(
                                                                    "ping", a), r.click()) : navigator.sendBeacon ?
                                                                navigator.sendBeacon(a, "") : google.log("", "", a)
                                                        }
                                                    }
                                                }

                                                function J() {
                                                    C && (C = !1, G());
                                                    D = !1;
                                                    I()
                                                }
                                                var K = "src bsrc url ll image img-url".split(" ");

                                                function L(a) {
                                                    var b = "string" != typeof a.src || !a.src,
                                                        c = !!a.getAttribute("data-bsrc"),
                                                        f = a.getAttribute("data-deferred"),
                                                        d;
                                                    if (d = !f) a: {
                                                        d = 0;
                                                        for (var e; e = K[d++];)
                                                            if (a.getAttribute("data-" + e)) {
                                                                d = !0;
                                                                break a
                                                            } d = !1
                                                    }
                                                    d && a.setAttribute("data-lzy_", 1);
                                                    b = (d = (b || a.complete) && !f && !c) && !google.c.lhc &&
                                                        Number(a.getAttribute("data-iml")) || 0;
                                                    for (e = a; e && "center_col" != e.id && "rhscol" != e.id;) e =
                                                        e.parentElement;
                                                    c = n(a, c, e);
                                                    a.setAttribute("data-atf", c);
                                                    ++x;
                                                    d && !b || a.hasAttribute("data-noaft") ? ++y : (e = (d = 1 ==
                                                            c) ? F : H, d && (++z, f && ++A), b ? e(void 0, b) :
                                                        google.rll(a, !0, e));
                                                    return c
                                                };
                                                google.time();
                                                if (google.timers && google.timers.load.t) {
                                                    D = C = !0;
                                                    google.c.b("il");
                                                    for (var M = document.getElementsByTagName("img"), N = 0, O =
                                                            void 0; O = M[N++];) L(O);
                                                    google.c.setup = L;
                                                    google.c.ub = J
                                                };
                                            }).call(this);

                                            function _setImagesSrc(e, c) {
                                                function f(b) {
                                                    b.onerror = function() {
                                                        b.style.display = "none"
                                                    };
                                                    b.src = c
                                                }
                                                for (var g = 0, a = void 0; a = e[g++];) {
                                                    var d = document.getElementById(a) || document.querySelector(
                                                        'img[data-iid="' + a + '"]');
                                                    d ? f(d) : (window.google = window.google || {}, google.iir = google
                                                        .iir || {}, google.iir[a] = c)
                                                }
                                            };
                                            </script>
                                            <script nonce="4X/xePeUOQ9joZlyG8qAWQ==">
                                            (function() {
                                                var s =
                                                    'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAANkAAAB9CAMAAAAY7Ta8AAAAk1BMVEX///9/ugD/uQHyUCIBpO9zc3NwcHBtbW35+fnx8fFnZ2d5eXn8/PxiYmLo6OjW1tb85eLq8+LwMQBuswD+6eLm79nHx8eGhob/2Mv/6sHi9f3A5f//8cb/sgD/79nS7fz9z8uvr6/g8Mv/8dLySxSlpaW9vb2ampqPj4/f39/6/fbc78NbqwDyRgdYWFj/8u7/+uxS8lHQAAAEZUlEQVR4nO2Yi3LbNhBF2QewxINk26RA6/QRtiUB2q3T//+63gVoRvR4JlbMsZTpnvGMBAqEcITFYummEQRBEARBEARBEARBEARBEARBEARBEARBEARBEIT/Of67PR9uv9/jLz3Dz+XtD3ve373Z8fePl57h5/L2mx3/vL/7ascbMbs6xOw18KY3x412hlkLTjOlX9tm6Y+YiR8ikQ1HDFV4vplJ0zSNJzMZuQ217OIRarMmfRmzvuNvHrY7B0tErm1Cp+z45Nhn0ZPWccoBMTkccoaeY6aUomm7M5FSGmYwPsIskKIFEd5P0bYvH+5sM70FXu9UNWtCGg+Yykg68msg0pcwU/phI8z0YHYMm5nWFzBzWVGuLZM1Wmzmh2GoybodZjCUS4FbARvG9wEXw7bUYUSX2t+U/gt7LEPCNsNIw6iV3kZ8LTMdZ6e6OsdBUx41m7UWUymXYIpQotAYJBWTFDnT+ORwkZSbS1rAAGjpmd+HiP4YIveNzxwPyim1vp5kqtcwU7HPes0hOHvCTKsZ8TzmTmurne1mNtPJknVtH6GqFf661NY+yumOzUarNUFbUbd4ZzVi2wIOcmvvDzD7a8cnorEPmDsHiunwujMbMDM1D0uIxQyBOk3ZIIHSxBdhNzdt1DovyzDBLGCpY8B7UjqbeeTQ5uBMUBzn8YAT8qc9H27/2HF3uzNrnS45ZCYam1OzNqOxcL/WlDXjhkcq13yYN1hsrZsFYcZ3e994SJbfqJktX/SHZ5D23Z6bf3/eszfjFJbbxkSNw+fUDJ/SVj/AjMoRN6F3zQVIpV1vsMtyXzbc4B7681iTPz433ny7590vX+/49be92aK07vH1BL9TMwRXXbLVzHLDZ3o42nvilcnoG0ukBaxqjTg/EQ92cbM28S+ciH/wUzPkg7hNqORGvLZuXTvMXyvLG43TCeFkn5Hk18zOb6/AjL/ZDbUWeWy2nUGbGQJtNTNlzZp+dFZxncnDrFlivI41a7BXdFS8M/bR2D2KRjZDNOpUpzlgn3Em92bEqUWeU2nt3yIArmGf8U/MJw7P6tTM2GrLU93MsJLK1ZMJuYSa+niHhHnfouxct+BCj3KjoguZLaXGbx6ZtVz6j8b7fg4fzTjfZJRP7Vx23DJyKQWzruVHBZpRo/BZjtA+NUMBYl5eXZ1vhpOLk8EjM5xVKPhiSrHWINWMFw3lU8LhRdiGCyrPKUEy+qZHNaLQ35V67KPZgmFcci+vQc4wu6e65wPZ+iwzohSCWVefR5fIRSNRhzW7p66a+fKkzCTDsy5vbebbh2jrR64c3qO1xayZuOo6oLp6vpnJaSrTNVOq5W1IaYJZTqnkgn6O/Fw8Gu6a173ihwmrolMouXLOqGHiXJOiKSWxG8vNHoPVNIoUQ/qA/z883+wZeObJq0/3eLp/8/TVcznU7KoQsy8PMfvy8L/vubn9c8/tp8cQBEEQBEEQBEEQBEEQBEEQBEEQBEEQBEEQBEEQhAvyHygNfv1C7Fs8AAAAAElFTkSuQmCC';
                                                var ii = ['dimg_2'];
                                                _setImagesSrc(ii, s);
                                            })();
                                            </script>
                                            <style>
                                            .CNyvI {
                                                display: box;
                                                display: flexbox;
                                                display: flex;
                                                display: flex;
                                                justify-content: space-between
                                            }

                                            .QGPvze {
                                                padding-top: 16px
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

                                            g-raised-button.eOGE2d div {
                                                padding: 4px 10px
                                            }

                                            .hTOZOb {
                                                margin: -4px
                                            }

                                            div.PFgLMb {
                                                display: inline-block;
                                                vertical-align: top;
                                                white-space: normal
                                            }

                                            div.PFgLMb:first-child {
                                                padding-left: 0
                                            }

                                            .KnIFuc {
                                                display: box;
                                                display: flex;
                                                display: -ms-flexbox;
                                                display: flex
                                            }

                                            g-scrolling-carousel {
                                                display: block;
                                                position: relative;
                                            }

                                            .mR2gOd {
                                                display: block;
                                                overflow-x: auto;
                                                overflow-y: hidden;
                                                overflow: hidden;
                                                overflow-x: hidden;
                                                position: relative;
                                                white-space: nowrap;
                                                transform: translate3d(0, 0, 0);
                                                transform: translate3d(0, 0, 0);
                                            }

                                            .mR2gOd::-webkit-scrollbar {
                                                display: none
                                            }

                                            .DAVP1 {
                                                display: inline-block
                                            }

                                            .KNTSjf {
                                                color: rgba(0, 0, 0, .87);
                                                cursor: pointer;
                                                display: inline-block;
                                                position: relative
                                            }

                                            .TC8kpb {
                                                display: -webkit-box;
                                                flex-grow: 1;
                                                font-family: arial, sans-serif-medium, sans-serif;
                                                font-size: 14px;
                                                line-height: 20px;
                                                max-height: 100px;
                                                overflow: hidden;
                                                -webkit-box-orient: vertical;
                                                -webkit-line-clamp: 5
                                            }

                                            .yX1Uqd {
                                                bottom: 16px;
                                                display: box;
                                                display: flexbox;
                                                display: flex;
                                                display: flex;
                                                position: absolute
                                            }

                                            .KNTSjf {
                                                box-sizing: border-box;
                                                height: 216px;
                                                margin: 4px;
                                                width: 212px
                                            }

                                            .VBhIHd {
                                                color: #70757A;
                                                font-size: 12px;
                                                margin-top: 8px
                                            }

                                            .lMfK8c {
                                                color: #1967d2;
                                                display: block;
                                                font-size: 12px;
                                                margin-top: 8px
                                            }

                                            .QnJxP {
                                                margin-left: 4px
                                            }

                                            .u3dCqc {
                                                display: box;
                                                display: flex;
                                                display: -ms-flexbox;
                                                display: flex
                                            }

                                            .Fy2WDf {
                                                left: 4px;
                                                position: relative;
                                                width: 12px
                                            }

                                            g-inner-card {
                                                background-color: #fff;
                                                border-radius: 2px;
                                                display: block;
                                                overflow: hidden
                                            }

                                            .nqyane {
                                                padding: 13px 16px 11px
                                            }

                                            .cv2VAd {
                                                border: 1px solid #dfe1e5;
                                                border-radius: 8px;
                                                box-shadow: none
                                            }

                                            .XnlyYd {
                                                color: #757575
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

                                            .gLSAk {
                                                border: none;
                                                display: block;
                                                outline: none;
                                            }

                                            .gLSAk {
                                                border-radius: 8px
                                            }

                                            .gLSAk {
                                                padding: 5px 0
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

                                            .cZzjWd {
                                                color: #4285f4;
                                                margin-bottom: 2px;
                                                margin-right: 4px;
                                                vertical-align: middle
                                            }

                                            g-raised-button.eOGE2d {
                                                border: 1px solid #dfe1e5;
                                                border-radius: 14px;
                                                box-shadow: none;
                                                cursor: pointer;
                                                line-height: 20px;
                                                margin-left: 0px;
                                                margin-right: 4px;
                                                text-transform: none
                                            }

                                            g-raised-button {
                                                display: inline-block;
                                                margin: 0 4px;
                                                position: relative
                                            }

                                            .Gfzyee {
                                                box-sizing: border-box;
                                                cursor: pointer;
                                                font-size: 14px;
                                                font-weight: 500;
                                                min-width: 88px;
                                                text-align: center;
                                                transition: box-shadow 200ms cubic-bezier(0.4, 0, 0.2, 1);
                                                user-select: none;
                                                white-space: nowrap
                                            }

                                            .Gfzyee:active {
                                                outline: none
                                            }

                                            .fSXkBc {
                                                border-radius: 8px;
                                                outline: none
                                            }

                                            .fSXkBc:hover {
                                                background: rgba(0, 0, 0, .1)
                                            }

                                            .fSXkBc:focus {
                                                background: rgba(0, 0, 0, .1)
                                            }

                                            .fSXkBc:active {
                                                background: rgba(0, 0, 0, .2)
                                            }

                                            .Gfzyee:disabled,
                                            .Gfzyee[disabled]:not([disabled=false]) {
                                                pointer-events: none;
                                                color: rgba(0, 0, 0, .26) !important;
                                                background: rgba(0, 0, 0, .12);
                                                box-shadow: none
                                            }

                                            .Gfzyee:disabled .fSXkBc,
                                            .Gfzyee[disabled]:not([disabled=false]) .fSXkBc {
                                                background-color: transparent
                                            }

                                            .Gfzyee.jREHUb,
                                            .Gfzyee.sgivpd {
                                                border-radius: 18px
                                            }

                                            .Gfzyee.jREHUb .fSXkBc {
                                                padding: 7px 16px 7px 12px
                                            }

                                            .R1smN {
                                                background: #fff
                                            }

                                            .Gfzyee.R1smN .fSXkBc {
                                                background-color: transparent
                                            }

                                            .Pjsr7c {
                                                color: rgba(0, 0, 0, .87)
                                            }

                                            .zPNTne {
                                                border: 0;
                                                border-radius: 8px;
                                                box-shadow: 0 1px 1px rgba(0, 0, 0, .16);
                                                box-shadow: 0 1px 1px rgba(0, 0, 0, .16);
                                                line-height: 16px;
                                                text-transform: uppercase
                                            }

                                            .zPNTne .fSXkBc {
                                                padding: 10px 8px
                                            }

                                            .mViXqc.Gfzyee {
                                                height: 28px
                                            }

                                            .mViXqc .fSXkBc {
                                                padding: 3px 16px
                                            }

                                            .Gfzyee.mViXqc.jREHUb {
                                                border-radius: 14px
                                            }

                                            .Gfzyee.mViXqc.jREHUb .fSXkBc {
                                                padding: 3px 12px 3px 8px;
                                                font-size: 12px;
                                                border-radius: 14px
                                            }

                                            .cYjWmf,
                                            .R6g0Cd {
                                                cursor: pointer;
                                                fill: rgba(0, 0, 0, .38);
                                                margin: 4px 5px 0
                                            }

                                            .cYjWmf:hover,
                                            .R6g0Cd:hover {
                                                fill: rgba(0, 0, 0, .54)
                                            }

                                            .prNxbc {
                                                border-radius: 50%;
                                                display: inline-block;
                                                height: 28px;
                                                outline: none;
                                                transition: background-color 0.1s;
                                                vertical-align: sub;
                                                width: 28px
                                            }

                                            .prNxbc.YQnpyc:focus:not(:active) {
                                                background-color: rgba(0, 0, 0, .1)
                                            }

                                            .prNxbc.YQnpyc:focus:active {
                                                background-color: rgba(0, 0, 0, .15)
                                            }

                                            .cYjWmf[data-sentiment="1"] {
                                                fill: #3eb05e
                                            }

                                            .R6g0Cd[data-sentiment="2"] {
                                                fill: #df382b
                                            }

                                            .cYjWmf[data-sentiment="1"]:hover {
                                                fill: #34934f
                                            }

                                            .R6g0Cd[data-sentiment="2"]:hover {
                                                fill: #a90216
                                            }

                                            .pAfMKd {
                                                border-color: #e0e0e0;
                                                border-style: solid;
                                                border-width: 1.2px;
                                                box-sizing: border-box
                                            }

                                            .G1Gf7 {
                                                margin-left: 8px
                                            }

                                            .Lu0opc {
                                                cursor: pointer;
                                                height: 72px;
                                                position: absolute;
                                                display: block;
                                                visibility: inherit;
                                                width: 36px;
                                                bottom: 0;
                                                margin-bottom: auto;
                                                margin-top: auto;
                                                outline: none;
                                                opacity: 0.8;
                                                top: 0
                                            }

                                            .Lu0opc.tHT0l {
                                                transition: opacity 0.5s, visibility 0.5s;
                                                transition: opacity 0.5s, visibility 0.5s
                                            }

                                            .Lu0opc:hover {
                                                opacity: 0.9
                                            }

                                            .Lu0opc:focus {
                                                outline: none
                                            }

                                            .Lu0opc.pQXcHc,
                                            .Lu0opc.pQXcHc:hover {
                                                cursor: default;
                                                opacity: 0;
                                                visibility: hidden
                                            }

                                            .Lu0opc.eSq3C {
                                                height: 36px;
                                                width: 36px;
                                                opacity: 0.9
                                            }

                                            .Lu0opc.eSq3C:hover {
                                                opacity: 1.0
                                            }

                                            .Lu0opc.eSq3C.pQXcHc,
                                            .Lu0opc.eSq3C.pQXcHc:hover {
                                                opacity: 0
                                            }

                                            .Lu0opc.eSq3C:hover g-fab {
                                                color: #222 !important
                                            }

                                            .BlOseb.eSq3C g-fab,
                                            .k2Oeod.eSq3C g-fab {
                                                box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.04), 0 4px 8px 0 rgba(0, 0, 0, 0.20);
                                                cursor: pointer;
                                                height: 36px;
                                                width: 36px
                                            }

                                            .BlOseb.eSq3C {
                                                left: -18px
                                            }

                                            .k2Oeod.eSq3C {
                                                right: -18px
                                            }

                                            .CNf3nf {
                                                border-radius: 50%;
                                                cursor: pointer;
                                                display: block;
                                                position: relative;
                                                border: 1px solid #dfe1e5;
                                                z-index: 0
                                            }

                                            .CNf3nf:focus {
                                                outline: none
                                            }

                                            .CNf3nf .PUDfGe {
                                                position: absolute;
                                                left: 0;
                                                right: 0;
                                                top: 0;
                                                bottom: 0;
                                                margin: auto;
                                                width: 24px;
                                                height: 24px
                                            }

                                            .LhCR5d {
                                                width: 40px;
                                                height: 40px
                                            }

                                            .vG9Inf {
                                                display: flex
                                            }

                                            .kckgBd {
                                                background-color: #fafafa;
                                                border-top: thin solid #e0e0e0;
                                                height: 8px;
                                                left: 1.5px;
                                                overflow: hidden;
                                                position: relative;
                                                width: 8px
                                            }

                                            .Cktv6e {
                                                background-color: #fff;
                                                border-radius: 50%;
                                                border-top: thin solid #e0e0e0;
                                                bottom: 0px;
                                                box-shadow: 0.1px 0.1px 0.2px #616161;
                                                height: 16px;
                                                position: relative;
                                                right: 9.5px;
                                                top: -0.5px;
                                                width: 16px
                                            }

                                            .XSawAb {
                                                background-color: #f9f9f9;
                                                border: thin solid #e0e0e0;
                                                border-radius: 5px;
                                                border-top-left-radius: 0px;
                                                box-sizing: border-box;
                                                color: #70757A;
                                                flex-grow: 1;
                                                margin-right: 16px;
                                                outline: none;
                                                height: 40px
                                            }

                                            .l0p9pb {
                                                margin-top: 8px
                                            }

                                            .xQbC8 {
                                                font-size: 14px;
                                                margin-left: 12px;
                                                vertical-align: middle
                                            }

                                            .vSP5Gb {
                                                color: #9e9e9e;
                                                float: right;
                                                margin-right: 8px;
                                                margin-top: 2px
                                            }

                                            .ilvEkf {
                                                height: 40px;
                                                margin-right: 8px;
                                                width: 40px
                                            }

                                            .nb0Pd {
                                                color: #70757A;
                                                display: block;
                                                font-size: 12px;
                                                padding-left: 56px;
                                                padding-top: 8px
                                            }

                                            .ilvEkf {
                                                float: left
                                            }

                                            @keyframes g-snackbar-show {
                                                from {
                                                    pointer-events: none;
                                                    transform: translateY(0)
                                                }

                                                to {
                                                    transform: translateY(-100%)
                                                }
                                            }

                                            @keyframes g-snackbar-hide {
                                                from {
                                                    transform: translateY(-100%)
                                                }

                                                to {
                                                    transform: translateY(0)
                                                }
                                            }

                                            @keyframes g-snackbar-show-content {
                                                from {
                                                    opacity: 0
                                                }
                                            }

                                            @keyframes g-snackbar-hide-content {
                                                to {
                                                    opacity: 0
                                                }
                                            }

                                            .tYAdEe,
                                            .SaJ9Qe {
                                                bottom: 0;
                                                height: 0;
                                                position: fixed;
                                                z-index: 999
                                            }

                                            .FEXCIb,
                                            .CIKhFd {
                                                box-sizing: border-box;
                                                visibility: hidden
                                            }

                                            .EA3l1b {
                                                background-color: #323232;
                                                padding: 0 24px
                                            }

                                            .Xb004 {
                                                align-items: center;
                                                align-items: center;
                                                box-align: center;
                                                display: box;
                                                display: flex;
                                                display: flex
                                            }

                                            .lnctfd .Xb004 {
                                                animation: g-snackbar-hide-content 350ms cubic-bezier(.4, 0, .2, 1) both;
                                                animation: g-snackbar-hide-content 350ms cubic-bezier(.4, 0, .2, 1) both
                                            }

                                            .ZWC4b .Xb004 {
                                                animation: g-snackbar-show-content 350ms cubic-bezier(.4, 0, .2, 1) 150ms both;
                                                animation: g-snackbar-show-content 350ms cubic-bezier(.4, 0, .2, 1) 150ms both
                                            }

                                            .awHmMb {
                                                box-flex: 1;
                                                color: #fff;
                                                flex: 1 1 auto;
                                                font-size: 14px;
                                                line-height: 20px;
                                                margin: 14px 0;
                                                word-break: break-word
                                            }

                                            .BDp8nf {
                                                margin-right: -8px;
                                                margin-left: 16px;
                                                margin-bottom: 4px
                                            }

                                            @media (min-width:569px) and (min-height:569px) {

                                                .tYAdEe,
                                                .SaJ9Qe {
                                                    text-align: center
                                                }

                                                .CIKhFd,
                                                .FEXCIb {
                                                    display: inline-block;
                                                    max-width: 568px;
                                                    min-width: 288px;
                                                    text-align: left
                                                }

                                                .EA3l1b {
                                                    border-radius: 8px
                                                }

                                                .BDp8nf {
                                                    margin-left: 40px
                                                }
                                            }

                                            .SaJ9Qe {
                                                left: 16px;
                                                right: auto
                                            }

                                            .CIKhFd {
                                                padding-bottom: 16px
                                            }

                                            .U8shWc {
                                                background-color: transparent;
                                                border: none;
                                                border-radius: 8px;
                                                border-radius: 8px;
                                                box-sizing: border-box;
                                                cursor: pointer;
                                                display: inline-block;
                                                font-size: 14px;
                                                font-weight: 500;
                                                height: 36px;
                                                line-height: 16px;
                                                padding: 10px 8px;
                                                margin: 0 4px;
                                                min-width: 88px;
                                                outline: none;
                                                position: relative;
                                                text-align: center;
                                                text-decoration: none !important;
                                                user-select: none;
                                                white-space: nowrap
                                            }

                                            .U8shWc.boCbHc {
                                                text-transform: uppercase
                                            }

                                            .U8shWc:disabled,
                                            .U8shWc[disabled]:not([disabled=false]) {
                                                pointer-events: none
                                            }

                                            .U8shWc.fSXIc {
                                                min-width: 64px
                                            }

                                            .U8shWc.hpZDWd {
                                                color: #fff
                                            }

                                            .hpZDWd:hover {
                                                background-color: rgba(204, 204, 204, .15)
                                            }

                                            .hpZDWd:focus {
                                                background-color: rgba(204, 204, 204, .15)
                                            }

                                            .hpZDWd:active {
                                                background-color: rgba(204, 204, 204, .25)
                                            }

                                            .U8shWc.hpZDWd:disabled,
                                            .U8shWc.hpZDWd[disabled]:not([disabled=false]) {
                                                color: rgba(255, 255, 255, .3) !important
                                            }

                                            span.rKlILd {
                                                word-break: break-word
                                            }

                                            .reportAbuseComponent {
                                                height: 100%;
                                                width: 100%;
                                                position: absolute;
                                                overflow-x: hidden;
                                                top: 0px;
                                                left: 0px;
                                                z-index: 1000
                                            }

                                            .reportAbuseCard {
                                                height: 100%;
                                                width: 100%;
                                                background-color: white;
                                                position: absolute;
                                                top: 0px;
                                                left: 100%;
                                                box-shadow: 0 1px 4px;
                                                -webkit-box-shadow: 0 1px 4px
                                            }

                                            .reportAbuseCardHeader {
                                                background-color: #4374e0;
                                                min-height: 25px;
                                                font-size: 15px;
                                                margin-bottom: 5px;
                                                padding: 16px 56px;
                                                font-weight: 900
                                            }

                                            .reportAbuseCardHeaderButton.reportAbuseCardIconButton {
                                                display: inline-block;
                                                background-color: transparent;
                                                position: absolute;
                                                top: 10px;
                                                color: white;
                                                border: none;
                                                outline: none;
                                                box-shadow: none;
                                                -webkit-box-shadow: none;
                                                font-size: 36px;
                                                height: 36px;
                                                min-width: 36px;
                                                width: 36px;
                                                line-height: 36px;
                                                margin: 0 10px;
                                                padding: 15px 15px
                                            }

                                            .reportAbuseCardHeaderButton.reportAbuseCardIconButton:focus {
                                                color: #ccc;
                                                background-color: transparent;
                                                box-shadow: none;
                                                outline: none;
                                                border: none
                                            }

                                            .reportAbuseCardCancelButton.reportAbuseCardHeaderButton {
                                                right: 0px
                                            }

                                            .reportAbuseCardBackButton.reportAbuseCardHeaderButton {
                                                left: 0px;
                                                font-size: 28px
                                            }

                                            .reportAbuseCardOptions .reportAbuseCardButton {
                                                display: inline-block;
                                                margin: 5px auto;
                                                background-color: white;
                                                min-width: 26px;
                                                color: #262626;
                                                box-shadow: 0 0px 2px rgba(0, 0, 0, .25);
                                                -webkit-box-shadow: 0 0px 2px rgba(0, 0, 0, .25);
                                                border: 1px solid #d9d9d9;
                                                padding: 20px 10px;
                                                width: 80%;
                                                word-wrap: normal;
                                                white-space: normal;
                                                height: auto
                                            }

                                            .reportAbuseCardOptions .reportAbuseCardButton:active {
                                                box-shadow: inset 0 1px 0 #ddd;
                                                -webkit-box-shadow: inset 0 1px 0 #ddd;
                                                background-color: #e5e5e5;
                                                border-color: #bfbfbf
                                            }

                                            .reportAbuseCardOptions .reportAbuseCardButton:hover {
                                                background-color: #f5f5f5;
                                                box-shadow: 0 0px 2px rgba(0, 0, 0, .3);
                                                -webkit-box-shadow: 0 0px 2px rgba(0, 0, 0, .3);
                                                border-color: #bfbfbf;
                                                cursor: pointer
                                            }

                                            .reportAbuseCardHeaderText {
                                                display: inline-block;
                                                text-align: center;
                                                width: 100%;
                                                color: white;
                                                outline: none;
                                                padding: 18px 0px
                                            }

                                            .reportAbuseCardOptions {
                                                text-align: center
                                            }

                                            .reportAbuseCardFooterButton {
                                                display: none
                                            }

                                            .reportAbuseCardMessage {
                                                font-size: 16px;
                                                padding: 16px
                                            }

                                            .reportAbuseDialogComponent .reportAbuseComponentHeader {
                                                font-size: 24px
                                            }

                                            .reportAbuseComponentMessage {
                                                font-size: 16px;
                                                margin-top: 20px;
                                                margin-bottom: 20px
                                            }

                                            .reportAbuseComponentCards {
                                                position: relative
                                            }

                                            .reportAbuseComponent.reportAbuseDialogComponent {
                                                height: auto;
                                                width: auto;
                                                position: relative;
                                                overflow: hidden
                                            }

                                            .reportAbuseDialogComponent .reportAbuseCardOptions .reportAbuseCardButton {
                                                padding: 20px 0px;
                                                box-shadow: 1px 1px 5px 0px rgba(0, 0, 0, .35);
                                                -webkit-box-shadow: 1px 1px 5px 0px rgba(0, 0, 0, .35);
                                                border: none;
                                                text-align: center;
                                                text-transform: uppercase;
                                                width: 99%;
                                                margin-left: 1px
                                            }

                                            .reportAbuseDialogComponent .reportAbuseCardOptions .reportAbuseCardButton:active {
                                                box-shadow: 1px 1px 5px 0px rgba(0, 0, 0, .4);
                                                -webkit-box-shadow: 1px 1px 5px 0px rgba(0, 0, 0, .4);
                                                background-color: #f0f0f0;
                                                border-color: transparent
                                            }

                                            .reportAbuseDialogComponent .reportAbuseCardOptions .reportAbuseCardButton:hover {
                                                box-shadow: 1px 1px 5px 0px rgba(0, 0, 0, .37);
                                                -webkit-box-shadow: 1px 1px 5px 0px rgba(0, 0, 0, .37);
                                                background-color: #f5f5f5;
                                                border-color: transparent
                                            }

                                            .reportAbuseDialogComponent .reportAbuseCardOptions {
                                                text-align: left
                                            }

                                            .reportAbuseDialogComponent .reportAbuseCard {
                                                height: auto;
                                                box-shadow: none;
                                                -webkit-box-shadow: none;
                                                position: relative;
                                                left: 0%;
                                                display: block
                                            }

                                            .reportAbuseDialogComponent .reportAbuseCardHeader {
                                                background-color: white;
                                                padding: 16px 0px
                                            }

                                            .reportAbuseDialogComponent .reportAbuseCardHeaderText {
                                                color: black;
                                                text-align: left
                                            }

                                            .reportAbuseDialogComponent .reportAbuseCardHeaderButton {
                                                display: none
                                            }

                                            .reportAbuseDialogComponent .reportAbuseCardFooter .reportAbuseCardFooterButton {
                                                display: inline-block;
                                                color: #4374e0;
                                                box-shadow: none;
                                                -webkit-box-shadow: none;
                                                text-align: left;
                                                background-color: transparent;
                                                padding: 20px 0px;
                                                border: none;
                                                text-transform: uppercase;
                                                margin-left: 1px;
                                                cursor: pointer
                                            }

                                            .zVvuGd.MRfBrb {
                                                overflow: hidden
                                            }

                                            .zVvuGd {
                                                padding-top: 8px;
                                                white-space: nowrap
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

                                            .PfS8Ld {
                                                align-items: flex-end;
                                                display: flex
                                            }

                                            .VLkRKc {
                                                flex: 1
                                            }

                                            .hKuTtf {
                                                font-size: 14px
                                            }

                                            a.EbH0bb {
                                                color: #70757a;
                                                text-decoration: none
                                            }

                                            a.EbH0bb:hover {
                                                text-decoration: underline
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
                                                <div class="rc" data-hveid="CA8QAA"
                                                    data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQFSgAMA96BAgPEAA">
                                                    <div class="r"><a ref="https://support.office.com/en-us/teams"
                                                            onmousedown="return rwt(this,'','','','','AOvVaw2x9BJIH3mFfGg8_FvXi5iF','','2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQFjAPegQIDxAB','','',event)"><br>
                                                            <h3 class="LC20lb DKV0Md">Microsoft Teams help &amp;
                                                                learning - Office Support</h3>
                                                            <div class="TbwUpd NJjxre"><cite
                                                                    class="iUh30 bc tjvcx">support.office.com<span
                                                                        class="eipWBe"> › en-us › teams</span></cite>
                                                            </div>
                                                        </a>
                                                        <div class="B6fmyf">
                                                            <div class="TbwUpd"><cite
                                                                    class="iUh30 bc tjvcx">support.office.com<span
                                                                        class="eipWBe"> › en-us › teams</span></cite>
                                                            </div>
                                                            <div class="eFM0qc"><span>
                                                                    <div class="action-menu"><a class="GHDvEf" ref="#"
                                                                            id="am-b15" aria-label="Result options"
                                                                            aria-expanded="false" aria-haspopup="true"
                                                                            role="button"
                                                                            jsaction="m.tdd;keydown:m.hbke;keypress:m.mskpe"
                                                                            data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQ7B0wD3oECA8QBA"><span
                                                                                class="mn-dwn-arw"></span></a>
                                                                        <ol class="action-menu-panel" role="menu"
                                                                            tabindex="-1"
                                                                            jsaction="keydown:m.hdke;mouseover:m.hdhne;mouseout:m.hdhue"
                                                                            data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQqR8wD3oECA8QBQ">
                                                                            <li class="action-menu-item"
                                                                                role="menuitem"><a class="fl"
                                                                                    ref="https://webcache.googleusercontent.com/search?q=cache:26vXcdksZwgJ:https://support.office.com/en-us/teams+&amp;cd=16&amp;hl=en&amp;ct=clnk&amp;gl=in&amp;client=firefox-b-d"
                                                                                    onmousedown="return rwt(this,'','','','','AOvVaw0dE-BENcpyKMPuojR-osar','','2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQIDAPegQIDxAG','','',event)">Cached</a>
                                                                            </li>
                                                                            <li class="action-menu-item"
                                                                                role="menuitem"><a class="fl"
                                                                                    ref="https://www.google.com/search?client=firefox-b-d&amp;q=related:https://support.office.com/en-us/teams+microsoft+online+support&amp;tbo=1&amp;sa=X&amp;ved=2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQHzAPegQIDxAH">Similar</a>
                                                                            </li>
                                                                        </ol>
                                                                    </div>
                                                                </span></div>
                                                        </div>
                                                    </div>
                                                    <div class="s">
                                                        <div><span class="st">Live, <em>online</em> classes. Join us to
                                                                see Teams in action, get your questions answered<wbr>,
                                                                and interact with our live instructors. Designed to get
                                                                you up and running with&nbsp;...</span></div>
                                                    </div>
                                                    <div jscontroller="m6a0l" id="eob_62" jsdata="fxg5tf;;B2WCGY"
                                                        jsaction="rcuQ6b:npT2md"
                                                        data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQ2Z0BMA96BAgPEAg">
                                                        <div jsname="UTgHCf" class="AUiS2"
                                                            data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQx40DegQINxAA">
                                                            <div jsname="d3PE6e" style="display:none">
                                                                <div
                                                                    data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQsKwBKAB6BAg3EAE">
                                                                    microsoft teams support number</div>
                                                                <div
                                                                    data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQsKwBKAF6BAg3EAI">
                                                                    what is teams by microsoft</div>
                                                                <div
                                                                    data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQsKwBKAJ6BAg3EAM">
                                                                    teams in microsoft teams</div>
                                                                <div
                                                                    data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQsKwBKAN6BAg3EAQ">
                                                                    microsoft teams faq tab</div>
                                                                <div
                                                                    data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQsKwBKAR6BAg3EAU">
                                                                    microsoft teams help desk app</div>
                                                                <div
                                                                    data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQsKwBKAV6BAg3EAY">
                                                                    que es microsoft teams</div>
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
                                            <div class="mod" data-md="355">
                                                <!--m-->
                                                <div data-hveid="CAEQAA">
                                                    <div jscontroller="gfytPc" data-ble="false" data-is-desktop="true"
                                                        data-is-newui="false"
                                                        jsaction="click_answer:Tz47we;click_question:LdGWWd;rcuQ6b:npT2md;zyWMcd:ISsTE;clickThankYouPage:fkFCRb;compose_question:dIstqc;rSNifd:bpxabc;click_view_all_questions:KZP9Je;click_view_answer:yPomLe;yBkrCc:Q2PpDb;clickFollow:OchRIf;sFrcje:OchRIf;cancel:ODGlz;kbHOje:pAFO2b;clickNumAnswers:l91ttb;menu_item_selected:RmtIce;sc_fus:pdEnkd"
                                                        jsmodel="Oz381d" jsdata="fQXYl;;B2WCFo">
                                                        <g-section-with-header>
                                                            <div class="e2BEnf U7izfe">
                                                                <div class="CNyvI">
                                                                    <h3>Q&amp;A on Google</h3>
                                                                </div>
                                                            </div>
                                                            <div jsname="K9a4Re" data-hveid="CAEQAQ"
                                                                data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQi-MCegQIARAB">
                                                                <div class="hTOZOb">
                                                                    <g-scrolling-carousel jscontroller="XjCeUc"
                                                                        id="_EaPUXvTcMJW_8QP9_44g1"
                                                                        jsdata="JcTXNb;;B2WCFs" jsshadow=""
                                                                        jsaction="sc_em:EDKYjb;sc_rfir:aJ8u7;sc_dm:nnsrCf;ct_ia:HFYvKc;ct_ic:yUtVib;keydown:uYT2Vb;rcuQ6b:npT2md">
                                                                        <div jsname="haAclf" class="mR2gOd"
                                                                            jsaction="fp_s:OR1BUb"
                                                                            style="overflow-x: hidden;">
                                                                            <div jsname="s2gQvd" class="EDblX DAVP1"
                                                                                jsslot="">
                                                                                <div class="KnIFuc">
                                                                                    <div class="PFgLMb">
                                                                                        <div>
                                                                                            <g-inner-card
                                                                                                jsname="TfyIce"
                                                                                                class="KNTSjf nqyane cv2VAd"
                                                                                                data-qid="UgynHZ3VIbvRmsUX_Sh4AaABGg"
                                                                                                jsaction="fire.click_question"
                                                                                                data-hveid="CAEQAg"
                                                                                                data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQiOMCKAB6BAgBEAI">
                                                                                                <div class="u3dCqc">
                                                                                                    <div class="TC8kpb">
                                                                                                        How to raise a
                                                                                                        microsoft
                                                                                                        support ticket?
                                                                                                    </div>
                                                                                                    <div class="Fy2WDf">
                                                                                                        <g-dropdown-menu
                                                                                                            jscontroller="DqdCgd"
                                                                                                            jsdata="xJGXK;;B2WCFw"
                                                                                                            jsshadow=""
                                                                                                            jsaction="rcuQ6b:npT2md;menu_item_selected:GKlhgf;g_popup_before_reposition:cCpuJc;dp_menu_reg_caption:bzkPEc;clear_menu_item:oyYkKb;g_popup_show:G8Ofmd;g_popup_hide:rWoVB;hide_popup:L76sMb;menu_close_button:L76sMb">
                                                                                                            <g-popup
                                                                                                                jsname="zpo2ue"
                                                                                                                jscontroller="NZI0Db"
                                                                                                                jsaction="A05xBd:IYtByb;"
                                                                                                                jsdata="mVjAjf;;B2WCF0"
                                                                                                                id="ow33"
                                                                                                                __is_owner="true">
                                                                                                                <div jsname="oYxtQd"
                                                                                                                    class="rIbAWc hide-focus-ring"
                                                                                                                    jsslot=""
                                                                                                                    aria-expanded="false"
                                                                                                                    aria-haspopup="true"
                                                                                                                    role="button"
                                                                                                                    tabindex="0"
                                                                                                                    jsaction="WFrRFb;keydown:uYT2Vb">
                                                                                                                    <span
                                                                                                                        class="XnlyYd z1asCe SaPW2b"
                                                                                                                        style="height:20px;line-height:20px;width:20px"><svg
                                                                                                                            focusable="false"
                                                                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                                                                            viewBox="0 0 24 24">
                                                                                                                            <path
                                                                                                                                d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z">
                                                                                                                            </path>
                                                                                                                        </svg></span>
                                                                                                                </div>
                                                                                                                <div jsname="V68bde"
                                                                                                                    class="EwsJzb sAKBe"
                                                                                                                    style="display:none;z-index:9999"
                                                                                                                    jsowner="ow33">
                                                                                                                    <g-menu
                                                                                                                        jsname="iXXGtd"
                                                                                                                        class="e7RZX gLSAk"
                                                                                                                        jscontroller="wQpTuc"
                                                                                                                        data-mh="-1"
                                                                                                                        role="menu"
                                                                                                                        tabindex="-1"
                                                                                                                        jsaction="focus:h06R8;PSl28c;keydown:uYT2Vb;mouseenter:WOQqYb;mouseleave:Tx5Rb;mouseover:IgJl9c;rcuQ6b:npT2md">
                                                                                                                        <g-menu-item
                                                                                                                            jsname="NNJLud"
                                                                                                                            data-qid="UgynHZ3VIbvRmsUX_Sh4AaABGg"
                                                                                                                            data-ia="report"
                                                                                                                            jscontroller="qjr3nc"
                                                                                                                            class="ErsxPb hide-focus-ring"
                                                                                                                            role="menuitem"
                                                                                                                            tabindex="0"
                                                                                                                            data-short-label=""
                                                                                                                            jsdata="zPXzie;;B2WCF4"
                                                                                                                            jsaction="rcuQ6b:npT2md"
                                                                                                                            data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQkYEEegQIARAD">
                                                                                                                            <div jsname="ibnC6b"
                                                                                                                                class="znKVS">
                                                                                                                                Report
                                                                                                                            </div>
                                                                                                                        </g-menu-item>
                                                                                                                    </g-menu>
                                                                                                                </div>
                                                                                                            </g-popup>
                                                                                                        </g-dropdown-menu>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="VBhIHd">11
                                                                                                    months ago</div><a
                                                                                                    class="lMfK8c"
                                                                                                    data-qid="UgynHZ3VIbvRmsUX_Sh4AaABGg"
                                                                                                    jsaction="fire.clickNumAnswers">1
                                                                                                    answer</a>
                                                                                                <div class="yX1Uqd">
                                                                                                    <div data-qid="UgynHZ3VIbvRmsUX_Sh4AaABGg"
                                                                                                        role="button"
                                                                                                        tabindex="0"
                                                                                                        jsaction="fire.click_answer"
                                                                                                        data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQieMCKAB6BAgBEAQ">
                                                                                                        <g-raised-button
                                                                                                            class="eOGE2d Gfzyee hide-focus-ring jREHUb zPNTne mViXqc R1smN Pjsr7c"
                                                                                                            role="button"
                                                                                                            tabindex="0">
                                                                                                            <div
                                                                                                                class="fSXkBc">
                                                                                                                <span
                                                                                                                    class="cZzjWd z1asCe X9Fejc"
                                                                                                                    style="height:12px;line-height:12px;width:12px"><svg
                                                                                                                        focusable="false"
                                                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                                                        viewBox="0 0 24 24">
                                                                                                                        <path
                                                                                                                            d="M21.99 4c0-1.1-.89-2-1.99-2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h14l4 4-.01-18zM17 11h-4v4h-2v-4H7V9h4V5h2v4h4v2z">
                                                                                                                        </path>
                                                                                                                    </svg></span>Answer
                                                                                                            </div>
                                                                                                        </g-raised-button>
                                                                                                    </div>
                                                                                                    <div class="QnJxP"
                                                                                                        jscontroller="ZB8u4"
                                                                                                        data-is-serp="true"
                                                                                                        data-parent-stanza-id="UgynHZ3VIbvRmsUX_Sh4AaABGg"
                                                                                                        data-stanza-id=""
                                                                                                        data-total-downvotes="0"
                                                                                                        data-total-upvotes="0"
                                                                                                        jsaction="rcuQ6b:npT2md;BudjT:aIN2K;GXZwre:VXFQLb;Y1fgYe:VXFQLb">
                                                                                                        <div jsname="HcHK1c"
                                                                                                            class="prNxbc YQnpyc pAfMKd"
                                                                                                            role="button"
                                                                                                            tabindex="0"
                                                                                                            jsaction="s8aso;mousedown:PZkl4c"
                                                                                                            data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQ9MAEegQIARAF">
                                                                                                            <span
                                                                                                                jsname="o7PLyb"
                                                                                                                class="cYjWmf z1asCe iC5a4e"
                                                                                                                data-sentiment="3"
                                                                                                                style="height:16px;line-height:16px;width:16px"><svg
                                                                                                                    focusable="false"
                                                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                                                    viewBox="0 0 24 24">
                                                                                                                    <path
                                                                                                                        d="M1 21h4V9H1v12zm22-11c0-1.1-.9-2-2-2h-6.31l.95-4.57.03-.32c0-.41-.17-.79-.44-1.06L14.17 1 7.59 7.59C7.22 7.95 7 8.45 7 9v10c0 1.1.9 2 2 2h9c.83 0 1.54-.5 1.84-1.22l3.02-7.05c.09-.23.14-.47.14-.73v-2z">
                                                                                                                    </path>
                                                                                                                </svg></span>
                                                                                                        </div>
                                                                                                        <div jsname="XxpdFd"
                                                                                                            class="prNxbc YQnpyc G1Gf7 pAfMKd"
                                                                                                            role="button"
                                                                                                            tabindex="0"
                                                                                                            jsaction="yJ0xdf;mousedown:PZkl4c"
                                                                                                            data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQ9MAEegQIARAG">
                                                                                                            <span
                                                                                                                jsname="o7PLyb"
                                                                                                                class="R6g0Cd z1asCe SWUIOd"
                                                                                                                data-sentiment="3"
                                                                                                                style="height:16px;line-height:16px;width:16px"><svg
                                                                                                                    focusable="false"
                                                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                                                    viewBox="0 0 24 24">
                                                                                                                    <path
                                                                                                                        d="M15 3H6c-.83 0-1.54.5-1.84 1.22l-3.02 7.05c-.09.23-.14.47-.14.73v2c0 1.1.9 2 2 2h6.31l-.95 4.57-.03.32c0 .41.17.79.44 1.06L9.83 23l6.59-6.59c.36-.36.58-.86.58-1.41V5c0-1.1-.9-2-2-2zm4 0v12h4V3h-4z">
                                                                                                                    </path>
                                                                                                                </svg></span>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </g-inner-card>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="PFgLMb">
                                                                                        <div>
                                                                                            <g-inner-card
                                                                                                jsname="TfyIce"
                                                                                                class="KNTSjf nqyane cv2VAd"
                                                                                                data-qid="UgzDTEYT_8PzBAxizkV4AaABGg"
                                                                                                jsaction="fire.click_question"
                                                                                                data-hveid="CAEQBw"
                                                                                                data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQiOMCKAF6BAgBEAc">
                                                                                                <div class="u3dCqc">
                                                                                                    <div class="TC8kpb">
                                                                                                        How to send an
                                                                                                        email to
                                                                                                        microsoft
                                                                                                        support?</div>
                                                                                                    <div class="Fy2WDf">
                                                                                                        <g-dropdown-menu
                                                                                                            jscontroller="DqdCgd"
                                                                                                            jsdata="xJGXK;;B2WCFw"
                                                                                                            jsshadow=""
                                                                                                            jsaction="rcuQ6b:npT2md;menu_item_selected:GKlhgf;g_popup_before_reposition:cCpuJc;dp_menu_reg_caption:bzkPEc;clear_menu_item:oyYkKb;g_popup_show:G8Ofmd;g_popup_hide:rWoVB;hide_popup:L76sMb;menu_close_button:L76sMb">
                                                                                                            <g-popup
                                                                                                                jsname="zpo2ue"
                                                                                                                jscontroller="NZI0Db"
                                                                                                                jsaction="A05xBd:IYtByb;"
                                                                                                                jsdata="mVjAjf;;B2WCF0"
                                                                                                                id="ow38"
                                                                                                                __is_owner="true">
                                                                                                                <div jsname="oYxtQd"
                                                                                                                    class="rIbAWc hide-focus-ring"
                                                                                                                    jsslot=""
                                                                                                                    aria-expanded="false"
                                                                                                                    aria-haspopup="true"
                                                                                                                    role="button"
                                                                                                                    tabindex="0"
                                                                                                                    jsaction="WFrRFb;keydown:uYT2Vb">
                                                                                                                    <span
                                                                                                                        class="XnlyYd z1asCe SaPW2b"
                                                                                                                        style="height:20px;line-height:20px;width:20px"><svg
                                                                                                                            focusable="false"
                                                                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                                                                            viewBox="0 0 24 24">
                                                                                                                            <path
                                                                                                                                d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z">
                                                                                                                            </path>
                                                                                                                        </svg></span>
                                                                                                                </div>
                                                                                                                <div jsname="V68bde"
                                                                                                                    class="EwsJzb sAKBe"
                                                                                                                    style="display:none;z-index:9999"
                                                                                                                    jsowner="ow38">
                                                                                                                    <g-menu
                                                                                                                        jsname="iXXGtd"
                                                                                                                        class="e7RZX gLSAk"
                                                                                                                        jscontroller="wQpTuc"
                                                                                                                        data-mh="-1"
                                                                                                                        role="menu"
                                                                                                                        tabindex="-1"
                                                                                                                        jsaction="focus:h06R8;PSl28c;keydown:uYT2Vb;mouseenter:WOQqYb;mouseleave:Tx5Rb;mouseover:IgJl9c;rcuQ6b:npT2md">
                                                                                                                        <g-menu-item
                                                                                                                            jsname="NNJLud"
                                                                                                                            data-qid="UgzDTEYT_8PzBAxizkV4AaABGg"
                                                                                                                            data-ia="report"
                                                                                                                            jscontroller="qjr3nc"
                                                                                                                            class="ErsxPb hide-focus-ring"
                                                                                                                            role="menuitem"
                                                                                                                            tabindex="0"
                                                                                                                            data-short-label=""
                                                                                                                            jsdata="zPXzie;;B2WCF4"
                                                                                                                            jsaction="rcuQ6b:npT2md"
                                                                                                                            data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQkYEEegQIARAI">
                                                                                                                            <div jsname="ibnC6b"
                                                                                                                                class="znKVS">
                                                                                                                                Report
                                                                                                                            </div>
                                                                                                                        </g-menu-item>
                                                                                                                    </g-menu>
                                                                                                                </div>
                                                                                                            </g-popup>
                                                                                                        </g-dropdown-menu>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="VBhIHd">11
                                                                                                    months ago</div><a
                                                                                                    class="lMfK8c"
                                                                                                    data-qid="UgzDTEYT_8PzBAxizkV4AaABGg"
                                                                                                    jsaction="fire.clickNumAnswers">Be
                                                                                                    the first to
                                                                                                    answer</a>
                                                                                                <div class="yX1Uqd">
                                                                                                    <div data-qid="UgzDTEYT_8PzBAxizkV4AaABGg"
                                                                                                        role="button"
                                                                                                        tabindex="0"
                                                                                                        jsaction="fire.click_answer"
                                                                                                        data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQieMCKAB6BAgBEAk">
                                                                                                        <g-raised-button
                                                                                                            class="eOGE2d Gfzyee hide-focus-ring jREHUb zPNTne mViXqc R1smN Pjsr7c"
                                                                                                            role="button"
                                                                                                            tabindex="0">
                                                                                                            <div
                                                                                                                class="fSXkBc">
                                                                                                                <span
                                                                                                                    class="cZzjWd z1asCe X9Fejc"
                                                                                                                    style="height:12px;line-height:12px;width:12px"><svg
                                                                                                                        focusable="false"
                                                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                                                        viewBox="0 0 24 24">
                                                                                                                        <path
                                                                                                                            d="M21.99 4c0-1.1-.89-2-1.99-2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h14l4 4-.01-18zM17 11h-4v4h-2v-4H7V9h4V5h2v4h4v2z">
                                                                                                                        </path>
                                                                                                                    </svg></span>Answer
                                                                                                            </div>
                                                                                                        </g-raised-button>
                                                                                                    </div>
                                                                                                    <div class="QnJxP"
                                                                                                        jscontroller="ZB8u4"
                                                                                                        data-is-serp="true"
                                                                                                        data-parent-stanza-id="UgzDTEYT_8PzBAxizkV4AaABGg"
                                                                                                        data-stanza-id=""
                                                                                                        data-total-downvotes="0"
                                                                                                        data-total-upvotes="0"
                                                                                                        jsaction="rcuQ6b:npT2md;BudjT:aIN2K;GXZwre:VXFQLb;Y1fgYe:VXFQLb">
                                                                                                        <div jsname="HcHK1c"
                                                                                                            class="prNxbc YQnpyc pAfMKd"
                                                                                                            role="button"
                                                                                                            tabindex="0"
                                                                                                            jsaction="s8aso;mousedown:PZkl4c"
                                                                                                            data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQ9MAEegQIARAK">
                                                                                                            <span
                                                                                                                jsname="o7PLyb"
                                                                                                                class="cYjWmf z1asCe iC5a4e"
                                                                                                                data-sentiment="3"
                                                                                                                style="height:16px;line-height:16px;width:16px"><svg
                                                                                                                    focusable="false"
                                                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                                                    viewBox="0 0 24 24">
                                                                                                                    <path
                                                                                                                        d="M1 21h4V9H1v12zm22-11c0-1.1-.9-2-2-2h-6.31l.95-4.57.03-.32c0-.41-.17-.79-.44-1.06L14.17 1 7.59 7.59C7.22 7.95 7 8.45 7 9v10c0 1.1.9 2 2 2h9c.83 0 1.54-.5 1.84-1.22l3.02-7.05c.09-.23.14-.47.14-.73v-2z">
                                                                                                                    </path>
                                                                                                                </svg></span>
                                                                                                        </div>
                                                                                                        <div jsname="XxpdFd"
                                                                                                            class="prNxbc YQnpyc G1Gf7 pAfMKd"
                                                                                                            role="button"
                                                                                                            tabindex="0"
                                                                                                            jsaction="yJ0xdf;mousedown:PZkl4c"
                                                                                                            data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQ9MAEegQIARAL">
                                                                                                            <span
                                                                                                                jsname="o7PLyb"
                                                                                                                class="R6g0Cd z1asCe SWUIOd"
                                                                                                                data-sentiment="3"
                                                                                                                style="height:16px;line-height:16px;width:16px"><svg
                                                                                                                    focusable="false"
                                                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                                                    viewBox="0 0 24 24">
                                                                                                                    <path
                                                                                                                        d="M15 3H6c-.83 0-1.54.5-1.84 1.22l-3.02 7.05c-.09.23-.14.47-.14.73v2c0 1.1.9 2 2 2h6.31l-.95 4.57-.03.32c0 .41.17.79.44 1.06L9.83 23l6.59-6.59c.36-.36.58-.86.58-1.41V5c0-1.1-.9-2-2-2zm4 0v12h4V3h-4z">
                                                                                                                    </path>
                                                                                                                </svg></span>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </g-inner-card>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="PFgLMb"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div jsname="Y5ANHe">
                                                                            <g-left-button jsname="sIJmDf"
                                                                                class="pQXcHc Lu0opc BlOseb eSq3C tHT0l"
                                                                                style="top: 0px; left: -14px;"
                                                                                aria-hidden="true" jsaction="PfjCMb"
                                                                                aria-label="Previous" role="button">
                                                                                <g-fab class="CNf3nf LhCR5d"
                                                                                    style="background-color:#fff;color:#757575">
                                                                                    <span
                                                                                        class="PUDfGe z1asCe N5KMwd"><svg
                                                                                            focusable="false"
                                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                                            viewBox="0 0 24 24">
                                                                                            <path
                                                                                                d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z">
                                                                                            </path>
                                                                                        </svg></span></g-fab>
                                                                            </g-left-button>
                                                                        </div>
                                                                        <div jsname="AK6yne">
                                                                            <g-right-button jsname="IHFM4"
                                                                                style="top: 0px; right: -14px;"
                                                                                aria-hidden="true" jsaction="sYPGdb"
                                                                                class="pQXcHc Lu0opc k2Oeod eSq3C tHT0l"
                                                                                aria-label="Next" role="button">
                                                                                <g-fab class="CNf3nf LhCR5d"
                                                                                    style="background-color:#fff;color:#757575">
                                                                                    <span
                                                                                        class="PUDfGe z1asCe kKuqUd"><svg
                                                                                            focusable="false"
                                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                                            viewBox="0 0 24 24">
                                                                                            <path
                                                                                                d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z">
                                                                                            </path>
                                                                                        </svg></span></g-fab>
                                                                            </g-right-button>
                                                                        </div>
                                                                        <script nonce="4X/xePeUOQ9joZlyG8qAWQ==">
                                                                        (function() {
                                                                            google.sc = google.sc || {};
                                                                            google.sc.init = function(b, e, q, f, h,
                                                                                k, r) {
                                                                                if ((b = document
                                                                                        .getElementById(b)) && (
                                                                                        0 != b.offsetWidth ||
                                                                                        0 != b.offsetHeight)) {
                                                                                    var l = b.querySelector(
                                                                                            "div"),
                                                                                        m = l.querySelector(
                                                                                            "div"),
                                                                                        c = 0,
                                                                                        g = l.scrollWidth - l
                                                                                        .offsetWidth;
                                                                                    if (0 < e) {
                                                                                        var n = m.children;
                                                                                        c = n[e].offsetLeft - n[
                                                                                            0].offsetLeft;
                                                                                        if (f) {
                                                                                            for (var p = c =
                                                                                                0; p < e; ++p)
                                                                                                c += n[p]
                                                                                                .offsetWidth;
                                                                                            c = Math.min(g, c)
                                                                                        }
                                                                                    }
                                                                                    c += q;
                                                                                    e = Math.min(f ? g - c : c,
                                                                                        g);
                                                                                    l.scrollLeft = f && (h ||
                                                                                        r) ? c : f && k ? -c :
                                                                                        e;
                                                                                    var a = b
                                                                                        .getElementsByTagName(
                                                                                            "g-left-button")[0],
                                                                                        d = b
                                                                                        .getElementsByTagName(
                                                                                            "g-right-button")[
                                                                                        0];
                                                                                    a && d && (h = /\btHT0l\b/,
                                                                                        k = /\bpQXcHc\b/, a
                                                                                        .className = a
                                                                                        .className.replace(
                                                                                            h, ""), d
                                                                                        .className = d
                                                                                        .className.replace(
                                                                                            h, ""), 0 == e ?
                                                                                        a.className =
                                                                                        "pQXcHc " + a
                                                                                        .className : a
                                                                                        .className = a
                                                                                        .className.replace(
                                                                                            k, ""), e == g ?
                                                                                        d.className =
                                                                                        "pQXcHc " + d
                                                                                        .className : d
                                                                                        .className = d
                                                                                        .className.replace(
                                                                                            k, ""), 0 <= a
                                                                                        .className.indexOf(
                                                                                            "SL0Gp") && 0 ==
                                                                                        e && e == g && (m
                                                                                            .style
                                                                                            .paddingLeft =
                                                                                            "0px", m.style
                                                                                            .paddingRight =
                                                                                            "0px", a.style
                                                                                            .display =
                                                                                            "none", d.style
                                                                                            .display =
                                                                                            "none", b.style
                                                                                            .paddingLeft =
                                                                                            f ? "0px" :
                                                                                            "48px", b.style
                                                                                            .paddingRight =
                                                                                            f ? "48px" :
                                                                                            "0px", b.style
                                                                                            .textAlign = f ?
                                                                                            "left" :
                                                                                            "right",
                                                                                            document
                                                                                            .getElementById(
                                                                                                "fade_forward"
                                                                                                ).style
                                                                                            .display =
                                                                                            "none", document
                                                                                            .getElementById(
                                                                                                "fade_reverse"
                                                                                                ).style
                                                                                            .display =
                                                                                            "none"),
                                                                                        setTimeout(
                                                                                        function() {
                                                                                            a.className +=
                                                                                                " tHT0l";
                                                                                            d.className +=
                                                                                                " tHT0l"
                                                                                        }, 50))
                                                                                }
                                                                            };
                                                                        }).call(this);
                                                                        (function() {
                                                                            var id = '_EaPUXvTcMJW_8QP9_44g1';
                                                                            var index = 0;
                                                                            var offset = 0;
                                                                            var is_rtl = false;
                                                                            var is_ie = false;
                                                                            var is_gecko = true;
                                                                            var is_edge = false;
                                                                            google.sc.init(id, index, offset,
                                                                                is_rtl, is_ie, is_gecko, is_edge
                                                                                );
                                                                        })();
                                                                        </script>
                                                                    </g-scrolling-carousel>
                                                                </div>
                                                            </div>
                                                            <div jsname="CZPex" class="QGPvze"
                                                                data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQ9cAEegQIARAM">
                                                                <g-inner-card class="UMmCL nqyane cv2VAd">
                                                                    <div>
                                                                        <div class="vG9Inf">
                                                                            <div jsname="KREMId" class="ilvEkf"
                                                                                id="gSE3b82yHtr__AskQuestionButtonAsync"
                                                                                data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQoZQDegQIARAN">
                                                                                <g-img class="ilvEkf BA0A6c"
                                                                                    style="border-radius:20px 20px 20px 20px">
                                                                                    <img id="dimg_6"
                                                                                        src="ms_files/photo.png"
                                                                                        class="rISBZc"
                                                                                        alt="Your profile picture"
                                                                                        data-atf="4" width="40"
                                                                                        height="40"></g-img>
                                                                            </div>
                                                                            <div class="kckgBd">
                                                                                <div class="Cktv6e"></div>
                                                                            </div>
                                                                            <div class="XSawAb" role="button"
                                                                                tabindex="0"
                                                                                jsaction="fire.compose_question"
                                                                                data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQmO8CegQIARAO">
                                                                                <div class="l0p9pb"><span
                                                                                        class="xQbC8">Ask other people a
                                                                                        question</span><span
                                                                                        class="vSP5Gb z1asCe p7poXe"
                                                                                        style="height:18px;line-height:18px;width:18px"><svg
                                                                                            focusable="false"
                                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                                            viewBox="0 0 24 24">
                                                                                            <path
                                                                                                d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z">
                                                                                            </path>
                                                                                        </svg></span></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="nb0Pd">Posting publicly. <a
                                                                                ref="https://support.google.com/websearch/?p=user_questions"
                                                                                target="_blank">Learn more</a></div>
                                                                    </div>
                                                                </g-inner-card>
                                                            </div>
                                                        </g-section-with-header>
                                                        <div jsname="iLQnud" jscontroller="DVbjQe"
                                                            jsaction="rcuQ6b:uULtK;pRtDme:kkE2Fe;K1QYRc:mDlMyb;rSNifd:bpxabc;click_answer:Tz47we;lcm_lightbox_closed:g8GAr">
                                                            <div jsname="kKYS5d" id="vYnfef">
                                                                <div>
                                                                    <g-lightbox jsname="Sx9Kwc" jscontroller="Adromf"
                                                                        data-df="false" jsshadow=""
                                                                        jsaction="rcuQ6b:npT2md" data-hveid="CAEQDw"
                                                                        data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQg-sCegQIARAP">
                                                                        <div jsname="jt9vfc" aria-hidden="true"
                                                                            role="button" tabindex="0"
                                                                            jsaction="focus:sT2f3e"
                                                                            style="display:none"></div>
                                                                        <div jsname="AHe6Kc" class="ynlwjd qzMpzb u98ib"
                                                                            style="display:none;outline:none"
                                                                            role="dialog" tabindex="-1"
                                                                            jsaction="lcm_load_lightbox:hfClUb;lcm_load_close_lightbox:vhMcte;lcm_open_lightbox:FL9aIe;lcm_close_lightbox:DlGmce;mLt3mc">
                                                                            <div class="dtCYCd" jsaction="yZGKvf"
                                                                                data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQ-UN6BAgBEBA">
                                                                                <g-loading-icon jsname="aZ2wEe"
                                                                                    class="Xfh32"
                                                                                    style="display:none;height:24px;width:24px">
                                                                                    <img src="ms_files/loading_24.gif"
                                                                                        alt="Loading..."
                                                                                        role="progressbar" width="24"
                                                                                        height="24"></g-loading-icon>
                                                                            </div>
                                                                            <div class="Xvesr" aria-label="Close"
                                                                                role="button" tabindex="0"
                                                                                jsaction="yZGKvf"
                                                                                data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQ-EN6BAgBEBE">
                                                                            </div>
                                                                            <div jsname="Sx9Kwc" class="AU64fe"
                                                                                style="display:none"><span jsslot="">
                                                                                    <div class="VFlF2c VJp9rd">
                                                                                        <div>
                                                                                            <div class="jx3Xk"><span
                                                                                                    class="EMNPad">Q&amp;A
                                                                                                    on Google</span>
                                                                                            </div>
                                                                                            <div jsname="GsJ1Oe"
                                                                                                class="a83P8e y yp"
                                                                                                data-jiis="up"
                                                                                                data-async-type="ugc_ms_ga"
                                                                                                data-async-context-required="question_stanza_id"
                                                                                                id="gqimuQCLVOK__answerListAsync"
                                                                                                data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQ3dQFegQIARAS">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </span></div>
                                                                        </div>
                                                                        <div jsname="qngMid" aria-hidden="true"
                                                                            role="button" tabindex="0"
                                                                            jsaction="focus:tuePCd"
                                                                            style="display:none"></div>
                                                                    </g-lightbox>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div jsname="PZOWRd" jscontroller="J3Ajmb"
                                                            data-source-ui="ugcaq"
                                                            jsaction="rcuQ6b:uULtK;ElT87:kkE2Fe;clickMic:XVYTM;textareaInput:G73uL;clickPost:TWHySd;clickCancel:r9DEDb;clickThankYouPage:r9DEDb;lcm_lightbox_closed:g8GAr">
                                                            <div jsname="R3qzdc" data-jiis="up"
                                                                data-async-type="ugc_qa_and"
                                                                id="dqUJwHfsVo5__answer_question" class="y yp"
                                                                data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQhOsCegQIARAT">
                                                            </div>
                                                        </div>
                                                        <g-snackbar jsname="sOWgEc" jscontroller="TrMQ4c"
                                                            style="display:none" jsshadow="" jsaction="rcuQ6b:npT2md"
                                                            id="ow44" __is_owner="true">
                                                            <div jsname="Ng57nc" class="CIKhFd"
                                                                data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQ4G96BAgBEBQ"
                                                                jsowner="ow44">
                                                                <div class="EA3l1b">
                                                                    <div class="Xb004" jsslot=""><span
                                                                            class="awHmMb"><span>Thanks for the upvote.
                                                                                Do you want to be notified when others
                                                                                post answers to this
                                                                                question?</span></span>
                                                                        <g-snackbar-action class="BDp8nf"
                                                                            jscontroller="ZNtvCb" jsaction="GtUzrb">
                                                                            <g-flat-button
                                                                                class="U8shWc hpZDWd fSXIc boCbHc"
                                                                                style="color:#3b78e7" role="button"
                                                                                tabindex="0"><span jsname="ae920"
                                                                                    data-is-following="false">Yes</span>
                                                                            </g-flat-button>
                                                                        </g-snackbar-action>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </g-snackbar>
                                                        <g-snackbar jsname="F8Dhxb" jscontroller="TrMQ4c"
                                                            style="display:none" jsshadow="" jsaction="rcuQ6b:npT2md"
                                                            id="ow46" __is_owner="true">
                                                            <div jsname="Ng57nc" class="CIKhFd"
                                                                data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQ4G96BAgBEBU"
                                                                jsowner="ow46">
                                                                <div class="EA3l1b">
                                                                    <div class="Xb004" jsslot=""><span
                                                                            class="awHmMb rKlILd">Following this
                                                                            question. You'll get notifications when
                                                                            people post new answers to this
                                                                            question.</span></div>
                                                                </div>
                                                            </div>
                                                        </g-snackbar>
                                                        <div jsname="n6rpyc" jscontroller="vUqcAd" data-qiie="false"
                                                            jsaction="rcuQ6b:uULtK;clickMic:XVYTM;ESwxuf:kkE2Fe;textareaInput:G73uL;keydown:mAamLc;clickPost:uIfyde;clickCancel:r9DEDb;clickThankYouPage:r9DEDb;clickUndo:qoaWqf;clickReplace:S1suLe;lcm_lightbox_closed:g8GAr">
                                                            <div jsname="r7zSJd" data-jiis="up"
                                                                data-async-type="ugc_qa_askd"
                                                                id="nTBpBYHeThp__ask_question_desktop" class="y yp"
                                                                data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQle8CegQIARAW">
                                                            </div>
                                                        </div>
                                                        <div jsname="V8ddzd" jscontroller="zIWeZd" class="uraw"
                                                            jsdata="GZ8hzd;;B2WCGA"
                                                            jsaction="rcuQ6b:npT2md;dg_dismissed:Rte9Pe">
                                                            <g-dialog jsname="Sx9Kwc" jscontroller="GxIAgd"
                                                                data-id="_EaPUXvTcMJW_8QP9_44g16"
                                                                jsaction="jxvro:Imgh9b" jsdata="gctHtc;;B2WCGE"
                                                                jsshadow="">
                                                                <div jsname="XKSfm" id="_EaPUXvTcMJW_8QP9_44g16"
                                                                    jsaction="dg_close:TvD9Pc;dBhwS:TvD9Pc;mLt3mc">
                                                                    <div jsname="bF1uUb" class="t7xA6 lxG8Hd"></div>
                                                                    <div class="bErdLd hFCnyd wwYr3">
                                                                        <div class="ls8Qne" aria-hidden="true"
                                                                            role="button" tabindex="0"
                                                                            jsaction="focus:sT2f3e"></div><span
                                                                            jsslot="">
                                                                            <div class="NJfJb Sr5CLc BQlSMe"
                                                                                role="dialog"><span jsname="tqp7ud"
                                                                                    class="B4CWGf z1asCe wuXmqc"
                                                                                    aria-label="Close" role="button"
                                                                                    tabindex="0"
                                                                                    jsaction="fire.dg_close"><svg
                                                                                        focusable="false"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path
                                                                                            d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z">
                                                                                        </path>
                                                                                    </svg></span>
                                                                                <div class="ncZ3cb">
                                                                                    <g-loading-icon
                                                                                        style="height:24px;width:24px">
                                                                                        <img src="ms_files/loading_24.gif"
                                                                                            alt="Loading..."
                                                                                            role="progressbar"
                                                                                            width="24" height="24">
                                                                                    </g-loading-icon>
                                                                                </div>
                                                                                <div jsname="VSkPL"></div>
                                                                            </div>
                                                                        </span>
                                                                        <div class="ls8Qne" aria-hidden="true"
                                                                            role="button" tabindex="0"
                                                                            jsaction="focus:tuePCd"></div>
                                                                    </div>
                                                                </div>
                                                            </g-dialog>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--n-->
                                            </div>
                                            <div class="g">
                                                <h2 class="bNg8Rb">Web results</h2>
                                                <!--m-->
                                                <div class="rc" data-hveid="CAYQAA"
                                                    data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQFSgAMBF6BAgGEAA">
                                                    <div class="r"><a ref="https://support.xbox.com/"
                                                            onmousedown="return rwt(this,'','','','','AOvVaw0VI1ztjiO63qdD1_NhMn3t','','2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQFjARegQIBhAB','','',event)"><br>
                                                            <h3 class="LC20lb DKV0Md">Xbox Support</h3>
                                                            <div class="TbwUpd NJjxre"><cite
                                                                    class="iUh30 tjvcx">support.xbox.com<span
                                                                        class="eipWBe"></span></cite></div>
                                                        </a>
                                                        <div class="B6fmyf">
                                                            <div class="TbwUpd"><cite
                                                                    class="iUh30 tjvcx">support.xbox.com<span
                                                                        class="eipWBe"></span></cite></div>
                                                            <div class="eFM0qc"><span>
                                                                    <div class="action-menu"><a class="GHDvEf" ref="#"
                                                                            id="am-b17" aria-label="Result options"
                                                                            aria-expanded="false" aria-haspopup="true"
                                                                            role="button"
                                                                            jsaction="m.tdd;keydown:m.hbke;keypress:m.mskpe"
                                                                            data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQ7B0wEXoECAYQAg"><span
                                                                                class="mn-dwn-arw"></span></a>
                                                                        <ol class="action-menu-panel" role="menu"
                                                                            tabindex="-1"
                                                                            jsaction="keydown:m.hdke;mouseover:m.hdhne;mouseout:m.hdhue"
                                                                            data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQqR8wEXoECAYQAw">
                                                                            <li class="action-menu-item"
                                                                                role="menuitem"><a class="fl"
                                                                                    ref="https://webcache.googleusercontent.com/search?q=cache:OiWM_RmSRJoJ:https://support.xbox.com/+&amp;cd=18&amp;hl=en&amp;ct=clnk&amp;gl=in&amp;client=firefox-b-d"
                                                                                    onmousedown="return rwt(this,'','','','','AOvVaw0t0dQZasGze-krSaz9zSPv','','2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQIDARegQIBhAE','','',event)">Cached</a>
                                                                            </li>
                                                                            <li class="action-menu-item"
                                                                                role="menuitem"><a class="fl"
                                                                                    ref="https://www.google.com/search?client=firefox-b-d&amp;q=related:https://support.xbox.com/+microsoft+online+support&amp;tbo=1&amp;sa=X&amp;ved=2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQHzARegQIBhAF">Similar</a>
                                                                            </li>
                                                                        </ol>
                                                                    </div>
                                                                </span></div>
                                                        </div>
                                                    </div>
                                                    <div class="s">
                                                        <div><span class="st">Family &amp; <em>online</em> safety. Games
                                                                &amp; apps. Friends &amp; social activity ... Xbox
                                                                <em>support</em> website on a phone. Keep your family
                                                                safe and happy​. Find out how to&nbsp;...</span></div>
                                                    </div>
                                                </div>
                                                <!--n-->
                                            </div>
                                            <div class="g">
                                                <!--m-->
                                                <div class="rc" data-hveid="CAoQAA"
                                                    data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQFSgAMBJ6BAgKEAA">
                                                    <div class="r"><a
                                                            ref="https://www.thewindowsclub.com/microsoft-support-chat-phone-number/"
                                                            onmousedown="return rwt(this,'','','','','AOvVaw3_mWTPRI_B0C049pFWYiTQ','','2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQFjASegQIChAB','','',event)"><br>
                                                            <h3 class="LC20lb DKV0Md">Microsoft Support : Phone Number,
                                                                Live Chat, Email ID, Useful ...</h3>
                                                            <div class="TbwUpd NJjxre"><cite
                                                                    class="iUh30 bc tjvcx">www.thewindowsclub.com<span
                                                                        class="eipWBe"> ›
                                                                        microsoft-support-chat-ph...</span></cite></div>
                                                        </a>
                                                        <div class="B6fmyf">
                                                            <div class="TbwUpd"><cite
                                                                    class="iUh30 bc tjvcx">www.thewindowsclub.com<span
                                                                        class="eipWBe"> ›
                                                                        microsoft-support-chat-ph...</span></cite></div>
                                                            <div class="eFM0qc"><span>
                                                                    <div class="action-menu"><a class="GHDvEf" ref="#"
                                                                            id="am-b18" aria-label="Result options"
                                                                            aria-expanded="false" aria-haspopup="true"
                                                                            role="button"
                                                                            jsaction="m.tdd;keydown:m.hbke;keypress:m.mskpe"
                                                                            data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQ7B0wEnoECAoQBA"><span
                                                                                class="mn-dwn-arw"></span></a>
                                                                        <ol class="action-menu-panel" role="menu"
                                                                            tabindex="-1"
                                                                            jsaction="keydown:m.hdke;mouseover:m.hdhne;mouseout:m.hdhue"
                                                                            data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQqR8wEnoECAoQBQ">
                                                                            <li class="action-menu-item"
                                                                                role="menuitem"><a class="fl"
                                                                                    ref="https://webcache.googleusercontent.com/search?q=cache:qbE1rxxArHoJ:https://www.thewindowsclub.com/microsoft-support-chat-phone-number/+&amp;cd=19&amp;hl=en&amp;ct=clnk&amp;gl=in&amp;client=firefox-b-d"
                                                                                    onmousedown="return rwt(this,'','','','','AOvVaw1sXAsoFWejgkWyAMlU6he2','','2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQIDASegQIChAG','','',event)">Cached</a>
                                                                            </li>
                                                                        </ol>
                                                                    </div>
                                                                </span></div>
                                                        </div>
                                                    </div>
                                                    <div class="s">
                                                        <div><span class="st"><span class="f">Mar 11, 2018 - </span>You
                                                                can contact <em>Microsoft Customer Service</em> and
                                                                <em>Support</em> on the following telephone numbers,
                                                                Monday through Friday, 5:00 AM – 9:00 PM&nbsp;...</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--n-->
                                            </div>
                                            <div class="g">
                                                <!--m-->
                                                <div class="rc" data-hveid="CA0QAA"
                                                    data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQFSgAMBN6BAgNEAA">
                                                    <div class="r"><a
                                                            ref="https://home.pearsonvue.com/microsoft/contact"
                                                            onmousedown="return rwt(this,'','','','','AOvVaw1sWXxXeYHeWQgZw_T_SfjF','','2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQFjATegQIDRAB','','',event)"><br>
                                                            <h3 class="LC20lb DKV0Md">Customer service :: Microsoft ::
                                                                Pearson VUE</h3>
                                                            <div class="TbwUpd NJjxre"><cite
                                                                    class="iUh30 bc tjvcx">home.pearsonvue.com<span
                                                                        class="eipWBe"> › microsoft ›
                                                                        contact</span></cite></div>
                                                        </a>
                                                        <div class="B6fmyf">
                                                            <div class="TbwUpd"><cite
                                                                    class="iUh30 bc tjvcx">home.pearsonvue.com<span
                                                                        class="eipWBe"> › microsoft ›
                                                                        contact</span></cite></div>
                                                            <div class="eFM0qc"><span>
                                                                    <div class="action-menu"><a class="GHDvEf" ref="#"
                                                                            id="am-b19" aria-label="Result options"
                                                                            aria-expanded="false" aria-haspopup="true"
                                                                            role="button"
                                                                            jsaction="m.tdd;keydown:m.hbke;keypress:m.mskpe"
                                                                            data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQ7B0wE3oECA0QBA"><span
                                                                                class="mn-dwn-arw"></span></a>
                                                                        <ol class="action-menu-panel" role="menu"
                                                                            tabindex="-1"
                                                                            jsaction="keydown:m.hdke;mouseover:m.hdhne;mouseout:m.hdhue"
                                                                            data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQqR8wE3oECA0QBQ">
                                                                            <li class="action-menu-item"
                                                                                role="menuitem"><a class="fl"
                                                                                    ref="https://webcache.googleusercontent.com/search?q=cache:3DX1tjuECXoJ:https://home.pearsonvue.com/microsoft/contact+&amp;cd=20&amp;hl=en&amp;ct=clnk&amp;gl=in&amp;client=firefox-b-d"
                                                                                    onmousedown="return rwt(this,'','','','','AOvVaw2hAlE6eIJib76ICIMp65QO','','2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQIDATegQIDRAG','','',event)">Cached</a>
                                                                            </li>
                                                                        </ol>
                                                                    </div>
                                                                </span></div>
                                                        </div>
                                                    </div>
                                                    <div class="s">
                                                        <div><span class="st"><em>Customer service</em>. We encourage
                                                                you to schedule/purchase your exam <em>online</em>. Get
                                                                started by logging in to your <em>web</em> account on
                                                                the <em>Microsoft</em> website. For&nbsp;...</span>
                                                        </div>
                                                    </div>
                                                    <div jscontroller="m6a0l" id="eob_61" jsdata="fxg5tf;;B2WCGU"
                                                        jsaction="rcuQ6b:npT2md"
                                                        data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQ2Z0BMBN6BAgNEAc">
                                                        <div jsname="UTgHCf" class="AUiS2"
                                                            data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQx40DegQINhAA">
                                                            <div jsname="d3PE6e" style="display:none">
                                                                <div
                                                                    data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQsKwBKAB6BAg2EAE">
                                                                    pearson vue microsoft login</div>
                                                                <div
                                                                    data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQsKwBKAF6BAg2EAI">
                                                                    pearson 24/7 chat</div>
                                                                <div
                                                                    data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQsKwBKAJ6BAg2EAM">
                                                                    pearson vue customer care india</div>
                                                                <div
                                                                    data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQsKwBKAN6BAg2EAQ">
                                                                    server 2019 exams</div>
                                                                <div
                                                                    data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQsKwBKAR6BAg2EAU">
                                                                    pearsonvue test reschedule</div>
                                                                <div
                                                                    data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQsKwBKAV6BAg2EAY">
                                                                    how to download my microsoft certification</div>
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
                                                <div class="rc" data-hveid="CAwQAA"
                                                    data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQFSgAMBR6BAgMEAA">
                                                    <div class="r"><a ref="https://support.skype.com/en/contact-us/"
                                                            onmousedown="return rwt(this,'','','','','AOvVaw0NJwFCy3G1K6qow20BNG4R','','2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQFjAUegQIDBAB','','',event)"><br>
                                                            <h3 class="LC20lb DKV0Md">Help for Skype – user guides,
                                                                FAQs, customer support</h3>
                                                            <div class="TbwUpd NJjxre"><cite
                                                                    class="iUh30 bc tjvcx">support.skype.com<span
                                                                        class="eipWBe"> › contact-us</span></cite></div>
                                                        </a>
                                                        <div class="B6fmyf">
                                                            <div class="TbwUpd"><cite
                                                                    class="iUh30 bc tjvcx">support.skype.com<span
                                                                        class="eipWBe"> › contact-us</span></cite></div>
                                                            <div class="eFM0qc"><span>
                                                                    <div class="action-menu"><a class="GHDvEf" ref="#"
                                                                            id="am-b20" aria-label="Result options"
                                                                            aria-expanded="false" aria-haspopup="true"
                                                                            role="button"
                                                                            jsaction="m.tdd;keydown:m.hbke;keypress:m.mskpe"
                                                                            data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQ7B0wFHoECAwQBA"><span
                                                                                class="mn-dwn-arw"></span></a>
                                                                        <ol class="action-menu-panel" role="menu"
                                                                            tabindex="-1"
                                                                            jsaction="keydown:m.hdke;mouseover:m.hdhne;mouseout:m.hdhue"
                                                                            data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQqR8wFHoECAwQBQ">
                                                                            <li class="action-menu-item"
                                                                                role="menuitem"><a class="fl"
                                                                                    ref="https://webcache.googleusercontent.com/search?q=cache:EPFiJAbW9xUJ:https://support.skype.com/en/contact-us/+&amp;cd=21&amp;hl=en&amp;ct=clnk&amp;gl=in&amp;client=firefox-b-d"
                                                                                    onmousedown="return rwt(this,'','','','','AOvVaw0KuUkpHZi9I4ViV2j_c1_q','','2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQIDAUegQIDBAG','','',event)">Cached</a>
                                                                            </li>
                                                                        </ol>
                                                                    </div>
                                                                </span></div>
                                                        </div>
                                                    </div>
                                                    <div class="s">
                                                        <div><span class="st">Search results from
                                                                <em>support</em>.skype.com knowledgebase.</span></div>
                                                    </div>
                                                    <div jscontroller="m6a0l" id="eob_59" jsdata="fxg5tf;;B2WCGM"
                                                        jsaction="rcuQ6b:npT2md"
                                                        data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQ2Z0BMBR6BAgMEAc">
                                                        <div jsname="UTgHCf" class="AUiS2"
                                                            data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQx40DegQINRAA">
                                                            <div jsname="d3PE6e" style="display:none">
                                                                <div
                                                                    data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQsKwBKAB6BAg1EAE">
                                                                    skype customer service phone number 1800</div>
                                                                <div
                                                                    data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQsKwBKAF6BAg1EAI">
                                                                    live chat customer service</div>
                                                                <div
                                                                    data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQsKwBKAJ6BAg1EAM">
                                                                    skype contact list</div>
                                                                <div
                                                                    data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQsKwBKAN6BAg1EAQ">
                                                                    phone number sky customer service</div>
                                                                <div
                                                                    data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQsKwBKAR6BAg1EAU">
                                                                    skype email address</div>
                                                                <div
                                                                    data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQsKwBKAV6BAg1EAY">
                                                                    what is the skype phone number</div>
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
                                        </div>
                                        <!--z-->
                                    </div>
                                </div>
                            </div>
                            <div id="bottomads"></div>
                            <div id="extrares">
                                <div id="botstuff">
                                    <div data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQCHoECCUQJw">
                                        <div jsdata="GXYZuf;;B2WCGs" jscontroller="G3eKy" jsaction="rcuQ6b:npT2md"
                                            jsl="$t t-w-XilABeKRA;$x 0;"></div>
                                        <div id="bres">
                                            <div class="g mnr-c g-blk" data-hveid="CCAQAA"
                                                data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQ3mIoAHoECCAQAA">
                                                <div class="kp-blk Wnoohf OJXvsb">
                                                    <div class="xpdopen">
                                                        <div class="ifM9O">
                                                            <div>
                                                                <div class="NFQFxe yp1CPe mod"
                                                                    data-attrid="kc:/common:sideways" data-md="133"
                                                                    data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQkCkwFXoECAQQAA">
                                                                    <!--m-->
                                                                    <div class="sV2QOc Ss2Faf zbA8Me i8lZMc"
                                                                        aria-level="3" role="heading">
                                                                        <div class="PfS8Ld">
                                                                            <div class="VLkRKc">Computer system
                                                                                organization</div>
                                                                            <div class="hKuTtf"><a class="EbH0bb"
                                                                                    ref="https://www.google.com/search?client=firefox-b-d&amp;q=Computer+system+organization&amp;stick=H4sIAAAAAAAAAONgFuLQz9U3MCkuM1GCs7SEs5Ot9JPzc3Pz86yKM1NSyxMri1cxyqVZOefnFpSWpBYpFFcWl6TmKuQXpSfmZVYllmTm5y1ilcEnDQC3QeA9awAAAA&amp;sa=X&amp;ved=2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQzTooADAVegQIBBAB"><span
                                                                                        class="rhsg3">View 15+
                                                                                        more</span><span
                                                                                        class="rhsl4">View
                                                                                        15+</span></a></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="zVvuGd MRfBrb ulRSHd"
                                                                        data-hveid="CAQQAg">
                                                                        <div class="PZPZlf MRfBrb qCptjf kno-vrt-t"
                                                                            data-reltype="sideways" data-rentity=""
                                                                            style="width:77px"><a
                                                                                ref="https://www.google.com/search?client=firefox-b-d&amp;q=Apple&amp;stick=H4sIAAAAAAAAAONgFuLQz9U3MCkuM1FiB7GyLaq0hLOTrfST83Nz8_OsijNTUssTK4tXMcqlWTnn5xaUlqQWKRRXFpek5irkF6Un5mVWJZZk5uctYmV1LCjISQUAwG7jA1MAAAA&amp;sa=X&amp;ved=2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQxA0wFXoECAQQBA"
                                                                                title="Apple"
                                                                                data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQxA0wFXoECAQQBA">
                                                                                <div class="XQ6p1d">
                                                                                    <g-img><img id="dimg_10"
                                                                                            src="ms_files/images.png"
                                                                                            class="rISBZc M4dUYb"
                                                                                            alt="Apple" data-atf="4"
                                                                                            width="77" height="77">
                                                                                    </g-img>
                                                                                </div>
                                                                                <div class="fl ellip oBrLN"
                                                                                    data-original-name="Apple">Apple
                                                                                </div>
                                                                            </a></div>
                                                                        <div class="PZPZlf MRfBrb qCptjf kno-vrt-t"
                                                                            data-reltype="sideways" data-rentity=""
                                                                            style="width:77px"><a
                                                                                ref="https://www.google.com/search?client=firefox-b-d&amp;q=IBM&amp;stick=H4sIAAAAAAAAAONgFuLQz9U3MCkuM1ECs4yLky20hLOTrfST83Nz8_OsijNTUssTK4tXMcqlWTnn5xaUlqQWKRRXFpek5irkF6Un5mVWJZZk5uctYmX2dPIFAHdnMgZSAAAA&amp;sa=X&amp;ved=2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQxA0wFXoECAQQBg"
                                                                                title="IBM"
                                                                                data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQxA0wFXoECAQQBg">
                                                                                <div class="XQ6p1d" style="height:77px">
                                                                                    <g-img><img id="dimg_17"
                                                                                            src="ms_files/images_010.png"
                                                                                            class="rISBZc M4dUYb"
                                                                                            style="margin-top:23px"
                                                                                            alt="IBM" data-atf="4"
                                                                                            width="77" height="31">
                                                                                    </g-img>
                                                                                </div>
                                                                                <div class="fl ellip oBrLN"
                                                                                    data-original-name="IBM">IBM</div>
                                                                            </a></div>
                                                                        <div class="PZPZlf MRfBrb qCptjf kno-vrt-t"
                                                                            data-reltype="sideways" data-rentity=""
                                                                            style="width:77px"><a
                                                                                ref="https://www.google.com/search?client=firefox-b-d&amp;q=Intel&amp;stick=H4sIAAAAAAAAAONgFuLQz9U3MCkuM1ECs4yLzTO0hLOTrfST83Nz8_OsijNTUssTK4tXMcqlWTnn5xaUlqQWKRRXFpek5irkF6Un5mVWJZZk5uctYmX1zCtJzQEANEQbRFQAAAA&amp;sa=X&amp;ved=2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQxA0wFXoECAQQCA"
                                                                                title="Intel"
                                                                                data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQxA0wFXoECAQQCA">
                                                                                <div class="XQ6p1d" style="height:77px">
                                                                                    <g-img><img id="dimg_26"
                                                                                            src="ms_files/images_005.png"
                                                                                            class="rISBZc M4dUYb"
                                                                                            style="margin-top:13px"
                                                                                            alt="Intel" data-atf="4"
                                                                                            width="77" height="51">
                                                                                    </g-img>
                                                                                </div>
                                                                                <div class="fl ellip oBrLN"
                                                                                    data-original-name="Intel">Intel
                                                                                </div>
                                                                            </a></div>
                                                                        <div class="PZPZlf rhsg3 MRfBrb qCptjf kno-vrt-t"
                                                                            data-reltype="sideways" data-rentity=""
                                                                            style="width:77px"><a
                                                                                ref="https://www.google.com/search?client=firefox-b-d&amp;q=Adobe&amp;stick=H4sIAAAAAAAAAONgFuLQz9U3MCkuM1FiB7HKctK0hLOTrfST83Nz8_OsijNTUssTK4tXMcqlWTnn5xaUlqQWKRRXFpek5irkF6Un5mVWJZZk5uctYmV1TMlPSgUAxSiMpVMAAAA&amp;sa=X&amp;ved=2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQxA0wFXoECAQQCg"
                                                                                title="Adobe"
                                                                                data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQxA0wFXoECAQQCg">
                                                                                <div class="XQ6p1d" style="width:77px">
                                                                                    <g-img><img id="dimg_34"
                                                                                            src="ms_files/images_003.png"
                                                                                            class="rISBZc M4dUYb"
                                                                                            style="margin-left:10px"
                                                                                            alt="Adobe" data-atf="4"
                                                                                            width="57" height="77">
                                                                                    </g-img>
                                                                                </div>
                                                                                <div class="fl ellip oBrLN"
                                                                                    data-original-name="Adobe">Adobe
                                                                                </div>
                                                                            </a></div>
                                                                        <div class="PZPZlf rhsg4 MRfBrb qCptjf kno-vrt-t"
                                                                            data-reltype="sideways" data-rentity=""
                                                                            style="width:77px"><a
                                                                                ref="https://www.google.com/search?client=firefox-b-d&amp;q=Nvidia&amp;stick=H4sIAAAAAAAAAONgFuLQz9U3MCkuM1ECsyyLMuK1hLOTrfST83Nz8_OsijNTUssTK4tXMcqlWTnn5xaUlqQWKRRXFpek5irkF6Un5mVWJZZk5uctYmXzK8tMyUwEAB0P7u5VAAAA&amp;sa=X&amp;ved=2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQxA0wFXoECAQQDA"
                                                                                title="Nvidia"
                                                                                data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQxA0wFXoECAQQDA">
                                                                                <div class="XQ6p1d" style="height:77px">
                                                                                    <g-img><img id="dimg_41"
                                                                                            src="ms_files/images_006.png"
                                                                                            class="rISBZc M4dUYb"
                                                                                            style="margin-top:10px"
                                                                                            alt="Nvidia" data-atf="4"
                                                                                            width="77" height="57">
                                                                                    </g-img>
                                                                                </div>
                                                                                <div class="fl ellip oBrLN"
                                                                                    data-original-name="Nvidia">Nvidia
                                                                                </div>
                                                                            </a></div>
                                                                        <div class="PZPZlf rhsg4 MRfBrb qCptjf kno-vrt-t"
                                                                            data-reltype="sideways" data-rentity=""
                                                                            style="width:77px"><a
                                                                                ref="https://www.google.com/search?client=firefox-b-d&amp;q=Hewlett-Packard&amp;stick=H4sIAAAAAAAAAONgFuLQz9U3MCkuM1ECs4xz87K1hLOTrfST83Nz8_OsijNTUssTK4tXMcqlWTnn5xaUlqQWKRRXFpek5irkF6Un5mVWJZZk5uctYuX3SC3PSS0p0Q1ITM5OLEoBACWRLBdeAAAA&amp;sa=X&amp;ved=2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQxA0wFXoECAQQDg"
                                                                                title="Hewlett-Packard"
                                                                                data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQxA0wFXoECAQQDg">
                                                                                <div class="XQ6p1d">
                                                                                    <g-img><img id="dimg_49"
                                                                                            src="ms_files/images_014.png"
                                                                                            class="rISBZc M4dUYb"
                                                                                            alt="Hewlett-Packard"
                                                                                            data-atf="4" width="77"
                                                                                            height="77"></g-img>
                                                                                </div>
                                                                                <div class="fl ellip oBrLN"
                                                                                    data-original-name="Hewlett‑Packard">
                                                                                    Hewlett‑Packard</div>
                                                                            </a></div>
                                                                        <div class="PZPZlf rhsg4 MRfBrb qCptjf kno-vrt-t"
                                                                            data-reltype="sideways" data-rentity=""
                                                                            style="width:77px"><a
                                                                                ref="https://www.google.com/search?client=firefox-b-d&amp;q=DELL&amp;stick=H4sIAAAAAAAAAONgFuLQz9U3MCkuM1ECswoqLZO0hLOTrfST83Nz8_OsijNTUssTK4tXMcqlWTnn5xaUlqQWKRRXFpek5irkF6Un5mVWJZZk5uctYmVxcfXxAQBKZuoBUwAAAA&amp;sa=X&amp;ved=2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQxA0wFXoECAQQEA"
                                                                                title="Dell"
                                                                                data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQxA0wFXoECAQQEA">
                                                                                <div class="XQ6p1d">
                                                                                    <g-img><img id="dimg_57"
                                                                                            src="ms_files/images_003.jpg"
                                                                                            class="rISBZc M4dUYb"
                                                                                            alt="Dell" data-atf="4"
                                                                                            width="77" height="77">
                                                                                    </g-img>
                                                                                </div>
                                                                                <div class="fl ellip oBrLN"
                                                                                    data-original-name="Dell">Dell</div>
                                                                            </a></div>
                                                                    </div>
                                                                    <!--n-->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div style="clear:both"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="g mnr-c g-blk" data-hveid="CB4QAA"
                                                data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQ3mIoAHoECB4QAA">
                                                <div class="kp-blk Wnoohf OJXvsb">
                                                    <div class="xpdopen">
                                                        <div class="ifM9O">
                                                            <div>
                                                                <div class="NFQFxe yp1CPe mod"
                                                                    data-attrid="kc:/common:sideways" data-md="133"
                                                                    data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQkCkwFnoECAMQAA">
                                                                    <!--m-->
                                                                    <div class="sV2QOc Ss2Faf zbA8Me i8lZMc"
                                                                        aria-level="3" role="heading">
                                                                        <div class="PfS8Ld">
                                                                            <div class="VLkRKc">Company organisation
                                                                            </div>
                                                                            <div class="hKuTtf"><a class="EbH0bb"
                                                                                    ref="https://www.google.com/search?client=firefox-b-d&amp;q=Company+organisation&amp;stick=H4sIAAAAAAAAAONgFuLQz9U3MCkuM1GCs7SEs5Ot9JPzc3Pz86yKM1NSyxMri1cxiqVZOefnFiTmVSrkF6Un5mUWJ5Zk5uctYhXBJgwAwXZpNlsAAAA&amp;sa=X&amp;ved=2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQzTooADAWegQIAxAB"><span
                                                                                        class="rhsg3">View 15+
                                                                                        more</span><span
                                                                                        class="rhsl4">View
                                                                                        15+</span></a></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="zVvuGd MRfBrb ulRSHd"
                                                                        data-hveid="CAMQAg">
                                                                        <div class="PZPZlf MRfBrb qCptjf kno-vrt-t"
                                                                            data-reltype="sideways" data-rentity=""
                                                                            style="width:77px"><a
                                                                                ref="https://www.google.com/search?client=firefox-b-d&amp;q=Amazon&amp;stick=H4sIAAAAAAAAAONgFuLQz9U3MCkuM1ECs3LTs9O1hLOTrfST83Nz8_OsijNTUssTK4tXMYqlWTnn5xYk5lUq5BelJ-ZlFieWZObnLWJlc8xNrMrPAwC1WXRKTQAAAA&amp;sa=X&amp;ved=2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQxA0wFnoECAMQBA"
                                                                                title="Amazon.com"
                                                                                data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQxA0wFnoECAMQBA">
                                                                                <div class="XQ6p1d" style="height:77px">
                                                                                    <g-img><img id="dimg_8"
                                                                                            src="ms_files/images_002.jpg"
                                                                                            class="rISBZc M4dUYb"
                                                                                            style="margin-top:18px"
                                                                                            alt="Amazon.com"
                                                                                            data-atf="4" width="77"
                                                                                            height="40"></g-img>
                                                                                </div>
                                                                                <div class="fl ellip oBrLN"
                                                                                    data-original-name="Amazon.com">
                                                                                    Amazon.com</div>
                                                                            </a></div>
                                                                        <div class="PZPZlf MRfBrb qCptjf kno-vrt-t"
                                                                            data-reltype="sideways" data-rentity=""
                                                                            style="width:77px"><a
                                                                                ref="https://www.google.com/search?client=firefox-b-d&amp;q=McKinsey&amp;stick=H4sIAAAAAAAAAONgFuLQz9U3MCkuM1HiBLGMqkosjbSEs5Ot9JPzc3Pz86yKM1NSyxMri1cxiqVZOefnFiTmVSrkF6Un5mUWJ5Zk5uctYuXwTfbOzCtOrQQAoIkFbVAAAAA&amp;sa=X&amp;ved=2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQxA0wFnoECAMQBg"
                                                                                title="McKinsey &amp; Company"
                                                                                data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQxA0wFnoECAMQBg">
                                                                                <div class="XQ6p1d">
                                                                                    <g-img><img id="dimg_14"
                                                                                            src="ms_files/images_002.png"
                                                                                            class="rISBZc M4dUYb"
                                                                                            alt="McKinsey &amp; Company"
                                                                                            data-atf="4" width="77"
                                                                                            height="77"></g-img>
                                                                                </div>
                                                                                <div class="fl ellip oBrLN"
                                                                                    data-original-name="McKinsey &amp; Company">
                                                                                    McKinsey &amp; Company</div>
                                                                            </a></div>
                                                                        <div class="PZPZlf MRfBrb qCptjf kno-vrt-t"
                                                                            data-reltype="sideways" data-rentity=""
                                                                            style="width:77px"><a
                                                                                ref="https://www.google.com/search?client=firefox-b-d&amp;q=McDonald&amp;stick=H4sIAAAAAAAAAONgFuLQz9U3MCkuM1HiBLHM0ysLzLWEs5Ot9JPzc3Pz86yKM1NSyxMri1cxiqVZOefnFiTmVSrkF6Un5mUWJ5Zk5uctYuXwTXbJz0vMSQEAGRZkFFAAAAA&amp;sa=X&amp;ved=2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQxA0wFnoECAMQCA"
                                                                                title="McDonald's"
                                                                                data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQxA0wFnoECAMQCA">
                                                                                <div class="XQ6p1d">
                                                                                    <g-img><img id="dimg_22"
                                                                                            src="ms_files/images_004.png"
                                                                                            class="rISBZc M4dUYb"
                                                                                            alt="McDonald's"
                                                                                            data-atf="4" width="77"
                                                                                            height="77"></g-img>
                                                                                </div>
                                                                                <div class="fl ellip oBrLN"
                                                                                    data-original-name="McDonald's">
                                                                                    McDonald's</div>
                                                                            </a></div>
                                                                        <div class="PZPZlf rhsg3 MRfBrb qCptjf kno-vrt-t"
                                                                            data-reltype="sideways" data-rentity=""
                                                                            style="width:77px"><a
                                                                                ref="https://www.google.com/search?client=firefox-b-d&amp;q=Johnson+and+Johnson&amp;stick=H4sIAAAAAAAAAONgFuLQz9U3MCkuM1HiBLEMzSzyCrWEs5Ot9JPzc3Pz86yKM1NSyxMri1cxiqVZOefnFiTmVSrkF6Un5mUWJ5Zk5uctYhX2ys_IK87PU0jMS1GAsgHbk8MmWwAAAA&amp;sa=X&amp;ved=2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQxA0wFnoECAMQCg"
                                                                                title="Johnson &amp; Johnson"
                                                                                data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQxA0wFnoECAMQCg">
                                                                                <div class="XQ6p1d" style="height:77px">
                                                                                    <g-img><img id="dimg_29"
                                                                                            src="ms_files/images.jpg"
                                                                                            class="rISBZc M4dUYb"
                                                                                            style="margin-top:31px"
                                                                                            alt="Johnson &amp; Johnson"
                                                                                            data-atf="4" width="77"
                                                                                            height="15"></g-img>
                                                                                </div>
                                                                                <div class="fl ellip oBrLN"
                                                                                    data-original-name="Johnson &amp; Johnson">
                                                                                    Johnson &amp; Johnson</div>
                                                                            </a></div>
                                                                        <div class="PZPZlf rhsg4 MRfBrb qCptjf kno-vrt-t"
                                                                            data-reltype="sideways" data-rentity=""
                                                                            style="width:77px"><a
                                                                                ref="https://www.google.com/search?client=firefox-b-d&amp;q=Netflix&amp;stick=H4sIAAAAAAAAAONgFuLQz9U3MCkuM1HiBLEMzYvS4rWEs5Ot9JPzc3Pz86yKM1NSyxMri1cxiqVZOefnFiTmVSrkF6Un5mUWJ5Zk5uctYmX3Sy1Jy8msAACSO2FWTwAAAA&amp;sa=X&amp;ved=2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQxA0wFnoECAMQDA"
                                                                                title="Netflix"
                                                                                data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQxA0wFnoECAMQDA">
                                                                                <div class="XQ6p1d">
                                                                                    <g-img><img id="dimg_37"
                                                                                            src="ms_files/images_009.png"
                                                                                            class="rISBZc M4dUYb"
                                                                                            alt="Netflix" data-atf="4"
                                                                                            width="77" height="77">
                                                                                    </g-img>
                                                                                </div>
                                                                                <div class="fl ellip oBrLN"
                                                                                    data-original-name="Netflix">Netflix
                                                                                </div>
                                                                            </a></div>
                                                                        <div class="PZPZlf rhsg4 MRfBrb qCptjf kno-vrt-t"
                                                                            data-reltype="sideways" data-rentity=""
                                                                            style="width:77px"><a
                                                                                ref="https://www.google.com/search?client=firefox-b-d&amp;q=Starbucks&amp;stick=H4sIAAAAAAAAAONgFuLQz9U3MCkuM1HiBLEMLZLji7SEs5Ot9JPzc3Pz86yKM1NSyxMri1cxiqVZOefnFiTmVSrkF6Un5mUWJ5Zk5uctYuUMLkksSipNzi4GAK6C1XdRAAAA&amp;sa=X&amp;ved=2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQxA0wFnoECAMQDg"
                                                                                title="Starbucks"
                                                                                data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQxA0wFnoECAMQDg">
                                                                                <div class="XQ6p1d" style="width:77px">
                                                                                    <g-img><img id="dimg_44"
                                                                                            src="ms_files/images_007.jpg"
                                                                                            class="rISBZc M4dUYb"
                                                                                            alt="Starbucks" data-atf="4"
                                                                                            width="76" height="77">
                                                                                    </g-img>
                                                                                </div>
                                                                                <div class="fl ellip oBrLN"
                                                                                    data-original-name="Starbucks">
                                                                                    Starbucks</div>
                                                                            </a></div>
                                                                        <div class="PZPZlf rhsg4 MRfBrb qCptjf kno-vrt-t"
                                                                            data-reltype="sideways" data-rentity=""
                                                                            style="width:77px"><a
                                                                                ref="https://www.google.com/search?client=firefox-b-d&amp;q=Procter+and+Gamble&amp;stick=H4sIAAAAAAAAAONgFuLQz9U3MCkuM1HiBLEMCyvTc7SEs5Ot9JPzc3Pz86yKM1NSyxMri1cxiqVZOefnFiTmVSrkF6Un5mUWJ5Zk5uctYhUKKMpPLkktUkjMS1FwT8xNykkFABOWF61aAAAA&amp;sa=X&amp;ved=2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQxA0wFnoECAMQEA"
                                                                                title="Procter &amp; Gamble"
                                                                                data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQxA0wFnoECAMQEA">
                                                                                <div class="XQ6p1d">
                                                                                    <g-img><img id="dimg_52"
                                                                                            src="ms_files/images_006.jpg"
                                                                                            class="rISBZc M4dUYb"
                                                                                            alt="Procter &amp; Gamble"
                                                                                            data-atf="4" width="77"
                                                                                            height="77"></g-img>
                                                                                </div>
                                                                                <div class="fl ellip oBrLN"
                                                                                    data-original-name="Procter &amp; Gamble">
                                                                                    Procter &amp; Gamble</div>
                                                                            </a></div>
                                                                    </div>
                                                                    <!--n-->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div style="clear:both"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="g mnr-c g-blk" data-hveid="CB0QAA"
                                                data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQ3mIoAHoECB0QAA">
                                                <div class="kp-blk Wnoohf OJXvsb">
                                                    <div class="xpdopen">
                                                        <div class="ifM9O">
                                                            <div>
                                                                <div class="NFQFxe yp1CPe mod"
                                                                    data-attrid="kc:/common:sideways" data-md="133"
                                                                    data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQkCkwF3oECAUQAA">
                                                                    <!--m-->
                                                                    <div class="sV2QOc Ss2Faf zbA8Me i8lZMc"
                                                                        aria-level="3" role="heading">
                                                                        <div class="PfS8Ld">
                                                                            <div class="VLkRKc">IT companies</div>
                                                                            <div class="hKuTtf"><a class="EbH0bb"
                                                                                    ref="https://www.google.com/search?client=firefox-b-d&amp;q=IT+companies&amp;stick=H4sIAAAAAAAAAONgFuLQz9U3MCkuM1GCs7SEs5Ot9JPzc3Pz86yKM1NSyxMri1cx8qVZeYYoAIULEvMyU4sXsfIgcwFN6pBHSwAAAA&amp;sa=X&amp;ved=2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQzTooADAXegQIBRAB"><span
                                                                                        class="rhsg3">View 15+
                                                                                        more</span><span
                                                                                        class="rhsl4">View
                                                                                        15+</span></a></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="zVvuGd MRfBrb ulRSHd"
                                                                        data-hveid="CAUQAg">
                                                                        <div class="PZPZlf MRfBrb qCptjf kno-vrt-t"
                                                                            data-reltype="sideways" data-rentity=""
                                                                            style="width:77px"><a
                                                                                ref="https://www.google.com/search?client=firefox-b-d&amp;q=HCL+Technologies&amp;stick=H4sIAAAAAAAAAONgFuLQz9U3MCkuM1HiBLHMLC3Sy7SEs5Ot9JPzc3Pz86yKM1NSyxMri1cx8qVZeYYoAIULEvMyU4sXsQp4OPsohKQmZ-Tl5-SnA4UAvbWCYFAAAAA&amp;sa=X&amp;ved=2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQxA0wF3oECAUQBA"
                                                                                title="HCL Technologies"
                                                                                data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQxA0wF3oECAUQBA">
                                                                                <div class="XQ6p1d" style="height:77px">
                                                                                    <g-img><img id="dimg_12"
                                                                                            src="ms_files/images_007.png"
                                                                                            class="rISBZc M4dUYb"
                                                                                            style="margin-top:32px"
                                                                                            alt="HCL Technologies"
                                                                                            data-atf="4" width="77"
                                                                                            height="13"></g-img>
                                                                                </div>
                                                                                <div class="fl ellip oBrLN"
                                                                                    data-original-name="HCL Technologies">
                                                                                    HCL Technologies</div>
                                                                            </a></div>
                                                                        <div class="PZPZlf MRfBrb qCptjf kno-vrt-t"
                                                                            data-reltype="sideways" data-rentity=""
                                                                            style="width:77px"><a
                                                                                ref="https://www.google.com/search?client=firefox-b-d&amp;q=Accenture&amp;stick=H4sIAAAAAAAAAONgFuLQz9U3MCkuM1HiBLEMiwqMkrWEs5Ot9JPzc3Pz86yKM1NSyxMri1cx8qVZeYYoAIULEvMyU4sXsXI6Jien5pWUFqUCAIyiIJxJAAAA&amp;sa=X&amp;ved=2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQxA0wF3oECAUQBg"
                                                                                title="Accenture"
                                                                                data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQxA0wF3oECAUQBg">
                                                                                <div class="XQ6p1d" style="height:77px">
                                                                                    <g-img><img id="dimg_19"
                                                                                            src="ms_files/images_011.png"
                                                                                            class="rISBZc M4dUYb"
                                                                                            style="margin-top:28px"
                                                                                            alt="Accenture" data-atf="4"
                                                                                            width="77" height="21">
                                                                                    </g-img>
                                                                                </div>
                                                                                <div class="fl ellip oBrLN"
                                                                                    data-original-name="Accenture">
                                                                                    Accenture</div>
                                                                            </a></div>
                                                                        <div class="PZPZlf MRfBrb qCptjf kno-vrt-t"
                                                                            data-reltype="sideways" data-rentity=""
                                                                            style="width:77px"><a
                                                                                ref="https://www.google.com/search?client=firefox-b-d&amp;q=Cognizant&amp;stick=H4sIAAAAAAAAAONgFuLQz9U3MCkuM1HiBLGMk9IsM7SEs5Ot9JPzc3Pz86yKM1NSyxMri1cx8qVZeYYoAIULEvMyU4sXsXI656fnZVYl5pUAAPKo9p1JAAAA&amp;sa=X&amp;ved=2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQxA0wF3oECAUQCA"
                                                                                title="Cognizant"
                                                                                data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQxA0wF3oECAUQCA">
                                                                                <div class="XQ6p1d" style="height:77px">
                                                                                    <g-img><img id="dimg_24"
                                                                                            src="ms_files/images_013.png"
                                                                                            class="rISBZc M4dUYb"
                                                                                            style="margin-top:30px"
                                                                                            alt="Cognizant" data-atf="4"
                                                                                            width="77" height="16">
                                                                                    </g-img>
                                                                                </div>
                                                                                <div class="fl ellip oBrLN"
                                                                                    data-original-name="Cognizant">
                                                                                    Cognizant</div>
                                                                            </a></div>
                                                                        <div class="PZPZlf rhsg3 MRfBrb qCptjf kno-vrt-t"
                                                                            data-reltype="sideways" data-rentity=""
                                                                            style="width:77px"><a
                                                                                ref="https://www.google.com/search?client=firefox-b-d&amp;q=Tata+Consultancy+Services&amp;stick=H4sIAAAAAAAAAONgFuLQz9U3MCkuM1HiBLEMC4orLLSEs5Ot9JPzc3Pz86yKM1NSyxMri1cx8qVZeYYoAIULEvMyU4sXsUqGJJYkKjjn5xWX5pQk5iVXKgSnFpVlJqcWAwDbsPX0WQAAAA&amp;sa=X&amp;ved=2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQxA0wF3oECAUQCg"
                                                                                title="Tata Consultancy Services"
                                                                                data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQxA0wF3oECAUQCg">
                                                                                <div class="XQ6p1d" style="height:77px">
                                                                                    <g-img><img id="dimg_32"
                                                                                            src="ms_files/images_008.png"
                                                                                            class="rISBZc M4dUYb"
                                                                                            style="margin-top:20px"
                                                                                            alt="Tata Consultancy Services"
                                                                                            data-atf="4" width="77"
                                                                                            height="36"></g-img>
                                                                                </div>
                                                                                <div class="fl ellip oBrLN"
                                                                                    data-original-name="Tata Consultancy Services">
                                                                                    Tata Consultancy Services</div>
                                                                            </a></div>
                                                                        <div class="PZPZlf rhsg4 MRfBrb qCptjf kno-vrt-t"
                                                                            data-reltype="sideways" data-rentity=""
                                                                            style="width:77px"><a
                                                                                ref="https://www.google.com/search?client=firefox-b-d&amp;q=Capgemini&amp;stick=H4sIAAAAAAAAAONgFuLQz9U3MCkuM1HiBLGMy3KyDbSEs5Ot9JPzc3Pz86yKM1NSyxMri1cx8qVZeYYoAIULEvMyU4sXsXI6Jxakp-Zm5mUCAK_5FTxJAAAA&amp;sa=X&amp;ved=2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQxA0wF3oECAUQDA"
                                                                                title="Capgemini"
                                                                                data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQxA0wF3oECAUQDA">
                                                                                <div class="XQ6p1d" style="height:77px">
                                                                                    <g-img><img id="dimg_39"
                                                                                            src="ms_files/images_005.jpg"
                                                                                            class="rISBZc M4dUYb"
                                                                                            style="margin-top:9px"
                                                                                            alt="Capgemini" data-atf="4"
                                                                                            width="77" height="58">
                                                                                    </g-img>
                                                                                </div>
                                                                                <div class="fl ellip oBrLN"
                                                                                    data-original-name="Capgemini">
                                                                                    Capgemini</div>
                                                                            </a></div>
                                                                        <div class="PZPZlf rhsg4 MRfBrb qCptjf kno-vrt-t"
                                                                            data-reltype="sideways" data-rentity=""
                                                                            style="width:77px"><a
                                                                                ref="https://www.google.com/search?client=firefox-b-d&amp;q=Oracle&amp;stick=H4sIAAAAAAAAAONgFuLQz9U3MCkuM1ECs0zzssq1hLOTrfST83Nz8_OsijNTUssTK4tXMfKlWXmGKACFCxLzMlOLF7Gy-RclJuekAgAMaVyWRQAAAA&amp;sa=X&amp;ved=2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQxA0wF3oECAUQDg"
                                                                                title="Oracle Corporation"
                                                                                data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQxA0wF3oECAUQDg">
                                                                                <div class="XQ6p1d" style="height:77px">
                                                                                    <g-img><img id="dimg_47"
                                                                                            src="ms_files/images_012.png"
                                                                                            class="rISBZc M4dUYb"
                                                                                            style="margin-top:24px"
                                                                                            alt="Oracle Corporation"
                                                                                            data-atf="4" width="77"
                                                                                            height="28"></g-img>
                                                                                </div>
                                                                                <div class="fl ellip oBrLN"
                                                                                    data-original-name="Oracle Corporation">
                                                                                    Oracle Corporation</div>
                                                                            </a></div>
                                                                        <div class="PZPZlf rhsg4 MRfBrb qCptjf kno-vrt-t"
                                                                            data-reltype="sideways" data-rentity=""
                                                                            style="width:77px"><a
                                                                                ref="https://www.google.com/search?client=firefox-b-d&amp;q=Wipro&amp;stick=H4sIAAAAAAAAAONgFuLQz9U3MCkuM1HiBLGMTAzjc7SEs5Ot9JPzc3Pz86yKM1NSyxMri1cx8qVZeYYoAIULEvMyU4sXsbKGZxYU5QMAKCxZPkUAAAA&amp;sa=X&amp;ved=2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQxA0wF3oECAUQEA"
                                                                                title="Wipro"
                                                                                data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQxA0wF3oECAUQEA">
                                                                                <div class="XQ6p1d" style="height:77px">
                                                                                    <g-img><img id="dimg_55"
                                                                                            src="ms_files/images_004.jpg"
                                                                                            class="rISBZc M4dUYb"
                                                                                            style="margin-top:13px"
                                                                                            alt="Wipro" data-atf="4"
                                                                                            width="77" height="51">
                                                                                    </g-img>
                                                                                </div>
                                                                                <div class="fl ellip oBrLN"
                                                                                    data-original-name="Wipro">Wipro
                                                                                </div>
                                                                            </a></div>
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
                                        <div id="brs" data-hveid="CCoQAA">
                                            <g-section-with-header style="margin-bottom:0">
                                                <div class="e2BEnf U7izfe">
                                                    <h3 class="med dPAwzb" style="text-align:left" aria-level="2"
                                                        role="heading">Searches related to microsoft online support</h3>
                                                </div>
                                                <div class="card-section">
                                                    <div class="brs_col">
                                                        <p class="nVcaUb"><a
                                                                ref="https://www.google.com/search?client=firefox-b-d&amp;q=microsoft+support+chat&amp;sa=X&amp;ved=2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQ1QIoAHoECCoQAQ"><span
                                                                    class="search-icon z1asCe MZy1Rb"
                                                                    style="height:20px;line-height:20px;width:20px"><svg
                                                                        focusable="false"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        viewBox="0 0 24 24">
                                                                        <path
                                                                            d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0 0 16 9.5 6.5 6.5 0 1 0 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z">
                                                                        </path>
                                                                    </svg></span>microsoft support <b>chat</b></a></p>
                                                        <p class="nVcaUb"><a
                                                                ref="https://www.google.com/search?client=firefox-b-d&amp;q=microsoft+office&amp;sa=X&amp;ved=2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQ1QIoAXoECCoQAg"><span
                                                                    class="search-icon z1asCe MZy1Rb"
                                                                    style="height:20px;line-height:20px;width:20px"><svg
                                                                        focusable="false"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        viewBox="0 0 24 24">
                                                                        <path
                                                                            d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0 0 16 9.5 6.5 6.5 0 1 0 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z">
                                                                        </path>
                                                                    </svg></span>microsoft <b>office</b></a></p>
                                                        <p class="nVcaUb"><a
                                                                ref="https://www.google.com/search?client=firefox-b-d&amp;q=microsoft+teams&amp;sa=X&amp;ved=2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQ1QIoAnoECCoQAw"><span
                                                                    class="search-icon z1asCe MZy1Rb"
                                                                    style="height:20px;line-height:20px;width:20px"><svg
                                                                        focusable="false"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        viewBox="0 0 24 24">
                                                                        <path
                                                                            d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0 0 16 9.5 6.5 6.5 0 1 0 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z">
                                                                        </path>
                                                                    </svg></span>microsoft <b>teams</b></a></p>
                                                        <p class="nVcaUb"><a
                                                                ref="https://www.google.com/search?client=firefox-b-d&amp;q=microsoft+login&amp;sa=X&amp;ved=2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQ1QIoA3oECCoQBA"><span
                                                                    class="search-icon z1asCe MZy1Rb"
                                                                    style="height:20px;line-height:20px;width:20px"><svg
                                                                        focusable="false"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        viewBox="0 0 24 24">
                                                                        <path
                                                                            d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0 0 16 9.5 6.5 6.5 0 1 0 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z">
                                                                        </path>
                                                                    </svg></span>microsoft <b>login</b></a></p>
                                                    </div>
                                                    <div class="brs_col">
                                                        <p class="nVcaUb"><a
                                                                ref="https://www.google.com/search?client=firefox-b-d&amp;q=microsoft+support+xbox&amp;sa=X&amp;ved=2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQ1QIoBHoECCoQBQ"><span
                                                                    class="search-icon z1asCe MZy1Rb"
                                                                    style="height:20px;line-height:20px;width:20px"><svg
                                                                        focusable="false"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        viewBox="0 0 24 24">
                                                                        <path
                                                                            d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0 0 16 9.5 6.5 6.5 0 1 0 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z">
                                                                        </path>
                                                                    </svg></span>microsoft support <b>xbox</b></a></p>
                                                        <p class="nVcaUb"><a
                                                                ref="https://www.google.com/search?client=firefox-b-d&amp;q=outlook+support&amp;sa=X&amp;ved=2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQ1QIoBXoECCoQBg"><span
                                                                    class="search-icon z1asCe MZy1Rb"
                                                                    style="height:20px;line-height:20px;width:20px"><svg
                                                                        focusable="false"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        viewBox="0 0 24 24">
                                                                        <path
                                                                            d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0 0 16 9.5 6.5 6.5 0 1 0 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z">
                                                                        </path>
                                                                    </svg></span><b>outlook</b> support</a></p>
                                                        <p class="nVcaUb"><a
                                                                ref="https://www.google.com/search?client=firefox-b-d&amp;q=microsoft+support+for+windows+10&amp;sa=X&amp;ved=2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQ1QIoBnoECCoQBw"><span
                                                                    class="search-icon z1asCe MZy1Rb"
                                                                    style="height:20px;line-height:20px;width:20px"><svg
                                                                        focusable="false"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        viewBox="0 0 24 24">
                                                                        <path
                                                                            d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0 0 16 9.5 6.5 6.5 0 1 0 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z">
                                                                        </path>
                                                                    </svg></span>microsoft support <b>for windows
                                                                    10</b></a></p>
                                                        <p class="nVcaUb"><a
                                                                ref="https://www.google.com/search?client=firefox-b-d&amp;q=onedrive+support&amp;sa=X&amp;ved=2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQ1QIoB3oECCoQCA"><span
                                                                    class="search-icon z1asCe MZy1Rb"
                                                                    style="height:20px;line-height:20px;width:20px"><svg
                                                                        focusable="false"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        viewBox="0 0 24 24">
                                                                        <path
                                                                            d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0 0 16 9.5 6.5 6.5 0 1 0 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z">
                                                                        </path>
                                                                    </svg></span><b>onedrive</b> support</a></p>
                                                    </div>
                                                </div>
                                            </g-section-with-header>
                                        </div>
                                        <div jscontroller="WgDvvc" jsdata="hE2vdf;;B2WCGw" jsaction="rcuQ6b:npT2md">
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
                                                                ref="https://www.google.com/search?q=microsoft+online+support&amp;client=firefox-b-d&amp;ei=EaPUXvTcMJW_8QP9_44g&amp;start=10&amp;sa=N&amp;ved=2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQ8tMDegQIJRAs"><span
                                                                    class="SJajHc NVbCr"
                                                                    style="background:url(/images/nav_logo299.webp) no-repeat;background-position:-74px 0;width:20px"></span>2</a>
                                                        </td>
                                                        <td><a aria-label="Page 3" class="fl"
                                                                ref="https://www.google.com/search?q=microsoft+online+support&amp;client=firefox-b-d&amp;ei=EaPUXvTcMJW_8QP9_44g&amp;start=20&amp;sa=N&amp;ved=2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQ8tMDegQIJRAu"><span
                                                                    class="SJajHc NVbCr"
                                                                    style="background:url(/images/nav_logo299.webp) no-repeat;background-position:-74px 0;width:20px"></span>3</a>
                                                        </td>
                                                        <td aria-level="3" class="b d6cvqb" role="heading"><a
                                                                class="G0iuSb"
                                                                ref="https://www.google.com/search?q=microsoft+online+support&amp;client=firefox-b-d&amp;ei=EaPUXvTcMJW_8QP9_44g&amp;start=10&amp;sa=N&amp;ved=2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQ8NMDegQIJRAw"
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
                    <style>
                    #rhs .rhsvw.liYKde {
                        border: 0;
                        padding-left: 0;
                        padding-right: 0
                    }

                    #center_col .liYKde {
                        width: 654px
                    }

                    .kp-wholepage.HSryR {
                        box-shadow: none;
                        line-height: 1.58
                    }

                    .I6TXqe {
                        border: 1px solid #dfe1e5;
                        border-radius: 8px;
                        box-shadow: none;
                        padding: 0 0 16px 0
                    }

                    #rhs .HSryR {
                        margin: 6px 0 0 1px
                    }

                    .SoydSe {
                        padding-bottom: 4px
                    }

                    .HSryR .Kot7x {
                        margin: 0
                    }

                    .HSryR .SoydSe {
                        overflow: visible
                    }

                    .K20DDe {
                        position: relative
                    }

                    #center_col .K20DDe.LtKgIf {
                        min-height: 88px
                    }

                    .K20DDe.LtKgIf.yoW7T {
                        align-items: center
                    }

                    .K20DDe.LtKgIf.yoW7T .DLKau {
                        padding-top: 8px
                    }

                    .a1vOw {
                        padding: 16px 0 0 0px
                    }

                    .SzZmKb .a1vOw {
                        padding-left: 16px
                    }

                    .BY2RHc {
                        padding-right: 24px
                    }

                    .HSryR .a1vOw.BY2RHc {
                        padding: 12px 0 12px 0
                    }

                    .glhbv {
                        height: 24px;
                        width: 24px;
                        cursor: pointer
                    }

                    g-raised-button .FEIHRe {
                        padding: 0
                    }

                    .pa8yL {
                        vertical-align: middle;
                        padding: 8px;
                        height: 24px;
                        width: 24px
                    }

                    .kno-ecr-pt {
                        color: rgba(0, 0, 0, .87);
                        line-height: 1.2;
                        margin-bottom: -3px;
                        overflow: hidden;
                        font-family: arial, sans-serif-light, sans-serif;
                        display: inline;
                        font-size: 30px;
                        font-weight: normal;
                        position: relative;
                        transform-origin: left top;
                        transform-origin: left top;
                        word-wrap: break-word
                    }

                    .Ftghae {
                        padding-left: 16px;
                        padding-right: 16px;
                        margin-top: 0
                    }

                    #rhs .Ftghae {
                        padding-left: 15px;
                        padding-right: 15px
                    }

                    .wwUB2c {
                        margin: 4px 0;
                        overflow: hidden;
                    }

                    .rhstc4 .o66ENe,
                    .rhstc5 .o66ENe,
                    .rhstc5 .CLchud {
                        position: absolute;
                        right: 0;
                        top: 0
                    }

                    .rsir2d {
                        float: right;
                        margin-bottom: -4px;
                        opacity: 0.54
                    }

                    .rsir2d {
                        color: #000
                    }

                    .wwUB2c {
                        color: #70757a;
                        font-family: arial, sans-serif;
                    }

                    .GqKvT .wwUB2c {
                        color: rgba(255, 255, 255, .7)
                    }

                    .rhstc3 .kno-ecr-pt.sKbx2c,
                    .rhstc3 .kno-ecr-pt.EaHP9c,
                    .rhstc4 .kno-ecr-pt.EaHP9c {
                        font-size: 24px;
                        line-height: 1.34
                    }

                    .rhs-osrp .cLjAic,
                    .Hwkikb {
                        border: 1px solid #dfe1e5;
                        border-radius: 8px;
                        box-shadow: none;
                        margin-top: 16px
                    }

                    .kp-wholepage-osrp .j6mBxc a,
                    .kp-wholepage-osrp .j6mBxc a:active,
                    .kp-wholepage-osrp .j6mBxc a:link,
                    .kp-wholepage-osrp .j6mBxc a:visited {
                        color: #757575;
                        text-decoration: underline
                    }

                    .UDZeY {
                        font-size: 14px
                    }

                    .vnLNtd.mnr-c.B03h3d,
                    .wXlZre.B03h3d {
                        margin-top: 0
                    }

                    .ss6qqb .ptcLIOszQJu__wholepage-card:not(.B03h3d) {
                        border-top: 1px solid rgba(0, 0, 0, .12)
                    }

                    .rhs-osrp .ptcLIOszQJu__wholepage-card:not(first-card).V14nKc {
                        border: none;
                        border-top: 1px solid rgba(0, 0, 0, .12);
                        border-radius: 0
                    }

                    .HSryR .mod:not(.NFQFxe) {
                        padding-left: 15px;
                        padding-right: 15px
                    }

                    .rhstc3 .hb8SAc {
                        overflow: visible
                    }

                    .hb8SAc {
                        overflow: hidden;
                        margin: 13px 0 13px;
                    }

                    .Jb0Zif .hb8SAc,
                    .rhs-osrp .hb8SAc {
                        line-height: 1.58
                    }

                    .hb8SAc {
                        color: #4d5156
                    }

                    .NJLBac {
                        white-space: nowrap
                    }

                    .zloOqf {
                        margin-top: 7px
                    }

                    .fm06If .GqKvT .kno-fv {
                        color: rgba(0, 0, 0, .87)
                    }

                    .w8qArf {
                        font-weight: bolder
                    }

                    .w8qArf .fl {
                        color: #222 !important
                    }

                    .GDRHkb {
                        padding-left: 16px
                    }

                    .r3IKmc {
                        color: #70757a
                    }

                    .qLYAZd {
                        margin-top: 24px
                    }

                    .mod.NFQFxe .qLYAZd {
                        margin-left: 16px;
                        margin-right: 16px
                    }

                    #rhs .mod.NFQFxe .qLYAZd {
                        margin-left: 15px;
                        margin-right: 15px
                    }

                    .OOijTb {
                        margin-top: 10px;
                        white-space: nowrap
                    }

                    .OOijTb .kno-vrt-t,
                    #rhs .OOijTb .kno-vrt-t {
                        display: inline-block;
                        line-height: 1.29;
                        overflow: hidden;
                        padding-left: 16px;
                        text-align: center;
                        text-overflow: ellipsis;
                        white-space: normal;
                        width: 72px
                    }

                    .OOijTb .kno-vrt-t:first-child,
                    #rhs .OOijTb .kno-vrt-t:first-child {
                        padding-left: 0
                    }

                    .Jb0Zif .OOijTb .kno-vrt-t,
                    .Jb0Zif #rhs .OOijTb .kno-vrt-t {
                        padding-left: 8px;
                        width: 84px
                    }

                    .Jb0Zif .OOijTb .kno-vrt-t:first-child,
                    .Jb0Zif #rhs .OOijTb .kno-vrt-t:first-child {
                        padding-left: 0
                    }

                    .Jb0Zif .OOijTb .kno-vrt-t .fl a {
                        color: rgba(0, 0, 0, .87);
                        font-size: 12px;
                        line-height: 1.34;
                        overflow: hidden;
                        text-overflow: ellipsis
                    }

                    .Rlm17c {
                        height: 32px;
                        margin: 0 auto 5px;
                        width: 32px
                    }

                    .CtCigf {
                        text-overflow: ellipsis;
                        overflow: hidden
                    }

                    #rhs:not(.rhs-osrp) .kno-vrt-t {
                        padding-left: 16px
                    }

                    #rhs:not(.rhs-osrp) .kno-vrt-t.MRfBrb.qCptjf {
                        padding-left: 12px
                    }

                    .kno-ftr.rpBMYb {
                        color: #70757a;
                        display: flex;
                        flex-wrap: wrap-reverse;
                        font-size: 12px;
                        line-height: 1.34;
                        margin-left: 0;
                        margin-right: 0;
                        padding: 4px 16px 0
                    }

                    .uquUgf {
                        flex: 1;
                        text-align: right
                    }

                    .Ui8XNb,
                    .uquUgf a {
                        color: inherit;
                        display: block
                    }
                    </style>
                    <div jscontroller="TxZWcc" class="rhscol col rhstc5" jsaction="rcuQ6b:npT2md"
                        jsdata="MdeVKb;;B2WCG0" id="rhs">
                        <h1 class="bNg8Rb">Complementary results</h1>
                        <script nonce="4X/xePeUOQ9joZlyG8qAWQ==">
                        (function() {
                            var c4 = 1261;
                            var c5 = 1349;
                            var no5 = false;
                            var no3 = false;
                            (function() {
                                var a = document.body.offsetWidth,
                                    b = no3 ? "rhstc4" : "rhstc3";
                                a >= c4 && (b = no5 || a < c5 ? "rhstc4" : "rhstc5");
                                document.getElementById("rhs").className += " " + b;
                            }).call(this);
                        })();
                        </script>
                        <div class="liYKde rhsvw g">
                            <div class="kp-wholepage kp-wholepage-osrp HSryR EyBRub" data-hveid="CBsQAA"
                                data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQ8esCKAB6BAgbEAA">
                                <div class="I6TXqe osrp-blk" data-att="1" id="wp-tabs-container" style="visibility:">
                                    <div jscontroller="EPszLb" jsmodel="ZDfS0b" jsdata="vST7rb;;B2WCGc zEIyGd;_;"
                                        jsaction="kPzEO:MlP2je;w8f1fc:hRwSgb;rcuQ6b:npT2md">
                                        <div jsname="GkjeIf" id="_EaPUXvTcMJW_8QP9_44g92" data-jiis="up"
                                            data-async-type="kp_feedback" class="y yp"
                                            data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQ68cEKAB6BAgbEAE"></div>
                                    </div>
                                    <div class="SzZmKb">
                                        <div class="K20DDe R9GLFb JXFbbc LtKgIf yoW7T a1vOw BY2RHc DLKau"
                                            data-hveid="CBsQAg"
                                            data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQxPoBKAF6BAgbEAI">
                                            <div class="NFQFxe Hhmu2e viOShc LKPcQc mod" data-md="16" style="clear:none"
                                                data-hveid="CBsQAw"
                                                data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQhygwGHoECBsQAw" lang="en-IN">
                                                <!--m-->
                                                <div class="Ftghae">
                                                    <div class="rsir2d">
                                                        <div class="hide-focus-ring" jscontroller="Xrogfe" data-ld="1"
                                                            role="button" tabindex="0" aria-label="Share"
                                                            jsdata="B34zmc;;B2WCGk" jsaction="KjsqPd"
                                                            data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQ-YABKAAwGHoECBsQBA">
                                                            <span class="glhbv hide-focus-ring FEIHRe"><span
                                                                    class="glhbv pa8yL z1asCe Fp7My"><svg
                                                                        focusable="false"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        viewBox="0 0 24 24">
                                                                        <path
                                                                            d="M18 16.08c-.76 0-1.44.3-1.96.77L8.91 12.7c.05-.23.09-.46.09-.7s-.04-.47-.09-.7l7.05-4.11c.54.5 1.25.81 2.04.81 1.66 0 3-1.34 3-3s-1.34-3-3-3-3 1.34-3 3c0 .24.04.47.09.7L8.04 9.81C7.5 9.31 6.79 9 6 9c-1.66 0-3 1.34-3 3s1.34 3 3 3c.79 0 1.5-.31 2.04-.81l7.12 4.16c-.05.21-.08.43-.08.65 0 1.61 1.31 2.92 2.92 2.92 1.61 0 2.92-1.31 2.92-2.92s-1.31-2.92-2.92-2.92z">
                                                                        </path>
                                                                    </svg></span></span>
                                                            <div jsname="Sx9Kwc" jscontroller="XEVFK"
                                                                jsaction="dg_dismissed:SlAvWb">
                                                                <g-dialog jsname="Sx9Kwc" jscontroller="GxIAgd"
                                                                    data-id="_EaPUXvTcMJW_8QP9_44g100"
                                                                    jsaction="jxvro:Imgh9b" jsdata="gctHtc;;B2WCGE"
                                                                    jsshadow=""
                                                                    data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQy4IEMBh6BAgbEAU">
                                                                    <div jsname="XKSfm" id="_EaPUXvTcMJW_8QP9_44g100"
                                                                        jsaction="dg_close:TvD9Pc;dBhwS:TvD9Pc;mLt3mc">
                                                                        <div jsname="bF1uUb" class="t7xA6 lxG8Hd"></div>
                                                                        <div class="bErdLd hFCnyd wwYr3">
                                                                            <div class="ls8Qne" aria-hidden="true"
                                                                                role="button" tabindex="0"
                                                                                jsaction="focus:sT2f3e"></div><span
                                                                                jsslot="">
                                                                                <div class="NJfJb Sr5CLc E1kGSe"
                                                                                    aria-label="Share" role="dialog">
                                                                                    <span jsname="tqp7ud"
                                                                                        class="lZC9wd hide-focus-ring z1asCe wuXmqc"
                                                                                        aria-label="Close" role="button"
                                                                                        tabindex="0"
                                                                                        jsaction="fire.dg_close"
                                                                                        data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQzIIEMBh6BAgbEAY"><svg
                                                                                            focusable="false"
                                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                                            viewBox="0 0 24 24">
                                                                                            <path
                                                                                                d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z">
                                                                                            </path>
                                                                                        </svg></span>
                                                                                    <div jsname="OGvssd" class="aNrSe">
                                                                                        Share</div>
                                                                                    <div jsname="Sy6N1c" class="Io6Xr">
                                                                                    </div>
                                                                                    <div jsname="b0t70b"
                                                                                        jscontroller="U0SiBc"><a
                                                                                            jsname="RgELLe"
                                                                                            class="DQc04b hide-focus-ring"
                                                                                            role="link" tabindex="0"
                                                                                            jsaction="rT2OA">
                                                                                            <div class="bQkCTc"><img
                                                                                                    class="fTE6nf"
                                                                                                    src="ms_files/fb_32x32.png"
                                                                                                    alt="Facebook">
                                                                                            </div>Facebook
                                                                                        </a><a jsname="P8lkFb"
                                                                                            class="DQc04b hide-focus-ring"
                                                                                            role="link" tabindex="0"
                                                                                            jsaction="re2RZb">
                                                                                            <div class="bQkCTc"><img
                                                                                                    class="fTE6nf"
                                                                                                    src="ms_files/twitter_32x32.png"
                                                                                                    alt="Twitter"></div>
                                                                                            Twitter
                                                                                        </a><a jsname="bVp1N"
                                                                                            class="DQc04b mBtcv hide-focus-ring"
                                                                                            role="link" tabindex="0"
                                                                                            jsaction="NmUBTc">
                                                                                            <div class="bQkCTc"><img
                                                                                                    class="fTE6nf"
                                                                                                    src="ms_files/email_grey600_24dp.png"
                                                                                                    alt="Email"></div>
                                                                                            <span
                                                                                                class="tW0dvd">Email</span>
                                                                                        </a>
                                                                                        <div jsname="GIN7Bd"
                                                                                            jscontroller="eJUPEd">
                                                                                            <div jsname="rTZwQe">
                                                                                                <div jsname="uu7Hed">
                                                                                                    <div class="ydMLRd HYsXi"
                                                                                                        role="button"
                                                                                                        tabindex="0"
                                                                                                        jsaction="ScPJh">
                                                                                                        Click to copy
                                                                                                        link</div>
                                                                                                </div>
                                                                                                <div jsname="axr9cd">
                                                                                                    <div class="ydMLRd">
                                                                                                        Share link</div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div jsname="pAZ6Ed"
                                                                                                class="ydMLRd"
                                                                                                aria-live="polite"
                                                                                                style="display:none">
                                                                                                Link copied</div>
                                                                                            <div class="HmofF">
                                                                                                <div jsaction="aiBUrb">
                                                                                                    <g-text-field
                                                                                                        jsname="zgnjS"
                                                                                                        style="margin:0px"
                                                                                                        jscontroller="XeLme"
                                                                                                        class="rysuG LXtP0 K56Jue"
                                                                                                        jsshadow=""
                                                                                                        jsaction="rcuQ6b:npT2md">
                                                                                                        <div
                                                                                                            class="kp85vc">
                                                                                                            <div><input
                                                                                                                    class="ZXb90b qKoqyc"
                                                                                                                    jsaction="focus:daRB0b;blur:kDTLMd"
                                                                                                                    aria-label="Share link"
                                                                                                                    readonly="readonly"
                                                                                                                    type="url">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div jsname="NowJzb"
                                                                                                            class="xqPsfb">
                                                                                                        </div>
                                                                                                    </g-text-field>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div jsname="tQ9n1c"
                                                                                                class="Cnzagc"
                                                                                                aria-hidden="true">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </span>
                                                                            <div class="ls8Qne" aria-hidden="true"
                                                                                role="button" tabindex="0"
                                                                                jsaction="focus:tuePCd"></div>
                                                                        </div>
                                                                    </div>
                                                                </g-dialog>
                                                            </div>
                                                            <div jsname="T83pAe" style="display:none"
                                                                id="_EaPUXvTcMJW_8QP9_44g103" data-jiis="up"
                                                                data-async-type="shush" class="y yp"></div>
                                                            <div jsname="PHQQPc" style="display:none"
                                                                data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQqfkDMBh6BAgbEAc">
                                                                <a jsname="NlZIeb"
                                                                    data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQrPkDMBh6BAgbEAg"></a><a
                                                                    jsname="Qoiwbb"
                                                                    data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQrvkDMBh6BAgbEAk"></a><a
                                                                    jsname="IyZ18e"
                                                                    data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQq_kDMBh6BAgbEAo"></a><a
                                                                    jsname="k3Pg4"
                                                                    data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQqvkDMBh6BAgbEAs"></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="SPZz6b">
                                                        <div class="kno-ecr-pt PZPZlf gsmt i8lZMc EaHP9c"
                                                            data-local-attribute="d3bn" data-attrid="title"
                                                            data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQ3B0oATAYegQIGxAM">
                                                            <span>Microsoft Corporation</span></div>
                                                        <div class="wwUB2c PZPZlf" data-attrid="subtitle"><span
                                                                data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQ2kooAjAYegQIGxAN">Technology
                                                                company</span></div>
                                                    </div>
                                                    <div class="ZHyHcb"></div>
                                                </div>
                                                <!--n-->
                                            </div>
                                        </div>
                                    </div>
                                    <div style="border-bottom:1px solid #EBEBEB"></div>
                                    <div class="mod" data-md="30" style="clear:none" data-hveid="CBAQAA"
                                        data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQ6-0CMBl6BAgQEAA" lang="en-IN">
                                        <!--m-->
                                        <!--n-->
                                    </div>
                                    <div class="Kot7x">
                                        <div id="kp-wp-tab-cont-overview" class="SoydSe" data-hveid="CBsQDw"
                                            data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQydoBKAB6BAgbEA8">
                                            <div id="kp-wp-tab-overview" data-hveid="CBsQEA"
                                                data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQkt4BKAB6BAgbEBA">
                                                <div class="cLjAic LMRCfc" data-hveid="CBsQEQ"
                                                    data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQ04gCKAB6BAgbEBE">
                                                    <h2 class="bNg8Rb">Description</h2>
                                                    <div class="LuVEUc B03h3d P6OZi V14nKc ptcLIOszQJu__wholepage-card wp-ms"
                                                        data-hveid="CBsQEg">
                                                        <div>
                                                            <div class="UDZeY OTFaAf">
                                                                <div class="mod" data-md="50" style="clear:none"
                                                                    data-hveid="CBUQAA"
                                                                    data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQkCkwGnoECBUQAA"
                                                                    lang="en-IN">
                                                                    <!--m-->
                                                                    <div class="PZPZlf hb8SAc" data-attrid="description"
                                                                        data-hveid="CBUQAQ"
                                                                        data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQziAoADAaegQIFRAB">
                                                                        <div jscontroller="DGEKAc"
                                                                            jsaction="desclink:c0XUbe;rcuQ6b:npT2md">
                                                                            <div jscontroller="DGEKAc" class="kno-rdesc"
                                                                                jsaction="sngtp:c0XUbe;tp_btn:c0XUbe;rcuQ6b:npT2md">
                                                                                <div>
                                                                                    <h2 class="bNg8Rb">Description</h2>
                                                                                    <span>Microsoft
                                                                                        Corporation is an American
                                                                                        multinational technology company
                                                                                        with
                                                                                        headquarters in Redmond,
                                                                                        Washington. It develops,
                                                                                        manufactures,
                                                                                        licenses, supports, and sells
                                                                                        computer software, consumer
                                                                                        electronics,
                                                                                        personal computers, and related
                                                                                        services.</span><span><span>
                                                                                        </span><a
                                                                                            class="q ruhjFe NJLBac fl"
                                                                                            ref="https://en.wikipedia.org/wiki/Microsoft"
                                                                                            data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQmhMwGnoECBUQAg"
                                                                                            onmousedown="return rwt(this,'','','','','AOvVaw0iAagMtn5pSQMjXg6mrnUG','','2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQmhMwGnoECBUQAg','','',event)">Wikipedia</a></span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!--n-->
                                                                </div>

                                                                    <!--n-->
                                                                </div>
                                                                <div class="mod"
                                                                    data-attrid="hw:/collection/employers:number of employees"
                                                                    data-md="1001" style="clear:none"
                                                                    data-hveid="CBgQAA"
                                                                    data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQkCkwHHoECBgQAA"
                                                                    lang="en-IN">
                                                                    <!--m-->
                                                                    <div class="Z1hOCe">
                                                                        <div class="zloOqf PZPZlf"
                                                                            data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQyxMoADAcegQIGBAB">
                                                                            <span class="w8qArf"><a class="fl"
                                                                                    ref="https://www.google.com/search?client=firefox-b-d&amp;q=microsoft+number+of+employees&amp;stick=H4sIAAAAAAAAAOPgE-LQz9U3MCkuM9HSySi30k_Oz8lJTS7JzM_TT80tyMmvTC0qtsorzU1KLVLIT1OAiqUWL2KVzc1MLsovzk8rUcAiDwAfW06xWgAAAA&amp;sa=X&amp;ved=2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQ6BMoADAcegQIGBAC"
                                                                                    data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQ6BMoADAcegQIGBAC">Number
                                                                                    of employees</a>: </span><span
                                                                                class="LrzXr kno-fv">1,51,163
                                                                                (2019)</span></div>
                                                                    </div>
                                                                    <!--n-->
                                                                </div>
                                                                <div class="mod"
                                                                    data-attrid="kc:/business/issuer:stock quote"
                                                                    data-md="1007" style="clear:none"
                                                                    data-hveid="CBoQAA"
                                                                    data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQkCkwHXoECBoQAA"
                                                                    lang="en-IN">
                                                                    <!--m-->
                                                                    <div class="Z1hOCe">
                                                                        <div class="zloOqf PZPZlf"
                                                                            style="white-space:nowrap"
                                                                            data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQsBUoADAdegQIGhAB">
                                                                            <span class="w8qArf"><a class="fl"
                                                                                    ref="https://www.google.com/search?client=firefox-b-d&amp;q=microsoft+stock+price&amp;stick=H4sIAAAAAAAAAONgecRoyi3w8sc9YSmdSWtOXmNU4-IKzsgvd80rySypFJLgYoOy-KR4uLj0c_UNzKty8uIteRaxiuZmJhflF-enlSgUl-QnZysUFGUmpwIAdGVspFIAAAA&amp;sa=X&amp;ved=2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQ6BMwHXoECBoQAg"
                                                                                    data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQ6BMwHXoECBoQAg">Stock
                                                                                    price</a>: </span><span
                                                                                class="kno-fv"><span
                                                                                    style="white-space:normal"><span
                                                                                        style="white-space:nowrap"><a
                                                                                            class="fl"
                                                                                            ref="https://www.google.com/search?client=firefox-b-d&amp;q=NASDAQ:+MSFT&amp;stick=H4sIAAAAAAAAAONgecRoyi3w8sc9YSmdSWtOXmNU4-IKzsgvd80rySypFJLgYoOy-KR4uLj0c_UNzKty8uIteRax8vg5Brs4Blop-Aa7hQAAJFwipEkAAAA&amp;sa=X&amp;ved=2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQsRUwHXoECBoQAw">MSFT</a>
                                                                                        <span
                                                                                            class="r3IKmc">(NASDAQ)</span></span><span
                                                                                        style="white-space:normal;letter-spacing:6px">
                                                                                    </span><span
                                                                                        style="white-space:nowrap"><span>US$183.25</span><span
                                                                                            style="letter-spacing:6px">
                                                                                        </span><span
                                                                                            style="color:#008000">+1.85
                                                                                            (+1.02%)</span></span></span><br><span
                                                                                    style="font-size:11px;padding-top:3px;color:#70757a">29
                                                                                    May, 4:00 pm GMT-4 - <a class="fl"
                                                                                        ref="https://www.google.com/intl/en-IN_IN/googlefinance/disclaimer/"
                                                                                        style="color:#70757a"
                                                                                        target="_blank">Disclaimer</a></span></span>
                                                                        </div>
                                                                    </div>
                                                                    <!--n-->
                                                                </div>
                                                                <div class="mod"
                                                                    data-attrid="kc:/organization/organization:headquarters"
                                                                    data-md="1001" style="clear:none"
                                                                    data-hveid="CBYQAA"
                                                                    data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQkCkwHnoECBYQAA"
                                                                    lang="en-IN">
                                                                    <!--m-->
                                                                    <div class="Z1hOCe">
                                                                        <div class="zloOqf PZPZlf"
                                                                            data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQyxMoADAeegQIFhAB">
                                                                            <span class="w8qArf"><a class="fl"
                                                                                    ref="https://www.google.com/search?client=firefox-b-d&amp;q=microsoft+headquarters&amp;stick=H4sIAAAAAAAAAOPgE-LQz9U3MCkuM9HSyk620s8vSk_My6xKLMnMz0PhWGWkJqYUliYWlaQWFS9iFcvNTC7KL85PK1FAlgAAsT9oLVEAAAA&amp;sa=X&amp;ved=2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQ6BMoADAeegQIFhAC"
                                                                                    data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQ6BMoADAeegQIFhAC">Headquarters</a>:
                                                                            </span><span class="LrzXr kno-fv"><a
                                                                                    class="fl"
                                                                                    ref="https://www.google.com/search?client=firefox-b-d&amp;q=Redmond,+Washington&amp;stick=H4sIAAAAAAAAAOPgE-LQz9U3MCkuM1ECs8xyzcu0tLKTrfTzi9IT8zKrEksy8_NQOFYZqYkphaWJRSWpRcWLWIWDUlNy8_NSdBTCE4szMvPSS_LzdrAyAgDgS8HDWwAAAA&amp;sa=X&amp;ved=2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQmxMoATAeegQIFhAD"
                                                                                    data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQmxMoATAeegQIFhAD">Redmond,
                                                                                    Washington, United States</a></span>
                                                                        </div>
                                                                    </div>
                                                                    <!--n-->
                                                                </div>
                                                                <div class="mod"
                                                                    data-attrid="kc:/organization/organization:ceo"
                                                                    data-md="1001" style="clear:none"
                                                                    data-hveid="CBMQAA"
                                                                    data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQkCkwH3oECBMQAA"
                                                                    lang="en-IN">
                                                                    <!--m-->
                                                                    <div class="Z1hOCe">
                                                                        <div class="zloOqf PZPZlf"
                                                                            data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQyxMoADAfegQIExAB">
                                                                            <span class="w8qArf"><a class="fl"
                                                                                    ref="https://www.google.com/search?client=firefox-b-d&amp;q=microsoft+ceo&amp;stick=H4sIAAAAAAAAAOPgE-LQz9U3MCkuM9FSzE620s8vSk_My6xKLMnMz0PhWCWn5i9i5c3NTC7KL85PK1EA8gFwVSadPwAAAA&amp;sa=X&amp;ved=2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQ6BMoADAfegQIExAC"
                                                                                    data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQ6BMoADAfegQIExAC">CEO</a>:
                                                                            </span><span class="LrzXr kno-fv"><a
                                                                                    class="fl"
                                                                                    ref="https://www.google.com/search?client=firefox-b-d&amp;q=Satya+Nadella&amp;stick=H4sIAAAAAAAAAOPgE-LQz9U3MCkuM1HiArEKTQwqsrK0FLOTrfTzi9IT8zKrEksy8_NQOFbJqfmLWHmDE0sqExX8ElNSc3ISd7AyAgDbNuWBTgAAAA&amp;sa=X&amp;ved=2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQmxMoATAfegQIExAD"
                                                                                    data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQmxMoATAfegQIExAD">Satya
                                                                                    Nadella</a> (4 Feb 2014–)</span>
                                                                        </div>
                                                                    </div>
                                                                    <!--n-->
                                                                </div>
                                                                <div class="mod"
                                                                    data-attrid="kc:/organization/organization:founded"
                                                                    data-md="1001" style="clear:none"
                                                                    data-hveid="CBEQAA"
                                                                    data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQkCkwIHoECBEQAA"
                                                                    lang="en-IN">
                                                                    <!--m-->
                                                                    <div class="Z1hOCe">
                                                                        <div class="zloOqf PZPZlf"
                                                                            data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQyxMoADAgegQIERAB">
                                                                            <span class="w8qArf"><a class="fl"
                                                                                    ref="https://www.google.com/search?client=firefox-b-d&amp;q=microsoft+founded&amp;stick=H4sIAAAAAAAAAOPgE-LQz9U3MCkuM9FSzU620s8vSk_My6xKLMnMz0PhWKXll-alpKYsYhXMzUwuyi_OTytRgIoBABH7ibVHAAAA&amp;sa=X&amp;ved=2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQ6BMoADAgegQIERAC"
                                                                                    data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQ6BMoADAgegQIERAC">Founded</a>:
                                                                            </span><span class="LrzXr kno-fv">4 April
                                                                                1975, <a class="fl"
                                                                                    ref="https://www.google.com/search?client=firefox-b-d&amp;q=Albuquerque&amp;stick=H4sIAAAAAAAAAOPgE-LQz9U3MCkuM1ECs1KyUoy1VLOTrfTzi9IT8zKrEksy8_NQOFZp-aV5Kakpi1i5HXOSSgtLU4uAeAcrIwAxJtmrTgAAAA&amp;sa=X&amp;ved=2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQmxMoATAgegQIERAD"
                                                                                    data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQmxMoATAgegQIERAD">Albuquerque,
                                                                                    New Mexico, United States</a></span>
                                                                        </div>
                                                                    </div>
                                                                    <!--n-->
                                                                </div>
                                                                <div class="mod"
                                                                    data-attrid="kc:/business/business_operation:founder"
                                                                    data-md="1001" style="clear:none"
                                                                    data-hveid="CBIQAA"
                                                                    data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQkCkwIXoECBIQAA"
                                                                    lang="en-IN">
                                                                    <!--m-->
                                                                    <div class="Z1hOCe">
                                                                        <div class="zloOqf PZPZlf"
                                                                            data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQyxMoADAhegQIEhAB">
                                                                            <span class="w8qArf"><a class="fl"
                                                                                    ref="https://www.google.com/search?client=firefox-b-d&amp;q=microsoft+founders&amp;stick=H4sIAAAAAAAAAOPgE-LQz9U3MCkuM9FSz0620k8qLc7MSy0uhjPi8wtSixJLMvPzrNLyS_NSUosWsQrlZiYX5Rfnp5UoQMWKAfre8mFKAAAA&amp;sa=X&amp;ved=2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQ6BMoADAhegQIEhAC"
                                                                                    data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQ6BMoADAhegQIEhAC">Founders</a>:
                                                                            </span><span class="LrzXr kno-fv"><a
                                                                                    class="fl"
                                                                                    ref="https://www.google.com/search?client=firefox-b-d&amp;q=Bill+Gates&amp;stick=H4sIAAAAAAAAAOPgE-LQz9U3MCkuM1ECswzN80q01LOTrfSTSosz81KLi-GM-PyC1KLEksz8PKu0_NK8lNSiRaxcTpk5OQruiSWpxTtYGQGivp01TwAAAA&amp;sa=X&amp;ved=2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQmxMoATAhegQIEhAD"
                                                                                    data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQmxMoATAhegQIEhAD">Bill
                                                                                    Gates</a>, <a class="fl"
                                                                                    ref="https://www.google.com/search?client=firefox-b-d&amp;q=Paul+Allen&amp;stick=H4sIAAAAAAAAAOPgE-LQz9U3MCkuM1ECs0xLsnO11LOTrfSTSosz81KLi-GM-PyC1KLEksz8PKu0_NK8lNSiRaxcAYmlOQqOOTmpeTtYGQH7IMYNTwAAAA&amp;sa=X&amp;ved=2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQmxMoAjAhegQIEhAE"
                                                                                    data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQmxMoAjAhegQIEhAE">Paul
                                                                                    Allen</a></span></div>
                                                                    </div>
                                                                    <!--n-->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="cLjAic" data-hveid="CBsQEw"
                                                    data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQy9oBKAF6BAgbEBM">
                                                    <div class="LuVEUc XleQBd CGCvRb B03h3d P6OZi V14nKc ptcLIOszQJu__wholepage-card wp-ms"
                                                        data-hveid="CBsQFA">
                                                        <div>
                                                            <div class="UDZeY OTFaAf">
                                                                <div class="mod"
                                                                    data-attrid="kc:/common/topic:social media presence"
                                                                    data-md="70" data-hveid="CBQQAA"
                                                                    data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQkCkwInoECBQQAA"
                                                                    lang="en-IN">
                                                                    <!--m-->
                                                                    <div class="Ss2Faf zbA8Me i8lZMc qLYAZd"
                                                                        aria-level="3" role="heading">Profiles</div>
                                                                    <div class="OOijTb">
                                                                        <div class="PZPZlf kno-vrt-t"
                                                                            data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQ_TAoADAiegQIFBAC">
                                                                            <div>
                                                                                <g-link class="fl"><a
                                                                                        ref="https://www.linkedin.com/company/microsoft"
                                                                                        onmousedown="return rwt(this,'','','','','AOvVaw3NjB8e6CWa8eeFnfO_k3Hq','','2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQ9zAwInoECBQQAw','','',event)">
                                                                                        <div>
                                                                                            <g-img class="Rlm17c BA0A6c"
                                                                                                style="height:32px;width:32px;background-color:#fff">
                                                                                                <img id="dimg_63"
                                                                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAACtklEQVR4AeyVA5AkQRREZ862bTMcZ9u2wzrbtm3bWNvmaW3b3rzKRa+NOWVEDoqvqv//LZPtUpoubC2cLIxKMveyku1UmkYAG2EoyFYESFEgQIos346dX7K7YiFyN8iFB17Sxx4NRxzVdcbYO6aotke5cgB42sFXDGDjF4FM+UbGY+5TK9FXKQBKOKTtjNz68CMAdQ+oVjyAXPicoRtyS8M5GA0PqRGwgm9gxxdMf2SBkNhEZCoxORXbVH9CXllBWHOvCla9sQNPbegRit3qDmhyWL1SYkCKA7kIxvoH1MBrr5KZllJ/IWnK3zskZ/SXEIDB1vm0trAO6K5ndNCYN5DRz9tgWxdhfnc8pQ2madXdSmDb7CeWWPfOHite22LoDWMegiDFj4GJ983hFBLD9IOPcEB0AjZ8+S6daIeaAwJFG/v8ouJh4ROB3uf1sFHpB34GRSMmMRlJKalISE5hLEHJIRCjbptAXlyAmY8tEZ2QjOzaK4qSbHs6AItTdhHwvpU3N0ZB+hYQhcGXDTi//AFSUtNPW5SY3lX3KJc7gKSwuESYeIXByDMM4XFJyC1bv0i0PKbJoCx/ALewWMwSwccApZe9skFwTAKyiXEjPYZyBziq48zUlVK09j4VvLL3Q3ZFxCdh/D0z7lG+AHFJKVj03DrHwhxHqOzimjMeWZQ/QKQ42ZQH5jkW5u896o7IJmYJa0T5A/BqJ+S6Wv7eqebwH+A/QOUBTMwHYFdpAaY9tACrVqyYECPMOr9d1UF6Gx7QcgLb2McxfCOOu2uaB2CLyk/EJ6WPo4PEmtOLqgOsZK2Pa4IDSUvPeWKFXud1pRre94Ie5jy1kvqnC+AWxzTYn2Odnud0MSdjDM0i1ObXOvDVBQjNEFciMJrhKHJwH5FmDgIPfNds4DuniO75P3r6HNY9BwATNI1Cu+uNpgAAAABJRU5ErkJggg=="
                                                                                                    class="rISBZc M4dUYb"
                                                                                                    alt="" data-atf="4"
                                                                                                    width="32"
                                                                                                    height="32"></g-img>
                                                                                        </div>
                                                                                        <div class="CtCigf">LinkedIn
                                                                                        </div>
                                                                                    </a></g-link>
                                                                            </div>
                                                                        </div>
                                                                        <div class="PZPZlf kno-vrt-t"
                                                                            data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQ_TAoATAiegQIFBAE">
                                                                            <div>
                                                                                <g-link class="fl"><a
                                                                                        ref="https://twitter.com/Microsoft"
                                                                                        onmousedown="return rwt(this,'','','','','AOvVaw0rkq3Xd-i4dQ3-z2SpZCgC','','2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQ9zAwInoECBQQBQ','','',event)">
                                                                                        <div>
                                                                                            <g-img class="Rlm17c BA0A6c"
                                                                                                style="height:32px;width:32px;background-color:#fff">
                                                                                                <img id="dimg_65"
                                                                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAIAAAD8GO2jAAABZUlEQVR4AWLQWfWQpmjUAjxo1IJRC2wBpJTDQkVRFIafKBujZrnGjbNd84wHiJNs27btrm3rrFbW1T73m20u/yMsW0cBg6zue5XCYLFQcC41JK0I3PsYaWvC+BkugYFljrbmWPp/H/86FOnhB2hGZbTg/dBhFoEBhsoEAO23Su9+5s/9nA0R/ANtXEgNJTtiAgObfB28gZaKt8Wen2ZarhRgjVL8nagGmetC+IFMb5lgqOtOZAtsLVgjcIhFZqD+RLYj0IFzGCwUcRctc7XgNNcyA7GBhAW+EWvnHK3XCjqDhg3OUpvAEegFTgAdA+nrwnuF4zCw7DSlwqOPscRxUAmtiYqY5NDXImz/6mPprlAP1sDgcjdFLokdCkPGW6Kstmbhtoim2IWNsRsvFXNsjURvBmvgiMROc11S0+BhVvmhFAUDhewrISgbg4/qlyUdeEnl+sBk7SOgfcBSb3jWaKMWjFoAABKespvtvzYlAAAAAElFTkSuQmCC"
                                                                                                    class="rISBZc M4dUYb"
                                                                                                    alt="" data-atf="4"
                                                                                                    width="32"
                                                                                                    height="32"></g-img>
                                                                                        </div>
                                                                                        <div class="CtCigf">Twitter
                                                                                        </div>
                                                                                    </a></g-link>
                                                                            </div>
                                                                        </div>
                                                                        <div class="PZPZlf kno-vrt-t"
                                                                            data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQ_TAoAjAiegQIFBAG">
                                                                            <div>
                                                                                <g-link class="fl"><a
                                                                                        ref="http://instagram.com/microsoft"
                                                                                        onmousedown="return rwt(this,'','','','','AOvVaw3jB3bJh_6MM9US4mDNdmJf','','2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQ9zAwInoECBQQBw','','',event)">
                                                                                        <div>
                                                                                            <g-img class="Rlm17c BA0A6c"
                                                                                                style="height:32px;width:32px;background-color:#fff">
                                                                                                <img id="dimg_67"
                                                                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAKS0lEQVR4AZ2UA5RkS7ZA94mIq8ys6mrb7v7PGNu2bdu2bdvssZ9trme03V1VWZWZFxFxfv5a41n6s8/al2EJ/Ccve8P566a78YSF6+Ys745PLW2bbA42LSQQbFQVNWJjUKIniRZRkOiNiSImqiRirdZ+YLNkl4HbxvdOTnSS7CbgGv4N+ehTLuFvjK+IW6/faT/nPfeAlEG3ouUcje9jYsAhmCgkUTExIgquAadgQ8QEcDFim4ioINFgsbRahlgGMPGizfdY9Lx/boh892XXAXCl7HzktVeNbUvzhCJTUtNgQwQFh5JKQNQgPpLEgFOQCDYG0iCYAAaP/duIeMBHiIpEwUQIA5jqKusfMu/RwDYA5yf7zH90cuyN781/PtI2jJg+Ogg4DSQGRJXqkKc3WSJ1iYlg1cw0wkbFhIBvFIvBxohDEAxZO6G9IEfEEGsQY7GFkAw8+3974OcP/uwxJwOXyWl/uCn/9Zf3f/32K6onLVlt0SZgRUmc4eitk8TxktX/M8qCFW06bcElCUbMTMUOj0TFqMEOVQ/BN9TdQG97j0PXjlNkKWOrRmh8RFWwScLE7QNGThz95aanLHqm23fN3gf0dvQetXA0IeuVGCAxhv0X72PtsW0e99W7svm+K/hvuO203Zz72gvoXrmPuWvm4xUolblzDH7X4CGDm/v3czecOXVHM9C8VUSSKpJnjn0X7+Buj1rGc37yYAAgcPC6w/T2l2it4BUNEdUIgBGLNYKkik0c2dI28zbOZc19lrHmisfxu8f9il0/3c2c1YsI2oATTO2d3xmOcWHCLO/EmrSJpAambhxn6yljw8ofBMBl37mCC999KdWeAdIEbIyYqFgEiFgiZiaY0TrLtJ+goMOdv/FQNjxzCw/6yUP55ak/oHfJEVorRolRQRWO9DuOXjdr2QTnA84Gku44937ZKYBw3U+v4cdP/wlLs7nMX9TG/q1Ca3ABpO8BJckcKgbjoTrSZ+2jTqTf7/OHZ30Vlz+fNU/cxJZXHsuFT/kTrilQI2hUqJrcdZw2sazIBOrD0yxb3+aYJ20C4OJPnMuqZJQFK1uEqiRxFlMr5a79VLEkT9uICr2mpDAZTTQseuQW7vTzRwIgD6y47IU/Hzbgzax98mZufsNF6KEedl5OJGLKsnCZjbVvarJUaCammbd+HohhfPshwnVHmTs/w1Q9cmvx3S6DQ/tYfq8trHzBnRk5dhFGDUev2c/Or1zIntPOJx5dxN9ouZSJyUl6uyZoLx+jWJHT232IRHMQkEHpXBJrmTlMiORNn86oAFDvmyQru2QjYzgnMDVNPHSAO33pCax8/j35Z0a2LGDlE47llq8ew1XP+wbnn/ppGG3TO2M3Hdei2tWdaUA6x9GnxEpFULBk0RUmaDQlmUSiluS5AEAIZFRktsGqoXdwByd+7okzlQcN3Pbh3zLx6+sRNcx+2DGsfsP9WffcO2Gk4prnfolRVtGZPUZvfAppIgBpKlgaTPQYFYxRnKNBhuYEIn0y6wGQGEkZvict/I7DrHjAZla++AEAXPGgD3DkjxdTsAgQDp5/PhNnXMdJf3w1a55zTw7/+EqqP+1EbENCjcQAgBWPxWOQmXuiDSbVmlRKclvTTnokpgRAYiA3FWk6IKkPsfRxJwBw2yd/SvePp7FwzQY6a0fprB5l6bL1HP3TWWz/2O8BWPKYU/B0MRpQPBoDAKIRS42RCoOCCqZIBhRuQD40G5raGgBBaaU9cp2imG/pnLwGgMGZFzO7NYrJexgzjWOAcQ2jtOmddiUA7TsuJ0lybF1hqCAoAFbAILgQMTSoqXFJUmKykiz12KJPkg0AcK4mb0+RFQWmPQAbAXC2gqzEpCUIIA3ESGoHWAYAiAacGb7TwhEQUQCiRoSAAVwMmOjFZEmlrbSkyIe2+qRZBYDYSNoevo9WuGYf1XXXATB6r+PR8ZvJWgFXeGyrweUVMewY/tsKQP+i25CqiysEQwPmbyPQYKhBAkbBKZhWVtFKB2T50GKKNK0BkBTSTp+kKMnnw9QffwnAwpc+i/aT701z8R/h4PVDb6Z/7WmM3e8uLHndEwA4+tMzyQC1FZaAEQHAEf/6HlCJKKjLskpdMY0rFNupsGkJgE2EZNSTtAZkmxZRXX4a4z/6NrOf8HRWfPuLTNzlJMozLiB6YezOz2H+K54NwK7PbyP8+RyKNZvwZYUxATEAEBUEjxARiagEXDLTgAFpITDaYG2Xv41AMlLjWh4c5BsWM/WZN2ELx+jDn8zcF78Ihv4zB765jalXfIjOyqWEVDF1RG2DJgaAWFUIAVGPiGBiFDcccrGFx+UR02mwOgmAzJ6NG1Nc0UddgnRaJK0l9D/xcspzfkv7QU8lXb0OwVLefBPj3/0p1a/OZmTLWnxeoN0S1JAUgls0C4A4MY3BAQGDRQji0lk+Gh1giwQ3p4XWB1AgW7iWZPkCzMHtyLx10NRI0cHO20q98zy6H/oLks9Fa0PYNwlmhNadNxBLh+kNkJEO5d49ZGtX0Fq7kAaIu46QpCmqEQmKyRNvJPdl0VayvCFZ1Eamb2Fw2S8xQPG41+D9Lky5AzOimKLBtAPpptWkJ2wkWTmbdPkYxYnrybYsQ/IKSRvIa8LeG6m6tzL/DU8BGJ6OZw0bvp1kLEeiMhNOS2dmtyuJ+3GZhdyQaoG/4MvoSY9g5PhHYF7xU8JZn0F7ByAGCAGpA6YUtInERpCBQB/ilCP2UqgK7JIlLHv/25j7hHvRAAc+8UtyCsSB8QExlqTtKhfNYMJkBjsimBTMnA1w8Bp6215K61GfpX38Y4j/5+GboXeI2FSY4JGgRB/RoBANUQVCgpJgZi8gXb8BEYjAbY9/J3rh1aRrjiNUHoxDiUQ1U7L3L194ZHbVth+mWmbMakPqsNYQjt4AS48hvdNrSRbfAeH/hwLTZ1/A/jd/gfqC20g3HUPVd0Sf4AcJTXRh7DEnPEV2XXNOkl79na+OHLny6TpvBSYJqLOYNIPpXcRQI3M3Q3sRalsIDhOE6APa+KEKZYAKfKnEbo0emqJ/2z4GF92OjbOIi9fgJxJ8PwEpmN4xgTlu/e9XvOCBz5D9X7ySsOHCjbMObLsycXmunTHUKeIcuASLEMtx1E+hIYKfkVh7pFRi3xMHDaHXQFfxk4HQBa1nEdwCwnRCM2Hw/QzftAlHIoPJmlXvecEdgYscwxd7yYk3Du42/Zjk6AW/NXlAkwKxBdFCNALFUmQmgBARHyB4qCK2CpiywfRqdNpjpiN+WglHFR0XmiqimUOqiJ0c0J/wdJ5x78cfvvm6iwDsM1fdhf7RQ/SuaN3cvv/yHzrbbCLL1pgsw1mBNAFrcFYxBowoGMVqRPCICUio/2oDTY0MamK/JDQRug1EhzYpfZ9dyF23PNT3B6cPZShy6SM/xr+z9eNz15h49BjaYwu08R2QZUI6V4lNDF5M8GgIaipvY+2T0NRo6SX2gml6lQ3TTWbLfNztnTw0befvqa+fODDIxq4Cruff+F/YMSYOvVvlzAAAAABJRU5ErkJggg=="
                                                                                                    class="rISBZc M4dUYb"
                                                                                                    alt="" data-atf="4"
                                                                                                    width="32"
                                                                                                    height="32"></g-img>
                                                                                        </div>
                                                                                        <div class="CtCigf">Instagram
                                                                                        </div>
                                                                                    </a></g-link>
                                                                            </div>
                                                                        </div>
                                                                        <div class="PZPZlf rhsg3 kno-vrt-t"
                                                                            data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQ_TAoAzAiegQIFBAI">
                                                                            <div>
                                                                                <g-link class="fl"><a
                                                                                        ref="https://www.pinterest.com/microsoft"
                                                                                        onmousedown="return rwt(this,'','','','','AOvVaw3vs2iBGD1kgVdjESZMLOUw','','2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQ9zAwInoECBQQCQ','','',event)">
                                                                                        <div>
                                                                                            <g-img class="Rlm17c BA0A6c"
                                                                                                style="height:32px;width:32px;background-color:#fff">
                                                                                                <img id="dimg_69"
                                                                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAEG0lEQVR4Aa1XA5AkSxCd0LeNs23btm3btm3bto21bdu28/rFRfd29+bw9kWMarLS+apa8/abMga9Atft/Nt71rIDLv3Heto26ZJu9n+9wvc/VyK88B1r+A8ykDVUr16BgFVbO7v0G+Pz4fdqJPw26AVZ7MFekx0I2rz3F7dhU6zf/1QRSk16Ya/b0Mk20GWMA4i6o3X9DllQUhov6GKywTvgt3TjKLMy9QuxsTRf0AndOh2Al2b/1S00JsUf/6lNb78ta5A8dKszIa/5b9b12utMu3XddiTIUbKFLeUnp5CIovx8yvD2p/Bj58mx6xCdTgg2smGrhANoFh3po+ird6iosJAMARy0rtNWqxOwpXAATffuxwqssF2LnpQTFUNqZIeEU4q1PaXYOFBubDypkZ+aTgIvsDphC6WQHMDMcoJWNVtRXnwCiSjMyqaQPUfJonLTErK2zbpTzM0HJEdBZhbZt+3LOiHY9IVtMNy/HMmgsRCdFHFoONk06KC30TwnzaeiggISkRUQDLZkyQq2NaBOtk7DpyoisWnc2eCRC9q6n+TwXbyOlYNtpN+b+zPu0QsSEbRln7T+8e+aFHX5FmUFhRIak2PK979WUfRFuqsn6wBsa3CIcE1SkJ5BADrfvGwD6b/4x69IDq8pC1nlURdukISiIuLKDNsas3/rlCAejJDkvbu3fIZJBaSbdcB/2UaSAxyiloFtDZdC+9a9SUTCi3fSuvvomaSG17RFrAM+81aSHHbNe7BMqkG9pEUm0lQHl2IHRs0gNaxqtGQdCFizneTA6LIOWFRsXFCiB34o7oHC7Bz68FvVzzVr2pXkyPTx1zoJkeeuKaYIfcWWQBivDEaBglR85q6UuAFkJCLs8GnWOOTAlCKS3pmzcmhCaQwZCpa4H2yINZtGnUgGjBGr2LnXSJIB8659DL1nLj2iLY0he48RkOHp+7mx5qwgOezb9GHrirkXkZeULJWQJaLA9Tv/ZwTEVIIupVGLvnaX5Ajdf0Ih//GvGhT/6CXJIQTI6oZNUDEOI74MzAvngRogJiEIoR/OqE9NMCb26TqMpOO4q6JLmZdllWbKM9/MmhhIF5TgHYfo3ffldR3HXdUXEjtdDniMm11c18QkghLMek5ktGI96tItHM06gxFs2bJXMpuGHTO1bYo4cZFExN59rPhP4BLUnzfIX8n+YC+lQkRNtV1K05zcSASmgZMx9VKqePkv3zTAvHxDNTtinKSTzbJq81K/liszsXpbG/UNGXQKJL41M9o40o7IjX00+8F95HRzcTpy4+IJcOo+zGDD2Gv0oxnzmNbCZeB4t6zgsPT4p695Y8yNCHMujtoXPR2LLyH4r4M27dngOmiCi22TLhnmFRoVwBCiRHNhzaX/WC/vWcsOGfN4/gl8Iq6odnlDmAAAAABJRU5ErkJggg=="
                                                                                                    class="rISBZc M4dUYb"
                                                                                                    alt="" data-atf="4"
                                                                                                    width="32"
                                                                                                    height="32"></g-img>
                                                                                        </div>
                                                                                        <div class="CtCigf">Pinterest
                                                                                        </div>
                                                                                    </a></g-link>
                                                                            </div>
                                                                        </div>
                                                                        <div class="PZPZlf rhsg4 kno-vrt-t"
                                                                            data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQ_TAoBDAiegQIFBAK">
                                                                            <div>
                                                                                <g-link class="fl"><a
                                                                                        ref="https://www.facebook.com/Microsoft"
                                                                                        onmousedown="return rwt(this,'','','','','AOvVaw0ZZJjPcxiuv9eIYNi8GaB0','','2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQ9zAwInoECBQQCw','','',event)">
                                                                                        <div>
                                                                                            <g-img class="Rlm17c BA0A6c"
                                                                                                style="height:32px;width:32px;background-color:#fff">
                                                                                                <img id="dimg_71"
                                                                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAIAAAD8GO2jAAAA1UlEQVR4AWOwDp9LUzTELRi1wDdtaf+8w9sPXDtx7h4Q7Tt2c92OS9SxwCZibtesg0+fv3756i0aoo4FkxcdgxhHEwtiite8ePmGhhas3HIB2cRL1x5t3HV5xebzEEQFC67efAI3/cDxW7aR86icip6/QIRP9+xD1E+myOHTPv3AqAVA1DJ1/76jN+EI2YKLVx8hS+0+cgMY5yRbMHfVKbBxhNGFqw+B6mloweY9V2hrAbAIIceCugl7gE6DI2QTT124jyyVXrNxEKaiUQtGLRi1YNQCAMs01I34bbYCAAAAAElFTkSuQmCC"
                                                                                                    class="rISBZc M4dUYb"
                                                                                                    alt="" data-atf="4"
                                                                                                    width="32"
                                                                                                    height="32"></g-img>
                                                                                        </div>
                                                                                        <div class="CtCigf">Facebook
                                                                                        </div>
                                                                                    </a></g-link>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!--n-->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="cLjAic" data-hveid="CBsQFQ"
                                                    data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQy9oBKAJ6BAgbEBU">
                                                    <div class="LuVEUc XleQBd CGCvRb B03h3d P6OZi V14nKc ptcLIOszQJu__wholepage-card wp-ms"
                                                        data-hveid="CBsQFg">
                                                        <div>
                                                            <div class="UDZeY OTFaAf">
                                                                <div class="NFQFxe mod"
                                                                    data-attrid="kc:/common:sideways" data-md="13"
                                                                    data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQkCkwI3oECBcQAA"
                                                                    lang="en-IN">
                                                                    <!--m-->
                                                                    <div class="Ss2Faf zbA8Me i8lZMc qLYAZd"
                                                                        aria-level="3" role="heading">
                                                                        <div class="PfS8Ld">
                                                                            <div class="VLkRKc"><a
                                                                                    ref="https://www.google.com/search?client=firefox-b-d&amp;q=Microsoft&amp;stick=H4sIAAAAAAAAAONgFuLQz9U3MCkuM1GCs7SEs5Ot9JPzc3Pz86yKM1NSyxMrixexcvpmJhflF-enlQAAytcdoDcAAAA&amp;sa=X&amp;ved=2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQMSgAMCN6BAgXEAE"
                                                                                    data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQMSgAMCN6BAgXEAE">People
                                                                                    also search for</a></div>
                                                                            <div class="hKuTtf"><a class="EbH0bb"
                                                                                    ref="https://www.google.com/search?client=firefox-b-d&amp;q=Microsoft&amp;stick=H4sIAAAAAAAAAONgFuLQz9U3MCkuM1GCs7SEs5Ot9JPzc3Pz86yKM1NSyxMrixexcvpmJhflF-enlQAAytcdoDcAAAA&amp;sa=X&amp;ved=2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQzTooATAjegQIFxAC"><span
                                                                                        class="rhsg3">View 15+
                                                                                        more</span><span
                                                                                        class="rhsl4">View
                                                                                        15+</span></a></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="zVvuGd MRfBrb" data-hveid="CBcQAw">
                                                                        <div class="PZPZlf MRfBrb qCptjf kno-vrt-t"
                                                                            data-reltype="sideways" data-rentity=""
                                                                            style="width:77px"><a
                                                                                ref="https://www.google.com/search?client=firefox-b-d&amp;q=Apple&amp;stick=H4sIAAAAAAAAAONgFuLQz9U3MCkuM1FiB7GyLaq0-Jzzc3Pz84IzU1LLEyuLF7GyOhYU5KQCAGxGpxUtAAAA&amp;sa=X&amp;ved=2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQxA0wI3oECBcQBQ"
                                                                                title="Apple"
                                                                                data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQxA0wI3oECBcQBQ">
                                                                                <div class="XQ6p1d">
                                                                                    <g-img><img id="dimg_73"
                                                                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAE0AAABNCAMAAADU1xmCAAAAUVBMVEX///9mZmZgYGBjY2NbW1tYWFiampr4+Pj09PTq6uqtra3k5ORpaWm6urqSkpLMzMx2dnZwcHCLi4ulpaWAgIDCwsLe3t6zs7NTU1PW1tZISEh9BsfbAAACMUlEQVRYhd2Y23KEIAyGBQKKq6ILnvr+D1qxavcgWaPctLlkhm8CSX4SkuQfmS6rwkRidQ5AQBxaWknBGIMxBkwXnHmTtwiwGxczjA0RYJlYYKKOQGsWGOP9dZjiC4wN6WVYJ1cYV9ddq9dzMnndtdvmmoyQuna9NYhwzi2g/B4BlgyLZ1Fg2UwTMo8Bm2iCg7zHqE9v90q1+vx2PZrWdO+ppU1pre0Nwc1OFRK8cVc+eJQa1Uxr3kAWqjvEGmu5ag8TXNb9D3CsOGzrPlmkO+Cgkg9bFmBubPGyPMf4k5pkNX/d5IGws/o5/zZJPGjgMFpBg+F16/YPhJj4CqZhKz9vf3HNZSFYSoch57TUc4INw8iuoWLXk0OAvRA1MTugRWCaeFBRILCkBRoNf/IV8doAVRBHLSr0lS5oLIHWOzXbRIXRMiINb27+Ey1uFBhaCglZw9HspRY9Xll3Ig2v+pysvJgiGaKGTIbQqPr2IeXIrjFZhmlUgfO48NWduDgW7oTTgU6bHvtQ50DNuNmEtPsifOaok/GAc+QcmWGh9oHciHgbQtWvT8QB0bkTcUAmTHp1oUpSUW8OHX7JrwP+m9HTci4Y0MVIgh7MtdU0wTlczGcjtPlHvqcO6xwgYkm+uoOfGdnOtPW+cvgzQz9t9vNk0xTwNOsyjvYhz9418Iuq83EaplLt5/ANKNFm8NUsgJhI4PrHuN3yn8EeOPYy77lXVk6Z9wlPG6tUe/2f64/bN9ghGHwe5sCWAAAAAElFTkSuQmCC"
                                                                                            class="rISBZc M4dUYb"
                                                                                            alt="Apple" data-atf="4"
                                                                                            width="77" height="77">
                                                                                    </g-img>
                                                                                </div>
                                                                                <div class="fl ellip oBrLN"
                                                                                    data-original-name="Apple">Apple
                                                                                </div>
                                                                            </a></div>
                                                                        <div class="PZPZlf MRfBrb qCptjf kno-vrt-t"
                                                                            data-reltype="sideways" data-rentity=""
                                                                            style="width:77px"><a
                                                                                ref="https://www.google.com/search?client=firefox-b-d&amp;q=Alphabet+Inc.&amp;stick=H4sIAAAAAAAAAONgFuLQz9U3MCkuM1Hi1U_XNzRMKk9OMzU0LNbic87Pzc3PC85MSS1PrCxexMrrmFOQkZiUWqLgmZesBwB0YgamOwAAAA&amp;sa=X&amp;ved=2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQxA0wI3oECBcQBw"
                                                                                title="Alphabet Inc."
                                                                                data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQxA0wI3oECBcQBw">
                                                                                <div class="XQ6p1d" style="height:77px">
                                                                                    <g-img><img id="dimg_75"
                                                                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEsAAAASCAMAAAAkEdPnAAAAaVBMVEX////sAADrAAD83t/1kpXzeXz95+j+8PH//PzuLTT+9/fxXmL2oaPwS0/uJi7zb3P6zc7sAAj3ra7sABD2m53vOT/xWl70g4b71db0io3tGSLvMjnvPUPwUlftEBv5wMLvQ0nyaWz4trjWIBEYAAAB3UlEQVQ4jc2Ty5akIAyGSVQQRBTvZWmhvv9DTgAtZ7r6nFn0LObfyAnJZ24wRsoNOP9lKSTsFoeMfZWA6sP2hxy0Q2ThX1n4HUvo+joWtgL+E1aC6TummrD7CYtDd540OibnizVqlRlZce8x8sH02t/UA9kSz8p4YeQoQjq7lPtEYVVbjo/AknNOlOlkme0JVYk2YdwWsO0AlH+DsA9IkxEw2LnqURJsAigKoERmnC2+PGrC0VecnaxnmMMEkvEWGsaUAca6RZFPuxLLkjdrYGVqNpS86kHcNY5hEdaXOllWxHJr0T796RGayOs6z0AJCDa2o3DYMKXyAw+WQOx9Ps8paYUjsmR5jqYTsfeayhclIoIkFsZ5HFinrYWgx5t1QDRRAZE1fMMykCbcbZ41XqwHdE1Q/WYNmChSXtCKhRp9sb7b7mZNMZvd17jFxiAnj/d+RZaw8ZL+1EUW+umq1yvnX1gOPMvPg+bV0xiW3FM3TqzTs4ksio6spy11aumF3ixGa6J36H2NC+569CtDqb9SvWJBPj3sVHuxiDPRUSba+H5NG0BPD4z3Yf8aMvLVgnGdVMJoJwHW8D7cAjCH/iXDbC7OrdzPkfMPu/jNdF9znl9xHxEn6x/pP2H9AkmJGkr2RflRAAAAAElFTkSuQmCC"
                                                                                            class="rISBZc M4dUYb"
                                                                                            style="margin-top:29px"
                                                                                            alt="Alphabet Inc."
                                                                                            data-atf="4" width="77"
                                                                                            height="18"></g-img>
                                                                                </div>
                                                                                <div class="fl ellip oBrLN"
                                                                                    data-original-name="Alphabet Inc.">
                                                                                    Alphabet Inc.</div>
                                                                            </a></div>
                                                                        <div class="PZPZlf MRfBrb qCptjf kno-vrt-t"
                                                                            data-reltype="sideways" data-rentity=""
                                                                            style="width:77px"><a
                                                                                ref="https://www.google.com/search?client=firefox-b-d&amp;q=IBM&amp;stick=H4sIAAAAAAAAAONgFuLQz9U3MCkuM1ECs4yLky20-Jzzc3Pz84IzU1LLEyuLF7Eyezr5AgC6z0BGLAAAAA&amp;sa=X&amp;ved=2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQxA0wI3oECBcQCQ"
                                                                                title="IBM"
                                                                                data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQxA0wI3oECBcQCQ">
                                                                                <div class="XQ6p1d" style="height:77px">
                                                                                    <g-img><img id="dimg_77"
                                                                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAE4AAAAfCAMAAAB+pgt9AAAAY1BMVEX///8AY70AY7w7fcby9foAZL0fcMGlvuGIqdja5PLC0urZ4/Jlk88AYbwAXrt8odQAV7kAWrrM2u6yxuTo7vcPa79ajcwAVLhOh8p1nNIyecRDgcfh6PS6zehsl9CswuOTsdvLHZa7AAABwElEQVRIia2W65qCIBCGx0OSIR4QrVyt7v8qVwaRgax93Mf3T82BiT4OA2QekYKq813Z8JgA6V2ku4PlSfJvcPKoFdzLU4BoOqkH3gRJTG25LFqdUQKpD4QOg9IDg8SFbe9BJB6ZgvOQbPED8KCRbJmJl11A7HHV2sVb1BJ+aKRhWO1SE59IIPfgACrfhKcweo4Ryyn+7jsYViDOwXtt9yMxCvPnpDE0rW+ydXRVRjPClZO1dtTcyNNoY9GqRQPpQG9Fa5WVm8wFceVS4zCLpzYMzTR7Jmfyo7QKac+Ic4zVOaBatpkkkQoYyWjX0R+0IzQv+8uonRhQLlbGWsMu9rW7MMSVUyxgspHc2JLE5BM/iPTHsn924Kb3BBbMbrd215TbjPIFIth3u1d2ttaAgnBlD2b3qSAHYr6nw1Ox+8zO1yIMWrJY94xQu7cbJf/jRun17NCrBQ9vlAMZuUc636/bKJqKMtovJAkSEXSEz73isUa0djDVcYkCiWjNgsLvZPxLJ3MR08aGZMB2TrKO1u5/rwA7NiwBSUSfI418f6NE9o3yWCOoHUCN7lm7NRdu3mvpJL+8oFwkMuWWrUYG/AKOFitCXRYR4gAAAABJRU5ErkJggg=="
                                                                                            class="rISBZc M4dUYb"
                                                                                            style="margin-top:23px"
                                                                                            alt="IBM" data-atf="4"
                                                                                            width="77" height="31">
                                                                                    </g-img>
                                                                                </div>
                                                                                <div class="fl ellip oBrLN"
                                                                                    data-original-name="IBM">IBM</div>
                                                                            </a></div>
                                                                        <div class="PZPZlf rhsg3 MRfBrb qCptjf kno-vrt-t"
                                                                            data-reltype="sideways" data-rentity=""
                                                                            style="width:77px"><a
                                                                                ref="https://www.google.com/search?client=firefox-b-d&amp;q=Visa+Inc&amp;stick=H4sIAAAAAAAAAONgFuLQz9U3MCkuM1HiBLEMswuz8rT4nPNzc_PzgjNTUssTK4sXsXKEZRYnKnjmJQMAI-5ErTIAAAA&amp;sa=X&amp;ved=2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQxA0wI3oECBcQCw"
                                                                                title="Visa"
                                                                                data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQxA0wI3oECBcQCw">
                                                                                <div class="XQ6p1d" style="height:77px">
                                                                                    <g-img><img id="dimg_79"
                                                                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAE0AAAAZCAMAAABDyFNjAAAAmVBMVEX///8AV58AVp8AUJwAU50ATpsATJqdsc8ARZcAR5j6phoASpkAQ5eUqMn80qD6owDX3+tDcqz09/rm6/IAT6aputSywdn6nAAAPZTP2OdVfbKDncP/qgBujrvBzeAlYqRjh7f8zpX+69b94MD7vGgAN5I5bKnovIn+9uzd6PcqU4vroCzFkFCwiGB6lsDTlkV2bnbjsndtboHXte72AAACy0lEQVQ4jWVV2aKjIAxltVqwdalt7aJ27jJ7Z/n/jxsSCODcvIgYDsk5SWSPx47sEyPr6g1Ywxgu6j7s98O9ncXcPo9d9G0G9A1vL6+n0x7ttCOPwUop9blj3dkt5Js/21ysVkJwoaTR5FqfNbic+wi/2++3YHvaeFecc3lnbDQcDDc3VnEytVAW1m+YiSX7jHCnLyGhEhxKl+ig4ejFg/FksqbQdNi4Zmhfv32/udheMhc1u9VVkmfvwXRlS2ukOYaDFK5qMzQmDz9u2/3Dvwj4XgxudQFvDUfvEhMCQbqxhrjBJhPQRJGjPeXh523/iuuxgs8GLwFgM7qVgZXesLW1SDDy0mfbx4I7uC2uMQz5BI6RQNsR28W0BsP05RP8i2O2D96HX16GijRgDUaponaC9ys0wBFFV9Ht0WZXRwJlcGE6Vt9ZXLaJbmHr/FDpYdzZcIAM1JO/H8SFFw3F9bduAt/aJO6wfqrRU1PmaKjO4U/gwmvAFkXiuoqWpB5vUj4ueYcKKVRNhobEqL8unlhijPEoKcDFarB+B7WHOm5MujQYJujkQwSLbCO9YQ15lxSe7WLkWBk2NGIyjMmMKGOobC+pTPE/Q6um8vGemPKco2HcesBeCj08JXWD9a2MlY/X+wrEQ7bL4aDa1SLgGp2Fuy4kTwgK6HGFdubHyJj7YU8qbKAwEJCY/7oJSxDQqEWFEMLXzspx0DRviPdZUNZ1zAJvAI7aNO3CGFlytKak7QvlHtv5rVyO8BwXvFLXrLExMgpOrJKgy2iO+qEJddxXXBU42dBHVB22qLuYjH+Q4R7gVHhHZlD4OMZCuU2hFGP9I5trGTzBaUpvcARDUdY6A5PlFJpJcDqKaciVDP0Z1Nbx93M37mdUAfb1XEj4W3ElC3uHhISmb95K925WMrAaLfbbBl8xmW6ql3bm8+Xq/6T9Fb+laed9/wFN5SeM6EcG3QAAAABJRU5ErkJggg=="
                                                                                            class="rISBZc M4dUYb"
                                                                                            style="margin-top:26px"
                                                                                            alt="Visa" data-atf="4"
                                                                                            width="77" height="25">
                                                                                    </g-img>
                                                                                </div>
                                                                                <div class="fl ellip oBrLN"
                                                                                    data-original-name="Visa">Visa</div>
                                                                            </a></div>
                                                                        <div class="PZPZlf rhsg4 MRfBrb qCptjf kno-vrt-t"
                                                                            data-reltype="sideways" data-rentity=""
                                                                            style="width:77px"><a
                                                                                ref="https://www.google.com/search?client=firefox-b-d&amp;q=Zoom+Video+Communications&amp;stick=H4sIAAAAAAAAAONgFuLQz9U3MCkuM1HiBrEMDZMtck3StPic83Nz8_OCM1NSyxMrixexSkbl5-cqhAH5-QogudK8zOTEksz8vGIAaUTmZUUAAAA&amp;sa=X&amp;ved=2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQxA0wI3oECBcQDQ"
                                                                                title="Zoom Video Communications"
                                                                                data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQxA0wI3oECBcQDQ">
                                                                                <div class="XQ6p1d">
                                                                                    <g-img><img id="dimg_81"
                                                                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAE0AAABNCAMAAADU1xmCAAAAZlBMVEUtjP////8Agv8oiv8ch/8Shf/z+P9MmP8Af/8yjv/v9f/7/f+lx//4+//p8f9+sv+50/9sqP+z0P/e6v8AfP/G2v86kf+ew/9opf/Z5/9Rm/+Ftv8AeP9zq/9AlP+/1/9doP/O4P9UdsY1AAABVUlEQVRYhe2TYXPCIAyGeSFBWihVa1td59T//ycX1M3b9mH40bs8H3KQ455LCBijKIqiKIqivDjuzm3zyH4tfub/kzX3BRnH1BBfkxLZmXvGyZLrfHbAlTizWXu0iZyh/RDjsGHTbgf4xKcuHt6oqrbNkHMWZcstkIGBaAG8BxbuJA10iLJb1bVqrX1PcnrEyMEckBxwDOEIfHTod+RxsLsZJ67SSbdb4GzhuVwj2gXJSnLG7H0wvMVCpkG2T8h4hUs5zzkmHMsE9lj71hpK6F29rcj2ZAitLYODXzCXmZbavm1TpU06iefAHC7YBssSjZQawjli1T1rc72M8TSOYzIR3SEiO6kKWaY7c/R3m6vt9CPeHhyOzSi+tXTLvbhyz01MbNy51MaXtsrmmtWNyXEz3R490TSxPNeJrgfKd6GpRvb4qGWOvz6k+xMVRVEURVGUF+YT3/YON/a7/6AAAAAASUVORK5CYII="
                                                                                            class="rISBZc M4dUYb"
                                                                                            alt="Zoom Video Communications"
                                                                                            data-atf="4" width="77"
                                                                                            height="77"></g-img>
                                                                                </div>
                                                                                <div class="fl ellip oBrLN"
                                                                                    data-original-name="Zoom Video Communications">
                                                                                    Zoom Video Communications</div>
                                                                            </a></div>
                                                                    </div>
                                                                    <!--n-->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div jscontroller="ZvxbPe" class="YB4h9 ky4hfd"
                                        jsaction="kPzEO:MlP2je;w8f1fc:hRwSgb"
                                        data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQlokGKAN6BAgbEBc"><span
                                            class="Job8vb z1asCe wuXmqc" role="button" tabindex="0" jsaction="kEOk4d"
                                            style="height:20px;line-height:20px;width:20px"
                                            data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQmIkGegQIGxAY"><svg
                                                focusable="false" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 24 24">
                                                <path
                                                    d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z">
                                                </path>
                                            </svg></span>
                                        <div class="C85rO">Click on the error</div>
                                        <div class="Gtr0ne">No errors? <a ref="#" jsaction="fT3Ybb"
                                                data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQl4kGegQIGxAZ">Give general
                                                feedback</a>.</div>
                                    </div>
                                </div>
                                <div class="rpBMYb kno-ftr">
                                    <div class="uquUgf NhRr3b hide-focus-ring" jscontroller="bfCVtd"
                                        jsdata="vST7rb;;B2WCG4" role="button" tabindex="0" jsaction="i5KCU"
                                        data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQ6scEKAR6BAgbEBo">Feedback</div>
                                </div>
                            </div>
                        </div><span class="rhstc3 rhstc4 rhstc5" style="display:none"></span>
                    </div>
                    <div style="clear:both"></div>
                </div>
                <div id="bfoot"><span style="display:none"><span jscontroller="NBZ7u" style="display:none" data-du="1"
                            data-lhe="1" data-lve="1" jsaction="rcuQ6b:npT2md"
                            data-ei="EaPUXvTcMJW_8QP9_44g"></span></span></div>
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
            <div id="footcnt" data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQpyp6BAglEDM">
                <h1 class="bNg8Rb">Footer links</h1>
                <div>
                    <div id="fbarcnt" style="position: relative; visibility: visible; height: auto;">
                        <div id="fbar" class="mSAqxd" style="left:0;right:0">
                            <div class="fbar b2hzT">
                                
                            </div>
                            <div class="fbar"><span class="B4GxFc"><span id="fsl"><a class="Fx4vi"
                                            ref="https://support.google.com/websearch/?p=ws_results_help&amp;hl=en-IN&amp;fg=1"
                                            onmousedown="return rwt(this,'','','','','AOvVaw1pMqL4P-c2v-w7aJ4SNns7','','2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQ8KwCegQIJRA2','','',event)">Help</a><a
                                            ref="#" class="Fx4vi" data-bucket="websearch" id="dk2qOd" target="_blank"
                                            jsaction="gf.sf" data-ved="2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQLnoECCUQNw">Send
                                            feedback</a><a class="Fx4vi" ref="https://policies.google.com/privacy?fg=1"
                                            onmousedown="return rwt(this,'','','','','AOvVaw12z8DS9cd-g0Aokit_wxri','','2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQ8awCegQIJRA4','','',event)">Privacy</a><a
                                            class="Fx4vi" ref="https://policies.google.com/terms?fg=1"
                                            onmousedown="return rwt(this,'','','','','AOvVaw3sEM_N0elgYQx8WbCXpj3n','','2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQ8qwCegQIJRA5','','',event)">Terms</a></span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- cctlcm 5 cctlcm -->
            <script nonce="4X/xePeUOQ9joZlyG8qAWQ==">
            (function() {
                function k() {
                    return window.performance && window.performance.navigation && window.performance.navigation.type
                };

                function m(a, b, c) {
                    return !a || !b && p(a) ? 0 : a.getBoundingClientRect ? q(a, b, c, function(e) {
                        return e.getBoundingClientRect()
                    }) : 1
                }

                function p(a) {
                    return "none" == a.style.display ? !0 : document.defaultView && document.defaultView
                        .getComputedStyle ? (a = document.defaultView.getComputedStyle(a), !!a && ("hidden" == a
                            .visibility || "0px" == a.height && "0px" == a.width)) : !1
                }

                function q(a, b, c, e) {
                    var d = e(a),
                        f = d.left + window.pageXOffset,
                        n = d.top + window.pageYOffset,
                        h = d.width,
                        l = d.height,
                        g = 0;
                    if (!b && 0 >= l && 0 >= h) return g;
                    0 > n + l ? g = 2 : n >= (window.innerHeight || document.documentElement.clientHeight) && (g =
                        4);
                    if (0 > f + h || f >= (window.innerWidth || document.documentElement.clientWidth)) g |= 8;
                    else if (c) {
                        for (b = d.left; a && a != c; a = a.parentElement) b += a.scrollLeft;
                        c = e(c);
                        if (b + h < c.left || b >= c.right) g |= 8
                    }
                    return g || 1
                };
                var r, t = ["aft", "hct", "prt", "pprt", "sct"];

                function u(a) {
                    return google.c.slp ? a in google.c.p ? google.c.p[a] : -1 : (a = v.search.match(new RegExp(
                        "[?&]" + a + "=(\\d+)"))) ? Number(a[1]) : -1
                }

                function w(a) {
                    r.removeEventListener("click", w);
                    a.stopPropagation && a.stopPropagation()
                }
                var v = location;
                var x = 0,
                    y = 0,
                    z = 0,
                    A = 0,
                    B = 0,
                    C, D;

                function E(a, b, c, e) {
                    var d = google.timers.load.t[a];
                    d && (c || e && b && b < d) || google.tick("load", a, b)
                }

                function F(a, b) {
                    b = b || google.time();
                    E("aft", b, !1, !0);
                    ++B;
                    G();
                    H(a, b)
                }

                function H(a, b) {
                    a = b || google.time();
                    E("iml", a, !1, !0);
                    ++y;
                    I()
                }

                function I() {
                    D || y != x || google.c.u("il")
                }

                function G() {
                    if (!C && B == z) {
                        var a = "&ima=" + z + "&imad=" + A;
                        google.timers.load.e.imn && (a += "&imn=" + google.timers.load.e.imn);
                        var b = google.timers.load.m;
                        if (!b || !b.prs) {
                            var c = google.timers.load,
                                e = google.c.inp && k() ? 0 : u("qsubts");
                            0 < e && (b = u("fbts"), 0 < b && (c.t.start = Math.max(e, b)));
                            var d = c.t,
                                f = d.start;
                            b = {
                                wsrt: c.wsrt
                            };
                            for (var n = 0, h; h = t[n++];) {
                                var l = d[h];
                                l && f && (b[h] = l - f)
                            }
                            0 < e && (b.gsasrt = c.t.start - e);
                            c = "/gen_204?s=" + google.sn + "&t=aft&atyp=csi&ei=" + google.kEI + "&rt=";
                            e = "";
                            for (var g in b) c += e + g + "." + b[g], e = ",";
                            google.cshid &&
                                (c += "&cshid=" + google.cshid);
                            2 == k() && (c += "&bb=1");
                            1 == k() && (c += "&r=1");
                            "gsasrt" in b && (g = u("qsd"), 0 < g && (c += "&qsd=" + g));
                            google.kBL && (c += "&bl=" + google.kBL);
                            a = c + (a || "");
                            (r = document.getElementById("csi-ping")) ? (r.addEventListener("click", w), r
                                .setAttribute("ping", a), r.click()) : navigator.sendBeacon ? navigator.sendBeacon(
                                a, "") : google.log("", "", a)
                        }
                    }
                }
                var J = "src bsrc url ll image img-url".split(" ");

                function K(a) {
                    var b = "string" != typeof a.src || !a.src,
                        c = !!a.getAttribute("data-bsrc"),
                        e = a.getAttribute("data-deferred"),
                        d;
                    if (d = !e) a: {
                        d = 0;
                        for (var f; f = J[d++];)
                            if (a.getAttribute("data-" + f)) {
                                d = !0;
                                break a
                            } d = !1
                    }
                    d && a.setAttribute("data-lzy_", 1);
                    b = (d = (b || a.complete) && !e && !c) && !google.c.lhc && Number(a.getAttribute(
                        "data-iml")) || 0;
                    for (f = a; f && "center_col" != f.id && "rhscol" != f.id;) f = f.parentElement;
                    c = m(a, c, f);
                    a.setAttribute("data-atf", c);
                    ++x;
                    d && !b || a.hasAttribute("data-noaft") ? ++y : (d = (c = 1 == c) ? F : H, c && (++z, e && ++A),
                        b ? d(void 0, b) : google.rll(a, !0, d))
                };
                (function() {
                    var a = google.time();
                    if (google.timers && google.timers.load.t) {
                        var b = !google.c.setup;
                        b && (D = C = !0, google.c.b("il"));
                        for (var c = document.getElementsByTagName("img"), e = 0, d = void 0; d = c[e++];) b ?
                            K(d) : d.hasAttribute("data-atf") || google.c.setup(d);
                        E("prt", a);
                        E("aft", a, !0);
                        E("iml", a, !0);
                        google.c.e("load", "imn", String(b ? x : c.length));
                        b ? (C && (C = !1, G()), D = !1, I()) : google.c.ub();
                        google.c.glu && google.c.glu();
                        google.rll(window, !1, function() {
                            E("ol", void 0);
                            google.c.u("pr")
                        })
                    }
                })();
            }).call(this);
            </script>
            <script nonce="4X/xePeUOQ9joZlyG8qAWQ==">
            (function() {
                for (var i in google.iir || {}) {
                    _setImagesSrc([i], google.iir[i]);
                }
                google.iir = {};
            })();

            function _setImagesSrc(e, c) {
                function f(b) {
                    b.onerror = function() {
                        b.style.display = "none"
                    };
                    b.src = c
                }
                for (var g = 0, a = void 0; a = e[g++];) {
                    var d = document.getElementById(a) || document.querySelector('img[data-iid="' + a + '"]');
                    d ? f(d) : (window.google = window.google || {}, google.iir = google.iir || {}, google.iir[a] = c)
                }
            };
            </script>
            <script nonce="4X/xePeUOQ9joZlyG8qAWQ==">
            (function() {
                var s =
                    'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAACtklEQVR4AeyVA5AkQRREZ862bTMcZ9u2wzrbtm3bWNvmaW3b3rzKRa+NOWVEDoqvqv//LZPtUpoubC2cLIxKMveyku1UmkYAG2EoyFYESFEgQIos346dX7K7YiFyN8iFB17Sxx4NRxzVdcbYO6aotke5cgB42sFXDGDjF4FM+UbGY+5TK9FXKQBKOKTtjNz68CMAdQ+oVjyAXPicoRtyS8M5GA0PqRGwgm9gxxdMf2SBkNhEZCoxORXbVH9CXllBWHOvCla9sQNPbegRit3qDmhyWL1SYkCKA7kIxvoH1MBrr5KZllJ/IWnK3zskZ/SXEIDB1vm0trAO6K5ndNCYN5DRz9tgWxdhfnc8pQ2madXdSmDb7CeWWPfOHite22LoDWMegiDFj4GJ983hFBLD9IOPcEB0AjZ8+S6daIeaAwJFG/v8ouJh4ROB3uf1sFHpB34GRSMmMRlJKalISE5hLEHJIRCjbptAXlyAmY8tEZ2QjOzaK4qSbHs6AItTdhHwvpU3N0ZB+hYQhcGXDTi//AFSUtNPW5SY3lX3KJc7gKSwuESYeIXByDMM4XFJyC1bv0i0PKbJoCx/ALewWMwSwccApZe9skFwTAKyiXEjPYZyBziq48zUlVK09j4VvLL3Q3ZFxCdh/D0z7lG+AHFJKVj03DrHwhxHqOzimjMeWZQ/QKQ42ZQH5jkW5u896o7IJmYJa0T5A/BqJ+S6Wv7eqebwH+A/QOUBTMwHYFdpAaY9tACrVqyYECPMOr9d1UF6Gx7QcgLb2McxfCOOu2uaB2CLyk/EJ6WPo4PEmtOLqgOsZK2Pa4IDSUvPeWKFXud1pRre94Ie5jy1kvqnC+AWxzTYn2Odnud0MSdjDM0i1ObXOvDVBQjNEFciMJrhKHJwH5FmDgIPfNds4DuniO75P3r6HNY9BwATNI1Cu+uNpgAAAABJRU5ErkJggg\x3d\x3d';
                var ii = ['dimg_63'];
                _setImagesSrc(ii, s);
            })();
            </script>
            <script nonce="4X/xePeUOQ9joZlyG8qAWQ==">
            (function() {
                var s =
                    'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAIAAAD8GO2jAAABZUlEQVR4AWLQWfWQpmjUAjxo1IJRC2wBpJTDQkVRFIafKBujZrnGjbNd84wHiJNs27btrm3rrFbW1T73m20u/yMsW0cBg6zue5XCYLFQcC41JK0I3PsYaWvC+BkugYFljrbmWPp/H/86FOnhB2hGZbTg/dBhFoEBhsoEAO23Su9+5s/9nA0R/ANtXEgNJTtiAgObfB28gZaKt8Wen2ZarhRgjVL8nagGmetC+IFMb5lgqOtOZAtsLVgjcIhFZqD+RLYj0IFzGCwUcRctc7XgNNcyA7GBhAW+EWvnHK3XCjqDhg3OUpvAEegFTgAdA+nrwnuF4zCw7DSlwqOPscRxUAmtiYqY5NDXImz/6mPprlAP1sDgcjdFLokdCkPGW6Kstmbhtoim2IWNsRsvFXNsjURvBmvgiMROc11S0+BhVvmhFAUDhewrISgbg4/qlyUdeEnl+sBk7SOgfcBSb3jWaKMWjFoAABKespvtvzYlAAAAAElFTkSuQmCC';
                var ii = ['dimg_65'];
                _setImagesSrc(ii, s);
            })();
            </script>
            <script nonce="4X/xePeUOQ9joZlyG8qAWQ==">
            (function() {
                var s =
                    'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAKS0lEQVR4AZ2UA5RkS7ZA94mIq8ys6mrb7v7PGNu2bdu2bdvssZ9trme03V1VWZWZFxFxfv5a41n6s8/al2EJ/Ccve8P566a78YSF6+Ys745PLW2bbA42LSQQbFQVNWJjUKIniRZRkOiNiSImqiRirdZ+YLNkl4HbxvdOTnSS7CbgGv4N+ehTLuFvjK+IW6/faT/nPfeAlEG3ouUcje9jYsAhmCgkUTExIgquAadgQ8QEcDFim4ioINFgsbRahlgGMPGizfdY9Lx/boh892XXAXCl7HzktVeNbUvzhCJTUtNgQwQFh5JKQNQgPpLEgFOQCDYG0iCYAAaP/duIeMBHiIpEwUQIA5jqKusfMu/RwDYA5yf7zH90cuyN781/PtI2jJg+Ogg4DSQGRJXqkKc3WSJ1iYlg1cw0wkbFhIBvFIvBxohDEAxZO6G9IEfEEGsQY7GFkAw8+3974OcP/uwxJwOXyWl/uCn/9Zf3f/32K6onLVlt0SZgRUmc4eitk8TxktX/M8qCFW06bcElCUbMTMUOj0TFqMEOVQ/BN9TdQG97j0PXjlNkKWOrRmh8RFWwScLE7QNGThz95aanLHqm23fN3gf0dvQetXA0IeuVGCAxhv0X72PtsW0e99W7svm+K/hvuO203Zz72gvoXrmPuWvm4xUolblzDH7X4CGDm/v3czecOXVHM9C8VUSSKpJnjn0X7+Buj1rGc37yYAAgcPC6w/T2l2it4BUNEdUIgBGLNYKkik0c2dI28zbOZc19lrHmisfxu8f9il0/3c2c1YsI2oATTO2d3xmOcWHCLO/EmrSJpAambhxn6yljw8ofBMBl37mCC999KdWeAdIEbIyYqFgEiFgiZiaY0TrLtJ+goMOdv/FQNjxzCw/6yUP55ak/oHfJEVorRolRQRWO9DuOXjdr2QTnA84Gku44937ZKYBw3U+v4cdP/wlLs7nMX9TG/q1Ca3ABpO8BJckcKgbjoTrSZ+2jTqTf7/OHZ30Vlz+fNU/cxJZXHsuFT/kTrilQI2hUqJrcdZw2sazIBOrD0yxb3+aYJ20C4OJPnMuqZJQFK1uEqiRxFlMr5a79VLEkT9uICr2mpDAZTTQseuQW7vTzRwIgD6y47IU/Hzbgzax98mZufsNF6KEedl5OJGLKsnCZjbVvarJUaCammbd+HohhfPshwnVHmTs/w1Q9cmvx3S6DQ/tYfq8trHzBnRk5dhFGDUev2c/Or1zIntPOJx5dxN9ouZSJyUl6uyZoLx+jWJHT232IRHMQkEHpXBJrmTlMiORNn86oAFDvmyQru2QjYzgnMDVNPHSAO33pCax8/j35Z0a2LGDlE47llq8ew1XP+wbnn/ppGG3TO2M3Hdei2tWdaUA6x9GnxEpFULBk0RUmaDQlmUSiluS5AEAIZFRktsGqoXdwByd+7okzlQcN3Pbh3zLx6+sRNcx+2DGsfsP9WffcO2Gk4prnfolRVtGZPUZvfAppIgBpKlgaTPQYFYxRnKNBhuYEIn0y6wGQGEkZvict/I7DrHjAZla++AEAXPGgD3DkjxdTsAgQDp5/PhNnXMdJf3w1a55zTw7/+EqqP+1EbENCjcQAgBWPxWOQmXuiDSbVmlRKclvTTnokpgRAYiA3FWk6IKkPsfRxJwBw2yd/SvePp7FwzQY6a0fprB5l6bL1HP3TWWz/2O8BWPKYU/B0MRpQPBoDAKIRS42RCoOCCqZIBhRuQD40G5raGgBBaaU9cp2imG/pnLwGgMGZFzO7NYrJexgzjWOAcQ2jtOmddiUA7TsuJ0lybF1hqCAoAFbAILgQMTSoqXFJUmKykiz12KJPkg0AcK4mb0+RFQWmPQAbAXC2gqzEpCUIIA3ESGoHWAYAiAacGb7TwhEQUQCiRoSAAVwMmOjFZEmlrbSkyIe2+qRZBYDYSNoevo9WuGYf1XXXATB6r+PR8ZvJWgFXeGyrweUVMewY/tsKQP+i25CqiysEQwPmbyPQYKhBAkbBKZhWVtFKB2T50GKKNK0BkBTSTp+kKMnnw9QffwnAwpc+i/aT701z8R/h4PVDb6Z/7WmM3e8uLHndEwA4+tMzyQC1FZaAEQHAEf/6HlCJKKjLskpdMY0rFNupsGkJgE2EZNSTtAZkmxZRXX4a4z/6NrOf8HRWfPuLTNzlJMozLiB6YezOz2H+K54NwK7PbyP8+RyKNZvwZYUxATEAEBUEjxARiagEXDLTgAFpITDaYG2Xv41AMlLjWh4c5BsWM/WZN2ELx+jDn8zcF78Ihv4zB765jalXfIjOyqWEVDF1RG2DJgaAWFUIAVGPiGBiFDcccrGFx+UR02mwOgmAzJ6NG1Nc0UddgnRaJK0l9D/xcspzfkv7QU8lXb0OwVLefBPj3/0p1a/OZmTLWnxeoN0S1JAUgls0C4A4MY3BAQGDRQji0lk+Gh1giwQ3p4XWB1AgW7iWZPkCzMHtyLx10NRI0cHO20q98zy6H/oLks9Fa0PYNwlmhNadNxBLh+kNkJEO5d49ZGtX0Fq7kAaIu46QpCmqEQmKyRNvJPdl0VayvCFZ1Eamb2Fw2S8xQPG41+D9Lky5AzOimKLBtAPpptWkJ2wkWTmbdPkYxYnrybYsQ/IKSRvIa8LeG6m6tzL/DU8BGJ6OZw0bvp1kLEeiMhNOS2dmtyuJ+3GZhdyQaoG/4MvoSY9g5PhHYF7xU8JZn0F7ByAGCAGpA6YUtInERpCBQB/ilCP2UqgK7JIlLHv/25j7hHvRAAc+8UtyCsSB8QExlqTtKhfNYMJkBjsimBTMnA1w8Bp6215K61GfpX38Y4j/5+GboXeI2FSY4JGgRB/RoBANUQVCgpJgZi8gXb8BEYjAbY9/J3rh1aRrjiNUHoxDiUQ1U7L3L194ZHbVth+mWmbMakPqsNYQjt4AS48hvdNrSRbfAeH/hwLTZ1/A/jd/gfqC20g3HUPVd0Sf4AcJTXRh7DEnPEV2XXNOkl79na+OHLny6TpvBSYJqLOYNIPpXcRQI3M3Q3sRalsIDhOE6APa+KEKZYAKfKnEbo0emqJ/2z4GF92OjbOIi9fgJxJ8PwEpmN4xgTlu/e9XvOCBz5D9X7ySsOHCjbMObLsycXmunTHUKeIcuASLEMtx1E+hIYKfkVh7pFRi3xMHDaHXQFfxk4HQBa1nEdwCwnRCM2Hw/QzftAlHIoPJmlXvecEdgYscwxd7yYk3Du42/Zjk6AW/NXlAkwKxBdFCNALFUmQmgBARHyB4qCK2CpiywfRqdNpjpiN+WglHFR0XmiqimUOqiJ0c0J/wdJ5x78cfvvm6iwDsM1fdhf7RQ/SuaN3cvv/yHzrbbCLL1pgsw1mBNAFrcFYxBowoGMVqRPCICUio/2oDTY0MamK/JDQRug1EhzYpfZ9dyF23PNT3B6cPZShy6SM/xr+z9eNz15h49BjaYwu08R2QZUI6V4lNDF5M8GgIaipvY+2T0NRo6SX2gml6lQ3TTWbLfNztnTw0befvqa+fODDIxq4Cruff+F/YMSYOvVvlzAAAAABJRU5ErkJggg\x3d\x3d';
                var ii = ['dimg_67'];
                _setImagesSrc(ii, s);
            })();
            </script>
            <script nonce="4X/xePeUOQ9joZlyG8qAWQ==">
            (function() {
                var s =
                    'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAEG0lEQVR4Aa1XA5AkSxCd0LeNs23btm3btm3bto21bdu28/rFRfd29+bw9kWMarLS+apa8/abMga9Atft/Nt71rIDLv3Heto26ZJu9n+9wvc/VyK88B1r+A8ykDVUr16BgFVbO7v0G+Pz4fdqJPw26AVZ7MFekx0I2rz3F7dhU6zf/1QRSk16Ya/b0Mk20GWMA4i6o3X9DllQUhov6GKywTvgt3TjKLMy9QuxsTRf0AndOh2Al2b/1S00JsUf/6lNb78ta5A8dKszIa/5b9b12utMu3XddiTIUbKFLeUnp5CIovx8yvD2p/Bj58mx6xCdTgg2smGrhANoFh3po+ird6iosJAMARy0rtNWqxOwpXAATffuxwqssF2LnpQTFUNqZIeEU4q1PaXYOFBubDypkZ+aTgIvsDphC6WQHMDMcoJWNVtRXnwCiSjMyqaQPUfJonLTErK2zbpTzM0HJEdBZhbZt+3LOiHY9IVtMNy/HMmgsRCdFHFoONk06KC30TwnzaeiggISkRUQDLZkyQq2NaBOtk7DpyoisWnc2eCRC9q6n+TwXbyOlYNtpN+b+zPu0QsSEbRln7T+8e+aFHX5FmUFhRIak2PK979WUfRFuqsn6wBsa3CIcE1SkJ5BADrfvGwD6b/4x69IDq8pC1nlURdukISiIuLKDNsas3/rlCAejJDkvbu3fIZJBaSbdcB/2UaSAxyiloFtDZdC+9a9SUTCi3fSuvvomaSG17RFrAM+81aSHHbNe7BMqkG9pEUm0lQHl2IHRs0gNaxqtGQdCFizneTA6LIOWFRsXFCiB34o7oHC7Bz68FvVzzVr2pXkyPTx1zoJkeeuKaYIfcWWQBivDEaBglR85q6UuAFkJCLs8GnWOOTAlCKS3pmzcmhCaQwZCpa4H2yINZtGnUgGjBGr2LnXSJIB8659DL1nLj2iLY0he48RkOHp+7mx5qwgOezb9GHrirkXkZeULJWQJaLA9Tv/ZwTEVIIupVGLvnaX5Ajdf0Ih//GvGhT/6CXJIQTI6oZNUDEOI74MzAvngRogJiEIoR/OqE9NMCb26TqMpOO4q6JLmZdllWbKM9/MmhhIF5TgHYfo3ffldR3HXdUXEjtdDniMm11c18QkghLMek5ktGI96tItHM06gxFs2bJXMpuGHTO1bYo4cZFExN59rPhP4BLUnzfIX8n+YC+lQkRNtV1K05zcSASmgZMx9VKqePkv3zTAvHxDNTtinKSTzbJq81K/liszsXpbG/UNGXQKJL41M9o40o7IjX00+8F95HRzcTpy4+IJcOo+zGDD2Gv0oxnzmNbCZeB4t6zgsPT4p695Y8yNCHMujtoXPR2LLyH4r4M27dngOmiCi22TLhnmFRoVwBCiRHNhzaX/WC/vWcsOGfN4/gl8Iq6odnlDmAAAAABJRU5ErkJggg\x3d\x3d';
                var ii = ['dimg_69'];
                _setImagesSrc(ii, s);
            })();
            </script>
            <script nonce="4X/xePeUOQ9joZlyG8qAWQ==">
            (function() {
                var s =
                    'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAIAAAD8GO2jAAAA1UlEQVR4AWOwDp9LUzTELRi1wDdtaf+8w9sPXDtx7h4Q7Tt2c92OS9SxwCZibtesg0+fv3756i0aoo4FkxcdgxhHEwtiite8ePmGhhas3HIB2cRL1x5t3HV5xebzEEQFC67efAI3/cDxW7aR86icip6/QIRP9+xD1E+myOHTPv3AqAVA1DJ1/76jN+EI2YKLVx8hS+0+cgMY5yRbMHfVKbBxhNGFqw+B6mloweY9V2hrAbAIIceCugl7gE6DI2QTT124jyyVXrNxEKaiUQtGLRi1YNQCAMs01I34bbYCAAAAAElFTkSuQmCC';
                var ii = ['dimg_71'];
                _setImagesSrc(ii, s);
            })();
            </script>
            <script nonce="4X/xePeUOQ9joZlyG8qAWQ==">
            (function() {
                var s =
                    'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAE0AAABNCAMAAADU1xmCAAAAUVBMVEX///9mZmZgYGBjY2NbW1tYWFiampr4+Pj09PTq6uqtra3k5ORpaWm6urqSkpLMzMx2dnZwcHCLi4ulpaWAgIDCwsLe3t6zs7NTU1PW1tZISEh9BsfbAAACMUlEQVRYhd2Y23KEIAyGBQKKq6ILnvr+D1qxavcgWaPctLlkhm8CSX4SkuQfmS6rwkRidQ5AQBxaWknBGIMxBkwXnHmTtwiwGxczjA0RYJlYYKKOQGsWGOP9dZjiC4wN6WVYJ1cYV9ddq9dzMnndtdvmmoyQuna9NYhwzi2g/B4BlgyLZ1Fg2UwTMo8Bm2iCg7zHqE9v90q1+vx2PZrWdO+ppU1pre0Nwc1OFRK8cVc+eJQa1Uxr3kAWqjvEGmu5ag8TXNb9D3CsOGzrPlmkO+Cgkg9bFmBubPGyPMf4k5pkNX/d5IGws/o5/zZJPGjgMFpBg+F16/YPhJj4CqZhKz9vf3HNZSFYSoch57TUc4INw8iuoWLXk0OAvRA1MTugRWCaeFBRILCkBRoNf/IV8doAVRBHLSr0lS5oLIHWOzXbRIXRMiINb27+Ey1uFBhaCglZw9HspRY9Xll3Ig2v+pysvJgiGaKGTIbQqPr2IeXIrjFZhmlUgfO48NWduDgW7oTTgU6bHvtQ50DNuNmEtPsifOaok/GAc+QcmWGh9oHciHgbQtWvT8QB0bkTcUAmTHp1oUpSUW8OHX7JrwP+m9HTci4Y0MVIgh7MtdU0wTlczGcjtPlHvqcO6xwgYkm+uoOfGdnOtPW+cvgzQz9t9vNk0xTwNOsyjvYhz9418Iuq83EaplLt5/ANKNFm8NUsgJhI4PrHuN3yn8EeOPYy77lXVk6Z9wlPG6tUe/2f64/bN9ghGHwe5sCWAAAAAElFTkSuQmCC';
                var ii = ['dimg_73'];
                _setImagesSrc(ii, s);
            })();
            </script>
            <script nonce="4X/xePeUOQ9joZlyG8qAWQ==">
            (function() {
                var s =
                    'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEsAAAASCAMAAAAkEdPnAAAAaVBMVEX////sAADrAAD83t/1kpXzeXz95+j+8PH//PzuLTT+9/fxXmL2oaPwS0/uJi7zb3P6zc7sAAj3ra7sABD2m53vOT/xWl70g4b71db0io3tGSLvMjnvPUPwUlftEBv5wMLvQ0nyaWz4trjWIBEYAAAB3UlEQVQ4jc2Ty5akIAyGSVQQRBTvZWmhvv9DTgAtZ7r6nFn0LObfyAnJZ24wRsoNOP9lKSTsFoeMfZWA6sP2hxy0Q2ThX1n4HUvo+joWtgL+E1aC6TummrD7CYtDd540OibnizVqlRlZce8x8sH02t/UA9kSz8p4YeQoQjq7lPtEYVVbjo/AknNOlOlkme0JVYk2YdwWsO0AlH+DsA9IkxEw2LnqURJsAigKoERmnC2+PGrC0VecnaxnmMMEkvEWGsaUAca6RZFPuxLLkjdrYGVqNpS86kHcNY5hEdaXOllWxHJr0T796RGayOs6z0AJCDa2o3DYMKXyAw+WQOx9Ps8paYUjsmR5jqYTsfeayhclIoIkFsZ5HFinrYWgx5t1QDRRAZE1fMMykCbcbZ41XqwHdE1Q/WYNmChSXtCKhRp9sb7b7mZNMZvd17jFxiAnj/d+RZaw8ZL+1EUW+umq1yvnX1gOPMvPg+bV0xiW3FM3TqzTs4ksio6spy11aumF3ixGa6J36H2NC+569CtDqb9SvWJBPj3sVHuxiDPRUSba+H5NG0BPD4z3Yf8aMvLVgnGdVMJoJwHW8D7cAjCH/iXDbC7OrdzPkfMPu/jNdF9znl9xHxEn6x/pP2H9AkmJGkr2RflRAAAAAElFTkSuQmCC';
                var ii = ['dimg_75'];
                _setImagesSrc(ii, s);
            })();
            </script>
            <script nonce="4X/xePeUOQ9joZlyG8qAWQ==">
            (function() {
                var s =
                    'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAE4AAAAfCAMAAAB+pgt9AAAAY1BMVEX///8AY70AY7w7fcby9foAZL0fcMGlvuGIqdja5PLC0urZ4/Jlk88AYbwAXrt8odQAV7kAWrrM2u6yxuTo7vcPa79ajcwAVLhOh8p1nNIyecRDgcfh6PS6zehsl9CswuOTsdvLHZa7AAABwElEQVRIia2W65qCIBCGx0OSIR4QrVyt7v8qVwaRgax93Mf3T82BiT4OA2QekYKq813Z8JgA6V2ku4PlSfJvcPKoFdzLU4BoOqkH3gRJTG25LFqdUQKpD4QOg9IDg8SFbe9BJB6ZgvOQbPED8KCRbJmJl11A7HHV2sVb1BJ+aKRhWO1SE59IIPfgACrfhKcweo4Ryyn+7jsYViDOwXtt9yMxCvPnpDE0rW+ydXRVRjPClZO1dtTcyNNoY9GqRQPpQG9Fa5WVm8wFceVS4zCLpzYMzTR7Jmfyo7QKac+Ic4zVOaBatpkkkQoYyWjX0R+0IzQv+8uonRhQLlbGWsMu9rW7MMSVUyxgspHc2JLE5BM/iPTHsn924Kb3BBbMbrd215TbjPIFIth3u1d2ttaAgnBlD2b3qSAHYr6nw1Ox+8zO1yIMWrJY94xQu7cbJf/jRun17NCrBQ9vlAMZuUc636/bKJqKMtovJAkSEXSEz73isUa0djDVcYkCiWjNgsLvZPxLJ3MR08aGZMB2TrKO1u5/rwA7NiwBSUSfI418f6NE9o3yWCOoHUCN7lm7NRdu3mvpJL+8oFwkMuWWrUYG/AKOFitCXRYR4gAAAABJRU5ErkJggg\x3d\x3d';
                var ii = ['dimg_77'];
                _setImagesSrc(ii, s);
            })();
            </script>
            <script nonce="4X/xePeUOQ9joZlyG8qAWQ==">
            (function() {
                var s =
                    'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAE0AAAAZCAMAAABDyFNjAAAAmVBMVEX///8AV58AVp8AUJwAU50ATpsATJqdsc8ARZcAR5j6phoASpkAQ5eUqMn80qD6owDX3+tDcqz09/rm6/IAT6aputSywdn6nAAAPZTP2OdVfbKDncP/qgBujrvBzeAlYqRjh7f8zpX+69b94MD7vGgAN5I5bKnovIn+9uzd6PcqU4vroCzFkFCwiGB6lsDTlkV2bnbjsndtboHXte72AAACy0lEQVQ4jWVV2aKjIAxltVqwdalt7aJ27jJ7Z/n/jxsSCODcvIgYDsk5SWSPx47sEyPr6g1Ywxgu6j7s98O9ncXcPo9d9G0G9A1vL6+n0x7ttCOPwUop9blj3dkt5Js/21ysVkJwoaTR5FqfNbic+wi/2++3YHvaeFecc3lnbDQcDDc3VnEytVAW1m+YiSX7jHCnLyGhEhxKl+ig4ejFg/FksqbQdNi4Zmhfv32/udheMhc1u9VVkmfvwXRlS2ukOYaDFK5qMzQmDz9u2/3Dvwj4XgxudQFvDUfvEhMCQbqxhrjBJhPQRJGjPeXh523/iuuxgs8GLwFgM7qVgZXesLW1SDDy0mfbx4I7uC2uMQz5BI6RQNsR28W0BsP05RP8i2O2D96HX16GijRgDUaponaC9ys0wBFFV9Ht0WZXRwJlcGE6Vt9ZXLaJbmHr/FDpYdzZcIAM1JO/H8SFFw3F9bduAt/aJO6wfqrRU1PmaKjO4U/gwmvAFkXiuoqWpB5vUj4ueYcKKVRNhobEqL8unlhijPEoKcDFarB+B7WHOm5MujQYJujkQwSLbCO9YQ15lxSe7WLkWBk2NGIyjMmMKGOobC+pTPE/Q6um8vGemPKco2HcesBeCj08JXWD9a2MlY/X+wrEQ7bL4aDa1SLgGp2Fuy4kTwgK6HGFdubHyJj7YU8qbKAwEJCY/7oJSxDQqEWFEMLXzspx0DRviPdZUNZ1zAJvAI7aNO3CGFlytKak7QvlHtv5rVyO8BwXvFLXrLExMgpOrJKgy2iO+qEJddxXXBU42dBHVB22qLuYjH+Q4R7gVHhHZlD4OMZCuU2hFGP9I5trGTzBaUpvcARDUdY6A5PlFJpJcDqKaciVDP0Z1Nbx93M37mdUAfb1XEj4W3ElC3uHhISmb95K925WMrAaLfbbBl8xmW6ql3bm8+Xq/6T9Fb+laed9/wFN5SeM6EcG3QAAAABJRU5ErkJggg\x3d\x3d';
                var ii = ['dimg_79'];
                _setImagesSrc(ii, s);
            })();
            </script>
            <script nonce="4X/xePeUOQ9joZlyG8qAWQ==">
            (function() {
                var s =
                    'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAE0AAABNCAMAAADU1xmCAAAAZlBMVEUtjP////8Agv8oiv8ch/8Shf/z+P9MmP8Af/8yjv/v9f/7/f+lx//4+//p8f9+sv+50/9sqP+z0P/e6v8AfP/G2v86kf+ew/9opf/Z5/9Rm/+Ftv8AeP9zq/9AlP+/1/9doP/O4P9UdsY1AAABVUlEQVRYhe2TYXPCIAyGeSFBWihVa1td59T//ycX1M3b9mH40bs8H3KQ455LCBijKIqiKIqivDjuzm3zyH4tfub/kzX3BRnH1BBfkxLZmXvGyZLrfHbAlTizWXu0iZyh/RDjsGHTbgf4xKcuHt6oqrbNkHMWZcstkIGBaAG8BxbuJA10iLJb1bVqrX1PcnrEyMEckBxwDOEIfHTod+RxsLsZJ67SSbdb4GzhuVwj2gXJSnLG7H0wvMVCpkG2T8h4hUs5zzkmHMsE9lj71hpK6F29rcj2ZAitLYODXzCXmZbavm1TpU06iefAHC7YBssSjZQawjli1T1rc72M8TSOYzIR3SEiO6kKWaY7c/R3m6vt9CPeHhyOzSi+tXTLvbhyz01MbNy51MaXtsrmmtWNyXEz3R490TSxPNeJrgfKd6GpRvb4qGWOvz6k+xMVRVEURVGUF+YT3/YON/a7/6AAAAAASUVORK5CYII\x3d';
                var ii = ['dimg_81'];
                _setImagesSrc(ii, s);
            })();
            </script>
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

            .vryjee {
                display: none
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

            .xpdclose .QAd6Ge {
                background-color: #fff
            }

            .xpdopen .QAd6Ge {
                background-color: #1A73E8
            }

            .GqKvT {
                border-top-left-radius: 8px;
                border-top-right-radius: 8px;
                color: #fff;
                overflow: hidden
            }

            .JEPF1b:not(.qs-it) .xpdopen .DI6Ufb {
                box-flex: auto;
                flex-shrink: auto;
                flex: auto;
                -ms-flex-negative: auto;
                flex: auto
            }

            .c94Vsf .kno-ecr-pt {
                display: block
            }

            .K2Sb0e {
                box-shadow: 0 2px 4px #e5e5e5
            }

            .fixed-title {
                color: #fff;
                overflow: hidden;
                margin: 0;
                padding: 0;
                position: relative;
                text-overflow: ellipsis;
                transform-origin: left;
                transform-origin: left;
                white-space: nowrap
            }

            .h16Ime {
                cursor: pointer;
                margin-top: auto
            }

            .ud3kWd {
                padding: 8px 16px
            }

            .tT60Vd {
                min-height: 40px
            }

            .xpdclose .tT60Vd {
                padding: 16px 16px 0 0
            }

            .kp-hc {
                margin-bottom: 0;
                padding-top: 12px;
                padding-bottom: 12px;
                position: relative;
                display: inline-block;
                width: 100%
            }

            .GqKvT .kp-hc {
                padding-top: 20px;
                padding-bottom: 20px
            }

            .fm06If .xpdclose .QAd6Ge .kp-hc {
                padding-bottom: 0
            }

            .kp-wholepage-osrp .LEsW6e {
                align-self: flex-start
            }

            .HSryR .Z0LcW {
                font-family: unset;
                font-size: 30px
            }

            .Z0LcW.k37FLe {
                font-size: 20px
            }

            .yxAsKe {
                color: #878787;
                font-size: 14px
            }

            .kZ91ed {
                overflow: hidden;
                text-overflow: ellipsis;
                max-width: 300px;
                white-space: nowrap
            }

            .c4DqKb {
                font-size: 16px;
                line-height: 25px
            }

            .c2xzTb .HwtpBd.yyuVCc {
                padding-top: 32px;
                padding-bottom: 48px;
                word-wrap: break-word
            }

            .HSryR .HwtpBd {
                padding-bottom: 0;
                padding-top: 0
            }

            .related-question-pair .Z0LcW.k37FLe {
                font-size: 16px
            }

            .LjTgvd .HwtpBd {
                padding-top: 0
            }

            .LjTgvd .AZCkJd {
                padding-top: 4px;
                font-size: 18px;
                font-weight: bold
            }

            .HSryR .AZCkJd {
                padding-left: 16px;
                padding-top: 16px
            }

            .qs-ic .HwtpBd {
                padding-left: 26px;
                padding-right: 26px
            }

            a.FLP8od {
                color: #222
            }

            .FLP8od:hover {
                color: #1a0dab
            }

            .GqKvT .Z0LcW {
                color: #fff
            }

            .GqKvT .yxAsKe {
                color: rgba(255, 255, 255, .7)
            }

            .xpdclose .QAd6Ge .yxAsKe {
                color: #70757a
            }

            .GusQUe {
                padding-bottom: 20px
            }

            #rhs .kno-mrg {
                border-top-right-radius: 8px
            }

            #rhs .kno-mrg:not(.kno-mrg-si) {
                border-top-left-radius: 8px
            }

            .ss6qqb .kno-mrg {
                margin: 0 16px 16px 16px
            }

            #rhs .ss6qqb .kno-mrg {
                margin: 0 0 16px 0;
                padding: 0 16px
            }

            #rhs .LEsW6e .umyQi {
                margin-right: 15px
            }

            .JX86yc {
                display: inline-block
            }

            .eA0Zlc.PtaMgb {
                margin-right: 1px;
                margin-bottom: 1px;
                float: left
            }

            #center_col .Jb0Zif .eA0Zlc.PtaMgb {
                border-radius: 4px;
                margin-left: 2px;
                margin-right: 0
            }

            #center_col .Jb0Zif .eA0Zlc.PtaMgb:first-of-type {
                margin-left: 0
            }

            #rhs .eA0Zlc.PtaMgb {
                border-radius: 4px
            }

            .Jb0Zif .QAgA8.PtaMgb {
                float: left;
                position: relative
            }

            .eA0Zlc.qN5nNb {
                margin-right: 2px;
                margin-bottom: 2px
            }

            .wr8GYd {
                position: absolute;
                text-decoration: none;
                background: rgba(51, 51, 51, .8);
                bottom: 0;
                color: #fff;
                font-size: 11px;
                line-height: 100%;
                padding: 3px 4px 5px;
                right: 0;
            }

            .c2xzTb .wr8GYd {
                background: rgba(51, 51, 51, .8);
                border-radius: 0;
                bottom: 0;
                color: #fff;
                font-size: 11px;
                line-height: 100%;
                right: 0;
                padding: 3px 4px 5px;
                position: absolute
            }

            .g-blk .wr8GYd {
                left: 0;
                overflow: hidden;
                text-overflow: ellipsis;
                white-space: nowrap
            }

            .eA0Zlc.bi-io {
                border-bottom: 1px solid #fff;
                border-right: 1px solid #fff;
                left: 0;
                top: 0;
                z-index: 1
            }

            .aIfb9d {
                display: none
            }

            g-inner-card.xIfh4d {
                position: relative;
                border-radius: 4px;
                margin-right: 8px
            }

            .i1eWpb .GTERze {
                display: none
            }

            .i1eWpb .ky4hfd {
                display: block
            }

            .TdRuOd:hover {
                cursor: pointer;
                text-decoration: underline
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

            .QPML4e {
                font-style: italic;
                margin-right: -2em
            }

            div.VTZT1b {
                padding: 4px 16px 0 8px;
                margin-bottom: -4px
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

            .g283Ue {
                border-top: 1px solid #ebebeb;
                padding: 4px 0 16px
            }

            .cYbdhe {
                padding-left: 1em;
                table-layout: fixed;
                width: 100%;
            }

            .MMgsKf {
                padding-top: 2px
            }

            .pikyNe {
                padding-left: 1em;
                width: 50%
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

            .ILfuVd {
                font-size: 16px;
                line-height: 1.375;
            }

            .c2xzTb {
                overflow: hidden
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

            .e24Kjd {
                padding: 0 8px 0 0
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

            .Jb0Zif g-section-with-header {
                margin: 0 0 28px
            }

            .ss6qqb g-section-with-header {
                margin: 0 0 16px
            }

            .m8vZ3d {
                display: flex
            }

            .VoEfsd {
                box-shadow: none
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

            .Gfzyee.sgivpd .fSXkBc {
                padding: 7px 7px
            }

            .Gfzyee.mViXqc.sgivpd .fSXkBc {
                padding: 6px;
                border-radius: 14px
            }

            .Y3go8d {
                color: #9e9e9e;
                font-size: 14px;
                padding: 0px 5px
            }

            .p2WJce {
                bottom: 0;
                display: block;
                margin: auto 0;
                position: absolute !important;
                top: 0
            }

            .jx3Xk {
                box-shadow: 0 1px 3px rgba(0, 0, 0, .2);
                color: rgba(0, 0, 0, .87);
                display: block;
                font-size: 16px;
                padding: 26px 16px 12px
            }

            .EMNPad {
                display: block;
                padding-bottom: 8px
            }

            .a83P8e {
                max-height: 70vh;
                overflow-y: scroll;
                position: relative
            }

            .VJp9rd {
                background-clip: padding-box;
                background: #fff;
                border-radius: 5px;
                opacity: 1.0;
                overflow: hidden;
                width: 780px
            }

            .Xvesr {
                cursor: pointer;
                position: fixed;
                z-index: 9002
            }

            .ynlwjd,
            .dtCYCd {
                bottom: 0;
                left: 0;
                position: fixed;
                right: 0;
                text-align: center;
                top: 0;
                z-index: 9000
            }

            .dtCYCd {
                cursor: pointer
            }

            .AU64fe {
                cursor: default;
                min-height: 10px;
                min-width: 10px;
                padding: 0;
                position: relative;
                text-align: left;
                z-index: 9001;
                vertical-align: middle
            }

            g-loading-icon.Xfh32 {
                bottom: 0;
                left: 0;
                margin: auto;
                position: fixed;
                right: 0;
                top: 0
            }

            .qzMpzb {
                background-color: rgba(0, 0, 0, 0.8)
            }

            .PqB12b {
                background-color: rgba(0, 0, 0, 0.54)
            }

            .gjDNhb {
                background-color: rgba(0, 0, 0, 0.0)
            }

            .NapCJb {
                background-color: rgba(26, 26, 26, 1.0)
            }

            .oLLmo {
                background-color: rgba(245, 245, 245, 0.85)
            }

            .fkbZ7b {
                opacity: 0;
                transition: opacity 250ms
            }

            .u98ib.ynlwjd:after,
            .u98ib .dtCYCd:after {
                content: '';
                display: inline-block;
                height: 100%;
                vertical-align: middle
            }

            .u98ib .AU64fe {
                display: inline-block
            }

            .Xvesr {
                height: 24px;
                opacity: .78;
                right: 32px;
                top: 32px;
                width: 24px;
                background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADQAAAAzCAYAAADYfStTAAAABmJLR0QA/wD/AP+gvaeTAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH3wsGBgcnk8E1iQAAAQBJREFUaN7tmrkShCAQRFkj/hr2rydzExIJlnOGpoUqykCs6acIc+AcexORICKBQmcadKcewGH+68wGwUKVdF6F5yMSVNISR+khvlS3NkSoYU1IUNO0IEBN17ASSs32Cih1m5ZQZrYsDJnPBk2Dy/5XDcPLV9SZAmD2vBlC4LySEUGwfmOPMGQnuFkgPEyLUAuYj1EAFrPr4573/ouevLgrO3wypgVqD5hKKDWYy532sim3elE4yzb6xnpcH2rnlCp8oArwqEJwqiQJVRqLKtFIlQqmStZTlVOoCl5UJUmqojFVWX+HWKVGY/EkCVI0mbTE3jew9+GlbDDH8bLTANsPN64ny8hqeE0AAAAASUVORK5CYII=) no-repeat;
                background-size: 24px 24px
            }

            .Xvesr.BV6uAb {
                left: 32px;
                right: auto
            }

            .oLLmo .Xvesr {
                background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADQAAAAzAgMAAAClE8PAAAAABGdBTUEAALGPC/xhBQAAAAlQTFRFVVVVVVVVVVVVMVQQFQAAAAJ0Uk5TAH+2KaGVAAAAqElEQVQoU32SsRVDIQhFr0UcwmnMBn8Op7HKBDYyZQpRfCliocLhCsIDXc+5vSCNY5VKnsdqnWzVjWSdZN2tbBXaBsvcG7h7gwvZoHsddMIPd66QDazzVNEGV6IyA1tBUWCyu3jaCAzKDAyyvQ8GyT6BQbPAoFhgkC/s19JIeUUzaHatTKrWH+lvtRPSJe2gdlc7L1PRiek0ddKiAlWIqkeVpapTRf5ZX+r5VzHujtLrAAAAAElFTkSuQmCC) no-repeat;
                background-size: 24px 24px
            }

            .Xvesr:hover {
                opacity: 1
            }

            .vT5nhd {
                height: 0;
                position: fixed;
                z-index: 999;
                text-align: center
            }

            .ZtLxGf {
                box-sizing: border-box;
                visibility: hidden;
                display: inline-block;
                text-align: left
            }

            .lnctfd {
                animation: g-snackbar-hide 400ms cubic-bezier(.4, 0, .2, 1) both;
                animation: g-snackbar-hide 400ms cubic-bezier(.4, 0, .2, 1) both;
                visibility: inherit
            }

            .ZWC4b {
                animation: g-snackbar-show 500ms cubic-bezier(.4, 0, .2, 1) both;
                animation: g-snackbar-show 500ms cubic-bezier(.4, 0, .2, 1) both;
                visibility: inherit
            }

            .z5QvOe .awHmMb {
                flex: none
            }

            .z5QvOe .BDp8nf {
                margin-left: 0
            }

            .z5QvOe .BDp8nf g-flat-button {
                padding-left: 0
            }

            .BQlSMe {
                box-sizing: border-box;
                min-height: 285px;
                position: relative;
                padding: 24px 32px;
                width: 300px;
            }

            .B4CWGf {
                color: #757575;
                cursor: pointer;
                position: absolute;
                top: 16px;
                right: 24px;
                padding: 8px;
                z-index: 2000
            }

            .ncZ3cb {
                left: 50%;
                position: absolute;
                top: 50%;
                transform: translate(-50%, -50%)
            }

            .lxG8Hd.aID8W {
                background-color: #000;
                opacity: 0.2;
                visibility: inherit
            }

            .qW28Ef.aID8W {
                background-color: #000;
                opacity: 0.4;
                visibility: inherit
            }

            .m114nf.aID8W {
                background-color: #333;
                opacity: 0.7;
                visibility: inherit
            }

            .xq162b.aID8W {
                background-color: #000;
                opacity: 0.8;
                visibility: inherit
            }

            .Xz5tfb.aID8W {
                background-color: #f5f5f5;
                opacity: 0.85;
                visibility: inherit
            }

            .Kg0gUe.aID8W {
                background-color: #202124;
                opacity: 0.6;
                visibility: inherit
            }

            .NJfJb.aID8W {
                opacity: 1
            }

            .bErdLd.aID8W {
                opacity: 1;
                visibility: inherit
            }

            .bErdLd.hFCnyd {
                cursor: pointer
            }

            .bErdLd.hFCnyd .NJfJb {
                cursor: default
            }

            .t7xA6 {
                position: fixed;
                z-index: 9997;
                right: 0;
                bottom: -200px;
                top: 0;
                left: 0;
                transition: opacity 0.25s;
                opacity: 0;
                visibility: hidden
            }

            .NJfJb {
                border-radius: 8px;
                border-radius: 8px;
                display: inline-block;
                z-index: 9999;
                background-color: #fff;
                opacity: 0;
                text-align: left;
                white-space: normal;
                overflow: hidden;
                box-shadow: 0px 5px 26px 0px rgba(0, 0, 0, 0.22), 0px 20px 28px 0px rgba(0, 0, 0, 0.30)
            }

            .NJfJb.o1VDwe {
                background-color: transparent;
                box-shadow: none
            }

            .NJfJb.Sr5CLc {
                position: relative;
                vertical-align: middle
            }

            .NJfJb.ZbLCRc {
                position: absolute
            }

            .NJfJb.mr5vfb {
                border: 1px solid #d5d5d5;
                box-shadow: 0 2px 4px #d5d5d5;
                box-shadow: 0 2px 4px #d5d5d5
            }

            .NJfJb:focus {
                outline: none
            }

            .bErdLd {
                position: fixed;
                right: 0;
                bottom: 0;
                top: 0;
                left: 0;
                z-index: 9998;
                vertical-align: middle;
                visibility: hidden;
                white-space: nowrap;
                max-height: 100%;
                max-width: 100%;
                overflow-x: hidden;
                overflow-y: auto
            }

            .bErdLd.wwYr3 {
                text-align: center
            }

            .bErdLd::after {
                content: '';
                display: inline-block;
                height: 100%;
                vertical-align: middle
            }

            .bErdLd {
                tap-highlight-color: rgba(0, 0, 0, 0)
            }

            .ls8Qne {
                height: 0;
                opacity: 0;
                position: absolute;
                width: 0
            }

            .OxAxec {
                visibility: hidden
            }

            .QVCmK {
                overflow: hidden
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

            .Aks71e {
                padding: 4px 8px;
                float: right;
                margin: auto 0
            }

            .xpdclose .xpdxpnd.qLYAZd {
                margin: 0
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

            .AaVjTc a.G0iuSb.a-no-hover-decoration:hover {
                text-decoration: none
            }

            #cnt.rfli .AaVjTc a {
                color: #4285f4;
                font-weight: normal
            }

            .fKw1wf {
                margin: 0 0 8px
            }

            .kno-fb-d3 .oRJe3d,
            .i1eWpb .oRJe3d {
                pointer-events: none
            }

            .qs-i .kp-wholepage {
                display: none
            }

            .GHuRVb {
                margin-top: 12px
            }

            .osrp-blk .iZJEmb g-tabs.wRPYSe {
                max-width: 508px
            }

            .jrxK4b {
                padding-bottom: 0
            }

            .LZOffb {
                box-sizing: border-box;
                margin-left: -180px;
                padding-left: 180px;
                position: relative;
                width: calc(100% + 180px)
            }

            .WIlWGb {
                border-radius: 8px;
                height: 100px;
                left: 148px;
                position: absolute;
                right: 0;
                z-index: -1
            }

            .ss6qqb .WIlWGb {
                left: 180px
            }

            .Uo6gve {
                background-color: #fff
            }

            .HdaFGf {
                margin-bottom: -38px;
                padding-bottom: 38px
            }

            #rhs .ss6qqb .SzZmKb .a1vOw {
                padding: 11px 0 0 16px
            }

            .aNrSe {
                color: rgba(0, 0, 0, .87);
                font-size: 20px;
                font-weight: 600;
                line-height: 24px;
                padding-bottom: 16px
            }

            .aNrSe.bgB4Dc {
                padding-bottom: 0px
            }

            .Io6Xr {
                color: rgba(0, 0, 0, .54);
                font-size: 12px;
                line-height: 16px;
                padding-top: 8px;
                padding-bottom: 12px
            }

            .lZC9wd {
                height: 24px;
                width: 24px;
                padding: 8px;
                position: absolute;
                right: 16px;
                top: 8px;
                cursor: pointer
            }

            .E1kGSe {
                background-color: rgb(255, 255, 255);
                border-radius: 2px;
                box-shadow: 0px 5px 26px 0px rgba(0, 0, 0, 0.22), 0px 20px 28px 0px rgba(0, 0, 0, 0.30);
                cursor: default;
                padding: 16px 24px 24px 24px;
                width: 220px;
                z-index: 1002
            }

            .bQkCTc {
                display: inline-block;
                vertical-align: bottom;
                margin-right: 24px
            }

            .DQc04b {
                display: block;
                color: rgba(0, 0, 0, .87);
                cursor: pointer;
                font-size: 14px;
                font-weight: normal;
                line-height: 24px;
                padding: 8px 0 8px 0px
            }

            .mBtcv {
                display: block;
                text-decoration: none
            }

            .tW0dvd {
                color: rgba(0, 0, 0, .87)
            }

            .fTE6nf {
                height: 24px;
                width: 24px;
                vertical-align: middle
            }

            .ydMLRd {
                color: rgba(0, 0, 0, .54);
                font-size: 13px;
                line-height: 16px;
                padding-top: 8px;
                padding-bottom: 4px
            }

            .HYsXi {
                cursor: pointer
            }

            input.qKoqyc {
                color: rgba(0, 0, 0, .87);
                font-size: 16px;
                line-height: 18px;
                width: 100%;
                cursor: pointer
            }

            .HmofF {
                border-bottom: 1px solid rgba(0, 0, 0, 0.12);
                overflow: hidden;
                text-overflow: ellipsis;
                white-space: nowrap
            }

            a.OEwtze,
            a.OEwtze:visited {
                color: rgba(0, 0, 0, .87);
                font-size: 16px;
                line-height: 26px;
                text-decoration: none
            }

            .qKoqyc {
                color: rgba(0, 0, 0, .87);
                font-size: 16px;
                line-height: 18px;
                cursor: pointer
            }

            .Cnzagc {
                opacity: 0;
                position: absolute
            }

            .LXtP0 .ZXb90b {
                padding: 4px 0
            }

            .LXtP0 .BMGGYb {
                top: 4px
            }

            .OkbWJb.LXtP0 .BMGGYb {
                top: 10px
            }

            .rysuG {
                display: block;
                position: relative;
                margin: 0 3px;
                vertical-align: middle
            }

            .ZXb90b {
                border: none;
                box-shadow: none;
                font-size: 16px;
                margin: 0;
                width: 100%
            }

            .UwzZQb .ZXb90b,
            .UwzZQb .BMGGYb {
                font-size: 14px
            }

            .ZXb90b:focus {
                outline: none
            }

            .HOKz3d:not(.A8x8Pb) .kp85vc,
            .UNtZ8:not(.A8x8Pb) .kp85vc {
                border-color: #dd191d
            }

            .K56Jue.A8x8Pb .kp85vc {
                border-bottom-style: dashed
            }

            .kp85vc {
                display: table;
                width: 100%
            }

            .xqPsfb {
                background-color: #5677fc;
                bottom: 0;
                height: 2px;
                left: 45%;
                margin-top: -2px;
                pointer-events: none;
                position: relative;
                transition-duration: 0.2s;
                transition-timing-function: cubic-bezier(.4, 0, .2, 1);
                visibility: hidden;
                width: 10px
            }

            .RKbDve .xqPsfb {
                left: 0;
                visibility: inherit;
                width: 100%
            }

            .HOKz3d .xqPsfb,
            .UNtZ8 .xqPsfb {
                background-color: #dd191d
            }

            .K56Jue .kp85vc {
                border-bottom: 1px solid rgba(0, 0, 0, .12);
                border-radius: 0
            }

            .GqKvT .kno-ecr-pt {
                color: #fff
            }

            .iozTmc {
                position: relative
            }

            .yQJ6od {
                min-height: 60px
            }

            .Ftghae.DaSCDf {
                margin-bottom: 4px;
            }

            .HOpgu {}

            .TYPkNd {
                vertical-align: baseline
            }

            .Lj180d {
                padding-left: 16px;
                padding-right: 16px;
                padding-top: 15px
            }

            #rhs .Lj180d {
                padding-left: 15px;
                padding-right: 15px
            }

            .Lj180d .V5niGc {
                margin-top: 2px;
                padding: 0 0 18px
            }

            .iirjIb {
                position: relative
            }

            .m5881 {
                float: right;
                position: relative;
                right: 0;
                top: 0
            }

            .Dd8uFe {
                padding-right: 24px
            }

            .zsAitb .Dd8uFe,
            .HOpgu .Dd8uFe {
                padding-right: 18px
            }

            .s8u8Od {
                fill: #4285f4;
                height: 18px;
                margin-left: -18px;
                margin-top: -3px;
                vertical-align: middle;
                width: 18px
            }

            .GqKvT .s8u8Od {
                fill: #fff
            }

            .zsAitb .s8u8Od,
            .HOpgu .s8u8Od {
                height: 14px;
                margin-left: -14px;
                width: 14px
            }

            .GqKvT .rsir2d {
                opacity: 1.0
            }

            .GqKvT .rsir2d .kno-shr-ld {
                opacity: 0.54
            }

            .c94Vsf .VgfJld {}

            .abmnib {}

            .D24S2b {
                margin-left: 65px
            }

            .eXB2If {
                padding-right: 76px;
            }

            .IzNS7c {
                padding-top: 4px;
            }

            .QqG1Sd {
                display: inline-block;
                margin-right: 10px;
                margin-top: 2px
            }

            .rhstc3 .QqG1Sd {
                margin-right: 4px
            }

            .rhstc3 .QqG1Sd .ab_button {
                min-width: 0;
                padding: 0 4px
            }

            .CL9Uqc {
                padding-left: 12px;
                padding-right: 12px
            }

            .kno-fb-d3 .kno-ecr-pt.kno-fb-ctx {
                display: block;
                margin-top: 4px;
                padding-right: 12px
            }

            .GqKvT .rsir2d {
                color: #fff
            }

            .i1eWpb .ZHyHcb {
                display: none
            }

            .O4D90e {
                color: #000
            }

            .RAgpW {
                color: #dd4b39
            }

            .GqKvT .O4D90e {
                color: rgba(255, 255, 255, .7)
            }

            .GqKvT .E75vKf {
                color: #fff
            }

            .GqKvT .RAgpW {
                color: rgba(255, 255, 255, .7);
                font-weight: bold
            }

            .HOpgu {
                font-size: 19px;
            }

            .gbVAKd {
                font-size: 18px
            }

            .kno-ecr-pt.hNKfZe {
                font-size: 24px;
                line-height: 1.34
            }

            .UWVjze {
                background-color: #fff;
                box-shadow: 0px 2px 4px rgba(0, 0, 0, .24);
                height: 10px;
                transform: translate3d(0, 0, 0);
                width: 100%
            }

            .JlDOsc {
                border-bottom: 1px solid #cccccc;
            }

            .dlLvHd {
                margin: 8px 8px 0
            }

            .JNkvid {
                display: flex;
                align-items: flex-start;
                margin: 0 0px
            }

            .xydsqf {
                border-top: 1px solid #ebebeb;
                margin-top: 16px
            }

            .ss6qqb .JNkvid {
                margin: 0
            }

            .JNkvid .HnYYW {
                color: rgba(0, 0, 0, .87);
                font: normal 18px/20px Roboto-Medium, HelveticaNeue-Medium, HelveticaNeue, sans-serif-medium, Arial, sans-serif;
                letter-spacing: 0.25px;
                padding: 28px 16px 12px
            }

            .JNkvid .HnYYW {
                padding: 28px 0 12px
            }

            .HSryR .xMl9Q .HnYYW {
                padding: 16px
            }

            .HSryR .Dog5nb .HnYYW {
                padding: 16px 16px 0
            }

            .rhs-osrp .JNkvid .HnYYW,
            .Jb0Zif .JNkvid .HnYYW {
                padding: 0
            }

            .ss6qqb .JNkvid .HnYYW {
                font-size: 16px
            }

            .JNkvid .sfkRie {
                font: 12px/16px Roboto-Regular, HelveticaNeue, Arial, sans-serif;
                margin-top: 4px
            }

            .BUnLGf .HnYYW {
                padding-bottom: 0
            }

            .KSl27.JNkvid .HnYYW {
                font: 16px/24px Roboto-Medium, HelveticaNeue-Medium, HelveticaNeue, sans-serif-medium, Arial, sans-serif;
                letter-spacing: .2px;
                padding: 16px 8px 8px
            }

            .rhs-in-tab .JNkvid .HnYYW {
                font-size: 18px;
                padding-bottom: 16px;
                padding-left: 0
            }

            .Ub31p .LMRCfc .JNkvid .HnYYW {
                padding-top: 0
            }

            .N82rDb,
            .N82rDb:visited {
                color: #4285f4;
                cursor: pointer;
                margin: -28px 0 -12px;
                display: block;
                padding: 28px 16px 12px
            }

            .Jb0Zif .JNkvid {
                margin-bottom: 12px
            }

            .Jb0Zif .lPubzd {
                border-bottom: 1px solid #dfe1e5;
                margin-bottom: 12px;
                padding-bottom: 12px
            }

            .ss6qqb .JNkvid .HnYYW {
                padding-left: 16px
            }

            .Jb0Zif .cLjAic {
                margin-top: 28px
            }

            .ss6qqb .cLjAic {
                margin-top: 16px
            }

            .Jb0Zif .bV6iP:not(:first-child) {
                margin-top: 16px
            }

            .Ub31p .LMRCfc .N82rDb {
                padding-top: 0;
                margin-top: 0
            }

            .Jb0Zif.Ub31p .LMRCfc {
                margin-top: 0
            }

            .Jb0Zif .LMRCfc {
                margin-top: 16px
            }

            .rhs-osrp .JNkvid,
            .Hwkikb .JNkvid {
                border-bottom: 1px solid #dfe1e5;
                padding: 12px 16px;
                margin-bottom: 0
            }

            .rhs-osrp .HnYYW,
            .Hwkikb .HnYYW {
                font-size: 16px
            }

            .N82rDb span {
                font: normal 12px/20px Roboto-Medium, HelveticaNeue-Medium, HelveticaNeue, sans-serif-medium, Arial, sans-serif
            }

            .EhndZe {
                margin: -6px 0
            }

            .wOHCif {
                padding: 12px;
                margin-right: 4px
            }

            .vmgmp {
                color: #1a0dab;
                cursor: pointer;
                padding: 28px 8px 12px
            }

            .vL8YOc .WvKfwe g-card .mnr-c {
                margin: 0 0 8px
            }

            .a3spGf {
                margin-top: 20px
            }

            .Jb0Zif .a3spGf {
                margin-top: 16px
            }

            .Jb0Zif .LMRCfc .a3spGf:first-child g-section-with-header {
                margin-top: 0
            }

            .Jb0Zif .LMRCfc .a3spGf {
                margin-top: 0
            }

            .WeviRb {
                margin-right: 16px
            }

            .T9EeC {
                color: rgba(0, 0, 0, .87);
                display: flex;
                align-items: normal;
            }

            .T9EeC:hover {
                cursor: pointer
            }

            .T9EeC:hover div {
                color: #1a0dab
            }

            .T9EeC:hover .WeviRb {
                color: #1a0dab
            }

            .rhs-osrp .T9EeC {
                align-items: center
            }

            .WeviRb {
                margin: -2px 0 0 4px;
                color: #70757a
            }

            .PmPt7d {
                color: #757575;
                font-size: 12px;
                line-height: 16px;
                padding: 8px 24px 0
            }

            .rhs-osrp .PmPt7d {
                padding: 0 16px 16px
            }

            .ss6qqb .PmPt7d {
                border-top: 1px solid rgba(0, 0, 0, .12);
                padding: 8px 16px
            }

            .kp-wholepage-osrp.Jb0Zif .LagAxe {
                margin-bottom: -16px
            }

            .XmUWu {
                text-align: right
            }

            .WJyVPb {
                display: inline-block;
                vertical-align: top;
                width: 50%
            }

            .rhs-osrp .WJyVPb {
                vertical-align: bottom;
                width: auto;
                max-width: 70%
            }

            .rhs-osrp .WJyVPb.XmUWu {
                float: right;
                margin-top: 16px
            }

            .O9jSzf {
                display: none
            }

            .ChlgHf {
                align-items: center;
                border-bottom: 1px solid rgba(0, 0, 0, .12);
                display: flex;
            }

            .taIGZ {
                border-bottom: none
            }

            .ChlgHf .HnYYW {
                color: rgba(0, 0, 0, .87);
                font: 16px Roboto-Regular, HelveticaNeue, Arial, sans-serif;
                padding: 16px 16px;
            }

            .kp-wholepage-osrp:not(.rhs-osrp) .MErWQ .HnYYW {
                padding-left: 0
            }

            .n4EdWb .HnYYW {}

            .ChlgHf .sfkRie {
                font: 12px/16px Roboto-Regular, HelveticaNeue, Arial, sans-serif;
                margin-top: 4px
            }

            .vnLNtd.mnr-c {
                font: 400 14px Roboto-Regular, HelveticaNeue, Arial, sans-serif;
                overflow: hidden;
                border: 1px solid #dfe1e5;
                border-radius: 8px;
                box-shadow: none
            }

            .vnLNtd.mnr-c,
            .wXlZre {
                margin: 16px 0 0
            }

            .vnLNtd.mnr-c.XleQBd {
                overflow: visible
            }

            .vnLNtd.mnr-c.XleQBd .ChlgHf {
                border-top-left-radius: 8px;
                border-top-right-radius: 8px
            }

            .jBYBAe .r5Iy3b {
                margin-top: 0
            }

            .fAgajc {
                margin: 16px 16px
            }

            .fAgajc .r5Iy3b {
                margin-left: -16px;
                margin-right: -16px;
                margin-bottom: -16px
            }

            .fAgajc .naFSC {
                margin: 0 -16px
            }

            .fAgajc .LjTgvd {
                margin-top: 10px;
                margin-bottom: -10px
            }

            .mf8UVb {
                margin-bottom: -17px;
                padding-bottom: 1px
            }

            .r5Iy3b {
                border-top: 1px solid rgba(0, 0, 0, .12);
                height: 24px;
                margin-top: 10px;
                padding: 12px 0
            }

            .r5Iy3b span {
                vertical-align: middle;
                color: #4285f4;
                display: inline-block;
                font: normal 12px Roboto-Medium, HelveticaNeue-Medium, HelveticaNeue, sans-serif-medium, Arial, sans-serif;
                text-transform: uppercase;
            }

            .W6ILde {
                padding-top: 10px
            }

            .rhs-osrp .ptcLIOszQJu__wholepage-card {
                width: 455px
            }

            .rhs-osrp .V14nKc.ptcLIOszQJu__wholepage-card {
                box-shadow: none
            }

            .rhs-osrp.rhstc4 .ptcLIOszQJu__wholepage-card {
                width: 367px
            }

            .rhs-osrp.rhstc3 .ptcLIOszQJu__wholepage-card {
                width: 279px
            }

            .rhs-osrp .ptcLIOszQJu__wholepage-card:not(.V14nKc) {
                margin-bottom: 28px
            }

            .rhs-osrp .zyV9He {
                margin-top: -20px;
                margin-bottom: 8px
            }

            .rhs-osrp .itmmie {
                display: block
            }

            .rhs-osrp .doJBHb {
                color: #757575;
                font-size: 12px;
                line-height: 16px;
                display: block;
                float: right;
                text-align: right;
                padding-right: 16px
            }

            .rhs-osrp .ptcLIOszQJu__wholepage-card.B03h3d.V14nKc {
                border: none
            }

            .LT9CVd {
                box-sizing: border-box;
                max-width: 100%;
                overflow: hidden;
                white-space: nowrap;
                text-overflow: ellipsis;
                margin-right: -24px;
                padding-right: 24px;
            }

            .XIXZpd {}

            .xpdclose .fgfkAc {
                display: none
            }

            .kno-desc-fm .fgfkAc,
            .kno-desc-fm .xpdxpnd,
            .xpdclose .kno-desc-fm .xpdxpnd,
            .kno-desc-sh .fgfkAc,
            .kno-desc-sh .xpdxpnd,
            .xpdclose .kno-desc-sh .xpdxpnd,
            .kno-odesc-sh .V4pKmd,
            .kno-odesc-sh .o5Wcxb {
                display: inline
            }

            .kno-desc-sh .yZlgBd {
                display: inline
            }

            .kno-desc-sh .piXPB,
            .kno-desc-sh .piXPB.fgfkAc,
            .kno-desc-sh .piXPB.xpdxpnd {
                display: none
            }

            .kno-desc-fm .RKSCge {
                display: none
            }

            .kno-desc-sh .RKSCge,
            .kno-desc-sh .CeVKi {
                display: none
            }

            .xpdopen .RKSCge {
                display: none
            }

            .tlSSbb {
                margin-left: 4px;
                margin-right: 4px
            }

            .yZlgBd {
                display: none
            }

            .rhs-osrp .zloOqf {
                line-height: 1.58
            }

            .kno-fv .O9Y7Ec {
                display: none
            }

            .y8Jpof .zloOqf {
                font-size: 14px;
                margin-top: 2px
            }

            .GqKvT .kno-fv {
                color: #fff
            }

            .y8Jpof .LrzXr {
                color: #222
            }

            .kno-fb-d3 .zloOqf.kno-fb-ctx {
                padding-top: 3px;
                padding-bottom: 3px
            }

            .y8Jpof .w8qArf {
                font-weight: normal
            }

            .Z0LcW .TdhIi {
                color: inherit
            }

            .TdhIi {
                color: #878787
            }

            .fTCcEc {
                color: #1A73E8
            }

            .z7aCJd {
                display: inline-block;
                margin-left: 8px;
                max-height: 20px;
                text-decoration: none
            }

            .sM9J6e {
                text-decoration: line-through
            }

            .kno-fb-d3 .sM9J6e {
                text-decoration: none
            }

            .L5Xigb {
                align-items: center;
                display: flex;
                min-height: 32px
            }

            .dHsbqb {
                align-items: center;
                display: flex;
                min-height: 48px
            }

            .SW5pqf {
                color: #1a0dab;
                display: inline-block;
                font-family: arial, sans-serif-medium, sans-serif;
                line-height: 1.58;
            }

            .YSqX7b {
                width: 18px;
                height: 18px;
                margin: -4px 0
            }

            .ZZhrTe {
                cursor: pointer
            }

            .D2lsHc {
                display: none
            }

            .kno-fv-exp>.ZZhrTe {
                display: none
            }

            .kno-fv-exp>.D2lsHc {
                display: inline
            }

            .ZZhrTe:active {
                color: #dd4b39
            }

            .ZZhrTe:active,
            .ZZhrTe:hover {
                text-decoration: underline
            }

            .Jb0Zif .OOijTb {
                margin: 16px 0 16px 8px
            }

            .OOijTb .kno-vrt-t .thumb {
                display: block;
                margin: 0 auto 5px;
                overflow: hidden
            }

            .oFXWac .thumb {
                display: inline-block;
                margin-right: 16px;
                vertical-align: middle
            }

            .Jb0Zif .Rlm17c {
                height: 44px;
                margin: 0 auto 8px;
                width: 44px
            }

            .fhwVOd {
                padding-right: 2em
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
                    <script nonce="4X/xePeUOQ9joZlyG8qAWQ==">
                    (function() {
                        google.ldidly = -1;
                        google.ldi = {
                            "dimg_6": "https://lh3.googleusercontent.com/-XdUIqdMkCWA/AAAAAAAAAAI/AAAAAAAAAAA/4252rscbv5M/s64-w40-h40-k-cc/photo.jpg",
                            "dimg_10": "https://encrypted-tbn0.gstatic.com/images?q\u003dtbn:ANd9GcTlEBouCNt_HKHk0zjhO8y02a2VMJhZfOp6AxC6v6DU-Jd2vEsQOcg\u0026s\u003d0",
                            "dimg_17": "https://encrypted-tbn0.gstatic.com/images?q\u003dtbn:ANd9GcQfBJ9yuzHQUsFVzMvnuO6WXqJ2QA5pIAy1b3uHLxsTH5vBxtPLHtI\u0026s\u003d0",
                            "dimg_26": "https://encrypted-tbn0.gstatic.com/images?q\u003dtbn:ANd9GcRGmA-KuBx1l4_4p2njXP1Krkx1QgXPWRolUIZ4NOfy4oOxZrTTgU4\u0026s\u003d0",
                            "dimg_34": "https://encrypted-tbn0.gstatic.com/images?q\u003dtbn:ANd9GcSNhfYjFRqBcrHwrfBEFzP7iy0xXYWkwEaVQYIGneKzfAo6ShHocWQ\u0026s\u003d0",
                            "dimg_41": "https://encrypted-tbn0.gstatic.com/images?q\u003dtbn:ANd9GcR4Kt7IIFhb51Rl9Q5yn-anXultocjX7B1JAdGinZQ_FTBw_6BSOIw\u0026s\u003d0",
                            "dimg_49": "https://encrypted-tbn0.gstatic.com/images?q\u003dtbn:ANd9GcQvMkUISCafJtfSv30Ib6z6mG2DqpG4G8KZEsofwcZNAtnoPNjShrqLcA\u0026s\u003d0",
                            "dimg_57": "https://encrypted-tbn0.gstatic.com/images?q\u003dtbn:ANd9GcTR5mEZZAblonhMH9jN34tgVlimo-XzCLUC49gPyQIr1ujxi7H1mYI\u0026s\u003d0",
                            "dimg_8": "https://encrypted-tbn0.gstatic.com/images?q\u003dtbn:ANd9GcSc-1nRkKT52q7iUJ8BnSLtMFf8HULByY4zjaJELqs8_CQSfdwuboA\u0026s\u003d0",
                            "dimg_14": "https://encrypted-tbn0.gstatic.com/images?q\u003dtbn:ANd9GcR7QOKWDCHlC2BgoqS7bU98GtkDWbN6KriGqnUGXdhvbGLT-Xdc9Wc\u0026s\u003d0",
                            "dimg_22": "https://encrypted-tbn0.gstatic.com/images?q\u003dtbn:ANd9GcT8I1M4RUiaXYp7VnJ6u8bwjDULDRjWquJGzX2kCQHWq8N7BzAAUQU\u0026s\u003d0",
                            "dimg_29": "https://encrypted-tbn0.gstatic.com/images?q\u003dtbn:ANd9GcTxgHmUAF6gawajx3jeOpMUIky00bBzJOzw0WR8yEGUyX-eOjTocbE\u0026s\u003d0",
                            "dimg_37": "https://encrypted-tbn0.gstatic.com/images?q\u003dtbn:ANd9GcRJ-KzvxPz9Gd6Ji0bwjWbwt2aEpFM4wgV0-53MZUaHCV8xDEooS3E\u0026s\u003d0",
                            "dimg_44": "https://encrypted-tbn0.gstatic.com/images?q\u003dtbn:ANd9GcR6Ia_Ye-xaJKGu4G8VrHhzDYNTvT4w2OJMeJmXagP4y0Y-xWJ-GAQ\u0026s\u003d0",
                            "dimg_52": "https://encrypted-tbn0.gstatic.com/images?q\u003dtbn:ANd9GcQTSGa0QbXPuNJ4o4aSrhuqiIVTqCD_DozARPL4Rkvjiq3YMk_R7fE\u0026s\u003d0",
                            "dimg_12": "https://encrypted-tbn0.gstatic.com/images?q\u003dtbn:ANd9GcTfAfvJnaSZmzIbYuLK5rmMxQOcyBNS69ZQgG2L5TGMrEN9pwkRlqc\u0026s\u003d0",
                            "dimg_19": "https://encrypted-tbn0.gstatic.com/images?q\u003dtbn:ANd9GcS2Btq5cVFriVuxuY47KwpqFBrG1KrathFuhUDZRRqUqVLsJUZR6sM\u0026s\u003d0",
                            "dimg_24": "https://encrypted-tbn0.gstatic.com/images?q\u003dtbn:ANd9GcTvkWnG_sI-HKmvVvtMkwl6BiDa6PuG5-kidEI2yJt90S125F-UMKQ\u0026s\u003d0",
                            "dimg_32": "https://encrypted-tbn0.gstatic.com/images?q\u003dtbn:ANd9GcRKfTRTod3lPfDOyz65KSNdkBGRD3qCiIGDDshygr5qflA3FWQQmHI\u0026s\u003d0",
                            "dimg_39": "https://encrypted-tbn0.gstatic.com/images?q\u003dtbn:ANd9GcS4ezAj94XBpAW6ANo_DxvcoQpvKKodduzUa49FRFF_fIfew7KWUP0\u0026s\u003d0",
                            "dimg_47": "https://encrypted-tbn0.gstatic.com/images?q\u003dtbn:ANd9GcSZsO3MA1mD1MPkvDLHiOO0q-xh4rjfyOuicX1HBFKmuu_FH1qLTsM\u0026s\u003d0",
                            "dimg_55": "https://encrypted-tbn0.gstatic.com/images?q\u003dtbn:ANd9GcT1MvBle91UMKEymRYxKeFMO9byfmrAZ5U_pGfiZPQJDBeqakMI5e0\u0026s\u003d0"
                        };
                        google.pim = {};
                    })();
                    (function() {
                        var u =
                            '/xjs/_/js/k\x3dxjs.s.en_GB.Drd4gOi7tUg.O/ck\x3dxjs.s.7BVcbcwxD6Y.L.F4.O/m\x3dFkg7bd,HcFEGb,IvlUe,MC8mtf,OF7gzc,RMhBfe,T4BAC,TJw5qb,Y33vzc,ZyRBae,cdos,cr,hsm,iDPoPb,jsa,mvYTse,tg8oTe,uz938c,vWNDde,ws9Tlc,yQ43ff,d,csi/am\x3dAkAAAABgCcCsGwDOfxAAgAtKHAAAQICWINhYIIVISAhAAACzsAAAQA/d\x3d1/dg\x3d2/ct\x3dzgms/rs\x3dACT90oHCTGKbWMo_H79h71Ut4aKgSR686A';
                        setTimeout(function() {
                            var b = document;
                            var a = "SCRIPT";
                            "application/xhtml+xml" === b.contentType && (a = a.toLowerCase());
                            a = b.createElement(a);
                            a.src = u;
                            google.timers && google.timers.load && google.tick && google.tick("load",
                                "xjsls");
                            document.body.appendChild(a)
                        }, 0);
                    })();
                    (function() {
                        window.google.xjsu =
                            '/xjs/_/js/k\x3dxjs.s.en_GB.Drd4gOi7tUg.O/ck\x3dxjs.s.7BVcbcwxD6Y.L.F4.O/m\x3dFkg7bd,HcFEGb,IvlUe,MC8mtf,OF7gzc,RMhBfe,T4BAC,TJw5qb,Y33vzc,ZyRBae,cdos,cr,hsm,iDPoPb,jsa,mvYTse,tg8oTe,uz938c,vWNDde,ws9Tlc,yQ43ff,d,csi/am\x3dAkAAAABgCcCsGwDOfxAAgAtKHAAAQICWINhYIIVISAhAAACzsAAAQA/d\x3d1/dg\x3d2/ct\x3dzgms/rs\x3dACT90oHCTGKbWMo_H79h71Ut4aKgSR686A';
                    })();

                    function _DumpException(e) {
                        throw e;
                    }

                    function _F_installCss(c) {}
                    (function() {
                        google.jl = {
                            em: [],
                            emw: false,
                            lls: 'default',
                            pdt: 0,
                            snet: true,
                            uwp: true
                        };
                    })();
                    (function() {
                        var pmc =
                            '{\x22Fkg7bd\x22:{},\x22HcFEGb\x22:{},\x22IvlUe\x22:{},\x22MC8mtf\x22:{},\x22OF7gzc\x22:{},\x22RMhBfe\x22:{},\x22T4BAC\x22:{},\x22TJw5qb\x22:{},\x22Y33vzc\x22:{},\x22ZyRBae\x22:{},\x22aa\x22:{},\x22abd\x22:{\x22abd\x22:false,\x22deb\x22:false,\x22det\x22:false},\x22async\x22:{},\x22bgd\x22:{\x22ac\x22:true,\x22as\x22:true,\x22at\x22:0,\x22ea\x22:true,\x22ed\x22:0,\x22ei\x22:true,\x22el\x22:true,\x22ep\x22:true,\x22er\x22:true,\x22et\x22:0,\x22eu\x22:false,\x22wl\x22:false},\x22cdos\x22:{\x22bih\x22:654,\x22biw\x22:1366,\x22cdobsel\x22:false,\x22dpr\x22:\x221\x22},\x22cr\x22:{\x22qir\x22:false,\x22rctj\x22:true,\x22ref\x22:false,\x22uff\x22:false},\x22csi\x22:{},\x22d\x22:{},\x22ddls\x22:{},\x22dvl\x22:{\x22cookie_secure\x22:true,\x22cookie_timeout\x22:21600,\x22driver_ui_type\x22:2,\x22jsc\x22:\x22[null,null,null,30000,null,null,null,2,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,[\\\x2286400000\\\x22,\\\x22604800000\\\x22,2.0]\\n,null,1,21600000]\\n\x22,\x22mnr_crd\x22:\x221\x22,\x22msg_dsc\x22:\x22From your Internet address\x22,\x22msg_dsc_url\x22:\x22\x22,\x22msg_dvl\x22:\x22From your device\x22,\x22msg_err\x22:\x22Location unavailable\x22,\x22msg_gps\x22:\x22Using GPS\x22,\x22msg_unk\x22:\x22Unknown\x22,\x22msg_upd\x22:\x22Update location\x22,\x22msg_use\x22:\x22Use precise location\x22,\x22uul_text\x22:\x22700091, Kolkata, West Bengal\x22},\x22foot\x22:{\x22dv\x22:\x22czP_aL-0-Xwm8M_bUqimj4i1CNDpJtdh6_XJcm-gmwIAAAA\x22,\x22pf\x22:true,\x22po\x22:true,\x22qe\x22:false},\x22gf\x22:{\x22pid\x22:196},\x22hsm\x22:{},\x22iDPoPb\x22:{},\x22jsa\x22:{\x22csi\x22:true,\x22csir\x22:100},\x22kyn\x22:{},\x22llc\x22:{},\x22lli\x22:{},\x22lu\x22:{},\x22m\x22:{},\x22mUpTid\x22:{},\x22mpck\x22:{\x22me\x22:false},\x22mu\x22:{\x22murl\x22:\x22https://adservice.google.com/adsid/google/ui\x22},\x22mvYTse\x22:{},\x22sb_wiz\x22:{\x22rfs\x22:[\x22microsoft support \\u003Cb\\u003Echat\\u003C/b\\u003E\x22,\x22microsoft \\u003Cb\\u003Eoffice\\u003C/b\\u003E\x22,\x22microsoft \\u003Cb\\u003Eteams\\u003C/b\\u003E\x22,\x22microsoft \\u003Cb\\u003Elogin\\u003C/b\\u003E\x22,\x22microsoft support \\u003Cb\\u003Exbox\\u003C/b\\u003E\x22,\x22\\u003Cb\\u003Eoutlook \\u003C/b\\u003Esupport\x22,\x22microsoft support \\u003Cb\\u003Efor windows 10\\u003C/b\\u003E\x22,\x22\\u003Cb\\u003Eonedrive \\u003C/b\\u003Esupport\x22],\x22stok\x22:\x22yl4kv7lMxjbpyKI1JEo_k-IIOo4\x22},\x22sf\x22:{},\x22tg8oTe\x22:{},\x22tl\x22:{\x22rvkey\x22:\x22AIzaSyC_9Rt88UMjzgg5pIVArnfuIVkJx4zCdTY\x22},\x22uz938c\x22:{},\x22vWNDde\x22:{},\x22vs\x22:{},\x22ws9Tlc\x22:{},\x22yQ43ff\x22:{}}';
                        google.pmc = JSON.parse(pmc);
                    })();
                    (function() {
                        var r = ['sb_wiz', 'aa', 'abd', 'async', 'bgd', 'dvl', 'foot', 'kyn', 'lli', 'lu', 'm',
                            'mUpTid', 'mpck', 'mu', 'sf', 'tl', 'vs', 'exdc', 'pe'
                        ];
                        google.plm(r);
                    })();
                    (function() {
                        var m = [
                            [
                                ["root", [
                                    ["t-w-XilABeKRA", "iUvMP53jz9KY", "r-iUvMP53jz9KY", null, null, "exdc",
                                        null, "G3eKy"
                                    ],
                                    ["t-L9CBsj706lI", "iWoSCM2zYAqA", "r-iWoSCM2zYAqA", null, null, "pe",
                                        null, "JpM2Oe"
                                    ]
                                ]]
                            ]
                        ];
                        google.jsc && google.jsc.m(m);
                        google.log('rfl', '');
                    })();
                    (function() {
                        var m = ['B2WCFk',
                            '[\x22psy-ab\x22,\x22gws-wiz\x22,\x22microsoft online support\x22,\x22\x22,null,1,0,0,11,\x22en\x22,\x22yl4kv7lMxjbpyKI1JEo_k-IIOo4\x22,\x22\x22,\x22EaPUXvTcMJW_8QP9_44g\x22,0,\x22en-IN\x22,null,null,null,0,null,null,3,5,null,null,0,-1,0,0,0,\x22\x22,0,0,\x22\x22,null,0,null,null,null,\x22/suggest\x22,0,0,0,0,0,0,0,0,1,0,0,8,-1]\n',
                            'B2WCGg',
                            '[0,0,0,[null,null,[[[3,null,null,[null,[[\x22qdr_\x22,1,6]\n,[\x22qdr_h\x22,0,6]\n,[\x22qdr_d\x22,0,6]\n,[\x22qdr_w\x22,0,6]\n,[\x22qdr_m\x22,0,6]\n,[\x22qdr_y\x22,0,6]\n,[\x22cdr_opt\x22,0,1,[1,\x22Custom range...\x22,null,\x22cdr:1,cd_min:x,cd_max:x\x22,\x22\x22,\x22text\x22,\x22\x22,\x22\x22,6,1,[[[\x22q\x22,\x22microsoft online support\x22]\n,[\x22client\x22,\x22firefox-b-d\x22]\n]\n]\n,\x22cdr_opt\x22,\x225/23/2004\x22,0]\n]\n]\n,0]\n]\n,[3,null,null,[null,[[\x22li_\x22,1,6]\n,[\x22li_1\x22,0,6]\n]\n,1]\n]\n]\n,null,[\x22tbs\x22]\n]\n]\n,null,null,[null,[[\x22/search?q\\u003dmicrosoft+online+support\\u0026client\\u003dfirefox-b-d\\u0026source\\u003dlnms\x22,null,null,\x22All\x22,1,null,1,null,null,\x22WEB\x22,[0,2]\n,null,null,0]\n,[\x22/search?q\\u003dmicrosoft+online+support\\u0026client\\u003dfirefox-b-d\\u0026source\\u003dlnms\\u0026tbm\\u003dnws\x22,null,null,\x22News\x22,0,null,1,null,null,\x22NEWS\x22,[10,2]\n,null,null,10]\n,[\x22/search?q\\u003dmicrosoft+online+support\\u0026client\\u003dfirefox-b-d\\u0026source\\u003dlnms\\u0026tbm\\u003dvid\x22,null,null,\x22Videos\x22,0,null,1,null,null,\x22VIDEOS\x22,[13,2]\n,null,null,13]\n,[\x22/search?q\\u003dmicrosoft+online+support\\u0026client\\u003dfirefox-b-d\\u0026source\\u003dlnms\\u0026tbm\\u003disch\x22,null,null,\x22Images\x22,0,null,1,null,null,\x22IMAGES\x22,[6,2]\n,null,null,6]\n,[\x22/search?q\\u003dmicrosoft+online+support\\u0026client\\u003dfirefox-b-d\\u0026source\\u003dlnms\\u0026tbm\\u003dshop\x22,null,null,\x22Shopping\x22,0,null,1,null,null,\x22SHOPPING\x22,[12,2]\n,null,null,12]\n]\n,[[\x22https://maps.google.com/maps?client\\u003dfirefox-b-d\\u0026q\\u003dmicrosoft+online+support\\u0026gs_lcp\\u003dCgZwc3ktYWIQAzICCAAyAggAMgIIADICCAAyAggAMgIIADICCAAyAggAMgIIADICCAA6BQgAEJECOgUIABCDAVDczgFYpowCYLmRAmgAcAB4AIAB1AKIAfEokgEIMC4xNS44LjKYAQCgAQGqAQdnd3Mtd2l6\\u0026uact\\u003d5\\u0026um\\u003d1\\u0026ie\\u003dUTF-8\x22,null,null,\x22Maps\x22,0,null,1,null,null,\x22MAPS\x22,[8,2]\n,null,null,8]\n,[\x22/search?q\\u003dmicrosoft+online+support\\u0026client\\u003dfirefox-b-d\\u0026source\\u003dlnms\\u0026tbm\\u003dbks\x22,null,null,\x22Books\x22,0,null,1,null,null,\x22BOOKS\x22,[2,2]\n,null,null,2]\n,[\x22https://www.google.com/flights?q\\u003dmicrosoft+online+support\\u0026client\\u003dfirefox-b-d\\u0026source\\u003dlnms\\u0026tbm\\u003dflm\x22,null,null,\x22Flights\x22,0,null,1,null,null,\x22FLIGHTS\x22,[20,2]\n,null,null,20]\n,[\x22/search?q\\u003dmicrosoft+online+support\\u0026client\\u003dfirefox-b-d\\u0026source\\u003dlnms\\u0026tbm\\u003dfin\x22,null,null,\x22Finance\x22,0,null,1,null,null,\x22FINANCE\x22,[22,2]\n,null,null,22]\n]\n]\n,null,1]\n',
                            'B2WCF8', '[]\n', 'B2WCGo',
                            '[0,\x22/m/04sv4\x22,\x22Microsoft Corporation\x22,\x22_EaPUXvTcMJW_8QP9_44g36\x22]\n',
                            'B2WCGI',
                            '[0,2500,\x22/search?client\\u003dfirefox-b-d\x22,\x2212\x22,\x22inline\x22,2,0,0]\n',
                            'B2WCGQ',
                            '[0,2500,\x22/search?client\\u003dfirefox-b-d\x22,\x2213\x22,\x22inline\x22,2,0,0]\n',
                            'B2WCGY',
                            '[0,2500,\x22/search?client\\u003dfirefox-b-d\x22,\x2215\x22,\x22inline\x22,2,0,0]\n',
                            'B2WCFo',
                            '[null,[[null,\x22How to raise a microsoft support ticket?\x22,null,\x2211 months ago\x22,\x22UgynHZ3VIbvRmsUX_Sh4AaABGg\x22,null,null,null,null,null,1,1,null,0.78603756]\n,[null,\x22How to send an email to microsoft support?\x22,null,\x2211 months ago\x22,\x22UgzDTEYT_8PzBAxizkV4AaABGg\x22,null,null,null,null,null,0,1,null,0.75627375]\n]\n,null,0,[null,\x22https://lh3.googleusercontent.com/-XdUIqdMkCWA/AAAAAAAAAAI/AAAAAAAAAAA/4252rscbv5M/s64-k-cc/photo.jpg\x22]\n,[0,0]\n,[1]\n,[null,null,null,\x22https://mindsearch-autopush.corp.google.com/questions/answers?ho\\u0026origin\\u003dhttps://www.google.com\x22]\n,[0]\n]\n',
                            'B2WCFs', '[1,0,0,0,0,0,0,0]\n', 'B2WCFw', '[5,0,0,0,0,0,0,0]\n', 'B2WCF0',
                            '[3,3,0,\x22\x22,1,0,0,0,0]\n', 'B2WCF4', '[\x22\x22,1]\n', 'B2WCGA',
                            '[\x22MINDSEARCH_QUESTIONS\x22,\x22\x22,null,1]\n', 'B2WCGE', '[1,0,0,1,0,0,1,0]\n',
                            'B2WCGU',
                            '[0,2500,\x22/search?client\\u003dfirefox-b-d\x22,\x2219\x22,\x22inline\x22,2,0,0]\n',
                            'B2WCGM',
                            '[0,2500,\x22/search?client\\u003dfirefox-b-d\x22,\x2220\x22,\x22inline\x22,2,0,0]\n',
                            'B2WCGs', '[0,\x22inline\x22,2,2500,0,0]\n', 'B2WCGw',
                            '[\x22https://www.google.co.in/domainless/read?igu\\u003d1\x22,\x22AFz9zttJutOnEzuflx3V2ic-S_wsUDsodg:1590993682507\x22,3]\n',
                            'B2WCG0', '[1,null,null,1261,1349,0,null,null,null,null,0]\n', 'B2WCGc',
                            '[null,\x22/m/04sv4\x22,\x22Microsoft Corporation\x22,null,[\x22COMPANIES\x22,\x22VIDEO_GAMES\x22,\x22CHAINS\x22]\n]\n',
                            'B2WCGk',
                            '[[\x22https://www.google.com/search?kgmid\\u003d/m/04sv4\\u0026hl\\u003den-IN\\u0026q\\u003dMicrosoft\\u0026kgs\\u003d88bc277ee5b0a941\\u0026shndl\\u003d0\\u0026source\\u003dsh/x/kp\\u0026entrypoint\\u003dsh/x/kp\x22,null,null,\x22Microsoft Corporation\x22,\x22\x22]\n,[null,null,null,null,1,null,null,null,1]\n]\n',
                            'B2WCG4', '[]\n', 'tq7Pxb',
                            '[[[\x22uRoR4d\x22,0]\n,[\x22Nk1Bhf\x22,null,\x22#4285f4\x22]\n,[\x22gqXETb\x22,null,\x22#db4437\x22]\n,[\x22T1V3fc\x22,null,\x22#f4b400\x22]\n,[\x22pxDH4c\x22,null,\x22#0f9d58\x22]\n,[\x22lzJv9d\x22,null,\x22#fff\x22]\n,[\x22LACYrf\x22,0]\n,[\x22ptnYGd\x22,null,\x22[[[\\\x22box-sizing\\\x22,\\\x22box-sizing\\\x22]\\n,[\\\x22keyframes\\\x22,\\\x22keyframes\\\x22]\\n,[\\\x22animation\\\x22,\\\x22animation\\\x22]\\n,[\\\x22border-radius\\\x22,\\\x22border-radius\\\x22]\\n,[\\\x22transform\\\x22,\\\x22transform\\\x22]\\n]\\n]\\n\x22]\n]\n]\n'
                        ];
                        var a = m;
                        window.W_jd = window.W_jd || {};
                        for (var b = 0; b < a.length; b += 2) window.W_jd[a[b]] = JSON.parse(a[b + 1]);
                    })();
                    (function() {
                        window.WIZ_global_data = {
                            "Yllh3e": "%.@.1590993681798324,175923093,67354621]\n",
                            "w2btAe": "%.@.\"\",\"\",\"0\",null,null,null,1]\n",
                            "zChJod": "%.@.]\n",
                            "GWsdKe": "en-IN",
                            "eptZe": "/wizrpcui/_/WizRpcUi/"
                        };
                        window.IJ_values = ["rgba(0,102,33,1)", "rgba(0,0,0,.87)", "rgba(0,0,0,.54)",
                            "rgba(255,255,255,1)", "rgba(255,255,255,.7)", false, "#fff", "0",
                            "%.@.null,1,null,null,[null,654,1366]\n]\n", "4X/xePeUOQ9joZlyG8qAWQ\u003d\u003d",
                            "en-IN", false, "", "", false, "105250506097979753968"
                        ];
                    })();
                    google.x(null, function() {
                        (function() {
                            (function() {
                                google.csct = {};
                                google.csct.ps =
                                    'AOvVaw2G0vQE9A-knaFfbwXNSOGi\x26ust\x3d1591080081863912';
                            })();
                        })();
                        (function() {
                            (function() {
                                google.csct.rw = true;
                            })();
                        })();
                        (function() {
                            window.jsl = window.jsl || {};
                            window.jsl.dh = window.jsl.dh || function(i, c, d) {
                                try {
                                    var e = document.getElementById(i);
                                    if (e) {
                                        e.innerHTML = c;
                                        if (d) {
                                            d();
                                        }
                                    } else {
                                        if (window.jsl.el) {
                                            window.jsl.el(new Error('Missing ID.'), {
                                                'id': i
                                            });
                                        }
                                    }
                                } catch (e) {
                                    if (window.jsl.el) {
                                        window.jsl.el(new Error('jsl.dh'));
                                    }
                                }
                            };
                        })();
                        (function() {
                            window.jsl.dh('hdtbMenus',
                                '\x3cdiv class\x3d\x22hdtb-mn-cont\x22\x3e\x3cdiv id\x3d\x22XJDHvf\x22\x3e\x3c/div\x3e\x3cdiv class\x3d\x22hdtb-mn-hd\x22 aria-haspopup\x3d\x22true\x22 role\x3d\x22button\x22 tabindex\x3d\x220\x22\x3e\x3cdiv class\x3d\x22mn-hd-txt\x22\x3eAny time\x3c/div\x3e\x3cspan class\x3d\x22mn-dwn-arw\x22\x3e\x3c/span\x3e\x3c/div\x3e\x3cul class\x3d\x22hdtbU hdtb-mn-c\x22\x3e\x3cli class\x3d\x22hdtbItm hdtbSel\x22 id\x3d\x22qdr_\x22 tabindex\x3d\x220\x22\x3eAny time\x3c/li\x3e\x3cli class\x3d\x22hdtbItm\x22 id\x3d\x22qdr_h\x22\x3e\x3ca class\x3d\x22q qs\x22 ref\x3d\x22/search?q\x3dmicrosoft+online+support\x26amp;client\x3dfirefox-b-d\x26amp;source\x3dlnt\x26amp;tbs\x3dqdr:h\x26amp;sa\x3dX\x26amp;ved\x3d2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQpwV6BAglEBk\x22\x3ePast hour\x3c/a\x3e\x3c/li\x3e\x3cli class\x3d\x22hdtbItm\x22 id\x3d\x22qdr_d\x22\x3e\x3ca class\x3d\x22q qs\x22 ref\x3d\x22/search?q\x3dmicrosoft+online+support\x26amp;client\x3dfirefox-b-d\x26amp;source\x3dlnt\x26amp;tbs\x3dqdr:d\x26amp;sa\x3dX\x26amp;ved\x3d2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQpwV6BAglEBo\x22\x3ePast 24 hours\x3c/a\x3e\x3c/li\x3e\x3cli class\x3d\x22hdtbItm\x22 id\x3d\x22qdr_w\x22\x3e\x3ca class\x3d\x22q qs\x22 ref\x3d\x22/search?q\x3dmicrosoft+online+support\x26amp;client\x3dfirefox-b-d\x26amp;source\x3dlnt\x26amp;tbs\x3dqdr:w\x26amp;sa\x3dX\x26amp;ved\x3d2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQpwV6BAglEBs\x22\x3ePast week\x3c/a\x3e\x3c/li\x3e\x3cli class\x3d\x22hdtbItm\x22 id\x3d\x22qdr_m\x22\x3e\x3ca class\x3d\x22q qs\x22 ref\x3d\x22/search?q\x3dmicrosoft+online+support\x26amp;client\x3dfirefox-b-d\x26amp;source\x3dlnt\x26amp;tbs\x3dqdr:m\x26amp;sa\x3dX\x26amp;ved\x3d2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQpwV6BAglEBw\x22\x3ePast month\x3c/a\x3e\x3c/li\x3e\x3cli class\x3d\x22hdtbItm\x22 id\x3d\x22qdr_y\x22\x3e\x3ca class\x3d\x22q qs\x22 ref\x3d\x22/search?q\x3dmicrosoft+online+support\x26amp;client\x3dfirefox-b-d\x26amp;source\x3dlnt\x26amp;tbs\x3dqdr:y\x26amp;sa\x3dX\x26amp;ved\x3d2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQpwV6BAglEB0\x22\x3ePast year\x3c/a\x3e\x3c/li\x3e\x3cli class\x3d\x22hdtbItm\x22 id\x3d\x22cdr_opt\x22\x3e\x3cdiv jscontroller\x3d\x22Uuupec\x22 data-m\x3d\x22true\x22\x3e\x3cspan class\x3d\x22q\x22 id\x3d\x22cdrlnk\x22 tabindex\x3d\x220\x22 jsaction\x3d\x22EEGHee\x22 data-ved\x3d\x222ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQpwV6BAglEB4\x22\x3eCustom range...\x3c/span\x3e\x3cdiv class\x3d\x22n5Ug4b\x22 style\x3d\x22display:none\x22\x3e\x3cdiv class\x3d\x22vOvh1b\x22 jsaction\x3d\x22xp3IKd\x22\x3e\x3c/div\x3e\x3cdiv class\x3d\x22J6UZg\x22\x3e\x3cdiv class\x3d\x22Jy9Ore\x22\x3eCustomised date range\x3c/div\x3e\x3clabel class\x3d\x22Qtsmnf tmDYm\x22 for\x3d\x22OouJcb\x22\x3eFrom\x3c/label\x3e\x3clabel class\x3d\x22Qtsmnf iWBKNe\x22 for\x3d\x22rzG2be\x22\x3eTo\x3c/label\x3e\x3cdiv class\x3d\x22Gwgzqd\x22 role\x3d\x22button\x22 tabindex\x3d\x220\x22 jsaction\x3d\x22xp3IKd\x22\x3e\x3c/div\x3e\x3cdiv class\x3d\x22NwEGxd\x22\x3e\x3cdiv class\x3d\x22qomYCd\x22\x3e\x3c/div\x3e\x3cform action\x3d\x22/search\x22 class\x3d\x22T3kYXe\x22 method\x3d\x22get\x22\x3e\x3cinput name\x3d\x22q\x22 value\x3d\x22microsoft online support\x22 type\x3d\x22hidden\x22\x3e\x3cinput name\x3d\x22client\x22 value\x3d\x22firefox-b-d\x22 type\x3d\x22hidden\x22\x3e\x3cinput name\x3d\x22source\x22 type\x3d\x22hidden\x22 value\x3d\x22lnt\x22\x3e\x3cinput value\x3d\x22cdr:1,cd_min:x,cd_max:x\x22 id\x3d\x22HjtPBb\x22 name\x3d\x22tbs\x22 type\x3d\x22hidden\x22\x3e\x3cinput value\x3d\x22\x22 name\x3d\x22tbm\x22 type\x3d\x22hidden\x22\x3e\x3cinput class\x3d\x22OouJcb ktf mini\x22 type\x3d\x22text\x22 value\x3d\x22\x22 autocomplete\x3d\x22off\x22 id\x3d\x22OouJcb\x22 tabindex\x3d\x220\x22 jsaction\x3d\x22focus:daRB0b\x22\x3e\x3cinput class\x3d\x22rzG2be ktf mini\x22 type\x3d\x22text\x22 value\x3d\x22\x22 autocomplete\x3d\x22off\x22 id\x3d\x22rzG2be\x22 tabindex\x3d\x220\x22 jsaction\x3d\x22focus:daRB0b\x22\x3e\x3cinput class\x3d\x22Ru1Ao ksb mini\x22 value\x3d\x22Go\x22 tabindex\x3d\x220\x22 type\x3d\x22submit\x22 jsaction\x3d\x22tnv.scf\x22\x3e\x3c/form\x3e\x3c/div\x3e\x3c/div\x3e\x3c/div\x3e\x3c/div\x3e\x3c/li\x3e\x3c/ul\x3e\x3cspan class\x3d\x22hQKUmb\x22\x3e\x3c/span\x3e\x3cdiv class\x3d\x22hdtb-mn-hd\x22 aria-haspopup\x3d\x22true\x22 role\x3d\x22button\x22 tabindex\x3d\x220\x22\x3e\x3cdiv class\x3d\x22mn-hd-txt\x22\x3eAll results\x3c/div\x3e\x3cspan class\x3d\x22mn-dwn-arw\x22\x3e\x3c/span\x3e\x3c/div\x3e\x3cul class\x3d\x22hdtbU hdtb-mn-c\x22\x3e\x3cli class\x3d\x22hdtbItm hdtbSel\x22 id\x3d\x22li_\x22 tabindex\x3d\x220\x22\x3eAll results\x3c/li\x3e\x3cli class\x3d\x22hdtbItm\x22 id\x3d\x22li_1\x22\x3e\x3ca class\x3d\x22q qs\x22 ref\x3d\x22/search?q\x3dmicrosoft+online+support\x26amp;client\x3dfirefox-b-d\x26amp;source\x3dlnt\x26amp;tbs\x3dli:1\x26amp;sa\x3dX\x26amp;ved\x3d2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQpwV6BAglECE\x22\x3eVerbatim\x3c/a\x3e\x3c/li\x3e\x3c/ul\x3e\x3cspan class\x3d\x22hQKUmb\x22\x3e\x3c/span\x3e\x3c/div\x3e'
                                );
                        })();
                        (function() {
                            window.jsl.dh('_EaPUXvTcMJW_8QP9_44g94',
                                '\x3cdiv class\x3d\x22mod\x22 data-md\x3d\x2261\x22 style\x3d\x22clear:none\x22\x3e\x3c!--m--\x3e\x3cdiv aria-level\x3d\x223\x22 class\x3d\x22LGOjhe\x22 role\x3d\x22heading\x22 data-attrid\x3d\x22wa:/description\x22 data-hveid\x3d\x22CBwQBQ\x22\x3e\x3cspan class\x3d\x22ILfuVd NA6bn c3biWd\x22\x3e\x3cdiv class\x3d\x22d9FyLd\x22\x3e\x3cb\x3eMicrosoft Support Chat\x3c/b\x3e\x3c/div\x3e\x3cspan class\x3d\x22e24Kjd\x22\x3e You can also contact \x3cb\x3eMicrosoft Support\x3c/b\x3e by email and \x3cb\x3echat\x3c/b\x3e. ... You could also use the services of \x3cb\x3eMicrosoft\x3c/b\x3e Answer Desk, a \x3cb\x3elive\x3c/b\x3e paid Tech \x3cb\x3eSupport\x3c/b\x3e site, to \x3cb\x3echat\x3c/b\x3e with a \x3cb\x3eMicrosoft Support\x3c/b\x3e executive. \x3cb\x3eMicrosoft\x3c/b\x3e also offers a Virtual \x3cb\x3eSupport\x3c/b\x3e Agent.\x3c/span\x3e\x3c/span\x3e\x3cspan class\x3d\x22kX21rb\x22\x3eMar 11, 2018\x3c/span\x3e\x3c/div\x3e\x3c!--n--\x3e\x3c/div\x3e\x3cdiv class\x3d\x22g\x22\x3e\x3c!--m--\x3e\x3cdiv class\x3d\x22rc\x22 data-hveid\x3d\x22CBwQBw\x22 data-ved\x3d\x222ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQFSgBMAd6BAgcEAc\x22\x3e\x3cdiv class\x3d\x22r\x22\x3e\x3ca ref\x3d\x22https://www.thewindowsclub.com/microsoft-support-chat-phone-number\x22 onmousedown\x3d\x22return rwt(this,\x27\x27,\x27\x27,\x27\x27,\x27\x27,\x27AOvVaw0IGNqyhhgHbG91FMmmtErW\x27,\x27\x27,\x272ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQFjAHegQIHBAI\x27,\x27\x27,\x27\x27,event)\x22\x3e\x3cbr\x3e\x3ch3 class\x3d\x22LC20lb DKV0Md\x22\x3eMicrosoft Support : Phone Number, Live Chat, Email ID, Useful Links\x3c/h3\x3e\x3cdiv class\x3d\x22TbwUpd NJjxre\x22\x3e\x3ccite class\x3d\x22iUh30 bc tjvcx\x22\x3ewww.thewindowsclub.com\x3cspan class\x3d\x22eipWBe\x22\x3e \x26rsaquo; microsoft-support-chat-phon...\x3c/span\x3e\x3c/cite\x3e\x3c/div\x3e\x3c/a\x3e\x3cdiv class\x3d\x22B6fmyf\x22\x3e\x3cdiv class\x3d\x22TbwUpd\x22\x3e\x3ccite class\x3d\x22iUh30 bc tjvcx\x22\x3ewww.thewindowsclub.com\x3cspan class\x3d\x22eipWBe\x22\x3e \x26rsaquo; microsoft-support-chat-phon...\x3c/span\x3e\x3c/cite\x3e\x3c/div\x3e\x3cdiv class\x3d\x22eFM0qc\x22\x3e\x3c/div\x3e\x3c/div\x3e\x3c/div\x3e\x3cdiv class\x3d\x22s\x22\x3e\x3cdiv\x3e\x3cspan class\x3d\x22st\x22\x3e\x3c/span\x3e\x3c/div\x3e\x3c/div\x3e\x3c/div\x3e\x3c!--n--\x3e\x3c/div\x3e\x3cdiv class\x3d\x22iOBnre match-mod-horizontal-padding\x22\x3eSearch for: \x3ca ref\x3d\x22/search?client\x3dfirefox-b-d\x26amp;q\x3dDoes+Microsoft+have+online+chat+support%3F\x26amp;sa\x3dX\x26amp;ved\x3d2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQzmd6BAgcEAw\x22\x3eDoes Microsoft have online chat support?\x3c/a\x3e\x3c/div\x3e'
                                );
                        })();
                        (function() {
                            window.jsl.dh('_EaPUXvTcMJW_8QP9_44g107',
                                '\x3cdiv class\x3d\x22mod\x22 data-md\x3d\x2261\x22 style\x3d\x22clear:none\x22\x3e\x3c!--m--\x3e\x3cdiv aria-level\x3d\x223\x22 class\x3d\x22LGOjhe\x22 role\x3d\x22heading\x22 data-attrid\x3d\x22wa:/description\x22 data-hveid\x3d\x22CBwQEA\x22\x3e\x3cspan class\x3d\x22ILfuVd NA6bn c3biWd\x22\x3e\x3cspan class\x3d\x22e24Kjd\x22\x3eIf you need to contact a \x3cb\x3elive person\x3c/b\x3e in \x3cb\x3eMicrosoft\x3c/b\x3e customer service you need to dial 1-877-696-7786. This number is available 24 hours a day. \x3cb\x3eTo speak\x3c/b\x3e with a \x3cb\x3elive\x3c/b\x3e agent, you need to press 3 at the first prompt, then press 6 at the second prompt and press 6 at the third.\x3c/span\x3e\x3c/span\x3e\x3c/div\x3e\x3c!--n--\x3e\x3c/div\x3e\x3cdiv class\x3d\x22g\x22\x3e\x3c!--m--\x3e\x3cdiv class\x3d\x22rc\x22 data-hveid\x3d\x22CBwQEQ\x22 data-ved\x3d\x222ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQFSgBMAl6BAgcEBE\x22\x3e\x3cdiv class\x3d\x22r\x22\x3e\x3ca ref\x3d\x22https://numberforliveperson.com/microsoft/\x22 onmousedown\x3d\x22return rwt(this,\x27\x27,\x27\x27,\x27\x27,\x27\x27,\x27AOvVaw1ISDMIFJN3OQBbrF8DhWqs\x27,\x27\x27,\x272ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQFjAJegQIHBAS\x27,\x27\x27,\x27\x27,event)\x22\x3e\x3cbr\x3e\x3ch3 class\x3d\x22LC20lb DKV0Md\x22\x3eHow to Talk to a Live Person in Microsoft Customer Service ...\x3c/h3\x3e\x3cdiv class\x3d\x22TbwUpd NJjxre\x22\x3e\x3ccite class\x3d\x22iUh30 bc tjvcx\x22\x3enumberforliveperson.com\x3cspan class\x3d\x22eipWBe\x22\x3e \x26rsaquo; microsoft\x3c/span\x3e\x3c/cite\x3e\x3c/div\x3e\x3c/a\x3e\x3cdiv class\x3d\x22B6fmyf\x22\x3e\x3cdiv class\x3d\x22TbwUpd\x22\x3e\x3ccite class\x3d\x22iUh30 bc tjvcx\x22\x3enumberforliveperson.com\x3cspan class\x3d\x22eipWBe\x22\x3e \x26rsaquo; microsoft\x3c/span\x3e\x3c/cite\x3e\x3c/div\x3e\x3cdiv class\x3d\x22eFM0qc\x22\x3e\x3c/div\x3e\x3c/div\x3e\x3c/div\x3e\x3cdiv class\x3d\x22s\x22\x3e\x3cdiv\x3e\x3cspan class\x3d\x22st\x22\x3e\x3c/span\x3e\x3c/div\x3e\x3c/div\x3e\x3c/div\x3e\x3c!--n--\x3e\x3c/div\x3e\x3cdiv class\x3d\x22iOBnre match-mod-horizontal-padding\x22\x3eSearch for: \x3ca ref\x3d\x22/search?client\x3dfirefox-b-d\x26amp;q\x3dHow+do+I+talk+to+a+live+person+at+Microsoft%3F\x26amp;sa\x3dX\x26amp;ved\x3d2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQzmd6BAgcEBY\x22\x3eHow do I talk to a live person at Microsoft?\x3c/a\x3e\x3c/div\x3e'
                                );
                        })();
                        (function() {
                            window.jsl.dh('_EaPUXvTcMJW_8QP9_44g112',
                                '\x3cdiv class\x3d\x22mod\x22 data-md\x3d\x2261\x22 style\x3d\x22clear:none\x22\x3e\x3c!--m--\x3e\x3cdiv aria-level\x3d\x223\x22 class\x3d\x22LGOjhe\x22 role\x3d\x22heading\x22 data-attrid\x3d\x22wa:/description\x22 data-hveid\x3d\x22CBwQGg\x22\x3e\x3cspan class\x3d\x22ILfuVd NA6bn c3biWd\x22\x3e\x3cspan class\x3d\x22e24Kjd\x22\x3eOn Tuesday\x26#39;s from 8:00 AM -10:00 AM,* our Business Sales Specialists are available for you, providing personalized guidance and \x3cb\x3esupport\x3c/b\x3e to help you meet your business needs and objectives.\x3c/span\x3e\x3c/span\x3e\x3c/div\x3e\x3c!--n--\x3e\x3c/div\x3e\x3cdiv class\x3d\x22g\x22\x3e\x3c!--m--\x3e\x3cdiv class\x3d\x22rc\x22 data-hveid\x3d\x22CBwQGw\x22 data-ved\x3d\x222ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQFSgBMAt6BAgcEBs\x22\x3e\x3cdiv class\x3d\x22r\x22\x3e\x3ca ref\x3d\x22https://www.microsoft.com/en-us/store/locations/officehours\x22 onmousedown\x3d\x22return rwt(this,\x27\x27,\x27\x27,\x27\x27,\x27\x27,\x27AOvVaw1aVzaDqmh2YP3QQkFCDWBK\x27,\x27\x27,\x272ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQFjALegQIHBAc\x27,\x27\x27,\x27\x27,event)\x22\x3e\x3cbr\x3e\x3ch3 class\x3d\x22LC20lb DKV0Md\x22\x3eofficehours - Microsoft\x3c/h3\x3e\x3cdiv class\x3d\x22TbwUpd NJjxre\x22\x3e\x3ccite class\x3d\x22iUh30 bc tjvcx\x22\x3ewww.microsoft.com\x3cspan class\x3d\x22eipWBe\x22\x3e \x26rsaquo; en-us \x26rsaquo; store \x26rsaquo; locations \x26rsaquo; officeho...\x3c/span\x3e\x3c/cite\x3e\x3c/div\x3e\x3c/a\x3e\x3cdiv class\x3d\x22B6fmyf\x22\x3e\x3cdiv class\x3d\x22TbwUpd\x22\x3e\x3ccite class\x3d\x22iUh30 bc tjvcx\x22\x3ewww.microsoft.com\x3cspan class\x3d\x22eipWBe\x22\x3e \x26rsaquo; en-us \x26rsaquo; store \x26rsaquo; locations \x26rsaquo; officeho...\x3c/span\x3e\x3c/cite\x3e\x3c/div\x3e\x3cdiv class\x3d\x22eFM0qc\x22\x3e\x3c/div\x3e\x3c/div\x3e\x3c/div\x3e\x3cdiv class\x3d\x22s\x22\x3e\x3cdiv\x3e\x3cspan class\x3d\x22st\x22\x3e\x3c/span\x3e\x3c/div\x3e\x3c/div\x3e\x3c/div\x3e\x3c!--n--\x3e\x3c/div\x3e\x3cdiv class\x3d\x22iOBnre match-mod-horizontal-padding\x22\x3eSearch for: \x3ca ref\x3d\x22/search?client\x3dfirefox-b-d\x26amp;q\x3dWhat+are+Microsoft+support+hours%3F\x26amp;sa\x3dX\x26amp;ved\x3d2ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQzmd6BAgcECA\x22\x3eWhat are Microsoft support hours?\x3c/a\x3e\x3c/div\x3e'
                                );
                        })();
                        (function() {
                            window.jsl.dh('vYnfef',
                                '\x3cdiv\x3e\x3cg-lightbox jsname\x3d\x22Sx9Kwc\x22 jscontroller\x3d\x22Adromf\x22 data-df\x3d\x22false\x22 jsshadow\x3d\x22\x22 jsaction\x3d\x22rcuQ6b:npT2md\x22 data-hveid\x3d\x22CAEQDw\x22 data-ved\x3d\x222ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQg-sCegQIARAP\x22\x3e\x3cdiv jsname\x3d\x22jt9vfc\x22 aria-hidden\x3d\x22true\x22 role\x3d\x22button\x22 tabindex\x3d\x220\x22 jsaction\x3d\x22focus:sT2f3e\x22 style\x3d\x22display:none\x22\x3e\x3c/div\x3e\x3cdiv jsname\x3d\x22AHe6Kc\x22 class\x3d\x22ynlwjd qzMpzb u98ib\x22 style\x3d\x22display:none;outline:none\x22 role\x3d\x22dialog\x22 tabindex\x3d\x22-1\x22 jsaction\x3d\x22lcm_load_lightbox:hfClUb;lcm_load_close_lightbox:vhMcte;lcm_open_lightbox:FL9aIe;lcm_close_lightbox:DlGmce;mLt3mc\x22\x3e\x3cdiv class\x3d\x22dtCYCd\x22 jsaction\x3d\x22yZGKvf\x22 data-ved\x3d\x222ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQ-UN6BAgBEBA\x22\x3e\x3cg-loading-icon jsname\x3d\x22aZ2wEe\x22 class\x3d\x22Xfh32\x22 style\x3d\x22display:none;height:24px;width:24px\x22\x3e\x3cimg height\x3d\x2224\x22 src\x3d\x22//www.gstatic.com/ui/v1/activityindicator/loading_24.gif\x22 width\x3d\x2224\x22 alt\x3d\x22Loading...\x22 role\x3d\x22progressbar\x22\x3e\x3c/g-loading-icon\x3e\x3c/div\x3e\x3cdiv class\x3d\x22Xvesr\x22 aria-label\x3d\x22Close\x22 role\x3d\x22button\x22 tabindex\x3d\x220\x22 jsaction\x3d\x22yZGKvf\x22 data-ved\x3d\x222ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQ-EN6BAgBEBE\x22\x3e\x3c/div\x3e\x3cdiv jsname\x3d\x22Sx9Kwc\x22 class\x3d\x22AU64fe\x22 style\x3d\x22display:none\x22\x3e\x3cspan jsslot\x3d\x22\x22\x3e\x3cdiv class\x3d\x22VFlF2c VJp9rd\x22\x3e\x3cdiv\x3e\x3cdiv class\x3d\x22jx3Xk\x22\x3e\x3cspan class\x3d\x22EMNPad\x22\x3eQ\x26A on Google\x3c/span\x3e\x3c/div\x3e\x3cdiv jsname\x3d\x22GsJ1Oe\x22 class\x3d\x22a83P8e y yp\x22 data-jiis\x3d\x22up\x22 data-async-type\x3d\x22ugc_ms_ga\x22 data-async-context-required\x3d\x22question_stanza_id\x22 id\x3d\x22gqimuQCLVOK__answerListAsync\x22 data-ved\x3d\x222ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQ3dQFegQIARAS\x22\x3e\x3c/div\x3e\x3c/div\x3e\x3c/div\x3e\x3c/span\x3e\x3c/div\x3e\x3c/div\x3e\x3cdiv jsname\x3d\x22qngMid\x22 aria-hidden\x3d\x22true\x22 role\x3d\x22button\x22 tabindex\x3d\x220\x22 jsaction\x3d\x22focus:tuePCd\x22 style\x3d\x22display:none\x22\x3e\x3c/div\x3e\x3c/g-lightbox\x3e\x3c/div\x3e'
                                );
                        })();
                        (function() {
                            window.jsl.dh('_EaPUXvTcMJW_8QP9_44g16',
                                '\x3cdiv jsname\x3d\x22bF1uUb\x22 class\x3d\x22t7xA6 lxG8Hd\x22\x3e\x3c/div\x3e\x3cdiv class\x3d\x22bErdLd hFCnyd wwYr3\x22\x3e\x3cdiv class\x3d\x22ls8Qne\x22 aria-hidden\x3d\x22true\x22 role\x3d\x22button\x22 tabindex\x3d\x220\x22 jsaction\x3d\x22focus:sT2f3e\x22\x3e\x3c/div\x3e\x3cspan jsslot\x3d\x22\x22\x3e\x3cdiv class\x3d\x22NJfJb Sr5CLc BQlSMe\x22 role\x3d\x22dialog\x22\x3e\x3cspan jsname\x3d\x22tqp7ud\x22 class\x3d\x22B4CWGf z1asCe wuXmqc\x22 aria-label\x3d\x22Close\x22 role\x3d\x22button\x22 tabindex\x3d\x220\x22 jsaction\x3d\x22fire.dg_close\x22\x3e\x3csvg focusable\x3d\x22false\x22 xmlns\x3d\x22http://www.w3.org/2000/svg\x22 viewbox\x3d\x220 0 24 24\x22\x3e\x3cpath d\x3d\x22M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z\x22\x3e\x3c/path\x3e\x3c/svg\x3e\x3c/span\x3e\x3cdiv class\x3d\x22ncZ3cb\x22\x3e\x3cg-loading-icon style\x3d\x22height:24px;width:24px\x22\x3e\x3cimg height\x3d\x2224\x22 src\x3d\x22//www.gstatic.com/ui/v1/activityindicator/loading_24.gif\x22 width\x3d\x2224\x22 alt\x3d\x22Loading...\x22 role\x3d\x22progressbar\x22\x3e\x3c/g-loading-icon\x3e\x3c/div\x3e\x3cdiv jsname\x3d\x22VSkPL\x22\x3e\x3c/div\x3e\x3c/div\x3e\x3c/span\x3e\x3cdiv class\x3d\x22ls8Qne\x22 aria-hidden\x3d\x22true\x22 role\x3d\x22button\x22 tabindex\x3d\x220\x22 jsaction\x3d\x22focus:tuePCd\x22\x3e\x3c/div\x3e\x3c/div\x3e'
                                );
                        })();
                        (function() {
                            window.jsl.dh('_EaPUXvTcMJW_8QP9_44g100',
                                '\x3cdiv jsname\x3d\x22bF1uUb\x22 class\x3d\x22t7xA6 lxG8Hd\x22\x3e\x3c/div\x3e\x3cdiv class\x3d\x22bErdLd hFCnyd wwYr3\x22\x3e\x3cdiv class\x3d\x22ls8Qne\x22 aria-hidden\x3d\x22true\x22 role\x3d\x22button\x22 tabindex\x3d\x220\x22 jsaction\x3d\x22focus:sT2f3e\x22\x3e\x3c/div\x3e\x3cspan jsslot\x3d\x22\x22\x3e\x3cdiv class\x3d\x22NJfJb Sr5CLc E1kGSe\x22 aria-label\x3d\x22Share\x22 role\x3d\x22dialog\x22\x3e\x3cspan jsname\x3d\x22tqp7ud\x22 class\x3d\x22lZC9wd hide-focus-ring z1asCe wuXmqc\x22 aria-label\x3d\x22Close\x22 role\x3d\x22button\x22 tabindex\x3d\x220\x22 jsaction\x3d\x22fire.dg_close\x22 data-ved\x3d\x222ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQzIIEMBh6BAgbEAY\x22\x3e\x3csvg focusable\x3d\x22false\x22 xmlns\x3d\x22http://www.w3.org/2000/svg\x22 viewbox\x3d\x220 0 24 24\x22\x3e\x3cpath d\x3d\x22M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z\x22\x3e\x3c/path\x3e\x3c/svg\x3e\x3c/span\x3e\x3cdiv jsname\x3d\x22OGvssd\x22 class\x3d\x22aNrSe\x22\x3eShare\x3c/div\x3e\x3cdiv jsname\x3d\x22Sy6N1c\x22 class\x3d\x22Io6Xr\x22\x3e\x3c/div\x3e\x3cdiv jsname\x3d\x22b0t70b\x22 jscontroller\x3d\x22U0SiBc\x22\x3e\x3ca jsname\x3d\x22RgELLe\x22 class\x3d\x22DQc04b hide-focus-ring\x22 role\x3d\x22link\x22 tabindex\x3d\x220\x22 jsaction\x3d\x22rT2OA\x22\x3e\x3cdiv class\x3d\x22bQkCTc\x22\x3e\x3cimg class\x3d\x22fTE6nf\x22 src\x3d\x22https://www.gstatic.com/kpui/social/fb_32x32.png\x22 alt\x3d\x22Facebook\x22\x3e\x3c/div\x3eFacebook\x3c/a\x3e\x3ca jsname\x3d\x22P8lkFb\x22 class\x3d\x22DQc04b hide-focus-ring\x22 role\x3d\x22link\x22 tabindex\x3d\x220\x22 jsaction\x3d\x22re2RZb\x22\x3e\x3cdiv class\x3d\x22bQkCTc\x22\x3e\x3cimg class\x3d\x22fTE6nf\x22 src\x3d\x22https://www.gstatic.com/kpui/social/twitter_32x32.png\x22 alt\x3d\x22Twitter\x22\x3e\x3c/div\x3eTwitter\x3c/a\x3e\x3ca jsname\x3d\x22bVp1N\x22 class\x3d\x22DQc04b mBtcv hide-focus-ring\x22 role\x3d\x22link\x22 tabindex\x3d\x220\x22 jsaction\x3d\x22NmUBTc\x22\x3e\x3cdiv class\x3d\x22bQkCTc\x22\x3e\x3cimg class\x3d\x22fTE6nf\x22 src\x3d\x22/images/icons/material/system/1x/email_grey600_24dp.png\x22 alt\x3d\x22Email\x22\x3e\x3c/div\x3e\x3cspan class\x3d\x22tW0dvd\x22\x3eEmail\x3c/span\x3e\x3c/a\x3e\x3cdiv jsname\x3d\x22GIN7Bd\x22 jscontroller\x3d\x22eJUPEd\x22\x3e\x3cdiv jsname\x3d\x22rTZwQe\x22\x3e\x3cdiv jsname\x3d\x22uu7Hed\x22\x3e\x3cdiv class\x3d\x22ydMLRd HYsXi\x22 role\x3d\x22button\x22 tabindex\x3d\x220\x22 jsaction\x3d\x22ScPJh\x22\x3eClick to copy link\x3c/div\x3e\x3c/div\x3e\x3cdiv jsname\x3d\x22axr9cd\x22\x3e\x3cdiv class\x3d\x22ydMLRd\x22\x3eShare link\x3c/div\x3e\x3c/div\x3e\x3c/div\x3e\x3cdiv jsname\x3d\x22pAZ6Ed\x22 class\x3d\x22ydMLRd\x22 aria-live\x3d\x22polite\x22 style\x3d\x22display:none\x22\x3eLink copied\x3c/div\x3e\x3cdiv class\x3d\x22HmofF\x22\x3e\x3cdiv jsaction\x3d\x22aiBUrb\x22\x3e\x3cg-text-field jsname\x3d\x22zgnjS\x22 style\x3d\x22margin:0px\x22 jscontroller\x3d\x22XeLme\x22 class\x3d\x22rysuG LXtP0 K56Jue\x22 jsshadow\x3d\x22\x22 jsaction\x3d\x22rcuQ6b:npT2md\x22\x3e\x3cdiv class\x3d\x22kp85vc\x22\x3e\x3cdiv\x3e\x3cinput class\x3d\x22ZXb90b qKoqyc\x22 jsaction\x3d\x22focus:daRB0b;blur:kDTLMd\x22 aria-label\x3d\x22Share link\x22 readonly\x3d\x22\x22 type\x3d\x22url\x22\x3e\x3c/div\x3e\x3c/div\x3e\x3cdiv jsname\x3d\x22NowJzb\x22 class\x3d\x22xqPsfb\x22\x3e\x3c/div\x3e\x3c/g-text-field\x3e\x3c/div\x3e\x3c/div\x3e\x3cdiv jsname\x3d\x22tQ9n1c\x22 class\x3d\x22Cnzagc\x22 aria-hidden\x3d\x22true\x22\x3e\x3c/div\x3e\x3c/div\x3e\x3c/div\x3e\x3c/div\x3e\x3c/span\x3e\x3cdiv class\x3d\x22ls8Qne\x22 aria-hidden\x3d\x22true\x22 role\x3d\x22button\x22 tabindex\x3d\x220\x22 jsaction\x3d\x22focus:tuePCd\x22\x3e\x3c/div\x3e\x3c/div\x3e'
                                );
                        })();
                        (function() {
                            window.jsl.dh('eob_21',
                                '\x3cdiv jsname\x3d\x22UTgHCf\x22 class\x3d\x22AUiS2\x22 data-ved\x3d\x222ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQx40DegQIOBAA\x22\x3e\x3cdiv jsname\x3d\x22d3PE6e\x22 style\x3d\x22display:none\x22\x3e\x3cdiv data-ved\x3d\x222ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQsKwBKAB6BAg4EAE\x22\x3emicrosoft support xbox\x3c/div\x3e\x3cdiv data-ved\x3d\x222ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQsKwBKAF6BAg4EAI\x22\x3eoffice 365 forum\x3c/div\x3e\x3cdiv data-ved\x3d\x222ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQsKwBKAJ6BAg4EAM\x22\x3emicrosoft contacts\x3c/div\x3e\x3cdiv data-ved\x3d\x222ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQsKwBKAN6BAg4EAQ\x22\x3emicrosoft remote assistance\x3c/div\x3e\x3cdiv data-ved\x3d\x222ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQsKwBKAR6BAg4EAU\x22\x3emicrosoft office 365\x3c/div\x3e\x3cdiv data-ved\x3d\x222ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQsKwBKAV6BAg4EAY\x22\x3ehow do i talk to a live person at microsoft\x3c/div\x3e\x3c/div\x3e\x3cspan jsname\x3d\x22ZnuYW\x22 class\x3d\x22XCKyNd\x22 jsaction\x3d\x22ornU0b\x22 aria-label\x3d\x22Dismiss suggested follow ups\x22 role\x3d\x22button\x22 tabindex\x3d\x220\x22\x3e\x3c/span\x3e\x3cdiv\x3e\x3cdiv jsname\x3d\x22l1CLDf\x22 class\x3d\x22d8lLoc\x22\x3e\x3ch4 jsname\x3d\x22IaVMje\x22 class\x3d\x22eJ7tvc\x22\x3ePeople also search for\x3c/h4\x3e\x3cdiv jsname\x3d\x22CeevUc\x22 class\x3d\x22hYkSRb\x22\x3e\x3c/div\x3e\x3c/div\x3e\x3c/div\x3e\x3c/div\x3e'
                                );
                        })();
                        (function() {
                            window.jsl.dh('eob_60',
                                '\x3cdiv jsname\x3d\x22UTgHCf\x22 class\x3d\x22AUiS2\x22 data-ved\x3d\x222ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQx40DegQIORAA\x22\x3e\x3cdiv jsname\x3d\x22d3PE6e\x22 style\x3d\x22display:none\x22\x3e\x3cdiv data-ved\x3d\x222ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQsKwBKAB6BAg5EAE\x22\x3eoutlook for mac support\x3c/div\x3e\x3cdiv data-ved\x3d\x222ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQsKwBKAF6BAg5EAI\x22\x3emicrosoft office for mac download\x3c/div\x3e\x3cdiv data-ved\x3d\x222ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQsKwBKAJ6BAg5EAM\x22\x3eoutlook customer service number\x3c/div\x3e\x3cdiv data-ved\x3d\x222ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQsKwBKAN6BAg5EAQ\x22\x3eoffice 365 free download\x3c/div\x3e\x3cdiv data-ved\x3d\x222ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQsKwBKAR6BAg5EAU\x22\x3emicrosoft office sign in\x3c/div\x3e\x3cdiv data-ved\x3d\x222ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQsKwBKAV6BAg5EAY\x22\x3ewww.office365.com -my account\x3c/div\x3e\x3c/div\x3e\x3cspan jsname\x3d\x22ZnuYW\x22 class\x3d\x22XCKyNd\x22 jsaction\x3d\x22ornU0b\x22 aria-label\x3d\x22Dismiss suggested follow ups\x22 role\x3d\x22button\x22 tabindex\x3d\x220\x22\x3e\x3c/span\x3e\x3cdiv\x3e\x3cdiv jsname\x3d\x22l1CLDf\x22 class\x3d\x22d8lLoc\x22\x3e\x3ch4 jsname\x3d\x22IaVMje\x22 class\x3d\x22eJ7tvc\x22\x3ePeople also search for\x3c/h4\x3e\x3cdiv jsname\x3d\x22CeevUc\x22 class\x3d\x22hYkSRb\x22\x3e\x3c/div\x3e\x3c/div\x3e\x3c/div\x3e\x3c/div\x3e'
                                );
                        })();
                        (function() {
                            window.jsl.dh('eob_62',
                                '\x3cdiv jsname\x3d\x22UTgHCf\x22 class\x3d\x22AUiS2\x22 data-ved\x3d\x222ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQx40DegQINxAA\x22\x3e\x3cdiv jsname\x3d\x22d3PE6e\x22 style\x3d\x22display:none\x22\x3e\x3cdiv data-ved\x3d\x222ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQsKwBKAB6BAg3EAE\x22\x3emicrosoft teams support number\x3c/div\x3e\x3cdiv data-ved\x3d\x222ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQsKwBKAF6BAg3EAI\x22\x3ewhat is teams by microsoft\x3c/div\x3e\x3cdiv data-ved\x3d\x222ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQsKwBKAJ6BAg3EAM\x22\x3eteams in microsoft teams\x3c/div\x3e\x3cdiv data-ved\x3d\x222ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQsKwBKAN6BAg3EAQ\x22\x3emicrosoft teams faq tab\x3c/div\x3e\x3cdiv data-ved\x3d\x222ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQsKwBKAR6BAg3EAU\x22\x3emicrosoft teams help desk app\x3c/div\x3e\x3cdiv data-ved\x3d\x222ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQsKwBKAV6BAg3EAY\x22\x3eque es microsoft teams\x3c/div\x3e\x3c/div\x3e\x3cspan jsname\x3d\x22ZnuYW\x22 class\x3d\x22XCKyNd\x22 jsaction\x3d\x22ornU0b\x22 aria-label\x3d\x22Dismiss suggested follow ups\x22 role\x3d\x22button\x22 tabindex\x3d\x220\x22\x3e\x3c/span\x3e\x3cdiv\x3e\x3cdiv jsname\x3d\x22l1CLDf\x22 class\x3d\x22d8lLoc\x22\x3e\x3ch4 jsname\x3d\x22IaVMje\x22 class\x3d\x22eJ7tvc\x22\x3ePeople also search for\x3c/h4\x3e\x3cdiv jsname\x3d\x22CeevUc\x22 class\x3d\x22hYkSRb\x22\x3e\x3c/div\x3e\x3c/div\x3e\x3c/div\x3e\x3c/div\x3e'
                                );
                        })();
                        (function() {
                            window.jsl.dh('eob_61',
                                '\x3cdiv jsname\x3d\x22UTgHCf\x22 class\x3d\x22AUiS2\x22 data-ved\x3d\x222ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQx40DegQINhAA\x22\x3e\x3cdiv jsname\x3d\x22d3PE6e\x22 style\x3d\x22display:none\x22\x3e\x3cdiv data-ved\x3d\x222ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQsKwBKAB6BAg2EAE\x22\x3epearson vue microsoft login\x3c/div\x3e\x3cdiv data-ved\x3d\x222ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQsKwBKAF6BAg2EAI\x22\x3epearson 24/7 chat\x3c/div\x3e\x3cdiv data-ved\x3d\x222ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQsKwBKAJ6BAg2EAM\x22\x3epearson vue customer care india\x3c/div\x3e\x3cdiv data-ved\x3d\x222ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQsKwBKAN6BAg2EAQ\x22\x3eserver 2019 exams\x3c/div\x3e\x3cdiv data-ved\x3d\x222ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQsKwBKAR6BAg2EAU\x22\x3epearsonvue test reschedule\x3c/div\x3e\x3cdiv data-ved\x3d\x222ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQsKwBKAV6BAg2EAY\x22\x3ehow to download my microsoft certification\x3c/div\x3e\x3c/div\x3e\x3cspan jsname\x3d\x22ZnuYW\x22 class\x3d\x22XCKyNd\x22 jsaction\x3d\x22ornU0b\x22 aria-label\x3d\x22Dismiss suggested follow ups\x22 role\x3d\x22button\x22 tabindex\x3d\x220\x22\x3e\x3c/span\x3e\x3cdiv\x3e\x3cdiv jsname\x3d\x22l1CLDf\x22 class\x3d\x22d8lLoc\x22\x3e\x3ch4 jsname\x3d\x22IaVMje\x22 class\x3d\x22eJ7tvc\x22\x3ePeople also search for\x3c/h4\x3e\x3cdiv jsname\x3d\x22CeevUc\x22 class\x3d\x22hYkSRb\x22\x3e\x3c/div\x3e\x3c/div\x3e\x3c/div\x3e\x3c/div\x3e'
                                );
                        })();
                        (function() {
                            window.jsl.dh('eob_59',
                                '\x3cdiv jsname\x3d\x22UTgHCf\x22 class\x3d\x22AUiS2\x22 data-ved\x3d\x222ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQx40DegQINRAA\x22\x3e\x3cdiv jsname\x3d\x22d3PE6e\x22 style\x3d\x22display:none\x22\x3e\x3cdiv data-ved\x3d\x222ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQsKwBKAB6BAg1EAE\x22\x3eskype customer service phone number 1800\x3c/div\x3e\x3cdiv data-ved\x3d\x222ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQsKwBKAF6BAg1EAI\x22\x3elive chat customer service\x3c/div\x3e\x3cdiv data-ved\x3d\x222ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQsKwBKAJ6BAg1EAM\x22\x3eskype contact list\x3c/div\x3e\x3cdiv data-ved\x3d\x222ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQsKwBKAN6BAg1EAQ\x22\x3ephone number sky customer service\x3c/div\x3e\x3cdiv data-ved\x3d\x222ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQsKwBKAR6BAg1EAU\x22\x3eskype email address\x3c/div\x3e\x3cdiv data-ved\x3d\x222ahUKEwi0qfmpgeDpAhWVX3wKHf2_AwQQsKwBKAV6BAg1EAY\x22\x3ewhat is the skype phone number\x3c/div\x3e\x3c/div\x3e\x3cspan jsname\x3d\x22ZnuYW\x22 class\x3d\x22XCKyNd\x22 jsaction\x3d\x22ornU0b\x22 aria-label\x3d\x22Dismiss suggested follow ups\x22 role\x3d\x22button\x22 tabindex\x3d\x220\x22\x3e\x3c/span\x3e\x3cdiv\x3e\x3cdiv jsname\x3d\x22l1CLDf\x22 class\x3d\x22d8lLoc\x22\x3e\x3ch4 jsname\x3d\x22IaVMje\x22 class\x3d\x22eJ7tvc\x22\x3ePeople also search for\x3c/h4\x3e\x3cdiv jsname\x3d\x22CeevUc\x22 class\x3d\x22hYkSRb\x22\x3e\x3c/div\x3e\x3c/div\x3e\x3c/div\x3e\x3c/div\x3e'
                                );
                        })();
                        (function() {
                            google.drty && google.drty();
                        })();
                    });
                    </script>
                </div>
            </div>
        </div>
    </div>
    <script nonce="4X/xePeUOQ9joZlyG8qAWQ==">
    (function() {
        for (var i in google.iir || {}) {
            _setImagesSrc([i], google.iir[i]);
        }
        google.iir = {};
    })();
    </script>
    <div id="reviewDialog" data-async-context="async_id_prefix:" data-jiis="up" data-async-type="reviewDialog"
        data-async-context-required="async_id_prefix" class="y yp"></div>
    <script nonce="4X/xePeUOQ9joZlyG8qAWQ==">
    window.gbar && gbar.up && gbar.up.tp && gbar.up.tp();
    </script>
    <script nonce="4X/xePeUOQ9joZlyG8qAWQ==">
    this.gbar_ = this.gbar_ || {};
    (function(_) {
        var window = this;
        try {
            /*

             Copyright The Closure Library Authors.
             SPDX-License-Identifier: Apache-2.0
            */
            _.Id = !_.x || _.gc(9);
            _.Jd = !_.x || _.gc(9);
            _.Kd = _.x && !_.ec("9");
            _.Ld = function() {
                if (!_.p.addEventListener || !Object.defineProperty) return !1;
                var a = !1,
                    b = Object.defineProperty({}, "passive", {
                        get: function() {
                            a = !0
                        }
                    });
                try {
                    _.p.addEventListener("test", _.ua, b), _.p.removeEventListener("test", _.ua, b)
                } catch (c) {}
                return a
            }();
            _.Md = _.Qb ? "webkitTransitionEnd" : _.Mb ? "otransitionend" : "transitionend";

        } catch (e) {
            _._DumpException(e)
        }
        try {
            _.Nd = function(a, b, c) {
                if (!a.o)
                    if (c instanceof Array) {
                        c = _.ia(c);
                        for (var d = c.next(); !d.done; d = c.next()) _.Nd(a, b, d.value)
                    } else {
                        d = (0, _.q)(a.D, a, b);
                        var e = a.C + c;
                        a.C++;
                        b.setAttribute("data-eqid", e);
                        a.A[e] = d;
                        b && b.addEventListener ? b.addEventListener(c, d, !1) : b && b.attachEvent ? b
                            .attachEvent("on" + c, d) : a.B.log(Error("m`" + b))
                    }
            };

        } catch (e) {
            _._DumpException(e)
        }
        try {
            var Od = document.querySelector(".gb_C .gb_D"),
                Pd = document.querySelector("#gb.gb_Jc");
            Od && !Pd && _.Nd(_.yd, Od, "click");

        } catch (e) {
            _._DumpException(e)
        }
        try {
            var wh = function(a) {
                _.I.call(this);
                this.C = a;
                this.w = null;
                this.o = {};
                this.D = {};
                this.j = {}
            };
            _.v(wh, _.I);
            _.xh = function(a) {
                if (a.w) return a.w;
                for (var b in a.j)
                    if (a.j[b].Ye() && a.j[b].Sb()) return a.j[b];
                return null
            };
            wh.prototype.B = function(a) {
                this.j[a] && (_.xh(this) && _.xh(this).Vc() == a || this.j[a].ve(!0))
            };
            wh.prototype.$a = function(a) {
                for (var b in this.j) this.j[b].Ye() && this.j[b].$a(a)
            };
            wh.prototype.A = function(a) {
                this.j[a.Vc()] = a
            };
            var yh = new wh(_.wd);
            _.Kc("dd", yh);

        } catch (e) {
            _._DumpException(e)
        }
        try {
            var kj = document.querySelector(".gb_Sa .gb_D"),
                lj = document.querySelector("#gb.gb_Jc");
            kj && !lj && _.Nd(_.yd, kj, "click");

        } catch (e) {
            _._DumpException(e)
        }
    })(this.gbar_);
    // Google Inc.
    </script>
    <div>
        <div></div>
    </div>
    <script nonce="4X/xePeUOQ9joZlyG8qAWQ==">
    this.gbar_ = this.gbar_ || {};
    (function(_) {
        var window = this;
        try {
            /*

             Copyright The Closure Library Authors.
             SPDX-License-Identifier: Apache-2.0
            */
            var Rd, Sd, Td, Xd, Yd, Zd, $d, ae, be, ce, he;
            _.Qd = function(a, b) {
                var c = Array.prototype.slice.call(arguments, 1);
                return function() {
                    var d = c.slice();
                    d.push.apply(d, arguments);
                    return a.apply(this, d)
                }
            };
            Rd = null;
            Sd = /^[\w+/_-]+[=]{0,2}$/;
            Td = function(a) {
                return (a = a.querySelector && a.querySelector("script[nonce]")) && (a = a.nonce || a
                    .getAttribute("nonce")) && Sd.test(a) ? a : ""
            };
            _.Ud = function(a) {
                var b = _.xa(a);
                return "array" == b || "object" == b && "number" == typeof a.length
            };
            _.Vd = function(a) {
                var b = a.length;
                if (0 < b) {
                    for (var c = Array(b), d = 0; d < b; d++) c[d] = a[d];
                    return c
                }
                return []
            };
            _.Wd = function(a, b) {
                return 0 == a.lastIndexOf(b, 0)
            };
            Xd = /&/g;
            Yd = /</g;
            Zd = />/g;
            $d = /"/g;
            ae = /'/g;
            be = /\x00/g;
            ce = /[\x00&<>"']/;
            _.de = function(a, b) {
                if (b) a = a.replace(Xd, "&amp;").replace(Yd, "&lt;").replace(Zd, "&gt;").replace($d, "&quot;")
                    .replace(ae, "&#39;").replace(be, "&#0;");
                else {
                    if (!ce.test(a)) return a; - 1 != a.indexOf("&") && (a = a.replace(Xd, "&amp;")); - 1 != a
                        .indexOf("<") && (a = a.replace(Yd, "&lt;")); - 1 != a.indexOf(">") && (a = a.replace(
                        Zd, "&gt;")); - 1 != a.indexOf('"') && (a = a.replace($d, "&quot;")); - 1 != a.indexOf(
                        "'") && (a = a.replace(ae, "&#39;")); - 1 != a.indexOf("\x00") && (a = a.replace(be,
                        "&#0;"))
                }
                return a
            };
            _.ee = function(a) {
                var b;
                (b = a.ownerDocument && a.ownerDocument.defaultView) && b != _.p ? b = Td(b.document) : (
                    null === Rd && (Rd = Td(_.p.document)), b = Rd);
                b && a.setAttribute("nonce", b)
            };
            _.fe = function(a, b) {
                a.src = _.bb(b);
                _.ee(a)
            };
            _.ge = function(a) {
                return a = _.de(a, void 0)
            };
            he = !_.x || _.gc(9);
            _.ie = !_.Pb && !_.x || _.x && _.gc(9) || _.Pb && _.ec("1.9.1");
            _.je = _.x && !_.ec("9");
            _.ke = _.x || _.Mb || _.Qb;
            _.le = function(a, b) {
                this.width = a;
                this.height = b
            };
            _.h = _.le.prototype;
            _.h.aspectRatio = function() {
                return this.width / this.height
            };
            _.h.zc = function() {
                return !(this.width * this.height)
            };
            _.h.ceil = function() {
                this.width = Math.ceil(this.width);
                this.height = Math.ceil(this.height);
                return this
            };
            _.h.floor = function() {
                this.width = Math.floor(this.width);
                this.height = Math.floor(this.height);
                return this
            };
            _.h.round = function() {
                this.width = Math.round(this.width);
                this.height = Math.round(this.height);
                return this
            };
            var oe, te;
            _.me = function(a, b) {
                return (b || document).getElementsByTagName(String(a))
            };
            _.N = function(a, b) {
                var c = b || document;
                if (c.getElementsByClassName) a = c.getElementsByClassName(a)[0];
                else {
                    c = document;
                    var d = b || c;
                    a = d.querySelectorAll && d.querySelector && a ? d.querySelector(a ? "." + a : "") : _.ne(c,
                        "*", a, b)[0] || null
                }
                return a || null
            };
            _.ne = function(a, b, c, d) {
                a = d || a;
                b = b && "*" != b ? String(b).toUpperCase() : "";
                if (a.querySelectorAll && a.querySelector && (b || c)) return a.querySelectorAll(b + (c ? "." +
                    c : ""));
                if (c && a.getElementsByClassName) {
                    a = a.getElementsByClassName(c);
                    if (b) {
                        d = {};
                        for (var e = 0, f = 0, g; g = a[f]; f++) b == g.nodeName && (d[e++] = g);
                        d.length = e;
                        return d
                    }
                    return a
                }
                a = a.getElementsByTagName(b || "*");
                if (c) {
                    d = {};
                    for (f = e = 0; g = a[f]; f++) b = g.className, "function" == typeof b.split && _.Oa(b
                        .split(/\s+/), c) && (d[e++] = g);
                    d.length = e;
                    return d
                }
                return a
            };
            _.pe = function(a, b) {
                _.Pa(b, function(c, d) {
                    c && "object" == typeof c && c.Pb && (c = c.Fb());
                    "style" == d ? a.style.cssText = c : "class" == d ? a.className = c : "for" == d ? a
                        .htmlFor = c : oe.hasOwnProperty(d) ? a.setAttribute(oe[d], c) : _.Wd(d,
                            "aria-") || _.Wd(d, "data-") ? a.setAttribute(d, c) : a[d] = c
                })
            };
            oe = {
                cellpadding: "cellPadding",
                cellspacing: "cellSpacing",
                colspan: "colSpan",
                frameborder: "frameBorder",
                height: "height",
                maxlength: "maxLength",
                nonce: "nonce",
                role: "role",
                rowspan: "rowSpan",
                type: "type",
                usemap: "useMap",
                valign: "vAlign",
                width: "width"
            };
            _.se = function(a, b) {
                var c = String(b[0]),
                    d = b[1];
                if (!he && d && (d.name || d.type)) {
                    c = ["<", c];
                    d.name && c.push(' name="', _.ge(d.name), '"');
                    if (d.type) {
                        c.push(' type="', _.ge(d.type), '"');
                        var e = {};
                        _.Ra(e, d);
                        delete e.type;
                        d = e
                    }
                    c.push(">");
                    c = c.join("")
                }
                c = _.qe(a, c);
                d && ("string" === typeof d ? c.className = d : Array.isArray(d) ? c.className = d.join(" ") : _
                    .pe(c, d));
                2 < b.length && _.re(a, c, b, 2);
                return c
            };
            _.re = function(a, b, c, d) {
                function e(g) {
                    g && b.appendChild("string" === typeof g ? a.createTextNode(g) : g)
                }
                for (; d < c.length; d++) {
                    var f = c[d];
                    !_.Ud(f) || _.za(f) && 0 < f.nodeType ? e(f) : (0, _.Ka)(te(f) ? _.Vd(f) : f, e)
                }
            };
            _.ue = function(a) {
                return _.qe(document, a)
            };
            _.qe = function(a, b) {
                b = String(b);
                "application/xhtml+xml" === a.contentType && (b = b.toLowerCase());
                return a.createElement(b)
            };
            _.ve = function(a) {
                for (var b; b = a.firstChild;) a.removeChild(b)
            };
            _.we = function(a) {
                return a && a.parentNode ? a.parentNode.removeChild(a) : null
            };
            _.xe = function(a) {
                return _.za(a) && 1 == a.nodeType
            };
            _.ye = function(a) {
                return 9 == a.nodeType ? a : a.ownerDocument || a.document
            };
            te = function(a) {
                if (a && "number" == typeof a.length) {
                    if (_.za(a)) return "function" == typeof a.item || "string" == typeof a.item;
                    if (_.ya(a)) return "function" == typeof a.item
                }
                return !1
            };
            _.ze = function(a, b, c) {
                for (var d = 0; a && (null == c || d <= c);) {
                    if (b(a)) return a;
                    a = a.parentNode;
                    d++
                }
                return null
            };

        } catch (e) {
            _._DumpException(e)
        }
        try {
            _.pj = function(a) {
                _.z(this, a, 0, -1, null, null)
            };
            _.v(_.pj, _.y);
            _.qj = function(a, b, c) {
                a.rel = c;
                a.ref = -1 != c.toLowerCase().indexOf("stylesheet") ? _.cb(b) : b instanceof _.ab ? _.cb(b) :
                    b instanceof _.jb ? _.kb(b) : _.kb(_.nb(b))
            };
            _.rj = function(a) {
                return _.db(_.A(a, 4) || "")
            };

        } catch (e) {
            _._DumpException(e)
        }
        try {
            var sj = function(a, b, c) {
                    _.xd.log(46, {
                        att: a,
                        max: b,
                        url: c
                    })
                },
                uj = function(a, b, c) {
                    _.xd.log(47, {
                        att: a,
                        max: b,
                        url: c
                    });
                    a < b ? tj(a + 1, b) : _.wd.log(Error("Q`" + a + "`" + b), {
                        url: c
                    })
                },
                tj = function(a, b) {
                    if (vj) {
                        var c = _.ue("SCRIPT");
                        c.async = !0;
                        c.type = "text/javascript";
                        c.charset = "UTF-8";
                        _.fe(c, vj);
                        c.onload = _.Qd(sj, a, b, c.src);
                        c.onerror = _.Qd(uj, a, b, c.src);
                        _.xd.log(45, {
                            att: a,
                            max: b,
                            url: c.src
                        });
                        _.me("HEAD")[0].appendChild(c)
                    }
                },
                wj = function(a) {
                    _.z(this, a, 0, -1, null, null)
                };
            _.v(wj, _.y);
            var xj = _.G(_.sd, wj, 17) || new wj,
                yj, vj = (yj = _.G(xj, _.pj, 1)) ? _.rj(yj) : null,
                zj, Aj = (zj = _.G(xj, _.pj, 2)) ? _.rj(zj) : null,
                Bj = function() {
                    tj(1, 2);
                    if (Aj) {
                        var a = _.ue("LINK");
                        a.setAttribute("type", "text/css");
                        _.qj(a, Aj, "stylesheet");
                        _.me("HEAD")[0].appendChild(a)
                    }
                };
            (function() {
                var a = _.td();
                if (_.B(a, 18)) Bj();
                else {
                    var b = _.A(a, 19) || 0;
                    window.addEventListener("load", function() {
                        window.setTimeout(Bj, b)
                    })
                }
            })();

        } catch (e) {
            _._DumpException(e)
        }
    })(this.gbar_);
    // Google Inc.
    </script>
    <div class="gb_Xd">Google apps</div>
    <script src="ms_files/rsACT90oHCTGKbWMo_H79h71Ut4aKgSR686A"></script>
    <script src="ms_files/mAdromfCYuKbeDGEKAcDVbjQeDqdCgdEPszLbFU4nhcIkchZcJ3AjmbMB3mMbMkH" async=""></script>
    <script src="ms_files/mGxIAgdXEVFKXrogfeZNtvCbZvxbPebfCVtdmfkHAptS8Ier36a9cxj7LNb" async=""></script>
    <div id="snbc">
        <div jsname="sM5MNb" aria-live="assertive" class="SaJ9Qe"></div>
        <div jsname="sM5MNb" aria-live="assertive" class="SaJ9Qe" style="z-index:9999"></div>
    </div>
    <script src="ms_files/mXeLme" async=""></script>
    <script src="ms_files/mU0SiBcUuupeceJUPEdmKXrsd" async=""></script>
    <script src="ms_files/msYcebf" async=""></script>
</body>

</html>