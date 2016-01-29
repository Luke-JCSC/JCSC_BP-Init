
<!DOCTYPE html>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=windows-1252">
<title>Ben's Desktop</title>
    <script type="text/javascript" src="../../js/amplitude.js"></script>
		<!-- jQuery only used to help with animations and NON Amplitude elements -->
		<script type="text/javascript" src="js/jquery.min.js"></script>

		<link rel="stylesheet" type="text/css" href="css/AudioPlayer.css"/>
<style type="text/css">

/**
 * ===================================================================
 * CSS3 Windows7 Start Menu by Taufik Nurrohman
 * Release: 29 November 2011
 * URL: http://hompimpaalaihumgambreng.blogspot.com/
 * Note: These experiments are under the God Almighty License.
 * Please do not replace or remove the attribution above if you want to save/modify this project legally.
 * Good luck my Friend!
 * ===================================================================
 */

* {
  margin:0px;
  padding:0px;
  list-style:none;
}

body {
  background:#fff;
  height:1000px;
  display:block;
  background:-webkit-radial-gradient(bottom,circle,#FACF0C,#4BB648);
  background:-moz-radial-gradient(bottom,circle,#FACF0C,#4BB648);
  background:-ms-radial-gradient(bottom,circle,#FACF0C,#4BB648);
  background:-o-radial-gradient(bottom,circle,#FACF0C,#4BB648);
  background:radial-gradient(bottom,circle,#FACF0C,#4BB648);
}

a {
  text-decoration:none;
  color:#444;
}

a:hover {
  text-decoration:underline;
  cursor:pointer;
}

/* Header */
#author {
  font:italic 14px Cambaria,Georgia,Serif;
  color:#666;
  margin:15px;
}

#author h1 {
  font:bold 32px 'Showcard Gothic',Arial,Sans-Serif;
  margin:0 10px;
  color:#437924;
  text-shadow:0 1px 0px rgba(255,255,255,0.4);
  position:relative;
  -webkit-animation:slow 2s;
  -moz-animation:slow 2s;
  -ms-animation:slow 2s;
  animation:slow 2s;
}

#author .deskripsi {
  margin:10px 10px 10px;
  padding:10px;
  background:#F6EEAB;
  background:-webkit-linear-gradient(top,#ECDE8C,#F6EEAB);
  background:-moz-linear-gradient(top,#ECDE8C,#F6EEAB);
  background:-ms-linear-gradient(top,#ECDE8C,#F6EEAB);
  background:-o-linear-gradient(top,#ECDE8C,#F6EEAB);
  background:linear-gradient(top,#ECDE8C,#F6EEAB);
  border:1px solid #DCC56C;
  -webkit-box-shadow:0 1px 2px rgba(0,0,0,0.4);
  -moz-box-shadow:0 1px 2px rgba(0,0,0,0.4);
  box-shadow:0 1px 2px rgba(0,0,0,0.4);
  -webkit-border-radius:3px;
  -moz-border-radius:3px;
  border-radius:3px;
  position:relative;
  z-index:4;
  -webkit-animation:slow 1s;
  -moz-animation:slow 1s;
  -ms-animation:slow 1s;
  animation:slow 1s;
}

#author .deskripsi:before {
  content:"";
  width:0px;
  height:0px;
  border-width:12px;
  border-style:solid;
  border-color:#DCC56C transparent transparent transparent;
  position:absolute;
  top:100%;
  left:19px;
  z-index:-1;
}

#author .deskripsi:after {
  content:"";
  width:0px;
  height:0px;
  border-width:10px;
  border-style:solid;
  border-color:#F6EEAB transparent transparent transparent;
  position:absolute;
  top:100%;
  left:21px;
}

/* Horizontal Bar */
#startbar {
  position:fixed;
  bottom:0px;
  left:0px;
  z-index:1000;
  width:100%;
  height:30px;
  background:-webkit-linear-gradient(65deg,rgba(0,0,0,0.6),rgba(0,0,0,0.9),rgba(0,0,0,0.5),rgba(0,0,0,0.9));
  background:-moz-linear-gradient(65deg,rgba(0,0,0,0.6),rgba(0,0,0,0.9),rgba(0,0,0,0.5),rgba(0,0,0,0.9));
  background:-ms-linear-gradient(65deg,rgba(0,0,0,0.6),rgba(0,0,0,0.9),rgba(0,0,0,0.5),rgba(0,0,0,0.9));
  background:-o-linear-gradient(65deg,rgba(0,0,0,0.6),rgba(0,0,0,0.9),rgba(0,0,0,0.5),rgba(0,0,0,0.9));
  background:linear-gradient(65deg,rgba(0,0,0,0.6),rgba(0,0,0,0.9),rgba(0,0,0,0.5),rgba(0,0,0,0.9));
  border-top:1px solid rgba(0,0,0,0.5);
  -webkit-box-shadow:inset 0 1px 0px rgba(255,255,255,0.4);
  -moz-box-shadow:inset 0 1px 0px rgba(255,255,255,0.4);
  box-shadow:inset 0 1px 0px rgba(255,255,255,0.4);
  font:normal 12px Calibri,Arial,Sans-Serif;
}

/* Windows Logo */
#win {
  width:35px;
  height:35px;
  background:-webkit-radial-gradient(50% 90%,circle closest-corner,#07D9F9,#03456F 100%,#fff 300% );
  background:-moz-radial-gradient(50% 90%,circle closest-corner,#07D9F9,#03456F 100%,#fff 300% );
  background:-ms-radial-gradient(50% 90%,circle closest-corner,#07D9F9,#03456F 100%,#fff 300% );
  background:-o-radial-gradient(50% 90%,circle closest-corner,#07D9F9,#03456F 100%,#fff 300% );
  background:radial-gradient(50% 90%,circle closest-corner,#07D9F9,#03456F 100%,#fff 300% );
  border:1px solid #4A676F;
  -webkit-border-radius:100px;
  -moz-border-radius:100px;
  border-radius:100px;
  -webkit-box-shadow:0 1px 1px rgba(255,255,255,0.9),inset 0px 2px 1px rgba(255,255,255,0.8),inset 0px 5px 2px rgba(255,255,255,0.5),inset 0px 10px 10px rgba(255,255,255,0.3),inset 0px -1px 1px rgba(255,255,255,0.8);
  -moz-box-shadow:0 1px 1px rgba(255,255,255,0.9),inset 0px 2px 1px rgba(255,255,255,0.8),inset 0px 5px 2px rgba(255,255,255,0.5),inset 0px 10px 10px rgba(255,255,255,0.3),inset 0px -1px 1px rgba(255,255,255,0.8);
  box-shadow:0 1px 1px rgba(255,255,255,0.9),inset 0px 2px 1px rgba(255,255,255,0.8),inset 0px 5px 2px rgba(255,255,255,0.5),inset 0px 10px 10px rgba(255,255,255,0.3),inset 0px -1px 1px rgba(255,255,255,0.8);
  margin-top:-5px;
  margin-left:10px;
  margin-right:20px;
  display:block;
  position:relative;
  float:left;
  cursor:pointer;
  webkit-transition:all 0.4s linear;
  -moz-transition:all 0.4s linear;
  -ms-transition:all 0.4s linear;
  -o-transition:all 0.4s linear;
  transition:all 0.4s linear;
}

#cont-win {
  position:relative;
  left:7px;
  top:9px;
  -webkit-transform:skew(-4deg,-7deg) rotate(17deg);
  -moz-transform:skew(-4deg,-7deg) rotate(17deg);
  -ms-transform:skew(-4deg,-7deg) rotate(17deg);
  -o-transform:skew(-4deg,-7deg) rotate(17deg);
  transform:skew(-4deg,-7deg) rotate(17deg);
  display:block;
}

.w1,.w2,.w3,.w4 {
  width:8px;
  height:8px;
  float:left;
  margin:1px;
  background:#000;
  -webkit-box-shadow:1px 1px 1px rgba(0,0,0,0.4);
  -moz-box-shadow:1px 1px 1px rgba(0,0,0,0.4);
  box-shadow:1px 1px 1px rgba(0,0,0,0.4);
  -webkit-transform:skew(-4deg,-7deg);
  -moz-transform:skew(-4deg,-7deg);
  -ms-transform:skew(-4deg,-7deg);
  -o-transform:skew(-4deg,-7deg);
  transform:skew(-4deg,-7deg);
}

.w1 {
  background:#BF321C;
  background:-webkit-radial-gradient(right bottom,circle cover,#fff,#E9A72E,#BF321C);
  background:-moz-radial-gradient(right bottom,circle cover,#fff,#E9A72E,#BF321C);
  background:-ms-radial-gradient(right bottom,circle cover,#fff,#E9A72E,#BF321C);
  background:-o-radial-gradient(right bottom,circle cover,#fff,#E9A72E,#BF321C);
  background:radial-gradient(right bottom,circle cover,#fff,#E9A72E,#BF321C);
}

.w2 {
  background:#74A647;
  background:-webkit-radial-gradient(left bottom,circle cover,#fff,#C1D687,#74A647);
  background:-moz-radial-gradient(left bottom,circle cover,#fff,#C1D687,#74A647);
  background:-ms-radial-gradient(left bottom,circle cover,#fff,#C1D687,#74A647);
  background:-o-radial-gradient(left bottom,circle cover,#fff,#C1D687,#74A647);
  background:radial-gradient(left bottom,circle cover,#fff,#C1D687,#74A647);
}

.w3 {
  background:#399FD3;
  background:-webkit-radial-gradient(right top,circle cover,#fff,#97D3F2,#399FD3);
  background:-moz-radial-gradient(right top,circle cover,#fff,#97D3F2,#399FD3);
  background:-ms-radial-gradient(right top,circle cover,#fff,#97D3F2,#399FD3);
  background:-o-radial-gradient(right top,circle cover,#fff,#97D3F2,#399FD3);
  background:radial-gradient(right top,circle cover,#fff,#97D3F2,#399FD3);
}

.w4 {
  background:#FCCC2E;
  background:-webkit-radial-gradient(left top,circle cover,#fff,#F7DF95,#FCCC2E);
  background:-moz-radial-gradient(left top,circle cover,#fff,#F7DF95,#FCCC2E);
  background:-ms-radial-gradient(left top,circle cover,#fff,#F7DF95,#FCCC2E);
  background:-o-radial-gradient(left top,circle cover,#fff,#F7DF95,#FCCC2E);
  background:radial-gradient(left top,circle cover,#fff,#F7DF95,#FCCC2E);
}

/* Menus */
#menu {
  position:absolute;
  left:-11px;
  z-index:-1;
  width:400px;
  height:auto;
  padding:6px;
  background:-webkit-linear-gradient(65deg,rgba(0,0,0,0.6),rgba(0,0,0,0.9),rgba(0,0,0,0.5));
  background:-moz-linear-gradient(65deg,rgba(0,0,0,0.6),rgba(0,0,0,0.9),rgba(0,0,0,0.5));
  background:-ms-linear-gradient(65deg,rgba(0,0,0,0.6),rgba(0,0,0,0.9),rgba(0,0,0,0.5));
  background:-o-linear-gradient(65deg,rgba(0,0,0,0.6),rgba(0,0,0,0.9),rgba(0,0,0,0.5));
  background:linear-gradient(65deg,rgba(0,0,0,0.6),rgba(0,0,0,0.9),rgba(0,0,0,0.5));
  border:1px solid rgba(0,0,0,0.6);
  border-bottom-width:2px;
  -webkit-box-shadow:inset 0px 0px 1px rgba(255,255,255,2.5);
  moz-box-shadow:inset 0px 0px 1px rgba(255,255,255,2.5);
  box-shadow:inset 0px 0px 1px rgba(255,255,255,2.5);
  border-radius:7px 7px 0 0;
  visibility:hidden;
  opacity:0;
  bottom:31px;
  -webkit-transition:all 0.2s ease-out 0.2s;
  -moz-transition:all 0.2s ease-out 0.2s;
  -ms-transition:all 0.2s ease-out 0.2s;
  -o-transition:all 0.2s ease-out 0.2s;
  transition:all 0.2s ease-out 0.2s;
  cursor:default;
}

#win:hover {
  -webkit-box-shadow:0 1px 7px rgba(255,255,255,0.9),inset 0px 2px 1px #fff,inset 0px 2px 2px rgba(255,255,255,0.5),inset 0px 10px 10px rgba(255,255,255,0.3),inset 0px -1px 1px rgba(255,255,255,0.8);
  -moz-box-shadow:0 1px 7px rgba(255,255,255,0.9),inset 0px 2px 1px #fff,inset 0px 2px 2px rgba(255,255,255,0.5),inset 0px 10px 10px rgba(255,255,255,0.3),inset 0px -1px 1px rgba(255,255,255,0.8);
  box-shadow:0 1px 7px rgba(255,255,255,0.9),inset 0px 2px 1px #fff,inset 0px 2px 2px rgba(255,255,255,0.5),inset 0px 10px 10px rgba(255,255,255,0.3),inset 0px -1px 1px rgba(255,255,255,0.8);
}

#win:hover #menu {
  visibility:visible;
  opacity:1;
}

#menu .left-menu {
  float:left;
  display:inline;
  background:#fff;
  width:250px;
  height:407px;
  border:1px solid rgba(0,0,0,0.6);
  -webkit-box-shadow:0px 0px 1px rgba(255,255,255,0.5);
  -moz-box-shadow:0px 0px 1px rgba(255,255,255,0.5);
  box-shadow:0px 0px 1px rgba(255,255,255,0.5);
  -webkit-border-radius:5px;
  -moz-border-radius:5px;
  border-radius:5px;
  position:relative;
}

/* Search Form */
#menu .left-menu form#search {
  width:250px;
  background:#E4F4FC;
  border-top:2px solid #BEE6FD;
  padding:10px 0;
  position:absolute;
  bottom:0px;
  left:0px;
  -webkit-border-radius:0 0 5px 5px;
  -moz-border-radius:0 0 5px 5px;
  border-radius:0 0 5px 5px;
}

#menu .left-menu form#search input {
  background:#fff;
  border:1px solid #aaa;
  padding:3px 5px;
  margin:0 14px;
  font:italic 12px Calibri,Arial,Sans-Serif;
  color:#999;
  width:202px;
  position:relative;
}

/* Loupe */
#menu .left-menu form#search:after {
  content:"";
  width:5px;
  height:5px;
  border:1px solid #666;
  -webkit-border-radius:10px;
  -moz-border-radius:10px;
  border-radius:10px;
  position:absolute;
  left:100%;
  margin-left:-37px;
  top:16px;
}

#menu .left-menu form#search:before {
  content:"";
  width:3px;
  height:0px;
  border:1px solid #666;
  position:absolute;
  z-index:3;
  left:100%;
  margin-left:-41px;
  top:23px;
  -webkit-transform:rotate(-41deg);
  -moz-transform:rotate(-41deg);
  -ms-transform:rotate(-41deg);
  -o-transform:rotate(-41deg);
  transform:rotate(-41deg);
}

#menu .left-menu ul {
  padding:2px;
  margin:0px;
}

#menu .left-menu li {
  margin:0px;
  padding:0px;
  list-style:none;
  width:246px;
  text-align:left;
}

#menu .left-menu li a {
  color:#222;
  text-decoration:none;
  line-height:27px;
  margin-bottom:1px;
  padding:0px 12px;
  border:1px solid transparent;
  display:block;
  position:relative;
}

/* Making Arrow with CSS Pseudo Element */
#menu .left-menu li a.arrow:after {
  content:"";
  width:0px;
  height:0px;
  position:absolute;
  left:100%;
  top:9px;
  margin-left:-16px;
  border-width:5px;
  border-style:solid;
  border-color:transparent transparent transparent #222;
}

/* Sliding Menu To Show the Recent Documents */
#menu .left-menu .recent {
  width:142px;
  padding:3px;
  background:#F4F7FB;
  -webkit-box-shadow:inset 1px 0px 1px rgba(0,0,0,0.2);
  -moz-box-shadow:inset 1px 0px 1px rgba(0,0,0,0.2);
  box-shadow:inset 1px 0px 1px rgba(0,0,0,0.2);
  height:402px;
  position:absolute;
  z-index:1000;
  top:0px;
  left:245px;
  visibility:hidden;
  opacity:0;
  -webkit-border-radius:0 3px 3px 0;
  -moz-border-radius:0 3px 3px 0;
  border-radius:0 3px 3px 0;
  -webkit-transition:all 0.2s ease-out 0.2s;
  -moz-transition:all 0.2s ease-out 0.2s;
  -ms-transition:all 0.2s ease-out 0.2s;
  -o-transition:all 0.2s ease-out 0.2s;
  transition:all 0.2s ease-out 0.2s;
}

#menu .left-menu .recent hr {
  border:none !important;
  height:1px;
  overflow:visible;
  background:#e6e6e6;
  position:relative;
  margin:10px 2px;
}

#menu .left-menu .recent hr:before {
  content:"Recent";
  padding:0 5px 0 2px;
  font-size:12px;
  color:#045182;
  position:absolute;
  left:0px;
  top:-8px;
  margin-right:-50px;
  background:#F4F7FB;
}

#menu .left-menu li:hover .recent {
  left:249px;
  visibility:visible;
  opacity:1;
}

#menu .left-menu li li {
  width:138px !important;
}

#menu .left-menu li li a {
  padding:0 5px;
  line-height:16px !important;
  margin-bottom:2px;
}

#menu .left-menu li a:hover {
  background:-webkit-linear-gradient(top,#E4F4FC,#ACDCF7);
  background:-moz-linear-gradient(top,#E4F4FC,#ACDCF7);
  background:-ms-linear-gradient(top,#E4F4FC,#ACDCF7);
  background:-o-linear-gradient(top,#E4F4FC,#ACDCF7);
  background:linear-gradient(top,#E4F4FC,#ACDCF7);
  border-color:#0CC0E1;
  -webkit-border-radius:3px;
  -moz-border-radius:3px;
  border-radius:3px;
  -webkit-box-shadow:inset 0 0 3px #fff;
  -moz-box-shadow:inset 0 0 3px #fff;
  box-shadow:inset 0 0 3px #fff;
}

#menu .left-menu li.all-prog {
  position:absolute;
  bottom:48px;
  left:2px;
  border-top:1px solid #eee;
  padding-top:3px;
}

#menu .left-menu li.all-prog a {
  line-height:22px;
  padding:0 0 0 34px;
}

/* My Words */
#menu .left-menu li.all-prog .recent.all {
  width:220px;
  height:400px;
  padding:5px 15px;
  font:normal 16px 'Comic Sans MS',Times,Serif;
  text-shadow:0 0 1px rgba(0,0,0,0.6);
  position:absolute;
  top:0px;
  left:0px;
  margin-left:-2px;
  margin-top:-333px;
  -webkit-border-radius:3px;
  -moz-border-radius:3px;
  border-radius:3px;
  background:#fff;
  -webkit-box-shadow:inset 0 0 1px rgba(0,0,0,0.5);
  -moz-box-shadow:inset 0 0 1px rgba(0,0,0,0.5);
  box-shadow:inset 0 0 1px rgba(0,0,0,0.5);
}

#menu .left-menu li.all-prog a:before {
  content:"";
  position:absolute;
  right:100%;
  top:7px;
  margin-right:-15px;
  border-width:4px 5px;
  border-style:solid;
  border-color:transparent transparent transparent #111;
  display:block;
}

.fleft {
  float:left;
  margin:3px 10px 0px -10px;
  position:relative;
}

/* Creating Folders with CSS Gradients and Pseudo Elements */
.foldr {
  width:20px;
  height:15px;
  margin-top:6px;
  background:#F6EEAB;
  background:-webkit-linear-gradient(top,#ECDE8C,#F6EEAB);
  background:-moz-linear-gradient(top,#ECDE8C,#F6EEAB);
  background:-ms-linear-gradient(top,#ECDE8C,#F6EEAB);
  background:-o-linear-gradient(top,#ECDE8C,#F6EEAB);
  background:linear-gradient(top,#ECDE8C,#F6EEAB);
  border:1px solid #DCC56C;
  -webkit-box-shadow:0 1px 0px rgba(0,0,0,0.2);
  -moz-box-shadow:0 1px 0px rgba(0,0,0,0.2);
  box-shadow:0 1px 0px rgba(0,0,0,0.2);
  -webkit-border-radius:1px;
  -moz-border-radius:1px;
  border-radius:1px;
}

.foldr:before {
  content:"";
  width:8px;
  height:0px;
  border-top:3px solid #DCC56C;
  display:block;
  position:absolute;
  bottom:100%;
  left:0px;
}

/* Microsoft Word */
.mw {
  width:12px;
  height:10px;
  margin-left:-4px;
  border:2px solid #fff;
  background:-webkit-linear-gradient(top,#fff,#0E70A9,#fff,#0E70A9,#fff,#fff,#0E70A9,#fff,#0E70A9);
  background:-moz-linear-gradient(top,#fff,#0E70A9,#fff,#0E70A9,#fff,#fff,#0E70A9,#fff,#0E70A9);
  background:-ms-linear-gradient(top,#fff,#0E70A9,#fff,#0E70A9,#fff,#fff,#0E70A9,#fff,#0E70A9);
  background:-o-linear-gradient(top,#fff,#0E70A9,#fff,#0E70A9,#fff,#fff,#0E70A9,#fff,#0E70A9);
  background:linear-gradient(top,#fff,#0E70A9,#fff,#0E70A9,#fff,#fff,#0E70A9,#fff,#0E70A9);
  color:#023B62;
  -webkit-box-shadow:1px 1px 0px #bbb,-2px 4px 0px #0E70A9;
  -moz-box-shadow:1px 1px 0px #bbb,-2px 4px 0px #0E70A9;
  box-shadow:1px 1px 0px #bbb,-2px 4px 0px #0E70A9;
  position:relative;
}

.mw:before {
  content:"w";
  position:absolute;
  top:0px;
  left:0px;
  background:#fff;
  border:2px solid #fff;
  font-size:8px;
  line-height:6px;
}

/* Opera Web Browser */
.op {
  font:bold 22px Cambaria,Georgia,Times,Serif;
  color:#B73941;
  line-height:normal;
  margin-top:0px;
  margin-left:-8px;
  text-shadow:0 1px 1px #ddd;
  position:relative;
}

/* Create Opera Shadow */
.op:after {
  content:"";
  width:10px;
  height:1px;
  background:#666;
  -webkit-box-shadow:0 0 3px #000;
  -moz-box-shadow:0 0 3px #000;
  box-shadow:0 0 3px #000;
  display:block;
  position:absolute;
  top:86%;
  left:4px;
}

/* Ugly Internet Explorer.. */
.ie {
  font:bold 30px Georgia,Serif;
  color:#066298;
  line-height:normal;
  margin-top:-6px;
  margin-left:-8px;
  position:relative;
}

.ie:after {
  content:"";
  width:18px;
  height:2px;
  -webkit-border-radius:10px;
  -moz-border-radius:10px;
  border-radius:10px;
  -webkit-box-shadow:0px 3px 0px #FAD149,0px 1px 1px rgba(0,0,0,0.6);
  -moz-box-shadow:0px 3px 0px #FAD149,0px 1px 1px rgba(0,0,0,0.6);
  box-shadow:0px 3px 0px #FAD149,0px 1px 1px rgba(0,0,0,0.6);
  position:absolute;
  top:42%;
  left:-4px;
  -webkit-transform:rotate(-36deg);
  -moz-transform:rotate(-36deg);
  -ms-transform:rotate(-36deg);
  -o-transform:rotate(-36deg);
  transform:rotate(-36deg);
}

/* Notepad */
.np {
  width:16px;
  height:20px;
  background:-webkit-linear-gradient(-45deg,#fff 0%,#71CCE0 100%);
  background:-moz-linear-gradient(-45deg,#fff 0%,#71CCE0 100%);
  background:-ms-linear-gradient(-45deg,#fff 0%,#71CCE0 100%);
  background:-o-linear-gradient(-45deg,#fff 0%,#71CCE0 100%);
  background:linear-gradient(-45deg,#fff 0%,#71CCE0 100%);
  position:relative;
  -webkit-transform:skew(2deg,2deg) rotate(-2deg) translate(4px,0px);
  -moz-transform:skew(2deg,2deg) rotate(-2deg) translate(4px,0px);
  -ms-transform:skew(2deg,2deg) rotate(-2deg) translate(4px,0px);
  -o-transform:skew(2deg,2deg) rotate(-2deg) translate(4px,0px);
  transform:skew(2deg,2deg) rotate(-2deg) translate(4px,0px);
  margin-right:15px;
  -webkit-box-shadow:-2px 1px 0px #4A9BCD;
  -moz-box-shadow:-2px 1px 0px #4A9BCD;
  box-shadow:-2px 1px 0px #4A9BCD;
}

/* Adobe Fl (what is this?) */
.ai {
  width:6px;
  height:6px;
  line-height:normal;
  color:#fff;
  font:bold 8px Verdana,Arial,Sans-Serif;
  padding:6px;
  margin-left:-10px;
  margin-right:15px;
  left:0px;
  background:-webkit-linear-gradient(45deg,#EA6E56,#A71D07,#fff);
  background:-moz-linear-gradient(45deg,#EA6E56,#A71D07,#fff);
  background:-ms-linear-gradient(45deg,#EA6E56,#A71D07,#fff);
  background:-o-linear-gradient(45deg,#EA6E56,#A71D07,#fff);
  background:linear-gradient(45deg,#EA6E56,#A71D07,#fff);
  -webkit-box-shadow:0 0 1px rgba(0,0,0,0.8);
  -moz-box-shadow:0 0 1px rgba(0,0,0,0.8);
  box-shadow:0 0 1px rgba(0,0,0,0.8);
}

/* Right Menu */
#menu .right-menu {
  width:140px;
  float:right;
  display:inline;
}

#menu .right-menu ul,#menu .right-menu li {
  margin:0;
  padding:0;
  list-style:none;
  display:block;
}

#menu .right-menu ul {
  margin-top:60px;
  margin-bottom:15px;
}

#menu .right-menu li a {
  padding:8px 7px 7px;
  display:block;
  font:normal 12px Calibri,Arial,Sans-Serif;
  color:#fff;
  text-decoration:none;
  margin-bottom:3px;
  width:124px;
  border:1px solid transparent;
  display:block;
}

#menu .right-menu li a:hover {
  background:#222;
  background:-webkit-linear-gradient(bottom,rgba(255,255,255,0.4) 0%,rgba(0,0,0,0.2) 50%,rgba(255,255,255,0.1) 51%,rgba(255,255,255,0.4) 100%);
  background:-moz-linear-gradient(bottom,rgba(255,255,255,0.4) 0%,rgba(0,0,0,0.2) 50%,rgba(255,255,255,0.1) 51%,rgba(255,255,255,0.4) 100%);
  background:-ms-linear-gradient(bottom,rgba(255,255,255,0.4) 0%,rgba(0,0,0,0.2) 50%,rgba(255,255,255,0.1) 51%,rgba(255,255,255,0.4) 100%);
  background:-o-linear-gradient(bottom,rgba(255,255,255,0.4) 0%,rgba(0,0,0,0.2) 50%,rgba(255,255,255,0.1) 51%,rgba(255,255,255,0.4) 100%);
  background:linear-gradient(bottom,rgba(255,255,255,0.4) 0%,rgba(0,0,0,0.2) 50%,rgba(255,255,255,0.1) 51%,rgba(255,255,255,0.4) 100%);
  border-color:#111;
  -webkit-box-shadow:0 0 1px rgba(255,255,255,0.4),inset 0 0 1px rgba(255,255,255,0.8);
  -moz-box-shadow:0 0 1px rgba(255,255,255,0.4),inset 0 0 1px rgba(255,255,255,0.8);
  box-shadow:0 0 1px rgba(255,255,255,0.4),inset 0 0 1px rgba(255,255,255,0.8);
  -webkit-border-radius:4px;
  -moz-border-radius:4px;
  border-radius:4px;
}

/* Shut Down Button */
.shutdown {
  width:84px;
  font:bold 12px Calibri,Arial,Sans-Serif;
  text-shadow:0 1px 2px #000;
  color:#fff;
  background:#222;
  background:-webkit-linear-gradient(top,rgba(255,255,255,0.7) 0%,rgba(0,0,0,0.2) 50%,rgba(255,255,255,0.1) 51%);
  background:-moz-linear-gradient(top,rgba(255,255,255,0.7) 0%,rgba(0,0,0,0.2) 50%,rgba(255,255,255,0.1) 51%);
  background:-ms-linear-gradient(top,rgba(255,255,255,0.7) 0%,rgba(0,0,0,0.2) 50%,rgba(255,255,255,0.1) 51%);
  background:-o-linear-gradient(top,rgba(255,255,255,0.7) 0%,rgba(0,0,0,0.2) 50%,rgba(255,255,255,0.1) 51%);
  background:linear-gradient(top,rgba(255,255,255,0.7) 0%,rgba(0,0,0,0.2) 50%,rgba(255,255,255,0.1) 51%);
  border:1px solid #111;
  margin-bottom:12px;
  -webkit-box-shadow:0 0 1px rgba(255,255,255,0.4),inset 0 0 2px rgba(255,255,255,0.8);
  -moz-box-shadow:0 0 1px rgba(255,255,255,0.4),inset 0 0 2px rgba(255,255,255,0.8);
  box-shadow:0 0 1px rgba(255,255,255,0.4),inset 0 0 2px rgba(255,255,255,0.8);
  -webkit-border-radius:3px;
  -moz-border-radius:3px;
  border-radius:3px;
  cursor:pointer;
}

.shutdown:hover {
  -webkit-box-shadow:0 0 1px rgba(255,255,255,0.4),inset 0 0 5px rgba(255,255,255,1);
  -moz-box-shadow:0 0 1px rgba(255,255,255,0.4),inset 0 0 5px rgba(255,255,255,1);
  box-shadow:0 0 1px rgba(255,255,255,0.4),inset 0 0 5px rgba(255,255,255,1);
}

.shutdown div.lf {
  padding:4px 5px;
  position:relative;
}

.shutdown div.lf:after {
  content:"";
  padding:0px 6px;
  margin-left:7px;
  border-left:1px solid #111;
  -webkit-box-shadow:-1px 0px 0px rgba(255,255,255,0.3);
  -moz-box-shadow:-1px 0px 0px rgba(255,255,255,0.3);
  box-shadow:-1px 0px 0px rgba(255,255,255,0.3);
}

/* Create Arrow */
.shutdown div.lf:before {
  content:"";
  width:0px;
  height:0px;
  position:absolute;
  left:100%;
  top:7px;
  margin-left:-13px;
  border-width:4px 4px;
  border-style:solid;
  border-color:transparent transparent transparent #fff;
}

/* Admin */
#menu #kontener {
  position:absolute;
  top:0px;
  right:48px;
  margin-top:-20px;
  z-index:10;
  background:-webkit-linear-gradient(-47deg,rgba(255,255,255,0.5) 0%,#666 81%,#fff 100%);
  background:-moz-linear-gradient(-47deg,rgba(255,255,255,0.5) 0%,#666 81%,#fff 100%);
  background:-ms-linear-gradient(-47deg,rgba(255,255,255,0.5) 0%,#666 81%,#fff 100%);
  background:-o-linear-gradient(-47deg,rgba(255,255,255,0.5) 0%,#666 81%,#fff 100%);
  background:linear-gradient(-47deg,rgba(255,255,255,0.5) 0%,#666 81%,#fff 100%);
  padding:3px;
  border:1px solid #444;
  -webkit-box-shadow:inset 1px 0px 1px rgba(255,255,255,0.4),0 1px 1px rgba(0,0,0,0.5);
  -moz-box-shadow:inset 1px 0px 1px rgba(255,255,255,0.4),0 1px 1px rgba(0,0,0,0.5);
  box-shadow:inset 1px 0px 1px rgba(255,255,255,0.4),0 1px 1px rgba(0,0,0,0.5);
  border-radius:5px;
}

#menu #kontener .admin {
  width:50px;
  height:48px;
  border:1px solid rgba(0,0,0,0.5);
  -webkit-border-radius:2px;
  -moz-border-radius:2px;
  border-radius:2px;
  background:-webkit-radial-gradient(bottom,circle,#FACF0C,#4BB648);
  background:-moz-radial-gradient(bottom,circle,#FACF0C,#4BB648);
  background:-ms-radial-gradient(bottom,circle,#FACF0C,#4BB648);
  background:-o-radial-gradient(bottom,circle,#FACF0C,#4BB648);
  background:radial-gradient(bottom,circle,#FACF0C,#4BB648);
  -webkit-box-shadow:inset 0 -1px 7px #fff;
  -moz-box-shadow:inset 0 -1px 7px #fff;
  box-shadow:inset 0 -1px 7px #fff;
  position:relative;
}

/* Minimized Windows */
#list {
  float:left;
  display:inline;
}

.opened {
  width:38px;
  height:25px;
  text-align:center;
  background:#222;
  background:-webkit-linear-gradient(-80deg,rgba(255,255,255,0.5) 0%,rgba(255,255,255,0.1) 70%,rgba(0,0,0,0.2) 81%);
  background:-moz-linear-gradient(-80deg,rgba(255,255,255,0.5) 0%,rgba(255,255,255,0.1) 70%,rgba(0,0,0,0.2) 81%);
  background:-ms-linear-gradient(-80deg,rgba(255,255,255,0.5) 0%,rgba(255,255,255,0.1) 70%,rgba(0,0,0,0.2) 81%);
  background:-o-linear-gradient(-80deg,rgba(255,255,255,0.5) 0%,rgba(255,255,255,0.1) 70%,rgba(0,0,0,0.2) 81%);
  background:linear-gradient(-80deg,rgba(255,255,255,0.5) 0%,rgba(255,255,255,0.1) 70%,rgba(0,0,0,0.2) 81%);
  border:1px solid rgba(255,255,255,0.4);
  -webkit-box-shadow:0 0 1px rgba(0,0,0,0.9);
  -moz-box-shadow:0 0 1px rgba(0,0,0,0.9);
  box-shadow:0 0 1px rgba(0,0,0,0.9);
  -webkit-border-radius:3px;
  -moz-border-radius:3px;
  border-radius:3px;
  float:left;
  margin:2px 2px 0;
  cursor:pointer;
}

.opened.pilled {
  position:relative;
}

.opened .np {
  border:none;
  width:12px !important;
  height:12px;
  -webkit-transform:skew(2deg,2deg) rotate(-2deg) translate(0px,0px);
  -moz-transform:skew(2deg,2deg) rotate(-2deg) translate(0px,0px);
  -ms-transform:skew(2deg,2deg) rotate(-2deg) translate(0px,0px);
  -o-transform:skew(2deg,2deg) rotate(-2deg) translate(0px,0px);
  transform:skew(2deg,2deg) rotate(-2deg) translate(0px,0px);
}

.opened.pilled:before {
  content:"";
  width:38px;
  height:25px;
  background:#222;
  background:-webkit-linear-gradient(-80deg,rgba(255,255,255,0.5) 0%,rgba(255,255,255,0.1) 70%,rgba(0,0,0,0.2) 81%);
  background:-moz-linear-gradient(-80deg,rgba(255,255,255,0.5) 0%,rgba(255,255,255,0.1) 70%,rgba(0,0,0,0.2) 81%);
  background:-ms-linear-gradient(-80deg,rgba(255,255,255,0.5) 0%,rgba(255,255,255,0.1) 70%,rgba(0,0,0,0.2) 81%);
  background:-o-linear-gradient(-80deg,rgba(255,255,255,0.5) 0%,rgba(255,255,255,0.1) 70%,rgba(0,0,0,0.2) 81%);
  background:linear-gradient(-80deg,rgba(255,255,255,0.5) 0%,rgba(255,255,255,0.1) 70%,rgba(0,0,0,0.2) 81%);
  border:1px solid rgba(255,255,255,0.4);
  -webkit-box-shadow:0 0 1px rgba(0,0,0,0.9);
  -moz-box-shadow:0 0 1px rgba(0,0,0,0.9);
  box-shadow:0 0 1px rgba(0,0,0,0.9);
  -webkit-border-radius:3px;
  -moz-border-radius:3px;
  border-radius:3px;
  position:absolute;
  top:-1px;
  left:2px;
  -webkit-transition:all 0.2s ease-out;
  -moz-transition:all 0.2s ease-out;
  -ms-transition:all 0.2s ease-out;
  -o-transition:all 0.2s ease-out;
  transition:all 0.2s ease-out;
}

.opened.pilled:hover:before {
  left:100%;
  margin-left:4px;
}

.opened .foldr.small {
  margin:4px auto 0;
  width:20px;
  height:15px;
}

.opened .foldr.small:before {
  display:none;
}

/* Preview of Minimized Windows */
.opened .screensht {
  position:absolute;
  margin-bottom:40px;
  width:399px;
  padding:10px 0;
  z-index:-7;
  border:1px solid rgba(255,255,255,0.5);
  background:-webkit-linear-gradient(-80deg,rgba(0,0,0,0.5) 0%,rgba(0,0,0,0.7) 70%,rgba(0,0,0,0.8) 81%);
  background:-moz-linear-gradient(-80deg,rgba(0,0,0,0.5) 0%,rgba(0,0,0,0.7) 70%,rgba(0,0,0,0.8) 81%);
  background:-ms-linear-gradient(-80deg,rgba(0,0,0,0.5) 0%,rgba(0,0,0,0.7) 70%,rgba(0,0,0,0.8) 81%);
  background:-o-linear-gradient(-80deg,rgba(0,0,0,0.5) 0%,rgba(0,0,0,0.7) 70%,rgba(0,0,0,0.8) 81%);
  background:linear-gradient(-80deg,rgba(0,0,0,0.5) 0%,rgba(0,0,0,0.7) 70%,rgba(0,0,0,0.8) 81%);
  -webkit-box-shadow:inset 1px 1px 0px rgba(0,0,0,0.2),inset -1px -1px 0px rgba(0,0,0,0.2),inset 0 0 1px rgba(255,255,255,0.2),0 1px 3px #000,1px 5px 12px #000;
  -moz-box-shadow:inset 1px 1px 0px rgba(0,0,0,0.2),inset -1px -1px 0px rgba(0,0,0,0.2),inset 0 0 1px rgba(255,255,255,0.2),0 1px 3px #000,1px 5px 12px #000;
  box-shadow:inset 1px 1px 0px rgba(0,0,0,0.2),inset -1px -1px 0px rgba(0,0,0,0.2),inset 0 0 1px rgba(255,255,255,0.2),0 1px 3px #000,1px 5px 12px #000;
  -webkit-border-radius:5px;
  -moz-border-radius:5px;
  border-radius:5px;
  height:128px;
  overflow:hidden;
  opacity:0;
  bottom:-200px;
  -webkit-transition:all 0.5s ease-out 0.35s;
  -moz-transition:all 0.5s ease-out 0.35s;
  -ms-transition:all 0.5s ease-out 0.35s;
  -o-transition:all 0.5s ease-out 0.35s;
  transition:all 0.5s ease-out 0.35s;
  cursor:default;
}

/* Close Button */
.opened .screensht .close {
  position:absolute;
  top:7px;
  right:7px;
  color:#fff;
  line-height:12px;
  padding:0px 0px;
  text-align:center;
  width:12px;
  border:1px solid rgba(0,0,0,0.5);
  background:#AE3110;
  background:-webkit-linear-gradient(90deg,#EA6E56,#A71D07,#fff);
  background:-moz-linear-gradient(90deg,#EA6E56,#A71D07,#fff);
  background:-ms-linear-gradient(90deg,#EA6E56,#A71D07,#fff);
  background:-o-linear-gradient(90deg,#EA6E56,#A71D07,#fff);
  background:linear-gradient(90deg,#EA6E56,#A71D07,#fff);
  -webkit-box-shadow:inset 0 0 1px rgba(255,255,255,0.7);
  -moz-box-shadow:inset 0 0 1px rgba(255,255,255,0.7);
  box-shadow:inset 0 0 1px rgba(255,255,255,0.7);
  text-shadow:0 0 1px #000;
  font:bold Arial,Sans-Serif;
  opacity:0.2;
  -webkit-transition:all 0.2s ease-out;
  -moz-transition:all 0.2s ease-out;
  -ms-transition:all 0.2s ease-out;
  -o-transition:all 0.2s ease-out;
  transition:all 0.2s ease-out;
  cursor:pointer;
}

.opened:hover .screensht {
  opacity:1;
  bottom:0px;
}

.opened .screensht .col1:hover .close,.opened .screensht .col2:hover .close {
  visibility:visible;
  opacity:1;
}

.opened .screensht .col1,.opened .screensht .col2 {
  width:174px;
  height:116px;
  padding:5px;
  color:#fff;
  float:left;
  margin-left:9px;
  background:transparent;
  border:1px solid transparent;
  position:relative;
}

.opened .screensht .kotak {
  width:170px;
  height:90px;
  margin:24px auto 1px;
  border:1px solid #000;
  background:#fafafa;
  background:-webkit-linear-gradient(45deg,#fff,#ddd,#fff,#ddd);
  background:-moz-linear-gradient(45deg,#fff,#ddd,#fff,#ddd);
  background:-ms-linear-gradient(45deg,#fff,#ddd,#fff,#ddd);
  background:-o-linear-gradient(45deg,#fff,#ddd,#fff,#ddd);
  background:linear-gradient(45deg,#fff,#ddd,#fff,#ddd);
  -webkit-box-shadow:0 0 1px rgba(255,255,255,0.8);
  -moz-box-shadow:0 0 1px rgba(255,255,255,0.8);
  box-shadow:0 0 1px rgba(255,255,255,0.8);
}

.opened.tunggal .screensht {
  width:204px;
  padding:10px 0;
}

.opened.tunggal .screensht .col1 {
  width:174px;
  padding:5px;
  margin-left:9px;
  float:none !important;
  display:block;
  position:relative;
}

.opened .screensht .col1:hover,.opened .screensht .col2:hover {
  background:rgba(255,255,255,0.2);
  border:1px solid rgba(255,255,255,0.2);
}

.opened.tunggal .screensht .col1.fold:before {
  content:"My Documents";
  position:absolute;
  display:block;
  top:7px;
  left:7px;
}

.opened.tunggal .screensht .col1.ntpad:before {
  content:"I have a Data Managment Solution! ";
  position:absolute;
  display:block;
  top:7px;
  left:7px;
}

.opened .screensht .blank:before {
  content:"Not Available";
  position:absolute;
  display:block;
  top:7px;
  left:7px;
}

.opened:hover {
  -webkit-box-shadow:inset 0px 1px 1px #fff;
  -moz-box-shadow:inset 0px 1px 1px #fff;
  box-shadow:inset 0px 1px 1px #fff;
}

/* Show Desktop (see the right bottom of Windows) */
.opened.hide {
  float:right;
  width:12px;
}

#fright {
  float:right;
  width:132px;
  padding-top:8px;
  color:#fff;
}

#fright div {
  float:left;
  display:inline;
  cursor:pointer;
}

/* Connection Status */
.connection {
  width:10px;
  height:7px;
  border-width:1px;
  border-style:solid;
  border-color:#fff;
  position:relative;
  margin-top:2px;
  margin-left:5px;
}

.connection:before {
  content:"";
  width:0px;
  height:0px;
  border:2px solid #fff;
  position:absolute;
  top:100%;
  left:3px;
  margin-top:0px;
}

.connection:after {
  content:"";
  width:6px;
  height:0px;
  border-bottom:1px solid #fff;
  position:absolute;
  top:100%;
  left:2px;
  margin-top:3px;
}

/* Up Arrows to Show Hidden Icons in Windows */
.plus {
  border:1px solid transparent;
  margin-bottom:12px;
  width:18px;
  height:15px;
  margin-right:5px;
  position:relative;
}

.plus .screensht {
  position:absolute;
  margin-bottom:30px;
  width:133px;
  padding:14px 0;
  z-index:-7;
  border:1px solid rgba(255,255,255,0.4);
  background:-webkit-linear-gradient(-80deg,rgba(0,0,0,0.5) 0%,rgba(0,0,0,0.7) 70%,rgba(0,0,0,0.8) 81%);
  background:-moz-linear-gradient(-80deg,rgba(0,0,0,0.5) 0%,rgba(0,0,0,0.7) 70%,rgba(0,0,0,0.8) 81%);
  background:-ms-linear-gradient(-80deg,rgba(0,0,0,0.5) 0%,rgba(0,0,0,0.7) 70%,rgba(0,0,0,0.8) 81%);
  background:-o-linear-gradient(-80deg,rgba(0,0,0,0.5) 0%,rgba(0,0,0,0.7) 70%,rgba(0,0,0,0.8) 81%);
  background:linear-gradient(-80deg,rgba(0,0,0,0.5) 0%,rgba(0,0,0,0.7) 70%,rgba(0,0,0,0.8) 81%);
  -webkit-box-shadow:inset 0 0 1px rgba(255,255,255,0.5),0 1px 3px #000,1px 5px 12px #000;
  -moz-box-shadow:inset 0 0 1px rgba(255,255,255,0.5),0 1px 3px #000,1px 5px 12px #000;
  box-shadow:inset 0 0 1px rgba(255,255,255,0.5),0 1px 3px #000,1px 5px 12px #000;
  -webkit-border-radius:5px;
  -moz-border-radius:5px;
  border-radius:5px;
  height:100px;
  overflow:hidden;
  opacity:0;
  bottom:-100px;
  left:-25px;
  -webkit-transition:all 0.5s ease-out 0.2s;
  -moz-transition:all 0.5s ease-out 0.2s;
  -ms-transition:all 0.5s ease-out 0.2s;
  -o-transition:all 0.5s ease-out 0.2s;
  transition:all 0.5s ease-out 0.2s;
}

.plus .screensht .grup {
  border:1px solid #rgba(0,0,0,0.6);
  width:95px;
  padding:5px;
  height:90px;
  background:#fff;
  margin-left:14px;
  box-shadow:0 0 1px rgba(255,255,255,0.4);
  text-align:center;
}

.plus:hover {
  background:#222;
  background:-webkit-linear-gradient(top,rgba(255,255,255,0.7) 0%,rgba(0,0,0,0.2) 50%,rgba(255,255,255,0.1) 51%);
  background:-moz-linear-gradient(top,rgba(255,255,255,0.7) 0%,rgba(0,0,0,0.2) 50%,rgba(255,255,255,0.1) 51%);
  background:-ms-linear-gradient(top,rgba(255,255,255,0.7) 0%,rgba(0,0,0,0.2) 50%,rgba(255,255,255,0.1) 51%);
  background:-o-linear-gradient(top,rgba(255,255,255,0.7) 0%,rgba(0,0,0,0.2) 50%,rgba(255,255,255,0.1) 51%);
  background:linear-gradient(top,rgba(255,255,255,0.7) 0%,rgba(0,0,0,0.2) 50%,rgba(255,255,255,0.1) 51%);
  -webkit-box-shadow:0 0 1px rgba(255,255,255,0.4),inset 0 0 2px rgba(255,255,255,0.8);
  -moz-box-shadow:0 0 1px rgba(255,255,255,0.4),inset 0 0 2px rgba(255,255,255,0.8);
  box-shadow:0 0 1px rgba(255,255,255,0.4),inset 0 0 2px rgba(255,255,255,0.8);
  border-color:#111;
  -webkit-border-radius:2px;
  -moz-border-radius:2px;
  border-radius:2px;
}

.plus:hover .screensht {
  visibility:visible;
  bottom:0px;
  opacity:1;
  color:#000;
}

.plus:after {
  content:"";
  width:0px;
  height:0px;
  border-width:5px 4px;
  border-style:solid;
  border-color:transparent transparent #fff transparent;
  position:absolute;
  left:100%;
  margin-left:-13px;
}

/* Speaker */
.speker {
  width:0px;
  height:6px;
  margin-top:2px;
  margin-left:10px;
  border-width:3px 4px;
  border-style:solid;
  border-color:transparent #fff transparent transparent;
  position:relative;
}

.speker:before {
  content:"";
  width:0px;
  height:4px;
  border-left:2px solid #fff;
  position:absolute;
  right:100%;
  top:1px;
}

/* Ugly Clock */
.jam {
  margin-left:10px;
}

.clear {
  clear:both;
}


/* Let's Dancing! */
@-webkit-keyframes slow{
from{-webkit-transform:translate(0px, -200px);opacity:0;}
to{-webkit-transform:translate(0px, 0px);opacity:1;}
}
@-moz-keyframes slow{
from{-moz-transform:translate(0px, -200px);opacity:0;}
to{-moz-transform:translate(0px, 0px);opacity:1;}
}
@-ms-keyframes slow{
from{-ms-transform:translate(0px, -200px);opacity:0;}
to{-ms-transform:translate(0px, 0px);opacity:1;}
}
@keyframes slow{
from{transform:translate(0px, -200px);opacity:0;}
to{transform:translate(0px, 0px);opacity:1;}
}

</style>
</head>
<body>

<div id="author">
	<h1>Welcome to my Desktop:</h1>
	<div class="deskripsi">
	<b>Check out the handy dany Audio player<br>
	Author:JCSC.biz <br>
        
       <center>		<!-- Start Top Header -->
		<div id="top-header" class="hidden-on-collapse">
			<div id="top-header-toggle" class="small-player-toggle-contract"></div>

			<div class="now-playing-title" amplitude-song-info="name"></div>
			<div class="album-information"><span amplitude-song-info="artist"></span> - <span amplitude-song-info="album"></span></div>
		</div>
		<!-- End Top Header -->

		<!-- Start Large Album Art -->
		<div id="top-large-album" class="hidden-on-collapse">
			<img id="large-album-art" amplitude-song-info="cover"/>
		</div>
		<!-- End Large Album Art -->

		<!-- Begin Small Player -->
		<div id="small-player">
			<!-- Begin Small Player Left -->
			<div id="small-player-left" class="hidden-on-expanded">
				<div id="small-player-toggle" class="small-player-toggle-expand"></div>
			</div>
			<!-- End Small Player Left -->

			<!-- Begin Small Player Album Art -->
			<img id="small-player-album-art" class="hidden-on-expanded" amplitude-song-info="cover"/>
			<!-- End Small Player Album Art -->

			<!-- Begin Small Player Middle -->
			<div id="small-player-middle" class="hidden-on-expanded">	
				<div id="small-player-middle-top">
					<!-- Begin Controls Container -->
					<div id="small-player-middle-controls">
						<div class="amplitude-play-pause amplitude-paused" amplitude-song-index="0"></div>
					</div>
					<!-- End Controls Container -->

					<!-- Begin Meta Container -->
					<div id="small-player-middle-meta">
						<div class="now-playing-title" amplitude-song-info="name"></div>
						<div class="album-information"><span amplitude-song-info="artist"></span> - <span amplitude-song-info="album"></span></div>
					</div>
					<!-- End Meta Container -->
				</div>
				
				<div id="small-player-middle-bottom">
					<div class="amplitude-song-time-visualization" amplitude-song-index="0" id="song-time-visualization"></div>
				</div>
			</div>
			<!-- End Small Player Middle -->

			<!-- Begin Small Player Right -->
			<div id="small-player-right" class="hidden-on-expanded">
				<span class="current-time">
					<span class="amplitude-current-minutes" amplitude-song-index="0">0</span>:<span class="amplitude-current-seconds" amplitude-song-index="0">00</span>
				</span>
			</div>
			<!-- End Small Player Right -->

			<!-- Begin Small Player Full Bottom -->
			<div id="small-player-full-bottom" class="hidden-on-collapse">
				<div class="amplitude-play-pause amplitude-paused" amplitude-song-index="0"></div>
				<div id="small-player-full-bottom-info">
					<span class="current-time">
						<span class="amplitude-current-minutes" amplitude-song-index="0">0</span>:<span class="amplitude-current-seconds" amplitude-song-index="0">00</span>
					</span>
					
					<div class="amplitude-song-time-visualization" amplitude-song-index="0" id="song-time-visualization-large"></div>
					
					<span class="time-duration">
						<span class="amplitude-duration-minutes" amplitude-song-index="0">0</span>:<span class="amplitude-duration-seconds" amplitude-song-index="0">00</span>
					</span>
				</div>
			</div>
			<!-- End Small Player Full Bottom -->
		</div>
		<!-- End Small Player --></center>
	</div><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />

    
</div>


<div id="startbar">
	<div id="win">

		<div id="menu">
			<div class="left-menu">
				<ul>
					<li><a href="#" class="arrow"><div class="fleft foldr"></div>My Documents</a>
						<div class="recent">
							<hr>
							<ul>
								<li><a href="#">Recent 1</a></li>
								<li><a href="#">Recent 2</a></li>
								<li><a href="#">Recent 3</a></li>
								<li><a href="#">Film-Bokep.3gp</a></li>
								<li><a href="#">Film-Nyokep.3gp</a></li>
								<li><a href="#">Film-Enyak.3gp</a></li>
								<li><a href="#">Film-Babeh.3gp</a></li>
							</ul>
						</div>
					</li>
					<li><a href="#"><div class="fleft foldr"></div>Your Documents</a></li>
					<li><a href="#"><div class="fleft foldr"></div>Our Documents</a></li>
					<li><a href="#" class="arrow"><div class="fleft mw"></div>Microsoft Office Word 2007</a>
						<div class="recent">
						<hr>
							<ul>
								<li><a href="#">Andai.docx</a></li>
								<li><a href="#">Saja.docx</a></li>
								<li><a href="#">Engkau.docx</a></li>
								<li><a href="#">Tahu.docx</a></li>
								<li><a href="#">Betapa.docx</a></li>
								<li><a href="#">Aku.docx</a></li>
								<li><a href="#">Kebelet.docx</a></li>
								<li><a href="#">Pipis.docx</a></li>
							</ul>
						</div>
					</li>
					<li><a href="#"><div class="fleft op">O</div>Opera Web Browser</a></li>
					<li><a href="#"><div class="fleft ie">e</div>Internet Explorer</a></li>
					<li><a href="#"><div class="fleft np"></div>Notepad</a></li>
					<li><a href="#"><div class="fleft ai">Fl</div>Adobe Fl</a></li>
					<li class="all-prog"><a href="#">All Programs</a>
						<div class="recent all">Hi, my name is Luke, <br />I helped you build this I hope it helps your desgin jucies flow.  There is always more work to be done please let me know what else, so we can get to the next steps.

						<div style="margin-top:15px;font-weight:bold;"><i>15 January 2016</i></div>
						</div>
					</li>
				</ul>
				<form id="search" action="" name="prikitiw"><input placeholder="Search programs and files" type="text"></form>
			</div> <!-- leftmenu -->

			<div class="right-menu">
				<ul>
					<li><a href="#">JCSC.biz</a></li>

					<li><a href="#">Documents</a></li>
					<li><a href="#">Pictures</a></li>
					<li><a href="#">Music</a></li>
					<li style="border-top:1px solid rgba(255,255,255,0.1);padding-top:2px;"><a href="#">Business Ideas</a></li>
					<li style="border-bottom:1px solid rgba(255,255,255,0.1);padding-top:5px;margin-bottom:2px;"><a href="#">Servers</a></li>
					<li><a href="#">Control Panel</a></li>
					<li><a href="#">Email &Amp; Databases</a></li>
                    <li><a href="#">EroticHabit.com</a></li>
                    <li><a href="#">EroticHardware.org</a></li>
				</ul>
				<div class="shutdown">
					<div class="lf">Shut down</div>
					<div class="clear"></div>
				</div>

				<div id="kontener">
					<div class="admin"></div>
				</div>

			</div> <!-- rightmenu -->
			<div class="clear"></div>
		</div> <!-- menu -->

		<div id="cont-win" title="Start">
			<div class="w1"></div><div class="w2"></div>
			<div class="clear"></div>
			<div class="w3"></div><div class="w4"></div>
			<div class="clear"></div>
		</div>

	</div><!-- win -->

	<div id="list">

	<div class="opened tunggal"><div class="foldr small"></div>
	<div class="screensht">
		<div class="col1 fold">
		<div class="close">×</div><div class="kotak"></div>
		</div>
	</div>
	</div>

	<div class="opened tunggal"><div class="foldr np small"></div>
	<div class="screensht">
		<div class="col1 ntpad">
		<div class="close">×</div><div class="kotak"></div>
		</div>
	</div>
	</div>

	<div class="opened pilled">
	<div class="screensht">
		<div class="col1 blank">
			<div class="close">×</div><div class="kotak"></div>
		</div>
		<div class="col2 blank">
			<div class="close">×</div><div class="kotak"></div>
		</div>
		<div class="clear"></div>
	</div>

	</div> <!-- list -->
	<div class="clear"></div>
	</div> <!-- opened pilled -->

	<div class="opened hide"></div>
	<div id="fright">
		<div class="plus">
			<div class="screensht">
				<div class="grup">
					<b>© 15-Jan-2016 <i><a href="http://jcsc.biz">jcsc.biz</a></i></b><br>
					<a href="http://jcsc.biz" target="_blank">We are here to help you build software!</a>
				</div>
			</div>
		</div> <!-- plus -->

		<div class="connection" title="Please purchase some networking hardware from me!"></div>
		<div class="speker" title="Speaker Boxx and the Love Below..."></div>
		<div class="jam">11:18 WIB</div>
		<div class="clear"></div>
	</div>

</div> <!-- startbar -->

</body>

	<script type="text/javascript">
		Amplitude.init({
			"songs": [
				{
					"name": "Rooms",
					"artist": "Mia and Jonah",
					"album": "Rooms For Adelaide",
					"url": "http://a656.phobos.apple.com/us/r30/Music/2d/d1/52/mzm.oymgnziu.aac.p.m4a",
					"live": false,
					"cover_art_url": "images/roomsforadelaide.jpg"
				}
			],
			"default_album_art": "images/no-cover-large.png"
		});

		var expanded = false;
		/*
			jQuery Visual Helpers
		*/
		$('#small-player').hover(function(){
			$('#small-player-middle-controls').show();
			$('#small-player-middle-meta').hide();
		}, function(){
			$('#small-player-middle-controls').hide();
			$('#small-player-middle-meta').show();

		});

		$('#top-large-album').hover(function(){
			$('#top-header').show();
			$('#small-player').show();

			$('#large-album-art').css('border-radius', '5px');
		}, function(){
			if( !$('#top-header').is(':hover') && !$('#small-player').is(':hover') ){
				$('#top-header').fadeOut(1000);
				$('#small-player').fadeOut(1000);

				$('#large-album-art').css('border-radius', '0px');
			}
		});

		$('#top-header').hover(function(){
			$('#top-header').show();
			$('#small-player').show();
		}, function(){

		});

		/*
			Toggles Album Art
		*/
		$('#small-player-toggle').click(function(){
			$('.hidden-on-collapse').show();
			$('.hidden-on-expanded').hide();
			/*
				Is expanded
			*/
			expanded = true;

			$('#small-player').css('border-top-left-radius', '0px');
			$('#small-player').css('border-top-right-radius', '0px');
		});

		$('#top-header-toggle').click(function(){
			$('.hidden-on-collapse').hide();
			$('.hidden-on-expanded').show();
			/*
				Is collapsed
			*/
			expanded = false;

			$('#small-player').css('border-top-left-radius', '5px');
			$('#small-player').css('border-top-right-radius', '5px');
		});
	</script>
</html>