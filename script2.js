function generate_data()
{
    var y = parseInt(document.getElementById("year").value);
    var m = parseInt(document.getElementById("month").value);

    if(m=="February")
    {
        if (y % 4==0)
        {
            var days =29;
        }
        else
        {
            var days =28;
        }
    }
    else if(m=="January"|| m=="March" || m=="May" || m=="July" ||m=="August" || m=="October" || m=="December")
    {
        var days = 31;
    }
    else
    {
        var days=30;
    }
    x = "<Lable for='Date'>Enter Date : </Lable><Select name='Date_Value' id='Date'>";
    for(i=1; i<=days; i++) 
    {
        x=x+ "<option value='"+i+" '>" +i+"</option>";
    }
    x=x+"</select>";
    document.getElementById("data1").innerHTML=x;
}
function Show_result()
{
    y = parseInt(document.getElementById("year").value);
    m = parseInt(document.getElementById("month").value);
    d = parseInt(document.getElementById("date").value);

    if(M == 1){M = "January";}
    if(M == 2){M = "February";}
    if(M == 3){M = "March";}
    if(M == 4){M = "April";}
    if(M == 5){M = "May";}
    if(M == 6){M = "June";}
    if(M == 7){M = "July";}
    if(M == 8){M = "August";}
    if(M == 9){M = "Septmber";}
    if(M == 10){M = "October";}
    if(M == 11){M = "November";}
    if(M == 12){M = "December";}
    
    var x = D+ '<sup>th</sup>' + ' ' + M + "," + Y + ".";
    document.getElementById('result').innerHTML = x;
}