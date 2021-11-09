let id = "no";
//localStorage.clear();
selectData();

function manageData() {
  document.getElementById("msg").innerHTML = ""; //message element
  let name = document.getElementById("book-name").value; //get name element
  //let author = document.getElementById("auth-name").value;
  if (name == "" && author == "") {
    document.getElementById("msg").innerHTML = "Please enter Book name";
  } else {
    if (id == "no") {
      //user adding new data
      let arr = getCrudData();
      if (arr == null) {
        let data = [name];
        setCrudData(data); //adds first element in array in localstorage
      } else {
        arr.push(name); //appends names in array in local storage
        setCrudData(arr);
      }
      document.getElementById("book-name").value = ""; //makes input field empty
      document.getElementById("msg").innerHTML = "Book Added";
    } else {
      //user editing data
      let arr = getCrudData(); //shows table from local storage
      arr[id] = name; //updates name
      setCrudData(arr); //Saves updated data in local storage
      document.getElementById("msg").innerHTML = "Book Updated";
    }
    document.getElementById("book-name").value = "";

    selectData();
  }
}

function selectData() {
  let arr = getCrudData(); //shows table
  if (arr != null) {
    let html = "";
    let sno = 1;
    for (let k in arr) {
      html =
        html +
        `<tr><td>${sno}</td><td>${arr[k]}</td><td><a href="javascript:void(0) " class="editButton" onclick="editData(${k})">Edit</a>&nbsp;<a href="javascript: void(0) " class="deleteButton" onclick="deleteData(${k})">Delete</a></td></tr>`;
      sno++;
    }
    document.getElementById("root").innerHTML = html; //adds this to root table
  }
}

function editData(rid) {
  id = rid;
  let arr = getCrudData();
  document.getElementById("book-name").value = arr[rid];
}

function deleteData(rid) {
  let arr = getCrudData();
  arr.splice(rid, 1); //deletes 1 item
  setCrudData(arr); //updates record
  selectData();
}

function getCrudData() {
  let arr = JSON.parse(localStorage.getItem("crud"));
  return arr;
}

function setCrudData(arr) {
  localStorage.setItem("crud", JSON.stringify(arr));
}
// crud = [{
//   bookName: [],
//   authorName: []
// }]

// function sortCrudData() {
//   let arr = getCrudData();
//   let sortedArr = arr.sort();
//   return sortedArr;
// }
//sort Books
function sortBooks() {
  let arr = getCrudData();
  arr.sort();
  console.log(arr);

  if (arr != null) {
    let html = "";
    sno = 1;

    for (let k = 0; k < arr.length; k++) {
      html =
        html +
        `<tr><td> ${sno} </td><td> ${arr[k]} </td><td><a href="javascript:void(0) " class="editButton" onclick="editData(${k})">Edit</a>&nbsp;<a href="javascript: void(0) " class="deleteButton" onclick="deleteData(${k})">Delete</a></td></tr>`;
      sno++;
    }
    document.getElementById("root").innerHTML = html;
  }
}

//Search me
function searchBook() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("search-book");
  filter = input.value.toUpperCase();
  table = document.getElementById("root");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
