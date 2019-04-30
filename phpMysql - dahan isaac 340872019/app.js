


var f = document.forms.testForm;
f.elements.getEmployee.onclick = function() {
   if(validate()) {
    f.action = 'index.php?dir=getEmployee';
    f.submit();
   }
}
var f = document.forms.testForm;
f.elements.addNew.onclick = function() {
   if(validate()) {
    f.action = 'index.php?dir=addNew';
    f.submit();
    document.getElementById("display").innerHTML = "the employee has been !";

   }
}
var f = document.forms.testForm;
f.elements.updateEmployee.onclick = function() {
   if(validate()) {
    f.action = 'index.php?dir=updateEmployee';
    f.submit();
    document.getElementById("display").innerHTML = "the employee has been updated!";
   }
}

var f = document.forms.testForm;
f.elements.deleteEmployee.onclick = function() {
   if(validateNAME()) {
    f.action = 'index.php?dir=deleteEmployee';
    f.submit();
    document.getElementById("display").innerHTML = " the employee has been deleted!";
   }
}
var f = document.forms.testForm;
f.elements.getAllEmployee.onclick = function() {
    f.action = 'index.php?dir=getAllEmployee';
    f.submit();
     //window.location = "index.php";
     //document.getElementById("display").innerHTML = " getAllEmployee.php";
  
}

function validate() {
    if( f.elements.name.value.trim()==''||f.elements.id.value.trim()=='') {
      document.getElementById("display").innerHTML = " required!";
      return false;
    }
    else {
      return true;
    }
  }

function validateID() {
  if(f.elements.id.value.trim()=='') {
    document.getElementById("display").innerHTML = " required!";
    return false;
  }
  else {
    return true;
  }
}

function validateNAME() {
    if( f.elements.name.value.trim()=='') {
      document.getElementById("display").innerHTML = " required!";
      return false;
    }
    else {
      return true;
    }
  }