function doEvent(type)
    {
        var a=document.getElementById('add');
        if(type) {
            a.style="font-weight:bold;color:blue;";
        }
        else {
            a.style=" ";
        }
    }
function tel1(type)
    {
        var x=document.getElementById('i1');
        var y=document.getElementById('i2');
        var z=document.getElementById('i3');
        if(type) {
            x.style="font-weight:bold;color:blue;";
            y.style="font-weight:bold;color:blue;";
            z.style="font-weight:bold;color:blue;";
        }
        else {
            x.style=" ";
            y.style=" ";
            z.style=" ";
        }
    }