<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width", initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <title>University Project</title>
</head>

<body>
<a name="top"></a>

  <!-- Navbar -->

  <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
    <div class="container">
      <a href="#" class="navbar-brand">UNIFY</a>

      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navmenu">
          <span class="navbar-toggler-icon"></span>
        </button>
      <div class="collapse navbar-collapse" id="navmenu">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a href="#events" class="nav-link">EVENTS</a>
          </li>
          <li class="nav-item">
            <a href="#questions" class="nav-link">FAQ</a>
          </li>
          <li class="nav-item">
            <a href="login.php" class="nav-link">LOGIN</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Showcase -->
  <section class="bg-dark text-light p-5 text-center">
    <div class="container">
      <div class="d-sm-flex justify-content-center" align-items-center>
        <div class="pt-5">
          <h1><span style="color:#d63384;">Plan.</span> <span>Organize.</span> <span style="color:#0d6efd; ">Connect.</span></h1>
          <p class="lead">All students. All Universities. Create Events and socialize. All your social gatherings in one organized place.</p>
          <button
            class="btn btn-primary btn-lg"
            data-bs-toggle="modal"
            data-bs-target="#account">Register Now</button>
        </div>
          <img class="img-fluid d-none d-sm-block" width="300" height="300" src="logo.png" alt="">
      </div>
    </div>
  </section>


  <!-- Showevents -->
<section class="bg-dark text-light p-5">

  <div class="container">
  <div class="row">
    <div class="col-md">
      <img class="img-fluid d-none d-sm-block" src="rso.jpg" alt="">
    </div>
    <div class="col-md">
      <h3 style="padding-top:130px; padding-left:70px;" class="mb-3 mb-md-0 pb-2">Register your group and start an event!</h3>
      <p style="padding-left:70px;"class="head">With you and 4 other students, a Registerd Student Organization (RSO) can be made with your college emails so you can create events for your group.</p>
    </div>
  </div>
</div>

<div class="container pt-5">
<div class="row">
  <div class="col-md">
    <h3 style="padding-top:130px; padding-right:70px;" class="mb-3 mb-md-0 pb-2">Any type of Event can be made!</h3>
    <p style="padding-right:70px;"class="head">Create or join all types of events such as Social, Fundraising, Tech Talks etc. They can be made public for everyone, only open to specific University or even private for just you and your RSO.</p>
  </div>
  <div class="col-md">
    <img class="img-fluid d-none d-sm-block" src="home_img1.jpg" alt="">
  </div>
</div>
</div>

<div class="container pt-5">
<div class="row">
  <div class="col-md">
    <img class="img-fluid d-none d-sm-block" src="party.png" alt="">
  </div>
  <div class="col-md">
    <h3 style="padding-top:130px; padding-left:70px;" class="mb-3 mb-md-0 pb-2">Engage with friends and other students!</h3>
    <p style="padding-left:70px;"class="head">Users can comment and rate any published event. Share how was the event and any special moments you had. It's also customisable as you can edit, or remove comments/ratings. The site also offers Social Network Integration!</p>
  </div>
</div>
</div>
</section>

<!--Questions-->
<section id="questions" class="bg-dark text-light p-5">
  <div class="container">
    <h2 class="text-center mb-4">Frequently Asked Questions (FAQ)</h2>

<!--question 1-->
    <div class="accordion accordion-flush" id="questions">
      <div class="accordion-item bg-secondary">
        <h2 class="accordion-header">
        <button
          class="accordion-button collapsed"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#question1">
        What if I don't see my University?
      </button>
    </h2>
    <div id="question1" class="accordion-collapse collapse" data-bs-parent="#questions">
      <div class="accordion-body">Universities are usually added by the Super Admin. If you want your School to participate then please send an E-mail (123@email.com). Once your request is approved (usually within 1-2 weeks), you will be able to create an RSO for your school and participate in events. In the mean time feel free to access any public event listed.</div>
    </div>
  </div>

<!--Question 2-->
  <div class="accordion-item bg-secondary">
    <h2 class="accordion-header" id="questions">
      <button
        class="accordion-button collapsed"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#question2">
        How do Registered Student Organizations work?
      </button>
    </h2>
    <div id="question2" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">RSO's can be created by any student from a University. There needs to be at least 5 students and one of those students will be marked as an Admin. Any admins can create an event for their RSO. Events can be created to only your RSO can see or an event can be made public with Super Admin's approval. All students creating an RSO MUST use their Schools E-mail.</div>
    </div>
  </div>

<!--Question 3-->
  <div class="accordion-item bg-secondary">
    <h2 class="accordion-header" id="questions">
      <button
        class="accordion-button collapsed"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#question3">
        I am not in an RSO. Can I still make an event?
      </button>
    </h2>
    <div id="question3" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">Unfortunately regular students cannot create events. Only admins that belong to an RSO can. Students can still join public events and participate through comments and rating any event you are interested in.</div>
    </div>
  </div>
</div>

  </div>
</section>

<section class="bg-dark text-light p-5">
  <div class="container">
    <div class="d-sm-flex justify-content-center">
      <div><h3 style="padding-top:35px;">UNIFY</h3></div>
      <div><a href="#top"><img class="img-fluid d-none d-sm-block" width="100" height="100" src="logo.png" alt=""></a></div>
      <footer><div><p style="padding-top:45px; padding-left:10px;">Copyright &copy; 2022</p></div></footer>
    </div>
  </div>
</section>

<!-- register button code-->

<div class="modal fade" id="account" tabindex="-1" role="dialog" aria-labelledby="accountLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="accountLabel">Register</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>


<form action="insertcode.php" method="POST">


      <div class="modal-body">
        <p class="lead">Create Account</p>

          <div class= "mb-3">
            <label for="name" class="col-form-label">Name:</label>
            <input type="text" name = "name" class="form-control" id="name"/>
          </div>

          <div class= "mb-3">
            <label for="user-name" class="col-form-label">User Name:</label>
            <input type="text" name="uname" class="form-control" id="uname"/>
          </div>

          <div class="mb-3">
      <label class="mr-sm-2" for="inlineFormCustomSelect">School</label>
      <select class="custom-select mr-sm-2" id="uid" name="uid">
        <option selected>Choose...</option>
        <option value="003954">University Of Central Florida (003954)</option>
        <option value="001489">Florida State University (001489)</option>
        <option value="001535">University Of Florida (001535)</option>
        <option value="002325">University Of Miami (002325)</option>
        <option value="001520">Seminole State College (001520)</option>
      </select>
    </div>

          <div class= "mb-3">
            <label for="email" class="col-form-label">School E-mail:</label>
            <input type="text" name = "email" class="form-control" id="email"/>
          </div>

          <div class= "mb-3">
            <label for="password" class="col-form-label">Password:</label>
            <input type="password" name="password" class="form-control" id="password"/>
          </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button value= "Submit" type="submit" id = "Submit" name = "Submit" class="btn btn-primary">Create</button>
      </div>

    </form>


    </div>
  </div>
</div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>
