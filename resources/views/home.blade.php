@extends('layouts.app')
<style>
body{
margin:0px;
font-family: 'Open Sans', sans-serif;
}

#header{
background:#333;
width:100%;
display:block;
padding: 0px 0px 0px 0px;
margin: 0px 0px 0px 0px;
height:50px;
border-bottom: #252525 2px solid;
}

h1, p, a, h4{
text-align:left;
text-decoration: none !important;
font-weight:300;
}

#nav {padding-top:15px; text-align:center; margin: 0px auto; font-size:14px;  font-weight:500; }
#nav ul {margin: 0; padding: 0; list-style-type: none; list-style-image: none;}
#nav li {margin-right: 0px; display: inline;}
#nav ul li a {text-decoration:none;  margin: 0px; padding: 10px 15px 0px 15px; color:#808080;}
#nav ul li a:hover {color: #cccccc; text-decoration:none;}

#nav li.current-menu-item a {color: #ffffff; text-decoration:none;}
#nav li.current_page_item  {color: #ffffff;  text-decoration:none;}

#top{
background:#B405DA;
width:100%;
min-height:87%;
max-height:87%;
height:373px;
padding:90px 20px 10px 20px;
margin: 0 auto 0 auto; 
text-align:center;
border-bottom:#4C055C 10px solid;
color:white;
}

.bluebtn{
  background:#67097C;
  width:100px;
  text-align:center;
  color:white;
  padding:10px;
  font-size:0.8em;
  border-radius:6px;
  margin-top:30px;
  border-bottom: #4C055C 3px solid;
  border-right: #4C055C 1px solid;
  border-left: #4C055C 1px solid;
}

.bluebtn:hover{
  background:#67097C;
  width:100px;
  text-align:center;
  color:white;
  padding:10px;
  border-radius:6px;
  margin-top:33px;
  border-bottom: #4C055C 3px solid;
  border-right: #4C055C 1px solid;
  border-left: #4C055C 1px solid;
}

#about{
background:#2ecc71;
min-height:87%;
max-height:87%;
height:373px;
padding:90px 20px 60px 20px;
margin: 0 auto 0 auto; 
text-align:center;
border-bottom:#147A2E  10px solid;
color:white; 
}

.greenbtn{
  background:#147A2E;
  width:100px;
  text-align:center;
  color:white;
  padding:10px;
  border-radius:6px;
  margin-top:30px;
  border-bottom: #074A18 3px solid;
  font-size:0.8em;
  border-right: #074A18 1px solid;
  border-left: #074A18 1px solid;
}

.greenbtn:hover{
  background:#147A2E;
  width:100px;
  text-align:center;
  color:white;
  padding:10px;
  border-radius:6px;
  margin-top:33px;
  border-bottom: #074A18 3px solid;
  font-size:0.8em;
  border-right: #074A18 1px solid;
  border-left: #074A18 1px solid;
}

#services{
background:#34495e;
min-height:100%;
max-height:100%;
height:373px;
padding:90px 20px 60px 20px;
margin: 0 auto 0 auto; 
text-align:center;
border-bottom:#2c3e50 10px solid;
color:white; 
}

.darkbluebtn{
  background:#2c3e50;
  width:100px;
  text-align:center;
  color:white;
  padding:10px;
  border-radius:6px;
  margin-top:30px;
  border-bottom: #212e3b 3px solid;
  font-size:0.8em;
  border-right: #212e3b 1px solid;
  border-left: #212e3b 1px solid;
}

.darkbluebtn:hover{
  background:#2c3e50;
  width:100px;
  text-align:center;
  color:white;
  padding:10px;
  border-radius:6px;
  margin-top:33px;
  border-bottom: #2c3e50 3px solid;
  font-size:0.8em;
  border-right: #212e3b 1px solid;
  border-left: #212e3b 1px solid;
}

#contact{
background:#1abc9c;
min-height:100%;
max-height:100%;
height:373px;
padding:90px 20px 10px 20px;
margin: 0 auto 0 auto; 
text-align:center;
border-bottom:#16a085 10px solid;
color:white; 
}

.lightgreenbtn{
  background:#16a085;
  width:100px;
  text-align:center;
  color:white;
  padding:10px;
  border-radius:6px;
  margin-top:30px;
  border-bottom: #13856f 3px solid;
  font-size:0.8em;
  border-right: #13856f 1px solid;
  border-left: #13856f 1px solid;
}

.lightgreenbtn:hover{
  background:#16a085;
  width:100px;
  text-align:center;
  color:white;
  padding:10px;
  border-radius:6px;
  margin-top:33px;
  border-bottom: #16a085 3px solid;
  font-size:0.8em;
  border-right: #13856f 1px solid;
  border-left: #13856f 1px solid;
}

.wrap{
width:70%;
margin: 0 auto 0 auto;
}
</style>

@section('content')
<div id="top">
<div class="wrap">
<h1>¡Bienvenido!</h1>
<p>La adopción de animales es el proceso de tomar la responsabilidad de 
    un animal que un dueño previamente ha abandonado o dejado en un refugio de 
    animales. De acuerdo con datos de la Procuraduría Ambiental y del Ordenamiento Territorial, cerca de 500 mil perros y 
    gatos son abandonados al año en el país.</p>
<a href="#about"><div class="bluebtn">
Adoptar
</div></a> <!-- End BlueBtn -->
</div> <!-- End Wrap -->
</div> <!-- End Top -->

<!-- END TOP -->

<!-- START ABOUT -->

<div id="about">
<div class="wrap">
<h1>Obtener más información</h1>
<p>Para poder adoptar una mascota deberás descargar los siguientes archivos</p>
<a><div class="greenbtn">
Descargar
</div> </a> <!-- End GreenBtn -->
</div> <!-- End Wrap -->
</div> <!-- End About -->
@endsection
