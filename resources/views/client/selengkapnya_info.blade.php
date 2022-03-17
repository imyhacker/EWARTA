<x-client.head />
<body>

<x-client.nav :depan1="$depan1"/>
  <!-- ======= Hero Section ======= -->
  <x-client.hero3 :info="$info" />

  <main id="main">

    <!-- ======= What We Do Section ======= -->
    <x-client.baca_info :info="$info"/>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
<x-client.footer />
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
<x-client.script />