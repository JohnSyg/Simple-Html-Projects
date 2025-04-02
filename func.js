function CurrentTime()
{ 
    var D = new Date();
    var Time = D.getHours() + ":" + D.getMinutes() + ":" + D.getSeconds();
    document.write(Time);
    if(D.getHours() < 12)
    {
        document.write("\n Good Morning");
    }
    else
    {
        document.write("\n Good Afternoon");
    }
}

function clearScreen() 
{
    document.getElementById("result").value = "";
}

function display(value) 
{
    document.getElementById("result").value += value;
}
     
function calculate() 
{
    var p = document.getElementById("result").value;
    var q = eval(p);
    document.getElementById("result").value = q;
}

function CelsiousToFahrenheit()
{
    var p = document.getElementById("result").value;
    var q = p * 9 / 5 + 32;
    document.getElementById("result").value = q;
}

function FahrenheitToCelsious()
{
    var p = document.getElementById("result").value;
    var q = (p - 32) * 5 / 9;
    document.getElementById("result").value = q;
}

function TextCopier()
{
    var p = document.getElementById("textbox").value;
    if (isNaN(p)) 
    { 
        document.getElementById("result").value += 0;  
    }
    else
    {
        document.getElementById("result").value += p;
    }
}