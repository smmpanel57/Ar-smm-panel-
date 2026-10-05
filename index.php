<!DOCTYPE html>
<html lang="bn">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>SkyLine Tours & Travels | হজ, ওমরাহ, ট্যুর ও ভিসা সেবা</title>
<link rel="icon" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><text y='.9em' font-size='90'>✈️</text></svg>">
<style>
  * { margin:0; padding:0; box-sizing:border-box; font-family:'Segoe UI', Tahoma, sans-serif; }
  html { scroll-behavior:smooth; }
  body { background:#f4f7fb; color:#222; line-height:1.6; }

  /* Topbar */
  .topbar {
    background:#0a4d68; color:#fff; padding:8px 25px; font-size:13px;
    display:flex; justify-content:space-between; flex-wrap:wrap; gap:8px;
  }
  .topbar a { color:#ffd700; text-decoration:none; }

  /* Header */
  header {
    background:#fff; padding:14px 25px; position:sticky; top:0; z-index:100;
    display:flex; justify-content:space-between; align-items:center; flex-wrap:wrap;
    box-shadow:0 2px 10px rgba(0,0,0,0.08);
  }
  .logo-area { display:flex; align-items:center; gap:10px; }
  .logo-area h1 { font-size:20px; color:#0a4d68; }
  .logo-area h1 span { color:#e63946; }
  nav { display:flex; flex-wrap:wrap; align-items:center; gap:5px; }
  nav a {
    color:#0a4d68; text-decoration:none; padding:8px 12px; font-weight:500;
    font-size:14px; border-radius:6px; transition:0.3s;
  }
  nav a:hover { background:#e8f4f8; color:#e63946; }
  .admin-btn {
    background:#0a4d68; color:#fff !important; padding:8px 16px !important;
    border-radius:20px;
  }
  .admin-btn:hover { background:#e63946 !important; color:#fff !important; }

  /* Hero */
  .hero {
    background: linear-gradient(rgba(0,0,0,0.55), rgba(0,0,0,0.55)),
      url('https://images.unsplash.com/photo-1436491865332-7a61a109cc05?w=1600') center/cover;
    height:400px; display:flex; flex-direction:column; justify-content:center;
    align-items:center; color:#fff; text-align:center; padding:20px;
  }
  .hero h2 { font-size:34px; margin-bottom:12px; }
  .hero p { font-size:16px; margin-bottom:22px; max-width:700px; }
  .btn {
    background:#ffd700; color:#0a4d68; padding:12px 28px; border:none;
    border-radius:30px; font-weight:bold; cursor:pointer; font-size:15px;
    transition:0.3s; text-decoration:none; display:inline-block;
  }
  .btn:hover { background:#fff; transform:scale(1.05); }
  .btn-outline { background:transparent; color:#fff; border:2px solid #fff; margin-left:10px; }
  .btn-outline:hover { background:#fff; color:#0a4d68; }

  .trust-bar {
    background:#fff; padding:18px; display:flex; justify-content:center;
    align-items:center; gap:35px; flex-wrap:wrap;
    box-shadow:0 2px 8px rgba(0,0,0,0.05);
  }
  .trust-item { display:flex; align-items:center; gap:8px; font-weight:600; color:#0a4d68; font-size:14px; }

  section { padding:55px 25px; max-width:1200px; margin:auto; }
  section h2 { text-align:center; font-size:28px; margin-bottom:10px; color:#0a4d68; }
  section h2::after {
    content:''; width:80px; height:4px; background:#ffd700;
    display:block; margin:12px auto 25px; border-radius:2px;
  }
  .section-sub { text-align:center; color:#666; margin-bottom:35px; max-width:700px; margin-left:auto; margin-right:auto; font-size:15px; }

  /* SERVICE LOGO GRID */
  .service-grid {
    display:grid; grid-template-columns:repeat(auto-fit, minmax(160px, 1fr));
    gap:18px; max-width:1100px; margin:0 auto;
  }
  .service-card {
    background:#fff; border-radius:16px; padding:22px 15px; text-align:center;
    cursor:pointer; transition:all 0.35s ease;
    box-shadow:0 4px 15px rgba(0,0,0,0.08); border:2px solid transparent;
    position:relative; overflow:hidden;
  }
  .service-card:hover { transform:translateY(-8px) scale(1.03); box-shadow:0 12px 30px rgba(8,131,149,0.25); border-color:#088395; }
  .service-card.active { border-color:#ffd700; box-shadow:0 12px 30px rgba(255,215,0,0.4); background:#fffdf0; }
  .service-icon { font-size:46px; margin-bottom:10px; display:block; }
  .service-card h3 { color:#0a4d68; font-size:15px; margin-bottom:5px; }
  .service-card p { font-size:12px; color:#666; }

  /* Expandable Panel */
  .expand-panel {
    max-height:0; overflow:hidden;
    transition:max-height 0.5s ease, padding 0.3s ease;
    background:#fff; border-radius:16px; margin-top:0;
  }
  .expand-panel.open {
    max-height:5000px; padding:30px 25px; margin-top:25px;
    box-shadow:0 4px 20px rgba(0,0,0,0.1); border:2px solid #ffd700;
  }
  .expand-panel h3 { color:#088395; font-size:22px; margin-bottom:8px; text-align:center; }
  .expand-panel .panel-desc { text-align:center; color:#666; margin-bottom:25px; font-size:14px; }

  .grid { display:grid; grid-template-columns:repeat(auto-fit,minmax(260px,1fr)); gap:18px; }
  .card {
    background:#f9fbfd; border-radius:12px; padding:18px;
    box-shadow:0 3px 10px rgba(0,0,0,0.06); transition:0.3s;
    position:relative; border:1px solid #e8f4f8;
  }
  .card:hover { transform:translateY(-4px); box-shadow:0 8px 20px rgba(0,0,0,0.12); }
  .card h4 { color:#088395; margin-bottom:8px; font-size:16px; }
  .card .price { color:#e63946; font-weight:bold; font-size:19px; margin:10px 0; }
  .card ul { margin-left:18px; margin-bottom:12px; font-size:13px; }
  .card ul li { margin-bottom:3px; }
  .badge {
    position:absolute; top:12px; right:12px; background:#e63946; color:#fff;
    padding:3px 10px; border-radius:20px; font-size:11px; font-weight:bold;
  }
  .badge-new { background:#00b894; }
  .badge-hajj { background:#0a4d68; }

  /* Reviews */
  .review-card { background:#f9fbfd; padding:18px; border-radius:12px; box-shadow:0 3px 10px rgba(0,0,0,0.06); border:1px solid #e8f4f8; }
  .stars { color:#ffd700; font-size:17px; margin-bottom:8px; }
  .reviewer { font-weight:bold; color:#0a4d68; margin-top:10px; font-size:14px; }

  /* MODAL (Booking / Package / Visa / Admin) */
  .modal-overlay {
    position:fixed; inset:0; background:rgba(0,0,0,0.7);
    display:none; justify-content:center; align-items:center; z-index:2000;
    padding:20px; overflow-y:auto;
  }
  .modal-overlay.show { display:flex; }
  .modal {
    background:#fff; padding:30px; border-radius:16px;
    max-width:600px; width:100%; box-shadow:0 20px 60px rgba(0,0,0,0.4);
    animation:slideDown 0.3s ease; max-height:90vh; overflow-y:auto;
  }
  @keyframes slideDown { from { opacity:0; transform:translateY(-30px); } to { opacity:1; transform:translateY(0); } }
  .modal h3 { color:#0a4d68; margin-bottom:6px; text-align:center; }
  .modal p.sub { text-align:center; color:#666; font-size:13px; margin-bottom:20px; }
  .modal label { display:block; margin-top:14px; font-weight:600; font-size:14px; }
  .modal input, .modal select, .modal textarea {
    width:100%; padding:11px 14px; margin-top:6px; border:1px solid #ccc;
    border-radius:8px; font-size:14px; font-family:inherit;
  }
  .modal input:focus, .modal select:focus, .modal textarea:focus { outline:none; border-color:#088395; }
  .modal .btn { width:100%; margin-top:20px; padding:13px; }
  .modal .close-btn {
    background:#eee; color:#333; margin-top:10px; width:100%;
    padding:11px; border:none; border-radius:30px; cursor:pointer;
    font-weight:bold; font-size:14px;
  }
  .form-row { display:grid; grid-template-columns:1fr 1fr; gap:15px; }
  .required::after { content:' *'; color:#e63946; }
  .pay-icons { display:flex; gap:10px; flex-wrap:wrap; margin-top:14px; justify-content:center; }
  .pay-icons span { background:#f0f0f0; padding:7px 14px; border-radius:8px; font-weight:bold; font-size:12px; border:1px solid #ddd; }

  .error-msg { background:#ffe5e5; color:#c0392b; padding:10px; border-radius:8px; font-size:13px; margin-top:12px; display:none; text-align:center; }

  /* Tracker */
  .tracker-result { margin-top:20px; padding:20px; background:#e8f4f8; border-radius:10px; display:none; border-left:5px solid #088395; }
  .status-badge { display:inline-block; padding:5px 14px; border-radius:20px; background:#ffd700; color:#0a4d68; font-weight:bold; font-size:13px; }
  .progress-bar { background:#ddd; height:8px; border-radius:4px; margin:15px 0; overflow:hidden; }
  .progress-fill { background:linear-gradient(90deg,#088395,#00b894); height:100%; width:30%; border-radius:4px; transition:0.5s; }

  /* Table */
  .table-wrap { overflow-x:auto; }
  table { width:100%; border-collapse:collapse; background:#fff; border-radius:10px; overflow:hidden; box-shadow:0 4px 15px rgba(0,0,0,0.08); }
  th, td { padding:11px 14px; text-align:left; border-bottom:1px solid #eee; font-size:13px; }
  th { background:#088395; color:#fff; }
  tr:hover { background:#f4f7fb; }

  /* ADMIN PANEL */
  .admin-panel { position:fixed; inset:0; background:#f4f7fb; z-index:2500; display:none; overflow-y:auto; }
  .admin-panel.show { display:block; }
  .admin-header {
    background:linear-gradient(135deg,#0a4d68,#088395); color:#fff;
    padding:18px 25px; display:flex; justify-content:space-between;
    align-items:center; flex-wrap:wrap; gap:10px; position:sticky; top:0; z-index:10;
  }
  .admin-header h2 { font-size:20px; }
  .admin-header .logout-btn {
    background:#e63946; color:#fff; padding:9px 20px; border:none;
    border-radius:20px; cursor:pointer; font-weight:bold; font-size:13px;
  }
  .admin-body { padding:25px; max-width:1300px; margin:auto; }
  .stats-grid { display:grid; grid-template-columns:repeat(auto-fit,minmax(180px,1fr)); gap:15px; margin-bottom:25px; }
  .stat-card {
    background:#fff; padding:20px; border-radius:12px;
    box-shadow:0 3px 10px rgba(0,0,0,0.06); text-align:center;
    border-left:4px solid #088395;
  }
  .stat-card .num { font-size:28px; font-weight:bold; color:#0a4d68; }
  .stat-card .lbl { font-size:13px; color:#666; margin-top:5px; }
  .admin-tabs { display:flex; gap:8px; margin-bottom:20px; flex-wrap:wrap; }
  .tab-btn {
    background:#fff; color:#0a4d68; padding:10px 20px; border:2px solid #088395;
    border-radius:25px; cursor:pointer; font-weight:bold; font-size:13px; transition:0.3s;
  }
  .tab-btn.active, .tab-btn:hover { background:#088395; color:#fff; }
  .admin-table { width:100%; background:#fff; border-radius:12px; overflow:hidden; box-shadow:0 3px 12px rgba(0,0,0,0.08); }
  .admin-table th { background:#0a4d68; color:#fff; padding:12px; font-size:13px; text-align:left; }
  .admin-table td { padding:11px 12px; font-size:13px; border-bottom:1px solid #eee; }
  .admin-table tr:hover { background:#f9fbfd; }
  .status-select { padding:6px 10px; border-radius:6px; border:1px solid #ccc; font-size:12px; cursor:pointer; }
  .action-btn { padding:5px 10px; border:none; border-radius:6px; cursor:pointer; font-size:12px; margin-right:4px; font-weight:bold; }
  .btn-view { background:#3498db; color:#fff; }
  .btn-del { background:#e63946; color:#fff; }
  .btn-ok { background:#00b894; color:#fff; }
  .btn-edit-pkg { background:#3498db; color:#fff; padding:7px; border:none; border-radius:6px; cursor:pointer; font-weight:bold; font-size:12px; flex:1; }
  .btn-del-pkg { background:#e63946; color:#fff; padding:7px; border:none; border-radius:6px; cursor:pointer; font-weight:bold; font-size:12px; flex:1; }
  .admin-action-bar {
    display:flex; justify-content:space-between; align-items:center;
    margin-bottom:20px; flex-wrap:wrap; gap:12px;
    padding:15px; background:#fff; border-radius:12px;
    box-shadow:0 3px 10px rgba(0,0,0,0.06);
  }
  .admin-action-bar h3 { color:#0a4d68; font-size:18px; }
  .admin-pkg-grid { display:grid; grid-template-columns:repeat(auto-fit,minmax(280px,1fr)); gap:16px; }
  .admin-pkg-card {
    background:#fff; border-radius:12px; padding:18px;
    box-shadow:0 3px 10px rgba(0,0,0,0.06);
    border-left:4px solid #088395; position:relative;
  }
  .admin-pkg-card .pkg-icon { font-size:36px; margin-bottom:8px; display:block; }
  .admin-pkg-card h4 { color:#0a4d68; margin-bottom:6px; font-size:16px; }
  .admin-pkg-card .desc { color:#666; font-size:13px; margin-bottom:8px; }
  .admin-pkg-card .price-tag { color:#e63946; font-weight:bold; font-size:18px; margin-bottom:8px; }
  .admin-pkg-card ul { margin-left:16px; font-size:12px; color:#555; margin-bottom:12px; }
  .admin-pkg-card .actions { display:flex; gap:8px; margin-top:10px; }
  .pkg-badge {
    position:absolute; top:12px; right:12px;
    background:#e63946; color:#fff; padding:3px 10px;
    border-radius:20px; font-size:10px; font-weight:bold;
  }
  .empty-msg { text-align:center; padding:40px; color:#888; font-size:15px; }
  .detail-row { display:flex; padding:8px 0; border-bottom:1px solid #eee; font-size:14px; }
  .detail-row strong { min-width:130px; color:#0a4d68; }
  .detail-row span { flex:1; word-break:break-word; }
  .doc-preview {
    max-width:100%; max-height:400px; border-radius:8px;
    margin-top:10px; border:2px solid #ddd;
  }

  /* Cookie Banner */
  #cookieBanner {
    position:fixed; bottom:0; left:0; right:0; background:#0a4d68; color:#fff;
    padding:16px 22px; display:none; justify-content:space-between;
    align-items:center; z-index:1000; flex-wrap:wrap; gap:12px;
    box-shadow:0 -4px 15px rgba(0,0,0,0.2);
  }
  #cookieBanner button { padding:8px 18px; font-size:13px; }

  /* WhatsApp Float */
  .whatsapp-float {
    position:fixed; bottom:22px; right:22px; background:#25D366;
    width:54px; height:54px; border-radius:50%; display:flex;
    align-items:center; justify-content:center; z-index:999;
    box-shadow:0 4px 15px rgba(0,0,0,0.3); text-decoration:none;
    font-size:26px; transition:0.3s;
  }
  .whatsapp-float:hover { transform:scale(1.1); }

  /* Footer */
  footer { background:#0a4d68; color:#fff; padding:45px 25px 18px; }
  .footer-grid { display:grid; grid-template-columns:repeat(auto-fit,minmax(210px,1fr)); gap:25px; max-width:1200px; margin:auto; }
  .footer-grid h4 { color:#ffd700; margin-bottom:14px; font-size:15px; }
  .footer-grid a { color:#ddd; text-decoration:none; display:block; margin-bottom:7px; font-size:13px; }
  .footer-grid a:hover { color:#ffd700; }
  .footer-grid p { font-size:13px; color:#ddd; margin-bottom:7px; }
  .footer-bottom { text-align:center; margin-top:30px; padding-top:18px; border-top:1px solid #1a6a85; font-size:13px; color:#aaa; }

  /* Payment info box in booking modal */
  .pay-info-box {
    background:#fff9e6; border:2px dashed #ffd700; border-radius:10px;
    padding:14px; margin-top:12px; font-size:13px;
  }
  .pay-info-box strong { color:#0a4d68; }
  .pay-number {
    background:#0a4d68; color:#fff; padding:8px 14px; border-radius:8px;
    font-weight:bold; font-size:16px; letter-spacing:1px;
    display:inline-block; margin-top:6px;
  }

  @media(max-width:768px){
    .hero h2 { font-size:22px; }
    .hero p { font-size:14px; }
    header { flex-direction:column; gap:10px; }
    nav { justify-content:center; }
    .form-row { grid-template-columns:1fr; }
    section { padding:40px 16px; }
    .btn-outline { margin-left:0; margin-top:10px; }
    .service-grid { grid-template-columns:repeat(auto-fit, minmax(130px,1fr)); gap:12px; }
    .service-icon { font-size:38px; }
  }
</style>
</head>
<body>

<!-- COOKIE BANNER -->
<div id="cookieBanner">
  <span>🍪 আমরা কুকি ব্যবহার করি আপনার অভিজ্ঞতা উন্নত করতে।</span>
  <div>
    <button class="btn" onclick="acceptCookies()">সব গ্রহণ</button>
    <button class="btn btn-outline" onclick="declineCookies()" style="color:#fff;">শুধু প্রয়োজনীয়</button>
  </div>
</div>

<!-- TOPBAR -->
<div class="topbar">
  <div>📞 <span id="topPhone">+৮৮০ ১৬২৩-৭৪৪৪৪০</span> | ✉️ <span id="topEmail">info@skylinetours.com</span></div>
  <div>🌐 <a href="#">English</a> | <a href="#">বাংলা</a> | 💱 ৳ BDT</div>
</div>

<!-- HEADER -->
<header>
  <div class="logo-area">
    <span style="font-size:28px;">✈️</span>
    <h1 id="siteName">SkyLine <span>Tours</span></h1>
  </div>
  <nav>
    <a href="#services">সেবাসমূহ</a>
    <a href="#tracker">ট্র্যাকার</a>
    <a href="#reviews">রিভিউ</a>
    <a href="#contact">যোগাযোগ</a>
    <a href="#" class="admin-btn" onclick="openAdminLogin(event)">🔐 অ্যাডমিন</a>
  </nav>
</header>

<!-- HERO -->
<div class="hero">
  <h2 id="heroTitle">আপনার স্বপ্নের ভ্রমণ শুরু হোক আমাদের সাথে</h2>
  <p id="heroSubtitle">হজ, ওমরাহ, ট্যুর প্যাকেজ ও বিশ্বস্ত ভিসা প্রসেসিং সেবা — বাংলাদেশ থেকে সারা বিশ্বে</p>
  <div>
    <a href="#services" class="btn">সেবা দেখুন</a>
  </div>
</div>

<!-- TRUST BAR -->
<div class="trust-bar">
  <div class="trust-item">🔒 SSL সুরক্ষিত পেমেন্ট</div>
  <div class="trust-item">✅ BTB রেজিস্টার্ড</div>
  <div class="trust-item">⭐ ৫০০+ সন্তুষ্ট গ্রাহক</div>
  <div class="trust-item">💬 ২৪/৭ সাপোর্ট</div>
</div>

<!-- ============ SERVICES ============ -->
<section id="services">
  <h2>🎯 আমাদের সেবাসমূহ</h2>
  <p class="section-sub">আইকনে ক্লিক করুন — সেই সেবার প্যাকেজ দেখতে পাবেন</p>

  <div class="service-grid">
    <div class="service-card" data-target="panel-hajj" onclick="toggleService(this)">
      <span class="service-icon">🕋</span>
      <h3>হজ প্যাকেজ</h3>
      <p>সরকার অনুমোদিত</p>
    </div>
    <div class="service-card" data-target="panel-umrah" onclick="toggleService(this)">
      <span class="service-icon">🕌</span>
      <h3>ওমরাহ প্যাকেজ</h3>
      <p>সারা বছর</p>
    </div>
    <div class="service-card" data-target="panel-tour" onclick="toggleService(this)">
      <span class="service-icon">🌍</span>
      <h3>ট্যুরিস্ট প্যাকেজ</h3>
      <p>বিশ্বজুড়ে</p>
    </div>
    <div class="service-card" data-target="panel-visa" onclick="toggleService(this)">
      <span class="service-icon">🛂</span>
      <h3>ভিসা সেবা</h3>
      <p>১০+ দেশ</p>
    </div>
    <div class="service-card" data-target="panel-air" onclick="toggleService(this)">
      <span class="service-icon">✈️</span>
      <h3>এয়ার টিকেট</h3>
      <p>সস্তা দামে</p>
    </div>
    <div class="service-card" data-target="panel-hotel" onclick="toggleService(this)">
      <span class="service-icon">🏨</span>
      <h3>হোটেল বুকিং</h3>
      <p>সেরা হোটেল</p>
    </div>
  </div>

  <!-- ===== Panel: হজ ===== -->
  <div class="expand-panel" id="panel-hajj">
    <h3>🕋 হজ প্যাকেজ ২০২৬</h3>
    <p class="panel-desc">সরকার অনুমোদিত ও নির্ভরযোগ্য হজ সেবা</p>
    <div class="grid" id="hajjGrid"></div>
  </div>

  <!-- ===== Panel: ওমরাহ ===== -->
  <div class="expand-panel" id="panel-umrah">
    <h3>🕌 ওমরাহ প্যাকেজ</h3>
    <p class="panel-desc">সারা বছর ওমরাহ পালনের সুবিধা</p>
    <div class="grid" id="umrahGrid"></div>
  </div>

  <!-- ===== Panel: ট্যুরিস্ট ===== -->
  <div class="expand-panel" id="panel-tour">
    <h3>🌍 ট্যুরিস্ট প্যাকেজ</h3>
    <p class="panel-desc">বিশ্বের সেরা গন্তব্যগুলোতে ভ্রমণ</p>
    <div class="grid" id="tourGrid"></div>
  </div>

  <!-- ===== Panel: ভিসা ===== -->
  <div class="expand-panel" id="panel-visa">
    <h3>🛂 ভিসা সেবা</h3>
    <p class="panel-desc">বাংলাদেশ থেকে ভিসা চালু থাকা দেশসমূহ</p>
    <div class="table-wrap">
      <table>
        <thead><tr><th>দেশ</th><th>ধরন</th><th>সময়</th><th>ফি</th><th>আবেদন</th></tr></thead>
        <tbody id="visaTableBody"></tbody>
      </table>
    </div>
  </div>

  <!-- ===== Panel: এয়ার ===== -->
  <div class="expand-panel" id="panel-air">
    <h3>✈️ এয়ার টিকেট বুকিং</h3>
    <p class="panel-desc">দেশ-বিদেশের যেকোনো ফ্লাইট সাশ্রয়ী মূল্যে</p>
    <div class="grid" id="airGrid"></div>
  </div>

  <!-- ===== Panel: হোটেল ===== -->
  <div class="expand-panel" id="panel-hotel">
    <h3>🏨 হোটেল বুকিং</h3>
    <p class="panel-desc">বিশ্বজুড়ে সেরা হোটেল সাশ্রয়ী দামে</p>
    <div class="grid" id="hotelGrid"></div>
  </div>
</section>

<!-- REVIEWS -->
<section id="reviews">
  <h2>⭐ গ্রাহকদের মতামত</h2>
  <p class="section-sub">৫০০+ সন্তুষ্ট গ্রাহকের আস্থা</p>
  <div class="grid" id="reviewsGrid"></div>
</section>

<!-- TRACKER -->
<section id="tracker">
  <h2>🔍 অর্ডার / ভিসা ট্র্যাকার</h2>
  <p class="section-sub">অর্ডার আইডি দিয়ে অবস্থা জানুন</p>
  <div style="background:#fff; padding:30px; border-radius:14px; max-width:800px; margin:auto; box-shadow:0 4px 20px rgba(0,0,0,0.1);">
      <label style="font-weight:600;">আপনার অর্ডার আইডি</label>
    <input type="text" id="trackId" placeholder="যেমন: SKY-2026-001" style="width:100%; padding:11px 14px; margin-top:6px; border:1px solid #ccc; border-radius:8px; font-size:14px;">
    <button class="btn" onclick="trackOrder()" style="width:100%; margin-top:20px; padding:14px;">ট্র্যাক করুন</button>
    <div class="tracker-result" id="trackerResult">
      <h3>অর্ডার আইডি: <span id="resId"></span></h3>
      <p><strong>গ্রাহক:</strong> <span id="resName"></span></p>
      <p><strong>প্যাকেজ:</strong> <span id="resPkg"></span></p>
      <p><strong>বর্তমান অবস্থা:</strong> <span class="status-badge" id="resStatus"></span></p>
      <div class="progress-bar"><div class="progress-fill" id="resProgress"></div></div>
      <p><strong>সর্বশেষ আপডেট:</strong> <span id="resDate"></span></p>
    </div>
  </div>
</section>

<!-- CONTACT -->
<section id="contact" style="text-align:center;">
  <h2>📞 যোগাযোগ</h2>
  <p class="section-sub">যেকোনো প্রশ্নে আমাদের সাথে যোগাযোগ করুন</p>
  <div class="grid" style="max-width:900px; margin:auto;">
    <div class="card"><h4>📍 ঠিকানা</h4><p id="contactAddress">১২৩, ধানমন্ডি, ঢাকা-১২০৫, বাংলাদেশ</p></div>
    <div class="card"><h4>📱 ফোন</h4><p id="contactPhone">+৮৮০ ১৬২৩-৭৪৪৪৪০</p></div>
    <div class="card"><h4>✉️ ইমেইল</h4><p id="contactEmail">info@skylinetours.com</p></div>
  </div>
</section>

<!-- FOOTER -->
<footer>
  <div class="footer-grid">
    <div>
      <h4>✈️ SkyLine Tours</h4>
      <p>বাংলাদেশ থেকে বিশ্বের যেকোনো প্রান্তে ভ্রমণ সেবা।</p>
      <p style="margin-top:8px;">🏆 BTB রেজিস্টার্ড</p>
    </div>
    <div>
      <h4>দ্রুত লিঙ্ক</h4>
      <a href="#services">সেবাসমূহ</a>
      <a href="#tracker">ট্র্যাকার</a>
      <a href="#contact">যোগাযোগ</a>
    </div>
    <div>
      <h4>গুরুত্বপূর্ণ</h4>
      <a href="privacy.html">গোপনীয়তা নীতি</a>
      <a href="terms.html">সেবার শর্তাবলী</a>
      <a href="refund.html">রিফান্ড নীতি</a>
    </div>
    <div>
      <h4>যোগাযোগ</h4>
      <p>📍নাসির সুপার মার্কেট,টাঙ্গাইল রোড ,গাজীপুর</p>  
  <p>📱 <span id="footerPhone">+৮৮০ ১৬২৩-৭৪৪৪৪০</span></p>
      <p>✉️ <span id="footerEmail">info@skylinetours.com</span></p>
    </div>
  </div>
  <div class="footer-bottom">
    <p>© ২০২৬ SkyLine Tours & Travels | সর্বস্বত্ব সংরক্ষিত</p>
  </div>
</footer>

<!-- WHATSAPP FLOAT -->
<a href="https://wa.me/8801623744440" class="whatsapp-float" target="_blank" id="waFloat">💬</a>

<!-- ============ BOOKING MODAL ============ -->
<div class="modal-overlay" id="bookingModal">
  <div class="modal">
    <h3>📝 বুকিং ফর্ম</h3>
    <p class="sub" id="bookingPkgName"></p>
    <form id="bookingForm" onsubmit="submitBooking(event)">
      <input type="hidden" id="selectedPkgName">
      <input type="hidden" id="selectedPkgPrice">

      <label class="required">পূর্ণ নাম</label>
      <input type="text" id="fullName" required placeholder="আপনার নাম">

      <div class="form-row">
        <div>
          <label class="required">মোবাইল</label>
          <input type="tel" id="phone" required placeholder="01XXXXXXXXX" pattern="01[0-9]{9}">
        </div>
        <div>
          <label>ইমেইল</label>
          <input type="email" id="email" placeholder="example@mail.com">
        </div>
      </div>

      <div class="form-row">
        <div>
          <label class="required">NID নম্বর</label>
          <input type="text" id="nid" required placeholder="NID নম্বর">
        </div>
        <div>
          <label class="required">পাসপোর্ট নম্বর</label>
          <input type="text" id="passport" required placeholder="পাসপোর্ট নম্বর">
        </div>
      </div>

      <div class="form-row">
        <div>
          <label>যাত্রীর সংখ্যা</label>
          <input type="number" id="persons" value="1" min="1" max="20">
        </div>
        <div>
          <label class="required">পেমেন্ট পদ্ধতি</label>
          <select id="paymentMethod" required>
            <option value="">-- নির্বাচন --</option>
            <option value="bKash">বিকাশ</option>
            <option value="Nagad">নগদ</option>
            <option value="Rocket">রকেট</option>
            <option value="Bank">ব্যাংক</option>
          </select>
        </div>
      </div>

      <!-- Payment Info Box -->
      <div class="pay-info-box">
        <strong>💳 পেমেন্ট করুন নিচের নাম্বারে:</strong><br>
        <div style="margin-top:8px;">
          📱 <strong>bKash:</strong> <span class="pay-number" id="bkashNum">01623744440</span><br>
          📱 <strong>Nagad:</strong> <span class="pay-number" id="nagadNum">01623744440</span><br>
          📱 <strong>Rocket:</strong> <span class="pay-number" id="rocketNum">01623744440</span>
        </div>
        <p style="margin-top:10px; font-size:12px; color:#666;">⚠️ পেমেন্ট করার পর নিচে স্ক্রিনশট আপলোড করুন।</p>
      </div>

      <label class="required">পেমেন্ট স্ক্রিনশট / ডকুমেন্ট আপলোড</label>
      <input type="file" id="paymentSS" accept="image/*,application/pdf" required>
      <p style="font-size:11px; color:#888; margin-top:4px;">সাপোর্টেড: JPG, PNG, PDF</p>

      <label>অতিরিক্ত নোট</label>
      <textarea id="note" rows="3" placeholder="বিশেষ অনুরোধ"></textarea>

      <button type="submit" class="btn">✅ বুকিং কনফার্ম</button>
      <button type="button" class="close-btn" onclick="closeBookingModal()">বাতিল</button>
    </form>
  </div>
</div>
<!-- ============ ADMIN LOGIN MODAL ============ -->
<div class="modal-overlay" id="adminLoginModal">
  <div class="modal" style="max-width:400px;">
    <h3>🔐 অ্যাডমিন লগইন</h3>
    <p class="sub">শুধুমাত্র অনুমোদিত ব্যক্তির জন্য</p>
    <label>আইডি</label>
    <input type="text" id="adminUser" placeholder="admin">
    <label>পাসওয়ার্ড</label>
    <input type="password" id="adminPass" placeholder="••••••">
    <div class="error-msg" id="loginError">❌ ভুল আইডি বা পাসওয়ার্ড!</div>
    <button class="btn" onclick="adminLogin()">লগইন</button>
    <button class="close-btn" onclick="closeAdminLogin()">বন্ধ</button>
    <p style="text-align:center; font-size:11px; color:#888; margin-top:12px;">
      ডেমো: <b>admin</b> / <b>admin123</b>
    </p>
  </div>
</div>

<!-- ============ ADMIN PANEL ============ -->
<div class="admin-panel" id="adminPanel">
  <div class="admin-header">
    <h2>🎛️ Admin Dashboard — SkyLine Tours</h2>
    <div>
      <span style="margin-right:15px; font-size:13px;">👤 <span id="adminName">Admin</span></span>
      <button class="logout-btn" onclick="adminLogout()">লগআউট</button>
    </div>
  </div>

  <div class="admin-body">
    <div class="stats-grid">
      <div class="stat-card"><div class="num" id="statTotal">0</div><div class="lbl">মোট বুকিং</div></div>
      <div class="stat-card"><div class="num" id="statPending">0</div><div class="lbl">পেন্ডিং</div></div>
      <div class="stat-card"><div class="num" id="statConfirmed">0</div><div class="lbl">কনফার্মড</div></div>
      <div class="stat-card"><div class="num" id="statCompleted">0</div><div class="lbl">সম্পন্ন</div></div>
    </div>

    <div class="admin-tabs">
      <button class="tab-btn active" onclick="switchAdminTab('bookings', this)">📋 বুকিং</button>
      <button class="tab-btn" onclick="switchAdminTab('hajj', this)">🕋 হজ প্যাকেজ</button>
      <button class="tab-btn" onclick="switchAdminTab('umrah', this)">🕌 ওমরাহ প্যাকেজ</button>
      <button class="tab-btn" onclick="switchAdminTab('tour', this)">🌍 ট্যুরিস্ট প্যাকেজ</button>
      <button class="tab-btn" onclick="switchAdminTab('visa', this)">🛂 ভিসা তথ্য</button>
      <button class="tab-btn" onclick="switchAdminTab('other', this)">✈️ এয়ার/হোটেল</button>
      <button class="tab-btn" onclick="switchAdminTab('settings', this)">⚙️ সেটিংস</button>
    </div>

    <!-- Tab: Bookings -->
    <div class="admin-tab-content" id="tab-bookings">
      <div class="admin-tabs" style="margin-bottom:15px;">
        <button class="tab-btn active" onclick="filterBookings('all', this)">সব</button>
        <button class="tab-btn" onclick="filterBookings('পেমেন্ট যাচাই চলছে', this)">পেন্ডিং</button>
        <button class="tab-btn" onclick="filterBookings('কনফার্মড', this)">কনফার্মড</button>
        <button class="tab-btn" onclick="filterBookings('ভিসা প্রসেসিং', this)">ভিসা প্রসেসিং</button>
        <button class="tab-btn" onclick="filterBookings('সম্পন্ন', this)">সম্পন্ন</button>
      </div>
      <div id="bookingsContainer"></div>
    </div>

    <!-- Tab: Hajj -->
    <div class="admin-tab-content" id="tab-hajj" style="display:none;">
      <div class="admin-action-bar">
        <h3>🕋 হজ প্যাকেজ ম্যানেজমেন্ট</h3>
        <button class="btn" onclick="openPackageForm('hajj')">➕ নতুন হজ প্যাকেজ</button>
      </div>
      <div id="hajjListContainer"></div>
    </div>

    <!-- Tab: Umrah -->
    <div class="admin-tab-content" id="tab-umrah" style="display:none;">
      <div class="admin-action-bar">
        <h3>🕌 ওমরাহ প্যাকেজ ম্যানেজমেন্ট</h3>
        <button class="btn" onclick="openPackageForm('umrah')">➕ নতুন ওমরাহ প্যাকেজ</button>
      </div>
      <div id="umrahListContainer"></div>
    </div>

    <!-- Tab: Tour -->
    <div class="admin-tab-content" id="tab-tour" style="display:none;">
      <div class="admin-action-bar">
        <h3>🌍 ট্যুরিস্ট প্যাকেজ ম্যানেজমেন্ট</h3>
        <button class="btn" onclick="openPackageForm('tour')">➕ নতুন ট্যুরিস্ট প্যাকেজ</button>
      </div>
      <div id="tourListContainer"></div>
    </div>

    <!-- Tab: Visa -->
    <div class="admin-tab-content" id="tab-visa" style="display:none;">
      <div class="admin-action-bar">
        <h3>🛂 ভিসা তথ্য ম্যানেজমেন্ট</h3>
        <button class="btn" onclick="openVisaForm()">➕ নতুন ভিসা তথ্য</button>
      </div>
      <div id="visaListContainer"></div>
    </div>

    <!-- Tab: Other (Air/Hotel) -->
    <div class="admin-tab-content" id="tab-other" style="display:none;">
      <div class="admin-action-bar">
        <h3>✈️ এয়ার টিকেট ম্যানেজমেন্ট</h3>
        <button class="btn" onclick="openPackageForm('air')">➕ নতুন এয়ার প্যাকেজ</button>
      </div>
      <div id="airListContainer" style="margin-bottom:30px;"></div>

      <div class="admin-action-bar">
        <h3>🏨 হোটেল প্যাকেজ ম্যানেজমেন্ট</h3>
        <button class="btn" onclick="openPackageForm('hotel')">➕ নতুন হোটেল প্যাকেজ</button>
      </div>
      <div id="hotelListContainer"></div>
    </div>

    <!-- Tab: Settings -->
    <div class="admin-tab-content" id="tab-settings" style="display:none;">
      <div class="admin-action-bar"><h3>⚙️ সাইট সেটিংস</h3></div>
      <div style="background:#fff; padding:25px; border-radius:12px; box-shadow:0 3px 10px rgba(0,0,0,0.06);">
        <div class="form-row">
          <div>
            <label style="font-weight:600;">সাইটের নাম</label>
            <input type="text" id="setSiteName" style="width:100%;padding:11px;border:1px solid #ccc;border-radius:8px;margin-top:6px;">
          </div>
          <div>
            <label style="font-weight:600;">ফোন নাম্বার</label>
            <input type="text" id="setPhone" style="width:100%;padding:11px;border:1px solid #ccc;border-radius:8px;margin-top:6px;">
          </div>
        </div>
        <div class="form-row" style="margin-top:15px;">
          <div>
            <label style="font-weight:600;">ইমেইল</label>
            <input type="text" id="setEmail" style="width:100%;padding:11px;border:1px solid #ccc;border-radius:8px;margin-top:6px;">
          </div>
          <div>
            <label style="font-weight:600;">ঠিকানা</label>
            <input type="text" id="setAddress" style="width:100%;padding:11px;border:1px solid #ccc;border-radius:8px;margin-top:6px;">
          </div>
        </div>

        <h4 style="margin-top:25px; color:#0a4d68;">💳 পেমেন্ট নাম্বার</h4>
        <div class="form-row" style="margin-top:10px;">
          <div>
            <label style="font-weight:600;">bKash</label>
            <input type="text" id="setBkash" style="width:100%;padding:11px;border:1px solid #ccc;border-radius:8px;margin-top:6px;">
          </div>
          <div>
            <label style="font-weight:600;">Nagad</label>
            <input type="text" id="setNagad" style="width:100%;padding:11px;border:1px solid #ccc;border-radius:8px;margin-top:6px;">
          </div>
        </div>
        <div class="form-row" style="margin-top:15px;">
          <div>
            <label style="font-weight:600;">Rocket</label>
            <input type="text" id="setRocket" style="width:100%;padding:11px;border:1px solid #ccc;border-radius:8px;margin-top:6px;">
          </div>
          <div>
            <label style="font-weight:600;">WhatsApp</label>
            <input type="text" id="setWhatsapp" style="width:100%;padding:11px;border:1px solid #ccc;border-radius:8px;margin-top:6px;">
          </div>
          </div>
<h4 style="margin-top:25px; color:#0a4d68;">🎨 হিরো সেকশন</h4>
        <label style="font-weight:600; margin-top:10px; display:block;">হিরো টাইটেল</label>
        <input type="text" id="setHeroTitle" style="width:100%;padding:11px;border:1px solid #ccc;border-radius:8px;margin-top:6px;">
        <label style="font-weight:600; margin-top:15px; display:block;">হিরো সাবটাইটেল</label>
        <input type="text" id="setHeroSubtitle" style="width:100%;padding:11px;border:1px solid #ccc;border-radius:8px;margin-top:6px;">

        <button class="btn" onclick="saveSettings()" style="margin-top:25px; width:100%;">💾 সেটিংস সেভ করুন</button>
      </div>
    </div>

  </div>
</div>

<!-- ============ PACKAGE FORM MODAL ============ -->
<div class="modal-overlay" id="packageModal">
  <div class="modal">
    <h3 id="packageModalTitle">➕ নতুন প্যাকেজ</h3>
    <p class="sub">প্যাকেজের তথ্য দিন</p>

    <label class="required">প্যাকেজের নাম</label>
    <input type="text" id="pkgName" placeholder="যেমন: থাইল্যান্ড ট্যুর">

    <label class="required">আইকন / ইমোজি</label>
    <input type="text" id="pkgIcon" placeholder="যেমন: 🇹🇭 বা 🕋" value="🌍">

    <label>সংক্ষিপ্ত বিবরণ</label>
    <input type="text" id="pkgDesc" placeholder="যেমন: ৫ দিন ৪ রাত">

    <label class="required">মূল্য (৳)</label>
    <input type="number" id="pkgPrice" placeholder="65000">

    <label>ফিচার (প্রতি লাইনে একটি)</label>
    <textarea id="pkgFeatures" rows="4" placeholder="হোটেল + ব্রেকফাস্ট&#10;এয়ারপোর্ট পিকআপ"></textarea>

    <label>ব্যাজ (ঐচ্ছিক)</label>
    <input type="text" id="pkgBadge" placeholder="যেমন: নতুন / হট ডিল">

    <input type="hidden" id="pkgType">
    <input type="hidden" id="pkgEditId">

    <button class="btn" onclick="savePackage()">💾 সেভ করুন</button>
    <button class="close-btn" onclick="closePackageModal()">বাতিল</button>
  </div>
</div>

<!-- ============ VISA FORM MODAL ============ -->
<div class="modal-overlay" id="visaModal">
  <div class="modal">
    <h3 id="visaModalTitle">➕ নতুন ভিসা তথ্য</h3>
    <label class="required">দেশের নাম</label>
    <input type="text" id="visaCountry" placeholder="থাইল্যান্ড">
    <label class="required">ফ্ল্যাগ</label>
    <input type="text" id="visaFlag" value="🌍">
    <label class="required">ভিসার ধরন</label>
    <input type="text" id="visaType" value="ট্যুরিস্ট">
    <label class="required">প্রসেসিং সময়</label>
    <input type="text" id="visaTime" placeholder="৫-৭ দিন">
    <label class="required">ফি (৳)</label>
    <input type="number" id="visaFee" placeholder="3500">
    <input type="hidden" id="visaEditId">
    <button class="btn" onclick="saveVisa()">💾 সেভ</button>
    <button class="close-btn" onclick="closeVisaModal()">বাতিল</button>
  </div>
</div>

<!-- ============ BOOKING DETAIL MODAL ============ -->
<div class="modal-overlay" id="detailModal">
  <div class="modal" style="max-width:650px;">
    <h3>📋 বুকিং বিস্তারিত</h3>
    <div id="detailContent" style="margin-top:20px;"></div>
    <button class="close-btn" onclick="closeDetail()">বন্ধ</button>
  </div>
</div>

<script>
/* =====================================================
   ADMIN CREDENTIALS
   ===================================================== */
const ADMIN_CREDENTIALS = { username: 'admin', password: 'admin123' };

/* =====================================================
   DEFAULT DATA
   ===================================================== */
const DEFAULT_SETTINGS = {
  siteName: 'SkyLine Tours & Travels',
  phone: '01623744440',
  email: 'info@skylinetours.com',
  address: '১২৩, ধানমন্ডি, ঢাকা-১২০৫, বাংলাদেশ',
  bkash: '01623744440',
  nagad: '01623744440',
  rocket: '01623744440',
  whatsapp: '8801623744440',
  heroTitle: 'আপনার স্বপ্নের ভ্রমণ শুরু হোক আমাদের সাথে',
  heroSubtitle: 'হজ, ওমরাহ, ট্যুর প্যাকেজ ও বিশ্বস্ত ভিসা প্রসেসিং সেবা — বাংলাদেশ থেকে সারা বিশ্বে'
};

const DEFAULT_HAJJ = [
  { id:'h1', icon:'🕋', name:'সরকারি হজ প্যাকেজ', desc:'সরকারি ব্যবস্থাপনা', price:580000, features:['সরকারি ব্যবস্থাপনা','মক্কা-মদিনায় হোটেল','৩ বেলা খাবার','জিয়ারত ট্যুর'], badge:'সরকারি' },
  { id:'h2', icon:'🕋', name:'প্রিমিয়াম হজ প্যাকেজ', desc:'৫ স্টার সেবা', price:850000, features:['৫ স্টার হোটেল','মক্কায় কাছে হোটেল','অভিজ্ঞ গাইড','VIP ট্রান্সপোর্ট'], badge:'প্রিমিয়াম' },
  { id:'h3', icon:'🕋', name:'ইকোনমি হজ প্যাকেজ', desc:'সাশ্রয়ী', price:650000, features:['সাশ্রয়ী মূল্য','সব মৌলিক সেবা','জিয়ারত ট্যুর'], badge:'' }
];

const DEFAULT_UMRAH = [
  { id:'u1', icon:'🕌', name:'ওমরাহ প্যাকেজ (১৫ দিন)', desc:'সারা বছর', price:145000, features:['ইকোনমি ক্লাস','৩ বেলা খাবার','হোটেল + ট্রান্সপোর্ট','জিয়ারত'], badge:'জনপ্রিয়' },
  { id:'u2', icon:'🕌', name:'রমজান ওমরাহ প্যাকেজ', desc:'রমজানে বিশেষ', price:175000, features:['রমজানে বিশেষ সেবা','ইফতার ও সেহরি','হোটেল + ফ্লাইট'], badge:'' },
  { id:'u3', icon:'🕌', name:'শর্ট ওমরাহ (৭ দিন)', desc:'কম সময়ে', price:105000, features:['কম সময়ে ওমরাহ','দ্রুত ভিসা','হোটেল + ট্রান্সপোর্ট'], badge:'' }
];

const DEFAULT_TOUR = [
  { id:'t1', icon:'🇹🇭', name:'থাইল্যান্ড ট্যুর', desc:'ব্যাংকক - পাটায়া | ৫ দিন ৪ রাত', price:65000, features:['৪ স্টার হোটেল','সিটি ট্যুর','ভিসা প্রসেসিং'], badge:'নতুন' },
  { id:'t2', icon:'🇲🇾', name:'মালয়েশিয়া ট্যুর', desc:'কুয়ালালামপুর | ৪ দিন ৩ রাত', price:58000, features:['৪ স্টার হোটেল','জেন্টিং ট্যুর','ভিসা প্রসেসিং'], badge:'' },
  { id:'t3', icon:'🇦🇪', name:'দুবাই ট্যুর', desc:'দুবাই - আবুধাবি | ৫ দিন ৪ রাত', price:105000, features:['ডেজার্ট সাফারি','বুর্জ খলিফা','ভিসা প্রসেসিং'], badge:'হট ডিল' },
  { id:'t4', icon:'🇸🇬', name:'সিঙ্গাপুর ট্যুর', desc:'সিঙ্গাপুর | ৪ দিন ৩ রাত', price:75000, features:['সেন্টোসা আইল্যান্ড','ইউনিভার্সাল স্টুডিও','ভিসা প্রসেসিং'], badge:'' },
  { id:'t5', icon:'🇹🇷', name:'তুরস্ক ট্যুর', desc:'ইস্তাম্বুল | ৭ দিন', price:135000, features:['হোটেল + ব্রেকফাস্ট','সিটি ট্যুর','ভিসা প্রসেসিং'], badge:'' }
];

const DEFAULT_VISA = [
  { id:'v1', flag:'🇹🇭', country:'থাইল্যান্ড', type:'ট্যুরিস্ট', time:'৫-৭ দিন', fee:3500 },
  { id:'v2', flag:'🇲🇾', country:'মালয়েশিয়া', type:'ট্যুরিস্ট', time:'৭-১০ দিন', fee:4000 },
  { id:'v3', flag:'🇦🇪', country:'দুবাই', type:'ট্যুরিস্ট', time:'৩-৫ দিন', fee:7000 },
  { id:'v4', flag:'🇸🇦', country:'সৌদি আরব', type:'ওমরাহ', time:'৭-১০ দিন', fee:8000 },
  { id:'v5', flag:'🇸🇬', country:'সিঙ্গাপুর', type:'ট্যুরিস্ট', time:'৫-৭ দিন', fee:3000 },
  { id:'v6', flag:'🇮🇳', country:'ভারত', type:'ট্যুরিস্ট', time:'১০-১৫ দিন', fee:2500 },
  { id:'v7', flag:'🇨🇳', country:'চীন', type:'ট্যুরিস্ট', time:'৭-১০ দিন', fee:5000 },
  { id:'v8', flag:'🇹🇷', country:'তুরস্ক', type:'ট্যুরিস্ট', time:'১০-১৫ দিন', fee:6000 }
];

const DEFAULT_AIR = [
  { id:'a1', icon:'🇧🇩', name:'অভ্যন্তরীণ ফ্লাইট', desc:'ঢাকা - কক্সবাজার', price:4500, features:['ঢাকা - কক্সবাজার','ঢাকা - সিলেট','ঢাকা - চট্টগ্রাম'], badge:'' },
  { id:'a2', icon:'🌏', name:'আন্তর্জাতিক ফ্লাইট', desc:'বাংলাদেশ থেকে বিশ্ব', price:40000, features:['বাংলাদেশ - থাইল্যান্ড','বাংলাদেশ - দুবাই','বাংলাদেশ - মালয়েশিয়া'], badge:'' }
];

const DEFAULT_HOTEL = [
  { id:'ho1', icon:'💎', name:'৫ স্টার হোটেল', desc:'বিলাসবহুল', price:8000, features:['বিলাসবহুল রুম','ব্রেকফাস্ট','এয়ারপোর্ট পিকআপ'], badge:'' },
  { id:'ho2', icon:'🏨', name:'৪ স্টার হোটেল', desc:'ভালো সেবা', price:5000, features:['ভালো রুম','ব্রেকফাস্ট','সুবিধাজনক'], badge:'' },
  { id:'ho3', icon:'🏠', name:'বাজেট হোটেল', desc:'সাশ্রয়ী', price:2500, features:['সাশ্রয়ী মূল্য','পরিষ্কার রুম','মৌলিক সুবিধা'], badge:'' }
];

const DEFAULT_REVIEWS = [
  { name:'মোহাম্মদ রফিকুল ইসলাম', location:'ঢাকা', stars:5, text:'আলহামদুলিল্লাহ! SkyLine-এর মাধ্যমে হজ পালন করেছি। সার্ভিস অসাধারণ।' },
  { name:'ফারহানা আক্তার', location:'চট্টগ্রাম', stars:5, text:'থাইল্যান্ড ট্যুর বুক করেছিলাম। সব নিখুঁত ছিল।' },
  { name:'আব্দুল করিম', location:'সিলেট', stars:5, text:'দুবাই ভিসা পেয়েছি মাত্র ৪ দিনে। ধন্যবাদ।' }
];

/* =====================================================
   LOAD DATA
   ===================================================== */
let settings = JSON.parse(localStorage.getItem('skySettings') || 'null') || DEFAULT_SETTINGS;
let orders = JSON.parse(localStorage.getItem('skyOrders') || '{}');
let hajjPkgs = JSON.parse(localStorage.getItem('skyHajj') || 'null') || DEFAULT_HAJJ;
let umrahPkgs = JSON.parse(localStorage.getItem('skyUmrah') || 'null') || DEFAULT_UMRAH;
let tourPkgs = JSON.parse(localStorage.getItem('skyTour') || 'null') || DEFAULT_TOUR;
let visaList = JSON.parse(localStorage.getItem('skyVisa') || 'null') || DEFAULT_VISA;
let airPkgs = JSON.parse(localStorage.getItem('skyAir') || 'null') || DEFAULT_AIR;
let hotelPkgs = JSON.parse(localStorage.getItem('skyHotel') || 'null') || DEFAULT_HOTEL;

// Files store (base64) — for admin viewing uploaded docs
let uploadedFiles = JSON.parse(localStorage.getItem('skyUploadedFiles') || '{}');

function saveAll() {
  localStorage.setItem('skySettings', JSON.stringify(settings));
  localStorage.setItem('skyOrders', JSON.stringify(orders));
  localStorage.setItem('skyHajj', JSON.stringify(hajjPkgs));
  localStorage.setItem('skyUmrah', JSON.stringify(umrahPkgs));
  localStorage.setItem('skyTour', JSON.stringify(tourPkgs));
  localStorage.setItem('skyVisa', JSON.stringify(visaList));
  localStorage.setItem('skyAir', JSON.stringify(airPkgs));
  localStorage.setItem('skyHotel', JSON.stringify(hotelPkgs));
}

/* =====================================================
   APPLY SETTINGS TO PAGE
   ===================================================== */
function applySettings() {
  document.title = settings.siteName + ' | হজ, ওমরাহ, ট্যুর ও ভিসা';
  document.getElementById('siteName').innerHTML = settings.siteName.replace('Tours', '<span>Tours</span>');
  document.getElementById('topPhone').textContent = '+' + settings.phone;
  document.getElementById('topEmail').textContent = settings.email;
  document.getElementById('contactPhone').textContent = '+' + settings.phone;
  document.getElementById('contactEmail').textContent = settings.email;
  document.getElementById('contactAddress').textContent = settings.address;
  document.getElementById('footerPhone').textContent = '+' + settings.phone;
  document.getElementById('footerEmail').textContent = settings.email;
  document.getElementById('heroTitle').textContent = settings.heroTitle;
  document.getElementById('heroSubtitle').textContent = settings.heroSubtitle;
  document.getElementById('waFloat').href = 'https://wa.me/' + settings.whatsapp;
  document.getElementById('bkashNum').textContent = settings.bkash;
  document.getElementById('nagadNum').textContent = settings.nagad;
  document.getElementById('rocketNum').textContent = settings.rocket;
}
/* =====================================================
   RENDER PUBLIC PACKAGES
   ===================================================== */
function renderPublicCard(p, type) {
  const featuresHtml = (p.features || []).map(f => `<li>✅ ${f}</li>`).join('');
  const badgeHtml = p.badge ? `<span class="badge ${p.badge === 'নতুন' ? 'badge-new' : ''}">${p.badge}</span>` : '';
  return `<div class="card">
    ${badgeHtml}
    <h4>${p.icon || '🌍'} ${p.name}</h4>
    <p style="font-size:13px; color:#666;">${p.desc || ''}</p>
    <ul>${featuresHtml}</ul>
    <div class="price">৳ ${Number(p.price).toLocaleString('bn-BD')}</div>
    <button class="btn" onclick='openBookingModal(${JSON.stringify(p.name)}, ${p.price})'>📝 বুক করুন</button>
  </div>`;
}

function renderPublicPackages() {
  document.getElementById('hajjGrid').innerHTML = hajjPkgs.map(p => renderPublicCard(p, 'hajj')).join('') || '<p style="text-align:center; color:#888;">কোন প্যাকেজ নেই</p>';
  document.getElementById('umrahGrid').innerHTML = umrahPkgs.map(p => renderPublicCard(p, 'umrah')).join('') || '<p style="text-align:center; color:#888;">কোন প্যাকেজ নেই</p>';
  document.getElementById('tourGrid').innerHTML = tourPkgs.map(p => renderPublicCard(p, 'tour')).join('') || '<p style="text-align:center; color:#888;">কোন প্যাকেজ নেই</p>';
  document.getElementById('airGrid').innerHTML = airPkgs.map(p => renderPublicCard(p, 'air')).join('') || '<p style="text-align:center; color:#888;">কোন প্যাকেজ নেই</p>';
  document.getElementById('hotelGrid').innerHTML = hotelPkgs.map(p => renderPublicCard(p, 'hotel')).join('') || '<p style="text-align:center; color:#888;">কোন প্যাকেজ নেই</p>';

  // Reviews
  document.getElementById('reviewsGrid').innerHTML = DEFAULT_REVIEWS.map(r => `
    <div class="review-card">
      <div class="stars">${'★'.repeat(r.stars)}${'☆'.repeat(5 - r.stars)}</div>
      <p>"${r.text}"</p>
      <div class="reviewer">— ${r.name}, ${r.location}</div>
    </div>
  `).join('');

  // Visa table
  document.getElementById('visaTableBody').innerHTML = visaList.map(v => `
    <tr>
      <td>${v.flag} ${v.country}</td>
      <td>${v.type}</td>
      <td>${v.time}</td>
      <td>৳ ${Number(v.fee).toLocaleString('bn-BD')}</td>
      <td><button class="btn" style="padding:5px 12px;font-size:12px" onclick='openBookingModal("${v.country} ভিসা", ${v.fee})'>আবেদন</button></td>
    </tr>
  `).join('');
}

/* =====================================================
   SERVICE TOGGLE
   ===================================================== */
function toggleService(card) {
  const targetId = card.getAttribute('data-target');
  const targetPanel = document.getElementById(targetId);
  const allCards = document.querySelectorAll('.service-card');
  const allPanels = document.querySelectorAll('.expand-panel');

  if (targetPanel.classList.contains('open')) {
    targetPanel.classList.remove('open');
    card.classList.remove('active');
    return;
  }
  allCards.forEach(c => c.classList.remove('active'));
  allPanels.forEach(p => p.classList.remove('open'));
  card.classList.add('active');
  targetPanel.classList.add('open');
  setTimeout(() => {
    targetPanel.scrollIntoView({ behavior: 'smooth', block: 'start' });
  }, 200);
}

/* =====================================================
   BOOKING MODAL (only shows when user clicks "বুক করুন")
   ===================================================== */
function openBookingModal(pkgName, pkgPrice) {
  document.getElementById('selectedPkgName').value = pkgName;
  document.getElementById('selectedPkgPrice').value = pkgPrice;
  document.getElementById('bookingPkgName').innerHTML = `<b>${pkgName}</b> — ৳ ${Number(pkgPrice).toLocaleString('bn-BD')}`;
  document.getElementById('bookingModal').classList.add('show');
  document.getElementById('bookingForm').reset();
  document.getElementById('selectedPkgName').value = pkgName;
  document.getElementById('selectedPkgPrice').value = pkgPrice;
}

function closeBookingModal() {
  document.getElementById('bookingModal').classList.remove('show');
}

function submitBooking(e) {
  e.preventDefault();

  const orderId = 'SKY-' + Date.now().toString().slice(-8);
  const fileInput = document.getElementById('paymentSS');
  const file = fileInput.files[0];

  const order = {
    id: orderId,
    name: document.getElementById('fullName').value,
    phone: document.getElementById('phone').value,
    email: document.getElementById('email').value,
    nid: document.getElementById('nid').value,
    passport: document.getElementById('passport').value,
    package: document.getElementById('selectedPkgName').value,
    price: document.getElementById('selectedPkgPrice').value,
    persons: document.getElementById('persons').value,
    payment: document.getElementById('paymentMethod').value,
    screenshot: file ? file.name : 'N/A',
    note: document.getElementById('note').value,
    status: 'পেমেন্ট যাচাই চলছে',
    progress: 30,
    date: new Date().toLocaleString('bn-BD')
  };

  // Read file as base64 to store (so admin can view)
  if (file) {
    const reader = new FileReader();
    reader.onload = function(ev) {
      uploadedFiles[orderId] = {
        fileName: file.name,
        fileType: file.type,
        data: ev.target.result
      };
      localStorage.setItem('skyUploadedFiles', JSON.stringify(uploadedFiles));
      orders[orderId] = order;
      saveAll();
      finalizeBooking(orderId);
    };
    reader.readAsDataURL(file);
  } else {
    orders[orderId] = order;
    saveAll();
    finalizeBooking(orderId);
  }
}

function finalizeBooking(orderId) {
  alert(`✅ বুকিং সফল!\n\nআপনার অর্ডার আইডি: ${orderId}\n\nএই আইডি সংরক্ষণ করুন।\nশীঘ্রই আমাদের টিম যোগাযোগ করবে।`);
  closeBookingModal();
  document.getElementById('trackId').value = orderId;
  document.getElementById('tracker').scrollIntoView({ behavior: 'smooth' });
}

/* =====================================================
   TRACKER
   ===================================================== */
function trackOrder() {
  const id = document.getElementById('trackId').value.trim().toUpperCase();
  const res = document.getElementById('trackerResult');
  const order = orders[id];

  if (!order) {
    res.style.display = 'none';
    alert('❌ অর্ডার আইডি খুঁজে পাওয়া যায়নি।');
    return;
  }
  document.getElementById('resId').textContent = order.id;
  document.getElementById('resName').textContent = order.name;
  document.getElementById('resPkg').textContent = order.package;
  document.getElementById('resStatus').textContent = order.status;
  document.getElementById('resProgress').style.width = (order.progress || 30) + '%';
  document.getElementById('resDate').textContent = order.date;
  res.style.display = 'block';
}

/* =====================================================
   COOKIE
   ===================================================== */
window.addEventListener('load', () => {
  if (!localStorage.getItem('cookieConsent')) {
    document.getElementById('cookieBanner').style.display = 'flex';
  }
  applySettings();
  renderPublicPackages();
});
function acceptCookies() {
  localStorage.setItem('cookieConsent', 'all');
  document.getElementById('cookieBanner').style.display = 'none';
}
function declineCookies() {
  localStorage.setItem('cookieConsent', 'essential');
  document.getElementById('cookieBanner').style.display = 'none';
}

/* =====================================================
   ADMIN LOGIN
   ===================================================== */
function openAdminLogin(e) {
  if (e) e.preventDefault();
  if (sessionStorage.getItem('adminLoggedIn') === 'true') {
    openAdminPanel(); return;
  }
  document.getElementById('adminLoginModal').classList.add('show');
  document.getElementById('adminUser').value = '';
  document.getElementById('adminPass').value = '';
  document.getElementById('loginError').style.display = 'none';
}
function closeAdminLogin() { document.getElementById('adminLoginModal').classList.remove('show'); }

function adminLogin() {
  const user = document.getElementById('adminUser').value.trim();
  const pass = document.getElementById('adminPass').value;
  if (user === ADMIN_CREDENTIALS.username && pass === ADMIN_CREDENTIALS.password) {
    sessionStorage.setItem('adminLoggedIn', 'true');
    sessionStorage.setItem('adminName', user);
    closeAdminLogin();
    openAdminPanel();
  } else {
    document.getElementById('loginError').style.display = 'block';
    setTimeout(() => { document.getElementById('loginError').style.display = 'none'; }, 3000);
  }
}
function adminLogout() {
  sessionStorage.removeItem('adminLoggedIn');
  document.getElementById('adminPanel').classList.remove('show');
  document.body.style.overflow = 'auto';
}
function openAdminPanel() {
  document.getElementById('adminPanel').classList.add('show');
  document.body.style.overflow = 'hidden';
  document.getElementById('adminName').textContent = sessionStorage.getItem('adminName') || 'Admin';
  switchAdminTab('bookings', document.querySelector('.admin-tabs > .tab-btn'));
    }
/* =====================================================
   ADMIN TABS
   ===================================================== */
function switchAdminTab(tab, btn) {
  document.querySelectorAll('.admin-tabs > .tab-btn').forEach(t => t.classList.remove('active'));
  if (btn && btn.parentElement.classList.contains('admin-tabs')) btn.classList.add('active');
  document.querySelectorAll('.admin-tab-content').forEach(c => c.style.display = 'none');
  document.getElementById('tab-' + tab).style.display = 'block';

  if (tab === 'bookings') { renderBookings('all'); updateStats(); }
  if (tab === 'hajj') renderPackageList('hajj');
  if (tab === 'umrah') renderPackageList('umrah');
  if (tab === 'tour') renderPackageList('tour');
  if (tab === 'visa') renderVisaList();
  if (tab === 'other') { renderPackageList('air'); renderPackageList('hotel'); }
  if (tab === 'settings') loadSettingsForm();
}

/* =====================================================
   BOOKINGS MANAGEMENT
   ===================================================== */
let currentFilter = 'all';
function updateStats() {
  const all = Object.values(orders);
  document.getElementById('statTotal').textContent = all.length;
  document.getElementById('statPending').textContent = all.filter(o => o.status === 'পেমেন্ট যাচাই চলছে').length;
  document.getElementById('statConfirmed').textContent = all.filter(o => o.status === 'কনফার্মড').length;
  document.getElementById('statCompleted').textContent = all.filter(o => o.status === 'সম্পন্ন').length;
}
function filterBookings(filter, btn) {
  currentFilter = filter;
  document.querySelectorAll('#tab-bookings .tab-btn').forEach(b => b.classList.remove('active'));
  if (btn) btn.classList.add('active');
  renderBookings(filter);
}
function renderBookings(filter) {
  const container = document.getElementById('bookingsContainer');
  let list = Object.values(orders);
  if (filter !== 'all') list = list.filter(o => o.status === filter);
  list.sort((a, b) => b.id.localeCompare(a.id));

  if (list.length === 0) {
    container.innerHTML = '<div class="empty-msg">📭 কোন বুকিং নেই</div>';
    updateStats(); return;
  }
  let html = `<table class="admin-table"><thead><tr>
    <th>অর্ডার আইডি</th><th>নাম</th><th>মোবাইল</th>
    <th>প্যাকেজ</th><th>পেমেন্ট</th><th>স্ট্যাটাস</th><th>অ্যাকশন</th>
  </tr></thead><tbody>`;
  list.forEach(o => {
    const statusOptions = ['পেমেন্ট যাচাই চলছে','কনফার্মড','ভিসা প্রসেসিং','সম্পন্ন','বাতিল'];
    let statusSelect = `<select class="status-select" onchange="changeStatus('${o.id}', this.value)">`;
    statusOptions.forEach(s => {
      statusSelect += `<option value="${s}" ${s === o.status ? 'selected' : ''}>${s}</option>`;
    });
    statusSelect += `</select>`;
    html += `<tr>
      <td><b>${o.id}</b></td><td>${o.name}</td><td>${o.phone}</td>
      <td>${o.package}</td><td>${o.payment}</td><td>${statusSelect}</td>
      <td>
        <button class="action-btn btn-view" onclick="viewBooking('${o.id}')">দেখুন</button>
        <button class="action-btn btn-del" onclick="deleteBooking('${o.id}')">ডিলিট</button>
      </td>
    </tr>`;
  });
  html += '</tbody></table>';
  container.innerHTML = html;
  updateStats();
}
function changeStatus(orderId, newStatus) {
  if (!orders[orderId]) return;
  orders[orderId].status = newStatus;
  const progressMap = { 'পেমেন্ট যাচাই চলছে':30, 'কনফার্মড':55, 'ভিসা প্রসেসিং':75, 'সম্পন্ন':100, 'বাতিল':0 };
  orders[orderId].progress = progressMap[newStatus] || 30;
  orders[orderId].date = new Date().toLocaleString('bn-BD');
  saveAll();
  renderBookings(currentFilter);
}
function deleteBooking(orderId) {
  if (!confirm(`"${orderId}" ডিলিট করবেন?`)) return;
  delete orders[orderId];
  delete uploadedFiles[orderId];
  localStorage.setItem('skyUploadedFiles', JSON.stringify(uploadedFiles));
  saveAll();
  renderBookings(currentFilter);
}
function viewBooking(orderId) {
  const o = orders[orderId];
  if (!o) return;

  // Build document preview
  let docHtml = '<p style="color:#888;">📎 কোন ডকুমেন্ট আপলোড হয়নি</p>';
  const f = uploadedFiles[orderId];
  if (f) {
    if (f.fileType.startsWith('image/')) {
      docHtml = `<img src="${f.data}" class="doc-preview" alt="Payment Screenshot"><br>
        <p style="font-size:12px; color:#666; margin-top:6px;">📎 ${f.fileName}</p>`;
    } else if (f.fileType === 'application/pdf') {
      docHtml = `<a href="${f.data}" download="${f.fileName}" class="btn" style="display:inline-block;margin-top:10px;">📄 ${f.fileName} — ডাউনলোড করুন</a>`;
    } else {
      docHtml = `<a href="${f.data}" download="${f.fileName}" class="btn" style="display:inline-block;margin-top:10px;">📎 ${f.fileName} — ডাউনলোড</a>`;
    }
  }

  const html = `
    <div class="detail-row"><strong>অর্ডার আইডি:</strong><span>${o.id}</span></div>
    <div class="detail-row"><strong>নাম:</strong><span>${o.name}</span></div>
    <div class="detail-row"><strong>মোবাইল:</strong><span>${o.phone}</span></div>
    <div class="detail-row"><strong>ইমেইল:</strong><span>${o.email || 'N/A'}</span></div>
    <div class="detail-row"><strong>NID:</strong><span>${o.nid}</span></div>
    <div class="detail-row"><strong>পাসপোর্ট:</strong><span>${o.passport}</span></div>
    <div class="detail-row"><strong>প্যাকেজ:</strong><span>${o.package}</span></div>
    <div class="detail-row"><strong>মূল্য:</strong><span>৳ ${o.price}</span></div>
    <div class="detail-row"><strong>যাত্রী:</strong><span>${o.persons} জন</span></div>
    <div class="detail-row"><strong>পেমেন্ট:</strong><span>${o.payment}</span></div>
    <div class="detail-row"><strong>নোট:</strong><span>${o.note || 'N/A'}</span></div>
    <div class="detail-row"><strong>স্ট্যাটাস:</strong><span>${o.status}</span></div>
    <div class="detail-row"><strong>তারিখ:</strong><span>${o.date}</span></div>
    <h4 style="margin-top:20px; color:#0a4d68;">📎 আপলোড করা ডকুমেন্ট:</h4>
    ${docHtml}
  `;
  document.getElementById('detailContent').innerHTML = html;
  document.getElementById('detailModal').classList.add('show');
}
function closeDetail() { document.getElementById('detailModal').classList.remove('show'); }

/* =====================================================
   PACKAGE MANAGEMENT
   ===================================================== */
function getPkgArray(type) {
  if (type === 'hajj') return hajjPkgs;
  if (type === 'umrah') return umrahPkgs;
  if (type === 'tour') return tourPkgs;
  if (type === 'air') return airPkgs;
  if (type === 'hotel') return hotelPkgs;
  return [];
}
function setPkgArray(type, arr) {
  if (type === 'hajj') hajjPkgs = arr;
  if (type === 'umrah') umrahPkgs = arr;
  if (type === 'tour') tourPkgs = arr;
  if (type === 'air') airPkgs = arr;
  if (type === 'hotel') hotelPkgs = arr;
}

function renderPackageList(type) {
  const container = document.getElementById(type + 'ListContainer');
  const list = getPkgArray(type);

  if (list.length === 0) {
    container.innerHTML = '<div class="empty-msg">📭 কোন প্যাকেজ নেই। উপরে "➕ নতুন" বাটনে ক্লিক করুন।</div>';
    return;
  }
  let html = '<div class="admin-pkg-grid">';
  list.forEach(p => {
    const featuresHtml = (p.features || []).map(f => `<li>✅ ${f}</li>`).join('');
    const badgeHtml = p.badge ? `<span class="pkg-badge">${p.badge}</span>` : '';
    html += `<div class="admin-pkg-card">
      ${badgeHtml}
      <span class="pkg-icon">${p.icon || '🌍'}</span>
      <h4>${p.name}</h4>
      <div class="desc">${p.desc || ''}</div>
      <div class="price-tag">৳ ${Number(p.price).toLocaleString('bn-BD')}</div>
      <ul>${featuresHtml}</ul>
      <div class="actions">
        <button class="btn-edit-pkg" onclick="editPackage('${type}', '${p.id}')">✏️ এডিট</button>
        <button class="btn-del-pkg" onclick="deletePackage('${type}', '${p.id}')">🗑️ ডিলিট</button>
      </div>
    </div>`;
  });
  html += '</div>';
  container.innerHTML = html;
}

function openPackageForm(type, editId = null) {
  document.getElementById('packageModal').classList.add('show');
  document.getElementById('pkgType').value = type;
  document.getElementById('pkgEditId').value = editId || '';

  const titles = { hajj:'হজ প্যাকেজ', umrah:'ওমরাহ প্যাকেজ', tour:'ট্যুরিস্ট প্যাকেজ', air:'এয়ার প্যাকেজ', hotel:'হোটেল প্যাকেজ' };

  if (editId) {
    const list = getPkgArray(type);
    const p = list.find(x => x.id === editId);
    if (!p) return;
    document.getElementById('packageModalTitle').textContent = '✏️ এডিট: ' + p.name;
    document.getElementById('pkgName').value = p.name;
    document.getElementById('pkgIcon').value = p.icon || '🌍';
    document.getElementById('pkgDesc').value = p.desc || '';
    document.getElementById('pkgPrice').value = p.price;
    document.getElementById('pkgFeatures').value = (p.features || []).join('\n');
    document.getElementById('pkgBadge').value = p.badge || '';
  } else {
    document.getElementById('packageModalTitle').textContent = '➕ নতুন ' + titles[type];
    document.getElementById('pkgName').value = '';
    document.getElementById('pkgIcon').value = type === 'hajj' ? '🕋' : type === 'umrah' ? '🕌' : type === 'tour' ? '🌍' : type === 'air' ? '✈️' : '🏨';
    document.getElementById('pkgDesc').value = '';
    document.getElementById('pkgPrice').value = '';
    document.getElementById('pkgFeatures').value = '';
    document.getElementById('pkgBadge').value = '';
  }
}
function closePackageModal() { document.getElementById('packageModal').classList.remove('show'); }

function savePackage() {
  const type = document.getElementById('pkgType').value;
  const editId = document.getElementById('pkgEditId').value;
  const name = document.getElementById('pkgName').value.trim();
  const icon = document.getElementById('pkgIcon').value.trim() || '🌍';
  const desc = document.getElementById('pkgDesc').value.trim();
  const price = document.getElementById('pkgPrice').value.trim();
  const featuresRaw = document.getElementById('pkgFeatures').value.trim();
  const badge = document.getElementById('pkgBadge').value.trim();

  if (!name || !price) { alert('❌ নাম এবং মূল্য অবশ্যই দিন!'); return; }

  const features = featuresRaw ? featuresRaw.split('\n').map(f => f.trim()).filter(f => f) : [];
  const list = getPkgArray(type);

  if (editId) {
    const idx = list.findIndex(x => x.id === editId);
    if (idx > -1) list[idx] = { ...list[idx], name, icon, desc, price:Number(price), features, badge };
    alert('✅ প্যাকেজ আপডেট হয়েছে!');
  } else {
    const newId = type.charAt(0) + Date.now();
    list.push({ id:newId, name, icon, desc, price:Number(price), features, badge });
    alert('✅ নতুন প্যাকেজ যোগ হয়েছে!');
  }

  setPkgArray(type, list);
  saveAll();
  closePackageModal();
  renderPackageList(type);
  renderPublicPackages();
}

function editPackage(type, id) { openPackageForm(type, id); }

function deletePackage(type, id) {
  if (!confirm('এই প্যাকেজ ডিলিট করবেন?')) return;
  let list = getPkgArray(type).filter(x => x.id !== id);
  setPkgArray(type, list);
  saveAll();
  renderPackageList(type);
  renderPublicPackages();
}

/* =====================================================
   VISA MANAGEMENT
   ===================================================== */
function renderVisaList() {
  const container = document.getElementById('visaListContainer');
  if (visaList.length === 0) {
    container.innerHTML = '<div class="empty-msg">📭 কোন ভিসা তথ্য নেই।</div>';
    return;
  }
  let html = `<table class="admin-table"><thead><tr>
    <th>ফ্ল্যাগ</th><th>দেশ</th><th>ধরন</th><th>সময়</th><th>ফি</th><th>অ্যাকশন</th>
  </tr></thead><tbody>`;
  visaList.forEach(v => {
    html += `<tr>
      <td style="font-size:22px;">${v.flag}</td>
      <td><b>${v.country}</b></td><td>${v.type}</td><td>${v.time}</td>
      <td>৳ ${Number(v.fee).toLocaleString('bn-BD')}</td>
      <td>
        <button class="action-btn btn-view" onclick="editVisa('${v.id}')">✏️ এডিট</button>
        <button class="action-btn btn-del" onclick="deleteVisa('${v.id}')">🗑️ ডিলিট</button>
      </td>
    </tr>`;
  });
  html += '</tbody></table>';
  container.innerHTML = html;
}
function openVisaForm(editId = null) {
  document.getElementById('visaModal').classList.add('show');
  document.getElementById('visaEditId').value = editId || '';
  if (editId) {
    const v = visaList.find(x => x.id === editId);
    if (!v) return;
    document.getElementById('visaModalTitle').textContent = '✏️ এডিট: ' + v.country;
    document.getElementById('visaCountry').value = v.country;
    document.getElementById('visaFlag').value = v.flag;
    document.getElementById('visaType').value = v.type;
    document.getElementById('visaTime').value = v.time;
    document.getElementById('visaFee').value = v.fee;
  } else {
    document.getElementById('visaModalTitle').textContent = '➕ নতুন ভিসা তথ্য';
    document.getElementById('visaCountry').value = '';
    document.getElementById('visaFlag').value = '🌍';
    document.getElementById('visaType').value = 'ট্যুরিস্ট';
    document.getElementById('visaTime').value = '';
    document.getElementById('visaFee').value = '';
  }
}
function closeVisaModal() { document.getElementById('visaModal').classList.remove('show'); }
function saveVisa() {
  const editId = document.getElementById('visaEditId').value;
  const country = document.getElementById('visaCountry').value.trim();
  const flag = document.getElementById('visaFlag').value.trim() || '🌍';
  const type = document.getElementById('visaType').value.trim();
  const time = document.getElementById('visaTime').value.trim();
  const fee = document.getElementById('visaFee').value.trim();
  if (!country || !type || !time || !fee) { alert('❌ সব ঘর পূরণ করুন!'); return; }
  if (editId) {
    const idx = visaList.findIndex(x => x.id === editId);
    if (idx > -1) visaList[idx] = { ...visaList[idx], country, flag, type, time, fee:Number(fee) };
    alert('✅ আপডেট হয়েছে!');
  } else {
    visaList.push({ id:'v' + Date.now(), country, flag, type, time, fee:Number(fee) });
    alert('✅ নতুন ভিসা তথ্য যোগ হয়েছে!');
  }
  saveAll();
  closeVisaModal();
  renderVisaList();
  renderPublicPackages();
}
function editVisa(id) { openVisaForm(id); }
function deleteVisa(id) {
  if (!confirm('ডিলিট করবেন?')) return;
  visaList = visaList.filter(x => x.id !== id);
  saveAll();
  renderVisaList();
  renderPublicPackages();
    }
/* =====================================================
   SETTINGS
   ===================================================== */
function loadSettingsForm() {
  document.getElementById('setSiteName').value = settings.siteName;
  document.getElementById('setPhone').value = settings.phone;
  document.getElementById('setEmail').value = settings.email;
  document.getElementById('setAddress').value = settings.address;
  document.getElementById('setBkash').value = settings.bkash;
  document.getElementById('setNagad').value = settings.nagad;
  document.getElementById('setRocket').value = settings.rocket;
  document.getElementById('setWhatsapp').value = settings.whatsapp;
  document.getElementById('setHeroTitle').value = settings.heroTitle;
  document.getElementById('setHeroSubtitle').value = settings.heroSubtitle;
}
function saveSettings() {
  settings.siteName = document.getElementById('setSiteName').value.trim();
  settings.phone = document.getElementById('setPhone').value.trim();
  settings.email = document.getElementById('setEmail').value.trim();
  settings.address = document.getElementById('setAddress').value.trim();
  settings.bkash = document.getElementById('setBkash').value.trim();
  settings.nagad = document.getElementById('setNagad').value.trim();
  settings.rocket = document.getElementById('setRocket').value.trim();
  settings.whatsapp = document.getElementById('setWhatsapp').value.trim();
  settings.heroTitle = document.getElementById('setHeroTitle').value.trim();
  settings.heroSubtitle = document.getElementById('setHeroSubtitle').value.trim();
  saveAll();
  applySettings();
  alert('✅ সেটিংস সেভ হয়েছে!');
}

/* =====================================================
   KEYBOARD
   ===================================================== */
document.addEventListener('keydown', (e) => {
  if (e.key === 'Escape') {
    closeAdminLogin();
    closeDetail();
    closePackageModal();
    closeVisaModal();
    closeBookingModal();
  }
});
document.addEventListener('DOMContentLoaded', () => {
  const passField = document.getElementById('adminPass');
  if (passField) {
    passField.addEventListener('keypress', (e) => {
      if (e.key === 'Enter') adminLogin();
    });
  }
});
</script>

</body>
</html>
