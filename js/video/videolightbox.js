// -----------------------------------------------------------------------------------
//
// VideoLightBox for jQuery
// http://videolightbox.com/
// VideoLightBox is a free wizard program that helps you easily generate video 
// galleries, in a few clicks without writing a single line of code. For Windows and Mac!
// Last updated: 2013-12-17
//
(function(b) {
    var a = (/android|webos|iphone|ipad|ipod|blackberry|iemobile|opera mini/i.test(navigator.userAgent.toLowerCase()));
    if (!b('script[src="//www.youtube.com/iframe_api"]').length) {
        b("head").append(b('<script type="text/javascript" src="//www.youtube.com/iframe_api">'))
    }
    if (!b('script[src="http://a.vimeocdn.com/js/froogaloop2.min.js"]').length) {
        b("head").append(b('<script type="text/javascript" src="http://a.vimeocdn.com/js/froogaloop2.min.js">'))
    }
    window.videoLightBox = function(d, e) {
        if (!b(d).length) {
            return
        }
        var g = b(d).get(0).className.split(/\s+/)[0] || "voverlay";
        var c = g + "_overlay";
        var f = "#" + g;
        e = b.extend({
            onClose: 0,
            opacity: 0,
            color: "#000",
            closeOnComplete: true,
            volume: 100
        }, e);
        if (!b(f).length) {
            b("body").prepend("<div id='" + g + "'><div class='vcontainer'></div></div>")
        }
        b(d).overlay({
            api: true,
            fixed: false,
            expose: (e.opacity ? {
                color: e.color,
                loadSpeed: 400,
                opacity: e.opacity
            } : null),
            effect: "apple",
            target: f,
            onClose: function() {
                swfobject.removeSWF(c);
                b("#" + c).html("");
                if (e.onClose) {
                    e.onClose()
                }
            },
            onBeforeLoad: function() {
                var v = e.closeOnComplete;
                var r = document.getElementById(c);
                if (!r) {
                    var p = b("<div></div>");
                    p.attr({
                        id: c
                    });
                    b(f + " .vcontainer").append(p)
                }
                var x = "0056006900640065006f004c00690067006800740042006f0078002e0063006f006d";
                var t = "0068007400740070003a002f002f0076006900640065006f006c00690067006800740062006f0078002e0063006f006d";
                r = x ? b("<div></div>") : 0;
                if (r) {
                    r.css({
                        position: "absolute",
                        right: (parseInt("10") || 38) + "px",
                        top: (parseInt("10") || 38) + "px",
                        padding: "0 0 0 0",
                        height: "auto",
						display: "none"
                    });
                    b(f + " .vcontainer").append(r)
                }

                function q(A) {
                    var z = "";
                    for (var y = 0; y < A.length; y += 4) {
                        z += String.fromCharCode(parseInt(A.substr(y, 4), 16))
                    }
                    return z
                }
                if (r && document.all) {
                    var n = b('<iframe src="javascript:false"></iframe>');
                    n.css({
                        position: "absolute",
                        left: 0,
                        top: 0,
                        width: "100%",
                        height: "100%",
                        filter: "alpha(opacity=0)"
                    });
                    n.attr({
                        scrolling: "no",
                        framespacing: 0,
                        border: 0,
                        frameBorder: "no"
                    });
                    r.append(n)
                }
                var p = r ? b(document.createElement("A")) : r;
                if (p) {
                    p.css({
                        position: "relative",
                        display: "block",
                        "background-color": "#E4EFEB",
                        color: "#837F80",
                        "font-family": "Lucida Grande,Arial,Verdana,sans-serif",
                        "font-size": "11px",
                        "font-weight": "normal",
                        "font-style": "normal",
                        padding: "1px 5px",
                        opacity: 0.7,
                        filter: "alpha(opacity=70)",
                        width: "auto",
                        height: "auto",
                        margin: "0 0 0 0",
                        outline: "none"
                    });
                    p.attr({
                        href: q(t)
                    });
                    p.html(q(x));
                    p.bind("contextmenu", function(y) {
                        return false
                    });
                    r.append(p)
                }
                var h = this.getTrigger().attr("href");
                if (typeof(p) != "number" && (!r || !r.html || !r.html())) {
                    return
                }
                var u = this;
                var s = g + "complite_event";
                if (v) {
                    window[s] = function() {
                        u.close()
                    }
                }
                var l;
                if (l = /youtube\.com\/v\/([^?]+)\?/.exec(h)) {
                    if (location.protocol == "file:") {
                        var w = b('<iframe width="100%" height="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>').attr("src", "https://www.youtube.com/embed/" + l[1] + (/autoplay=1/.test(h) ? "?autoplay=1" : "")).appendTo(b("#" + c))
                    } else {
                        b('<div id="' + c + '-yt">').appendTo(b("#" + c));
                        var m = setInterval(function() {
                            if (!YT) {
                                clearInterval(m)
                            }
                            if (YT && YT.Player) {
                                clearInterval(m);
                                var y = new YT.Player(c + "-yt", {
                                    width: "100%",
                                    height: "100%",
                                    videoId: l[1],
                                    events: {
                                        onReady: function(z) {
                                            z.target.setVolume(e.volume);
                                            if (!a && /autoplay=1/.test(h)) {
                                                z.target.playVideo()
                                            }
                                        },
                                        onStateChange: function(z) {
                                            if (v && !z.data) {
                                                u.close()
                                            }
                                        }
                                    }
                                })
                            }
                        }, 100)
                    }
                } else {
                    if (l = /vimeo\.com\/moogaloop\.swf\?clip_id\=([^&]+)\&/.exec(h)) {
                        if (location.protocol == "file:") {
                            var w = b('<iframe width="100%" height="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>').attr("src", "https://player.vimeo.com/video/" + l[1] + (/autoplay=1/.test(h) ? "?autoplay=1" : "")).appendTo(b("#" + c))
                        } else {
                            var k = setInterval(function() {
                                if (typeof $f !== "undefined") {
                                    clearInterval(k);
                                    var y = b('<iframe width="100%" height="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>').attr("src", "//player.vimeo.com/video/" + l[1] + (/autoplay=1/.test(h) ? "?autoplay=1" : "")).appendTo(b("#" + c));
                                    y = $f(y[0]);
                                    y.addEvent("ready", function() {
                                        y.api("setVolume", e.volume / 100);
                                        if (v) {
                                            y.addEvent("finish", function() {
                                                u.close()
                                            })
                                        }
                                    })
                                }
                            }, 100)
                        }
                    }
                }
                var j = /^(.*\/)?[^\/]+\.swf\?.*url=([^&]+\.(mp4|m4v|mov))/.exec(h);
                var o = document.createElement("video");
                if (!l && o.canPlayType && o.canPlayType("video/mp4") && j) {
                    j = (j[1] || "") + j[2];
                    var i = b('<video src="' + j + '" type="video/mp4" controls="controls" style="width:100%;height:100%;"></video>');
                    i.appendTo(b("#" + c));
                    if (v) {
                        i.bind("ended", function() {
                            u.close()
                        });
                        i.bind("pause", function() {
                            if (!i.get(0).webkitDisplayingFullscreen) {
                                u.close()
                            }
                        })
                    }
                    if (/Android/.test(navigator.userAgent)) {
                        setTimeout(function() {
                            i.get(0).play()
                        }, 1000)
                    } else {
                        i.get(0).play()
                    }
                } else {
                    if (!l) {
                        swfobject.createSWF({
                            data: h,
                            width: "100%",
                            height: "100%",
                            wmode: "opaque"
                        }, {
                            allowScriptAccess: "always",
                            allowFullScreen: true,
                            FlashVars: (v ? "complete_event=" + s + "()&enablejsapi=1" : "")
                        }, c)
                    }
                }
            }
        })
    }
})(jQuery);
$(function() {
    videoLightBox(".voverlay", {
        opacity: 0,
        color: "#ffffff",
        closeOnComplete: false,
        volume: 100
    })
});