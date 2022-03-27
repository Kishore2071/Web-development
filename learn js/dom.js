console.log("ID:");
// select by id
tagid=document.getElementById('idone')
console.log(tagid);
console.log("CLASS:");
// select by classname
tagclass=document.getElementsByClassName('classone')
console.log(tagclass[0]);
console.log("Queryselector tag:");
// select by query
tags=document.querySelector('p');
tags.textContent="Hello World";
