
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Wedding Management System</title>
<meta name="description" content="Sufee Admin - HTML5 Admin Template">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="apple-touch-icon" href="apple-icon.png">
<link rel="shortcut icon" href="favicon.ico">
<link rel="stylesheet" href="{{asset('/backend/css/normalize.css')}}">
<link rel="stylesheet" href="{{asset('/backend/css/bootstrap.css')}}">
<link rel="stylesheet" href="{{asset('/backend/css/awsome.css')}}">
<link rel="stylesheet" href="{{asset('/backend/css/themify.css')}}">
<link rel="stylesheet" href="{{asset('/backend/css/flag.css')}}">
<link rel="stylesheet" href="{{asset('/backend/css/skin.css')}}">

<link rel="stylesheet" href="{{asset('/backend/css/style.css')}}">
<link href="{{asset('/backend/css/min.css')}}" rel="stylesheet">
<style id="" media="all">/* cyrillic-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 400;
  font-stretch: 100%;
  font-display: swap;
  src: url(/fonts.gstatic.com/s/opensans/v34/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTSKmu1aB.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 400;
  font-stretch: 100%;
  font-display: swap;
  src: url(/fonts.gstatic.com/s/opensans/v34/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTSumu1aB.woff2) format('woff2');
  unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* greek-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 400;
  font-stretch: 100%;
  font-display: swap;
  src: url(/fonts.gstatic.com/s/opensans/v34/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTSOmu1aB.woff2) format('woff2');
  unicode-range: U+1F00-1FFF;
}
/* greek */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 400;
  font-stretch: 100%;
  font-display: swap;
  src: url(/fonts.gstatic.com/s/opensans/v34/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTSymu1aB.woff2) format('woff2');
  unicode-range: U+0370-03FF;
}
/* hebrew */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 400;
  font-stretch: 100%;
  font-display: swap;
  src: url(/fonts.gstatic.com/s/opensans/v34/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTS2mu1aB.woff2) format('woff2');
  unicode-range: U+0590-05FF, U+200C-2010, U+20AA, U+25CC, U+FB1D-FB4F;
}
/* vietnamese */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 400;
  font-stretch: 100%;
  font-display: swap;
  src: url(/fonts.gstatic.com/s/opensans/v34/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTSCmu1aB.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 400;
  font-stretch: 100%;
  font-display: swap;
  src: url(/fonts.gstatic.com/s/opensans/v34/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTSGmu1aB.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 400;
  font-stretch: 100%;
  font-display: swap;
  src: url(/fonts.gstatic.com/s/opensans/v34/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTS-muw.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 600;
  font-stretch: 100%;
  font-display: swap;
  src: url(/fonts.gstatic.com/s/opensans/v34/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTSKmu1aB.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 600;
  font-stretch: 100%;
  font-display: swap;
  src: url(/fonts.gstatic.com/s/opensans/v34/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTSumu1aB.woff2) format('woff2');
  unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* greek-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 600;
  font-stretch: 100%;
  font-display: swap;
  src: url(/fonts.gstatic.com/s/opensans/v34/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTSOmu1aB.woff2) format('woff2');
  unicode-range: U+1F00-1FFF;
}
/* greek */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 600;
  font-stretch: 100%;
  font-display: swap;
  src: url(/fonts.gstatic.com/s/opensans/v34/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTSymu1aB.woff2) format('woff2');
  unicode-range: U+0370-03FF;
}
/* hebrew */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 600;
  font-stretch: 100%;
  font-display: swap;
  src: url(/fonts.gstatic.com/s/opensans/v34/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTS2mu1aB.woff2) format('woff2');
  unicode-range: U+0590-05FF, U+200C-2010, U+20AA, U+25CC, U+FB1D-FB4F;
}
/* vietnamese */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 600;
  font-stretch: 100%;
  font-display: swap;
  src: url(/fonts.gstatic.com/s/opensans/v34/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTSCmu1aB.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 600;
  font-stretch: 100%;
  font-display: swap;
  src: url(/fonts.gstatic.com/s/opensans/v34/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTSGmu1aB.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 600;
  font-stretch: 100%;
  font-display: swap;
  src: url(/fonts.gstatic.com/s/opensans/v34/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTS-muw.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 700;
  font-stretch: 100%;
  font-display: swap;
  src: url(/fonts.gstatic.com/s/opensans/v34/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTSKmu1aB.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 700;
  font-stretch: 100%;
  font-display: swap;
  src: url(/fonts.gstatic.com/s/opensans/v34/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTSumu1aB.woff2) format('woff2');
  unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* greek-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 700;
  font-stretch: 100%;
  font-display: swap;
  src: url(/fonts.gstatic.com/s/opensans/v34/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTSOmu1aB.woff2) format('woff2');
  unicode-range: U+1F00-1FFF;
}
/* greek */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 700;
  font-stretch: 100%;
  font-display: swap;
  src: url(/fonts.gstatic.com/s/opensans/v34/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTSymu1aB.woff2) format('woff2');
  unicode-range: U+0370-03FF;
}
/* hebrew */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 700;
  font-stretch: 100%;
  font-display: swap;
  src: url(/fonts.gstatic.com/s/opensans/v34/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTS2mu1aB.woff2) format('woff2');
  unicode-range: U+0590-05FF, U+200C-2010, U+20AA, U+25CC, U+FB1D-FB4F;
}
/* vietnamese */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 700;
  font-stretch: 100%;
  font-display: swap;
  src: url(/fonts.gstatic.com/s/opensans/v34/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTSCmu1aB.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 700;
  font-stretch: 100%;
  font-display: swap;
  src: url(/fonts.gstatic.com/s/opensans/v34/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTSGmu1aB.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 700;
  font-stretch: 100%;
  font-display: swap;
  src: url(/fonts.gstatic.com/s/opensans/v34/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTS-muw.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 800;
  font-stretch: 100%;
  font-display: swap;
  src: url(/fonts.gstatic.com/s/opensans/v34/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTSKmu1aB.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 800;
  font-stretch: 100%;
  font-display: swap;
  src: url(/fonts.gstatic.com/s/opensans/v34/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTSumu1aB.woff2) format('woff2');
  unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* greek-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 800;
  font-stretch: 100%;
  font-display: swap;
  src: url(/fonts.gstatic.com/s/opensans/v34/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTSOmu1aB.woff2) format('woff2');
  unicode-range: U+1F00-1FFF;
}
/* greek */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 800;
  font-stretch: 100%;
  font-display: swap;
  src: url(/fonts.gstatic.com/s/opensans/v34/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTSymu1aB.woff2) format('woff2');
  unicode-range: U+0370-03FF;
}
/* hebrew */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 800;
  font-stretch: 100%;
  font-display: swap;
  src: url(/fonts.gstatic.com/s/opensans/v34/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTS2mu1aB.woff2) format('woff2');
  unicode-range: U+0590-05FF, U+200C-2010, U+20AA, U+25CC, U+FB1D-FB4F;
}
/* vietnamese */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 800;
  font-stretch: 100%;
  font-display: swap;
  src: url(/fonts.gstatic.com/s/opensans/v34/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTSCmu1aB.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 800;
  font-stretch: 100%;
  font-display: swap;
  src: url(/fonts.gstatic.com/s/opensans/v34/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTSGmu1aB.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 800;
  font-stretch: 100%;
  font-display: swap;
  src: url(/fonts.gstatic.com/s/opensans/v34/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTS-muw.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
</style>

<meta name="robots" content="index, nofollow">
<script nonce="938a57d9-1bed-4210-a011-cfc9acb5eade">(function(w,d){!function(cM,cN,cO,cP){cM.zarazData=cM.zarazData||{};cM.zarazData.executed=[];cM.zaraz={deferred:[],listeners:[]};cM.zaraz.q=[];cM.zaraz._f=function(cQ){return function(){var cR=Array.prototype.slice.call(arguments);cM.zaraz.q.push({m:cQ,a:cR})}};for(const cS of["track","set","debug"])cM.zaraz[cS]=cM.zaraz._f(cS);cM.zaraz.init=()=>{var cT=cN.getElementsByTagName(cP)[0],cU=cN.createElement(cP),cV=cN.getElementsByTagName("title")[0];cV&&(cM.zarazData.t=cN.getElementsByTagName("title")[0].text);cM.zarazData.x=Math.random();cM.zarazData.w=cM.screen.width;cM.zarazData.h=cM.screen.height;cM.zarazData.j=cM.innerHeight;cM.zarazData.e=cM.innerWidth;cM.zarazData.l=cM.location.href;cM.zarazData.r=cN.referrer;cM.zarazData.k=cM.screen.colorDepth;cM.zarazData.n=cN.characterSet;cM.zarazData.o=(new Date).getTimezoneOffset();if(cM.dataLayer)for(const cZ of Object.entries(Object.entries(dataLayer).reduce(((c_,da)=>({...c_[1],...da[1]})))))zaraz.set(cZ[0],cZ[1],{scope:"page"});cM.zarazData.q=[];for(;cM.zaraz.q.length;){const db=cM.zaraz.q.shift();cM.zarazData.q.push(db)}cU.defer=!0;for(const dc of[localStorage,sessionStorage])Object.keys(dc||{}).filter((de=>de.startsWith("_zaraz_"))).forEach((dd=>{try{cM.zarazData["z_"+dd.slice(7)]=JSON.parse(dc.getItem(dd))}catch{cM.zarazData["z_"+dd.slice(7)]=dc.getItem(dd)}}));cU.referrerPolicy="origin";cU.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(cM.zarazData)));cT.parentNode.insertBefore(cU,cT)};["complete","interactive"].includes(cN.readyState)?zaraz.init():cM.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,0,"script");})(window,document);</script></head>
<body>






@include('backend.sidebar')








@include('backend.topbar')


@yield('content')





<script src="{{asset('/backend/js/vendor.js')}}"></script>
<script src="{{asset('/backend/js/bootstrap.js')}}"></script>
<script src="{{asset('/backend/js/plugins.js')}}"></script>
<script src="{{asset('/backend/js/main.js')}}"></script>
<script src="{{asset('/backend/js/bundle.js')}}"></script>
<script src="{{asset('/backend/js/dashboard.js')}}"></script>
<script src="{{asset('/backend/js/widgets.js')}}"></script>
<script src="{{asset('/backend/js/jquery1.js')}}"></script>
<script src="{{asset('/backend/js/jquery2.js')}}"></script>
<script src="{{asset('/backend/js/jquery3.js')}}"></script>
<script src="{{asset('/backend/js/world.js')}}"></script>
<script>
        ( function ( $ ) {
            "use strict";

            jQuery( '#vmap' ).vectorMap( {
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: [ '#1de9b6', '#03a9f5' ],
                normalizeFunction: 'polynomial'
            } );
        } )( jQuery );
    </script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/vaafb692b2aea4879b33c060e79fe94621666317369993" integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA==" data-cf-beacon='{"rayId":"77227efc2b482eaa","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2022.11.3","si":100}' crossorigin="anonymous"></script>
</body>
</html>
