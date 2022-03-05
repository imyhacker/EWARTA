<x-client.head />
<body>

<x-client.nav :depan1="$depan1"/>
  <!-- ======= Hero Section ======= -->
  <x-client.hero :depan1="$depan1"/>

  <main id="main">

    <!-- ======= Counts Section ======= 'total_berita', 'total_berita_hari', 'total_info', 'total_info_hari'  -->
<x-client.count :tb="$tb" :tbh="$tbh" :ti="$ti" :tih="$tih"/>
<x-client.about :t="$t"/>

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
<!-- Modal -->
