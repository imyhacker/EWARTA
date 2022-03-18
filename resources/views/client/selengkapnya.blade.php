<x-client.head />
<body>

<x-client.nav :depan1="$depan1"/>
  <!-- ======= Hero Section ======= -->
  <x-client.hero2 :berita="$berita" />

  <main id="main">

    <!-- ======= What We Do Section ======= -->
    <x-client.baca :berita="$berita" :tag="$tag" :bb="$bb" :bac="$bac" :high="$high"/>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
<x-client.footer />
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
<x-client.script />