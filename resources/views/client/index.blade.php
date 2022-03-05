<x-client.head />
<body>

<x-client.nav :depan1="$depan1"/>
  <!-- ======= Hero Section ======= -->
  <x-client.hero :depan1="$depan1"/>

  <main id="main">

    <!-- ======= Counts Section ======= -->
<x-client.count />
<x-client.about />

    <!-- ======= Services Section ======= -->
<x-client.service :info="$info" />
    <!-- ======= Portfolio Section ======= -->
   <x-client.port :berita="$berita"/>
    
 <x-client.contact :depan2="$depan2"/>
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
<x-client.footer />
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
<x-client.script />