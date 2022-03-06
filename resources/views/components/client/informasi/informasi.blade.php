

<style>
  #hero2 {
  width: 100%;
  height: 80vh;
  background: url(@if($tentang == NULL) @else {{asset('gambar_tentang/'. $tentang->gambar)}} @endif) center center;
  background-size: cover;
  position: relative;
  margin-top: 70px;
  padding: 0;
}
#hero2:before {
  content: "";
  background: rgba(56, 64, 70, 0.7);
  position: absolute;
  bottom: 0;
  top: 0;
  left: 0;
  right: 0;
}
#hero2 .container {
  z-index: 2;
}
#hero2 h1 {
  margin: 0 0 10px 0;
  font-size: 48px;
  font-weight: 700;
  line-height: 56px;
  color: #fff;
}
#hero2 h1 span {
  border-bottom: 4px solid #3498db;
}
#hero2 h2 {
  color: rgba(255, 255, 255, 0.8);
  margin-bottom: 30px;
  font-size: 24px;
}
#hero2 .btn-get-started {
  font-family: "Poppins", sans-serif;
  font-weight: 400;
  font-size: 13px;
  letter-spacing: 2px;
  display: inline-block;
  padding: 12px 28px;
  border-radius: 4px;
  transition: ease-in-out 0.3s;
  color: #fff;
  background: #3498db;
  text-transform: uppercase;
}
#hero2 .btn-get-started:hover {
  background: #4ea5e0;
}
</style>
<section id="hero2" class="d-flex flex-column justify-content-center align-items-center">
    <div class="container text-center text-md-left" data-aos="fade-up">
      <h1>Informasi TerUpdate</h1>
    </div>
  </section><!-- End Hero -->
