<x-client.head />
<body>

<x-client.nav :depan1="$depan1"/>
  <!-- ======= Hero Section ======= -->
  <x-client.tentang.tentang :tentang="$tentang" :depan1="$depan1"/>

  <main id="main">

    <!-- ======= What We Do Section ======= -->
    <x-client.tentang.isi :tentang="$tentang"/>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
<x-client.footer :depan1="$depan1"/>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
<x-client.script />