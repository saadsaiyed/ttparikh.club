function openCloseSidebar(x) {
    x.classList.toggle("change");
    var width = document.getElementById("sidebar_Id").clientWidth;
    if (width != 0)
        width = '0px';
    else
        width = "250px";

    document.getElementById("sidebar_Id").style.width = width;
    document.getElementById("root_Id").style.marginLeft = width;
}

function invoiceInfo(invNo) {
    var x = document.getElementById("invoice-details-id");
    if (x.style.display === "block") {
        x.style.display = "none";
    } else {
        x.style.display = "block";
    }
}

function someFunc() {
    console.log("hi");
    document.documentElement.style.setProperty('--green-theme', document.getElementById("colorPicker2").value);
    document.documentElement.style.setProperty('--purple-theme', document.getElementById("colorPicker1").value);
}

function dropdownToggle(params) {
    //var dropdown = document.getElementById("side-drop-id");
    var dropdown = document.querySelectorAll(".drop-content");

    document.getElementsByClassName("dropdown-btn")[0].classList.toggle("active");
    for (let i = 0; i < dropdown.length; i++) {
        var dropdownContent = dropdown[i];
        if (dropdownContent.style.display === "none") {
            dropdownContent.style.display = "block";
        } else {
            dropdownContent.style.display = "none";
        }
    }
}

//------------------ Ajax page loading ------------------//


function loadDoc(fileName) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        $('#root_Id').load(fileName);
      }
    };
    xhttp.open("GET", fileName, true);
    xhttp.send();
  }