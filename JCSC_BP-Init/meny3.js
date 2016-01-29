var myArray = [
{
    
    "display": "JavaScript Tutorial",
"url": "http://www.w3schools.com/js/default.asp"
},
    { "display": "Statement of Work",
"url": "SOW.html"
},
    {"display": "Invoice",
"url": "invoice.html"
},
    {"display": "Break Even Point",
"url": "BreakEvenPoint_WithData.html"
},
   { "display": "Task List",
"url": "Task%20List.html"
},
   { "display": "Table of Contents",
"url": "TOCr.html"
},
  {  "display": "Time Line",
"url": "vTimeline"
},
    
    
    
    {
    
"display": "Gantt Chart",
"url": "PlanGantt.html"
},
{
"display": "Tutorials",
"url": "loading.html"
},
{
"display": "dnn Tutorials",
"url": "404.html"
}
];

                    

myFunction(myArray);

function myFunction(arr) {
    var out = "<h2>Project Links</h2><ul>";
    var i;
    for(i = 0; i < arr.length; i++) {
        out += '<li><a href="' + arr[i].url + '">' + 
        arr[i].display + '</a></li>';
    }
    out +="</ul>";
    document.getElementById("id01").innerHTML = out;
}