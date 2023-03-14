function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "230px";
  document.getElementById("chet").style.marginLeft= "230px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
   document.getElementById("main").style.marginLeft= "0";
   document.getElementById("chet").style.marginLeft= "0";
}
function myFunction() {
  document.getElementById("demo").innerHTML = "&nbsp&nbsp&nbspAttendance&nbsp&nbsp&nbsp&nbsp                Task Check&nbsp&nbsp &nbsp&nbspFilling Leave";
}
function openReg(){
document.getElementById("empregister").style.width = "81.3%";
document.getElementById("Reg").style.marginLeft = "230px";
}
function closeReg() {
  document.getElementById("empregister").style.width = "0";
   document.getElementById("Reg").style.marginLeft= "0";
 }
 function filterTable() {
   // Get input value and convert to lowercase
   var input = document.getElementById("myInput");
   var filter = input.value.toLowerCase();

   

   // Get table rows and loop through them
   var table = document.getElementById("content-table");
   var rows = table.getElementsByTagName("tr");
   for (var i = 0; i < rows.length; i++) {
     var cells = rows[i].getElementsByTagName("td");
     var rowText = "";

     // Loop through cells and concatenate text
     for (var j = 0; j < cells.length; j++) {
       rowText += cells[j].textContent.toLowerCase() + " ";
     }

     // If search term is found, show row; otherwise hide it
     if (rowText.indexOf(filter) > -1) {
       rows[i].style.display = "";
     } else {
       rows[i].style.display = "none";
     }
   }
 }
