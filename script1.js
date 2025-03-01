function custom_table()
{
    var r= parseInt(document.getElementById("n_1").value);
    var c= parseInt(document.getElementById("n_2").value);
    var x= "<table>";

    for (i=1; i<=r; i++)
    {
        x=x+ "<tr>";
        for (j=1; j<=c;  j++)
        {
            x=x+ "<td> 123 </td>";
        }
        x=x+"</tr>";
    }
    x=x+"</table>";
    document.getElementById('p1').innerHTML = x;
}