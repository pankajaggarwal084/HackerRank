<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Questions</title>
   <link rel="stylesheet" href="{{asset('css/question.css')}}">
   <link rel="icon" type="image/x-icon" href="codeforlifelogo.JPG">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300&display=swap" rel="stylesheet">


</head>
<body>
  <header id="header">
    <div class="dropdown-bars">
            <i class="fa fa-bars" id="bars" aria-hidden="true"></i> 
        <div class="dropdown-content-bars">
                    <a href="/codeforlife/login-signup-profile/profile.php#">Profile</a>
                    <a href="/codeforlife/practice/practice.html">Practice</a>
                                    <a href="/codeforlife/compete/compete.html">Compete</a>
                                    <a href="/codeforlife/leaderboard/leaderboard.php">Leaderboard</a>
                    <a href="#">Settings</a>
                    <a href="/codeforlife/login-signup-profile/logout.php">Logout</a>
        </div>
    </div> 
    <a href="/codeforlife/practice/practice.html"><img class="img" src="/codeforlife/images/codeforlifelogo.jpg" alt="Sorry!image cannot be loaded"></a>
    <p class="title">CODING STAR</p>
    <ul class="list">
            <li class="li-item"><a class="nav-links" href="/codeforlife/practice/practice.html">practice</a></li>
            <li class="li-item"><a class="nav-links"href="/codeforlife/compete/compete.html">compete</a></li>
            <li class="li-item"><a class="nav-links"href="/codeforlife/leaderboard/leaderboard.php">leaderboard</a></li>
    </ul>
    <div class="search">
        <i class="fa fa-search" id="search-icon" aria-hidden="true"></i>
        <input type="text" id="search-bar" placeholder="Search">
    </div>
    <div class="icons">
        <i class="fa fa-comment-o" id="message" aria-hidden="true"></i>
        <i class="fa fa-bell-o"    id="comment" aria-hidden="true"></i>
        <i class="fa fa-user-o" id="user" aria-hidden="true"></i>
    </div>
    <div class="dropdown">
        <button class="username">username 
        <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
                <a href="/codeforlife/login-signup-profile/profile.php#">Profile</a>
                <a href="#">Settings</a>
                <a href="/codeforlife/login-signup-profile/logout.php">Logout</a>
        </div>
    </div> 
</header>
  <h1> <b>Problem Solving <b></h1>
  <div id="main">
      <div id="challenges">
        <div class="challenge-content">
          <div>
            <h2> Angry Professor</h2>
            <span>Easy, Max Score : 20, Success Rate : 98.43%</span>
          </div>
          <a id="solve" href="/laravel/public/problem">Solve Challenge</a>
        </div>
        <div class="challenge-content">
          <div>
            <h2> Viral Advertising</h2>
            <span>Medium, Max Score : 25, Success Rate : 98.52%</span>
          </div>
          <a id="solve" href="#">Solve Challenge</a>      
        </div>
        <div class="challenge-content">
          <div>
            <h2> Save the Prisoner!</h2>
            <span>Easy, Max Score : 15, Success Rate : 78.13%</span>
          </div>
          <a id="solve" href="#">Solve Challenge</a>
        </div>
        <div class="challenge-content">
          <div>
            <h2> Sequence Equation</h2>
            <span>Hard, Max Score : 40, Success Rate : 56.36%</span>
          </div>
          <a id="solve" href="#">Solve Challenge</a>
        </div>
        <div class="challenge-content">
          <div>
            <h2> Find Digits</h2>
            <span>Medium, Max Score : 25, Success Rate : 96.17%</span>
          </div>
          <a id="solve" href="#">Solve Challenge</a>
        </div>
        <div class="challenge-content">
          <div>
            <h2> Library Fine</h2>
            <span>Easy, Max Score : 15, Success Rate : 98.38%</span>
          </div>
          <a id="solve" href="#">Solve Challenge</a>
        </div>
      </div>

      <div id="filter">
        <div class="options">
          <h3>STATUS</h3>
          <div>
            <input type="checkbox" id="solved" name="status" value="solved">
            <label for="solved">Solved</label>
          </div>
          <div>
            <input type="checkbox" id="unsolved" name="status" value="unsolved">
            <label for="unsolved">Unsolved</label>
          </div>
        </div>
        <div class="options">
          <h3>DIFFICULTY</h3>
          <div>
            <input type="checkbox" id="easy" name="difficulty" value="easy">
            <label for="easy">Easy</label>
          </div>
          <div>
            <input type="checkbox" id="medium" name="difficulty" value="medium">
            <label for="medium">Medium</label>
          </div>
          <div>
            <input type="checkbox" id="hard" name="difficulty" value="hard">
            <label for="hard">Hard</label>
          </div>
        </div>
      </div>

  </div>
</body>
</html>
