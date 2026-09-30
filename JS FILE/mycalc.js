function pick(val)
{
    document.getElementById("a").value+=val;
}
function clr()
{
    document.getElementById("a").value=" ";
}
function solve()
{
    var x=document.getElementById("a").value;
    var y=eval(x);
    document.getElementById("a").value=y;
}
function square()
{
    var a=document.getElementById("a").value;
    var b=a*a;
    document.getElementById("a").value=b;
}
function cube()
{
    var a=document.getElementById("a").value;
    var b=a*a*a;
    document.getElementById("a").value=b;
}
function squareroot()
{
    var a=document.getElementById("a").value;
    var b=Math.sqrt(a);
    document.getElementById("a").value=b;
}
function cuberoot()
{
    var a=document.getElementById("a").value;
    var b=Math.cbrt(a);
    document.getElementById("a").value=b;
}
function ln()
{
    var a=document.getElementById("a").value;
    var b=Math.log(a);
    document.getElementById("a").value=b;
}
function log()
{
    var a=document.getElementById("a").value;
    var b=Math.log10(a);
    document.getElementById("a").value=b;
}
function sinh()
{
    var a=document.getElementById("a").value;
    var b=Math.sinh(a);
    document.getElementById("a").value=b;
}
function cosh()
{
    var a=document.getElementById("a").value;
    var b=Math.cosh(a);
    document.getElementById("a").value=b;
}
function tanh()
{
    var a=document.getElementById("a").value;
    var b=Math.tanh(a);
    document.getElementById("a").value=b;
}
function backspc()
{
    var a=document.getElementById("a").value;
    var b=a.substr(0,a.length-1);
    document.getElementById("a").value=b;
}
function factorial()
{
    var a,b,fact;
    var a=document.getElementById("a").value;
    fact=1;
    b=1;
    do
    {
        fact*=b;
        b+=1;
    }while(b<=a);
    b-=1;
    document.getElementById("a").value=fact;
    }
function modulus()
{
    var a=document.getElementById("a").value;
    var b=Math.mod(a);
    document.getElementById("a").value=b;
}
function dectohex()
{
  var a=document.getElementById("b").value;
  var b=parseInt(a).toString(16);
  document.getElementById("dectohex").innerText = "Hexadecimal: " +b.toUpperCase(); 
}
function dectooct()
{
  var a=document.getElementById("c").value;
  var b=parseInt(a).toString(8);
  document.getElementById("dectooct").innerText = "Octal: " +b; 
}
function dectobin()
{
  var a=document.getElementById("d").value;
  var b=parseInt(a).toString(2);
  document.getElementById("dectobin").innerText = "Binary: " +b; 
}
function hextodec()
{
  var a=document.getElementById("e").value;
  var b=parseInt(a,16);
  document.getElementById("hextodec").innerText = "Decimal: " +b; 
}
function hextooct()
{
  var a=document.getElementById("f").value;
  var b=parseInt(a,16);
  var c=b.toString(8);
  document.getElementById("hextooct").innerText = "Octal: " +c;
}
function hextobin()
{
  var a=document.getElementById("g").value;
  var b=parseInt(a,16);
  var c=b.toString(2);
  document.getElementById("hextobin").innerText = "Binary: " +c;
}
function octtodec()
{
  var a=document.getElementById("h").value;
  var b=parseInt(a,8);
  document.getElementById("octtodec").innerText = "Decimal: " +b;
}
function octtohex()
{
  var a=document.getElementById("i").value;
  var b=parseInt(a,8);
  var c=b.toString(16);
  document.getElementById("octtohex").innerText = "Hexadecimal: " +c.toUpperCase();
}
function octtobin()
{
  var a=document.getElementById("j").value;
  var b=parseInt(a,8);
  var c=b.toString(2);
  document.getElementById("octtobin").innerText = "Binary: " +c;
}
function bintodec()
{
  var a=document.getElementById("k").value;
  var b=parseInt(a,2);
  document.getElementById("bintodec").innerText = "Decimal: " +b;
}
function bintooct()
{
  var a=document.getElementById("l").value;
  var b=parseInt(a,2);
  var c=b.toString(8);
  document.getElementById("bintooct").innerText = "Octal: " +c
}
function bintohex()
{
  var a=document.getElementById("m").value;
  var b=parseInt(a,2);
  var c=b.toString(16);
  document.getElementById("bintohex").innerText = "Hexadecimal: " +c.toUpperCase();
}