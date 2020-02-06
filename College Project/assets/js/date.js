var monthNames = ["January", "February", "March", "April", "May", "June",
    "July", "August", "September", "October", "November", "December"
  ];
  function dateFormat1(d) {
    var t = new Date(d);
    return t.getDate() + ' ' + monthNames[t.getMonth()] + ', ' + t.getFullYear();
  }

  var currentdate = dateFormat1(new Date());
  //console.log(currentdate);
  var dateshowmsg= "Popular Mobile Phones as on ";
  var userserachproduct = " Updated On: ";
  var updatesearch = userserachproduct + finaldate;


//  alert(finaldate);
  var d =   document.getElementById("currentdateshow");
  d.innerText=finaldate;
  
  var updateproduct =   document.getElementById("userupdateproduct");
  updateproduct.innerText=updatesearch;
 






