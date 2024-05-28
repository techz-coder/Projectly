<?php 
include "inc/header.php";
?>




  <!-- slider starting -->
  <!-- <div class="slider_parent">
    <div id="carouselExampleFade" class="carousel slide carousel-fade">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/slider.png" class="d-block w-100" alt="...">
          <div class="overlay-text">
            <h1 class="font-weight-light">THE ULTIMATE PROJECT
              <br>
              MANAGEMENT TOOL
              UNVEILED!
            </h1>
          </div>
        </div>
        <div class="carousel-item">
          <img
            src="https://images.unsplash.com/photo-1531403009284-440f080d1e12?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8cHJvamVjdCUyMG1hbmFnZW1lbnR8ZW58MHx8MHx8fDA%3D"
            class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="https://toggl.com/blog/wp-content/uploads/2020/12/web-design-project-management-software.jpg"
            class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div> -->
  <!-- slider ending -->






  <!-- Bootstrap carousel example -->
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <!-- <img class="d-block w-100" src="https://via.placeholder.com/800x400" alt="First slide"> -->
        <img class="d-block w-100" src="img/slider1.png" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="img/slider2.png" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="img/slider3.png" alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>






  <!-- about modules starting -->
  <div class="container-fluid">
    <div class="row py-3" style="background-color: #0C2461">
      <div class="col text-light text-center col-lg-4">
        <h5>50+ Modules</h5>
      </div>
      <div class="col text-light text-center col-lg-4">
        <h5>500+ Happy clients</h5>
      </div>
      <div class="col text-light text-center col-lg-4">
        <h5>40+ Industries Served</h5>
      </div>
    </div>
  </div>
  <!-- about modules ending -->

  <!-- ultimate possibilities starting -->
  <div class="container mt-5 mb-5 text-center text_light_theme">
    <div class="row">
      <div class="col col-lg-6 col-sm-12">
        <h6 style="border-bottom: 2px solid #0C2461; " class="py-3"><i>Unlimited Possibilities...</i></h6>
        <h3 class="mt-3">AUTOMATE YOUR WORK <br> PROCESS FASTER</h3>
      </div>
      <div class="col col-lg-6 col-sm-12 text-center">
        <p>Discover a world where ideas turn into achievements seamlessly. Projektly is not just another project
          management tool—it’s your team’s ultimate ally in turning every project into a masterpiece. Unite your team,
          streamline your processes, and easily celebrate every milestone!</p>
        <a href="#" class="btn" id="get_started_btn">Get Started</a>
      </div>
    </div>
  </div>
  <!-- ultimate possibilities ending -->

  <!-- cards fades starting -->
  <!-- card 1 starting -->
  <div class="cards_parent py-5 mt-2 mb-2">
    <div class="container">
      <div class="row flex">
        <div class="col">
          <h6>
            <i>visualize,manage and succeed...</i>
            <h3 class="mt-3 mb-3">
              Kanban Board Help You To Streamline Workflow & Task Management For Teams
            </h3>
            <p>Visuals are powerful, and Kanban boards are a testament to that. They offer a visual representation of
              tasks, their statuses, and the workflow. It's an intuitive tool for monitoring progress, identifying
              bottlenecks, and ensuring the project moves at the desired pace. It enhances efficiency and instills a
              sense
              of accomplishment among team members.</p>
          </h6>
        </div>
        <div class="col">
          <section id="animated-section">
            <div class="animated-div">
              <img src="https://laravel-translate.s3.amazonaws.com/Projektly/projektly+img/features/KanbanBoard.webp"
                alt="" width="550">
            </div>
          </section>
        </div>
      </div>
    </div>
  </div>
  <!-- card 1 ending -->

  <!-- card 2 starting -->
  <div class="py-5 mt-2">
    <div class="container">
      <div class="row flex">
        <div class="col">
          <section id="animated-section">
            <img src="https://laravel-translate.s3.amazonaws.com/Projektly/projektly+img/features/GanttChart.webp"
              alt="" width="600" class="animated-image">
          </section>
        </div>
        <div class="col" id="theme_light_text">
          <h6>
            <i>Project Planning Made Simple......</i>
          </h6>
          <h3 class="mt-3 mb-3">
            Effortlessly Plan, Track, & Manage Projects With Gantt Charts.
          </h3>
          <p>Gantt Charts are visual timelines that display the start, duration, and end of tasks within a project.
            They are crucial for scheduling, resource allocation, and monitoring progress. With Gantt charts, managers
            can anticipate and mitigate delays, ensuring the project stays on track and within the stipulated time
            frame.</p>
        </div>
      </div>
    </div>
  </div>
  <!-- card 2 ending -->

  <!-- card 3 starting -->
  <div class="cards_parent py-5 mt-2">
    <div class="container">
      <div class="row flex">
        <div class="col">
          <h6>
            <i>Maximize Project Efficiency......</i>
            <h3 class="mt-3 mb-3">
              Optimize Your Project Success Through Effective Resource Planning.
            </h3>
            <p>Every project is a symphony of resources - be it human, financial, or material. Project resource planning
              ensures that all these resources are optimally allocated and utilized. It aids in anticipating needs,
              preventing resource conflicts, and ensuring that the project does not falter due to a lack of resources.
            </p>
          </h6>
        </div>
        <div class="col">
          <img src="https://laravel-translate.s3.amazonaws.com/Projektly/projektly+img/features/ResPlanning.webp" alt=""
            width="600">
        </div>
      </div>
    </div>
  </div>
  <!-- card 3 ending -->

  <!-- card 4 starting -->
  <div class="py-5 mt-2">
    <div class="container">
      <div class="row flex">
        <div class="col">
          <img src="https://laravel-translate.s3.amazonaws.com/Projektly/projektly+img/features/BugReporting.webp"
            alt="" width="600">
        </div>
        <div class="col" id="theme_light_text2">
          <h6>
            <i>Bug Reporting For Better Software......</i>
          </h6>
          <h3 class="mt-3 mb-3">
            Bug Reporting For Smoother Software Development
          </h3>
          <p>A bug report system is invaluable in software development or any project involving digital platforms. It
            ensures that any issues or glitches are promptly identified, reported, and resolved. This ensures that the
            project's quality is maintained at optimum levels, enhancing the user experience and ensuring project
            objectives are flawlessly met.</p>
        </div>
      </div>
    </div>
  </div>
  <!-- card 4 ending -->

  <!-- card 5 starting -->
  <div class="cards_parent py-5 mt-2">
    <div class="container">
      <div class="row flex">
        <div class="col" id="theme_light_text4">
          <h6>
            <i>File sharing For Seamless Collaboration......</i>
          </h6>
          <h3 class="mt-3 mb-3">
            Empower your team with a simple and efficient file-sharing solution that enhances collaboration and boosts
            productivity
          </h3>
          <p>Imagine the ease of having all necessary documents, images, and files at your fingertips. File sharing
            ensures that all project-related files are easily accessible, organized, and secure. It eliminates the
            hassles of lengthy email threads and lost files, promoting efficiency and reducing the risk of delays due
            to missing information.</p>
        </div>
        <div class="col">
          <img src="https://laravel-translate.s3.amazonaws.com/Projektly/projektly+img/features/FileSharing.webp" alt=""
            width="600">
        </div>
      </div>
    </div>
  </div>
  <!-- card 5 ending -->

  <!-- card 6 starting -->
  <div class="py-5 mt-2">
    <div class="container">
      <div class="row flex">
        <div class="col">
          <img src="https://laravel-translate.s3.amazonaws.com/Projektly/projektly+img/features/Task.webp" alt=""
            width="600">
        </div>
        <div class="col" id="theme_light_text3">
          <h6>
            <i>Task Management For Enhanced Productivity......</i>
            <h3 class="mt-3 mb-3">
              Simplify your work life by effectively organizing tasks with our intuitive task management solution
            </h3>
            <p>Task Management is the backbone of any project management tool. It ensures that tasks are organized,
              assigned, and tracked from initiation to completion. With task management, teams can set priorities,
              deadlines, and milestones, ensuring everyone is focused and aligned. It helps break down the complex
              project into manageable tasks, reducing overwhelm and enhancing productivity. Assign tasks seamlessly with
              Projektly.</p>
          </h6>
        </div>
      </div>
    </div>
  </div>
  <!-- card 6 ending -->
  <!-- cards fades ending -->

  <!-- get a free trial starting-->
  <div class="free-trial text-center">
    <div class="container pt-5">
      <div class="row">
        <div class="col">
          <h3>
            Join The Projektly Community Today & Start Transforming Your Projects Into Success Stories!
          </h3>
          <a href="" class="btn mt-4" style="border: 1px solid #fff; color:#fff;">
            Get A Free Trial
          </a>
        </div>
        <div class="col">
          <img src="https://laravel-translate.s3.amazonaws.com/Projektly/projektly+img/contact/A-150px.svg" alt=""
            width="250">
        </div>
      </div>
    </div>
  </div>
  <!-- get a free trial ending-->

  <!-- benifits of using the projektly starting -->
  <div class="col text-center mt-5 mb-5">
    <h2 class="">BENEFITS OF USING "THE PROJEKTLY"</h2>
  </div>

  <!-- slider starting -->

  <div class="wrapper">
    <div class="slider">

      <!-- slider one starting -->
      <div class="slide row text-center p-4" style="background-color: #F0F2F8;">
        <div class="col">
          <h3>Document Management</h3>
          <p style="color:gray;">In the project management game, Document Management stands as the epitome of
            organization and accessibility. Every piece of information, every crucial document, is
            systematically organized, stored, and easily retrievable. Gone are the days of sifting through
            endless files and folders. With Document Management, every piece of data is a click away, ensuring
            decisions are informed, timely, and efficient. It’s not just a feature; it’s your project’s
            librarian - precise, orderly, and always at service.</p>
        </div>
        <div class="col">
          <img src="img/docsmanage.png" alt="" width="500">
        </div>
      </div>
      <!-- slider one ending -->

      <!-- slider two starting -->
      <div class="slide row p-4">
        <div class="col">
          <img src="img/central-communication.png" alt="" width="500">
        </div>
        <div class="col">
          <h3>Centerlized Communication</h3>
          <p style="color:gray;">During project execution, Communication is the pleasant tune that binds every
            note and every instrument. Centralized Communication ensures that every conversation is stored
            centrally and every team member is on the same page, irrespective of geographical location. The
            bridge connects diverse teams, fostering unity and synergistic execution.</p>
        </div>
      </div>
      <!-- slider two ending -->

      <!-- slider three starting -->
      <div class="slide row p-4" style="background-color: #F0F2F8;">
        <div class="col">
          <h3>Improved Efficiency</h3>
          <p style="color:gray;">In project management, improved efficiency isn’t just desired. It’s revered. Features
            tailored to streamline processes, eliminate redundancies, and optimize resources are not just enhancements;
            they are the silent engines propelling your project toward timely and quality execution.</p>
        </div>
        <div class="col">
          <img src="img/efficiency.png" alt="" width="500">
        </div>
      </div>
      <!-- slider three ending -->

      <!-- slider four starting -->
      <div class="slide row p-4">
        <div class="col">
          <img src="img/BetterPlanning.png" alt="" width="500">
        </div>
        <div class="col">
          <h3>Better Planning and Scheduling</h3>
          <p style="color:gray;">In the art of project execution, planning, and scheduling are the brushes painting the
            canvas of efficiency and effectiveness. These features bring predictability and structure, ensuring every
            task and every milestone is clearly defined, assigned, and tracked. They ensure that the project sails
            smoothly towards its destination.</p>
        </div>
      </div>
      <!-- slider four ending -->

      <!-- slider five starting -->
      <div class="slide row p-4" style="background-color: #F0F2F8;">
        <div class="col">
          <h3>Enhanced Collaboration</h3>
          <p style="color:gray;">Enhanced Collaboration is not just a feature. It’s a culture. It ensures that every
            voice is heard, every idea is considered, and the collective wisdom of the team is harnessed to navigate the
            complex terrains of project execution. It’s the magic wand that transforms diversity into innovation.</p>
        </div>
        <div class="col">
          <img src="img/Collaboration.png" alt="" width="500">
        </div>
      </div>
      <!-- slider five ending -->

      <!-- slider six starting -->
      <div class="slide row">
        <div class="col">
          <img src="img/IndepthAnalytics.png" alt="" width="500">
        </div>
        <div class="col">
          <h3>In-Depth Analytics</h3>
          <p style="color:gray;">In decision-making, data is king, and In-depth Analytics is the crown. It ensures that
            every decision and every strategy is backed by data, eliminating guesswork and fortifying accuracy. With
            analytics, trends are noticeable, forecasts are accurate, and strategies are precision-targeted. In-depth
            Analytics offers insights and foresight and ensures your project is managed and orchestrated.</p>
        </div>
      </div>
      <!-- slider six ending -->
    </div>


    <div class="text-center mt-5 slider2btn">
      <button id="prev" class="btn">Prev</button>
      <button id="next" class="btn">Next</button>
    </div>
  </div>

  <!-- slider ending -->

  <!-- benifits of using the projektly ending -->

  <!-- offers starting -->
  <div class="text-center mt-5 mb-5" style="color: #0C2461;">
    <h2>Save Big with Projektly</h2>
  </div>
  <!-- plans starting -->

  <div class="container">
    <div class="row">
      <div class="col">
        <div class="card text-light shadow-lg" style="background-color: gray;">
          <div class="card-header">

            <h4 class="text-center">Pro Plan</h4>
            <hr>
            <div class="row mt-3">
              <div class="col">
                $90
              </div>
              <div class="col">
                <select name="" id="" class="form-control">
                  <option value="">$ Dollor</option>
                  <option value=""> &#8377; INR</option>
                </select>
              </div>
            </div>


            <h4>Pro Plan Includes:</h4>
            <div class="row">
              <div class="col">
                <ul>
                  <li>1 Workspace</li>
                  <li>12 GB Storage</li>
                  <li class="li-x">&#x2716; Project Management</li>
                  <li>File Sharing</li>
                  <li>Web Hook</li>
                  <li class="li-x">&#x2716; Payment Gateway</li>
                </ul>
              </div>
              <div class="col">
                <ul>
                  <li>White Label</li>
                  <li class="li-x">&#x2716; CRM</li>
                  <li class="li-x">&#x2716; HRM</li>
                  <li class="li-x">&#x2716; Accounting</li>
                  <li>Product and services</li>
                  <li>Internal Message</li>
                </ul>
              </div>
            </div>

            <div class="text-center mb-3">
              <a href="#" class="btn border text-light">Get Started</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="col">
          <div class="card shadow-lg" style="background-color: #0C2461; color: #fff;">
            <div class="card-header">


              <h4 class="text-center">PROJEKTLY EXTRA ORDINARY PLAN</h4>
              <hr>
              <div class="row">
                <div class="col">
                  $135
                </div>
                <div class="col">
                  <select name="" id="" class="form-control">
                    <option value="">$ Dollor</option>
                    <option value=""> &#8377; INR</option>
                  </select>
                </div>
              </div>


              <h4>Pro Plan Includes:</h4>
              <div class="row">
                <div class="col">
                  <ul>
                    <li>1 Workspace</li>
                    <li>50 GB Storage</li>
                    <li>Project Management</li>
                    <li>File Sharing</li>
                    <li class="li-x">&#x2716; Web Hook</li>
                    <li>Payment Gateway</li>
                  </ul>
                </div>
                <div class="col">
                  <ul>
                    <li class="li-x">&#x2716; White Label</li>
                    <li class="li-x">&#x2716; CRM</li>
                    <li>HRM</li>
                    <li>Accounting</li>
                    <li class="li-x">&#x2716; Product and services</li>
                    <li>Internal Message</li>
                  </ul>
                </div>
              </div>

              <div class="text-center mb-3">
                <a href="#" class="btn border text-light">Get Started</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="col">
          <div class="card text-light shadow-lg" style="background-color: gray;">
            <div class="card-header">


              <h4 class="text-center">Premium Plan</h4>
              <hr>
              <div class="row mt-3">
                <div class="col">
                  $159
                </div>
                <div class="col">
                  <select name="" id="" class="form-control">
                    <option value="">$ Dollor</option>
                    <option value=""> &#8377; INR</option>
                  </select>
                </div>
              </div>


              <h4>Pro Plan Includes:</h4>
              <div class="row">
                <div class="col">
                  <ul>
                    <li>1 Workspace</li>
                    <li>50 GB Storage</li>
                    <li>Project Management</li>
                    <li>File Sharing</li>
                    <li>Web Hook</li>
                    <li>Payment Gateway</li>
                  </ul>
                </div>
                <div class="col">
                  <ul>
                    <li>White Label</li>
                    <li>CRM</li>
                    <li>HRM</li>
                    <li>Accounting</li>
                    <li>Product and services</li>
                    <li>Internal Message</li>
                  </ul>
                </div>
              </div>

              <div class="text-center mb-3">
                <a href="#" class="btn border text-light">Get Started</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- plans ending -->

  <!-- offers ending -->


  <!-- login and registeration starting -->

  <hr class="mt-5">

  <div class="container-fluid">
    <div class="row text-center">
      <div class="col">
        <h6>See Personalized Settings</h6>
        <a href="login.php" class="btn btn-warning mt-3 mb-3">Sign in</a>
        <h6 class="text-dark">New User <a href="" style="text-decoration: none;">Start Here</a></h6>

        <!-- it for later when add google api for login starting -->
        <!-- or <br>
          <div class="text-center mt-4">
            <a href="google-oauth.php" style="width: 10rem; padding: 1rem; text-decoration: none;" class="border rounded text-dark">
              Login with Google <img style="padding-left: 10px;" src="img/google-icon.png" alt="" width="30">
            </a>
          </div> -->
          <!-- it for later when add google api for login ending -->
      </div>
    </div>
  </div>

  <hr style="margin-top: 40px;">

  <!-- login and registeration ending -->


  <!-- money back gurantee starting -->

  <div class="container-fluid mt-5 p-4" style="background-color: #0C2461;">
    <div class="row text-center text-light">
      <div class="col">
        <img src="https://laravel-translate.s3.amazonaws.com/Projektly/projektly+img/benefits/Guarantee.png" alt=""
          width="200">
        <!-- </div>
      <div class="col text-light"> -->
        <h3>7-Day Money back gurantee</h3>
        <p>Not fully satisfied with Projektly? We will refund 100% of your money within 7 days from the day of your
          purchase. Email us at info@projektly.com and we will issue your refund immediately.</p>
      </div>
    </div>
  </div>

  <!-- money back gurantee ending -->

<?php 
include "inc/footer.php";
?>