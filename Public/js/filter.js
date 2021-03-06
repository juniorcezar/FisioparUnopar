function Filter(column) {

    var input, filter, table, tr, td, i;
    input = document.getElementById("filterText");
    filter = input.value.toUpperCase();
    table = document.getElementById("tableList");
    tr = table.getElementsByTagName("tr");

    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[column];
        if (td) {
            if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
            } 
            else {
            tr[i].style.display = "none";
            }
        }
    }
}