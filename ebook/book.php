
<!DOCTYPE html>
<html ng-app="app">
 
<head>
    <meta charset="utf-8">
    <!--viewport表示可视区域-->
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no,minimal-ui">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" href="css/reset.css">
    <style type="text/css">
html {
        width: 100%;
        height: 100%;
        /* overflow: hidden; */
    }
    
    body {
        text-align: left;
        width: 100%;
        /* overflow: hidden; */
        background-color: #e8dfc7;
    }
    
    .m_read_content {
		font-size: 14px;
        color: #555;
        line-height: 31px;
        padding: 15px;
    }
    
    .m_read_content h4 {
        font-size: 20px;
        color: #736357;
        border-bottom: solid 1px #736357;
        letter-spacing: 2px;
        margin: 0 0 1em 0;
    }
    
    .m_read_content p {
        /* 首行缩进两个字符 */
        text-indent: 2em;
        margin: 0.5em 0;
        /* letter-spacing 属性增加或减少字符间的空白（字符间距）。 */
        letter-spacing: 0px;
        line-height: 30px;
    }
    
    .u-tab {
        height: 34px;
        margin: 10px auto;
        line-height: 34px;
        border-radius: 8px;
        border: 1px solid #858382;
        font-size: 12px;
        background: #000;
        /* 改变元素的不透明度 */
        opacity: 0.9;
    }
    
    .u-tab li {
        display: inline-block;
        width: 49%;
        border-right: 1px solid #858382;
        text-align: center;
        color: #fff;
    }
    /* 去掉后面按钮的边框  css的逻辑一般是从1开始的不是从0开始的*/
    
    .u-tab li:nth-child(2) {
        border-right: none;
    }
    
    .m_button_bar {
        widows: 70%;
        max-width: 300px;
        padding: 5px;
        margin: 0 auto;
    }
    
    .top-nav {
        position: fixed;
        top: 0px;
        height: 50px;
        width: 100%;
        z-index: 9999;
        background: #000;
    }
    /* 使用base64设置图标 */
    
    .icon-back {
        position: absolute;
        top: 14px;
        left: 10px;
        width: 23px;
        height: 23px;
        background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFAAAABQCAYAAACOEfKtAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyNpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNS1jMDE0IDc5LjE1MTQ4MSwgMjAxMy8wMy8xMy0xMjowOToxNSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIChNYWNpbnRvc2gpIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkJGMkEyQkQxMjdBNDExRTU4NjA2QTJDMjFDQ0I0ODhEIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkJGMkEyQkQyMjdBNDExRTU4NjA2QTJDMjFDQ0I0ODhEIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6QkYyQTJCQ0YyN0E0MTFFNTg2MDZBMkMyMUNDQjQ4OEQiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6QkYyQTJCRDAyN0E0MTFFNTg2MDZBMkMyMUNDQjQ4OEQiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz4Ia560AAAHWklEQVR42uyd7W9URRTGDwu0lFL6IkiBCpQKBpUKJCIETURFxZL4sdao8YN+0D/IL2pilFD8aCJgQAE1KGhSkCqEl1KUSguU0gIV6ELredJn2unC7V5298596Z7kyb27odw7vzsz98yZmbPTRkZGJESbrVqoekQ1j6rg9zNVJap7qiHVbR4HVb3UVVW36r+wCjDNMUBAWa6qVy1TLcA95Pl/ogCXVOdVnapzqnSSAAJQg2qNaiVrlTEU9KLqCmsTatX1jBon/JtZPM5lTTW1djEfjDH8zWnVMVUHAccSIAq7TrVBVWV9/6/qDGtMl+punteZoapjjV5BoMb6VYdVbdbDiDxA1Ib1qk3sy2ADrBHtrGVBGmrlatb4Sn6HPvKQ6rdCN+9CA3xatcW68R7Vz6oTQTclj67jSdXzfFGZB7lP9WfUAKKJblM9boHbz6Ya6mueING0N1sgz6q+ZRMPHWCjqklVyo7/gOp31bBEy1KqZwkSL6Q7ql2q42EBnEFwa/kZzXSP6oZE2+BnbmXzhh0lyLsuAZar3lI9xk55D990cTI8+Df40rug2kknPXCA1ap3VTXsQ3ayz4uj1aqaWaY+1Veqa0ECnK96j80A/lyr6qbE2+aoWug/ovv5ko59wQGixr3PkUAn4Q1JMqyEEOs5EvqCNdLXm8lvn/eOBW9HguCZ4d8Olm0uy1peKIDT+XRqOPRqdTlYd2hplq2LZW2hp5E3wCaONa8lrNl61cRWlrWOb+m8ADYyIICn83Uur/kY2iDLmmbZG3MFWMXaJ/TzemTqWA/LbFpgVS4At3F4diKGTnIhrI1lLyULz+GYV1QFgYFbHObkZndvuynqjFlB/c+76NqABUJk7X5qIIY2W3i+b4r0e5P1h/t4/opMjHx7AkQwFPG8bg60o2JL2S9d5rHO0XXB4CKZrM8GEB75Jp7/IOHH8owtU/2oep3DSRw/d3RtMDjI800ycU7nPoCIUCAM/4+MBh2jAu8ga6Btmx3ewxm+mWfLePjuPoCI3G7g+S8Rhwf71eF9oBb+xPONYk3F2gAbGNaBF34q4vBQGz5wfD8nyaaKrO4DuMbyf0YiDu8lNitxXAvbMliNAcTreSX/UXsM4J0M6d6Ok9HYAoGU1XzxBYKk/UV4njbAaA1YLbcBmunI00V4vt7IY8wMwHoeO4rwslqHzQwAEXnFQp0hjj6K8Ca3brICs3IANLP16P+Gi/Cy2jBZwRYBYC0/XHJ8I/UxhCcZrBYAYA0/9DqGdyCm8GxWNSmOPsSh+xJ3eCLjk+/VAFhh+ThFeP7sOo8VAFjGD7eK8HybYVUGgCasH+Rc75IEwbNZzQTAUn64E+AFP00QPJtVCQDe44fpAV7wOY/vP44hvAmWsmiWBnidIx7ff6JaFUNuhtVQSibuxQjKPlT9/YDv4cTvjyFEMzuXdlUDMceyOUEQxzwXADT7zCoCvmhngiDO5fFmyvKqqxxcOCkQzeitDwDNSsx5ji6eBIjzbIBm1dUChzcQd4iG1SUANEHUxeJ/ye9UhpiS8Q2NF/FhkM0YbsxCxzcTR4i1ZIXtuYMpqyCwhhBuKG4QG2xmBqCZaVoR0k3FCeJKHs/aAM9xRIIlY5VFiJ5WSUZDZDYG0GyTx6KZxhBvMOoQG8notBkC22/dYzyuk/wTQSQR4jSysVlNAIgJ43562U+E3FT8QHTdX68im36xFiDYALFoxqy52xiBzjobxM8c174XeH5YrNVrmY7zUQYXlobk0jwMRJcPeQV9ZLBpy/SqbUPHeIjnL4fcF2aDeMBh7XuR54ckY6vbg4ZuSA2CKc5FkrEeOGSIKMReGZ3UxtHVCtW1ZDFANpINIGacvuc59kaURwTiedVrMrpKH8cLDq5ZTgZCJmk/AGHt9LSxKr1Jpq41kUGHeKzcnWw/LPKqfCSj2S3WSS775YLbguWq6aLsd8jCMzTjZfB3dvN8q4yv4poKhrKavcJgcC0XgLA/WPMwC9Ucof4w6H6vmWU+SgaSK0DzBLrohWMbfEmC4ZnkE9Usc9adqn4AIqMPtsH3MRLRIg/YtZgAm8my1bGsreIjm5HfED6i1ttldFkXVlm9nbCaWMIymbQn28XnNt9cEu8gJQjiYklJvFNOeIvpLANeIIl3jFUS4ny+nZCgIQmpn64Q3kMtNM01+VgZn5pJPrZborU526+fZycfQ+Kdh15kmm/6u1dlfBf3X6rvJPrp7+bQr33KGvvvFcfp72xDoPFNGU1qGKcEjLjXbyTP9YlBpQDt5uC7IyLwsDEQiTQimQLUttWMXpiZPSxrQwwNkzBhJKHFFCTyHCzhdwN8sAXb0usqDXI/h0TYb3s1YHDYw4bZs2dkfMUZIslIY3BEIp4G2bZSvukyE3F3sQl18vxenteZztGDSZBTlxEQOUwPIZBF9FFIBQ+H3PywQC8LfYsFThPQlEwF79W8zY8RQI9KYX6M4DJrdCJ/jCDbMKpWJv85DFOr0uzLbsjEn8PokRDTU/0vwACwczOmB6btAwAAAABJRU5ErkJggg==);
        background-size: contain;
    }
    
    .nav-title {
        position: absolute;
        top: 16px;
        left: 42px;
        color: #d5d5d6;
    }
    
    .bottom-nav {
        position: fixed;
        bottom: 0;
        width: 100%;
        height: 70px;
        background: #000;
        opacity: 0.9;
    }
    
    .nav-pannel-bk {
        position: fixed;
        bottom: 70px;
        height: 135px;
        width: 100%;
        background: #000;
        opacity: 0.9;
        z-index: 10000;
    }
    
    .nav-pannel {
        position: fixed;
        bottom: 70px;
        height: 135px;
        widows: 100%;
        background: none;
        color: #fff;
        z-index: 10001;
    }
    
    .child-mod {
        padding: 5px 10px;
        margin: 15px;
    }
    
    .child-mod span {
        display: inline-block;
        padding-right: 20px;
        padding-left: 10px;
    }
    
    .child-mod button {
        border-radius: 16px;
        background: none;
        border: 1px #c8c8c8 solid;
        padding: 5px 40px;
        color: #fff;
    }
    
    .child-mod button:nth-child(2) {
        margin-right: 10px;
    }
    
    .bk-container {
        position: relative;
        width: 30px;
        height: 30px;
        border-radius: 15px;
        background: #ffffff;
        display: inline-block;
        vertical-align: -14px;
        margin-left: 10px;
    }
    
    .bk-container-current {
        position: absolute;
        width: 32px;
        height: 32px;
        border-radius: 16px;
        border: 1px #ff7800 solid;
        display: inline-block;
        top: -2px;
        left: -2px;
    }
    
    .child-mod div:nth-child(3) {
        background: #EECC9C;
    }
    
    .child-mod div:nth-child(4) {
        background: #ADD678;
    }
    
    .child-mod div:nth-child(5) {
        background: #666;
    }
    
    .bottom-contents {
        position: relative;
        width: 26px;
        margin: 0 auto;
    }
    
    .bottom_content {
        position: absolute;
        top: 3px;
        left: 2px;
        width: 18px;
        height: 13px;
        background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADUAAAAoCAYAAABerrI1AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyNpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNS1jMDE0IDc5LjE1MTQ4MSwgMjAxMy8wMy8xMy0xMjowOToxNSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIChNYWNpbnRvc2gpIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkNFN0E3M0IwMjc4NDExRTU5RkYxQjg1Rjk2QkEyNzBEIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkNFN0E3M0IxMjc4NDExRTU5RkYxQjg1Rjk2QkEyNzBEIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6N0M1ODVCRkYyNzg0MTFFNTlGRjFCODVGOTZCQTI3MEQiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6N0M1ODVDMDAyNzg0MTFFNTlGRjFCODVGOTZCQTI3MEQiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz5uTX6PAAAA0UlEQVR42uyXsQrCMBRFX4p0V39Pv8FJcekHFJe6d+v3NY6CDvUFooQ0AcEllnPhlgz3QU6bBq6ZnvdaRC7qndqoB/VR/ZC5wuxGytLtvXejUJ0uDlGgVZ8Tg6lsaWod1Jh461a9TQyMBX6hWLaSBary5zBWn8kPf8DUr/Rx8hfEPth4kxkIs+tCL4rG/VOLPH5AAQUUUEABBRRQv0O54nf1tcL6dZ3Jh9mpMH/2TkmkJFISKYmURKCAAgoooIACCihKIiWRkkhJpCR+XxJfAgwA/ROhOlYvoWQAAAAASUVORK5CYII=);
        background-size: contain;
    }
    
    .bottom_font {
        position: absolute;
        top: 3px;
        left: 2px;
        width: 16px;
        height: 11px;
        background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEYAAAAuCAYAAACViW+zAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyNpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNS1jMDE0IDc5LjE1MTQ4MSwgMjAxMy8wMy8xMy0xMjowOToxNSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIChNYWNpbnRvc2gpIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjBCRTkzQUQ3Mjc4NzExRTU5RkYxQjg1Rjk2QkEyNzBEIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjBCRTkzQUQ4Mjc4NzExRTU5RkYxQjg1Rjk2QkEyNzBEIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6Q0U3QTczQkEyNzg0MTFFNTlGRjFCODVGOTZCQTI3MEQiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6MEJFOTNBRDYyNzg3MTFFNTlGRjFCODVGOTZCQTI3MEQiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz6/hjRDAAAFqklEQVR42uRaaWwVVRi9fTbYqoBoEGIVrDsBA6JRAY0VSkQUl7pQI8YQGjTRaNCgBtdoApho3aoRRJaIC25/VBTBCiqCuKX+QDFqFANRsRCtsRWr9XzxNBnu++6bO/fNe9i+k5y0c2fmzrwz3/22mbKuv9pNChgCLgLHgBvABnCr6Qkor1CHy1ISZjVYG9leC55V6sLsB/4ucynj7T1VmEwKU09VRBHUmx6MNIS5JuF4SQhzIniKY5+MjypVYa4OtKb/PfJxvn3B7eABOY4Rp3wo2FZKzndajCiG+68otaWkLaP23rKcQoWRDHekMj5DGZPjTisVYWYqY+vB5/g3qZPuFcIMYFJn4wnrr50EDujtwlwFVlpjreBL/P9lbkdRyfMKBcmn7gRfAbeAO8G/wS7yT3Ab+AHYBF4I7ptmuJbUfzN4vDXeCN4U2X4AvNE65gtwOG80rYc6ndcdFnD+DnAe+ChCdme+wpzJyjmKLgr1VWTsOAph11A14LoURBkKrgBPTWGu98CLIE5rPktJC73NliiG5vxOgUK3WN3GlEQRnAG+Zjo7+oQKMxCsU8YXOI7XnHAd5wnFQeAb4GBl37fgXeDp4CGS09Jiy+hPxMoud0RNSSduDV1Kt4DzrbEfecHdyvHyBKSLN8galxu4L1CYp5lxRyGO9WbwcbDT00/OtYVg2VKFJdWWxGIyjtxliUMUw/HFjhwoJBqOVMoLuca54COeonT7xDmMUHbtV5d0KU0Ej7TG/gEXxpy3kMdFIfPUBghzneLMJUS/HTCXiPOYMl6bVBgtc30T/C7mPNm/KgUnvA94iTX2Cy0lFO87rNJbmCpwiqdz9XXCUzivLyqZK21g4tadSObTU96q5FSHJxFmBj18FD8wOvhgJY/fowviKDhz9XXuBccy4kg/eWkKofo3a/tAX2HkBzQo44sSODs57illvEER3Ac7mdxtTEGY/UNrpXOi5hXzQ3NBE1LmnbyXasSTafHlocJoTvJVFmRJsI3n7a12xCD6tfnM0j8CJ4UWkUeA3yjinQ2+FXBzkxS/JKH8KI/o5oP+4LHgMWA177+a20O8ZymvKDMxa9yViK1Kue0xkwlXyLmy1M/jw6pO08RcFiPp/PeOmiRt5CorcvWEbgePDrzmbpYld7gsxiXMpeALRXSGl4Evei6XpWw0JcEf7CN9Bn4Ivs4H0pVUmDXghCIK0+xxvT70UeMd+yXx+5RhfDOrbXH68u5rV47SwFsYcWBfFrDJVKP0arRmlw2tKyj4GnwYfJY5TtKaSRUm4wihtigi1LspWcc6zme3AnKFbnGs1yo/ai4bV00BogyM8+xRVBi9ab3ApNer7XI0t7Qmezemm+zm9f3gbQmddhQnJBFGKtiDrTFZa8tS9inLlAJQrnux4/gJSu10T573MD6JMFqmuyKH8wrFLkfUc7Ujhlvbn1Cc4DTF6O/GVGFGgOMczaZCQFtO4xQTzzBM21acD+rjcqBMzNNqYQ+kEJB5P/eon6RssD8jGWb0z9t8cBj4oE9aLZDPNaZ5PtU0oTWxtM9LWqxtyZTPD7ievO9abbIb9JHeQUcmKsxUxVxlDS8vsDDLFV/R32R/2LhSOfdJ4/8VhfRdZoEfmz3fomoRbXBUGG0ZPWMK/yVUGxOzuOW0mGm9nYes531eQCvqXl7lrNrr2QuSNmajZYm/gjco1x7RnfkOdZT9o1lbFBqjGWW0pC56X9czw42DtCv7xvig7VyKP5vsL9gfQvY7Syymw2S/4thUJFEM65tNisO1I4+8EZjnkWj2ixFFLHQUH4b0ordY+6+En+knwvzElDoaCmeb4mK2JUQT78vGHPZeWhLOL3M/D55k/ntptyOy724l0WyMFpE1jO3NrEyLDVk6E1lIrvU4fgxFGkv/UsWSQnxHK5dhC/3QGqe/dHy1+a8AAwCKR08FSRIHxQAAAABJRU5ErkJggg==);
        background-size: contain;
    }
    
    .bottom_night {
        position: absolute;
        top: 3px;
        left: 2px;
        width: 15px;
        height: 13px;
        background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADkAAAA5CAYAAACMGIOFAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyNpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNS1jMDE0IDc5LjE1MTQ4MSwgMjAxMy8wMy8xMy0xMjowOToxNSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIChNYWNpbnRvc2gpIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkNFN0E3M0I0Mjc4NDExRTU5RkYxQjg1Rjk2QkEyNzBEIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkNFN0E3M0I1Mjc4NDExRTU5RkYxQjg1Rjk2QkEyNzBEIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6Q0U3QTczQjIyNzg0MTFFNTlGRjFCODVGOTZCQTI3MEQiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6Q0U3QTczQjMyNzg0MTFFNTlGRjFCODVGOTZCQTI3MEQiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz6o6V5PAAADu0lEQVR42uyaTUgVURTHm/cigiS1LEitoHoqbgtcZAStngtDoYxa9rFsYYuWfUBhuSjCneiylkH2oavoEZlC4aYsM9toakWLnpsWyfQfOMJrOvdjZs6bedQc+OF7d9499/y9M/fj3HFc110Xo3WAYfp8BozG0agTs8hFsIM+L4H6f1GkvzEnjkYz6/4DS0WmIlORSlsq+bxcKSI3gkHwBlwSGA3PkrjPNE+GnhXAZYprkOLUjOmYQjT0un/aMHAMdcqNQ3GUWq+ujqknt/i+nwZDcc1vih4cojh0cQbqyQaw4P5tSfQo14OezYNGXV0b5zly5Le+mEX2KQTmTHVtl3U58BQ0lpQtgJ2Gei2gE7SDVrANVIMf4Bt4B56Dh+C9wdc80/4RMGteTNr/J/09+lhzW3WBCTeYTVA91WPwKGgPBrldS9kFBkA/qGOuN4FnbjTz6jczvuuoXa/93UHilnxmjoMVV8ZWyJ9IbFICz4FVV9ZWyW9FiDwGfmmCnQIXQBuoBxvobxuVT2nqen57khbpPYNFRYBzoNtiPnXod3MKP0VqJxGRjmaQGQXVAf1VUz3VYOQkIbJLEdADkA3pM0v1OetKQuQ4E8gHUBXxEfDqzzC+x+MW2aL4b+eFRuu8wn9LGH9hN82dTNlrMCa02xgjf347GmdmoJ0puyu8rbrHlB2MU2QrUzYuLLJg2a6VyA7KbLsMi3Tdb9sVuwRJ+2TZrjF+b+4pTd2rkk/1hky4Z+vBapkz7lzW3Ri/ze3KpTqKTNlmYYG1TNlKmJRJpiSDxpkqq/aVKdsrLHIPU/ZFkwFUxu/dYk8M3c3ZNNjnKzsEXgmKPKxo12/G+MOOri+YslPCPXnSst2yTSEjTNkBkBcSmCd/Nu1aDF/hl15cDmdGYO26SXrtGuUs5AZT1kQrn2xIn1la6TQx1/rDT0TR9pMFxUL6fogeraJ6nBWS2k+uZQZUyauPtOO38dNNv1cltZqTzvH0WOZ49oMaqlND321yPCfSbF2ad5UXufaMFiIKLER9BqOK9Ea4m2CZEk61mrOQyYDiJjUpzFpqb5nad8olkjsfvG6RC7oIRsBsSY62SN9H6Lopd3MtyvmorcCM4gD0dkxnk7eiHARHEWg84RWkUXPinZEQeSXsCa8wOYXQqxIi31aAQN3R/rTEAv1lqCNs3taSTqoEmclmqf2FIFlCm3cGvBeBzoOt4I7vraqgJvW+awPF9B0MgJ9RRZYz+5a+75qKTEWmIstuFfm+q7RJve8ayH4LMACaxEJEaXs23AAAAABJRU5ErkJggg==);
        background-size: contain;
    }
    
    .bottom-nav .item {
        display: inline-block;
        width: 32%;
        color: #fff;
        text-align: center;
        margin: 0 auto;
    }
    
    .icon-text {
        position: absolute;
        top: 25px;
        font-size: 10px;
    }
    
    .artical-action-mid {
        position: fixed;
        z-index: 10003;
        width: 100%;
        height: 40%;
        top: 30%;
    }
}
    </style>
</head>
 
<body>
    <div id="root" class="container">
        <!-- 脱离文档流的隐藏层 -->
        <div class="m-artical-action">
            <div class="artical-action-mid" id="action_mid"></div>
        </div>
		<div id="top-nav" class="top-nav">
		<a href="#" onclick="javascript:history.back(-1);">
            <div id="icon-back" class="icon-back"></div>
            <div id="nav-title" class="nav-title">返回书架</div>
		</a>
			<div id="nav-title" class="nav-title" style="left: 130px;">字号调节：
						<select id="size-select">
							<option value=15>小</option>
							<option value=20 selected>中</option>
							<option value=25>大</option>
							<option value=30>特大</option>
						</select>
			</div>
			<div id="nav-title" class="nav-title" style="left: 300px;">语言切换：
				<input type="button" value="繁体" onclick="zh_tran('t');"/>
				<input type="button" value="简体" onclick="zh_tran('s');"/>
			</div>
			</div>
		</div>
		</div>
        <div id="fiction_container" class="m_read_content">
		<?php echo "<br/><br/><H4>" . $_GET['url'] . "</H4>";?>
		<p id="artical" class="m_read_content" style="font-size:20px;">
            <?php 
			if ($_GET['filetype'] != "pdf") {
			$contents = file_get_contents("./ebookall/" . $_GET['url']);  
			$encoder = file_get_contents("./ebookall/" . $_GET['shelf'] . "/encoder.ini");  
			echo "编码系统：" . $encoder . "<br />";
			if ($encoder == "utf8") {
			$contents = iconv("gb2312", "utf-8//IGNORE",$contents);
			}
			$contents=str_replace("\r\n","<br />",$contents);
			echo $contents;
			echo "</p></div>";
			} else {
			echo "</p></div>";
			echo "<iframe src=\"/ebook/web/?file=/ebook/ebookall/" . $_GET['url'] ."\"width=\"100%\" height=\"800\" scrolling=\"auto\">";
			echo "<object data=\"/ebook/ebookall/" . $_GET['url'] . "\" type=\"application/pdf\" width=\"98%\" height=\"1000\">";
			echo "<iframe src=\"/ebook/ebookall/" . $_GET['url'] . "\" width=\"100%\" height=\"1000\">";
			 echo "This browser does not support PDFs. Please download the PDF to view it: <a href=\"/ebook/ebookall/" . $_GET['url'] . ">Download PDF</a></iframe>  </iframe></object>";
			}?>
			
    </div>
<script>
    window.onload= function(){
        var oPtxt=document.getElementById("artical");
        var oinput=document.getElementById("size-select");
		oinput.onchange = function(){
            oPtxt.style.fontSize=oinput.value+'px';
		}
    }

// 网页简繁体转换
// 本js用于客户在网站页面选择繁体中文或简体中文显示，默认是正常显示，即简繁体同时显示
// 在用户第一次访问网页时,会自动检测客户端语言进行操作并提示.此功能可关闭
// 本程序只在UTF8编码下测试过，不保证其他编码有效
// -------------- 以下参数大部分可以更改 --------------------
//s = simplified 简体中文 t = traditional 繁体中文 n = normal 正常显示
var zh_default = 'n'; //默认语言，请不要改变
var zh_choose = 'n'; //当前选择
var zh_expires = 7; //cookie过期天数
var zh_class = 'zh_click'; //链接的class名，id为class + s/t/n 之一
var zh_style_active = 'font-weight:bold; color:green;'; //当前选择的链接式样
var zh_style_inactive = 'color:blue;'; //非当前选择的链接式样
var zh_browserLang = ''; //浏览器语言
var zh_autoLang_t = true; //浏览器语言为繁体时自动进行操作
var zh_autoLang_s = false; //浏览器语言为简体时自动进行操作
var zh_autoLang_alert = true; //自动操作后是否显示提示消息
//自动操作后的提示消息
var zh_autoLang_msg = '歡迎來到本站,本站爲方便台灣香港的用戶\n1.采用UTF-8國際編碼,用任何語言發帖都不用轉碼.\n2.自動判斷繁體用戶,顯示繁體網頁\n3.在網頁最上方有語言選擇,如果浏覽有問題時可以切換\n4.本消息在cookie有效期內只顯示一次';
var zh_autoLang_checked = 0; //次检测浏览器次数,第一次写cookie为1,提示后为2,今后将不再提示
//判断浏览器语言的正则,ie为小写,ff为大写
var zh_langReg_t = /^zh-tw|zh-hk$/i;
var zh_langReg_s = /^zh-cn$/i;
//简体繁体对照字表,可以自行替换
var zh_s = '皑蔼碍爱翱袄奥坝罢摆败颁办绊帮绑镑谤剥饱宝报鲍辈贝钡狈备惫绷笔毕毙闭边编贬变辩辫鳖瘪濒滨宾摈饼拨钵铂驳卜补参蚕残惭惨灿苍舱仓沧厕侧册测层诧搀掺蝉馋谗缠铲产阐颤场尝长偿肠厂畅钞车彻尘陈衬撑称惩诚骋痴迟驰耻齿炽冲虫宠畴踌筹绸丑橱厨锄雏础储触处传疮闯创锤纯绰辞词赐聪葱囱从丛凑窜错达带贷担单郸掸胆惮诞弹当挡党荡档捣岛祷导盗灯邓敌涤递缔点垫电淀钓调迭谍叠钉顶锭订东动栋冻斗犊独读赌镀锻断缎兑队对吨顿钝夺鹅额讹恶饿儿尔饵贰发罚阀珐矾钒烦范贩饭访纺飞废费纷坟奋愤粪丰枫锋风疯冯缝讽凤肤辐抚辅赋复负讣妇缚该钙盖干赶秆赣冈刚钢纲岗皋镐搁鸽阁铬个给龚宫巩贡钩沟构购够蛊顾剐关观馆惯贯广规硅归龟闺轨诡柜贵刽辊滚锅国过骇韩汉阂鹤贺横轰鸿红后壶护沪户哗华画划话怀坏欢环还缓换唤痪焕涣黄谎挥辉毁贿秽会烩汇讳诲绘荤浑伙获货祸击机积饥讥鸡绩缉极辑级挤几蓟剂济计记际继纪夹荚颊贾钾价驾歼监坚笺间艰缄茧检碱硷拣捡简俭减荐槛鉴践贱见键舰剑饯渐溅涧浆蒋桨奖讲酱胶浇骄娇搅铰矫侥脚饺缴绞轿较秸阶节茎惊经颈静镜径痉竞净纠厩旧驹举据锯惧剧鹃绢杰洁结诫届紧锦仅谨进晋烬尽劲荆觉决诀绝钧军骏开凯颗壳课垦恳抠库裤夸块侩宽矿旷况亏岿窥馈溃扩阔蜡腊莱来赖蓝栏拦篮阑兰澜谰揽览懒缆烂滥捞劳涝乐镭垒类泪篱离里鲤礼丽厉励砾历沥隶俩联莲连镰怜涟帘敛脸链恋炼练粮凉两辆谅疗辽镣猎临邻鳞凛赁龄铃凌灵岭领馏刘龙聋咙笼垄拢陇楼娄搂篓芦卢颅庐炉掳卤虏鲁赂禄录陆驴吕铝侣屡缕虑滤绿峦挛孪滦乱抡轮伦仑沦纶论萝罗逻锣箩骡骆络妈玛码蚂马骂吗买麦卖迈脉瞒馒蛮满谩猫锚铆贸么霉没镁门闷们锰梦谜弥觅绵缅庙灭悯闽鸣铭谬谋亩钠纳难挠脑恼闹馁腻撵捻酿鸟聂啮镊镍柠狞宁拧泞钮纽脓浓农疟诺欧鸥殴呕沤盘庞国爱赔喷鹏骗飘频贫苹凭评泼颇扑铺朴谱脐齐骑岂启气弃讫牵扦钎铅迁签谦钱钳潜浅谴堑枪呛墙蔷强抢锹桥乔侨翘窍窃钦亲轻氢倾顷请庆琼穷趋区躯驱龋颧权劝却鹊让饶扰绕热韧认纫荣绒软锐闰润洒萨鳃赛伞丧骚扫涩杀纱筛晒闪陕赡缮伤赏烧绍赊摄慑设绅审婶肾渗声绳胜圣师狮湿诗尸时蚀实识驶势释饰视试寿兽枢输书赎属术树竖数帅双谁税顺说硕烁丝饲耸怂颂讼诵擞苏诉肃虽绥岁孙损笋缩琐锁獭挞抬摊贪瘫滩坛谭谈叹汤烫涛绦腾誊锑题体屉条贴铁厅听烃铜统头图涂团颓蜕脱鸵驮驼椭洼袜弯湾顽万网韦违围为潍维苇伟伪纬谓卫温闻纹稳问瓮挝蜗涡窝呜钨乌诬无芜吴坞雾务误锡牺袭习铣戏细虾辖峡侠狭厦锨鲜纤咸贤衔闲显险现献县馅羡宪线厢镶乡详响项萧销晓啸蝎协挟携胁谐写泻谢锌衅兴汹锈绣虚嘘须许绪续轩悬选癣绚学勋询寻驯训讯逊压鸦鸭哑亚讶阉烟盐严颜阎艳厌砚彦谚验鸯杨扬疡阳痒养样瑶摇尧遥窑谣药爷页业叶医铱颐遗仪彝蚁艺亿忆义诣议谊译异绎荫阴银饮樱婴鹰应缨莹萤营荧蝇颖哟拥佣痈踊咏涌优忧邮铀犹游诱舆鱼渔娱与屿语吁御狱誉预驭鸳渊辕园员圆缘远愿约跃钥岳粤悦阅云郧匀陨运蕴酝晕韵杂灾载攒暂赞赃脏凿枣灶责择则泽贼赠扎札轧铡闸诈斋债毡盏斩辗崭栈战绽张涨帐账胀赵蛰辙锗这贞针侦诊镇阵挣睁狰帧郑证织职执纸挚掷帜质钟终种肿众诌轴皱昼骤猪诸诛烛瞩嘱贮铸筑驻专砖转赚桩庄装妆壮状锥赘坠缀谆浊兹资渍踪综总纵邹诅组钻致钟么为只凶准启板里雳余链泄';
var zh_t = '皚藹礙愛翺襖奧壩罷擺敗頒辦絆幫綁鎊謗剝飽寶報鮑輩貝鋇狽備憊繃筆畢斃閉邊編貶變辯辮鼈癟瀕濱賓擯餅撥缽鉑駁蔔補參蠶殘慚慘燦蒼艙倉滄廁側冊測層詫攙摻蟬饞讒纏鏟産闡顫場嘗長償腸廠暢鈔車徹塵陳襯撐稱懲誠騁癡遲馳恥齒熾沖蟲寵疇躊籌綢醜櫥廚鋤雛礎儲觸處傳瘡闖創錘純綽辭詞賜聰蔥囪從叢湊竄錯達帶貸擔單鄲撣膽憚誕彈當擋黨蕩檔搗島禱導盜燈鄧敵滌遞締點墊電澱釣調叠諜疊釘頂錠訂東動棟凍鬥犢獨讀賭鍍鍛斷緞兌隊對噸頓鈍奪鵝額訛惡餓兒爾餌貳發罰閥琺礬釩煩範販飯訪紡飛廢費紛墳奮憤糞豐楓鋒風瘋馮縫諷鳳膚輻撫輔賦複負訃婦縛該鈣蓋幹趕稈贛岡剛鋼綱崗臯鎬擱鴿閣鉻個給龔宮鞏貢鈎溝構購夠蠱顧剮關觀館慣貫廣規矽歸龜閨軌詭櫃貴劊輥滾鍋國過駭韓漢閡鶴賀橫轟鴻紅後壺護滬戶嘩華畫劃話懷壞歡環還緩換喚瘓煥渙黃謊揮輝毀賄穢會燴彙諱誨繪葷渾夥獲貨禍擊機積饑譏雞績緝極輯級擠幾薊劑濟計記際繼紀夾莢頰賈鉀價駕殲監堅箋間艱緘繭檢堿鹼揀撿簡儉減薦檻鑒踐賤見鍵艦劍餞漸濺澗漿蔣槳獎講醬膠澆驕嬌攪鉸矯僥腳餃繳絞轎較稭階節莖驚經頸靜鏡徑痙競淨糾廄舊駒舉據鋸懼劇鵑絹傑潔結誡屆緊錦僅謹進晉燼盡勁荊覺決訣絕鈞軍駿開凱顆殼課墾懇摳庫褲誇塊儈寬礦曠況虧巋窺饋潰擴闊蠟臘萊來賴藍欄攔籃闌蘭瀾讕攬覽懶纜爛濫撈勞澇樂鐳壘類淚籬離裏鯉禮麗厲勵礫曆瀝隸倆聯蓮連鐮憐漣簾斂臉鏈戀煉練糧涼兩輛諒療遼鐐獵臨鄰鱗凜賃齡鈴淩靈嶺領餾劉龍聾嚨籠壟攏隴樓婁摟簍蘆盧顱廬爐擄鹵虜魯賂祿錄陸驢呂鋁侶屢縷慮濾綠巒攣孿灤亂掄輪倫侖淪綸論蘿羅邏鑼籮騾駱絡媽瑪碼螞馬罵嗎買麥賣邁脈瞞饅蠻滿謾貓錨鉚貿麽黴沒鎂門悶們錳夢謎彌覓綿緬廟滅憫閩鳴銘謬謀畝鈉納難撓腦惱鬧餒膩攆撚釀鳥聶齧鑷鎳檸獰甯擰濘鈕紐膿濃農瘧諾歐鷗毆嘔漚盤龐國愛賠噴鵬騙飄頻貧蘋憑評潑頗撲鋪樸譜臍齊騎豈啓氣棄訖牽扡釺鉛遷簽謙錢鉗潛淺譴塹槍嗆牆薔強搶鍬橋喬僑翹竅竊欽親輕氫傾頃請慶瓊窮趨區軀驅齲顴權勸卻鵲讓饒擾繞熱韌認紉榮絨軟銳閏潤灑薩鰓賽傘喪騷掃澀殺紗篩曬閃陝贍繕傷賞燒紹賒攝懾設紳審嬸腎滲聲繩勝聖師獅濕詩屍時蝕實識駛勢釋飾視試壽獸樞輸書贖屬術樹豎數帥雙誰稅順說碩爍絲飼聳慫頌訟誦擻蘇訴肅雖綏歲孫損筍縮瑣鎖獺撻擡攤貪癱灘壇譚談歎湯燙濤縧騰謄銻題體屜條貼鐵廳聽烴銅統頭圖塗團頹蛻脫鴕馱駝橢窪襪彎灣頑萬網韋違圍爲濰維葦偉僞緯謂衛溫聞紋穩問甕撾蝸渦窩嗚鎢烏誣無蕪吳塢霧務誤錫犧襲習銑戲細蝦轄峽俠狹廈鍁鮮纖鹹賢銜閑顯險現獻縣餡羨憲線廂鑲鄉詳響項蕭銷曉嘯蠍協挾攜脅諧寫瀉謝鋅釁興洶鏽繡虛噓須許緒續軒懸選癬絢學勳詢尋馴訓訊遜壓鴉鴨啞亞訝閹煙鹽嚴顔閻豔厭硯彥諺驗鴦楊揚瘍陽癢養樣瑤搖堯遙窯謠藥爺頁業葉醫銥頤遺儀彜蟻藝億憶義詣議誼譯異繹蔭陰銀飲櫻嬰鷹應纓瑩螢營熒蠅穎喲擁傭癰踴詠湧優憂郵鈾猶遊誘輿魚漁娛與嶼語籲禦獄譽預馭鴛淵轅園員圓緣遠願約躍鑰嶽粵悅閱雲鄖勻隕運蘊醞暈韻雜災載攢暫贊贓髒鑿棗竈責擇則澤賊贈紮劄軋鍘閘詐齋債氈盞斬輾嶄棧戰綻張漲帳賬脹趙蟄轍鍺這貞針偵診鎮陣掙睜猙幀鄭證織職執紙摯擲幟質鍾終種腫衆謅軸皺晝驟豬諸誅燭矚囑貯鑄築駐專磚轉賺樁莊裝妝壯狀錐贅墜綴諄濁茲資漬蹤綜總縱鄒詛組鑽緻鐘麼為隻兇準啟闆裡靂餘鍊洩';
String.prototype.tran = function() {
    var s1,s2;
    if (zh_choose == 't') {
        s1 = zh_s;
        s2 = zh_t;
    }else if(zh_choose == 's') {
        s1 = zh_t;
        s2 = zh_s;
    }else {
        return this;
    }
    var a = '';
    var l = this.length;
    for(var i=0;i<this.length;i++){
        var c = this.charAt(i);
        var p = s1.indexOf(c)
        a += p < 0 ? c : s2.charAt(p);
    }
    return a;
}
function setCookie(name, value) {
    var argv = setCookie.arguments;
    var argc = setCookie.arguments.length;
    var expires = (argc > 2) ? argv[2] : null;
    if (expires != null) {
        var LargeExpDate = new Date ();
        LargeExpDate.setTime(LargeExpDate.getTime() + (expires*1000*3600*24));
    }
    document.cookie = name + "=" + escape (value)+((expires == null) ? "" : ("; expires=" +LargeExpDate.toGMTString()));
}
function getCookie(Name) {
    var search = Name + "="
    if (document.cookie.length > 0) {
        offset = document.cookie.indexOf(search);
        if(offset != -1) {
            offset += search.length;
            end = document.cookie.indexOf(";", offset);
            if(end == -1) end = document.cookie.length;
            return unescape(document.cookie.substring(offset, end));
        }else {
            return '';
        }
    }
}
function zh_tranBody(obj) {
    var o = (typeof(obj) == "object") ? obj.childNodes : document.body.childNodes;
    for (var i = 0; i < o.length; i++) {
        var c = o.item(i);
        if ('||BR|HR|TEXTAREA|SCRIPT|'.indexOf("|"+c.tagName+"|") > 0) continue;
        if (c.className == zh_class) {
            if (c.id == zh_class + '_' + zh_choose) {
                c.setAttribute('style', zh_style_active);
                c.style.cssText = zh_style_active;
            }else {
                c.setAttribute('style', zh_style_inactive);
                c.style.cssText = zh_style_inactive;
            }
            continue;
        }
        if (c.title != '' && c.title != null) c.title = c.title.tran();
        if (c.alt != '' && c.alt != null) c.alt = c.alt.tran();
        if (c.tagName == "INPUT" && c.value != '' && c.type != 'text' && c.type != 'hidden' && c.type != 'password') c.value = c.value.tran();
        if (c.nodeType == 3) {
            c.data = c.data.tran();
        }else{
            zh_tranBody(c);
        }
    }
}
function zh_tran(go) {
    if (go) zh_choose = go;
    setCookie('zh_choose', zh_choose, zh_expires);
    if (go == 'n') {
        window.location.reload();
    }else {
        zh_tranBody();
    }
}
function zh_getLang() {
    if (getCookie('zh_choose')) {
        zh_choose = getCookie('zh_choose');
        return true;
    }
    if (!zh_autoLang_t && !zh_autoLang_s) return false;
    if (getCookie('zh_autoLang_checked')) return false;
    if (navigator.language) {
        zh_browserLang = navigator.language;
    }else if (navigator.browserLanguage) {
        zh_browserLang = navigator.browserLanguage;
    }
    if (zh_autoLang_t && zh_langReg_t.test(zh_browserLang)) {
        zh_choose = 't';
    }else if (zh_autoLang_s && zh_langReg_s.test(zh_browserLang)) {
        zh_choose = 's';
    }
    zh_autoLang_checked = 1;
    setCookie('zh_choose', zh_choose, zh_expires);
    if (zh_choose == zh_default) return false;
    return true;
}
function zh_init() {
    zh_getLang();
    c = document.getElementById(zh_class + '_' + zh_choose);
    if (zh_choose != zh_default) {
        if (window.onload) {
            window.onload_before_zh_init = window.onload;
            window.onload = function() {
                zh_tran(zh_choose);
                if (getCookie('zh_autoLang_check')) {alert(zh_autoLang_msg);};
                window.onload_before_zh_init();
            };
        }else {
            window.onload = function() {
                zh_tran(zh_choose);
                if (getCookie('zh_autoLang_check')) {alert(zh_autoLang_msg);};
            };
        }
    }
}
zh_init();
</script>
</body>
 
</html>