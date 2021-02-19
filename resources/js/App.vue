<template>
  <div id="#app">
    
    <div
      class="d-flex align-items-center flex-column justify-content-center fullscreen bg-dark text-white"
      id="header"
    >
        <div class="nav">
            <img src="images/logo.svg" alt="logo">
        </div>
      <div class="container">
        <div class="row">
          <div class="col-6" style="align-items: center;">
            <h1 class="display-4">Hola.</h1>
            <div>
                <a class="btn-solid-lg" href="#your-link"><i class="fab fa-apple"></i>iOS</a>
                <a class="btn-solid-lg" href="#your-link"><i class="fab fa-google-play"></i>Android</a>
                <a class="btn-solid-lg" href="#your-link"><i class="fab fa-google-play"></i>Directo</a>
            </div>
          </div>
          <div class="col-6">
            <img src="images/header-smartphones.png" alt />
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "App",
  components: {}
};
</script>
<style scoped>
body,
html {
  width: 100%;
  height: 100vh;
}

.fullscreen {
  height: 100vh;
}

.full-header {
    height: 10vh;
}

.logo-image {
  height: 4rem;
}

.nav img {
    height: 4rem;
    position: absolute;
    top: 20px;
    left: 10%;
}

.btn-solid-lg {
	display: inline-block;
	padding: 1.625rem 2.5rem 1.625rem 2.5rem;
	border: 1px solid #00c9db;
	border-radius: 2rem;
	background-color: #00c9db;
	color: #ffffff;
	font-weight: 600;
	font-size: 0.875rem;
	line-height: 0;
	text-decoration: none;
	transition: all 0.2s;
}

.btn-solid-lg:hover {
	border: 1px solid #00c9db;
	background-color: transparent;
	color: #00c9db;
	text-decoration: none;
}

.btn-solid-lg .fab {
	margin-right: 0.5rem;
	font-size: 1.25rem;
	line-height: 0;
	vertical-align: top;
}

.btn-solid-lg .fab.fa-google-play {
	font-size: 1rem;
}

.bg {
  width: 100%;
  height: 100%;
  background-image: url("../../public/images/header-background.jpg");
  background-size: cover;
  background-position: center center;
  z-index: -1;
  position: fixed;
  top: 0;
}

.flex-container {
  background: none;
  width: 100%;
  height: 100%;
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -webkit-flex-direction: column;
  -ms-flex-direction: column;
  flex-direction: column;
  -webkit-box-align: center;
  -webkit-align-items: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-box-pack: center;
  -webkit-justify-content: center;
  -ms-flex-pack: center;
  justify-content: center;
}
.flex-container h1 {
  color: white;
  margin: 0;
  -webkit-transform: translateY(100%);
  -ms-transform: translateY(100%);
  transform: translateY(100%);
  -webkit-transition: all ease-in-out 0.8s;
  transition: all ease-in-out 0.8s;
  text-align: center;
}
.flex-container p.lead {
  color: white;
  font-size: 16px;
  font-weight: 600;
  opacity: 0;
  -webkit-transition: all ease-in-out 0.8s;
  transition: all ease-in-out 0.8s;
  padding: 20px;
  max-width: 500px;
  text-align: center;
  z-index: 9999;
}

.flex-container.waited h1 {
  -webkit-transform: translateY(0);
  -ms-transform: translateY(0);
  transform: translateY(0);
}
.flex-container.waited p.lead {
  opacity: 1;
}
.flex-container.waited .cta {
  -webkit-transform: translateY(0);
  -ms-transform: translateY(0);
  transform: translateY(0);
}

.cta {
  color: rgba(102, 102, 102, 0.7);
  font-size: 20px;
  display: block;
  background: rgba(255, 255, 255, 0.4);
  text-align: center;
  padding: 0.4em;
  line-height: 1.25;
  box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.3);
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
  -webkit-transition: -webkit-transform 0.8s ease-in-out;
  transition: transform 0.8s ease-in-out;
  text-decoration: none;
  -webkit-transform: translateY(-100%);
  -ms-transform: translateY(-100%);
  transform: translateY(-100%);
}
.cta:hover {
  color: #666666;
  box-shadow: 0px 5px 14px rgba(0, 0, 0, 0.6);
  background: white;
}
</style>