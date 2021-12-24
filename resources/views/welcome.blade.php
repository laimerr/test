<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
      <meta charset="utf-8">
      <title>Lisnic Roman dev</title>
      <link rel="stylesheet" type="text/css" href="css/reset.css" />
      <link rel="stylesheet" type="text/css" href="css/app.css" />
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
  </head>
  <body>
      <div class="container">
        <div class="header">
          <div class="title-block">
          <h1 class="title">Web-development:Lisnic Roman</h1>
        </div>
        <div class="userpic">
        </div>
      </div>
        <div class="nav">
        <ul>
          <li><a href="#"><span class="lng-info">Обо мне</span></a></li>
          <li><a href="#"><span class="lng-skill">Навыки и умения</span></a></li>
          <li><a href="#"><span class="lng-contact">Контактная страница</span></a></li>
          <select onchange="()=>alert('123')" class="change-lang">
              <option value="ru">RU</option>
              <option value="en">EN</option>
              <option value="ro">RO</option>
            </select>
        </div>
        <div class="content-wrapper">
          <div class="content">
            <h3 class="lng-product">Обо мне:</h3>
            <p class="more">В данный момент ищу работу на которой мне позволят показать себя
              и раскрыть свои потенциальные возможности, опыта в сфере IT нет) но, НО!
              есть огромное количество мотивации, желания начать работать и развиваться
              в этой сфере, понимаю что многих работадателей может испугать неопытный студент
              и заставит задаться простым логичным вопросом "Зачем мне брать на работу неопытного студента, когда есть куча ребят с опытом"
              Отвечу прямо: Я лучший в своём деле, я сильный перфекционист, я люблю всё доводить до идеала.
          </div>
          <div class="sidebar">
            <h3 class="description">Языки</h3>
            <ul class="languages">
              <details>
              <summary>Русский язык</summary>
              <li>Родной язык</li>
            </details>
            <details>
              <summary>Limba română</summary>
              <li>Limba materna</li>
            </details>
            <details>
                <summary>English lang</summary>
                <li>Presently B1</li>
              </details>
          </div>
        </div>
        <div class="skills">
          <h3>Навыки и умения:</h3>
          <div class="skills-walp">
            <ul>
              <p>HTML5</p>
              <p>CSS</p>
              <p>Python 3.7+</p>
              <p>Assembly/
              selection comp</p>
              <p>PHP</p>
              <div class="skills-comm">
                  <ol>
                    <li>Коммуникация</li>
                    <li>Гибкость</li>
                    <li>Лидерство</li>
                    <li>Командная работа</li>
                    <li>Пунктуальность</li>
            </div>
    </div>
  </div>
  <div class="w3-container">
  <section class="contact">
    <div class="content">
      <h3>Связаться со мной</h3>
        <p>Вы можете связаться со мной если вам понравилась моя онлайн визитка,
          я постараюсь вам непременно ответить.</p>
  <div class="contactInfo">
      <div class="box">
        <div class="text">
            <h3>Address</h3>
            <p>Aleco Russo 55/3, <br>Moldova,Chisinau<br>MD-5000</p>
          </div>
        </div>
        <div class="box">
          <div class="text">
            <h3>Phone</h3>
            <p>+37360871069</p>
          </div>
        </div>
        <div class="box">
          <div class="text">
          <h3>Email</h3>
          <p>zlaimerz@gmail.com</p>
        </div>
      </div>
    </div>
    <div class="contactForm">
      <form action="{{ route('send.email') }}" method="post">
        @csrf
        @if(session()->has('message'))
          <div class="alert alert-success">
        {{ session()->get('message') }}
      </div>
    </div>
      @endif

      <div class="wrap-input100 validate-input" data-validate = "Name is requred">
        <input class="input100" name="name" type="text" placeholder="Name">

      @error('name')
        <span class="text-danger"> {{ $message }} </span>
      @enderror
      </div>

      <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Email">
          </div>
					<div class="wrap-input100 validate-input" data-validate = "Message is required">
						<textarea class="input100" name="content" placeholder="Message"></textarea>
                                        <span class="focus-input100"></span>
                                        @error('content')
                                           <span class="text-danger"> {{ $message }} </span>
                                         @enderror
                                        </div>

					<div class="container-contact100-form-btn">
						<button type="submit" class="contact100-form-btn">
							Send
						</button>
					</div>

      </form>
    </div>
  </div>
  </div>
  </div>
      <script src="js/lang.js"></script>
      <script src="js/app.js"></script>

      <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
      <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-23581568-13');
      </script>
  </body>
</html>
