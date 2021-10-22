# pim4
hotel pim unip

main.css



@import url(https://fonts.googleapis.com/css?family=Roboto);

p{
    color: black;
}
.format{ 
    margin: 0;
    font-family: -apple-system,sans-serif;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #191970;
    background-color: #dde2f3;
    text-align: center;
}
a{  
    color: #535368;
    text-decoration: none;
    
}
.icon{
    text-align: justify;
}
button{
    color:#FFFAFA;
    background-color: #6d9bc0;
    border-color: #191970;
    font-size: 15px; 
    text-align: center;
    border-radius: 1px solid;
    border-radius: 15px;
}

.limite{
    align-items: center;
    border-radius: 15px;
    margin: 400px;
    margin-top: 50px;
    margin-bottom: 500px;
    border: solid 1px #191970;
}

.meubot{
    box-shadow: 3px 3px 8px #4777a5, -3px -3px 8px #ffffff;
	background-color:#4682B4;
	border-radius:20px;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:17px;
	font-weight:700;
	padding:10px 10px;
	text-shadow:0px 1px 0px #3d768a;
    width: 35%;
    height: 35px;
    font-family: 'Lato', sans-serif;
    outline: none;
    border: none;
    cursor: pointer;
    color: #ffffff;
    text-align: center;
    transition: 0.5s;
}
.meubot:hover {
	background:linear-gradient(to bottom, #465ab4 5%, #5971b3 100%);
	background-color:#42558a;
}
.meubot:active {
	position:relative;
	top:1px;
}
.barra{
    list-style-type: none;
    margin: 0;
    padding: 0;
    text-align: right;
}

.contact-wrap{
    padding: 15px;
}
.contact-form{
    margin-top: 30px;
}

.contact-form .input-block{
    background-color: rgba(250, 250, 250, 0.8);
    border: solid 1px #8b8b9b;
    width: 100%;
    height: 60px;
    padding: 25px;
    position: relative;
    margin-bottom: 20px;
    -moz-transition: all 0.3s ease-out;
    -webkit-transition: all 0.3s ease-out;
    transition: all 0.3s ease-out;
    font-size: 20px;
}
.contact-form .input-block.focus{
    background-color: #FFFAFA;
    border: solid 1px #191970;
}
.contact-form .input-block.textarea{
    height: auto;

}
.contact-form .input-block.textarea .form-control{
    height: auto;
    resize: none;
}
.contact-form .input-block label{
    position: absolute;
    left: 25px;
    top: 25px;
    display: block;
    margin: 0;
    font-weight: 300;
    z-index: 1;
    color: #191970;
    font-size: 25px;
    line-height: 10px;
}
.contact-form .input-block .form-control{
    background-color: transparent;
    padding: 0;
    border: none;
    border-radius: 0;
    box-shadow: none;
    -moz-box-shadow: none;
    height: auto;
    position: relative;
    z-index: 2;
    font-size: 20px;
    color:#191970;
}
.contact-form .input-block .form-control:focus label{
    top: 0;
}

.form-control .square-button{
    background-color:#74768d;
    color: #6161aa;
    font-size: 26px;
    text-transform: uppercase;
    font-weight: 700;
    text-align: center;
    -moz-transition: all 0.3s ease;
    -webkit-transition: all 0.3s ease;
    transition: all 0.3s ease;
    padding: 0 60px;
    height: 60px;
    border: none;
    width: 100%;
}

.contact-form .square-button:hover, .contact-form .square-button:focus{
    background-color:#656581;
}

@media(min-width:768px){
    .contact-wrap{
        width: 60%;
        margin: auto;
    }
}

option{
    font-size: 18px;
    color:#191970;
}

select{
    font-size: 22px;
    text-align: justify;
    top: 0;
    bottom: 0;
    color:#191970;
}
label{
    font-size: 18px;
}
.square-button{
    width: 200px;
    font-size: 24px;
    border: 1px solid #3c3c80;
    color:#191970;
    font-weight: 700;
    height: 60px;
    text-decoration: none;
}

* {
  box-sizing: border-box;
  font-family: 'Roboto', sans-serif;
}

.column {
  float: left;
  width: 30.33%;
  padding: 10px;
  height: 600px;
  margin-top: 45px


}

.row:after {
  content: "";
  display: table;
  clear: both;
}
#patodavida{
  margin-left: 45px;
  background-color:#2c3e50;
  color: #fff;

}
h3{
  color: yellow;
}
footer{
  margin-left: 85px;
  margin-top: 25px;

}
.titi{
  background-color:#ccc;
}
#natedu{
  background-image: url("./img/hotel.jpeg");
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
#menu ul li {
    display: inline;
    margin-left: 45px;
}
#menu ul {
    max-width: 800px;
    list-style: none;
    padding: 0;
}
#menu ul li a {
    color: #000;
    padding: 20px;
    display: inline-block;
    text-decoration: none;
    transition: background .4s;
}
#menu ul li a:hover {
    background-color: rgb(24, 139, 233);
}
.menu1 {
  list-style: none;
  margin: 0;
  padding: 5px;
  width: 100%;
  height: 120px;
  position: relative;
  background-color: #2c3e50;
  z-index: 7;
}
.edu{
    align-items: center;
    text-align: center;
    float: left;
    height: 100%;
    margin: 0;
    padding: 25px;
}
.edu .slider {
  width: 25%;
  height: 100%;
  position: absolute;
  left: 0;
  top: 0;
  z-index: 8;
  transition: left .4s, background-color .4s;
}
.nat{
  justify-content: center;
  align-items:center;
  color: #fff;
  text-decoration: none;
  position: relative;
  font-size: 18px;
  z-index: 9;
}
#duna ul li{
  display: inline-block;
  padding: 30px;
  list-style: none;
  float: left;
  
}

.fo{
    text-align: justify;
    color: #FFFAFA;
}

.pe{
    color: #FFFAFA;
}
