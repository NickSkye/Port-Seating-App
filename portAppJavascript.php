<html>

<head>
Please select your seats   
</head>

<style>

    body{
        text-align: center;
        color: blue;
       
        font-family: Helvetica;
        background-size: 800px 600px;
        background-position: fixed;
        background-origin:;
        background-repeat: no-repeat;
        background-attachment: local;
      
        
 
    }
    

    
     button{
        background: transparent;
        border: transparent;
        width:28px;
        height:30px;
        
    
    }
    
    .buttonBig{
        background: transparent;
        border: visible;
        width:40px;
        height:34px;
    }
    
     .buttonMed{
        background: transparent;
        border: visible;
        width:32px;
        height:34px;
    }
   

    div#mainsection {
        color:#FFFFFF; 
        position: fixed; 
        text-align:center;
        background-position:fixed;
        background-attachment:local;
        border: 4px solid blue;
        height: 602px;
        width: 802px;
        left:300;
        margin: auto;
        background: url("http://portnewport.com/wp-content/uploads/2013/01/SEATING-CHART-1024x791.jpg");
        background-size:800px 600px;
        background-repeat: no-repeat;
        
    }

</style>
<script type="text/javascript" src="jquery.js"></script>

<script type="text/javascript">

var isClicked = false;
var counter = 0;

var numSeatsBought = <?php echo (int)$_POST['resseat']; ?>; //document.getElementById("resseat").value; //window.location.search; //change to get from other html page
var seatArray = new Array();

function clicked(clicked_id){
    
    ////////////////
var links = document.head.getElementsByTagName('link');
for(var link in links){
    if(links.hasOwnProperty(link)){
        var l = links[link];
        if(l.rel === 'canonical'){
          alert(l.href);
        }
    }
}
////////////////////////////
var x = document.getElementById(clicked_id);
if(!contains(seatArray, x.id)){
//x.disabled=true;
if(seatArray.length < numSeatsBought){
isClicked = true;
x.style.background='cyan';
x.style.opacity=".5"
counter +=1;
seatArray.push(x.id);
}
else{
    alert('You have already selected the amount of seats you bought, to reserve.');
}

}
else{
    //x.disabled=false;
    var index = seatArray.indexOf(x.id);
    if(index > -1){
        seatArray.splice(index, 1);
    }
    isClicked = false;
    x.style.background='transparent';
    counter -=1;
}
}

function contains(a, obj) {
    var i = a.length;
    while (i--) {
       if (a[i] === obj) {
           return true;
       }
    }
    return false;
}




</script>

<ul>

<div id="mainsection">


<body>
<button style="position:absolute; left:50px; top:122px;" id="701" onClick="clicked(this.id)"></button>
<button style="position:absolute; left:79px; top:122px;" id="702" onClick="clicked(this.id)"></button>
<button style="position:absolute; left:105px; top:122px;" id="703" onClick="clicked(this.id)"></button>
<button style="position:absolute; left:134px; top:122px;" id="704" onClick="clicked(this.id)"></button>
<button style="position:absolute; left:238px; top:122px;" id="705" onClick="clicked(this.id)"></button>
<button style="position:absolute; left:267px; top:122px;" id="706" onClick="clicked(this.id)"></button>
<button style="position:absolute; left:295px; top:122px;" id="707" onClick="clicked(this.id)"></button>
<button style="position:absolute; left:323px; top:122px;" id="708" onClick="clicked(this.id)"></button>
<button style="position:absolute; left:349px; top:122px;" id="709" onClick="clicked(this.id)"></button>
<button style="position:absolute; left:375px; top:122px;" id="710" onClick="clicked(this.id)"></button>
<button style="position:absolute; left:403px; top:122px;" id="711" onClick="clicked(this.id)"></button>
<button style="position:absolute; left:430px; top:122px;" id="712" onClick="clicked(this.id)"></button>
<button style="position:absolute; left:458px; top:122px;" id="713" onClick="clicked(this.id)"></button>
<button style="position:absolute; left:485px; top:122px;" id="714" onClick="clicked(this.id)"></button>
<button style="position:absolute; left:512px; top:122px;" id="715" onClick="clicked(this.id)"></button>
<button style="position:absolute; left:540px; top:122px;" id="716" onClick="clicked(this.id)"></button>
<button style="position:absolute; left:630px; top:122px;" id="717" onClick="clicked(this.id)"></button>
<button style="position:absolute; left:658px; top:122px;" id="718" onClick="clicked(this.id)"></button>
<button style="position:absolute; left:686px; top:122px;" id="719" onClick="clicked(this.id)"></button>
<button style="position:absolute; left:713px; top:122px;" id="720" onClick="clicked(this.id)"></button>

<!-- Second row from back line-->
<!-- Bigger chair buttons-->
<button class="buttonBig" style="position:absolute; left:1px; top:155px;" id="601" onClick="clicked(this.id)"></buttonBig>
<button class="buttonBig" style="position:absolute; left:41px; top:158px;" id="602" onClick="clicked(this.id)"></buttonBig>
<button class="buttonBig" style="position:absolute; left:84px; top:158px;" id="603" onClick="clicked(this.id)"></buttonBig>
<button class="buttonBig" style="position:absolute; left:124px; top:158px;" id="604" onClick="clicked(this.id)"></buttonBig>
<button class="buttonBig" style="position:absolute; left:166px; top:158px;" id="605" onClick="clicked(this.id)"></buttonBig>

<!-- med chair buttons-->
<button class="buttonMed" style="position:absolute; left:225px; top:158px;" id="606" onClick="clicked(this.id)"></button>
<button class="buttonMed" style="position:absolute; left:256px; top:158px;" id="607" onClick="clicked(this.id)"></button>
<button class="buttonMed" style="position:absolute; left:287px; top:158px;" id="608" onClick="clicked(this.id)"></button>
<button class="buttonMed" style="position:absolute; left:317px; top:158px;" id="609" onClick="clicked(this.id)"></button>
<button class="buttonMed" style="position:absolute; left:347px; top:158px;" id="610" onClick="clicked(this.id)"></button>
<button class="buttonMed" style="position:absolute; left:380px; top:158px;" id="611" onClick="clicked(this.id)"></button>
<button class="buttonMed" style="position:absolute; left:410px; top:158px;" id="612" onClick="clicked(this.id)"></button>
<button class="buttonMed" style="position:absolute; left:440px; top:158px;" id="613" onClick="clicked(this.id)"></button>
<button class="buttonMed" style="position:absolute; left:471px; top:158px;" id="614" onClick="clicked(this.id)"></button>
<button class="buttonMed" style="position:absolute; left:502px; top:158px;" id="615" onClick="clicked(this.id)"></button>
<button class="buttonMed" style="position:absolute; left:535px; top:158px;" id="616" onClick="clicked(this.id)"></button>

<!-- Bigger chair buttons again-->
<button class="buttonBig" style="position:absolute; left:585px; top:161px;" id="617" onClick="clicked(this.id)"></button>
<button class="buttonBig" style="position:absolute; left:630px; top:161px;" id="618" onClick="clicked(this.id)"></button>
<button class="buttonBig" style="position:absolute; left:670px; top:161px;" id="619" onClick="clicked(this.id)"></button>
<button class="buttonBig" style="position:absolute; left:710px; top:161px;" id="620" onClick="clicked(this.id)"></button>
<button class="buttonBig" style="position:absolute; left:750px; top:161px;" id="621" onClick="clicked(this.id)"></button>
<!-- END Second row from back line-->

<!-- Third row from back line-->
<!-- Bigger chair buttons-->
<button class="buttonBig" style="position:absolute; left:2px; top:204px;" id="501" onClick="clicked(this.id)"></button>
<button class="buttonBig" style="position:absolute; left:44px; top:205px;" id="502" onClick="clicked(this.id)"></button>
<button class="buttonBig" style="position:absolute; left:84px; top:205px;" id="503" onClick="clicked(this.id)"></button>
<button class="buttonBig" style="position:absolute; left:124px; top:205px;" id="504" onClick="clicked(this.id)"></button>
<button class="buttonBig" style="position:absolute; left:166px; top:205px;" id="505" onClick="clicked(this.id)"></button>

<!-- med chair buttons-->
<button class="buttonMed" style="position:absolute; left:238px; top:218px;" id="506" onClick="clicked(this.id)"></button>
<button class="buttonMed" style="position:absolute; left:270px; top:218px;" id="507" onClick="clicked(this.id)"></button>
<button class="buttonMed" style="position:absolute; left:302px; top:218px;" id="508" onClick="clicked(this.id)"></button>
<button class="buttonMed" style="position:absolute; left:332px; top:218px;" id="509" onClick="clicked(this.id)"></button>
<button class="buttonMed" style="position:absolute; left:360px; top:218px;" id="510" onClick="clicked(this.id)"></button>
<button class="buttonMed" style="position:absolute; left:395px; top:218px;" id="511" onClick="clicked(this.id)"></button>
<button class="buttonMed" style="position:absolute; left:426px; top:218px;" id="512" onClick="clicked(this.id)"></button>
<button class="buttonMed" style="position:absolute; left:458px; top:218px;" id="513" onClick="clicked(this.id)"></button>
<button class="buttonMed" style="position:absolute; left:489px; top:218px;" id="514" onClick="clicked(this.id)"></button>
<button class="buttonMed" style="position:absolute; left:520px; top:218px;" id="515" onClick="clicked(this.id)"></button>


<!-- Bigger chair buttons again-->
<button class="buttonBig" style="position:absolute; left:580px; top:205px;" id="516" onClick="clicked(this.id)"></button>
<button class="buttonBig" style="position:absolute; left:622px; top:205px;" id="517" onClick="clicked(this.id)"></button>
<button class="buttonBig" style="position:absolute; left:662px; top:205px;" id="518" onClick="clicked(this.id)"></button>
<button class="buttonBig" style="position:absolute; left:705px; top:205px;" id="519" onClick="clicked(this.id)"></button>
<button class="buttonBig" style="position:absolute; left:745px; top:205px;" id="520" onClick="clicked(this.id)"></button>
<!-- END Third row from back line-->


<!-- Fourth row from back line-->
<!-- Bigger chair buttons-->
<button class="buttonBig" style="position:absolute; left:0px; top:251px;" id="401" onClick="clicked(this.id)"></button>
<button class="buttonMed" style="position:absolute; left:40px; top:251px;" id="402" onClick="clicked(this.id)"></button>
<button class="buttonMed" style="position:absolute; left:76px; top:251px;" id="403" onClick="clicked(this.id)"></button>
<button class="buttonMed" style="position:absolute; left:112px; top:251px;" id="404" onClick="clicked(this.id)"></button>
<button class="buttonMed" style="position:absolute; left:148px; top:251px;" id="405" onClick="clicked(this.id)"></button>
<button class="buttonBig" style="position:absolute; left:180px; top:251px;" id="406" onClick="clicked(this.id)"></button>

<!-- med chair buttons-->
<button class="buttonMed" style="position:absolute; left:233px; top:280px;" id="407" onClick="clicked(this.id)"></button>
<button class="buttonMed" style="position:absolute; left:270px; top:278px;" id="408" onClick="clicked(this.id)"></button>
<button class="buttonMed" style="position:absolute; left:308px; top:278px;" id="409" onClick="clicked(this.id)"></button>
<button class="buttonMed" style="position:absolute; left:345px; top:278px;" id="410" onClick="clicked(this.id)"></button>
<button class="buttonMed" style="position:absolute; left:382px; top:278px;" id="411" onClick="clicked(this.id)"></button>
<button class="buttonMed" style="position:absolute; left:418px; top:278px;" id="412" onClick="clicked(this.id)"></button>
<button class="buttonMed" style="position:absolute; left:454px; top:278px;" id="413" onClick="clicked(this.id)"></button>
<button class="buttonMed" style="position:absolute; left:494px; top:278px;" id="414" onClick="clicked(this.id)"></button>
<button class="buttonMed" style="position:absolute; left:530px; top:280px;" id="415" onClick="clicked(this.id)"></button>



<!-- Bigger chair buttons again-->
<button class="buttonBig" style="position:absolute; left:570px; top:251px;" id="416" onClick="clicked(this.id)"></button>
<button class="buttonMed" style="position:absolute; left:612px; top:251px;" id="417" onClick="clicked(this.id)"></button>
<button class="buttonMed" style="position:absolute; left:648px; top:251px;" id="418" onClick="clicked(this.id)"></button>
<button class="buttonMed" style="position:absolute; left:685px; top:251px;" id="419" onClick="clicked(this.id)"></button>
<button class="buttonMed" style="position:absolute; left:723px; top:251px;" id="420" onClick="clicked(this.id)"></button>
<button class="buttonBig" style="position:absolute; left:756px; top:251px;" id="421" onClick="clicked(this.id)"></button>
<!-- END Fourth row from back line-->

<!-- Fifth row from back line-->
<!-- Bigger chair buttons-->
<button class="buttonBig" style="position:absolute; left:40px; top:295px;" id="301" onClick="clicked(this.id)"></button>
<button class="buttonBig" style="position:absolute; left:80px; top:295px;" id="302" onClick="clicked(this.id)"></button>
<button class="buttonBig" style="position:absolute; left:130px; top:290px;" id="303" onClick="clicked(this.id)"></button>
<button class="buttonBig" style="position:absolute; left:170px; top:290px;" id="304" onClick="clicked(this.id)"></button>


<!-- med chair buttons-->
<button style="position:absolute; left:260px; top:330px;" id="305" onClick="clicked(this.id)"></button>
<button style="position:absolute; left:288px; top:330px;" id="306" onClick="clicked(this.id)"></button>
<button style="position:absolute; left:316px; top:330px;" id="307" onClick="clicked(this.id)"></button>
<button style="position:absolute; left:349px; top:330px;" id="308" onClick="clicked(this.id)"></button>
<button style="position:absolute; left:380px; top:330px;" id="309" onClick="clicked(this.id)"></button>
<button style="position:absolute; left:408px; top:330px;" id="310" onClick="clicked(this.id)"></button>
<button style="position:absolute; left:439px; top:330px;" id="311" onClick="clicked(this.id)"></button>
<button style="position:absolute; left:470px; top:330px;" id="312" onClick="clicked(this.id)"></button>
<button style="position:absolute; left:501px; top:330px;" id="313" onClick="clicked(this.id)"></button>



<!-- Bigger chair buttons again-->
<button class="buttonBig" style="position:absolute; left:590px; top:290px;" id="314" onClick="clicked(this.id)"></button>
<button class="buttonBig" style="position:absolute; left:630px; top:290px;" id="315" onClick="clicked(this.id)"></button>
<button class="buttonBig" style="position:absolute; left:685px; top:295px;" id="316" onClick="clicked(this.id)"></button>
<button class="buttonBig" style="position:absolute; left:725px; top:300px;" id="317" onClick="clicked(this.id)"></button>

<!-- END Fifth row from back line-->

<!-- Sixth row from back line-->
<!-- Bigger chair buttons-->
<button style="position:absolute; left:10px; top:352px;" id="201" onClick="clicked(this.id)"></button>
<button style="position:absolute; left:38px; top:348px;" id="202" onClick="clicked(this.id)"></button>
<button class="buttonBig" style="position:absolute; left:66px; top:340px;" id="203" onClick="clicked(this.id)"></button>
<button class="buttonBig" style="position:absolute; left:100px; top:335px;" id="204" onClick="clicked(this.id)"></button>
<button class="buttonBig" style="position:absolute; left:140px; top:330px;" id="205" onClick="clicked(this.id)"></button>
<button class="buttonBig" style="position:absolute; left:180px; top:329px;" id="206" onClick="clicked(this.id)"></button>


<!-- med chair buttons-->
<button style="position:absolute; left:250px; top:368px;" id="207" onClick="clicked(this.id)"></button>
<button style="position:absolute; left:288px; top:368px;" id="208" onClick="clicked(this.id)"></button>
<button style="position:absolute; left:326px; top:366px;" id="209" onClick="clicked(this.id)"></button>
<button style="position:absolute; left:362px; top:366px;" id="210" onClick="clicked(this.id)"></button>
<button style="position:absolute; left:400px; top:366px;" id="211" onClick="clicked(this.id)"></button>
<button style="position:absolute; left:436px; top:366px;" id="212" onClick="clicked(this.id)"></button>
<button style="position:absolute; left:472px; top:368px;" id="213" onClick="clicked(this.id)"></button>
<button style="position:absolute; left:510px; top:370px;" id="214" onClick="clicked(this.id)"></button>




<!-- Bigger chair buttons again-->
<button class="buttonBig" style="position:absolute; left:570px; top:329px;" id="215" onClick="clicked(this.id)"></button>
<button class="buttonBig" style="position:absolute; left:610px; top:330px;" id="216" onClick="clicked(this.id)"></button>
<button class="buttonBig" style="position:absolute; left:655px; top:335px;" id="217" onClick="clicked(this.id)"></button>
<button class="buttonBig" style="position:absolute; left:695px; top:339px;" id="218" onClick="clicked(this.id)"></button>
<button style="position:absolute; left:740px; top:352px;" id="219" onClick="clicked(this.id)"></button>
<button style="position:absolute; left:765px; top:353px;" id="220" onClick="clicked(this.id)"></button>
<!-- END Sixth row from back line-->


<!-- Seventh row from back line-->
<!-- Bigger chair buttons-->
<button class="buttonBig" style="position:absolute; left:75px; top:405px;" id="101" onClick="clicked(this.id)"></button>
<button style="position:absolute; left:118px; top:400px;" id="102" onClick="clicked(this.id)"></button>
<button style="position:absolute; left:145px; top:395px;" id="103" onClick="clicked(this.id)"></button>
<button style="position:absolute; left:175px; top:390px;" id="104" onClick="clicked(this.id)"></button>


<!-- med chair buttons-->
<button style="position:absolute; left:283px; top:412px;" id="105" onClick="clicked(this.id)"></button>
<button style="position:absolute; left:322px; top:412px;" id="106" onClick="clicked(this.id)"></button>
<button style="position:absolute; left:361px; top:412px;" id="107" onClick="clicked(this.id)"></button>
<button style="position:absolute; left:398px; top:412px;" id="108" onClick="clicked(this.id)"></button>
<button style="position:absolute; left:435px; top:412px;" id="109" onClick="clicked(this.id)"></button>
<button style="position:absolute; left:472px; top:412px;" id="110" onClick="clicked(this.id)"></button>





<!-- Bigger chair buttons again-->
<button class="buttonBig" style="position:absolute; left:580px; top:380px;" id="111" onClick="clicked(this.id)"></button>
<button class="buttonBig" style="position:absolute; left:620px; top:383px;" id="112" onClick="clicked(this.id)"></button>
<button class="buttonBig" style="position:absolute; left:675px; top:395px;" id="113" onClick="clicked(this.id)"></button>
<button class="buttonBig" style="position:absolute; left:715px; top:400px;" id="114" onClick="clicked(this.id)"></button>

<!-- END Seventh row from back line-->

<!-- <input type="button" style="background: transparent; border: transparent; width:30px; height:30px; position:absolute;" name="1"> -->




</body>

</div>

</ul>
</html>