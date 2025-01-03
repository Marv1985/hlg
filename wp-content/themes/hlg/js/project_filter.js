const constructor = (data) => {
  //find parent
  const projects_repeater_parent = document.querySelector(".projects_repeater_parent .fixed_width");

  //create elements
  const project_container = document.createElement("div");
  const h3 = document.createElement("h3");

  //assign variables
  project_container.classList.add("project_container");

  //attach data
  h3.textContent = data.title;

  //append to parent
  projects_repeater_parent.appendChild(project_container);
};

const projectsContent = [
  {
    filters: ["animation", "branding", "websites"],
    imageUrl: "",
    title: "",
    link: "",
  },
  {
    filters: ["animation", "branding", "websites"],
    imageUrl: "",
    title: "",
    link: "",
  },
  {
    filters: ["animation", "branding", "websites"],
    imageUrl: "",
    title: "",
    link: "",
  },
];

const createElements = (projects) => {
  projects.forEach((element) => {
    constructor(element);
  });
};
const projects = [
  {
    filters: ["animation", "branding", "websites"],
    projectHtml: "",
  },
  {
    filters: ["branding", "websites"],
    projectHtml: "",
  },
  {
    filters: ["branding", "websites"],
    projectHtml: "",
  },
];

const filteredData = projects.filter((project) => project.filters.includes("animation"));

const projects_repeater_parent = document.querySelector(".projects_repeater_parent .fixed_width");
projects_repeater_parent.innerHTML = "";
filteredData.forEach((project) => {
  projects_repeater_parent.append(project.projectHtml);
});
