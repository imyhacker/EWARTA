<x-client.head />
<body>

<x-client.nav />
  <!-- ======= Hero Section ======= -->
  <x-client.hero />

  <main id="main">

    <!-- ======= What We Do Section ======= -->
    <x-client.wh />

    <!-- ======= About Section ======= -->
  <x-client.about />
    <!-- ======= Skills Section ======= -->
 <x-client.skill />
    <!-- ======= Counts Section ======= -->
<x-client.count />
    <!-- ======= Services Section ======= -->
<x-client.service />
    <!-- ======= Portfolio Section ======= -->
   <x-client.port :berita="$berita"/>
    <!-- ======= Testimonials Section ======= -->
<x-client.testi />
    <!-- ======= Team Section ======= -->
 <x-client.team />
    <!-- ======= Contact Section ======= -->
 <x-client.contact />
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
<x-client.footer />
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
<x-client.script />