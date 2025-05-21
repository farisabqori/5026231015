<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>M231 linktree</title>
    <link rel="shortcut icon" href="image/images.png" type="image/x-icon">

    <!-- Bootstrap 4.6.2 CSS -->
    <link rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link
      href='https://fonts.googleapis.com/css2?family=Inter:wght@500&display=swap'
      rel='stylesheet'>

    <style>
    body{
      font-family: Inter;
    }
    .kotak{
      color: black;
    }
    .bawah{
      color: black;
      text-align: center;
    }
  </style>
  </head>
  <body>
    <div class="mx-auto text-center p-4">
      <div class="navbar d-flex justify-content-between align-items-start p-3 position-relative">
        <div class="navbar-left">
          <!-- Bisa diisi logo atau dibiarkan kosong -->
        </div>
        <div class="navbar-right position-absolute" style="top: 15px; right: 15px;">
          <button class="circle-btn btn p-0 d-flex justify-content-center align-items-center bg-secondary border-0 rounded-circle"
            style="width: 40px; height: 40px;"
            data-bs-toggle="modal"
            data-bs-target="#shareModal">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" viewBox="0 0 16 16">
              <circle cx="2.5" cy="8" r="1.5"/>
              <circle cx="8" cy="8" r="1.5"/>
              <circle cx="13.5" cy="8" r="1.5"/>
            </svg>
          </button>
        </div>
      </div>
      
      <img class="mx-auto"
        src="https://ugc.production.linktr.ee/xkyOuRRRzWuAYfkYEBen_BXtkQr3sT3J586vx?io=true&size=avatar-v3_0"
        style=" max-width: 96px;">
      <h5 class="font-weight-bold">Putting Essentials First <img
          src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTYiIGhlaWdodD0iMTYiIHZpZXdCb3g9IjAgMCAxNiAxNiIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZmlsbC1ydWxlPSJldmVub2RkIiBjbGlwLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik04LjUyNDcgMTUuMTIzNEM4LjIwMyAxNC45MjUxIDcuNzk3IDE0LjkyNTEgNy40NzUzIDE1LjEyMzRMNy4xNDg3MyAxNS4zMjQ3QzYuNjk0MiAxNS42MDQ4IDYuMDk5NzQgMTUuNDc4NSA1Ljc5ODQ1IDE1LjAzNzdMNS41ODE5OSAxNC43MjFDNS4zNjg3NSAxNC40MDkgNC45OTc4NSAxNC4yNDM4IDQuNjIzMzIgMTQuMjk0MUw0LjI0MzExIDE0LjM0NTJDMy43MTM5MiAxNC40MTYyIDMuMjIyMjYgMTQuMDU5IDMuMTI2MzEgMTMuNTMzOEwzLjA1NzM3IDEzLjE1NjRDMi45ODk0NyAxMi43ODQ3IDIuNzE3OCAxMi40ODMgMi4zNTUxOSAxMi4zNzY2TDEuOTg3MDkgMTIuMjY4NkMxLjQ3NDc1IDEyLjExODIgMS4xNzA4OCAxMS41OTE5IDEuMjk2ODcgMTEuMDczMUwxLjM4NzM4IDEwLjcwMDNDMS40NzY1NSAxMC4zMzMgMS4zNTEwOSA5Ljk0NjkyIDEuMDYzMSA5LjcwMjI0TDAuNzcwNzU3IDkuNDUzODVDMC4zNjM4NTIgOS4xMDgxMyAwLjMwMDMyNyA4LjUwMzczIDAuNjI2NDYyIDguMDgwOTZMMC44NjA3NzcgNy43NzcyMkMxLjA5MTYgNy40NzgwMSAxLjEzNDA0IDcuMDc0MjQgMC45NzA0NjggNi43MzM1OEwwLjgwNDQyNCA2LjM4Nzc2QzAuNTczMzE0IDUuOTA2NDMgMC43NjExMTQgNS4zMjg0NCAxLjIzMTAxIDUuMDc0ODhMMS41Njg2MSA0Ljg5MjdDMS45MDExNyA0LjcxMzI0IDIuMTA0MTcgNC4zNjE2NCAyLjA5MzMgMy45ODM5TDIuMDgyMjcgMy42MDA0NEMyLjA2NjkyIDMuMDY2NzIgMi40NzM1NyAyLjYxNTA5IDMuMDA1OTcgMi41NzQ1N0wzLjM4ODQ4IDIuNTQ1NDZDMy43NjUyOSAyLjUxNjc4IDQuMDkzNzUgMi4yNzgxNCA0LjIzNzQ2IDEuOTI4NjRMNC4zODMzNSAxLjU3Mzg1QzQuNTg2NCAxLjA4MDAyIDUuMTQxNiAwLjgzMjgzNiA1LjY0NDQ1IDEuMDEyMzdMNi4wMDU3MyAxLjE0MTM1QzYuMzYxNjMgMS4yNjg0MiA2Ljc1ODc1IDEuMTg0MDEgNy4wMzIxOSAwLjkyMzE3M0w3LjMwOTc4IDAuNjU4MzkxQzcuNjk2MTMgMC4yODk4NTIgOC4zMDM4NyAwLjI4OTg1MiA4LjY5MDIyIDAuNjU4MzkyTDguOTY3ODEgMC45MjMxNzNDOS4yNDEyNSAxLjE4NDAxIDkuNjM4MzcgMS4yNjg0MiA5Ljk5NDI3IDEuMTQxMzVMMTAuMzU1NSAxLjAxMjM3QzEwLjg1ODQgMC44MzI4MzYgMTEuNDEzNiAxLjA4MDAyIDExLjYxNjcgMS41NzM4NUwxMS43NjI1IDEuOTI4NjRDMTEuOTA2MyAyLjI3ODE0IDEyLjIzNDcgMi41MTY3OCAxMi42MTE1IDIuNTQ1NDZMMTIuOTk0IDIuNTc0NTdDMTMuNTI2NCAyLjYxNTA5IDEzLjkzMzEgMy4wNjY3MiAxMy45MTc3IDMuNjAwNDRMMTMuOTA2NyAzLjk4MzlDMTMuODk1OCA0LjM2MTY0IDE0LjA5ODggNC43MTMyNCAxNC40MzE0IDQuODkyN0wxNC43NjkgNS4wNzQ4OEMxNS4yMzg5IDUuMzI4NDQgMTUuNDI2NyA1LjkwNjQzIDE1LjE5NTYgNi4zODc3NkwxNS4wMjk1IDYuNzMzNThDMTQuODY2IDcuMDc0MjQgMTQuOTA4NCA3LjQ3ODAxIDE1LjEzOTIgNy43NzcyMkwxNS4zNzM1IDguMDgwOTZDMTUuNjk5NyA4LjUwMzczIDE1LjYzNjEgOS4xMDgxMyAxNS4yMjkyIDkuNDUzODVMMTQuOTM2OSA5LjcwMjI0QzE0LjY0ODkgOS45NDY5MiAxNC41MjM0IDEwLjMzMyAxNC42MTI2IDEwLjcwMDNMMTQuNzAzMSAxMS4wNzMxQzE0LjgyOTEgMTEuNTkxOSAxNC41MjUzIDEyLjExODIgMTQuMDEyOSAxMi4yNjg2TDEzLjY0NDggMTIuMzc2NkMxMy4yODIyIDEyLjQ4MyAxMy4wMTA1IDEyLjc4NDcgMTIuOTQyNiAxMy4xNTY0TDEyLjg3MzcgMTMuNTMzOEMxMi43Nzc3IDE0LjA1OSAxMi4yODYxIDE0LjQxNjIgMTEuNzU2OSAxNC4zNDUyTDExLjM3NjcgMTQuMjk0MUMxMS4wMDIxIDE0LjI0MzggMTAuNjMxMyAxNC40MDkgMTAuNDE4IDE0LjcyMUwxMC4yMDE1IDE1LjAzNzdDOS45MDAyNiAxNS40Nzg1IDkuMzA1OCAxNS42MDQ4IDguODUxMjcgMTUuMzI0N0w4LjUyNDcgMTUuMTIzNFoiIGZpbGw9IiMwMEI2RkYiLz4KPHBhdGggZD0iTTUuMDY5OTggNy41NjI2NUw3LjE5MTMgOS42ODM5N0wxMS40MzM5IDUuNDQxMzMiIHN0cm9rZT0id2hpdGUiIHN0cm9rZS13aWR0aD0iMiIvPgo8L3N2Zz4K"></h5>
      <p style="color: gray;">New in: Eid Collection Now Available</p>
      <div class="mx-auto" style="max-width: 580px;">
        <a class="text-decoration-none"
          href="https://shopee.co.id/universal-link/shop/143288497?utm_source=an_11003210019&utm_medium=affiliates&utm_campaign=-&utm_content=----&utm_term=cv6o3af3ki8o">
          <div class="mb-3 shadow rounded kotak p-4">Shopee</div>
        </a>
        <a class="text-decoration-none"
          href="https://www.tokopedia.com/m231official?utm_source=instagram&utm_medium=brand&utm_campaign=mrp_june24_010624_300624">
          <div class="mb-4 shadow rounded kotak p-4">Tokopedia</div>
        </a>
        <a class="text-decoration-none"
          href="https://www.lazada.co.id/shop/m231?path=index.htm&trafficFrom=17449020_303586&laz_trackid=2:mm_279230326_84900528_2043900820:clkgg5sd11iot3k867f5r&mkttid=clkgg5sd11iot3k867f5r">
          <div class="mb-4 shadow rounded kotak p-4">Lazada</div>
        </a>
        <a class="text-decoration-none"
          href="https://www.tiktok.com/@m231official">
          <div class="mb-4 shadow rounded kotak p-4">Tiktok</div>
        </a><a class="text-decoration-none"
          href="https://www.zalora.co.id/c/m231/b-6126">
          <div class="mb-4 shadow rounded kotak p-4">Zalora</div>
        </a><a class="text-decoration-none"
          href="https://www.blibli.com/merchant/M231-Official-Store/M21-70000?_branch_match_id=1426041689903500568&utm_source=Web&utm_medium=Share-Store&_branch_referrer=H4sIAAAAAAAAA8soKSkottLXT8rJBCK9xIICvZzMvGx9n8BSf7fcivKygiT7uqLUtNSiosy89Pikovzy4tQiW%2BeMovzcVADkmQsfPQAAAA%3D%3D">
          <div class="mb-4 shadow rounded kotak p-4">Blibli</div>
        </a><a class="text-decoration-none" href="http://www.m231.com/">
          <div class="mb-4 shadow rounded kotak p-4">Webstore</div>
        </a><a class="text-decoration-none"
          href="https://m231.com/pages/our-store">
          <div class="mb-4 shadow rounded kotak p-4">Our Store</div>
        </a><a class="text-decoration-none"
          href="https://linktr.ee/?utm_source=linktree&utm_medium=profile&utm_campaign=footer_logo_cta&utm_content=m231official">
          <div
            class="mb-2 shadow rounded-pill bawah p-2 mx-auto font-weight-bold"
            style="max-width: 290px;"><img src="image/linktree logo.png"
              style="max-width: 13px"> Join m231official on Linktree</div>
        </a>
      </div>
    </div>
  </body>
</html>