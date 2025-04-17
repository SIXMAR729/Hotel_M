

  <!-- Ionicons for icons -->
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

  <style>
    body {
  height: 100vh;
  width: 100%;
  display: flex;
  position: absolute;
  align-items: center;
  justify-content: center;
  background: #f1f1f1;
  font-family: "Poppins", sans-serif;
  bottom: 0;
}

.menu {
  width: calc(130px + 4 * 70px + 4rem);
  height: 80px;
  background: #fff;
  border-radius: 40px 10px 40px;
  display: flex;
  align-items: center;
  padding: 0 30px;
  box-shadow: 0 10px 25px 0 rgba(0, 0, 0, 0.075);
}

.menu > ul {
  width: 100%;
  list-style: none;
  display: flex;
  gap: 10px;
  align-items: center;
  justify-content: space-evenly;
  padding: 0;
}

.link {
  display: inline-flex;
  justify-content: center;
  align-items: center;
  width: 70px;
  height: 50px;
  border-radius: 99em;
  position: relative;
  overflow: hidden;
  transform-origin: center left;
  transition: width 0.2s ease-in;
  cursor: pointer;
}

.link:before {
  content: "";
  position: absolute;
  z-index: -1;
  width: 100%;
  height: 100%;
  background-color: #eee;
  border-radius: 99em;
  transform: translateX(100%);
  transition: transform 0.2s ease-in;
  transform-origin: center right;
}

.link-icon {
  font-size: 20px;
  position: absolute;
  left: 18px;
}

.link-title {
  transform: translateX(100%);
  transition: transform 0.2s ease-in;
  text-indent: 28px;
  font-size: 14px;
}

.link:hover,
.link:focus {
  outline: 0;
  width: 130px;
}

.link:hover:before,
.link:hover .link-title,
.link:focus:before,
.link:focus .link-title {
  transform: translateX(0);
}
  </style>
</head>
<body>
  <div class="menu">
    <ul>
      <li class="link">
        <span class="link-icon"><ion-icon name="home-outline"></ion-icon></span>
        <span class="link-title">Home</span>
      </li>
      <li class="link">
        <span class="link-icon"><ion-icon name="mail-outline"></ion-icon></span>
        <span class="link-title">Message</span>
      </li>
      <li class="link">
        <span class="link-icon"><ion-icon name="search-outline"></ion-icon></span>
        <span class="link-title">Search</span>
      </li>
      <li class="link">
        <span class="link-icon"><ion-icon name="person-outline"></ion-icon></span>
        <span class="link-title">Profile</span>
      </li>
      <li class="link">
        <span class="link-icon"><ion-icon name="bag-handle-outline"></ion-icon></span>
        <span class="link-title">Cart</span>
      </li>
    </ul>
  </div>
</body>
</html>
