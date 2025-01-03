const homepage_projects_title = () => {

  const homepage_projects_title_parent = document.querySelector(".homepage_projects_title_parent");

  if (!homepage_projects_title_parent) {
    return;
  }

/*----------------------------------------------------*\
    SET COOKIE FOR WHEN NAVIAGTING TO PROJECTS PAGE
\*----------------------------------------------------*/

  // Get url last value (so we can get the page title)
  const queryString = window.location.href;
  // Split the URL by slashes to get an array of path segments
  const pathSegments = queryString.split("/");
  // Remove empty elements from the array
  const cleanedPathSegments = pathSegments.filter(segment => segment!== '');
  // Get the last segment of the path
  const pageTitle = cleanedPathSegments[cleanedPathSegments.length - 1];
  // Remove any hyphens
  const pageTitle_without_hyphen = pageTitle.split("-").join(" ");

    // Function to set a cookie
    const setCookie = (name, value, days) => {
      var expires = "";
      if (days) {
          var date = new Date();
          date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
          expires = "; expires=" + date.toUTCString();
      }
      document.cookie = name + "=" + (value || "") + expires + "; path=/";
  }

    const button = homepage_projects_title_parent.querySelector('a');

    button.addEventListener('click', () => {
      setCookie('pageTitle', pageTitle_without_hyphen, 7);
    })


};
window.addEventListener("DOMContentLoaded", homepage_projects_title);
