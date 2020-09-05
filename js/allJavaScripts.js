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