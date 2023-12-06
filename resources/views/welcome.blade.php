<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Guydeez Tours</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  <link rel="stylesheet" href="">
  <style>
    body {
      font-family: 'Arial', sans-serif;
    }

    .top-bar {
      background-color: #a8d08d;
      padding: 10px 20px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .logo {
      font-size: 24px;
      color: white;
    }

    nav a {
      margin-left: 20px;
      text-decoration: none;
      color: white;
    }

    .sign-up-btn {
      padding: 5px 15px;
      background-color: white;
      color: #a8d08d;
      border-radius: 5px;
    }

    .menu-toggle {
      display: none;
    }

    .hero {
      text-align: center;
      padding: 50px 20px;
      background-color: #f7f7f7;
    }

    .hero h1 {
      color: #333;
      margin-bottom: 10px;
    }

    .hero p {
      color: #666;
      margin-bottom: 20px;
    }

    .search-box {
      display: inline-flex;
      border-radius: 20px;
      overflow: hidden;
    }

    .search-box input {
      border: none;
      padding: 10px;
      outline: none;
    }

    .search-box button {
      background-color: #a8d08d;
      color: white;
      border: none;
      padding: 10px 20px;
      cursor: pointer;
    }

    .gallery .carousel {
      display: flex;
      overflow-x: auto;
    }

    .carousel-item {
      margin: 10px;
      border-radius: 10px;
      overflow: hidden;
      position: relative;
    }

    .carousel-item span {
      position: absolute;
      bottom: 10px;
      left: 10px;
      color: white;
      background-color: rgba(0, 0, 0, 0.5);
      padding: 5px;
    }

    .image-gallery {
      padding: 20px;
      background: #fff;
    }

    .gallery-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      grid-gap: 10px;
    }

    .gallery-item {
      background: #f3f3f3;
      border-radius: 8px;
      overflow: hidden;
      position: relative;
    }

    .gallery-item img {
      width: 100%;
      height: auto;
      display: block;
      transition: transform 0.3s ease;
    }

    .gallery-item:hover img {
      transform: scale(1.1);
    }

    @media (max-width: 768px) {
      .menu-toggle {
        display: block;
      }

      nav {
        display: none;
      }
    }

    .image-item {
      margin-top: 30px;
      border-radius: 12px;
      border: black
    }

    .img {
      border-radius: 12px;
      border: black
    }

  </style>
</head>
<body>

<header>
  <div class="top-bar">
    <div class="logo">GUYDEEZ</div>
    <nav>
      <a href="#">Log in</a>
      <a href="#" class="sign-up-btn">Sign up</a>
    </nav>
    <div class="menu-toggle">☰</div>
  </div>
</header>

<main>
  <div class="row d-flex hero">
    <div class="col-md-8">
      <section class="hero">
        <h1 style="color:#86061d">Where do you want to go with <br/> Guydeez <span
                  style="color:pink">incredible locals</span></h1>
        <p>Guydeez offers you private and personalized tours with a local guide abroad</p>

        <div class="search-box">
          <input id="searchInput" type="text" placeholder="Where are you going?" aria-label="Search for tours">
          <ul id="autocompleteList" style="list-style-type: none; padding: 0;"></ul>

          <button id="searchButton">Search</button>
        </div>

      </section>
    </div>


    <div class="col-md-3">
      <di class="row d-flex">
        <div class="gallery-item col-md-4">
          <div style="height: 300px" class="image-item">

          </div>
          <div class="image-item">
            <img class="img" style="height: 300px"
                 src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS-slKoq5GT_zs05a4dY5-UaknVDXlDDMdl8hMFsiGXvO8k6ViCfCcBCmTTOLa8WUDuWkw&usqp=CAU"
                 alt="Image Description">
          </div>

        </div>
        <div class="gallery-item col-md-4">
          <div class="image-item">
            <img class="img" style="height: 300px"
                 src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS-slKoq5GT_zs05a4dY5-UaknVDXlDDMdl8hMFsiGXvO8k6ViCfCcBCmTTOLa8WUDuWkw&usqp=CAU"
                 alt="Image Description">
          </div>
          <div class="image-item">
            <img class="img" style="height: 300px"
                 src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS-slKoq5GT_zs05a4dY5-UaknVDXlDDMdl8hMFsiGXvO8k6ViCfCcBCmTTOLa8WUDuWkw&usqp=CAU"
                 alt="Image Description">
          </div>

        </div>
        <div class="gallery-item col-md-4">
          <div class="image-item">
            <img style="height: 300px"
                 src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS-slKoq5GT_zs05a4dY5-UaknVDXlDDMdl8hMFsiGXvO8k6ViCfCcBCmTTOLa8WUDuWkw&usqp=CAU"
                 alt="Image Description">
          </div>
          <div class="image-item">
            <img style="height: 300px"
                 src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS-slKoq5GT_zs05a4dY5-UaknVDXlDDMdl8hMFsiGXvO8k6ViCfCcBCmTTOLa8WUDuWkw&usqp=CAU"
                 alt="Image Description">
          </div>

        </div>

      </di>
    </div>
  </div>
</main>
<script>
  const searchInput = document.getElementById('searchInput');
  const autocompleteList = document.getElementById('autocompleteList');
  let debounceTimer;

  function fetchSuggestions(query) {
    fetch(`/api/country/suggestions?query=${encodeURIComponent(query)}`)
        .then(response => response.json())
        .then(data => {
          const suggestions = [];
          data.forEach(country => {
            suggestions.push(country.name);
            country.cities.forEach(city => {
              if (city.name.toLowerCase().includes(query.toLowerCase())) {
                suggestions.push(city.name);
              }
            });
          });

          autocompleteList.innerHTML = '';
          suggestions.forEach(suggestion => {
            const listItem = document.createElement('li');
            listItem.textContent = suggestion;
            listItem.addEventListener('click', () => {
              searchInput.value = suggestion;
              autocompleteList.innerHTML = '';
            });
            autocompleteList.appendChild(listItem);
          });
        })
        .catch(error => console.error('Error fetching suggestions:', error));
  }

  searchInput.addEventListener('input', () => {
    clearTimeout(debounceTimer);
    debounceTimer = setTimeout(() => {
      const inputText = searchInput.value;
      if (inputText) {
        fetchSuggestions(inputText);
      } else {
        autocompleteList.innerHTML = '';
      }
    }, 250);
  });

  document.getElementById('searchButton').addEventListener('click', () => {
    const searchValue = searchInput.value;
    // Implement your search logic here
    console.log('Searching for:', searchValue);
  });


</script>


</body>
</html>
