<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<style>
	*{margin: 0;padding: 0;box-sizing: border-box;}
.main_container{
	background: yellowgreen;width:;
	display: flex;
	flex-direction: column;
	justify-content: center;

}
.header{background:#139AED;
display: flex;
	flex-direction: column;
}
.head_cont1{background:transparent;display: flex;
	flex-direction: row;
	justify-content: space-around;
	align-items: center;
	height: 50px;
margin-top: 1rem;
}


.head_cont2{
	background:#FFFFFF;border-radius: .5rem;
	margin: .5rem 0 0 0;
	border: 1px solid black;
align-self:center;
width: 500px;
	display: flex;
	flex-wrap: wrap;
flex-direction: row;
	justify-content: space-between;
	align-items: center;
	
	
	

}
.item2{height:100px;}
.sell{flex-basis: 200px;margin:.7rem 0 0 2rem;}
.profit{flex-basis: 200px;margin:.7rem 0 0 2rem;}
.tosell{padding-top: .8rem;}
.tos{padding-top: .8rem;margin-left:6rem ;}
/*contaimer 1...start.*/
.contain1{
	background:#FFFFFF;
	padding: .8rem;
   display: flex;
   flex-direction: row;
   justify-content: center;

}
.smal{margin:.4rem;flex-basis: 160px; padding-bottom: 1.5rem;border-radius: .5rem;}
.smal_cont1{border: 1px solid #A2BEEA;}
.smal_cont2{border: 1px solid #A2BEEA;}
.solt{margin-left: .7rem;padding-top: .7rem;}
.credit{margin-left: .7rem;padding-top: .7rem;}

/*contaimer 1....end*/
/*contain2 start ...*/
.contain2{
	background:#EAEDF2;
	display: flex;
	flex-direction: row;
	flex-wrap: wrap;
	justify-content: center;
	margin-left: ;



}

.contlinks
{
	margin-left: 1rem;
display: flex;
flex-direction: column;
flex-basis: 20%;
height: 100px;
border-radius: .5rem;

margin: .5rem ;padding: .5rem;
}
.link0{flex-basis:100%;height: 0;margin:0 -3.5rem 1rem 0;}
.icon1{margin-top: 1.3rem;}
.link1{background: #FFFFFF;align-items: center;
}

.link2{background: #FFFFFF;align-items: center;}
.link3{background: #FFFFFF;align-items: center;}
.link4{background: #FFFFFF;align-items: center;}
.link5{background: #FFFFFF;align-items: center;}
.link6{background: #FFFFFF;align-items: center;}
.link7{background: #FFFFFF;align-items: center;}
.link8{background: #FFFFFF;align-items: center;}


/*contant2 end....*/
.footer{
	background:#FFFFFF;
	display: flex;
	flex-direction: row;
	justify-content: space-evenly;
	padding-bottom: .8rem;

	
}
.footer_icon{
	flex-basis: 30px;
	margin-top: .3rem;

}
@media only screen and (max-width: 768px) {
.head_cont1{justify-content: space-between;margin-top: 1.5rem;}
	.title{margin-left: 1.5rem;}
	.links{margin-right: 1.5rem;}
	.head_cont2{width: 500px;}
	.item2{flex-grow: 0;flex-basis: 150px;margin-top: .8rem;}
	.tosell{margin-left: .8rem;}
.sell{margin:0;}
.profit{margin:.2rem 0 0 .2px;}
.tos{margin-left:0 ;}

}
@media only screen and (max-width: 450px) {
	.head_cont1{justify-content: space-between;}
	.title{margin-left: 1rem;}
	.links{margin-right: 1rem;}
	.head_cont2{width: 400px;}
	.item2{flex-grow: 0;flex-basis: 100px;margin-top: .8rem;}
	.tosell{margin-left: .8rem;}
.sell{margin:0;}
.profit{margin:.2rem 0 0 .2px;}
.tos{margin-left:0 ;}
.contlinks{
	flex-basis: 40%;
	}
	.link0{
		flex-basis:100%;height: 0;margin:0 -3.5rem 1rem 0;
	}
}
@media only screen and (max-width: 360px) {
	.head_cont1{justify-content: space-between;}
	.title{margin-left: .5rem;}
	.links{margin-right: .5rem;}
	.head_cont2{width: 300px;}
	.contain1{padding: 1rem 1rem .5rem .5rem}
	.item2{flex-grow: 0;flex-basis: 100px;margin-top: .8rem;}
	.tosell{margin-left: .8rem;}
.sell{margin:0;}
.profit{margin:.2rem 0 0 .2px;}
.tos{margin-left:0 ;}
.contlinks{
	flex-basis: 45%;
	}
	.link0{
		flex-basis:100%;height: 0;margin:0 -3.5rem 1rem 0;
	}

}
.head_cont3{
	margin: 1rem 1rem;
	display: flex;flex-direction: row;justify-content: center;}
span{width: 50px;margin: .3rem;}
.span1{border: 1px solid white;}
.span2{border: 1px solid #71B8F3;}
.span3{border: 1px solid #71B8F3;}

	</style>


</head>
<body>
<div class="main_container">
<div class="header">

<div class="head_cont1">
	<div class="title"><h4>hi,Jhon<br/> Welcome</h4></div>
	<div class="links"><i class="fal fa-comment-alt"></i></div>

</div>
<div class="head_cont2">
<div class="item2 sell"><h4 class="tosell">Todays sells</h4><h2 class="tosell" style="color:#B2B2B2">N 1,000</h2></div>
	<div class="item2 profit"><h4 class="tos">Todays sells</h4><h2 class="tos" style="color: #17B068;">N 1,000</h2></div>

</div>
<div class="head_cont3">
<span class="span1"></span>
<span class="span2"></span>
<span class="span3"></span>
	</div>
</div>	
<div class="contain1">
<div class="smal smal_cont1" style="">
	<div class="solt"><p style="font-family:Arial;font-size: .8rem;">product solt</p></div>
	<div class="solt"><h3 style="font-family:Arial, Helvetica, sans-serif;color: #B2B2B2;font-size: 1.2rem;">7,250</h3></div>

</div>
<div class="smal smal_cont2"  style="">

<div class="credit"><p style="font-family:Arial;font-size: .8rem;">Credit sels</p></div>
	<div class="credit"><h3 style="font-family:Arial, Helvetica, sans-serif;color: #B2B2B2;font-size: 1.2rem;">N  &nbsp;1,750</h3></div>
</div>

</div>	
<div class="contain2">
	<div class="contlinks link0">
		<h3>quick links</h3>
	</div>
	<div class="contlinks link1">
		<div class=icon1><img src="images/home.png" class="img-fluid"/></div>
		<div class=text1>sell</div>
	</div>
	<div class="contlinks link2">
		<div class=icon1><img src="images/txt.png" class="img-fluid"/></div>
      <div class=text1>sales</div>
	</div>
	<div class="contlinks link3">
		<div class=icon1><img src="images/box.png" class="img-fluid"/></div>
      <div class=text1>My inventory</div>
	</div>
	<div class="contlinks link4">
		<div class=icon1><img src="images/n.png" class="img-fluid"/></div>
      <div class=text1>Update price</div>
	</div>
	<div class="contlinks link5">
		<div class=icon1><img src="images/ar.png" class="img-fluid"/></div>
      <div class=text1>Products</div>
	</div>
	<div class="contlinks link6">
		<div class=icon1><img src="images/pro.png" class="img-fluid"/></div>
      <div class=text1>customers</div>
	</div>
	<div class="contlinks link7">
		<div class=icon1><img src="images/teer.png" class="img-fluid"/></div>
      <div class=text1>Reports</div>
	</div>
	<div class="contlinks link8">
		<div class=icon1><img src="images/ques.png" class="img-fluid"/></div>
      <div class=text1>Help & Support</div>
	</div>

</div>	
<div class="footer">
<div class="footer_icon icon">
	<img src="images/das.png" class="img-fluid"  width="30px" height="30px"/>
	<span style="font-size: .5rem; color:#8CAFE4;">Dashboard</span>
</div>
<div class="footer_icon icon2">
	<img src="images/sho.png" class="img-fluid"  width="30px" height="30px"/>
<span style="font-size: .5rem; color:#B2B2B2;">Buy</span>
</div>
<div class="footer_icon icon3">
	<img src="images/ar1.png" class="img-fluid"  width="30px" height="30px"/>
	<span style="font-size: .5rem; color:#B2B2B2;">Sell</span>
</div>
<div class="footer_icon icon4">
	<img src="images/seting.png" class="img-fluid"  width="30px" height="30px"/>
	<span style="font-size: .5rem; color:#B2B2B2;">Setting</span>
</div>
<div class="footer_icon icon5">
	<img src="images/prof.png" class="img-fluid"  width="30px" height="30px"/>
	<span style="font-size: .5rem; color:#B2B2B2;">Profile</span>
</div>
</div>	
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>

</div>
</body>
</html>