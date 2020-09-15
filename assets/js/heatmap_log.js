// window.onload = function() {
window.addEventListener('load',function(){
    var height = document.documentElement.scrollHeight;
    var width = document.documentElement.scrollWidth;
    console.log('h:'+height);
    console.log('w:'+width);
    if(window == window.parent) {
    var alt ={};
    var clientHeight = window.parent.screen.height;
    // var clientHeight = document.body.clientHeight;
    var heightRetio =  (clientHeight/height).toFixed(8);
    var totalSeconds = 0;
    var needsReload = true;
    //パラメータ取得
    var param = window.location.search;
    if(param.length > 0){
        var page =window.location.href.toString().split(window.location.search)[0];
    }else{
        var page =window.location.href;
    }

    var device = 0;
    var getDevice = (function(){
        var ua = navigator.userAgent;
        if(ua.indexOf('iPhone') > 0 || ua.indexOf('iPod') > 0 || ua.indexOf('Android') > 0 && ua.indexOf('Mobile') > 0){
            return 'sp';
        }else if(ua.indexOf('iPad') > 0 || ua.indexOf('Android') > 0){
            return 'tab';
        }else{
            return 'other';
        }
    })();
    
    if( getDevice == 'sp' ){
        device = 3;
    }else if( getDevice == 'tab' ){
        //タブレット
        device = 2;
    }else if( getDevice == 'other' ){
        //その他
        device = 1;
    }
    
    window.onclick = function( e ) {
        log_click(page, e.pageX, e.pageY,device);
    }

    
    document.querySelectorAll('a').forEach(function (button) {
        button.addEventListener('click', { handleEvent:link_click, arg1: device,arg2: page});
        // button.eventParam = "device";
    });


    window.onfocus=function(){
      needsReload = true;
    }
    window.onblur=function(){
      needsReload = false;
    //   console.log("移動");
    //   console.log(JSON.stringify(alt));
    //   console.log(typeof JSON.stringify(alt));
    //   console.log(heightRetio);
      postTime(page,JSON.stringify(alt),device,heightRetio);
      alt ={};
    }
    var interval = setInterval(function(){
      if(needsReload){
        // 読み込み処理：記述省略
        setTime();
      }
    }, 1000);

    function setTime() {
        ++totalSeconds;

        var a = window.scrollY;
        var b = document.body.scrollHeight - window.parent.screen.height;

        var c = Math.floor( (a/b)  * Math.pow( 10, 5 ) ) / Math.pow( 10, 5 );
        c = c.toString(10);
        
        if(c in alt){
            alt[c] += 1;
        }else{
            alt[c] = 1;
        }
    }
    function postTime(url,data,device,height) {

        let xhr = new XMLHttpRequest(); 
        var param = "url=" + url + "&data=" + data + "&device=" + device +"&height=" + height;
        xhr.open('get', 'https://cloudeyes.net/api/scrollposition?'+encodeURI(param), true);
        xhr.withCredentials = true;

        xhr.addEventListener("readystatechange", function () {
          if (this.readyState === 4) {
            console.log(this.responseText);
          }
        });
        xhr.send();
        
    }

    // document.getScroll = function() {
    //     if (window.pageYOffset != undefined) {
    //         console.log([pageXOffset, pageYOffset]);
    //         return [pageXOffset, pageYOffset];
    //     } else {
    //         var sx, sy, d = document,
    //             r = d.documentElement,
    //             b = d.body;
    //         sx = r.scrollLeft || b.scrollLeft || 0;
    //         sy = r.scrollTop || b.scrollTop || 0;
    //         console.log([sx, sy]);

    //         return [sx, sy];
    //     }
    // }
    function link_click(event){
        // console.log(event.currentTarget.href);
        // console.log(this.arg1);
        // console.log(this.arg2);
    
        let xhr = new XMLHttpRequest(); 
        var param = "href=" + encodeURIComponent(event.currentTarget.href) + "&page=" + encodeURIComponent(this.arg2) + "&device=" + this.arg1 ;
        xhr.open('GET', 'https://cloudeyes.net/api/link_click?'+param, true);
        xhr.onreadystatechange = function(){
            if (this.readyState === 4 && this.status === 200) {
                var id = this.response.id;
            }
        };
        
        xhr.withCredentials = true;
        // xhr.setRequestHeader("Content-Type", "application/json");
        xhr.send();
        log_click(this.arg2, event.pageX, event.pageY,this.arg1);
        // document.location.href =  event.currentTarget.href;
    }
    function log_click(page, x, y,device){ // log clicks for heatmap
            
        max_height = document.documentElement.scrollHeight;
        max_width = document.documentElement.scrollWidth;
        
        let xhr = new XMLHttpRequest(); 
        var param = "x_cord=" + x+ "&y_cord=" + y + "&page=" + encodeURIComponent(page) + "&device=" + device+ "&max_height=" + max_height+ "&max_width=" + max_width;
        xhr.open('GET', 'https://cloudeyes.net/api/click?'+param, true);
        xhr.onreadystatechange = function(){
            if (this.readyState === 4 && this.status === 200) {
                var id = this.response.id;
                // console.log(id);
            }
        };
        
        
        xhr.withCredentials = true;
        xhr.send();
        xhr.onerror = function ( event ) {console.log(event);};
    }
    // function log_link_click(event,){ // log clicks for heatmap
    //     let xhr = new XMLHttpRequest(); 
    //     var param = "href=" + href+ "&page=" + page + "&device=" + device ;
    //     xhr.open('GET', 'http://18.181.252.32/api/link_click?'+param, true);
    //     xhr.onreadystatechange = function(){
    //         if (this.readyState === 4 && this.status === 200) {
    //             var id = this.response.id;
    //         }
    //     };
        
    //     xhr.withCredentials = true;
    //     // xhr.setRequestHeader("Content-Type", "application/json");
    //     xhr.send();
    
    // }
    // var canvas = document.getElementsByTagName('canvas')[0];
    // canvas.style.display = "none";   
    } else {
        window.addEventListener("message", function(event) {
            // console.log("アクセス失敗");
            if (event.origin != 'https://cloudeyes.net') {
              // 未知のドメインからの場合は無視しましょう
              console.log("アクセス失敗");
              return;
            }
            console.log("アクセス成功");
            console.log(document.getElementsByTagName("html")[0]);
            console.log(document.documentElement.scrollHeight);
            let h = '';
            // var height = document.documentElement.offsetHeight;
            // console.log('h:'+height);
            // console.log('w:'+width);
            let hg = document.getElementsByTagName("html")[0].scrollHeight;
            let wg = document.getElementsByTagName("html")[0].scrollWidth;
            console.log('hg:'+hg);
            console.log('width:'+width);
            console.log('wg:'+wg);
            h = event.data *(hg/wg);
            console.log('h:'+h);
            console.log('event.origin:'+event.origin);
            window.parent.postMessage(JSON.stringify([h, event.data]), event.origin);
            // event.source.postMessage([h,event.data], event.origin);
        }, false);
    }
});

