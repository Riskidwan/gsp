let dataTable = new simpleDatatables.DataTable(document.getElementById("table1"));

// Pindahkan dropdown ke #custom-selector dan search ke #custom-search
dataTable.on("datatable.init", () => {
  // Dropdown selector
  const selector = dataTable.wrapper.querySelector(".dataTable-selector");
  if (selector) {
    document.getElementById("custom-selector").appendChild(selector);
    selector.classList.add("form-select", "form-select-sm");
    selector.style.width = "auto";
  }

  // Search input
  const search = dataTable.wrapper.querySelector(".dataTable-input");
  if (search) {
    document.getElementById("custom-search").appendChild(search);
    search.classList.add("form-control", "form-control-sm");
    search.style.width = "200px";
  }

  // Pagination
  adaptPagination();
});

// Tambah kelas Bootstrap ke pagination
function adaptPagination() {
  const paginations = dataTable.wrapper.querySelectorAll("ul.dataTable-pagination-list");
  for (const pagination of paginations) {
    pagination.classList.add("pagination", "pagination-primary", "mb-0");
  }

  const paginationLis = dataTable.wrapper.querySelectorAll("ul.dataTable-pagination-list li");
  for (const li of paginationLis) {
    li.classList.add("page-item");
  }

  const paginationLinks = dataTable.wrapper.querySelectorAll("ul.dataTable-pagination-list li a");
  for (const a of paginationLinks) {
    a.classList.add("page-link");
  }
}

dataTable.on("datatable.update", adaptPagination);
dataTable.on("datatable.page", adaptPagination);
dataTable.on("datatable.sort", adaptPagination);
