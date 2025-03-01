function generate_table() {
    var n= parseInt(document.getElementById("n_1").value);
    var a= " ";
    
    for (var i=0; i<=20; i++)
    {
        a = a + n + " * " + i + "=" + n * i + "<br>" ;
    }
    document.getElementById('p1').innerHTML = a;
}