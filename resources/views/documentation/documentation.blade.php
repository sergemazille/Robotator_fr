<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="generator" content="Asciidoctor 1.5.4">
<meta name="author" content="Serge Mazille">
<title>Robotator : Documentation</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,600,600italic%7CNoto+Serif:400,400italic,700,700italic%7CDroid+Sans+Mono:400,700">
<style>
/* Asciidoctor default stylesheet | MIT License | http://asciidoctor.org */
/* Remove comment around @import statement below when using as a custom stylesheet */
/*@import "https://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,600,600italic%7CNoto+Serif:400,400italic,700,700italic%7CDroid+Sans+Mono:400,700";*/
article,aside,details,figcaption,figure,footer,header,hgroup,main,nav,section,summary{display:block}
audio,canvas,video{display:inline-block}
audio:not([controls]){display:none;height:0}
[hidden],template{display:none}
script{display:none!important}
html{font-family:sans-serif;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%}
body{margin:0}
a{background:transparent}
a:focus{outline:thin dotted}
a:active,a:hover{outline:0}
h1{font-size:2em;margin:.67em 0}
abbr[title]{border-bottom:1px dotted}
b,strong{font-weight:bold}
dfn{font-style:italic}
hr{-moz-box-sizing:content-box;box-sizing:content-box;height:0}
mark{background:#ff0;color:#000}
code,kbd,pre,samp{font-family:monospace;font-size:1em}
pre{white-space:pre-wrap}
q{quotes:"\201C" "\201D" "\2018" "\2019"}
small{font-size:80%}
sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}
sup{top:-.5em}
sub{bottom:-.25em}
img{border:0}
svg:not(:root){overflow:hidden}
figure{margin:0}
fieldset{border:1px solid silver;margin:0 2px;padding:.35em .625em .75em}
legend{border:0;padding:0}
button,input,select,textarea{font-family:inherit;font-size:100%;margin:0}
button,input{line-height:normal}
button,select{text-transform:none}
button,html input[type="button"],input[type="reset"],input[type="submit"]{-webkit-appearance:button;cursor:pointer}
button[disabled],html input[disabled]{cursor:default}
input[type="checkbox"],input[type="radio"]{box-sizing:border-box;padding:0}
input[type="search"]{-webkit-appearance:textfield;-moz-box-sizing:content-box;-webkit-box-sizing:content-box;box-sizing:content-box}
input[type="search"]::-webkit-search-cancel-button,input[type="search"]::-webkit-search-decoration{-webkit-appearance:none}
button::-moz-focus-inner,input::-moz-focus-inner{border:0;padding:0}
textarea{overflow:auto;vertical-align:top}
table{border-collapse:collapse;border-spacing:0}
*,*:before,*:after{-moz-box-sizing:border-box;-webkit-box-sizing:border-box;box-sizing:border-box}
html,body{font-size:100%}
body{background:#fff;color:rgba(0,0,0,.8);padding:0;margin:0;font-family:"Noto Serif","DejaVu Serif",serif;font-weight:400;font-style:normal;line-height:1;position:relative;cursor:auto}
a:hover{cursor:pointer}
img,object,embed{max-width:100%;height:auto}
object,embed{height:100%}
img{-ms-interpolation-mode:bicubic}
.left{float:left!important}
.right{float:right!important}
.text-left{text-align:left!important}
.text-right{text-align:right!important}
.text-center{text-align:center!important}
.text-justify{text-align:justify!important}
.hide{display:none}
body{-webkit-font-smoothing:antialiased}
img,object,svg{display:inline-block;vertical-align:middle}
textarea{height:auto;min-height:50px}
select{width:100%}
.center{margin-left:auto;margin-right:auto}
.spread{width:100%}
p.lead,.paragraph.lead>p,#preamble>.sectionbody>.paragraph:first-of-type p{font-size:1.21875em;line-height:1.6}
.subheader,.admonitionblock td.content>.title,.audioblock>.title,.exampleblock>.title,.imageblock>.title,.listingblock>.title,.literalblock>.title,.stemblock>.title,.openblock>.title,.paragraph>.title,.quoteblock>.title,table.tableblock>.title,.verseblock>.title,.videoblock>.title,.dlist>.title,.olist>.title,.ulist>.title,.qlist>.title,.hdlist>.title{line-height:1.45;color:#7a2518;font-weight:400;margin-top:0;margin-bottom:.25em}
div,dl,dt,dd,ul,ol,li,h1,h2,h3,#toctitle,.sidebarblock>.content>.title,h4,h5,h6,pre,form,p,blockquote,th,td{margin:0;padding:0;direction:ltr}
a{color:#2156a5;text-decoration:underline;line-height:inherit}
a:hover,a:focus{color:#1d4b8f}
a img{border:none}
p{font-family:inherit;font-weight:400;font-size:1em;line-height:1.6;margin-bottom:1.25em;text-rendering:optimizeLegibility}
p aside{font-size:.875em;line-height:1.35;font-style:italic}
h1,h2,h3,#toctitle,.sidebarblock>.content>.title,h4,h5,h6{font-family:"Open Sans","DejaVu Sans",sans-serif;font-weight:300;font-style:normal;color:#ba3925;text-rendering:optimizeLegibility;margin-top:1em;margin-bottom:.5em;line-height:1.0125em}
h1 small,h2 small,h3 small,#toctitle small,.sidebarblock>.content>.title small,h4 small,h5 small,h6 small{font-size:60%;color:#e99b8f;line-height:0}
h1{font-size:2.125em}
h2{font-size:1.6875em}
h3,#toctitle,.sidebarblock>.content>.title{font-size:1.375em}
h4,h5{font-size:1.125em}
h6{font-size:1em}
hr{border:solid #ddddd8;border-width:1px 0 0;clear:both;margin:1.25em 0 1.1875em;height:0}
em,i{font-style:italic;line-height:inherit}
strong,b{font-weight:bold;line-height:inherit}
small{font-size:60%;line-height:inherit}
code{font-family:"Droid Sans Mono","DejaVu Sans Mono",monospace;font-weight:400;color:rgba(0,0,0,.9)}
ul,ol,dl{font-size:1em;line-height:1.6;margin-bottom:1.25em;list-style-position:outside;font-family:inherit}
ul,ol,ul.no-bullet,ol.no-bullet{margin-left:1.5em}
ul li ul,ul li ol{margin-left:1.25em;margin-bottom:0;font-size:1em}
ul.square li ul,ul.circle li ul,ul.disc li ul{list-style:inherit}
ul.square{list-style-type:square}
ul.circle{list-style-type:circle}
ul.disc{list-style-type:disc}
ul.no-bullet{list-style:none}
ol li ul,ol li ol{margin-left:1.25em;margin-bottom:0}
dl dt{margin-bottom:.3125em;font-weight:bold}
dl dd{margin-bottom:1.25em}
abbr,acronym{text-transform:uppercase;font-size:90%;color:rgba(0,0,0,.8);border-bottom:1px dotted #ddd;cursor:help}
abbr{text-transform:none}
blockquote{margin:0 0 1.25em;padding:.5625em 1.25em 0 1.1875em;border-left:1px solid #ddd}
blockquote cite{display:block;font-size:.9375em;color:rgba(0,0,0,.6)}
blockquote cite:before{content:"\2014 \0020"}
blockquote cite a,blockquote cite a:visited{color:rgba(0,0,0,.6)}
blockquote,blockquote p{line-height:1.6;color:rgba(0,0,0,.85)}
@media only screen and (min-width:768px){h1,h2,h3,#toctitle,.sidebarblock>.content>.title,h4,h5,h6{line-height:1.2}
h1{font-size:2.75em}
h2{font-size:2.3125em}
h3,#toctitle,.sidebarblock>.content>.title{font-size:1.6875em}
h4{font-size:1.4375em}}
table{background:#fff;margin-bottom:1.25em;border:solid 1px #dedede}
table thead,table tfoot{background:#f7f8f7;font-weight:bold}
table thead tr th,table thead tr td,table tfoot tr th,table tfoot tr td{padding:.5em .625em .625em;font-size:inherit;color:rgba(0,0,0,.8);text-align:left}
table tr th,table tr td{padding:.5625em .625em;font-size:inherit;color:rgba(0,0,0,.8)}
table tr.even,table tr.alt,table tr:nth-of-type(even){background:#f8f8f7}
table thead tr th,table tfoot tr th,table tbody tr td,table tr td,table tfoot tr td{display:table-cell;line-height:1.6}
body{tab-size:4}
h1,h2,h3,#toctitle,.sidebarblock>.content>.title,h4,h5,h6{line-height:1.2;word-spacing:-.05em}
h1 strong,h2 strong,h3 strong,#toctitle strong,.sidebarblock>.content>.title strong,h4 strong,h5 strong,h6 strong{font-weight:400}
.clearfix:before,.clearfix:after,.float-group:before,.float-group:after{content:" ";display:table}
.clearfix:after,.float-group:after{clear:both}
*:not(pre)>code{font-size:.9375em;font-style:normal!important;letter-spacing:0;padding:.1em .5ex;word-spacing:-.15em;background-color:#f7f7f8;-webkit-border-radius:4px;border-radius:4px;line-height:1.45;text-rendering:optimizeSpeed}
pre,pre>code{line-height:1.45;color:rgba(0,0,0,.9);font-family:"Droid Sans Mono","DejaVu Sans Mono",monospace;font-weight:400;text-rendering:optimizeSpeed}
.keyseq{color:rgba(51,51,51,.8)}
kbd{font-family:"Droid Sans Mono","DejaVu Sans Mono",monospace;display:inline-block;color:rgba(0,0,0,.8);font-size:.65em;line-height:1.45;background-color:#f7f7f7;border:1px solid #ccc;-webkit-border-radius:3px;border-radius:3px;-webkit-box-shadow:0 1px 0 rgba(0,0,0,.2),0 0 0 .1em white inset;box-shadow:0 1px 0 rgba(0,0,0,.2),0 0 0 .1em #fff inset;margin:0 .15em;padding:.2em .5em;vertical-align:middle;position:relative;top:-.1em;white-space:nowrap}
.keyseq kbd:first-child{margin-left:0}
.keyseq kbd:last-child{margin-right:0}
.menuseq,.menu{color:rgba(0,0,0,.8)}
b.button:before,b.button:after{position:relative;top:-1px;font-weight:400}
b.button:before{content:"[";padding:0 3px 0 2px}
b.button:after{content:"]";padding:0 2px 0 3px}
p a>code:hover{color:rgba(0,0,0,.9)}
#header,#content,#footnotes,#footer{width:100%;margin-left:auto;margin-right:auto;margin-top:0;margin-bottom:0;max-width:62.5em;*zoom:1;position:relative;padding-left:.9375em;padding-right:.9375em}
#header:before,#header:after,#content:before,#content:after,#footnotes:before,#footnotes:after,#footer:before,#footer:after{content:" ";display:table}
#header:after,#content:after,#footnotes:after,#footer:after{clear:both}
#content{margin-top:1.25em}
#content:before{content:none}
#header>h1:first-child{color:rgba(0,0,0,.85);margin-top:2.25rem;margin-bottom:0}
#header>h1:first-child+#toc{margin-top:8px;border-top:1px solid #ddddd8}
#header>h1:only-child,body.toc2 #header>h1:nth-last-child(2){border-bottom:1px solid #ddddd8;padding-bottom:8px}
#header .details{border-bottom:1px solid #ddddd8;line-height:1.45;padding-top:.25em;padding-bottom:.25em;padding-left:.25em;color:rgba(0,0,0,.6);display:-ms-flexbox;display:-webkit-flex;display:flex;-ms-flex-flow:row wrap;-webkit-flex-flow:row wrap;flex-flow:row wrap}
#header .details span:first-child{margin-left:-.125em}
#header .details span.email a{color:rgba(0,0,0,.85)}
#header .details br{display:none}
#header .details br+span:before{content:"\00a0\2013\00a0"}
#header .details br+span.author:before{content:"\00a0\22c5\00a0";color:rgba(0,0,0,.85)}
#header .details br+span#revremark:before{content:"\00a0|\00a0"}
#header #revnumber{text-transform:capitalize}
#header #revnumber:after{content:"\00a0"}
#content>h1:first-child:not([class]){color:rgba(0,0,0,.85);border-bottom:1px solid #ddddd8;padding-bottom:8px;margin-top:0;padding-top:1rem;margin-bottom:1.25rem}
#toc{border-bottom:1px solid #efefed;padding-bottom:.5em}
#toc>ul{margin-left:.125em}
#toc ul.sectlevel0>li>a{font-style:italic}
#toc ul.sectlevel0 ul.sectlevel1{margin:.5em 0}
#toc ul{font-family:"Open Sans","DejaVu Sans",sans-serif;list-style-type:none}
#toc li{line-height:1.3334;margin-top:.3334em}
#toc a{text-decoration:none}
#toc a:active{text-decoration:underline}
#toctitle{color:#7a2518;font-size:1.2em}
@media only screen and (min-width:768px){#toctitle{font-size:1.375em}
body.toc2{padding-left:15em;padding-right:0}
#toc.toc2{margin-top:0!important;background-color:#f8f8f7;position:fixed;width:15em;left:0;top:0;border-right:1px solid #efefed;border-top-width:0!important;border-bottom-width:0!important;z-index:1000;padding:1.25em 1em;height:100%;overflow:auto}
#toc.toc2 #toctitle{margin-top:0;margin-bottom:.8rem;font-size:1.2em}
#toc.toc2>ul{font-size:.9em;margin-bottom:0}
#toc.toc2 ul ul{margin-left:0;padding-left:1em}
#toc.toc2 ul.sectlevel0 ul.sectlevel1{padding-left:0;margin-top:.5em;margin-bottom:.5em}
body.toc2.toc-right{padding-left:0;padding-right:15em}
body.toc2.toc-right #toc.toc2{border-right-width:0;border-left:1px solid #efefed;left:auto;right:0}}
@media only screen and (min-width:1280px){body.toc2{padding-left:20em;padding-right:0}
#toc.toc2{width:20em}
#toc.toc2 #toctitle{font-size:1.375em}
#toc.toc2>ul{font-size:.95em}
#toc.toc2 ul ul{padding-left:1.25em}
body.toc2.toc-right{padding-left:0;padding-right:20em}}
#content #toc{border-style:solid;border-width:1px;border-color:#e0e0dc;margin-bottom:1.25em;padding:1.25em;background:#f8f8f7;-webkit-border-radius:4px;border-radius:4px}
#content #toc>:first-child{margin-top:0}
#content #toc>:last-child{margin-bottom:0}
#footer{max-width:100%;background-color:rgba(0,0,0,.8);padding:1.25em}
#footer-text{color:rgba(255,255,255,.8);line-height:1.44}
.sect1{padding-bottom:.625em}
@media only screen and (min-width:768px){.sect1{padding-bottom:1.25em}}
.sect1+.sect1{border-top:1px solid #efefed}
#content h1>a.anchor,h2>a.anchor,h3>a.anchor,#toctitle>a.anchor,.sidebarblock>.content>.title>a.anchor,h4>a.anchor,h5>a.anchor,h6>a.anchor{position:absolute;z-index:1001;width:1.5ex;margin-left:-1.5ex;display:block;text-decoration:none!important;visibility:hidden;text-align:center;font-weight:400}
#content h1>a.anchor:before,h2>a.anchor:before,h3>a.anchor:before,#toctitle>a.anchor:before,.sidebarblock>.content>.title>a.anchor:before,h4>a.anchor:before,h5>a.anchor:before,h6>a.anchor:before{content:"\00A7";font-size:.85em;display:block;padding-top:.1em}
#content h1:hover>a.anchor,#content h1>a.anchor:hover,h2:hover>a.anchor,h2>a.anchor:hover,h3:hover>a.anchor,#toctitle:hover>a.anchor,.sidebarblock>.content>.title:hover>a.anchor,h3>a.anchor:hover,#toctitle>a.anchor:hover,.sidebarblock>.content>.title>a.anchor:hover,h4:hover>a.anchor,h4>a.anchor:hover,h5:hover>a.anchor,h5>a.anchor:hover,h6:hover>a.anchor,h6>a.anchor:hover{visibility:visible}
#content h1>a.link,h2>a.link,h3>a.link,#toctitle>a.link,.sidebarblock>.content>.title>a.link,h4>a.link,h5>a.link,h6>a.link{color:#ba3925;text-decoration:none}
#content h1>a.link:hover,h2>a.link:hover,h3>a.link:hover,#toctitle>a.link:hover,.sidebarblock>.content>.title>a.link:hover,h4>a.link:hover,h5>a.link:hover,h6>a.link:hover{color:#a53221}
.audioblock,.imageblock,.literalblock,.listingblock,.stemblock,.videoblock{margin-bottom:1.25em}
.admonitionblock td.content>.title,.audioblock>.title,.exampleblock>.title,.imageblock>.title,.listingblock>.title,.literalblock>.title,.stemblock>.title,.openblock>.title,.paragraph>.title,.quoteblock>.title,table.tableblock>.title,.verseblock>.title,.videoblock>.title,.dlist>.title,.olist>.title,.ulist>.title,.qlist>.title,.hdlist>.title{text-rendering:optimizeLegibility;text-align:left;font-family:"Noto Serif","DejaVu Serif",serif;font-size:1rem;font-style:italic}
table.tableblock>caption.title{white-space:nowrap;overflow:visible;max-width:0}
.paragraph.lead>p,#preamble>.sectionbody>.paragraph:first-of-type p{color:rgba(0,0,0,.85)}
table.tableblock #preamble>.sectionbody>.paragraph:first-of-type p{font-size:inherit}
.admonitionblock>table{border-collapse:separate;border:0;background:none;width:100%}
.admonitionblock>table td.icon{text-align:center;width:80px}
.admonitionblock>table td.icon img{max-width:none}
.admonitionblock>table td.icon .title{font-weight:bold;font-family:"Open Sans","DejaVu Sans",sans-serif;text-transform:uppercase}
.admonitionblock>table td.content{padding-left:1.125em;padding-right:1.25em;border-left:1px solid #ddddd8;color:rgba(0,0,0,.6)}
.admonitionblock>table td.content>:last-child>:last-child{margin-bottom:0}
.exampleblock>.content{border-style:solid;border-width:1px;border-color:#e6e6e6;margin-bottom:1.25em;padding:1.25em;background:#fff;-webkit-border-radius:4px;border-radius:4px}
.exampleblock>.content>:first-child{margin-top:0}
.exampleblock>.content>:last-child{margin-bottom:0}
.sidebarblock{border-style:solid;border-width:1px;border-color:#e0e0dc;margin-bottom:1.25em;padding:1.25em;background:#f8f8f7;-webkit-border-radius:4px;border-radius:4px}
.sidebarblock>:first-child{margin-top:0}
.sidebarblock>:last-child{margin-bottom:0}
.sidebarblock>.content>.title{color:#7a2518;margin-top:0;text-align:center}
.exampleblock>.content>:last-child>:last-child,.exampleblock>.content .olist>ol>li:last-child>:last-child,.exampleblock>.content .ulist>ul>li:last-child>:last-child,.exampleblock>.content .qlist>ol>li:last-child>:last-child,.sidebarblock>.content>:last-child>:last-child,.sidebarblock>.content .olist>ol>li:last-child>:last-child,.sidebarblock>.content .ulist>ul>li:last-child>:last-child,.sidebarblock>.content .qlist>ol>li:last-child>:last-child{margin-bottom:0}
.literalblock pre,.listingblock pre:not(.highlight),.listingblock pre[class="highlight"],.listingblock pre[class^="highlight "],.listingblock pre.CodeRay,.listingblock pre.prettyprint{background:#f7f7f8}
.sidebarblock .literalblock pre,.sidebarblock .listingblock pre:not(.highlight),.sidebarblock .listingblock pre[class="highlight"],.sidebarblock .listingblock pre[class^="highlight "],.sidebarblock .listingblock pre.CodeRay,.sidebarblock .listingblock pre.prettyprint{background:#f2f1f1}
.literalblock pre,.literalblock pre[class],.listingblock pre,.listingblock pre[class]{-webkit-border-radius:4px;border-radius:4px;word-wrap:break-word;padding:1em;font-size:.8125em}
.literalblock pre.nowrap,.literalblock pre[class].nowrap,.listingblock pre.nowrap,.listingblock pre[class].nowrap{overflow-x:auto;white-space:pre;word-wrap:normal}
@media only screen and (min-width:768px){.literalblock pre,.literalblock pre[class],.listingblock pre,.listingblock pre[class]{font-size:.90625em}}
@media only screen and (min-width:1280px){.literalblock pre,.literalblock pre[class],.listingblock pre,.listingblock pre[class]{font-size:1em}}
.literalblock.output pre{color:#f7f7f8;background-color:rgba(0,0,0,.9)}
.listingblock pre.highlightjs{padding:0}
.listingblock pre.highlightjs>code{padding:1em;-webkit-border-radius:4px;border-radius:4px}
.listingblock pre.prettyprint{border-width:0}
.listingblock>.content{position:relative}
.listingblock code[data-lang]:before{display:none;content:attr(data-lang);position:absolute;font-size:.75em;top:.425rem;right:.5rem;line-height:1;text-transform:uppercase;color:#999}
.listingblock:hover code[data-lang]:before{display:block}
.listingblock.terminal pre .command:before{content:attr(data-prompt);padding-right:.5em;color:#999}
.listingblock.terminal pre .command:not([data-prompt]):before{content:"$"}
table.pyhltable{border-collapse:separate;border:0;margin-bottom:0;background:none}
table.pyhltable td{vertical-align:top;padding-top:0;padding-bottom:0;line-height:1.45}
table.pyhltable td.code{padding-left:.75em;padding-right:0}
pre.pygments .lineno,table.pyhltable td:not(.code){color:#999;padding-left:0;padding-right:.5em;border-right:1px solid #ddddd8}
pre.pygments .lineno{display:inline-block;margin-right:.25em}
table.pyhltable .linenodiv{background:none!important;padding-right:0!important}
.quoteblock{margin:0 1em 1.25em 1.5em;display:table}
.quoteblock>.title{margin-left:-1.5em;margin-bottom:.75em}
.quoteblock blockquote,.quoteblock blockquote p{color:rgba(0,0,0,.85);font-size:1.15rem;line-height:1.75;word-spacing:.1em;letter-spacing:0;font-style:italic;text-align:justify}
.quoteblock blockquote{margin:0;padding:0;border:0}
.quoteblock blockquote:before{content:"\201c";float:left;font-size:2.75em;font-weight:bold;line-height:.6em;margin-left:-.6em;color:#7a2518;text-shadow:0 1px 2px rgba(0,0,0,.1)}
.quoteblock blockquote>.paragraph:last-child p{margin-bottom:0}
.quoteblock .attribution{margin-top:.5em;margin-right:.5ex;text-align:right}
.quoteblock .quoteblock{margin-left:0;margin-right:0;padding:.5em 0;border-left:3px solid rgba(0,0,0,.6)}
.quoteblock .quoteblock blockquote{padding:0 0 0 .75em}
.quoteblock .quoteblock blockquote:before{display:none}
.verseblock{margin:0 1em 1.25em 1em}
.verseblock pre{font-family:"Open Sans","DejaVu Sans",sans;font-size:1.15rem;color:rgba(0,0,0,.85);font-weight:300;text-rendering:optimizeLegibility}
.verseblock pre strong{font-weight:400}
.verseblock .attribution{margin-top:1.25rem;margin-left:.5ex}
.quoteblock .attribution,.verseblock .attribution{font-size:.9375em;line-height:1.45;font-style:italic}
.quoteblock .attribution br,.verseblock .attribution br{display:none}
.quoteblock .attribution cite,.verseblock .attribution cite{display:block;letter-spacing:-.025em;color:rgba(0,0,0,.6)}
.quoteblock.abstract{margin:0 0 1.25em 0;display:block}
.quoteblock.abstract blockquote,.quoteblock.abstract blockquote p{text-align:left;word-spacing:0}
.quoteblock.abstract blockquote:before,.quoteblock.abstract blockquote p:first-of-type:before{display:none}
table.tableblock{max-width:100%;border-collapse:separate}
table.tableblock td>.paragraph:last-child p>p:last-child,table.tableblock th>p:last-child,table.tableblock td>p:last-child{margin-bottom:0}
table.tableblock,th.tableblock,td.tableblock{border:0 solid #dedede}
table.grid-all th.tableblock,table.grid-all td.tableblock{border-width:0 1px 1px 0}
table.grid-all tfoot>tr>th.tableblock,table.grid-all tfoot>tr>td.tableblock{border-width:1px 1px 0 0}
table.grid-cols th.tableblock,table.grid-cols td.tableblock{border-width:0 1px 0 0}
table.grid-all *>tr>.tableblock:last-child,table.grid-cols *>tr>.tableblock:last-child{border-right-width:0}
table.grid-rows th.tableblock,table.grid-rows td.tableblock{border-width:0 0 1px 0}
table.grid-all tbody>tr:last-child>th.tableblock,table.grid-all tbody>tr:last-child>td.tableblock,table.grid-all thead:last-child>tr>th.tableblock,table.grid-rows tbody>tr:last-child>th.tableblock,table.grid-rows tbody>tr:last-child>td.tableblock,table.grid-rows thead:last-child>tr>th.tableblock{border-bottom-width:0}
table.grid-rows tfoot>tr>th.tableblock,table.grid-rows tfoot>tr>td.tableblock{border-width:1px 0 0 0}
table.frame-all{border-width:1px}
table.frame-sides{border-width:0 1px}
table.frame-topbot{border-width:1px 0}
th.halign-left,td.halign-left{text-align:left}
th.halign-right,td.halign-right{text-align:right}
th.halign-center,td.halign-center{text-align:center}
th.valign-top,td.valign-top{vertical-align:top}
th.valign-bottom,td.valign-bottom{vertical-align:bottom}
th.valign-middle,td.valign-middle{vertical-align:middle}
table thead th,table tfoot th{font-weight:bold}
tbody tr th{display:table-cell;line-height:1.6;background:#f7f8f7}
tbody tr th,tbody tr th p,tfoot tr th,tfoot tr th p{color:rgba(0,0,0,.8);font-weight:bold}
p.tableblock>code:only-child{background:none;padding:0}
p.tableblock{font-size:1em}
td>div.verse{white-space:pre}
ol{margin-left:1.75em}
ul li ol{margin-left:1.5em}
dl dd{margin-left:1.125em}
dl dd:last-child,dl dd:last-child>:last-child{margin-bottom:0}
ol>li p,ul>li p,ul dd,ol dd,.olist .olist,.ulist .ulist,.ulist .olist,.olist .ulist{margin-bottom:.625em}
ul.unstyled,ol.unnumbered,ul.checklist,ul.none{list-style-type:none}
ul.unstyled,ol.unnumbered,ul.checklist{margin-left:.625em}
ul.checklist li>p:first-child>.fa-square-o:first-child,ul.checklist li>p:first-child>.fa-check-square-o:first-child{width:1em;font-size:.85em}
ul.checklist li>p:first-child>input[type="checkbox"]:first-child{width:1em;position:relative;top:1px}
ul.inline{margin:0 auto .625em auto;margin-left:-1.375em;margin-right:0;padding:0;list-style:none;overflow:hidden}
ul.inline>li{list-style:none;float:left;margin-left:1.375em;display:block}
ul.inline>li>*{display:block}
.unstyled dl dt{font-weight:400;font-style:normal}
ol.arabic{list-style-type:decimal}
ol.decimal{list-style-type:decimal-leading-zero}
ol.loweralpha{list-style-type:lower-alpha}
ol.upperalpha{list-style-type:upper-alpha}
ol.lowerroman{list-style-type:lower-roman}
ol.upperroman{list-style-type:upper-roman}
ol.lowergreek{list-style-type:lower-greek}
.hdlist>table,.colist>table{border:0;background:none}
.hdlist>table>tbody>tr,.colist>table>tbody>tr{background:none}
td.hdlist1,td.hdlist2{vertical-align:top;padding:0 .625em}
td.hdlist1{font-weight:bold;padding-bottom:1.25em}
.literalblock+.colist,.listingblock+.colist{margin-top:-.5em}
.colist>table tr>td:first-of-type{padding:0 .75em;line-height:1}
.colist>table tr>td:last-of-type{padding:.25em 0}
.thumb,.th{line-height:0;display:inline-block;border:solid 4px #fff;-webkit-box-shadow:0 0 0 1px #ddd;box-shadow:0 0 0 1px #ddd}
.imageblock.left,.imageblock[style*="float: left"]{margin:.25em .625em 1.25em 0}
.imageblock.right,.imageblock[style*="float: right"]{margin:.25em 0 1.25em .625em}
.imageblock>.title{margin-bottom:0}
.imageblock.thumb,.imageblock.th{border-width:6px}
.imageblock.thumb>.title,.imageblock.th>.title{padding:0 .125em}
.image.left,.image.right{margin-top:.25em;margin-bottom:.25em;display:inline-block;line-height:0}
.image.left{margin-right:.625em}
.image.right{margin-left:.625em}
a.image{text-decoration:none;display:inline-block}
a.image object{pointer-events:none}
sup.footnote,sup.footnoteref{font-size:.875em;position:static;vertical-align:super}
sup.footnote a,sup.footnoteref a{text-decoration:none}
sup.footnote a:active,sup.footnoteref a:active{text-decoration:underline}
#footnotes{padding-top:.75em;padding-bottom:.75em;margin-bottom:.625em}
#footnotes hr{width:20%;min-width:6.25em;margin:-.25em 0 .75em 0;border-width:1px 0 0 0}
#footnotes .footnote{padding:0 .375em 0 .225em;line-height:1.3334;font-size:.875em;margin-left:1.2em;text-indent:-1.05em;margin-bottom:.2em}
#footnotes .footnote a:first-of-type{font-weight:bold;text-decoration:none}
#footnotes .footnote:last-of-type{margin-bottom:0}
#content #footnotes{margin-top:-.625em;margin-bottom:0;padding:.75em 0}
.gist .file-data>table{border:0;background:#fff;width:100%;margin-bottom:0}
.gist .file-data>table td.line-data{width:99%}
div.unbreakable{page-break-inside:avoid}
.big{font-size:larger}
.small{font-size:smaller}
.underline{text-decoration:underline}
.overline{text-decoration:overline}
.line-through{text-decoration:line-through}
.aqua{color:#00bfbf}
.aqua-background{background-color:#00fafa}
.black{color:#000}
.black-background{background-color:#000}
.blue{color:#0000bf}
.blue-background{background-color:#0000fa}
.fuchsia{color:#bf00bf}
.fuchsia-background{background-color:#fa00fa}
.gray{color:#606060}
.gray-background{background-color:#7d7d7d}
.green{color:#006000}
.green-background{background-color:#007d00}
.lime{color:#00bf00}
.lime-background{background-color:#00fa00}
.maroon{color:#600000}
.maroon-background{background-color:#7d0000}
.navy{color:#000060}
.navy-background{background-color:#00007d}
.olive{color:#606000}
.olive-background{background-color:#7d7d00}
.purple{color:#600060}
.purple-background{background-color:#7d007d}
.red{color:#bf0000}
.red-background{background-color:#fa0000}
.silver{color:#909090}
.silver-background{background-color:#bcbcbc}
.teal{color:#006060}
.teal-background{background-color:#007d7d}
.white{color:#bfbfbf}
.white-background{background-color:#fafafa}
.yellow{color:#bfbf00}
.yellow-background{background-color:#fafa00}
span.icon>.fa{cursor:default}
.admonitionblock td.icon [class^="fa icon-"]{font-size:2.5em;text-shadow:1px 1px 2px rgba(0,0,0,.5);cursor:default}
.admonitionblock td.icon .icon-note:before{content:"\f05a";color:#19407c}
.admonitionblock td.icon .icon-tip:before{content:"\f0eb";text-shadow:1px 1px 2px rgba(155,155,0,.8);color:#111}
.admonitionblock td.icon .icon-warning:before{content:"\f071";color:#bf6900}
.admonitionblock td.icon .icon-caution:before{content:"\f06d";color:#bf3400}
.admonitionblock td.icon .icon-important:before{content:"\f06a";color:#bf0000}
.conum[data-value]{display:inline-block;color:#fff!important;background-color:rgba(0,0,0,.8);-webkit-border-radius:100px;border-radius:100px;text-align:center;font-size:.75em;width:1.67em;height:1.67em;line-height:1.67em;font-family:"Open Sans","DejaVu Sans",sans-serif;font-style:normal;font-weight:bold}
.conum[data-value] *{color:#fff!important}
.conum[data-value]+b{display:none}
.conum[data-value]:after{content:attr(data-value)}
pre .conum[data-value]{position:relative;top:-.125em}
b.conum *{color:inherit!important}
.conum:not([data-value]):empty{display:none}
dt,th.tableblock,td.content,div.footnote{text-rendering:optimizeLegibility}
h1,h2,p,td.content,span.alt{letter-spacing:-.01em}
p strong,td.content strong,div.footnote strong{letter-spacing:-.005em}
p,blockquote,dt,td.content,span.alt{font-size:1.0625rem}
p{margin-bottom:1.25rem}
.sidebarblock p,.sidebarblock dt,.sidebarblock td.content,p.tableblock{font-size:1em}
.exampleblock>.content{background-color:#fffef7;border-color:#e0e0dc;-webkit-box-shadow:0 1px 4px #e0e0dc;box-shadow:0 1px 4px #e0e0dc}
.print-only{display:none!important}
@media print{@page{margin:1.25cm .75cm}
*{-webkit-box-shadow:none!important;box-shadow:none!important;text-shadow:none!important}
a{color:inherit!important;text-decoration:underline!important}
a.bare,a[href^="#"],a[href^="mailto:"]{text-decoration:none!important}
a[href^="http:"]:not(.bare):after,a[href^="https:"]:not(.bare):after{content:"(" attr(href) ")";display:inline-block;font-size:.875em;padding-left:.25em}
abbr[title]:after{content:" (" attr(title) ")"}
pre,blockquote,tr,img,object,svg{page-break-inside:avoid}
thead{display:table-header-group}
svg{max-width:100%}
p,blockquote,dt,td.content{font-size:1em;orphans:3;widows:3}
h2,h3,#toctitle,.sidebarblock>.content>.title{page-break-after:avoid}
#toc,.sidebarblock,.exampleblock>.content{background:none!important}
#toc{border-bottom:1px solid #ddddd8!important;padding-bottom:0!important}
.sect1{padding-bottom:0!important}
.sect1+.sect1{border:0!important}
#header>h1:first-child{margin-top:1.25rem}
body.book #header{text-align:center}
body.book #header>h1:first-child{border:0!important;margin:2.5em 0 1em 0}
body.book #header .details{border:0!important;display:block;padding:0!important}
body.book #header .details span:first-child{margin-left:0!important}
body.book #header .details br{display:block}
body.book #header .details br+span:before{content:none!important}
body.book #toc{border:0!important;text-align:left!important;padding:0!important;margin:0!important}
body.book #toc,body.book #preamble,body.book h1.sect0,body.book .sect1>h2{page-break-before:always}
.listingblock code[data-lang]:before{display:block}
#footer{background:none!important;padding:0 .9375em}
#footer-text{color:rgba(0,0,0,.6)!important;font-size:.9em}
.hide-on-print{display:none!important}
.print-only{display:block!important}
.hide-for-print{display:none!important}
.show-for-print{display:inherit!important}}
</style>
</head>
<body class="article toc2 toc-left">
<div id="header">
<h1>Robotator : Documentation</h1>
<div class="details">
<span id="author" class="author">Serge Mazille</span><br>
<span id="email" class="email"><a href="mailto:serge.mazille@gmail.com">serge.mazille@gmail.com</a></span><br>
<span id="revnumber">version 0.1,</span>
<span id="revdate">09-04-2016</span>
</div>
<div id="toc" class="toc2">
<div id="toctitle">Sommaire</div>
<ul class="sectlevel1">
<li><a href="#_le_projet_robotator">Le projet Robotator</a></li>
<li><a href="#_fonctionnement_général">1. Fonctionnement général</a>
<ul class="sectlevel2">
<li><a href="#_la_communication">1.1. La communication</a>
<ul class="sectlevel3">
<li><a href="#_aspect_matériel">1.1.1. Aspect matériel</a></li>
<li><a href="#_aspect_logiciel">1.1.2. Aspect logiciel</a></li>
</ul>
</li>
<li><a href="#_les_fonctionnalités">1.2. Les fonctionnalités</a>
<ul class="sectlevel3">
<li><a href="#_vidéo">1.2.1. Vidéo</a></li>
<li><a href="#_audio">1.2.2. Audio</a></li>
<li><a href="#_déplacement">1.2.3. Déplacement</a></li>
<li><a href="#_lumière">1.2.4. Lumière</a></li>
</ul>
</li>
</ul>
</li>
<li><a href="#_développement_côté_serveur">2. Développement côté serveur</a>
<ul class="sectlevel2">
<li><a href="#_raspbian">2.1. Raspbian</a></li>
<li><a href="#_activer_et_installer_la_caméra">2.2. Activer et installer la caméra</a>
<ul class="sectlevel3">
<li><a href="#_ajouter_les_paquets_sources_d_uv4l">2.2.1. Ajouter les paquets sources d&#8217;UV4L</a></li>
<li><a href="#_installer_le_serveur_de_streaming_vidéo">2.2.2. Installer le serveur de streaming vidéo</a></li>
<li><a href="#_paramétrer_le_serveur_de_streaming_vidéo">2.2.3. Paramétrer le serveur de streaming vidéo</a></li>
</ul>
</li>
<li><a href="#_le_serveur">2.3. Le serveur</a>
<ul class="sectlevel3">
<li><a href="#_accès_depuis_un_navigateur_internet">2.3.1. Accès depuis un navigateur Internet</a></li>
<li><a href="#_accès_depuis_l_application_mobile">2.3.2. Accès depuis l&#8217;application mobile</a></li>
<li><a href="#_communication_avec_le_serveur">2.3.3. Communication avec le serveur</a></li>
</ul>
</li>
<li><a href="#_arduberry">2.4. Arduberry</a></li>
</ul>
</li>
<li><a href="#_développement_côté_client">3. Développement côté client</a></li>
</ul>
</div>
</div>
<div id="content">
<div class="sect1">
<h2 id="_le_projet_robotator"><a class="link" href="#_le_projet_robotator">Le projet Robotator</a></h2>
<div class="sectionbody">
<div class="imageblock">
<div class="content">
<img src="{{ URL::asset('images/logo_small.jpg') }}" alt="Logo">
</div>
</div>
<div class="videoblock">
<div class="content">
<iframe width="384" height="288" src="https://www.youtube.com/embed/XQC1UZk7Y3s?rel=0" frameborder="0" allowfullscreen></iframe>
</div>
</div>
<div class="paragraph">
<p>Robotator est un projet personnel de Robotique, ayant pour objectif de réaliser un petit robot, contrôlable à distance à l’aide d’un smartphone ou d’un navigateur internet.</p>
</div>
<div class="paragraph">
<p>Ce projet est basé sur l’utilisation des nouvelles avancées technologiques, que ce soit en termes de hardware, grâce à la démocratisation des cartes électroniques miniaturisées ou encore en termes de software, avec, entre autre, l’adoption des nouvelles spécifications de Javascript et de PHP.</p>
</div>
<div class="paragraph">
<p>L’aspect matériel de Robotator est géré par un mini-ordinateur Raspberry Pi qui lui-même contrôle une carte électronique de type Arduino (Arduberry) pour le pilotage d’une carte de contrôle-moteurs.</p>
</div>
<div class="imageblock">
<div class="content">
<img src="{{ URL::asset('images/documentation/photos/prototype.jpg') }}" alt="Prototype de Robotator">
</div>
<div class="title">Figure 1. Prototype de Robotator (30/03/2016)</div>
</div>
<div class="paragraph">
<p>D’un point de vue logiciel, la principale technologie utilisée est Javascript pour sa bonne intégration avec les projets de type IoT (Internet of Things).</p>
</div>
<div class="paragraph">
<p>Le côté client, qui peut être un navigateur Internet, un smartphone ou encore une tablette, est construit sur la base des technologies traditionnellement associées à Internet : HTML5, CSS, Javascript.</p>
</div>
<div class="paragraph">
<p>Le côté serveur, c’est-à-dire le Raspberry Pi installé sur Robotator, est quand-à-lui piloté par Node.js, qui permet d’utiliser Javascript en dehors d’un navigateur Internet.</p>
</div>
<div class="paragraph">
<p>Le but premier de cette documentation est de servir de référence en traitant en détail la partie logicielle du projet.</p>
</div>
</div>
</div>
<div class="sect1">
<h2 id="_fonctionnement_général"><a class="link" href="#_fonctionnement_général">1. Fonctionnement général</a></h2>
<div class="sectionbody">
<div class="paragraph">
<p>Avant de traiter en détail les aspects logiciels du projet Robotator, commençons par en avoir une vue d’ensemble.</p>
</div>
<div class="sect2">
<h3 id="_la_communication"><a class="link" href="#_la_communication">1.1. La communication</a></h3>
<div class="sect3">
<h4 id="_aspect_matériel"><a class="link" href="#_aspect_matériel">1.1.1. Aspect matériel</a></h4>
<div class="paragraph">
<p>Les technologies envisagées pour la communication entre l’appareil de commande et Robotator ont été dans un premier temps la connexion filaire, à l’aide d’un câble Ethernet, l’utilisation du Bluetooth, l’utilisation du WiFi et une connexion radio, telle que celle utilisée pour les véhicules radiocommandés de modélisme.</p>
</div>
<div class="paragraph">
<p>La solution filaire a été rapidement écartée pour des raisons évidentes de limitation de portée.</p>
</div>
<div class="paragraph">
<p>La connexion radio, même si elle n’a pas été prototypée, a également été écartée, malgré ses avantages en termes de stabilité et de portée, car elle se limite à l’utilisation d’appareils de commande équipés d’un émetteur radio spécifique, moins répandus.</p>
</div>
<div class="paragraph">
<p>Après quelques tests du côté de la technologie Bluetooth, notamment en détournant l’utilisation normale d’une manette de Wii, il est devenu évident que la communication avec Robotator devait tirer avantage de la technologie WiFi.</p>
</div>
<div class="paragraph">
<p>Le WiFi permet d’allonger la portée et de communiquer avec Robotator à partir de nombreux appareils devenus omni présents aujourd’hui : les smartphones et les tablettes.</p>
</div>
<div class="paragraph">
<p>De plus il est également possible d’utiliser une box internet comme routeur et de connecter Robotator à son réseau local domestique, et de le piloter à partir d’un ordinateur via un navigateur Internet.</p>
</div>
<div class="paragraph">
<p>Les premiers prototypes du robot ont été réalisés sur la base d’une carte Raspberry Pi 2 qui n’a pas de capacités WiFi natives. Mais il est relativement facile et peu coûteux de lui rajouter un dongle WiFi lui conférant ces capacités.</p>
</div>
<div class="paragraph">
<p>Entre temps la fondation Raspberry Pi a sorti un nouveau modèle qui embarque nativement le WiFi et les prochaines versions de Robotator n’auront donc plus besoin de l’ajout d’un élément matériel supplémentaire.</p>
</div>
<div class="paragraph">
<p>Il est à noter que rien n’empêche de connecter Robotator sur une box Internet ou un routeur à l’aide d’un câble Ethernet.
Même si cela limite les possibilités de déplacement du robot, il conserve ses autres fonctionnalités.</p>
</div>
</div>
<div class="sect3">
<h4 id="_aspect_logiciel"><a class="link" href="#_aspect_logiciel">1.1.2. Aspect logiciel</a></h4>
<div class="paragraph">
<div class="title">Entre l&#8217;application côté client et le serveur</div>
<p>La communication s&#8217;effectuant en WiFi, la solution la plus évidente est d&#8217;utiliser le protocole TCP/IP et les technologies traditionnellement associées à Internet.</p>
</div>
<div class="paragraph">
<p>L&#8217;application cliente communique donc avec Robotator à l&#8217;aide de requêtes HTTP et les commandes sont transmises via AJAX.
Afin d&#8217;améliorer la stabilité de la connexion, il est envisagé d&#8217;utiliser le protocole WebSocket pour les prochaines itérations du projet.</p>
</div>
<div class="paragraph">
<div class="title">Entre le Raspberry Pi et l&#8217;Arduberry</div>
<p>Afin de pouvoir utiliser une carte de contrôle-moteurs (motor shield) destinée à l&#8217;origine à la carte Arduino, le Raspberry Pi est connecté à un Arduberry qui sert de pont entre les différentes cartes électroniques.
Cette connexion s&#8217;effectue en transmission série.</p>
</div>
</div>
</div>
<div class="sect2">
<h3 id="_les_fonctionnalités"><a class="link" href="#_les_fonctionnalités">1.2. Les fonctionnalités</a></h3>
<div class="sect3">
<h4 id="_vidéo"><a class="link" href="#_vidéo">1.2.1. Vidéo</a></h4>
<div class="paragraph">
<p>Afin de diriger Robotator à partir de l&#8217;application cliente, le robot est équipé d&#8217;une caméra embarquée.
L&#8217;utilisateur a donc un retour vidéo et peut contrôler Robotator à distance même si celui-ci est hors de vue.</p>
</div>
<div class="paragraph">
<p>La caméra est la PiCam officielle du Raspberry Pi.
Nous verrons comment installer le driver et utiliser le serveur de streaming uv4l.</p>
</div>
<div class="imageblock">
<div class="content">
<img src="{{ URL::asset('images/documentation/photos/retourVideo.jpg') }}" alt="Retour vidéo">
</div>
<div class="title">Figure 2. Exemple de retour vidéo sur l&#8217;application cliente</div>
</div>
</div>
<div class="sect3">
<h4 id="_audio"><a class="link" href="#_audio">1.2.2. Audio</a></h4>
<div class="paragraph">
<p>Robotator est équipé d&#8217;un petit haut-parleur permettant à l&#8217;utilisateur de lui faire émettre des sons.</p>
</div>
<div class="paragraph">
<p>Ces sons prennent la forme de fichiers au format MP3 lus par le package Node.js : Mplayer.</p>
</div>
<div class="paragraph">
<p>Le déclenchement de l&#8217;un des trois fichiers sons disponibles par défaut lancera également le clignotement d&#8217;une des trois LEDs correspondantes.
Depuis l&#8217;interface utilisateur l&#8217;un des trois boutons audio associés à une couleur (vert, rouge ou jaune), déclenchera donc le son correspondant.</p>
</div>
<div class="imageblock">
<div class="content">
<img src="{{ URL::asset('images/documentation/interface/boutonsAudio.jpg') }}" alt="Boutons audio">
</div>
<div class="title">Figure 3. Boutons audio</div>
</div>
<div class="paragraph">
<p>Un développement futur de Robotator permettra à l&#8217;utilisateur de rajouter ses propres fichiers audio.
Une autre idée à l&#8217;étude est l&#8217;intégration d&#8217;un système de type Talkie-Walkie afin par exemple de permettre à l&#8217;utilisateur de discuter avec quelqu&#8217;un rencontré sur le trajet du robot.</p>
</div>
</div>
<div class="sect3">
<h4 id="_déplacement"><a class="link" href="#_déplacement">1.2.3. Déplacement</a></h4>
<div class="paragraph">
<p>Robotator est bien évidemment équipé de moteurs, chacun prenant en charge l&#8217;une des quatre roues.
Il peut se déplacer vers l&#8217;avant, vers l&#8217;arrière ou tourner sur lui-même.</p>
</div>
<div class="paragraph">
<p>Un servo moteur donne également la possibilité au robot de tourner à droite ou à gauche tout en avançant ou en reculant.</p>
</div>
<div class="imageblock">
<div class="content">
<img src="{{ URL::asset('images/documentation/photos/moteurs.jpg') }}" alt="Photo du Servo moteur">
</div>
<div class="title">Figure 4. Moteurs et servo moteur de direction</div>
</div>
</div>
<div class="sect3">
<h4 id="_lumière"><a class="link" href="#_lumière">1.2.4. Lumière</a></h4>
<div class="paragraph">
<p>En plus des trois LEDs de couleur déclenchées en même temps que le son, Robotator est équipé de deux phares, activables par l&#8217;interface utilisateur.</p>
</div>
<div class="imageblock">
<div class="content">
<img src="{{ URL::asset('images/documentation/photos/phares.jpg') }}" alt="Photo des phares">
</div>
<div class="title">Figure 5. Phares</div>
</div>
</div>
</div>
</div>
</div>
<div class="sect1">
<h2 id="_développement_côté_serveur"><a class="link" href="#_développement_côté_serveur">2. Développement côté serveur</a></h2>
<div class="sectionbody">
<div class="paragraph">
<p>Tout au long de cette documentation le terme 'serveur' sera employé pour désigner soit directement le Raspberry Pi embarqué sur Robotator soit le serveur Node.js tournant dessus.</p>
</div>
<div class="paragraph">
<p>Le Raspberry Pi est un mini ordinateur tournant sur le système d&#8217;exploitation Linux.
La version utilisée dans ce projet est Raspbian, une distribution taillée sur mesure pour le Raspberry Pi.</p>
</div>
<div class="paragraph">
<p>Cette partie détaillera l&#8217;installation complète des drivers, des fichiers de configuration et bien évidemment du serveur Node.js qui fera tourner l&#8217;application.</p>
</div>
<div class="sect2">
<h3 id="_raspbian"><a class="link" href="#_raspbian">2.1. Raspbian</a></h3>
<div class="paragraph">
<p>Le plus simple est de partir d&#8217;une page blanche, et d&#8217;installer une image propre téléchargée sur <a href="https://www.raspberrypi.org/downloads/raspbian/">le site de Raspberry Pi</a>.</p>
</div>
<div class="paragraph">
<p>L&#8217;installation d&#8217;un système d&#8217;exploitation dépassant le cadre de cette documentation, les instructions à suivre <a href="https://www.raspberrypi.org/documentation/installation/installing-images/README.md">sont également disponibles sur le même site</a>.</p>
</div>
<div class="paragraph">
<p>La version courante utilisée sur Robotator est 'Raspbian Jessie'.</p>
</div>
</div>
<div class="sect2">
<h3 id="_activer_et_installer_la_caméra"><a class="link" href="#_activer_et_installer_la_caméra">2.2. Activer et installer la caméra</a></h3>
<div class="paragraph">
<p>Afin de pouvoir utiliser la caméra installée sur le port CSI (Camera Serial Interface) du Raspberry Pi, il faut d&#8217;abord l&#8217;activer.</p>
</div>
<div class="paragraph">
<p>L&#8217;opération n&#8217;a rien de compliqué, il suffit de se rendre dans le panneau de configuration de Raspbian et de cocher la case correspondante.</p>
</div>
<div class="imageblock">
<div class="content">
<img src="{{ URL::asset('images/documentation/screenshot/activerCamera.jpg') }}" alt="Capture d'écran du panneau de configuration">
</div>
<div class="title">Figure 6. Activation de la caméra</div>
</div>
<div class="paragraph">
<p>Une fois la caméra activée, il ne reste plus qu&#8217;à installer les drivers UV4L et le serveur de streaming.</p>
</div>
<div class="sect3">
<h4 id="_ajouter_les_paquets_sources_d_uv4l"><a class="link" href="#_ajouter_les_paquets_sources_d_uv4l">2.2.1. Ajouter les paquets sources d&#8217;UV4L</a></h4>
<div class="listingblock">
<div class="title">Ajouter la clé :</div>
<div class="content">
<pre class="highlight"><code class="language-bash" data-lang="bash">curl http://www.linux-projects.org/listing/uv4l_repo/lrkey.asc | sudo apt-key add -</code></pre>
</div>
</div>
<div class="listingblock">
<div class="title">Ouvrir la liste des paquets :</div>
<div class="content">
<pre class="highlight"><code class="language-bash" data-lang="bash">sudo nano /etc/apt/sources.list</code></pre>
</div>
</div>
<div class="listingblock">
<div class="title">Ajouter le repo source d&#8217;UV4L :</div>
<div class="content">
<pre class="highlight"><code>deb http://www.linux-projects.org/listing/uv4l_repo/raspbian/ wheezy main</code></pre>
</div>
</div>
<div class="listingblock">
<div class="title">Mettre à jour la liste des paquets et installer UV4L :</div>
<div class="content">
<pre class="highlight"><code class="language-bash" data-lang="bash">sudo apt-get update
sudo apt-get install uv4l uv4l-raspicam uv4l-raspicam-extras -y</code></pre>
</div>
</div>
<div class="listingblock">
<div class="title">Tester la bonne installation :</div>
<div class="content">
<pre class="highlight"><code class="language-bash" data-lang="bash">sudo service uv4l_raspicam restart</code></pre>
</div>
</div>
</div>
<div class="sect3">
<h4 id="_installer_le_serveur_de_streaming_vidéo"><a class="link" href="#_installer_le_serveur_de_streaming_vidéo">2.2.2. Installer le serveur de streaming vidéo</a></h4>
<div class="listingblock">
<div class="title">Installer le serveur :</div>
<div class="content">
<pre class="highlight"><code class="language-bash" data-lang="bash">sudo apt-get install uv4l-server uv4l-uvc uv4l-xscreen uv4l-mjpegstream uv4l-dummy -y</code></pre>
</div>
</div>
<div class="listingblock">
<div class="title">Redémarrer :</div>
<div class="content">
<pre class="highlight"><code>sudo reboot</code></pre>
</div>
</div>
</div>
<div class="sect3">
<h4 id="_paramétrer_le_serveur_de_streaming_vidéo"><a class="link" href="#_paramétrer_le_serveur_de_streaming_vidéo">2.2.3. Paramétrer le serveur de streaming vidéo</a></h4>
<div class="listingblock">
<div class="title">Ouvrir le fichier de configuration :</div>
<div class="content">
<pre class="highlight"><code class="language-bash" data-lang="bash">sudo nano /etc/uv4l/uv4l-raspicam.conf</code></pre>
</div>
</div>
<div class="listingblock">
<div class="title">Modifier le numéro de port et le mot de passe</div>
<div class="content">
<pre class="highlight"><code>server-option = --port=1234
server-option = --config-password=robotator</code></pre>
</div>
</div>
<div class="paragraph">
<p>Le mot de passe permet d&#8217;accéder au fichier de configuration à distance à partir d&#8217;un navigateur Internet.</p>
</div>
<div class="paragraph">
<p>Le streaming vidéo de Robotator est désormais accessible à l&#8217;adresse du Pi, au port 1234 :</p>
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><code>http://&lt;raspberrypi-ip&gt;:1234/stream</code></pre>
</div>
</div>
</div>
</div>
<div class="sect2">
<h3 id="_le_serveur"><a class="link" href="#_le_serveur">2.3. Le serveur</a></h3>
<div class="paragraph">
<p>La partie serveur tourne sur Node.js.
Le code est contenu dans le fichier server.js et <a href="https://github.com/sergemazille/Robotator/blob/master/dev/js/AppWebRasPiServer/server.js">est disponible sur GitHub</a>.</p>
</div>
<div class="paragraph">
<p>Robotator est basé sur l&#8217;utilisation de plusieurs modules installables via NPM.</p>
</div>
<div class="ulist">
<div class="title">Liste des dépendances Node.js côté serveur :</div>
<ul>
<li>
<p>onoff : pour le contrôle des broches I/O du Raspberry Pi</p>
</li>
<li>
<p>serialport : pour la communication avec l&#8217;Arduberry</p>
</li>
<li>
<p>express : serveur web pour recevoir les commandes de l&#8217;interface utilisateur</p>
<div class="ulist">
<ul>
<li>
<p>ejs : le moteur de template utilisé par express dans le projet Robotator</p>
</li>
<li>
<p>body-parser : utilisé pour traiter les requêtes de type 'POST'</p>
</li>
</ul>
</div>
</li>
<li>
<p>mplayer : pour la lecture des fichiers audio</p>
</li>
<li>
<p>polo : multicast l&#8217;adresse IP de Robotator en UDP pour la découverte du réseau depuis l&#8217;interface utilisateur</p>
</li>
<li>
<p>console : pour logger des messages de debugging</p>
</li>
<li>
<p>fs et child_process : pour accéder au système, modifier fichiers de configuration, exécuter des commandes Bash</p>
</li>
<li>
<p>os : pour récupérer et retourner l&#8217;adresse IP de Robotator</p>
</li>
</ul>
</div>
<div class="sidebarblock">
<div class="content">
<div class="paragraph">
<p>Comme précisé dans la liste des dépendances, la partie serveur web est gérée par le module 'express'.</p>
</div>
</div>
</div>
<div class="paragraph">
<p>Chaque commande lancée depuis l&#8217;interface utilisateur est interceptée par le serveur grâce au mécanisme de requêtes XMLHttpRequest (AJAX).</p>
</div>
<div class="paragraph">
<p>Il existe deux manières d&#8217;accéder au serveur : soit directement par un navigateur Internet, soit par l&#8217;application mobile.</p>
</div>
<div class="sect3">
<h4 id="_accès_depuis_un_navigateur_internet"><a class="link" href="#_accès_depuis_un_navigateur_internet">2.3.1. Accès depuis un navigateur Internet</a></h4>
<div class="paragraph">
<p>Dans le cas d&#8217;un accès via navigateur Internet, c&#8217;est le serveur lui-même qui est en charge de fournir l&#8217;interface, sous la forme d&#8217;une page rendue par le moteur de template ejs.</p>
</div>
<div class="paragraph">
<p>Les parties du code qui nous intéressent ici sont les suivantes :</p>
</div>
<div class="listingblock">
<div class="title">Configuration basique d&#8217;express</div>
<div class="content">
<pre class="highlight"><code class="language-javascript" data-lang="javascript">const express = require('express');
const app = express();
app.use(express.static(__dirname + '/public'));
app.set('view engine', 'ejs');
app.set('views', __dirname + '/public');</code></pre>
</div>
</div>
<div class="sidebarblock">
<div class="content">
<div class="paragraph">
<p>Explications :</p>
</div>
<div class="paragraph">
<p>Le module express est bien évidemment requis et est assigné à la constante 'app' :</p>
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><code class="language-javascript" data-lang="javascript">const express = require('express');
const app = express();</code></pre>
</div>
</div>
<div class="paragraph">
<p>On indique au module où sont situés les fichiers statiques, comme les ressources (images, audio) et le code de l&#8217;interface (css, javascript et template) :</p>
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><code class="language-javascript" data-lang="javascript">app.use(express.static(__dirname + '/public'));</code></pre>
</div>
</div>
<div class="paragraph">
<p>Il faut également indiquer que le moteur de template est ejs et que les vues sont accessibles dans le répertoire 'public' :</p>
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><code class="language-javascript" data-lang="javascript">app.set('view engine', 'ejs');
app.set('views', __dirname + '/public');</code></pre>
</div>
</div>
</div>
</div>
<div class="paragraph">
<div class="title">Rendu de l&#8217;interface</div>
<p>Quand l&#8217;utilisateur atteint le serveur par son navigateur Internet, la requête est interceptée par le serveur qui lui renvoie la page correspondant à l&#8217;interface :</p>
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><code class="language-javascript" data-lang="javascript">app.get('/', function (req, res) {
    res.render('index');
});</code></pre>
</div>
</div>
</div>
<div class="sect3">
<h4 id="_accès_depuis_l_application_mobile"><a class="link" href="#_accès_depuis_l_application_mobile">2.3.2. Accès depuis l&#8217;application mobile</a></h4>
<div class="paragraph">
<p>Afin de pouvoir accéder au serveur depuis l&#8217;application mobile, nous devons explicitement autoriser les accès 'cross-origin' (CORS)</p>
</div>
<div class="listingblock">
<div class="title">Autorisation des accès Cross-Origin</div>
<div class="content">
<pre class="highlight"><code class="language-javascript" data-lang="javascript">app.use(function (req, res, next) {
    res.header("Access-Control-Allow-Origin", "*");
    res.header("Access-Control-Allow-Headers", "Origin, X-Requested-With, Content-Type, Accept");
    next();
});</code></pre>
</div>
</div>
<div class="paragraph">
<p>Désormais toutes les commandes reçues depuis l&#8217;interface utilisateur se feront sous la forme de requêtes AJAX, que ce soit depuis un navigateur Internet ou l&#8217;application mobile.</p>
</div>
</div>
<div class="sect3">
<h4 id="_communication_avec_le_serveur"><a class="link" href="#_communication_avec_le_serveur">2.3.3. Communication avec le serveur</a></h4>
<div class="paragraph">
<p>Afin de transmettre les commandes de l&#8217;utilisateur entre l&#8217;interface client et l&#8217;application serveur, c&#8217;est la technologie AJAX qui a été choisie.</p>
</div>
<div class="paragraph">
<p>Les informations nécessaires au bon fonctionnement de ce mécanisme sont stockées dans les attributs des boutons, directement dans le DOM de l&#8217;interface.</p>
</div>
<div class="paragraph">
<p>Quand l&#8217;utilisateur clique sur un bouton, l&#8217;information est extraite, par exemple l&#8217;id #1 du bouton de marche avant.
Elle est ensuite envoyée en POST à la bonne adresse du serveur, dans notre exemple '/motor' qui va la traiter ou la transmettre en série à la carte de contrôle des moteurs, c&#8217;est à dire l&#8217;Arduberry et son motor shield.</p>
</div>
<div class="paragraph">
<div class="title">Contrôle des moteurs</div>
<p>L&#8217;interface utilisateur donne accès au contrôle des moteurs via des boutons possédant chacun un identifiant indiquant la direction à donner à Robotator.</p>
</div>
<div class="paragraph">
<p>Ainsi, par exemple, si le bouton ayant l&#8217;id #1 est enclenché, les moteurs tourneront dans le sens de la marche, faisant ainsi avancer Robotator tout droit.</p>
</div>
<div class="paragraph">
<p>Dans le même esprit, l&#8217;id #4 fera tourner les moteurs de droite dans le sens de la marche et les moteurs de gauche dans le sens inverse.
Robotator tournera alors sur place dans le sens inverse des aiguilles d&#8217;une montre.</p>
</div>
<div class="paragraph">
<p>Lorsqu&#8217;un bouton est cliqué, la partie client récupère et transmet cette information au serveur qui la traite de la manière suivante :</p>
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><code class="language-javascript" data-lang="javascript">app.post('/motor', function (req, res) {
    let direction = req.body.direction;
    serial.write(direction);
    res.end();
});</code></pre>
</div>
</div>
<div class="paragraph">
<p>Le serveur récupère l&#8217;information du 'body' de la requête et la passe à l&#8217;Arduberry via transmission série, puis indique à la partie cliente que la requête est traitée avec la commande 'res.end()'.</p>
</div>
<div class="paragraph">
<p>Nous verrons dans les parties correspondantes comment est récupérée l&#8217;information côté client et côté Arduberry.</p>
</div>
<div class="paragraph">
<div class="title">Contrôle du turbo</div>
<p>Le contrôle du turbo est assez similaire dans le sens où la requête envoyée à la carte de contrôle moteurs provoque une modification de la vitesse de rotation des moteurs.</p>
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><code class="language-javascript" data-lang="javascript">app.post('/turbo', function (req, res) {
    let turboState = req.body.turboState; // Intercepte la requête (t = turbo, n = normal)
    serial.write(turboState); // Passe la requête au contrôleur moteur(Arduberry)
    res.end();
});</code></pre>
</div>
</div>
<div class="paragraph">
<p>Il y a deux états possibles :</p>
</div>
<div class="ulist">
<ul>
<li>
<p>le mode normal dans lequel les moteurs tournent à environ 70% de leur vitesse est représenté par le caractère 'n', défini par la constante TURBO_OFF.</p>
</li>
<li>
<p>et le mode turbo où les moteurs derniers tournent à pleine puissance, et qui est représenté par le caractère 't', défini par la constante TURBO_ON.</p>
</li>
</ul>
</div>
<div class="paragraph">
<p>En réalité, ces constantes ne sont pas utilisées ici puisqu&#8217;une fois la requête interceptée, elle est transmise en série directement à l&#8217;Arduberry.</p>
</div>
<div class="paragraph">
<p>Il ne reste plus qu&#8217;à avertir le client que la requête est traitée.</p>
</div>
<div class="paragraph">
<div class="title">Contrôle de l&#8217;audio</div>
<p>Plusieurs éléments entrent en ligne de compte lors de cette requête.</p>
</div>
<div class="paragraph">
<p>Côté client, l&#8217;utilisateur appuie sur l&#8217;un des trois boutons de couleur qui déclenchent le son correspondant.
Ainsi le son qui sera joué est fonction de la couleur du bouton.</p>
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><code class="language-javascript" data-lang="javascript">app.post('/audio', function (req, res) {
    let couleur = req.body.couleur;
    player.openFile(__dirname + '/public/audio/' + couleur + '.mp3');
    res.end();
});</code></pre>
</div>
</div>
<div class="paragraph">
<p>La requête passe donc la couleur du bouton cliqué, permettant ainsi au serveur de savoir quel son jouer.
En effet, le nom des fichiers audio correspond aux couleurs disponibles : vert.mp3, jaune.mp3, rouge.mp3.</p>
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><code class="language-javascript" data-lang="javascript">player.openFile(__dirname + '/public/audio/' + couleur + '.mp3');</code></pre>
</div>
</div>
<div class="paragraph">
<p>C&#8217;est le module Node 'mplayer' qui est en charge de jouer le fichier audio.
Il suffit de passer le chemin vers le bon fichier à sa méthode openFile();</p>
</div>
</div>
</div>
<div class="sect2">
<h3 id="_arduberry"><a class="link" href="#_arduberry">2.4. Arduberry</a></h3>

</div>
</div>
</div>
<div class="sect1">
<h2 id="_développement_côté_client"><a class="link" href="#_développement_côté_client">3. Développement côté client</a></h2>
<div class="sectionbody">

</div>
</div>
</div>
<div id="footer">
<div id="footer-text">
Version 0.1<br>
Last updated 2016-04-23 15:20:05 Paris, Madrid (heure d'été)
</div>
</div>
</body>
</html>