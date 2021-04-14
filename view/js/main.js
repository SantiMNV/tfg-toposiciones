
let backToTopBtn = null;
let searchDisplayed = false;
let stateSelected = "";
let jsonResponseText = {};
document.onload = principal()



function principal() {
  console.log("Conectado")
  backToTopBtn = document.getElementById("backToTopBtn");
  backToTopBtn.addEventListener("click", topFunction)
  window.onscroll = function () { scrollFunction() };
  document.getElementById("searchBtn").addEventListener('click', showSearch);
  //document.getElementById("cantabria").addEventListener("click", search);
}


// Show btn when scroll is 20 down
function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    backToTopBtn.style.display = "block";
  } else {
    backToTopBtn.style.display = "none";
  }
}

// Scroll to top when user clicks
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

function pickState(e) {
  let event = window.event || e;
  //console.log("Me han llamado: " + event.srcElement.id);

  if (event.srcElement.id !== "africa") {
    if (stateSelected === "") {
      document.getElementById(event.srcElement.id).style.stroke = "black";
      document.getElementById(event.srcElement.id).style.strokeWidth = 4;
      stateSelected = event.srcElement.id;
    } else {
      if (stateSelected !== event.srcElement.id) {
        document.getElementById(stateSelected).style.stroke = "";
        document.getElementById(event.srcElement.id).style.stroke = "black";
        document.getElementById(event.srcElement.id).style.strokeWidth = 4;
        stateSelected = event.srcElement.id;
      } else {
        document.getElementById(stateSelected).style.stroke = "";
        stateSelected = "";
      }
    }
  }
}

function getSearchInput() {
  // Inicializo la consulta con nocache
  let params = "nocache=" + Math.random();
  let status = document.getElementById("inputStatus").value;
  let category = document.getElementById("inputSearchCategory").value;
  let date = document.getElementById("inputFromDate").value;
  if (status !== "any") {
    params += "&status=" + status
  }
  if (category !== "any") {
    params += "&category=" + category
  }
  if (stateSelected !== "") {
    params += "&state=" + stateSelected
  }
  if (date !== "") {
    params += "&date=" + date
  }
  console.log(params);
  return params;
}

function mapListeners() {
  let areas = Array.prototype.slice.call(document.getElementById("svg_map").getElementsByTagName("path"));
  let circles = Array.prototype.slice.call(document.getElementById("svg_map").getElementsByTagName("circle"))
  let states = areas.concat(circles);
  for (let i = 0; i < states.length; i++) {
    states[i].addEventListener("click", pickState);
  }
}

function showSearch() {
  if (!searchDisplayed) {
    var xhr = new XMLHttpRequest();
    xhr.open('GET', '/toposiciones/view/smarty/main/templates/layouts/search_layout.html', true);
    xhr.onreadystatechange = function () {
      if (this.readyState !== 4) return;
      if (this.status !== 200) return;
      document.getElementById('search-container').innerHTML = this.responseText;
      searchCategoryJSON();
      mapListeners();
    };
    xhr.send();
    searchDisplayed = true;
    topFunction();
  } else {
    document.getElementById('search-container').innerHTML = "";
    searchDisplayed = false;
  }
}

function showCategories(field_id) {
  let categories_options = "";
  categories_options += "<option value='any' selected>Todas</option>";
  console.log(jsonResponseText);
  for (let key in jsonResponseText) {
    categories_options += "<option value='" + key + "'>" + jsonResponseText[key] + "</option>";
  }
  document.getElementById(field_id).innerHTML += categories_options;
}

// JSON ATTACKERS
function JSONPostController(url, responseFunct, params) {
  let req = new XMLHttpRequest();
  req.onreadystatechange = responseFunct;
  req.open("POST", url, true);
  req.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  req.send(params);
}

function searchJSON() {
  // Inicializo la consulta con nocache
  //document.getElementById("sendCache").value = "nocache=" + Math.random();
  document.getElementById("sendStatus").value = document.getElementById("inputStatus").value;
  document.getElementById("sendCategory").value = document.getElementById("inputSearchCategory").value;
  document.getElementById("sendDate").value = document.getElementById("inputFromDate").value;
  document.getElementById("sendState").value = stateSelected.split("-")[0];
  document.getElementById("searchForm").submit();
}

function searchCategoryJSON() {
  //JSONPostController("/toposiciones/model/include/categories.php?", categoriesJSONResponse, params);
  JSONPostController("/toposiciones/controller/jsonManager.php?", jsonResponse, "request=categories");
  setTimeout(console.log("Tardo"), 10600);
  ///  setTimeout(showCategories("inputSearchCategory"), 1600);
}

function searchStateJSON() {
  //  JSONPostController("/toposiciones/jsonManager/?", rapido, "states=5");
  JSONPostController("/toposiciones/controller/jsonManager.php?", jsonResponse, "request=states&states=5");
  setTimeout(aft, 200);
}

function aft() {
  console.log("Ha llamado a aft");
}

// manage json respones
function rapido() {
  categories = {};
  if (this.readyState === 4 && (this.status === 200)) {
    console.log("Respuesta exityosa")
    //let serverCategories = JSON.parse(this.responseText);
    console.log(this.responseText);
    //console.log(JSON.parse(this.responseText));
    /*
        for (let i in serverCategories) {
          categories[i] = serverCategories[i];
        }
        //showCategories("inputSearchCategory");
        console.log("Ha develto: " + serverCategories);
        */
  }
}
// manage json respones
function jsonResponse() {
  if (this.readyState === 4 && (this.status === 200)) {
    //console.log("La respuesta es correcta: " + this.responseText)
    //    jsonResponseText = {};

    let serverResponse = JSON.parse(this.responseText);
    for (let i in serverResponse) {
      jsonResponseText[i] = serverResponse[i];
    }
    //console.log(jsonResponseText);
  }
}