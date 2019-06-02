<?php

    require "header.php";
?>

    <main>
        
        <?php
            if(isset($_SESSION['userId'])) {
                echo '<a href="draggable/index.html"></a>';
            }
            else {
                echo '<a href="project.php"></a>';
            }
        ?>
    </main>

    <div>
    <div class="jumbotron" id="jumbotron-main">
        <h1 class="display-4" id="display-main">SIMPLE.</h1>
        <p class="lead" id="lead-main">Creative Website Designs</p>
     
        <a class="btn btn-outline-light btn-lg" href="#row-fluid" role="button" id="jumbotron-btn">Learn more</a>
    </div>
</div>

<div class="jumbotron jumbotron-fluid">
        <div class="container">
          
          <h1 class="display-4" id="display-fluid">Design Your Own Website</h1>
          <hr id="hr-fuid">
          <div class="container">
            <div class="row" id="row-fluid">
              <div class="col" >
                <p class="lead lead-fluid" id="lead-fluid-first">Try our new tool to create beautiful websites!</p>
                <p class="lead lead-fluid">Create account</p>
                <p class="lead lead-fluid">Drag and resize elements</p>
                <p class="lead lead-fluid">Click to change colour</p>
              </div>
              <div class="col" id="fluid-col"><img id="fluid-img" src="img/bfly.png" alt="Computer"></div>
             
            </div>
          </div>
        
         
        </div>
</div>

      <div id="mainDiv">
        <div id="boxDiv">
            <div class="cube__face cube__face--front"></div>
            <div class="cube__face cube__face--back"></div>
            <div class="cube__face cube__face--right"></div>
            <div class="cube__face cube__face--left"></div>
            <div class="cube__face cube__face--top"></div>
            <div class="cube__face cube__face--bottom"></div>
        </div>
     </div>

     <div class="row" id="feature-row">
        <div class="col">
            <div class="feature-box" id="feature-box-first">
                <i class="far fa-images"></i>
                
                <h3 class="heading-tertiary">
                  Drag
                </h3>
                <p class="feature-box__text">
                  Drag boxes from one spot to another!
                  Easily draggable elements, just use your mouse.
                </p>
              </div>
        </div>
        <div class="col">
            <div class="feature-box">
                <i class="fas fa-expand"></i>
                <h3 class="heading-tertiary">
                  Resize
                </h3>
                <p class="feature-box__text">
                 Resize boxes however you like!
                 All boxes are easily resizable.
                </p>
              </div>
        </div>
        <div class="col">
            <div class="feature-box">
                <i class="fas fa-image"></i>
                <h3 class="heading-tertiary">
                  Change Color
                </h3>
                <p class="feature-box__text">
                  Click to change the color!
                  Every click means every different random color.
                </p>
              </div>
        </div>
      </div>

      <div class="jumbotron jumbotron-fluid">
          <div class="container">
            
            <h1 class="display-4" id="display-fluid">Try it Today</h1>
            <hr id="hr-fuid-second" >
            <div class="container" id="second-fluid">
             
                 <p class="lead lead-fluid">This is a portfolio webpage</p>
                  <p class="lead lead-fluid">Create an account with any email address or log in with username: "test" and password: "test"</p>
                  <p class="lead lead-fluid">You can change colors on any type of device, however you need a mouse to drag and resize elements</p>
                  <a class="btn btn-info btn-lg" href="#signup-link" role="button" id="second-btn">Sign up!</a>
           
              </div>
            </div>
        </div>

<?php
    
    require "footer.php";

?>