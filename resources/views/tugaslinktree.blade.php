<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Bruno Mars | Linktree Tabs</title>
  <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />
  <style>
    body {
      background-color: #1a1a1a;
      font-family: 'Helvetica Neue', sans-serif;
      margin: 0;
      padding: 0;
    }

    .hero-section {
      position: relative;
      max-width: 420px;
      margin: auto;
      height: 350px;
      overflow: hidden;
      border-radius: 12px;
    }

    .hero-img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      object-position: center -20px;
      display: block;
    }

    .hero-overlay {
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
      display: flex;
      flex-direction: column;
      align-items: center;
      z-index: 2;
      padding-bottom: 8px;
    }

    .username {
      font-weight: bold;
      font-size: 14px;
      margin-bottom: 8px;
      color: white;
      text-shadow: 0 0 6px rgba(0,0,0,0.8);
    }

    .username img {
      margin-left: 5px;
    }

    .tab-section {
      position: relative;
      background-color: rgba(255,255,255,0.4);
      border-radius: 22px;
      padding: 2px;
      display: inline-flex;
      box-shadow: 0 1px 2px rgba(0,0,0,0.2);
      margin-bottom: 16px;
    }

    .tab-button {
      background: transparent;
      border: none;
      padding: 6px 18px;
      font-size: 11px;
      font-weight: 600;
      color: black;
      border-radius: 20px;
      position: relative;
      z-index: 2;
      transition: color 0.3s ease;
    }

    .tab-button.active {
      color: white;
    }

    .tab-indicator {
      position: absolute;
      top: 2px;
      bottom: 2px;
      left: 2px;
      width: 50%;
      background-color: black;
      border-radius: 20px;
      transition: transform 0.3s ease;
      z-index: 1;
    }

    .tab-content {
      max-width: 420px;
      margin: 0 auto;
      display: none;
    }

    .tab-content.active {
      display: block;
    }

    a.card-upcoming {
      display: block;
      background-color: white;
      border-radius: 6px;
      width: 100%;
      cursor: pointer;
      transition: background-color 0.2s ease, border 0.2s ease;
      border: 1px solid transparent;
      text-decoration: none;
      color: inherit;
    }

    a.card-upcoming:hover {
      background-color: #1a1a1a;
      border: 1px solid white;
      color: white;
    }

    .card-upcoming span {
      font-size: 11px !important;
    }

    .card-upcoming img.rounded {
      width: 28px !important;
      height: 28px !important;
      margin-left: -6px;
    }

    .cover-img {
      width: 100%;
      height: 190px;
      object-fit: contain;
      margin-top: 5px;
      border-radius: 0;
    }

    .shop-card {
      background-color: #e9e9e9;
      border-radius: 12px;
      padding: 12px;
      margin: 0 auto;
      max-width: 95%;
    }

    .shop-images {
      display: flex;
      justify-content: space-between;
    }

    .shop-images img {
      width: 30%;
      border-radius: 8px;
    }

    .shop-footer {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-top: 10px;
    }

    .shop-footer .label {
      font-weight: bold;
      font-size: 13px;
    }

    .shop-footer .sub {
      font-size: 11px;
      color: #666;
    }

    .shop-footer .dots {
      font-size: 18px;
      color: #999;
    }

    .yt-container {
      position: relative;
      border-radius: 8px;
      overflow: hidden;
    }

    .yt-play {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 30px;
      height: 30px;
      background-color: rgba(255, 255, 255, 0.6);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      transition: transform 0.25s ease;
    }

    .yt-container:hover .yt-play {
      transform: translate(-50%, -50%) scale(1.15);
    }
    .social-icon {
      transition: transform 0.3s ease;
    }

    .social-icon:hover {
      transform: scale(1.2);
    }
    .shop-product-card {
      position: relative;
      display: inline-block;
      width: 180px;
      border-radius: 8px;
      background-color: white;
      padding: 16px;
      text-align: center;
      text-decoration: none;
      color: inherit;
      overflow: hidden;
    }

    .hover-shade {
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
      height: 40%;
      background: #e6f0ff;
      opacity: 0;
      transition: opacity 0.3s ease;
      border-bottom-left-radius: 16px;
      border-bottom-right-radius: 16px;
      z-index: 1;
    }

    .shop-product-card:hover .hover-shade {
      opacity: 1;
    }

    .shop-product-card img,
    .shop-product-card div {
      position: relative;
      z-index: 2;
    }

    .shop-product-card .three-dots {
      position: absolute;
      bottom: 12px;
      right: 12px;
      font-size: 18px;
      color: #888;
      z-index: 3;
    }

    .modal-body .d-flex {
      flex-wrap: nowrap;
      overflow-x: auto;
      justify-content: center;
      gap: 24px;
    }
    .modal-backdrop.show {
      opacity: 1 !important;
      background-color: rgba(255, 255, 255, 0.596) !important;
      backdrop-filter: blur(6px);
    }

  </style>
</head>
<body>
  <div class="hero-section">
    <img src="bm.png" alt="Bruno Mars" class="hero-img"/>
    <div class="hero-overlay">
      <div class="username">@brunomars 
        <img src="https://upload.wikimedia.org/wikipedia/commons/e/e4/Twitter_Verified_Badge.svg" width="12" height="12" alt="verified" />
      </div>
      <div class="tab-section">
        <div class="tab-indicator" id="tab-indicator"></div>
        <button class="tab-button active" onclick="switchTab('links', 0)">Links</button>
        <button class="tab-button" onclick="switchTab('shop', 1)">Shop</button>
      </div>
    </div>
  </div>

  <div id="links" class="tab-content active">
    <a href="https://www.brunomars.com/tour" target="_blank" class="card-upcoming mb-2 p-2">
      <div class="d-flex align-items-center justify-content-between">
        <img src="https://ugc.production.linktr.ee/2f51ca9b-b1b4-4e0b-9976-6a83158e7a85_5901657a-fef3-49ce-a683-17f8a440a7ba-RETINA-PORTRAIT-3-2.jpeg?io=true&size=thumbnail-stack-v1_0" class="rounded" alt="avatar" />
        <div class="text-center flex-grow-1" style="margin-right: 24px;">
          <span class="font-weight-bold">Upcoming Tour Dates</span>
        </div>
        <div class="text-muted" style="font-size: 16px;">⋮</div>
      </div>
    </a>

    <div class="d-flex justify-content-between mb-2" style="gap: 8px;">
      <a href="https://rosesarerosie.lnk.to/APT" target="_blank" class="card-upcoming mb-0 p-0" style="flex: 1;">
        <img src="https://ugc.production.linktr.ee/83ab6551-c5de-4e02-80bc-f97ebb4fefcc_APT.-Cover-Artwork-3000x.jpeg?io=true&size=thumbnail-stack-v1_0" class="cover-img" alt="APT." />
        <div class="d-flex justify-content-between align-items-center px-2 py-2">
          <span class="font-weight-bold">APT.</span>
          <div class="text-muted" style="font-size: 16px;">⋮</div>
        </div>
      </a>

      <a href="https://brunomars.lnk.to/diewithasmile" target="_blank" class="card-upcoming mb-0 p-0" style="flex: 1;">
        <img src="https://ugc.production.linktr.ee/f81cb69d-9aaa-46ba-bbf0-41febac33dba_Screenshot-2024-11-08-at-12.57.57-PM.png?io=true&size=thumbnail-stack-v1_0" class="cover-img" alt="Die With A Smile" />
        <div class="d-flex justify-content-between align-items-center px-2 py-2">
          <span class="font-weight-bold">Die With A Smile</span>
          <div class="text-muted" style="font-size: 16px;">⋮</div>
        </div>
      </a>
    </div>

    <a href="https://www.youtube.com/watch?v=fnPxkuFIA48" target="_blank" class="card-upcoming p-0 mb-2" style="border: none; background-color: transparent;">
      <div class="yt-container">
        <img src="https://ugc.production.linktr.ee/55dab70e-078f-4363-a901-ab835b282dcb_maxresdefault.jpeg?io=true&size=thumbnail-feature-v1_0" style="width: 100%; height: auto; display: block; object-fit: cover;" alt="Die With A Smile Live" />
        
        <div class="yt-play">
          <span style="
            display: block;
            width: 0;
            height: 0;
            border-left: 12px solid black;
            border-top: 8px solid transparent;
            border-bottom: 8px solid transparent;
            margin-left: 4px;
          "></span>
        </div>
        
        <img src="kT8nK8LXc.png"  style="
          position: absolute;
          top: 16px;
          left: 355px;
          width: 85px;
          height: 15px;
          opacity: 0.9;
        " />
        
        <div style="
          position: absolute;
          bottom: 0;
          left: 0;
          right: 0;
          padding: 8px 12px;
          background: linear-gradient(to top, rgba(0, 0, 0, 0.6), transparent);
          color: white;
          font-weight: bold;
          font-size: 12px;
        ">
          Die With A Smile (Live in Las Vegas)
        </div>
        
        <div style="
          position: absolute;
          bottom: 8px;
          right: 12px;
          color: rgba(255, 255, 255, 0.8);
          font-size: 18px;
        ">⋮</div>
      </div>
    </a>

    <a href="https://www.youtube.com/watch?v=ekr2nIex040" target="_blank" class="card-upcoming p-0 mb-2" style="border: none; background-color: transparent;">
      <div class="yt-container">
        <img src="https://ugc.production.linktr.ee/44b72aa3-6312-43f6-9da9-40d6cb136b8e_maxresdefault.jpeg?io=true&size=thumbnail-feature-v1_0" style="width: 100%; height: auto; display: block; object-fit: cover;" alt="Treasure Live" />

        <div class="yt-play">
          <span style="
            display: block;
            width: 0;
            height: 0;
            border-left: 12px solid black;
            border-top: 8px solid transparent;
            border-bottom: 8px solid transparent;
            margin-left: 4px;
          "></span>
        </div>
        
        <img src="kT8nK8LXc.png" style="
          position: absolute;
          top: 16px;
          left: 355px;
          width: 85px;
          height: 15px;
          opacity: 0.9;
        " />

        <div style="
          position: absolute;
          bottom: 0;
          left: 0;
          right: 0;
          padding: 8px 12px;
          background: linear-gradient(to top, rgba(0, 0, 0, 0.6), transparent);
          color: white;
          font-weight: bold;
          font-size: 12px;
        ">
          APT.
        </div>
        
        <div style="
          position: absolute;
          bottom: 8px;
          right: 12px;
          color: rgba(255, 255, 255, 0.8);
          font-size: 18px;
        ">⋮</div>
      </div>
    </a>
     
     <a href="https://www.youtube.com/watch?v=kPa7bsKwL-c" target="_blank" class="card-upcoming p-0 mb-2" style="border: none; background-color: transparent;">
      <div class="yt-container">
        <img src="https://ugc.production.linktr.ee/d1113a2c-bda1-4acb-a53b-e4d958818b42_maxresdefault.jpeg?io=true&size=thumbnail-feature-v1_0" style="width: 100%; height: auto; display: block; object-fit: cover;" alt="Treasure Live" />
        
        <div class="yt-play">
          <span style="
            display: block;
            width: 0;
            height: 0;
            border-left: 12px solid black;
            border-top: 8px solid transparent;
            border-bottom: 8px solid transparent;
            margin-left: 4px;
          "></span>
        </div>
        
        <img src="kT8nK8LXc.png" style="
          position: absolute;
          top: 16px;
          left: 355px;
          width: 85px;
          height: 15px;
          opacity: 0.9;
        " />
        
        <div style="
          position: absolute;
          bottom: 0;
          left: 0;
          right: 0;
          padding: 8px 12px;
          background: linear-gradient(to top, rgba(0, 0, 0, 0.6), transparent);
          color: white;
          font-weight: bold;
          font-size: 12px;
        ">
          Die With A Smile
        </div>
        
        <div style="
          position: absolute;
          bottom: 8px;
          right: 12px;
          color: rgba(255, 255, 255, 0.8);
          font-size: 18px;
        ">⋮</div>
      </div>
    </a>
    
    <div class="d-flex justify-content-center align-items-center mt-4 mb-3" style="gap: 14px;">
      <a href="https://www.instagram.com/brunomars" target="_blank">
        <img src="ClipartKey_2065620.png" width="20" height="20" class="social-icon mx-1" alt="Instagram"/>
      </a>
      <a href="https://www.tiktok.com/@brunomars" target="_blank">
        <img src="pngaaa.com-2781011.png" width="20" height="24" class="social-icon mx-1" alt="TikTok"/>
      </a>
      <a href="https://www.youtube.com/channel/UCoUM-UJ7rirJYP8CQ0EIaHA" target="_blank">
        <img src="—Pngtree—youtube white icon_3570427.png" width="32" height="32" class="social-icon mx-1" alt="YouTube"/>
      </a>
      <a href="https://x.com/BrunoMars" target="_blank">
        <img src="Twitter-X-White-Logo-PNG.png" width="20" height="20" class="social-icon mx-1" alt="X/Twitter"/>
      </a>
      <a href="https://www.facebook.com/brunomars/" target="_blank">
        <img src="logo-facebook-png-hitam-putih-52.png" width="28" height="28" class="social-icon mx-1" alt="Facebook"/>
      </a>
    </div>
  </div>


<div id="shop" class="tab-content">
  <a href="#" data-toggle="modal" data-target="#shopModal" class="card-upcoming shop-card mb-3 p-2 d-block text-center" style="max-width: 420px; margin: 0 auto; position: relative; background-color: #e5e5e5;">
    <div class="shop-images d-flex justify-content-between mb-3" style="gap: 8px;">
      <div style="width: 32%; background-color: #ffffff; border-radius: 4px; padding: 8px;">
        <img src="https://ugc.production.linktr.ee/d7934c71-70f1-4db5-8661-1ee76919a990_apt.png?io=true&size=square-fit" alt="APT" style="width: 100%; height: 120px; border-radius: 4px;">
      </div>
      <div style="width: 32%; background-color: #ffffff; border-radius: 4px; padding: 8px;">
        <img src="https://ugc.production.linktr.ee/4498677a-2f7d-48e8-84e3-7b3aa0f93a35_dwascd.png?io=true&size=square-fit" alt="DWAS" style="width: 100%; height: 120px; border-radius: 4px;">
      </div>
      <div style="width: 32%; background-color: #ffffff; border-radius: 4px; padding: 8px;">
        <img src="https://ugc.production.linktr.ee/d14e07ec-5972-43c4-ab44-39b09d86ec9e_BRU134425.png?io=true&size=square-fit" alt="Silk Sonic" style="width: 100%; height: 120px; border-radius: 4px;">
      </div>
    </div>
    <div class="text-center flex-grow-1">
      <div class="font-weight-bold" style="font-size: 11px;">CDs & Vinyl</div>
      <div style="font-size: 9px; color: #666;">3 Products</div>
    </div>
    <div class="text-muted" style="font-size: 18px; position: absolute; bottom: 12px; right: 12px;">⋮</div>
  </a>

  <a href="#" data-toggle="modal" data-target="#shopModal2" class="card-upcoming shop-card mb-3 p-2 d-block text-center" style="max-width: 420px; margin: 0 auto; position: relative; background-color: #e5e5e5;">
    <div class="shop-images d-flex justify-content-between mb-3" style="gap: 8px;">
      <div style="width: 32%; background-color: #ffffff; border-radius: 4px; padding: 8px;">
        <img src="https://ugc.production.linktr.ee/19ae2c67-85bf-4626-8c17-6d8ffb172fd0_brubourbontee.png?io=true&size=square-fit" alt="APT" style="width: 100%; height: 120px; border-radius: 4px;">
      </div>
      <div style="width: 32%; background-color: #ffffff; border-radius: 4px; padding: 8px;">
        <img src="https://ugc.production.linktr.ee/8ca2673c-99d5-4510-a298-1ed98641f0d9_bmtee6f.png?io=true&size=square-fit" alt="DWAS" style="width: 100%; height: 120px; border-radius: 4px;">
      </div>
      <div style="width: 32%; background-color: #ffffff; border-radius: 4px; padding: 8px;">
        <img src="https://ugc.production.linktr.ee/94c8d353-6931-4bb2-a242-109d951f0d77_bmlsf.png?io=true&size=square-fit" alt="Silk Sonic" style="width: 100%; height: 120px; border-radius: 4px;">
      </div>
    </div>
    <div class="text-center flex-grow-1">
      <div class="font-weight-bold" style="font-size: 11px;">Apparel</div>
      <div style="font-size: 9px; color: #666;">10 Products</div>
    </div>
    <div class="text-muted" style="font-size: 18px; position: absolute; bottom: 12px; right: 12px;">⋮</div>
  </a>
</div>

<div class="modal fade" id="shopModal" tabindex="-1" role="dialog" aria-labelledby="shopModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content border-0 bg-transparent p-0">

      <div class="d-flex justify-content-between align-items-center px-6" style="margin-left: 450px;"> 
        <button type="button" class="btn btn-light rounded-circle d-flex align-items-center justify-content-center"
        style="width: 32px; height: 32px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); border: none;"
        data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true" style="font-size: 18px; color: #000;">&times;</span>
        </button>
      </div>

      <div class="d-flex justify-content-between align-items-center px-3 pt-1 pb-4">
        <div style="width: 32px;"></div>

        <div class="text-center flex-grow-1" style="margin-top: 4px;">
          <div style="font-weight: 600; font-size: 15px; color: #000;">CDs & Vinyl</div>
          <div style="font-size: 10px; font-weight: 600; color: #000000;">3 Products</div>
        </div>
      </div>

      <div class="modal-body pt-0">
        <div class="d-flex justify-content-center flex-nowrap" style="gap: 16px;">
          
          <a href="https://store.brunomars.com/products/apt-cd-single" target="_blank" class="shop-product-card">
            <img src="https://ugc.production.linktr.ee/d7934c71-70f1-4db5-8661-1ee76919a990_apt.png?io=true&size=square-fit" class="img-fluid rounded mb-2" />
            <div class="font-weight-bold" style="font-size: 13px;">APT. CD Single</div>
            <div class="text-muted" style="font-size: 12px;">$3.98</div>
            <div class="three-dots">⋮</div>
            <div class="hover-shade"></div>
          </a>

          <a href="https://store.brunomars.com/products/die-with-a-smile-cd" target="_blank" class="shop-product-card">
            <img src="https://ugc.production.linktr.ee/4498677a-2f7d-48e8-84e3-7b3aa0f93a35_dwascd.png?io=true&size=square-fit" class="img-fluid rounded mb-2" />
            <div class="font-weight-bold" style="font-size: 13px;">Die With A Smile CD</div>
            <div class="text-muted" style="font-size: 12px;">$3.98</div>
            <div class="three-dots">⋮</div>
            <div class="hover-shade"></div>
          </a>

          <a href="https://store.brunomars.com/products/an-evening-with-silk-sonic-lp" target="_blank" class="shop-product-card">
            <img src="https://ugc.production.linktr.ee/d14e07ec-5972-43c4-ab44-39b09d86ec9e_BRU134425.png?io=true&size=square-fit" class="img-fluid rounded mb-2" />
            <div class="font-weight-bold" style="font-size: 13px;">An Evening With Silk Sonic LP</div>
            <div class="text-muted" style="font-size: 12px;">$27.98</div>
            <div class="three-dots">⋮</div>
            <div class="hover-shade"></div>
          </a>

        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="shopModal2" tabindex="-1" role="dialog" aria-labelledby="shopModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content border-0 bg-transparent p-0">
      <div class="d-flex justify-content-between align-items-center px-6" style="margin-left: 450px;"> 
        <button type="button" class="btn btn-light rounded-circle d-flex align-items-center justify-content-center"
          style="width: 32px; height: 32px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); border: none;"
          data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" style="font-size: 18px; color: #000;">&times;</span>
        </button>
      </div>
      <div class="d-flex justify-content-between align-items-center px-3 pt-1 pb-4">
        <div style="width: 32px;"></div>
        <div class="text-center flex-grow-1" style="margin-top: 4px;">
          <div style="font-weight: 600; font-size: 15px; color: #000;">Apparel</div>
          <div style="font-size: 10px; font-weight: 600; color: #000000;">10 Products</div>
        </div>
      </div>
      <div class="modal-body pt-0" style="margin-bottom: 8;">
        <div class="d-flex justify-content-center flex-nowrap" style="gap: 16px;">
          <a href="https://store.brunomars.com/products/bruno-mars-live-bourbon-beyond-tee" target="_blank" class="shop-product-card">
            <img src="https://ugc.production.linktr.ee/19ae2c67-85bf-4626-8c17-6d8ffb172fd0_brubourbontee.png?io=true&size=square-fit" class="img-fluid rounded mb-2" />
            <div class="font-weight-bold" style="font-size: 13px;">Bruno Mars Live! Bourbon & Beyond Tree</div>
            <div class="text-muted" style="font-size: 12px;">$40</div>
            <div class="three-dots">⋮</div>
            <div class="hover-shade"></div>
          </a>
          <a href="https://store.brunomars.com/products/bruno-mars-live-tee-1" target="_blank" class="shop-product-card">
            <img src="https://ugc.production.linktr.ee/8ca2673c-99d5-4510-a298-1ed98641f0d9_bmtee6f.png?io=true&size=square-fit" class="img-fluid rounded mb-2" />
            <div class="font-weight-bold" style="font-size: 13px;">Bruno Mars Live! Tee</div>
            <div class="text-muted" style="font-size: 12px;">$40</div>
            <div class="three-dots">⋮</div>
            <div class="hover-shade"></div>
          </a>
          <a href="https://store.brunomars.com/products/bruno-mars-live-longsleeve" target="_blank" class="shop-product-card">
            <img src="https://ugc.production.linktr.ee/94c8d353-6931-4bb2-a242-109d951f0d77_bmlsf.png?io=true&size=square-fit" class="img-fluid rounded mb-2" />
            <div class="font-weight-bold" style="font-size: 13px;">Bruno Mars Live! Longsleeve</div>
            <div class="text-muted" style="font-size: 12px;">$55</div>
            <div class="three-dots">⋮</div>
            <div class="hover-shade"></div>
          </a>
        </div>
      </div>

      <div class="modal-body pt-0" style="margin-bottom: 8;">
        <div class="d-flex justify-content-center flex-nowrap" style="gap: 16px;">
          <a href="https://store.brunomars.com/products/bruno-mars-tee-1" target="_blank" class="shop-product-card">
            <img src="https://ugc.production.linktr.ee/45a992f8-748f-49ef-9d0a-0c5a4be03208_bmtee5.png?io=true&size=square-fit" class="img-fluid rounded mb-2" />
            <div class="font-weight-bold" style="font-size: 13px;">Bruno Mars Tee</div>
            <div class="text-muted" style="font-size: 12px;">$40</div>
            <div class="three-dots">⋮</div>
            <div class="hover-shade"></div>
          </a>
          <a href="https://store.brunomars.com/products/live-in-vegas-crewneck" target="_blank" class="shop-product-card">
            <img src="https://ugc.production.linktr.ee/4f0bec8a-e7c4-4de0-8af1-3192bf9d8e97_bmcrew.png?io=true&size=square-fit" class="img-fluid rounded mb-2" />
            <div class="font-weight-bold" style="font-size: 13px;">Live In Vegas Crewneck</div>
            <div class="text-muted" style="font-size: 12px;">$80</div>
            <div class="three-dots">⋮</div>
            <div class="hover-shade"></div>
          </a>
          <a href="https://store.brunomars.com/products/bruno-mars-live-tee" target="_blank" class="shop-product-card">
            <img src="https://ugc.production.linktr.ee/1e61c3b7-be93-4914-87c7-aa0076335a89_bmtee1.png?io=true&size=square-fit" class="img-fluid rounded mb-2" />
            <div class="font-weight-bold" style="font-size: 13px;">Bruno Mars Live Tee</div>
            <div class="text-muted" style="font-size: 12px;">$40</div>
            <div class="three-dots">⋮</div>
            <div class="hover-shade"></div>
          </a>
        </div>
      </div>

      <div class="modal-body pt-0" style="margin-bottom: 8;">
        <div class="d-flex justify-content-center flex-nowrap" style="gap: 16px;">
          <a href="https://store.brunomars.com/products/bruno-live-in-vegas-tee" target="_blank" class="shop-product-card">
            <img src="https://ugc.production.linktr.ee/49b52ce8-def0-4305-b711-8fa5d0614c24_brunotee.png?io=true&size=square-fit" class="img-fluid rounded mb-2" />
            <div class="font-weight-bold" style="font-size: 13px;">Bruno Live in Vegas Tee</div>
            <div class="text-muted" style="font-size: 12px;">$40</div>
            <div class="three-dots">⋮</div>
            <div class="hover-shade"></div>
          </a>

          <a href="https://store.brunomars.com/products/bruno-live-in-vegas-tee" target="_blank" class="shop-product-card">
            <img src="https://ugc.production.linktr.ee/49b52ce8-def0-4305-b711-8fa5d0614c24_brunotee.png?io=true&size=square-fit" class="img-fluid rounded mb-2" />
            <div class="font-weight-bold" style="font-size: 13px;">Bruno Live in Vegas Tee</div>
            <div class="text-muted" style="font-size: 12px;">$40</div>
            <div class="three-dots">⋮</div>
            <div class="hover-shade"></div>
          </a>

          <a href="https://store.brunomars.com/products/doo-wops-hooligans-tee" target="_blank" class="shop-product-card">
            <img src="https://ugc.production.linktr.ee/05abf377-eaaf-4974-ab4b-a9ec6bc8883e_bmtee2f.png?io=true&size=square-fit" class="img-fluid rounded mb-2" />
            <div class="font-weight-bold" style="font-size: 13px;">Bootleg Tee</div>
            <div class="text-muted" style="font-size: 12px;">$70</div>
            <div class="three-dots">⋮</div>
            <div class="hover-shade"></div>
          </a>

        </div>
      </div>

      <div class="modal-body pt-0" style="margin-bottom: 8;">
        <div class="d-flex justify-content-center flex-nowrap" style="gap: 12px; margin-right: 290px;">
          <a href="https://store.brunomars.com/products/bruno-mars-tee" target="_blank" class="shop-product-card">
            <img src="https://ugc.production.linktr.ee/61f6cffd-3a75-4dcd-80cd-5a032d87e557_bmtee7.png?io=true&size=square-fit" class="img-fluid rounded mb-2" />
            <div class="font-weight-bold" style="font-size: 13px;">Hey Don't Make This Weird Tee</div>
            <div class="text-muted" style="font-size: 12px;">$70</div>
            <div class="three-dots">⋮</div>
            <div class="hover-shade"></div>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

  <style>
    .card-upcoming {
      position: relative;
      background-color: #e5e5e5;
      border-radius: 12px;
      text-decoration: none;
      transition: background-color 0.2s ease, border 0.2s ease, color 0.2s ease;
      border: 1px solid transparent;
      color: inherit;
    }
    .card-upcoming:hover {
      background-color: #1a1a1a !important;
      color: white !important;
      border: 1px solid white !important;
    }
  </style>
  <script>
    function switchTab(tabName, index) {
      const buttons = document.querySelectorAll(".tab-button");
      const contents = document.querySelectorAll(".tab-content");
      const indicator = document.getElementById("tab-indicator");

      buttons.forEach(btn => btn.classList.remove("active"));
      contents.forEach(c => c.classList.remove("active"));

      buttons[index].classList.add("active");
      document.getElementById(tabName).classList.add("active");

      indicator.style.transform = index === 0 ? "translateX(0%)" : "translateX(100%)";
    }
  </script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
  </body>
</html>
