window.addEventListener('load', function () {
    var height = document.documentElement.scrollHeight;
    var width = document.documentElement.scrollWidth;

    if (window == window.parent) {
        var alt = {};
        var clientHeight = window.parent.screen.height;
        var heightRetio = (clientHeight / height).toFixed(8);
        var totalSeconds = 0;
        var needsReload = true;
        //パラメータ取得
        var param = window.location.search;
        if (param.length > 0) {
            var page = window.location.href.toString().split(window.location.search)[0];
        } else {
            var page = window.location.href;
        }

        var device = 0;
        var getDevice = (function () {
            var ua = navigator.userAgent;
            if (ua.indexOf('iPhone') > 0 || ua.indexOf('iPod') > 0 || ua.indexOf('Android') > 0 && ua.indexOf('Mobile') > 0) {
                return 'sp';
            } else if (ua.indexOf('iPad') > 0 || ua.indexOf('Android') > 0) {
                return 'tab';
            } else {
                return 'other';
            }
        })();

        if (getDevice == 'sp') {
            device = 3;
        } else if (getDevice == 'tab') {
            //タブレット
            device = 2;
        } else if (getDevice == 'other') {
            //その他
            device = 1;
        }
        //Page Viewカウント
        page_view(device, page);

        window.onclick = function (e) {
            log_click(page, e.pageX, e.pageY, device);
        }


        document.querySelectorAll('a').forEach(function (button) {
            button.addEventListener('click', { handleEvent: link_click, arg1: device, arg2: page });
            // button.eventParam = "device";
        });


        window.onfocus = function () {
            needsReload = true;
        }
        window.onblur = function () {
            needsReload = false;
            
            postTime(page, JSON.stringify(alt), device, heightRetio);
            alt = {};
        }
        var interval = setInterval(function () {
            if (needsReload) {
                // 読み込み処理：記述省略
                setTime();
            }
        }, 1000);

        function setTime() {
            ++totalSeconds;
            var a = window.scrollY;
            var b = document.body.scrollHeight - window.parent.screen.height;
            var c = Math.floor((a / b) * Math.pow(10, 5)) / Math.pow(10, 5);
            c = c.toString(10);
            if (c in alt) {
                alt[c] += 1;
            } else {
                alt[c] = 1;
            }
        }
        function postTime(url, data, device, height) {

            let xhr = new XMLHttpRequest();
            var param = "url=" + url + "&data=" + data + "&device=" + device + "&height=" + height;
            xhr.open('get', 'https://cloudeyes.net/api/scrollposition?' + encodeURI(param), true);
            xhr.withCredentials = true;

            xhr.addEventListener("readystatechange", function () {
                if (this.readyState === 4) {
                    console.log(this.responseText);
                }
            });
            xhr.send();

        }

        function link_click(event) {

            let xhr = new XMLHttpRequest();
            var param = "href=" + encodeURIComponent(event.currentTarget.href) + "&page=" + encodeURIComponent(this.arg2) + "&device=" + this.arg1;
            xhr.open('GET', 'https://cloudeyes.net/api/link_click?' + param, true);
            xhr.onreadystatechange = function () {
                if (this.readyState === 4 && this.status === 200) {
                    var id = this.response.id;
                }
            };

            xhr.withCredentials = true;
            xhr.send();
            log_click(this.arg2, event.pageX, event.pageY, this.arg1);
        }
        function page_view(device, page) {
            console.log(device);
            console.log(page);
            let xhr = new XMLHttpRequest();
            var param = "&page=" + encodeURIComponent(page) + "&device=" + device;
            xhr.open('GET', 'https://cloudeyes.net/api/page_view?' + param, true);
            xhr.onreadystatechange = function () {
                if (this.readyState === 4 && this.status === 200) {
                    var id = this.response.id;
                }
            };

            xhr.withCredentials = true;
            xhr.send();
        }
        function log_click(page, x, y, device) { // log clicks for heatmap

            max_height = document.documentElement.scrollHeight;
            max_width = document.documentElement.scrollWidth;

            let xhr = new XMLHttpRequest();
            var param = "x_cord=" + x + "&y_cord=" + y + "&page=" + encodeURIComponent(page) + "&device=" + device + "&max_height=" + max_height + "&max_width=" + max_width;
            xhr.open('GET', 'https://cloudeyes.net/api/click?' + param, true);
            xhr.onreadystatechange = function () {
                if (this.readyState === 4 && this.status === 200) {
                    var id = this.response.id;
                }
            };
            xhr.withCredentials = true;
            xhr.send();
            xhr.onerror = function (event) { console.log(event); };
        }
  
    } else {
        window.addEventListener("message", function (event) {
            if (event.origin != 'https://cloudeyes.net') {
                console.log("アクセス失敗");
                return;
            }

            let h = '';
            let hg = document.getElementsByTagName("html")[0].scrollHeight;
            let wg = document.getElementsByTagName("html")[0].scrollWidth;
            h = event.data * (hg / wg);
            window.parent.postMessage(JSON.stringify([h, event.data]), event.origin);
        }, false);
    }
});

