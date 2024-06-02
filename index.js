let para1=document.getElementById("p1");
let para2=document.getElementById("p2");
let para3=document.getElementById("p3");

para1.addEventListener("mouseover",function(){
    para1.style.color="red";
});
para1.addEventListener("mouseout",function(){
    para1.style.color="";
})

para2.addEventListener("mouseover",function(){
    para2.style.color="yellow";
});
para2.addEventListener("mouseout",function(){
    para2.style.color="";
})

para3.addEventListener("mouseover",function(){
    para3.style.color="blue";
});
para3.addEventListener("mouseout",function(){
    para3.style.color="";
})
